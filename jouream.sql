-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2021 at 04:27 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jouream`
--
CREATE DATABASE IF NOT EXISTS `jouream` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `jouream`;

-- --------------------------------------------------------

--
-- Table structure for table `draft_entries`
--

DROP TABLE IF EXISTS `draft_entries`;
CREATE TABLE IF NOT EXISTS `draft_entries` (
  `draft_id` int(11) NOT NULL AUTO_INCREMENT,
  `dreamer_email` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `rating` int(1) NOT NULL,
  `hours` int(2) NOT NULL,
  `minutes` int(2) NOT NULL,
  `visibility` tinyint(1) NOT NULL,
  `tags` varchar(1000) NOT NULL,
  PRIMARY KEY (`draft_id`),
  KEY `dreamer_email` (`dreamer_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dreamers`
--

DROP TABLE IF EXISTS `dreamers`;
CREATE TABLE IF NOT EXISTS `dreamers` (
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

DROP TABLE IF EXISTS `entries`;
CREATE TABLE IF NOT EXISTS `entries` (
  `title` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `rating` int(1) NOT NULL,
  `hours` int(2) NOT NULL,
  `minutes` int(2) NOT NULL,
  `tags` varchar(1000) NOT NULL,
  `content` varchar(8000) NOT NULL,
  `visibility` tinyint(1) NOT NULL,
  `entry_id` int(11) NOT NULL AUTO_INCREMENT,
  `dreamer_email` varchar(100) NOT NULL,
  PRIMARY KEY (`entry_id`),
  KEY `dreamer_email` (`dreamer_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
