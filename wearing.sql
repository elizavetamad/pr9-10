-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 20 2025 г., 14:02
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `wearing`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `size` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `size`, `image`) VALUES
(1, 'Очки Miu Miu', '56000', '50', 'http://ezhova/9-10pr/images/products/1.jpg'),
(2, 'Кольцо Miu Miu', '70000', '17-19', 'http://ezhova/9-10pr/images/products/2.jpg'),
(3, 'Очки Miu Miu', '56000', '50', 'http://ezhova/9-10pr/images/products/3.jpg'),
(4, 'Сумка Miu Miu', '384000', '-', 'http://ezhova/9-10pr/images/products/4.jpg'),
(5, 'Кеды Miu Miu', '89000', '37,38,39', 'http://ezhova/9-10pr/images/products/5.jpg'),
(6, 'Кольцо Miu Miu', '119000', '17,18,19', 'http://ezhova/9-10pr/images/products/6.jpg'),
(7, 'Сумка Miu Miu', '390000', '-', 'http://ezhova/9-10pr/images/products/7.jpg'),
(8, 'Кеды Miu Miu', '198000', '37,38,39', 'http://ezhova/9-10pr/images/products/8.jpg'),
(9, 'Заколка Miu Miu', '74000', '-', 'http://ezhova/9-10pr/images/products/9.jpg'),
(10, 'Кеды Miu Miu', '187000', '38,39,40', 'http://ezhova/9-10pr/images/products/10.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `login`, `password`) VALUES
(22, '', '', ''),
(23, 'Елизавета', 'elizaveta2', '123456'),
(24, 'лиза', '12', '12345');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
