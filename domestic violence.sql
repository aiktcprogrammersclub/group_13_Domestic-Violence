-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 07, 2015 at 04:57 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `domestic violence`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_name` varchar(30) NOT NULL,
  `event_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_name`, `event_date`) VALUES
('Blood Donation camp', '2015-12-03'),
('dsf', '1994-12-02'),
('dsf', '1994-12-02'),
('dvg', '0000-00-00'),
('dvg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `username` varchar(30) NOT NULL,
  `rate` int(11) NOT NULL,
  `suggestions` varchar(30) NOT NULL,
  `queries` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`username`, `rate`, `suggestions`, `queries`) VALUES
('piu', 5, 'qwert', 'asd'),
('aju', 5, 'no', 'no'),
('aju', 5, 'no', 'no'),
('aju', 5, 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `new_user`
--

CREATE TABLE IF NOT EXISTS `new_user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_user`
--

INSERT INTO `new_user` (`username`, `password`, `fname`, `lname`, `dob`, `email`) VALUES
('asd', 'asdasd', 'A', 'B', '01/01/1994', 'asd@gmail.com'),
('qwe', 'qweqwe', 'X', 'Y', '15/12/1993', 'qwe@gmail.com'),
('poi', '123456789', 'nsx', 'dsvf', '1994-12-12', 'pawarpriyankavijay@yahoo.com'),
('fdgvf', 'fdgvf', 'fdgv', 'fdgv', '2586-01-01', 'dsv@g.com'),
('fdgvf', 'fdgvf', 'fdgv', 'fdgv', '2586-01-01', 'dsv@g.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `user_id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_id`, `password`) VALUES
('piu', 'piu123'),
('yugs', 'yugs123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
