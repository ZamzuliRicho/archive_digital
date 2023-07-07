-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jun 2023 pada 13.38
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_arsip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `disposisi`
--

CREATE TABLE `disposisi` (
  `id_disposisi` int(11) NOT NULL,
  `pengisi` varchar(50) NOT NULL,
  `tujuan` varchar(250) NOT NULL,
  `instruksi` varchar(300) NOT NULL,
  `catatan` varchar(200) NOT NULL,
  `id_suratmasuk` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `disposisi`
--

INSERT INTO `disposisi` (`id_disposisi`, `pengisi`, `tujuan`, `instruksi`, `catatan`, `id_suratmasuk`) VALUES
(9, 'Kepsek', 'Keuangan', '', 'Penting', 2),
(10, 'Kepsek', 'Uuu', '', 'sdfd', 2),
(11, 'Kepala Sekolah', 'Keuangan', '', '', 4),
(12, 'Kepala Sekolah', 'Keamanan', '', '', 2),
(16, 'Wakil Kurikulum', 'Keuangan', '', 'Mohon ditindak lanjuti', 26);

-- --------------------------------------------------------

--
-- Struktur dari tabel `indeks`
--

CREATE TABLE `indeks` (
  `id_indeks` int(3) NOT NULL,
  `kode_indeks` varchar(5) NOT NULL,
  `judul_indeks` varchar(50) NOT NULL,
  `detail` varchar(512) NOT NULL,
  `tanggal_dibuat` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `indeks`
--

INSERT INTO `indeks` (`id_indeks`, `kode_indeks`, `judul_indeks`, `detail`, `tanggal_dibuat`) VALUES
(1, 'RNCN', 'Perencanaan', 'Indeks untuk surat perencanaan\r\n', '2023-06-13'),
(2, 'UANG', 'Keuangan', '0', '2023-06-13'),
(6, 'TTUSH', 'Ketata Usahaan', '', '2023-06-13'),
(10, 'SRN', 'Sarana dan Prasarana', '', '2023-06-13'),
(11, 'SENI', 'Kesenian', '', '2023-06-13'),
(19, 'PGW', 'Kepegawaian', '', '2023-06-13'),
(20, 'LNGKP', 'Perlengkapan', 'Ini detail perlengkapan', '2023-06-13'),
(21, 'ORG', 'Organisasi', 'Ini detail, hehe', '2023-06-13'),
(22, 'PNDDK', 'Pendidikan', '', '2023-06-13'),
(23, 'KRKLM', 'Kurikulum/ Pengawasan', 'Surat dengan indek kurikulum atau pengawasan ', '2023-06-13'),
(24, 'OLRG', 'Olahraga', 'Mana detailnya gan coba tambah ya', '2023-06-13'),
(30, 'QWERT', 'Qwerty', 'oke', '2023-06-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratkeluar`
--

CREATE TABLE `suratkeluar` (
  `id_suratkeluar` int(5) NOT NULL,
  `no_suratkeluar` varchar(60) NOT NULL,
  `judul_suratkeluar` varchar(100) NOT NULL,
  `id_indeks` int(3) NOT NULL,
  `tujuan` varchar(60) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `keterangan` mediumtext NOT NULL,
  `berkas_suratkeluar` varchar(255) NOT NULL,
  `klasifikasi_sk` varchar(200) NOT NULL,
  `jenis_retensi_sk` varchar(200) NOT NULL,
  `tingkat_perkembangan_sk` varchar(200) NOT NULL,
  `jadwal_retensi_sk` varchar(200) NOT NULL,
  `kategori_surat_sk` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `suratkeluar`
--

INSERT INTO `suratkeluar` (`id_suratkeluar`, `no_suratkeluar`, `judul_suratkeluar`, `id_indeks`, `tujuan`, `tanggal_keluar`, `keterangan`, `berkas_suratkeluar`, `klasifikasi_sk`, `jenis_retensi_sk`, `tingkat_perkembangan_sk`, `jadwal_retensi_sk`, `kategori_surat_sk`) VALUES
(1, '143/SMK-DH/H-12/2019', 'Balasan Permintaan Kerja Praktek', 8, 'UIN SUSKA RIAU', '2019-12-05', 'Oke', 'SURAT PERMOHONAN KP UKI.docx', '', '', '', '', ''),
(14, 'okelah/INSTANSI/H-06/2023910', '', 23, 'ADHIKARSA', '2023-06-12', 'Rusak', '6486d1115645e.docx', 'Tersier', 'Permanen', 'Salinan', 'Inaktif', 'Arsip Vital'),
(15, '90/INSTANSI/H-06/20249', '', 23, 'asdfghjk', '2023-06-14', 'Baik', '648978f2c1cf2.pdf', 'Sekunder', 'Permanen', 'Asli', 'Inaktif', 'Arsip Vital');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratmasuk`
--

CREATE TABLE `suratmasuk` (
  `id_suratmasuk` int(3) NOT NULL,
  `no_suratmasuk` varchar(60) NOT NULL,
  `asal_surat` varchar(60) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_diterima` date NOT NULL,
  `id_indeks` int(3) NOT NULL,
  `berkas_suratmasuk` varchar(255) NOT NULL,
  `klasifikasi` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `jenis_retensi` varchar(255) NOT NULL,
  `tingkat_perkembangan` varchar(255) NOT NULL,
  `jadwal_retensi` varchar(255) NOT NULL,
  `kategori_surat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `suratmasuk`
--

INSERT INTO `suratmasuk` (`id_suratmasuk`, `no_suratmasuk`, `asal_surat`, `tanggal_masuk`, `tanggal_diterima`, `id_indeks`, `berkas_suratmasuk`, `klasifikasi`, `keterangan`, `jenis_retensi`, `tingkat_perkembangan`, `jadwal_retensi`, `kategori_surat`) VALUES
(34, '7/90/MKA/9009', '2023-06-10', '2023-06-01', '2023-06-10', 1, '6484809b8a5b3.docx', 'primer', 'rusak', 'musnah', 'tembusan', 'inaktif', 'arsip_vital'),
(35, '7/90/MKA/90128', 'Jombang Timur', '2023-06-04', '2023-06-10', 11, '6484812327bd6.docx', 'sekunder', 'rusak', 'dinilai_kembali', 'salinan', 'aktif', 'arsip_terbuka'),
(36, '7/90/MKA/80', 'Sinarmas Kuala', '2023-06-02', '2023-06-10', 1, '6484814fbfd72.docx', 'sekunder', 'rusak', 'permanen', 'pertinggalan', 'aktif', 'arsip vital'),
(37, '7/90/MKA-781', '2023-06-11', '2023-06-11', '2023-06-11', 22, '6485e1a7ca46b.docx', 'Primer', 'Baik', 'Permanen', 'Tembusan', 'Aktif', 'Arsip Vital'),
(38, '7/90/MKA/90/809', 'Sumber Jaya', '2023-06-12', '2023-06-12', 19, '64874f8f8f2e8.pdf', 'Sekunder', 'Rusak', 'Musnah', 'Tembusan', 'Aktif', 'Arsip Vital'),
(39, '7/90/MKA/23456', 'qwertyuip', '2023-06-14', '2023-06-14', 30, '648975cbe1678.pdf', 'Primer', 'Baik', 'Musnah', 'Tembusan', 'Aktif', 'Arsip Vital');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `image`, `bio`, `facebook`, `email`, `level`) VALUES
(5, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin arsip surat', '5e53414b22179.jpg', ' ', ' ', 'admin@email.com', 1),
(7, 'zamzuli', '01fcd7a102ad890c551ac24495421b6e92394e36', 'Mohammad Zamzuli Qoricho', '', '', '', '', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`id_disposisi`),
  ADD KEY `id_suratmasuk` (`id_suratmasuk`);

--
-- Indeks untuk tabel `indeks`
--
ALTER TABLE `indeks`
  ADD PRIMARY KEY (`id_indeks`);

--
-- Indeks untuk tabel `suratkeluar`
--
ALTER TABLE `suratkeluar`
  ADD PRIMARY KEY (`id_suratkeluar`),
  ADD KEY `id_subindeks` (`id_indeks`);

--
-- Indeks untuk tabel `suratmasuk`
--
ALTER TABLE `suratmasuk`
  ADD PRIMARY KEY (`id_suratmasuk`),
  ADD KEY `id_subindeks` (`id_indeks`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `disposisi`
--
ALTER TABLE `disposisi`
  MODIFY `id_disposisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `indeks`
--
ALTER TABLE `indeks`
  MODIFY `id_indeks` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `suratkeluar`
--
ALTER TABLE `suratkeluar`
  MODIFY `id_suratkeluar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `suratmasuk`
--
ALTER TABLE `suratmasuk`
  MODIFY `id_suratmasuk` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
