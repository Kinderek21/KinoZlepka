<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "logowanie";
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);
    if (isset($_POST['login']) && isset($_POST['haslo'])) {
        $login = mysqli_real_escape_string($conn, $_POST['login']);
        $haslo = mysqli_real_escape_string($conn, $_POST['haslo']);
        $check_sql = "SELECT id FROM users WHERE login = '$login'";
        $check_result = $conn->query($check_sql);

        if ($check_result->num_rows > 0) {
            echo "Login już istnieje. Wybierz inny login.";
        } else {
            $insert_sql = "INSERT INTO users (login, password) VALUES ('$login', '$haslo')";
            
            if ($conn->query($insert_sql) === TRUE) {
                header("Location: ../index.php");
            } else {
                echo "Błąd podczas rejestracji: " . $conn->error;
            }
        }
    } else {
        echo "Nieprawidłowe dane przesłane w formularzu.";
    }
    $conn->close();
}
?>