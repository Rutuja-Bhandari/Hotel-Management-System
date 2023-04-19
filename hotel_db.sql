-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2023 at 04:00 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `billing_id` int(6) NOT NULL,
  `arrival_date` date NOT NULL,
  `leaving_date` date DEFAULT NULL,
  `arrival_time` time DEFAULT NULL,
  `leaving_time` time DEFAULT NULL,
  `amount` int(6) DEFAULT 0,
  `Status` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`billing_id`, `arrival_date`, `leaving_date`, `arrival_time`, `leaving_time`, `amount`, `Status`) VALUES
(2, '2023-04-15', '2023-04-21', NULL, NULL, 0, 'Check Out'),
(6, '2023-04-21', '2023-04-28', NULL, NULL, 0, 'Booked'),
(7, '2023-04-22', '2023-04-29', NULL, NULL, 0, 'Booked'),
(8, '0000-00-00', '2023-05-22', NULL, NULL, 0, 'Booked'),
(9, '2023-04-20', '2023-04-21', NULL, NULL, 0, 'Booked'),
(10, '2023-04-20', '2023-04-22', NULL, NULL, 0, 'Booked'),
(11, '2023-04-20', '2023-04-21', NULL, NULL, 0, 'Booked'),
(12, '2023-04-21', '2023-04-24', NULL, NULL, 0, 'Booked'),
(13, '2023-04-28', '2023-04-29', NULL, NULL, 0, 'Booked'),
(14, '2023-04-20', '2023-04-22', NULL, NULL, 0, 'Booked'),
(15, '2023-04-21', '2023-04-29', NULL, NULL, 0, 'Booked'),
(31, '2023-04-14', '2023-04-21', NULL, NULL, 59850, 'Check Out');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(5) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `aadhar` bigint(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `no_of_adult` int(10) NOT NULL,
  `no_of_child` int(10) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `first_name`, `middle_name`, `last_name`, `aadhar`, `email`, `gender`, `phone_no`, `no_of_adult`, `no_of_child`, `address`) VALUES
(2, 'rutuja', 'bhushan', 'bhandari', 523698563256, 'nmbnb@gmail.com', 'Female', 2368956232, 2, 2, 'ghhhbbnh'),
(8, 'Rutuja', 'jkd', 'dskfk', 589652365896, 'wjrwji4@gmail.com', 'Female', 4445485425, 2, 2, 'kewihw'),
(9, '', '', '', 0, 'huhu@gmail.com', '', 0, 0, 0, ''),
(10, 'kjskd', 'asidj', 'kowjjk', 478569856325, 'reett@gmail.com', 'Female', 5896523658, 2, 2, 'fge'),
(29, 'mrmk', 'ftklr', 'rtjo', 985658985656, 'smartrb4@gmail.com', 'Female', 1111111111, 2, 2, 'etkj'),
(31, 'jhj', 'mnmb', 'mmb nbn', 444444444444, 'happy.thoughts.845@gmail.com', 'Female', 8888888888, 2, 2, 'bhgh');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `booking_id` int(11) NOT NULL,
  `extra_bed` varchar(3) NOT NULL DEFAULT 'No',
  `car_parking` varchar(3) DEFAULT 'No',
  `spa` varchar(3) NOT NULL DEFAULT 'No',
  `gym` varchar(3) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`booking_id`, `extra_bed`, `car_parking`, `spa`, `gym`) VALUES
(1, '0', '0', '0', '0'),
(1, '0', '0', '0', '0'),
(0, '0', '2', '3', '0'),
(1, '0', '0', '0', '0'),
(14, '0', '0', '0', '0'),
(20, '0', '1', '0', '1'),
(28, '0', '1', '1', '0'),
(29, '0', '0', '1', '1'),
(31, 'No', 'No', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(2) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `user_name`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `membership_id` int(2) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `aadhar` bigint(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `address` varchar(250) NOT NULL,
  `room_no` int(3) NOT NULL,
  `verified` varchar(3) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`membership_id`, `first_name`, `middle_name`, `last_name`, `aadhar`, `email`, `gender`, `phone_no`, `address`, `room_no`, `verified`) VALUES
(1, 'Rutuja', 'Bhushan', 'Bhandari', 125896545632, 'sjnjb@gmail.com', 'female', 5896562356, 'd mncb ndndnbhsb', 401, 'yes'),
(2, 'r n ', 'sm c', 'skmk', 5896532562, 'mkm@gmail.com', '', 48, 'dmkm', 402, ''),
(3, 'rutuja', 'bhushan', 'bhandari', 458965236523, 'ds@gmail.com', '', 5896523658, 'dnj', 403, ''),
(12, 'dfs', 'dfgdf', 'fd', 568956235698, 'fdh@gmail.com', 'Female', 2568989652, 'fdh', 404, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `membership_record`
--

CREATE TABLE `membership_record` (
  `member_id` int(2) NOT NULL,
  `arrival_date` date NOT NULL,
  `leaving_date` date NOT NULL,
  `room_no` int(11) NOT NULL,
  `status` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `membership_record`
--

INSERT INTO `membership_record` (`member_id`, `arrival_date`, `leaving_date`, `room_no`, `status`) VALUES
(1, '2023-04-13', '2023-04-26', 401, ''),
(2, '2023-04-19', '2023-04-20', 402, 'Check Out');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(6) NOT NULL,
  `room_no` int(3) DEFAULT NULL,
  `room_type` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_no`, `room_type`) VALUES
(2, 101, 'Delux'),
(8, 101, 'Standard'),
(9, 101, 'Standard'),
(10, 108, 'Standard'),
(11, 801, 'Standard'),
(12, 207, 'Standard'),
(13, 208, 'Standard'),
(14, 306, 'Standard'),
(15, 305, 'Standard'),
(31, 101, 'Standard');

-- --------------------------------------------------------

--
-- Table structure for table `room_details`
--

CREATE TABLE `room_details` (
  `room_no` int(3) NOT NULL,
  `room_type` varchar(12) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_details`
--

INSERT INTO `room_details` (`room_no`, `room_type`, `amount`) VALUES
(101, 'Standard', 5000),
(102, 'Standard', 5000),
(103, 'Standard', 5000),
(104, 'Standard', 5000),
(105, 'Standard', 5000),
(201, 'Delux', 7000),
(202, 'Delux', 7000),
(203, 'Delux', 7000),
(204, 'Delux', 7000),
(205, 'Delux', 7000),
(301, 'Double Delux', 10000),
(302, 'Double Delux', 10000),
(303, 'Double Delux', 10000),
(304, 'Double Delux', 10000),
(305, 'Double Delux', 10000),
(401, 'Royal Suite', 0),
(402, 'Royal Suite', 0),
(403, 'Royal Suite', 0),
(404, 'Royal Suite', 0),
(405, 'Royal Suite', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_name` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_name`, `password`) VALUES
('good', 'good1'),
('hi', 'hi123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`billing_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD UNIQUE KEY `aadhar` (`aadhar`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_no` (`phone_no`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`membership_id`),
  ADD UNIQUE KEY `aadhar` (`aadhar`,`email`,`phone_no`,`room_no`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `room_details`
--
ALTER TABLE `room_details`
  ADD PRIMARY KEY (`room_no`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `billing_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `membership_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
