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

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php?action=home");
    exit;
}

$stmt = $pdo->prepare("SELECT first_name, last_name, email, phone_number FROM users WHERE id = :id");
$stmt->bindParam(':id', $_SESSION['user_id']);
$stmt->execute();
$users = $stmt->fetch(PDO::FETCH_ASSOC);

$fullName = isset($users['first_name']) ? $users['first_name'] : '';
$fullName .= isset($users['last_name']) ? ' ' . $users['last_name'] : '';

$displayName = !empty($fullName) ? $fullName : 'User';
$email = isset($users['email']) ? $users['email'] : 'No email provided.';
$phone = isset($users['phone_number']) ? $users['phone_number'] : 'No phone number provided.';
?>

<main id="users">
    <!-- Dashboard -->
    <section class="contentshow" id="dashboard">
        <div class="container">
            <div class="dashboard-page">
                <div class="top-page">
                    <div class="profile-section">
                        <div class="card">
                            <div class="picture">
                                <img src="assets/images/Profile.png" alt="Profile Image" id="profile-pic">
                            </div>
                            <div class="profile-name">
                                <h1><?php echo htmlspecialchars($displayName); ?></h1>
                            </div>
                        </div>
                        <div class="calendar-container mx-5">
                            <div class="calendar">
                                <div class="calendar-header">
                                    <button id="prevBtn">
                                        <i class="ri-arrow-left-line"></i>
                                    </button>
                                    <div class="monthYear" id="monthYear"></div>
                                    <button id="nextBtn">
                                        <i class="ri-arrow-right-line"></i>
                                    </button>
                                </div>
                                <div class="calendar-days">
                                    <div class="calendar-day">Sun</div>
                                    <div class="calendar-day">Mon</div>
                                    <div class="calendar-day">Tue</div>
                                    <div class="calendar-day">Wed</div>
                                    <div class="calendar-day">Thu</div>
                                    <div class="calendar-day">Fri</div>
                                    <div class="calendar-day">Sat</div>
                                </div>
                                <div class="calendar-date" id="dates"></div>
                            </div>
                        </div>
                        <div class="activity-section card">
                            <div class="activity-title title">
                                <h1>Activities</h1>
                            </div>
                            <div class="activity-results">
                                <p>Have reservation on 07 / 22 / 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-page">
                <div class="booking-result">
                    <table class="results">
                        <tr class="result-header m-5">
                            <th>No.</th>
                            <th>Date Issued</th>
                            <th>Accommodation</th>
                            <th>Price</th>
                            <th>Status</th>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td>07 / 22 / 2024</td>
                            <td>Rm. 7</td>
                            <td>500</td>
                            <td class="inc">Incomplete</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>07 / 28 / 2024</td>
                            <td>Rm. 2</td>
                            <td>350</td>
                            <td class="complete">Complete</td>
                        </tr>
                    </table>
                </div>
                <button class="btn btn-primary" id="seemore"><a href="#billing">See more...</a></button>
            </div>
        </div>
    </section>

    <!-- Account Info -->
    <section class="content" id="accountinfo">
        <div class="container">
            <div class="profile-info">
                <div class="account-picture card">
                    <div class="picture">
                        <img src="assets/images/Profile.png" alt="image" id="profile-pic">
                    </div>
                    <div class="profile-username mt-5">
                        <h1><?php echo htmlspecialchars($displayName); ?></h1>
                    </div>
                </div>
                <div class="details-info card mx-3">
                    <div class="account-title mb-5">
                        <h1>Account Information</h1>
                    </div>
                    <div class="account-details">
                        <div class="form-control">
                            <h3>name:</h3>
                            <p><?php echo htmlspecialchars($displayName); ?></p>
                        </div>
                        <div class="form-control">
                            <h3>email:</h3>
                            <p><?php echo htmlspecialchars($email); ?></p>
                        </div>
                        <div class="form-control">
                            <h3>phone number:</h3>
                            <p><?php echo htmlspecialchars($phone); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Billings -->
    <section class="content" id="billing">
        <div class="container">
            <div class="booking-result">
                <table class="results">
                    <tr class="result-header m-5">
                        <th>No.</th>
                        <th>Date Issued</th>
                        <th>Mode of Payment</th>
                        <th>Accomodation</th>
                        <th>Price</th>
                        <th>Status</th>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>07 / 22 / 2024</td>
                        <td>Walk-In</td>
                        <td>Rm. 7</td>
                        <td>500</td>
                        <td class="inc">Incomplete</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>07 / 28 / 2024</td>
                        <td>Gcash</td>
                        <td>Rm. 2</td>
                        <td>350</td>
                        <td class="complete">Complete</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <!-- Bookings -->
    <section class="content" id="bookings">
        <div class="container">
            <div class="reservation-section">
                <div class="table-details">
                    <div class="table-title">
                        <h1>Tables</h1>
                    </div>
                    <table class="results table table-striped">
                        <thead>
                            <tr>
                                <th>Accommodation Class</th>
                                <th># of Pax</th>
                                <th>Price</th>
                                <th>Reservation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <form action="index.php?action=bookings" method="post" class="book-form">
                                    <td>
                                        <input type="hidden" name="accommodation_name" value="Pavilion 1 ni Maria">
                                        Pavilion 1 ni Maria
                                    </td>
                                    <td>6</td>
                                    <td>250</td>
                                    <td>
                                        <input type="hidden" name="hours" value="12">
                                        <button type="submit" class="btn btn-primary">Book Now</button>
                                    </td>
                                </form>
                            </tr>
                            <tr>
                                <form action="index.php?action=bookings" method="post" class="book-form">
                                    <td>
                                        <input type="hidden" name="accommodation_name" value="Pavilion 2 ni Berto">
                                        Pavilion 2 ni Berto
                                    </td>
                                    <td>6</td>
                                    <td>250</td>
                                    <td>
                                        <input type="hidden" name="hours" value="12">
                                        <button type="submit" class="btn btn-primary">Book Now</button>
                                    </td>
                                </form>
                            </tr>
                            <tr>
                                <form action="index.php?action=bookings" method="post" class="book-form">
                                    <td>
                                        <input type="hidden" name="accommodation_name"
                                            value="Cottage ni Tisya (1st Floor)">
                                        Cottage ni Tisya (1st Floor)
                                    </td>
                                    <td>35</td>
                                    <td>1800</td>
                                    <td>
                                        <input type="hidden" name="hours" value="12">
                                        <button type="submit" class="btn btn-primary">Book Now</button>
                                    </td>
                                </form>
                            </tr>
                            <tr>
                                <form action="index.php?action=bookings" method="post" class="book-form">
                                    <td>
                                        <input type="hidden" name="accommodation_name"
                                            value="Cottage ni Tisya (2nd Floor)">
                                        Cottage ni Tisya (2nd Floor)
                                    </td>
                                    <td>100</td>
                                    <td>3000</td>
                                    <td>
                                        <input type="hidden" name="hours" value="12">
                                        <button type="submit" class="btn btn-primary">Book Now</button>
                                    </td>
                                </form>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="room-details">
                    <div class="rooms-title">
                        <h1>Rooms</h1>
                    </div>
                    <form action="index.php?action=bookings" method="post" class="book-form">
                        <table class="results table table-striped">
                            <thead>
                                <tr>
                                    <th>Accommodation Class</th>
                                    <th># of Pax</th>
                                    <th>Room#</th>
                                    <th># of Hours</th>
                                    <th>Price</th>
                                    <th>Reservation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Rooms 1 - 6</td>
                                    <td>2</td>
                                    <td>
                                        <select name="room_number_1" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="hours_1" class="form-control">
                                            <option value="3">3 hours</option>
                                            <option value="12">12 hours</option>
                                            <option value="24">24 hours</option>
                                        </select>
                                    </td>
                                    <td>
                                        <div id="roomprice1">₱ 350.00</div>
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-primary">Book Now</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Family Room #7</td>
                                    <td>5</td>
                                    <td>
                                        <select name="room_number_2" class="form-control">
                                            <option value="7">7</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="hours_2" class="form-control">
                                            <option value="3">3 hours</option>
                                            <option value="12">12 hours</option>
                                            <option value="24">24 hours</option>
                                        </select>
                                    </td>
                                    <td>
                                        <div id="roomprice7">₱ 500.00</div>
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-primary">Book Now</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Family Room #8</td>
                                    <td>12</td>
                                    <td>
                                        <select name="room_number_3" class="form-control">
                                            <option value="8">8</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="hours_3" class="form-control">
                                            <option value="3">3 hours</option>
                                            <option value="12">12 hours</option>
                                            <option value="24">24 hours</option>
                                        </select>
                                    </td>
                                    <td>
                                        <div id="roomprice8">₱ 1200.00</div>
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-primary">Book Now</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Family Room #9</td>
                                    <td>5</td>
                                    <td>
                                        <select name="room_number_4" class="form-control">
                                            <option value="9">9</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="hours_4" class="form-control">
                                            <option value="3">3 hours</option>
                                            <option value="12">12 hours</option>
                                            <option value="24">24 hours</option>
                                        </select>
                                    </td>
                                    <td>
                                        <div id="roomprice9">₱ 500.00</div>
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-primary">Book Now</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Payments -->
    <section class="content" id="payments">

    </section>

    <!-- Change Profile -->
    <section class="content" id="changeprofile">
        <div class="container">
            <div class="profile-info">
                <div class="account-picture card">
                    <div class="picture">
                        <img src="assets/images/Profile.png" alt="image" id="profile-pic">
                    </div>
                    <label for="inputFile">Change Profile</label>
                    <input type="file" id="inputFile">
                    <div class="profile-username mt-3">
                        <h1>annesaresort</h1>
                    </div>
                </div>
                <div class="details-info card mx-3">
                    <div class="account-title">
                        <h1>Account Information</h1>
                    </div>
                    <div class="account-details">
                        <form action="" method="post">
                            <div class="form-control">
                                <label for="fullname">
                                    <h3>name:</h3>
                                </label>
                                <input type="text" name="Fname" id="fullname">
                            </div>
                            <div class="form-control">
                                <label for="email">
                                    <h3>email:</h3>
                                </label>
                                <input type="text" name="Email" id="email">
                            </div>
                            <div class="form-control">
                                <label for="phonenumber">
                                    <h3>phone number:</h3>
                                </label>
                                <input type="text" name="phone#" id="phonenumber">
                            </div>
                            <div class="form-control">
                                <label for="username">
                                    <h3>username:</h3>
                                </label>
                                <input type="text" name="Username" id="username">
                            </div>
                            <div class="form-control">
                                <label for="birthday">
                                    <h3>day of birth:</h3>
                                </label>
                                <input type="date" name="Birthday" id="birthday">
                            </div>
                        </form>
                    </div>
                    <button type="btn" class="apply-change btn btn-primary mt-3">
                        <a href="#">Apply Changes</a>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Change Password -->
    <section class="content" id="changepassword">
        <div class="container">
            <form class="password-container" action="" method="post">
                <div class="newpassword-content form-control">
                    <label for="new-password">New Password</label>
                    <input type="text" name="newpassword" id="new-password">
                </div>
                <div class="confirmpassword-content form-control">
                    <label for="confirmpassword">Re-enter Password</label>
                    <input type="text" name="cpassword" id="confirmpassword">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
</main>