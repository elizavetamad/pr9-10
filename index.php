<?php
$host = 'localhost'; 
$username = 'root'; 
$password = 'root'; 
$database = 'wearing'; 

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miu Miu</title>
    <link rel="stylesheet" href="css/styles.css">
    
<body>
    <header class="header">
        <div class="container">
            <div class="header-inner">
                <a href="#" class="logo">
                    <img src="images/logo/logo.png" alt="Логотип" width="150" height="200">
                </a>
                <nav class="nav">
                    <a href="#" class="nav-link">Главная</a>
                    <a href="#" class="nav-link">О нас</a>
                    <a href="catalog.php" class="nav-link">Товары</a>
                </nav>
                <div class="auth">
                    <a href="login.php" class="auth-link">Войти</a>
                    <a href="register.html" class="auth-link auth-register">Регистрация</a> 
                </div>
            </div>
        </div>  
    </header>

    <section class="luxury-banner">
        <div class="banner-overlay">
            <h1 class="banner-title">Добро пожаловать в <span>Miu Miu</span></h1>
            <p class="banner-subtitle">Эксклюзивные коллекции весна-лето 2025</p>
            <a href="catalog.php" class="banner-cta">Открыть каталог</a>
        </div>
    </section>

    <section class="news">
        <h2>Новости</h2>
        <div class="news-container">
            <article class="news-item">
                <h3>Новая коллекция весна-лето 2025</h3>
                <p>Мы рады представить нашу новую коллекцию! Успейте приобрести лучшие товары.</p>
            </article>
            <article class="news-item">
                <h3>Скидки до 50% на распродаже!</h3>
                <p>Не упустите шанс купить товары по сниженным ценам. Акция действует до конца месяца.</p>
            </article>
        </div>
    </section>

    <section class="best-sellers">
        <h2>Часто продаваемые товары</h2>
        <div class="product-container">
            <div class="product-card">
                <img src="images/seller/1.jpg" alt="Товар 1">
                <h3>Очки Miu Miu</h3>
                <p>Цена: 56 000 руб.</p>
                <button class="product-btn">Купить</button>
            </div>
            <div class="product-card">
                <img src="images/seller/2.jpeg" alt="Товар 2">
                <h3>Сумка Miu Miu</h3>
                <p>Цена: 295 000 руб.</p>
                <button class="product-btn">Купить</button>
            </div>
            <div class="product-card">
                <img src="images/seller/3.jpg" alt="Товар 3">
                <h3>Туфли Miu Miu</h3>
                <p>Цена: 384 000 руб.</p>
                <button class="product-btn">Купить</button>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2025 Miu Miu. Все права защищены.</p>
        <p><a href="#">Политика конфиденциальности</a> | <a href="#">Условия использования</a></p>
    </footer>
</body>
</html> 