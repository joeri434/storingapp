-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2022 at 07:32 PM
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
-- Database: `storingapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `meldingen`
--

CREATE TABLE `meldingen` (
  `id` int(11) NOT NULL,
  `attractie` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `capaciteit` int(11) DEFAULT NULL,
  `prioriteit` tinyint(1) NOT NULL DEFAULT 0,
  `melder` varchar(255) NOT NULL,
  `gemeld_op` datetime NOT NULL DEFAULT current_timestamp(),
  `overige_info` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meldingen`
--

INSERT INTO `meldingen` (`id`, `attractie`, `type`, `capaciteit`, `prioriteit`, `melder`, `gemeld_op`, `overige_info`) VALUES
(2, 'Terminator3000', 'achtbaan', 204, 0, 'Joeri', '2020-01-01 00:00:00', 'HOi'),
(3, 'fata ', NULL, 100, 0, 'joeri', '2022-03-17 14:07:24', NULL),
(4, 'baron', 'A', 23, 0, 'joeri', '2022-03-25 11:13:55', 'hghg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meldingen`
--
ALTER TABLE `meldingen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meldingen`
--
ALTER TABLE `meldingen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
