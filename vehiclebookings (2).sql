-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 05, 2023 at 08:13 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehiclebookings`
--

-- --------------------------------------------------------

--
-- Table structure for table `myguests`
--

DROP TABLE IF EXISTS `myguests`;
CREATE TABLE IF NOT EXISTS `myguests` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myguests`
--

INSERT INTO `myguests` (`firstname`, `lastname`, `email`) VALUES
('John', 'Doe', 'john@example.com'),
('Mary', 'Moe', 'mary@example.com'),
('Julie', 'Dooley', 'julie@example.com'),
('John', 'Doe', 'john@example.com'),
('Mary', 'Moe', 'mary@example.com'),
('Julie', 'Dooley', 'julie@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `tms_admin`
--

DROP TABLE IF EXISTS `tms_admin`;
CREATE TABLE IF NOT EXISTS `tms_admin` (
  `a_id` int(20) NOT NULL AUTO_INCREMENT,
  `a_name` varchar(200) NOT NULL,
  `a_email` varchar(200) NOT NULL,
  `a_pwd` varchar(200) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tms_admin`
--

INSERT INTO `tms_admin` (`a_id`, `a_name`, `a_email`, `a_pwd`) VALUES
(1, 'System Admin', 'admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tms_booking`
--

DROP TABLE IF EXISTS `tms_booking`;
CREATE TABLE IF NOT EXISTS `tms_booking` (
  `u_book_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `u_vehicle_number` varchar(20) DEFAULT NULL,
  `u_driver_name` varchar(30) DEFAULT NULL,
  `u_source` varchar(50) DEFAULT NULL,
  `u_destination` varchar(50) DEFAULT NULL,
  `u_tons` int(11) DEFAULT NULL,
  `u_book_date` date DEFAULT NULL,
  `u_book_status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`u_book_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tms_booking`
--

INSERT INTO `tms_booking` (`u_book_id`, `users_id`, `u_vehicle_number`, `u_driver_name`, `u_source`, `u_destination`, `u_tons`, `u_book_date`, `u_book_status`) VALUES
(6, 15, 'TN221202', 'Demo User', 'chennai', 'erode', 5, '2022-12-10', 'Canceled'),
(8, 21, 'CA7700', 'John Settles', 'Dharapuram', 'Madurai', 5, '2022-12-13', 'Approved'),
(13, 14, 'TN24565', 'Elan S', 'Hosur', 'Dharapuram', 8, '2023-01-20', 'Approved'),
(12, 14, 'TN45630', 'Demo User', 'Hosur', 'erode', 5, '2023-01-07', 'Pending'),
(11, 37, 'TN2306', 'Dharshini M', 'Dharapuram', 'erode', 2, '2022-12-18', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tms_feedback`
--

DROP TABLE IF EXISTS `tms_feedback`;
CREATE TABLE IF NOT EXISTS `tms_feedback` (
  `f_id` int(20) NOT NULL AUTO_INCREMENT,
  `f_uname` varchar(200) DEFAULT NULL,
  `f_content` longtext,
  `f_status` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tms_feedback`
--

INSERT INTO `tms_feedback` (`f_id`, `f_uname`, `f_content`, `f_status`) VALUES
(8, 'Saran S ', 'Hi Sir!\r\nWe are satisfied with  your service.\r\nThank You!', 'Published');

-- --------------------------------------------------------

--
-- Table structure for table `tms_pwd_resets`
--

DROP TABLE IF EXISTS `tms_pwd_resets`;
CREATE TABLE IF NOT EXISTS `tms_pwd_resets` (
  `r_id` int(20) NOT NULL AUTO_INCREMENT,
  `r_email` varchar(200) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tms_pwd_resets`
--

INSERT INTO `tms_pwd_resets` (`r_id`, `r_email`) VALUES
(2, 'admin@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tms_user`
--

DROP TABLE IF EXISTS `tms_user`;
CREATE TABLE IF NOT EXISTS `tms_user` (
  `u_id` int(20) NOT NULL AUTO_INCREMENT,
  `u_fname` varchar(200) NOT NULL,
  `u_lname` varchar(200) NOT NULL,
  `u_phone` varchar(200) DEFAULT NULL,
  `u_addr` varchar(200) DEFAULT NULL,
  `u_category` varchar(200) DEFAULT NULL,
  `u_email` varchar(200) NOT NULL,
  `u_pwd` varchar(20) NOT NULL,
  `u_license` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tms_user`
--

INSERT INTO `tms_user` (`u_id`, `u_fname`, `u_lname`, `u_phone`, `u_addr`, `u_category`, `u_email`, `u_pwd`, `u_license`) VALUES
(14, 'Mounisha', 'M', '8270087129', 'Srinagar', 'User', 'mounishakln@gmail.com', '12345', NULL),
(22, 'Hari', 'S', '9836526898', 'Chennai', 'User', 'hari@gmail.com', 'hari1234', NULL),
(24, 'Saran', 'S', '9098769435', 'Coimbatore', 'User', 'saran@gmail.com', 'saran1234', NULL),
(25, 'Sathish', 'S', '8270087123', 'Salem', 'User', 'sathish@gmail.com', 'sathish12345', NULL),
(35, 'Mahendraa', 'S', '8270087123', 'Bangalore', 'Driver', 'mahe@gmail.com', '12345', '1671125711778-removebg-preview.png'),
(36, 'Naren', 'V', '9867835689', 'Thiruchi', 'Driver', 'naren@gmail.com', '12345', 'license.png'),
(37, 'Tamil', 's', '9025108625', 'palani', 'User', 'tamil@gmail.com', '1234', NULL),
(38, 'kavin', 'M', '9865432781', 'coimbatore', NULL, 'kavin@gmail.com', '12345', ''),
(39, 'kavin', 'M', '9865432781', 'coimbatore', NULL, 'kavin@gmail.com', '12345', ''),
(40, 'kavin', 'M', '9098765435', 'Hosur', NULL, 'kavin@gmail.com', '1234', 'license.png'),
(41, 'Mounisha', 'k', '9098765435', '46 Clearview Drive', NULL, 'mounishal.20bcr@kongu.edu', '12345', 'license.png'),
(42, 'Mounisha', 'k', '9098765435', '46 Clearview Drive', NULL, 'mounishal.20bcr@kongu.edu', '12345', 'license.png'),
(43, 'Raja', 'S', '9066765436', 'Chennai', NULL, 'raja@gmail.com', '12345', 'license.png'),
(44, 'Arun', 'S', '8356925697', 'Kerala', NULL, 'arun@gmail.com', 'arun@123', NULL),
(45, 'Arun', 'S', '8356925697', 'Kerala', NULL, 'arun@gmail.com', 'arun@123', NULL),
(46, 'Arun', 'S', '9354789267', 'Kerala', NULL, 'arun@gmail.com', 'arun@1234', NULL),
(47, 'Varuun', 'S', '9025108624', 'Thirupur', NULL, 'varun@gmail.com', 'varun@1234', NULL),
(48, 'Arun', 'S', '9098765436', 'Salem', NULL, 'arun@gmail.com', 'arun1234', NULL),
(49, 'Arun', 'R', '9098765436', 'Salem', 'User', 'arun@gmail.com', 'arun1234', NULL),
(50, 'Raman', 'S', '9098765435', 'Hosur', 'Driver', 'raman@gmail.com', 'ram1234', NULL),
(51, 'Elan', 'S', '9098765437', 'Salem', 'Driver', 'elan@gmail.com', 'elan1234', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tms_vehicle`
--

DROP TABLE IF EXISTS `tms_vehicle`;
CREATE TABLE IF NOT EXISTS `tms_vehicle` (
  `v_id` int(20) NOT NULL AUTO_INCREMENT,
  `v_name` varchar(200) DEFAULT NULL,
  `v_reg_no` varchar(200) DEFAULT NULL,
  `v_ton` varchar(200) DEFAULT NULL,
  `v_driver` varchar(200) DEFAULT NULL,
  `v_category` varchar(200) DEFAULT NULL,
  `v_dpic` varchar(200) DEFAULT NULL,
  `v_status` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tms_vehicle`
--

INSERT INTO `tms_vehicle` (`v_id`, `v_name`, `v_reg_no`, `v_ton`, `v_driver`, `v_category`, `v_dpic`, `v_status`) VALUES
(11, 'Tata', 'TN45630', '5', 'Demo User', 'Lorry', NULL, 'Available'),
(12, 'Tata', 'TN45630', '5', 'Demo User', 'Lorry', NULL, 'Available'),
(13, 'Honda', 'TN2306', '2', 'Dharshini M', 'Lorry', NULL, 'Available'),
(14, 'Honda', 'TN12346', '3', 'Mahendraa S', 'Lorry', NULL, 'Available'),
(15, 'Eclair', 'TN24565', '8', 'Elan S', 'Lorry', NULL, 'Booked');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
