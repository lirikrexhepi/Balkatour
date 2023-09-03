-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2023 at 08:40 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `balkatour`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` bigint(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hotel_id` bigint(20) NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` int(11) NOT NULL,
  ` status` enum('booked','cancelled','completed') DEFAULT 'booked'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `state`, `city`) VALUES
(1, 1, 'Prishtine'),
(2, 1, 'Prizren'),
(3, 1, 'Pej'),
(4, 1, 'Podujeve'),
(9, 2, 'Tirane'),
(10, 2, 'Shkoder');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `destination_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `state` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `image_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotel_id` bigint(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `phone` varchar(25) NOT NULL,
  `rooms` int(11) NOT NULL,
  `beds` int(11) NOT NULL,
  `place_offers_id` bigint(20) NOT NULL,
  `image_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` bigint(20) NOT NULL,
  `image_1` varchar(255) DEFAULT NULL,
  `image_2` varchar(255) DEFAULT NULL,
  `image_3` varchar(255) DEFAULT NULL,
  `image_4` varchar(255) DEFAULT NULL,
  `image_5` varchar(255) DEFAULT NULL,
  `image_6` varchar(255) DEFAULT NULL,
  `image_7` varchar(255) DEFAULT NULL,
  `image_8` varchar(255) DEFAULT NULL,
  `image_9` varchar(255) DEFAULT NULL,
  `image_10` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `place_offers`
--

CREATE TABLE `place_offers` (
  `place_offers_id` bigint(20) NOT NULL,
  `wifi` tinyint(1) NOT NULL,
  `parking` tinyint(1) NOT NULL,
  `heating` tinyint(1) NOT NULL,
  `tv` tinyint(1) NOT NULL,
  `lightning_proof` tinyint(1) NOT NULL,
  `printer` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`) VALUES
(1, 'Kosova'),
(2, 'Albania');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userType` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `state` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL,
  `registered` datetime NOT NULL DEFAULT current_timestamp(),
  `verification_code` int(6) NOT NULL,
  `verified` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userType`, `fullName`, `gender`, `birthday`, `email`, `phone`, `state`, `city`, `username`, `password`, `registered`, `verification_code`, `verified`) VALUES
(21, 1, 'Leart Ramadani', 'Male', '2000-01-01', 'leart.ramadani06@gmail.com', '+38344525144', 1, 1, 'leart', '$2y$10$De5V0gfxMVsptgcmJ/NixeZDUR3Qva5snxiJ.r1yKYfH2nLW9lHAC', '2023-09-01 13:44:14', 0, 1),
(22, 1, 'palidhje', 'Male', '2000-01-01', 'palidhje@gmail.com', '+38349587412', 2, 9, 'paldihje', '$2y$10$fKrMPuWj3jOsNMGzyEIGYOqcUUI5HJEbDWL..yxknZY0P9.3LmAZq', '2023-09-01 15:20:41', 0, 1),
(23, 1, 'paldij', 'Female', '2000-01-01', 'palidhjeee@gmail.com', '+38345123123', 1, 3, 'palidhej', '$2y$10$vDdoruw7CkBCp7KHdXg1wO.XwEkkizKjf680dlwuxo47hINgklcve', '2023-09-03 19:32:43', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usertypes`
--

CREATE TABLE `usertypes` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertypes`
--

INSERT INTO `usertypes` (`id`, `type`) VALUES
(1, 'user'),
(2, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `hotel_id` (`hotel_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `state` (`state`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`destination_id`),
  ADD KEY `image_id` (`image_id`),
  ADD KEY `state` (`state`),
  ADD KEY `city` (`city`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotel_id`),
  ADD KEY `image_id` (`image_id`),
  ADD KEY `state` (`state`),
  ADD KEY `city` (`city`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `place_offers_id` (`place_offers_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `place_offers`
--
ALTER TABLE `place_offers`
  ADD PRIMARY KEY (`place_offers_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userType` (`userType`),
  ADD KEY `state` (`state`),
  ADD KEY `city` (`city`);

--
-- Indexes for table `usertypes`
--
ALTER TABLE `usertypes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `destination_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hotel_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `usertypes`
--
ALTER TABLE `usertypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`hotel_id`) REFERENCES `hotel` (`hotel_id`);

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`state`) REFERENCES `states` (`id`);

--
-- Constraints for table `destination`
--
ALTER TABLE `destination`
  ADD CONSTRAINT `destination_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `images` (`image_id`),
  ADD CONSTRAINT `destination_ibfk_2` FOREIGN KEY (`state`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `destination_ibfk_3` FOREIGN KEY (`city`) REFERENCES `city` (`id`),
  ADD CONSTRAINT `destination_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `hotel_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `images` (`image_id`),
  ADD CONSTRAINT `hotel_ibfk_2` FOREIGN KEY (`state`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `hotel_ibfk_3` FOREIGN KEY (`city`) REFERENCES `city` (`id`),
  ADD CONSTRAINT `hotel_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `hotel_ibfk_5` FOREIGN KEY (`place_offers_id`) REFERENCES `place_offers` (`place_offers_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`userType`) REFERENCES `usertypes` (`id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`state`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`city`) REFERENCES `city` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
