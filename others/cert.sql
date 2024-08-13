-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2021 at 08:26 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cert`
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
(5, 'hey please come and collect your id', 'sdfg dgfdjhdfj hjhgfhdhd   sgjkdfgsfjdsjdfg sdfgkjgkureytwe khkdfjghkjhgk hkfgdfhkjhkjiuyouiyrt uyiuidfg udyfgujlkjhlfghds ulhfdgu', 'Thursday 12th  August 2021 10:24:52 PM'),
(6, 'hey please come and collect your id', 'sdfdsfdgfdgfdgf', 'Wednesday 25th  August 2021 12:54:43 AM');

-- --------------------------------------------------------

--
-- Table structure for table `issuedid`
--

CREATE TABLE `issuedid` (
  `id` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `issueddate` date NOT NULL,
  `expirydate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('ET/143390332', 'dulla', 34, 'amu', 'a', 'bullen', 'jkgfdh', 'bole', 'erre', 'mnfvmh', 'Male', '4578683478347', 'photos/WIN_20190523_10_19_34_Pro.jpg', 'verify', '2021-09-22', 'Approved', '2022-09-22'),
('ET/163008741', 'rt', 0, '2021/09/21', 'bullen', 'ethiopia', 'bole', 'erre', '2022/09/21', 'student', 'Male', '45786934756454', 'photos/WIN_20190523_10_19_34_Pro.jpg', '', '0000-00-00', 'Approved', '0000-00-00'),
('ET/177633405', 'boku', 32, '2334/09', 'fdg', 'sheger', 'jhf,d', 'bole', 'sdffds', '4', 'Male', '4546455', 'photos/WIN_20190523_10_19_34_Pro.jpg', '', '2021-09-22', 'pending', '2022-09-22'),
('ET/285726810', 'Nn', 48, 'Jn', 'Hn', 'Hn', 'Hj', 'B', 'Hh', 'Hh', 'Male', '58', 'photos/1632288138240-949472872.jpg', '', '2021-09-22', 'pending', '0000-00-00'),
('ET/290820979', 'abebe', 25, 'oo', 'sheger', '', 'bole', 'sdffds', 'student', 'student', 'Male', '7854', 'photos/WIN_20190523_10_19_58_Pro.jpg', '', '2021-09-22', 'Approved', '0000-00-00'),
('ET/366076100', 'o', 0, '2021/09/22', 'jhgjh', 'ethiopia', 'bole', 'sdffds', '2022/09/22', '4', 'Male', '57634578', 'photos/WIN_20190523_10_19_34_Pro.jpg', '', '0000-00-00', 'Approved', '0000-00-00'),
('ET/434927164', 'Gh', 12, 'O', 'Gh', 'Gb', 'Gh', 'Hh', 'Hh', 'Hh', 'Male', '15555', 'photos/1632288028961-521371899.jpg', '', '2021-09-22', 'pending', '0000-00-00'),
('ET/495239484', 'dulla', 34, 'amu', 'a', 'bullen', 'jkgfdh', 'bole', 'erre', 'mnfvmh', 'Male', '4578683478347', 'photos/WIN_20190523_10_19_34_Pro.jpg', 'kebele', '2021-09-22', 'pending', '2022-09-22'),
('ET/501774239', '343', 443, 'o', 'sheger', 'jhf,d', 'jkdhfg', 'jhgfdkj', 'mnfvmh', 'mnfvmh', 'Male', '5768456', 'photos/WIN_20190523_10_19_58_Pro.jpg', '', '2021-09-22', 'Approved', '0000-00-00'),
('ET/625474806', '2345/87', 134, 'g', 'sheger', 'jhf,d', 'e', 'ytty', 'mnfvmh', 'mnfvmh', 'Male', '5456456', 'photos/WIN_20190523_10_19_34_Pro.jpg', '', '2021-09-22', 'pending', '0000-00-00'),
('ET/785172462', 'dulla', 34, 'amu', 'a', 'bullen', 'jkgfdh', 'bole', 'erre', 'mnfvmh', 'Male', '4578683478347', 'photos/WIN_20190523_10_19_34_Pro.jpg', 'verify', '2021-09-22', 'pending', '2022-09-22'),
('ID: ET/183061182', 'hgdhsf', 0, '2021/09/19', 'gfd', 'nvh', 'nvn', 'ytty', '2022/09/19', 'nghg', 'Male', '87684569458674958674', 'photos/21273768_103129930429069_7473079587229370208_o.jpg', '', '0000-00-00', 'Approved', '0000-00-00'),
('ID: ET/33496740', 'yakobe', 0, 'fgg', 'fg', 'fg', 'fg', 'fg', 'fgfg', 'fg', 'Male', '5546456', 'photos/197267129_2981185128874910_1427703043372191597_n.jpg', '', '0000-00-00', 'Approved', '2021-08-24'),
('ID: ET/65293155', 'fgh', 0, 'jhghj', 'jh', 'kjh', 'jkjhk', 'jhkjh', 'jkhkh', 'jkhk', 'Male', '5464657', 'photos/235144418_193982806096030_991068028556042940_n.jpg', '', '0000-00-00', 'Approved', '2021-08-24'),
('ID: ET/751964871', 'r', 0, '2021/09/07', 'sheger', 'ethiopia', 'bole', 'ethiopian', '2022/09/07', 'student', 'Female', '251909090', 'photos/ethio.jpg', '', '0000-00-00', 'Approved', '0000-00-00');

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
('Jalele', 'Bb', 'Nnj', 'Yjd', '2021-09-22', 'geti@gmail.com');

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
(12956, 'yakob shewa', 'Male', 'arba minch', '', 'abe', '123456', 'Admin'),
(12957, 'yakob shewa', 'Male', 'yakobeshewa@gmail.com', '', 'jack', '123456', 'kebele officer'),
(12958, 'dg', 'Female', 'fgh', '', 'ado', '123456', 'kebele officer'),
(12959, 'jo', 'Male', 'amu', '', 'jo', '123456', 'resident user'),
(12960, 'jo', 'Male', 'amu', '', 'kebele', '123456', 'kebele officer'),
(12961, 'has', 'Male', 'amu', '', 'standard', '123456', 'resident user'),
(12962, 'has', 'Male', 'trfy', '', 'admin', '123456', 'Admin'),
(12963, 'has', 'Male', 'trfy', '', 'resident', '123456', 'resident user'),
(12964, 'has', 'Female', 'f', '', 'verify', '123456', 'Admin'),
(12965, 'jgf', 'Female', 'trfy', '', 'verify', '123456', 'verified user'),
(12967, 'jo', 'Male', 'arbaminch', '', 'jacob', '202cb962ac59075b964b07152d234b70', 'Admin'),
(12968, 'has', 'Male', 'abebe', '', 'kebede', '1234', 'resident user'),
(12969, 'has', 'Male', 'abebe', '', 'jacki', '81dc9bdb52d04dc20036dbd8313ed055', 'resident user'),
(12970, 'jo', 'Male', 'amu', 'yakobeshewa@gmail.com', 'mysite', '123456', 'Admin'),
(12971, 'jo', 'Male', 'amu', 'yakobeshewa@gmail.com', 'mysite', '123456', 'Admin'),
(12972, 'jo', 'Male', 'jhgjhg', 'dave@gmail.com', 'dave', '12345', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12973;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
