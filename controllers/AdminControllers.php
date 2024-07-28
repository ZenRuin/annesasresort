<?php

require_once 'Controller.php';

class AdminController extends Controller
{
    public function handleRequest()
    {
        $this->loadPage('admin', 'admin');
    }

    public function changePassword()
    {
        // Ensure the request method is POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve the new password from the form
            $newPassword = $_POST['newpwd'];

            // Hash the new password using bcrypt
            $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);

            try {
                // Create a new PDO instance
                $pdo = new PDO(
                    "mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}",
                    $_ENV['DB_USER'],
                    $_ENV['DB_PASS']
                );
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Prepare an update statement
                $stmt = $pdo->prepare("UPDATE admins SET password_hash = :password WHERE id = :id");

                // Bind parameters
                $stmt->bindParam(':password', $hashedPassword);
                $stmt->bindParam(':id', $_SESSION['admin_id']);

                // Execute the statement
                if ($stmt->execute()) {
                    echo 'Password updated successfully. <br />
                    <a href="' . $this->baseUrl . 'index.php?action=admin">Go back</a>';
                } else {
                    echo "Failed to update the password.";
                }
            } catch (PDOException $e) {
                echo "Database error: " . $e->getMessage();
            }
        } else {
            echo "Invalid request method.";
        }
    }
}

?>