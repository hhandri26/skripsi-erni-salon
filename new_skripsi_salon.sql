-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2022 at 11:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi-salon`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(15) NOT NULL,
  `nama_pelanggan` varchar(100) DEFAULT NULL,
  `email_pelanggan` varchar(100) DEFAULT NULL,
  `tanggal_lahir_pelanggan` date DEFAULT NULL,
  `tempat_lahir_pelanggan` varchar(40) DEFAULT NULL,
  `agama_pelanggan` varchar(15) DEFAULT NULL,
  `alamat_pelanggan` text DEFAULT NULL,
  `password_pelanggan` varchar(100) DEFAULT NULL,
  `jk_pelanggan` enum('L','P') DEFAULT NULL,
  `tanggal_daftar` date DEFAULT NULL,
  `status_selesai_transaksi` int(11) DEFAULT NULL,
  `paket` varchar(45) DEFAULT NULL,
  `umur` varchar(45) DEFAULT NULL,
  `jadwal_booking` date DEFAULT NULL,
  `no_hp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `email_pelanggan`, `tanggal_lahir_pelanggan`, `tempat_lahir_pelanggan`, `agama_pelanggan`, `alamat_pelanggan`, `password_pelanggan`, `jk_pelanggan`, `tanggal_daftar`, `status_selesai_transaksi`, `paket`, `umur`, `jadwal_booking`, `no_hp`) VALUES
('', 'handri', NULL, NULL, NULL, NULL, NULL, NULL, 'L', NULL, NULL, 'manicure', '20', '2022-03-20', '08182103'),
('PL000001', 'Mohammad Ichsan', 'ichsan.clay@gmail.com', '1997-06-17', 'Jakarta', 'Islam', 'JTW', 'password', 'L', '2018-05-17', NULL, NULL, NULL, NULL, ''),
('PL000002', 'Harun A', 'har@mail.com', '1997-06-17', 'Jakarta', 'Islam', 'JTW', '1997-06-17', 'L', '2018-07-02', NULL, NULL, NULL, NULL, ''),
('PL000003', 'handri', NULL, NULL, NULL, NULL, NULL, NULL, 'L', NULL, NULL, 'manicure', '90', '2022-03-20', '1341');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
