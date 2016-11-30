-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 27, 2011 at 06:56 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `guitargasm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Username` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`) VALUES
('bilawal', 'soomro');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `a1` varchar(20) NOT NULL,
  `a2` varchar(20) NOT NULL,
  `a3` varchar(20) NOT NULL,
  `a4` varchar(20) NOT NULL,
  `a5` varchar(20) NOT NULL,
  `a6` varchar(20) NOT NULL,
  `a7` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`Name`, `Email`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`) VALUES
('Bilawal Soomro', 'bilawal_soomro2004@yahoo.com', 'six', 'Standard', 'Electric', 'Middle', 'Acoustic', 'Right', '4');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `attitude` varchar(20) NOT NULL,
  `attitude2` varchar(20) NOT NULL,
  `attitude3` varchar(20) NOT NULL,
  `attitude4` varchar(20) NOT NULL,
  `attitude5` varchar(20) NOT NULL,
  `Comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Name`, `Email`, `Country`, `attitude`, `attitude2`, `attitude3`, `attitude4`, `attitude5`, `Comment`) VALUES
('Bilawal Soomro', 'bilawal_soomro2004@y', 'PK', 'Exceptional', 'Exceptional', 'Exceptional', 'Exceptional', 'Exceptional', 'Cool Website!!'),
('jesse ', 'ryder', 'NZ', 'Exceptional', 'Exceptional', 'Exceptional', 'Exceptional', 'Exceptional', 'yeah!'),
('Michael Jackson', 'michael@yahoo.com', 'US', 'Exceptional', 'Exceptional', 'Exceptional', 'Exceptional', 'Exceptional', 'nice!'),
('ggggg', 'ggggg', 'YE', 'Exceptional', 'Exceptional', 'Exceptional', 'Exceptional', 'Exceptional', 'ggggg'),
('aaaaaa', 'aaaaa', 'TH', 'Exceptional', 'Exceptional', 'Exceptional', 'Exceptional', 'Exceptional', 'sssss'),
('fdfd', 'dfd', 'VI', 'Exceptional', 'Exceptional', 'Exceptional', 'Exceptional', 'Exceptional', 'dfd');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`) VALUES
('billy', 'silly'),
('kamalpreet', 'kaur'),
('ooo', 'ppp'),
('Billy', 'silly');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `Gender` varchar(5) NOT NULL,
  `Age` varchar(5) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Level` varchar(20) NOT NULL,
  `Account` varchar(20) NOT NULL,
  `Comment` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Fname`, `Lname`, `Gender`, `Age`, `Email`, `Country`, `City`, `Level`, `Account`, `Comment`) VALUES
('Kamalpreet', 'Kaur', 'Femal', '18', 'km@vm.com', 'KE', 'Nairobi', 'Novice', 'Free', NULL),
('asdf', 'asdf', 'Male', '85', 'fdf', 'ZM', 'adsfa', 'Novice', 'Free', 'asdfasd'),
('ccc', 'ccc', 'Male', '56', 'afgf', 'UA', 'gfgfg', 'Novice', 'Free', 'ccc'),
('Bilawal', 'Soomro', 'Male', '21', 'bilawal_soomro@gg.co', 'KE', 'Nairobi', 'Intermediate', 'Paid', 'this is my website!'),
('Bilawal', 'Soomro', 'Male', '22', 'bilawal_soomro@gg.co', 'KE', 'Nairobi', 'Intermediate', 'Paid', 'this is my website!'),
('zz', 'aa', 'Male', '21', 'zz@ss.com', 'KE', 'nai', 'Novice', 'Free', 'asasas'),
('Biffy ', 'Clyro', 'Male', '27', 'bf@yahoo.com', 'LC', 'ss', 'Advanced', 'Paid', 'ghghg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'aaa', 'sss'),
(2, 'ccc', 'ccc'),
(3, 'Billy', 'silly'),
(4, 'zzz', 'ddd'),
(5, 'bbb', 'fff');
