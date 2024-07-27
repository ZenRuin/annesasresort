<?php
class Controller {
    protected $baseUrl;

    public function __construct() {
        $this->loadConfig();
    }

    // Load the configuration
    protected function loadConfig() {
        $filePathConfig = "config/config.php";
        $errorPath = "pages/errors/404.php";

        if (file_exists($filePathConfig)) {
            require_once $filePathConfig;
            $this->baseUrl = $baseUrl;
        } else {
            http_response_code(404);
            require_once $errorPath;
            exit;
        }
    }

    // Load the page content
    protected function loadPage($page, $folder = 'home') {
        $content = '';
        ob_start();
        if($folder == 'home') {
            $filePathNavbar = "pages/{$folder}/includes/navbar.php";
            $filePathUser = "pages/{$folder}/{$page}.php";
            $filePathFooter = "pages/{$folder}/includes/footer.php";
            $filePathRegister = "pages/{$folder}/includes/register.php";
            $filePathLogin = "pages/{$folder}/includes/login.php";
            $errorPath = "pages/errors/404.php";

            if (file_exists($filePathUser)) {
                require_once $filePathNavbar;
                require_once $filePathUser;
                require_once $filePathFooter;
                require_once $filePathRegister;
                require_once $filePathLogin;
            } else {
                http_response_code(404);
                require_once $errorPath;
            }
        } else if ($folder == 'users') {
            $filePathNavbar = "pages/{$folder}/includes/navbar.php";
            $filePathUser = "pages/{$folder}/{$page}.php";
            $filePathFooter = "pages/{$folder}/includes/footer.php";
            $errorPath = "pages/errors/404.php";

            if (file_exists($filePathUser)) {
                require_once $filePathNavbar;
                require_once $filePathUser;
                require_once $filePathFooter;
            } else {
                http_response_code(404);
                require_once $errorPath;
            }
        } else if ($folder == 'admin') {
            $filePathNavbar = "pages/{$folder}/includes/navbar.php";
            $filePathUser = "pages/{$folder}/{$page}.php";
            $filePathFooter = "pages/{$folder}/includes/footer.php";
            $errorPath = "pages/errors/404.php";

            if (file_exists($filePathUser)) {
                require_once $filePathNavbar;
                require_once $filePathUser;
                require_once $filePathFooter;
            } else {
                http_response_code(404);
                require_once $errorPath;
            }
        }

        $content = ob_get_clean();
        return $content;
    }

    // Public method to get the page content
    public function getPageContent($page, $folder = 'home') {
        return $this->loadPage($page, $folder);
    }
}
?>