-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2019 at 04:38 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecoms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_lastname` varchar(32) NOT NULL,
  `admin_firstname` varchar(32) NOT NULL,
  `admin_email` varchar(32) NOT NULL,
  `admin_username` varchar(32) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  `admin_delete` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_lastname`, `admin_firstname`, `admin_email`, `admin_username`, `admin_password`, `admin_delete`) VALUES
(34, 'fsfsd', 'dsvdsv', 'dsvds@dfqw', 'vdsvds', 'dsvdsvds', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `custom_id` int(11) NOT NULL,
  `custom_lastname` varchar(32) NOT NULL,
  `custom_firstname` varchar(32) NOT NULL,
  `custom_middlename` varchar(32) NOT NULL,
  `custom_email` varchar(32) NOT NULL,
  `custom_username` varchar(32) NOT NULL,
  `custome_password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`custom_id`, `custom_lastname`, `custom_firstname`, `custom_middlename`, `custom_email`, `custom_username`, `custome_password`) VALUES
(1, 'nequias', 'riza', 'abuzo', 'rizanequias@gmail.com', 'rizanequias', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `menitem`
--

CREATE TABLE `menitem` (
  `menitem_id` int(11) NOT NULL,
  `menitem_name` varchar(32) NOT NULL,
  `menitem_color` varchar(32) NOT NULL,
  `menitem_type` varchar(32) NOT NULL,
  `menitem_img` text NOT NULL,
  `menitem_code` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menitem`
--

INSERT INTO `menitem` (`menitem_id`, `menitem_name`, `menitem_color`, `menitem_type`, `menitem_img`, `menitem_code`) VALUES
(1, 'sneakers', 'white', 'sneaker', '1.jpg', '123'),
(2, 'JAKAMAWATAN', 'BLACK', 'SNEAKER', '2.jpg', '124'),
(3, 'JAKAMAWATAN', 'BLACK', 'SNEAKER', '2.jpg', '124'),
(4, 'JAKAMAWATAN', 'BLACK', 'SNEAKER', '2.jpg', '124');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`custom_id`);

--
-- Indexes for table `menitem`
--
ALTER TABLE `menitem`
  ADD PRIMARY KEY (`menitem_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `custom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menitem`
--
ALTER TABLE `menitem`
  MODIFY `menitem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
