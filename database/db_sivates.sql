-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 31, 2022 at 08:17 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sivates`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_iva`
--

CREATE TABLE `data_iva` (
  `id_iva` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `vulva` int(1) NOT NULL,
  `vulva_ket` varchar(255) NOT NULL,
  `vagina` int(1) NOT NULL,
  `vagina_ket` varchar(255) NOT NULL,
  `serviks` int(1) NOT NULL,
  `serviks_ket` varchar(255) NOT NULL,
  `status_iva` int(1) NOT NULL,
  `status_iva_ket` varchar(255) NOT NULL,
  `ims` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_medis`
--

CREATE TABLE `data_medis` (
  `id_data_medis` int(11) NOT NULL,
  `pasien_id` int(11) NOT NULL,
  `tes01` int(1) NOT NULL,
  `tes02` int(1) NOT NULL,
  `tes03` int(1) NOT NULL,
  `tes04` int(1) NOT NULL,
  `tes05` int(1) NOT NULL,
  `tes06` int(1) NOT NULL,
  `tes07` int(1) NOT NULL,
  `tes08` int(1) NOT NULL,
  `tes09` int(1) NOT NULL,
  `tes10` int(1) NOT NULL,
  `tes11` int(1) NOT NULL,
  `tes12` int(1) NOT NULL,
  `ket_tes12` varchar(255) NOT NULL,
  `tes13` int(1) NOT NULL,
  `tes14` int(1) NOT NULL,
  `tes15` int(1) NOT NULL,
  `tes16` int(1) NOT NULL,
  `tes17` int(1) NOT NULL,
  `tes18` int(1) NOT NULL,
  `tes19` int(1) NOT NULL,
  `tes20` int(1) NOT NULL,
  `tes21` int(1) NOT NULL,
  `tes22` int(1) NOT NULL,
  `tes23` int(1) NOT NULL,
  `tes24` int(1) NOT NULL,
  `tes25` int(1) NOT NULL,
  `ket_tes25` varchar(255) NOT NULL,
  `tes26` int(1) NOT NULL,
  `ket_tes26` varchar(255) NOT NULL,
  `tes27` int(1) NOT NULL,
  `ket_tes27` varchar(225) NOT NULL,
  `tes28` int(1) NOT NULL,
  `ket_tes28` varchar(255) NOT NULL,
  `tes29` int(1) NOT NULL,
  `ket_tes29` varchar(255) NOT NULL,
  `tes30` int(1) NOT NULL,
  `ket_tes30` varchar(255) NOT NULL,
  `tes31` int(11) NOT NULL,
  `tes32` int(11) NOT NULL,
  `ket_tes32` varchar(255) NOT NULL,
  `tes33` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_medis`
--

INSERT INTO `data_medis` (`id_data_medis`, `pasien_id`, `tes01`, `tes02`, `tes03`, `tes04`, `tes05`, `tes06`, `tes07`, `tes08`, `tes09`, `tes10`, `tes11`, `tes12`, `ket_tes12`, `tes13`, `tes14`, `tes15`, `tes16`, `tes17`, `tes18`, `tes19`, `tes20`, `tes21`, `tes22`, `tes23`, `tes24`, `tes25`, `ket_tes25`, `tes26`, `ket_tes26`, `tes27`, `ket_tes27`, `tes28`, `ket_tes28`, `tes29`, `ket_tes29`, `tes30`, `ket_tes30`, `tes31`, `tes32`, `ket_tes32`, `tes33`) VALUES
(1, 19, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Kangker Vagina', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 3, 1, '25 x 25', 2, '', 4, '', 1, 'warna merah', 1, 'bentuk aneh', 1, 'bentuk lonjong', 2, 7, 'Bunuh diri aja', 2),
(4, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, '', 1, '0', 0, '0', 0, '', 0, '', 0, '', 1, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_objektif`
--

CREATE TABLE `data_objektif` (
  `id_data_objektif` int(11) NOT NULL,
  `pasien_id` int(11) NOT NULL,
  `tekanan_darah` int(11) NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `inspeksi_vulva` int(1) NOT NULL,
  `inspeksi_vagina` int(1) NOT NULL,
  `warna` varchar(125) NOT NULL,
  `keputihan` int(1) NOT NULL,
  `konsistensi` varchar(125) NOT NULL,
  `bau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_objektif`
--

INSERT INTO `data_objektif` (`id_data_objektif`, `pasien_id`, `tekanan_darah`, `tinggi_badan`, `berat_badan`, `inspeksi_vulva`, `inspeksi_vagina`, `warna`, `keputihan`, `konsistensi`, `bau`) VALUES
(1, 19, 200, 155, 65, 0, 0, 'Merah', 0, 'asd', 0),
(2, 18, 125, 145, 35, 1, 1, 'Merah', 0, 'Cair', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_pasien`
--

CREATE TABLE `data_pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `agama` varchar(125) NOT NULL,
  `suku_bangsa` varchar(125) NOT NULL,
  `tempat_lahir` varchar(125) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` int(11) NOT NULL,
  `pendidikan` varchar(128) NOT NULL,
  `pekerjaan` varchar(128) NOT NULL,
  `nama_suami` varchar(255) NOT NULL,
  `agama_suami` varchar(125) NOT NULL,
  `tempat_lahir_suami` varchar(125) NOT NULL,
  `tanggal_lahir_suami` date NOT NULL,
  `pendidikan_suami` varchar(125) NOT NULL,
  `pekerjaan_suami` varchar(125) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jumlah_anak` int(11) NOT NULL,
  `riwayat_kb` varchar(125) NOT NULL,
  `riwayat_penyakit_menahun` varchar(255) NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `tanggal_pendaftaran` date NOT NULL,
  `date_created` date NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pasien`
--

INSERT INTO `data_pasien` (`id_pasien`, `nama`, `agama`, `suku_bangsa`, `tempat_lahir`, `tanggal_lahir`, `umur`, `pendidikan`, `pekerjaan`, `nama_suami`, `agama_suami`, `tempat_lahir_suami`, `tanggal_lahir_suami`, `pendidikan_suami`, `pekerjaan_suami`, `alamat`, `jumlah_anak`, `riwayat_kb`, `riwayat_penyakit_menahun`, `keluhan`, `tanggal_pendaftaran`, `date_created`, `is_active`) VALUES
(1, 'Ai Mariam', 'Islam', '', 'Cianjur', '1989-02-15', 33, 'Sarjana', 'Ibu Rumah Tangga', 'Ibrahim', 'Islam', 'asd', '2012-08-01', 'sarjana', 'PNS', 'Cianjur Warungtengah', 3, 'Kondom', 'Paru Paru', 'Sakit Aja', '2022-08-01', '2022-08-21', 1),
(18, 'Riana Cahyawati', 'Hindu', '', 'Banyuwangi', '1986-09-12', 36, 'SD / MI / Sederajat', 'Buruh Pabrik', 'Jujun', 'Konghuchu', 'Bangladesh', '1986-09-12', 'SD / MI / Sederajat', 'Pengangguran', 'Cianjur', 10, 'Kondom', 'Sakit Hati', 'Sakit Kepala', '2022-08-22', '2022-08-22', 1),
(19, 'asd', 'Islam', '', 'asd', '2022-08-22', 0, 'SD / MI / Sederajat', 'asd', 'asd', 'Islam', 'asd', '2022-08-01', 'SD / MI / Sederajat', 'asd', 'asd', 1, 'asd', 'asd', 'asd', '2022-08-22', '2022-08-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'Ya'),
(2, 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(125) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_created` date NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `role_id`, `image`, `date_created`, `is_active`) VALUES
(1, 'Admin Sivates', 'admin@gmail.com', 'admin', 'admin', 1, 'default.jpg', '2022-08-19', 1),
(2, 'Ai Mariam, S.Kom', 'aimariam@gmail.com', 'aimariam', '1234567890', 1, 'default.jpg', '2022-08-19', 1),
(4, 'Eka Anas Jatnika', 'ideanasdesain@gmail.com', 'ekaanas', 'Dean114119', 1, 'default.jpg', '2022-08-21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id_role`, `role`) VALUES
(1, 'Admin'),
(2, 'Petugas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_iva`
--
ALTER TABLE `data_iva`
  ADD PRIMARY KEY (`id_iva`);

--
-- Indexes for table `data_medis`
--
ALTER TABLE `data_medis`
  ADD PRIMARY KEY (`id_data_medis`);

--
-- Indexes for table `data_objektif`
--
ALTER TABLE `data_objektif`
  ADD PRIMARY KEY (`id_data_objektif`);

--
-- Indexes for table `data_pasien`
--
ALTER TABLE `data_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_iva`
--
ALTER TABLE `data_iva`
  MODIFY `id_iva` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_medis`
--
ALTER TABLE `data_medis`
  MODIFY `id_data_medis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_objektif`
--
ALTER TABLE `data_objektif`
  MODIFY `id_data_objektif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_pasien`
--
ALTER TABLE `data_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
