<?php
session_start();
?>

<div class="navigation">
    <ul>
        <li>
            <a href="#">
                <span class="icon"><img src="<?php echo $this->baseUrl; ?>assets/images/logo.png" alt=""></span>
                <span class="title">Annesa's Resort</span>
            </a>
        </li>
        <li class="dashboard-link">
            <a href="javascript:void(0);" onclick="showDashboard()">
                <!-- <span class="icon"><ion-icon name="home-outline"></ion-icon></span> -->
                <span class="title">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);" onclick="showCustomers()">
                <!-- <span class="icon"><ion-icon name="people-circle-outline"></ion-icon></span> -->
                <span class="title">Customers</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);" onclick="showMessages()">
                <!-- <span class="icon"><ion-icon name="chatbox-ellipses-outline"></ion-icon></span> -->
                <span class="title">Messages (under maintenance)</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);" onclick="showRecords()">
                <!-- <span class="icon"><ion-icon name="bar-chart-outline"></ion-icon></span> -->
                <span class="title">Records (under maintenance)</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);" onclick="showPassword()">
                <!-- <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span> -->
                <span class="title">Password</span>
            </a>
        </li>
        <?php if (isset($_SESSION['admin_id'])): ?>
            <li>
                <a href="<?php echo $this->baseUrl; ?>logout.php">
                    <!-- <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span> -->
                    <span class="title">Sign Out</span>
                </a>
            </li>
        <?php else: ?>
            <li>
                <a href="<?php echo $this->baseUrl; ?>index.php?action=home">
                    <!-- <span class="icon"><ion-icon name="log-in-outline"></ion-icon></span> -->
                    <span class="title">Sign In</span>
                </a>
            </li>
        <?php endif; ?>
    </ul>
</div>