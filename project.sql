-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 03:03 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email`, `password`, `cpassword`, `image`) VALUES
('pentum college of tech', 'pentum@colleege.com', '$2y$10$915M2cYulsPdovmhazHPNOgR2JsxcHYDJRJdRePJLYXVahb/7Mm8W', '$2y$10$Gx76YMHIpdiiAOJFyE2CkeT4IUff5tlY/NYAq/NC6ZuQPyTW7JXZy', 'img/download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `description`, `time`) VALUES
(17, 'No holiday', 'college remains open in 1st jan.', '2022-02-28 13:56:21');

-- --------------------------------------------------------

--
-- Table structure for table `public`
--

CREATE TABLE `public` (
  `sn` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `registration` varchar(255) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `enrollyear` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`registration`, `name`, `email`, `phone`, `course`, `address`, `dob`, `enrollyear`, `gender`, `image`) VALUES
('101', 'rita', 'rita@thapa.com', '9845687956', 'BCA', 'dhapasi', '2022-02-28', '2022-02-01', 'Female', 'img/download (1).jpg'),
('102', 'virat', 'mevitat@gmail.com', '1278956625', 'Bsc.CSIT', 'pok', '2022-02-09', '2022-01-28', 'Male', 'img/images (1).jpg'),
('103', 'savita', 'savitapari@gmail.com', '6985123458', 'Bsc.CSIT', 'jhapa', '2021-10-28', '2022-02-03', 'Female', 'img/images (2).jpg'),
('104', 'pari', 'papakipari@gmail.com', '9856247562', 'BIT', 'mustang', '2022-02-03', '2021-11-25', 'Female', 'img/images (4).jpg'),
('105', 'ramesh', 'realramesh@gmail.com', '985642178', 'BIM', 'lalitpur', '2022-02-02', '2022-02-04', 'Male', 'img/images (5).jpg'),
('201', 'sam', 'sam1234@gmail.com', '9845687956', 'BCA', 'kathmandu', '2021-08-28', '2022-02-01', 'Male', 'img/istockphoto-1310896133-170667a.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `public`
--
ALTER TABLE `public`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`registration`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `public`
--
ALTER TABLE `public`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
