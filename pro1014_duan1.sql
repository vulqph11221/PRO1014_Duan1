-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2021 at 08:27 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro1014_duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_email` varchar(255) NOT NULL,
  `bill_tel` varchar(255) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1:Thanh toán trực tiếp\r\n2:Chuyển khoản\r\n3:Thanh toán online',
  `ngaydathang` date NOT NULL,
  `total` int(11) NOT NULL,
  `bill_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0:Đơn hàng mới\r\n1:Đang xử lý\r\n2:Đang giao hàng\r\n3:Đã giao hàng',
  `receive_name` varchar(255) DEFAULT NULL,
  `receive_address` varchar(255) DEFAULT NULL,
  `receive_email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `bill_name`, `bill_address`, `bill_email`, `bill_tel`, `bill_pttt`, `ngaydathang`, `total`, `bill_status`, `receive_name`, `receive_address`, `receive_email`) VALUES
(1, '', '', 'admin@gmail.com', '', 1, '0000-00-00', 110, 0, NULL, NULL, NULL),
(2, '', '', 'admin@gmail.com', '', 1, '0000-00-00', 50, 0, NULL, NULL, NULL),
(3, 'LE QUANG VU', 'trịnh văn bô, nam từ liêm, hà nội', 'vulqph11221@fpt.edu.vn', '0966869050', 1, '0000-00-00', 150, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noi_dung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ma_sp` int(10) NOT NULL,
  `ma_kh` int(10) NOT NULL,
  `ngay_them` date NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noi_dung`, `ma_sp`, `ma_kh`, `ngay_them`, `status`) VALUES
(1, 'nơi này có anh', 77, 4, '2021-12-01', '1'),
(2, 'chúng ta không thuộc về nhau', 77, 6, '2021-12-01', '1'),
(4, 'Linh Xinh đẹp', 77, 9, '2021-12-10', '1'),
(5, 'xanh', 75, 9, '2021-12-10', '1'),
(6, 'ee', 76, 4, '2021-12-10', '1'),
(7, 'ee', 76, 4, '2021-12-10', '1'),
(8, 'w', 76, 4, '2021-12-10', '1'),
(9, 'ok', 76, 4, '2021-12-10', '1'),
(10, 'ok', 75, 4, '2021-12-14', '1'),
(11, 'a\r\n', 76, 12, '2021-12-18', '1');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(1, 0, 76, 'upload/HOODIE OK.jpg', 'HOODIE OK', 40, 1, 40, 55),
(2, 0, 76, 'upload/HOODIE OK.jpg', 'HOODIE OK', 40, 1, 40, 55),
(3, 0, 76, 'upload/HOODIE OK.jpg', 'HOODIE OK', 40, 1, 40, 55),
(4, 0, 76, 'upload/HOODIE OK.jpg', 'HOODIE OK', 40, 1, 40, 57),
(5, 0, 76, 'upload/HOODIE OK.jpg', 'HOODIE OK', 40, 1, 40, 59),
(6, 0, 76, 'upload/HOODIE OK.jpg', 'HOODIE OK', 40, 1, 40, 61),
(7, 0, 74, 'upload/HOODIE WORK.jpg', 'HOODIE WORK', 60, 1, 60, 62),
(8, 0, 74, 'upload/HOODIE WORK.jpg', 'HOODIE WORK', 60, 1, 60, 62),
(9, 0, 75, 'upload/HOODIE XANH CABIN.jpeg', 'HOODIE CABIN XANH', 50, 1, 50, 62),
(10, 0, 75, 'upload/HOODIE XANH CABIN.jpeg', 'HOODIE CABIN XANH', 50, 1, 50, 62),
(11, 0, 75, 'upload/HOODIE XANH CABIN.jpeg', 'HOODIE CABIN XANH', 50, 1, 50, 62),
(12, 0, 74, 'upload/HOODIE WORK.jpg', 'HOODIE WORK', 60, 1, 60, 64),
(13, 0, 75, 'upload/HOODIE XANH CABIN.jpeg', 'HOODIE CABIN XANH', 50, 1, 50, 66),
(14, 0, 76, 'upload/HOODIE OK.jpg', 'HOODIE OK', 40, 1, 40, 68),
(15, 0, 76, 'upload/HOODIE OK.jpg', 'HOODIE OK', 40, 1, 40, 70),
(16, 0, 76, 'upload/HOODIE OK.jpg', 'HOODIE OK', 40, 1, 40, 72),
(17, 12, 73, 'upload/HOODIE MEZO.jpg', 'HOODIE MEZO', 50, 1, 50, 73),
(18, 12, 76, 'upload/HOODIE OK.jpg', 'HOODIE OK', 40, 1, 40, 1),
(19, 12, 77, 'upload/HOODIE NOVA.jpg', 'HOODIE NOVA', 50, 1, 50, 1),
(20, 12, 77, 'upload/HOODIE NOVA.jpg', 'HOODIE NOVA', 50, 1, 50, 2),
(21, 12, 77, 'upload/HOODIE NOVA.jpg', 'HOODIE NOVA', 50, 1, 50, 2);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(1, 'JACKET'),
(2, 'PANTS'),
(4, 'HOODIE'),
(6, 'TEE');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `size` text NOT NULL,
  `price` int(11) NOT NULL,
  `sell_price` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `iddm` int(11) NOT NULL,
  `mota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `amount`, `color`, `size`, `price`, `sell_price`, `img`, `luotxem`, `iddm`, `mota`) VALUES
(1, 'BUNNY&BEAR TEE', 30, 'Black, White', 'Freesize', 45, 0, 'BUNNY&BEAR TEE.jpg', 20, 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'),
(2, 'CHENILEE NOW TEE', 30, 'Black, White', 'Freesize', 30, 0, 'CHENILEE NOW TEE.jpg', 45, 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. '),
(44, 'GLOBAL ICON TEE', 30, 'Black, White', 'Freesize', 35, 0, 'GLOBAL ICON TEE.jpg', 10, 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'),
(45, 'JOURNY TEE', 0, 'Black, White', 'Freesize', 30, 0, 'JOURNEY TEE.jpg', 10, 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'),
(46, 'LOGO LINE TEE', 20, 'Black, White', 'Freesize', 20, 0, 'LOGO LINE TEE.jpg', 20, 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'),
(47, 'PIXEL TEE', 10, 'Black, White', 'Freesize', 30, 0, 'PIXEL TEE.jpg', 45, 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'),
(48, 'WASH SWEATPANTS', 20, 'Black, White', 'Freesize', 20, 0, 'WASH SWEATPANTS.jpg', 25, 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'),
(49, 'HOODIE ANGEL MST', 20, 'Black, White', 'Freesize', 30, 0, 'HOODIE ANGEL MST.jpg', 30, 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'),
(51, 'DISTRESSED STRETH', 10, 'Black, White', 'Freesize', 0, 0, 'DISTRESSED STRETH.jpg', 0, 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(52, 'OMBRE WASH JEANS', 15, 'Black, White', 'Freesize', 20, 0, 'OMBRE WASH JEANS.jpg', 10, 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(53, 'SPLIT HOINT DISYTESSED', 30, 'Black, White', 'Freesize', 30, 0, 'SPLIT HOINT DISTRESSED.jpg', 20, 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(54, 'SWEATPANTS LOGO', 20, 'Black, White', 'Freesize', 20, 0, 'SWEATPANTS LOGO.jpg', 10, 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(55, 'TAG RAW SWEATPANTS', 10, 'Black, White', 'Freesize', 20, 0, 'TAG RAW SWEATPANTS.jpg', 10, 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(56, 'WASH SWEATPANTS SHORTS', 0, 'Black, White', 'Freesize', 20, 0, 'WASH SWEATSHORTS.jpg', 10, 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(59, 'JACKET CARO', 1, 'Black, White', 'Freesize', 100, 0, 'JACKET (3).jpg', 10, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. '),
(60, 'JACKET LOKI', 1, 'Black, White', 'Freesize', 100, 0, 'JACKET (4).JPG', 10, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. '),
(61, 'BC 404', 1, 'Black, White', 'Freesize', 90, 0, 'BC 404.jpg', 2, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. '),
(62, 'BOMBER BMO', 1, 'Black, White', 'Freesize', 80, 0, 'BOMBER BMO.jpg', 2, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. '),
(63, 'BOMBER CUS', 0, 'Black, White', 'Freesize', 30, 0, 'BOMBER CUS.jpg', 2, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. '),
(64, 'BOMBER G', 1, 'Black, White', 'Freesize', 40, 0, 'BOMBER G.jpg', 2, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. '),
(65, 'BOMBER H', 1, 'Black, White', 'Freesize', 70, 0, 'BOMBER H.jpg', 2, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. '),
(66, 'BOMBER OFF', 1, 'Black, White', 'Freesize', 65, 0, 'BOMBER OFF.jpg', 2, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. '),
(67, 'BOMBER PSY', 1, 'Black, White', 'Freesize', 2, 0, 'BOMBER PSY.jpg', 80, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. '),
(68, 'BOMBER HOOD', 2, 'Black, White', 'Freesize', 45, 0, 'BOOMBER HOOD.jpg', 2, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. '),
(70, 'HOODIE CYNO', 2, 'Black, White', 'Freesize', 50, 0, 'HOODIE CYNO].jpeg', 1, 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. '),
(71, 'HOODIE DONE', 2, 'Black, White', 'Freesize', 40, 0, 'HOODIE DONE.jpg', 22, 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. '),
(72, 'HOODIE FREENOM', 1, 'Black, White', 'Freesize', 50, 0, 'HOODIE FREEDOM.jpg', 1, 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. '),
(73, 'HOODIE MEZO', 1, 'Black, White', 'Freesize', 50, 0, 'HOODIE MEZO.jpg', 1, 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. '),
(74, 'HOODIE WORK', 1, 'Black, White', 'Freesize', 60, 0, 'HOODIE WORK.jpg', 1, 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. '),
(75, 'HOODIE CABIN XANH', 1, 'Black, White', 'Freesize', 50, 0, 'HOODIE XANH CABIN.jpeg', 1, 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. '),
(76, 'HOODIE OK', 1, 'Black, White', 'Freesize', 40, 0, 'HOODIE OK.jpg', 1, 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. '),
(77, 'HOODIE NOVA', 1, 'Black, White', 'Freesize', 50, 0, 'HOODIE NOVA.jpg', 1, 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  `tel` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `role`, `status`, `tel`, `address`) VALUES
(4, 'hoa huệ', '123456', 'linhbttph13212@fpt.edu.vn', 1, 1, '', ''),
(6, 'customd', 'custom', 'custom@gmail.com', 1, 1, '0978473894', ''),
(9, 'hoa cúc', '123  12345', 'hoa@gmail.com', 2, 1, '', ''),
(11, 'Bui Thi Thuy Linh', '123456789', 'abczyx@fpt.edu.vn', 2, 1, '', ''),
(12, 'admin', 'admin', 'admin@gmail.com', 2, 1, '', ''),
(13, '123', '123', '123@gmail.com', 1, 1, '', ''),
(14, '1', '1', '1@gmail.com', 1, 1, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sp` (`ma_sp`) USING BTREE,
  ADD KEY `lk_binhluan_khachhang` (`ma_kh`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `lk_binhluan_khachhang` FOREIGN KEY (`ma_kh`) REFERENCES `taikhoan` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
