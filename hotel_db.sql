-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2023 at 07:15 PM
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
(5, '2023-04-22', '2023-04-29', NULL, NULL, 0, 'Booked'),
(6, '2023-04-21', '2023-04-28', NULL, NULL, 0, 'Booked'),
(7, '2023-04-22', '2023-04-29', NULL, NULL, 0, 'Booked'),
(8, '0000-00-00', '2023-05-22', NULL, NULL, 0, 'Booked');

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
(5, 'dfe', 're', 'et', 25632, 'sa@gmail.com', 'Female', 2, 22, 2, 'et'),
(6, 'mkfm', 'mgghmm', 'mfgn', 1263, 'mmn@gmail.com', 'Female', 23562, 2, 2, 'ffmn'),
(7, 'm m', 'cxm', 'csdm', 526356985632, 'fsd@gmail.com', 'Female', 4589632569, 2, 2, 'sdm'),
(8, 'Rutuja', 'jkd', 'dskfk', 589652365896, 'wjrwji4@gmail.com', 'Female', 4445485425, 2, 2, 'kewihw');

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
(3, 'rutuja', 'bhushan', 'bhandari', 458965236523, 'ds@gmail.com', '', 5896523658, 'dnj', 403, '');

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
(5, 101, 'Standard'),
(8, 101, 'Standard');

-- --------------------------------------------------------

--
-- Table structure for table `room_details`
--

CREATE TABLE `room_details` (
  `room_no` int(3) NOT NULL,
  `room_type` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_details`
--

INSERT INTO `room_details` (`room_no`, `room_type`) VALUES
(101, 'Standard'),
(102, 'Standard'),
(103, 'Standard'),
(104, 'Standard'),
(105, 'Standard'),
(106, 'Standard'),
(201, 'Delux'),
(202, 'Delux'),
(203, 'Delux'),
(204, 'Delux'),
(205, 'Delux'),
(301, 'Double Delux'),
(302, 'Double Delux'),
(303, 'Double Delux'),
(304, 'Double Delux'),
(305, 'Double Delux'),
(401, 'Royal Suite'),
(402, 'Royal Suite'),
(403, 'Royal Suite'),
(404, 'Royal Suite'),
(405, 'Royal Suite');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `billing_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `membership_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
