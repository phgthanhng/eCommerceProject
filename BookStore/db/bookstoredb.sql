-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2022 at 06:52 AM
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
  `retailprice` decimal(10,2) NOT NULL,
  `availablequantity` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookID`, `bookname`, `isbn`, `author`, `publisher`, `retailprice`, `availablequantity`, `image`, `description`, `category`) VALUES
(1, 'The No-show', '', 'Beth O\'leary', 'Penguin Publishing Group', '20.00', 66, '624d31dc1389e.png', 'Three women who seemingly have nothing in common find that they\'\'re involved with the same man in this smart new rom-com by Beth O\'\'Leary, bestselling author of The Flatshare.\r\n\r\nSiobhan is a quick-tempered life coach with way too much on her plate. Miranda is a tree surgeon used to being treated as just one of the guys on the job. Jane is a soft-spoken volunteer for the local charity shop with zero sense of self-worth.\r\n \r\nThese three women are strangers who have only one thing in common: they’ve all been stood up on the same day, the very worst day to be stood up—Valentine’s Day. And, unbeknownst to them, they’ve all been stood up by the same man.\r\n \r\nOnce they\'\'ve each forgiven him for standing them up, they are all in serious danger of falling in love with a man who may have not just one or two but three women on the go....\r\n \r\nIs there more to him than meets the eye? Where was he on Valentine’s Day? And will they each untangle the truth before they all get their hearts broken?', 'romance'),
(2, 'AGAIN, RACHEL', '9780385675376', 'Marian Keyes', 'Doubleday Canada', '37.99', 98, '624d0a4576b25.png', 'From internationally bestselling author Marian Keyes comes the eagerly awaited sequel to Rachel\'\'s Holiday.\r\n\r\nBack in the long ago nineties, Rachel Walsh was a mess.\r\n \r\nBut a spell in rehab transformed everything. Life became very good, very quickly. These days, Rachel has love, family, a great job as an addiction counsellor, she even gardens. Her only bad habit is a fondness for expensive sneakers.\r\n \r\nBut with the sudden reappearance of a man she\'\'d once loved, her life wobbles.\r\n \r\nShe\'\'d thought she was settled. Fixed forever. Is she about to discover that no matter what our age, everything can change?\r\n \r\nIs it time to think again, Rachel?', 'fiction'),
(3, 'BE A TRIANGLE (SIGNED EDITION): HOW I WENT FROM BE', '9780385684194', 'Lilly Singh', 'Doubleday Canada', '24.99', 60, '624d026ed50d3.png', 'From the New York Times bestselling author of How to Be a Bawse comes an honest, funny, and inspiring primer on learning to come home to your truest and happiest self.\r\n\r\n“It’s time to flip right side up. It’s time for this book title to make sense. It’s time to be a triangle.”\r\n \r\nEveryone knows that sometimes, life just sucks—even world-famous actress, author, and creator Lilly Singh. In this book, Lilly provides a safe space where readers can learn how to create a sense of peace within themselves. Without sugarcoating what it’s like to face adversity—including Lilly’s intensely personal struggles with identity, success, and self-doubt—she teaches readers to “unsubscribe” from cookie-cutter ideals.\r\n \r\nWith her signature blend of vulnerability, insight, and humor, Lilly instructs readers to “be a triangle”: You must build a solid foundation for your life, one that can be built upon, but never fundamentally changed or destroyed. As she puts it, we must always find a way to come home to ourselves—“we must create a place, a set of beliefs, a simple set of priorities to come back to should life lead us astray, which it will.”\r\n \r\nLike a wise, empathetic friend who always keeps you honest, Lilly pushes you to adjust your mindset and change the conversations you have with yourself. The result is a deeply humane, entertaining, and uplifting guide to befriending yourself and becoming a true “miracle for the world.”', 'fiction'),
(4, 'Freezing Order: A True Story Of Money Laundering, ', '9781982153281', 'Bill Browder', 'Simon & Schuster', '38.88', 78, '624d085dac16b.png', 'Following his explosive New York Times bestseller Red Notice, Bill Browder returns with another gripping thriller chronicling how he became Vladimir Putin’s number one enemy by exposing Putin’s campaign to steal and launder hundreds of billions of dollars and kill anyone who stands in his way.\r\n\r\nWhen Bill Browder’s young Russian lawyer, Sergei Magnitsky, was beaten to death in a Moscow jail, Browder made it his life’s mission to go after his killers and make sure they faced justice. The first step of that mission was to uncover who was behind the $230 million tax refund scheme that Magnitsky was killed over. As Browder and his team tracked the money as it flowed out of Russia through the Baltics and Cyprus and on to Western Europe and the Americas, they were shocked to discover that Vladimir Putin himself was a beneficiary of the crime.', 'fiction'),
(5, 'AGAIN, RACHEL', '9780385675376', 'Marian Keyes', 'Doubleday Canada', '37.99', 98, '624d0a4576b25.png', 'From internationally bestselling author Marian Keyes comes the eagerly awaited sequel to Rachel\'\'s Holiday.\r\n\r\nBack in the long ago nineties, Rachel Walsh was a mess.\r\n \r\nBut a spell in rehab transformed everything. Life became very good, very quickly. These days, Rachel has love, family, a great job as an addiction counsellor, she even gardens. Her only bad habit is a fondness for expensive sneakers.\r\n \r\nBut with the sudden reappearance of a man she\'\'d once loved, her life wobbles.\r\n \r\nShe\'\'d thought she was settled. Fixed forever. Is she about to discover that no matter what our age, everything can change?\r\n \r\nIs it time to think again, Rachel?', 'fiction'),
(6, 'Hook, Line, And Sinker: A Novel', '9780063045699', 'Tessa Bailey', 'HarperCollins', '19.99', 33, '624d315967bca.png', 'In the follow-up to It Happened One Summer, Tessa Bailey delivers another deliciously fun rom-com about a former player who accidentally falls for his best friend while trying to help her land a different man…\r\n\r\nKing crab fisherman Fox Thornton has a reputation as a sexy, carefree flirt. Everyone knows he’s a guaranteed good time—in bed and out—and that’s exactly how he prefers it. Until he meets Hannah Bellinger. She’s immune to his charm and looks, but she seems to enjoy his… personality? And wants to be friends? Bizarre. But he likes her too much to risk a fling, so platonic pals it is.\r\n\r\nNow, Hannah\'\'s in town for work, crashing in Fox’s spare bedroom. She knows he’s a notorious ladies’ man, but they’re definitely just friends. In fact, she\'\'s nursing a hopeless crush on a colleague and Fox is just the person to help with her lackluster love life. Armed with a few tips from Westport’s resident Casanova, Hannah sets out to catch her coworker’s eye… yet the more time she spends with Fox, the more she wants him instead. As the line between friendship and flirtation begins to blur, Hannah can\'\'t deny she loves everything about Fox, but she refuses to be another notch on his bedpost. \r\n\r\nLiving with his best friend should have been easy. Except now she’s walking around in a towel, sleeping right across the hall, and Fox is fantasizing about waking up next to her for the rest of his life and… and… man overboard! He’s fallen for her, hook, line, and sinker. Helping her flirt with another guy is pure torture, but maybe if Fox can tackle his inner demons and show Hannah he’s all in, she\'\'ll choose him instead?', 'romance'),
(7, 'The No-show', '', 'Beth O\'leary', 'Penguin Publishing Group', '20.00', 66, '624d31dc1389e.png', 'Three women who seemingly have nothing in common find that they\'\'re involved with the same man in this smart new rom-com by Beth O\'\'Leary, bestselling author of The Flatshare.\r\n\r\nSiobhan is a quick-tempered life coach with way too much on her plate. Miranda is a tree surgeon used to being treated as just one of the guys on the job. Jane is a soft-spoken volunteer for the local charity shop with zero sense of self-worth.\r\n \r\nThese three women are strangers who have only one thing in common: they’ve all been stood up on the same day, the very worst day to be stood up—Valentine’s Day. And, unbeknownst to them, they’ve all been stood up by the same man.\r\n \r\nOnce they\'\'ve each forgiven him for standing them up, they are all in serious danger of falling in love with a man who may have not just one or two but three women on the go....\r\n \r\nIs there more to him than meets the eye? Where was he on Valentine’s Day? And will they each untangle the truth before they all get their hearts broken?', 'romance'),
(8, 'The No-show', '', 'Beth O\'leary', 'Penguin Publishing Group', '20.00', 66, '624d31dc1389e.png', 'Three women who seemingly have nothing in common find that they\'\'re involved with the same man in this smart new rom-com by Beth O\'\'Leary, bestselling author of The Flatshare.\r\n\r\nSiobhan is a quick-tempered life coach with way too much on her plate. Miranda is a tree surgeon used to being treated as just one of the guys on the job. Jane is a soft-spoken volunteer for the local charity shop with zero sense of self-worth.\r\n \r\nThese three women are strangers who have only one thing in common: they’ve all been stood up on the same day, the very worst day to be stood up—Valentine’s Day. And, unbeknownst to them, they’ve all been stood up by the same man.\r\n \r\nOnce they\'\'ve each forgiven him for standing them up, they are all in serious danger of falling in love with a man who may have not just one or two but three women on the go....\r\n \r\nIs there more to him than meets the eye? Where was he on Valentine’s Day? And will they each untangle the truth before they all get their hearts broken?', 'romance'),
(9, 'Hook, Line, And Sinker: A Novel', '9780063045699', 'Tessa Bailey', 'HarperCollins', '19.99', 33, '624d315967bca.png', 'In the follow-up to It Happened One Summer, Tessa Bailey delivers another deliciously fun rom-com about a former player who accidentally falls for his best friend while trying to help her land a different man…\r\n\r\nKing crab fisherman Fox Thornton has a reputation as a sexy, carefree flirt. Everyone knows he’s a guaranteed good time—in bed and out—and that’s exactly how he prefers it. Until he meets Hannah Bellinger. She’s immune to his charm and looks, but she seems to enjoy his… personality? And wants to be friends? Bizarre. But he likes her too much to risk a fling, so platonic pals it is.\r\n\r\nNow, Hannah\'\'s in town for work, crashing in Fox’s spare bedroom. She knows he’s a notorious ladies’ man, but they’re definitely just friends. In fact, she\'\'s nursing a hopeless crush on a colleague and Fox is just the person to help with her lackluster love life. Armed with a few tips from Westport’s resident Casanova, Hannah sets out to catch her coworker’s eye… yet the more time she spends with Fox, the more she wants him instead. As the line between friendship and flirtation begins to blur, Hannah can\'\'t deny she loves everything about Fox, but she refuses to be another notch on his bedpost. \r\n\r\nLiving with his best friend should have been easy. Except now she’s walking around in a towel, sleeping right across the hall, and Fox is fantasizing about waking up next to her for the rest of his life and… and… man overboard! He’s fallen for her, hook, line, and sinker. Helping her flirt with another guy is pure torture, but maybe if Fox can tackle his inner demons and show Hannah he’s all in, she\'\'ll choose him instead?', 'romance'),
(10, 'Hook, Line, And Sinker: A Novel', '9780063045699', 'Tessa Bailey', 'HarperCollins', '19.99', 33, '624d315967bca.png', 'In the follow-up to It Happened One Summer, Tessa Bailey delivers another deliciously fun rom-com about a former player who accidentally falls for his best friend while trying to help her land a different man…\r\n\r\nKing crab fisherman Fox Thornton has a reputation as a sexy, carefree flirt. Everyone knows he’s a guaranteed good time—in bed and out—and that’s exactly how he prefers it. Until he meets Hannah Bellinger. She’s immune to his charm and looks, but she seems to enjoy his… personality? And wants to be friends? Bizarre. But he likes her too much to risk a fling, so platonic pals it is.\r\n\r\nNow, Hannah\'\'s in town for work, crashing in Fox’s spare bedroom. She knows he’s a notorious ladies’ man, but they’re definitely just friends. In fact, she\'\'s nursing a hopeless crush on a colleague and Fox is just the person to help with her lackluster love life. Armed with a few tips from Westport’s resident Casanova, Hannah sets out to catch her coworker’s eye… yet the more time she spends with Fox, the more she wants him instead. As the line between friendship and flirtation begins to blur, Hannah can\'\'t deny she loves everything about Fox, but she refuses to be another notch on his bedpost. \r\n\r\nLiving with his best friend should have been easy. Except now she’s walking around in a towel, sleeping right across the hall, and Fox is fantasizing about waking up next to her for the rest of his life and… and… man overboard! He’s fallen for her, hook, line, and sinker. Helping her flirt with another guy is pure torture, but maybe if Fox can tackle his inner demons and show Hannah he’s all in, she\'\'ll choose him instead?', 'romance'),
(11, 'Hook, Line, And Sinker: A Novel', '9780063045699', 'Tessa Bailey', 'HarperCollins', '19.99', 33, '624d315967bca.png', 'In the follow-up to It Happened One Summer, Tessa Bailey delivers another deliciously fun rom-com about a former player who accidentally falls for his best friend while trying to help her land a different man…\r\n\r\nKing crab fisherman Fox Thornton has a reputation as a sexy, carefree flirt. Everyone knows he’s a guaranteed good time—in bed and out—and that’s exactly how he prefers it. Until he meets Hannah Bellinger. She’s immune to his charm and looks, but she seems to enjoy his… personality? And wants to be friends? Bizarre. But he likes her too much to risk a fling, so platonic pals it is.\r\n\r\nNow, Hannah\'\'s in town for work, crashing in Fox’s spare bedroom. She knows he’s a notorious ladies’ man, but they’re definitely just friends. In fact, she\'\'s nursing a hopeless crush on a colleague and Fox is just the person to help with her lackluster love life. Armed with a few tips from Westport’s resident Casanova, Hannah sets out to catch her coworker’s eye… yet the more time she spends with Fox, the more she wants him instead. As the line between friendship and flirtation begins to blur, Hannah can\'\'t deny she loves everything about Fox, but she refuses to be another notch on his bedpost. \r\n\r\nLiving with his best friend should have been easy. Except now she’s walking around in a towel, sleeping right across the hall, and Fox is fantasizing about waking up next to her for the rest of his life and… and… man overboard! He’s fallen for her, hook, line, and sinker. Helping her flirt with another guy is pure torture, but maybe if Fox can tackle his inner demons and show Hannah he’s all in, she\'\'ll choose him instead?', 'romance');

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
(3, 'jiahui', '123456', 'Jiahui', 'Xia', '438-132-6727', '821 Sainte Croix Ave, Saint-Laurent, Quebec H4L 3X', 'jiahuixia@gmail.com', 'no'),
(4, 'huizi', '$2y$10$DZoaugi6SaJmxuz6WHDTmuDEIWMYyrSg6Go5bKmz2jR1TGDtnoZdq', 'huizi', 'Xia', '757-868-4367', '1190 Rue Egan', '222@gmail.com', 'yes');

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
  MODIFY `bookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
