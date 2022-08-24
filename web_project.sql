-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2022 at 05:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_registration`
--

CREATE TABLE `admin_registration` (
  `id` int(100) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `age` int(100) NOT NULL,
  `gender` text NOT NULL,
  `mob_no` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `file_upload` varchar(100) NOT NULL,
  `admin_name` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_registration`
--

INSERT INTO `admin_registration` (`id`, `fname`, `lname`, `age`, `gender`, `mob_no`, `email`, `file_upload`, `admin_name`, `password`, `confirm_password`) VALUES
(50, 'Rabbi', 'Islam Sajid', 22, 'Male', 1968840732, 'rabbi@gmail.com', 'profiledp.jpg', 'Sajid', 'Akmch067**88', 'Abcd067**88'),
(52, 'MD.SHAHZAD HUSSAIN', 'RAYIED', 22, 'Male', 1968840732, 'rayied@admin.com', 'person.jpg', 'Rayied', 'Akmch067**1', 'Abcd067**11'),
(53, 'Tamimul', 'Ahmed', 22, 'Male', 2147483647, 'tamim@admin.com', 'person.jpg', 'Tamim', 'Akmch067**22', 'Abcd067**22'),
(54, 'Mahafuj', 'Ahmed', 22, 'Male', 1968840732, 'ahmed@gmail.com', 'AC OEL.png', 'Mahfuj', 'Akmch067**1', 'Abcd067**77');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `email` varchar(50) NOT NULL,
  `movie` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `vanue` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`email`, `movie`, `date`, `vanue`) VALUES
('email@gmail.com', 'Hawa', '2022-08-11', 'Simanto Shambhar');

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `hallname` varchar(50) NOT NULL,
  `schedule` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`hallname`, `schedule`, `status`) VALUES
('', '12-2 pm', 'new'),
('', '2-5 pm', 'new'),
('', '2-4 pm', 'new'),
('', '2-5 pm', 'new'),
('', '', ''),
('shugondha', '2-5 pm', 'new'),
('shugondha', '12-2 pm', 'new'),
('tridhak', '2-5 pm', 'new'),
('sony', '2-4 pm', 'new'),
('traverse', '12-2 pm', 'new'),
('jamuna', '1-3 pm', 'new'),
('Dhaka hall', '2pm', 'filled');

-- --------------------------------------------------------

--
-- Table structure for table `manager_reg`
--

CREATE TABLE `manager_reg` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `num` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `file_upload` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager_reg`
--

INSERT INTO `manager_reg` (`fname`, `lname`, `age`, `gender`, `num`, `email`, `file_upload`, `username`, `password`, `confirm_password`) VALUES
('asif', 'zaman', 25, 'Male', 1322458288, 'asif@gmail.com', 'IMG-20220812-WA0002(1) (1).jpg', 'asif', '12345678', '12345678'),
('Hafiza', 'Mustary', 34, 'Female', 1322458288, 'hafiza@gmail.com', 'IMG-20220812-WA0002(1).jpg', 'Hafiza', '12345678', '12345678'),
('MD.SHAHZAD HUSSAIN', 'RAYIED', 22, 'Male', 1968840732, 'hussainrayied9@gmail.com', 'life of.jpg', 'Rayied', 'Akmch067**2', 'Akmch067**2'),
('Imtiaz', 'Rahman', 22, 'Male', 0, 'imtiazrahman@gmail.com', '', 'Imtiaz', 'Akmch067**1', 'Akmch067**1'),
('jubair', 'Rahman', 22, 'Male', 1322458288, 'jubair@gmail.com', '298700494_1772073279825016_4429079962686503624_n.j', 'jubair', '12345678', '12345678'),
('KEVIN f', 'sloan', 34, 'Male', 2147483647, 'kevin@marssociety.org', 'IMG-20220812-WA0002(1) (1).jpg', 'kevin', '12345678', '12345678'),
('Rafiq', 'Rahman', 34, 'Male', 1322458288, 'rafiq@gmail.com', '297256780_731901818105091_2325922501908314059_n.jp', 'Rafiq', '123456789', '123456789'),
('raidah', 'rahman', 18, 'Female', 1552315739, 'raidah@gmail.com', '297256780_731901818105091_2325922501908314059_n.jp', 'Raidah', '12345678', '12345678'),
('rakin', 'haque', 23, 'Female', 2147483647, 'rakin@gmail.com', 'IMG-20220812-WA0002(1) (1).jpg', 'Rakin', '12345678', '12345678'),
('rudaibah', 'rahman', 17, 'Female', 1552315739, 'rudai@gmail.com', 'IMG-20220812-WA0002(1).jpg', 'rudaibah', '123456789', '123456789'),
('Tahira ', 'banu', 23, 'Female', 1322458288, 'tahira@gmail.com', 'IMG-20220812-WA0002(1) (1).jpg', 'Tahira', '12345678', '12345678'),
('tasmin ', 'jahan', 22, 'Female', 2147483647, 'tasmin@gmail.com', 'Screenshot (480).png', 'tasmin', '12345678', '12345678'),
('Rubaba', 'Rahman', 24, 'Female', 1322458288, 'trubaba499@gmail.com', 'IMG-20220812-WA0002(1) (1).jpg', 'RUBABA', '12345678', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `movie_detail`
--

CREATE TABLE `movie_detail` (
  `Movie_ID` int(11) NOT NULL,
  `Movie_name` varchar(100) NOT NULL,
  `Movie_time` varchar(100) NOT NULL,
  `Movie_hall` varchar(100) NOT NULL,
  `Movie_picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_detail`
--

INSERT INTO `movie_detail` (`Movie_ID`, `Movie_name`, `Movie_time`, `Movie_hall`, `Movie_picture`) VALUES
(10, 'sgcgs', '1pm', 'Y', 'am.jpg'),
(11, 'Avatar 1', '4pm', 'Z', 'avengers.jpg'),
(13, 'Snow1', '3PM', 'X', 'snow1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `noticedb`
--

CREATE TABLE `noticedb` (
  `Serial` int(100) NOT NULL,
  `Notice` varchar(100) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`fname`, `lname`, `gender`, `mob`, `email`, `address`, `password`) VALUES
('angela', 'magdalene', 'female', '01323123333', 'angela@gmail.com', 'puran dhaka', 'angela1234'),
('Asif', 'Eram', 'male', '01615972128', 'email@gmail.com', 'Gazipur', 'email1234'),
('Rayied', 'Hussain', 'male', '01615972128', 'hussainrayied99999@gmail.com', 'Gazipur', 'rayied12'),
('M', 'V', 'male', '12345678901', 'mv@gmail.com', 'Gazipur', 'asif1234'),
('Romona', 'Magdalene', 'male', '01615972128', 'r@gmail.com', 'Gazipur', 'xxx12345');

-- --------------------------------------------------------

--
-- Table structure for table `seller_reg`
--

CREATE TABLE `seller_reg` (
  `Seller_fname` varchar(100) NOT NULL,
  `Seller_lname` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `Seller_name` varchar(100) NOT NULL,
  `Seller_password` varchar(100) NOT NULL,
  `Seller_Conpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller_reg`
--

INSERT INTO `seller_reg` (`Seller_fname`, `Seller_lname`, `Gender`, `address`, `email`, `picture`, `Seller_name`, `Seller_password`, `Seller_Conpassword`) VALUES
('Alan', 'Sarkar', 'Male', '42/1 punch vhai gath lane Dholaikhal', 'sarkarmagdalene3@gmail.com', 'avengers.jpg', 'Alan Jer', 'Angela123@', 'Angela123@'),
('Cathy', 'Borua', 'Female', '42/1 punch vhai gath lane Dholaikhal', 'cathy@gmsil.com', 'am.jpg', 'Cathy B', 'Cathy123@', 'Cathy123@'),
('Philip', 'Sarkar', 'Male', '42/1 punch vhai gath lane Dholaikhal', 'philip@gmail.com', 'acm.jpg', 'Philip Sar', 'Philip123@', 'Philip123@'),
('Rayied', 'Md Shahz', 'Male', '2 Protap das lane , Singtola', 'charlesphilipsarkar@gmail.com', 'beach-666122_1920.jpg', 'Rayied 2', 'Romona123@', 'Romona123@'),
('Rubaba', 'Rahman', 'Female', 'dyyjcccccccn protapxjs', 'Ruaba@gmail.com', 'avengers.jpg', 'Rubaba 12', 'Romona123@', 'Romona123@'),
('sakib', 'Molla', 'Male', '2 Protap das lane , Singtola', 'romonasarkar2@gmail.com', 'avatar.jpg', 'Sakib Molla', 'Sakib123@', 'Sakib123@'),
('Romona Magdalene', 'sarkar', 'Female', '42/1 punch vhai gath lane Dholaikhal', 'sarkarmagdalene3@gmail.com', 'am.jpg', 'Magdalene 12', 'Angela123@', 'Angela123@'),
('MD.SHAHZAD HUSSAIN', 'RAYIED', 'Male', 'Gazipur,Uttar Chayabithi', 'hussainrayied9@gmail.com', 'person.jpg', 'Rayied', 'Akmch067**', 'Akmch067**'),
('MD.SHAHZAD HUSSAIN', 'RAYIED', 'Male', 'Gazipur,Uttar Chayabithi', 'hussainrayied9@gmail.com', 'person.jpg', 'Rayied 12', 'Akmch067**1', 'Akmch067**1'),
('MD.SHAHZAD HUSSAIN', 'RAYIED', 'Male', 'Gazipur,Uttar Chayabithi', 'a@gmail.com', 'Screenshot (79).png', 'Rayied 123', 'Sd123**55', 'Sd123**55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_registration`
--
ALTER TABLE `admin_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `manager_reg`
--
ALTER TABLE `manager_reg`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `movie_detail`
--
ALTER TABLE `movie_detail`
  ADD PRIMARY KEY (`Movie_ID`);

--
-- Indexes for table `noticedb`
--
ALTER TABLE `noticedb`
  ADD PRIMARY KEY (`Serial`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_registration`
--
ALTER TABLE `admin_registration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `movie_detail`
--
ALTER TABLE `movie_detail`
  MODIFY `Movie_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
