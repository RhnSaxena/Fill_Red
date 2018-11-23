-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2018 at 07:52 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE `availability` (
  `bId` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `bId` varchar(10) NOT NULL,
  `bType` varchar(20) NOT NULL,
  `donationDate` date NOT NULL,
  `dId` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`bId`, `bType`, `donationDate`, `dId`) VALUES
('qwq', 'whole', '2018-11-01', '1212');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `dId` varchar(10) NOT NULL,
  `dFname` varchar(20) NOT NULL,
  `dLname` varchar(20) NOT NULL,
  `dAge` int(11) NOT NULL,
  `DBloodGroup` varchar(3) NOT NULL,
  `dSex` varchar(6) NOT NULL,
  `dAddress` varchar(100) DEFAULT NULL,
  `dCity` varchar(20) NOT NULL,
  `dPincode` int(11) NOT NULL,
  `dPhoneNo` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`dId`, `dFname`, `dLname`, `dAge`, `DBloodGroup`, `dSex`, `dAddress`, `dCity`, `dPincode`, `dPhoneNo`) VALUES
('1212', 'rakshak', 'malhotra', 20, 'b+', 'male', 'b101', 'jabalpur', 665577, 12121432),
('sd', 'SID', 'DIS', 20, 'ab+', 'male', 'sadda haqq', 'lucknow', 482005, 23221312);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hId` varchar(10) NOT NULL,
  `Hname` varchar(30) NOT NULL,
  `hAddress` varchar(100) DEFAULT NULL,
  `hCity` varchar(20) NOT NULL,
  `hPincode` int(11) NOT NULL,
  `hPhoneNo` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pid` varchar(10) NOT NULL,
  `pFName` varchar(20) NOT NULL,
  `pLName` varchar(20) NOT NULL,
  `pSex` varchar(6) NOT NULL,
  `pAge` int(3) NOT NULL,
  `pAdress` varchar(100) DEFAULT NULL,
  `pPhoneNo` int(10) DEFAULT NULL,
  `pBloodGroup` varchar(3) DEFAULT NULL,
  `p_pincode` int(6) NOT NULL,
  `p_city` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `pFName`, `pLName`, `pSex`, `pAge`, `pAdress`, `pPhoneNo`, `pBloodGroup`, `p_pincode`, `p_city`) VALUES
('kl', 'rohan', 'Saxena', 'Male', 20, 'a2', 88888888, 'a+', 121002, 'faridabad'),
('sd', 'SID', 'DIS', '20', 0, 'male', 0, 'luc', 482005, '23221312'),
('wq', 'rohan', 'Saxena', 'Male', 20, 'a2', 88888888, 'a+', 12, 'Faridabad');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `rid` varchar(10) NOT NULL,
  `pId` varchar(10) DEFAULT NULL,
  `date` date NOT NULL,
  `units` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`rid`, `pId`, `date`, `units`) VALUES
('', 'kl', '2018-11-23', 1),
('12', 'kl', '2018-11-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `vId` varchar(10) NOT NULL,
  `dId` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`vId`, `dId`) VALUES
('', ''),
('12', '12'),
('1212', '1212');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `availability`
--
ALTER TABLE `availability`
  ADD PRIMARY KEY (`bId`);

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`bId`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`dId`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hId`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`vId`),
  ADD UNIQUE KEY `dId` (`dId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
