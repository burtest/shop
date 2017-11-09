-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 09, 2017 at 07:23 PM
-- Server version: 5.5.45
-- PHP Version: 5.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `catalogs`
--

CREATE TABLE IF NOT EXISTS `catalogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `body` text NOT NULL,
  `type` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `catalogs`
--

INSERT INTO `catalogs` (`id`, `name`, `body`, `type`) VALUES
(1, 'Каталог', 'Внешний облик самого «злого» и быстрого Камаро отличается от экстерьера обычного купе более солидным аэродинамическим обвесом, широкими передними крыльями, увеличенными секциями воздухозаборников бампера, оригинальным исполнением решетки радиатора и спойлера на крышке багажника. Капот версии ZL1 снабжен специальными прорезями, позволяющими эффективно отводить тепло из моторного отсека. Вообще же для предотвращения перегрева двигателя и коробки предусмотрено сразу несколько зон теплообмена, гарантирующих должное охлаждение узлов даже на предельных режимах работы. Аэродинамические показатели были оптимизированы в результате длительных (около 100 часов) тестов в аэродинамической трубе.', 'nodes');

-- --------------------------------------------------------

--
-- Table structure for table `maintexts`
--

CREATE TABLE IF NOT EXISTS `maintexts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `body` text NOT NULL,
  `url` tinytext NOT NULL,
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show',
  `lang` enum('ru','en') NOT NULL DEFAULT 'ru',
  `putdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `maintexts`
--

INSERT INTO `maintexts` (`id`, `name`, `body`, `url`, `showhide`, `lang`, `putdate`) VALUES
(1, 'Добро пожаловать на сайт', 'Внешний облик самого «злого» и быстрого Камаро отличается от экстерьера обычного купе более солидным аэродинамическим обвесом, широкими передними крыльями, увеличенными секциями воздухозаборников бампера, оригинальным исполнением решетки радиатора и спойлера на крышке багажника. Капот версии ZL1 снабжен специальными прорезями, позволяющими эффективно отводить тепло из моторного отсека. Вообще же для предотвращения перегрева двигателя и коробки предусмотрено сразу несколько зон теплообмена, гарантирующих должное охлаждение узлов даже на предельных режимах работы. Аэродинамические показатели были оптимизированы в результате длительных (около 100 часов) тестов в аэродинамической трубе.', 'index', 'show', 'ru', '2017-10-24'),
(2, 'контакты', 'ground', 'contacts', 'show', 'ru', '2017-10-24'),
(3, 'О нас', 'Внешний облик самого «злого» и быстрого Камаро отличается от экстерьера обычного купе более солидным аэродинамическим обвесом, широкими передними крыльями, увеличенными секциями воздухозаборников бампера, оригинальным исполнением решетки радиатора и спойлера на крышке багажника. Капот версии ZL1 снабжен специальными прорезями, позволяющими эффективно отводить тепло из моторного отсека. Вообще же для предотвращения перегрева двигателя и коробки предусмотрено сразу несколько зон теплообмена, гарантирующих должное охлаждение узлов даже на предельных режимах работы. Аэродинамические показатели были оптимизированы в результате длительных (около 100 часов) тестов в аэродинамической трубе.', 'about', 'show', 'ru', '2017-10-24'),
(4, 'данные', 'Внешний облик самого «злого» и быстрого Камаро отличается от экстерьера обычного купе более солидным аэродинамическим обвесом, широкими передними крыльями, увеличенными секциями воздухозаборников бампера, оригинальным исполнением решетки радиатора и спойлера на крышке багажника. Капот версии ZL1 снабжен специальными прорезями, позволяющими эффективно отводить тепло из моторного отсека. Вообще же для предотвращения перегрева двигателя и коробки предусмотрено сразу несколько зон теплообмена, гарантирующих должное охлаждение узлов даже на предельных режимах работы. Аэродинамические показатели были оптимизированы в результате длительных (около 100 часов) тестов в аэродинамической трубе.', 'services', 'show', 'ru', '2017-10-24');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `body` text NOT NULL,
  `picture` tinytext NOT NULL,
  `price` tinytext NOT NULL,
  `vip` tinytext NOT NULL,
  `putdate` date NOT NULL,
  `url` tinytext NOT NULL,
  `product_code` tinytext NOT NULL,
  `status` tinytext NOT NULL,
  `catalog_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `body`, `picture`, `price`, `vip`, `putdate`, `url`, `product_code`, `status`, `catalog_id`, `user_id`) VALUES
(6, '$uicideboy$', 'music', 'e88d4d32367575.567dd76b5ce97.jpg', '-', '0', '2017-11-02', '-', '171102035934', 'new', 1, 10),
(10, 'shark', 'qwe', '4-qO5eCGP3Q.jpg', '-', '0', '2017-11-02', '-', '171102074510', 'new', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `password` tinytext NOT NULL,
  `blockunblock` enum('unblock','block') NOT NULL DEFAULT 'unblock',
  `datareg` date NOT NULL,
  `lastvisit` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `blockunblock`, `datareg`, `lastvisit`) VALUES
(10, 'sj', 'yan@bk.ru', '1234', 'unblock', '2017-11-02', '2017-11-02 15:00:07'),
(14, 'sj', 'qwe@bk', '123', 'unblock', '2017-11-02', '2017-11-02 15:17:39');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
