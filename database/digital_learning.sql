-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Agu 2024 pada 10.13
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital_learning`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` bigint(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bab`
--

CREATE TABLE `bab` (
  `id_bab` bigint(10) NOT NULL,
  `bab` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bab`
--

INSERT INTO `bab` (`id_bab`, `bab`) VALUES
(1, 'Bab 1'),
(2, 'Bab 2'),
(3, 'Bab 3'),
(4, 'Bab 4'),
(5, 'Bab 5'),
(6, 'Bab 6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi_teks`
--

CREATE TABLE `materi_teks` (
  `id_materi` bigint(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `penjelasan` text NOT NULL,
  `bab_id` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `materi_teks`
--

INSERT INTO `materi_teks` (`id_materi`, `judul`, `isi`, `penjelasan`, `bab_id`) VALUES
(1, 'Aplikasi Pengolah Kata', 'Mengenal aplikasi pengolah kata berdasarkan contohnya', 'Mengenal aplikasi pengolah kata berdasarkan contohnya', 1),
(2, 'Aplikasi Pengolah Angka ', 'Mengenal Aplikasi Pengolah Angka beserta contoh aplikasi yang digunakan dalam kehidupan sehari-hari', 'Mengenal Aplikasi Pengolah Angka beserta contoh aplikasi yang digunakan', 1),
(8, 'Microsoft Excel 2007', 'Mengenal menu pada Microsoft Excel', 'Mengenal menu pada Microsoft Excel', 2),
(9, 'Toolbar', 'Mengenal toolbar standar', 'Mengenal toolbar standar', 3),
(10, 'Aplikasi Pengolah Angka ch 1', 'Mengenal menu pada aplikasi pengolah angka', 'Mengenal menu pada aplikasi pengolah angka', 1),
(11, 'Materi A', 'Materi A', 'Materi A', 1),
(12, 'Materi B', 'Materi B', 'Materi B', 1),
(13, 'Materi C', 'Materi C', 'Materi C', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi_video`
--

CREATE TABLE `materi_video` (
  `id_video` bigint(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `file_video` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `materi_video`
--

INSERT INTO `materi_video` (`id_video`, `judul`, `file_video`) VALUES
(9, 'contoh 132', 'videoplayback.mp4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` bigint(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` text NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `agama` varchar(40) NOT NULL,
  `nisn` bigint(10) NOT NULL,
  `alamat` text NOT NULL,
  `nama_ortu` varchar(20) NOT NULL,
  `kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `username`, `password`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `nisn`, `alamat`, `nama_ortu`, `kelas`) VALUES
(1, 'sonia', '1234', 'sonia', 'bomberay', '2003-08-22', 'p', 'islam', 1573488, 'jl. kapten', '', '4a'),
(2, 'angela', '1234', 'angela', 'fakfak', '2003-10-26', 'p', 'kristen pr', 2345677, 'jl. brigje', '', '4c'),
(3, 'example 445', '12345678', 'example 4455', 'example 44', '2003-02-16', 'P', 'kristen', 12322222452, 'example 4455', '', '5C'),
(8, 'example 42426', '123467789999', 'example 42424', 'papua', '2024-07-03', 'l', 'islam', 11113, 'Papua', 'pppp', '4c'),
(9, 'example 42424', '123467789999', 'example 42424', 'papua', '2024-07-03', 'l', 'islam', 111141, 'Papua', 'pppp', '4c'),
(10, 'contoh22', '22222224444444444', 'contoh243', 'contoh242', '2024-08-10', 'L', 'kristen', 2424121111, 'contoh22', '', '5C'),
(11, 'contoh12', '24242222', 'contoh12', 'examplec1', '2024-08-10', 'P', 'kristen', 2222444444444, 'contoh12', '', '5c');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `bab`
--
ALTER TABLE `bab`
  ADD PRIMARY KEY (`id_bab`);

--
-- Indeks untuk tabel `materi_teks`
--
ALTER TABLE `materi_teks`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indeks untuk tabel `materi_video`
--
ALTER TABLE `materi_video`
  ADD PRIMARY KEY (`id_video`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `bab`
--
ALTER TABLE `bab`
  MODIFY `id_bab` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `materi_teks`
--
ALTER TABLE `materi_teks`
  MODIFY `id_materi` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `materi_video`
--
ALTER TABLE `materi_video`
  MODIFY `id_video` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
