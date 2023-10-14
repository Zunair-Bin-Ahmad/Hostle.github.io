-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2023 at 04:53 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_hostel`
--

CREATE TABLE `add_hostel` (
  `id` int(11) NOT NULL,
  `City` varchar(225) NOT NULL,
  `Hostel_img` varchar(225) NOT NULL,
  `Room_1` varchar(225) NOT NULL,
  `Room_2` varchar(225) NOT NULL,
  `Room_3` varchar(225) NOT NULL,
  `Room_4` varchar(225) NOT NULL,
  `Room_5` varchar(225) NOT NULL,
  `Description` varchar(2500) NOT NULL,
  `City_area` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Address` varchar(225) NOT NULL,
  `Hostel_name` varchar(225) NOT NULL,
  `Rent` varchar(225) NOT NULL,
  `Net_Facility` varchar(225) NOT NULL,
  `Washroom` varchar(225) NOT NULL,
  `Mess_charges` varchar(225) NOT NULL,
  `Electricity_charges` varchar(225) NOT NULL,
  `Total_room` varchar(225) NOT NULL,
  `Contact` varchar(225) NOT NULL,
  `Map` varchar(225) NOT NULL,
  `Status` int(11) NOT NULL COMMENT '1=active 0=disactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_hostel`
--

INSERT INTO `add_hostel` (`id`, `City`, `Hostel_img`, `Room_1`, `Room_2`, `Room_3`, `Room_4`, `Room_5`, `Description`, `City_area`, `Email`, `Address`, `Hostel_name`, `Rent`, `Net_Facility`, `Washroom`, `Mess_charges`, `Electricity_charges`, `Total_room`, `Contact`, `Map`, `Status`) VALUES
(11, '28', 'images/e.jpg', 'images/download.jpg', 'images/d.jpg', 'images/c.jpg', 'images/c.jpg', 'images/a.jpg', 'Doloremque iusto atq', 'Amet adipisci ut as', 'godedany@mailinator.com', 'Sint animi neque cu', 'MacKenzie Waters', 'Animi quia qui sunt', 'yes', 'yes', 'yes', '1', 'Fuga Quo minim accu', 'Irure commodo exerci', 'Ullam iure tempor et', 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Username` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Username`, `Email`, `Password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `cnic` varchar(225) NOT NULL,
  `hostel_id` int(11) NOT NULL,
  `room` varchar(225) NOT NULL,
  `total` varchar(225) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=Active , 0=Disactive',
  `used` int(11) NOT NULL DEFAULT 0 COMMENT '1=used , 0=notused'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `Name`, `status`, `used`) VALUES
(21, 'Karachi', 1, 0),
(22, 'Lahore', 1, 0),
(23, 'Islamabad', 1, 0),
(24, 'Rawalpindi', 1, 0),
(25, 'Faisalabad', 1, 0),
(26, 'Peshawar', 1, 0),
(27, 'Multan', 1, 0),
(28, 'Hyderabad', 1, 0),
(29, 'Gujranwala', 1, 0),
(30, 'Quetta', 1, 0),
(31, 'Sargodha', 1, 0),
(32, 'Bahawalpur', 1, 0),
(33, 'Sialkot', 1, 0),
(34, 'Sukkur', 1, 0),
(35, 'Larkana', 1, 0),
(36, 'Sheikhupura', 1, 0),
(37, 'Rahim Yar Khan', 1, 0),
(38, 'Jhang', 1, 0),
(39, 'Dera Ghazi Khan', 1, 0),
(40, 'Gujrat', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer_type`
--

CREATE TABLE `customer_type` (
  `id` int(11) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Status` int(12) NOT NULL DEFAULT 1 COMMENT '1=Active 0=Disactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_type`
--

INSERT INTO `customer_type` (`id`, `Name`, `Status`) VALUES
(1, 'User', 1),
(2, 'Hostal Owner', 1);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `customer_type_id` int(225) NOT NULL,
  `Username` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Phone_no` varchar(225) NOT NULL,
  `City_id` int(11) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `Date_of_Birth` varchar(225) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1 COMMENT '1=Active,0=Disactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `customer_type_id`, `Username`, `Email`, `Phone_no`, `City_id`, `Password`, `Date_of_Birth`, `Status`) VALUES
(24, 1, 'Accusantium enim nis', 'miloda@mailinator.com', '93', 22, 'Pa$$w0rd!', '2008-01-19', 1),
(25, 1, 'Dolorum culpa ab di', 'mecibesoto@mailinator.com', '28', 39, 'Pa$$w0rd!', '1973-12-15', 1),
(26, 2, 'Delectus consequunt', 'ali@gmail.com', '54', 24, 'Pa$$w0rd!', '1971-02-13', 1),
(27, 1, 'Quo iste qui sit rem', 'dyxe@mailinator.com', '31', 22, 'Pa$$w0rd!', '1974-09-23', 1),
(28, 1, 'Sequi nulla nisi eu ', 'fibuwuc@mailinator.com', '73', 33, 'Pa$$w0rd!', '2002-07-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `id` int(11) NOT NULL,
  `Email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`id`, `Email`) VALUES
(1, 'zunair@gmail.com'),
(2, 'zunair@gmail.com'),
(3, 'zunair@gmail.com'),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_hostel`
--
ALTER TABLE `add_hostel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_type`
--
ALTER TABLE `customer_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_hostel`
--
ALTER TABLE `add_hostel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `customer_type`
--
ALTER TABLE `customer_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
