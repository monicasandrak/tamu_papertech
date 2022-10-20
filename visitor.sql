-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 10:43 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visitor`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_pasien` varchar(225) NOT NULL,
  `departement` varchar(225) NOT NULL,
  `keluhan` varchar(225) NOT NULL,
  `diagnosa` varchar(225) NOT NULL,
  `obat` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai_klinik`
--

CREATE TABLE `pegawai_klinik` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `satpam`
--

CREATE TABLE `satpam` (
  `id_satpam` int(11) NOT NULL,
  `nama_satpam` varchar(225) NOT NULL,
  `username` int(225) NOT NULL,
  `password` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_tamu` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `keperluan` varchar(225) NOT NULL,
  `bertemu_dengan` varchar(225) NOT NULL,
  `no_ktp` int(16) NOT NULL,
  `foto_ktp` varchar(225) NOT NULL,
  `no_kendaraan` varchar(10) NOT NULL,
  `jam_masuk` time NOT NULL,
  `hasil_swab` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pegawai_klinik`
--
ALTER TABLE `pegawai_klinik`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `satpam`
--
ALTER TABLE `satpam`
  ADD PRIMARY KEY (`id_satpam`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
