-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2017 at 12:34 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ugc_db_ao`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE IF NOT EXISTS `admin_details` (
  `a_id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ph_no` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `desig` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`a_id`, `name`, `ph_no`, `email`, `u_name`, `password`, `desig`) VALUES
(1, 'Admin', '9000080000', 'admin@ugc.ac.in', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE IF NOT EXISTS `complaint` (
  `c_id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ph_no` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `status` varchar(500) NOT NULL DEFAULT 'Submitted',
  `ad_sta` varchar(500) NOT NULL DEFAULT 'Received'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `d_id` bigint(20) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `log_name` varchar(50) NOT NULL,
  `ph_no` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  `cat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dis_ans`
--

CREATE TABLE IF NOT EXISTS `dis_ans` (
  `a_id` bigint(20) NOT NULL,
  `q_id` bigint(20) NOT NULL,
  `answer` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dis_forum`
--

CREATE TABLE IF NOT EXISTS `dis_forum` (
  `q_no` bigint(20) NOT NULL,
  `question` varchar(500) NOT NULL,
  `name` varchar(50) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` bigint(20) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `f_id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ph_no` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `exp` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE IF NOT EXISTS `query` (
  `q_id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ph_no` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `status` varchar(500) NOT NULL DEFAULT 'Submitted',
  `ad_sta` varchar(500) NOT NULL DEFAULT 'Received',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE IF NOT EXISTS `topic` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(500) NOT NULL,
  `t_desc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ugc_userdetails`
--

CREATE TABLE IF NOT EXISTS `ugc_userdetails` (
  `u_id` bigint(20) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ph_no` varchar(13) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `postcode` varchar(6) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ugc_userdetails`
--

INSERT INTO `ugc_userdetails` (`u_id`, `u_name`, `email`, `ph_no`, `address`, `city`, `country`, `postcode`, `password`) VALUES
(1, 'Name', 'name@example.com', '9000080000', 'Address', 'City', 'Country', '000000', 'name');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `dis_ans`
--
ALTER TABLE `dis_ans`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `dis_forum`
--
ALTER TABLE `dis_forum`
  ADD PRIMARY KEY (`q_no`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `ugc_userdetails`
--
ALTER TABLE `ugc_userdetails`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `a_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `c_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `d_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dis_ans`
--
ALTER TABLE `dis_ans`
  MODIFY `a_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dis_forum`
--
ALTER TABLE `dis_forum`
  MODIFY `q_no` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `q_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ugc_userdetails`
--
ALTER TABLE `ugc_userdetails`
  MODIFY `u_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
