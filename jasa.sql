-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 23 Sep 2025 pada 14.12
-- Versi server: 10.11.13-MariaDB-0ubuntu0.24.04.1
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jasa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(12) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keperluan` varchar(500) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `no_wa` varchar(500) NOT NULL,
  `jam_masuk` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `keperluan`, `alamat`, `no_wa`, `jam_masuk`) VALUES
(1, 'Lexca', 'helga', 'ledfas', '123123', '2025-09-23 05:48:18'),
(2, 'Tri Nursita Rini, Amd. PK', 'sssss', 'ssssss', 'sssss', '2025-09-23 05:52:08'),
(3, 'asdasd', 'asdasddas', 'asdasd', 'asdasdasd', '2025-09-23 05:56:22'),
(4, 'asdasd', 'asdasdasd', 'asdasdasd', 'asdasdsad', '2025-09-23 06:03:34'),
(5, 'jkjk', 'fdfdf', 'ffgf', 'q675765', '2025-09-23 06:05:09'),
(6, 'Pandis', 'nakal', 'solo', 'jasdkjasd', '2025-09-23 06:06:28'),
(7, 'Topik', 'Telek', 'solo', '082134665410', '2025-09-23 06:13:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
