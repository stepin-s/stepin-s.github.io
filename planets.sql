-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 01 2019 г., 16:18
-- Версия сервера: 5.6.43
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `solar_system`
--

-- --------------------------------------------------------

--
-- Структура таблицы `planets`
--

CREATE TABLE `planets` (
  `id` tinyint(1) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `planets`
--

INSERT INTO `planets` (`id`, `name`, `position`, `location`) VALUES
(46, 'John Konor', 'C.E.O', 'Moscow'),
(47, 'Sara Konor', 'via C.E.O', 'London'),
(48, 'Petr Ivanov', 'rabotyaga', 'Kiev'),
(50, 'Fedor Petrov', 'rabotyaga', 'Valencia'),
(51, 'Viktor Vlasov', 'rabotyaga', 'Moscow'),
(53, 'Paul Gilbert', 'marketolog', 'Kiev'),
(54, 'Jillian Mour', 'marketolog', 'Moscow'),
(55, 'Michael Schumakher', 'rabotyaga', 'Valencia'),
(56, 'Rojer Federrer', 'rabotyaga', 'London'),
(57, 'Robert Paulson', 'rabotyaga', 'Moscow'),
(58, 'Joe Satriani', 'rabotyaga', 'London'),
(59, 'Papa Jones', 'rabotyaga', 'Kiev'),
(60, 'Zhanna D\'ark', 'rabotyaga', 'Kiev'),
(61, 'Lisa Ann', 'rabotyaga', 'Valencia'),
(62, 'Piter Griffin', 'rabotyaga', 'London'),
(63, 'Sara Jessica Parker', 'rabotyaga', 'Moscow'),
(64, 'Rocco Sifredi', 'rabotyaga', 'Valencia'),
(66, 'Iban Ibanov', 'rabotyaga', 'Moscow');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `planets`
--
ALTER TABLE `planets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `planets`
--
ALTER TABLE `planets`
  MODIFY `id` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
