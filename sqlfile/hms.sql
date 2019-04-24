-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2019 at 06:26 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`) VALUES
(1, 'admin', 'Test@12345', '28-12-2016 11:42:05 AM');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `doctorSpecialization` varchar(255) CHARACTER SET latin1 NOT NULL,
  `doctorId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `consultancyFees` int(11) NOT NULL,
  `appointmentDate` varchar(255) CHARACTER SET latin1 NOT NULL,
  `appointmentTime` varchar(255) CHARACTER SET latin1 NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userStatus` int(11) NOT NULL,
  `doctorStatus` int(11) NOT NULL,
  `updationDate` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `doctorSpecialization`, `doctorId`, `userId`, `consultancyFees`, `appointmentDate`, `appointmentTime`, `postingDate`, `userStatus`, `doctorStatus`, `updationDate`) VALUES
(1, 'Dentist', 1, 1, 500, '2016-12-31', '09:25', '2017-01-01 00:29:02', 1, 0, ''),
(2, 'Homeopath', 4, 5, 700, '2017-01-11', '14:10', '2017-01-07 08:02:58', 0, 1, ''),
(3, 'Ear-Nose-Throat (Ent) Specialist', 7, 6, 200, '2019-01-03', '21:08', '2019-02-09 16:21:12', 0, 1, ''),
(4, 'Ear-Nose-Throat (Ent) Specialist', 8, 6, 900, '2019-02-06', '01:01', '2019-02-17 14:01:13', 1, 0, ''),
(5, 'Ear-Nose-Throat (Ent) Specialist', 8, 6, 900, '2019-02-14', '02:03', '2019-02-17 14:19:19', 1, 0, ''),
(6, 'Gynecologist/Obstetrician', 10, 6, 750, '2019-02-15', '01:00', '2019-02-24 02:18:55', 0, 1, ''),
(7, 'Ear-Nose-Throat (Ent) Specialist', 8, 6, 900, '2019-02-02', '02:04', '2019-02-24 17:39:30', 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) NOT NULL,
  `doctorName` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `docFees` varchar(255) NOT NULL,
  `contactno` bigint(11) NOT NULL,
  `docEmail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `specilization`, `doctorName`, `address`, `docFees`, `contactno`, `docEmail`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'Dentist', 'kholod', 'jeddah', '500', 555241898, 'kholod@gmail.com', '123456', '2018-12-29 06:25:37', '04-01-2019 01:27:51 PM'),
(2, 'Homeopath', 'wafaa', 'jeddah', '800', 2147483647, 'sarita@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2016-12-29 06:51:51', ''),
(3, 'General Physician', 'Nitesh Kumar', 'Ghaziabad', '1200', 8523699999, 'nitesh@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 07:43:35', ''),
(4, 'Homeopath', 'Vijay Verma', 'New Delhi', '700', 25668888, 'vijay@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 07:45:09', ''),
(5, 'Ayurveda', 'Sanjeev', 'Gurugram', '8050', 442166644646, 'sanjeev@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 07:47:07', ''),
(6, 'General Physician', 'Amrita', 'New Delhi India', '2500', 45497964, 'amrita@test.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 07:52:50', ''),
(7, 'Ear-Nose-Throat (Ent) Specialist', 'kholod', 'jeddah', '200', 555290233, 'test@demo.com', 'e10adc3949ba59abbe56e057f20f883e', '2017-01-07 08:08:58', '09-02-2019 02:46:44 AM'),
(8, 'Ear-Nose-Throat (Ent) Specialist', 'marwa', 'jeddah', '900', 555290200, 'marwa@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-02-09 15:18:18', ''),
(9, 'Ear-Nose-Throat (Ent) Specialist', 'marwa', 'jeddah', '900', 555290200, 'marwa@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-02-09 15:18:31', ''),
(10, 'Gynecologist/Obstetrician', 'noor', 'jeddah', '750', 555290266, 'noor@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-02-09 15:31:45', ''),
(11, 'Gynecologist/Obstetrician', 'noor', 'jeddah', '750', 555290266, 'noor@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-02-09 15:39:49', ''),
(12, 'Gynecologist/Obstetrician', 'noor', 'jeddah', '750', 555290266, 'noor@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-02-09 15:40:31', ''),
(13, 'Ear-Nose-Throat (Ent) Specialist', 'hanaa', 'jeddah', '680', 555290888, 'hanaa@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-02-09 15:41:56', ''),
(14, 'Ear-Nose-Throat (Ent) Specialist', 'hanaa', 'jeddah', '680', 555290888, 'hanaa@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-02-09 15:50:26', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctorslog`
--

CREATE TABLE `doctorslog` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userip` binary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorslog`
--

INSERT INTO `doctorslog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(1, 2, 'sarita@gmail.com', 0x30000000000000000000000000000000, '2017-01-06 05:53:31', '', 1),
(2, 0, 'admin', 0x3a3a3100000000000000000000000000, '2017-01-06 06:36:07', '', 0),
(3, 2, 'sarita@gmail.com', 0x3a3a3100000000000000000000000000, '2017-01-06 06:36:37', '06/01/2017 07:36:45', 1),
(4, 2, 'sarita@gmail.com', 0x3a3a3100000000000000000000000000, '2017-01-06 06:41:33', '12:11:46', 1),
(5, 2, 'sarita@gmail.com', 0x3a3a3100000000000000000000000000, '2017-01-06 06:55:16', '06-01-2017 12:27:47 PM', 1),
(6, 0, 'admin', 0x3a3a3100000000000000000000000000, '2017-01-06 07:07:12', '', 0),
(7, 0, 'info@w3gang.com', 0x3a3a3100000000000000000000000000, '2017-01-07 08:04:42', '', 0),
(8, 0, 'info@w3gang.com', 0x3a3a3100000000000000000000000000, '2017-01-07 08:04:55', '', 0),
(9, 2, 'sarita@gmail.com', 0x3a3a3100000000000000000000000000, '2017-01-07 08:05:54', '07-01-2017 01:36:28 PM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctorspecilization`
--

CREATE TABLE `doctorspecilization` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorspecilization`
--

INSERT INTO `doctorspecilization` (`id`, `specilization`, `creationDate`, `updationDate`) VALUES
(1, 'Critical Care medicine', '2016-12-28 06:37:25', '28-02-2019 07:00:06 PM'),
(2, 'General Physician', '2016-12-28 06:38:12', ''),
(3, 'Dermatologist', '2016-12-28 06:38:48', ''),
(4, 'Hematologist', '2016-12-28 06:39:26', '28-02-2019 06:58:43 PM'),
(5, 'pulmonologist', '2016-12-28 06:39:51', '28-02-2019 07:02:03 PM'),
(7, 'Ear-Nose-Throat (Ent) Specialist', '2016-12-28 06:41:18', '');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userip` binary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(6, 1, '', 0x3a3a3100000000000000000000000000, '2017-01-06 07:02:28', '', 1),
(7, 1, 'info@w3gang.com', 0x3a3a3100000000000000000000000000, '2017-01-06 07:04:28', '', 1),
(8, 0, 'admin', 0x3a3a3100000000000000000000000000, '2017-01-06 07:07:41', '06-01-2017 12:38:09 PM', 0),
(9, 1, 'info@w3gang.com', 0x3a3a3100000000000000000000000000, '2017-01-06 07:08:01', '', 1),
(10, 1, 'info@w3gang.com', 0x3a3a3100000000000000000000000000, '2017-01-06 07:10:09', '06-01-2017 12:41:43 PM', 1),
(11, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2017-01-07 07:57:18', '07-01-2017 01:27:34 PM', 1),
(12, 0, 'asdad', 0x3a3a3100000000000000000000000000, '2017-01-07 07:57:44', '', 0),
(13, 0, 'xyz@test.com', 0x3a3a3100000000000000000000000000, '2017-01-07 07:59:43', '', 0),
(14, 5, 'amit12@gmail.com', 0x3a3a3100000000000000000000000000, '2017-01-07 08:00:44', '07-01-2017 01:34:19 PM', 1),
(15, 0, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2019-02-09 16:13:44', '', 0),
(16, 0, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2019-02-09 16:15:48', '', 0),
(17, 0, 'info@w3gang.com', 0x3a3a3100000000000000000000000000, '2019-02-09 16:18:21', '17-02-2019 07:38:47 PM', 0),
(18, 6, 'amani@gmail.com', 0x3a3a3100000000000000000000000000, '2019-02-09 16:19:58', '09-02-2019 09:51:49 PM', 1),
(19, 6, 'amani@gmail.com', 0x3a3a3100000000000000000000000000, '2019-02-15 18:15:38', '16-02-2019 01:22:50 AM', 1),
(20, 6, 'amani@gmail.com', 0x3a3a3100000000000000000000000000, '2019-02-17 13:57:31', '', 1),
(21, 6, 'amani@gmail.com', 0x3a3a3100000000000000000000000000, '2019-02-17 14:17:59', '', 1),
(22, 0, 'marwa@gmail.com', 0x3a3a3100000000000000000000000000, '2019-02-24 02:17:56', '', 0),
(23, 6, 'amani@gmail.com', 0x3a3a3100000000000000000000000000, '2019-02-24 02:18:09', '', 1),
(24, 6, 'amani@gmail.com', 0x3a3a3100000000000000000000000000, '2019-02-24 04:11:51', '', 1),
(25, 6, 'amani@gmail.com', 0x3a3a3100000000000000000000000000, '2019-02-24 17:37:50', '', 1),
(26, 6, 'amani@gmail.com', 0x3a3a3100000000000000000000000000, '2019-02-24 17:40:45', '', 1),
(27, 6, 'amani@gmail.com', 0x3a3a3100000000000000000000000000, '2019-02-27 16:28:37', '', 1),
(28, 6, 'amani@gmail.com', 0x3a3a3100000000000000000000000000, '2019-03-03 09:05:02', '', 1),
(29, 6, 'amani@gmail.com', 0x3a3a3100000000000000000000000000, '2019-03-04 18:27:23', '', 1),
(30, 6, 'amani@gmail.com', 0x3a3a3100000000000000000000000000, '2019-03-11 10:59:58', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `city` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL,
  `result` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `address`, `city`, `gender`, `email`, `password`, `regDate`, `updationDate`, `result`) VALUES
(1, 'Anuj kumar', 'Test address', 'Aligarh', 'Males', 'info@w3gang.com', 'f925916e2754e5e03f75dd58a5733251', '2016-12-26 07:03:09', '30-12-2016 11:27:47 AM', 'positive'),
(3, 'Amit', 'New Delhi', 'New delhi', 'male', 'amit@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 06:36:53', '', 'negative'),
(4, 'Rahul Singh', 'New Delhi', 'New delhi', 'male', 'rahul@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 07:41:14', '', 'positive'),
(5, 'Amit kumar', 'New Delhi India', 'Delhi', 'male', 'amit12@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 08:00:26', '07-01-2017 01:32:12 PM', 'negative'),
(6, 'amani', 'altahlia', 'jeddah', 'female', 'amani@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-02-09 16:19:32', '', 'positive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorslog`
--
ALTER TABLE `doctorslog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `doctorslog`
--
ALTER TABLE `doctorslog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
