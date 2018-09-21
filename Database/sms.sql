-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 21, 2018 at 03:52 AM
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
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'sourav', 'sourav');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rollno` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `gname` varchar(100) NOT NULL,
  `pcont` varchar(15) NOT NULL,
  `stream` varchar(11) NOT NULL,
  `libcrdno` varchar(15) NOT NULL,
  `image` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `rollno`, `name`, `address`, `gender`, `phno`, `fname`, `mname`, `gname`, `pcont`, `stream`, `libcrdno`, `image`) VALUES
(39, 123456789, 'Sourav', 'Narayanpur Sarath Sarani.', 'Male', '9038023375', 'Sunil Kr Das', 'Shipra Das', 'Sunil Kr Das', '123654478', 'BCA', '789456123', ''),
(38, 123456789, 'Sourav Kumar Das', 'Narayanpur Sarath Sarani.', 'Male', '9038023375', 'Sunil Kumar Das', 'Shipra Das', 'Sunil Kr Das', '9007299634', 'BCA', '789456123', 0x50686f746f2e6a7067);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
