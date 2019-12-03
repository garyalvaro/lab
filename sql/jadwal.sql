-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Des 2019 pada 04.15
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `nama_jadwal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `nama_jadwal`) VALUES
(1, 'Senin 08.00-09.40'),
(2, 'Senin 09.40-11.20'),
(3, 'Senin 11.20-13.00'),
(4, 'Senin 13.00-14.40'),
(5, 'Senin 14.40-16.20'),
(6, 'Selasa 08.00-09.40'),
(7, 'Selasa 09.40-11.20'),
(8, 'Selasa 11.20-13.00'),
(9, 'Selasa 13.00-14.40'),
(10, 'Selasa 14.40-16.20'),
(11, 'Rabu 08.00-09.40'),
(12, 'Rabu 09.40-11.20'),
(13, 'Rabu 11.20-13.00'),
(14, 'Rabu 13.00-14.40'),
(15, 'Rabu 14.40-16.20'),
(16, 'Kamis 08.00-09.40'),
(17, 'Kamis 09.40-11.20'),
(18, 'Kamis 11.20-13.00'),
(19, 'Kamis 13.00-14.40'),
(20, 'Kamis 14.40-16.20'),
(21, 'Jumat 08.00-09.40'),
(22, 'Jumat 09.40-11.20'),
(23, 'Jumat 11.20-13.00'),
(24, 'Jumat 13.00-14.40'),
(25, 'Jumat 14.40-16.20');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
