-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 27, 2022 at 05:32 PM
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
-- Database: `myshop`
--
CREATE DATABASE IF NOT EXISTS `myshop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `myshop`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Quyen` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `Quyen`) VALUES
(1, 'admin', '25d55ad283aa400af464c76d713c07ad', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id` int(11) NOT NULL,
  `Gia` int(11) NOT NULL,
  `SoLuong` int(5) NOT NULL,
  `TongTien` varchar(14) NOT NULL,
  `ID_DonHang` int(11) NOT NULL,
  `ID_SanPham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id`, `Gia`, `SoLuong`, `TongTien`, `ID_DonHang`, `ID_SanPham`) VALUES
(55, 850000, 2, '1700000', 36, 7),
(57, 850000, 1, '850000', 38, 7),
(58, 850000, 1, '850000', 39, 7),
(59, 850000, 1, '850000', 40, 7),
(60, 750000, 1, '750000', 41, 11),
(61, 650000, 1, '650000', 41, 9),
(62, 1050000, 1, '1050000', 42, 28),
(63, 750000, 1, '750000', 42, 12),
(64, 2250000, 1, '2250000', 43, 23),
(65, 750000, 1, '750000', 44, 12),
(66, 1050000, 1, '1050000', 44, 28);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `TrangThai` int(1) NOT NULL,
  `NgayTaoDon` varchar(13) NOT NULL,
  `NgayDuyetDon` varchar(13) NOT NULL DEFAULT '0',
  `ID_KhachHang` int(11) NOT NULL,
  `TatHienThi` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id`, `TrangThai`, `NgayTaoDon`, `NgayDuyetDon`, `ID_KhachHang`, `TatHienThi`) VALUES
(36, 3, '2022-04-24', '0', 5, 0),
(38, 4, '2022-04-25', '0', 5, 0),
(39, 1, '2022-04-25', '0', 5, 0),
(40, 1, '2022-04-25', '0', 5, 0),
(41, 4, '2022-04-25', '0', 5, 0),
(42, 3, '2022-04-25', '0', 5, 0),
(43, 1, '2022-04-25', '0', 5, 0),
(44, 3, '2022-04-27', '0', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `id` int(11) NOT NULL,
  `SoLuong` int(5) NOT NULL,
  `ID_KhachHang` int(11) NOT NULL,
  `ID_SanPham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`id`, `SoLuong`, `ID_KhachHang`, `ID_SanPham`) VALUES
(57, 1, 5, 8),
(58, 1, 5, 9);

-- --------------------------------------------------------

--
-- Table structure for table `hinhanh`
--

CREATE TABLE `hinhanh` (
  `id` int(11) NOT NULL,
  `ID_SanPham` int(11) NOT NULL,
  `HinhAnh` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hinhanh`
--

INSERT INTO `hinhanh` (`id`, `ID_SanPham`, `HinhAnh`) VALUES
(5, 7, 'nikeairshadow3.jpg'),
(6, 7, 'nikeairshadow4.jpg'),
(11, 7, 'nikeairshadow2.jpg'),
(12, 8, 'nikeairjordanxam.jpg'),
(13, 8, 'nikeairjordanxam_3.jpg'),
(14, 8, 'nikeairjordanxam_4.jpg'),
(15, 9, 'nikeairmax97_2.jpg'),
(16, 9, 'nikeairmax97_3.jpg'),
(17, 9, 'nikeairmax97_4.jpg'),
(18, 10, 'adidasTubular1.jpg'),
(19, 10, 'adidasTubular2.jpg'),
(20, 10, 'adidasTubular.jpg'),
(21, 11, 'adidasmuiso.jpg'),
(22, 11, 'adidasmuiso2.jpg'),
(23, 11, 'adidasmuiso3.jpg'),
(25, 12, 'AdidasUltraBoostxanhtim.jpg'),
(26, 12, 'AdidasUltraBoostxanhtim2.jpg'),
(27, 12, 'AdidasUltraBoostxanhtim3.jpg'),
(28, 13, 'airforcefulltrang.jpg'),
(29, 13, 'airforcefulltrang2.jpg'),
(30, 13, 'airforcefulltrang3.jpg'),
(31, 14, 'offwhite.jpg'),
(32, 14, 'offwhite2.jpg'),
(33, 14, 'offwhite3.jpg'),
(34, 15, 'f1low.1jpg.jpg'),
(35, 15, 'f1low.jpg'),
(36, 15, 'f1low2.jpg'),
(37, 16, 'nikezoom_2.jpg'),
(38, 16, 'nikezoom_3.jpg'),
(39, 16, 'nikezoom_4.jpg'),
(40, 17, 'nikehong.jpg'),
(41, 17, 'nikehong2.jpg'),
(42, 17, 'nikehong3.jpg'),
(43, 18, 'vienbac.jpg'),
(44, 18, 'vienbac1.jpg'),
(45, 18, 'vienbac2.jpg'),
(46, 19, 'nikeairforcexanhngoc.jpg'),
(47, 19, 'nikeairforcexanhngoc_2.jpg'),
(48, 19, 'nikeairforcexanhngoc_3.jpg'),
(49, 20, 'n83.jpg'),
(50, 20, 'n83_1.jpg'),
(51, 20, 'n83_2.jpg'),
(52, 21, 'nikecost2.jpeg'),
(53, 21, 'nikecost.jpeg'),
(54, 21, 'nikecost3.jpeg'),
(58, 22, 'adidasAlphaB.jpeg'),
(59, 22, 'adidasAlphaB2.jpeg'),
(60, 22, 'adidasAlphaB3.jpeg'),
(61, 23, 'hologram1.jpeg'),
(62, 23, 'hologram2.jpeg'),
(63, 23, 'hologram3.jpeg'),
(64, 24, 'r1.jpeg'),
(65, 24, 'r1_2.jpeg'),
(66, 24, 'r1_3.jpeg'),
(67, 25, 'sockgrey.jpeg'),
(68, 25, 'sockgrey2.jpeg'),
(69, 25, 'sockgrey3.jpeg'),
(70, 26, 'star1.jpeg'),
(71, 26, 'star2.jpeg'),
(72, 26, 'star3.jpeg'),
(73, 27, 'vansdentrang1.jpeg'),
(74, 27, 'vansdentrang.jpeg'),
(75, 27, 'vansdentrang2.jpeg'),
(76, 28, 'vanslip1.jpeg'),
(77, 28, 'vanslip3.jpeg'),
(78, 28, 'vanslip2.jpeg'),
(79, 29, 'vanswoman.jpeg'),
(80, 29, 'vanswoman1.jpeg'),
(81, 29, 'vanswoman2.jpeg'),
(82, 30, 'vansskool.jpg'),
(83, 30, 'vansskool2.jpg'),
(84, 30, 'vansskool3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `HoTen` varchar(60) NOT NULL,
  `TenTaiKhoan` varchar(60) NOT NULL,
  `MatKhau` varchar(100) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `SoDienThoai` varchar(10) NOT NULL,
  `Khoa` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id`, `HoTen`, `TenTaiKhoan`, `MatKhau`, `DiaChi`, `SoDienThoai`, `Khoa`) VALUES
(4, 'phương nguyễn', 'b1909976', '25d55ad283aa400af464c76d713c07ad', 'Kien Giang', '0858235239', 0),
(5, 'phương', 'b1909977', '25f9e794323b453885f5181f1b624d0b', 'Kien Giang Minh dep lam sao', '0858235239', 0),
(6, 'phuong', 'phuong', '25d55ad283aa400af464c76d713c07ad', 'Kien Giang', '0858235239', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `TenSP` varchar(255) NOT NULL,
  `KichCo` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `GiaChinhThuc` int(11) NOT NULL,
  `GiaGiam` int(11) NOT NULL DEFAULT 0,
  `ID_Thuonghieu` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `new` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `TenSP`, `KichCo`, `SoLuong`, `GiaChinhThuc`, `GiaGiam`, `ID_Thuonghieu`, `slug`, `new`) VALUES
(7, 'Giày Thể Thao XSPORT Ni.ke air shadow Rep 1:1', 42, 15, 850000, 0, 1, 'Giay The Thao XSPORT Ni.ke air shadow Rep 1:1', 1),
(8, 'Gìay thể thao XSPORT Nike Jordan 1 Low Xám Đế Xanh REP', 42, 20, 850000, 0, 1, 'Giay the thao XSPORT Nike Jordan 1 Low Xam De Xanh REP', 1),
(9, 'Giày Thể Thao XSPORT Ni.ke Air Max 97', 42, 19, 850000, 650000, 1, 'Giay The Thao XSPORT Ni.ke Air Max 97', 1),
(10, 'Gìay thể thao XSPORT Adidas Tubular Shadow Xám Kem', 42, 20, 750000, 0, 2, 'Giay the thao XSPORT Adidas Tubular Shadow Xam Kem', 0),
(11, 'Adidas Superstar Trắng Kẻ Đen Mũi Sò REP 1:1', 41, 19, 750000, 0, 2, 'Adidas Superstar Trang Ke Den Mui So REP 1:1', 1),
(12, 'Adidas Ultra Boost 6.0 Xám Tím REP', 43, 18, 750000, 0, 2, 'Adidas Ultra Boost 6.0 Xam Tim REP', 1),
(13, 'Giày Thể Thao XSPORT Ni.ke Air Force 1 Full Trắng 1:1 REP', 43, 20, 950000, 0, 1, 'Giay The Thao XSPORT Ni.ke Air Force 1 Full Trang 1:1 REP', 1),
(14, 'Giày Thể Thao XSPORT Ni.ke Air Jordan 4 Retro Off White Kem REP 1:1', 43, 20, 930000, 0, 1, 'Giay The Thao XSPORT Ni.ke Air Jordan 4 Retro Off White Kem REP 1:1', 0),
(15, 'Giày Thể Thao XSPORT Ni.ke Jordan 1 F1 Low', 42, 20, 500000, 450000, 1, 'Giay The Thao XSPORT Ni.ke Jordan 1 F1 Low', 0),
(16, 'Nike Zoom T67 SF', 41, 20, 500000, 0, 1, 'Nike Zoom T67 SF', 0),
(17, 'Nike Jordan 1 High Hồng REP', 41, 20, 550000, 0, 1, 'Nike Jordan 1 High Hong REP', 0),
(18, 'Nike Jordan 1 Low Xanh Viền Bạc REP', 42, 20, 550000, 0, 1, 'Nike Jordan 1 Low Xanh Vien Bac REP', 0),
(19, 'Nike Air Force 1 Shadow Xanh Ngọc Rep 1 :1', 42, 20, 850000, 0, 1, 'Nike Air Force 1 Shadow Xanh Ngoc Rep 1 :1', 0),
(20, 'Giày Nike Giá Rẻ N83 2019', 42, 20, 450000, 250000, 1, 'Giay Nike Gia Re N83 2019', 0),
(21, 'NIKE DUNK LOW COAST', 42, 20, 950000, 0, 1, 'NIKE DUNK LOW COAST', 0),
(22, 'Giày Adidas Alphabounce', 42, 20, 2100000, 0, 2, 'Giay Adidas Alphabounce', 1),
(23, 'Giày Adidas NMD R1 Black Hologram', 43, 19, 2250000, 0, 2, 'Giay Adidas NMD R1 Black Hologram', 1),
(24, 'Giày Adidas NMD R1 White', 42, 20, 2100000, 0, 2, 'Giay Adidas NMD R1 White', 0),
(25, 'Giày Adidas NMD CS1 PK City Sock Grey', 43, 20, 1750000, 0, 2, 'Giay Adidas NMD CS1 PK City Sock Grey', 0),
(26, 'Giày Adidas Star Wars x NMD R1 V2 Lando Calrissia', 42, 20, 1650000, 0, 2, 'Giay Adidas Star Wars x NMD R1 V2 Lando Calrissia', 0),
(27, 'Giày Vans Old Skool Black White', 42, 20, 1350000, 0, 3, 'Giay Vans Old Skool Black White', 1),
(28, 'Giày Vans Vault OG SLIP-ON LX', 40, 18, 1050000, 0, 3, 'Giay Vans Vault OG SLIP-ON LX', 0),
(29, 'Giày Vans Asher Canvas Slip-on Women\'s White ', 39, 20, 750000, 0, 3, 'Giay Vans Asher Canvas Slip-on Women\'s White ', 0),
(30, 'Giày Vans Old Skool Style 36 Marshmallow', 36, 20, 1850000, 0, 3, 'Giay Vans Old Skool Style 36 Marshmallow', 0);

-- --------------------------------------------------------

--
-- Table structure for table `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `id` int(11) NOT NULL,
  `TenThuongHieu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thuonghieu`
--

INSERT INTO `thuonghieu` (`id`, `TenThuongHieu`) VALUES
(1, 'nike'),
(2, 'adidas'),
(3, 'vans');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_DonHang` (`ID_DonHang`),
  ADD KEY `ID_SanPham` (`ID_SanPham`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_KhachHang` (`ID_KhachHang`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_KhachHang` (`ID_KhachHang`),
  ADD KEY `ID_SanPham` (`ID_SanPham`);

--
-- Indexes for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_SanPham` (`ID_SanPham`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_Thuonghieu` (`ID_Thuonghieu`);

--
-- Indexes for table `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`ID_SanPham`) REFERENCES `sanpham` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`ID_DonHang`) REFERENCES `donhang` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`ID_KhachHang`) REFERENCES `khachhang` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`ID_SanPham`) REFERENCES `sanpham` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`ID_KhachHang`) REFERENCES `khachhang` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD CONSTRAINT `hinhanh_ibfk_1` FOREIGN KEY (`ID_SanPham`) REFERENCES `sanpham` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`ID_Thuonghieu`) REFERENCES `thuonghieu` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
