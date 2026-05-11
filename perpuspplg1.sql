-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 11, 2026 at 06:54 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpuspplg1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `idbuku` int NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`idbuku`, `judul`, `pengarang`, `penerbit`, `created_at`, `update_at`) VALUES
(1, 'asivwritten', 'cy', 'amp', '2026-04-01 07:14:30', NULL),
(3, 'masukan tekstttt', 'masukan teksd', 'masukan nama', '2026-04-08 07:06:30', NULL),
(3131, 'likgyujhfc', 'jutfhyrf', 'et6genyte 6', '2026-04-13 02:00:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peminjaman`
--

CREATE TABLE `tbl_peminjaman` (
  `idpinjam` int NOT NULL,
  `idpetugas` int NOT NULL,
  `idsiswa` int NOT NULL,
  `idbuku` int NOT NULL,
  `waktupinjam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_peminjaman`
--

INSERT INTO `tbl_peminjaman` (`idpinjam`, `idpetugas`, `idsiswa`, `idbuku`, `waktupinjam`, `updated_at`) VALUES
(2, 2, 1, 1, '2026-05-11 03:25:16', NULL),
(3, 5, 1, 3, '2026-05-11 03:38:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_petugas`
--

CREATE TABLE `tbl_petugas` (
  `idpetugas` int NOT NULL,
  `namapetugas` varchar(100) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_petugas`
--

INSERT INTO `tbl_petugas` (`idpetugas`, `namapetugas`, `hp`, `username`, `password`, `created_at`, `update_at`) VALUES
(1, 'nomine', '0812345', 'admin', 'admin123', '2026-04-13 05:38:12', NULL),
(2, 'gas', '35541', 'gas', '123', '2026-04-18 04:51:29', NULL),
(5, 'silvrwlf', '999', 'sw', 'sw', '2026-04-22 07:18:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `idsiswa` int NOT NULL,
  `nis` varchar(20) NOT NULL,
  `namasiswa` varchar(100) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`idsiswa`, `nis`, `namasiswa`, `kelas`, `alamat`, `hp`, `created_at`, `update_at`) VALUES
(1, '0000001', 'mahasigma', 'End', 'jl. jalan', '0888888888', '2026-04-08 07:43:54', NULL),
(2, '00002', 'kon', 'A', 'rhydtfjj', '02374', '2026-04-08 08:02:18', NULL),
(3, '000023', 'fesf', 'sees', 'rser', '9074335', '2026-04-08 08:09:47', NULL),
(9, '000022', 'eggsd', 'ewffg', 'fgesf', '2345366', '2026-04-13 04:46:09', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`idbuku`);

--
-- Indexes for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD PRIMARY KEY (`idpinjam`),
  ADD KEY `fk_peminjaman_buku` (`idbuku`),
  ADD KEY `fk_peminjaman_siswa` (`idsiswa`),
  ADD KEY `fk_peminjaman_petugas` (`idpetugas`);

--
-- Indexes for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  ADD PRIMARY KEY (`idpetugas`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`idsiswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `idbuku` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3132;

--
-- AUTO_INCREMENT for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  MODIFY `idpinjam` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  MODIFY `idpetugas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `idsiswa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD CONSTRAINT `fk_peminjaman_buku` FOREIGN KEY (`idbuku`) REFERENCES `tbl_buku` (`idbuku`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_peminjaman_petugas` FOREIGN KEY (`idpetugas`) REFERENCES `tbl_petugas` (`idpetugas`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_peminjaman_siswa` FOREIGN KEY (`idsiswa`) REFERENCES `tbl_siswa` (`idsiswa`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
