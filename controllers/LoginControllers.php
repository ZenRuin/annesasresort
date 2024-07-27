<?php
class LoginControllers extends Controller {
    private $pdo;

    public function __construct($pdo) {
        parent::__construct();
        $this->pdo = $pdo;
    }

    public function handleRequest() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username_login'];
            $password = $_POST['password_login'];

            // Check user table
            $stmt = $this->pdo->prepare("SELECT id, password_hash FROM users WHERE username = ?");
            $stmt->execute([$username]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password_hash'])) {
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['role'] = 'user';
                header("Location: index.php?action=users");
                exit;
            }

            // Check admin table
            $stmt = $this->pdo->prepare("SELECT id, password_hash FROM admins WHERE email = ?");
            $stmt->execute([$username]);
            $admin = $stmt->fetch();

            if ($admin && password_verify($password, $admin['password_hash'])) {
                session_start();
                $_SESSION['admin_id'] = $admin['id'];
                $_SESSION['role'] = 'admin';
                header("Location: index.php?action=admin");
                exit;
            }

            echo 'Invalid email or password. <br />
            <a href="' . $this->baseUrl . '">Go Back</a>';
        }
    }
}
?>
