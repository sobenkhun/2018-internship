-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2018 at 04:25 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2018vc2gb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `userrole_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `userrole_id`) VALUES
(1, 'Alice', '$2a$08$cnX6al6aTkoyh/N/tKZ11e8ec9J/sldA6R4NdP.2qhhDi0OD3ek1G', 'alice@gmail.com', 1),
(2, 'sreymi', '$2a$08$cnX6al6aTkoyh/N/tKZ11eBNSU6bYVQA8NGLbyE7YQ89IPC3zTkQ', 'sreymi@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `comment` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `student_id`, `comment`, `status`) VALUES
(1, 3, 'He is good at team work', 0),
(2, 3, 'Work hard ', NULL),
(3, 4, 'He is a smart student', 1),
(4, 4, 'He never late', 0),
(5, 5, NULL, NULL),
(6, 5, NULL, NULL),
(7, 6, 'He focus with his work', 1),
(8, 6, 'He try very hard ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `itemdescription` longtext,
  `postaladdress` varchar(200) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE `meeting` (
  `id` int(11) NOT NULL,
  `starttimeanddate` datetime DEFAULT NULL,
  `endtimeanddate` datetime DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `feedback` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `questionnaire`
--

CREATE TABLE `questionnaire` (
  `id` int(11) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `question1` int(11) DEFAULT NULL,
  `question2` tinyint(1) DEFAULT NULL,
  `question3` tinyint(1) DEFAULT NULL,
  `question4` int(11) DEFAULT NULL,
  `question5` int(11) DEFAULT NULL,
  `question6` int(11) DEFAULT NULL,
  `question7` int(11) DEFAULT NULL,
  `question8` int(11) DEFAULT NULL,
  `question9` int(11) DEFAULT NULL,
  `question10` int(11) DEFAULT NULL,
  `question11` int(11) DEFAULT NULL,
  `question12` longtext,
  `question13` int(11) DEFAULT NULL,
  `question14` int(11) DEFAULT NULL,
  `question15` int(11) DEFAULT NULL,
  `question16` longtext,
  `question17` longtext,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `supervisor_id` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) NOT NULL,
  `batch` varchar(45) NOT NULL,
  `year` int(11) NOT NULL,
  `schoolemail` varchar(45) NOT NULL,
  `peremail` varchar(45) NOT NULL,
  `phone` int(11) NOT NULL,
  `hired` int(11) DEFAULT NULL,
  `picture` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `userrole_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `supervisor_id`, `firstname`, `lastname`, `batch`, `year`, `schoolemail`, `peremail`, `phone`, `hired`, `picture`, `password`, `username`, `userrole_id`) VALUES
(3, 1, 'Prem', 'Mann', 'WEB', 2018, 's.prem@gmail.com', 'p.prem@gmail.com', 675656, 1, 'premImage', '123', 'p.prem@gmail.com', 4),
(4, 1, 'Devith', 'Chea', 'WEB', 2018, 's.devith@gmail.com', 'p.devith@gmail.com', 6767545, 0, 'devithImage', '123', 'p.devith@gmail.com', 4),
(5, 2, 'Touch', 'Ban', 'WEB', 2018, 's.touch@gmail.com', 'p.touch@gmail.com', 76567845, 1, 'touch@gmail.com', '123', 'p.touch@gmail.com', 4),
(6, 2, 'Bunthean', 'Mov', 'Web', 2018, 's.bunthean@gmail.com', 'p.bunthean@gmail.com', 56745686, 0, 'buntheanImage', '123', 'p.bunthean@gmail.com', 4);

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `picture` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `userrole_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `id` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `picture` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `company_id` int(11) NOT NULL,
  `userrole_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`id`, `firstname`, `lastname`, `position`, `email`, `phone`, `picture`, `password`, `username`, `company_id`, `userrole_id`) VALUES
(1, 'Rady', 'y', 'Trainer', 'rady@gmail.com', '076565433', 'radyImage', '123', 'rady@gmail.com', 2, 2),
(2, 'rith', 'nelh', 'trainer', 'rith@gmail.com', '06545676', 'rithImage', '123', 'rith@gmail.com', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `userrole`
--

CREATE TABLE `userrole` (
  `id` int(11) NOT NULL,
  `role` varchar(45) DEFAULT NULL,
  `tutor_id` int(11) DEFAULT NULL,
  `supervisor_ud` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userrole`
--

INSERT INTO `userrole` (`id`, `role`, `tutor_id`, `supervisor_ud`) VALUES
(1, 'admin', 0, 0),
(2, 'tutor', NULL, NULL),
(3, 'supervisor', NULL, NULL),
(4, 'student', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `worklog`
--

CREATE TABLE `worklog` (
  `id` int(11) NOT NULL,
  `workactivities` varchar(255) DEFAULT NULL,
  `youhavelearn` varchar(255) DEFAULT NULL,
  `difficultiesandssues` varchar(255) DEFAULT NULL,
  `solutions` varchar(255) DEFAULT NULL,
  `todo` varchar(255) DEFAULT NULL,
  `comment` varchar(45) DEFAULT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`,`userrole_id`),
  ADD KEY `fk_admin_userrole1_idx` (`userrole_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comment_student1_idx` (`student_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionnaire`
--
ALTER TABLE `questionnaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_questionnaire_student1_idx` (`student_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`,`userrole_id`),
  ADD KEY `fk_student_supervisor1_idx` (`supervisor_id`),
  ADD KEY `fk_student_userrole1_idx` (`userrole_id`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`id`,`userrole_id`),
  ADD KEY `fk_supervisor_company1_idx` (`company_id`),
  ADD KEY `fk_supervisor_userrole1_idx` (`userrole_id`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id`,`company_id`,`userrole_id`),
  ADD KEY `fk_tutor_company1_idx` (`company_id`),
  ADD KEY `fk_tutor_userrole1_idx` (`userrole_id`);

--
-- Indexes for table `userrole`
--
ALTER TABLE `userrole`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `worklog`
--
ALTER TABLE `worklog`
  ADD PRIMARY KEY (`id`,`student_id`),
  ADD KEY `fk_worklog_student1_idx` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questionnaire`
--
ALTER TABLE `questionnaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userrole`
--
ALTER TABLE `userrole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `worklog`
--
ALTER TABLE `worklog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_admin_userrole1` FOREIGN KEY (`userrole_id`) REFERENCES `userrole` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_comment_student1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `questionnaire`
--
ALTER TABLE `questionnaire`
  ADD CONSTRAINT `fk_questionnaire_student1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `fk_student_userrole1` FOREIGN KEY (`userrole_id`) REFERENCES `userrole` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD CONSTRAINT `fk_supervisor_company1` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_supervisor_userrole1` FOREIGN KEY (`userrole_id`) REFERENCES `userrole` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tutor`
--
ALTER TABLE `tutor`
  ADD CONSTRAINT `fk_tutor_userrole1` FOREIGN KEY (`userrole_id`) REFERENCES `userrole` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `worklog`
--
ALTER TABLE `worklog`
  ADD CONSTRAINT `fk_worklog_student1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
