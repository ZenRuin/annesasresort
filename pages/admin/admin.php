<?php
    try {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }

    // if (!isset($_SESSION['admin_id'])) {
    //     header("Location: index.php?action=home");
    //     exit;
    // }    

    $stmt = $pdo->prepare("SELECT name, email FROM admins WHERE id = :id");
    $stmt->bindParam(':id', $_SESSION['admin_id']);
    $stmt->execute();
    $admin = $stmt->fetch();
    
    // Define the booking count query
    $bookingsQuery = "SELECT COUNT(*) as count FROM bookings";
    $countResult = $pdo->query($bookingsQuery);
    
    // Define the total payment query
    $totalPaymentSql = "SELECT SUM(payment) as totalPayment FROM bookings WHERE status!= 'efund'";
    $totalPaymentResult = $pdo->query($totalPaymentSql);
    
    // Define the recent bookings query
    $recentBookingsSql = "SELECT clientname, payment, status FROM bookings WHERE status!= 'efund'";
    $recentBookingsResult = $pdo->query($recentBookingsSql);
    
    // Define the recent customers query
    $recentCustomersSql = "SELECT clientname, City FROM bookings";
    $recentCustomersResult = $pdo->query($recentCustomersSql);
    
    // Define the customers query
    $customersSql = "SELECT clientname, City, payment FROM bookings WHERE status!= 'efund'";
    $customersResult = $pdo->query($customersSql);
?>

<div>
    <!-- main -->
    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>

            <div class="Welcome">
                <h3>Welcome back, Admin!</h3>
            </div>
        </div>

        <!-- DASHBOARD -->
        <div class="dashboard" id="dashboard">
            <!-- status update -->
            <div class="cardbox">
                <a href="">
                    <div class="card">
                        <div>
                        <?php
                            if ($countResult) {
                                $countRow = $countResult->fetch(PDO::FETCH_ASSOC);
                                $bookingCount = $countRow['count'];
                                // Display the count
                                echo '
                                    <div class="numbers">'. $bookingCount. '</div>
                                    <div class="cardname">Bookings</div>';
                            }
                    ?>
                        </div>
                        <div class="iconbx">
                            <ion-icon name="bag-handle-outline"></ion-icon>
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="card">
                        <div>
                            <div class="numbers">No Messages Yet!</div>
                            <div class="cardname">Messages</div>
                        </div>
                        <div class="iconbx">
                            <ion-icon name="chatbubbles-outline"></ion-icon>
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="card">
                        <div>
                        <?php
                            if ($totalPaymentResult) {
                                $totalPaymentRow = $totalPaymentResult->fetch(PDO::FETCH_ASSOC);
                                $totalPayment = $totalPaymentRow['totalPayment'];
                                
                                echo '
                                    <div class="numbers"> ₱ '. $totalPayment. '</div>
                                    <div class="cardname">Income</div>
                                ';
                            }
                    ?>
                        </div>
                        <div class="iconbx">
                            <ion-icon name="wallet-outline"></ion-icon>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Order details -->
            <div class="details">
                <div class="recentbookings">
                    <div class="cardheader">
                        <h2>Recent Bookings</h2>
                    </div>
                    <table>
                        <thead>
                            <td>Name</td>
                            <td>Payment</td>
                            <td>Status</td>
                        </thead>
                        <tbody>
                        <?php
                            if ($recentBookingsResult->rowCount() > 0) {
                                while ($row = $recentBookingsResult->fetch(PDO::FETCH_ASSOC)) {
                                    echo '<tr>
                                            <td>'. $row["clientname"]. '</td>
                                            <td> ₱ '. $row["payment"]. '</td>
                                            <td><span class="status '. strtolower(str_replace(' ', '', $row["status"])).'">'. $row["status"]. '</span></td>
                                        </tr>';
                                }
                            } else { 
                                echo '<h1 class="nobookings">No Bookings have been detected!</h1>';
                            }
                    ?>
                        </tbody>
                    </table>
                </div>

                <!-- New Customers -->
                <div class="recentCustomers">
                    <div class="cardheader">
                        <h2>Recent Customers</h2>
                    </div>
                    <table>
                    <?php
                        if ($recentCustomersResult->rowCount() > 0) {
                            while ($row = $recentCustomersResult->fetch(PDO::FETCH_ASSOC)) {
                                echo '<tr>
                                        <td>
                                            <h4>'. $row["clientname"]. '
                                                <br>
                                                <span style="font-size: 14px; color: #999;">'. $row["City"]. '</span>
                                            </h4>
                                        </td>
                                    </tr>';
                            }
                        } else { 
                            echo '<h5>No Bookings have been detected!</h5>';
                        }
                ?>
                    </table>
                </div>
            </div>
        </div>

        <!-- CUSTOMERS -->
        <div class="customers" id="customers">
            <div class="Customers">
                <div class="cardheader">
                    <h2>Recent Customers</h2>
                </div>

                <table>
                    <tr>
                        <th>NAME</th>
                        <th>ADDRESS</th>
                        <th>AMOUNT</th>
                    </tr>
                    <?php
                        if ($customersResult->rowCount() > 0) {
                            while ($row = $customersResult->fetch(PDO::FETCH_ASSOC)) {
                                echo '<tr>
                                        <td>'. $row["clientname"]. '</td>
                                        <td>'. $row["City"]. '</td>
                                        <td> ₱ '. $row["payment"]. '</td>
                                    </tr>';
                            }
                        } else { 
                            echo '<h1 class="nobookings">No Bookings have been detected!</h1>';
                        }
                ?>
                </table>

                <div class="total-container">
                    <h4>Total: 
                    <?php
                        if ($totalPaymentResult) {
                            $totalPaymentRow = $totalPaymentResult->fetch(PDO::FETCH_ASSOC);
                            if ($totalPaymentRow) { // Check if a row was returned
                                $totalPayment = $totalPaymentRow['totalPayment'];
                                echo '
                                    <span class="total"> ₱ '. $totalPayment. '</span>
                                ';
                            } else {
                                echo '<span class="total"> ₱ 0</span>'; // or some default value
                            }
                        }
                ?>
                    </h4>
                </div>
            </div>
        </div>

        <!-- MESSAGES -->
        <div class="messages" id="messages">
            <!-- New Customers -->
            <div class="Messages">
                <div class="cardheader">
                    <h2>Messages</h2>
                </div>
                <table>
                    <tr>
                        <th>NAME</th>
                        <th>MESSAGE</th>
                        <th>EMAIL</th>
                    </tr>
                    <tr>
                        <td> Richel Malang</td>
                        <td><span>Can I have a reservation?</span></td>
                        <td>gurang@gmail.com</td>
                    </tr>
                    <tr>
                        <td> Richel Malang</td>
                        <td><span>Can I have a reservation?</span></td>
                        <td>gurang@gmail.com</td>
                    </tr>
                    <tr>
                        <td> Richel Malang</td>
                        <td><span>Can I have a reservation?</span></td>
                        <td>gurang@gmail.com</td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- RECORDS -->
        <div class="records" id="records">
            <!-- Records -->
            <div class="Records">
                <div class="bookings">
                    <div class="cardheader">
                        <h2>Records</h2>
                    </div>

                    <table>
                        <thead>
                            <td>Name</td>
                            <td>Payment</td>
                            <td>No. Pax</td>
                            <td>Status</td>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Malang, Richel</td>
                                <td>2,000</td>
                                <td>3</td>
                                <td><span class="status unpaid">Unpaid</span></td>
                            </tr>
                            <tr>
                                <td>Malang, Richel</td>
                                <td>3,000</td>
                                <td>4</td>
                                <td><span class="statusprogress">In progress</span></td>
                            </tr>
                            <tr>
                                <td>Malang, Richel</td>
                                <td>2,500</td>
                                <td>2</td>
                                <td><span class="status refund">refund</span></td>
                            </tr>
                            <tr>
                                <td>Cabrera, Joel</td>
                                <td>5,000</td>
                                <td>4</td>
                                <td><span class="status paid">Paid</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- CHANGE PASSWORD -->
        <div class="change-password" id="change-password">
            <div class="password">
                <form action="./changepassword.php" method="POST" class="pass-form">
                    <label for="newpwd">New Password</label>
                    <input type="text" id="newpwd" name="newpwd" placeholder="Enter new pasword" >

                    <button class="button" id="button">Change Password</button>
                </form>
            </div>
        </div>
    </div>
</div>