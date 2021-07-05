-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2021 at 04:09 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noi_that`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `test` ()  NO SQL
SELECT max(billid) FROM bill$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(25) NOT NULL,
  `email` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `email`, `password`, `phone`, `avatar`, `firstname`, `lastname`) VALUES
(11, 'dangducchau2000@gmail.com', '123456', '0916144389', 'user1.jpg', 'Chau', 'Dang Duc'),
(12, 'dangducchau2001@gmail.com', '123456', '091614438111', 'user1.jpg', 'Dang Duc', 'Chau'),
(15, 'dangducchau2002@gmail.com', '123456', '0916144389', 'user1.jpg', 'Chau', 'Dang Duc'),
(16, 'dangducchau2020@gmail.com', '123456', '0916144389', 'user1.jpg', 'Dang Duc', 'Không'),
(22, 'dangduch@gmail.com', '123456', '11111222', 'IMG-60e1bb332b55b4.48097187.jpg', 'daaa', '12'),
(23, 'dangducchau2004@gmail.com', '123456', '0916144389', 'IMG-60e301a2a99095.92470059.jpg', 'Dang', 'Chau'),
(24, 'daang@gmail.com', '123456', '0916144389', 'img_avatar.png', 'Chau', 'Dang Duc');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `billid` int(25) NOT NULL,
  `userid` int(25) NOT NULL,
  `totalprice` int(25) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `createdAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`billid`, `userid`, `totalprice`, `address`, `createdAt`) VALUES
(1, 1, 1000000, '', '2021-07-04'),
(2, 2, 1000000, '', '2021-07-04'),
(3, 1, 6950000, '', '2021-07-04'),
(4, 2, 7400000, '', '2021-07-04'),
(5, 2, 7400000, '', '2021-07-04'),
(6, 2, 7400000, '', '2021-07-04'),
(7, 2, 13100000, '', '2021-07-04'),
(8, 1, 7150000, '', '2021-07-04'),
(9, 1, 9850000, '', '2021-07-04'),
(10, 2, 6500000, '', '2021-07-04'),
(11, 1, 5550000, '', '2021-07-05'),
(12, 1, 13100000, '', '2021-07-05'),
(14, 1, 4200000, '', '2021-07-05'),
(15, 1, 7400000, 'Quang Ngai', '2021-07-05'),
(16, 10, 2800000, 'tp.HCM', '2021-07-05');

-- --------------------------------------------------------

--
-- Table structure for table `billdetail`
--

CREATE TABLE `billdetail` (
  `BDid` int(25) NOT NULL,
  `billid` int(25) NOT NULL,
  `productid` int(25) NOT NULL,
  `quantily` int(25) NOT NULL,
  `price` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `billdetail`
--

INSERT INTO `billdetail` (`BDid`, `billid`, `productid`, `quantily`, `price`) VALUES
(19, 6, 2, 4, 1850000),
(20, 6, 1, 2, 1400000),
(21, 7, 2, 4, 1850000),
(22, 7, 1, 2, 1400000),
(23, 7, 3, 2, 1450000),
(24, 8, 3, 3, 1450000),
(25, 8, 1, 2, 1400000),
(26, 9, 1, 2, 1400000),
(27, 9, 2, 1, 1850000),
(28, 9, 3, 2, 1450000),
(29, 9, 4, 1, 2300000),
(30, 10, 1, 2, 1400000),
(31, 10, 2, 2, 1850000),
(32, 11, 2, 3, 1850000),
(33, 12, 2, 4, 1850000),
(34, 12, 1, 2, 1400000),
(35, 12, 3, 2, 1450000),
(37, 14, 1, 3, 1400000),
(38, 15, 2, 4, 1850000),
(39, 16, 1, 2, 1400000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(25) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(25) NOT NULL,
  `category` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `name`, `img`, `price`, `category`) VALUES
(1, 'Giường ngủ gỗ chất lượng cao cho gia đình', 'giuong-ngu-go', 1400000, 'giuong'),
(2, 'Giá sách gỗ tự nhiên thiết kế đẹp', 'gia-sach-go', 1850000, 'gia sach'),
(3, 'Tủ bếp gia đình gỗ sồi tự nhiên thiết kế hiện đại', 'tu-bep-gia-dinh', 1450000, 'tu-bep'),
(4, 'Tủ bếp gỗ tự nhiên thiết kế đa năng đẹp hiện đại', 'tu-bep-go-hien-dai', 2300000, 'tu-bep'),
(8, 'sabols2k', 'IMG-60e30edd9c6c84.01276799', 12222, 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(25) NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `email`, `password`, `firstname`, `lastname`, `phone`, `address`, `avatar`) VALUES
(1, 'dangducchau2000@gmail.com', '123456', 'Chau', 'Dang Duc', '0916144389', 'Quang Ngai', '1.jpg'),
(2, 'dangducchau2001@gmail.com', '123456', 'Chau', 'Dang Duc', '091614', 'KTX Khu A, Đại Học Quốc Gia TP. HCM', ''),
(4, 'dangducchau2003@gmail.com', '123456', 'Dang Duc', 'Không112', '0916144389', 'KDC số 1, thôn Đông', '60dea7a047f69441a059f680.jpg'),
(10, 'dangducchau2004@gmail.com', '123456', 'Dang Duc', 'Chau', '0916144389', 'TP.HCM', '10.jpg'),
(13, 'dangducchau2005@gmail.com', '123456', 'Dang Duc', 'Không', '0916144389', 'KDC số 1, thôn Đông', 'IMG-60e30b7e461f40.84247305.jpg'),
(14, 'dangducchau2006@gmail.com', '123456', 'Dang Duc', 'Không', '0916144389', 'KDC số 1, thôn Đông', 'img_avatar.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`billid`),
  ADD KEY `fk_user` (`userid`);

--
-- Indexes for table `billdetail`
--
ALTER TABLE `billdetail`
  ADD PRIMARY KEY (`BDid`),
  ADD KEY `fk_bill` (`billid`),
  ADD KEY `fk_product` (`productid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `billid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `billdetail`
--
ALTER TABLE `billdetail`
  MODIFY `BDid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

--
-- Constraints for table `billdetail`
--
ALTER TABLE `billdetail`
  ADD CONSTRAINT `fk_bill` FOREIGN KEY (`billid`) REFERENCES `bill` (`billid`),
  ADD CONSTRAINT `fk_product` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
