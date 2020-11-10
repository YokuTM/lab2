-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 10 2020 г., 12:07
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
-- База данных: `users`
--

-- --------------------------------------------------------

--
-- Структура таблицы `student`
--

CREATE TABLE `student` (
  `id_user` int(50) NOT NULL COMMENT 'Код студента',
  `full_name` text NOT NULL COMMENT 'Имя студента',
  `faculty` text NOT NULL COMMENT 'Факультет',
  `groupa` varchar(20) NOT NULL COMMENT 'Группа',
  `num_report_card` int(50) NOT NULL COMMENT 'Номер зачетки',
  `number` bigint(50) NOT NULL COMMENT 'Номер телефона'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `student`
--

INSERT INTO `student` (`id_user`, `full_name`, `faculty`, `groupa`, `num_report_card`, `number`) VALUES
(1, 'Аликин Владимир Павлович', 'ФИРТ', 'ПИ-318', 31800000, 89656500452),
(2, 'Иванов Иван Сергеевич', 'АВИЭТ', 'АВУ-120', 31800002, 89193243937),
(3, 'Перов Петр Сергеевич ', 'ИНЭК', 'ФЭБ-142', 31800003, 89193243938);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
