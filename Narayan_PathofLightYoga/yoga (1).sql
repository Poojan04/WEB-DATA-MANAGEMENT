-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2017 at 10:15 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yoga`
--
CREATE DATABASE IF NOT EXISTS `yoga` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `yoga`;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `classid` int(11) NOT NULL,
  `classname` varchar(50) NOT NULL,
  `classdescription` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`classid`, `classname`, `classdescription`) VALUES
(1, 'Gentle Hatha Yoga', 'Intended for beginners and anyone wishing a grounded foundation in the practice of yoga, this 60 minute class of poses and slow movement focuses on asana (proper alignment and posture), pranayama (breath work), and guided meditation to foster your mind and body connection.'),
(2, 'Vinyasa Yoga', 'Although designed for intermediate to advanced students, beginners are welcome to sample this 60 minute class that focusess on breath-synchronized movement you will inhale and exhale as you flow energetically through yoga poses.'),
(3, 'Restorative Yoga', 'This 90 minute class features very slow movement and long poses that are supported by a chair or wall. This calming restorative experience is suitable for students of any level of experience. This practice can be a perfect way to help rehabilitate an injury.'),
(4, 'Kripalu', 'Kripalu is a three-part practice that teaches you to get to know, accept, and learn from your body. It starts with figuring out how your body works in different poses, then moves toward postures held for an extended time and meditation. It then taps deep into your being to find spontaneous flow in asanas, letting your body be the teacher.');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `clientid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`clientid`, `name`, `address`, `phone`, `email`, `password`) VALUES
(33, 'duia', 'hd', '45737688', 'duia@gmail.com', 'Kh#456ufkjbsf'),
(34, 'jhvjh', 'hv', '7798', 'jg@gmail.com', 'K67#ghfytdtytug'),
(35, 'hgf', '402 S cooper St\r\n215 apt', '6097212793', 'pooja.narayan@mavs.uta.edu', '85K7(hxgytdF'),
(36, 'jsa', 'hffs', '356', 'sjbg@gm.com', 'Khf5$gbfjsdbfiusw3'),
(37, 'yf', 't45', '526', 'yd@gm.com', 'F792%heihbJ'),
(38, 'gh', 'hd 67', '534648', 'gh@gmail.com', 'Hfdwkj6%jhef'),
(39, 'sd', 'gs', '6367', 'sf@gmail.com', 'Gurb765#bhjef 346'),
(40, 'sd', 'gs', '6367', 'sf@gmail.com', 'Gurb765#bhjef 346'),
(41, 'sd', 'gs', '6367', 'sf@gmail.com', 'Gurb765#bhjef 346'),
(42, 'Pooja Narayan', '402 S cooper St\r\n215 apt', '6097212793', 'pooja.narayan@mavs.uta.edu', 'Jdhgd567$gkhhm'),
(43, 'hjf', 'j', '8754', 'hf@gmail.com', 'N74chg$hnjhf'),
(44, 'ag', 'ygs8', '7885', 'ag@gn.com', 'd9ebaf1f82fc00220e67620c69999ef3'),
(45, 'abcc', 'u4gu3', '8624', 'abcd@gmai.com', '05219a0331fad383339de518230cf93b');

-- --------------------------------------------------------

--
-- Table structure for table `client_schedule`
--

CREATE TABLE `client_schedule` (
  `clientid` int(11) NOT NULL,
  `timeid` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `daysid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_schedule`
--

INSERT INTO `client_schedule` (`clientid`, `timeid`, `classid`, `daysid`) VALUES
(43, 1, 1, 1),
(44, 1, 1, 1),
(45, 7, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comments` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `comments`) VALUES
('a', 'abc@gmail.com', 'hey'),
('', '', ''),
('h', 'h', ''),
('h', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('hv', 'hv@gmail.com', 'hjgv');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `daysid` int(11) NOT NULL,
  `daysname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`daysid`, `daysname`) VALUES
(1, 'Monday-Friday'),
(2, 'Saturday & Sunday');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `timeid` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `daysid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`timeid`, `classid`, `daysid`) VALUES
(1, 1, 1),
(2, 2, 1),
(5, 3, 1),
(2, 1, 2),
(3, 1, 2),
(4, 2, 2),
(5, 3, 2),
(7, 2, 2),
(6, 1, 1),
(4, 4, 1),
(6, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `timeid` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`timeid`, `time`) VALUES
(1, '9:00 a.m.'),
(2, '10:30 a.m.'),
(3, '1:30 p.m.'),
(4, '3.00 p.m.'),
(5, '5:30 p.m.'),
(6, '7:00 p.m.'),
(7, 'Noon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`classid`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`clientid`);

--
-- Indexes for table `client_schedule`
--
ALTER TABLE `client_schedule`
  ADD KEY `clifk` (`clientid`),
  ADD KEY `timefk` (`timeid`),
  ADD KEY `classfk` (`classid`),
  ADD KEY `daysfk` (`daysid`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`daysid`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD KEY `timeidfk` (`timeid`),
  ADD KEY `classidfk` (`classid`),
  ADD KEY `daysidfk` (`daysid`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`timeid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `classid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `clientid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `daysid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `timeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `client_schedule`
--
ALTER TABLE `client_schedule`
  ADD CONSTRAINT `client_schedule_ibfk_1` FOREIGN KEY (`clientid`) REFERENCES `client` (`clientid`),
  ADD CONSTRAINT `client_schedule_ibfk_2` FOREIGN KEY (`classid`) REFERENCES `class` (`classid`),
  ADD CONSTRAINT `client_schedule_ibfk_3` FOREIGN KEY (`daysid`) REFERENCES `days` (`daysid`),
  ADD CONSTRAINT `client_schedule_ibfk_4` FOREIGN KEY (`timeid`) REFERENCES `time` (`timeid`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`timeid`) REFERENCES `time` (`timeid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_ibfk_2` FOREIGN KEY (`classid`) REFERENCES `class` (`classid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_ibfk_3` FOREIGN KEY (`daysid`) REFERENCES `days` (`daysid`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
