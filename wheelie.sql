-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2018 at 06:43 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wheelie`
--

-- --------------------------------------------------------

--
-- Table structure for table `carname_tb`
--

CREATE TABLE IF NOT EXISTS `carname_tb` (
  `carid` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL,
  `muname` varchar(50) NOT NULL,
  `carname` varchar(50) NOT NULL,
  PRIMARY KEY (`carid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `carname_tb`
--

INSERT INTO `carname_tb` (`carid`, `mid`, `muname`, `carname`) VALUES
(1, 3, 'mbenz', 'cla'),
(2, 3, 'mbenz', 'cla1'),
(3, 3, 'mbenz', 'cla2'),
(4, 3, 'mbenz', 'cla3'),
(5, 2, 'bmw', 'x1'),
(6, 2, 'bmw', 'x2'),
(7, 2, 'bmw', 'x3');

-- --------------------------------------------------------

--
-- Table structure for table `car_tb`
--

CREATE TABLE IF NOT EXISTS `car_tb` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `carid` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `type` varchar(50) NOT NULL,
  `variet` varchar(50) NOT NULL,
  `fuel` varchar(50) NOT NULL,
  `cc` varchar(50) NOT NULL,
  `transm` varchar(50) NOT NULL,
  `gear` int(11) NOT NULL,
  `power` varchar(50) NOT NULL,
  `torque` varchar(50) NOT NULL,
  `cylider` int(11) NOT NULL,
  `fcap` int(11) NOT NULL,
  `milage` int(11) NOT NULL,
  `ground` int(11) NOT NULL,
  `wheelbase` int(11) NOT NULL,
  `kweight` int(11) NOT NULL,
  `boot` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `tyres` varchar(50) NOT NULL,
  `seat` int(11) NOT NULL,
  `pw` varchar(30) NOT NULL,
  `abs` varchar(30) NOT NULL,
  `cl` varchar(30) NOT NULL,
  `awd` varchar(30) NOT NULL,
  `alloy` varchar(30) NOT NULL,
  `tube` varchar(30) NOT NULL,
  `tsn` varchar(30) NOT NULL,
  `sun` varchar(30) NOT NULL,
  `rc` varchar(30) NOT NULL,
  `rs` varchar(30) NOT NULL,
  `fl` varchar(30) NOT NULL,
  `dtrl` varchar(30) NOT NULL,
  `cruise` varchar(30) NOT NULL,
  `orvm` varchar(30) NOT NULL,
  `cost` float NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `car_tb`
--

INSERT INTO `car_tb` (`cid`, `carid`, `image`, `type`, `variet`, `fuel`, `cc`, `transm`, `gear`, `power`, `torque`, `cylider`, `fcap`, `milage`, `ground`, `wheelbase`, `kweight`, `boot`, `length`, `height`, `width`, `tyres`, `seat`, `pw`, `abs`, `cl`, `awd`, `alloy`, `tube`, `tsn`, `sun`, `rc`, `rs`, `fl`, `dtrl`, `cruise`, `orvm`, `cost`) VALUES
(13, 7, '1542294876benz.jpg', 'COUPE', '1', '1', '1', '1', 1, '1', '1', 1, 1, 1, 1, 1, 1, 1, 11, 1, 1, '1', 1, 'yes', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'yes', 'yes', 'yes', 45),
(14, 4, '1542342799bmw2.jpg', 'OTHER', '9', '9', '9', '9', 9, '9', '9', 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, '9', 9, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 40);

-- --------------------------------------------------------

--
-- Table structure for table `login_tb`
--

CREATE TABLE IF NOT EXISTS `login_tb` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `utype` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `login_tb`
--

INSERT INTO `login_tb` (`lid`, `username`, `password`, `utype`, `status`) VALUES
(2, 'admin', 'admin', 'admin', 1),
(5, 'aqwsa', 'aqwes', 'user', 0),
(12, 'alan', '123', 'user', 0),
(14, 'ajil', 'ajil', 'user', 0),
(20, 'bmw', 'bmw', 'company', 2),
(21, 'mbenz', 'mbenz', 'company', 2),
(25, 'ford', 'ford', 'blockedcompany', 2),
(26, 'jjkj', 'jjj', 'blockedcompany', 2),
(27, 'jjj', 'jjj', 'blockedcompany', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mfeedback`
--

CREATE TABLE IF NOT EXISTS `mfeedback` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(30) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `mfeedback`
--

INSERT INTO `mfeedback` (`fid`, `cname`, `feedback`) VALUES
(1, 'mbenz', 'good site for a manufacture'),
(2, 'bmw', 'hhjhajhjha'),
(3, 'bmw', '121212121'),
(6, 'bmw', 'MNMMNMN'),
(7, 'bmw', 'hhhhghgh'),
(8, 'bmw', 'gffafgcsfx'),
(9, 'bmw', 'jsdjhb');

-- --------------------------------------------------------

--
-- Table structure for table `mreg_tb`
--

CREATE TABLE IF NOT EXISTS `mreg_tb` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pin` int(11) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `cin` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `mreg_tb`
--

INSERT INTO `mreg_tb` (`mid`, `cname`, `address`, `state`, `city`, `pin`, `contact`, `cin`, `email`, `username`, `password`, `status`) VALUES
(2, 'BMW', 'Vyttila', 'Kerala', 'Cochin', 686555, 7561008006, '45785412547854', 'bmw@gmail.com', 'bmw', 'bmw', 'approved'),
(3, 'mbenz', 'kochin', 'kerala', 'kochin', 685412, 7894561234, '1235412569854785', 'mbnz@gmail.com', 'mbenz', 'mbenz', 'approved'),
(4, 'ford', 'kannur', 'kerala', 'kannur', 652365, 7845124578, '4578122356457845', 'ford@gmail.com', 'ford', 'ford', 'blocked'),
(5, 'asd', 'sds', 'sdsd', 'sds', 454545, 78787878787, '787878787', 'aanh@yghb.cmn', 'jjkj', 'jjj', 'blocked'),
(6, 'asdds', 'asddas', 'adsdasads', 'adsdas', 54545454, 54545454, '4545454545', 'skjs@gg.com', 'jjj', 'jjj', 'blocked');

-- --------------------------------------------------------

--
-- Table structure for table `ureg_tb`
--

CREATE TABLE IF NOT EXISTS `ureg_tb` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `ureg_tb`
--

INSERT INTO `ureg_tb` (`uid`, `name`, `state`, `city`, `contact`, `email`, `username`, `password`) VALUES
(8, 'aa', 'aa', 'aa', 4578547854, 'alan@mca.ajce.in', 'kik', '123'),
(9, 'aa', 'aa', 'aa', 4578547854, 'alan@mca.ajce.in', 'kik', '123'),
(10, 'aa', 'aa', 'aa', 4578547854, 'alan@mca.ajce.in', 'kik23', '123'),
(11, 'Alan', 'Kerala', 'Kannur', 789456123, 'alandev123@gmail.com', 'alan', '123'),
(12, 'Alan', 'Kerala', 'Kannur', 7894561230, 'alandev123@gmail.com', '', ''),
(13, 'Ajil Sunny', 'kerala', 'Iritty', 9800011133, 'ajil@gmail.com', 'ajil', 'ajil'),
(15, 'anandhu', 'kerala', 'pala', 9747362679, 'anandhu@gmail.com', 'anandhus', '1234'),
(16, 'sa', 'sa', 'as', 3444444431, 'asd@gmail.com', 'asd', '1234');
