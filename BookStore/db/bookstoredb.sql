-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2022 at 03:57 AM
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
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bookID` int(11) NOT NULL,
  `bookname` varchar(50) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `author` varchar(30) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `retailprice` decimal(10,0) NOT NULL,
  `availablequantity` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookID`, `bookname`, `isbn`, `author`, `publisher`, `retailprice`, `availablequantity`, `image`, `description`, `category`) VALUES
(1, 'Lessons In Chemistry: A Novel', '9780593556672', 'Bonnie Garmus', 'Diversified Publishing', '41', 43, '195801.png', 'A delight for readers of Where\'\'d You Go, Bernadette, this blockbuster debut set in 1960s California features the singular voice of Elizabeth Zott, a scientist whose career takes a detour when she becomes the star of a beloved TV cooking show.\r\n\r\nChemist Elizabeth Zott is not your average woman. In fact, Elizabeth Zott would be the first to point out that there is no such thing as an average woman. But it\'\'s the early 1960s and her all-male team at Hastings Research Institute takes a very unscientific view of equality. Except for one: Calvin Evans, the lonely, brilliant, Nobel Prize–nominated grudge holder who falls in love with—of all things—her mind. True chemistry results. \r\n \r\nLike science, though, life is unpredictable. Which is why a few years later Eizabeth Zott finds herself not only a single mother but also the reluctant star of America\'\'s most beloved cooking show, Supper at Six. Elizabeth\'\'s unusual approach to cooking (\"combine one tablespoon acetic acid with a pinch of sodium chloride\") proves revolutionary. But as her following grows, not everyone is happy. Because, as it turns out, Elizabeth Zott isn\'\'t just teaching women how to cook. She\'\'s daring them to change the status quo.  \r\n \r\nLaugh-out-loud funny, shrewdly observant and studded with a dazzling cast of supporting characters, Lessons in Chemistry is as original and vibrant as its protagonist.', 'fiction');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
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
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
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
  `userID` int(11) NOT NULL,
  `reviewdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `reviewcontent` varchar(300) NOT NULL,
  `reviewmark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `newsletter` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `username`, `password`, `firstname`, `lastname`, `phone`, `address`, `email`, `newsletter`) VALUES
(1, 'phgthanhng', '123456', 'Phuong Thanh', 'Nguyen', '438-680-289', '5062 Avenue Victoria', 'anc@gmail.com', 'no'),
(2, 'chilcj', 'password', 'Chilka', 'Castro', '438-397-6747', '7704 ruer Verdier Saint Leonard Quebec H12S2H9', 'chilcjcastro@yahoo.ca', 'no'),
(3, 'jiahui', '123456', 'Jiahui', 'Xia', '438-132-6727', '821 Sainte Croix Ave, Saint-Laurent, Quebec H4L 3X', 'jiahuixia@gmail.com', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlistID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
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
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bookID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`),
  ADD KEY `FK_cart_customer` (`userID`);

--
-- Indexes for table `cartitem`
--
ALTER TABLE `cartitem`
  ADD PRIMARY KEY (`cartitemID`),
  ADD KEY `FK_cartitem_cart` (`cartID`),
  ADD KEY `FK_cartitem_book` (`bookID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `FK_order_customer` (`userID`),
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
  ADD KEY `FK_review_customer` (`userID`),
  ADD KEY `FK_review_book` (`bookID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlistID`),
  ADD KEY `FK_wishlist_customer` (`userID`);

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
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  ADD CONSTRAINT `FK_cart_user` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

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
  ADD CONSTRAINT `FK_order_user` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

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
  ADD CONSTRAINT `FK_review_user` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `FK_wishlist_user` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

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
