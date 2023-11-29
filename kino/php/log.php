<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "logowanie";
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = mysqli_real_escape_string($conn, $_POST['login']);
    $password = mysqli_real_escape_string($conn, $_POST['haslo']);
    $sql = "SELECT * FROM users WHERE login='$login' AND password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo '<script>';
        echo 'alert("Zalogowano pomyslnie");';
        echo 'window.location.href = "../index.php";';
        echo '</script>';
    } else {
        
    }
}
$conn->close();
?>
