<?php
session_start();
?>

<nav class="navbar navbar-expand-lg navbar-light+">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center">
            <img src="<?php echo $this->baseUrl; ?>assets/images/logo.png" alt="Logo" class="mx-2"
                style="max-height: 40px;">
            <h3>Annesas Resort and Events Place</h3>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link profile" href="#" id="settingsDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="ri-settings-5-fill"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingsDropdown">
                        <li onclick="showChangeProfile()"><a class="dropdown-item" href="#">Change Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li onclick="showChangePassword()"><a class="dropdown-item" href="#">Change Password</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link profile" href="#" id="accountDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="ri-account-circle-fill"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="accountDropdown">
                        <li onclick="showDashboard()"><a class="dropdown-item" href="#">Dashboard</a></li>
                        <li onclick="showAccountInfo()"><a class="dropdown-item" href="#">Account Info</a></li>
                        <li onclick="showBilling()"><a class="dropdown-item" href="#">Billing</a></li>
                        <li onclick="showBookings()"><a class="dropdown-item" href="#">Bookings</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <?php if (isset($_SESSION['user_id'])): ?>
                            <li><a class="dropdown-item" href="<?php echo $this->baseUrl; ?>">Log Out</a></li>
                        <?php else: ?>
                            <li>
                                <a href="<?php echo $this->baseUrl; ?>index.php?action=home">
                                    Log In
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>