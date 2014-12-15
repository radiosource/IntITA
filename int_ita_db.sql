-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 15 2014 г., 22:46
-- Версия сервера: 5.6.21
-- Версия PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `int_ita_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `Student` tinyint(1) NOT NULL,
  `Teacher` tinyint(1) NOT NULL,
  `Admin` tinyint(1) NOT NULL,
  `user_email` varchar(35) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_passwd` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_hash` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `Student`, `Teacher`, `Admin`, `user_email`, `user_passwd`, `user_hash`, `user_status`) VALUES
(1, 0, 0, 0, 'andrew@ukr.net', '1bbd886460827015e5d605ed44252251', NULL, NULL),
(3, 0, 0, 0, 'user2@ukr.net', 'bae5e3208a3c700e3db642b6631e95b9', '855612', 1),
(5, 0, 0, 0, 'user3@ukr.net', 'a1a9ef002ccd10a714ddb0ac515899f8', '5575805', 1),
(6, 0, 0, 0, 'user4@ukr.net', '1bbd886460827015e5d605ed44252251', '5391784', 1),
(7, 0, 0, 0, 'user5@ukr.net', '30e535568de1f9231e7d9df0f4a5a44d', '2612243', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
`id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `add_Email` varchar(255) DEFAULT NULL,
  `phone` varchar(14) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_info`
--

INSERT INTO `user_info` (`id`, `f_name`, `l_name`, `s_name`, `add_Email`, `phone`) VALUES
(1, 'vasya', 'vasichkin', 'vasiliev', 'vasya@i.a', '2147483647'),
(2, 'andriy', 'guchko', 'petrovich', 'petruha@i.ua', '2147483647'),
(3, 'petya', 'petrov', 'petrovich', 'petruha@i.ua', '2147483647'),
(4, 'tanya', 'tanya', 'TANYA', 'TANYA@uy', '3698754'),
(5, 'Ivan', 'Ivanov', 'Ivanivich', 'ivan@i.ua', '367874984'),
(63, 'Kravchuk', 'Ivan', 'Anatoliyovich', 'sd@sfds.sdf', '+38(256)333455'),
(66, '', '', '', '', '+38');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- Индексы таблицы `user_info`
--
ALTER TABLE `user_info`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `user_info`
--
ALTER TABLE `user_info`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
