-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2024 at 01:04 PM
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
(25, 'Tigor', 'Tata', 2020, 'sedan', 'images/cars/tigor.png', 'Silver', 'true', 'petrol', 3500);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Id` int(3) NOT NULL,
  `user_id` int(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `carname` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `location` varchar(150) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pickdate` date NOT NULL,
  `returndate` date NOT NULL,
  `car_img` varchar(50) NOT NULL,
  `acc_den` int(1) NOT NULL,
  `card_num` varchar(255) NOT NULL,
  `holder` varchar(255) NOT NULL,
  `expiration_month` int(255) NOT NULL,
  `expiration_year` int(255) NOT NULL,
  `cvv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Id`, `user_id`, `username`, `carname`, `brand`, `price`, `location`, `address`, `pickdate`, `returndate`, `car_img`, `acc_den`, `card_num`, `holder`, `expiration_month`, `expiration_year`, `cvv`) VALUES
(10, 36, 'Prince', 'Wagon R', 'Maruti Suzuki', 2500, 'Ahmedabad', 'River front', '2024-01-10', '2024-01-10', 'images/cars/wagonr.png', 1, '7777  7777 7777 7777 ', 'prince thakarar', 7, 2025, 'd79c8788088c2193f0244d8f1f36d2db'),
(11, 36, 'Prince', 'Ciaz', 'Maruti Suzuki', 8000, 'Ahmedabad', 'xyz', '2024-01-25', '2024-01-27', 'images/cars/ciaz.png', -1, '9999  9999 9999 9999 ', 'prince thakarar', 9, 2028, 'fa246d0262c3925617b0c72bb20eeb1d'),
(12, 35, 'Dhaval', 'Tigor', 'Tata', 7000, 'Vadodra', 'abc', '2024-01-17', '2024-01-19', 'images/cars/tigor.png', 0, '8888  8888 8888 8888 ', 'Dhaval Suchak', 10, 2028, 'cf79ae6addba60ad018347359bd144d2'),
(13, 36, 'Prince', 'Verna', 'Hyundai', 180000, 'Rajkot', 'River front', '2024-02-14', '2024-03-30', 'images/cars/verna.png', 1, '22266666666666666666', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 11, 2029, 'fae0b27c451c728867a567e8c1bb4e53');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `licence_number` varchar(16) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `name`, `phone_number`, `email`, `licence_number`, `pass`) VALUES
(35, 'Dhaval', 1234567890, 'd@gmail.com', 'GJ05 12345678902', '202cb962ac59075b964b07152d234b70'),
(36, 'Prince', 1234567890, 'p@gmail.com', 'GJ32 12345678901', '202cb962ac59075b964b07152d234b70');

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
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
