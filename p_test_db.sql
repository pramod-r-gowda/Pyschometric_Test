-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2020 at 05:57 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p_test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `averages`
--

CREATE TABLE `averages` (
  `id` int(11) NOT NULL,
  `selfEsteem` double NOT NULL,
  `mindfulness` double NOT NULL,
  `openness` double NOT NULL,
  `conscientiousness` double NOT NULL,
  `extraversion` double NOT NULL,
  `agreeableness` double NOT NULL,
  `neuroticism` double NOT NULL,
  `honestyHumility` double NOT NULL,
  `proactivePersonality` double NOT NULL,
  `internalLoc` double NOT NULL,
  `narcissism` double NOT NULL,
  `machiavellianism` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `averages`
--

INSERT INTO `averages` (`id`, `selfEsteem`, `mindfulness`, `openness`, `conscientiousness`, `extraversion`, `agreeableness`, `neuroticism`, `honestyHumility`, `proactivePersonality`, `internalLoc`, `narcissism`, `machiavellianism`) VALUES
(1, 64.411818181818, 18.704545454545, 99.223181818182, 98.833636363636, 99.742727272727, 98.833636363636, 83.632727272727, 64.022727272727, 94.155909090909, 64.541818181818, 94.935454545455, 95.065454545455);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `selfEsteem` double NOT NULL,
  `mindfulness` double NOT NULL,
  `openness` double NOT NULL,
  `conscientiousness` double NOT NULL,
  `extraversion` double NOT NULL,
  `agreeableness` double NOT NULL,
  `neuroticism` double NOT NULL,
  `honestyHumility` double NOT NULL,
  `proactivePersonality` double NOT NULL,
  `internalLoc` double NOT NULL,
  `narcissism` double NOT NULL,
  `machiavellianism` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `selfEsteem`, `mindfulness`, `openness`, `conscientiousness`, `extraversion`, `agreeableness`, `neuroticism`, `honestyHumility`, `proactivePersonality`, `internalLoc`, `narcissism`, `machiavellianism`) VALUES
(1, 65.71, 14.29, 102.86, 102.86, 102.86, 102.86, 85.71, 65.71, 100, 65.71, 100, 100),
(2, 65.71, 14.29, 102.86, 102.86, 102.86, 102.86, 85.71, 65.71, 100, 65.71, 100, 100),
(3, 65.71, 14.29, 102.86, 102.86, 102.86, 102.86, 85.71, 65.71, 100, 65.71, 100, 100),
(4, 65.71, 14.29, 102.86, 102.86, 102.86, 102.86, 85.71, 65.71, 100, 65.71, 100, 100),
(5, 65.71, 14.29, 102.86, 102.86, 102.86, 102.86, 85.71, 65.71, 100, 65.71, 100, 100),
(6, 65.71, 14.29, 102.86, 102.86, 102.86, 102.86, 85.71, 65.71, 100, 65.71, 100, 100),
(7, 65.71, 14.29, 102.86, 102.86, 102.86, 102.86, 85.71, 65.71, 100, 65.71, 100, 100),
(8, 65.71, 14.29, 102.86, 102.86, 102.86, 102.86, 85.71, 65.71, 100, 65.71, 100, 100),
(9, 65.71, 14.29, 102.86, 102.86, 102.86, 102.86, 85.71, 65.71, 100, 65.71, 100, 100),
(10, 65.71, 14.29, 102.86, 102.86, 102.86, 102.86, 85.71, 65.71, 100, 65.71, 100, 100),
(11, 65.71, 14.29, 102.86, 102.86, 102.86, 102.86, 85.71, 65.71, 100, 65.71, 100, 100),
(12, 65.71, 14.29, 102.86, 102.86, 102.86, 102.86, 85.71, 65.71, 100, 65.71, 100, 100),
(13, 65.71, 14.29, 102.86, 102.86, 102.86, 102.86, 85.71, 65.71, 100, 65.71, 100, 100),
(14, 65.71, 14.29, 102.86, 102.86, 102.86, 102.86, 85.71, 65.71, 100, 65.71, 100, 100),
(15, 65.71, 14.29, 102.86, 102.86, 102.86, 102.86, 85.71, 65.71, 100, 65.71, 100, 100),
(16, 65.71, 14.29, 102.86, 102.86, 102.86, 102.86, 85.71, 65.71, 100, 65.71, 100, 100),
(17, 65.71, 14.29, 102.86, 102.86, 102.86, 102.86, 85.71, 65.71, 100, 65.71, 100, 100),
(18, 65.71, 14.29, 102.86, 102.86, 102.86, 102.86, 85.71, 65.71, 100, 65.71, 100, 100),
(19, 65.71, 14.29, 102.86, 102.86, 102.86, 102.86, 85.71, 65.71, 100, 65.71, 100, 100),
(20, 60, 45.71, 68.57, 68.57, 68.57, 68.57, 68.57, 54.29, 51.43, 48.57, 54.29, 54.29),
(21, 60, 45.71, 68.57, 68.57, 68.57, 68.57, 68.57, 54.29, 51.43, 48.57, 54.29, 54.29),
(22, 48.57, 48.57, 91.43, 82.86, 102.86, 82.86, 74.29, 51.43, 68.57, 74.29, 80, 82.86);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
