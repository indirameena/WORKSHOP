-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2017 at 02:02 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workshop_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_detail`
--

CREATE TABLE `student_detail` (
  `id` bigint(20) NOT NULL,
  `student_name` varchar(500) NOT NULL,
  `enrollment_number` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `workshop_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_detail`
--

INSERT INTO `student_detail` (`id`, `student_name`, `enrollment_number`, `branch`, `year`, `semester`, `workshop_id`) VALUES
(1, 'Kapil', 'er456', 'ECE', 2017, 2, 1),
(2, 'Madhur', 'madMNIT234', 'CS', 2016, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `workshop_detail`
--

CREATE TABLE `workshop_detail` (
  `id` bigint(20) NOT NULL,
  `title` varchar(500) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `technology` varchar(1000) NOT NULL,
  `ws_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshop_detail`
--

INSERT INTO `workshop_detail` (`id`, `title`, `start_date`, `end_date`, `start_time`, `end_time`, `technology`, `ws_description`) VALUES
(1, 'Node.js Workshop Updated', '2017-09-25', '2017-09-28', '09:00:00', '18:00:00', 'Node.js', ' Demo workshop  '),
(2, 'Robotics', '2017-09-29', '2017-10-04', '06:00:00', '18:00:00', 'Robotics', ' Robotics'),
(3, 'Android ', '2017-09-25', '2017-09-27', '09:00:00', '18:30:00', 'Android ', ' Android '),
(4, 'IOS Updated', '2017-09-26', '2017-09-28', '11:00:00', '19:00:00', 'IOS', '  IOS '),
(5, 'IOT Workshop', '2017-10-04', '2017-10-06', '09:00:00', '17:00:00', 'IOT Workshop', ' IOT Workshop'),
(6, 'IOT Workshop', '2017-10-04', '2017-10-06', '09:00:00', '17:00:00', 'IOT Workshop', ' IOT Workshop');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_detail`
--
ALTER TABLE `student_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshop_detail`
--
ALTER TABLE `workshop_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_detail`
--
ALTER TABLE `student_detail`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `workshop_detail`
--
ALTER TABLE `workshop_detail`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
