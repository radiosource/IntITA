-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Час створення: Січ 23 2015 р., 23:29
-- Версія сервера: 5.6.21
-- Версія PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База даних: `mydatabase`
--

-- --------------------------------------------------------

--
-- Структура таблиці `people`
--

CREATE TABLE IF NOT EXISTS `people` (
`id` int(11) NOT NULL,
  `firstName` char(255) NOT NULL,
  `lastName` char(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `birthDate` date NOT NULL,
  `item_order` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `people`
--

INSERT INTO `people` (`id`, `firstName`, `lastName`, `phone`, `birthDate`, `item_order`) VALUES
(1, 'alex', 'First', 1, '1964-04-20', 5),
(2, 'lola', 'Goose', 2, '1964-04-20', 1),
(3, 'Olga', 'Lenskaya', 2, '1986-04-20', 3),
(4, 'Vasiliy', 'Oblonsky', 2, '1986-04-20', 2),
(5, 'Petro', 'Bezuhow', 1, '1986-04-20', 4),
(6, 'Jek', 'Lee', 1, '0000-00-00', 7),
(7, 'Nenci', 'Lukas', 2, '0000-00-00', 2),
(8, 'Goofy', 'Duck', 1, '0000-00-00', 3),
(9, 'Lary', 'Smitt', 1, '0000-00-00', 6),
(10, 'Kris', 'Menson', 1, '0000-00-00', 1),
(11, 'Mickel', 'Jackson', 2, '0000-00-00', 2),
(12, 'Angelina', 'Jons', 1, '0000-00-00', 2);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `people`
--
ALTER TABLE `people`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `people`
--
ALTER TABLE `people`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
