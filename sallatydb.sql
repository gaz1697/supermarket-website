-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2023 at 08:20 PM
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
(1, '123', '123', '123');

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
(1, 'BISCUITS, CRACKERS & CAKES'),
(2, 'ELECTRONICS & APPLIANCES'),
(3, 'MEAT & POULTRY'),
(4, 'MILK & LABAN'),
(5, 'RICE, PASTA & PULSES'),
(6, 'WATER');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `Total_Price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_id`, `order_date`, `Total_Price`) VALUES
(1, '2023-01-25', 620),
(2, '2023-01-23', 238),
(3, '2023-02-08', 161);

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(11) NOT NULL,
  `Order_id` int(11) NOT NULL,
  `Product_id` int(11) NOT NULL,
  `Quantity` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `Order_id`, `Product_id`, `Quantity`) VALUES
(1, 1, 3, 2),
(2, 1, 2, 1),
(3, 2, 7, 1),
(4, 3, 2, 5),
(5, 3, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` double NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_id`, `Name`, `Price`, `Description`, `Image`, `Category_name`) VALUES
(1, 'Tanmiah Fresh Chicken Thighs 450g', 10, 'Bla Bla', 'images/meat.png', 'MEAT & POULTRY'),
(2, 'Oreo Classic 38g× 16', 20, 'Bla Bla', 'images/Oreo.jpg', 'BISCUITS, CRACKERS & CAKES'),
(3, 'Philips coffee maker, HD7432/2', 300, 'BLA BLA', 'images/PHILIPS COFFEE.jpg', 'ELECTRONICS & APPLIANCES'),
(4, 'Al Walimah Style Indian Basmati Rice Longgrain 5kg', 45, 'BLA BLA', 'images/Rice.png', 'RICE, PASTA & PULSES'),
(5, 'Saudia Long Life Full Fat Milk 1L × 12 Pieces', 61, 'BLA BLA', 'images/Saudi Milk.jpg', 'MILK & LABAN'),
(6, 'Nova Water 550ml ×24', 20, 'BLA BLA', 'images/Nova.jpg', 'WATER'),
(7, 'Nikai NAF788A Air Fryer 3L', 238, 'BLA BLA', 'images/Fryer.jpg', 'ELECTRONICS & APPLIANCES'),
(8, 'Alyoum Premium Fresh Chicken Chilled 1kg', 19, 'BLA BLA', 'images/Chicken.jpg', 'MEAT & POULTRY');

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
  ADD PRIMARY KEY (`Category_id`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Order_id` (`Order_id`),
  ADD KEY `Product_id` (`Product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_id`),
  ADD KEY `Category_name` (`Category_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  ADD CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`Order_id`) REFERENCES `orders` (`Order_id`),
  ADD CONSTRAINT `order_product_ibfk_2` FOREIGN KEY (`Product_id`) REFERENCES `product` (`Product_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Category_name`) REFERENCES `category` (`Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
