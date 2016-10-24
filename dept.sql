-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2016 at 09:01 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dept`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`) VALUES
(1, 'masum', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `co_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_code` text NOT NULL,
  `name` text NOT NULL,
  `type` text NOT NULL,
  `year` text NOT NULL,
  `credit` int(11) NOT NULL,
  PRIMARY KEY (`co_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`co_id`, `course_code`, `name`, `type`, `year`, `credit`) VALUES
(1, 'ENG1111', 'Technical English', 'Theory', '1-1', 2),
(2, 'MATH1111', 'Algebra, Trigonometry and Vector', 'Theory', '1-1', 3),
(3, 'CHEM1111', 'Physical and Inorganic Chemistry', 'Theory', '1-1', 3),
(4, 'CSE1111', 'Computer Fundamentals', 'Theory', '1-1', 3),
(5, 'CSE1112', 'Computer Maintenance and Engineering Drawings Lab', 'Lab', '1-1', 1),
(6, 'APEE1131', 'Electrical Circuit and Electronics', 'Theory', '1-1', 3),
(7, 'APEE1132', 'Electrical Circuit and Electronics Lab', 'Lab', '1-1', 1),
(8, 'CSE1121', 'Computer Programming with C', 'Theory', '1-1', 3),
(9, 'CSE1122', 'Computer Programming with C Lab', 'Lab', '1-1', 2),
(10, 'ECON1211', 'Economics', 'Theory', '1-2', 2),
(11, 'STAT1211', 'Statistics for Engineers', 'Theory', '1-2', 2),
(12, 'MATH1211', 'Differential and Integral Calculus', 'Theory', '1-2', 3),
(13, 'PHY1221', 'Applied Electricity and Magnetism', 'Theory', '1-2', 3),
(14, 'CSE1211', 'Introduction to Digital Electronics', 'Theory', '1-2', 3),
(15, 'CSE1212', 'Introduction to Digital Electronics  Lab', 'Lab', '1-2', 1),
(16, 'CSE1221', 'Object Oriented Programming with C++', 'Theory', '1-2', 3),
(17, 'CSE1222', 'Object Oriented Programming with C++ Lab', 'Lab', '1-2', 2),
(18, 'ACCO2111', 'Industrial Management and Accountancy', 'Theory', '2-1', 2),
(19, 'STAT2111', 'Theory of Statistics', 'Theory', '2-1', 2),
(20, 'MATH2111', 'Matrices and Differential Equations', 'Theory', '2-1', 3),
(21, 'MATH2131', 'Discrete Mathematics', 'Theory', '2-1', 3),
(22, 'MATH2132', 'Discrete Mathematics Lab', 'Lab', '2-1', 1),
(23, 'CSE2111', 'Digital System Design', 'Theory', '2-1', 3),
(24, 'CSE2112', 'Digital System Design Lab', 'Lab', '2-1', 1),
(25, 'CSE2121', 'Object Oriented Programming with Java', 'Theory', '2-1', 3),
(26, 'CSE2122	', 'Object Oriented Programming with Java Lab', 'Lab', '2-1', 1),
(27, 'CSE2132	', 'Software Development Lab I', 'Lab', '2-1', 1),
(28, 'LAW2211	', 'Cyber and Intellectual Property Law', 'Theory', '2-2', 2),
(29, 'MATH2231	', 'Numerical Methods', 'Theory', '2-2', 2),
(30, 'MATH2232	', 'Numerical Methods Lab', 'Lab', '2-2', 1),
(31, 'MATH2241	', 'Linear Algebra', 'Theory', '2-2', 3),
(32, 'CSE2211 	', 'Data Structure', 'Theory', '2-2', 3),
(33, 'CSE2212 	', 'Data Structure Lab', 'Lab', '2-2', 1),
(34, 'CSE2221	', 'Design and Analysis of Algorithms', 'Theory', '2-2', 3),
(35, 'CSE2222	', 'Design and Analysis of Algorithms Lab', 'Lab', '2-2', 1),
(36, 'CSE2231 	', 'Software Engineering', 'Theory', '2-2', 3),
(37, 'CSE2232	', 'Software Engineering Lab', 'Lab', '2-2', 1),
(38, 'CSE3111', 'Computer Architecture and Organization', 'Theory', '3-1', 3),
(39, 'CSE3112', 'Computer Architecture and Organization Lab', 'Lab', '3-1', 1),
(40, 'CSE3121', 'Database Management Systems', 'Theory', '3-1', 3),
(41, 'CSE3122', 'Database Management Systems Lab', 'Lab', '3-1', 1),
(44, 'CSE3131', 'Digital Signal Processing', 'Theory', '3-1', 3),
(45, 'CSE3132', 'Digital Signal Processing Lab', 'Lab', '3-1', 1),
(46, 'CSE3141', 'Automata Theory and Compiler Design ', 'Theory', '3-1', 3),
(47, 'CSE3142', 'Automata Theory and Compiler Design Lab', 'Lab', '3-1', 1),
(48, 'CSE3151', 'Computer Networks', 'Theory', '3-1', 3),
(49, 'CSE3152', 'Computer Networks Lab', 'Lab', '3-1', 1),
(50, 'CSE3162', 'Software Development Lab II', 'Lab', '3-1', 1),
(51, 'CSE3211', 'System Analysis and Design', 'Theory', '3-2', 3),
(52, 'CSE3221', 'Computer Graphics', 'Theory', '3-2', 3),
(53, 'CSE3222', 'Computer Graphics Lab', 'Lab', '3-2', 1),
(54, 'CSE3231', 'Microprocessor and Assembly Language', 'Theory', '3-2', 3),
(55, 'CSE3241', 'Operating System and System Programming', 'Theory', '3-2', 3),
(56, 'CSE3242', 'Operating System and System Programming Lab', 'Lab', '3-2', 1),
(57, 'ICE3261', 'Communication Engineering', 'Theory', '3-2', 3),
(58, 'ICE3262', 'Communication Engineering Lab', 'Lab', '3-2', 1),
(59, 'CSE4111', 'Parallel Processing and Distributed System', 'Theory', '4-1', 3),
(60, 'CSE4112', 'Parallel Processing and Distributed System Lab', 'Lab', '4-1', 1),
(61, 'CSE4121', 'Digital Image Processing', 'Theory', '4-1', 3),
(62, 'CSE4122', 'Digital Image Processing Lab', 'Lab', '4-1', 1),
(63, 'CSE4131', 'Computer Simulation and Modeling', 'Theory', '4-1', 3),
(64, 'CSE4132', 'Computer Simulation and Modeling Lab', 'Lab', '4-1', 1),
(65, 'CSE4141', 'Computer Peripherals and Interfacing', 'Theory', '4-1', 3),
(66, 'CSE4142', 'Computer Peripherals and Interfacing Lab', 'Lab', '4-1', 1),
(67, 'CSE4161', 'Management Information System', 'Theory', '4-1', 3),
(68, 'CSE4162', 'Management Information System Lab', 'Lab', '4-1', 1),
(69, 'CSE4211', 'Artificial Intelligence', 'Theory', '4-2', 3),
(70, 'CSE4212', 'Artificial Intelligence Lab', 'Lab', '4-2', 1),
(71, 'CSE4221', 'E-Commerce ', 'Theory', '4-2', 3),
(72, 'CSE4222', 'E-Commerce Lab', 'Lab', '4-2', 1),
(73, 'CSE4231', 'Cryptography and Network Security', 'Theory', '4-2', 3),
(74, 'CSE4232', 'Cryptography and Network Security Lab', 'Lab', '4-2', 1),
(75, 'CSE4261', 'Distributed Database Management System ', 'Theory', '4-2', 3),
(76, 'CSE4262', 'Distributed Database Management System Lab', 'Lab', '4-2', 1),
(77, 'CSE3232', 'Microprocessor and Assembly Language Lab', 'Lab', '3-2', 1),
(78, 'CSE4272', 'Project', 'Lab', '4-2', 2),
(79, 'CSE4280', 'Board viva-voce', 'Theory', '4-2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE IF NOT EXISTS `hall` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hall_name` varchar(255) NOT NULL,
  `provost_name` varchar(50) NOT NULL,
  `capability` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`id`, `hall_name`, `provost_name`, `capability`) VALUES
(1, 'Sher-e-Bangla Fazlul Haque', 'Dr. M. Sahed Zaman', '400'),
(2, 'Shah Makhdum', 'Prof. M. Moyejul Islam', '550'),
(3, 'Nawab Abdul Latif', 'Dr. M. Aslam Hossain', '530'),
(4, 'Syed Amir Ali', 'Dr. Golam Mortuza', '550'),
(5, 'Shahid Shamsuzzoha', 'Dr. M. Belal Hossain', '600'),
(6, 'Shahid Habibur Rahman', 'Dr. M. Fazlul Haque', '750'),
(7, 'Motihar', 'Prof. Afrouzzaman Khan Chowdhury', '180'),
(8, 'Madar Baksh', 'Prof. M. Abdur Rahim Khan', '550'),
(9, 'Shahid Sohrawardi', 'Prof. M. Abdul Latif', '600'),
(10, 'Shahid Ziaur Rahman', 'Dr. A.N.M. Zahangir Kabir', '620'),
(11, 'Bangabandhu Sheikh Mujibur Rahman', 'Mohd. Nurul Islam', '500'),
(12, 'Monnujan', 'Dr. Irin Banu Luci', '700'),
(13, 'Begum Rokeya', 'Dr. Nazma Afroz	', '750'),
(14, 'Tapashi Rabeya', 'Dr. Hosne Ara Jesmin', '720'),
(15, 'Begum Khaleda Zia', 'Dr. Salma Banu', '800'),
(16, 'Rahamatunnesa', 'Prof. Dr. Bilkis Begum', '780');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `message`, `time`) VALUES
(11, 'Diploma in Computer Science and Application', 'Diploma in Computer Science and Application, Bangladesh Open University is going to start at CSE, RU.', '2016-08-16 23:56:12'),
(12, 'Career Fair 2016', 'Career Fair 2016 job test and distribution will be held in Rajshahi University, Sep 22. 2016', '2016-08-16 23:59:46');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `session` varchar(50) NOT NULL,
  `year` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `roll` int(15) NOT NULL,
  `individual_result` text NOT NULL,
  `total_result` double NOT NULL,
  `grade` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `name`, `session`, `year`, `semester`, `roll`, `individual_result`, `total_result`, `grade`) VALUES
(1, 'MD.Fazle Rabby', '2015-2016', '1st', 'Odd', 1610476110, 'Eng1111-3.50,Math1111-3.75,Chem1111-2.75,CSE1111-3.75,CSE1112-3.25,CSE1121-3.25,CSE1122-3.5,APEE1131-3.00,APEE1132-3.5', 3.5, 'A-'),
(2, 'Rafiul Islam', '2015-2016', '1st', 'Odd', 1610476142, 'Eng1111-3.00,Math1111-3.25,Chem1111-3.75,CSE1111-3.25,CSE1112-3.25,CSE1121-3.25,CSE1122-3.5,APEE1131-3.20,APEE1132-3.5', 3.43, 'B+'),
(3, 'Younus Hassan', '2015-2016', '1st', 'Odd', 1610176121, 'Eng1111-3.25,Math1111-3.25,Chem1111-3.50,CSE1111-3.25,CSE1112-3.25,CSE1121-3.75,CSE1122-3.5,APEE1131-3.50,APEE1132-3.25', 3.35, 'B+'),
(4, 'Maruful Alom', '2015-2016', '1st', 'Odd', 1610976127, 'Eng1111-3.75,Math1111-3.75,Chem1111-3.5,CSE1111-3.25,CSE1112-3.25,CSE1121-3.25,CSE1122-3.5,APEE1131-3.70,APEE1132-3.75', 3.68, 'A-'),
(5, 'Golam Moula', '2015-2016', '1st', 'Odd', 1611076136, 'Eng1111-3.50,Math1111-3.75,Chem1111-2.75,CSE1111-4.00,CSE1112-3.75,CSE1121-3.75,CSE1122-3.5,APEE1131-3.75,APEE1132-3.5', 3.76, 'A'),
(6, 'Morshed Ahmed', '2015-2016', '1st', 'Odd', 1610276122, 'Eng1111-3.50,Math1111-3.75,Chem1111-2.75,CSE1111-3.75,CSE1112-3.75,CSE1121-3.25,CSE1122-3.5,APEE1131-3.00,APEE1132-3.5', 3.52, 'A-'),
(7, 'Munem Uddin', '2015-2016', '1st', 'Odd', 1611076126, 'Eng1111-3.50,Math1111-3.25,Chem1111-2.75,CSE1111-3.75,CSE1112-3.25,CSE1121-3.25,CSE1122-3.25,APEE1131-3.00,APEE1132-3.75', 3.51, 'A-'),
(8, 'MD.Anis', '2015-2016', '1st', 'Even', 1610676125, 'Econ1211-3.50,Math1211-3.75,Phy1211-2.75,Stat1211-3.5,CSE1211-3.75,CSE1212-3.25,CSE1221-3.25,CSE1222-3.5', 3.23, 'B'),
(9, 'Al-Amin', '2015-2016', '1st', 'Even', 1610676134, 'Econ1211-3.25,Math1211-3.75,Phy1211-3.75,Stat1211-3.5,CSE1211-7.75,CSE1212-3.25,CSE1221-3.25,CSE1222-3.75', 3.39, 'B+'),
(10, 'Nakul Deb Nath', '2015-2016', '1st', 'Even', 1610276128, 'Econ1211-3.5,Math1211-3.25,Phy1211-3.75,Stat1211-3.25,CSE1211-2.75,CSE1212-3.25,CSE1221-3.25,CSE1222-2.75', 3.13, 'B'),
(11, 'Abdul Alim', '2014-2015', '2nd', 'Odd', 15045428, 'ACCO2111-3.75,MATH2111-3.75,STAT2111-3.5,MATH2131-3.25,MATH2132-3.5,CSE2111-3.25,CSE2112-3.25,CSE2121-3.25,CSE2122-3.5', 3.4, 'B+'),
(12, 'Awal Kabir', '2014-2015', '2nd', 'Odd', 15085401, 'ACCO2111-3.75,MATH2111-3.75,STAT2111-3.5,MATH2131-3.25,MATH2132-3.5,CSE2111-3.25,CSE2112-3.25,CSE2121-3.25,CSE2122-3.5', 3.53, 'A-'),
(13, 'Sheikh Sadi', '2014-2015', '2nd', 'Odd', 15075412, 'ACCO2111-2.75,MATH2111-3.25,STAT2111-3.25,MATH2131-3.25,MATH2132-2.5,CSE2111-3.25,CSE2112-3.25,CSE2121-3.25,CSE2122-3.5', 3.08, 'B'),
(14, 'Ziaul Haque', '2014-2015', '2nd', 'Even', 15075432, 'LAW2211-3.75,MATH2231-3.75,MATH2232-3.25,MATH2241-3.5,CSE2211-3.25,CSE2212-3.25,CSE2221-3.25,CSE2222-3.50,CSE2231-3.25,CSE2232-2.75', 3.34, 'B+'),
(15, 'Josim Uddin', '2014-2015', '2nd', 'Even', 15045406, 'LAW2211-3.25,MATH2231-3.75,MATH2232-3.25,MATH2241-3.5,CSE2211-3.50,CSE2212-3.25,CSE2221-3.25,CSE2222-2.50,CSE2231-3.25,CSE2232-2.75', 3.13, 'B'),
(16, 'Abdus Samad', '2014-2015', '2nd', 'Even', 15025418, 'LAW2211-3.25,MATH2231-3.75,MATH2232-3.25,MATH2241-3.25,CSE2211-3.25,CSE2212-3.75,CSE2221-3.25,CSE2222-3.50,CSE2231-3.25,CSE2232-2.75', 3.37, 'B+'),
(17, 'Abdullah Al Shiam', '2012-2013', '3rd', 'Odd', 12065401, 'CSE3111-3.75,CSE3112-3.75,CSE3121-3.25,CSE3122-3.5,CSE3131-3.25,CSE3132-3.25,CSE4141-3.75,CSE4142-3.50,CSE4151-3.25,CSE41522-3.75', 3.57, 'A-'),
(18, 'Ruhul Paul', '2012-2013', '3rd', 'Odd', 13105413, 'CSE3111-3.25,CSE3112-3.75,CSE3121-3.25,CSE3122-3.5,CSE3131-3.25,CSE3132-3.25,CSE3141-3.50,CSE3142-3.00,CSE3151-3.25,CSE3152-3.25', 3.31, 'B+'),
(19, 'Fazle Rabbi', '2012-2013', '3rd', 'Odd', 13015407, 'CSE3111-3.75,CSE3112-3.75,CSE3121-3.25,CSE3122-3.5,CSE3131-3.25,CSE3132-3.25,CSE3141-3.25,CSE3142-3.50,CSE3151-3.25,CSE3152-3.25', 3.41, 'B+'),
(20, 'Sohanur Rahman ', '2012-2013', '3rd', 'Even', 13035449, 'CSE3211-3.75,CSE3212-3.75,CSE3221-3.25,CSE3222-3.5,CSE3231-3.25,CSE3232-3.25,CSE3241-3.25,CSE3242-3.50,CSE3251-3.25,CSE3252-3.25', 3.5, 'A-'),
(21, 'Najmul Islam', '2012-2013', '3rd', 'Even', 13105440, 'CSE3211-3.75,CSE3212-3.75,CSE3221-3.75,CSE3222-3.5,CSE3231-3.75,CSE3232-3.25,CSE3241-3.25,CSE3242-3.50,CSE3251-4.00,CSE3252-4.00', 3.82, 'A'),
(22, 'Maruf Hossain', '2012-2013', '3rd', 'Even', 13095439, 'CSE3211-3.75,CSE3212-3.75,CSE3221-3.25,CSE3222-3.5,CSE3231-3.75,CSE3232-3.25,CSE3241-3.75,CSE3242-3.50,CSE3251-3.25,CSE3252-3.25', 3.72, 'A-'),
(23, 'Zakia Zinat Choudhury', '2011-2012', '4th', 'Odd', 12205401, 'CSE4111-4.00,CSE4112-3.75,CSE4121-4.00,CSE3122-4.00,CSE4131-3.75,CSE4132-4.00,CSE4141-4.00,CSE4142-4.00,CSE4151-4.00,CSE4152-4.00', 3.94, 'A'),
(24, 'Muktadir Ahmed', '2011-2012', '4th', 'Odd', 12045402, 'CSE4111-3.25,CSE4112-3.75,CSE4121-3.00,CSE3122-3.50,CSE4131-3.25,CSE4132-3.50,CSE4141-4.00,CSE4142-3.75,CSE4151-3.00,CSE4152-3.50', 3.5, 'B+'),
(25, 'Rafiqul Islam', '2011-2012', '4th', 'Odd', 12045404, 'CSE4111-3.25,CSE4112-3.75,CSE4121-3.00,CSE3122-4.00,CSE4131-3.25,CSE4132-3.50,CSE4141-3.50,CSE4142-3.50,CSE4151-3.25,CSE4152-3.25', 3.39, 'B+'),
(26, 'Tahmina Yeasmin', '2011-2012', '4th', 'Odd', 12215405, 'CSE4111-3.75,CSE4112-3.75,CSE4121-4.00,CSE3122-4.00,CSE4131-3.75,CSE4132-4.00,CSE4141-3.50,CSE4142-3.50,CSE4151-3.50,CSE4152-3.75', 3.72, 'A-');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_no` int(11) NOT NULL,
  `room_name` text NOT NULL,
  `room_type` text NOT NULL,
  `room_capacity` int(11) NOT NULL,
  PRIMARY KEY (`room_id`),
  KEY `room_no` (`room_no`),
  KEY `room_id` (`room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_no`, `room_name`, `room_type`, `room_capacity`) VALUES
(1, 120, 'Programming Lab', 'Lab', 50),
(2, 121, 'Microprocessor Lab', 'Lab', 50),
(3, 122, 'Teachers Room', 'Teachers Room', 10),
(4, 217, 'Software Engineering Lab', 'Lab', 50),
(5, 218, 'Incubetor', 'Lab', 50),
(6, 219, 'Database Management System Lab', 'Lab', 50),
(7, 220, 'Digital Logic and Electronics Lab', 'Lab', 50),
(8, 221, 'Network Lab', 'Lab', 50),
(9, 222, 'Communication Lab', 'Lab', 50),
(10, 223, 'Algorithm Lab', 'Lab', 50);

-- --------------------------------------------------------

--
-- Table structure for table `routine`
--

CREATE TABLE IF NOT EXISTS `routine` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `week` text NOT NULL,
  `year` varchar(20) NOT NULL,
  `session` varchar(20) NOT NULL,
  `type` text NOT NULL,
  `course_code` int(11) NOT NULL,
  `time` text NOT NULL,
  `teacher_id` text NOT NULL,
  `room_no` int(11) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `routine`
--

INSERT INTO `routine` (`r_id`, `week`, `year`, `session`, `type`, `course_code`, `time`, `teacher_id`, `room_no`) VALUES
(1, 'Saturday', '1-1', '2015-2016', 'Theory', 8, '8:15-9:15', '5', 10),
(2, 'Saturday', '1-1', '2015-2016', 'Theory', 6, '9:20-10:20', '7', 10),
(3, 'Saturday', '1-1', '2015-2016', 'Lab', 7, '10:25-12:30', '7', 9),
(4, 'Saturday', '2-2', '2013-2014', 'Theory', 34, '9:20-10:20', '20', 7),
(5, 'Saturday', '2-2', '2013-2014', 'Theory', 32, '10:25-11:25', '22', 7),
(6, 'Saturday', '2-2', '2013-2014', 'Lab', 33, '11:30-1:35', '22', 7),
(7, 'Saturday', '3-2', '2012-2013', 'Theory', 54, '9:20-10:20', '12', 4),
(8, 'Saturday', '3-2', '2012-2013', 'Theory', 57, '10:25-11:25', '21', 4),
(9, 'Saturday', '3-2', '2012-2013', 'Lab', 53, '11:30-1:35', '2', 4),
(10, 'Saturday', '4-2', '2011-2012', 'Theory', 69, '8:15-9:15', '23', 1),
(11, 'Saturday', '4-2', '2011-2012', 'Theory', 71, '9:20-10:20', '24', 1),
(12, 'Saturday', '4-2', '2011-2012', 'Lab', 70, '10:25-12:30', '21', 1),
(13, 'Sunday', '1-1', '2015-2016', 'Theory', 4, '9:20-10:20', '12', 10),
(14, 'Sunday', '1-1', '2015-2016', 'Theory', 1, '10:25-11:25', '2', 10),
(15, 'Sunday', '1-1', '2015-2016', 'Lab', 5, '11:30-1:35', '2', 9),
(16, 'Sunday', '2-2', '2013-2014', 'Theory', 34, '8:15-9:15', '20', 7),
(17, 'Sunday', '2-2', '2013-2014', 'Theory', 32, '10:25-11:25', '18', 7),
(18, 'Sunday', '2-2', '2013-2014', 'Lab', 37, '11:30-1:35', '4', 7),
(19, 'Sunday', '3-2', '2012-2013', 'Theory', 55, '9:20-10:20', '18', 4),
(20, 'Sunday', '3-2', '2012-2013', 'Lab', 77, '10:25-12:30', '12', 4),
(21, 'Sunday', '3-2', '2012-2013', 'Theory', 57, '12:35-1:35', '21', 4),
(22, 'Sunday', '4-2', '2011-2012', 'Theory', 73, '8:15-9:15', '15', 1),
(23, 'Sunday', '4-2', '2011-2012', 'Lab', 72, '9:20-11:25', '22', 1),
(24, 'Sunday', '4-2', '2011-2012', 'Theory', 75, '11:30-12:30', '3', 1),
(25, 'Monday', '1-1', '2015-2016', 'Theory', 6, '10:25-11:25', '7', 7),
(26, 'Monday', '1-1', '2015-2016', 'Theory', 1, '11:30-12:30', '2', 10),
(27, 'Monday', '2-2', '2013-2014', 'Theory', 32, '9:20-10:20', '4', 6),
(28, 'Monday', '2-2', '2013-2014', 'Theory', 36, '10:25-11:25', '1', 6),
(29, 'Monday', '2-2', '2013-2014', 'Theory', 29, '8:15-9:15', '22', 7),
(30, 'Monday', '3-2', '2012-2013', 'Theory', 52, '10:25-11:25', '2', 4),
(31, 'Monday', '3-2', '2012-2013', 'Theory', 57, '9:20-10:20', '21', 4),
(32, 'Monday', '3-2', '2012-2013', 'Lab', 56, '11:30-1:35', '11', 4),
(33, 'Monday', '4-2', '2011-2012', 'Theory', 71, '9:20-10:20', '20', 1),
(34, 'Monday', '4-2', '2011-2012', 'Theory', 69, '10:25-11:25', '22', 1),
(35, 'Tuesday', '1-1', '2015-2016', 'Theory', 4, '9:20-10:20', '12', 10),
(36, 'Tuesday', '1-1', '2015-2016', 'Theory', 8, '10:25-11:25', '5', 10),
(37, 'Tuesday', '1-1', '2015-2016', 'Lab', 9, '11:30-1:35', '5', 7),
(38, 'Tuesday', '2-2', '2013-2014', 'Theory', 28, '8:15-9:15', '20', 7),
(39, 'Tuesday', '2-2', '2013-2014', 'Theory', 29, '9:20-10:20', '4', 6),
(40, 'Tuesday', '2-2', '2013-2014', 'Lab', 35, '11:30-1:35', '15', 7),
(41, 'Tuesday', '3-2', '2012-2013', 'Theory', 54, '9:20-10:20', '12', 4),
(42, 'Tuesday', '3-2', '2012-2013', 'Theory', 51, '10:25-11:25', '10', 4),
(43, 'Tuesday', '3-2', '2012-2013', 'Lab', 58, '11:30-1:35', '7', 4),
(44, 'Tuesday', '4-2', '2011-2012', 'Theory', 73, '9:20-10:20', '15', 1),
(45, 'Tuesday', '4-2', '2011-2012', 'Theory', 75, '10:25-11:25', '3', 1),
(46, 'Tuesday', '4-2', '2011-2012', 'Lab', 74, '11:30-1:35', '1', 1),
(47, 'Wednesday', '1-1', '2015-2016', 'Theory', 6, '10:25-11:25', '7', 10),
(48, 'Wednesday', '1-1', '2015-2016', 'Theory', 1, '11:30-12:30', '2', 10),
(49, 'Wednesday', '2-2', '2013-2014', 'Theory', 32, '8:15-9:15', '22', 7),
(50, 'Wednesday', '2-2', '2013-2014', 'Lab', 30, '9:20-11:25', '1', 7),
(51, 'Wednesday', '3-2', '2012-2013', 'Theory', 57, '8:15-9:15', '21', 4),
(52, 'Wednesday', '3-2', '2012-2013', 'Theory', 54, '9:20-10:20', '12', 4),
(53, 'Wednesday', '3-2', '2012-2013', 'Theory', 52, '10:25-11:25', '2', 4),
(54, 'Wednesday', '3-2', '2012-2013', 'Theory', 55, '11:30-12:30', '18', 4),
(55, 'Wednesday', '3-2', '2012-2013', 'Theory', 51, '12:35-1:35', '10', 4),
(56, 'Wednesday', '4-2', '2011-2012', 'Theory', 69, '8:15-9:20', '20', 3),
(57, 'Wednesday', '4-2', '2011-2012', 'Lab', 76, '9:20-11:25', '3', 1),
(58, 'Thursday', '1-1', '2015-2016', 'Theory', 4, '9:20-10:20', '12', 10),
(59, 'Thursday', '1-1', '2015-2016', 'Theory', 8, '10:25-11:25', '5', 10),
(60, 'Thursday', '1-1', '2015-2016', 'Lab', 9, '11:30-1:35', '5', 7),
(61, 'Thursday', '2-2', '2013-2014', 'Theory', 29, '10:25-11:25', '1', 6),
(62, 'Thursday', '2-2', '2013-2014', 'Theory', 36, '11:30-12:30', '4', 6),
(63, 'Thursday', '2-2', '2013-2014', 'Theory', 34, '12:30-1:35', '20', 6),
(64, 'Thursday', '3-2', '2012-2013', 'Theory', 51, '9:20-10:20', '10', 4),
(65, 'Thursday', '3-2', '2012-2013', 'Theory', 55, '10:25-11:25', '18', 4),
(66, 'Thursday', '3-2', '2012-2013', 'Theory', 52, '11:30-12:30', '2', 4),
(67, 'Thursday', '4-2', '2011-2012', 'Theory', 71, '8:15-9:15', '24', 1),
(68, 'Thursday', '4-2', '2011-2012', 'Theory', 73, '9:20-10:20', '15', 1),
(69, 'Thursday', '4-2', '2011-2012', 'Theory', 75, '10:25-11:25', '3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `roll` varchar(20) NOT NULL,
  `session` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `hall_id` int(10) DEFAULT NULL,
  `gpa` double DEFAULT NULL,
  PRIMARY KEY (`s_id`,`roll`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `name`, `roll`, `session`, `year`, `hall_id`, `gpa`) VALUES
(1, 'MD.fazle Rabbi', '1610476110', '2015-2016', 'First', 4, 0),
(2, 'Mir Rafiul Islam', '1610476142', '2015-2016', 'First', 4, 0),
(3, 'Younus Hassan', '1610176121', '2015-2016', 'First', 1, 0),
(4, 'Maruful Islam', '1610976127', '2015-2016', 'First', 9, 0),
(5, 'MD.Golam Maula', '1611076136', '2015-2016', 'First', 10, 0),
(6, 'Asif Morshed Nabid', '1610276122', '2015-2016', 'First', 2, 0),
(7, 'MD.Anis', '1610676125', '2015-2016', 'First', 6, 0),
(8, 'MD.Mehedy', '1610476108', '2015-2016', 'First', 4, 0),
(9, 'Nakul Deb Nath', '1610276128', '2015-2016', 'First', 2, 0),
(10, 'Abdullah Al Noman', '1610876120', '2015-2016', 'First', 8, 0),
(11, 'MD.Munem Shahriar', '1611076126', '2015-2016', 'First', 10, 0),
(12, 'MD.Khairul Islam', '1610676134', '2015-2016', 'First', 6, 0),
(14, 'Nasif Ahmed', '1610776129', '2015-2016', 'hgjhgj', 7, 0),
(15, 'Ruhul Amin', '1610676102', '2015-2016', 'First', 6, 0),
(16, 'MD.Al Shahriar', '1611076145', '2015-2016', 'First', 10, 0),
(17, 'Mehedi Hasan', '1610176148', '2015-2016', 'First', 1, 0),
(18, 'Abdullah Al Shiam', '13065401', '2012-2013', 'Third', 6, 3.14),
(19, 'Abdullah Al Hares', '13115432', '2012-2013', 'Third', 7, 3),
(20, 'A S M Ashraful Haque', '13025451', '2012-2013', 'Third', 11, 3.05),
(21, 'Rahul Paul', '13105403', '2012-2013', 'Third', 2, 2.75),
(22, 'Fazle Rabbi', '13015407', '2012-2013', 'Third', 10, 2.8),
(23, 'MD.Abdullah Al Marufh', '13095455', '2012-2013', 'Third', 1, 3.41),
(24, 'Sohanur Rahman', '13035449', '2012-2013', 'Third', 9, 3.06),
(25, 'Md.Nazmul Mollah', '13105440', '2012-2013', 'Third', 3, 3.6),
(26, 'Mir Mosraki', '13045410', '2012-2013', 'Third', 10, 2.9),
(27, 'Easir Arafat', '13115408', '2012-2013', 'Third', 4, 3.39),
(28, 'Khondokar Monuruzzamaman', '13065435', '2012-2013', 'Third', 11, 2.84),
(29, 'MD.Zulfikal', '1305548', '2012-2013', 'Third', 6, 3.61),
(30, 'Sourav Paul', '13045404', '2012-2013', 'Third', 5, 3.18),
(31, 'Sohel Sorowar', '13055417', '2012-2013', 'Third', 5, 3.05),
(32, 'MD.Maruf Hossain', '13095439', '2012-2013', 'Third', 5, 3.74),
(33, 'S.M Kamruzzaman', '13055443', '2012-2013', 'Third', 2, 3.6),
(34, 'Shamima Akter', '13205445', '2012-2013', 'Third', 12, 3.42),
(35, 'Mst.Rehena Nasrin', '13225442', '2012-2013', 'Third', 14, 3.42),
(36, 'Mahfuja Binte Rouf', '13215421', '2012-2013', 'Third', 13, 2.9),
(37, 'Hebba Mohmmed Amin', '13215430', '2012-2013', 'Third', 13, 3.01),
(38, 'Zakia Zinat choudhury', '12205401', '2011-2012', 'Fourth', 12, 3.95),
(39, 'Muktadir Ahmed', '12045402', '2011-2012', 'Fourth', 4, 3.5),
(40, 'MD.Rafiqul Islam', '12045404', '2011-2012', 'Fourth', 4, 3.2),
(41, 'Tahmina Yeasmin Lima', '12225405', '2011-2012', 'Fourth', 14, 3.75),
(42, 'Selim Reza', '12085406', '2011-2012', 'Fourth', 8, 3.1),
(43, 'Masuma Sultana Keya', '12215407', '2011-2012', 'Fourth', 13, 3.5),
(44, 'Mokhlesur rahman', '12105408', '2011-2012', 'Fourth', 10, 3.1),
(45, 'Sabrina Sharmin Onu', '12245409', '2011-2012', 'Fourth', 16, 3.8),
(46, 'Shakil Akhter', '12085412', '2011-2012', 'Fourth', 8, 3.5),
(47, 'Sabrina Akter Teuly', '12235413', '2011-2012', 'Fourth', 15, 3.85),
(48, 'MD.Shahabuddin', '12095414', '2011-2012', 'Fourth', 9, 3.1),
(49, 'Nayem khan Shuvo', '12115415', '2011-2012', 'Fourth', 11, 3.75),
(50, 'MD.Zayed Hassan', '12045416', '2011-2012', 'Fourth', 4, 3),
(51, 'Imran Hossain Joy', '12105417', '2011-2012', 'Fourth', 7, 3.48),
(52, 'MD.Sahedur Rahman', '12075418', '2011-2012', 'Fourth', 7, 3),
(53, 'Azmol H. Polash', '12045420', '2011-2012', 'Fourth', 4, 3.2),
(54, 'Jahid Mahmud', '12035426', '2011-2012', 'Fourth', 3, 3.6),
(55, 'Arif Rahman', '12025429', '2011-2012', 'Fourth', 2, 3.4),
(56, 'MD.Sium Rana', '12035430', '2011-2012', 'Fourth', 3, 3.35),
(57, 'MD.Aminul Islam', '12035432', '2011-2012', 'Fourth', 3, 3.35),
(58, 'Khairul Hassan Shuvo', '12015434', '2011-2012', 'Fourth', 1, 3.5),
(59, 'S.M. Olive Hassan', '12115435', '2011-2012', 'Fourth', 11, 3.1),
(60, 'fgfdd', 'fggw', 'gwrfre', 'rgrwef', 0, 0),
(61, 'Josim', '16075412', '2015-2016', 'first', 0, 3.2),
(62, 'Josim', '16075412', '2015-2016', 'first', 0, 3.2),
(63, 'Rafiqul Islam', '1610476324', 'first', '2015-16', 0, 3.2),
(64, 'Rafiqul Islam', '130154072', '2012-2013', 'third', 11, 3.4),
(65, 'Rafiqul Islam', '130154072', '2012-2013', 'third', 11, 3.4);

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE IF NOT EXISTS `student_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Present_address` varchar(255) NOT NULL,
  `permanent_address` varchar(255) NOT NULL,
  `fathers_name` varchar(255) NOT NULL,
  `mothers_name` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `ssc_gpa` double NOT NULL,
  `hsc_gpa` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `Present_address`, `permanent_address`, `fathers_name`, `mothers_name`, `mobile`, `ssc_gpa`, `hsc_gpa`) VALUES
(1, 'Rajshahi University', 'Chapapi Nawabgonj', 'abdus Samad', 'Setara Begum', '01746368635', 5, 5),
(2, 'Rajshahi University', 'Rangpur', 'Md. Josim Uddin', 'Nargis Begum', '01745638663', 4.94, 4.9),
(3, 'Rjshahi University', 'Sirajgonj', 'Abul Kashem', 'Jannatul Ferdous', '01923768987', 5, 5),
(4, 'Rajshahi University', 'Dhaka', 'Md.Jabed', 'Momtaz Shuva', '01832559823', 5, 5),
(5, 'Rajshahi University', 'Tangail', 'Akram Ali', 'Zerina Begum', '01765556091', 5, 4.8),
(6, 'Rajshahi University', 'Natore', 'Abdus Sattar', 'Shamima', '01756489386', 4.7, 5),
(7, 'Rajshahi University', 'Gopalgonj', 'Josim Uddin', 'Fatema Begum', '01832457834', 5, 4.9),
(8, 'Rajshahi University', 'Rajshahi', 'Zoynal Abedin', 'Jahanara begum', '01923479753', 5, 4.6),
(9, 'Rajshahi University', 'Barisal', 'Abdul Kuddus', 'Rehena Begum', '01923479754', 5, 5),
(10, 'Rajshahi University', 'Khulna', 'Md.Mostofa', 'Suraiya Begum ', '01743479765', 5, 5),
(11, 'Rajshahi University', 'Jamalpur', 'Sujon Ali', 'Suchona', '01746366834', 4.88, 5),
(12, 'Rajshahi University', 'Narail', 'Jahid Mahmud', 'Keya Khatun', '01756985673', 5, 4.75),
(13, 'Rajshahi University', 'Bogra', 'Rafiqul Islam', 'Priya Akhter', '01846735609', 5, 4.5),
(14, 'Rajshahi University', 'Dinajpur', 'Aminul Islam', 'Sumaiya Begum', '01675489654', 5, 5),
(15, 'Rajshahi University', 'Joypurhat', 'Nazmul Haque', 'Mahmuda', '01746365695', 5, 5),
(16, 'Rajshahi University', 'Nilphamari', 'Abdus Shobhan', 'Zerina Begum', '01923479796', 5, 4.85),
(17, 'Rajshahi University', 'Kishoregonj', 'Motiur Rahman', 'Suchona Suchi', '01686368635', 5, 4.9),
(18, 'Rajshahi University', 'Gazipur', 'Samir Uddin', 'Zamira Begum', '01926479712', 4.94, 5),
(19, 'Rajshahi University', 'Shibgonj', 'Selim Rahman', 'Ferdoushi Rahman', '01679547635', 5, 5),
(20, 'Rajshahi University', 'Chapai Nawabgonj', 'Vasan Ali', 'Shamima Rumi', '01773372713', 5, 5),
(21, 'Rajshahi University', 'Bagerhat', 'Abdul Karim ', 'Nasrin', '01786493763', 5, 4.9),
(22, 'Rajshahi Uniiversity', 'Cumilla', 'Sahjahan ', 'Shirin', '0174665637', 5, 5),
(23, 'Rajshahi University', 'Feni', 'Sumon Rahman', 'Sumi Rahman', '01732985680', 5, 5),
(24, 'Rajshahi University', 'Chittagonj', 'Moshiur Rahman', 'moumita Rahman', '01746368673', 4.94, 5),
(25, 'Rajshahi University', 'Sherpur', 'Anamul Haque', 'Zubaida begum', '01746368605', 5, 5),
(26, 'Rajshahi University', 'joypurhat', 'somir Uddin', 'Ayesha Katun', '01746363476', 5, 4.8),
(27, 'Rajshahi University', 'Rajshahi', 'Josim Uddin', 'Tamanna Yeasmin', '01923479768', 5, 5),
(28, 'Rajshahi University', 'natore', 'Arif Uddin', 'Jesika Begum', '01746366768', 5, 5),
(29, 'Rajshahi University', 'Jamalpur', 'Zahid Hassan', 'Tania Khatun', '01754765780', 5, 4.8),
(30, 'Rajshahi University', 'Dinajpur', 'Sarwar Jahan', 'Zannatul Khatun', '0162347535', 5, 5),
(31, 'Rajshahi University', 'Rajshahi', 'Polash Reza', 'Ruma Khatun', '01823479753', 5, 4.7),
(32, 'Rajshahi University', 'Sunamgonj', 'MOminur Rahman', 'Ayesha Siddika', '01688083693', 5, 5),
(33, 'Rajshahi University', 'Gaibandha', 'Parvez Ranman', 'Nasrin Rahman', '01674588232', 4.88, 5),
(34, 'Rajshahi University', 'Sylhet', 'Zafor Uddin', 'Nasima Khatun', '01688083644', 5, 5),
(35, 'Rajshahi University', 'Kustia', 'Somrat Ali', 'Sarmin Khatun', '01923477734', 5, 4.8),
(36, 'Rajshahi University', 'Chapai Nawabgonj', 'Ziaur Rahman', 'Rasheda Khatun', '01923479746', 5, 5),
(37, 'Rajshahi University', 'natore', 'Motiur Rahman', 'MOstary Begum', '01543564783', 5, 5),
(38, 'Rajshahi University', 'Bagerhat', 'Josim Uddin\r\n', 'Fatema Begum', '01923479682', 5, 4.8),
(39, 'Rajshahi University', 'Chapai Nawabgonj', 'Kajol Ahmed', 'Mst.Chameli Begum', '01722976886', 5, 5),
(40, 'Rajshahi University', 'Dhaka', 'Anik Ahmed', 'Shamima Rumi', '01746368635', 5, 4.6),
(41, 'Rajshahi University', 'Sylhet', 'Zakir Raihan ', 'Tania Khatun', '01688083693', 5, 4.8),
(42, 'Rajshahi UNiversity', 'Rajshahi', 'Abdul Latif', 'Morium Begum', '0168876904', 5, 5),
(43, 'Rajshahi UNiversity', 'Bogra', 'Mehede Hassan', 'Parvin Begum', '01923479753', 5, 5),
(44, 'Rajshahi UNiversity', 'Madaripur', 'Md.Yousuf Ali', 'Jesika Begum', '01746368665', 5, 4.6),
(45, 'Rajshahi UNiversity', 'Kishoregonj', 'Zubayer Ahmed', 'Sabina Yeasmin', '0155876904', 5, 5),
(46, 'Rajshahi UNiversity', 'Madaripur', 'Sumon Reza', 'Salma Khatun', '01746368658', 5, 4.9),
(47, 'Rajshahi UNiversity', 'Chuadanga', 'Abu Zafor', 'Selima Begum', '01576368637', 5, 5),
(48, 'Rajshahi UNiversity', 'Meherpur', 'JOsim uddin ', 'Kanij Fatema', '01764937487', 5, 4.8),
(49, 'Rajshahi UNiversity', 'Gopalgonj', 'Mojibur Rahman', 'Ayesha Siddika', '01557939693', 5, 5),
(50, 'Rajshahi UNiversity', 'kustia', 'Moniruzzaman', 'Konika Rahman', '01746368357', 5, 5),
(51, 'Rajshahi UNiversity', 'Khulna', 'Abdus Sattar', 'Tanjila Begum', '0168876956', 5, 5),
(52, 'Rajshahi UNiversity', 'Chapai Nawabgonj', 'mominur Rahman', 'Sejuti Rahman', '01688083652', 5, 5),
(53, 'Rajshahi UNiversity', 'Magura', 'Abdur Rahman', 'Ayesha Siddika', '01923479746', 5, 5),
(54, 'Rajshahi UNiversity', 'Jessore', 'Ashraf Uddin', 'Sumaiya Rahman', '01556497659', 5, 5),
(55, 'Rajshahi UNiversity', 'Rajshahi', 'Moshiur Rahman', 'Nasima Rahman', '01688083693', 5, 5),
(56, 'Rajshahi UNiversity', 'Madaripur', 'Nazmul Islam', 'Zannatul Ferdous', '01746368689', 5, 5),
(57, 'Rajshahi UNiversity', 'Sirajgonj', 'Abdul Zabbar', 'Fatema Begum', '01923479760', 5, 5),
(58, 'Rajshahi UNiversity', 'Narayongonj', 'Motiur Rahman', 'Merina begum', '01688083674', 5, 5),
(59, 'Rajshahi UNiversity', 'Sherpur', 'Rakib Uddin', 'Nasrimn Akhter', '01688083698', 5, 5),
(60, 'Rajshahi UNiversity', 'Rajshahi', 'Anisur Rahman', 'Rehena begum', '01923479712', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `qualification` text NOT NULL,
  `course` varchar(255) NOT NULL,
  `research` text NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`t_id`, `name`, `type`, `qualification`, `course`, `research`, `status`) VALUES
(1, 'Dr.Somlal Das', 'Chairman', 'M.Sc. (Raj),Ph.D. (Raj)', 'Object Oriented Programming with Java,\nDatabase Management Systems,\nParallel Processing and Distributed System', 'Digital Signal Processing,Speech Enhancement', 'Present'),
(2, 'Dr. Abu Raihan Shoyeb Ahmed Siddique', 'Professor', 'M.Sc. (Raj). Ph.D. (Raj)\r\n', 'Computer Maintenance and Engineering Drawings Lab,Computer Graphics,Computer Graphics Lab,Computer Simulation and Modeling,Computer Simulation and Modeling Lab', 'N/A\r\n', 'Present'),
(3, 'Dr. A. K. M. Akhtar Hossain', 'Professor', 'M.Sc. (Raj), Ph.D. (Raj)', 'N/A', 'N/A', 'Present'),
(4, 'Dr. Md. Khademul Islam Molla', 'Professor', 'M.Sc. (Sylhet), Ph.D. (Japan)', 'Digital Signal Processing,\nDigital Signal Processing Lab,\nDigital Image Processing,\nDigital Image Processing Lab', 'Theory and applications of signal processing,\nClimate data analysis,\nSignal processing for biomedical applications and computational neuroscience.', 'Present'),
(5, 'Dr. Shamim Ahmad\r\n', 'Professor', 'M.Sc. (Raj) D.Engg. (Japan)', 'Computer Programming With C,\nComputer Networks,\nDiscrete Mathematics', 'Embedded System,\nImage Processing,\nIntelligent Computing', 'Present'),
(6, 'Dr. Md. Ekramul Hamid\r\n', 'Professor', 'M.Sc. (Raj), M.C.S (India), Ph.D. (Japan)', 'Electrical Circuit and Electronics,\nIntroduction to Digital Electronics', 'Speech Enhancement, Speech noise reduction, Speech feature extraction,\nDigital Signal Processing,\nImage Signal Processing and Computer Vision.', 'Present'),
(7, 'Bimal Kumar Pramanik\r\n', 'Associate Professor\r\n', 'M.Sc. (Raj), M.Sc. (Sweden)', 'Electrical Circuit and Electronics,\nIntroduction to Digital Electronics', 'Microprocessor Based System,\nVLSI Design,\nMicro Fabrication,', 'Leaved'),
(8, 'Dr.Altab Hossain\r\n', 'Associate Professor\r\n', 'M.Sc.(Raj)Ph.D (Japan)', 'N/A', 'N/A', 'Leaved'),
(9, 'Md. Anisuzzaman Siddique', 'Associate Professor\r\n', 'M.Sc. (Raj), Ph.D. (Japan)', 'N/A', 'Skyline Evaluation,\nData Minig,\nPrivacy Preserving Information retrieval', 'Leaved'),
(10, 'Subrata Pramanik\r\n', 'Associate Professor\r\n', 'M.Sc. (Raj), M.Sc. (Canada)', 'System Analysis and Design', 'Image Processing,\nIntelligent Computing,\nNatural Language Processing & Bioinformatics', 'Present'),
(11, 'Md. Rokanujjaman\r\n', 'Associate Professor\r\n', 'M.Sc. (Raj)', 'Computer Architecture and Organization,\nDigital Image Processing', 'Computer Vision,\nData Image Processing,\nDigital Signal Processing', 'Present'),
(12, 'Md. Morshedul Arefin\r\n', 'Assistant Professor', 'M.Sc. (Raj)', 'Computer Fundamentals,\nMicroprocessor and Assembly Language,\nMicroprocessor and Assembly Language Lab,\nComputer Peripherals and Interfacing,\nComputer Peripherals and Interfacing Lab', 'Natural Language Processing,\nImage Processing,\nPattern Recognition', 'Present'),
(13, 'Md. Saiful Islam', 'Assistant Professor', 'M.Sc. (Raj', 'Numerical Methods,Numerical Methods Lab', 'Natural Language Processing,\nImage Processing,\nArtificial Intelligence', 'Present'),
(14, 'Muhd. Iqbal Aziz Khan\r\n', 'Assistant Professor', 'M.Sc. (Raj)', 'Parallel Processing and Distributed System,\nParallel Processing and Distributed System Lab', 'N/A', 'Present'),
(15, 'Md. Tohidul Islam\r\n', 'Assistant Professor', 'M.Sc. (Raj)', 'Data Structure,\nData Structure Lab,\nParallel Processing and Distributed System Lab\n', 'Network Security,DSP,Image Processing', 'Present'),
(16, 'Md. Mahbubul Islam\r\n', 'Assistant Professor', 'M.Sc. (Raj)', 'N/A', 'N/A', 'Leaved'),
(17, 'Asif Zaman\r\n', 'Assistant Professor', 'M.Sc. (Raj)', 'N/A', 'Data mining,\nComputer security / Computer Virus,\nBiometrics', 'Leaved'),
(18, 'Kazi Jahidur Rahman\r\n', 'Assistant Professor', 'M.Sc. (Raj)', 'Automata Theory and Compiler Design,\nAutomata Theory and Compiler Design Lab,\nOperating System and System Programming,\nOperating System and System Programming Lab', 'N/A', 'Present'),
(19, 'Sujan Kumar Roy\r\n', 'Assistant Professor', 'M.Sc. (Raj)', 'N/A', 'N/A', 'Leaved'),
(20, 'Mahboob Qaosar\r\n', 'Assistant Professor', 'M.Sc. (Raj)', 'Design and Analysis of Algorithms,\nDesign and Analysis of Algorithms Lab', 'Embedded System,Signal Processing,', 'Present'),
(21, 'Md. Humayun Kabir\r\n', 'Assistant Professor', 'BSc and MSc(CSE, Raj)', 'Software Engineering,\nSoftware Engineering Lab,\nCommunication Engineering,\nCommunication Engineering Lab', 'Software Defined Networking(SDN),\nAdhoc Network, Vehicular Adhoc Network,\nWireless Sensor Network', 'Leaved'),
(22, 'A.F.M. Mahbubur Rahman\r\n', 'Assistant Professor', 'M.Sc. (Raj)', 'N/A', 'Data mining,\nWeb engineering,\nArtificial Intelligence', 'Leaved'),
(23, 'Md. Omar Faruqe\r\n', 'Assistant Professor', 'BSc and MSc(CSE, Raj)', 'Object Oriented Programming with C++,\nObject Oriented Programming with C++ Lab', 'N/A', 'Leaved'),
(24, 'Sanjoy Kumar Chakravarty\r\n', 'Assistant Professor', 'BSc and MSc(CSE, Raj)', 'Introduction to Digital Electronics,\nIntroduction to Digital Electronics Lab,\nDigital System Design,\nDigital System Design Lab', 'Signal Processing,Image Processing', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_login`
--

CREATE TABLE IF NOT EXISTS `teacher_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `password` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `teacher_login`
--

INSERT INTO `teacher_login` (`id`, `user_name`, `password`) VALUES
(1, 'somlaldas', 1234),
(2, 'ekramulhamid', 1234),
(3, 'tohidul', 1234),
(4, 'rokonujjaman', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fathers_name` varchar(255) NOT NULL,
  `mothers_name` varchar(255) NOT NULL,
  `present_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `age` varchar(20) NOT NULL,
  `roll_number` varchar(20) NOT NULL,
  `session` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `cgpa` double DEFAULT NULL,
  `hall` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  UNIQUE KEY `email` (`email`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `fathers_name`, `mothers_name`, `present_address`, `permanent_address`, `age`, `roll_number`, `session`, `year`, `cgpa`, `hall`, `image`) VALUES
(17, 'Muktadir Ahmed', 'masumcse2012@gmail.com', '123', 'Kazol Ahmed', 'Mst.Chameli Begum', 'Rajshahi', 'Chapai Nawabgonj', '23', '12045402', '2011-12', '4th', 3.5, 'Syed Amir Ali', 'pics/masumcse2012@gmail.com.jpg'),
(22, 'muktadir', 'masumcse@gmail.com', '1234', '', '', '', '', '', '', '', '', NULL, '', ''),
(19, 'Rafiqul Islam', 'rafiq@gmail.com', '1234', 'Abul kashem ', 'Ferdousi begum', 'Rajshahi', 'Mymensing', '23', '12045404', '2011-2012', '4th', 3.42, 'Syed Amir Ali', 'pics/rafiq@gmail.com.jpeg'),
(16, 'a', 'y@yahoo.com', '123', 'sdsd', 'sfsdsdsd', 'sdsdsds', 'sdsdsd', 'sdsdsd', 'dsdsdsd', 'sdsdsd', 'sdsd', 0, 'dsdsds', 'pics/y@yahoo.com.jpeg'),
(18, 'fddf', 'zayed@gmail.com', '1234', '', '', '', '', '', '', '', '', NULL, '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
