-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 03:01 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_seni_kreatif`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama`, `email`, `password`) VALUES
(1, 'Umam Alfarizi', 'tes@gmail.com', 'ce0f6c28b5869ff166714da5fe08554c70c731a335ff9702e38b00f81ad348c6'),
(7, 'Umam Gper', '123@gmail.com', '7bc84385b690496940a70fb8dd5ce9f6f0975a66a07861e077d63d984a7cd06d');

-- --------------------------------------------------------

--
-- Table structure for table `tb_foto_produk`
--

CREATE TABLE `tb_foto_produk` (
  `id_foto_produk` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_aksesoris`
--

CREATE TABLE `tb_jenis_aksesoris` (
  `id_jenis_aksesoris` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jenis_aksesoris`
--

INSERT INTO `tb_jenis_aksesoris` (`id_jenis_aksesoris`, `nama`) VALUES
(1, 'Kain'),
(2, 'Syal'),
(3, 'Selendang'),
(4, 'Sapuk'),
(7, 'Sepatu'),
(8, 'Sandal');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama`) VALUES
(1, 'Tenun Datar'),
(2, 'Songket'),
(7, 'Tes');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `id_jenis_aksesoris` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `stok` int(5) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `id_kategori`, `nama`, `foto`, `id_jenis_aksesoris`, `harga`, `stok`, `deskripsi`) VALUES
(35, 1, 'Tes', 'penyimpanan/product-01.jpg', 1, 100000, 10, 'tulis keterangan produk'),
(36, 1, 'Tes1', 'penyimpanan/product-02.jpg', 2, 10500, 123, 'tulis keterangan produk 1'),
(37, 1, 'Tes2', 'penyimpanan/product-03.jpg', 3, 23000, 23, 'tulis keterangan produk'),
(38, 1, 'Tes3', 'penyimpanan/product-04.jpg', 4, 90000, 90, 'tulis keterangan produk3'),
(40, 2, 'Tes5', 'penyimpanan/product-06.jpg', 2, 12000, 50, 'tulis keterangan produk'),
(41, 2, 'Tes6', 'penyimpanan/product-07.jpg', 2, 12222, 12, 'tulis keterangan produk berserta keunggulannya'),
(42, 2, 'Tes7', 'penyimpanan/product-08.jpg', 3, 30000, 30, 'tulis keterangan produk berserta keunggulannya'),
(43, 2, 'Tes9', 'penyimpanan/product-10.jpg', 4, 100000, 100, 'tulis keterangan produk berserta keunggulannya'),
(45, 7, 'Tes11', 'penyimpanan/product-12.jpg', 1, 30000, 30, 'tulis keterangan produk berserta keunggulannya'),
(47, 7, 'Tes11', 'penyimpanan/product-13.jpg', 3, 123000, 123, 'tulis keterangan produk berserta keunggulannya2'),
(51, 7, 'Tes14', 'penyimpanan/product-detail-01.jpg', 7, 908000, 90, 'tulis keterangan produk berserta keunggulannya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_foto_produk`
--
ALTER TABLE `tb_foto_produk`
  ADD PRIMARY KEY (`id_foto_produk`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_produk_2` (`id_produk`);

--
-- Indexes for table `tb_jenis_aksesoris`
--
ALTER TABLE `tb_jenis_aksesoris`
  ADD PRIMARY KEY (`id_jenis_aksesoris`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_jenis_aksesoris` (`id_jenis_aksesoris`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_foto_produk`
--
ALTER TABLE `tb_foto_produk`
  MODIFY `id_foto_produk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_jenis_aksesoris`
--
ALTER TABLE `tb_jenis_aksesoris`
  MODIFY `id_jenis_aksesoris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_foto_produk`
--
ALTER TABLE `tb_foto_produk`
  ADD CONSTRAINT `tb_foto_produk_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD CONSTRAINT `tb_produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_produk_ibfk_2` FOREIGN KEY (`id_jenis_aksesoris`) REFERENCES `tb_jenis_aksesoris` (`id_jenis_aksesoris`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
