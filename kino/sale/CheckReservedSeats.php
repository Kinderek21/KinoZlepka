
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rezerwacje";
$conn = new mysqli($servername, $username, $password, $dbname);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $movieTime = json_decode(file_get_contents("php://input"), true)["movieTime"];
    $sql = "SELECT seat_id FROM reservations WHERE movie_time = '$movieTime'";
    $result = $conn->query($sql);

    $reservedSeats = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $reservedSeats[] = $row["seat_id"];
        }
    }
    header('Content-Type: application/json');
    echo json_encode($reservedSeats);
}

$conn->close();
?>