-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2021 at 09:53 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nids`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(22) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `subject`, `description`, `date`) VALUES
(6, 'hey please come and collect your id', 'sdfdsfdgfdgfdgf', 'Wednesday 25th  August 2021 12:54:43 AM');

-- --------------------------------------------------------

--
-- Table structure for table `issuedid`
--

CREATE TABLE `issuedid` (
  `id` varchar(20) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(67) NOT NULL,
  `issueddate` date NOT NULL,
  `expirydate` date NOT NULL,
  `uid` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issuedid`
--

INSERT INTO `issuedid` (`id`, `firstname`, `lastname`, `issueddate`, `expirydate`, `uid`) VALUES
('ET/2313131434', 'dur', 'd', '2021-09-23', '2022-09-23', 5),
('ET/2313131434', 'kaki', 'name', '2021-09-24', '2022-09-24', 6),
('ET/2313131434', 'din', 'kkk', '2021-09-24', '2022-09-24', 7),
('ET/2313131434', 'dawit', 'hma', '2021-09-25', '2022-09-25', 8),
('ET/2313131434', 'kaki', 'name', '2021-09-25', '2022-09-25', 9),
('ET/2313131434', 'kaki', 'name', '2021-09-25', '2022-09-25', 10);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `regstrationid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `kebele` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `signature` varchar(255) NOT NULL,
  `dates` date DEFAULT current_timestamp(),
  `status` varchar(10) NOT NULL,
  `expiry_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`regstrationid`, `name`, `age`, `address`, `bloodgroup`, `town`, `kebele`, `state`, `nationality`, `occupation`, `gender`, `phonenumber`, `photo`, `signature`, `dates`, `status`, `expiry_date`) VALUES
('ET/858767003/21', 'jjjjj', 23424, 'gojjam', 'm', 'amb', 'jjjjjjjjjj', 'qqqqqq', 'ethiopian', 'software designer', 'Male', '657567', 'photos/400015600438_105710.jpg', 't', '2021-09-26', 'Approved', '2022-09-26');

-- --------------------------------------------------------

--
-- Table structure for table `renewrequest`
--

CREATE TABLE `renewrequest` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `id` varchar(30) NOT NULL,
  `dates` date NOT NULL DEFAULT current_timestamp(),
  `email` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `renewrequest`
--

INSERT INTO `renewrequest` (`firstname`, `lastname`, `address`, `id`, `dates`, `email`) VALUES
('yakobe', 'shewa', '2345/87', 'bulen', '2021-09-21', ''),
('yihenew', 'mengist', '2334/09', 'der', '2021-09-21', ''),
('yihenew', 'mengist', '2334/09', 'der', '2021-09-21', ''),
('abadula', 'gemeda', '232323/09', 'bulen', '2021-09-21', ''),
('yihenew', 'mengist', 'abebe', '4534/767', '2021-09-21', 'yakobesewa@gmail.com'),
('Kebe', 'Beku', 'Nnj', 'ET/501774239', '2021-09-22', 'geti@gmail.com'),
('Jalele', 'Bb', 'Nnj', 'Yjd', '2021-09-22', 'geti@gmail.com'),
('gg', 'jhgjh', '3eeuig', 'ET/2313131434', '2021-09-23', '0946392947@gmail.com'),
('kidan', 'keda', 'ambo', 'ET/2313131434', '2021-09-24', 'kidukenenisa@gmail.com'),
('kidann', 'kedan', 'ambo', 'ET/2313131434', '2021-09-24', 'kidukenenisa@gmail.com'),
('kakilu', 'kakilu', 'kakilu', 'ET/2313131437', '2021-09-24', 'kidukenenisa@gmail.com'),
('kakilu', 'keda', 'amboa', '233333', '2021-09-24', 'kidukenenisa@gmail.com'),
('gg', 'h', 'h', 'h', '2021-09-25', 'chalachew@gmail.com'),
('gg', 'keda', 'dkdkd', 'ET/2313131434', '2021-09-25', 'jacob@gmail.com'),
('kakilu', 'jhgjh', 'dkdkd', 'ET/2313131434', '2021-09-25', 'yihenaw@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(22) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(55) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `fullname`, `gender`, `address`, `email`, `username`, `password`, `role`) VALUES
(12984, 'kaki', 'Male', 'ambo', 'chalachew@gmail.com', 'kidane', 'e10adc3949ba59abbe56e057f20f883e', 'Admin'),
(12986, 'gov', 'Male', 'dgfh', '0946392947@gmail.com', 'gov', 'e10adc3949ba59abbe56e057f20f883e', 'verified user'),
(12987, 'chalachew', 'Male', 'sdodos', 'chale@gmail.com', 'chale', 'e10adc3949ba59abbe56e057f20f883e', 'resident user'),
(12989, 'kaki', 'Male', 'gojjam', 'yihenaw@gmail.com', 'bro', 'e10adc3949ba59abbe56e057f20f883e', 'resident user'),
(12993, 'yihenaw', 'Male   ', 'gojj', '0946392947@gmail.com', 'dave', 'e10adc3949ba59abbe56e057f20f883e', 'kebele officer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issuedid`
--
ALTER TABLE `issuedid`
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD UNIQUE KEY `regstrationid` (`regstrationid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `issuedid`
--
ALTER TABLE `issuedid`
  MODIFY `uid` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12994;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
