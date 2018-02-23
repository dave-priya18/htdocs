-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 23, 2018 at 02:30 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(3) NOT NULL COMMENT 'Primary Key',
  `admin_username` varchar(10) NOT NULL COMMENT 'Username',
  `admin_password` varchar(100) NOT NULL COMMENT 'Password'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'priya1811', 'd6fcd9d23b8c650a915cfc82a4e156e6');

-- --------------------------------------------------------

--
-- Table structure for table `company_banner`
--

CREATE TABLE `company_banner` (
  `banner_id` int(3) NOT NULL,
  `banner_companyname` varchar(30) NOT NULL DEFAULT 'Eventoz Company',
  `banner_welcome` varchar(100) NOT NULL,
  `banner_slogan` varchar(30) NOT NULL,
  `banner_image` varchar(100) NOT NULL,
  `banner_active_flag` int(1) NOT NULL,
  `created_by` int(3) NOT NULL,
  `updated_by` int(3) NOT NULL,
  `admin_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_banner`
--

INSERT INTO `company_banner` (`banner_id`, `banner_companyname`, `banner_welcome`, `banner_slogan`, `banner_image`, `banner_active_flag`, `created_by`, `updated_by`, `admin_id`) VALUES
(1, 'Eventoz Company', 'Hello! Welcome to Eventoz', 'You Dream, We Create', 'banner.jpg', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `conference_detail`
--

CREATE TABLE `conference_detail` (
  `conference_id` int(3) NOT NULL COMMENT 'Primary Key',
  `conference_title` varchar(30) NOT NULL COMMENT 'Title of the About Us',
  `conference_image` varchar(100) NOT NULL COMMENT 'Image of the About Us',
  `conference_desc` varchar(200) NOT NULL COMMENT 'Description of the About Us',
  `conference_start_date` date NOT NULL,
  `conference_end_date` date NOT NULL,
  `conference_landmark` varchar(100) NOT NULL,
  `conference_active_flag` int(1) NOT NULL,
  `created_by` int(3) NOT NULL,
  `updated_by` int(3) NOT NULL,
  `admin_id` int(11) NOT NULL COMMENT 'Foreign Key: Admin_id ',
  `conference_city` varchar(30) NOT NULL,
  `conference_state` varchar(30) NOT NULL,
  `conference_country` varchar(30) NOT NULL,
  `conference_postalcode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conference_detail`
--

INSERT INTO `conference_detail` (`conference_id`, `conference_title`, `conference_image`, `conference_desc`, `conference_start_date`, `conference_end_date`, `conference_landmark`, `conference_active_flag`, `created_by`, `updated_by`, `admin_id`, `conference_city`, `conference_state`, `conference_country`, `conference_postalcode`) VALUES
(17, 'IIT IIT IIT iit', '5.jpeg', '                                         x srjedtmdtuteu                                        ', '2018-02-23', '2018-02-25', ' m zxm,lm', 0, 1, 0, 1, 'nnsvkdm', 'NKQJV', 'NWSVMW', 741852),
(18, 'dnhdt', '4.jpeg', 'sdbgtyjtklrtyi', '2018-05-04', '2018-05-05', 'x,mbpete][.a', 0, 1, 0, 1, 'm,plwsv,a[', 'm,;[vfelp', 'mwpaldv,.wv', 895623),
(19, 'IIT IIT IIT iit', '4.jpeg', 'x srjedtmdtuteu', '2018-02-23', '2018-02-25', ' m zxm,lm', 0, 0, 0, 0, 'nnsvkdm', 'NKQJV', 'NWSVMW', 562356),
(20, 'IIT IIT IIT iit', '5.jpeg', '                                         x srjedtmdtuteu                                        ', '2018-02-23', '2018-02-25', ' m zxm,lm', 0, 1, 0, 1, 'nnsvkdm', 'NKQJV', 'NWSVMW', 741852);

-- --------------------------------------------------------

--
-- Table structure for table `conference_schedule_detail`
--

CREATE TABLE `conference_schedule_detail` (
  `schedule_id` int(3) NOT NULL,
  `schedule_date` date NOT NULL,
  `schedule_time` time NOT NULL,
  `schedule_title` varchar(100) NOT NULL,
  `speaker_id` int(3) NOT NULL,
  `admin_id` int(3) NOT NULL,
  `created_by` int(3) NOT NULL,
  `updated_by` int(3) NOT NULL,
  `conference_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conference_schedule_detail`
--

INSERT INTO `conference_schedule_detail` (`schedule_id`, `schedule_date`, `schedule_time`, `schedule_title`, `speaker_id`, `admin_id`, `created_by`, `updated_by`, `conference_id`) VALUES
(5, '0000-00-00', '22:10:00', 'qwerty', 6, 1, 1, 0, 5),
(6, '0000-00-00', '05:00:00', 'adddbgnwBfcnxrfyjcgnxdfnm', 2, 1, 1, 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `conference_speaker_detail`
--

CREATE TABLE `conference_speaker_detail` (
  `speaker_id` int(11) NOT NULL,
  `speaking_desc` varchar(100) NOT NULL,
  `speaker_name` varchar(30) NOT NULL,
  `speaker_designation` varchar(30) NOT NULL,
  `speaker_image` varchar(100) NOT NULL,
  `conference_id` int(3) NOT NULL,
  `admin_id` int(3) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conference_speaker_detail`
--

INSERT INTO `conference_speaker_detail` (`speaker_id`, `speaking_desc`, `speaker_name`, `speaker_designation`, `speaker_image`, `conference_id`, `admin_id`, `created_by`, `updated_by`) VALUES
(3, '    Gold medaliscghhmftuklfyt from IIT Madras, 2011 batch.   ebfgrjerjhseh  ', 'Polomi Vankateshwarmbmtuu', 'Technical Manager, Oracle', '4.jpeg', 17, 1, 1, 1),
(4, 'Novelist and Social Activist.', 'Patrick Nicolsan', 'Founder, LiveFor Foundation', '3.jpeg', 5, 1, 1, 1),
(5, 'Best in R&D and contributor to freelancer.com', 'Fransis Joseph', 'HOD- R&D Harward ', '4.jpeg', 5, 1, 1, 0),
(13, '  sdttnheryj', 'wsh4we', 'bnddryj', '4.jpeg', 17, 1, 1, 0),
(14, '  qdwsvv', 'e vfewb', ' erwt', '4.jpeg', 17, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `conference_sponsor_detail`
--

CREATE TABLE `conference_sponsor_detail` (
  `sponsor_id` int(3) NOT NULL,
  `sponsor_companyname` varchar(30) NOT NULL,
  `sponsor_logo` varchar(100) NOT NULL,
  `sponsor_companydesc` varchar(100) NOT NULL,
  `created_by` int(3) NOT NULL,
  `updated_by` int(3) NOT NULL,
  `conference_id` int(3) NOT NULL,
  `admin_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conference_sponsor_detail`
--

INSERT INTO `conference_sponsor_detail` (`sponsor_id`, `sponsor_companyname`, `sponsor_logo`, `sponsor_companydesc`, `created_by`, `updated_by`, `conference_id`, `admin_id`) VALUES
(18, '123sdfer', 'indianic.jpg', ' ', 1, 0, 20, 1),
(19, 'ntfmjtd', '2.jpg', 'rdyje5k5u8kl6 ', 1, 0, 18, 1),
(20, 'wqefw3rgh', '3.jpeg', ' FDqethn4ynjh', 1, 0, 18, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contactus_id` int(3) NOT NULL,
  `contactus_name` varchar(50) NOT NULL,
  `contactus_email` varchar(50) NOT NULL,
  `contactus_message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `user_userid` int(3) NOT NULL COMMENT 'User Id: Primary Key',
  `company_name` varchar(50) NOT NULL DEFAULT 'Creative Code Inc.' COMMENT 'User Company: by default',
  `user_username` varchar(10) NOT NULL COMMENT 'Username',
  `user_email` varchar(50) NOT NULL COMMENT 'User Email Id',
  `user_fname` varchar(50) NOT NULL COMMENT 'User First Name',
  `user_lname` varchar(50) NOT NULL COMMENT 'User Last Name',
  `user_address` varchar(200) NOT NULL COMMENT 'User Address',
  `user_city` varchar(50) NOT NULL COMMENT 'User City',
  `user_country` varchar(50) NOT NULL COMMENT 'User Country',
  `user_postalcode` int(6) NOT NULL COMMENT 'User PostalCode',
  `user_aboutme` varchar(100) NOT NULL COMMENT 'User About Me',
  `admin_id` int(3) NOT NULL,
  `created_by` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`user_userid`, `company_name`, `user_username`, `user_email`, `user_fname`, `user_lname`, `user_address`, `user_city`, `user_country`, `user_postalcode`, `user_aboutme`, `admin_id`, `created_by`) VALUES
(29, 'Creative Code Inc.', 'sves', 'fmjntfuk', 'dtjr7s7k', 'dfhed5t7k', 'rjyt5kl', 'gtfnjr6ik', 'rn57', 456456, '1', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `company_banner`
--
ALTER TABLE `company_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `conference_detail`
--
ALTER TABLE `conference_detail`
  ADD PRIMARY KEY (`conference_id`);

--
-- Indexes for table `conference_schedule_detail`
--
ALTER TABLE `conference_schedule_detail`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `conference_speaker_detail`
--
ALTER TABLE `conference_speaker_detail`
  ADD PRIMARY KEY (`speaker_id`);

--
-- Indexes for table `conference_sponsor_detail`
--
ALTER TABLE `conference_sponsor_detail`
  ADD PRIMARY KEY (`sponsor_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`user_userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_banner`
--
ALTER TABLE `company_banner`
  MODIFY `banner_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `conference_detail`
--
ALTER TABLE `conference_detail`
  MODIFY `conference_id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `conference_schedule_detail`
--
ALTER TABLE `conference_schedule_detail`
  MODIFY `schedule_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `conference_speaker_detail`
--
ALTER TABLE `conference_speaker_detail`
  MODIFY `speaker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `conference_sponsor_detail`
--
ALTER TABLE `conference_sponsor_detail`
  MODIFY `sponsor_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `user_userid` int(3) NOT NULL AUTO_INCREMENT COMMENT 'User Id: Primary Key', AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
