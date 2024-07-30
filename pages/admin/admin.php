<?php
try {
    $pdo = new PDO(
        "mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}",
        $_ENV['DB_USER'],
        $_ENV['DB_PASS']
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

if (!isset($_SESSION['admin_id'])) {
    header("Location: index.php?action=home");
    exit;
}

$stmt = $pdo->prepare("SELECT name, email FROM admins WHERE id = :id");
$stmt->bindParam(':id', $_SESSION['admin_id']);
$stmt->execute();
$admin = $stmt->fetch(PDO::FETCH_ASSOC);

$adminName = isset($admin['name']) ? $admin['name'] : 'Admin';

// Define the booking count query
$bookingsQuery = "SELECT COUNT(*) as count FROM bookings";
$countResult = $pdo->query($bookingsQuery);

// Define the total payment query
$totalPaymentSql = "SELECT SUM(total_price) as totalPayment FROM bookings";
$totalPaymentResult = $pdo->query($totalPaymentSql);

// Define the customers query
$customersSql = "SELECT customer_name, City, total_price as payment FROM bookings";
$customersResult = $pdo->query($customersSql);

// Define the recent bookings query
$recentBookingsSql = "SELECT customer_name, total_price as payment, status FROM bookings";
$recentBookingsResult = $pdo->query($recentBookingsSql);

$recentCustomersSql = "SELECT customer_name, City FROM bookings";
$recentCustomersResult = $pdo->query($recentCustomersSql);

?>

<div>
    <!-- main -->
    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>

            <div class="Welcome">
                <h3>Welcome back, <?php echo htmlspecialchars($adminName); ?>!</h3>
            </div>
        </div>

        <!-- DASHBOARD -->
        <div class="dashboard" id="dashboard">
            <!-- status update -->
            <div class="cardbox">
                <a class="text-decoration-none">
                    <div class="card">
                        <div>
                            <?php
                            if ($countResult) {
                                $countRow = $countResult->fetch(PDO::FETCH_ASSOC);
                                $bookingCount = $countRow['count'];
                                // Display the count
                                echo '
                                    <div class="numbers">' . $bookingCount . '</div>
                                    <div class="cardname">Bookings</div>';
                            }
                            ?>
                        </div>
                        <div class="iconbx">
                            <ion-icon name="bag-handle-outline"></ion-icon>
                        </div>
                    </div>
                </a>

                <a class="text-decoration-none">
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

                <a class="text-decoration-none">
                    <div class="card">
                        <div>
                            <?php
                            if ($totalPaymentResult) {
                                $totalPaymentRow = $totalPaymentResult->fetch(PDO::FETCH_ASSOC);
                                $totalPayment = $totalPaymentRow['totalPayment'];

                                echo '
                                    <div class="numbers"> ₱ ' . number_format($totalPayment, 2) . '</div>
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
                            <tr>
                                <th>Name</th>
                                <th>Payment</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($recentBookingsResult->rowCount() > 0) {
                                while ($row = $recentBookingsResult->fetch(PDO::FETCH_ASSOC)) {
                                    echo '<tr>
                                            <td class="text-center">' . $row["clientname"] . '</td>
                                            <td class="text-center"> ₱ ' . $row["payment"] . '</td>
                                            <td class="text-center"><span class="status ' . strtolower(str_replace(' ', '', $row["status"])) . '">' . $row["status"] . '</span></td>
                                        </tr>';
                                }
                            } else {
                                echo '<tr><td colspan="3" class="nobookings">No Bookings have been detected!</td></tr>';
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
                        <tbody>
                            <?php
                            if ($recentCustomersResult->rowCount() > 0) {
                                while ($row = $recentCustomersResult->fetch(PDO::FETCH_ASSOC)) {
                                    echo '<tr>
                                            <td>
                                                <h4>' . $row["clientname"] . '
                                                    <br>
                                                    <span style="font-size: 14px; color: #999;">' . $row["City"] . '</span>
                                                </h4>
                                            </td>
                                        </tr>';
                                }
                            } else {
                                echo '<tr><td class="nobookings">No Customers have been detected!</td></tr>';
                            }
                            ?>
                        </tbody>
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
                    <thead>
                        <tr>
                            <th class="text-center">NAME</th>
                            <th class="text-center">ADDRESS</th>
                            <th class="text-center">AMOUNT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($customersResult->rowCount() > 0) {
                            while ($row = $customersResult->fetch(PDO::FETCH_ASSOC)) {
                                echo '<tr>
                                        <td>' . $row["clientname"] . '</td>
                                        <td>' . $row["City"] . '</td>
                                        <td> ₱ ' . $row["payment"] . '</td>
                                    </tr>';
                            }
                        } else {
                            echo '<tr><td colspan="3" class="nobookings">No Customers have been detected!</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>

                <div class="total-container">
                    <h4>Total:
                        <?php
                        $totalPaymentSql = "SELECT SUM(payment) as totalPayment FROM bookings WHERE status != 'refund'";

                        // Execute the query
                        $totalPaymentResult = $pdo->query($totalPaymentSql);

                        // Initialize totalPayment to 0
                        $totalPayment = 0;

                        // Check if the query was successful
                        if ($totalPaymentResult !== false) {
                            // Fetch the result
                            $totalPaymentRow = $totalPaymentResult->fetch(PDO::FETCH_ASSOC);

                            // Check if the fetch was successful and if there is data
                            if ($totalPaymentRow !== false && isset($totalPaymentRow['totalPayment'])) {
                                $totalPayment = $totalPaymentRow['totalPayment'];
                            }
                        }
                        ?>
                        <span class="total"> ₱ <?php echo number_format($totalPayment, 2); ?></span>
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
                    <thead>
                        <tr>
                            <th>NAME</th>
                            <th>MESSAGE</th>
                            <th>EMAIL</th>
                        </tr>
                    </thead>
                    <tbody>
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
                    </tbody>
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
                            <tr>
                                <th>Name</th>
                                <th>Payment</th>
                                <th>No. Pax</th>
                                <th>Status</th>
                            </tr>
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
                                <td><span class="status paid">Paid</span></td>
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
                <form action="index.php?action=changePassword" method="POST" class="pass-form">
                    <label for="newpwd">New Password</label>
                    <input type="password" id="newpwd" name="newpwd" placeholder="Enter new password">

                    <button type="submit" class="button" id="button">Change Password</button>
                </form>
            </div>
        </div>
    </div>
</div>