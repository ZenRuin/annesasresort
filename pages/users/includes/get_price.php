<?php
try {
    $room_number = isset($_POST['room_number']) ? intval($_POST['room_number']) : null;
    $hours = isset($_POST['hours']) ? intval($_POST['hours']) : null;

    if ($room_number && $hours) {
        // Fetch accommodation ID based on room number
        $stmt = $pdo->prepare("SELECT id FROM accommodations WHERE id = ?");
        $stmt->execute([$room_number]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $accommodation_id = $row['id'];

            // Fetch price based on hours
            $stmt_price = $pdo->prepare("SELECT price FROM prices WHERE accommodation_id = ? AND hours = ?");
            $stmt_price->execute([$accommodation_id, $hours]);
            $price_row = $stmt_price->fetch(PDO::FETCH_ASSOC);

            if ($price_row) {
                echo htmlspecialchars($price_row['price']);
            } else {
                echo "0"; // Default price or error handling
            }
        } else {
            echo "0"; // Default price or error handling
        }
    } else {
        echo "0"; // Default price or error handling
    }
} catch (PDOException $e) {
    echo "Error: " . htmlspecialchars($e->getMessage());
}