-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2021 at 03:11 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `tname` varchar(150) NOT NULL,
  `tcell` varchar(50) NOT NULL,
  `temail` varchar(100) NOT NULL,
  `tbirth` varchar(100) DEFAULT NULL,
  `tgender` varchar(100) NOT NULL,
  `age` varchar(150) NOT NULL,
  `department` varchar(200) NOT NULL,
  `education` varchar(150) NOT NULL,
  `salary` int(6) NOT NULL,
  `availability` varchar(150) NOT NULL,
  `experience` varchar(150) DEFAULT NULL,
  `designation` varchar(150) DEFAULT NULL,
  `join_date` varchar(150) NOT NULL,
  `fname` varchar(150) DEFAULT NULL,
  `mname` varchar(150) DEFAULT NULL,
  `pre_address` varchar(250) DEFAULT NULL,
  `per_address` varchar(250) DEFAULT NULL,
  `tphoto` varchar(250) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trush` tinyint(1) NOT NULL DEFAULT 0,
  `create_at` varchar(150) NOT NULL DEFAULT current_timestamp(),
  `update_at` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `tname`, `tcell`, `temail`, `tbirth`, `tgender`, `age`, `department`, `education`, `salary`, `availability`, `experience`, `designation`, `join_date`, `fname`, `mname`, `pre_address`, `per_address`, `tphoto`, `status`, `trush`, `create_at`, `update_at`) VALUES
(9, 'Zamena', '01850351568746', 'jam@gmail.com', '12/02/2021', 'Female', '11', 'Economics', 'Masters', 98000, 'Full Time', '2 Years', 'Sr. Teacher', '01/02/2021', 'Abdur Rashid', 'Rafia Begum', '155/16 Rajashon, Savara, Dhaka', 'Cumilla', 'teacher01.jpg', 1, 0, '2021-12-17 00:08:35', NULL),
(10, 'Labib', '0185035159814', 'lab@gmail.com', '01/02/2021', 'Male', '8', '', 'Masters', 90000, 'Ful time', '5 years', 'Professor', '01/02/2021', 'Kasem', 'Zamena', '15/168 Banani, Dhaka', 'Savar', 'teacher2.jpg', 1, 0, '2021-12-17 00:20:41', NULL),
(11, 'Razwan Labib', '0185035159814', 'lab@gmail.com', '01/02/2021', 'Male', '8', '', 'Masters', 90000, '', '', '', '01/02/2021', 'Kasem', 'Zamena', '15/168 Banani', 'Savar', 'teacher5.jpg', 1, 0, '2021-12-17 00:41:11', NULL),
(12, 'Labiba', '018503515981', 'lab@gmail.com', '01/02/2021', 'Female', '31', '', 'Masters', 90000, 'Full time', '', '', '01/02/2021', 'Kasem', 'Zamena', '15/168 Banani, Dhaka', 'Savar', 'teacher4.jpg', 1, 0, '2021-12-17 00:42:10', NULL),
(13, 'Labib', '0185035159814', 'lab@gmail.com', '01/02/2021', 'Male', '24', '', 'Masters', 50000, '', '', '', '01/02/2021', 'Kasem', 'Zamena', '15/168 Banani', 'Savar', 'teacher1.jpg', 1, 0, '2021-12-17 00:45:30', NULL),
(15, 'Shammi Akter', '0185313236562', 'sham@gmail.com', '12/12/2021', 'Female', '12', 'Economics', 'Masters', 25000, '', '', '', '12/12/2021', 'Rashid', 'Rafia', 'Cumilla', 'Dhaka', 'teacher6.jpg', 1, 0, '2021-12-17 23:59:57', NULL),
(16, 'Shamim Ahmed', '0185656432131', 'skjbh@gmail.com', '12/12/2010', 'Male', '25', '', 'Masters', 2500, 'Part Time', '12 Years', 'Teacher', '12/12/2101', 'sdcfsd', 'dscsd', 'wedfew', 'wfwef', 'teacher5.jpg', 1, 0, '2021-12-18 00:02:07', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
