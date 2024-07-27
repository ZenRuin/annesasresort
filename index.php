<?php
    require_once 'vendor/autoload.php';
    // require_once 'config/database.php';
    require_once 'controllers/Controller.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    define('DB_HOST', $_ENV['DB_HOST']);
    define('DB_NAME', $_ENV['DB_NAME']);
    define('DB_USER', $_ENV['DB_USER']);
    define('DB_PASS', $_ENV['DB_PASS']);

    try {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }

    $action = isset($_GET['action']) ? $_GET['action'] : 'home';
    $cssFile = '';
    $jsFile = '';
    $pageContent = '';
    
    switch ($action) {
        case 'home':
            require_once 'controllers/HomeController.php';
            $controller = new HomeController();
            $pageContent = $controller->getPageContent('home_landing', 'home');
            $cssFile = "pages/home/home_landing.css";
            $jsFile = "pages/home/home_landing.js";
            break;
        case 'users':
            require_once 'controllers/UsersController.php';
            $controller = new UsersController();
            $pageContent = $controller->getPageContent('users', 'users');
            $cssFile = "pages/users/users.css";
            $jsFile = "pages/users/users.js";
            break;
        case 'admin':
            require_once 'controllers/AdminControllers.php';
            $controller = new AdminController();
            $pageContent = $controller->getPageContent('admin', 'admin');
            $cssFile = "pages/admin/admin.css";
            $jsFile = "pages/admin/admin.js";
            break;
        case 'login':
            require_once 'controllers/LoginControllers.php';
            $controller = new LoginControllers($pdo);
            $controller->handleRequest();
            break;
        case 'register':
            require_once 'controllers/RegisterControllers.php';
            $controller = new RegisterControllers($pdo);
            $controller->handleRequest();
            break;
        default:
            http_response_code(404);
            require_once __DIR__ . '/pages/errors/404.php';
            break;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Annesa Resort - Official Website</title>

    <!-- FONTS -->
    <link rel="stylesheet" href="assets/fonts/remixicon.css">

    <!-- GOOGLE API LINK -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@300..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    <!-- FAVICON -->
    <link rel="icon" href="assets/images/logo.png" type="image/x-icon">

    <?php
        if ($cssFile) {
            echo '<link rel="stylesheet" href="' . htmlspecialchars($cssFile) . '">';
        }
    ?>
    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
</head>
<body>
    <?php
        echo $pageContent;
    ?>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <?php
        if ($jsFile) {
            echo '<script src="' . htmlspecialchars($jsFile) . '"></script>';
        }
    ?>
</body>
</html>