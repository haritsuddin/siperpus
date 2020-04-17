-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2020 at 03:01 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbperpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `id_level` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `kelas`, `telp`, `username`, `password`, `id_level`) VALUES
(1, 'haris', 'XR4', '081332015562', 'admin1', 'admin1', 3),
(3, 'carol', 'XR5', '081332015562', 'admin1', 'admin1', 3),
(5, 'idun', 'XR67', '0341', '', '', 3),
(8, 'harisuden', 'xr4', '0989898778', 'uddin', 'uddin', 3),
(9, 'meme', 'mipa4', '23456789', 'pepe', 'popo', 3);

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(3) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `ringkasan` text NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `stok` int(3) NOT NULL,
  `id_kategori` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `penerbit`, `pengarang`, `ringkasan`, `cover`, `stok`, `id_kategori`) VALUES
(1, 'heymabro', 'who', 'mi', 'aku anak seht tubuhku kuat', 'bre', 2, 1),
(4, 'nktchi', '', 'lupa', '', NULL, 3, NULL),
(12, 'ttm', 'haris', 'dia', '		teman tapi mati							\r\n									', '0OvymMjb.jpg', 50, 2),
(15, 'mereka', 'aku', 'dia', '										\r\n			gggge						', '08. Asawinka Haritsuddin.PNG', 3, 2),
(16, 'halohael', 'saya', 'mber', '		heh								\r\n									', '0OvymMjb.jpg', 98, 2);

-- --------------------------------------------------------

--
-- Table structure for table `detail_pinjam`
--

CREATE TABLE `detail_pinjam` (
  `id_detail` int(3) NOT NULL,
  `id_pinjam` int(3) NOT NULL,
  `id_buku` int(3) NOT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `status` enum('dipinjam','kembali') NOT NULL DEFAULT 'dipinjam'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pinjam`
--

INSERT INTO `detail_pinjam` (`id_detail`, `id_pinjam`, `id_buku`, `tgl_kembali`, `status`) VALUES
(9, 7, 1, NULL, 'dipinjam'),
(10, 8, 16, '2020-04-17', 'kembali'),
(11, 9, 16, NULL, 'dipinjam'),
(13, 10, 4, NULL, 'dipinjam');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(3) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'fiksi'),
(2, 'non fiksi');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(3) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `level`) VALUES
(1, 'admin'),
(2, 'operator'),
(3, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pinjam` int(3) NOT NULL,
  `id_anggota` int(3) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_jatuh_tempo` date NOT NULL,
  `id_petugas` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_pinjam`, `id_anggota`, `tgl_pinjam`, `tgl_jatuh_tempo`, `id_petugas`) VALUES
(7, 1, '2020-04-09', '2020-04-16', 1),
(8, 8, '2020-04-04', '2020-04-11', 1),
(9, 9, '2020-04-04', '2020-04-11', 1),
(10, 3, '2020-04-16', '2020-04-23', 1),
(11, 3, '2020-04-16', '2020-04-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(3) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `id_level` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `id_level`) VALUES
(1, 'yani', 'admin1', 'admin1', '088236865786', 1),
(2, 'budi', 'admin2', 'admin2', '088976678980', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `id_level` (`id_level`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `detail_pinjam`
--
ALTER TABLE `detail_pinjam`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_pinjam` (`id_pinjam`,`id_buku`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `id_anggota` (`id_anggota`,`id_petugas`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `detail_pinjam`
--
ALTER TABLE `detail_pinjam`
  MODIFY `id_detail` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_pinjam` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `anggota_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `detail_pinjam`
--
ALTER TABLE `detail_pinjam`
  ADD CONSTRAINT `detail_pinjam_ibfk_1` FOREIGN KEY (`id_pinjam`) REFERENCES `peminjaman` (`id_pinjam`) ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_pinjam_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON UPDATE CASCADE;

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`) ON UPDATE CASCADE,
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `petugas`
--
ALTER TABLE `petugas`
  ADD CONSTRAINT `petugas_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
