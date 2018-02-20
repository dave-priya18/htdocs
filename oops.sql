-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 20, 2018 at 02:28 PM
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
-- Database: `oops`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(3) NOT NULL,
  `login_email` varchar(50) NOT NULL,
  `login_pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `login_email`, `login_pwd`) VALUES
(1, 'priya_dave', 'priya_dave18'),
(2, 'llb2018', 'Llb@18');

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
  `user_aboutme` varchar(100) NOT NULL COMMENT 'User About Me'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`user_userid`, `company_name`, `user_username`, `user_email`, `user_fname`, `user_lname`, `user_address`, `user_city`, `user_country`, `user_postalcode`, `user_aboutme`) VALUES
(16, 'Creative Code Inc.', 'prioya', 'qwedf@qwedf.com', 'qwedf', 'qwedf', '   qqqq ', 'qwedf', 'qwedf', 852963, '   qwertf '),
(17, 'Creative Code Inc.', 'qwerfty', 'c bdghtm', 'v gthnmj', 'fd rt', ' ryn f', ' hty6ruj', ' ght', 895623, 'f brthmrmjyrty'),
(18, 'Creative Code Inc.', 'qwerfty', 'c bdghtm', 'v gthnmj', 'fd rt', ' ryn f', ' hty6ruj', ' ght', 895623, 'f brthmrmjyrty'),
(19, 'Creative Code Inc.', 'prioya', 'qwedf@qwedf.com', 'qwedf', 'qwedf', '   qqqq ', 'qwedf', 'qwedf', 852963, '   qwertf '),
(20, 'Creative Code Inc.', 'qwerfty', 'c bdghtm', 'v gthnmj', 'fd rt', ' ryn f', ' hty6ruj', ' ght', 895623, 'f brthmrmjyrty'),
(21, 'Creative Code Inc.', 'qwerfty', 'c bdghtm', 'v gthnmj', 'fd rt', ' ryn f', ' hty6ruj', ' ght', 895623, 'f brthmrmjyrty'),
(22, 'Creative Code Inc.', 'prioya', 'qwedf@qwedf.com', 'qwedf', 'qwedf', '   qqqq ', 'qwedf', 'qwedf', 852963, '   qwertf '),
(23, 'Creative Code Inc.', 'qwerfty', 'c bdghtm', 'v gthnmj', 'fd rt', ' ryn f', ' hty6ruj', ' ght', 895623, 'f brthmrmjyrty'),
(24, 'Creative Code Inc.', 'qwerfty', 'c bdghtm', 'v gthnmj', 'fd rt', ' ryn f', ' hty6ruj', ' ght', 895623, 'f brthmrmjyrty'),
(25, 'Creative Code Inc.', 'prioya', 'qwedf@qwedf.com', 'qwedf', 'qwedf', '   qqqq ', 'qwedf', 'qwedf', 852963, '   qwertf '),
(26, 'Creative Code Inc.', 'qwerfty', 'c bdghtm', 'v gthnmj', 'fd rt', ' ryn f', ' hty6ruj', ' ght', 895623, 'f brthmrmjyrty'),
(27, 'Creative Code Inc.', 'qwerfty', 'c bdghtm', 'v gthnmj', 'fd rt', ' ryn f', ' hty6ruj', ' ght', 895623, 'f brthmrmjyrty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`user_userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `user_userid` int(3) NOT NULL AUTO_INCREMENT COMMENT 'User Id: Primary Key', AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
