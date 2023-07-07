-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jun 2023 pada 19.50
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(30, 'QWERT', 'Qwerty', 'oke', '2023-06-13'),
(32, '', '275-INDEKS BARU', '', '2023-06-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `indeks_sekunder`
--

CREATE TABLE `indeks_sekunder` (
  `id_sekunder` int(11) NOT NULL,
  `id_indeks` int(11) DEFAULT NULL,
  `judul_sekunder` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `indeks_sekunder`
--

INSERT INTO `indeks_sekunder` (`id_sekunder`, `id_indeks`, `judul_sekunder`) VALUES
(1, 1, 'Penerimaan Mahasiswa Baru'),
(2, 1, 'Orientasi Mahasiswa Baru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `indeks_tersier`
--

CREATE TABLE `indeks_tersier` (
  `id_tersier` int(10) NOT NULL,
  `judul_indeks` varchar(100) NOT NULL,
  `id_sekunder` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `indeks_tersier`
--

INSERT INTO `indeks_tersier` (`id_tersier`, `judul_indeks`, `id_sekunder`) VALUES
(1, 'Daya Tampung Mahasiwa', 1),
(2, 'Petunjuk PMB', 1),
(3, 'Panduan/Pedoman Mahasiswa Baru', 2),
(4, 'Sosialisasi Peraturan Akademik', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `klasifikasi_indeks`
--

CREATE TABLE `klasifikasi_indeks` (
  `id` int(10) NOT NULL,
  `primary` int(10) DEFAULT NULL,
  `secondary` int(10) DEFAULT NULL,
  `tersier` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `klasifikasi_indeks`
--

INSERT INTO `klasifikasi_indeks` (`id`, `primary`, `secondary`, `tersier`) VALUES
(1, 1, 1, 1),
(2, 1, 1, 2),
(3, 1, 2, 3),
(4, 1, 2, 4);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `tanggal_diterima` date NOT NULL DEFAULT current_timestamp(),
  `id_indeks` int(3) NOT NULL,
  `berkas_suratmasuk` varchar(255) NOT NULL,
  `klasifikasi` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `jenis_retensi` varchar(255) NOT NULL,
  `tingkat_perkembangan` varchar(255) NOT NULL,
  `jadwal_retensi` varchar(255) NOT NULL,
  `kategori_surat` varchar(255) NOT NULL,
  `id_sekunder` int(11) NOT NULL,
  `id_tersier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `suratmasuk`
--

INSERT INTO `suratmasuk` (`id_suratmasuk`, `no_suratmasuk`, `asal_surat`, `tanggal_masuk`, `tanggal_diterima`, `id_indeks`, `berkas_suratmasuk`, `klasifikasi`, `keterangan`, `jenis_retensi`, `tingkat_perkembangan`, `jadwal_retensi`, `kategori_surat`, `id_sekunder`, `id_tersier`) VALUES
(34, '7/90/MKA/9009', '2023-06-10', '2023-06-01', '2023-06-21', 1, '6484809b8a5b3.docx', 'primer', 'rusak', 'musnah', 'tembusan', 'inaktif', 'arsip_vital', 0, 0),
(35, '7/90/MKA/90128', 'Jombang Timur', '2023-06-04', '2023-06-21', 11, '6484812327bd6.docx', 'sekunder', 'rusak', 'dinilai_kembali', 'salinan', 'aktif', 'arsip_terbuka', 0, 0),
(36, '7/90/MKA/80', 'Sinarmas Kuala', '2023-06-02', '2023-06-21', 1, '6484814fbfd72.docx', 'sekunder', 'rusak', 'permanen', 'pertinggalan', 'aktif', 'arsip vital', 0, 0),
(37, '7/90/MKA-781', '2023-06-11', '2023-06-11', '2023-06-21', 22, '6485e1a7ca46b.docx', 'Primer', 'Baik', 'Permanen', 'Tembusan', 'Aktif', 'Arsip Vital', 0, 0),
(38, '7/90/MKA/90/809', 'Sumber Jaya', '2023-06-12', '2023-06-21', 19, '64874f8f8f2e8.pdf', 'Sekunder', 'Rusak', 'Musnah', 'Tembusan', 'Aktif', 'Arsip Vital', 0, 0),
(39, '7/90/MKA/23456', 'qwertyuip', '2023-06-14', '2023-06-21', 30, '648975cbe1678.pdf', 'Primer', 'Baik', 'Musnah', 'Tembusan', 'Aktif', 'Arsip Vital', 0, 0),
(40, '7/90/MKA/9009', '2023-06-10', '2023-06-19', '2023-06-21', 1, '6484809b8a5b3.docx', 'primer', 'rusak', 'musnah', 'tembusan', 'inaktif', 'arsip_vital', 0, 0),
(41, '8890/098/MKM/1', 'SMKN 1 Jombang', '2023-06-20', '2023-06-21', 6, '6491e06feef68.pdf', '', 'Baik', 'Permanen', 'Asli', 'Aktif', 'Arsip Terbuka', 0, 0),
(42, '7/90/MKA/0987', 'Universitas Negeri Lampung', '2023-06-20', '2023-06-21', 2, '6491e17f65e19.pdf', '', 'Baik', 'Permanen', 'Asli', 'Aktif', 'Arsip Vital', 0, 0),
(43, '7/90/MKA/908', 'Jakarta', '0000-00-00', '2023-06-20', 1, '6491e25d40450.pdf', '', 'Baik', 'Dinilai Kembali', 'Tembusan', 'Aktif', 'Arsip Vital', 0, 0),
(44, '7/90/MKA/123456789', 'Jakarta', '0000-00-00', '2023-06-21', 1, '6491e2c6b0108.pdf', '', 'Baik', 'Musnah', 'Asli', 'Aktif', 'Arsip Terbuka', 0, 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indeks untuk tabel `indeks_sekunder`
--
ALTER TABLE `indeks_sekunder`
  ADD PRIMARY KEY (`id_sekunder`),
  ADD KEY `id_indeks` (`id_indeks`);

--
-- Indeks untuk tabel `indeks_tersier`
--
ALTER TABLE `indeks_tersier`
  ADD PRIMARY KEY (`id_tersier`),
  ADD KEY `id_sekunder` (`id_sekunder`);

--
-- Indeks untuk tabel `klasifikasi_indeks`
--
ALTER TABLE `klasifikasi_indeks`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id_indeks` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `indeks_sekunder`
--
ALTER TABLE `indeks_sekunder`
  MODIFY `id_sekunder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `indeks_tersier`
--
ALTER TABLE `indeks_tersier`
  MODIFY `id_tersier` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `klasifikasi_indeks`
--
ALTER TABLE `klasifikasi_indeks`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `suratkeluar`
--
ALTER TABLE `suratkeluar`
  MODIFY `id_suratkeluar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `suratmasuk`
--
ALTER TABLE `suratmasuk`
  MODIFY `id_suratmasuk` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `indeks_sekunder`
--
ALTER TABLE `indeks_sekunder`
  ADD CONSTRAINT `indeks_sekunder_ibfk_1` FOREIGN KEY (`id_indeks`) REFERENCES `indeks` (`id_indeks`);

--
-- Ketidakleluasaan untuk tabel `indeks_tersier`
--
ALTER TABLE `indeks_tersier`
  ADD CONSTRAINT `indeks_tersier_ibfk_1` FOREIGN KEY (`id_sekunder`) REFERENCES `indeks_sekunder` (`id_sekunder`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
