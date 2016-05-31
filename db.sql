-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2015 at 03:04 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iksk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
`id` int(20) NOT NULL,
  `user_name` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `user_name`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
`id` int(11) NOT NULL,
  `p_y_name` varchar(100) NOT NULL,
  `p_gender` varchar(100) NOT NULL,
  `p_dob` varchar(100) NOT NULL,
  `p_f_name` varchar(500) NOT NULL,
  `p_nationality` varchar(100) NOT NULL,
  `p_m_satus` varchar(500) NOT NULL,
  `p_address` varchar(1000) NOT NULL,
  `p_e_mail` varchar(200) NOT NULL,
  `p_a_r_claimed` varchar(100) NOT NULL,
  `p_edu_quali` varchar(100) NOT NULL,
  `p_img` varchar(1000) NOT NULL,
  `p_reg_id` varchar(100) NOT NULL,
  `p_tra_date` varchar(100) NOT NULL,
  `p_fee_paid` varchar(100) NOT NULL,
  `p_agency` varchar(100) NOT NULL,
  `p_m_payment` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `p_y_name`, `p_gender`, `p_dob`, `p_f_name`, `p_nationality`, `p_m_satus`, `p_address`, `p_e_mail`, `p_a_r_claimed`, `p_edu_quali`, `p_img`, `p_reg_id`, `p_tra_date`, `p_fee_paid`, `p_agency`, `p_m_payment`) VALUES
(7, 'Deepak', 'Male', '2015-09-03', 'Rajkumar', 'Indian', 'Unmarried', 'Ballia', 'Deepak.suhawal@gmaiulk.com', '9169371589', '11th', '7.jpg', '1235', '2015-09-10', '1234', '12', '2015-09-23'),
(8, 'Manoj', 'male', '2015-09-08', 'B.N. Upapdhaya', 'Indian', 'Unmarried', 'Ballia', 'Deepak.suhawal@gmaiulk.com', '9169371589', 'Ba', 'deepak (3).jpg', '001245', '2015-09-01', '545', '50', '2015-09-25'),
(9, 'Deepak Kumar ', 'on', '2015-09-14', 'B.N. Upapdhaya', 'Indian', 'Unmarried', 'Ballia', 'Deepak.suhawal@gmaiulk.com', '9169371589', 'Ba', 'Snapshot_20150901_14.JPG', '001245', '2015-09-15', '545', '12', '2015-09-30'),
(10, 'Deepak Kumar ', 'Male', '2015-09-09', 'Rajkumar', 'Indian', 'Unmarried', 'Ballia', 'Deepak.suhawal@gmaiulk.com', '9169371589', '11th', 'Snapshot_20150901_32.JPG', '001245', '2015-09-16', '545', '12', '2015-09-23'),
(11, 'Deepak Kumar', 'Male', '1998-10-18', 'Mr. Rajkumar ', 'Indian', 'Unmarried', 'Suhawal Ballia Utter Pradesh', 'Deepak.suhawal@gmaiulk.com', '9169371589', '11th', 'deepak (3).jpg', '001245', '2015-09-16', '545', '12', '2015-09-18'),
(12, 'PRIYANSHU RAJ', 'Male', '1999-06-16', 'MR. RAJ KUMAR ', 'INDIAN', 'Unmarried', 'BALLIA', 'DEEPAK.BALLIA@GMAIL.COM', '8545005272', '10TH', 'Deepak (2).jpg', '', '', '25452', '123', '2015-09-30'),
(13, 'PRIYANSHU RAJ', 'Male', '1999-07-01', 'Mr. Rajkumar ', 'Indian', 'Unmarried', 'Suhawal Ballia Utter Pradesh', 'deepa.bootcamp@gmail.com', '8545005272', '10TH', 'deepak (3).jpg', '001245', '2015-09-16', '1234', '50', '2015-10-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
