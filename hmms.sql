-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2019 at 11:58 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmms`
--

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` varchar(20) NOT NULL,
  `amount` smallint(6) NOT NULL,
  `stdID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `amount`, `stdID`) VALUES
('dummy3837', 500, 'dummy3'),
('dummy4694', 500, 'dummy4');

-- --------------------------------------------------------

--
-- Table structure for table `messmanager`
--

CREATE TABLE `messmanager` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messmanager`
--

INSERT INTO `messmanager` (`id`, `name`, `contact`) VALUES
('dummy1', 'dummy', 1111000022);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `totalSeat` varchar(10) NOT NULL,
  `availableSeat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `totalSeat`, `availableSeat`) VALUES
('dummy1', 'IDK', '3', 1),
('dummy2', 'IDK', '2', 1),
('dummy3', 'IDK', '3', 3),
('dummy358', 'dummy', '3', 3),
('dummy4', 'IDK', '3', 9);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(191) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `email`, `designation`, `contact`, `address`, `fname`, `dob`, `doj`) VALUES
('dummy1', 'dummy', 'dummy@pop.oop', 'IDK', 1111000022, 'paltan', 'DAD', '2017-07-18', '2019-04-02'),
('dummy2', 'dummy', 'dummy@pop.oop', 'IDK', 1111000022, 'paltan', 'DAD', '2017-07-18', '2019-04-02'),
('dummy3', 'dummy', 'dummy@pop.oop', 'IDK', 1111000022, 'paltan', 'DAD', '2017-07-18', '2019-04-02'),
('dummy4', 'dummy', 'dummy@pop.oop', 'IDK', 1111000022, 'paltan', 'DAD', '2017-07-18', '2019-04-02'),
('saurav982', 'saurav', 'saurav1@gmail.com', 'hod', 9085324602, 'Paltan Bazar', 'xx', '2000-04-01', '2010-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `course` varchar(50) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `email` varchar(191) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `RoomID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `contact`, `department`, `course`, `semester`, `email`, `address`, `dob`, `RoomID`) VALUES
('dummy3', 'zzzz', 1111000022, 'cs', 'mca', '6th', 'dy@er.ol', 'paltan', '2013-10-09', 'dummy1'),
('dummy4', 'xxxx', 1111000022, 'cs', 'mca', '6th', 'dy@er.ol', 'paltan', '2013-10-09', 'dummy2'),
('saurav526', 'saurav', 9085324602, 'Anthropology', 'BSc', 'sem1', 'saurav2@gmail.com', 'Paltan Bazar', '1998-03-01', 'dummy1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stdID` (`stdID`);

--
-- Indexes for table `messmanager`
--
ALTER TABLE `messmanager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `RoomID` (`RoomID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fees`
--
ALTER TABLE `fees`
  ADD CONSTRAINT `fees_ibfk_1` FOREIGN KEY (`stdID`) REFERENCES `student` (`id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`RoomID`) REFERENCES `room` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
