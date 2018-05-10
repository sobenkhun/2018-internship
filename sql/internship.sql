-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2018 at 06:26 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing_skeleton`
--

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

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `itemdescription`, `postaladdress`, `location`, `phone`, `url`) VALUES
(1, 'Angkor Data Communication Group', NULL, NULL, '4th floor, AnAnA Building #95, Preah Norodom Blvd., Sangkat Boeung Raing, Khan Daun Penh, Phnom Penh.', '023 22 66 22│093 22 25 00', 'https://www.mekongnet.com.kh/'),
(2, 'Asia Flour Mill ', NULL, NULL, ' #228, Preah Norodom Blvd, Sangkat Tonle Basac,\r\nKhan Chamkarmon, Phnom Penh, Cambodia ', '089 854 268', NULL),
(3, 'AWS', NULL, NULL, '#5C, Street 21, Sangkat Tonle Bassac,\r\nKhan Chamkarmorn, Phnom Penh, Cambodia.', NULL, 'www.awspl.com'),
(4, 'Bikay Co., Ltd ', NULL, NULL, 'No. 92 Street 289, Sangkat Boeung Kak II, Khan Toul Kork, Phnom Penh, Cambodia', '016 998 240', 'http://www.bi-kay.com/'),
(5, 'Condingate ', NULL, NULL, 'No. 59, Oknha Pich St. (242), Phnom Penh, Phnom Penh', NULL, 'codingate.com'),
(6, 'First Cambodia Co., Ltd', NULL, NULL, '#86AB, Street 13/118, Sangkat Phsar Kandal 1\r\nKhan Daun Penh, Phnom Penh, Cambodia', '016 533 136', 'first-cambodia.com'),
(7, 'Flexible Solution', NULL, NULL, 'Key Business Centher, M1 Floor, Mao Tse Toung, \r\nToul Tum Poung, Chamkarmorn.', '017 482 883', 'flexitechnology.com'),
(8, 'GAEASYS Information System', NULL, NULL, 'Toulkork 54 Building - Floor 7th\r\n#54, Street 598\r\nPhnom Penh, Cambodia', NULL, NULL),
(9, 'Kredit Microfinance ', NULL, NULL, 'Building 71, Street163, Toul Svay Prey I,  Chamkarmorn, Phnom Penh, Cambodia', '017 719 326', 'kredit.com.kh'),
(10, 'Manual Life ', NULL, NULL, '8th Floor, Siri Tower 104, Russian Federation Boulevard | Phnom Penh, Cambodia', NULL, 'manulife.com'),
(11, 'Northbridge International School', NULL, NULL, 'P.O. Box 2042, Phnom Penh 3, Cambodia, Street 2004', NULL, 'nordangliaeducation.com'),
(12, 'NTT Communication', NULL, NULL, 'Sothearos (St. 3), corner of sihanouk (St. 274), Phnom Penh Center, Building F, Room 686, 12301, Phnom Penh', NULL, 'ntt.com'),
(13, 'Proseth Solutions Co., Ltd', NULL, NULL, '#F9, Street Oknha Mong Reth thy, Sangkat Toul Songke,\r\n  Khan Ruessei Kaev, Phnom Penh, Cambodia  ', NULL, 'prosethsolutionsco-ltd.com'),
(14, 'prosethsolutionsco-ltd.com', NULL, NULL, 'Phnom Penh Tower, 20F, #445, Preah Monivong Blvd, Boeung Prolit, 7 Makara, Phnom Penh, Cambodia, P.O.Box: 417', '015 455 542', 'prudentialcambodialife-insurance.com'),
(15, 'Retails Consulting & IT Innovations ', NULL, NULL, '19th Floor, Building No. 63, st. 440, Sangkat Toul Tum Pong I, Khan Chamkar Morn, Phnom Penh, Cambodia  ', NULL, 'retailsconsulting&it-innovations.com'),
(16, 'Speed Pay Plc', NULL, NULL, 'Blvd Mao Tse Toung, Phnom Penh', NULL, 'speedpay-plc.com'),
(17, 'Vecteur IT Asia ', NULL, NULL, '#20 on street 418, close to Tuol Tom Poung Market.', NULL, 'vecteurit-asia.com'),
(18, 'W.E Bridge Technologies', NULL, NULL, '#20, St. 51, Phnom Penh', NULL, 'webridge-technologies.com');

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
  `feedback` varchar(45) DEFAULT NULL,
  `users_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `questionnaire`
--

CREATE TABLE `questionnaire` (
  `id` int(11) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `supervisorid` int(11) DEFAULT NULL,
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
  `question17` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblcomment`
--

CREATE TABLE `tblcomment` (
  `id` int(11) NOT NULL,
  `comment` longtext,
  `status` tinyint(1) DEFAULT NULL,
  `users_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL,
  `emailpro` varchar(100) DEFAULT NULL,
  `phonenumber` int(11) DEFAULT NULL,
  `profilepicture` varchar(200) DEFAULT NULL,
  `batch` varchar(45) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `schoolemail` varchar(200) DEFAULT NULL,
  `hired` tinyint(1) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `userrole_id` int(11) NOT NULL,
  `users_userid` int(11) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `users_userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_meeting_users1_idx` (`users_userid`);

--
-- Indexes for table `questionnaire`
--
ALTER TABLE `questionnaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_questionnaire_users1_idx` (`supervisorid`);

--
-- Indexes for table `tblcomment`
--
ALTER TABLE `tblcomment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tblcomment_users1_idx` (`users_userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `fk_users_users1_idx` (`users_userid`),
  ADD KEY `fk_users_company1_idx` (`company_id`);

--
-- Indexes for table `worklog`
--
ALTER TABLE `worklog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_worklog_users1_idx` (`users_userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
-- AUTO_INCREMENT for table `tblcomment`
--
ALTER TABLE `tblcomment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `worklog`
--
ALTER TABLE `worklog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `meeting`
--
ALTER TABLE `meeting`
  ADD CONSTRAINT `fk_meeting_users1` FOREIGN KEY (`users_userid`) REFERENCES `users` (`userid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `questionnaire`
--
ALTER TABLE `questionnaire`
  ADD CONSTRAINT `fk_questionnaire_users1` FOREIGN KEY (`supervisorid`) REFERENCES `users` (`userid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tblcomment`
--
ALTER TABLE `tblcomment`
  ADD CONSTRAINT `fk_tblcomment_users1` FOREIGN KEY (`users_userid`) REFERENCES `users` (`userid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_company1` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_users1` FOREIGN KEY (`users_userid`) REFERENCES `users` (`userid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `worklog`
--
ALTER TABLE `worklog`
  ADD CONSTRAINT `fk_worklog_users1` FOREIGN KEY (`users_userid`) REFERENCES `users` (`userid`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
