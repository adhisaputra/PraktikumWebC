-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2020 at 03:03 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tbl_mahasiswa_search`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa_search`
--

CREATE TABLE `tbl_mahasiswa_search` (
  `id` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `nama_mahasiswa` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_mahasiswa_search`
--

INSERT INTO `tbl_mahasiswa_search` (`id`, `nim`, `nama_mahasiswa`, `alamat`, `jenis_kelamin`, `jurusan`) VALUES
(1, '1708561001', 'I Made Suastika\r\n', 'Cilacap', 'Laki-laki', 'Sistem Informasi'),
(2, '1708561002', 'Angie Safira Indah\r\n', 'Jakarta', 'Perempuan', 'Teknik Informatika'),
(3, '1708561003', 'Benedict Emanuel Sutrisna\r\n', 'Yogyakarta', 'Laki-Laki', 'Sistem Informasi'),
(4, '1708561004', 'I Dewa Gede Rama Satya\r\n', 'Semarang', 'Laki-Laki', 'Teknik Informatika'),
(5, '1708561005', 'I Made Cantiawan Giri Kusuma\r\n', 'Purwokerto', 'Laki-laki', 'Sistem Informasi'),
(6, '1708561006', 'Muhammad Firyanul Rizky\r\n', 'Njojog', 'Laki-laki', 'Sistem Informasi'),
(7, '1708561007', 'Putu Mas Anggita Putra\r\n', 'Prapatan Ciamis', 'Laki-laki', 'Sistem Informasi'),
(10, '1708561008', 'I Putu Agus Wahyu Widiatmika\r\n', 'Jakarta', 'Laki-laki', 'Sistem Informasi'),
(11, '1708561009', 'I Gusti Ayu Purnami Indryaswari\r\n', 'Jakarta', 'Perempuan', 'Teknik Informatika'),
(12, '1708561010', 'I Gusti Bagus Dharma Putra\r\n', 'Jakarta', 'Laki-laki', 'Sistem Informasi'),
(13, '1708561011', 'Sandi\r\n', 'Medan', 'Laki-laki', 'Sistem Informasi'),
(14, '1708561012', 'I Made Budiawan\r\n', 'Palangkaraya', 'Laki-laki', 'Teknik Informatika'),
(15, '1708561013', 'I Putu Denny Indra Putra\r\n', 'Riau', 'Laki-laki', 'Sistem Informasi'),
(16, '1708561014', 'I Nengah Aryadi Suputra\r\n', 'Jakarta', 'Laki-laki', 'Teknik Informatika'),
(17, '1708561015', 'Dela Yuliana\r\n', 'Purbalingga', 'Perempuan', 'Sistem Informasi'),
(18, '1708561016', 'Marianus Almosa Haman\r\n', 'Purwokerto', 'Laki-Laki', 'Sistem Informasi'),
(19, '1708561017', 'NI LUH YULIA ALAMI DEWI\r\n', 'Cilacap', 'Perempuan', 'Sistem Informasi'),
(20, '1708561018', 'I PUTU BAYU WIRA BRATA\r\n', 'Jakarta', 'Laki-laki', 'Teknik Informatika'),
(21, '1708561019', 'I GEDE TEGUH SATYA DHARMA\r\n', 'Jakarta', 'Laki-laki', 'Teknik Informatika'),
(22, '1708561020', 'KOMANG DHIYO YONATHA WIJAYA\r\n', 'Jakarta', 'Laki-laki', 'Sistem Informasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mahasiswa_search`
--
ALTER TABLE `tbl_mahasiswa_search`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_mahasiswa_search`
--
ALTER TABLE `tbl_mahasiswa_search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
