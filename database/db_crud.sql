-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2021 at 05:14 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `student_number` varchar(20) NOT NULL,
  `course` varchar(250) NOT NULL,
  `year_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `name`, `student_number`, `course`, `year_level`) VALUES
(8, 'Eren Yeager', '2018-00001-TG-0', 'Bachelor of Science in Mechanical Engineering (BSME)', '2nd Year'),
(9, 'Mikasa Ackerman', '2018-00002-TG-0', 'Bachelor of Science in Information Technology (BSIT)', '3rd Year'),
(10, 'Armin Arlert', '2018-00003-TG-0', 'Bachelor of Science in Electronics Engineering (BSECE)', '4th Year'),
(11, 'Jean Kirstein', '2018-00004-TG-0', 'Bachelor of Science in Business Administration - Marketing Management (BSBA-MM)', '1st Year'),
(12, 'Sasha Braus', '2018-00005-TG-0', 'Bachelor of Science in Accountancy (BSA)', '3rd Year'),
(13, 'Connie Springer ', '2018-00006-TG-0', 'Bachelor of Science in Office Administration (BSOA)', '3rd Year');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
