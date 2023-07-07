-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2023 at 10:08 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `disposisi`
--

CREATE TABLE `disposisi` (
  `id_disposisi` int(11) NOT NULL,
  `pengisi` varchar(50) NOT NULL,
  `tujuan` varchar(250) NOT NULL,
  `instruksi` varchar(300) NOT NULL,
  `catatan` varchar(200) NOT NULL,
  `id_suratmasuk` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disposisi`
--

INSERT INTO `disposisi` (`id_disposisi`, `pengisi`, `tujuan`, `instruksi`, `catatan`, `id_suratmasuk`) VALUES
(9, 'Kepsek', 'Keuangan', '', 'Penting', 2),
(10, 'Kepsek', 'Uuu', '', 'sdfd', 2),
(11, 'Kepala Sekolah', 'Keuangan', '', '', 4),
(12, 'Kepala Sekolah', 'Keamanan', '', '', 2),
(16, 'Wakil Kurikulum', 'Keuangan', '', 'Mohon ditindak lanjuti', 26);

-- --------------------------------------------------------

--
-- Table structure for table `indeks`
--

CREATE TABLE `indeks` (
  `id_indeks` int(3) NOT NULL,
  `kode_indeks` varchar(5) NOT NULL,
  `judul_indeks` varchar(50) NOT NULL,
  `detail` varchar(512) NOT NULL,
  `tanggal_dibuat` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indeks`
--

INSERT INTO `indeks` (`id_indeks`, `kode_indeks`, `judul_indeks`, `detail`, `tanggal_dibuat`) VALUES
(1, 'RNCN', 'Perencanaan', 'Indeks untuk surat perencanaan\r\n', '2023-06-13'),
(6, 'TTUSH', 'Ketata Usahaan', '', '2023-06-13'),
(10, 'SRN', 'Sarana dan Prasarana', '', '2023-06-13'),
(20, 'LNGKP', 'Perlengkapan', 'Ini detail perlengkapan', '2023-06-13'),
(21, 'ORG', 'Organisasi', 'Ini detail, hehe', '2023-06-13'),
(23, 'KRKLM', 'Kurikulum/ Pengawasan', 'Surat dengan indek kurikulum atau pengawasan ', '2023-06-13'),
(24, 'OLRG', 'Olahraga', 'Mana detailnya gan coba tambah ya', '2023-06-13'),
(32, '', '275-INDEKS BARU', '', '2023-06-19'),
(33, '', '001-MAHASISWA', '', '2023-06-23'),
(34, '', '002-PENGAJAR MAHASISWA', '', '2023-06-23');

-- --------------------------------------------------------

--
-- Table structure for table `indeks_sekunder`
--

CREATE TABLE `indeks_sekunder` (
  `id_sekunder` int(11) NOT NULL,
  `id_indeks` int(11) DEFAULT NULL,
  `judul_sekunder` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indeks_sekunder`
--

INSERT INTO `indeks_sekunder` (`id_sekunder`, `id_indeks`, `judul_sekunder`) VALUES
(2, 1, 'Orientasi Mahasiswa Baru'),
(3, 32, '275-INDEKS SEKUNDER BARU'),
(4, 33, '001_MAHASISWA SEKUNDER');

-- --------------------------------------------------------

--
-- Table structure for table `indeks_tersier`
--

CREATE TABLE `indeks_tersier` (
  `id_tersier` int(10) NOT NULL,
  `judul_tersier` varchar(100) NOT NULL,
  `id_sekunder` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indeks_tersier`
--

INSERT INTO `indeks_tersier` (`id_tersier`, `judul_tersier`, `id_sekunder`) VALUES
(4, 'Sosialisasi Peraturan Akademik', 2),
(6, '275-INDEKS TERSIER BARU', 3),
(7, '001-MAHASISWA TERSIER', 4),
(8, '001-MAHASISWA TERSIER', 4),
(9, '001-MAHASISWA TERSIER.OK', 4),
(10, '001-MAHASISWA SEKUNDER BARU', 4),
(11, '001-MAHASISWA TERSIER BARU', 4),
(13, '001-MAHASISWA SEKUNDER BARU BET DAH', 4);

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasi_indeks`
--

CREATE TABLE `klasifikasi_indeks` (
  `id` int(10) NOT NULL,
  `primary` int(10) DEFAULT NULL,
  `secondary` int(10) DEFAULT NULL,
  `tersier` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klasifikasi_indeks`
--

INSERT INTO `klasifikasi_indeks` (`id`, `primary`, `secondary`, `tersier`) VALUES
(1, 1, 1, 1),
(2, 1, 1, 2),
(3, 1, 2, 3),
(4, 1, 2, 4),
(5, 32, 3, 6),
(6, 33, 4, 8),
(7, 33, 4, 9),
(8, 33, 4, 10),
(9, 33, 4, 11),
(10, 33, 4, 12),
(11, 33, 4, 13);

-- --------------------------------------------------------

--
-- Table structure for table `suratkeluar`
--

CREATE TABLE `suratkeluar` (
  `id_suratkeluar` int(5) NOT NULL,
  `no_suratkeluar` varchar(60) NOT NULL,
  `id_indeks` int(10) NOT NULL,
  `tujuan` varchar(60) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `keterangan` mediumtext NOT NULL,
  `berkas_suratkeluar` varchar(255) NOT NULL,
  `jadwal_retensi_aktif_sk` varchar(200) NOT NULL,
  `jenis_retensi_sk` varchar(200) NOT NULL,
  `tingkat_perkembangan_sk` varchar(200) NOT NULL,
  `jadwal_retensi_inaktif_sk` varchar(200) NOT NULL,
  `kategori_surat_sk` varchar(200) NOT NULL,
  `perihal` varchar(250) NOT NULL,
  `lokasi_berkas` varchar(250) NOT NULL,
  `id_sekunder` varchar(200) NOT NULL,
  `id_tersier` varchar(200) NOT NULL,
  `judul_indeks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suratkeluar`
--

INSERT INTO `suratkeluar` (`id_suratkeluar`, `no_suratkeluar`, `id_indeks`, `tujuan`, `tanggal_keluar`, `keterangan`, `berkas_suratkeluar`, `jadwal_retensi_aktif_sk`, `jenis_retensi_sk`, `tingkat_perkembangan_sk`, `jadwal_retensi_inaktif_sk`, `kategori_surat_sk`, `perihal`, `lokasi_berkas`, `id_sekunder`, `id_tersier`, `judul_indeks`) VALUES
(25, '90/INSTANSI/H-06/30301', 1, 'PT DMC SEJAHTERA', '2023-06-23', 'Baik', '649534badd467.pdf', '2 Tahun', 'Musnah', 'Asli', '3 Tahun', 'Arsip Vital', '', '', 'Penerimaan Mahasiswa Baru', 'Daya Tampung Mahasiwa', ''),
(27, '91/INSTANSI/H-06/30301', 32, 'PT DMC SEJAHTERA', '2023-06-23', 'Baik', '649526208289c.pdf', '2 Tahun', 'Musnah', 'Asli', '3 Tahun', 'Arsip Vital', '', '', '275-INDEKS SEKUNDER BARU', '275-INDEKS TERSIER BARU', ''),
(28, '92/INSTANSI/H-06/30301', 32, 'PT DMC SEJAHTERA', '2023-06-23', 'Baik', '649526208289c.pdf', '2 Tahun', 'Musnah', 'Asli', '3 Tahun', 'Arsip Vital', '', '', '275-INDEKS SEKUNDER BARU', '275-INDEKS TERSIER BARU', ''),
(29, '93/INSTANSI/H-06/30301', 32, 'PT DMC SEJAHTERA', '2023-06-23', 'Baik', '649526208289c.pdf', '2 Tahun', 'Musnah', 'Asli', '3 Tahun', 'Arsip Vital', '', '', '275-INDEKS SEKUNDER BARU', '275-INDEKS TERSIER BARU', ''),
(30, 'COBA-001', 1, 'ADHIKARSA', '2023-06-24', 'Baik', '6496f0db44420.pdf', '1 Tahun', 'Musnah', 'Asli', '2 Tahun', 'Arsip Vital', '', '', 'Orientasi Mahasiswa Baru', 'Sosialisasi Peraturan Akademik', ''),
(31, 'COBA-3', 1, 'ADHIKARSA', '2023-06-24', 'Rusak', '6496ff15a52d9.pdf', '1 Tahun', 'Permanen', 'Tembusan', '3 Tahun', 'Arsip Vital', '', '', 'Orientasi Mahasiswa Baru', 'Sosialisasi Peraturan Akademik', 'Perencanaan'),
(32, '90/INSTANSI/H-06/2024OKEGAES', 1, 'WASKITA', '2023-06-27', 'Baik', '649af1229881d.pdf', '1 Tahun', 'Musnah', 'Tembusan', '4 Tahun', 'Arsip Vital', 'TES perihal berita yaaa', 'rak80', 'Orientasi Mahasiswa Baru', 'Sosialisasi Peraturan Akademik', '');

-- --------------------------------------------------------

--
-- Table structure for table `suratmasuk`
--

CREATE TABLE `suratmasuk` (
  `id_suratmasuk` int(3) NOT NULL,
  `no_suratmasuk` varchar(60) NOT NULL,
  `asal_surat` varchar(60) NOT NULL,
  `tanggal_diterima` date NOT NULL DEFAULT current_timestamp(),
  `id_indeks` int(10) NOT NULL,
  `berkas_suratmasuk` varchar(750) NOT NULL,
  `jadwal_retensi_aktif` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `jenis_retensi` varchar(255) NOT NULL,
  `tingkat_perkembangan` varchar(255) NOT NULL,
  `jadwal_retensi_inaktif` varchar(255) NOT NULL,
  `kategori_surat` varchar(255) NOT NULL,
  `perihal` varchar(250) NOT NULL,
  `lokasi_berkas` varchar(250) NOT NULL,
  `id_sekunder` varchar(200) NOT NULL,
  `id_tersier` varchar(200) NOT NULL,
  `judul_indeks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suratmasuk`
--

INSERT INTO `suratmasuk` (`id_suratmasuk`, `no_suratmasuk`, `asal_surat`, `tanggal_diterima`, `id_indeks`, `berkas_suratmasuk`, `jadwal_retensi_aktif`, `keterangan`, `jenis_retensi`, `tingkat_perkembangan`, `jadwal_retensi_inaktif`, `kategori_surat`, `perihal`, `lokasi_berkas`, `id_sekunder`, `id_tersier`, `judul_indeks`) VALUES
(64, '1/90/MKA/80100', 'PT DMC Sejahtera', '2023-06-23', 1, '6495321899301.pdf', '2 Tahun', 'Baik', 'Musnah', 'Asli', '2 Tahun', 'Arsip Vital', '', '', 'Orientasi Mahasiswa Baru', 'Panduan/Pedoman Mahasiswa Baru', ''),
(65, '2/90/MKA/80100', 'PT DMC Sejahtera', '2023-06-23', 1, '6495321899301.pdf', '2 Tahun', 'Baik', 'Permanen', 'Asli', '2 Tahun', 'Arsip Vital', '', '', 'Orientasi Mahasiswa Baru', 'Panduan/Pedoman Mahasiswa Baru', ''),
(66, '3/90/MKA/80100', 'PT DMC Sejahtera', '2023-06-23', 1, '6495321899301.pdf', '2 Tahun', 'Baik', 'Permanen', 'Asli', '2 Tahun', 'Arsip Vital', '', '', 'Orientasi Mahasiswa Baru', 'Panduan/Pedoman Mahasiswa Baru', ''),
(67, '8890/098/MKM/10957', 'PT DMC Sejahtera', '2023-06-24', 0, '6496d5e203253.pdf', '1 Tahun', 'Baik', 'Musnah', 'Asli', '2 Tahun', 'Arsip Vital', '', '', 'Orientasi Mahasiswa Baru', 'Sosialisasi Peraturan Akademik', ''),
(68, 'COBA-001', 'PT DMC Sejahtera', '2023-06-24', 0, '6496e727861fd.pdf', '1 Tahun', 'Baik', 'Permanen', 'Asli', '1 Tahun', 'Arsip Vital', '', '', 'Orientasi Mahasiswa Baru', 'Sosialisasi Peraturan Akademik', ''),
(69, 'COBA-002', 'PT DMC Sejahtera', '2023-06-24', 32, '6496eedf04811.pdf', '1 Tahun', 'Rusak', 'Permanen', 'Asli', '2 Tahun', 'Arsip Vital', '', '', '275-INDEKS SEKUNDER BARU', '275-INDEKS TERSIER BARU', '275-INDEKS BARU'),
(70, '8890/098/MKM/1098765', 'PT BARU DIBUAT', '2023-06-27', 1, '649aeb32cd709.pdf', '1 Tahun', 'Baik', 'Musnah', 'Asli', '1 Tahun', 'Arsip Terbuka', 'oke gaes', '003/089/10/K', 'Orientasi Mahasiswa Baru', 'Sosialisasi Peraturan Akademik', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(1) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `image` varchar(250) NOT NULL,
  `bio` varchar(512) NOT NULL,
  `facebook` varchar(64) NOT NULL,
  `email` varchar(32) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `image`, `bio`, `facebook`, `email`, `level`) VALUES
(5, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin arsip surat', '5e53414b22179.jpg', ' ', ' ', 'admin@email.com', 1),
(7, 'zamzuli', '01fcd7a102ad890c551ac24495421b6e92394e36', 'Mohammad Zamzuli Qoricho', '', '', '', '', 2),
(9, 'User', '12dea96fec20593566ab75692c9949596833adc9', 'User', '', '', '', '', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`id_disposisi`),
  ADD KEY `id_suratmasuk` (`id_suratmasuk`);

--
-- Indexes for table `indeks`
--
ALTER TABLE `indeks`
  ADD PRIMARY KEY (`id_indeks`);

--
-- Indexes for table `indeks_sekunder`
--
ALTER TABLE `indeks_sekunder`
  ADD PRIMARY KEY (`id_sekunder`),
  ADD KEY `id_indeks` (`id_indeks`);

--
-- Indexes for table `indeks_tersier`
--
ALTER TABLE `indeks_tersier`
  ADD PRIMARY KEY (`id_tersier`),
  ADD KEY `id_sekunder` (`id_sekunder`);

--
-- Indexes for table `klasifikasi_indeks`
--
ALTER TABLE `klasifikasi_indeks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suratkeluar`
--
ALTER TABLE `suratkeluar`
  ADD PRIMARY KEY (`id_suratkeluar`),
  ADD KEY `id_subindeks` (`id_indeks`);

--
-- Indexes for table `suratmasuk`
--
ALTER TABLE `suratmasuk`
  ADD PRIMARY KEY (`id_suratmasuk`),
  ADD KEY `id_subindeks` (`id_indeks`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disposisi`
--
ALTER TABLE `disposisi`
  MODIFY `id_disposisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `indeks`
--
ALTER TABLE `indeks`
  MODIFY `id_indeks` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `indeks_sekunder`
--
ALTER TABLE `indeks_sekunder`
  MODIFY `id_sekunder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `indeks_tersier`
--
ALTER TABLE `indeks_tersier`
  MODIFY `id_tersier` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `klasifikasi_indeks`
--
ALTER TABLE `klasifikasi_indeks`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `suratkeluar`
--
ALTER TABLE `suratkeluar`
  MODIFY `id_suratkeluar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `suratmasuk`
--
ALTER TABLE `suratmasuk`
  MODIFY `id_suratmasuk` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `indeks_sekunder`
--
ALTER TABLE `indeks_sekunder`
  ADD CONSTRAINT `indeks_sekunder_ibfk_1` FOREIGN KEY (`id_indeks`) REFERENCES `indeks` (`id_indeks`);

--
-- Constraints for table `indeks_tersier`
--
ALTER TABLE `indeks_tersier`
  ADD CONSTRAINT `indeks_tersier_ibfk_1` FOREIGN KEY (`id_sekunder`) REFERENCES `indeks_sekunder` (`id_sekunder`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
