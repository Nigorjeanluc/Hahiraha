-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 18, 2017 at 05:33 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hahiraha`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Picture01` text NOT NULL,
  `Date` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Name`, `Password`, `Picture01`, `Date`) VALUES
(1, 'Holly', 'nd210694', 'assets/img/products/2016-05-29 16.36.13 (2).jpg', '2017-02-16 18:29:59');

-- --------------------------------------------------------

--
-- Table structure for table `messagetoadmin`
--

CREATE TABLE IF NOT EXISTS `messagetoadmin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(100) NOT NULL,
  `Reason` varchar(100) NOT NULL,
  `Content` text NOT NULL,
  `Date` datetime NOT NULL,
  `seller_Id` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `messagetoadmin`
--


-- --------------------------------------------------------

--
-- Table structure for table `messagetoseller`
--

CREATE TABLE IF NOT EXISTS `messagetoseller` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(50) NOT NULL,
  `Toooo` varchar(50) NOT NULL,
  `Reason` varchar(70) NOT NULL,
  `Content` varchar(1000) NOT NULL,
  `Date` datetime NOT NULL,
  `admin_Id` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `messagetoseller`
--


-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Seller` varchar(50) NOT NULL,
  `Classes` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Price` text NOT NULL,
  `Quantity` int(11) NOT NULL,
  `About` text NOT NULL,
  `Picture01` text NOT NULL,
  `Picture02` text NOT NULL,
  `Picture03` text NOT NULL,
  `Province` varchar(30) NOT NULL,
  `District` varchar(15) NOT NULL,
  `Sector` varchar(15) NOT NULL,
  `Categorie` varchar(50) NOT NULL,
  `Views` int(100) unsigned NOT NULL,
  `Date` varchar(30) NOT NULL,
  `seller_Id` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `seller_Id` (`seller_Id`),
  KEY `Seller` (`Name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Name`, `Seller`, `Classes`, `Phone`, `Price`, `Quantity`, `About`, `Picture01`, `Picture02`, `Picture03`, `Province`, `District`, `Sector`, `Categorie`, `Views`, `Date`, `seller_Id`) VALUES
(4, 'Carina E 2001', 'Mugabo', 'High_Class', '250728115078', '3000 Ugandan Shillings', 10, 'The perfomance', 'assets/img/products/2016-05-29 16.36.13 (2).jpg', 'assets/img/products/', 'assets/img/products/', 'Kigali City', 'Kicukiro', 'Niboye', 'Umurezi sana', 11, '2017-02-10 16:21:43', 0),
(5, 'Hotel and Restaurant', 'Meplos', 'Middle_Class', '250728115078', '1000 UG_Shillings', 16, 'Customer care', 'assets/img/products/2016-05-29 16.36.13 (2).jpg', 'assets/img/products/', 'assets/img/products/', 'Kigali City', 'Nyarugenge', 'Nyamirambo', '', 13, '2017-02-10 16:51:35', 0),
(7, 'Laptop HP', 'Igihe Ltd.', 'High_Class', '250728115078', '1000 Kenyan Shillings', 5, 'Turikumwe hano', 'assets/img/products/2016-05-29 16.36.13 (2).jpg', 'assets/img/products/2016-05-29 16.36.13 (2).jpg', 'assets/img/products/2016-05-29 16.36.13 (2).jpg', 'Northern Province', 'Gicumbi', 'Kinigi', 'Forex', 16, '2017-02-12 20:18:33', 0),
(8, 'Inzu igurishwa', 'Meplos', 'Middle_Class', '250728115078', '3000 Rfw', 17, 'Meplos arasaze', 'assets/img/products/2016-05-29 16.36.13 (2).jpg', 'assets/img/products/', 'assets/img/products/', 'Kigali City', 'Gasabo', 'Kimironko', 'Quincallerie', 17, '2017-02-13 05:15:06', 0),
(13, 'mubi', 'holy', 'Low_Class', '0787786914', '0000 Rfw', 20, 'mubi ni mubi  numurezi ntaribwa', 'assets/img/products/2016-05-29 16.36.13 (2).jpg', 'assets/img/products/', 'assets/img/products/', 'Western Province', 'Rubavu', 'rubavu', 'ubuhinzi', 3, '2017-02-24 14:24:53', 0),
(12, 'Umugati', 'Easy', 'Low_Class', '250728115078', '12000 $', 2, 'Blah Blah', 'assets/img/products/2016-05-29 16.36.13 (2).jpg', 'assets/img/products/2016-05-29 16.36.13 (2).jpg', 'assets/img/products/', 'Western Province', 'Karongi', 'Karongi', 'Supermarket', 63, '2017-02-20 16:24:43', 0),
(11, 'Isambaza', 'JayLee', 'Low_Class', '250728115078', '100000 Pounds', 4, 'He must feel me', 'assets/img/products/2016-05-29 16.36.13 (2).jpg', 'assets/img/products/', 'assets/img/products/', 'Western Province', 'Rusizi', 'Kamembe', 'Restaurant', 16, '2017-02-13 05:24:06', 0),
(14, 'jdhwdghdgd', 'Meplos', 'Middle_Class', '0787786914', 'dhdhdgdhg $', 15, 'xnmsdvsfsf', 'assets/img/products/images_6.jpeg', 'assets/img/products/', 'assets/img/products/', 'Kigali City', 'Gasabo', 'Kimironko', '', 0, '2017-03-18 15:25:50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE IF NOT EXISTS `seller` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Classes` varchar(30) NOT NULL,
  `About` text NOT NULL,
  `Picture01` text NOT NULL,
  `Picture02` text NOT NULL,
  `Picture03` text NOT NULL,
  `Province` varchar(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Sector` varchar(50) NOT NULL,
  `Categorie` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Date` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`ID`, `Name`, `Email`, `Phone`, `Classes`, `About`, `Picture01`, `Picture02`, `Picture03`, `Province`, `District`, `Sector`, `Categorie`, `Password`, `Date`) VALUES
(1, 'Meplos', 'shortcircuit@gmail.com', '0787786914', 'Middle_Class', 'The youth', 'assets/img/products/2016-05-29 16.36.13 (2).jpg', 'assets/img/products/2016-05-29 16.36.13 (2).jpg', 'assets/img/products/2016-05-29 16.36.13 (2).jpg', 'Kigali City', 'Gasabo', 'Kimironko', '', 'nd210694', '2017-02-24 14:40:20'),
(7, 'xaha', 'marketing@gmail.com', '0787786914', 'Low_Class', 'cgdutfut\r\nhiohioh\r\nhikhihi\r\njiuhiuh', 'assets/img/products/2016-05-29 16.36.13 (2).jpg', '', '', 'Southern Province', 'Nyanza', 'Kimironko', 'kooko', 'popo', '2017-02-14 16:44:06'),
(6, 'My destiny', 'destiny@gmail.com', '250789660066', 'Low_Class', 'ncncncnnc', 'assets/img/products/2016-05-29 16.36.13 (2).jpg', '', '', 'Eastern Province', 'Kayonza', 'Kabuye', 'Ubucuruzi', 'nd210694', '2017-02-14 16:20:03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
