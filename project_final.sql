-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2022 at 03:23 PM
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
('limitless', 'admin@admin.com', '$2y$10$hOU8PZLbTonnTm.SeyzHAOxQXcf137VB1aOLmaaoiyra/ZhBpcpaO', '$2y$10$CW/lOoRH3NNBoT5j/ZMmeuAEbuTwQfK6aeWVbWmzvk4biaTl0rSmG', '../img/Screenshot (1).png'),
('pentum college of tech', 'pentum@colleege.com', '$2y$10$915M2cYulsPdovmhazHPNOgR2JsxcHYDJRJdRePJLYXVahb/7Mm8W', '$2y$10$Gx76YMHIpdiiAOJFyE2CkeT4IUff5tlY/NYAq/NC6ZuQPyTW7JXZy', 'img/download.jpg'),
('ss', 'subedisamyg123@gmail.com', '$2y$10$A6RqTAK4ZX9jcfc3BfFHX./WfeJTSiubvXsQoGui022kMC2gBHjfO', '$2y$10$lSOjHpU18MCeRiG8eXcnnOLPbrN5ibKeBWajQc0B.CayscmD8XqAW', '../img/Screenshot (9).png'),
('samyog subedi', 'subedisamyog123@gmail.com', '$2y$10$IgxPOn6YemEtSHt0y8EGmuxErNmlJCTnEXkeLP47L9sXfeWMBLi4e', '$2y$10$JT/.Xk0T9tJ9/F2wqRr.Z.h9pbpMqGdOG.zAu9orm6PrSPv6WVIgu', '../img/Screenshot (9).png');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `regi` int(200) NOT NULL,
  `stdname` varchar(255) NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `issue` date NOT NULL,
  `returned` date NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `regi`, `stdname`, `bookname`, `isbn`, `issue`, `returned`, `time`) VALUES
(1, 78, 'g', 'vb', 'sdf', '0000-00-00', '0000-00-00', '2022-03-24 09:05:28'),
(2, 104, 'dsf', 'sdf', 'd', '2022-03-24', '0000-00-00', '2022-03-24 09:09:36'),
(3, 104, 'gm', 'ghyyu', '245', '2022-03-24', '0000-00-00', '2022-03-24 09:39:24'),
(4, 104, 'ram', 'sad', 'tootk', '2022-03-24', '0000-00-00', '2022-03-24 09:50:12'),
(5, 104, 'samyog', '3r23e', '435435', '2022-03-26', '0000-00-00', '2022-03-26 04:34:17');

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
(19, '[holiday for tommorrow abhdgf bhgyherg hdsfihygr hfhfg]', 'holid', '2022-03-30 12:02:44'),
(21, 'a', 'aa', '2022-03-28 06:23:17'),
(43, 'hi', 'The list below gives you the 1000 most frequently used English words in alphabetical order. Once you\'ve mastered the shorter vocabulary lists, this is the next step. It would take time to learn the entire list from scratch, but you are probably already fa', '2022-03-29 14:31:52'),
(44, 'hi', 'The list below gives you the 1000 most frequently used English words in alphabetical order. Once yove mastered the shorter vocabulary lists, this is the next step. It would take time to learn the entire list from scratch, but you are probably already fami', '2022-03-29 14:32:07');

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
  `image` varchar(255) NOT NULL,
  `org` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`registration`, `name`, `email`, `phone`, `course`, `address`, `dob`, `enrollyear`, `gender`, `image`, `org`, `password`) VALUES
('105', 'ramesh', 'realramesh@gmail.com', '985642178', 'BIM', 'lalitpur', '2022-02-02', '2022-02-04', 'Male', 'img/images (5).jpg', '', '$2y$10$rmIaRn9n9..xtRgPfjh22ui9PVxpJOAlA2UrOpEhC9Y60UsQEa7rK'),
('1230', 'zebra', 'subedisamyog123@gmail.com', '9845687956', 'BCA', 'dhapasi', '2022-03-21', '2022-03-21', 'Male', 'img/pexels-philippe-donn-1133957.jpg', '', ''),
('123456', 'rachana rimal 123', 'rachana@gmail.com', '9845687956', 'BCA', 'dhapasi', '2022-03-27', '2022-03-27', 'Male', '../img/Screenshot (3).png', 'pentum@colleege.com', ''),
('1256', 'ram baran ', 'rambaran@123.com', '9845687956', 'BCA', 'dhapasi', '2022-03-20', '2022-03-20', 'Male', 'img/Screenshot (3).png', '', ''),
('201', 'sam', 'sam1234@gmail.com', '9845687956', 'BCA', 'kathmandu', '2021-08-28', '2022-02-01', 'Male', 'img/istockphoto-1310896133-170667a.jpg', '', ''),
('4564897', 'samyog subedi', 'subedisamyog123@gmail.com', '9845687956', 'BCA', 'dhapasi', '2022-03-30', '2022-03-30', 'Male', '../img/Screenshot (8).png', 'pentum@colleege.com', ''),
('4569', 'samyog subedi', 'subedisamyog123@gmail.com', '9845687956', 'BCA', 'dhapasi', '2022-03-30', '2022-03-30', 'Male', '../img/Screenshot (7).png', 'pentum@colleege.com', ''),
('4578945464', 'rada krishna', 'subedisamyog123@gmail.com', '9845687956', 'BCA', 'dhapasi', '2022-03-30', '2022-03-30', 'Male', '../img/Screenshot (7).png', 'pentum@colleege.com', ''),
('499', 'shrlinnan', 'subedisamyog123@gmail.com', '9845687956', 'BCA', 'dhapasi', '2022-03-31', '2022-03-31', 'Male', '../img/Screenshot (8).png', 'pentum@colleege.com', ''),
('784512', 'samyog subedi', 'subedisamyog123@gmail.com', '9845687956', 'BIT', 'dhapasi', '2022-03-31', '2022-03-31', 'Male', '../img/Screenshot (9).png', 'pentum@colleege.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `public`
--
ALTER TABLE `public`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
