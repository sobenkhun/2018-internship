-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 05:53 AM
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
  `password` varchar(200) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `userrole_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `userrole_id`) VALUES
(1, 'admin', '123', 'admin@gmail.com', 1);

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
(5, 'RCI', 'frdeswq', 'fdsa', 'Kandal', '5432', 'gfdsdfghj.com');

-- --------------------------------------------------------

--
-- Stand-in structure for view `councompany`
-- (See below for the actual view)
--
CREATE TABLE `councompany` (
`firstname` varchar(45)
,`lastname` varchar(45)
,`count(*)` bigint(21)
,`id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `countstu`
-- (See below for the actual view)
--
CREATE TABLE `countstu` (
`suName` varchar(91)
,`numStu` bigint(21)
,`company_id` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `color` varchar(7) NOT NULL DEFAULT '#3a87ad',
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `allDay` varchar(50) NOT NULL DEFAULT 'true'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `color`, `start`, `end`, `allDay`) VALUES
(5, 'Meeting', 'Meeting for discuss about layout for each user', '#4cf012', '2018-05-03 00:00:00', '2018-05-04 00:00:00', 'true'),
(6, 'gfds', 'gfdsa', '#3a87ad', '2018-05-02 00:00:00', '2018-05-03 00:00:00', 'true'),
(14, 'Event', 'For testing', '#18e884', '2018-05-11 00:00:00', '2018-05-12 00:00:00', 'true'),
(15, 'Event', 'For testing', '#18e884', '2018-05-11 00:00:00', '2018-05-12 00:00:00', 'true'),
(16, 'asdfdsf', 'asdfadf', '#3a87ad', '2018-05-10 00:00:00', '2018-05-11 00:00:00', 'true'),
(17, 'asfsdf', 'asdfadf', '#000000', '2018-05-03 00:00:00', '2018-05-04 00:00:00', 'true'),
(18, 'asfsdf', 'asdfadf', '#000000', '2018-05-03 00:00:00', '2018-05-04 00:00:00', 'true'),
(19, 'hgfdsh', 'bgfdsa', '#3a87ad', '2018-05-02 00:00:00', '2018-05-03 00:00:00', 'true'),
(20, 'hgfdsh', 'bgfdsa', '#3a87ad', '2018-05-02 00:00:00', '2018-05-03 00:00:00', 'true'),
(22, 'First Releas', 'Should be complete 60% of project ', '#16c4db', '2018-05-16 00:00:00', '2018-05-17 00:00:00', 'true');

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
-- Stand-in structure for view `getnumstu`
-- (See below for the actual view)
--
CREATE TABLE `getnumstu` (
`name` varchar(45)
,`numStu` bigint(21)
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
(5, 'Prem', 'Mann', 'WEB', 2018, 's.touch@gmail.com', 'p.touch@gmail.com', 98765434, 1, 'fdssdssdv', 'gfdsdfghjhgf', 'fdsfsdf', 6, 4),
(6, 'O', 'scar', 'Web', 2018, 's.bunthean@gmail.com', 'p.bunthean@gmail.com', 876546, 1, '12345678gfd', 'hhhhh', 'uytdsdfghjkl', 6, 4);

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
(6, 'ka', 'ka', 'Trainer', 'alice@gmail.com', 987654, 'image', '123', 'kkaa', 5, 3),
(7, '', '', '', '', 0, NULL, '$2a$08$s69jlgqxLVXTWw.Ize9pf.CfkT.3iAGxaGkSLoUwHBtFBsJd.a7Y6', '', 5, 3);

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
(7, 'Chelsea', 'English', 'Web Trainer', 'pnc@gmail.com', 7646468, NULL, '$2a$08$z6LOsOwGTfn20CRZm4bQ1OuP41rvcrP6zb/27eUmcyodJfPk1RgEi', 'chelsea', 5, 2);

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
  `workactivities` varchar(200) DEFAULT NULL,
  `youhavelearn` varchar(200) DEFAULT NULL,
  `difficultiesandssues` varchar(200) DEFAULT NULL,
  `solutions` varchar(200) DEFAULT NULL,
  `todo` varchar(200) DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `alluser`
--
DROP TABLE IF EXISTS `alluser`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `alluser`  AS  select `admin`.`username` AS `UserName`,`admin`.`password` AS `Password` from `admin` union select `tutor`.`username` AS `username`,`tutor`.`password` AS `password` from `tutor` union select `supervisor`.`username` AS `username`,`supervisor`.`password` AS `password` from `supervisor` union select `student`.`username` AS `username`,`student`.`password` AS `password` from `student` ;

-- --------------------------------------------------------

--
-- Structure for view `councompany`
--
DROP TABLE IF EXISTS `councompany`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `councompany`  AS  select `supervisor`.`firstname` AS `firstname`,`supervisor`.`lastname` AS `lastname`,count(0) AS `count(*)`,`supervisor`.`id` AS `id` from (`student` join `supervisor`) where (`supervisor`.`id` = `student`.`supervisor_id`) group by `supervisor`.`firstname` ;

-- --------------------------------------------------------

--
-- Structure for view `countstu`
--
DROP TABLE IF EXISTS `countstu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `countstu`  AS  select concat(`supervisor`.`firstname`,' ',`supervisor`.`lastname`) AS `suName`,count(0) AS `numStu`,`supervisor`.`company_id` AS `company_id` from (`supervisor` join `student`) where (`student`.`supervisor_id` = `supervisor`.`id`) group by `supervisor`.`id` ;

-- --------------------------------------------------------

--
-- Structure for view `getcid`
--
DROP TABLE IF EXISTS `getcid`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `getcid`  AS  select `company`.`name` AS `name`,`company`.`id` AS `id` from `company` ;

-- --------------------------------------------------------

--
-- Structure for view `getnumstu`
--
DROP TABLE IF EXISTS `getnumstu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `getnumstu`  AS  select `company`.`name` AS `name`,`countstu`.`numStu` AS `numStu` from (`countstu` join `company`) where (`countstu`.`company_id` = `company`.`id`) group by `company`.`id` ;

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
  ADD KEY `fk_worklog_student1_idx` (`student_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userrole`
--
ALTER TABLE `userrole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  ADD CONSTRAINT `fk_comment_student1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questionnaire`
--
ALTER TABLE `questionnaire`
  ADD CONSTRAINT `fk_questionnaire_student1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `fk_student_supervisor1` FOREIGN KEY (`supervisor_id`) REFERENCES `supervisor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_student_userrole1` FOREIGN KEY (`userrole_id`) REFERENCES `userrole` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `fk_tutor_company` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
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
