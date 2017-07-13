-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 06, 2017 at 06:21 PM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `athlete`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `album_id` int(11) NOT NULL AUTO_INCREMENT,
  `album_name` varchar(40) NOT NULL,
  `album_description` varchar(150) NOT NULL,
  `date_posted` varchar(20) NOT NULL,
  PRIMARY KEY (`album_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`album_id`, `album_name`, `album_description`, `date_posted`) VALUES
(1, 'Test', 'test5', '2016-12-10'),
(2, 'CHMSC SCUAA', 'SCUAA 2017', '2017-02-21'),
(3, 'Funday', 'IS funday', '2017-07-04 20:38:33'),
(4, 'test', 'test\r\n', '2017-07-04 20:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `album_content`
--

CREATE TABLE IF NOT EXISTS `album_content` (
  `album_content_id` int(11) NOT NULL AUTO_INCREMENT,
  `album_id` varchar(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  PRIMARY KEY (`album_content_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `album_content`
--

INSERT INTO `album_content` (`album_content_id`, `album_id`, `file`) VALUES
(1, '', 'lxde-icon.png'),
(2, '', 'lakawon_bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `athlete`
--

CREATE TABLE IF NOT EXISTS `athlete` (
  `athlete_id` int(11) NOT NULL AUTO_INCREMENT,
  `sports_id` varchar(100) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `sy` varchar(15) NOT NULL,
  `member_id` int(11) NOT NULL,
  PRIMARY KEY (`athlete_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `athlete`
--

INSERT INTO `athlete` (`athlete_id`, `sports_id`, `sem`, `sy`, `member_id`) VALUES
(11, '3', '2nd', '2017-2018', 2),
(13, '3', '2nd', '2017-2018', 4),
(24, '3', '1st', '2017-2018', 2),
(25, '3', '1st', '2017-2018', 5);

-- --------------------------------------------------------

--
-- Table structure for table `award`
--

CREATE TABLE IF NOT EXISTS `award` (
  `award_id` int(11) NOT NULL AUTO_INCREMENT,
  `athlete_id` int(11) NOT NULL,
  `award` varchar(200) NOT NULL,
  PRIMARY KEY (`award_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `award`
--

INSERT INTO `award` (`award_id`, `athlete_id`, `award`) VALUES
(1, 24, 'First Place'),
(2, 24, 'Champion');

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE IF NOT EXISTS `borrow` (
  `borrow_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  `borrow_qty` int(11) NOT NULL,
  `date_borrowed` datetime NOT NULL,
  `date_returned` datetime NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`borrow_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`borrow_id`, `member_id`, `equipment_id`, `borrow_qty`, `date_borrowed`, `date_returned`, `status`) VALUES
(13, 2, 1, 1, '2017-07-01 22:58:14', '2017-07-01 23:14:00', 1),
(14, 2, 1, 1, '2017-07-01 23:11:51', '0000-00-00 00:00:00', 0),
(15, 2, 1, 1, '2017-07-01 23:12:26', '0000-00-00 00:00:00', 0),
(16, 1, 2, 1, '2017-07-02 17:27:36', '0000-00-00 00:00:00', 0),
(17, 1, 2, 1, '2017-07-02 17:27:41', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(30) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Memorandum'),
(2, 'Resolution');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(10) NOT NULL,
  `course_title` varchar(100) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course`, `course_title`) VALUES
(2, 'BSIS', 'Bachelor of Science in Information Systems'),
(3, 'BSIT', 'Bachelor of Science in Industrial Technology'),
(4, 'BEED', 'Bachelor of Science in Elementary Education'),
(5, 'BSED', 'Bachelor of Science in Secondary Education'),
(6, 'BSHRM', 'Bachelor of Science in Hotel and Restaurant Management'),
(7, 'BSCE', 'Bachelor of Science in Civil Engineering'),
(8, 'NA', 'Not Applicable\r\n'),
(9, 'Sample1', '1Sample');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `document_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(30) NOT NULL,
  `receiver` varchar(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `category` varchar(30) NOT NULL,
  `file` varchar(100) NOT NULL,
  `date_uploaded` datetime NOT NULL,
  `type` varchar(30) NOT NULL,
  PRIMARY KEY (`document_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`document_id`, `sender`, `receiver`, `title`, `description`, `category`, `file`, `date_uploaded`, `type`) VALUES
(4, 'Sender', 'Receiver', 'Title', 'Desc', 'Resolution', 'assessment_latest.sql', '2017-07-02 16:37:12', 'Outgoing'),
(5, 'gfgf', 'gfgf', 'gfgf', 'gfgf', 'Resolution', 'index.php', '2017-07-02 17:21:23', 'Incoming'),
(6, 'dada', 'daa', 'dad', 'dada', 'Memorandum', 'index.php', '2017-07-02 17:22:39', 'Incoming');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE IF NOT EXISTS `equipment` (
  `equipment_id` int(11) NOT NULL AUTO_INCREMENT,
  `equipment_name` varchar(100) NOT NULL,
  `equipment_desc` varchar(1000) NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`equipment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`equipment_id`, `equipment_name`, `equipment_desc`, `qty`) VALUES
(1, 'Volleyball', 'Volleyball ', 7),
(2, 'Volleyball Net', 'Volleyball Net Black', 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_last` varchar(30) NOT NULL,
  `member_first` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `ys` varchar(10) NOT NULL,
  `member_type` varchar(10) NOT NULL,
  `course` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_last`, `member_first`, `gender`, `ys`, `member_type`, `course`, `address`) VALUES
(1, 'Redovlo', 'Cristine', '', '', 'Faculty', 'NA', ''),
(2, 'Manieja', 'Ananiel', '', '', 'Student', 'BSIS', ''),
(4, 'fsfs', 'fsfs', 'Male', '1B', 'Student', 'BSCE', 'ddsds'),
(5, 'sasa', 'sasa', 'Male', '1s', 'Student', 'BEED', 'dsds');

-- --------------------------------------------------------

--
-- Table structure for table `scholars`
--

CREATE TABLE IF NOT EXISTS `scholars` (
  `scholar_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `birthday` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `course` varchar(10) NOT NULL,
  `year_sec` varchar(5) NOT NULL,
  `campus_id` int(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `contact_person` varchar(30) NOT NULL,
  `contact_person_number` varchar(20) NOT NULL,
  `scholarship_id` int(12) NOT NULL,
  `file_profile` varchar(100) NOT NULL,
  PRIMARY KEY (`scholar_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `scholars`
--

INSERT INTO `scholars` (`scholar_id`, `firstname`, `middlename`, `lastname`, `birthday`, `gender`, `course`, `year_sec`, `campus_id`, `address`, `contact_number`, `contact_person`, `contact_person_number`, `scholarship_id`, `file_profile`) VALUES
(1, 'Riza', 'Fe.', 'Ador', '08/11/1991', 'Female', 'BSCE', '1B', 1, 'Silay City', '2147483647', 'Maria Ador', '', 1, '3209_e8a74f908baca5d814cd7cc8dbb2ea5a.jpg'),
(2, 'Rhea ', 'Marie', 'Queene', '09/11/2011', 'Female', 'BSED', '1D', 2, 'Talisay City', '2147483647', 'Riza Ador', '', 2, '2732_img-thing.jpg'),
(3, 'Michael', 'Angelo', 'Casipe', '01/11/1993', 'Male', 'BSCE', '1B', 1, 'Bacolod City', '2147483647', 'Vergelio Manaay', '09111111111111', 4, '6278_bg.jpg'),
(4, 'Cesar', 'ryan', 'Solis', '09/11/1991', 'Female', 'BSIT', '1D', 4, 'Binalbagan', '2147483647', 'Menesis Cayetano', '', 3, '7290_12c55bb4ff7dd9c42bc737f1ad7e0d8b.jpg'),
(5, 'Kevin', 'Dectatoria', 'Grajo', '01/01/1991', 'Male', 'BSCE', '1B', 2, 'Silay City', '2147483647', 'Arleen Grajo', '', 3, '9004_5aa1b134c19521849f643d4103081f31.jpg'),
(6, 'Aira ', 'Marie', 'Rojo', '01/08/1991', 'Female', 'BSIS', '1B', 1, 'Silay City', '0914147198471', 'Arleen Grajo', '0911181171161', 2, '9394_00000687.jpg'),
(7, 'Maira', 'J,', 'Jaresco', '11/09/1991', 'Male', 'BSED', '1A', 3, 'Sarabia', '2147483647', 'Alcia marie', '01947148418', 2, '6684_c3907764985fde2b65c16da0b5f1ef82.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sem`
--

CREATE TABLE IF NOT EXISTS `sem` (
  `sem_id` int(11) NOT NULL AUTO_INCREMENT,
  `semester` varchar(20) NOT NULL,
  `current_sem` varchar(3) NOT NULL,
  PRIMARY KEY (`sem_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sem`
--

INSERT INTO `sem` (`sem_id`, `semester`, `current_sem`) VALUES
(1, '1st', 'Yes'),
(2, '2nd', 'No'),
(3, 'summer', 'No'),
(4, 'sasa', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `settings_id` int(11) NOT NULL AUTO_INCREMENT,
  `sem` varchar(15) NOT NULL,
  `sy` varchar(30) NOT NULL,
  PRIMARY KEY (`settings_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `sem`, `sy`) VALUES
(1, '1st', '2017-2018');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE IF NOT EXISTS `sports` (
  `sports_id` int(11) NOT NULL AUTO_INCREMENT,
  `sports_name` varchar(100) NOT NULL,
  `sports_type` varchar(100) NOT NULL,
  `sports_gender` varchar(100) NOT NULL,
  `member_id` int(11) NOT NULL,
  PRIMARY KEY (`sports_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`sports_id`, `sports_name`, `sports_type`, `sports_gender`, `member_id`) VALUES
(3, 'Swimming', 'Single', 'Men', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sy`
--

CREATE TABLE IF NOT EXISTS `sy` (
  `sy_id` int(11) NOT NULL AUTO_INCREMENT,
  `sy` varchar(10) NOT NULL,
  PRIMARY KEY (`sy_id`),
  UNIQUE KEY `sy` (`sy`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sy`
--

INSERT INTO `sy` (`sy_id`, `sy`) VALUES
(1, '2017-2018');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE IF NOT EXISTS `user_table` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `username`, `password`, `name`, `status`) VALUES
(2, 'admin', 'password', 'Kaye Merida', ''),
(3, 'admin', 'admin', 'jez pez', ''),
(4, 'selena', 'pass', 'selena gomez', ''),
(5, 'ken', '123', 'Kenneth Aboy', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
