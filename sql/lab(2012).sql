-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2019 at 08:19 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL,
  `kode_enroll` varchar(10) NOT NULL,
  `tahun_ajaran` varchar(10) NOT NULL,
  `id_aslab` int(11) NOT NULL,
  `id_waktu` int(11) NOT NULL,
  `id_ruang` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kode_enroll`, `tahun_ajaran`, `id_aslab`, `id_waktu`, `id_ruang`) VALUES
(1, 'DP A1', 'wv6p5e', '2019/2020', 2, 1, 'IK3'),
(2, 'DP A2', 'rv51ms', '2019/2020', 2, 0, '-'),
(5, 'IMK A1', 'nj2ppi', '2019/2020', 1, 0, '-'),
(6, 'IMK A2', 'okk6z6', '2019/2020', 1, 0, '-');

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
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nim` varchar(10) DEFAULT NULL,
  `nilai_ke` int(11) DEFAULT NULL,
  `nilai` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_kelas`, `nim`, `nilai_ke`, `nilai`) VALUES
(4, 1, NULL, NULL, NULL),
(5, 2, NULL, NULL, NULL),
(6, 1, '181402052', NULL, 90),
(11, 5, NULL, NULL, NULL),
(12, 6, NULL, NULL, NULL),
(15, 7, NULL, NULL, NULL),
(16, 8, NULL, NULL, NULL),
(23, 1, '181402055', NULL, 100);

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
(22, '181402055', 'kdjk', 'pw', 4, 4, '08123456789', '181402055_12.pdf', '181402055_13.pdf', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 0),
(23, '181402055', 'pw', 'pw', 3.75, 3.75, '08123456789', '181402055_14.pdf', '181402055_15.pdf', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 0);

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
('141402048', 'Aprilian Hidayat', 1, 'aprilian@gmail.com', '123123'),
('151402088', 'Hanafi', 1, 'hanafi@gmail.com', '123123'),
('151402111', 'Muhammad Iqbal Fajar', 1, 'iqbal@gmail.com', '123123'),
('151402117', 'Muhammad Rizwan Anfa', 1, 'anfa@gmail.com', '123123'),
('161402001', 'Leli Herma Yanti', 0, 'leli@gmail.com', '123123'),
('161402002', 'Hanna Rabitha Hasni', 1, 'hana@gmail.com', '123123'),
('161402003', 'Khairunnisa Husin Nasution', 0, 'kha@gmail.com', '123123'),
('161402004', 'Muhibuddin', 1, 'muhi@gmail.com', '123123'),
('161402005', 'Desi B. Tambunan', 0, 'desi@gmail.com', '123123'),
('161402006', 'Reyhan Hafizt Harahap', 0, 'rey@gmail.com', '123123'),
('161402007', 'Ilham Kurnia Wahyudi Rusli', 1, 'ilham@gmail.com', '123123'),
('161402008', 'Dewi Safrida Telambanua', 0, 'dewi@gmail.com', '123123'),
('161402009', 'Dwi Arief Adityah', 0, 'dwi@gmail.com', '123123'),
('161402010', 'Deddy F. Sihombing', 0, 'deddy@gmail.com', '123123'),
('161402011', 'Elwin Duha', 0, 'elwin@gmail.com', '123123'),
('161402012', 'Ikhwanul Khoir Pulungan', 0, 'ikh@gmail.com', '123123'),
('161402013', 'Rizal Firdaus', 0, 'rizal@gmail.com', '123123'),
('161402014', 'Khairunnisa Sitanggang', 0, 'khai@gmail.com', '123123'),
('161402015', 'Sri Kurnia Nurhikmah', 0, 'sri@gmail.com', '123123'),
('161402016', 'Hamzali', 0, 'hamzali@gmail.com', '123123'),
('161402017', 'Jhon Rendy Sortono', 0, 'jhon@gmail.com', '123123'),
('161402018', 'Mujahid Akbar', 0, 'mujahid@gmail.com', '123123'),
('161402020', 'Bora Sejati Siboro', 0, 'bora@gmail.com', '123123'),
('161402022', 'Feisal Fahmi', 1, 'feisal@gmail.com', '123123'),
('161402028', 'Febria Sahrina', 1, 'febri@gmail.com', '123123'),
('161402063', 'Hari Purnomo Aji', 1, 'hari@gmail.com', '123123'),
('161402077', 'Novalina Simbolon', 1, 'nova@gmail.com', '123123'),
('161402088', 'Andini Pratiwi', 1, 'andini@gmail.com', '123123'),
('161402100', 'Sinta Anjelina', 1, 'sinta@gmail.com', 'sinta123'),
('161402106', 'Emmanuella Anggi Siallagan', 1, 'ema@gmail.com', '123123'),
('161402107', 'Syarifah Atika', 1, 'atika@gmail.com', '123123'),
('161402112', 'Dina Tya Erawati Situmorang', 1, 'dina@gmail.com', '123123'),
('161402130', 'Yunita S Marito Pane', 1, 'yunita@gmail.com', '123123'),
('171402001', 'Nadia Nasywa Lubis', 0, 'nadia@gmail.com', '123123'),
('171402002', 'Grace Sella Br. Ginting', 0, 'grace@gmail.com', '123123'),
('171402003', 'Fifi Angreni Br.Gtg', 0, 'fifi@gmail.com', '123123'),
('171402004', 'Jackie Chandra', 1, 'jack@gmail.com', '123123'),
('171402005', 'Nabila Sagita', 1, 'nabila@gmail.com', '123123'),
('171402006', 'Teddy Ferdinand Lubis', 0, 'tedy@gmail.com', '123123'),
('171402007', 'Melati Yulvira Salsabila', 0, 'melati@gmail.com', '123123'),
('171402008', 'Lisa Ayuning Tias', 0, 'lisa@gmail.com', '123123'),
('171402009', 'Miftah Aulia', 0, 'miftah@gmail.com', '123123'),
('171402010', 'Adelia Salmah Siregar', 0, 'adelia@gmail.com', '123123'),
('171402011', 'Nabila Azzahra', 0, 'nabila@gmail.com', '123123'),
('171402012', 'Aflah Mutsanni Pulungan', 0, 'aflah@gmail.com', '123123'),
('171402013', 'Rezky Febry Dawanti', 0, 'rezky@gmail.com', '123123'),
('171402014', 'Muhammad Farras Siraj Polem', 0, 'farras@gmail.com', '123123'),
('171402015', 'M. Rizky Imanta Sitepu', 0, 'rizky@gmail.com', '123123'),
('171402016', 'Tria Riskiani', 0, 'tria@gmail.com', '123123'),
('171402017', 'Muhammad Reza', 0, 'reza@gmail.com', '123123'),
('171402018', 'Farhan Abdillah', 0, 'farhan@gmail.com', '123123'),
('171402030', 'Taufiq Rourkyendo', 1, 'roky@gmail.com', 'roki123'),
('171402043', 'Fakhri Rizha Ananda', 1, 'fakhri@gmail.com', '123123'),
('171402046', 'Nurul Andini', 1, 'nurulandini@gmail.com', '123123'),
('171402052', 'Ananda Muharriz Sinaga', 1, 'muhariz@gmail.com', '123123'),
('171402081', 'Ahmad Adil', 1, 'adil@gmail.com', '123123'),
('171402082', 'Fahmi Rizal', 0, 'fahmi@gmail.com', '123123'),
('171402086', 'M. Taufik Baskoro', 1, 'taufik@gmail.com', '123123'),
('171402087', 'Arsil Nugraha', 1, 'arsil@gmail.com', '123123'),
('171402089', 'Alvin Febriando', 1, 'alvin@gmail.com', '123123'),
('171402097', 'Dinul Iman', 1, 'dinul@gmail.com', '123123'),
('171402109', 'Naufal Azmi', 1, 'naufal@gmail.com', '123123'),
('171402117', 'Annisa Assya Mawaddah', 1, 'annisa@gmail.com', '123123'),
('171402138', 'Rogate Sola Fide', 1, 'rogate@gmail.com', '123123'),
('181402001', 'Zhafar Salim', 0, 'zhafar@gmail.com', '123123'),
('181402002', 'Muhammad Ridho', 0, 'mridho@gmail.com', '123123'),
('181402003', 'Ammar Rafi Afandi Hasibuan', 0, 'ammar@gmail.com', '123123'),
('181402004', 'Muhammad Arib Naufal Marpaung', 0, 'arib@gmail.com', '123123'),
('181402005', 'Farhan Al Zuhri Nasution', 0, 'farhan@gmail.com', '123123'),
('181402006', 'Nurhaliza Syahfitri', 0, 'liza@gmail.com', '123123'),
('181402007', 'Liza Silvani Suheri', 0, 'lizaa@gmail.com', '123123'),
('181402008', 'Alya Febriani Lubis', 0, 'alya@gmail.com', '123123'),
('181402009', 'Amira Nurul Amanda', 0, 'amira@gmail.com', '123123'),
('181402010', 'M Haikal Alfansyah', 0, 'haikal@gmail.com', '123123'),
('181402011', 'Mhd. Alif Fahmi', 0, 'alih@gmail.com', '123123'),
('181402012', 'Muhammad Irsan Maulana', 0, 'irsan@gmail.com', '123123'),
('181402013', 'Putri Permata Sari', 0, 'putri@gmail.com', '123123'),
('181402014', 'Putri Handayani Malik Parinduri', 0, 'putri@gmail.com', '123123'),
('181402015', 'Nadia Farhani', 0, 'nadia@gmail.com', '123123'),
('181402016', 'Alya Ananda', 0, 'alya@gmail.com', '123123'),
('181402017', 'Yeyen Krisnianta Tarigan', 0, 'yeyen@gmail.com', '123123'),
('181402018', 'Lolyvia Khoiria Dly', 0, 'loly@gmail.com', '123123'),
('181402019', 'Claudia Demita Pasaribu', 0, 'claudia@gmail.com', '123123'),
('181402020', 'Yesika Reni Siregar', 0, 'yesika@gmail.com', '123123'),
('181402031', 'Gary Alvaro', 2, 'gary@gmail.com', 'gary123'),
('181402050', 'Naldo Y', 0, 'francofernando654@gmail.com', 'naldo123'),
('181402051', 'Albert', 0, 'albert@gmail.com', '123123'),
('181402052', 'Luis', 0, 'bernardbro@gmail.com', 'luis123'),
('181402053', 'Soraya Fariha', 0, 'soraya@gmail.com', '123123'),
('181402054', 'Alvin Daeli', 0, 'alvin@gmail.com', '123123'),
('181402055', 'Leonardo Wijaya', 0, 'leonardow1800@gmail.com', 'leo123'),
('181402056', 'Helmut Sharon Pakpahan', 0, 'helmut@gmail.com', '123123'),
('181402057', 'Uli Valen Hasiani Sinaga', 0, 'uli@gmail.com', '123123'),
('181402058', 'Indriyani Br Sembiring', 0, 'indiryani@gmail.com', '123123'),
('181402059', 'Jebri Walya Defit', 0, 'jebri@gmail.com', '123123'),
('181402064', 'Xixillia Sun', 0, 'xixil@gmail.com', 'xxl123'),
('181402136', 'Raymond', 0, 'raymondsaragih560@gmail.com', 'ray123'),
('191402001', 'Masayu Fany Shapura', 0, 'masayu@gmail.com', 'mas123'),
('191402002', 'Utari Anggita', 0, 'utari@gmail.com', 'utari123'),
('191402003', 'Denaya Pramudya', 0, 'denaya@gmail.com', '123123'),
('191402004', 'Cici Desi M. Hutapea', 0, 'cici@gmail.com', '123123'),
('191402005', 'Milpa Wahyuni Siregar', 0, 'milpa@gmail.com', '123123'),
('191402006', 'Jogiana Simangunsong', 0, 'jogiana@gmail.com', '123123'),
('191402007', 'Zen Petrix Diaz ', 0, 'zen@gmail.com', '123123'),
('191402008', 'Dinda Julia Putri', 0, 'dinda@gmail.com', '123123'),
('191402009', 'Okta Gilang Al Jaffarsyah', 0, 'okta@gmail.com', '123123'),
('191402010', 'Nurul Atiqah Siregar', 0, 'nurul@gmail.com', '123123'),
('191402011', 'Dwiki Affandi', 0, 'dwiki@gmail.com', '123123'),
('191402012', 'Arafah Nur Ihza', 0, 'arafah@gmail.com', '123123'),
('191402013', 'Mhd. Syahrizal', 0, 'syahrizal@gmail.com', '123123'),
('191402014', 'Margaretha Gok', 0, 'margaretha@gmail.com', '123123'),
('191402015', 'Nanda Amelia', 0, 'nanda@gmail.com', '123123'),
('191402016', 'Farhan Ahmad Pangestu', 0, 'farhan@gmail.com', '123123'),
('191402017', 'Adela Nopriana Purba', 0, 'adela@gmail.com', '123123'),
('191402018', 'Ineztri Situmeang', 0, 'ineztri@gmail.com', '123123'),
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
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `nim` (`nim`);

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
  MODIFY `id_aslab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

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
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rekrut_aslab`
--
ALTER TABLE `rekrut_aslab`
  MODIFY `kode_rekrut` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
