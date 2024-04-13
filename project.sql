-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 04:04 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(300) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `email_id` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `name` varchar(300) DEFAULT NULL,
  `email_id` varchar(300) DEFAULT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`name`, `email_id`, `message`) VALUES
('kajal yadav', 'yadavkajal12321@gmail.com', 'hlo');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `s_no` int(200) NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `contact_number` varchar(300) NOT NULL,
  `email_id` varchar(300) DEFAULT NULL,
  `city` varchar(300) NOT NULL,
  `DOB` varchar(300) NOT NULL,
  `state` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`s_no`, `name`, `password`, `contact_number`, `email_id`, `city`, `DOB`, `state`, `address`) VALUES
(5, 'Krish', '3017', '9877002134', 'krish@gmail.com', 'Sangrur', '2021-07-30', 'punjab', 'IAL'),
(6, 'Kajal yadav ', '321', '098765409876', 'kaju6434@gmail.com', 'Sangrur', '2021-10-17', 'punjab', 'IAL Fsctory');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `s_no` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
