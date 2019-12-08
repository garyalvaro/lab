-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 01:26 PM
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
(1, '181402031', 'Gary Alvaro', '2019/2020', '0'),
(2, '181402064', 'Xixillia Sunaryo', '2019/2020', '1'),
(3, '171402030', 'Taufik Rorkyendo', '2019/2020', '1'),
(4, '161402100', 'Sinta', '2019/2020', '1'),
(5, '161402028', 'Febria Sahrina', '2019/2020', '1');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL,
  `tahun_ajaran` varchar(10) NOT NULL,
  `id_aslab` int(11) NOT NULL,
  `id_waktu` int(11) NOT NULL,
  `id_ruang` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `tahun_ajaran`, `id_aslab`, `id_waktu`, `id_ruang`) VALUES
(1, 'DP_A1', '2019/2020', 2, 1, 'IK1'),
(2, 'DP_A2', '2019/2020', 2, 1, 'IK4'),
(3, 'SDA_A1', '2019/2020', 4, 13, 'IK4'),
(4, 'SDA_A2', '2019/2020', 4, 14, 'IK4'),
(5, 'IMK_A1', '2019/2020', 3, 16, 'IK3'),
(6, 'IMK_A2', '2019/2020', 3, 21, 'TI4'),
(7, 'SDA_B1', '2019/2020', 5, 4, 'IK4'),
(8, 'SDA_B2', '2019/2020', 5, 5, 'IK4');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_dp_a1_2019/2020`
--

CREATE TABLE `kelas_dp_a1_2019/2020` (
  `NIM` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nilai` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kelas_dp_a1_2019/2020`
--

INSERT INTO `kelas_dp_a1_2019/2020` (`NIM`, `nama`, `nilai`) VALUES
('181402052', 'Luis', 90),
('181402050', 'Naldo', 90),
('181402031', 'Gary Alvaro', 90);

-- --------------------------------------------------------

--
-- Table structure for table `kelas_dp_a2_2019/2020`
--

CREATE TABLE `kelas_dp_a2_2019/2020` (
  `NIM` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nilai` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kelas_imk_a1_2019/2020`
--

CREATE TABLE `kelas_imk_a1_2019/2020` (
  `NIM` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nilai` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kelas_imk_a1_2019/2020`
--

INSERT INTO `kelas_imk_a1_2019/2020` (`NIM`, `nama`, `nilai`) VALUES
('181402031', 'Gary Alvaro', 90),
('181402055', 'Leonardo', 90);

-- --------------------------------------------------------

--
-- Table structure for table `kelas_imk_a2_2019/2020`
--

CREATE TABLE `kelas_imk_a2_2019/2020` (
  `NIM` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nilai` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kelas_sda_a1_2019/2020`
--

CREATE TABLE `kelas_sda_a1_2019/2020` (
  `NIM` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nilai` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kelas_sda_a2_2019/2020`
--

CREATE TABLE `kelas_sda_a2_2019/2020` (
  `NIM` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nilai` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kelas_sda_b1_2019/2020`
--

CREATE TABLE `kelas_sda_b1_2019/2020` (
  `NIM` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nilai` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kelas_sda_b2_2019/2020`
--

CREATE TABLE `kelas_sda_b2_2019/2020` (
  `NIM` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nilai` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id_matkul` int(11) NOT NULL,
  `nama_matkul` varchar(50) NOT NULL,
  `singkatan_matkul` varchar(10) NOT NULL,
  `semester` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id_matkul`, `nama_matkul`, `singkatan_matkul`, `semester`) VALUES
(1, 'Interaksi Manusia dan Komputer', 'IMK', '3'),
(2, 'Pemrograman Berorientasi Objek', 'PBO', '2'),
(3, 'Dasar-Dasar Pemrograman', 'DP', '1'),
(4, 'Sistem Basis Data', 'SBD', '3'),
(5, 'Pemrograman Web', 'PW', '1'),
(6, 'Komunikasi Data dan Jaringan Komputer', 'KDJK', '3'),
(7, 'Struktur Data dan Algoritma', 'SDA', '3');

-- --------------------------------------------------------

--
-- Table structure for table `rekrut_aslab`
--

CREATE TABLE `rekrut_aslab` (
  `kode_rekrut` int(3) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `matkul1` varchar(30) NOT NULL,
  `matkul2` varchar(30) NOT NULL,
  `ip1` float NOT NULL,
  `ip2` float NOT NULL,
  `contact` varchar(50) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `lamaran` varchar(255) NOT NULL,
  `alasan` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekrut_aslab`
--

INSERT INTO `rekrut_aslab` (`kode_rekrut`, `nim`, `matkul1`, `matkul2`, `ip1`, `ip2`, `contact`, `cv`, `lamaran`, `alasan`, `status`) VALUES
(18, '181402064', 'pw', 'imk', 3.25, 3.75, '081973168988', '181402064_13.pdf', '181402064_14.pdf', '1', 0),
(20, '181402031', 'imk', 'imk', 4, 3.75, '081973168988', '181402031_1.pdf', '181402031_11.pdf', 'a', 0),
(21, '181402055', 'kdjk', 'imk', 3.75, 3.5, '08123456789', '181402055_1.pdf', '181402055_11.pdf', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibu', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` varchar(5) NOT NULL,
  `nama_ruang` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `nama_ruang`, `keterangan`) VALUES
('IK1', 'Lab. Pemrograman 1', 'Ruangan Praktikan Ilkom'),
('IK2', 'Lab. Pemrograman 2', 'Ruangan Praktikan Ilkom'),
('IK3', 'Lab. Pemrograman 3', 'Ruangan Praktikan TI'),
('IK4', 'Lab. Pemrograman 4', 'Ruangan Praktikan TI'),
('TI1', 'Lab. Jaringan 1', 'Ruangan Praktikan Ilkom'),
('TI2', 'Lab. Jaringan 2', 'Ruangan Praktikan TI'),
('TI3', 'Lab. Database', 'Ruangan Praktikan TI'),
('TI4', 'Lab. Multimedia', 'Ruangan Praktikan TI');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nim` varchar(20) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `level` int(1) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nim`, `nama`, `level`, `email`, `pass`) VALUES
('161402100', 'Sinta', 1, 'sinta@gmail.com', 'sinta123'),
('171402030', 'Roky', 1, 'roky@gmail.com', 'roki123'),
('181402031', 'Gary Alvaro', 2, 'garyalvarowijaya@gmail.com', 'gary123'),
('181402050', 'Naldo Y', 0, 'francofernando654@gmail.com', 'naldo123'),
('181402052', 'Luis', 0, 'bernardbro@gmail.com', 'luis123'),
('181402055', 'Leonardo Wijaya', 0, 'leonardow1800@gmail.com', 'leo123'),
('181402064', 'Xixillia Sun', 1, 'xixil@gmail.com', 'xxl123'),
('admin', 'admin', 2, 'laboratoriumtiusu@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `id_waktu` int(11) NOT NULL,
  `nama_waktu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waktu`
--

INSERT INTO `waktu` (`id_waktu`, `nama_waktu`) VALUES
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
-- Indexes for table `aslab`
--
ALTER TABLE `aslab`
  ADD PRIMARY KEY (`id_aslab`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_aslab` (`id_aslab`),
  ADD KEY `id_jadwal` (`id_waktu`),
  ADD KEY `id_ruang` (`id_ruang`);

--
-- Indexes for table `kelas_imk_a1_2019/2020`
--
ALTER TABLE `kelas_imk_a1_2019/2020`
  ADD UNIQUE KEY `NIM` (`NIM`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `rekrut_aslab`
--
ALTER TABLE `rekrut_aslab`
  ADD PRIMARY KEY (`kode_rekrut`),
  ADD KEY `relasi_aslab` (`nim`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD UNIQUE KEY `kode_ruang` (`id_ruang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`id_waktu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aslab`
--
ALTER TABLE `aslab`
  MODIFY `id_aslab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rekrut_aslab`
--
ALTER TABLE `rekrut_aslab`
  MODIFY `kode_rekrut` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `waktu`
--
ALTER TABLE `waktu`
  MODIFY `id_waktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `id_aslab` FOREIGN KEY (`id_aslab`) REFERENCES `aslab` (`id_aslab`);

--
-- Constraints for table `rekrut_aslab`
--
ALTER TABLE `rekrut_aslab`
  ADD CONSTRAINT `relasi_user` FOREIGN KEY (`nim`) REFERENCES `user` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
