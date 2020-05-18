-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 07:03 PM
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
-- Database: `admit1`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'rahul', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(120) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `phone` int(40) NOT NULL,
  `subject` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `phone`, `subject`) VALUES
(0, 'Rahul Biswas', 'BISWASRB2000@GMAIL.COM', 2147483647, 'when is the admission date?'),
(0, 'Anik Roy', 'anik@gmail.com', 654235478, 'Address Please?');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(120) NOT NULL,
  `name` varchar(120) NOT NULL,
  `reg` varchar(120) NOT NULL,
  `mark` varchar(120) NOT NULL,
  `status` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `reg`, `mark`, `status`) VALUES
(1, 'RAHUL BISWAS', 'STS202001', '85', 'Passed'),
(2, 'Shaikat Das', 'STS202002', '78', 'Waiting'),
(3, 'Pronoy Dey', 'STS202003', '96', 'Passed'),
(4, 'Abhinash', 'STS202004', '96', 'Passed'),
(5, 'Anik Roy', 'STS202005', '63', 'Fail'),
(6, 'Ariyan Chowdhury', 'STS202006', '89', 'Passed'),
(7, 'Shivam T', 'STS202007', '80', 'Passed'),
(8, 'Adrijit Dev', 'STS202008', '82', 'Passed'),
(9, 'Somen Sen', 'STS202009', '60', 'Fail'),
(10, 'Sunny A', 'STS2020010', '75', 'Waiting');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
