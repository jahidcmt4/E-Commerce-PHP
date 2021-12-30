-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2021 at 03:14 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@admin.com', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `basicinfo`
--

CREATE TABLE `basicinfo` (
  `bid` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(350) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basicinfo`
--

INSERT INTO `basicinfo` (`bid`, `logo`, `phone`, `email`, `address`, `facebook`, `twitter`, `youtube`, `linkedin`, `map`) VALUES
(1, '1619450477fav.png', '30393292', 'info@gmail.com', 'Sector:07, Uttara, Dhaka 1230 ', '#', '#', '#', '#', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233667.82239034277!2d90.27923688816911!3d23.780887457377204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2z4Kai4Ka-4KaV4Ka-!5e0!3m2!1sbn!2sbd!4v1640012978962!5m2!1sbn!2sbd\" width=\"100%\" height=\"220\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `bid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`bid`, `title`, `images`) VALUES
(2, 'Nike', '1607438982org.png');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `title`, `images`) VALUES
(2, 'Mens', '1607437731org.jpeg'),
(3, 'Womens', '1608726134org.jpg'),
(4, 'Kids', '1620659220org.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `phone`, `password`, `image`, `reg_date`) VALUES
(1, 'Jahid', 'jahidcse66@gmail.com', '01785419719', '12345678', '', '2021-12-21');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `order_date` date NOT NULL,
  `pmethod` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `cname`, `phone`, `address`, `customer_id`, `order_date`, `pmethod`, `status`) VALUES
(1, 'Jahid', '01785419719', 'test', '1', '2021-12-21', 'Cash on Delivary', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `order_history`
--

CREATE TABLE `order_history` (
  `hid` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `pid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_history`
--

INSERT INTO `order_history` (`hid`, `order_id`, `pid`, `name`, `price`, `quantity`, `date`) VALUES
(1, 1, '3', 'Balancing Trendy Winter Jacket for Men - Black', '1020', '2', '2021-12-21');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `regular_price` varchar(255) NOT NULL,
  `sale_price` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `title`, `description`, `category`, `brand`, `sku`, `qty`, `regular_price`, `sale_price`, `images`, `status`) VALUES
(3, 'Balancing Trendy Winter Jacket for Men - Black', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to ', '2', '2', '293dk', '1', '510', '950', 'ea3dfa63f6c1b80db0b32eccf9f43e69.png', 'Active'),
(4, 'Black and White Winter Quality Jacket for men', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ', '2', '2', 'd3fdf', '1', '360', '700', '79c1acb0a5c038186612fc80d3a46205.jpg', 'Active'),
(5, 'Elegant Ladies Winter Jacket & Coats For Women', 'Elegant Ladies Winter Jacket & Coats For Women', '3', '2', 'dfr334', '1', '335', '598', 'f23dee393a3b6519e0f13706997f35dd.jpg', 'Active'),
(6, 'White Guess colour stylish Jacket For Men', 'White Guess colour stylish Jacket For Men', '2', '2', 'hj433', '1', '455', '1499', 'f30df85c316c29d9b053c9f5c813df9a.jpg', 'Active'),
(7, 'Ladies Winter New Fashionable Full Sleeve Jacket 2021', 'Ladies Winter New Fashionable Full Sleeve Jacket 2021', '3', '2', 'fr323fd', '1', '420', '900', '122678f96b3e32e75a89041fbee20963.jpg', 'Active'),
(8, 'Women Fashion - Black Star Cotton Long Sleeve Casual Ladies ', 'Women Fashion - Black Star Cotton Long Sleeve Casual Ladies ', '3', '2', 'ger32', '1', '599', '1700', '52358c749cb903810d1f0a8853fba105.jpg', 'Active'),
(9, 'Baby Sleeping Bag Ultra-Soft Fluffy Fleece Newborn Receiving Blanket', 'Baby Sleeping Bag Ultra-Soft Fluffy Fleece Newborn Receiving Blanket', '4', '2', 'kin433', '1', '390', '670', 'c2e78fe6a2760c7bf1e894dc6941331e.jpg', 'Active'),
(10, 'Western 2 pieces stylish skrit znd tops for baby girls party dress', 'Western 2 pieces stylish skrit znd tops for baby girls party dress', '4', '2', 'kin322', '1', '247', '600', 'abf0232c9ad538a72f8c3ee1d2c2ae4b.jpg', 'Active'),
(11, 'Baby Girls Frock Type with Pant Summer Collection', 'Baby Girls Frock Type with Pant Summer Collection', '4', '2', 'knd212', '1', '330', '560', '6272b71fc7d6725b3cf25356414952d9.jpg', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basicinfo`
--
ALTER TABLE `basicinfo`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `order_history`
--
ALTER TABLE `order_history`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `basicinfo`
--
ALTER TABLE `basicinfo`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_history`
--
ALTER TABLE `order_history`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
