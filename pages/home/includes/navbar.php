<header>
    <div class="header_container">
        <div class="logo_container">
            <img src="<?php echo $this->baseUrl; ?>assets/images/logo.png" alt="Annesa Logo">
            <span class="img_text">Annesa Resort</span>
        </div>
        
        <ul class="nav nav_main">
            <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#offers">Offers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#book">Book Now</a>
            </li>
        </ul>

        <div class="btn_container">
            <button class="btn btn_login btn_main" data-bs-toggle="modal" data-bs-target="#loginModal">
                <i class="ri-user-line"></i>Login
            </button>
            <button class="btn btn-primary btn_signup btn_main" data-bs-toggle="modal" data-bs-target="#signupModal">
                <i class="ri-quill-pen-line"></i>Signup
            </button>
        </div>
        
        <div class="hamburger" id="hamburger">
            <i class="ri-menu-fold-line"></i>
        </div>
    </div>

    <div class="side-menu" id="side-menu">
        <div class="close" id="close-menu">
            <i class="ri-close-large-line"></i>
        </div>
        <ul class="nav nav_side">
            <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#offers">Offers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#book">Book Now</a>
            </li>
        </ul>
        <div class="btn_container mobile-button-container">
            <button class="btn btn_login mobile-button" data-bs-toggle="modal" data-bs-target="#loginModal">
                <i class="ri-user-line"></i>Login
            </button>
            <button class="btn btn-primary btn_signup mobile-button" data-bs-toggle="modal" data-bs-target="#signupModal">
                <i class="ri-quill-pen-line"></i>Signup
            </button>
        </div>
    </div>
</header>