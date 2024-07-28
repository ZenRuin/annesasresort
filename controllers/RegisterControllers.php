<?php
require_once 'Controller.php';

class RegisterControllers extends Controller {
    private $pdo;

    public function __construct($pdo) {
        parent::__construct();
        $this->pdo = $pdo;
    }

    public function handleRequest() {
        // Enable error reporting for debugging
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $firstName = $_POST['Fname_signup'];
            $lastName = $_POST['Lname_signup'];
            $username = $_POST['username_signup'];
            $email = $_POST['Email_signup'];
            $phoneNumber = $_POST['Phonenumber_signup'];
            $password = $_POST['password_signup'];
            $confirmPassword = $_POST['Confirm_password'];

            if ($password !== $confirmPassword) {
                echo 'Password does not match. <br />
                <a href="' . $this->baseUrl . '">Go Back</a>';
                exit;
            }

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            try {
                $stmt = $this->pdo->prepare("INSERT INTO users (first_name, last_name, username, email, phone_number, password_hash) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->bindParam(1, $firstName);
                $stmt->bindParam(2, $lastName);
                $stmt->bindParam(3, $username);
                $stmt->bindParam(4, $email);
                $stmt->bindParam(5, $phoneNumber);
                $stmt->bindParam(6, $hashedPassword);

                if ($stmt->execute()) {
                    echo 'Registered Successfully! <br />
                    <a href="' . $this->baseUrl . '">Go back</a>';
                } else {
                    echo 'Something went wrong. Try again later <br />
                    <a href="' . $this->baseUrl . '">Go Back</a>';
                }
            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage() . '<br />
                <a href="' . $this->baseUrl . '">Go Back</a>';
            }
        } else {
            echo 'Invalid request method <br />
            <a href="' . $this->baseUrl . '">Go Back</a>';
        }
    }
}
?>
