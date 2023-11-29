<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/logowanie.css">
    <title>Document</title>
</head>
<body>
    <div class="box">
        <form action="./php/log.php" method="post">
            <h2>Logowanie</h2>
            <div class="inputBox">
                <input type="text" required = "required" name="login">
                <span>Login</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" required = "required" name="haslo">
                <span>Haslo</span>
                <i></i>
            </div>
            <div class="linki">
                <a href="#">Przypomnij haslo</a>
                <a href="./reje.php">Rejestracja</a>
            </div>
            <input type="submit" value="Login">
        </form>
    </div>
    
</body>
</html>