<?php
class BookingController
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function handleRequest()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Get form data
            $accommodation_name = $_POST['accommodation_name'];
            $hours = $_POST['hours'];

            // Fetch the accommodation details from the database
            $stmt = $this->pdo->prepare("SELECT id, base_price FROM accommodations WHERE name = :name");
            $stmt->bindValue(':name', $accommodation_name);
            $stmt->execute();
            $accommodation = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($accommodation) {
                $accommodation_id = $accommodation['id'];
                $base_price = $accommodation['base_price'];


                // Insert booking information into the bookings table
                $stmt = $this->pdo->prepare("INSERT INTO bookings (accommodation_id, hours, total_price) VALUES (:accommodation_id, :hours, :total_price)");
                $stmt->bindValue(':accommodation_id', $accommodation_id, PDO::PARAM_INT);
                $stmt->bindValue(':hours', $hours, PDO::PARAM_INT);
                $stmt->bindValue(':total_price', $base_price, PDO::PARAM_STR);

                if ($stmt->execute()) {
                    echo "Booking successful!";
                } else {
                    echo "Error: " . $stmt->errorInfo()[2];
                }
            } else {
                echo "Accommodation not found!";
            }
        } else {
            echo "Invalid request method!";
        }
    }
}
?>