-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.21-log - MySQL Community Server (GPL)
-- ОС Сервера:                   Win64
-- HeidiSQL Версия:              9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры базы данных int_ita_db
CREATE DATABASE IF NOT EXISTS `int_ita_db` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `int_ita_db`;


-- Дамп структуры для таблица int_ita_db.course
CREATE TABLE IF NOT EXISTS `course` (
  `CourseID` int(11) NOT NULL AUTO_INCREMENT,
  `CourseName` varchar(45) NOT NULL,
  `CourseDurationHours` int(11) NOT NULL,
  PRIMARY KEY (`CourseID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы int_ita_db.course: ~9 rows (приблизительно)
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` (`CourseID`, `CourseName`, `CourseDurationHours`) VALUES
	(1, 'Course 1. OOP', 40),
	(2, 'Course 2. Programming', 120),
	(3, 'Course 3. Math', 30),
	(4, 'Course 4. Discrete math', 40),
	(5, 'Course 5', 36),
	(6, 'Course 6', 130),
	(7, 'Course 7', 64),
	(8, 'Course 8', 54),
	(9, 'Course 9', 90);
/*!40000 ALTER TABLE `course` ENABLE KEYS */;


-- Дамп структуры для таблица int_ita_db.hometasks
CREATE TABLE IF NOT EXISTS `hometasks` (
  `HomeTaskID` int(11) NOT NULL AUTO_INCREMENT,
  `fkModuleID` int(11) NOT NULL,
  `fkLectureID` int(11) NOT NULL,
  `HomeTaskName` varchar(45) NOT NULL,
  `HomeTaskDescription` varchar(45) NOT NULL,
  `HomeTask` varchar(255) NOT NULL,
  PRIMARY KEY (`HomeTaskID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы int_ita_db.hometasks: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `hometasks` DISABLE KEYS */;
INSERT INTO `hometasks` (`HomeTaskID`, `fkModuleID`, `fkLectureID`, `HomeTaskName`, `HomeTaskDescription`, `HomeTask`) VALUES
	(1, 23, 34, 'Hometask 1', 'Description 1', 'URL 1'),
	(2, 2, 2, 'Hometask 2', 'Descipion 2', 'URL 2');
/*!40000 ALTER TABLE `hometasks` ENABLE KEYS */;


-- Дамп структуры для таблица int_ita_db.lectures
CREATE TABLE IF NOT EXISTS `lectures` (
  `LectureID` int(11) NOT NULL AUTO_INCREMENT,
  `fkCourseID` int(11) NOT NULL,
  `fkModuleID` int(11) NOT NULL,
  `NameClasses` varchar(45) NOT NULL,
  `GoalOfClasses` varchar(45) NOT NULL,
  `TotalNumberOfItems` int(11) NOT NULL,
  `Duration` int(11) NOT NULL,
  PRIMARY KEY (`LectureID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы int_ita_db.lectures: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `lectures` DISABLE KEYS */;
INSERT INTO `lectures` (`LectureID`, `fkCourseID`, `fkModuleID`, `NameClasses`, `GoalOfClasses`, `TotalNumberOfItems`, `Duration`) VALUES
	(1, 1, 1, 'Name classes 1', 'Goal of classes 1', 10, 100),
	(2, 2, 2, 'Name classes 2', 'Goal of classes 2', 5, 50),
	(3, 3, 3, 'Name of classes 3', 'Goal of classes 3 ', 3, 30);
/*!40000 ALTER TABLE `lectures` ENABLE KEYS */;


-- Дамп структуры для таблица int_ita_db.modules
CREATE TABLE IF NOT EXISTS `modules` (
  `ModuleID` int(11) NOT NULL AUTO_INCREMENT,
  `ModuleName` varchar(45) NOT NULL,
  `ModuleDurationHours` int(11) NOT NULL,
  `ModuleDurationDays` int(11) NOT NULL,
  PRIMARY KEY (`ModuleID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы int_ita_db.modules: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `modules` DISABLE KEYS */;
INSERT INTO `modules` (`ModuleID`, `ModuleName`, `ModuleDurationHours`, `ModuleDurationDays`) VALUES
	(1, 'Module 1', 40, 20),
	(2, 'Module 2', 30, 15),
	(3, 'Module 3', 60, 30);
/*!40000 ALTER TABLE `modules` ENABLE KEYS */;


-- Дамп структуры для таблица int_ita_db.tests
CREATE TABLE IF NOT EXISTS `tests` (
  `TestID` int(11) NOT NULL AUTO_INCREMENT,
  `fkModuleID` int(11) NOT NULL,
  `fkLectureID` int(11) NOT NULL,
  `TestName` varchar(45) NOT NULL,
  `TestDescription` varchar(45) NOT NULL,
  `TestURL` varchar(45) NOT NULL,
  PRIMARY KEY (`TestID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы int_ita_db.tests: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `tests` DISABLE KEYS */;
INSERT INTO `tests` (`TestID`, `fkModuleID`, `fkLectureID`, `TestName`, `TestDescription`, `TestURL`) VALUES
	(1, 2, 2, 'Test 2', 'Description 2', 'URL 2'),
	(2, 3, 3, 'Test 3', 'Description 3', 'URL 3');
/*!40000 ALTER TABLE `tests` ENABLE KEYS */;


-- Дамп структуры для таблица int_ita_db.theoreticalsmaterials
CREATE TABLE IF NOT EXISTS `theoreticalsmaterials` (
  `TMID` int(11) NOT NULL AUTO_INCREMENT,
  `fkModuleID` int(11) NOT NULL,
  `fkLectureID` int(11) NOT NULL,
  `TMName` varchar(45) NOT NULL,
  `TMDescription` varchar(45) NOT NULL,
  `TM` varchar(255) NOT NULL,
  PRIMARY KEY (`TMID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы int_ita_db.theoreticalsmaterials: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `theoreticalsmaterials` DISABLE KEYS */;
INSERT INTO `theoreticalsmaterials` (`TMID`, `fkModuleID`, `fkLectureID`, `TMName`, `TMDescription`, `TM`) VALUES
	(1, 1, 1, 'TM 1', 'Description 1', 'URL 1'),
	(2, 2, 2, 'TM 2', 'Description 2', 'URL 2');
/*!40000 ALTER TABLE `theoreticalsmaterials` ENABLE KEYS */;


-- Дамп структуры для таблица int_ita_db.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(35) NOT NULL,
  `user_passwd` varchar(40) NOT NULL,
  `user_hash` varchar(20) NOT NULL,
  `user_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы int_ita_db.users: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`, `user_email`, `user_passwd`, `user_hash`, `user_status`) VALUES
	(1, 'mail1@mail.com', 'qwerty', '67896', 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Дамп структуры для таблица int_ita_db.videos
CREATE TABLE IF NOT EXISTS `videos` (
  `VideoID` int(11) NOT NULL AUTO_INCREMENT,
  `fkModuleID` int(11) NOT NULL,
  `fkLectureID` int(11) NOT NULL,
  `VideoName` varchar(45) NOT NULL,
  `VideoDescription` varchar(45) NOT NULL,
  `VideoURL` varchar(45) NOT NULL,
  `VideoDurationSeconds` int(11) NOT NULL,
  PRIMARY KEY (`VideoID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы int_ita_db.videos: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` (`VideoID`, `fkModuleID`, `fkLectureID`, `VideoName`, `VideoDescription`, `VideoURL`, `VideoDurationSeconds`) VALUES
	(1, 1, 1, 'Video 1', 'Description 1', 'URL 1', 344);
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
