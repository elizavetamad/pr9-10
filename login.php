<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "wearing";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $conn->real_escape_string($_POST["login"]);
    $password = $_POST["password"];

    $sql = "SELECT id, username, login, password FROM Users WHERE login='$login'";
    $result = $conn->query($sql);

    if ($result === false) {
        echo "Ошибка в SQL запросе: " . $conn->error;
        exit;
    }

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

      
        if ($password === $row["password"]) { 
            $_SESSION["username_id"] = $row["id"];
            $_SESSION["username"] = $row["username"];

            header("Location: catalog.php");
            exit();
        } else {
            $message = "Неверный пароль";
        }
    } else {
        $message = "Пользователь не найден";
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .login-container {
        width: 300px;
        margin: 100px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        color: #333;
    }

    label {
        font-weight: bold;
        color: #555;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #ff69b4;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    input[type="submit"]:hover {
        background-color: #ff69b4;
    }

    .error-message {
        color: red;
        text-align: center;
    }
</style>
<body>
    <div class="login-container">
        <h2>Вход</h2>

   
        <?php if (!empty($message)): ?>
            <div class="error-message"><?php echo $message; ?></div>
        <?php endif; ?>

        <form method="POST">
            <label for="login">Логин:</label><br>
            <input type="text" id="login" name="login" required><br><br>

            <label for="password">Пароль:</label><br>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" value="Войти">
        </form>
    </div>
</body>
</html>
