-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2024 at 04:09 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmer_g12`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `auser_id` varchar(6) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`auser_id`, `password`) VALUES
('ronok5', 565656);

-- --------------------------------------------------------

--
-- Table structure for table `agricultural_experts`
--

CREATE TABLE `agricultural_experts` (
  `password` varchar(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `aphone_number` varchar(11) NOT NULL,
  `email_address` varchar(20) NOT NULL,
  `degrees` text NOT NULL,
  `Areas_of_expertise` text NOT NULL,
  `Previous_work_experience_in_agriculture` text NOT NULL,
  `Current_job_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agricultural_experts`
--

INSERT INTO `agricultural_experts` (`password`, `first_name`, `last_name`, `aphone_number`, `email_address`, `degrees`, `Areas_of_expertise`, `Previous_work_experience_in_agriculture`, `Current_job_title`) VALUES
('1', 'e', 'e', ' 1010', 'zdsf', 'DF', ' WD', ' WE', 'WD'),
('451631', 'dfb', 'dhnm ', ' 32', 'fgzvd', 'afhbdf', ' arehedh', ' fdhsdgfh', 'fdhsfghb'),
('202020', 'Ro', 'no', '01711111111', 'we@gg.com', 'MSC', 'SS', 'PP', 'QQ');

-- --------------------------------------------------------

--
-- Table structure for table `agricultural_experts_form`
--

CREATE TABLE `agricultural_experts_form` (
  `aphone_number` varchar(11) NOT NULL,
  `next_crop` text NOT NULL,
  `fertilizer` varchar(11) NOT NULL,
  `chemical` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agricultural_experts_form`
--

INSERT INTO `agricultural_experts_form` (`aphone_number`, `next_crop`, `fertilizer`, `chemical`) VALUES
('01711111111', 'Paddy', 'Urea', 'K-55');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `password` int(8) NOT NULL,
  `fphone_number` varchar(11) NOT NULL,
  `division` text NOT NULL,
  `district` text NOT NULL,
  `sub_district` text NOT NULL,
  `village` text NOT NULL,
  `auser_id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`first_name`, `last_name`, `password`, `fphone_number`, `division`, `district`, `sub_district`, `village`, `auser_id`) VALUES
('nakib', 'uddin', 123123, '01542454551', 'rajshahi', 'rajshahi', 'rajshahi', 'rajshahi', ''),
('Rakib', 'Hasan', 101010, '01715875451', 'Dhaka', 'Dhaka', 'Mirpur', 'Mirpur', 'ronok5');

-- --------------------------------------------------------

--
-- Table structure for table `farmer_form`
--

CREATE TABLE `farmer_form` (
  `land_size` int(20) NOT NULL,
  `land_unit` varchar(11) NOT NULL,
  `last_2years_crop_name` text NOT NULL,
  `fertilizer` text NOT NULL,
  `cheamical` text NOT NULL,
  `soil_structure` varchar(20) NOT NULL,
  `Environmental_Conditions` text NOT NULL,
  `fphone_number` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmer_form`
--

INSERT INTO `farmer_form` (`land_size`, `land_unit`, `last_2years_crop_name`, `fertilizer`, `cheamical`, `soil_structure`, `Environmental_Conditions`, `fphone_number`) VALUES
(11, '742', 'zsf', 'WSDAWDD', 'Dwd', 'WD', 'WD', '01542454551'),
(33, 'WDAR', 'serya', 'zrhaey', 'awetgay', 'wetgfAW', 'Eetg', '01715875451');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`auser_id`);

--
-- Indexes for table `agricultural_experts`
--
ALTER TABLE `agricultural_experts`
  ADD PRIMARY KEY (`aphone_number`);

--
-- Indexes for table `agricultural_experts_form`
--
ALTER TABLE `agricultural_experts_form`
  ADD KEY `fk_aphone_number` (`aphone_number`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`fphone_number`),
  ADD KEY `fk_auser_id` (`auser_id`);

--
-- Indexes for table `farmer_form`
--
ALTER TABLE `farmer_form`
  ADD PRIMARY KEY (`fphone_number`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agricultural_experts_form`
--
ALTER TABLE `agricultural_experts_form`
  ADD CONSTRAINT `fk_aphone_number` FOREIGN KEY (`aphone_number`) REFERENCES `agricultural_experts` (`aphone_number`);

--
-- Constraints for table `farmer_form`
--
ALTER TABLE `farmer_form`
  ADD CONSTRAINT `fk_fphone_number` FOREIGN KEY (`fphone_number`) REFERENCES `farmer` (`fphone_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
