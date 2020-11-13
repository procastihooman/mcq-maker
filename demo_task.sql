-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2020 at 05:00 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `create_test`
--

CREATE TABLE `create_test` (
  `test_id` int(11) NOT NULL,
  `year` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `section` text NOT NULL,
  `test_description` varchar(500) NOT NULL,
  `start_time` varchar(100) NOT NULL,
  `from_date` varchar(100) NOT NULL,
  `end_time` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `create_test`
--

INSERT INTO `create_test` (`test_id`, `year`, `semester`, `section`, `test_description`, `start_time`, `from_date`, `end_time`, `end_date`) VALUES
(25, '2nd', '1st', 'Electronics and Telecommunication', 'Mock Test', '21:55', '2020-11-13', '22:55', '2020-11-13'),
(26, '1st', '2nd', 'Information Technology', 'IA', '20:54', '2020-11-13', '22:54', '2020-11-13'),
(27, '3rd', '1st', 'Information Technology', 'Test', '22:03', '2020-11-13', '12:03', '2020-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `mcq`
--

CREATE TABLE `mcq` (
  `test_id` int(11) NOT NULL,
  `qt_id` int(11) NOT NULL,
  `question` varchar(1500) NOT NULL,
  `opt_1` varchar(500) NOT NULL,
  `opt_2` varchar(500) NOT NULL,
  `opt_3` varchar(500) DEFAULT NULL,
  `opt_4` varchar(500) DEFAULT NULL,
  `correct_opt` varchar(500) NOT NULL,
  `explanation` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mcq`
--

INSERT INTO `mcq` (`test_id`, `qt_id`, `question`, `opt_1`, `opt_2`, `opt_3`, `opt_4`, `correct_opt`, `explanation`) VALUES
(25, 20, 'What is PCB?', 'Printed Circuit Board', 'Plastic Cobalt Board', 'Penny Copper Board', 'None of the above', '1st Option', 'Because it is '),
(25, 22, 'What is electricity?', 'Flow of charges', 'Flow of current', 'Flow of waves', 'None of the above', '1st Option', 'Someone said it '),
(26, 23, 'What is IT?', 'Information Technology', 'Industry Technology', 'Information Tech', 'None of the above', '1st Option', 'Cause it is');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `create_test`
--
ALTER TABLE `create_test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `mcq`
--
ALTER TABLE `mcq`
  ADD PRIMARY KEY (`qt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `create_test`
--
ALTER TABLE `create_test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `mcq`
--
ALTER TABLE `mcq`
  MODIFY `qt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
