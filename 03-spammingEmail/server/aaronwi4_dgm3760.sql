-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 05, 2017 at 11:56 PM
-- Server version: 5.6.32-78.1-log
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aaronwi4_dgm3760`
--

-- --------------------------------------------------------

--
-- Table structure for table `tour_inquiries`
--

CREATE TABLE IF NOT EXISTS `tour_inquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(90) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `destination` varchar(50) DEFAULT NULL,
  `guide` varchar(50) DEFAULT NULL,
  `language` varchar(25) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_inquiries`
--

INSERT INTO `tour_inquiries` (`id`, `name`, `address`, `email`, `destination`, `guide`, `language`) VALUES
(1, 'John Smith', '123 Hollywood Drive', 'john@gmail.com', 'Rome', 'Braden Clark', 'English'),
(2, 'Sally Wright', '999 West Street', 'sally@gmail.com', 'Italy', 'Tyler White', 'Italian');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tour_inquiries`
--
ALTER TABLE `tour_inquiries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tour_inquiries`
--
ALTER TABLE `tour_inquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
