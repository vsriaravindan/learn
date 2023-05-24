-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2021 at 05:54 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usertype` varchar(30) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'admin', '1234', 'admin'),
(2, 'yogesh', 'yogesh', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `diet`
--

CREATE TABLE `diet` (
  `sl_no` int(100) NOT NULL,
  `mem_id` varchar(10) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `day` varchar(100) NOT NULL,
  `breakfast` varchar(100) NOT NULL,
  `lunch` varchar(100) NOT NULL,
  `dinner` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diet`
--

INSERT INTO `diet` (`sl_no`, `mem_id`, `customer_name`, `day`, `breakfast`, `lunch`, `dinner`) VALUES
(1, '1', 'jef', '', 'pushups', 'chicken', ''),
(3, '3', 'Jeffic', '', 'Chicken', 'Nuts', 'Juice'),
(6, '18', 'teriyan', 'Day 1', 'hkashdk', 'sakd', 'ksajdk'),
(7, '19', 'teriyan', 'day 2', '', '', ''),
(8, '25', 'Nandhini', '', 'Chicken', 'Fruits', 'Juice'),
(9, '26', 'Pavithra', 'Day 1', 'Chicken', 'Fruits', 'Juice'),
(12, '18', 'teriyan', '3', 'Chicken', 'Fruits', 'Juice');

-- --------------------------------------------------------

--
-- Table structure for table `doctorapp`
--

CREATE TABLE `doctorapp` (
  `id` int(10) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `docapp` varchar(60) NOT NULL,
  `dob` text NOT NULL,
  `age` int(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `weight` int(3) NOT NULL,
  `height` varchar(5) NOT NULL,
  `bg` varchar(30) NOT NULL,
  `prof` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `prog` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `mr` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorapp`
--

INSERT INTO `doctorapp` (`id`, `fname`, `password`, `email`, `docapp`, `dob`, `age`, `gender`, `weight`, `height`, `bg`, `prof`, `mobile`, `prog`, `image`, `mr`) VALUES
(15, 'net', 'stark', 'netstark@gmail.com', 'Sameer', '2007-02-24', 17, 'Male', 80, '190', 'B +ve', 'King', '9566789666', 'Body Building', '360 logo.jpg', 'MEDICAL RECORD.docx'),
(16, 'anbuu', 'aa', 'netstark@gmail.com', 'wasim', '2021-10-10', 21, 'Female', 22, '170', 'B +ve', 'Student', '9566789661', 'Weight Gain', '', 'MEDICAL RECORD.docx'),
(18, 'teriyan', 'lanister', 'tl@gmail.com', 'wasim', '2021-10-24', 32, 'Male', 78, '158', 'A1+ve', 'King', '9566789661', 'Weight Gain', '', 'MEDICAL RECORD.docx'),
(25, 'Nandhini', 'yogi', 'nandy@gmail.com', 'jeffic', '2021-10-03', 21, 'Female', 65, '160', 'B +ve', 'Student', '9876543210', 'Weight Gain', 'color.jpg', 'MEDICAL RECORD.docx'),
(26, 'Pavithra', 'pavi', 'pavi@gmail.com', 'wasim', '2021-10-06', 20, 'Female', 65, '160', 'O+ve', 'Student', '9566789666', 'Weight Loss', '', 'MEDICAL RECORD.docx'),
(39, 'Jegadeesh', 'hkjk', 'jeffic@gmail.com', 'wasim', '2021-10-13', 22, 'Male', 78, '158', 'O+ve', 'Student', '9566789666', 'Body Building', 'IMG_20210327_134422_155.jpg', 'Jegadeesh_Jegadeesh_DXC Resume.docx');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `salary` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `address`, `salary`) VALUES
(3, 'Martin Blank', '25, Rue Lauriston, Paris', 8000),
(4, 'Jeff', 'Erode', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `file_upload`
--

CREATE TABLE `file_upload` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_upload`
--

INSERT INTO `file_upload` (`id`, `name`, `size`, `downloads`, `username`) VALUES
(3, 'color.jpg', 76371, 1, 'jeffic'),
(7, 'day 8.JPG', 83462, 2, 'net'),
(8, 'day 8.JPG', 83462, 1, 'Nandhini');

-- --------------------------------------------------------

--
-- Table structure for table `logintb`
--

CREATE TABLE `logintb` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintb`
--

INSERT INTO `logintb` (`username`, `password`) VALUES
('admin', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Package_id` varchar(40) NOT NULL,
  `Package_name` varchar(40) NOT NULL,
  `Amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Package_id`, `Package_name`, `Amount`) VALUES
('121', '1 month', 1000),
('122', '4 month', 3000),
('123', '1 Year', 10000),
('124', '(COUPLE) 1 Year', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `paid`
--

CREATE TABLE `paid` (
  `s_no` int(100) NOT NULL,
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `new_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paid`
--

INSERT INTO `paid` (`s_no`, `id`, `name`, `new_name`) VALUES
(1, 2, 'image.jpg', '0710211633616451image.jpg'),
(2, 3, '360 logo.jpg', '0710211633617118360 logo.jpg'),
(15, 17, 'user.jpg', '0710211633620364user.jpg'),
(16, 17, 'user.jpg', '0710211633620379user.jpg'),
(17, 0, '360 logo 2.png', '1110211633939114360 logo 2.png'),
(18, 0, 'bg.jpg', '1110211633939162bg.jpg'),
(19, 0, 'user.jpg', '1110211633939201user.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `sl` int(100) NOT NULL,
  `mem_id` int(10) NOT NULL,
  `amount` int(20) NOT NULL,
  `type` varchar(100) NOT NULL,
  `upi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`sl`, `mem_id`, `amount`, `type`, `upi`) VALUES
(1, 18, 1500, 'cash', ''),
(3, 25, 1000, '', 'nandy@ybl'),
(4, 25, 1000, 'Upi', 'nandy@ybl'),
(5, 18, 2500, 'Upi', 'hhsah@upi');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `Trainer_id` int(20) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `qua` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `cert` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `aadhar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`Trainer_id`, `Name`, `phone`, `email`, `dob`, `qua`, `image`, `cert`, `address`, `gender`, `aadhar`) VALUES
(101, 'Rakesh', '7373519571', 'rakesh@gmail.com', '2021-06-09', 'b.tech IT', '', '', 'Erode', 'Male', '6812978912'),
(102, 'Ravi', '21365789', '', '0000-00-00', '', '', '', '', '', ''),
(103, 'wasim', '123564789', '', '0000-00-00', '', '', '', '', '', ''),
(104, 'Sameer', '12536987', '', '0000-00-00', '', '', '', '', '', ''),
(105, 'jeffic', '7373519878', 'jeffic@gmail.com', '2021-10-02', 'cse', '', '', 'erode', 'Male', '217938123'),
(109, 'naveen', '7373516979', 'naveen@gmail.com', '2021-10-13', 'cse', 'WhatsApp Image 2021-08-14 at 10.12.55.jpeg', 'Gym Abstract.pdf', 'kolkata', 'Male', '5128768761923');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `sl` int(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`sl`, `id`, `name`) VALUES
(19, '3', '3.mp4'),
(20, '18', '#1 Outro .mp4'),
(21, '1', '0.mp4'),
(22, 'teriyan', '#1 Outro .mp4'),
(23, 'net', '#1 Outro .mp4'),
(24, 'net', '3.mp4'),
(25, '25', '3.mp4'),
(26, 'teriyan', '4.mp4'),
(27, 'teriyan', '3.mp4'),
(28, 'teriyan', '3.mp4'),
(29, '18', '3.mp4'),
(30, 'teriyan', '4.mp4'),
(31, 'teriyan', '3.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diet`
--
ALTER TABLE `diet`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `doctorapp`
--
ALTER TABLE `doctorapp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fname` (`fname`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_upload`
--
ALTER TABLE `file_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`Package_id`);

--
-- Indexes for table `paid`
--
ALTER TABLE `paid`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `diet`
--
ALTER TABLE `diet`
  MODIFY `sl_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `doctorapp`
--
ALTER TABLE `doctorapp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `file_upload`
--
ALTER TABLE `file_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `paid`
--
ALTER TABLE `paid`
  MODIFY `s_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `sl` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `sl` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
