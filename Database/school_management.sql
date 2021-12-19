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
-- Table structure for table `school_management`
--

CREATE TABLE `school_management` (
  `id` int(11) NOT NULL,
  `admission_date` varchar(250) DEFAULT NULL,
  `roll` int(3) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `scell` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birth` varchar(100) DEFAULT NULL,
  `age` int(3) NOT NULL,
  `class` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `fees` int(5) NOT NULL,
  `hobbies` varchar(150) DEFAULT NULL,
  `interested` varchar(150) DEFAULT NULL,
  `pname` varchar(100) NOT NULL,
  `mname` varchar(150) DEFAULT NULL,
  `pcell` varchar(50) NOT NULL,
  `blood_g` varchar(100) DEFAULT NULL,
  `pre_address` text DEFAULT NULL,
  `per_address` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trush` tinyint(1) NOT NULL DEFAULT 0,
  `create_at` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `update_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_management`
--

INSERT INTO `school_management` (`id`, `admission_date`, `roll`, `sname`, `scell`, `email`, `birth`, `age`, `class`, `gender`, `photo`, `fees`, `hobbies`, `interested`, `pname`, `mname`, `pcell`, `blood_g`, `pre_address`, `per_address`, `status`, `trush`, `create_at`, `update_at`) VALUES
(17, '01/01/2022', 210, 'Nasir Uddin Ratan', '017505695565', 'nasir@gmail.com', '2021-12-05', 13, 'Masters', 'Male', 'avatarmale.jpeg', 10000, 'Goragury', 'Moving w/friends ', 'Haque', 'Nasima', '0198797878989', 'B+', 'Nabiabad, Cumilla, Bangladesh', 'Rajashon, Savra, Dhaka', 1, 0, '2021-12-11 21:21:36', NULL),
(19, '01/01/2030', 1, 'Rizwan Farabi Labib', '01850354564600000', 'rizwan@gmail.com', '2021-12-23', 12, 'KG-2', 'Male', 'boy1.jpg', 1250, 'Morning Walk', 'Programing', 'Md. Manik', 'Jamena Akter', '0198556565600000', 'A Negative', '155/16 Rajashon, Savar, Dhaka', 'Cumilla Bangladesh', 1, 0, '2021-12-12 07:36:40', NULL),
(20, '1/1/1000', 4, 'Shamim Hossain', '012578765346', 'sham@gmail.com', '2021-12-14', 14, '12', 'Male', 'teacher10.jpeg', 9000, '', '', 'Rashid', '', '01852325362', 'A+', 'aaaaaaaaaaaa', 'ggggg', 1, 0, '2021-12-12 07:57:53', NULL),
(21, '', 1, 'Tina', '01703-222079', 'Labib@gmail.com', '2010-07-07', 12, '4', 'Female', 'girls1.jpg', 10000, 'sdc', 'scdv', 'fdsgf', 'dfbgdf', '', 'sdv', 'Bariasal', 'Nowakhali', 1, 0, '2021-12-12 08:10:27', NULL),
(23, NULL, 1, 'Labib', '01557487367', 'Labib@gmail.com', '2014-07-20', 7, 'KG-1', 'Male', 'photo-4.jpg', 10000000, NULL, NULL, 'xerfeyr', NULL, '01850-351598', 'A+', '155/50', NULL, 1, 0, '2021-12-12 09:34:14', NULL),
(24, '01/01/2022', 1, 'Zamena Akter Jamie', '01856564561', 'jami@gmail.com', '1994-07-19', 14, '10', 'Female', 'woman-crop.jpg', 50300, 'Swimming ', 'Computer, Reading', 'Rashid', 'Rafia', '01985644545', 'A+', '155/16 Rajashon, Savar, Dhaka', 'Cumilla', 1, 0, '2021-12-12 18:58:04', NULL),
(26, '02/02/2021', 30, 'Rizwan Farabi Labib', '018503545646', 'rizwan@gmail.com', '2021-12-23', 8, 'KG-3', 'Male', 'boy5.jpg', 1250, 'Traveling', 'Programing', 'Md. Manik', 'Zamena Akter Jamie', '01985565656', 'A Negative', '155/16', 'Cumilla', 1, 0, '2021-12-12 20:51:59', NULL),
(28, NULL, 12, 'Kasem', '018536255146', 'na@gmail.com', '2021-12-14', 12, '2', '', 'boy1.jpg', 2222, NULL, NULL, 'Haque', NULL, '01856565546', 'A', 'Cumilla', NULL, 1, 0, '2021-12-12 20:53:31', NULL),
(33, '12/12/2022', 120, 'Esha', '0156454545454', 'esha@gmail.com', '2021-12-16', 14, '9', 'Female', 'girls5.jpg', 8000, 'Swimming', 'Computer', 'Mostafa', 'Nargish', '0185656464564', 'Q', 'Uttra', 'gdfg', 1, 0, '2021-12-15 00:45:48', NULL),
(46, '12/12/2021', 1111, 'Ratan Hamzah', '01859999999', 'ratannn@gmail.com', '2021-12-13', 6, '11', 'Male', 'boy4.jpg', 1200000, 'Walking', 'Roaming', 'Samsul Haque', 'Nasima Begum', '0158641356', 'A-', 'Banani, Dhaka', 'Cumilla', 1, 0, '2021-12-16 20:50:13', NULL),
(47, NULL, 7, 'Jamie', '01368875368', ' Jamie@gmail.com', '1994-08-19,', 14, '10', 'Female', 'woman-crop.jpg', 11100, 'Read a Book', 'Fight', 'zfuudst', 'gf dyhs', '', 'C+', '1100/800', NULL, 1, 0, '2021-12-18 10:22:24', NULL),
(48, '12/12/2021', 101, 'Jamal Hossain', '01899999999999', ' jamalkhan@gmail.com', '2021-11-09', 9, '12', 'Male', 'teacher5.jpg', 99999, 'Codinging', 'Cookinging', 'Abdulah Al Mamun', 'dfghfhg', '0199888888888', 'AB-', 'Barisal', 'Feni', 1, 0, '2021-12-18 18:16:55', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `school_management`
--
ALTER TABLE `school_management`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `school_management`
--
ALTER TABLE `school_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
