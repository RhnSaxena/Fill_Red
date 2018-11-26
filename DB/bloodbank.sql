-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2018 at 07:15 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userid` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userid`, `password`) VALUES
('admin', 'admin');

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
  `donationDate` date NOT NULL,
  `dId` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`bId`, `donationDate`, `dId`) VALUES
('qwq', '2018-11-01', '1212');

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
('1212', 'rakshak', 'malhotra', 20, 'B+', 'male', 'b101', 'jabalpur', 665577, 12121432),
('2323', 'sfsq', 'xfsdfs', 12, 'A-', 'MALE', 'asdas', 'ewwew', 45, 2147483647),
('2323a', 'sfsq', 'xfsdfs', 12, 'A-', 'MALE', 'asdas', 'ewwew', 45, 2147483647),
('2323aaa', 'sfsqa', 'xfsdfs', 12, 'A-', 'MALE', 'asdas', 'ewwew', 45, 2147483647),
('div', 'DIvyanshu', 'Rawat', 20, 'AB+', 'MALE', 'IIIT', 'JABALPUR', 456545, 2147483647),
('dsbuoygfsv', 'sdjbfchjsd f', 'dsf njf chsd jh', 67, 'B+', 'MALE', 'as', 'sdfs', 121020, 1236547895),
('rhn', 'Rohan', 'Saxena', 20, 'A+', 'MALE', 'a2 203 srs royal hills', 'Faridabad', 121002, 2147483647),
('sd', 'SID', 'DIS', 20, 'ab+', 'male', 'sadda haqq', 'lucknow', 482005, 23221312);

-- --------------------------------------------------------

--
-- Table structure for table `infusion_history`
--

CREATE TABLE `infusion_history` (
  `bId` varchar(10) NOT NULL,
  `pId` varchar(10) NOT NULL,
  `date` date NOT NULL
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
('as', 'sad', 'sad', 'FEMALE', 20, 'a2', 2147483647, 'A-', 121002, 'faridabad'),
('asd12', 'msdmf', 'asda', 'MALE', 78, 'd205', 2147483647, 'B-', 454545, 'faruasa'),
('asd12asdas', 'msdmf', 'asda', 'MALE', 78, 'd205', 2147483647, 'B-', 454545, 'faruasa'),
('kk', 'sad', 'sad', 'FEMALE', 20, 'a2', 2147483647, 'A-', 121002, 'faridabad'),
('kl', 'rohan', 'Saxena', 'Male', 20, 'a2', 88888888, 'A+', 121002, 'faridabad'),
('lk', 'sad', 'sad', 'FEMALE', 20, 'a2', 2147483647, 'A-', 121002, 'faridabad'),
('op', 'Pritee', 'Khanna', 'FEMALE', 45, 'iiitdmj', 95959595, 'B+', 482005, 'jbp'),
('SW', 'SWAYAM', 'SINGH', 'FEMALE', 78, 'JVHSFIVUHV;IUEH', 2147483647, 'O-', 784587, 'KJVNFKVJ'),
('wq', 'rohan', 'Saxena', 'Male', 20, 'a2', 88888888, 'A+', 12, 'Faridabad'),
('wqeqweq', 'msdmf', 'asda', 'MALE', 78, 'd205', 2147483647, 'B-', 454545, 'faruasa');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `rid` varchar(10) NOT NULL,
  `pId` varchar(10) DEFAULT NULL,
  `date` date NOT NULL,
  `units` int(2) NOT NULL,
  `unitsRecieved` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`rid`, `pId`, `date`, `units`, `unitsRecieved`) VALUES
('12', 'kl', '2018-11-23', 1, 1),
('121', 'sd', '2018-11-23', 1, 0),
('asda', 'sd', '2018-11-23', 10, 0),
('plkj', 'op', '2018-11-26', 89, 0),
('po', 'op', '2018-11-25', 1, 0),
('pp', 'op', '2018-11-25', 45, 45),
('ppa', 'op', '2018-11-25', 45, 0);

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
('12', '12'),
('1212', '1212'),
('2323', '2323'),
('2323a', '2323a'),
('2323aaa', '2323aaa'),
('div', 'div'),
('rhn', 'rhn');

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
-- Indexes for table `infusion_history`
--
ALTER TABLE `infusion_history`
  ADD PRIMARY KEY (`bId`);

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
