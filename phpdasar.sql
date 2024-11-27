-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2024 pada 03.05
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nisn` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `nisn`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Nafisa Fairuzia', '0329158', 'nafisafairuzia@gmail.com', 'Rekayasa Perangkat Lunak', 'gb1.jpg'),
(2, 'Fadilla Airur Rozida', '0329182', 'fadilla03@gmail.com', 'Desain Komunikasi Visual', 'gb2.jpg'),
(3, 'Putri Karsilia', '0349032', 'putrikna@gmail.com', 'Teknik Komunikasi dan Jaringan', 'gb3.jpg'),
(4, 'Amelya Fernanda Putri', '0329182', 'fernanda023@gmail.com', 'Agribisnis Tanaman dan Hortikultura', 'gb4.jpg'),
(5, 'Nisa Dwi Ramadhani', '0329182', 'nisarmdhn@gmail.com', 'Teknik Kendaraan Ringan', 'gb5.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'zia', '$2y$10$bN70/M50o0h1Ff7R8HyfG.Jh0z/tS6S7BimW1FW3JWk.yen3LbftW'),
(3, 'nafisa', '$2y$10$I8NDDZJAxn9N1V/RRGAVyeqNMzK4Dn8Cxdp/3DKC5Yc2FoURRIchi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
