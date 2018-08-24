-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 21, 2018 at 02:10 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `join_date` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `join_date`) VALUES
(2, 'resh', '$2y$10$BHnbdvZNOrHXkqqR/ubfRuKOcqwXP5WJnxCNeHyqRBjMzCvpzB6hu', 'abc@gmail.com', '2018-08-19 12:34:44'),
(3, 'regh', '$2y$10$FVa2iOY5xmsXVGVIWSoQC.YkHgVAkI12dnJebyV/T/EViLdQ7ZCjq', 'ddff@gmail.com', '2018-08-19 12:37:15'),
(4, 'hjjkk', '$2y$10$GZT.pPlV9Nb.DxgTa/4RMeR58zwnVdJafCiZ0hJjP32sGBaVyJ7XS', 'avg@gmail.com', '2018-08-19 14:08:35'),
(5, 'asd', '$2y$10$E.LP/H3TmC.aPCz.TzJPgucw7Kdv/Yqgy4O4eXYlZGtl/JQNwJZRG', 'ask', '2018-08-21 13:43:39');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
