-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 13 2023 г., 02:33
-- Версия сервера: 5.7.33
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `aeon_test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `test_users`
--

CREATE TABLE `test_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` char(32) NOT NULL,
  `birthday` date DEFAULT NULL,
  `img_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `test_users`
--

INSERT INTO `test_users` (`id`, `name`, `login`, `password`, `birthday`, `img_path`) VALUES
(1, 'Пупкин', 'pupkin', '827ccb0eea8a706c4c34a16891f84e7b', '2013-04-10', NULL),
(2, 'Анхель Ди Мария', 'maria', '202cb962ac59075b964b07152d234b70', NULL, 'angel_di_maria.jpeg'),
(3, 'Лука Модрич', 'modrich', '698d51a19d8a121ce581499d7b701668', '1985-09-09', 'luka_modrich.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `test_users`
--
ALTER TABLE `test_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `test_users`
--
ALTER TABLE `test_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
