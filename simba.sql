-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 31, 2018 at 04:03 PM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simba`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guards`
--

CREATE TABLE `guards` (
  `id` int(11) NOT NULL,
  `Employee_id` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `village` varchar(20) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `kids` int(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `next_of_kin` varchar(20) NOT NULL,
  `NIN` varchar(20) NOT NULL,
  `bankname` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `accountnumber` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `emergencycontact` varchar(20) NOT NULL,
  `NSSFno` varchar(20) NOT NULL,
  `startdate` varchar(20) NOT NULL,
  `releasedate` varchar(20) DEFAULT NULL,
  `hiredate` varchar(20) NOT NULL,
  `monthlypay` int(20) NOT NULL,
  `fullpayyear` int(20) DEFAULT NULL,
  `earnedsofar` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guards`
--

INSERT INTO `guards` (`id`, `Employee_id`, `firstname`, `lastname`, `gender`, `village`, `DOB`, `kids`, `status`, `next_of_kin`, `NIN`, `bankname`, `branch`, `accountnumber`, `email`, `contact`, `emergencycontact`, `NSSFno`, `startdate`, `releasedate`, `hiredate`, `monthlypay`, `fullpayyear`, `earnedsofar`) VALUES
(1, '0004', 'mawanda', 'henry', 'Male', 'kasubi', '1996', 19, 'Single', 'kizza', 'cmgk0007u4', 'stanbic', 'makerere', '90732737382', 'mawanda111@gmail.com', '0705022237', '0703367350', '7808387722209', '2006', NULL, '2005', 500000, NULL, NULL),
(2, 'U0087', 'Stanley', 'Asiga', 'Male', 'Kawaala', '25/7/1994', 17, 'Married', 'Mwanjje', 'CM900456KT30', 'stanbic', 'Masaka', '738262872872', 'stanley@gmail.com', '070567256', '07532653627', 'FG5778', '2017', NULL, '2016', 2000000, NULL, NULL),
(3, 'U0076', 'Denis', 'tebandeke', 'Male', 'Kasubi', '1995', 24, 'Married', 'mawanda', 'CBY79373', 'centenary', 'Mapeera', 'BH50038947', 'tebs@gmail.com', '07086474', '078456333', 'NG58847', '12/7/2006', NULL, '25/7/2007', 7000000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `KPI`
--

CREATE TABLE `KPI` (
  `k_id` int(11) NOT NULL,
  `time` varchar(20) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `team` varchar(20) NOT NULL,
  `clean` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leave_table`
--

CREATE TABLE `leave_table` (
  `id` int(11) NOT NULL,
  `startdate` varchar(20) NOT NULL,
  `expectedreturn` varchar(20) NOT NULL,
  `actualreturndate` varchar(20) NOT NULL,
  `leavetype` varchar(20) NOT NULL,
  `paid` varchar(20) NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `emp_no` varchar(30) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `terminate`
--

CREATE TABLE `terminate` (
  `id` int(11) NOT NULL,
  `lastdayworked` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `releasedate` varchar(20) NOT NULL,
  `recommendedrehire` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guards`
--
ALTER TABLE `guards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `KPI`
--
ALTER TABLE `KPI`
  ADD PRIMARY KEY (`k_id`);

--
-- Indexes for table `leave_table`
--
ALTER TABLE `leave_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terminate`
--
ALTER TABLE `terminate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `guards`
--
ALTER TABLE `guards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `KPI`
--
ALTER TABLE `KPI`
  MODIFY `k_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `leave_table`
--
ALTER TABLE `leave_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `terminate`
--
ALTER TABLE `terminate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
