-- phpMyAdmin SQL Dump
-- version 3.1.2deb1ubuntu0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2010 at 07:03 PM
-- Server version: 5.0.75
-- PHP Version: 5.2.6-3ubuntu4.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `album`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `Id` int(11) NOT NULL auto_increment,
  `album_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `instr` varchar(50) NOT NULL,
  `year` int(11) NOT NULL,
  `picture` varchar(25) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`Id`, `album_id`, `name`, `type`, `gender`, `instr`, `year`, `picture`) VALUES
(91, 3, 'English Pop', 'pop', 'male', 'vocals', 2009, ''),
(89, 1, 'Dangerous', 'jazz', 'female', 'violin', 2007, 'google-ad.jpg'),
(90, 2, 'Yogi B', 'pop', 'male', 'drums', 2008, 'pic2.jpg'),
(93, 4, 'Gurus of Peace', 'pop', 'male', 'vocals', 2000, 'preview.jpg');
