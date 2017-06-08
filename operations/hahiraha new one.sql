
CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Picture01` text NOT NULL,
  `Date` datetime NOT NULL
) ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Name`, `Password`, `Picture01`, `Date`) VALUES
(1, 'OMS', 'ISLEVEL4', 'assets/img/team/holly.jpg', '2017-05-17 15:53:37');

-- --------------------------------------------------------

--
-- Table structure for table `messagetoadmin`
--

CREATE TABLE `messagetoadmin` (
  `ID` int(11) NOT NULL,
  `User` varchar(50) NOT NULL,
  `Reason` varchar(100) NOT NULL,
  `Content` text NOT NULL,
  `Date` datetime NOT NULL,
  `seller_Id` int(11) NOT NULL
) ;

--
-- Dumping data for table `messagetoadmin`
--

INSERT INTO `messagetoadmin` (`ID`, `User`, `Reason`, `Content`, `Date`, `seller_Id`) VALUES
(4, 'ROZA', '', 'gdfghdfghdfg', '2017-05-23 08:20:49', 10);

-- --------------------------------------------------------

--
-- Table structure for table `messagetoseller`
--

CREATE TABLE `messagetoseller` (
  `ID` int(11) NOT NULL,
  `User` varchar(50) NOT NULL,
  `Toooo` varchar(50) NOT NULL,
  `Reason` varchar(50) NOT NULL,
  `Content` text NOT NULL,
  `Date` datetime NOT NULL
) ;

--
-- Dumping data for table `messagetoseller`
--

INSERT INTO `messagetoseller` (`ID`, `User`, `Toooo`, `Reason`, `Content`, `Date`) VALUES
(1, 'OMS', 'Igor Musafiri', '', 'nmbnb', '2017-05-19 04:18:06'),
(2, 'OMS', 'ROZA', '', 'hjghfjghjfghgfj', '2017-05-23 08:21:07');

-- --------------------------------------------------------

--
-- Table structure for table `productmsg`
--

CREATE TABLE `productmsg` (
  `ID` int(11) NOT NULL,
  `Client` varchar(100) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Content` text NOT NULL,
  `Date` datetime NOT NULL,
  `product_Id` varchar(50) NOT NULL,
  `seller` varchar(1000) NOT NULL
) ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Sellers` varchar(50) NOT NULL,
  `Classes` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `About` text NOT NULL,
  `Picture01` text NOT NULL,
  `Picture02` text NOT NULL,
  `Picture03` text NOT NULL,
  `Picture04` text NOT NULL,
  `Picture05` text NOT NULL,
  `Picture06` text NOT NULL,
  `Picture07` text NOT NULL,
  `Picture08` text NOT NULL,
  `Picture09` text NOT NULL,
  `Province` varchar(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Sector` varchar(50) NOT NULL,
  `Categorie` varchar(50) NOT NULL,
  `Views` int(11) NOT NULL,
  `Date` datetime NOT NULL
) ;
-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `NameOfBusiness` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Classes` varchar(50) NOT NULL,
  `About` text NOT NULL,
  `Picture01` text NOT NULL,
  `Province` varchar(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Sector` varchar(50) NOT NULL,
  `Categorie` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Date` datetime NOT NULL
) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `admin` (`Name`);

--
-- Indexes for table `messagetoadmin`
--
ALTER TABLE `messagetoadmin`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `seller` (`User`),
  ADD KEY `sellerId` (`seller_Id`);

--
-- Indexes for table `messagetoseller`
--
ALTER TABLE `messagetoseller`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `seller` (`Toooo`),
  ADD KEY `admin` (`User`);

--
-- Indexes for table `productmsg`
--
ALTER TABLE `productmsg`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `seller` (`seller`(767)),
  ADD KEY `product` (`product_Id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `seller` (`Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messagetoadmin`
--
ALTER TABLE `messagetoadmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messagetoseller`
--
ALTER TABLE `messagetoseller`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `productmsg`
--
ALTER TABLE `productmsg`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--
