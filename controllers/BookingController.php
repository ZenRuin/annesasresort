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
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && $_GET['action'] === 'bookings') {
            try {
                // Check if the required POST fields are set
                if (!isset($_POST['accommodation_name']) || !isset($_POST['hours'])) {
                    throw new Exception("Required form data is missing.");
                }

                // Collect and sanitize form data
                $accommodation_name = htmlspecialchars($_POST['accommodation_name']);
                $hours = intval($_POST['hours']);
                $room_number = isset($_POST['room_number']) ? intval($_POST['room_number']) : null;
                $booking_tier = isset($_POST['booking_tier']) ? htmlspecialchars($_POST['booking_tier']) : null;

                // Fetch accommodation ID
                $stmt = $this->pdo->prepare("SELECT id, base_price FROM accommodations WHERE name = ?");
                $stmt->execute([$accommodation_name]);
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($row) {
                    $accommodation_id = $row['id'];
                    $base_price = $row['base_price'];

                    // Calculate total price based on hours and any additional logic
                    $stmt_price = $this->pdo->prepare("SELECT price FROM prices WHERE accommodation_id = ? AND hours = ?");
                    $stmt_price->execute([$accommodation_id, $hours]);
                    $price_row = $stmt_price->fetch(PDO::FETCH_ASSOC);

                    $total_price = $price_row ? $price_row['price'] : $base_price; // Fallback to base price if no specific pricing found

                    // Insert booking record
                    $stmt_insert = $this->pdo->prepare("INSERT INTO bookings (accommodation_id, hours, total_price) VALUES (?, ?, ?)");
                    $stmt_insert->execute([$accommodation_id, $hours, $total_price]);

                    // Check if booking was successful
                    if ($stmt_insert->rowCount() > 0) {
                        echo "Booking successful!";
                    } else {
                        echo "Booking failed. Please try again.";
                    }
                } else {
                    echo "Accommodation not found.";
                }
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }
}
