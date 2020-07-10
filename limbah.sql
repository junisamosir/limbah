-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2020 at 11:45 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `limbah`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(128) NOT NULL,
  `isi_artikel` text NOT NULL,
  `image_artikel` varchar(128) NOT NULL,
  `tgl_artikel` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `image_artikel`, `tgl_artikel`) VALUES
(1, 'COVID-19', 'COVID-19 merupakan nama resmi untuk penyakit yang disebabkan oleh virus Corona.\r\nVirus Corona ini merupakan virus jenis baru yang belum pernah diidentifikasi sebelumnya pada manusia, yang kemudian pertama kali didentifikasi di kota Wuhan, China pada Desember 2019.\r\nVirus corona dapat ditularkan antara hewan ke manusia dan manusia ke manusia. Gejala klinis akan muncul setelah 2-14 hari setelah terinfeksi, namun dapat menular meski belum menunjukkan gelaja infeksi.', 'call.jpeg', '2020-07-11'),
(2, 'asdf', 'af', 'artikel.png', '2020-07-19'),
(3, ',', 'ugufib', 'artikel.png', '2020-07-19'),
(4, 'fd', 'dgsf', 'artikel.png', '2020-07-20'),
(6, 'adsf', 'fdas', 'artikel.png', '2020-06-04');

-- --------------------------------------------------------

--
-- Table structure for table `keluhan`
--

CREATE TABLE `keluhan` (
  `id_keluhan` int(11) NOT NULL,
  `iduser_keluhan` int(11) NOT NULL,
  `namabarang_keluhan` varchar(255) NOT NULL,
  `alamat_keluhan` text NOT NULL,
  `keterangan_keluhan` text NOT NULL,
  `image_keluhan` varchar(128) NOT NULL,
  `tgl_keluhan` int(11) NOT NULL,
  `status_keluhan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `keluhan_admin`
--

CREATE TABLE `keluhan_admin` (
  `id_keluhanadmin` int(11) NOT NULL,
  `id_userkeluhan` int(11) NOT NULL,
  `idpetugas_keluhan` int(11) NOT NULL,
  `konfirmasi_keluhan` varchar(128) NOT NULL,
  `tglselesai_keluhan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama_kontak` varchar(128) NOT NULL,
  `email_kontak` varchar(128) NOT NULL,
  `phone_kontak` varchar(128) NOT NULL,
  `pesan_kontak` text NOT NULL,
  `tgl_kontak` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama_kontak`, `email_kontak`, `phone_kontak`, `pesan_kontak`, `tgl_kontak`) VALUES
(7, 'jonathan', 'jonathan@gmail.com', '32', 'yuhuuu\r\n', '2020-07-07'),
(8, 'Angel', 'angel@yahoo.com', '123', 'kecee', '2020-07-08');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `level` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `level`) VALUES
(1, 'Admin'),
(2, 'Petugas'),
(3, 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(128) NOT NULL,
  `phone_petugas` varchar(128) NOT NULL,
  `image_petugas` varchar(128) NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `phone_petugas`, `image_petugas`, `tgl_daftar`) VALUES
(7, 'Renhat', '3', 'male.png', '2020-07-17'),
(8, 'Melani', '3', 'female.png', '2020-07-19'),
(9, 'hg', '54', 'male1.png', '2020-07-20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `email_user` varchar(128) NOT NULL,
  `phone_user` varchar(128) NOT NULL,
  `image_user` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `id_level`, `nama_user`, `email_user`, `phone_user`, `image_user`, `password`, `tgl_daftar`) VALUES
(1, 1, 'Jonathan G', 'jonathan@gmail.com', '235', 'default.png', '$2y$10$.ulqJzszk/CrIfqlcJ5ei.rf5pZlInv5hrCNMBtlsC8BKeWFnJvkq', '2020-06-01'),
(2, 2, 'Melati', 'melati@gmail.com', '2', 'female.png', '$2y$10$7xXmsac8RZPxbOBuTxILxuoo/BKKi4yiUGrpdGpFkK1F7.OOkW5aa', '2020-07-01'),
(22, 3, 'Vanila G', 'vanila@gmail.com', '3', '', '$2y$10$wq2g0NR5qs3tDR/aHkTh7OCb3zSXIfE1.9r14QqzGzgY7Kf91wDuS', '2020-06-28'),
(24, 3, 'Lusiana', 'lusiana@gmail.com', '3', 'female.png', '$2y$10$YBFirh41F.sJpnZ1kxSBlOCHs5v39RqPQZiiDQw6tyP3OtHb6N1jS', '2020-06-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id_keluhan`),
  ADD KEY `iduser_keluhan` (`iduser_keluhan`);

--
-- Indexes for table `keluhan_admin`
--
ALTER TABLE `keluhan_admin`
  ADD PRIMARY KEY (`id_keluhanadmin`),
  ADD KEY `id_userkeluhan` (`id_userkeluhan`,`idpetugas_keluhan`),
  ADD KEY `idpetugas_keluhan` (`idpetugas_keluhan`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id_keluhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `keluhan_admin`
--
ALTER TABLE `keluhan_admin`
  MODIFY `id_keluhanadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD CONSTRAINT `keluhan_ibfk_1` FOREIGN KEY (`iduser_keluhan`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `keluhan_admin`
--
ALTER TABLE `keluhan_admin`
  ADD CONSTRAINT `keluhan_admin_ibfk_1` FOREIGN KEY (`id_userkeluhan`) REFERENCES `keluhan` (`id_keluhan`),
  ADD CONSTRAINT `keluhan_admin_ibfk_2` FOREIGN KEY (`idpetugas_keluhan`) REFERENCES `petugas` (`id_petugas`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
