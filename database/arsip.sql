-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2021 at 04:51 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `kasda`
--

CREATE TABLE `kasda` (
  `id` int(50) NOT NULL,
  `SKPD` varchar(255) DEFAULT NULL,
  `No_SP2D` varchar(255) DEFAULT NULL,
  `Tanggal_SP2D` date NOT NULL,
  `Uraian` varchar(255) DEFAULT NULL,
  `Jumlah` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kasda`
--

INSERT INTO `kasda` (`id`, `SKPD`, `No_SP2D`, `Tanggal_SP2D`, `Uraian`, `Jumlah`) VALUES
(20, 'Dinas Kesehatan', '1211/LS-DINAS/2021', '2021-10-17', 'kas kedinasan', 4000000),
(38, 'Badan Keuangan Aset Daerah', '1211/Ly-BKAD/2021', '2021-10-17', 'fdgthtj6j6jty', 5000000),
(39, 'Dinas Pendidikan', '1211/Ly-DKES/2021', '2021-10-17', 'yjyjyjyjy', 600000),
(40, 'Sekretariat Daerah', '1211/LS-DKuES/2021', '2021-10-17', 'uyirtetete', 200000),
(41, 'Badan Pendapatan Daerah', '1211/Lo-BPD/2021', '2021-10-17', 'dvdfthkgk adakdada', 300000000),
(42, 'Badan Keuangan Aset Daerah', '1211/LS-DKES/2021', '2021-10-17', 'yuyutyrtr', 100000000),
(43, 'Dinas Kesehatan', '1243/LS-DKES/2021', '2021-10-17', 'lalalalala', 120000000),
(44, 'Sekretariat Daerah', '1211/LS-SKD/2021', '2021-10-17', 'scdsvdvdvdvdv', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nama` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`) VALUES
(3, 'reihan80', '$2y$10$sQH7yqTrZ8cDug5ZzFsyLudb6xWRBE/FBQ92VGrRLtavDjzmzi9/C', 'fazri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kasda`
--
ALTER TABLE `kasda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kasda`
--
ALTER TABLE `kasda`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
