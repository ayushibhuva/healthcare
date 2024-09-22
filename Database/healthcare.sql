-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 20, 2023 at 11:55 AM
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `usertype`, `username`, `password`) VALUES
(1, '1', 'ayushi', 'ayushi'),
(2, '1', 'payal', 'payal');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE IF NOT EXISTS `appointments` (
`appointments_id` int(11) NOT NULL,
  `registration_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `appointment_status` varchar(50) NOT NULL,
  `appointment_report` varchar(50) NOT NULL DEFAULT 'pending'
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointments_id`, `registration_id`, `doctor_id`, `appointment_date`, `appointment_time`, `appointment_status`, `appointment_report`) VALUES
(1, 5, 1, '2023-09-20', '10:58:00', 'new', 'pending'),
(2, 5, 2, '2023-09-28', '13:00:00', 'new', 'pending'),
(3, 1, 1, '2023-09-26', '15:00:00', 'old', 'approve'),
(4, 4, 7, '2023-09-21', '10:36:00', 'new', 'pending'),
(5, 4, 2, '2023-10-04', '10:37:00', 'old', 'approve'),
(6, 11, 3, '2023-09-25', '14:33:00', 'new', 'approve');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
`city_id` int(100) NOT NULL,
  `city_name` varchar(100) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(1, 'Ahemdabad'),
(2, 'Rajkot'),
(3, 'Junaghadh'),
(4, 'Jetpur');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `usertype`, `hospital_id`, `doctor_name`, `doctor_gender`, `doctor_emailid`, `doctor_contactno`, `doctor_city`, `username`, `password`, `doctor_hospital`, `doctor_degree`, `doctor_speciality`, `doctor_charge`, `doctor_image`) VALUES
(1, '1', 1, 'Dr.Abhimanyu Birala', 'male', 'abhi@gmail.com', '9089876567', 'ahemdabad', 'abhi', 'abhi', '', 'M.B.B.S.', 'heart specialist', 'old 500 new 1000', 'abhmaniyu_birla.png'),
(2, '1', 2, 'Dr.Hoon Park', 'male', 'park@gmail.com', '7898987678', 'rajkot', 'park', 'park', '', 'M.B.B.S.', 'heart specialist', 'old 500 new 1000', 'hoonpark.jpg'),
(3, '1', 1, 'Dr.Arohi Birala', 'female', 'aruhi@gmial.com', '9876567876', 'ahemdabad', 'aruhi', 'aruhi', '', 'M.D.', 'skin specialist', 'old 200 new 100', 'arohi_birla.png'),
(4, '1', 3, 'Dr.Asha Patel', 'female', 'asha@gmial.com', '9089876567', 'Jetpur', 'asha', 'asha', '', 'M.B.B.S.', 'bourns specialist', 'old 200 new 100', 'asha_patel.png'),
(5, '1', 4, 'Dr.Parth Patel', 'male', 'patan@gmial.com', '9089876567', 'Jetpur', 'parth', 'parth', '', 'M.D.', 'skin specialist', 'old 200 new 100', 'patan.png'),
(6, '1', 2, 'Dr.ruchi', 'female', 'ruchi@gmail.com', '9089876598', 'rajkot', 'ruchi', 'ruchi', '', 'B.D.S.', 'skin specialist', 'old 200 new 100', 'ruchi.png'),
(7, '1', 5, 'Dr.Sai Joshi', 'female', 'sai@gmail.com', '8767898767', 'ahemdabad', 'sai', 'sai', '', 'B.D.M.S.', 'dental specialist', 'old 200 new 400', 'sai.png');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
`feedback_id` int(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL,
  `date/time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `username`, `message`, `date/time`) VALUES
(1, 'sweety', 'this is good  site', '2023-08-14 16:51:20'),
(2, 'dhruvi', 'nice', '2023-08-15 10:53:59'),
(8, 'ayushi', 'i like this website', '2023-09-16 17:30:44'),
(9, 'ayushi', 'good', '2023-09-20 12:34:46');

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
(1, 1, 'Birala Hospital'),
(2, 2, 'Sarte Hospital'),
(3, 3, 'Aaditya Hospital'),
(4, 4, 'Sanjivni Hospital'),
(5, 1, 'Star Hospital');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`registration_id`, `usertype`, `registration_firstname`, `registration_lastname`, `username`, `password`, `registration_city`, `registration_email`, `registration_gender`, `registration_age`, `registration_contactno`, `registration_sec_que`, `registration_ans`) VALUES
(1, '0', 'ayushi', 'bhuva', 'ayushi', 'ayushi', 'jetpur', 'a@gmail.com', 'female', '19', '2341234565', 'what is your hobby?', 'reading'),
(2, '0', 'priyanshi', 'bhuva', 'priyanshi', 'ppp', 'jetpur', 'abc@a.com', 'female', '19', '1232123432', 'what is your hobby?', 'aaa'),
(3, '0', 'sweety', 'patel', 'payal', 'payal', 'dhoraji', 'abc@a.com', 'female', '20', '99876 4356', 'what is your favourite movie?', 'pushpa'),
(4, '0', 'dhruvi', 'bhuva', 'dhruvi', 'd', 'surat', 'dhruvi@dgmail.com', 'female', '17', '9787654345', 'what is your favourite food?', 'aaa'),
(5, '0', 'happy', 'behappy', 'happy', 'happy', 'happy', 'happy', 'female', '19', '2343212343', 'what is your favourite food?', 'fral'),
(6, '0', 'banshi', 'kachhadiya', 'banshi', 'banshi', 'paris', 'banshi@gmail.com', 'female', '19', '8796756453', 'what is your hobby?', 'drawing'),
(10, '0', 'a', 'a', 'a', 'a', 'a', 'a@gmail.com', 'male', '22', '1234567890', 'what is your hobby?', 'sing'),
(11, '0', 'devu', 'makani', 'devu', 'devu', 'surat', 'devu@gamil.com', 'female', '19', '9908665647', 'what is your favourite food?', 'panipuri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
 ADD PRIMARY KEY (`appointments_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
 ADD PRIMARY KEY (`city_id`);

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
MODIFY `admin_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
MODIFY `appointments_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
MODIFY `city_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
MODIFY `doctor_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `feedback_id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
MODIFY `hospital_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
MODIFY `registration_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
