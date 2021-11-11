-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2021 at 01:28 PM
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
-- Database: `db_toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(4) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `harga_barang` decimal(6,0) NOT NULL,
  `foto_barang` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga_barang`, `foto_barang`) VALUES
('FD02', 'Daging Ayam', '35600', NULL),
('FD03', 'Daging Sapi', '123650', NULL),
('FD04', 'Telur Ayam', '23350', NULL),
('FD05', 'Bawang Merah', '29650', NULL),
('FD06', 'Bawang Putih', '29550', NULL),
('FD07', 'Cabai Merah', '30350', NULL),
('FD08', 'Cabai Rawit', '38050', NULL),
('FD09', 'Minyak Goreng', '16150', NULL),
('FD10', 'Gula Pasir', '14100', NULL),
('FDO1', 'Beras', '11650', NULL),
('KL00', 'Tomat', '40000', 'penyimpanan/tomat.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `faktur`
--

CREATE TABLE `faktur` (
  `id_faktur` varchar(10) NOT NULL,
  `tanggal_faktur` date NOT NULL,
  `id_pelanggan` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faktur`
--

INSERT INTO `faktur` (`id_faktur`, `tanggal_faktur`, `id_pelanggan`) VALUES
('0110210002', '2021-10-01', '0002'),
('0210210004', '2021-10-02', '0004'),
('0210210005', '2021-10-02', '0005'),
('030210005', '2021-10-14', '0005'),
('0310210008', '2021-10-03', '0008'),
('0510210010', '2021-10-05', '0010');

-- --------------------------------------------------------

--
-- Table structure for table `faktur_barang`
--

CREATE TABLE `faktur_barang` (
  `id_barang` varchar(4) NOT NULL,
  `id_faktur` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faktur_barang`
--

INSERT INTO `faktur_barang` (`id_barang`, `id_faktur`) VALUES
('FD01', '0110210002'),
('FD05', '0110210002'),
('FD03', '0110210002'),
('FD02', '0210210004'),
('FD03', '0210210004'),
('FD07', '0210210004'),
('FD01', '0210210005'),
('FD02', '0210210005'),
('FD03', '0210210005'),
('FD01', '0310210008'),
('FD02', '0310210008'),
('FD07', '0310210008'),
('FD03', '0510210010'),
('FD06', '0510210010'),
('FD09', '0510210010');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(4) NOT NULL,
  `nama_pelanggan` varchar(20) NOT NULL,
  `tipe_membership` varchar(1) NOT NULL,
  `keterangan_membership` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `tipe_membership`, `keterangan_membership`) VALUES
('0001', 'Alan', 'G', 'Gold'),
('0002', 'Anto', 'P', 'Platinum'),
('0003', 'Dani', 'G', 'Gold'),
('0004', 'Indra', 'G', 'Gold'),
('0005', 'Jayadi', 'S', 'Silver'),
('0006', 'Oni', 'S', 'Silver'),
('0007', 'Opan', 'G', 'Gold'),
('0008', 'Ozi', 'G', 'Gold'),
('0009', 'Rudi', 'P', 'Platinum'),
('0010', 'Zaki', 'G', 'Gold');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `email`, `nama`, `password`) VALUES
(1, 'alfariziuchiha@gmail.com', 'Umam Alfarizi', 'd4fc12b6346271428e0d90fafa85269250d96dd1af8d56389adb98225e920a0b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `faktur`
--
ALTER TABLE `faktur`
  ADD PRIMARY KEY (`id_faktur`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
