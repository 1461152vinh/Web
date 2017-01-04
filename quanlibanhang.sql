-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2016 at 03:07 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlibanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhmucsanpham`
--

CREATE TABLE `danhmucsanpham` (
  `id` int(11) NOT NULL,
  `masp` varchar(10) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `tenspc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `danhmucsanpham`
--

INSERT INTO `danhmucsanpham` (`id`, `masp`, `tensp`, `parent_id`, `tenspc`) VALUES
(1, '01', 'Non Style', 0, 'nonstyle'),
(2, '02', 'Áo sơ mi non style', 1, 'áo sơ mi non style'),
(3, '03', 'Amani ', 0, 'Amani'),
(4, '04', 'quần amani ', 3, 'quần amani '),
(5, '05', 'quần đùi amani ', 3, 'quần đùi amani '),
(6, '06', 'Ma Bư', 0, 'mabu'),
(7, '07', 'Áo Khoác ma bư', 6, 'áo khoác ma bư'),
(8, '08', 'áo thun ma bư', 6, 'áo thun ma bư'),
(9, '09', 'Gardian ', 0, 'Gardian '),
(10, '10', 'áo sơ mi gardian', 9, 'áo sơ mi gardian '),
(11, '11', 'áo thun gardian', 9, 'áo thun gardian');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `id_giaodich` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `tongtien` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `giaodich`
--

CREATE TABLE `giaodich` (
  `id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thoigiantao` date NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hinhsanpham`
--

CREATE TABLE `hinhsanpham` (
  `id` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `hinhanh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hinhsanpham`
--

INSERT INTO `hinhsanpham` (`id`, `idsp`, `hinhanh`) VALUES
(1, 1, 'img/sm11.jpg'),
(2, 1, 'img/sm12.jpg'),
(3, 1, 'img/sm13.jpg'),
(4, 1, 'img/sm14.jpg'),
(5, 2, 'img/sm21.jpg'),
(6, 2, 'img/sm22.jpg'),
(7, 2, 'img/sm23.jpg'),
(8, 2, 'img/sm24.jpg'),
(9, 3, 'img/sm31.jpg'),
(10, 3, 'img/sm32.jpg'),
(11, 3, 'img/sm33.jpg'),
(12, 3, 'img/sm34.jpg'),
(13, 4, 'img/sm41.jpg'),
(14, 4, 'img/sm42.jpg'),
(15, 4, 'img/sm43.jpg'),
(16, 4, 'img/sm44.jpg'),
(17, 5, 'img/sm51.jpg'),
(18, 5, 'img/sm52.jpg'),
(19, 5, 'img/sm53.jpg'),
(20, 5, 'img/sm54.jpg'),
(21, 6, 'img/sm61.jpg'),
(22, 6, 'img/sm62.jpg'),
(23, 6, 'img/sm63.jpg'),
(24, 6, 'img/sm64.jpg'),
(25, 7, 'img/sm71.jpg'),
(26, 7, 'img/sm72.jpg'),
(27, 7, 'img/sm73.jpg'),
(28, 7, 'img/sm74.jpg'),
(29, 8, 'img/sm81.jpg'),
(30, 8, 'img/sm82.jpg'),
(31, 8, 'img/sm83.jpg'),
(32, 8, 'img/sm84.jpg'),
(33, 9, 'img/sm91.jpg'),
(34, 9, 'img/sm92.jpg'),
(35, 9, 'img/sm93.jpg'),
(36, 9, 'img/sm94.jpg'),
(37, 10, 'img/sm101.jpg'),
(38, 10, 'img/sm021.jpg'),
(39, 10, 'img/sm103.jpg'),
(40, 10, 'img/sm104.jpg'),

(41, 11, 'img/sm105.jpg'),
(42, 12, 'img/sm106.jpg'),
(43, 13, 'img/sm107.jpg'),
(44, 14, 'img/sm108.jpg'),
(45, 15, 'img/sm109.jpg'),
(46, 16, 'img/sm110.jpg'),
(47, 17, 'img/sm111.jpg'),
(48, 18, 'img/sm112.jpg'),
(49, 19, 'img/sm113.jpg'),
(50, 20, 'img/sm114.jpg'),

(51, 21, 'img/sm115.jpg'),
(52, 22, 'img/sm116.jpg'),
(53, 23, 'img/sm117.jpg'),
(54, 24, 'img/sm118.jpg'),
(55, 25, 'img/sm119.jpg'),
(56, 26, 'img/sm120.jpg'),
(57, 27, 'img/sm121.jpg'),
(58, 28, 'img/sm122.jpg'),
(59, 29, 'img/sm123.jpg'),
(60, 30, 'img/sm124.jpg'),

(61, 31, 'img/sm125.jpg'),
(62, 32, 'img/sm126.jpg'),
(63, 33, 'img/sm127.jpg'),
(64, 34, 'img/sm128.jpg'),
(65, 35, 'img/sm129.jpg'),
(66, 36, 'img/sm130.jpg'),
(67, 37, 'img/sm131.jpg'),
(68, 38, 'img/sm132.jpg'),
(69, 39, 'img/sm133.jpg'),
(70, 40, 'img/sm134.jpg'),

(71, 41, 'img/sm135.jpg'),
(72, 42, 'img/sm136.jpg'),
(73, 43, 'img/sm137.jpg'),
(74, 44, 'img/sm138.jpg'),
(75, 45, 'img/sm139.jpg'),
(76, 46, 'img/sm140.jpg'),
(77, 47, 'img/sm141.jpg'),
(78, 48, 'img/sm142.jpg'),
(79, 49, 'img/sm143.jpg'),
(80, 50, 'img/sm144.jpg'),

(81, 51, 'img/sm145.jpg'),
(82, 52, 'img/sm146.jpg'),
(83, 53, 'img/sm147.jpg'),
(84, 54, 'img/sm148.jpg'),
(85, 55, 'img/sm149.jpg'),
(86, 56, 'img/sm150.jpg'),
(87, 57, 'img/sm151.jpg'),
(88, 58, 'img/sm152.jpg'),
(89, 59, 'img/sm153.jpg'),
(90, 60, 'img/sm154.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `mact` varchar(10) NOT NULL,
  `masp` varchar(10) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `gia` int(11) NOT NULL,
  `chieckhau` int(11) NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `thoidiemtao` date NOT NULL,
  `view` int(11) NOT NULL,
  `dmsp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `mact`, `masp`, `tensp`, `gia`, `chieckhau`, `hinhanh`, `thoidiemtao`, `view`, `dmsp_id`) VALUES
(1, '01', '02', 'Áo sơ mi non style nam', 200000, 0, 'img/sm1.jpg', '2016-11-07', 0, 2),
(2, '02', '02', 'sơ mi non style ngắn', 200000, 0, 'img/sm2.jpg', '2016-11-01', 0, 2),
(3, '03', '04', 'quần sọc amani ', 100000, 0, 'img/sm3.jpg', '2016-11-08', 0, 4),
(4, '04', '08', 'áo thun ma bư tay ngắn', 300000, 0, 'img/sm4.jpg', '2016-11-16', 0, 8),
(5, '05', '07', 'áo khoác ma bư cực chất', 400000, 0, 'img/sm5.jpg', '2016-11-09', 0, 7),
(6, '06', '10', 'áo sơ my gardian công sở', 300000, 0, 'img/sm6.jpg', '2016-11-16', 0, 10),
(7, '07', '10', 'sơ mi garidan dạo phố', 300000, 0, 'img/sm7.jpg', '2016-11-09', 0, 10),
(8, '08', '11', 'áo thun gadian cực chất', 200000, 0, 'img/sm8.jpg', '2016-11-16', 0, 11),
(9, '09', '11', 'áo thun gadian cho người trung niên', 100000, 0, 'img/sm9.jpg', '2016-11-08', 0, 11),
(10, '10', '04', 'quần jean amani ', 500000, 0, 'img/sm10.jpg', '2016-11-08', 0, 3),
(11, '11', '02', 'áo sơ mi non style dài vải Hàn', 300000, 0, 'img/sm105.jpg', '2016-11-08', 0, 2),
(12, '12', '02', 'áo sơ mi non style dài kiểu Hàn', 350000, 0, 'img/sm106.jpg', '2016-11-08', 0, 2),
(13, '13', '02', 'áo sơ mi non style ngắn đơn giản', 200000, 0, 'img/sm107.jpg', '2016-11-08', 0, 2),
(14, '14', '02', 'áo sơ mi non style ngắn chất', 400000, 0, 'img/sm108.jpg', '2016-11-08', 0, 2),
(15, '15', '04', 'quần sọc amani dạo phố', 150000, 0, 'img/sm109.jpg', '2016-11-09', 0, 4),
(16, '16', '04', 'quần sọc amani theo bộ', 200000, 0, 'img/sm110.jpg', '2016-11-09', 0, 4),
(17, '17', '04', 'quần sọc amani kiểu nữ', 180000, 0, 'img/sm111.jpg', '2016-11-09', 0, 4),
(18, '18', '08', 'áo thun ma bư tay ngắn cho giới trẻ', 180000, 0, 'img/sm112.jpg', '2016-11-16', 0, 8),
(19, '19', '08', 'áo thun ma bư tay ngắn kiểu mới', 190000, 0, 'img/sm113.jpg', '2016-11-16', 0, 8),
(20, '20', '08', 'áo thun ma bư tay ngắn trẻ trung', 130000, 0, 'img/sm114.jpg', '2016-11-16', 0, 8),
(21, '21', '02', 'áo sơ mi non style nam trẻ và chất', 255000, 0, 'img/sm115.jpg', '2016-11-20', 0, 2),
(22, '22', '08', 'áo thun ma bư tay ngắn theo phong cách Tây', 250000, 0, 'img/sm116.jpg', '2016-11-20', 0, 8),
(23, '23', '08', 'áo thun ma bư có cổ', 200000, 0, 'img/sm117.jpg', '2016-11-17', 0, 8),
(24, '24', '08', 'áo thun ma bư tay ngắn đẹp mà chất', 180000, 0, 'img/sm118.jpg', '2016-11-17', 0, 8),
(25, '25', '08', 'áo thun ma bư tay ngắn kiểu nữ cực chất', 180000, 0, 'img/sm119.jpg', '2016-11-17', 0, 8),
(26, '26', '08', 'áo thun ma bư tay ngắn nữ dễ thương', 180000, 0, 'img/sm120.jpg', '2016-11-18', 0, 8),
(27, '27', '08', 'áo thun ma bư tay ngắn nữ cá tính', 140000, 0, 'img/sm121.jpg', '2016-11-18', 0, 8),
(28, '28', '08', 'áo thun ma bư tay dài kiểu nam và nữ', 160000, 0, 'img/sm122.jpg', '2016-11-18', 0, 8),
(29, '29', '08', 'áo thun ma bư tay dài nam', 160000, 0, 'img/sm123.jpg', '2016-11-18', 0, 8),
(30, '30', '07', 'áo khoác ma bư nam cực chất', 250000, 0, 'img/sm124.jpg', '2016-11-18', 0, 7),
(31, '31', '07', 'áo khoác ma bư nam cá tính', 290000, 0, 'img/sm125.jpg', '2016-11-18', 0, 7),
(32, '32', '07', 'áo khoác ma bư nam phong cách', 300000, 0, 'img/sm126.jpg', '2016-11-18', 0, 7),
(33, '33', '07', 'áo khoác ma bư nam đơn giản', 290000, 0, 'img/sm127.jpg', '2016-11-18', 0, 7),
(34, '34', '07', 'áo khoác ma bư nam tay da', 290000, 0, 'img/sm128.jpg', '2016-11-18', 0, 7),
(35, '35', '07', 'áo khoác ma bư nữ trẻ trung', 290000, 0, 'img/sm129.jpg', '2016-11-18', 0, 7),
(36, '36', '07', 'áo khoác ma bư nam đơn giản', 290000, 0, 'img/sm130.jpg', '2016-11-18', 0, 7),
(37, '37', '07', 'áo khoác ma bư nam bằng da', 350000, 0, 'img/sm131.jpg', '2016-11-18', 0, 7),
(38, '38', '07', 'áo khoác ma bư nam đỏ', 290000, 0, 'img/sm132.jpg', '2016-11-18', 0, 7),
(39, '39', '07', 'áo khoác ma bư nữ đơn giản', 290000, 0, 'img/sm133.jpg', '2016-11-18', 0, 7),
(40, '40', '07', 'áo khoác ma bư nam cực ngầu', 290000, 0, 'img/sm134.jpg', '2016-11-18', 0, 7),
(41, '41', '07', 'áo khoác ma bư nam và nữ cực xì teen', 230000, 0, 'img/sm135.jpg', '2016-11-18', 0, 7),
(42, '42', '07', 'áo khoác ma bư nữ trẻ trung', 290000, 0, 'img/sm136.jpg', '2016-11-18', 0, 7),
(43, '43', '07', 'áo khoác ma bư nữ tươi tắn', 210000, 0, 'img/sm137.jpg', '2016-11-18', 0, 7),
(44, '44', '07', 'áo khoác ma bư nam có nón', 200000, 0, 'img/sm138.jpg', '2016-11-18', 0, 7),
(45, '45', '10', 'áo sơ my gardian nữ', 200000, 0, 'img/sm139.jpg', '2016-11-18', 0, 10),
(46, '46', '10', 'áo sơ my gardian nữ công sở', 255000, 0, 'img/sm140.jpg', '2016-11-18', 0, 10),
(47, '47', '10', 'áo sơ my gardian nam ', 250000, 0, 'img/sm141.jpg', '2016-11-18', 0, 10),
(48, '48', '10', 'áo sơ my gardian nam lịch lãm', 255000, 0, 'img/sm142.jpg', '2016-11-18', 0, 10),
(49, '49', '10', 'áo sơ my gardian nam phong cách', 300000, 0, 'img/sm143.jpg', '2016-11-18', 0, 10),
(50, '50', '10', 'áo sơ my gardian nữ tinh tế', 155000, 0, 'img/sm144.jpg', '2016-11-18', 0, 10),
(51, '51', '10', 'áo sơ my gardian nữ công sở', 255000, 0, 'img/sm145.jpg', '2016-11-18', 0, 10),
(52, '52', '11', 'áo thun gadian nữ cực chất', 200000, 0, 'img/sm146.jpg', '2016-11-16', 0, 11),
(53, '53', '11', 'áo thun gadian nam tay dài', 220000, 0, 'img/sm147.jpg', '2016-11-16', 0, 11),
(54, '54', '11', 'áo thun gadian nữ cho mùa thu', 200000, 0, 'img/sm148.jpg', '2016-11-16', 0, 11),
(55, '55', '11', 'áo thun gadian nữ cho mùa hè', 200000, 0, 'img/sm149.jpg', '2016-11-16', 0, 11),
(56, '56', '11', 'áo thun gadian nữ trẻ trung', 350000, 0, 'img/sm150.jpg', '2016-11-16', 0, 11),
(57, '57', '04', 'quần jean amani nam', 500000, 0, 'img/sm151.jpg', '2016-11-08', 0, 3),
(58, '58', '04', 'quần jean amani nam màu xám', 500000, 0, 'img/sm152.jpg', '2016-11-08', 0, 3),
(59, '59', '04', 'quần jean amani nam trẻ trung', 500000, 0, 'img/sm153.jpg', '2016-11-08', 0, 3),
(60, '60', '04', 'quần jean amani nữ cá tính', 500000, 0, 'img/sm154.jpg', '2016-11-08', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tkkhachhang`
--

CREATE TABLE `tkkhachhang` (
  `id` int(11) NOT NULL,
  `tenkh` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `dienthoai` varchar(15) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  ADD PRIMARY KEY (`id`,`masp`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giaodich`
--
ALTER TABLE `giaodich`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hinhsanpham`
--
ALTER TABLE `hinhsanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tkkhachhang`
--
ALTER TABLE `tkkhachhang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `giaodich`
--
ALTER TABLE `giaodich`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hinhsanpham`
--
ALTER TABLE `hinhsanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tkkhachhang`
--
ALTER TABLE `tkkhachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
