-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 06, 2014 at 08:23 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1-log
-- PHP Version: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE IF NOT EXISTS `entries` (
  `id` int(10) unsigned NOT NULL,
  `timestamp` datetime NOT NULL,
  `text` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(4) unsigned NOT NULL,
  `month` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `entries`
--

INSERT INTO `entries` (`id`, `timestamp`, `text`, `year`, `month`) VALUES
(9, '2014-12-06 11:00:12', 'test', 2014, 'December'),
(9, '2014-12-06 14:14:36', 'asdfasdfasdf\r\n', 2014, 'December'),
(9, '2014-12-06 16:21:18', 'asdfasdffasdf', 2014, 'December'),
(9, '2014-12-06 16:22:37', 'teststeasfd', 2014, 'December'),
(9, '2014-12-06 16:43:26', 'this day i did this', 2014, 'December'),
(9, '2014-12-06 16:43:37', 'that day i did that', 2014, 'December'),
(9, '2014-12-06 16:43:53', 'another day I ate chick-fil-a', 2014, 'December'),
(9, '2014-12-06 20:07:37', 'asdfasdfasdf', 2014, 'December');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `hash`) VALUES
(1, 'belindazeng', '$1$50$oxJEDBo9KDStnrhtnSzir0'),
(2, 'caesar', '$1$50$GHABNWBNE/o4VL7QjmQ6x0'),
(3, 'jharvard', '$1$50$RX3wnAMNrGIbgzbRYrxM1/'),
(4, 'malan', '$1$50$lJS9HiGK6sphej8c4bnbX.'),
(5, 'rob', '$1$HA$l5llES7AEaz8ndmSo5Ig41'),
(6, 'skroob', '$1$50$euBi4ugiJmbpIbvTTfmfI.'),
(7, 'zamyla', '$1$50$uwfqB45ANW.9.6qaQ.DcF.'),
(8, 'trevor', '$1$2xadQ8z4$s6TaNyC449Aui1LaoOpM60'),
(9, 'trevor2', '$1$AWqmB/YN$vs4d0cwp4c/jXqK8Az9ja1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
