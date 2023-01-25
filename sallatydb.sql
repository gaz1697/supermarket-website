-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2023 at 04:31 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sallatydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_id`, `Name`, `Email`, `Password`) VALUES
(5, 'David Williams', 'david@example.com', 'password'),
(6, 'Emily Brown', 'emily@example.com', 'password'),
(7, 'James Smith', 'james@example.com', 'password'),
(8, 'Sophia Johnson', 'sophia@example.com', 'password'),
(9, 'Olivia Williams', 'olivia@example.com', 'password'),
(10, 'Ava Brown', 'ava@example.com', 'password'),
(11, 'Isabella Smith', 'isabella@example.com', 'password'),
(12, 'Mia Johnson', 'mia@example.com', 'password'),
(13, 'Abigail Williams', 'abigail@example.com', 'password'),
(14, 'Emily Brown', 'emily@example.com', 'password'),
(15, 'Charlotte Smith', 'charlotte@example.com', 'password'),
(16, 'Harper Johnson', 'harper@example.com', 'password'),
(17, 'Amelia Williams', 'amelia@example.com', 'password'),
(18, 'Evelyn Brown', 'evelyn@example.com', 'password'),
(19, 'Elizabeth Smith', 'elizabeth@example.com', 'password'),
(20, 'Sofia Johnson', 'sofia@example.com', 'password'),
(99, '123', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Category_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Category_id`, `Name`) VALUES
(5, 'MEAT & POULTRY'),
(6, 'BISCUITS, CRACKERS & CAKES'),
(7, 'ELECTRONICS & APPLIANCES'),
(8, 'RICE, PASTA & PULSES'),
(9, 'MILK & LABAN'),
(10, 'WATER');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `Total Price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_date`, `Total Price`) VALUES
(1, '2023-01-25', 250),
(2, '2023-01-19', 222);

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `Product_id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `Product_id`, `Quantity`) VALUES
(1, 1, 4, 3),
(2, 1, 3, 1),
(3, 2, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Description` text NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_id`, `Name`, `Price`, `Description`, `Image`, `Category_id`) VALUES
(1, 'TANMIAH FRESH CHICKEN THIGHS', '10.00', 'CHICKEN', 'images/meat.png', 5),
(2, 'OREO CLASSIC 38GX 16', '20.00', 'SWEET', 'images/Oreo.jpg', 6),
(3, 'PHILIPS COFFE MAKER,HD7432/2', '300.00', 'COFFE TOOLS', 'images/PHILIPS COFFEE.jpg', 7),
(4, 'AL WALIMAH STYLE INDIAN BASMATTI RICE LONGGRAIN 5KG', '45.00', 'FOOD', 'images/Rice.png', 8),
(5, 'SAUDIA LONG LIFE FULL FAT MILK 1L X12 PIECES', '61.00', 'MILK', 'images/Saudi Milk.jpg', 9),
(6, 'NOVA WATER 550ML X24', '20.00', 'WATER', 'images/Nova.jpg', 10),
(7, 'Nikai NAF788A Air Fryer 3L', '238.00', 'ELECTRONICS & APPLIANCES', 'images/Fryer.jpg', 7),
(8, 'Alyoum Premium Fresh Chicken Chilled 1kg', '19.00', 'MEAT & POULTRY', 'images/Chicken.jpg', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `Product_id` (`Product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_id`),
  ADD KEY `Category_id` (`Category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_product_ibfk_2` FOREIGN KEY (`Product_id`) REFERENCES `product` (`Product_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Category_id`) REFERENCES `category` (`Category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
