-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 28, 2020 at 07:38 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `budget`
--

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

DROP TABLE IF EXISTS `expense`;
CREATE TABLE IF NOT EXISTS `expense` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_expense` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `date_of_expense` date DEFAULT NULL,
  `amount_spent` int(11) DEFAULT NULL,
  `by_whom` varchar(255) DEFAULT NULL,
  `bill` longblob,
  `users_id` int(11) DEFAULT NULL,
  `plan_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `title_expense`, `date_of_expense`, `amount_spent`, `by_whom`, `bill`, `users_id`, `plan_id`) VALUES
(1, 'Ticket', '2020-05-31', 2520, 'Aman', 0x696d672f32382d30352d323032302d313539303637303234352e6a7067, 1, 1),
(2, 'Dinner', '2020-07-17', 1500, 'Psyduck', 0x4e6f2066696c652063686f6f73656e, 2, 2),
(3, 'Cab', '2020-07-18', 1200, 'Pikachu', 0x4e6f2066696c652063686f6f73656e, 2, 2),
(4, 'Shopping', '2020-07-19', 10000, 'Charizard', 0x4e6f2066696c652063686f6f73656e, 2, 2),
(5, 'train ticket', '2020-05-29', 2500, 'Arun', 0x4e6f2066696c652063686f6f73656e, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

DROP TABLE IF EXISTS `plan`;
CREATE TABLE IF NOT EXISTS `plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_trip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `_from` date DEFAULT NULL,
  `_to` date DEFAULT NULL,
  `ibudget` int(11) DEFAULT NULL,
  `no_of_people` int(11) DEFAULT NULL,
  `name_of_person` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`id`, `title_trip`, `_from`, `_to`, `ibudget`, `no_of_people`, `name_of_person`, `user_id`) VALUES
(1, 'Mysore', '2020-05-31', '2020-06-07', 12000, 2, 'Aman,Ashish,', 1),
(2, 'Goa', '2020-07-16', '2020-07-31', 8000, 3, 'Pikachu,Charizard,Psyduck,', 2),
(3, 'Ambikapur', '2020-05-29', '2020-05-31', 6000, 2, 'Arun,Suman,', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` bigint(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `email`, `password`, `contact`) VALUES
(1, 'Aman', 'aman@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 9999999990),
(2, 'Pikachu', 'pika@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 7697407052);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
