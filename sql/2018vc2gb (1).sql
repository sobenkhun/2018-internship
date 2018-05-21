-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2018 at 04:13 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

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
  `password` varchar(200) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `userrole_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `userrole_id`) VALUES
(1, 'admin', '$2a$08$d8dL17ICMpH/HUyRVQLV4eDHA90zFIE/EWiyJnpYqFMwctMnn1C0i', 'admin@gmail.com', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `alluser`
-- (See below for the actual view)
--
CREATE TABLE `alluser` (
`UserName` varchar(45)
,`Password` varchar(200)
);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `comment` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment`, `status`, `student_id`) VALUES
(1, 'He is very good at JavaScript', 0, 2),
(2, 'He is very good at CI', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `itemdescription` varchar(200) DEFAULT NULL,
  `postaladdress` varchar(200) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `phone` varchar(45) NOT NULL,
  `url` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `itemdescription`, `postaladdress`, `location`, `phone`, `url`) VALUES
(1, 'W.E Bridge', 'MY company', 'Street', 'Phnom Penh', '0987654', 'www.webridgetechnology.com'),
(2, 'ABA', 'Big company', 'Street 2004', 'Phnom Penh', '085755544', 'www.aba.com.kh');

-- --------------------------------------------------------

--
-- Stand-in structure for view `getcid`
-- (See below for the actual view)
--
CREATE TABLE `getcid` (
`name` varchar(45)
,`id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `getstuid`
-- (See below for the actual view)
--
CREATE TABLE `getstuid` (
`stuName` varchar(91)
,`id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `getsuid`
-- (See below for the actual view)
--
CREATE TABLE `getsuid` (
`suName` varchar(91)
,`id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `gettid`
-- (See below for the actual view)
--
CREATE TABLE `gettid` (
`tName` varchar(91)
,`id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `getuser`
-- (See below for the actual view)
--
CREATE TABLE `getuser` (
`username` varchar(45)
,`password` varchar(200)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `getusers`
-- (See below for the actual view)
--
CREATE TABLE `getusers` (
`username` varchar(45)
,`password` varchar(200)
,`userrole_id` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `questionnaire`
--

CREATE TABLE `questionnaire` (
  `id` int(11) NOT NULL,
  `question1` int(11) DEFAULT NULL,
  `question2` int(11) DEFAULT NULL,
  `question3` int(11) DEFAULT NULL,
  `question4` int(11) DEFAULT NULL,
  `question5` int(11) DEFAULT NULL,
  `question6` int(11) DEFAULT NULL,
  `question7` int(11) DEFAULT NULL,
  `question8` int(11) DEFAULT NULL,
  `question9` int(11) DEFAULT NULL,
  `question10` int(11) DEFAULT NULL,
  `question11` int(11) DEFAULT NULL,
  `question12` int(11) DEFAULT NULL,
  `question13` int(11) DEFAULT NULL,
  `question14` int(11) DEFAULT NULL,
  `question15` int(11) DEFAULT NULL,
  `question16` varchar(100) DEFAULT NULL,
  `question17` varchar(100) DEFAULT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `batch` varchar(45) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `schoolemail` varchar(45) DEFAULT NULL,
  `peremail` varchar(45) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `hire` int(11) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `picture` varchar(45) DEFAULT NULL,
  `supervisor_id` int(11) NOT NULL,
  `userrole_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `firstname`, `lastname`, `batch`, `year`, `schoolemail`, `peremail`, `phone`, `hire`, `password`, `username`, `picture`, `supervisor_id`, `userrole_id`) VALUES
(1, 'Prem', 'Mann', 'WEB', 2018, 's.prem@gmail.com', 'p.prem@gmail.com', 3456765, 1, '$2a$08$d8dL17ICMpH/HUyRVQLV4eDHA90zFIE/EWiyJnpYqFMwctMnn1C0i', 'mPrem', 'premImage', 2, 4),
(2, 'Devith', 'Chea', 'Web', 2018, 's.devit@gmail.com', 'p.devit@gmail.com', 98765444, 0, '$2a$08$d8dL17ICMpH/HUyRVQLV4eDHA90zFIE/EWiyJnpYqFMwctMnn1C0i', 'g-dvith', 'dImage', 1, 4),
(3, 'Touch', 'Ban', 'WEB', 2018, 's.touch@gmail.com', 'p.touch@gmail.com', 86784485, 1, '$2a$08$d8dL17ICMpH/HUyRVQLV4eDHA90zFIE/EWiyJnpYqFMwctMnn1C0i', 'btouch', 'tImage', 3, 4),
(4, 'Bunthean', 'Mov', 'Web', 2018, 's.bunthean@gmail.com', 'p.bunthean@gmail.com', 876546, 1, '$2a$08$d8dL17ICMpH/HUyRVQLV4eDHA90zFIE/EWiyJnpYqFMwctMnn1C0i', 'mbunthean', 'bImage', 3, 4),
(5, 'soben', 'khun', 'Web2018', 2, 'soben.khun@student.passerellesnumeriques.org', 'sobenkhun.sk@gmail.com', 81477282, NULL, '$2a$08$d8dL17ICMpH/HUyRVQLV4eDHA90zFIE/EWiyJnpYqFMwctMnn1C0i', 'soben.khun', NULL, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `id` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `picture` varchar(45) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `company_id` int(11) NOT NULL,
  `userrole_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`id`, `firstname`, `lastname`, `position`, `email`, `phone`, `picture`, `password`, `username`, `company_id`, `userrole_id`) VALUES
(1, 'Vi', 'Bol', 'Project Manager', 'vibol@gmail.com', 70424109, 'image', '$2a$08$d8dL17ICMpH/HUyRVQLV4eDHA90zFIE/EWiyJnpYqFMwctMnn1C0i', 'vi.bol', 1, 3),
(2, 'Thea', 'Ry', 'Tester', 'theary@gmail.com', 98768723, 'dImage', '$2a$08$d8dL17ICMpH/HUyRVQLV4eDHA90zFIE/EWiyJnpYqFMwctMnn1C0i', 'thea.ry', 1, 3),
(3, 'Vi', 'Sal', 'Team Leader', 'visal@gmail.com', 7646468, NULL, '$2a$08$fiDT7x7nFdcuiB0PxVYqheInyP8CjIyKTivTRZ4njdBSxZll9u1Ju', 'vi.sal', 2, 3);

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
  `phone` int(11) DEFAULT NULL,
  `picture` varchar(45) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `company_id` int(11) NOT NULL,
  `userrole_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`id`, `firstname`, `lastname`, `position`, `email`, `phone`, `picture`, `password`, `username`, `company_id`, `userrole_id`) VALUES
(1, 'Rith', 'Nhel', 'Web Trainer', 'rnhel@gmail.com', 1234567, 'image', '$2a$08$d8dL17ICMpH/HUyRVQLV4eDHA90zFIE/EWiyJnpYqFMwctMnn1C0i', 'rith.nhel', 1, 2),
(3, 'Rady', 'Y', 'Web Trainer', 's.rady.y@gmail.com', 23444433, NULL, '$2a$08$d8dL17ICMpH/HUyRVQLV4eDHA90zFIE/EWiyJnpYqFMwctMnn1C0i', 'yrady', 2, 2),
(5, 'channak', 'Chhon', 'Web Trainer', 'channak.chhon@trainer.passerellesnumeriques.o', 70242353, NULL, '$2a$08$d8dL17ICMpH/HUyRVQLV4eDHA90zFIE/EWiyJnpYqFMwctMnn1C0i', 'channak.chhon', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `userrole`
--

CREATE TABLE `userrole` (
  `id` int(11) NOT NULL,
  `role` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userrole`
--

INSERT INTO `userrole` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'tutor'),
(3, 'supervisor'),
(4, 'student');

-- --------------------------------------------------------

--
-- Table structure for table `worklog`
--

CREATE TABLE `worklog` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `workactivities` text,
  `youhavelearn` text,
  `issues` text,
  `solutions` text,
  `todo` text,
  `comment` text,
  `stu_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `worklog`
--

INSERT INTO `worklog` (`id`, `date`, `workactivities`, `youhavelearn`, `issues`, `solutions`, `todo`, `comment`, `stu_id`) VALUES
(1, '2018-05-18', '- Meeting with client and manager for got the requirement \r\n- Install skeleton in local Computer', '-We know more  with requirement\r\n- We understand more about what client need(Process of project)\r\n- We got some advice from manager the procees of project\r\n- we learnt about how to prepar overself for met client first time ', '- some member still not clear about what client need \r\nand rocess of skeleton\r\n- we not yet see the requement before go to meeting\r\n with client and manager so we have more not clear \r\nabout project\r\n\r\n', 'In group have some one understand clearly more than \r\neveryone explain more what is client need\r\n- ask client more detail which part that we not clear\r\n- We go to read detail with requirement\r\n- who don\'t understand about skeleton we provide \r\nmore time for play around it and give some guide to their', 'Play around with skeleton\r\n - Create few tests case for Play around with skeleton\r\n - fix some sever have problem with version PHP', 'I have problem with supervisor', 5);

-- --------------------------------------------------------

--
-- Structure for view `alluser`
--
DROP TABLE IF EXISTS `alluser`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `alluser`  AS  select `admin`.`username` AS `UserName`,`admin`.`password` AS `Password` from `admin` union select `tutor`.`username` AS `username`,`tutor`.`password` AS `password` from `tutor` union select `supervisor`.`username` AS `username`,`supervisor`.`password` AS `password` from `supervisor` union select `student`.`username` AS `username`,`student`.`password` AS `password` from `student` ;

-- --------------------------------------------------------

--
-- Structure for view `getcid`
--
DROP TABLE IF EXISTS `getcid`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `getcid`  AS  select `company`.`name` AS `name`,`company`.`id` AS `id` from `company` ;

-- --------------------------------------------------------

--
-- Structure for view `getstuid`
--
DROP TABLE IF EXISTS `getstuid`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `getstuid`  AS  select concat(`student`.`firstname`,' ',`student`.`lastname`) AS `stuName`,`student`.`id` AS `id` from `student` ;

-- --------------------------------------------------------

--
-- Structure for view `getsuid`
--
DROP TABLE IF EXISTS `getsuid`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `getsuid`  AS  select concat(`supervisor`.`firstname`,' ',`supervisor`.`lastname`) AS `suName`,`supervisor`.`id` AS `id` from `supervisor` ;

-- --------------------------------------------------------

--
-- Structure for view `gettid`
--
DROP TABLE IF EXISTS `gettid`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `gettid`  AS  select concat(`tutor`.`firstname`,' ',`tutor`.`lastname`) AS `tName`,`tutor`.`id` AS `id` from `tutor` ;

-- --------------------------------------------------------

--
-- Structure for view `getuser`
--
DROP TABLE IF EXISTS `getuser`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `getuser`  AS  select `admin`.`username` AS `username`,`admin`.`password` AS `password` from `admin` union select `tutor`.`username` AS `username`,`tutor`.`password` AS `password` from `tutor` union select `supervisor`.`username` AS `username`,`supervisor`.`password` AS `password` from `supervisor` union select `student`.`username` AS `username`,`student`.`password` AS `password` from `student` ;

-- --------------------------------------------------------

--
-- Structure for view `getusers`
--
DROP TABLE IF EXISTS `getusers`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `getusers`  AS  select `admin`.`username` AS `username`,`admin`.`password` AS `password`,`admin`.`userrole_id` AS `userrole_id` from `admin` union select `tutor`.`username` AS `username`,`tutor`.`password` AS `password`,`tutor`.`userrole_id` AS `userrole_id` from `tutor` union select `supervisor`.`username` AS `username`,`supervisor`.`password` AS `password`,`supervisor`.`userrole_id` AS `userrole_id` from `supervisor` union select `student`.`username` AS `username`,`student`.`password` AS `password`,`student`.`userrole_id` AS `userrole_id` from `student` ;

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
-- Indexes for table `questionnaire`
--
ALTER TABLE `questionnaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_questionnaire_student1_idx` (`student_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_student_supervisor1_idx` (`supervisor_id`),
  ADD KEY `fk_student_userrole1_idx` (`userrole_id`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`id`,`company_id`,`userrole_id`),
  ADD KEY `fk_supervisor_company1_idx` (`company_id`),
  ADD KEY `fk_supervisor_userrole1_idx` (`userrole_id`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id`,`company_id`,`userrole_id`),
  ADD KEY `fk_tutor_company_idx` (`company_id`),
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `stu_id` (`stu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userrole`
--
ALTER TABLE `userrole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `worklog`
--
ALTER TABLE `worklog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  ADD CONSTRAINT `fk_student_supervisor1` FOREIGN KEY (`supervisor_id`) REFERENCES `supervisor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_student_userrole1` FOREIGN KEY (`userrole_id`) REFERENCES `userrole` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD CONSTRAINT `fk_supervisor_company1` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_supervisor_userrole1` FOREIGN KEY (`userrole_id`) REFERENCES `userrole` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tutor`
--
ALTER TABLE `tutor`
  ADD CONSTRAINT `fk_tutor_company` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tutor_userrole1` FOREIGN KEY (`userrole_id`) REFERENCES `userrole` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `worklog`
--
ALTER TABLE `worklog`
  ADD CONSTRAINT `worklog_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `student` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
