-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2019 at 05:33 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

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
-- Table structure for table `aslab`
--

CREATE TABLE `aslab` (
  `id_aslab` int(11) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `nama_aslab` varchar(100) NOT NULL,
  `tahun_ajaran` varchar(10) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aslab`
--

INSERT INTO `aslab` (`id_aslab`, `nim`, `nama_aslab`, `tahun_ajaran`, `status`) VALUES
(1, '171402030', 'Taufiq Rourkyendo', '2019/2020', '1'),
(2, '181402064', 'Xixillia Sunaryo', '2019/2020', '1'),
(3, '161402100', 'Sinta Anjelina', '2019/2020', '1'),
(4, '171402138', 'Rogate Sola Fide', '2019/2020', '1'),
(5, '161402130', 'Yunita S Marito Pane', '2019/2020', '1'),
(6, '171402117', 'Annisa Assya Mawaddah', '2019/2020', '1'),
(7, '161402077', 'Novalina Simbolon', '2019/2020', '1'),
(8, '161402028', 'Febria Sahrina', '2019/2020', '1'),
(9, '161402004', 'Muhibuddin', '2019/2020', '1'),
(10, '171402086', 'M. Taufik Baskoro', '2019/2020', '1'),
(11, '171402087', 'Arsil Nugraha', '2019/2020', '1'),
(12, '171402052', 'Ananda Muharriz Sinaga', '2019/2020', '1'),
(13, '171402005', 'Nabila Sagita', '2019/2020', '1'),
(14, '161402112', 'Dina Tya Erawati Situmorang', '2019/2020', '1'),
(15, '171402004', 'Jackie Chandra', '2019/2020', '1'),
(17, '161402002', 'Hanna Rabitha Hasni', '2019/2020', '1'),
(19, '161402088', 'Andini Pratiwi', '2019/2020', '1'),
(20, '161402106', 'Emmanuella Anggi Siallagan', '2019/2020', '1'),
(22, '161402063', 'Hari Purnomo Aji', '2019/2020', '1'),
(24, '151402117', 'Muhammad Rizwan Anfa', '2019/2020', '1'),
(25, '161402007', 'Ilham Kurnia Wahyudi Rusli', '2019/2020', '1'),
(26, '151402088', 'Hanafi', '2019/2020', '1'),
(28, '151402111', 'Muhammad Iqbal Fajar', '2019/2020', '1'),
(29, '161402107', 'Syarifah Atika', '2019/2020', '1'),
(32, '141402048', 'Aprilian Hidayat', '2019/2020', '1'),
(33, '161402022', 'Feisal Fahmi', '2019/2020', '1'),
(35, '171402089', 'Alvin Febriando', '2019/2020', '1'),
(36, '171402043', 'Fakhri Rizha Ananda', '2019/2020', '1'),
(37, '171402097', 'Dinul Iman', '2019/2020', '1'),
(38, '171402081', 'Ahmad Adil', '2019/2020', '1'),
(39, '171402109', 'Naufal Azmi', '2019/2020', '1'),
(40, '171402046', 'Nurul Andini', '2019/2020', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aslab`
--
ALTER TABLE `aslab`
  ADD PRIMARY KEY (`id_aslab`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aslab`
--
ALTER TABLE `aslab`
  MODIFY `id_aslab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
