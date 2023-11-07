-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2023 at 09:48 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perabot`
--

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `kodeobat` varchar(100) DEFAULT NULL,
  `namaobat` varchar(255) DEFAULT NULL,
  `jenisobat` varchar(100) DEFAULT NULL,
  `hargaobat` int(255) DEFAULT NULL,
  `stok` int(255) DEFAULT NULL,
  `aksi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `toko`
--

INSERT INTO `Pendataan` ('kodeobat', 'namaobat', 'jenisobat', 'hargaobat','stok','aksi') VALUES
(ZGV0001, 'Vitamin Zegavit', 'Kapsul', 35000, 250),
(AFD0090, 'Actifed Batuk Kering', 'Sirup', 75000, 50),
(ZGV0009, 'Vitamin Imboost', 'Tablet', 90000, 120),
(TRM00031, 'Thrombophob', 'Salep', 50000, 20),
(MSB00015, 'Masker Sensi Duckbill', 'Lainnya', 20000,20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `toko`
--
ALTER TABLE `Apotek`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `Apotek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
