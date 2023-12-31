-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2023 at 12:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `email`, `pass`) VALUES
(1, 'pthakarar1304@gmail.com', 123);

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `Id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` int(4) NOT NULL,
  `category` varchar(10) NOT NULL,
  `path` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `safe` varchar(10) NOT NULL,
  `fuel` varchar(10) NOT NULL,
  `price` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`Id`, `name`, `brand`, `model`, `category`, `path`, `color`, `safe`, `fuel`, `price`) VALUES
(1, 'Alto 800', 'Maruti Suzuki', 2020, 'hatchback', 'images/cars/alto.png', 'Red', 'false', 'CNG', 2000),
(2, 'Harrier', 'Tata', 2021, 'suv', 'images/cars/harrier-dark.png', 'Black', 'true', 'diesel', 5000),
(3, 'Verna', 'Hyundai', 2019, 'sedan', 'images/cars/verna.png', 'White', 'true', 'diesel', 4000),
(4, 'Swift', 'Maruti Suzuki', 2018, 'hatchback', 'images/cars/swift.png', 'Red', 'false', 'petrol', 3000),
(5, 'Tiago', 'Tata', 2017, 'hatchback', 'images/cars/tiago.png', 'Silver', 'true', 'petrol', 3000),
(9, 'Ertiga', 'Maruti Suzuki', 2021, 'suv', 'images/cars/ertiga.png', 'Red', 'false', 'CNG', 3500),
(12, 'Nexon', 'Tata', 2021, 'suv', 'images/cars/nexon dark.png', 'Black', 'true', 'petrol', 3500),
(13, 'i10', 'Hyundai', 2023, 'hatchback', 'images/cars/i10.png', 'Red', 'false', 'petrol', 3000),
(14, 'i20', 'Hyundai', 2022, 'hatchback', 'images/cars/i20.png', 'Silver', 'false', 'petrol', 3500),
(15, 'Wagon R', 'Maruti Suzuki', 2020, 'hatchback', 'images/cars/wagonr.png', 'Red', 'false', 'CNG', 2500),
(16, 'Brezza', 'Maruti Suzuki', 2022, 'suv', 'images/cars/brezza.png', 'Red', 'true', 'petrol', 3500),
(17, 'Baleno', 'Maruti Suzuki', 2018, 'hatchback', 'images/cars/baleno.png', 'silver', 'false', 'petrol', 3500),
(18, 'Swift Dzire', 'Maruti Suzuki', 2020, 'sedan', 'images/cars/swift dzire.png', 'white', 'false', 'CNG', 3500),
(19, 'Ciaz', 'Maruti Suzuki', 2018, 'sedan', 'images/cars/ciaz.png', 'white', 'false', 'petrol', 4000),
(20, 'Creta', 'Hyundai', 2019, 'suv', 'images/cars/creta.png', 'white', 'false', 'petrol', 4500),
(21, 'Venue', 'Hyundai', 2021, 'suv', 'images/cars/venue.png', 'white', 'false', 'petrol', 4000),
(22, 'Grand Vitara', 'Maruti Suzuki', 2022, 'suv', 'images/cars/grand vitara.png', 'white', 'false', 'petrol', 4500),
(23, 'safari', 'Tata', 2022, 'suv', 'images/cars/safari.png', 'white', 'true', 'diesel', 6000),
(24, 'Tigor', 'Tata', 2020, 'sedan', 'images/cars/tigor.png', 'white', 'true', 'petrol', 3500);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Id` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `carname` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `location` varchar(150) NOT NULL,
  `pickdate` date NOT NULL,
  `returndate` date NOT NULL,
  `car_img` varchar(50) NOT NULL,
  `acc_den` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Id`, `username`, `carname`, `brand`, `price`, `location`, `pickdate`, `returndate`, `car_img`, `acc_den`) VALUES
(53, 'Prince', 'Tigor', 'Tata', 3500, 'ahmedabad', '2024-01-05', '2024-01-06', 'images/cars/tigor.png', 0),
(54, 'Prince', 'Swift Dzire', 'Maruti Suzuki', 7000, 'una', '2023-12-31', '2024-01-02', 'images/cars/swift dzire.png', 0),
(55, 'Prince', 'Swift Dzire', 'Maruti Suzuki', 7000, 'rajkot', '2023-12-28', '2023-12-30', 'images/cars/swift dzire.png', 0),
(56, 'Prince', 'Nexon', 'Tata', 7000, 'rajkot', '2023-12-31', '2024-01-02', 'images/cars/nexon dark.png', 0),
(57, 'Prince', 'Harrier', 'Tata', 30000, 'bv', '2023-12-30', '2024-01-05', 'images/cars/harrier-dark.png', 0),
(58, 'Prince', 'Tiago', 'Tata', 3000, 'klhh', '2024-01-03', '2024-01-04', 'images/cars/tiago.png', 0),
(59, 'Prince', 'Harrier', 'Tata', 5000, 'una', '2024-01-01', '2024-01-02', 'images/cars/harrier-dark.png', 0),
(60, 'Prince', 'Grand Vitara', 'Maruti Suzuki', 4500, 'gir', '2024-01-03', '2024-01-04', 'images/cars/grand vitara.png', 0),
(61, 'Prince', 'i20', 'Hyundai', 7000, 'bv', '2024-01-04', '2024-01-06', 'images/cars/i20.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment_detail`
--

CREATE TABLE `payment_detail` (
  `Id` int(3) NOT NULL,
  `card_num` varchar(20) NOT NULL,
  `holder` varchar(50) NOT NULL,
  `expiration_month` int(2) NOT NULL,
  `expiration_year` int(4) NOT NULL,
  `cvv` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_detail`
--

INSERT INTO `payment_detail` (`Id`, `card_num`, `holder`, `expiration_month`, `expiration_year`, `cvv`) VALUES
(22, '0', '', 3, 2027, '0'),
(23, '9999999999999999', '', 8, 2022, '9999'),
(24, '2222222222222222', '', 4, 2028, '2222'),
(25, '9999999999999999', 'shorya thakarar', 7, 2027, '9999');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `name`, `email`, `pass`) VALUES
(8, 'Prince', 'p@gmail.com', 123),
(9, 'Keval', 'k@gmail.com', 123),
(10, 'Janil', 'j@gmail.com', 123),
(11, 'Dhaval', 'd@gmail.com', 123),
(12, 'Vaibhav', 'v@gmail.com', 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `payment_detail`
--
ALTER TABLE `payment_detail`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `payment_detail`
--
ALTER TABLE `payment_detail`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
