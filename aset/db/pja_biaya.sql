-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Agu 2022 pada 09.02
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pja_biaya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_biaya`
--

CREATE TABLE `tbl_biaya` (
  `id_biaya` int(11) NOT NULL,
  `id_jenis_biaya` int(11) NOT NULL,
  `nama_biaya` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_biaya`
--

INSERT INTO `tbl_biaya` (`id_biaya`, `id_jenis_biaya`, `nama_biaya`) VALUES
(4, 1, 'BIAYA GAJI'),
(5, 1, 'BIAYA LEASING'),
(6, 1, 'BIAYA PAJAK USAHA'),
(7, 1, 'BIAYA TUNJANGAN JABATAN'),
(8, 1, 'BIAYA UANG MAKAN'),
(9, 1, 'BIAYA BPJS'),
(10, 2, 'BIAYA AIR'),
(11, 2, 'BIAYA BONGKAR MUAT'),
(12, 2, 'BIAYA BONUS PELANGGAN'),
(13, 2, 'BIAYA INTERNET'),
(14, 2, 'BIAYA KEMANAN DAN KEBERSIHAN'),
(15, 2, 'BIAYA LAIN LAIN'),
(16, 0, 'BIAYA ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenis_biaya`
--

CREATE TABLE `tbl_jenis_biaya` (
  `id_jenis_biaya` int(11) NOT NULL,
  `jenis_biaya` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jenis_biaya`
--

INSERT INTO `tbl_jenis_biaya` (`id_jenis_biaya`, `jenis_biaya`) VALUES
(1, 'BIAYA TETAP'),
(2, 'BIAYA TIDAK TETAP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lokasi`
--

CREATE TABLE `tbl_lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `lokasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_lokasi`
--

INSERT INTO `tbl_lokasi` (`id_lokasi`, `lokasi`) VALUES
(4, 'ADMIN'),
(14, 'AFANDI'),
(8, 'AGUNG'),
(7, 'BOLO TANI'),
(5, 'DRIVER'),
(1, 'GUDANG'),
(12, 'MARNO'),
(3, 'PIMPINAN'),
(6, 'SIHAB'),
(11, 'SUCIPTO'),
(10, 'SUNAJI'),
(9, 'SUYATIN'),
(13, 'TEMON'),
(2, 'TOKO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tr_biaya`
--

CREATE TABLE `tbl_tr_biaya` (
  `id_tr_biaya` int(11) NOT NULL,
  `id_jenis_biaya` int(11) NOT NULL,
  `id_biaya` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `total_biaya` decimal(19,0) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_tr_biaya`
--

INSERT INTO `tbl_tr_biaya` (`id_tr_biaya`, `id_jenis_biaya`, `id_biaya`, `id_lokasi`, `tanggal`, `total_biaya`, `keterangan`) VALUES
(1, 2, 13, 4, '2022-08-16 00:00:00', '60000', 'bayar telkom'),
(2, 2, 15, 9, '2022-08-16 10:07:20', '30000', 'air minum'),
(3, 1, 4, 4, '2022-08-16 15:08:24', '1200000', 'gaji admin'),
(4, 1, 8, 8, '2022-08-16 15:42:15', '50000', 'uang makan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_biaya`
--
ALTER TABLE `tbl_biaya`
  ADD PRIMARY KEY (`id_biaya`),
  ADD UNIQUE KEY `nama_biaya` (`nama_biaya`);

--
-- Indeks untuk tabel `tbl_jenis_biaya`
--
ALTER TABLE `tbl_jenis_biaya`
  ADD PRIMARY KEY (`id_jenis_biaya`),
  ADD UNIQUE KEY `jenis_biaya` (`jenis_biaya`);

--
-- Indeks untuk tabel `tbl_lokasi`
--
ALTER TABLE `tbl_lokasi`
  ADD PRIMARY KEY (`id_lokasi`),
  ADD UNIQUE KEY `lokasi` (`lokasi`);

--
-- Indeks untuk tabel `tbl_tr_biaya`
--
ALTER TABLE `tbl_tr_biaya`
  ADD PRIMARY KEY (`id_tr_biaya`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_biaya`
--
ALTER TABLE `tbl_biaya`
  MODIFY `id_biaya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_jenis_biaya`
--
ALTER TABLE `tbl_jenis_biaya`
  MODIFY `id_jenis_biaya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_lokasi`
--
ALTER TABLE `tbl_lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_tr_biaya`
--
ALTER TABLE `tbl_tr_biaya`
  MODIFY `id_tr_biaya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
