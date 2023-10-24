-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 02:02 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matrimonial`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(53) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '111111');

-- --------------------------------------------------------

--
-- Table structure for table `cast`
--

CREATE TABLE `cast` (
  `id` int(11) NOT NULL,
  `cast_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cast`
--

INSERT INTO `cast` (`id`, `cast_name`) VALUES
(1, 'baghel'),
(2, 'sen'),
(3, 'patel'),
(4, 'sharma'),
(5, 'dubey'),
(6, 'tiwari'),
(7, 'rajput');

-- --------------------------------------------------------

--
-- Table structure for table `interest`
--

CREATE TABLE `interest` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `interested_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interest`
--

INSERT INTO `interest` (`id`, `userid`, `interested_id`) VALUES
(1, 9, 1),
(2, 9, 6),
(3, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mambership`
--

CREATE TABLE `mambership` (
  `id` int(11) NOT NULL,
  `plan` varchar(1000) NOT NULL,
  `charge` varchar(1000) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `cardnumber` varchar(1000) NOT NULL,
  `card_expairy` varchar(1000) NOT NULL,
  `cvc_code` varchar(1000) NOT NULL,
  `amount` varchar(1000) NOT NULL,
  `userid` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `cardnumber`, `card_expairy`, `cvc_code`, `amount`, `userid`) VALUES
(2, '7458965874589658', '11/6', '159', '300', '9'),
(3, '7458254125852369', '8/2025', '987', '800', '1');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `profile_id` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reister`
--

CREATE TABLE `reister` (
  `id` int(11) NOT NULL,
  `name` varchar(600) NOT NULL,
  `cast` varchar(600) NOT NULL,
  `gender` varchar(600) NOT NULL,
  `age` varchar(600) NOT NULL,
  `dob` varchar(600) NOT NULL,
  `height` varchar(600) NOT NULL,
  `religion` varchar(600) NOT NULL,
  `mobile` varchar(600) NOT NULL,
  `email` varchar(600) NOT NULL,
  `password` varchar(600) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `profession` varchar(1100) DEFAULT NULL,
  `qualification_details` varchar(300) DEFAULT NULL,
  `Hobbies` varchar(600) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `location` varchar(1100) DEFAULT NULL,
  `about` varchar(1100) DEFAULT NULL,
  `mother` varchar(1100) DEFAULT NULL,
  `father` varchar(1100) DEFAULT NULL,
  `income` varchar(1100) DEFAULT NULL,
  `lifestyle` varchar(1100) DEFAULT NULL,
  `language` varchar(1100) DEFAULT NULL,
  `bg` varchar(1100) DEFAULT NULL,
  `marital` varchar(1100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reister`
--

INSERT INTO `reister` (`id`, `name`, `cast`, `gender`, `age`, `dob`, `height`, `religion`, `mobile`, `email`, `password`, `img`, `profession`, `qualification_details`, `Hobbies`, `status`, `location`, `about`, `mother`, `father`, `income`, `lifestyle`, `language`, `bg`, `marital`) VALUES
(1, 'vesu', 'baghel', 'female', '22', '', '5', 'Hindu', '9658745896', 'vesu@gmail.com', '111111', '9b089b384bda36546db7e062fbd54750.jpg', 'aaaaaa', 'aaaaaaaaa', 'aaaaaaa', NULL, 'aaaaaaaa', 'aaaaaaaaaaaaaabbbbbbbbbbbbbbb', 'aaaa', 'aaaaaa', 'aaaaaa', 'aaaaaaaa', 'aaaaaa', 'aaaaaaaaaaa', 'aaaaaaaa'),
(2, 'neha', 'sen', 'female', '21', '', '5', 'Hindu', '9658745896', 'neha@gmail.com', '111111', '75e6f823105433b6cc386eb486ce73d3.jpg', 'aaaaaa', 'aaaaaaaaa', 'aaaaaaa', NULL, 'aaaaaaaa', 'aaaaaaaaaaaaaabbbbbbbbbbbbbbb', 'aaaa', 'aaaaaa', 'aaaaaa', 'aaaaaaaa', 'aaaaaa', 'aaaaaaaaaaa', 'aaaaaaaa'),
(3, 'roshan', 'sharma', 'male', '22', '', '5', 'Hindu', '9658745896', 'roshan@gmail.com', '111111', 'da44f01040f64eee646e49d20ae38a1c.jpg', 'aaaaaa', 'aaaaaaaaa', 'aaaaaaa', NULL, 'aaaaaaaa', 'aaaaaaaaaaaaaabbbbbbbbbbbbbbb', 'aaaa', 'aaaaaa', 'aaaaaa', 'aaaaaaaa', 'aaaaaa', 'aaaaaaaaaaa', 'aaaaaaaa'),
(4, 'shivi', 'dubey', 'female', '35', '', '5', 'Christian', '9658745896', 'shivi@gmail.com', '111111', 'Stylish-Girls-Profile-Pictures-11.jpg', 'aaaaaa', 'aaaaaaaaa', 'aaaaaaa', NULL, 'aaaaaaaa', 'aaaaaaaaaaaaaabbbbbbbbbbbbbbb', 'aaaa', 'aaaaaa', 'aaaaaa', 'aaaaaaaa', 'aaaaaa', 'aaaaaaaaaaa', 'aaaaaaaa'),
(5, 'priya', 'patel', 'female', '22', '', '5', 'Hindu', '9658745896', 'priya@gmail.com', '111111', '6c090f6bdb01fa8e15a6fcd3cd2f6043.jpg', 'aaaaaa', 'aaaaaaaaa', 'aaaaaaa', NULL, 'aaaaaaaa', 'aaaaaaaaaaaaaabbbbbbbbbbbbbbb', 'aaaa', 'aaaaaa', 'aaaaaa', 'aaaaaaaa', 'aaaaaa', 'aaaaaaaaaaa', 'aaaaaaaa'),
(6, 'honey', 'sharma', 'male', '40', '', '5', 'Hindu', '9658745896', 'honey@gmail.com', '111111', 'Emo-Boys-image-emo-boys-36693520-1836-2687.jpg', 'aaaaaa', 'aaaaaaaaa', 'aaaaaaa', NULL, 'aaaaaaaa', 'aaaaaaaaaaaaaabbbbbbbbbbbbbbb', 'aaaa', 'aaaaaa', 'aaaaaa', 'aaaaaaaa', 'aaaaaa', 'aaaaaaaaaaa', 'aaaaaaaa'),
(7, 'vishal', 'sen', 'male', '30', '', '6', 'Hindu', '9658745896', 'vishal@gmail.com', '111111', '00f3baed741806ab1cc74e094b30824b.jpg', 'aaaaaa', 'graduate', 'aaaaaaa', NULL, 'bhopal', 'aaaaaaaaaaaaaabbbbbbbbbbbbbbb', 'aaaa', 'aaaaaa', '20000', 'aaaaaaaa', 'hindi english', 'ab+', 'unmarried'),
(8, 'bittu', 'dubey', 'female', '21', '', '5', 'Hindu', '9658745896', 'bittu@gmail.com', '111111', '20b21e567994cfdb9731a00cbd79bfbc.jpg', 'aaaaaa', 'aaaaaaaaa', 'aaaaaaa', NULL, 'aaaaaaaa', 'aaaaaaabgy', 'preeti', 'rakesh', 'aaaaaa', 'aaaaaaaa', 'aaaaaa', 'aaaaaaaaaaa', 'aaaaaaaa'),
(9, 'anuj', 'baghel', 'male', '36', '06/03/2019', '6 feet', 'Hindu', '7458963258', 'anuj@gmail.com', '111111', '471e2544113344eb543f90506509e81b.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cast`
--
ALTER TABLE `cast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interest`
--
ALTER TABLE `interest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mambership`
--
ALTER TABLE `mambership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reister`
--
ALTER TABLE `reister`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cast`
--
ALTER TABLE `cast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `interest`
--
ALTER TABLE `interest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mambership`
--
ALTER TABLE `mambership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reister`
--
ALTER TABLE `reister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
