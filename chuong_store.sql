-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2024 at 06:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chuong_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `tenDanhMuc` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tenDanhMuc`, `image`) VALUES
(8, 'Áo', 'anhTC1.webp'),
(9, 'Quần', 'anhTC2.webp'),
(10, 'Váy', 'anhTC3.webp');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `id_giohang` int(11) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `type`) VALUES
(1, 'admin'),
(2, 'khachhang');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `image` varchar(100) NOT NULL,
  `sale` double(10,0) NOT NULL,
  `soluong` int(11) NOT NULL,
  `mota` varchar(250) NOT NULL,
  `gia` double(10,0) NOT NULL,
  `luot_mua` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `image`, `sale`, `soluong`, `mota`, `gia`, `luot_mua`, `id_danhmuc`) VALUES
(49, 'vay trang', 'sanPham3.webp', 999999, 50, 'Vay dep lam', 500000, 10, 10),
(50, 'vay hong', 'sanPham9.webp', 888888, 50, 'Vay dep lam', 600000, 10, 10),
(51, 'vay do', 'sanPham6.webp', 999999, 50, 'Vay dep lam', 800000, 10, 10),
(52, 'vay den', 'sanPham1.webp', 888888, 50, 'Vay dep lam', 1000000, 999999, 10),
(53, 'vay hong den', 'sanPham2.webp', 999999, 50, 'Vay dep lam', 120000, 888888, 10),
(54, 'vay do tim', 'sanPham3.webp', 888888, 50, 'Vay dep lam', 380000, 8686868, 10),
(55, 'dam da hoi', 'sanPham4.webp', 10, 50, 'Vay dep lam', 1000000, 10, 8),
(56, 'dam bong dem', 'sanPham5.webp', 666666, 50, 'Vay dep lam', 120000, 10, 8),
(57, 'quan ong loe', 'sanPham6.webp', 555555, 50, 'Vay dep lam', 380000, 10, 9),
(58, 'quan ong dai', 'sanPham7.webp', 333333, 50, 'Vay dep lam', 1000000, 10, 9),
(59, 'dam tre vai', 'sanPham9.webp', 700000, 50, 'Vay dep lam', 1200000, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham_giohang`
--

CREATE TABLE `sanpham_giohang` (
  `id_product` int(11) NOT NULL,
  `id_giohang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `ten` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_role` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `ten`, `email`, `phone`, `password`, `id_role`) VALUES
(3, 'chuonglee', 'chuong123@gmail.com', '0123456789', '123', 1),
(4, 'nguyen van a', 'khachhang123@gmail.com', '0822222222', '123', 2),
(5, 'nguyen van b', 'vanb@gmail.com', '0973872876', '123', 2),
(6, 'ưdqwdwdqwdw', 'sạbncajsbchj', '0343767191', '123', 2),
(7, 'kkkkk', 'fweurihfeuwihfewuihf', '0343767191', '11111', 2),
(8, 'ưdqwdwdqwdw', 'chuongldps37998@gmail.com', '0343767191', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_giohang` (`id_giohang`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Indexes for table `sanpham_giohang`
--
ALTER TABLE `sanpham_giohang`
  ADD KEY `id_giohang` (`id_giohang`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_giohang`) REFERENCES `giohang` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc` (`id`);

--
-- Constraints for table `sanpham_giohang`
--
ALTER TABLE `sanpham_giohang`
  ADD CONSTRAINT `sanpham_giohang_ibfk_1` FOREIGN KEY (`id_giohang`) REFERENCES `giohang` (`id`),
  ADD CONSTRAINT `sanpham_giohang_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `sanpham` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
