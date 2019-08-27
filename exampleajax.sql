-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2019 at 02:57 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exampleajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(11) NOT NULL,
  `username` varchar(55) DEFAULT NULL,
  `address` varchar(55) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `username`, `address`, `contact`) VALUES
(2, NULL, 'sullia', 65467),
(3, NULL, 'sullia', 65467),
(5, 'vishal', 'rafvb', 5666),
(6, 'kvgce', 'sullia', 223333),
(8, 'jairam', 'qwe', 108),
(9, 'veena s rao', 'sullia', 65467),
(10, 'kvgce', 'mangalore', 65467),
(11, '', '', 0),
(12, 'new', 'bc road', 777678),
(15, 'hlo', 'sullia', 9998),
(16, 'ram', 'bsbc', 87899);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` int(11) NOT NULL,
  `ename` varchar(55) DEFAULT NULL,
  `address` varchar(55) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `gid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `ename`, `address`, `contact`, `email`, `gid`) VALUES
(1, '', 'sullia', 65467, 'vsr1@gmail.com', 101),
(2, 'veena', 'puttur', 223333, ' jnmm', 102),
(4, 'new', 'mangalore', 6789, ' vsr@gmail.com', 104),
(5, 'see', 'mangalore', 9090, ' jfk@gmail.com', 107),
(6, 'rahul', 'kumta', 987, ' lskms@gmail.com', 108);

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `eid` int(11) NOT NULL,
  `ename` varchar(55) DEFAULT NULL,
  `gid` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`eid`, `ename`, `gid`, `cid`) VALUES
(1, 'hari.k', 105, 202),
(2, 'ram', 107, 205);

-- --------------------------------------------------------

--
-- Table structure for table `gym`
--

CREATE TABLE `gym` (
  `gid` int(30) NOT NULL,
  `gname` varchar(30) NOT NULL,
  `eid` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gym`
--

INSERT INTO `gym` (`gid`, `gname`, `eid`) VALUES
(5, 'global fitness', 8),
(6, 'fitness star', 7);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pid` int(11) NOT NULL,
  `pname` varchar(55) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pid`, `pname`, `amount`, `cid`, `type`) VALUES
(1, 'golden', 2000, 205, 'regular'),
(2, '', 0, 0, ''),
(3, 'bdmnm', 4889, 206, 'golden'),
(4, '', 0, 0, ''),
(5, '', 0, 0, ''),
(6, 'vishal', 2000, 202, 'regular');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pid` int(11) NOT NULL,
  `name` varchar(55) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `gid` int(11) DEFAULT NULL,
  `eid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pid`, `name`, `amount`, `date`, `cid`, `gid`, `eid`) VALUES
(1, ' ', 2000, '2012-07-19', 202, 102, 5),
(2, '', 0, '2014-07-12', 0, 0, 0),
(3, 'vsr', 0, '0000-00-00', 0, 0, 0),
(7, 'hari', 4889, '2014-07-12', 204, 106, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `gym`
--
ALTER TABLE `gym`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gym`
--
ALTER TABLE `gym`
  MODIFY `gid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
