-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2019 at 02:50 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soil2sell`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_product_data`
--

CREATE TABLE `db_product_data` (
  `pd_id` int(5) NOT NULL,
  `pd_uid` int(5) NOT NULL,
  `pd_vigha` varchar(10) NOT NULL,
  `pd_seed_gram` varchar(10) NOT NULL,
  `pd_remak` varchar(50) NOT NULL,
  `pd_status_remark` varchar(50) NOT NULL,
  `pd_tag` int(1) NOT NULL DEFAULT 1,
  `pd_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_product_data`
--

INSERT INTO `db_product_data` (`pd_id`, `pd_uid`, `pd_vigha`, `pd_seed_gram`, `pd_remak`, `pd_status_remark`, `pd_tag`, `pd_status`) VALUES
(11, 4, '25', '65', 'AAA', 'VVV', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_user_group`
--

CREATE TABLE `db_user_group` (
  `ug_id` int(2) NOT NULL,
  `ug_name` varchar(20) NOT NULL,
  `ug_description` varchar(50) NOT NULL,
  `ug_tag` int(1) NOT NULL DEFAULT 1,
  `ug_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_user_group`
--

INSERT INTO `db_user_group` (`ug_id`, `ug_name`, `ug_description`, `ug_tag`, `ug_status`) VALUES
(1, 'admin', 'null', 1, 1),
(2, 'farmer', 'null', 1, 1),
(3, 'buyer', 'null', 1, 1),
(4, 'seller', 'null', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_user_login`
--

CREATE TABLE `db_user_login` (
  `ul_id` int(4) NOT NULL,
  `ul_grpid` int(2) NOT NULL,
  `ul_name` varchar(50) NOT NULL,
  `ul_email` varchar(50) NOT NULL,
  `ul_password` varchar(50) NOT NULL,
  `ul_tag` int(1) NOT NULL DEFAULT 1,
  `ul_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_user_login`
--

INSERT INTO `db_user_login` (`ul_id`, `ul_grpid`, `ul_name`, `ul_email`, `ul_password`, `ul_tag`, `ul_status`) VALUES
(1, 1, 'Admin', 'admin@soil2sell.com', '123456', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_user_registration`
--

CREATE TABLE `db_user_registration` (
  `ur_id` int(5) NOT NULL,
  `ur_grpid` int(2) NOT NULL,
  `ur_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `ur_village` varchar(50) NOT NULL,
  `ur_taluka` varchar(50) NOT NULL,
  `ur_district` varchar(50) NOT NULL,
  `ur_contact` varchar(15) NOT NULL,
  `type_of_chilly` varchar(20) NOT NULL,
  `quntity` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `ur_tag` int(1) NOT NULL DEFAULT 1,
  `ur_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_user_registration`
--

INSERT INTO `db_user_registration` (`ur_id`, `ur_grpid`, `ur_name`, `address`, `ur_village`, `ur_taluka`, `ur_district`, `ur_contact`, `type_of_chilly`, `quntity`, `price`, `ur_tag`, `ur_status`) VALUES
(1, 3, 'DEVANG PARESHBHAI DODIYA', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '0', '250', '60', 123456, 1, 1),
(2, 3, 'DEVANG', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '0', '2', '620', 1234569, 0, 1),
(3, 4, 'NIKHIL DODIYA', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '0', '3', '650', 20, 0, 1),
(4, 2, 'DEVJIBHAI', 'RJK', 'DASS', 'ASS', 'AASA', '7878170717', 'GRADE A', '36', 21, 1, 1),
(5, 2, 'ASDF', 'DSD', '', '', '', '0', '', '', 0, 1, 1),
(6, 4, 'DEVANG DODIYA', 'SHIV SHAKTI COLONY BLOCK NO 61, NAAR SHREE SHREE AYURVEDIC CLINIC', 'RAJK', 'RAJK', 'JUNA', '0', '620', '200', 2147483647, 1, 1),
(7, 4, 'ASD', 'DSASSSSA', 'DASDASD', 'ADASD', 'ASSD', 'GRADE A', '5', '3', 0, 1, 1),
(8, 4, 'HASHMUKHBHAI', 'ASDF', 'SAAS', 'DDA', 'ASSD', '78995', 'GRADE B', '9', 20, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `prouct_grade`
--

CREATE TABLE `prouct_grade` (
  `pr_id` int(2) NOT NULL,
  `pr_description` varchar(10) NOT NULL,
  `pr_tag` int(1) NOT NULL DEFAULT 1,
  `pr_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prouct_grade`
--

INSERT INTO `prouct_grade` (`pr_id`, `pr_description`, `pr_tag`, `pr_status`) VALUES
(1, 'Grade A', 1, 1),
(2, 'Grade B', 1, 1),
(3, 'Grade B', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_product_data`
--
ALTER TABLE `db_product_data`
  ADD PRIMARY KEY (`pd_id`);

--
-- Indexes for table `db_user_group`
--
ALTER TABLE `db_user_group`
  ADD PRIMARY KEY (`ug_id`);

--
-- Indexes for table `db_user_login`
--
ALTER TABLE `db_user_login`
  ADD PRIMARY KEY (`ul_id`);

--
-- Indexes for table `db_user_registration`
--
ALTER TABLE `db_user_registration`
  ADD PRIMARY KEY (`ur_id`);

--
-- Indexes for table `prouct_grade`
--
ALTER TABLE `prouct_grade`
  ADD PRIMARY KEY (`pr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_product_data`
--
ALTER TABLE `db_product_data`
  MODIFY `pd_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `db_user_group`
--
ALTER TABLE `db_user_group`
  MODIFY `ug_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `db_user_login`
--
ALTER TABLE `db_user_login`
  MODIFY `ul_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `db_user_registration`
--
ALTER TABLE `db_user_registration`
  MODIFY `ur_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `prouct_grade`
--
ALTER TABLE `prouct_grade`
  MODIFY `pr_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
