-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 29 2019 г., 20:53
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pic`
--

-- --------------------------------------------------------

--
-- Структура таблицы `url_table`
--

CREATE TABLE `url_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `url_table`
--

INSERT INTO `url_table` (`id`, `name`, `url`, `info`, `bank`) VALUES
(1, 'acorn', '/pictures/acorn.png', 'This icon', 'false'),
(2, 'Berries', '/pictures/berries.png', 'The icon', 'false'),
(3, 'honey', '/pictures/honey.png', 'The icon', 'true'),
(4, 'pie', '/pictures/pie.png', 'The icon', 'true'),
(5, 'pie', '/pictures/pie(1).png', 'The icon', 'false'),
(6, 'pilgrim', '/pictures/pilgrim.png', 'Beautifull icon', 'false'),
(7, 'squash', 'pictures/squash.png', 'Info', 'false'),
(8, 'wheat', '/pictures/wheat.png', 'Wheat icon', 'false');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `url_table`
--
ALTER TABLE `url_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `url_table`
--
ALTER TABLE `url_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
