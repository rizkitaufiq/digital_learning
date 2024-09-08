-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Sep 2024 pada 10.26
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
(6, 'Bab 6'),
(7, 'Bab 7'),
(8, 'Bab 8'),
(9, 'Bab 9'),
(10, 'Bab 10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `latihan_soal`
--

CREATE TABLE `latihan_soal` (
  `id_soal` bigint(10) NOT NULL,
  `soal` text NOT NULL,
  `opsi_a` text NOT NULL,
  `opsi_b` text NOT NULL,
  `opsi_c` text NOT NULL,
  `opsi_d` text NOT NULL,
  `jawaban` char(1) NOT NULL,
  `format` varchar(10) NOT NULL,
  `bab_id` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `latihan_soal`
--

INSERT INTO `latihan_soal` (`id_soal`, `soal`, `opsi_a`, `opsi_b`, `opsi_c`, `opsi_d`, `jawaban`, `format`, `bab_id`) VALUES
(1, 'contoh 1', 'contoh 1', 'contoh', 'contoh 2', 'contoh', 'a', 'center', 1),
(2, 'Example 1', 'Example', 'Example', 'Example', 'Example', 'b', 'left', 1),
(3, 'Example 2', 'Example 2', 'Example 2 ', 'Example 2', 'Example 2', 'c', 'center', 1),
(4, 'Example 123', 'Example 123', 'Example 123', 'Example 123', 'Example 123', 'a', 'left', 1),
(5, 'Example 12355', 'Example 1235', 'Example 12355', 'Example 12355', 'Example 123444', 'c', 'left', 1),
(6, 'Example 555', 'Example 555', 'Example 555', 'Example 555', 'Example 555', 'd', 'center', 1);

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
(13, 'Materi C', 'Materi C', 'Materi C', 1),
(15, 'Aplikasi editor', 'Aplikasi editor', 'Aplikasi editor', 4);

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
(9, 'Aplikasi Pengolah Angka', 'videoplayback.mp4'),
(10, 'Pengenalan Menu Excel', 'Perilaku_Pengguna_Internet_di_Indonesia_-_Hari_Media_Sosial_(1).mp4'),
(11, 'Aplikasi Pengolah Kata dan implementasinya', 'Animasi_Motion_Graphic_Iklan_Layanan_Masyarakat-_Waspada_Hoax.mp4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_latihan_soal`
--

CREATE TABLE `nilai_latihan_soal` (
  `id_nilai` bigint(10) NOT NULL,
  `siswa_id` bigint(10) NOT NULL,
  `bab_id` int(10) NOT NULL,
  `skor` int(10) NOT NULL,
  `status_tes` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nilai_latihan_soal`
--

INSERT INTO `nilai_latihan_soal` (`id_nilai`, `siswa_id`, `bab_id`, `skor`, `status_tes`) VALUES
(1, 1, 1, 3, 2),
(2, 2, 1, 3, 2),
(3, 3, 1, 3, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `praktikum`
--

CREATE TABLE `praktikum` (
  `id_praktikum` bigint(10) NOT NULL,
  `praktikum` char(2) NOT NULL,
  `soal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `praktikum`
--

INSERT INTO `praktikum` (`id_praktikum`, `praktikum`, `soal`) VALUES
(6, '1', ' Buatlah Makalah dengan m.word'),
(7, '2', ' Buatlah absensi pada m.excel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `praktikum_siswa`
--

CREATE TABLE `praktikum_siswa` (
  `id_praktikum_siswa` bigint(10) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `file_praktikum` varchar(100) NOT NULL,
  `siswa_id` bigint(10) NOT NULL,
  `praktikum_id` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `praktikum_siswa`
--

INSERT INTO `praktikum_siswa` (`id_praktikum_siswa`, `tanggal`, `waktu`, `file_praktikum`, `siswa_id`, `praktikum_id`) VALUES
(14, '2024-09-03', '14:24:17', 'TROUBLESHOOTING+-+EXAM+KLIEN.pdf', 1, 6),
(15, '0000-00-00', '00:00:00', '', 2, 6),
(16, '0000-00-00', '00:00:00', '', 3, 6),
(17, '0000-00-00', '00:00:00', '', 8, 6),
(18, '0000-00-00', '00:00:00', '', 9, 6),
(19, '0000-00-00', '00:00:00', '', 10, 6),
(20, '0000-00-00', '00:00:00', '', 11, 6),
(21, '0000-00-00', '00:00:00', '', 1, 7),
(22, '2024-09-03', '14:36:05', 'Panduan+Pelaksanaan+OSNK+SD+dan+SMP.pdf', 2, 7),
(23, '0000-00-00', '00:00:00', '', 3, 7),
(24, '0000-00-00', '00:00:00', '', 8, 7),
(25, '0000-00-00', '00:00:00', '', 9, 7),
(26, '0000-00-00', '00:00:00', '', 10, 7),
(27, '0000-00-00', '00:00:00', '', 11, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `progres_belajar`
--

CREATE TABLE `progres_belajar` (
  `id_progres_belajar` bigint(10) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `persentase` int(10) NOT NULL,
  `siswa_id` bigint(10) NOT NULL,
  `materi_id` bigint(10) NOT NULL,
  `bab_id` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `progres_belajar`
--

INSERT INTO `progres_belajar` (`id_progres_belajar`, `tanggal`, `waktu`, `persentase`, `siswa_id`, `materi_id`, `bab_id`) VALUES
(11, '2024-08-28', '19:36:12', 10, 1, 1, 1),
(12, '2024-08-28', '19:36:22', 10, 1, 2, 1),
(13, '2024-08-28', '19:37:32', 10, 1, 10, 1),
(14, '2024-08-28', '19:53:36', 10, 2, 1, 1),
(15, '2024-08-28', '21:55:38', 10, 1, 8, 2),
(24, '2024-08-29', '11:17:04', 10, 2, 2, 1),
(27, '2024-08-29', '19:06:09', 10, 1, 11, 1);

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
-- Indeks untuk tabel `latihan_soal`
--
ALTER TABLE `latihan_soal`
  ADD PRIMARY KEY (`id_soal`);

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
-- Indeks untuk tabel `nilai_latihan_soal`
--
ALTER TABLE `nilai_latihan_soal`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `praktikum`
--
ALTER TABLE `praktikum`
  ADD PRIMARY KEY (`id_praktikum`);

--
-- Indeks untuk tabel `praktikum_siswa`
--
ALTER TABLE `praktikum_siswa`
  ADD PRIMARY KEY (`id_praktikum_siswa`);

--
-- Indeks untuk tabel `progres_belajar`
--
ALTER TABLE `progres_belajar`
  ADD PRIMARY KEY (`id_progres_belajar`);

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
  MODIFY `id_bab` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `latihan_soal`
--
ALTER TABLE `latihan_soal`
  MODIFY `id_soal` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `materi_teks`
--
ALTER TABLE `materi_teks`
  MODIFY `id_materi` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `materi_video`
--
ALTER TABLE `materi_video`
  MODIFY `id_video` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `nilai_latihan_soal`
--
ALTER TABLE `nilai_latihan_soal`
  MODIFY `id_nilai` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `praktikum`
--
ALTER TABLE `praktikum`
  MODIFY `id_praktikum` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `praktikum_siswa`
--
ALTER TABLE `praktikum_siswa`
  MODIFY `id_praktikum_siswa` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `progres_belajar`
--
ALTER TABLE `progres_belajar`
  MODIFY `id_progres_belajar` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
