-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Generation Time: May 10, 2019 at 02:24 PM
-- Server version: 8.0.15
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `410project`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--
-- Creation: May 05, 2019 at 12:04 PM
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `prof_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_prof_id` (`prof_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `class`, `description`, `prof_id`) VALUES
(1, 'Introduction to Computer Science', 'An introduction to Comp Sci', 1),
(7, 'Algorithms I', 'A basic class on alogrithms', 6);

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--
-- Creation: May 08, 2019 at 07:36 PM
-- Last update: May 08, 2019 at 07:36 PM
--

DROP TABLE IF EXISTS `professor`;
CREATE TABLE IF NOT EXISTS `professor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `office` varchar(20) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`id`, `name`, `office`, `phone`, `email`, `username`, `password`) VALUES
(1, 'John Ryan', 'W001', '5181111111', 'jryan@wuniv.com', 'userprofessor1', 'passprofessor1'),
(6, 'Jane Doe', 'R109', '5182923339', 'jdoe@wuniv.com', 'userprofessor2', 'passprofessor2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: May 10, 2019 at 02:19 AM
-- Last update: May 08, 2019 at 07:38 PM
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `major` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `major`, `status`, `username`, `password`) VALUES
(1, 'Kyle Welch', 'Computer Science', 'Junior', 'userstudent1', 'passstudent1');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `fk_prof_id` FOREIGN KEY (`prof_id`) REFERENCES `professor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
