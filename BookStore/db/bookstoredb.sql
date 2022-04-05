-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 05:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstoredb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `username`, `password`, `firstname`, `lastname`, `email`) VALUES
(1, 'chilcj', 'password', 'Chilka', 'Castro', 'chilcj@gmail.com'),
(2, 'phgthanhng', '123456', 'Phuong Thanh', 'Nguyen', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bookID` int(11) NOT NULL,
  `bookname` varchar(50) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `author` varchar(30) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `publisheddate` date NOT NULL,
  `retailprice` decimal(10,0) NOT NULL,
  `availablequantity` int(11) NOT NULL,
  `soldquantity` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `totalprice` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cartitem`
--

CREATE TABLE `cartitem` (
  `cartitemID` int(11) NOT NULL,
  `cartID` int(11) NOT NULL,
  `bookID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cartitemprice` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `username`, `password`, `firstname`, `lastname`, `phone`, `address`, `email`) VALUES
(1, 'phgthanhng', '$2y$10$qac/ytqiJKwfm9u0DBJY6O4JaRKRnP5/ZPg.rhCelEVnuXLQTgOmC', 'Phuong Thanh', 'Nguyen', '438-680-289', '5062 Avenue Victoria', 'anc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `cartID` int(11) NOT NULL,
  `orderdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `orderstatus` varchar(10) NOT NULL,
  `shippingaddress` varchar(50) NOT NULL,
  `total price` decimal(10,0) NOT NULL,
  `paymentmethod` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `return`
--

CREATE TABLE `return` (
  `returnID` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `reason` varchar(200) NOT NULL,
  `returndate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `returnstatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `reviewID` int(11) NOT NULL,
  `bookID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `reviewdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `reviewcontent` varchar(300) NOT NULL,
  `reviewmark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlistID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wishlistitem`
--

CREATE TABLE `wishlistitem` (
  `wishlist_itemID` int(11) NOT NULL,
  `wishlistID` int(11) NOT NULL,
  `bookID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bookID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`),
  ADD KEY `FK_cart_customer` (`customerID`);

--
-- Indexes for table `cartitem`
--
ALTER TABLE `cartitem`
  ADD PRIMARY KEY (`cartitemID`),
  ADD KEY `FK_cartitem_cart` (`cartID`),
  ADD KEY `FK_cartitem_book` (`bookID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `FK_order_customer` (`customerID`),
  ADD KEY `FK_order_cart` (`cartID`);

--
-- Indexes for table `return`
--
ALTER TABLE `return`
  ADD PRIMARY KEY (`returnID`),
  ADD KEY `FK_return_order` (`orderID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`reviewID`),
  ADD KEY `FK_review_customer` (`customerID`),
  ADD KEY `FK_review_book` (`bookID`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlistID`),
  ADD KEY `FK_wishlist_customer` (`customerID`);

--
-- Indexes for table `wishlistitem`
--
ALTER TABLE `wishlistitem`
  ADD PRIMARY KEY (`wishlist_itemID`),
  ADD KEY `FK_wishlistitem_book` (`bookID`),
  ADD KEY `FK_wishlistitem_wishlist` (`wishlistID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bookID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cartitem`
--
ALTER TABLE `cartitem`
  MODIFY `cartitemID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `return`
--
ALTER TABLE `return`
  MODIFY `returnID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlistID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlistitem`
--
ALTER TABLE `wishlistitem`
  MODIFY `wishlist_itemID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK_cart_customer` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`);

--
-- Constraints for table `cartitem`
--
ALTER TABLE `cartitem`
  ADD CONSTRAINT `FK_cartitem_book` FOREIGN KEY (`bookID`) REFERENCES `book` (`bookID`),
  ADD CONSTRAINT `FK_cartitem_cart` FOREIGN KEY (`cartID`) REFERENCES `cart` (`cartID`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FK_order_cart` FOREIGN KEY (`cartID`) REFERENCES `cart` (`cartID`),
  ADD CONSTRAINT `FK_order_customer` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`);

--
-- Constraints for table `return`
--
ALTER TABLE `return`
  ADD CONSTRAINT `FK_return_order` FOREIGN KEY (`orderID`) REFERENCES `order` (`orderID`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `FK_review_book` FOREIGN KEY (`bookID`) REFERENCES `book` (`bookID`),
  ADD CONSTRAINT `FK_review_customer` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `FK_wishlist_customer` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`);

--
-- Constraints for table `wishlistitem`
--
ALTER TABLE `wishlistitem`
  ADD CONSTRAINT `FK_wishlistitem_book` FOREIGN KEY (`bookID`) REFERENCES `book` (`bookID`),
  ADD CONSTRAINT `FK_wishlistitem_wishlist` FOREIGN KEY (`wishlistID`) REFERENCES `wishlist` (`wishlistID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
