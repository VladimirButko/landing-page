-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Сен 19 2019 г., 00:09
-- Версия сервера: 10.4.6-MariaDB
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `svetlana_sokolova`
--
CREATE DATABASE IF NOT EXISTS `svetlana_sokolova` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `svetlana_sokolova`;

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_src` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `img_src`, `active`) VALUES
(1, '/images/one.jpg', 1),
(2, '/images/two.jpg', 1),
(3, '/images/three.jpg', 1),
(4, '/images/four.jpg', 1),
(5, '/images/five.jpg', 1),
(6, '/images/six.jpg', 1),
(7, '/images/seven.jpg', 1),
(8, '/images/eight.jpg', 1),
(9, '/images/nine.jpg', 1),
(10, '/images/ten.jpg', 1),
(11, '/images/eleven.jpg', 1),
(12, '/images/twelve.jpg', 1),
(13, '/images/thirteen.jpg', 1),
(14, '/images/fourteen.jpg', 1),
(15, 'images/fifteen.jpg', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `order_application`
--

CREATE TABLE IF NOT EXISTS `order_application` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `date_subscribe` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `service_order`
--

CREATE TABLE IF NOT EXISTS `service_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `date_subscribe` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
