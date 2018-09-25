-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 25, 2018 at 10:58 AM
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
  `email` varchar(40) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `emergencycontact` varchar(20) NOT NULL,
  `NSSFno` varchar(20) NOT NULL,
  `startdate` varchar(20) NOT NULL,
  `releasedate` varchar(20) DEFAULT NULL,
  `hiredate` varchar(20) NOT NULL,
  `monthlypay` int(20) NOT NULL,
  `fullpayyear` int(20) DEFAULT NULL,
  `earnedsofar` int(20) DEFAULT NULL,
  `district` varchar(20) NOT NULL,
  `residence` varchar(20) NOT NULL,
  `county` varchar(20) NOT NULL,
  `subcounty` varchar(20) NOT NULL,
  `hiscontact` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `profile` text,
  `mum` varchar(20) NOT NULL,
  `dad` varchar(20) NOT NULL,
  `lcname` varchar(20) NOT NULL,
  `lccontact` varchar(20) NOT NULL,
  `fired` varchar(20) NOT NULL,
  `ldistrict` varchar(20) NOT NULL,
  `llcname` varchar(20) NOT NULL,
  `llcontact` varchar(20) NOT NULL,
  `lcounty` varchar(20) NOT NULL,
  `lvillage` varchar(20) NOT NULL,
  `lhome` varchar(20) NOT NULL,
  `leav` varchar(20) NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guards`
--

INSERT INTO `guards` (`id`, `Employee_id`, `firstname`, `lastname`, `gender`, `village`, `DOB`, `kids`, `status`, `next_of_kin`, `NIN`, `bankname`, `branch`, `accountnumber`, `email`, `contact`, `emergencycontact`, `NSSFno`, `startdate`, `releasedate`, `hiredate`, `monthlypay`, `fullpayyear`, `earnedsofar`, `district`, `residence`, `county`, `subcounty`, `hiscontact`, `age`, `profile`, `mum`, `dad`, `lcname`, `lccontact`, `fired`, `ldistrict`, `llcname`, `llcontact`, `lcounty`, `lvillage`, `lhome`, `leav`, `reason`) VALUES
(1, '0004', 'mawanda', 'henry', 'Male', 'kasubi', '1996', 19, 'Single', 'zziwa', 'cmgk0007u4', 'stanbic', 'makerere', '90732737382', 'mawanda111@gmail.com', '0705022237', '0703367350', '7808387722209', '2006', '2000', '2005', 500000, NULL, NULL, 'wakiso', 'kamwokya', 'kabumbi', 'kasana', '08004567', '16', 'IMG-20160821-WA0054.jpg', 'ses', 'naco', 'kakande', '070699784', 'NO', 'masaka', 'kiddu', '078884475', 'busega', 'masaka', 'kasangaati', 'NO', ' mawanda tayagala bakoowu mwanna'),
(2, 'U0087', 'Stanley', 'Asiga', 'Male', 'Kawaala', '25/7/1994', 17, 'Married', 'Mwanjje', 'CM900456KT30', 'stanbic', 'Masaka', '738262872872', 'stanley@gmail.com', '070567256', '07532653627', 'FG5778', '2017', '2008', '2016', 2000000, NULL, NULL, 'Mbarara', 'Kasubi', 'Kiwunnya', 'Kangulumira', '0788855456', '23', 'IMG-20160821-WA0027.jpg', 'maks', 'jjembs', 'Kasana', '078885674', 'NO', 'Lugobya', 'Kimbugwe', '07688656', 'bugiri', 'Kamwokya', 'Luwero', 'YES', '  this guy is a thief who steals cheaper things like stockings'),
(3, 'U0076', 'Denis', 'tebandeke', 'Male', 'Kasubi', '1995', 24, 'Married', 'mawanda', 'CBY79373', 'centenary', 'Mapeera', 'BH50038947', 'tebs@gmail.com', '07086474', '078456333', 'NG58847', '12/7/2006', NULL, '25/7/2007', 1200000, NULL, NULL, 'Kayunga', 'Kiwafu', 'Bukoto', 'Malaba', '07867763', '13', 'IMG-20160821-WA0002.jpg', 'namugga', 'sseruga', 'kikabyo', '077756473', 'NO', 'Mpelerwe', 'Luzza', '07775634', 'sonde', 'kagooma', 'Kiwafu', 'NO', ''),
(5, 'UT067', 'Dombo', 'Nassaf', 'Female', 'Kigowa', '12/5/1996', 4, 'Married', 'Maama Dombo', 'CTPL575546', 'Barclays', 'Kikoni', '634862767282', 'dombs@gmail.com', '0706666666', '07895-03333', 'NS875', '2007', '2020', '2006', 600000, NULL, NULL, 'Bushenyi', 'Mbale', 'Katakwi', 'Mataba', '075725278', '56', 'IMG-20160822-WA0003.jpg', 'damalie', 'jjemba', 'Kimbugwe', '077568363', 'NO', 'Mayuge', 'Luyima', '070562725', 'kalisizzo', 'lubowa', 'Kigoowa', 'YES', ' i justed wantd him off duty'),
(6, 'U0873', 'Hazard', 'Eden', 'Male', 'Kangulumilla', '12/11/1993', 12, 'Married', 'Matovu', 'UDGJ0097', 'Equity', 'Makerere', '373682637283', 'haza@gmail.cpm', '07726625262', '0796773723', 'UT37382', '1994', '20007', '1992', 500000, NULL, NULL, 'Kampala', 'Kitovu', 'Bukoto', 'Lubaga', '07372768383', '54', 'IMG-20160820-WA0001.jpg', '', '', '', '', 'YES', '', '', '', '', '', '', 'NO', '  Tamanyi mupiira'),
(11, 'U8776', 'Mukiibi', 'Kelli', 'Male', 'kasubi', '2004', 4, 'Married', 'Waigo', 'HDK07837', 'DFCU', 'Mukono', '63828238033', 'kelli@rocketmail.com', '0725626727', '086726633', 'MK6683', '2003', NULL, '2002', 500000, NULL, NULL, 'hoima', 'kawanda III', 'muvule', 'Kisawe', '067372833', '34', 'IMG-20160822-WA0018.jpg', 'mazze', 'Kyazze', 'ssebaduuka', '078886546', 'YES', 'Kayunga', 'Luwangula', '078947844', 'busiika', 'Nakifuma', 'katanga', 'NO', ''),
(12, 'U7363', 'Ssewante', 'Robert', 'Male', 'Lugazi', '12/06/1967', 11, 'Married', 'ssengali', 'HSKH09908', 'Barclays', 'Makindye', '97837623780', 'mwes@gmail.com', '073738374', '079273823', 'U8278', '12/7/2006', '2009', '12/6/2000', 200000, NULL, NULL, 'Gulu', 'Kamwokya', 'Busiro', 'Kasubi', '0772536713', '21', 'IMG-20160824-WA0011.jpg', 'maama we', 'taata we', 'kigenya', '0788833474', 'NO', '078866456', 'Kisembo', '07885674', 'seguju', 'ggomba', 'kawuku', 'NO', '  Be is a good professor though'),
(13, 'U646', 'Ssensalo', 'Edgar', 'Male', 'Nakasongola', '1994', 8, 'Married', 'Musokw', 'HDK07837', 'Equity bank', 'Nakasero', '3567287833', 'edga@gmail.com', '073677834', '072637273', 'UY678', '2006', NULL, '2004', 6000000, NULL, NULL, 'Masindi', 'kabumbi', 'Kasakka', 'Kiwatule', '0772646728', '34', '', '', '', '', '', 'YES', '', '', '', '', '', '', 'NO', ''),
(15, '1234', 'obace', 'chris', 'Female', 'namutumba', '2000', 2, 'Married', 'naco', '012345', 'dfcu', 'makerere', '012345678', 'glak56@gmail.com', '0751212791', '0705022237', '12345', '2018', '2032', '2017', 5000000, NULL, NULL, 'kaliro', 'NAMASUBA', 'komamboga', 'kulambiro', '0706466637', '28', 'IMG-20180923-WA0000.jpg', '', '', '', '', 'NO', '', '', '', '', '', '', 'NO', ' tayagala kunaaba gacia bulololo'),
(16, 'UTF67', 'nisiima', 'grace', 'Female', 'kawaala', '12/5/1996', 12, 'Married', 'Jajja', 'UXT667', 'DFCU', 'nakawa', '903783923', 'grace@gmail.com', '07874772', '07772933', 'NS5550', '1996', NULL, '2008', 800000, NULL, NULL, 'Mubende', 'Kawungulu', 'Banda', '', '0786373333', '23', 'IMG-20160821-WA0017.jpg', 'nankya', 'luboowa', '', '07888360', 'YES', 'kasana', 'kintu marvin', '078883672', 'Kiggo', 'Kigoowa', 'Nansana', 'NO', ''),
(17, 'UTF556', 'Katende', 'Phillip', 'Male', 'katende', '02/5/1999', 2, 'Married', 'mutaawe', 'SDT77830P', 'DFCU', 'Makerere', 'BH50038947', 'phips@yahoo.com', '07086474', '078886332', 'UG564', '12/7/2006', '20067', '12/6/2000', 7000000, NULL, NULL, 'Wakiso', 'Kamwokya', 'Luweero', '', '07885674', '56', '20170715_132707.jpg', 'Nakijoba', 'Ssente', '', '07656344', 'YES', 'subwee', 'david', '07884653', 'ssetwa', 'kimwanyi', 'kiwafu', 'NO', ' guy yali so lauzze mwaana'),
(18, 'UT008', 'nankyanzi', 'Shuk', 'Female', 'bukalango', '12/02/1999', 1, 'Single', 'Maama ', 'YUT8756KL', 'DFCU', 'Lubaga', '87367382736', 'shuks@gmail.com', '0777357253', '0777356234', 'NS006', '2008', '2006', '2006', 400000, NULL, NULL, 'wakiso', 'kawaala', 'kakiri', '', '070432384', '12', 'FB_IMG_1526832079514.jpg', 'winnie', 'Guy', '', '076663723', 'NO', 'Wakiso', 'Mpokota', '076733644', 'nansana 1', 'Kiruddu', 'nansana', 'NO', ' omwaana onywa enjaga'),
(19, 'UT89', 'Lukenge', 'Pius', 'Male', 'Bag', '1994', 12, 'Married', 'Assimwe', 'JD883947P', 'Equity', 'Makerere', 'I57643327', 'Luks@gmail.com', '0788347389', '076543778', 'UT883', '2004', NULL, '2003', 500000, NULL, NULL, 'Kampala', 'Kirussia', 'Lugoba', '', '075472273', '23', 'IMG-20180914-WA0001.jpg', 'Nakku', 'Mpassa', '', '07888657', 'YES', 'Kasubi', 'Matia', '078883672', 'Lusi', 'Kitu', 'Nakasongola', 'NO', ''),
(20, 'UTT09', 'mbazira', 'vicent', 'Male', 'wandegeya', '1990', 12, 'Married', 'mbalangu', 'TY9378903784', 'Equity', 'kifuuma', '99378829003', 'mbaz12@gmail.com', '0777483664', '07746899348', 'NS660', '2005', '2018', '2005', 700000, NULL, NULL, 'kalisizzo', 'Bwaise', 'kikomo', '', '0735628823', '23', 'IMG_2604.JPG', 'nakanjjako', 'kikadde', '', '077736723', 'NO', 'Masaka', 'mpango', '07773562238', 'kasubi', 'Nkokonjeru', 'mpambire', 'NO', ' ono guy ate ye tayina work'),
(21, 'morghan', 'cek', 'morghan', 'Male', 'kulambiro', '21st-jan-1996', 4, 'Married', 'kisaasi', '1234567', 'stanbic', 'makerere', '00189567', 'glorianak56@gmail.com', '07512212791', '0786212791', '12345', '24th-october-2020', NULL, '24th-october-2018', 400000, NULL, NULL, 'kaliro', 'kanyaya', 'kisaasi', '', '0751212791', '43', 'Screenshot (8).png', 'rebecca', 'steven', '', '0751212791', 'YES', 'mukono', 'budini', '0786212791', 'nawaikoke', 'namutumba', 'iganga', 'NO', 'NONE'),
(22, 'UTV234', 'Karanzi', 'John', 'Male', 'Walube', '1990', 23, 'Married', 'Musazzi', 'RT2778267', 'Centenar', 'Magoba', 'AC899379933', 'kra@gmail.com', '078992738', '0788836783', 'NS09993', '2009', NULL, '2008', 1000000, NULL, NULL, 'Mpigi', 'Kikatta', 'Nakasette', '', '07883889', '23', '1492332068568.jpg', 'nanyungu', 'mutesi', 'Mawanda', '07839737', 'NO', 'Mpigi', 'Ssemaganda', '078836778', 'Luzze', 'Kikunta', 'Kagoma', 'NO', 'NONE');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
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
