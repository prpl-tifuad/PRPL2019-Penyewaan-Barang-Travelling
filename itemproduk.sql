-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2019 at 12:56 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `itemproduk`
--
ALTER TABLE `itemproduk`
  ADD PRIMARY KEY (`id_bar`),
  ADD KEY `id_foto` (`id_foto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `itemproduk`
--
ALTER TABLE `itemproduk`
  MODIFY `id_bar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `itemproduk`
--
ALTER TABLE `itemproduk`
  ADD CONSTRAINT `itemproduk_ibfk_1` FOREIGN KEY (`id_foto`) REFERENCES `fotoproduk` (`id_foto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
