-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 09, 2017 at 04:07 PM
-- Server version: 5.6.25-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `OnlineShopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE IF NOT EXISTS `Category` (
`CategoryId` int(11) NOT NULL,
  `CategoryName` varchar(20) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`CategoryId`, `CategoryName`, `Status`) VALUES
(1, 'Electronics   ', 1),
(2, 'Men ', 1),
(3, 'Women ', 1),
(4, 'Baby', 1),
(5, ' Furniture', 1),
(8, 'BeautyProducts  ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `LogIn`
--

CREATE TABLE IF NOT EXISTS `LogIn` (
  `ClientId` int(11) DEFAULT NULL,
  `EmailId` varchar(32) DEFAULT NULL,
  `Password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE IF NOT EXISTS `Product` (
`ProductId` int(11) NOT NULL,
  `ProductName` char(20) DEFAULT NULL,
  `ProductQuantity` int(5) NOT NULL,
  `ProductPrice` int(5) NOT NULL,
  `ProductImage` blob NOT NULL,
  `SubCategoryId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `RegistrationForm`
--

CREATE TABLE IF NOT EXISTS `RegistrationForm` (
`CustomerId` int(11) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `EmailId` varchar(32) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `RegistrationForm`
--

INSERT INTO `RegistrationForm` (`CustomerId`, `FirstName`, `LastName`, `EmailId`, `Password`) VALUES
(1, 'gunjan', 'bisht', 'gunjanbisht@gmail.com', '12345'),
(3, 'himani ', 'pargaien', 'himani@gmail.com', '12345'),
(4, 'komal', 'bisht', 'komal@gmail.com', '12345'),
(5, 'aditi', 'bhat', 'aditi@gmail.com', '12345'),
(6, 'mohit', 'pandey', 'mohit@gmail.com', '12345'),
(7, 'komal', 'bisht', 'komalbisht@gmail.com', '12345'),
(8, 'tanpreet', 'kaur', 'tapreetkaur@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `SubCategory`
--

CREATE TABLE IF NOT EXISTS `SubCategory` (
`SubCategoryId` int(11) NOT NULL,
  `SubCategoryName` char(20) DEFAULT NULL,
  `CategoryId` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SubCategory`
--

INSERT INTO `SubCategory` (`SubCategoryId`, `SubCategoryName`, `CategoryId`) VALUES
(1, 'Mobile', 1),
(2, 'TV', 1),
(3, 'Fan', 1),
(4, 'T-Shirt', 2),
(5, 'Shirt', 2),
(6, 'Jeans', 2),
(7, 'Top', 3),
(8, 'Jeans', 3),
(9, 'Saari', 3),
(10, 'T-Shirt', 4),
(11, 'shoes', 4),
(13, 'Toys', 4),
(14, 'Beds', 5),
(15, 'Sofas', 5),
(16, 'DinningTable', 5),
(18, 'FashWash', 8),
(19, 'SunCream', 8),
(20, 'ColdCream', 8);

-- --------------------------------------------------------

--
-- Table structure for table `SuperAdmin`
--

CREATE TABLE IF NOT EXISTS `SuperAdmin` (
  `User` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SuperAdmin`
--

INSERT INTO `SuperAdmin` (`User`, `Password`) VALUES
('test', 'test123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
 ADD PRIMARY KEY (`CategoryId`);

--
-- Indexes for table `LogIn`
--
ALTER TABLE `LogIn`
 ADD UNIQUE KEY `EmailId` (`EmailId`), ADD KEY `ClientId` (`ClientId`);

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
 ADD PRIMARY KEY (`ProductId`), ADD KEY `SubCategoryId` (`SubCategoryId`);

--
-- Indexes for table `RegistrationForm`
--
ALTER TABLE `RegistrationForm`
 ADD PRIMARY KEY (`CustomerId`), ADD UNIQUE KEY `EmailId` (`EmailId`);

--
-- Indexes for table `SubCategory`
--
ALTER TABLE `SubCategory`
 ADD PRIMARY KEY (`SubCategoryId`), ADD KEY `CategoryId` (`CategoryId`);

--
-- Indexes for table `SuperAdmin`
--
ALTER TABLE `SuperAdmin`
 ADD UNIQUE KEY `User` (`User`,`Password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Category`
--
ALTER TABLE `Category`
MODIFY `CategoryId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `Product`
--
ALTER TABLE `Product`
MODIFY `ProductId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `RegistrationForm`
--
ALTER TABLE `RegistrationForm`
MODIFY `CustomerId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `SubCategory`
--
ALTER TABLE `SubCategory`
MODIFY `SubCategoryId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `LogIn`
--
ALTER TABLE `LogIn`
ADD CONSTRAINT `LogIn_ibfk_1` FOREIGN KEY (`ClientId`) REFERENCES `RegistrationForm` (`CustomerId`);

--
-- Constraints for table `Product`
--
ALTER TABLE `Product`
ADD CONSTRAINT `Product_ibfk_1` FOREIGN KEY (`SubCategoryId`) REFERENCES `SubCategory` (`SubCategoryId`);

--
-- Constraints for table `SubCategory`
--
ALTER TABLE `SubCategory`
ADD CONSTRAINT `SubCategory_ibfk_1` FOREIGN KEY (`CategoryId`) REFERENCES `Category` (`CategoryId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
