-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2019 at 01:38 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailpemesanan`
--

CREATE TABLE `detailpemesanan` (
  `no_pemesanan` varchar(15) NOT NULL,
  `lama_pesan` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `tanggal_pesan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailpemesanan`
--

INSERT INTO `detailpemesanan` (`no_pemesanan`, `lama_pesan`, `total_harga`, `tanggal_pesan`) VALUES
('572WYiftzcSIDMQ', 3, 180000, '2019-06-14'),
('cOBU7CYjiTulKSQ', 3, 240000, '2019-06-15');

-- --------------------------------------------------------

--
-- Table structure for table `fotoproduk`
--

CREATE TABLE `fotoproduk` (
  `id_foto` int(11) NOT NULL,
  `nama_foto` varchar(50) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fotoproduk`
--

INSERT INTO `fotoproduk` (`id_foto`, `nama_foto`, `ukuran`, `tipe`) VALUES
(1, 'matras.jpg', 36785, 'image/jpeg'),
(2, 'tenda.jpg', 18532, 'image/jpeg'),
(3, 'kompor.jpg', 274630, 'image/jpeg'),
(4, 'tas.jpg', 41388, 'image/jpeg'),
(5, 'sleepingbag.jpg', 40013, 'image/jpeg'),
(6, 'sepatu.jpg', 119851, 'image/jpeg'),
(7, 'sendal.jpg', 89811, 'image/jpeg'),
(8, 'headlamp.jpg', 113428, 'image/jpeg'),
(9, 'setjaket.jpg', 49480, 'image/jpeg'),
(10, 'jaket.jpg', 93849, 'image/jpeg'),
(11, 'jaket2.jpg', 60110, 'image/jpeg'),
(12, 'jaket3.jpg', 49310, 'image/jpeg'),
(13, 'celana.jpg', 42715, 'image/jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `itemproduk`
--

CREATE TABLE `itemproduk` (
  `id_bar` int(11) NOT NULL,
  `nama_bar` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `id_foto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemproduk`
--

INSERT INTO `itemproduk` (`id_bar`, `nama_bar`, `stok`, `harga`, `id_foto`) VALUES
(1, 'Matras', 20, 10000, 1),
(2, 'Tenda', 20, 20000, 2),
(3, 'Kompor', 20, 15000, 3),
(4, 'Tas', 20, 15000, 4),
(5, 'Sleeping Bag', 20, 15000, 5),
(6, 'Sepatu Hiking', 20, 15000, 6),
(7, 'Sendal', 20, 10000, 7),
(8, 'Headlamp', 20, 15000, 8),
(9, 'Set Jaket', 20, 15000, 9),
(10, 'Jaket 1', 20, 25000, 10),
(11, 'Jaket 2', 20, 20000, 11),
(12, 'Jaket 3', 20, 25000, 12),
(13, 'Celana', 20, 20000, 13);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pesan` int(11) NOT NULL,
  `id_pelanggan` varchar(20) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `no_pemesanan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pesan`, `id_pelanggan`, `nama_pelanggan`, `email`, `no_pemesanan`) VALUES
(9, '123123', 'sadbas', 'aba@asda', '572WYiftzcSIDMQ'),
(10, '13124', 'asaaa', 'aa@aaa', 'cOBU7CYjiTulKSQ');

-- --------------------------------------------------------

--
-- Table structure for table `produkpemesanan`
--

CREATE TABLE `produkpemesanan` (
  `id_order` int(11) NOT NULL,
  `nomor_pemesanan` varchar(15) NOT NULL,
  `id_bar` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `kuantitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produkpemesanan`
--

INSERT INTO `produkpemesanan` (`id_order`, `nomor_pemesanan`, `id_bar`, `harga`, `kuantitas`) VALUES
(10, '572WYiftzcSIDMQ', 4, 15000, 1),
(11, '572WYiftzcSIDMQ', 6, 15000, 3),
(12, 'cOBU7CYjiTulKSQ', 1, 10000, 2),
(13, 'cOBU7CYjiTulKSQ', 6, 15000, 3),
(14, 'cOBU7CYjiTulKSQ', 8, 15000, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detailpemesanan`
--
ALTER TABLE `detailpemesanan`
  ADD PRIMARY KEY (`no_pemesanan`);

--
-- Indexes for table `fotoproduk`
--
ALTER TABLE `fotoproduk`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `itemproduk`
--
ALTER TABLE `itemproduk`
  ADD PRIMARY KEY (`id_bar`),
  ADD KEY `id_foto` (`id_foto`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `no_pemesanan` (`no_pemesanan`);

--
-- Indexes for table `produkpemesanan`
--
ALTER TABLE `produkpemesanan`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `nomor_pemesanan` (`nomor_pemesanan`,`id_bar`),
  ADD KEY `id_bar` (`id_bar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fotoproduk`
--
ALTER TABLE `fotoproduk`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `itemproduk`
--
ALTER TABLE `itemproduk`
  MODIFY `id_bar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `produkpemesanan`
--
ALTER TABLE `produkpemesanan`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `itemproduk`
--
ALTER TABLE `itemproduk`
  ADD CONSTRAINT `itemproduk_ibfk_1` FOREIGN KEY (`id_foto`) REFERENCES `fotoproduk` (`id_foto`);

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`no_pemesanan`) REFERENCES `detailpemesanan` (`no_pemesanan`);

--
-- Constraints for table `produkpemesanan`
--
ALTER TABLE `produkpemesanan`
  ADD CONSTRAINT `produkpemesanan_ibfk_1` FOREIGN KEY (`nomor_pemesanan`) REFERENCES `detailpemesanan` (`no_pemesanan`),
  ADD CONSTRAINT `produkpemesanan_ibfk_2` FOREIGN KEY (`id_bar`) REFERENCES `itemproduk` (`id_bar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
