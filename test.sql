-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 12, 2025 at 03:27 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(12) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(5, 'nati', '0455'),
(6, 'nati', '0455');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `comment` varchar(2556) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment`, `date`) VALUES
(2, 'this website is good \r\nthanks nati and yeshewaz.        more credit my teacher i realy aprechest your help my teacher ', '2025-01-26 15:26:32.000000'),
(3, 'no send my choise movie please give me ', '2025-01-26 15:31:47.000000'),
(4, 'not send my movie', '2025-01-27 04:00:37.000000'),
(5, 'i am moti ', '2025-01-30 13:43:38.000000'),
(6, 'perfect', '2025-02-10 14:43:26.000000');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `Id` int(11) NOT NULL,
  `fname` int(32) NOT NULL COMMENT 'nati ebisa',
  `lname` int(34) NOT NULL,
  `age` int(35) NOT NULL,
  `email` int(34) NOT NULL,
  `password` int(34) NOT NULL,
  `department` int(34) NOT NULL,
  `date` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `filmnet`
--

CREATE TABLE IF NOT EXISTS `filmnet` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `fname` varchar(32) NOT NULL COMMENT 'nati ebisa',
  `lname` varchar(34) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

--
-- Dumping data for table `filmnet`
--

INSERT INTO `filmnet` (`id`, `fname`, `lname`, `username`, `password`, `email`, `date`) VALUES
(62, 'nati', 'ebisa', 'nahi', '0455', 'nationly623@gmail.com', '2025-01-26 15:18:29.000000'),
(63, 'kristian', 'koromi', 'kris', '123', 'kris@gmail.com', '2025-01-26 15:37:08.000000'),
(64, 'boy', 'what', 'boy', '124', 'boy@gmail.com', '2025-01-26 15:38:03.000000'),
(68, 'yeshewaz ', 'sentayew', 'yesh', '098', 'yesh@gmail.com', '2025-01-26 15:47:31.000000'),
(70, 'yasin', 'kadir', 'yasu', '1111', 'yesu@gmail.com', '2025-01-27 03:53:44.000000'),
(72, 'moti', 'deble', 'moti', '1212', 'moti@gmail.com', '2025-01-30 13:37:25.000000'),
(73, 'yeshewaz', 'sentayew', 'sent', '0909', 'yesh@gmail.com', '2025-01-31 04:01:33.000000'),
(74, '', '', '', '', '', '2025-01-31 04:01:47.000000'),
(76, 'henok', 'legese', 'heni', 'naha', 'he1@gmail.com', '2025-02-10 14:32:24.000000'),
(77, '', '', '', '', '', '2025-02-10 14:46:24.000000'),
(78, '', '', '', '', '', '2025-02-10 14:46:39.000000'),
(79, 'nati', 'ebisa', 'nati', '0455', '2323@gmail.com', '2025-02-10 14:46:59.000000'),
(80, 'yeshewaz', 'sentayew', 'yash', '0987', 'yesh@gmail.com', '2025-02-11 14:06:48.000000'),
(81, '', '', '', '', '', '2025-02-11 14:07:12.000000');

-- --------------------------------------------------------

--
-- Table structure for table `film_db`
--

CREATE TABLE IF NOT EXISTS `film_db` (
  `id` int(56) NOT NULL AUTO_INCREMENT,
  `title` varchar(36) NOT NULL,
  `director` varchar(365) NOT NULL,
  `release_year` int(154) NOT NULL,
  `genre` varchar(35) NOT NULL,
  `description` text NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `film_db`
--

INSERT INTO `film_db` (`id`, `title`, `director`, `release_year`, `genre`, `description`, `date`) VALUES
(1, 'hjghf', 'dghfg', 8, 'fdg', 'bdgdtcxf', '2025-02-11 15:45:27.815855'),
(2, 'hjghf', 'dghfg', 8, 'fdg', '', '2025-02-11 15:52:36.593226'),
(3, 'hjghf', 'dghfg', 8, 'fdg', '', '2025-02-11 15:52:46.806687'),
(4, 'hjghf', 'dghfg', 8, 'fdg', '', '2025-02-11 15:52:55.044047');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `username`, `password`, `date`) VALUES
(29, '', '', '2025-01-26 15:32:56.000000'),
(30, '', '', '2025-01-26 15:45:32.000000'),
(31, '', '', '2025-01-27 04:01:02.000000'),
(32, '', '', '2025-01-30 13:44:12.000000'),
(33, '', '0455', '2025-01-31 02:19:41.000000'),
(34, '', '', '2025-01-31 04:04:07.000000'),
(35, '', '0455', '2025-02-10 14:44:00.000000'),
(36, '', '0455', '2025-02-10 14:48:17.000000'),
(37, '', '', '2025-02-10 14:50:36.000000'),
(38, '', '', '2025-02-10 16:03:32.000000'),
(39, '', '', '2025-02-10 16:06:06.000000'),
(40, '', '', '2025-02-10 16:09:15.000000'),
(41, '', '', '2025-02-10 16:11:23.000000'),
(42, '', '', '2025-02-11 13:49:12.000000'),
(43, '', '', '2025-02-11 14:26:08.000000');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pyment`
--

CREATE TABLE IF NOT EXISTS `pyment` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `movie` varchar(255) NOT NULL,
  `name` varchar(2) NOT NULL,
  `usernametelegram` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `File` varchar(9999) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `pyment`
--

INSERT INTO `pyment` (`id`, `movie`, `name`, `usernametelegram`, `password`, `File`, `date`) VALUES
(7, 'jumman', 'na', 'nati_124', '0455', '', '2025-01-26 14:20:25.000000'),
(8, 'external part 2', 'na', 'nati_0455', '0455', '', '2025-01-26 15:30:00.000000'),
(9, 'figth clob', 'ya', 'ykg', '1111', '', '2025-01-27 03:58:14.000000'),
(10, 'tom and jerry', 'mo', 'moti_23', '1212', '', '2025-01-30 13:42:52.000000'),
(11, '', '', '', '', '', '2025-02-10 14:42:06.000000'),
(12, 'lucky', 'he', 'hena_124', 'nahe', '', '2025-02-10 14:48:00.000000'),
(13, '', '', '', '', '', '2025-02-10 16:01:56.000000'),
(14, '', '', '', '', '', '2025-02-10 16:05:55.000000'),
(15, 'bad boys', 'he', 'hena_124', 'nahe', '', '2025-02-10 16:07:49.000000'),
(16, 'bad boys', 'na', 'nati_124', '0455', '', '2025-02-10 16:08:14.000000'),
(17, 'cobra kay', 'ba', 'baruk_2323', '2323', '', '2025-02-10 16:10:49.000000');

-- --------------------------------------------------------

--
-- Table structure for table `qiuz`
--

CREATE TABLE IF NOT EXISTS `qiuz` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `fname` varchar(2556) NOT NULL,
  `lname` varchar(56) NOT NULL,
  `username` varchar(56) NOT NULL,
  `password` varchar(56) NOT NULL,
  `email` varchar(56) NOT NULL,
  `select` int(56) NOT NULL,
  `gender` int(56) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `qiuz`
--

INSERT INTO `qiuz` (`id`, `fname`, `lname`, `username`, `password`, `email`, `select`, `gender`, `date`) VALUES
(1, 'nati', 'ebisa', 'nahi', '1212', 'nati@gmail.com', 0, 0, '2025-01-31 02:39:22.000000'),
(2, 'jon', 'boss', 'yap', '235', 'jon@gmail.com', 0, 0, '2025-01-31 02:44:14.000000'),
(3, '', '', '', '', '', 0, 0, '2025-01-31 02:52:00.000000'),
(4, '', '', '', '', '', 0, 0, '2025-01-31 02:53:08.000000'),
(5, 'jon', 'boss', 'yap', '4566', 'jon@gmail.com', 0, 0, '2025-01-31 03:13:47.000000'),
(6, 'jon', 'boss', 'yap', '35533', 'jon@gmail.com', 0, 0, '2025-01-31 03:14:14.000000'),
(7, 'jon', 'boss', 'yap', '465476', 'jon@gmail.com', 0, 0, '2025-01-31 03:16:02.000000'),
(8, 'nati', 'ebisa', 'aasas', '1212', '2323@gmail.com', 0, 0, '2025-02-11 14:47:44.000000'),
(9, 'fufu', 'ebisa', 'aasas', '1212', '2323@gmail.com', 0, 0, '2025-02-11 14:48:01.000000'),
(10, '', '', '', '', '', 0, 0, '2025-02-11 15:22:10.000000');

-- --------------------------------------------------------

--
-- Table structure for table `user_db`
--

CREATE TABLE IF NOT EXISTS `user_db` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `release_date` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
