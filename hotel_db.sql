-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 08:52 PM
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
  `amount` int(6) DEFAULT 0,
  `Status` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`billing_id`, `arrival_date`, `leaving_date`, `amount`, `Status`) VALUES
(1, '2023-05-01', '2023-05-02', 0, 'Booked');

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
(1, 'Rutuja', 'Bhushan', 'Bhandari', 352145236895, 'happy.thoughts.845@gmail.com', 'Female', 9563258563, 2, 0, 'Sai Nagr,Pune');

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
(1, 'No', 'Yes', 'Yes', 'No');

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
(1, 'Minal', 'Tushar', 'Chaudhari', 586325965471, 'minal.22110361@viit.ac.in', 'Female', 9652356896, 'Sai Nagar', 403, 'Yes'),
(2, 'Sanika', 'Prashant', 'Bhalerao', 856985621423, 'sanika34@gmail.com', 'Female', 9636412354, 'Rose Merry Society, Pune', 402, 'Yes');

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
(1, '2023-05-01', '2023-05-02', 403, 'Check Out');

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
(1, 103, 'Standard');

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
  `password` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_name`, `password`, `email`) VALUES
('minal', 'minal123', 'rutuja.22110669@viit.ac.in'),
('rutuja', 'rutuja123', 'happy.thoughts.845@gmail.com');

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
  ADD UNIQUE KEY `phone_no` (`phone_no`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`booking_id`);

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
-- Indexes for table `membership_record`
--
ALTER TABLE `membership_record`
  ADD PRIMARY KEY (`member_id`);

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
  MODIFY `billing_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `membership_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
