-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 08:37 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donorline_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `usertype` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `username`, `email`, `usertype`, `password`, `name`) VALUES
(1, 'admin', 'admin@email.com', 'admin', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(320) NOT NULL,
  `location` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(250) NOT NULL DEFAULT 'pending',
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `isCompleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `username`, `name`, `contact`, `email`, `location`, `date`, `status`, `isDeleted`, `isCompleted`) VALUES
(18, 'bessa', 'Bessa', '12345678', 'bessa@email.com', 'Life Line Blood Bank', '2023-05-18 14:20:00', 'approved', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bloodcenter`
--

CREATE TABLE `bloodcenter` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `usertype` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodcenter`
--

INSERT INTO `bloodcenter` (`id`, `name`, `username`, `password`, `usertype`) VALUES
(1, 'Subnational Blood Center For Visayas', 'sbc_visayas', '1234', 'bloodcenter'),
(2, 'VSMMC Blood Services Unit', 'vsmmc', '1234', 'bloodcenter'),
(3, 'Philippine Red Cross Cebu Chapter', 'redcross_cebu', '1234', 'bloodcenter'),
(4, 'Eastern Visayas Regional Blood Center', 'ev_rbc', '1234', 'bloodcenter'),
(5, 'Life Line Blood Bank', 'lifeline', '1234', 'bloodcenter'),
(6, 'Philippine Red Cross Lapu-Lapu Chapter', 'redcross_ll', '1234', 'bloodcenter'),
(7, 'Philippine National Red Cross', 'national_redcross', '1234', 'bloodcenter');

-- --------------------------------------------------------

--
-- Table structure for table `compatible`
--

CREATE TABLE `compatible` (
  `id` int(11) NOT NULL,
  `donor_bloodtype` varchar(250) NOT NULL,
  `recipient_bloodtype` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compatible`
--

INSERT INTO `compatible` (`id`, `donor_bloodtype`, `recipient_bloodtype`) VALUES
(1, 'A+', 'A+'),
(2, 'A+', 'AB+'),
(5, 'A-', 'A+'),
(6, 'A-', 'A-'),
(9, 'A-', 'AB+'),
(10, 'A-', 'AB-'),
(11, 'B+', 'B+'),
(12, 'B+', 'AB+'),
(13, 'B-', 'B+'),
(14, 'B-', 'B-'),
(15, 'B-', 'AB+'),
(16, 'B-', 'AB-'),
(17, 'AB+', 'AB+'),
(18, 'AB-', 'A-'),
(19, 'AB-', 'B-'),
(20, 'AB-', 'AB-'),
(21, 'AB-', 'O-'),
(22, 'O+', 'O+'),
(23, 'O+', 'A+'),
(24, 'O+', 'B+'),
(25, 'O+', 'AB+'),
(26, 'O-', 'A+'),
(27, 'O-', 'A-'),
(28, 'O-', 'B+'),
(29, 'O-', 'B-'),
(30, 'O-', 'O+'),
(31, 'O-', 'O-'),
(32, 'O-', 'AB+'),
(33, 'O-', 'AB-');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `bloodtype` varchar(250) NOT NULL,
  `units` int(11) NOT NULL,
  `purpose` varchar(250) NOT NULL,
  `remarks` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL DEFAULT 'pending',
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `isCompleted` int(11) NOT NULL DEFAULT 0,
  `isSelected` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `username`, `name`, `address`, `bloodtype`, `units`, `purpose`, `remarks`, `status`, `isDeleted`, `isCompleted`, `isSelected`) VALUES
(11, 'hannah', 'Hannah', 'Banilad, Cebu City', 'A+', 0, 'Transfusion', 'Transfusion', 'approved', 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(320) NOT NULL,
  `contactno` int(11) NOT NULL,
  `bloodtype` varchar(250) NOT NULL,
  `usertype` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL DEFAULT 'pending',
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `contactno`, `bloodtype`, `usertype`, `status`, `isDeleted`) VALUES
(22, 'bessa', '1234', 'bessa@email.com', 1234567899, 'O-', 'donor', 'approved', 0),
(23, 'nicole', '1234', 'nicole@email.com', 1234567890, 'AB+', 'donor', 'approved', 0),
(24, 'tamarra', '1234', 'tamarra@email.com', 1233455, 'A-', 'donor', 'pending', 1),
(25, 'hannah', '1234', 'hannah@email.com', 1232345, 'A+', 'recipient', 'approved', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloodcenter`
--
ALTER TABLE `bloodcenter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compatible`
--
ALTER TABLE `compatible`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
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
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `bloodcenter`
--
ALTER TABLE `bloodcenter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `compatible`
--
ALTER TABLE `compatible`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
