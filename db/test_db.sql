-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 02:55 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(4) NOT NULL DEFAULT 0,
  `choice` text COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `choice`) VALUES
(57, 1, 0, 'Internet of Technology'),
(58, 1, 0, 'Intranet of Things'),
(59, 1, 1, 'Internet of Things'),
(60, 1, 0, 'Information of Things'),
(61, 1, 0, 'integrate'),
(62, 2, 0, 'sensor networks'),
(63, 2, 0, 'cloud computing'),
(64, 2, 0, 'big data analytics'),
(65, 2, 1, 'All of Above'),
(66, 2, 0, 'None of these'),
(67, 3, 0, 'Wide Sensor Network'),
(68, 3, 1, 'Wireless Sensor Network'),
(69, 3, 0, 'Wired Sensor Network'),
(70, 3, 0, 'None of these'),
(71, 3, 0, 'Physical Network'),
(72, 4, 0, 'weather monitoring'),
(73, 4, 0, 'indoor air quality monitoring'),
(74, 4, 0, 'surveillance'),
(75, 4, 1, 'All of Above'),
(76, 4, 0, 'None of these'),
(77, 5, 0, 'varying, volume and variety'),
(78, 5, 1, 'volume, variety and velocity'),
(79, 5, 0, 'venue, variety and velocity'),
(80, 5, 0, 'volume, venue and variety'),
(81, 5, 0, 'volume, venue '),
(82, 6, 0, 'Male HDMI'),
(83, 6, 0, 'Female HDMI'),
(84, 6, 1, 'Male HDMI and Adapter'),
(85, 6, 0, 'Female HDMI and Adapter'),
(86, 6, 0, 'HDMI'),
(87, 7, 0, 'Long Term Errors'),
(88, 7, 1, 'Long Term Evolution'),
(89, 7, 0, 'Lengthy Terminal Estimation'),
(90, 7, 0, 'Long Term Estimates'),
(91, 7, 0, 'Touch sensor'),
(92, 8, 0, 'People'),
(93, 8, 0, 'Process'),
(94, 8, 1, 'Security'),
(95, 8, 0, 'Things'),
(96, 8, 0, 'Skynet'),
(97, 9, 0, 'Smart Watch'),
(98, 9, 1, 'ATM'),
(99, 9, 0, 'Radio'),
(100, 9, 0, 'Video Game'),
(101, 9, 0, 'InterCloud'),
(102, 10, 1, 'Level-1'),
(103, 10, 0, 'Level-2'),
(104, 10, 0, 'Level-3'),
(105, 10, 0, 'Level-4'),
(106, 10, 0, 'Level-5');

-- --------------------------------------------------------

--
-- Table structure for table `choices2`
--

CREATE TABLE `choices2` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(4) NOT NULL,
  `choice` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `choices2`
--

INSERT INTO `choices2` (`id`, `question_number`, `is_correct`, `choice`) VALUES
(1, 1, 0, 'Wireless Mobile Comminucation'),
(2, 1, 1, 'Wireless Mobile Network'),
(3, 1, 0, 'Wired Mobile Network'),
(4, 1, 0, 'Wire mobile Network'),
(5, 1, 0, 'sdsd');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `question` text COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `question`) VALUES
(1, 'IoT stands for'),
(2, 'IoT Enabling Technology'),
(3, 'WSN Stands for'),
(4, 'WSNs used in IoT systems for'),
(5, '3Vs stands for'),
(6, 'What do we use to connect TV to RPi?'),
(7, 'What does LTE stand for'),
(8, 'Which one is not an element of IoT'),
(9, 'What is the name of the first recognized IoT device'),
(10, 'Which IoT level is used for Home Automation');

-- --------------------------------------------------------

--
-- Table structure for table `questions2`
--

CREATE TABLE `questions2` (
  `question_number` int(11) NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions2`
--

INSERT INTO `questions2` (`question_number`, `question`) VALUES
(1, 'What is WMN?');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `subject` varchar(200) NOT NULL,
  `startquiz` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`subject`, `startquiz`) VALUES
('MAD', 'quiz.php'),
('WMN', 'quiz2.php');

-- --------------------------------------------------------

--
-- Table structure for table `updatequiz`
--

CREATE TABLE `updatequiz` (
  `subject` varchar(200) NOT NULL,
  `upquiz` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `updatequiz`
--

INSERT INTO `updatequiz` (`subject`, `upquiz`) VALUES
('MAD', 'add.php'),
('WMN', 'add2.php');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(3, 'soham10', 'soham10', 'Soham');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices2`
--
ALTER TABLE `choices2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions2`
--
ALTER TABLE `questions2`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choices2`
--
ALTER TABLE `choices2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `questions2`
--
ALTER TABLE `questions2`
  MODIFY `question_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
