-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2023 at 11:11 PM
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
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlist`
--

CREATE TABLE `adminlist` (
  `username` varchar(99) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlist`
--

INSERT INTO `adminlist` (`username`, `password`) VALUES
('admin', '1234'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `room_acc`
--

CREATE TABLE `room_acc` (
  `name` varchar(99) NOT NULL,
  `roomno` double NOT NULL,
  `bedno` double NOT NULL,
  `monthly` double NOT NULL,
  `startdate` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_acc`
--

INSERT INTO `room_acc` (`name`, `roomno`, `bedno`, `monthly`, `startdate`) VALUES
('Meka', 23, 5, 46464, '2023-01-25'),
('Jv', 2, 12, 201, '2023-01-28'),
('Elmer', 2, 1, 150.5, '2023-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `tenant_acc`
--

CREATE TABLE `tenant_acc` (
  `username` varchar(99) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `password` varchar(16) NOT NULL,
  `conNum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tenant_acc`
--

INSERT INTO `tenant_acc` (`username`, `firstname`, `lastname`, `password`, `conNum`) VALUES
('asdw', 'asdw', 'asdw', 'asdwa', 1213),
('asad', 'asd', 'asdwas', '123', 123),
('asdw', 'asdwa', 'awdas', 'awdas', 123123),
('asdw', 'adwas', 'awdas', 'awdsa', 0),
('asdw', 'asdwa', 'asd', 'asdw', 0),
('a', 'a', 'a', 'a', 0),
('asd', 'asd', 'as', 'a', 0),
('asd', 'as', 'a', 'a', 0),
('asd', 'asd', 'asd', 'asd', 0),
('123', 'asdwa', 'asdwa', 'asdw', 0),
('123', 'asdw', 'adwa', 'awd', 12312),
('123', '13', '123', '123', 123),
('12', '123', '123', '123', 123),
('AS', 'as', 'AS', 'as', 0),
('asd', 'asd', 'asd', 'asd', 123),
('asd', '2123', 'asd', 'awd', 123),
('asd', '123', 'asdw', 'asd', 123),
('ad', '312', 's', 'as', 123),
('a', '123', 'a', '1a', 123),
('asd', '123', 'qd', 'asd', 12),
('asd', '123', 'ajd', 'ad', 123),
('asd', '123', 'jkahd', 'asdj', 0),
('jhg', '131', 'jhd', 'jhasd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `utility_bills`
--

CREATE TABLE `utility_bills` (
  `name` varchar(99) NOT NULL,
  `water` double NOT NULL,
  `electricity` double NOT NULL,
  `rate` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utility_bills`
--

INSERT INTO `utility_bills` (`name`, `water`, `electricity`, `rate`) VALUES
('asd', 123, 123, 123),
('Jv', 23, 13, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
