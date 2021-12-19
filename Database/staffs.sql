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
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(11) NOT NULL,
  `st_name` varchar(200) NOT NULL,
  `st_cell` varchar(100) NOT NULL,
  `st_email` varchar(150) NOT NULL,
  `st_birth` varchar(150) NOT NULL,
  `st_gender` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `department` varchar(150) DEFAULT NULL,
  `education` varchar(150) NOT NULL,
  `salary` int(5) NOT NULL,
  `availability` varchar(150) DEFAULT NULL,
  `experience` varchar(200) DEFAULT NULL,
  `designation` varchar(150) DEFAULT NULL,
  `join_date` varchar(150) NOT NULL,
  `fname` varchar(200) DEFAULT NULL,
  `mname` varchar(200) NOT NULL,
  `pre_location` varchar(250) NOT NULL,
  `per_location` varchar(250) DEFAULT NULL,
  `st_photo` varchar(280) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trush` tinyint(1) NOT NULL DEFAULT 0,
  `create_at` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `update_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `st_name`, `st_cell`, `st_email`, `st_birth`, `st_gender`, `age`, `department`, `education`, `salary`, `availability`, `experience`, `designation`, `join_date`, `fname`, `mname`, `pre_location`, `per_location`, `st_photo`, `status`, `trush`, `create_at`, `update_at`) VALUES
(4, 'Razwan Islam Labib', '0185036253625', 'raz@gmail.com', '07/20/2014', 'Male', 8, '', 'Masters', 45000, 'Full Time', '5 Years', 'Clark', '02/02/2020', 'Manik', 'Jamena Akter Jamie', 'House-15, Road-02/A, Sector-14/B, Gulshan, Dhaka, Bangladesh', 'Chandina, Cumilla, Bangladesh', 'teacher2.jpg', 1, 0, '2021-12-18 00:42:06', NULL),
(7, 'Zamena', '0185054456456', 'ak@gamil.com', '12/12/2020', 'Female', 25, '', 'Mastres', 70000, '', '', '', '12/12/2222', 'Rashid', 'Rafia', 'Dhaka', 'Cumilla', 'teacher01.jpg', 1, 0, '2021-12-18 00:50:50', NULL),
(8, 'Zamena Akter Jamie', '0185034685454', 'ak@gmail.com', '12/12/2020', 'Female', 25, '', 'Masters', 85000, '', '', '', '12/12/2022', 'Abdur Rashid', 'Rafia Begum', '155/748, Rajashon, Savar, Dhaka', 'Cumilla', 'teacher4.jpg', 1, 0, '2021-12-18 16:03:24', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
