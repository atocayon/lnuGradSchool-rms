-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2019 at 01:25 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lnu_grad_school`
--
CREATE DATABASE `lnu_grad_school`; USE `lnu_grad_school`;
-- --------------------------------------------------------

--
-- Table structure for table `enrolled_graduate_programs_tbl`
--

CREATE TABLE `enrolled_graduate_programs_tbl` (
  `id` int(11) NOT NULL,
  `student_tbl_id` varchar(120) NOT NULL,
  `degree_program` varchar(120) NOT NULL,
  `major` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrolled_graduate_programs_tbl`
--

INSERT INTO `enrolled_graduate_programs_tbl` (`id`, `student_tbl_id`, `degree_program`, `major`) VALUES
(1, '20191114114551268', '17', 'qwe'),
(2, '20191114131410131', '6', 'qwerqwerqwer');

-- --------------------------------------------------------

--
-- Table structure for table `graduate_programs`
--

CREATE TABLE `graduate_programs` (
  `id` int(11) NOT NULL,
  `program` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `graduate_programs`
--

INSERT INTO `graduate_programs` (`id`, `program`) VALUES
(1, 'Doctor of Education (Educational Administration)'),
(2, 'Doctor of Arts (Language Teaching)'),
(3, 'Doctor of Philosophy (Social Science Research)'),
(4, 'Doctor of Management (Human Resource Management)'),
(5, 'Master of Arts in Teaching (Language Teaching)'),
(6, 'Master of Arts in Teaching (Reading)'),
(7, 'Master of Arts in Teaching (Elementary Mathematics)'),
(8, 'Master of Arts in Teaching (Natural Science)'),
(9, 'Master of Arts in Teaching (Social Science)'),
(10, 'Master of Arts in Teaching (Filipino)'),
(11, 'Master of Arts in Education (Mathematics)'),
(12, 'Master of Arts in Education (Educational Management)'),
(13, 'Master of Arts (Pre-Elementary Education)'),
(14, 'Master in Physical Education'),
(15, 'Master of Social Work'),
(16, 'Master of Science in Information Technology'),
(17, 'Master in Education (Elementary Mathematics) - non thesis'),
(18, 'Master in Education (Mathematics) - non thesis'),
(19, 'Master of Arts (Special Education) - non thesis'),
(20, 'Master in English - non thesis'),
(21, 'Master in Management - non thesis'),
(22, 'Master in Information Technology - non thesis'),
(23, 'Master of Biology - non thesis');

-- --------------------------------------------------------

--
-- Table structure for table `incase_of_emergency`
--

CREATE TABLE `incase_of_emergency` (
  `id` int(11) NOT NULL,
  `student_tbl_id` varchar(120) NOT NULL,
  `name` varchar(120) NOT NULL,
  `contactNum` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `incase_of_emergency`
--

INSERT INTO `incase_of_emergency` (`id`, `student_tbl_id`, `name`, `contactNum`) VALUES
(1, '20191114114551268', 'qwe', 'qwe'),
(2, '20191114131410131', 'qwer', 'qewtty');

-- --------------------------------------------------------

--
-- Table structure for table `job_records_tbl`
--

CREATE TABLE `job_records_tbl` (
  `id` int(11) NOT NULL,
  `student_tbl_id` varchar(120) NOT NULL,
  `job_title` varchar(120) NOT NULL,
  `agency` varchar(120) NOT NULL,
  `inclusive_date` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_records_tbl`
--

INSERT INTO `job_records_tbl` (`id`, `student_tbl_id`, `job_title`, `agency`, `inclusive_date`) VALUES
(1, '20191114131410131', 'qrwe', 'qerw', '2019-5-27'),
(2, '20191114131410131', 'rqew', 'eqrw', '2019-7-22'),
(3, '20191114131410131', 'qrew', 'qwer', '2019-1-5'),
(4, '20191114131410131', 'qewr', 'qwer', '2019-3-10'),
(5, '20191114131410131', 'qerw', 'ewr', '2018-11-12');

-- --------------------------------------------------------

--
-- Table structure for table `school_records_tbl`
--

CREATE TABLE `school_records_tbl` (
  `id` int(11) NOT NULL,
  `student_tbl_id` varchar(120) NOT NULL,
  `degree_earned` varchar(120) NOT NULL,
  `schoolName` varchar(120) NOT NULL,
  `date_of_graduation` date NOT NULL,
  `major` varchar(120) NOT NULL,
  `honors_received` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_records_tbl`
--

INSERT INTO `school_records_tbl` (`id`, `student_tbl_id`, `degree_earned`, `schoolName`, `date_of_graduation`, `major`, `honors_received`) VALUES
(1, '20191114114551268', 'qwe', 'qwe', '2017-10-17', 'qwe', 'qwe'),
(2, '20191114114551268', 'qwe', 'qwe', '2016-05-25', 'qwe', 'eqw'),
(3, '20191114131410131', 'qwerty', 'qweryy', '2018-04-25', 'qertyuuu', 'qwerqtrytityi'),
(4, '20191114131410131', 'qwerqwttuuu', 'qwerwer', '2018-08-28', 'qwerqwer', 'qwerqwerqwer');

-- --------------------------------------------------------

--
-- Table structure for table `students_tbl`
--

CREATE TABLE `students_tbl` (
  `id` varchar(120) NOT NULL,
  `scholarship` varchar(120) NOT NULL,
  `name` varchar(120) NOT NULL,
  `age` varchar(50) NOT NULL,
  `bdate` date NOT NULL,
  `sex` varchar(11) NOT NULL,
  `religion` varchar(120) NOT NULL,
  `cvlstatus` varchar(120) NOT NULL,
  `bplace` varchar(120) NOT NULL,
  `ctznship` varchar(120) NOT NULL,
  `residence_address` varchar(120) NOT NULL,
  `permanent_address` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `contactNum` varchar(120) NOT NULL,
  `fbAccnt` varchar(120) NOT NULL,
  `financial_src` varchar(120) NOT NULL,
  `statusOfEnrollment` varchar(120) NOT NULL,
  `date_registered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_tbl`
--

INSERT INTO `students_tbl` (`id`, `scholarship`, `name`, `age`, `bdate`, `sex`, `religion`, `cvlstatus`, `bplace`, `ctznship`, `residence_address`, `permanent_address`, `email`, `contactNum`, `fbAccnt`, `financial_src`, `statusOfEnrollment`, `date_registered`) VALUES
('20191114114551268', 'qwe', 'qwe', '25', '2008-03-18', 'male', 'qwe', 'qwe', 'qwe', 'qwe', 'weq', 'qwe', 'qwe@qwe.com', 'qwe', 'qwe', 'scholarship', 'fulltime', '2019-11-14'),
('20191114131410131', 'wqert', 'qwert', '25', '2018-08-20', 'male', 'qwert', 'qwert', 'qwert', 'qwert', 'qwerqwerqwer', 'qwerqwerqwer', 'wert@werty.com', 'asdfgh', 'qwer', 'scholarship', 'parttime', '2019-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(11) NOT NULL,
  `uname` varchar(120) NOT NULL,
  `pword` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `login_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `uname`, `pword`, `email`, `login_status`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enrolled_graduate_programs_tbl`
--
ALTER TABLE `enrolled_graduate_programs_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graduate_programs`
--
ALTER TABLE `graduate_programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incase_of_emergency`
--
ALTER TABLE `incase_of_emergency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_records_tbl`
--
ALTER TABLE `job_records_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_records_tbl`
--
ALTER TABLE `school_records_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enrolled_graduate_programs_tbl`
--
ALTER TABLE `enrolled_graduate_programs_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `graduate_programs`
--
ALTER TABLE `graduate_programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `incase_of_emergency`
--
ALTER TABLE `incase_of_emergency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_records_tbl`
--
ALTER TABLE `job_records_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `school_records_tbl`
--
ALTER TABLE `school_records_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
