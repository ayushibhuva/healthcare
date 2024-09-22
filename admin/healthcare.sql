-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 22, 2023 at 11:45 AM
-- Server version: 5.6.20-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`admin_id` int(50) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT '1',
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `usertype`, `username`, `password`) VALUES
(1, '1', 'ayushi', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
`appointment_id` int(11) NOT NULL,
  `registration_id` int(100) NOT NULL,
  `doctor_id` int(50) NOT NULL,
  `appointment_date` varchar(50) NOT NULL,
  `appointment_time` varchar(50) NOT NULL,
  `appointment_status` varchar(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `registration_id`, `doctor_id`, `appointment_date`, `appointment_time`, `appointment_status`) VALUES
(1, 4, 27, '2023-08-21', '11:30', 'new'),
(3, 3, 3, '2023-08-28', '00:36', 'old'),
(4, 0, 28, '2023-08-28', '00:47', 'new'),
(5, 2, 28, '2023-09-01', '02:50', 'new'),
(9, 6, 28, '2023-08-28', '17:30', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
`city_id` int(100) NOT NULL,
  `city_name` varchar(100) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(1, 'ahemdabad'),
(2, 'junagadh'),
(3, 'rajkot'),
(5, 'jetpur'),
(6, 'mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE IF NOT EXISTS `disease` (
`disease_id` int(100) NOT NULL,
  `hospital_id` int(100) NOT NULL,
  `disease_name` varchar(100) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`disease_id`, `hospital_id`, `disease_name`) VALUES
(1, 3, 'heartspecialist'),
(2, 5, 'genaral'),
(3, 1, 'child specialist');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
`doctor_id` int(50) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT '1',
  `hospital_id` int(100) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `doctor_gender` varchar(10) NOT NULL,
  `doctor_emailid` varchar(100) NOT NULL,
  `doctor_contactno` varchar(10) NOT NULL,
  `doctor_city` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `doctor_hospital` varchar(50) NOT NULL,
  `doctor_degree` varchar(50) NOT NULL,
  `doctor_speciality` varchar(100) NOT NULL,
  `doctor_charge` varchar(100) NOT NULL,
  `doctor_image` varchar(100) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `usertype`, `hospital_id`, `doctor_name`, `doctor_gender`, `doctor_emailid`, `doctor_contactno`, `doctor_city`, `username`, `password`, `doctor_hospital`, `doctor_degree`, `doctor_speciality`, `doctor_charge`, `doctor_image`) VALUES
(1, '1', 1, 'Abhimnyu Birala', '', 'abhi@gmail.com', '', '', 'abhi', 'abhi', '', '', 'mbbs', 'new 1000 old 500', '\r\nabhi.jpg'),
(2, '1', 1, 'jonsuk', '', 'jonsuk@gamail.com', '', '', 'jonsuk', 'jonsuk', '', '', 'mbbsb', 'new 1000 old 500', 'hoonpark.jpg'),
(3, '1', 2, 'situmo', '', 'situmo@gmail.com', '', '', 'situmo', 'situmo', '', '', 'md', 'new 800 old 400', 'hgf1.jpg'),
(4, '1', 2, 'qq', '', '', '', '', '', '', '', '', '', '', 'd1.jpg'),
(5, '1', 2, 'zzzzzzzzz', '', '', '', '', '', '', '', '', '', '', 'd1.jpg'),
(6, '1', 2, 'situmo', '', 'situmo@gmail.com', '', '', 'situmo', 'situmo', '', '', 'md', 'new 800 old 400', 'hgf1.jpg'),
(7, '1', 3, 'ccccc', '', 'ccc@gmail,com', '', '', 'ccc', 'ccc', '', '', 'ms', 'new 400 old 200', 'abhi.jpg'),
(28, '1', 5, 'sai joshi', 'female', 'sai@gmail.com', '3457678766', 'gunagadh', 'sai', 'sai', '5', 'md', 'general', 'new 500 old 250', 'hgf1.jpg'),
(27, '1', 4, 'truvisha', 'female', 'truvisha@gaminl.com', '7898765434', 'jetpur', 'truvisha', 'truvisha', '4', 'ms', 'dentalspecialist', 'new 500 old 250', 'hgf1.jpg'),
(24, '1', 0, 'ruhi', 'female', 'abc@a.com', '1234543212', 'ahemdabad', 'ruhi', 'ruhi', '1', 'mbbs', 'genearl', 'new 400 old 200', 'd1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
`feedback_id` int(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL,
  `date/time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `username`, `message`, `date/time`) VALUES
(1, 'ppp', 'this is good  site', '2023-08-14 16:51:20'),
(4, 'ppp', 'goodmorning', '2023-08-15 10:53:59');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
`hospital_id` int(100) NOT NULL,
  `city_id` int(100) NOT NULL,
  `hospital_name` varchar(100) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hospital_id`, `city_id`, `hospital_name`) VALUES
(1, 3, 'birala hospital'),
(2, 1, 'sarte hospital'),
(3, 5, 'sanjivani'),
(4, 1, 'apollo'),
(5, 2, 'aditya hospital');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
`registration_id` int(100) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT '0',
  `registration_firstname` varchar(50) NOT NULL,
  `registration_lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  `registration_city` varchar(100) NOT NULL,
  `registration_email` varchar(50) NOT NULL,
  `registration_gender` varchar(10) NOT NULL,
  `registration_age` varchar(100) NOT NULL,
  `registration_contactno` varchar(10) NOT NULL,
  `registration_sec_que` varchar(30) NOT NULL,
  `registration_ans` varchar(30) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`registration_id`, `usertype`, `registration_firstname`, `registration_lastname`, `username`, `password`, `registration_city`, `registration_email`, `registration_gender`, `registration_age`, `registration_contactno`, `registration_sec_que`, `registration_ans`) VALUES
(1, '0', 'ayushi', 'bhuva', 'ppp', '12', 'jetpur', 'a@gmail.com', '', '19', '2341234565', 'what is your hobby?', 'reading'),
(2, '0', 'ayu', 'bhuva', 'piryanshi', 'ppp', 'jetpur', 'abc@a.com', 'female', '19', '1232123432', 'what is your hobby?', 'aaa'),
(3, '0', 'sweety', 'patel', 'payal', 'ppp', 'dhoraji', 'abc@a.com', 'female', '20', '99876 4356', 'what is your favourite movie?', 'pushpa'),
(4, '0', 'd', 'bhuva', 'dhruvi', 'dhruvi', 'surat', 'dhruvi@dgmail.com', '', '17', '9787654345', 'what is your favourite food?', 'panipuri'),
(5, '0', 'ayu', 'behappy', 'happy', 'happy', 'happy', 'happy', 'female', '19', '2343212343', 'what is your favourite food?', 'fral'),
(6, '0', 'banshi', 'kachhadiya', 'banshi', 'banshi', 'paris', 'banshi@gmail.com', 'female', '19', '8796756453', 'what is your hobby?', 'drawing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
 ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
 ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
 ADD PRIMARY KEY (`disease_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
 ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
 ADD PRIMARY KEY (`hospital_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
 ADD PRIMARY KEY (`registration_id`), ADD UNIQUE KEY `username` (`username`), ADD KEY `registration_id` (`registration_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `admin_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
MODIFY `city_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
MODIFY `disease_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
MODIFY `doctor_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `feedback_id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
MODIFY `hospital_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
MODIFY `registration_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
