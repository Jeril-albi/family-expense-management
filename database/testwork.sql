-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2022 at 09:06 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `name` varchar(20) NOT NULL,
  `exp_type` varchar(20) NOT NULL,
  `exp_amount` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `head_name` varchar(20) NOT NULL,
  `fam_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`name`, `exp_type`, `exp_amount`, `month`, `head_name`, `fam_name`) VALUES
('jeril', 'food', 150, 'november', 'dad', 'anfield'),
('athul', 'pertol', 1500, 'november', 'dad', 'anfield'),
('deepak', 'football', 850, 'november', 'dad', 'anfield'),
('jithu', 'cricket', 2500, 'november', 'dad', 'anfield'),
('jeril', 'gym', 850, 'november', 'dad', 'anfield'),
('jeril', 'film', 150, 'november', 'dad', 'anfield');

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE `family` (
  `name` varchar(20) NOT NULL,
  `fam_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`name`, `fam_name`, `email`, `password`, `user_type`) VALUES
('jothy', 'sdsa', 'jothy1234', 'jothy@sdsa', 'head'),
('ajimsha', 'bvoc', 'ajimsha345', 'ajimsha567', 'head');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `name` varchar(20) NOT NULL,
  `head_name` varchar(20) NOT NULL,
  `fam_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`name`, `head_name`, `fam_name`, `email`, `password`, `user_type`) VALUES
('Jeril', 'Dad', 'Anfield', 'Jeril', 'jerilalbi', 'member'),
('Athul', 'Dad', 'Anfield', 'Athul', 'sdhjdfdf', 'member'),
('deepak', 'Dad', 'Anfield', 'deepak', 'deepak@123', 'member'),
('jithu', 'Dad', 'Anfield', 'jithu', 'jithu123', 'member');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
