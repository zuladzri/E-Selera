-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 07:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-selera`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'ZUL ADZRI', '$2y$10$tIi8kw9dANFhqtHMC4l09esD8v2OKufToLfxaN25akRKI0kWupFHS'),
(3, 'admin', '$2y$10$AiutubFxvTl5j170x9VPLeybprU.h5nqePURUPlamVlZpT1T.Vd4q');

-- --------------------------------------------------------

--
-- Table structure for table `hadir`
--

CREATE TABLE `hadir` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kursus` varchar(255) NOT NULL,
  `tarikh` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hadir`
--

INSERT INTO `hadir` (`id`, `nama`, `kursus`, `tarikh`, `status`) VALUES
(21, 'AIMAN', 'Elektronik DPV', '2024-05-01', 'Available'),
(22, 'SYAFIQ', 'Automotif DLPV', '2024-05-01', 'Available'),
(23, 'ZUL', 'Sistem Komputer DPV', '2024-05-01', 'Available'),
(24, 'NURUL NABILAH BINTI ISMAIL', 'Tvet-i', '2024-05-10', 'Available'),
(25, 'ABDUL MUTALIB BIN AZMAN', 'Elektronik DPV', '2024-05-17', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name_full` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `ndp` char(12) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name_full`, `username`, `ndp`, `password`) VALUES
(9, 'WAN ABDUL AZIZ BIN WAN ZULKIFLI', 'aziz', 'DK11223002', '$2y$10$tk6q5vSAZKRaA4b5CF.iPu944j5cfaGTohZHQWNsrHFqKvot8gwGe'),
(10, 'MOHD ZUL ADZRI BIN AZHA@AZAHAR', 'zul', 'DK11223012', '$2y$10$iJVY7Pd24gg6EFoqgzKSUOIDLUOLkIn4moKUzi2L2DZmD7/qN7Rga'),
(14, 'NURUL NABILAH BINTI ISMAIL', 'nabilah', 'S11124055', '$2y$10$jYzvqRqggjEzAZpPWm7PNOGE6fynDN8HfIo176HUOJSO8kKeHFZzC'),
(15, 'ABDUL MUTALIB BIN AZMAN', 'talib', 'DK11223008', '$2y$10$bImuT6HuPjo6eZ.po4uvfuff4Bzsw7AxcJcNV56KcBSy95xJOUviW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hadir`
--
ALTER TABLE `hadir`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hadir`
--
ALTER TABLE `hadir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
