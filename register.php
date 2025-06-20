<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "wearing";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$username = $_POST["username"];
$login = $_POST["login"];
$password = $_POST["password"];


$username = $conn->real_escape_string($username);
$login = $conn->real_escape_string($login);
$password = $conn->real_escape_string($password);


$check_sql = "SELECT login FROM Users WHERE login = '$login'";
$check_result = $conn->query($check_sql);

if ($check_result->num_rows > 0) {
    echo "<script>alert('Пользователь с таким логином уже существует!'); window.location.href='register.php';</script>";
    exit();
} else {
    $sql = "INSERT INTO Users (username, login, password) VALUES ('$username', '$login', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Регистрация прошла успешно!'); window.location.href='login.php';</script>";
        exit();
    } else {
        echo "Ошибка: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>