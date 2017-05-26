-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2017 at 09:06 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hahiraha`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Picture01` text NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `admin`:
--

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Name`, `Password`, `Picture01`, `Date`) VALUES
(1, 'Habumugisha', 'holly', 'assets/img/team/holly.jpg', '2017-04-28 09:58:56');

-- --------------------------------------------------------

--
-- Stand-in structure for view `chat`
--
CREATE TABLE `chat` (
`ID` int(11)
,`User` varchar(100)
,`Toooo` varchar(50)
,`Reason` varchar(100)
,`Content` text
,`Date` datetime
);

-- --------------------------------------------------------

--
-- Table structure for table `messagetoadmin`
--

CREATE TABLE `messagetoadmin` (
  `ID` int(11) NOT NULL,
  `User` varchar(100) NOT NULL,
  `Reason` varchar(100) NOT NULL,
  `Content` text NOT NULL,
  `Date` datetime NOT NULL,
  `seller_Id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `messagetoadmin`:
--   `User`
--       `seller` -> `Name`
--   `seller_Id`
--       `seller` -> `ID`
--

--
-- Dumping data for table `messagetoadmin`
--

INSERT INTO `messagetoadmin` (`ID`, `User`, `Reason`, `Content`, `Date`, `seller_Id`) VALUES
(25, 'Mugabo', '', 'dhfjhdjhfdj', '2017-03-31 00:11:01', 8),
(24, 'Mugabo', '', 'jdjdjdj', '2017-03-31 00:10:19', 8),
(23, 'Mugabo', '', 'sdjdjdjjdjdj', '2017-03-31 00:06:32', 8),
(26, 'Igor Musafiri', '', 'zxnbnxbnxz', '2017-04-27 01:39:22', 0),
(27, 'Igor Musafiri', '', 'bxvcbcvbx', '2017-04-27 01:40:57', 0),
(29, 'Igor Musafiri', '', 'hjhjhj', '2017-04-27 10:27:54', 0),
(30, 'Mubi', '', 'Bimeze bite', '2017-04-28 09:27:37', 0),
(31, 'Mubi', 'buy', 'ndashaka isambaza', '2017-04-28 11:32:48', 0);

-- --------------------------------------------------------

--
-- Table structure for table `messagetoseller`
--

CREATE TABLE `messagetoseller` (
  `ID` int(11) NOT NULL,
  `User` varchar(50) NOT NULL,
  `Toooo` varchar(50) NOT NULL,
  `Reason` varchar(70) NOT NULL,
  `Content` varchar(1000) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `messagetoseller`:
--   `Toooo`
--       `seller` -> `Name`
--   `User`
--       `admin` -> `Name`
--

--
-- Dumping data for table `messagetoseller`
--

INSERT INTO `messagetoseller` (`ID`, `User`, `Toooo`, `Reason`, `Content`, `Date`) VALUES
(35, 'Habumugisha', 'Mugabo', '', 'pppppppppppp', '2017-04-27 00:28:31'),
(39, 'Habumugisha', 'Igor Musafiri', '', 'mmbmbmb', '2017-04-27 02:29:19'),
(41, '', 'Mubi', '', 'zirahari', '2017-04-28 11:33:20'),
(40, 'Habumugisha', 'Igor Musafiri', '', 'jhhjhhj', '2017-04-27 09:06:46');

-- --------------------------------------------------------

--
-- Table structure for table `productmsg`
--

CREATE TABLE `productmsg` (
  `ID` int(11) NOT NULL,
  `Client` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Content` text NOT NULL,
  `Date` datetime NOT NULL,
  `product_Id` int(11) NOT NULL,
  `seller` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `productmsg`:
--   `product_Id`
--       `products` -> `ID`
--   `seller`
--       `seller` -> `Name`
--

--
-- Dumping data for table `productmsg`
--

INSERT INTO `productmsg` (`ID`, `Client`, `Phone`, `Content`, `Date`, `product_Id`, `seller`) VALUES
(4, 'hp', '0123', 'ko zitameze neza c', '2017-04-27 14:47:37', 33, 'Mubi'),
(5, 'Ingenzi', '0736985420', 'Ibi bijumba sibyiza peeh!', '2017-04-27 17:18:29', 34, 'Mubi');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
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
  `Views` int(100) UNSIGNED NOT NULL,
  `Date` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `products`:
--   `Seller`
--       `seller` -> `Name`
--

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Name`, `Seller`, `Classes`, `Phone`, `Price`, `Quantity`, `About`, `Picture01`, `Picture02`, `Picture03`, `Province`, `District`, `Sector`, `Categorie`, `Views`, `Date`) VALUES
(34, 'Ibijumbu', 'Mubi', 'Middle_Class', '0789666603', '2000 Rfw', 11, 'Ibijumba byiza byamafufu', 'assets/img/products/images (1).jpg', 'assets/img/products/', 'assets/img/products/', 'Western Province', 'Nyamasheke', 'Ruharambuga', 'Restaurant', 4, '2017-04-28 10:52:15'),
(31, 'Capitain', 'Mugabo', 'Low_Class', '0785643095', '14000 Rfw', 8, 'blah blah', 'assets/img/products/download.jpg', 'assets/img/products/', 'assets/img/products/', 'Southern Province', 'Huye', 'Tumba', 'Supermarket', 30, '2017-04-27 10:31:59'),
(32, 'Ibiharage', 'Mubi', 'Middle_Class', '0789666603', '15000 Rfw', 40, 'Ibishyimbo byiza', 'assets/img/products/beens_texture_by_carlbert-d2zr0cd.jpg', 'assets/img/products/', 'assets/img/products/', 'Western Province', 'Nyamasheke', 'Gisakura', 'Supermarket', 5, '2017-04-28 11:12:06'),
(33, 'Isambaza', 'Mubi', 'Middle_Class', '0789666603', '15000 Rfw', 15, 'Isambaza nziza', 'assets/img/products/IMG_2454.JPG', 'assets/img/products/', 'assets/img/products/', 'Western Province', 'Nyamasheke', 'Ruharambuga', 'Restaurant', 9, '2017-04-27 10:46:28'),
(36, 'Shoes and a bag', 'Mubi', 'Low_Class', '0736985420', '15000 Rfw', 10, 'Bikoze neza kinyafrika', 'assets/img/products/0b870413fe7a5975f59037ea2eeb2cb1.jpg', 'assets/img/products/', 'assets/img/products/', 'Southern Province', 'Gisagara', 'Ndora', 'Fashion', 0, '2017-04-27 17:22:27'),
(35, 'Ibitoki', 'Mubi', 'Middle_Class', '0789666603', '20000 Rfw', 15, 'Inyamunyo', 'assets/img/products/Ibitoki_byaragabanutse_aho_babitandika_ubundi_byabaga_byuzuye_ari_byinshi_copy_copy.jpg', 'assets/img/products/', 'assets/img/products/', 'Western Province', 'Nyamasheke', 'Ruharambuga', 'Restaurant', 0, '2017-04-27 16:44:40'),
(37, 'Isima', 'Igor Musafiri', 'High_Class', '205789960063', '8000 Rfw', 17, 'Isima ya Twiga', 'assets/img/products/maxresdefault.jpg', 'assets/img/products/', 'assets/img/products/', 'Kigali City', 'Gasabo', 'Remera', 'Quincallerie', 2, '2017-04-27 22:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `NameOfBusiness` varchar(100) NOT NULL,
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
  `Date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `seller`:
--

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`ID`, `Name`, `NameOfBusiness`, `Email`, `Phone`, `Classes`, `About`, `Picture01`, `Picture02`, `Picture03`, `Province`, `District`, `Sector`, `Categorie`, `Password`, `Date`) VALUES
(10, 'Mubi', 'Mubi nation', 'mubi@gmail.com', '0789666603', 'Middle_Class', 'blah blah', 'assets/img/products/rwandawomen.t1larg.gi.jpg', 'assets/img/products/', 'assets/img/products/', 'Western Province', 'Nyamasheke', 'Ruharambuga', 'Restaurant', '123456789', '2017-04-27 10:35:14'),
(9, 'Igor Musafiri', 'Delicious food Supermarket', 'example@gmail.com', '205789960063', 'High_Class', 'Iherereye i Remera mugiporoso', 'assets/img/team/team01.jpg', 'assets/img/products/', 'assets/img/products/', 'Kigali City', 'Gasabo', 'Remera', 'Quincallerie', '123456789', '2017-04-28 11:24:35'),
(8, 'Mugabo', 'Meplos Shop', 'emmy@live.kwicuma', '0785643095', 'Low_Class', 'Imbere ya Light House Kumukoni neza', 'assets/img/team/team03.jpg', 'assets/img/products/26f9c286eb51342ae7fb9d28e0057e26.jpg', 'assets/img/products/', 'Southern Province', 'Huye', 'Tumba', 'Supermarket', 'mainloss', '2017-04-27 02:42:46');

-- --------------------------------------------------------

--
-- Structure for view `chat` exported as a table
--
DROP TABLE IF EXISTS `chat`;
CREATE TABLE`chat`(
    `ID` int(11) NOT NULL DEFAULT '0',
    `User` varchar(100) COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
    `Toooo` varchar(50) COLLATE latin1_swedish_ci DEFAULT NULL,
    `Reason` varchar(100) COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
    `Content` text COLLATE latin1_swedish_ci NOT NULL,
    `Date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `messagetoadmin`
--
ALTER TABLE `messagetoadmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `messagetoseller`
--
ALTER TABLE `messagetoseller`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `productmsg`
--
ALTER TABLE `productmsg`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Seller` (`Name`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `messagetoadmin`
--
ALTER TABLE `messagetoadmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `messagetoseller`
--
ALTER TABLE `messagetoseller`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `productmsg`
--
ALTER TABLE `productmsg`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for admin
--

--
-- Metadata for chat
--

--
-- Metadata for messagetoadmin
--

--
-- Metadata for messagetoseller
--

--
-- Metadata for productmsg
--

--
-- Metadata for products
--

--
-- Metadata for seller
--

--
-- Metadata for hahiraha
--

--
-- Dumping data for table `pma__relation`
--

INSERT INTO `pma__relation` (`master_db`, `master_table`, `master_field`, `foreign_db`, `foreign_table`, `foreign_field`) VALUES
('hahiraha', 'chat', 'User', 'hahiraha', 'seller', 'Name'),
('hahiraha', 'messagetoadmin', 'User', 'hahiraha', 'seller', 'Name'),
('hahiraha', 'messagetoadmin', 'seller_Id', 'hahiraha', 'seller', 'ID'),
('hahiraha', 'messagetoseller', 'Toooo', 'hahiraha', 'seller', 'Name'),
('hahiraha', 'messagetoseller', 'User', 'hahiraha', 'admin', 'Name'),
('hahiraha', 'productmsg', 'product_Id', 'hahiraha', 'products', 'ID'),
('hahiraha', 'productmsg', 'seller', 'hahiraha', 'seller', 'Name'),
('hahiraha', 'products', 'Seller', 'hahiraha', 'seller', 'Name');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
