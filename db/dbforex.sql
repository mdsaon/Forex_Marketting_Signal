-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 25, 2014 at 07:04 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbforex`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(2, 'Sell'),
(3, 'Cancelled'),
(4, 'Filled'),
(5, 'Buy');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `counter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`counter`) VALUES
(102);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(3, 'Bangladesh'),
(4, 'India'),
(5, 'Pakistan'),
(6, 'Sri Lanka'),
(7, 'Nepal'),
(8, 'Vutan');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`id`, `name`) VALUES
(4, 'EUR/USD'),
(5, 'USD/JPY'),
(6, 'GBP/USD'),
(7, 'USD/CHF'),
(8, 'Gold'),
(9, 'Oil'),
(10, 'ERO/JPY'),
(11, 'Silver'),
(12, 'USD/DKK'),
(13, 'AUD/CAD'),
(14, 'NUZ/USD'),
(15, 'AUD/USD'),
(16, 'USD/CAD'),
(17, 'AUD/JPY'),
(18, 'EUR/JPY'),
(19, 'CHF/JPY'),
(20, 'GBP/JPY'),
(21, 'CAD/JPY'),
(22, 'EUR/GBP');

-- --------------------------------------------------------

--
-- Table structure for table `goldpackageservice`
--

CREATE TABLE `goldpackageservice` (
  `id` int(11) NOT NULL auto_increment,
  `descriptionid` int(11) default NULL,
  `trial` varchar(10) NOT NULL,
  `standard` varchar(10) NOT NULL,
  `premium` varchar(10) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `descriptionid` (`descriptionid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `goldpackageservice`
--

INSERT INTO `goldpackageservice` (`id`, `descriptionid`, `trial`, `standard`, `premium`) VALUES
(1, 3, 'No', 'Yes', 'Yes'),
(2, 4, 'Yes', 'Yes', 'Yes'),
(3, 5, 'Yes', 'Yes', 'Yes'),
(4, 6, 'Yes', 'Yes', 'Yes'),
(5, 7, 'Yes', 'Yes', 'Yes'),
(6, 8, 'Yes', 'Yes', 'Yes'),
(7, 9, 'Yes', 'Yes', 'Yes'),
(8, 10, 'Yes', 'Yes', 'Yes'),
(9, 11, 'Yes', 'Yes', 'Yes'),
(10, 13, '1 Month', '2 Month', '3 Month'),
(11, 14, '$150 p/3m', '$150 p/3m', '$150 p/3m');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL auto_increment,
  `heading` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date` datetime NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `heading`, `description`, `date`, `time`) VALUES
(1, 'ss', 'dddddd', '2013-12-31 10:27:05', '00:00:00'),
(2, 'xx', 'xxx', '2013-12-31 10:28:58', '838:59:59');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(11) NOT NULL auto_increment,
  `email` varchar(20) default NULL,
  `userid` int(11) default NULL,
  `packageid` int(11) default NULL,
  `packagetypeid` int(11) default NULL,
  `paymentid` int(11) default NULL,
  `orderdate` datetime default NULL,
  `approvedate` datetime default NULL,
  `expiredate` datetime default NULL,
  `status` varchar(20) NOT NULL default 'pending',
  PRIMARY KEY  (`id`),
  KEY `userid` (`userid`),
  KEY `packageid` (`packageid`),
  KEY `packagetypeid` (`packagetypeid`),
  KEY `paymentid` (`paymentid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `email`, `userid`, `packageid`, `packagetypeid`, `paymentid`, `orderdate`, `approvedate`, `expiredate`, `status`) VALUES
(67, 'saon11@yahoo.com', 8, 3, 5, 1, '2014-02-25 06:04:09', NULL, NULL, 'expire'),
(71, 'saon11m@yahoo.com', NULL, 3, 5, 1, '2014-01-19 20:55:44', NULL, NULL, 'pending'),
(72, 'xppayment@yahoo.com', NULL, 3, 5, 2, '2014-01-19 20:56:13', NULL, NULL, 'pending'),
(76, 'mansura_vict@yahoo.c', NULL, 3, 3, 4, '2014-01-19 20:58:01', NULL, NULL, 'pending'),
(77, 'mansura_vict@yahoo.c', NULL, 3, 5, 2, '2014-01-19 20:59:15', NULL, NULL, 'pending'),
(78, 'mansura_vict@yahoo.c', NULL, 3, 5, 2, '2014-01-19 20:59:20', NULL, NULL, 'pending'),
(79, 'saon11@yahoo.com', NULL, 3, 4, 4, '2014-01-19 20:59:51', NULL, NULL, 'expire');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(30) NOT NULL,
  `description` varchar(1000) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `name`, `description`) VALUES
(3, 'Signal Package', 'Currency Pairs Traded'),
(4, 'Signal Package', 'Buy/Sell Alerts To Your Email'),
(5, 'Signal Package', 'SMS'),
(6, 'Signal Package', 'Targets Send To Your Email'),
(7, 'Signal Package', 'Entry Price'),
(8, 'Signal Package', 'Take Profit Price'),
(9, 'Signal Package', 'Update on Stoploss to Minimize'),
(10, 'Signal Package', 'Live Chat To Support'),
(11, 'Signal Package', '24/7 Support'),
(13, 'Signal Package', 'Validity'),
(14, 'Signal Package', 'Total Price');

-- --------------------------------------------------------

--
-- Table structure for table `packagedetails`
--

CREATE TABLE `packagedetails` (
  `id` int(11) NOT NULL auto_increment,
  `duration` varchar(30) NOT NULL,
  `price` varchar(20) NOT NULL,
  `packageid` int(11) NOT NULL,
  `packagetypeid` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `packageTypeId` (`packagetypeid`),
  KEY `packageid` (`packageid`),
  KEY `packagedetails_ibfk_2` (`packagetypeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `packagedetails`
--

INSERT INTO `packagedetails` (`id`, `duration`, `price`, `packageid`, `packagetypeid`) VALUES
(7, '2 Days', '$9 p/w', 3, 3),
(8, '1 month', '$50 p/m', 3, 4),
(9, '3 months', '$120 p/3m', 3, 5),
(10, 'mm', '66', 3, 3),
(11, 'mm', '66', 3, 3),
(12, 'mm', '66', 3, 3),
(13, 'mm', '66', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `packageservice`
--

CREATE TABLE `packageservice` (
  `id` int(11) NOT NULL auto_increment,
  `packagename` varchar(40) default NULL,
  `descriptionid` int(11) default NULL,
  `trial` varchar(70) NOT NULL,
  `standard` varchar(70) NOT NULL,
  `premium` varchar(70) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `descriptionid` (`descriptionid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `packageservice`
--

INSERT INTO `packageservice` (`id`, `packagename`, `descriptionid`, `trial`, `standard`, `premium`) VALUES
(3, NULL, 3, 'Yes', 'Yes', 'Yes'),
(4, NULL, 4, 'Yes', 'Yes', 'Yes'),
(5, NULL, 5, 'Yes', 'Yes', 'Yes'),
(6, NULL, 6, 'Yes', 'Yes', 'Yes'),
(7, NULL, 8, 'Yes', 'Yes', 'Yes'),
(8, NULL, 9, 'Yes', 'Yes', 'Yes'),
(9, NULL, 10, 'Yes', 'Yes', 'Yes'),
(10, NULL, 13, '1 Month', '2 Month', '3 Month'),
(11, NULL, 14, '$150 p/3m', '$150 p/3m', '$150 p/3m');

-- --------------------------------------------------------

--
-- Table structure for table `packagetype`
--

CREATE TABLE `packagetype` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `packagetype`
--

INSERT INTO `packagetype` (`id`, `name`) VALUES
(3, 'Trial'),
(4, 'Standard'),
(5, 'Premium');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`) VALUES
(1, 'Paypal'),
(2, 'Pyza'),
(3, 'Money Bookers'),
(4, 'On Cash'),
(5, 'Bikash');

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE `performance` (
  `id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Month` varchar(10) NOT NULL,
  `Year` varchar(20) NOT NULL,
  `EURUSD` varchar(200) NOT NULL,
  `USDJPY` varchar(200) NOT NULL,
  `GBPUSD` varchar(200) NOT NULL,
  `USDCHF` varchar(200) NOT NULL,
  `Gold` varchar(50) NOT NULL,
  `Oil` varchar(50) NOT NULL,
  `EROJPY` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `USDCHF` (`USDCHF`),
  KEY `USDCHF_2` (`USDCHF`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`id`, `Date`, `Month`, `Year`, `EURUSD`, `USDJPY`, `GBPUSD`, `USDCHF`, `Gold`, `Oil`, `EROJPY`) VALUES
(1, '2013-12-01', '12', '2013', '60', '31', '22', '71', '1', '1', '1'),
(2, '2013-11-02', '11', '2013', '60', '22', '42', '34', '121', '12', '12'),
(3, '2013-09-03', '09', '2013', '62', '22', '52', '82', '2', '2', '2'),
(4, '2013-02-04', '02', '2013', '3', '3', '4', '4', '1', '6', '7'),
(5, '2013-10-05', '10', '2013', '59', '72', '37', '28', '6', '9', '6'),
(6, '2013-12-06', '12', '2013', '8', '6', '7', '2', '2', '1', '2'),
(7, '2013-08-07', '08', '2013', '98', '58', '27', '48', '8', '8', '8'),
(8, '2013-01-08', '01', '2013', '7', '6', '8', '9', '7', '9', '7'),
(9, '2013-07-09', '07', '2013', '78', '18', '48', '68', '68', '86', '86'),
(10, '2013-12-10', '12', '2013', '8', '9', '9', '9', '9', '9', '9'),
(11, '2013-06-28', '06', '2013', '22', '39', '44', '73', '4', '3', '3'),
(12, '2013-05-30', '05', '2013', '25', '35', '71', '91', '1', '11', '1'),
(13, '2013-02-12', '02', '2013', '29', '22', '52', '72', '2', '2', '22'),
(14, '2013-04-01', '04', '2013', '04', '20', '62', '22', '82', '42', '22'),
(15, '2013-03-02', '03', '2013', '52', '25', '29', '72', '22222', '2', '2'),
(16, '2014-01-17', '01', '2014', '22', '50', '10', '79', '22222', '2', '2'),
(17, '2014-01-17', '01', '2014', '9', '9', '9', '9', '9', '9', '9'),
(18, '2014-01-17', '01', '2014', '8', '8', '8', '8', '8', '8', '8');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL auto_increment,
  `date` datetime NOT NULL,
  `packageTypeId` int(11) NOT NULL,
  `userNo` int(11) NOT NULL,
  `paymentId` int(11) NOT NULL,
  `totalEarn` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `paymentId` (`paymentId`),
  KEY `packageTypeId` (`packageTypeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `date`, `packageTypeId`, `userNo`, `paymentId`, `totalEarn`) VALUES
(1, '2014-01-09 00:41:59', 3, 1, 1, '45');

-- --------------------------------------------------------

--
-- Table structure for table `signal`
--

CREATE TABLE `signal` (
  `id` int(11) NOT NULL auto_increment,
  `buyPoint` varchar(10) default NULL,
  `pips` varchar(10) default NULL,
  `stopLoss` varchar(10) default NULL,
  `timeFrom` time NOT NULL,
  `timeTill` time default NULL,
  `currencyid` int(11) default NULL,
  `categoryid` int(11) default NULL,
  `sellPoint` varchar(10) default NULL,
  `takeProfit` varchar(10) NOT NULL,
  `dateFrom` date default NULL,
  `dateTill` date default NULL,
  `dateTime` datetime default NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `categoryId` (`categoryid`),
  KEY `currencyid` (`currencyid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `signal`
--

INSERT INTO `signal` (`id`, `buyPoint`, `pips`, `stopLoss`, `timeFrom`, `timeTill`, `currencyid`, `categoryid`, `sellPoint`, `takeProfit`, `dateFrom`, `dateTill`, `dateTime`, `status`) VALUES
(1, '1.3746', '30', '.25', '01:20:00', '00:00:00', 4, 2, '', '1.3716', '2014-01-15', '0000-00-00', '2014-01-18 01:00:00', 'Inactive'),
(2, '1233', '124', '1323412', '00:04:14', '00:14:41', 5, 2, '142141', '1424', '2014-01-10', '0000-00-00', '2014-01-15 12:20:10', 'Active'),
(3, 'cvcvd', '235325', '', '00:04:05', '02:34:32', 6, 2, '2352', '2352', '2014-01-01', '0000-00-00', '2014-01-01 00:50:20', 'Active'),
(4, '234241', '23532', '2414', '00:25:32', '00:25:25', 7, 2, '23525', '235', '2014-01-05', '0000-00-00', '2014-01-17 05:20:00', 'Active'),
(5, '12', '14', '12', '00:00:12', '00:00:12', 4, 3, '12', '1245', '2014-01-16', '2014-01-25', '2014-01-10 00:30:20', 'Active'),
(6, '234', 'qwrqrw', '34234', '00:00:12', '00:00:11', 6, 3, '235235', 'qweq', '2014-01-15', '2014-01-25', '2014-01-16 10:00:30', 'Active'),
(13, '12', '133', '123', '00:00:00', '00:00:00', 9, 5, '123', '45', '0000-00-00', '0000-00-00', '2014-01-15 20:10:00', 'Active'),
(14, '345', '546', '45', '00:00:00', '00:00:00', 4, 2, '4356', '34563', '0000-00-00', '0000-00-00', '2014-01-18 20:20:20', 'Active'),
(19, '1.25', '12', '.25', '00:00:00', '00:00:00', 8, 2, '1.50', '1.30', '0000-00-00', '0000-00-00', '2014-01-07 00:50:30', 'Active'),
(22, '12', '12', '123', '00:00:00', '00:00:00', 10, 4, '1.50', '1.30', '0000-00-00', '0000-00-00', '2013-01-12 00:40:50', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'yes'),
(2, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` int(11) NOT NULL auto_increment,
  `userid` int(11) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `support`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `countryId` int(11) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `date` date default NULL,
  `status` varchar(20) NOT NULL default 'pending',
  `type` varchar(4) NOT NULL default 'U',
  PRIMARY KEY  (`id`),
  KEY `countryId` (`countryId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `countryId`, `phone`, `date`, `status`, `type`) VALUES
(8, 'saon', 'saon11@yahoo.com', '1234', 3, '01657109850', '0000-00-00', 'expire', 'U'),
(9, 'saonx', 'saon1x1@yahoo.com', '123', 4, '01657109850', '0000-00-00', 'active', 'U'),
(10, 'saonjj', 'sakkkkk@yahoo.com', '1234', 3, '1234567', '0000-00-00', 'pending', 'U'),
(11, 'gvjh', 'sdfg@gail.com', '123', 4, '1234', '0000-00-00', 'pending', 'U'),
(12, 'yctyu', 'hgvj@gmail.com', '123', 4, '123456', '0000-00-00', 'pending', 'U'),
(13, 'yctyuddd', 'hgddvj@gmail.com', '123', 4, '123456', '2013-12-31', 'pending', 'U'),
(14, 'kkk', 'll@gmal.com', '123', 3, '0909090', '2013-12-31', 'pending', 'U'),
(15, 'myname', 'myname@yahoo.com', '12345', 4, '01675109850', '2014-01-19', 'pending', 'U');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `goldpackageservice`
--
ALTER TABLE `goldpackageservice`
  ADD CONSTRAINT `goldpackageservice_ibfk_1` FOREIGN KEY (`descriptionid`) REFERENCES `package` (`id`);

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_6` FOREIGN KEY (`userid`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `orderdetails_ibfk_7` FOREIGN KEY (`packageid`) REFERENCES `package` (`id`),
  ADD CONSTRAINT `orderdetails_ibfk_8` FOREIGN KEY (`packagetypeid`) REFERENCES `packagetype` (`id`),
  ADD CONSTRAINT `orderdetails_ibfk_9` FOREIGN KEY (`paymentid`) REFERENCES `payment` (`id`);

--
-- Constraints for table `packagedetails`
--
ALTER TABLE `packagedetails`
  ADD CONSTRAINT `packagedetails_ibfk_2` FOREIGN KEY (`packagetypeid`) REFERENCES `packagetype` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `packagedetails_ibfk_3` FOREIGN KEY (`packageid`) REFERENCES `package` (`id`),
  ADD CONSTRAINT `packagedetails_ibfk_4` FOREIGN KEY (`packagetypeid`) REFERENCES `packagetype` (`id`);

--
-- Constraints for table `packageservice`
--
ALTER TABLE `packageservice`
  ADD CONSTRAINT `packageservice_ibfk_1` FOREIGN KEY (`descriptionid`) REFERENCES `package` (`id`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`packageTypeId`) REFERENCES `packagetype` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`paymentId`) REFERENCES `payment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `support`
--
ALTER TABLE `support`
  ADD CONSTRAINT `support_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`countryId`) REFERENCES `country` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
