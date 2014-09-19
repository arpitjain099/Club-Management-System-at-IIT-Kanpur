-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2013 at 10:01 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cs315`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `roll_no` varchar(12) NOT NULL,
  `name` varchar(128) NOT NULL,
  `department` varchar(128) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `event_id` int(11) NOT NULL,
  PRIMARY KEY (`roll_no`,`event_id`),
  KEY `event_id` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`roll_no`, `name`, `department`, `email`, `event_id`) VALUES
('10122', 'Ankesh', 'BSBE', 'thakur@iitk.ac.in', 1),
('10145', 'Arpit', 'CSE', 'arpitj@iitk.ac.in', 1),
('10156', 'Evy', 'ECO', 'evy@iitk.ac.in', 2),
('10241', 'Rupali', 'MTH', 'rupali@iitk.ac.in', 1),
('10412', 'Prashant', 'BSBE', 'dude@iitk.ac.in', 3),
('11211', 'Harshad', 'CSE', 'sawhney@iitk.ac.in', 2),
('11311', 'Harshit', 'EE', 'harsh@iitk.ac.in', 1);

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE IF NOT EXISTS `clubs` (
  `club_name` varchar(30) NOT NULL,
  `budget` int(11) NOT NULL,
  `website` varchar(30) DEFAULT NULL,
  `location` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`club_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`club_name`, `budget`, `website`, `location`) VALUES
('AERO', 10000, 'aeroclub.com', 'H1'),
('BCLUB ', 10000, 'blcub.com', 'H2'),
('BRAIN', 10000, 'brain.com', 'H3'),
('ELEC', 10000, 'elec.com', 'H4'),
('HAM', 10000, 'ham.com', 'H5'),
('PROG', 10000, 'prog.com', 'H6'),
('ROBO', 15000, 'robo.com', 'H7');

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE IF NOT EXISTS `coordinator` (
  `rollno` varchar(12) NOT NULL,
  `name` varchar(128) NOT NULL,
  `clubname` varchar(30) NOT NULL,
  `index` varchar(4) NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`rollno`, `name`, `clubname`, `index`) VALUES
('10412', 'Prashant', 'PROG', '1'),
('10122', 'Ankesh', 'ROBO', '2');

-- --------------------------------------------------------

--
-- Table structure for table `eventassist`
--

CREATE TABLE IF NOT EXISTS `eventassist` (
  `rollno` int(12) NOT NULL,
  `name` int(128) NOT NULL,
  `clubname` int(30) NOT NULL,
  `email` int(20) NOT NULL,
  `index` int(4) NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventassist`
--

INSERT INTO `eventassist` (`rollno`, `name`, `clubname`, `email`, `index`) VALUES
(11311, 0, 0, 0, 1),
(10156, 0, 0, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `eventcoordinator`
--

CREATE TABLE IF NOT EXISTS `eventcoordinator` (
  `rollno` varchar(12) NOT NULL,
  `name` varchar(128) NOT NULL,
  `event_id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `index` varchar(4) NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventcoordinator`
--

INSERT INTO `eventcoordinator` (`rollno`, `name`, `event_id`, `email`, `index`) VALUES
('Y9033', 'Rishant', 1, 'rishant@iitk.ac.in', '1'),
('1010111', 'Akhil', 2, 'akhil@iitk.ac.in', '2'),
('Y8032', 'HK', 3, 'hk@iitk.ac.in', '3');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_type` varchar(10) NOT NULL,
  `event_date` date DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `org_club` varchar(20) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_type`, `event_date`, `name`, `event_id`, `org_club`) VALUES
('worksho', '2013-04-02', 'MS Workshop', 1, 'PClub'),
('Lecture', '0000-00-00', 'Yahoo !', 2, 'PCLUB'),
('Workshop', '0000-00-00', 'Google', 3, 'PCLUB'),
('Lecture', '0000-00-00', 'iIndya', 4, 'ROBO');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('', ''),
('arpit', 'jain'),
('cs315', 'sql123'),
('cs335', 'sql123'),
('jain', 'jainarpit'),
('singhp', 'cs315'),
('sntsecy', 'rootpass');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `name` varchar(128) NOT NULL,
  `roll_no` varchar(12) NOT NULL,
  `department` varchar(128) NOT NULL,
  `room_no` varchar(4) DEFAULT NULL,
  `hall` varchar(4) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`roll_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`name`, `roll_no`, `department`, `room_no`, `hall`, `email`) VALUES
('Akhil', '1010111', 'CSE', 'C303', 'H10', 'akhil@iitk.ac.in'),
('Ankesh', '10122', 'BSBE', 'C302', 'H10', 'thakur@iitk.ac.in'),
('Arpit', '10144', 'MTH', 'C306', 'H10', 'arpitr@iitk.ac.in'),
('Arpit', '10145', 'CSE', 'C307', 'H10', 'arpitj@iitk.ac.in'),
('Evy', '10156', 'ECO', 'B312', 'GH1', 'evy@iitk.ac.in'),
('Rupali', '10241', 'MTH', 'C211', 'GH2', 'rupali@iitk.ac.in'),
('Prashant', '10412', 'BSBE', 'C306', 'H10', 'dude@iitk.ac.in'),
('Harshad', '11211', 'CSE', 'C204', 'H10', 'sawhney@iitk.ac.in'),
('Harshit', '11311', 'EE', 'C122', 'H4', 'harsh@iitk.ac.in'),
('HK', 'Y8032', 'CSE', 'C202', 'H9', 'hk@iitk.ac.in'),
('Rishant', 'Y9033', 'ECO', 'C305', 'H1', 'rishant@iitk.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `secretary`
--

CREATE TABLE IF NOT EXISTS `secretary` (
  `rollno` varchar(12) NOT NULL,
  `name` varchar(128) NOT NULL,
  `clubname` varchar(30) NOT NULL,
  `index` varchar(4) NOT NULL,
  `room_no` varchar(4) NOT NULL,
  `hall` varchar(4) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `secretary`
--

INSERT INTO `secretary` (`rollno`, `name`, `clubname`, `index`, `room_no`, `hall`, `email`) VALUES
('10145', 'Arpit', 'BCLUB', '1', 'C307', 'H10', 'arpitj@iitk.ac.in'),
('11311', 'Harshit', 'PROG', '2', 'C122', 'H4', 'harsh@iitk.ac.in'),
('10156', 'Evy', 'AERO', '3', 'B312', 'GH1', 'evy@iitk.ac.in'),
('10241', 'Rupali', 'BCLUB', '4', 'C211', 'GH2', 'rupali@iitk.ac.in'),
('11211', 'Harshad', 'ROBO', '5', 'C204', 'H10', 'sawhney@iitk.ac.in');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`roll_no`) REFERENCES `person` (`roll_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
