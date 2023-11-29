<?php
$servername = "localhost";  
$username = "root";
$password = "";
$dbname = "rezerwacje";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $postData = json_decode(file_get_contents("php://input"), true);
    $selectedSeats = $postData["selectedSeats"];
    $movieTime = $postData["movieTime"];
    $tytul = "Napoleon";
    
    foreach ($selectedSeats as $seatId) {
        $checkAvailability = "SELECT * FROM reservations WHERE seat_id = '$seatId' AND movie_time = '$movieTime'";
        $result = $conn->query($checkAvailability);
        if ($result->num_rows > 0) {
            echo "Miejsce o ID $seatId jest już zajęte. Wybierz inne miejsce.";
            exit;
        }
    }
    foreach ($selectedSeats as $seatId) {
        $stmt = $conn->prepare("INSERT INTO reservations (seat_id, movie_time, tytul) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $seatId, $movieTime, $tytul);
        $stmt->execute();
        $stmt->close();
    }

    echo "Rezerwacja zapisana pomyślnie!";
}

$conn->close();
?>