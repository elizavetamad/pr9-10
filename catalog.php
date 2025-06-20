<?php
// Подключение к базе данных
$servername = "localhost"; 
$username = "root"; 
$password = "root"; 
$dbname = "wearing"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Запрос на получение всех товаров
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Товары</title>
    <style>

body {
    margin: 0;
    font-family: 'Arial', sans-serif;
    color: #333;
    line-height: 1.6;
}


.header {
    background-color: #fff;
    padding: 15px 0;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.header-inner {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.logo img {
    max-width: 100%;
    height: auto;
}

.nav {
    display: flex;
}

.nav-link {
    margin: 0 15px;
    text-decoration: none;
    color: #333;
    font-weight: 500;
    transition: color 0.3s;
}

.nav-link:hover {
    color: #ff69b4;
}

.auth {
    display: flex;
    align-items: center;
}

.auth-link {
    text-decoration: none;
    color: #333;
    margin-left: 15px;
}

.auth-register {
    background-color: #ff69b4;
    color: #fff;
    padding: 5px 10px;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.auth-register:hover {
    background-color: #ff1493;
}

        .products {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .product-card {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 16px;
            margin: 16px;
            text-align: center;
            width: 220px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .product-card:hover {
            transform: scale(1.05);
        }

        .product-card img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 10px;
            background-color: #ff69b4; /* Розовый цвет */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #ff1493; /* Темнее розовый при наведении */
        }

        .footer {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 10px 0;
    }
    
    .footer a {
        color: pink;
}
.h1{
    text-align: center;
}
    </style>
</head>
<header class="header">
    <div class="container">
        <div class="header-inner">
            <a href="#" class="logo">
                <img src="images/logo/logo.png"  width="150px" heigth="200px">
</a>
<nav class="nav">
    <a href="index.php" class="nav-link">Главная</a>
    <a href="#" class="nav-link">О нас</a>
    <a href="php/catalog.php" class="nav-link">Товары</a>
</nav>
<div class="auth">
<a href="login.php" class="auth-link">Войти</a>
<a href="register.html" class="auth-link">Регистрация</a> 
</div>
</div>
</div>  
</header>
<body>
<div class="products">
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<div class="product-card">';
            echo '<img src="' . $row["image"] . '" alt="' . $row["name"] . '">';
            echo '<h2>' . $row["name"] . '</h2>';
            echo '<p>Цена: ' . $row["price"] . ' руб.</p>';
            echo '<p>Размер: ' . $row["size"] . '</p>';
            echo '<p>Производитель: ' . $row["manufacturer"] . '</p>';
            echo '<a href="#" class="button">Купить</a>'; 
            echo '</div>';
        }
    } else {
        echo "<p>Нет товаров.</p>";
    }
    $conn->close();
    ?>
</div>
</div>
<footer class="footer">
    <p>&copy; 2025 Ваш Магазин. Все права защищены.</p>
    <p><a href="#">Политика конфиденциальности</a> | <a href="#">Условия использования</a></p>
</footer>

</body>
</html>