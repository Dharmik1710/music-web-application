-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2019 at 08:18 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music`
--

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `music_name` varchar(40) COLLATE utf8_bin NOT NULL,
  `image_file` longblob NOT NULL,
  `audio_file` longblob NOT NULL,
  `artist` varchar(40) COLLATE utf8_bin NOT NULL,
  `keywords` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `music_name` varchar(40) COLLATE utf8_bin NOT NULL,
  `genre` varchar(40) COLLATE utf8_bin NOT NULL,
  `artist_name` varchar(40) COLLATE utf8_bin NOT NULL,
  `user` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `Email` varchar(40) COLLATE utf8_bin NOT NULL,
  `Subs_Plan` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`Email`, `Subs_Plan`) VALUES
('dharmik@gmail.com', 'plan1');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `Username` varchar(20) COLLATE utf8_bin NOT NULL,
  `Email` varchar(30) COLLATE utf8_bin NOT NULL,
  `Password` varchar(15) COLLATE utf8_bin NOT NULL,
  `Date_Of_Birth` date NOT NULL,
  `Gender` varchar(10) COLLATE utf8_bin NOT NULL,
  `Mobile_Number` bigint(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`Username`, `Email`, `Password`, `Date_Of_Birth`, `Gender`, `Mobile_Number`) VALUES
('Dharmik', 'ada@gmail.com', '123131', '1992-07-12', 'Male', 97888213123),
('Dharmik', 'dharmik9785752335@gmail.com', '123', '1999-10-12', 'Male', 9785752335),
('Dharmik', 'dharmik@gmail.com', '1234', '1999-06-12', 'Male', 9785752335),
('Dharmik', 'dharmipoapsk@gmail.com', '12345', '1999-11-12', 'Male', 978575235),
('KeshavSri', 'dsdsd@gmail.com', '1234', '1975-11-03', 'Male', 9824036417);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
