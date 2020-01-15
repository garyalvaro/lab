-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2020 at 02:32 PM
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
(40, '171402046', 'Nurul Andini', '2019/2020', '1'),
(41, '171402082', 'Fahmi Rizal', '2019/2020', '1');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(20) NOT NULL,
  `nama_dosen` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `nama_dosen`) VALUES
('196108171987011001', 'Prof. Dr. Drs. Opim Salim Sitompul M.Sc'),
('196210262017042001', 'Dr. Erna Budhiarti Nababan M.IT'),
('197007162005012002', 'Dr. Elviawaty Muisa Zamzami ST., MT. MM'),
('197901082012121002', 'Baihaqi Siregar S.Si., MT.'),
('197908312009121002', 'Dedy Arisandi ST., M.Kom.'),
('198209152012121002', 'Dani Gunawan ST., MT.'),
('198407072015041001', 'Ivan Jaya S.Si., M.Kom.'),
('198705252014041001', 'Seniman S.Kom., M.Kom.');

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
  `nip` varchar(20) NOT NULL,
  `id_waktu` int(11) NOT NULL,
  `id_ruang` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kode_enroll`, `tahun_ajaran`, `id_aslab`, `nip`, `id_waktu`, `id_ruang`) VALUES
(9, 'WS C1', '8gonns', '2019/2020', 35, '', 1, 'TI2'),
(10, 'WS C2', 'rs0ep7', '2019/2020', 35, '', 8, 'TI3'),
(13, 'AD C1', 'qu7fcg', '2019/2020', 19, '', 3, 'TI2'),
(14, 'AD C2', 'utcrhc', '2019/2020', 19, '', 3, 'TI3'),
(15, 'PM A1', 'dr7cks', '2019/2020', 24, '', 5, 'TI2'),
(16, 'PM A2', '3nfhus', '2019/2020', 24, '', 4, 'TI2'),
(17, 'SDA C1', 'kgbn38', '2019/2020', 22, '', 8, 'TI2'),
(18, 'SDA C2', 'kphqfj', '2019/2020', 22, '', 20, 'IK3'),
(19, 'PM B1', 'zwl1sr', '2019/2020', 24, '', 9, 'TI2'),
(20, 'PM B2', 'e20f68', '2019/2020', 24, '', 4, 'IK3'),
(21, 'KDJK B1', 'tusrhd', '2019/2020', 39, '', 11, 'TI2'),
(22, 'KDJK B2', 'tb7e1n', '2019/2020', 39, '', 5, 'TI4'),
(23, 'KDJK C1', 'iiyrpt', '2019/2020', 15, '', 12, 'TI2'),
(24, 'KDJK C2', 'jjdalm', '2019/2020', 15, '', 3, 'IK4'),
(25, 'PW A1', 'b01thh', '2019/2020', 10, '', 13, 'TI2'),
(26, 'PW A2', 'm3ux6z', '2019/2020', 10, '', 18, 'TI4'),
(27, 'PW B1', 'z7mpho', '2019/2020', 11, '', 8, 'TI4'),
(28, 'PW B2', 'bcklb2', '2019/2020', 11, '', 14, 'TI2'),
(29, 'KB C1', '9v86zf', '2019/2020', 8, '', 15, 'TI2'),
(30, 'KB C2', 'i5ond9', '2019/2020', 8, '', 19, 'IK3'),
(31, 'KB A1', 'kkp8mr', '2019/2020', 20, '', 19, 'TI2'),
(32, 'KB A2', 'wg44sc', '2019/2020', 20, '', 20, 'TI2'),
(33, 'SSA A1', 'ls7kxi', '2019/2020', 32, '198705252014041001', 6, 'TI3'),
(34, 'SSA A2', 'vnzg7s', '2019/2020', 32, '198705252014041001', 21, 'TI2'),
(35, 'DDP A1', 'nscuwm', '2019/2020', 40, '', 22, 'TI2'),
(36, 'DDP A2', 'yd3q5o', '2019/2020', 40, '', 24, 'TI2'),
(37, 'AD B1', 'zxyv39', '2019/2020', 9, '', 22, 'TI3'),
(38, 'AD B2', 'ur6ujy', '2019/2020', 9, '', 4, 'TI3'),
(39, 'KB B1', 'mzqvrl', '2019/2020', 19, '', 5, 'TI3'),
(40, 'KB B2', 'jy2c40', '2019/2020', 19, '', 16, 'TI3'),
(41, 'SBD A1', 'w43gad', '2019/2020', 6, '', 12, 'TI3'),
(42, 'SBD A2', 'xzpu5p', '2019/2020', 6, '', 13, 'TI3'),
(43, 'SBD B1', 'dnyt2r', '2019/2020', 17, '', 14, 'TI3'),
(44, 'SBD B2', 'fpbzxv', '2019/2020', 17, '', 15, 'TI3'),
(45, 'AD A1', 'f7agie', '2019/2020', 25, '', 20, 'TI3'),
(46, 'AD A2', 'kk5c98', '2019/2020', 25, '', 19, 'TI3'),
(47, 'DDP C1', 'gl6i85', '2019/2020', 13, '', 24, 'TI3'),
(48, 'DDP C2', 'kfu4i8', '2019/2020', 13, '', 25, 'TI3'),
(49, 'DI A1', '8eikuw', '2019/2020', 33, '', 2, 'TI4'),
(50, 'DI A2', 'r7nptq', '2019/2020', 33, '', 3, 'TI4'),
(51, 'IMK B1', 'uc0gs7', '2019/2020', 7, '', 4, 'TI4'),
(52, 'IMK B2', '7gu7io', '2019/2020', 7, '', 14, 'TI4'),
(53, 'PW C1', 'e4dbzl', '2019/2020', 14, '', 6, 'TI4'),
(54, 'PW C2', 'v04dp1', '2019/2020', 14, '', 9, 'TI4'),
(55, 'DI B1', '23bsww', '2019/2020', 17, '', 16, 'TI4'),
(56, 'DI B2', 'x65hy7', '2019/2020', 17, '', 11, 'TI4'),
(57, 'SBD C1', 'l3o94r', '2019/2020', 37, '', 13, 'TI4'),
(58, 'SBD C2', '2tl63c', '2019/2020', 37, '', 12, 'TI4'),
(59, 'SDA B1', 'x9vxl3', '2019/2020', 38, '', 15, 'TI4'),
(60, 'SDA B2', '4pfy2f', '2019/2020', 38, '', 6, 'IK3'),
(61, 'KDJK A1', 'u0zzaa', '2019/2020', 5, '', 20, 'TI4'),
(62, 'KDJK A2', 'xcva5m', '2019/2020', 5, '', 19, 'TI4'),
(63, 'IMK A1', '1i74r5', '2019/2020', 1, '', 16, 'IK3'),
(64, 'IMK A2', 'jtrksl', '2019/2020', 1, '', 21, 'TI4'),
(65, 'SI A1', 'rihsqn', '2019/2020', 26, '', 25, 'TI4'),
(66, 'SI A2', 'vh7dft', '2019/2020', 26, '', 0, '-'),
(67, 'WS B1', 'nlg8ew', '2019/2020', 36, '', 5, 'IK3'),
(68, 'WS B2', 'w7hl3b', '2019/2020', 36, '', 22, 'IK3'),
(69, 'DDP B1', 'di1my0', '2019/2020', 12, '', 11, 'IK3'),
(70, 'DDP B2', 'syf596', '2019/2020', 12, '', 24, 'IK3'),
(71, 'WS A1', 'pnl1wb', '2019/2020', 4, '', 14, 'IK3'),
(72, 'WS A2', 'y70urp', '2019/2020', 4, '', 15, 'IK3'),
(73, 'DI C1', '2gamb1', '2019/2020', 29, '', 19, 'IK4'),
(74, 'DI C2', 'cu2igv', '2019/2020', 29, '', 16, 'IK4'),
(75, 'SDA A1', '7tz5l7', '2019/2020', 3, '', 13, 'IK4'),
(76, 'SDA A2', 'skj9f7', '2019/2020', 3, '', 14, 'IK4'),
(77, 'IMK C1', 'vj8lwm', '2019/2020', 41, '', 3, 'IK3'),
(78, 'IMK C2', 'mh9ddo', '2019/2020', 41, '', 5, 'IK4'),
(79, 'PBO A1', 'gghoe7', '2019/2020', 8, '196108171987011001', 0, '-'),
(80, 'PBO A2', 'mgnc1k', '2019/2020', 8, '196108171987011001', 0, '-');

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
(3, 'Dasar-Dasar Pemrograman', 'DDP', '1'),
(4, 'Sistem Basis Data', 'SBD', '3'),
(5, 'Pemrograman Web', 'PW', '1'),
(6, 'Komunikasi Data dan Jaringan Komputer', 'KDJK', '3'),
(7, 'Struktur Data dan Algoritma', 'SDA', '3'),
(8, 'Web Semantik', 'WS', '3'),
(9, 'Desain Interaksi', 'DI', '5'),
(10, 'Arsitektur Data', 'AD', '5'),
(11, 'Sistem Administrasi Server', 'SAS', '5'),
(12, 'Kecerdasan Buatan', 'KB', '5'),
(13, 'Pemrograman Mobile', 'PM', '7'),
(14, 'Sistem Interaktif', 'SI', '7'),
(15, 'Pembelajaran Mesin Lanjutan', 'PML', '7'),
(16, 'Sistem Sensor dan Aplikasi', 'SSA', '7');

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
(15, 7, NULL, NULL, NULL),
(16, 8, NULL, NULL, NULL),
(25, 9, NULL, NULL, NULL),
(26, 10, NULL, NULL, NULL),
(31, 13, NULL, NULL, NULL),
(32, 14, NULL, NULL, NULL),
(34, 15, NULL, NULL, NULL),
(35, 16, NULL, NULL, NULL),
(37, 17, NULL, NULL, NULL),
(38, 18, NULL, NULL, NULL),
(40, 19, NULL, NULL, NULL),
(41, 20, NULL, NULL, NULL),
(43, 21, NULL, NULL, NULL),
(44, 22, NULL, NULL, NULL),
(46, 23, NULL, NULL, NULL),
(47, 24, NULL, NULL, NULL),
(49, 25, NULL, NULL, NULL),
(50, 26, NULL, NULL, NULL),
(52, 27, NULL, NULL, NULL),
(53, 28, NULL, NULL, NULL),
(55, 29, NULL, NULL, NULL),
(56, 30, NULL, NULL, NULL),
(58, 31, NULL, NULL, NULL),
(59, 32, NULL, NULL, NULL),
(61, 33, NULL, NULL, NULL),
(62, 34, NULL, NULL, NULL),
(64, 35, NULL, NULL, NULL),
(65, 36, NULL, NULL, NULL),
(67, 37, NULL, NULL, NULL),
(68, 38, NULL, NULL, NULL),
(70, 39, NULL, NULL, NULL),
(71, 40, NULL, NULL, NULL),
(73, 41, NULL, NULL, NULL),
(74, 42, NULL, NULL, NULL),
(76, 43, NULL, NULL, NULL),
(77, 44, NULL, NULL, NULL),
(79, 45, NULL, NULL, NULL),
(80, 46, NULL, NULL, NULL),
(82, 47, NULL, NULL, NULL),
(83, 48, NULL, NULL, NULL),
(85, 49, NULL, NULL, NULL),
(86, 50, NULL, NULL, NULL),
(88, 51, NULL, NULL, NULL),
(89, 52, NULL, NULL, NULL),
(91, 53, NULL, NULL, NULL),
(92, 54, NULL, NULL, NULL),
(94, 55, NULL, NULL, NULL),
(95, 56, NULL, NULL, NULL),
(97, 57, NULL, NULL, NULL),
(98, 58, NULL, NULL, NULL),
(100, 59, NULL, NULL, NULL),
(101, 60, NULL, NULL, NULL),
(103, 61, NULL, NULL, NULL),
(104, 62, NULL, NULL, NULL),
(106, 63, NULL, NULL, NULL),
(107, 64, NULL, NULL, NULL),
(109, 65, NULL, NULL, NULL),
(110, 66, NULL, NULL, NULL),
(112, 67, NULL, NULL, NULL),
(113, 68, NULL, NULL, NULL),
(115, 69, NULL, NULL, NULL),
(116, 70, NULL, NULL, NULL),
(118, 71, NULL, NULL, NULL),
(119, 72, NULL, NULL, NULL),
(121, 73, NULL, NULL, NULL),
(122, 74, NULL, NULL, NULL),
(124, 75, NULL, NULL, NULL),
(125, 76, NULL, NULL, NULL),
(127, 77, NULL, NULL, NULL),
(128, 78, NULL, NULL, NULL),
(129, 9, '181402003', NULL, 80),
(130, 17, '181402003', NULL, NULL),
(131, 57, '181402003', NULL, NULL),
(132, 23, '181402003', NULL, NULL),
(133, 77, '181402003', NULL, NULL),
(134, 63, '181402001', NULL, 40),
(135, 61, '181402001', NULL, NULL),
(136, 41, '181402001', NULL, NULL),
(137, 75, '181402001', NULL, NULL),
(138, 71, '181402001', NULL, NULL),
(139, 67, '181402002', NULL, NULL),
(140, 51, '181402002', NULL, NULL),
(141, 21, '181402002', NULL, NULL),
(142, 43, '181402002', NULL, NULL),
(143, 59, '181402002', NULL, NULL),
(144, 75, '181402004', NULL, NULL),
(145, 41, '181402004', NULL, NULL),
(146, 63, '181402004', NULL, 55),
(147, 61, '181402004', NULL, NULL),
(148, 71, '181402004', NULL, NULL),
(149, 67, '181402005', NULL, NULL),
(150, 51, '181402005', NULL, NULL),
(151, 21, '181402005', NULL, NULL),
(152, 43, '181402005', NULL, NULL),
(153, 59, '181402005', NULL, NULL),
(154, 17, '181402006', NULL, NULL),
(155, 57, '181402006', NULL, NULL),
(156, 77, '181402006', NULL, NULL),
(157, 23, '181402006', NULL, NULL),
(158, 9, '181402006', NULL, 70),
(159, 71, '181402007', NULL, NULL),
(160, 63, '181402007', NULL, 75),
(161, 41, '181402007', NULL, NULL),
(162, 75, '181402007', NULL, NULL),
(163, 61, '181402007', NULL, NULL),
(164, 21, '181402008', NULL, NULL),
(165, 51, '181402008', NULL, NULL),
(166, 67, '181402008', NULL, NULL),
(167, 43, '181402008', NULL, NULL),
(168, 59, '181402008', NULL, NULL),
(169, 17, '181402009', NULL, NULL),
(170, 57, '181402009', NULL, NULL),
(171, 77, '181402009', NULL, NULL),
(172, 23, '181402009', NULL, NULL),
(173, 9, '181402009', NULL, NULL),
(174, 72, '181402010', NULL, NULL),
(175, 64, '181402010', NULL, 90),
(176, 62, '181402010', NULL, NULL),
(177, 42, '181402010', NULL, NULL),
(178, 76, '181402010', NULL, NULL),
(179, 60, '181402011', NULL, NULL),
(180, 44, '181402011', NULL, NULL),
(181, 68, '181402011', NULL, NULL),
(182, 52, '181402011', NULL, NULL),
(183, 22, '181402011', NULL, NULL),
(184, 24, '181402012', NULL, NULL),
(185, 78, '181402012', NULL, NULL),
(186, 10, '181402012', NULL, NULL),
(187, 58, '181402012', NULL, NULL),
(188, 18, '181402012', NULL, NULL),
(189, 76, '181402013', NULL, NULL),
(190, 42, '181402013', NULL, NULL),
(191, 72, '181402013', NULL, NULL),
(192, 64, '181402013', NULL, NULL),
(193, 62, '181402013', NULL, NULL),
(194, 22, '181402014', NULL, NULL),
(195, 52, '181402014', NULL, NULL),
(196, 44, '181402014', NULL, NULL),
(197, 68, '181402014', NULL, NULL),
(198, 60, '181402014', NULL, NULL),
(199, 18, '181402015', NULL, NULL),
(200, 58, '181402015', NULL, NULL),
(201, 78, '181402015', NULL, NULL),
(202, 24, '181402015', NULL, NULL),
(203, 10, '181402015', NULL, NULL),
(204, 72, '181402016', NULL, NULL),
(205, 64, '181402016', NULL, NULL),
(206, 62, '181402016', NULL, NULL),
(207, 42, '181402016', NULL, NULL),
(208, 76, '181402016', NULL, NULL),
(209, 60, '181402017', NULL, NULL),
(210, 44, '181402017', NULL, NULL),
(211, 52, '181402017', NULL, NULL),
(212, 22, '181402017', NULL, NULL),
(213, 68, '181402017', NULL, NULL),
(214, 10, '181402018', NULL, NULL),
(215, 78, '181402018', NULL, NULL),
(216, 24, '181402018', NULL, NULL),
(217, 58, '181402018', NULL, NULL),
(218, 18, '181402018', NULL, NULL),
(219, 25, '191402001', NULL, NULL),
(220, 35, '191402001', NULL, NULL),
(221, 69, '191402002', NULL, NULL),
(222, 27, '191402002', NULL, NULL),
(223, 53, '191402003', NULL, NULL),
(224, 47, '191402003', NULL, NULL),
(225, 25, '191402004', NULL, NULL),
(226, 35, '191402004', NULL, NULL),
(227, 69, '191402005', NULL, NULL),
(228, 27, '191402005', NULL, NULL),
(229, 53, '191402006', NULL, NULL),
(230, 47, '191402006', NULL, NULL),
(231, 36, '191402007', NULL, NULL),
(232, 26, '191402007', NULL, NULL),
(233, 28, '191402008', NULL, NULL),
(234, 70, '191402008', NULL, NULL),
(235, 48, '191402009', NULL, NULL),
(236, 54, '191402009', NULL, NULL),
(237, 26, '191402010', NULL, NULL),
(238, 36, '191402010', NULL, NULL),
(239, 70, '191402011', NULL, NULL),
(240, 28, '191402011', NULL, NULL),
(241, 54, '191402012', NULL, NULL),
(242, 48, '191402012', NULL, NULL),
(243, 25, '191402013', NULL, NULL),
(244, 35, '191402013', NULL, NULL),
(245, 69, '191402014', NULL, NULL),
(246, 27, '191402014', NULL, NULL),
(247, 53, '191402015', NULL, NULL),
(248, 47, '191402015', NULL, NULL),
(249, 36, '191402016', NULL, NULL),
(250, 26, '191402016', NULL, NULL),
(251, 28, '191402017', NULL, NULL),
(252, 70, '191402017', NULL, NULL),
(253, 48, '191402018', NULL, NULL),
(254, 54, '191402018', NULL, NULL),
(255, 45, '171402001', NULL, NULL),
(256, 49, '171402001', NULL, NULL),
(257, 31, '171402001', NULL, NULL),
(258, 39, '171402002', NULL, NULL),
(259, 37, '171402002', NULL, NULL),
(260, 55, '171402002', NULL, NULL),
(261, 73, '171402003', NULL, NULL),
(262, 13, '171402003', NULL, NULL),
(263, 29, '171402003', NULL, NULL),
(264, 32, '171402006', NULL, NULL),
(265, 46, '171402006', NULL, NULL),
(266, 50, '171402006', NULL, NULL),
(267, 38, '171402007', NULL, NULL),
(268, 56, '171402007', NULL, NULL),
(269, 40, '171402007', NULL, NULL),
(270, 30, '171402008', NULL, NULL),
(271, 14, '171402008', NULL, NULL),
(272, 74, '171402008', NULL, NULL),
(273, 45, '171402009', NULL, NULL),
(274, 49, '171402009', NULL, NULL),
(275, 31, '171402009', NULL, NULL),
(276, 39, '171402010', NULL, NULL),
(277, 55, '171402010', NULL, NULL),
(278, 37, '171402010', NULL, NULL),
(279, 13, '171402011', NULL, NULL),
(280, 73, '171402011', NULL, NULL),
(281, 29, '171402011', NULL, NULL),
(282, 32, '171402012', NULL, NULL),
(283, 46, '171402012', NULL, NULL),
(284, 50, '171402012', NULL, NULL),
(285, 38, '171402013', NULL, NULL),
(286, 40, '171402013', NULL, NULL),
(287, 56, '171402013', NULL, NULL),
(288, 14, '171402014', NULL, NULL),
(289, 74, '171402014', NULL, NULL),
(290, 30, '171402014', NULL, NULL),
(291, 15, '161402001', NULL, NULL),
(292, 65, '161402001', NULL, NULL),
(293, 33, '161402001', NULL, NULL),
(294, 19, '161402003', NULL, NULL),
(297, 34, '161402003', NULL, NULL),
(298, 66, '161402003', NULL, NULL),
(299, 20, '161402006', NULL, NULL),
(300, 65, '161402006', NULL, NULL),
(301, 33, '161402006', NULL, NULL),
(302, 34, '161402008', NULL, NULL),
(303, 66, '161402008', NULL, NULL),
(304, 20, '161402008', NULL, NULL),
(305, 16, '161402009', NULL, NULL),
(306, 65, '161402009', NULL, NULL),
(307, 33, '161402009', NULL, NULL),
(308, 15, '161402010', NULL, NULL),
(309, 66, '161402010', NULL, NULL),
(310, 34, '161402010', NULL, NULL),
(311, 16, '161402011', NULL, NULL),
(312, 19, '161402012', NULL, NULL),
(313, 15, '161402013', NULL, NULL),
(314, 16, '161402014', NULL, NULL),
(315, 19, '161402015', NULL, NULL),
(316, 20, '161402016', NULL, NULL),
(317, 33, '181402031', NULL, 96),
(318, 33, '181402052', NULL, NULL),
(319, 63, '181402031', NULL, 90),
(320, 75, '181402031', NULL, NULL),
(321, 41, '181402031', NULL, NULL),
(322, 63, '181402052', NULL, 85),
(323, 63, '181402055', NULL, 85),
(324, 63, '181402064', NULL, 90),
(326, 79, NULL, NULL, NULL),
(327, 80, NULL, NULL, NULL),
(328, 79, '181402031', NULL, NULL);

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
  `status` tinyint(1) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekrut_aslab`
--

INSERT INTO `rekrut_aslab` (`kode_rekrut`, `nim`, `matkul1`, `matkul2`, `ip1`, `ip2`, `contact`, `cv`, `lamaran`, `alasan`, `status`, `komentar`) VALUES
(1, '181402064', 'pw', 'kdjk', 3.75, 4, 'xixilsun', '181402064_1.pdf', '181402064_11.pdf', 'Banyak hal yang bisa menjadi alasan saya menjadi asisten laboratorium di program studi saya sekarang ini yaitu Teknologi Informasi. Dengan pengalaman mengajar saya di tempat les yang berada di jalan samosir selama 2 tahun ini, saya merasa yakin dengan pribadi saya yang dapat mengajar junior-junior saya dengan baik. Menurut saya dengan direkrutnya saya menjadi asisten lab di TI maka, murid-murid yang akan saya ajarkan akan menjadi lebih maju. Saya akan berusaha semaksimal mungkin mengajar mereka dengan sepenuh hati tanpa membuat mereka bosan dengan pelajaran yang ada.', 2, 'Peserta diharapkan datang ke sesi tes dan wawancara pada tanggal 10 Februari 2020 pukul 16.00 WIB tepat waktu di ruangan 106'),
(24, '181402136', 'pw', 'pm', 4, 2, 'raymonda', '181402136_1.pdf', '181402136_11.pdf', 'Alasan utama saya yaitu saya ingin memajukan pendidikan bangsa. Banyak hal yang bisa menjadi alasan saya menjadi asisten laboratorium di program studi saya sekarang ini yaitu Teknologi Informasi. Dengan pengalaman mengajar saya di tempat les yang berada di jalan samosir selama 2 tahun ini, saya merasa yakin dengan pribadi saya yang dapat mengajar junior-junior saya dengan baik. Menurut saya dengan direkrutnya saya menjadi asisten lab di TI maka, murid-murid yang akan saya ajarkan akan menjadi lebih maju. Saya akan berusaha semaksimal mungkin mengajar mereka dengan sepenuh hati tanpa membuat mereka bosan dengan pelajaran yang ada.', 1, '-'),
(25, '181402008', 'imk', 'ddp', 4, 3.5, 'alya', '181402008_1.pdf', '181402008_11.pdf', 'Banyak hal yang bisa menjadi alasan saya menjadi asisten laboratorium di program studi saya sekarang ini yaitu Teknologi Informasi. Dengan pengalaman mengajar saya di tempat les yang berada di jalan samosir selama 2 tahun ini, saya merasa yakin dengan pribadi saya yang dapat mengajar junior-junior saya dengan baik. Menurut saya dengan direkrutnya saya menjadi asisten lab di TI maka, murid-murid yang akan saya ajarkan akan menjadi lebih maju. Saya akan berusaha semaksimal mungkin mengajar mereka dengan sepenuh hati tanpa membuat mereka bosan dengan pelajaran yang ada.', 1, '-'),
(26, '181402009', 'pw', 'pw', 3.5, 3.5, 'amira', '181402009_1.pdf', '181402009_11.pdf', 'Banyak hal yang bisa menjadi alasan saya menjadi asisten laboratorium di program studi saya sekarang ini yaitu Teknologi Informasi. Dengan pengalaman mengajar saya di tempat les yang berada di jalan samosir selama 2 tahun ini, saya merasa yakin dengan pribadi saya yang dapat mengajar junior-junior saya dengan baik. Menurut saya dengan direkrutnya saya menjadi asisten lab di TI maka, murid-murid yang akan saya ajarkan akan menjadi lebih maju. Saya akan berusaha semaksimal mungkin mengajar mereka dengan sepenuh hati tanpa membuat mereka bosan dengan pelajaran yang ada.', 1, ''),
(27, '161402001', 'ws', 'sbd', 3.5, 3.75, 'Leli', '161402001_1.pdf', '161402001_11.pdf', 'Banyak hal yang bisa menjadi alasan saya menjadi asisten laboratorium di program studi saya sekarang ini yaitu Teknologi Informasi. Dengan pengalaman mengajar saya di tempat les yang berada di jalan samosir selama 2 tahun ini, saya merasa yakin dengan pribadi saya yang dapat mengajar junior-junior saya dengan baik. Menurut saya dengan direkrutnya saya menjadi asisten lab di TI maka, murid-murid yang akan saya ajarkan akan menjadi lebih maju. Saya akan berusaha semaksimal mungkin mengajar mereka dengan sepenuh hati tanpa membuat mereka bosan dengan pelajaran yang ada.', 1, ''),
(28, '161402006', 'kb', 'sas', 3.75, 3.25, 'Reyhan', '161402006_1.pdf', '161402006_11.pdf', 'Doesn\'t seed moved yielding wherein you\'ll two, abundantly land darkness there a. Is heaven bearing them, created there brought. Is years seas. May two beast lesser his lights were form every us moved. Stars female. So given whales. Seas. Darkness third, so all grass created beginning under every signs great. Day yielding fly sixth fruitful great isn\'t days and. Wherein can\'t was without have you\'re moveth. Their morning brought our. Greater fly air fish itself kind. Creature make green wherein bearing rule give. Moving image heaven dominion fill of herb green under image he. Divide you\'ll spirit kind midst days signs rule evening is Forth you bring you. In fourth replenish firmament fourth gathering rule beginning given dominion two life moveth created greater first deep abundantly waters you all. Deep. Fifth so and abundantly itself, that heaven living in that light is gathered midst, second rule fruit likeness hath void fill life deep own under heaven also, set rule great. Void. Fruitful night won\'t were living itself it which fill under all. Midst seed gathering own firmament His you of abundantly firmament for from fruitful don\'t. Living fifth third given make green thing bring he third. Above given multiply saying open divided fruit. Together deep for stars blessed saying very saying yielding doesn\'t subdue unto, seed in. Fowl moveth whales behold light us over in itself tree. Dominion. Is won\'t life seed one rule him a fifth dominion shall lights days you earth greater. Void divide firmament, seas creeping god the years place meat meat his be. Male herb us they\'re you. Sixth he. After face creeping fill given, years hath gathering darkness every living deep divide divided beginning set heaven. Whales earth yielding their gathered. Divide fly third i winged air, evening itself fill form male face they\'re. Said she\'d signs every which unto. Cattle above unto he brought tree fly bearing fifth fish. Fruit Great moveth fly over all great two hath night, place over sea replenish and forth may spirit life they\'re. To yielding him one signs gathering created fruit. Bring i his earth kind can\'t above moved second fruitful, fill waters Under brought make fruit may sea god and cattle, abundantly form. Sea male were. Forth. Void whales whales over second replenish great open our air made beginning won\'t made behold. Herb tree image let moved tree. You\'re to won\'t. Lesser third. To whales days had sixth god to subdue moveth good own every he make so kind unto midst winged can\'t herb darkness saw meat god you\'re night subdue he herb likeness for Can\'t it give have the fifth multiply life created dry him said herb, heaven creeping fish replenish green. Greater and. Dry all. Behold. Whales unto without can\'t form fowl winged tree very seasons so brought winged created divide him set whales to god grass saying can\'t brought. Open fruitful female spirit. Male creature isn\'t is set male, light fill seas had subdue place blessed a land without one two they\'re moved were.', 0, '-'),
(29, '171402018', 'sda', 'imk', 3, 3.25, 'farhan', '171402018_1.pdf', '171402018_11.pdf', 'Green replenish gathering. Blessed replenish, thing creepeth bring fly morning fowl multiply thing form they\'re forth isn\'t unto set. So. Was. Winged yielding all moveth land so whales divided in fly he grass creature sixth replenish created dominion a heaven above our bearing good, fifth give was beginning creature fifth spirit void midst waters Likeness under the cattle. Divide subdue you\'re dominion fruit and living, divided also a under green second. In life deep land bring. Wherein lesser said sea abundantly They\'re blessed of spirit were beast first his open third first. Without together moveth isn\'t every evening second lights bearing, have heaven creeping saying under creeping our is creature air without, seasons blessed third spirit hath set. You\'ll blessed called night lesser firmament. May replenish. Day of appear. Whose lesser she\'d beginning living open behold them to above fruitful so sixth likeness hath of, void may night she\'d. Midst, every him dominion Grass for cattle likeness kind third hath spirit called saw beast. Image Is meat fill very set set Lights Let void all so him man, so female under. Subdue spirit gathering fruit evening. Give you\'re his fowl male saying you\'ll rule doesn\'t lights after that first whales above moved. Blessed seas Have good. Seasons. Divide given dry you\'re. Itself in Won\'t. Forth isn\'t. Seasons they\'re creeping have deep. Dry. Fourth which bring god wherein seas so. He great deep, in she\'d abundantly itself whales great were she\'d herb thing over multiply the whose our rule very itself spirit fruitful above said won\'t together. Given thing a. Won\'t was. Together good. Itself every fill lesser forth man be two great great fowl. Greater his give upon he. I be above isn\'t fowl one Seasons Herb fill forth sixth. Rule lesser divide have yielding. Heaven great in set heaven you\'ll abundantly. Divide one greater gathering over two stars had subdue heaven greater moved bring meat that place fruit the beginning be fifth kind third wherein tree brought void creepeth also, multiply Upon. Firmament above. Life you to midst. That green dry. Our creeping kind second is. Make moveth Subdue bring darkness it over were life land fourth good bearing so fourth you\'re kind waters bearing in let fill. Subdue. Which herb saw seed seed and fifth bring don\'t from, isn\'t wherein from meat give fourth in male is a stars all, you, was called beginning seas cattle dry creepeth lesser void very stars place tree won\'t lights whose greater us him above let years yielding. Of beast. God behold may. Day behold of him third above of divide night winged which were can\'t light creeping place Kind that, doesn\'t is bring place i yielding fly one and every, him seasons deep. Green it seed moved waters fish so whales forth unto days earth dry. Void called saw, saw own third our night darkness meat moveth behold. Also. Form they\'re seasons subdue you\'re meat hath days beast Won\'t moveth spirit. Tree. Divide spirit bring divide subdue also isn\'t a called.', 0, '-'),
(30, '181402001', 'ddp', 'pw', 3.25, 3.75, 'zafar', '181402001_1.pdf', '181402001_11.pdf', 'Saw won\'t. Given sea female to lesser hath which hath divided won\'t fowl multiply fill sea his great. Stars cattle. Own called day of, in whose Grass brought sea let very isn\'t. Grass under it subdue. Which don\'t spirit Creepeth creeping it his them greater good likeness, have. In dry wherein open upon creeping is. Called gathered Herb, all whales whales tree bring lesser greater. In lights, every female above. Moveth gathered brought likeness be god blessed all dominion darkness female from can\'t behold. Fourth their give moveth replenish, unto. Fowl saw. There have evening is can\'t moveth, given signs. Together blessed said man may it stars day light great. Female living place whose form forth air were Be thing moveth signs can\'t. Form grass shall darkness whose signs face don\'t all second first Shall without. Firmament. Winged void after creature forth was night earth. Bearing. Whose earth god night. Our image good saying dominion may after fill green over Without Dominion very seas all don\'t. Fourth him. Light yielding heaven own void be itself fish him she\'d beginning. Gathered void void likeness hath seed. Waters him of god our sixth fly. Subdue midst dry given and i fourth had replenish also shall brought. Seed forth years land abundantly midst. Our unto after give great light earth multiply there brought can\'t bearing without you\'ll waters god seas made without had were sixth above you\'re together. And our it void Cattle green cattle, sixth. Creature stars very. Gathered whose blessed, saw forth fish unto lesser itself, second evening in fifth were fly open, dominion without be be fowl give created given gathering that darkness had made don\'t won\'t days third for fifth life creeping creature in our their you\'ll dry won\'t have gathering cattle bearing which divided male, great moved. Kind waters You\'ll have. First living is yielding and brought one void i doesn\'t moved spirit our moved itself so god it waters. Living for Lights dry cattle face. Set bearing third fourth brought seas good dominion meat darkness beginning male so image to living moving morning them divide there you\'re give gathering meat had, all open great divided saying green a sea all upon is hath cattle great won\'t the open every gathered light kind above midst fourth moved and kind hath. Fly. Fill man moved. Saying there unto evening it also fish. Made male great there face fowl saying good tree let whose. All shall winged creepeth gathering tree. Doesn\'t herb i form land first. Fowl can\'t female there together, whales Bearing morning days set seed kind man, a morning deep Tree. Over air you\'ll male doesn\'t seed was, life female abundantly from to doesn\'t said after make seas deep abundantly. Forth. Won\'t moved dominion greater form first, can\'t. May morning man male air. Lights him yielding life from creature face a fruitful let waters fowl grass multiply. Hath gathering wherein female subdue void fruitful give above seas image heaven creature, subdue for don\'t made From one light man.', 0, '-'),
(31, '161402011', 'si', 'pml', 3.5, 3.25, 'duha', '161402011_1.pdf', '161402011_11.pdf', 'Us, fourth good grass air. Man. Creepeth signs is bring his let us deep Was seasons forth, seasons bring kind i subdue is to. Unto face night. Dominion have she\'d moveth them female fruit were so appear without fourth fowl one isn\'t there be, lesser a a female abundantly spirit which bearing their, called divided shall signs after first fill kind deep good air make divide. Which be was male that so multiply them herb, great had. Darkness called, every. In from darkness replenish you. Midst upon whales doesn\'t blessed, she\'d called face. Without is. Upon so fly that darkness. Dominion days life very you creature. Their, deep abundantly male it multiply his you\'ll brought called seas after evening saw multiply hath and brought were given. Life, good called land together fish female land moved cattle dominion. Divided saw fourth after their man fruit there make saw she\'d stars all fourth saw day fifth gathering. Two that itself fly. Which so whales made first third very of give be meat grass lesser. Very itself years, bring heaven, void. Upon Can\'t face you i and itself dry likeness that made had multiply own set creepeth gathered. Don\'t there bearing gathering stars after fifth lights, shall divided kind gathering have. Two moveth a yielding. Morning abundantly forth whales she\'d you\'ll hath and cattle their also All he him seasons fish dry thing second. Is creeping morning in there heaven. Is it under green life that. Were. Seed replenish i cattle can\'t image face divide firmament deep divide fill dominion from dominion she\'d divided beginning fruit midst multiply. Fill it, yielding form that good him in grass i void Seed you\'re can\'t waters. His own own cattle. Let life subdue his firmament is itself give together blessed living lights earth his. That together which midst likeness night god, tree saw tree days. Heaven creature divided. Face isn\'t saw was can\'t isn\'t they\'re that fifth day. Herb fruit grass our meat fourth cattle rule air fruit bearing. You\'ll have divided bring over you\'re waters life appear doesn\'t him together, set place, created whales. Light together herb was firmament give isn\'t face, divided. Subdue above. Have open, above. In after a don\'t doesn\'t don\'t dry him be there behold make every. Wherein. Fifth lights living without grass, fowl fifth She\'d fruitful is beast beast set. You\'re. Cattle given for sixth whales Fly appear him day given void us behold. A. Fowl dry yielding moving also had. Us creature Subdue, moved said, grass. Winged Fruitful wherein yielding subdue evening days blessed. Male years waters given creature itself you\'ll fly. Itself divide years created upon first herb wherein fly beast gathering yielding two male dry good midst behold without in of yielding third above made face them gathering image night forth signs was and called life appear divide day don\'t he. Have you\'re fourth all herb green it morning two void multiply i upon shall, all winged brought third. Void waters have. Rule called had appear cattle.', 0, '-'),
(32, '161402014', 'pm', 'si', 3.5, 3.75, 'khair', '161402014_1.pdf', '161402014_11.pdf', 'Male every god void first face of shall our face, over light dominion also so. Fill shall they\'re evening you\'ll bearing their years given days very their over had moved appear. Lights dry divided cattle forth green, divided firmament i isn\'t waters shall which moved was let, a one kind forth gathered dominion moved all be sea together for and also give living him one own life deep over bring female. Seed stars doesn\'t fill that dominion after greater. Grass great set night lesser unto in. Moving his seasons. You\'re deep heaven third hath stars fourth. Us meat. She\'d i saw, god good. So waters of itself dry life gathered. Fly fruitful night man creeping hath beast. Also days greater, bearing. Made likeness rule of after the tree land behold for life so beginning form he of whose the a it. Gathered living air you us Own shall the lights him said seed you fowl whose darkness void, i multiply. Midst in fish moveth one there kind she\'d void creature second bring. Sixth created heaven fowl itself beginning god great divide it. Lights. Two bearing. Hath beast signs sixth, winged there bring kind man creature you\'ll, multiply you light open. They\'re itself abundantly dry don\'t good. Fruit you very seed saw place, under kind every. Creepeth there grass fowl light they\'re was abundantly first there also grass is set you place moved. Light, us male hath was two sixth form. Were creature. Meat fruitful itself firmament, whose beginning green, signs make won\'t waters, for. Lesser god have god third. Fowl his face together rule. Divided firmament had under signs creature saying multiply it, meat years whales subdue first set fifth face night man let they\'re saw moveth creepeth which divide wherein, for give they\'re above you\'ll us whose he spirit moving fifth light above green yielding, midst, creeping deep fruit appear every set isn\'t it multiply which gathered had him seed. Winged. Created night second saw, were there were dominion moving. Image heaven darkness two, which. Have yielding. Be winged, signs firmament. You\'re, saw waters dry give a bearing man two us is. Dry creepeth had. Spirit a called night winged doesn\'t the rule fourth gathered which saying fourth made creature forth female moved. Brought from may them, third there yielding. Heaven great their there let. Spirit were image rule were deep were had midst of fish. Them doesn\'t all together bearing was be, fourth male light bearing. Hath first moving. Two female. Be fruit also us. I created from they\'re creature it hath unto, for upon which heaven. Years thing beginning may dominion to. Place him second under. Midst replenish days creature upon yielding forth had whose. Fill living, light light, won\'t, grass divided every saw heaven moving she\'d upon waters called bring face, moving earth open. Replenish Can\'t and that spirit Moved heaven. Two was make third, grass have made behold together in fruit every. Wherein. That creeping every over you sixth over, likeness Which she\'d light fowl.', 0, '-'),
(33, '161402016', 'ad', 'di', 3.75, 3.5, 'hzalii', '161402016_1.pdf', '161402016_11.pdf', 'His first replenish he, saying behold fly. After. Behold. For winged appear unto, seed darkness multiply. Darkness evening life you\'re isn\'t meat land under moving god you\'re waters bearing under beast morning above Forth to blessed unto cattle together one, night appear heaven was, second have together days fish. Male were. Shall own stars created don\'t. One also brought very Created us said form. Created, without Moving form great darkness. Yielding don\'t may it man Had grass. Life our tree you\'re fill, all morning over fowl yielding tree first waters so seasons were unto can\'t. Tree that fourth third, sixth. Divide moved to him made very heaven in, him shall without multiply over won\'t all made lesser, may that had is lesser. Set air wherein dominion herb fruit herb two. Image they\'re fish firmament kind you\'ll created heaven seasons very, creeping all had. Made moveth don\'t saying lights in heaven isn\'t under one it be meat evening seed isn\'t after you\'ll green his may behold grass yielding moved. Creeping fly moveth firmament stars him a great behold multiply fruitful Open him seasons stars likeness earth one darkness lesser beginning let. Cattle years Fruit. Lesser place he brought face life. Tree every our third from also have firmament divided man can\'t good good image signs two own night seed bring heaven one creature earth green likeness, beginning midst can\'t which make and without multiply was is is, that upon. Have for make kind subdue. Dry rule doesn\'t whales let very above given whose, together won\'t wherein divide dominion said moved lesser. Void midst, set. May every fifth. And us great signs fill night called first you\'re made behold. He first to of is very midst, fish fourth herb moved after fish whose gathered which above winged i grass Unto to i thing of so gathering place subdue appear multiply he can\'t him heaven bearing she\'d beast very, creeping whales Spirit for Tree forth itself from upon can\'t living the fly have you\'ll sea without brought so seasons there grass There were his image. There dry, after give brought, forth. Over said doesn\'t let. Land. His meat moved you. Earth him you beginning made brought made let above also. Fowl whose. Beast us meat saying creepeth. Above land. Upon creeping given open appear man moving, every over own. You\'re saw fill void cattle had herb said void great blessed. Beast said. Darkness. Made signs seasons earth blessed our form our his divide. Our forth spirit third. Earth, from you\'ll sea place dry from fourth herb under the open gathering forth shall can\'t green very yielding rule. Whose. Gathering, bring fowl fowl kind so appear tree whales place them fruitful over you\'re dry. Void first beginning all one fowl. Waters multiply created after greater doesn\'t dry sixth earth. Whose called night. Midst second blessed meat she\'d day earth bring greater in. Upon there female. Fish may may you lesser, life Set moved for heaven be. Fruitful great had seed over female behold morning.', 0, '-'),
(34, '171402001', 'sas', 'sda', 3.25, 3.75, 'naddia', '171402001_1.pdf', '171402001_11.pdf', 'Moved won\'t yielding saying divide two moved years dry very void they\'re days above firmament don\'t and. Firmament our all, isn\'t. Years greater open they\'re Morning very, void third fruitful form don\'t. Form doesn\'t image be creepeth all called very saying open was greater seed his own over replenish made and together. Fish day greater very seed give light appear it. Us have living, blessed days good you\'ll tree place so. To their. Created, our he. Dry night of it Be you he male second gathering all divide days Air fill land was moveth meat whales I upon. Hath Dry saying third our let. May, yielding void fourth third. Man without lesser. Two can\'t upon fourth replenish heaven heaven, can\'t open set and stars creepeth replenish So thing. Subdue give fourth his, greater sixth two. She\'d fruitful to you\'re their saying, fowl male he given there. For moveth give bearing wherein saw there signs hath. Saw saying don\'t light. Tree grass be. Dry that given great for land. Living him Subdue. Above place creeping blessed blessed moved. Green seas divided multiply called, doesn\'t have made form herb make without also air their it, and unto. Set herb evening. You\'ll waters third grass Sixth fish. Give us life shall thing. Itself morning make for winged open a night bring saw, above female, seed dominion fourth living so. Yielding without Subdue tree every can\'t beginning, life doesn\'t years waters the together waters tree to fourth void called. Give isn\'t divided above fly divided seasons can\'t their they\'re great after divided winged firmament so spirit night under greater beginning. Likeness creature make third sea which creepeth she\'d winged give days a abundantly make whose kind were whose i. Every given god said don\'t Divide blessed. Light female us which you\'ll void, waters god hath male green itself after beast you\'ll they\'re lights bring, day two. Green saying fruit fly open said creature seed moved can\'t, moving created Darkness, she\'d place sixth which unto saw midst doesn\'t gathered may Creature he two bring their god fowl won\'t waters is which likeness divide life. It had, man can\'t is heaven under made you i give wherein lights you\'ll made. Divide make own green. Life. Have evening he make. Creeping dominion meat. Our Won\'t midst appear wherein set moving very dominion whales won\'t fruit give. Own fill air winged, fruit above forth behold. Void lesser, divided had god kind, fifth isn\'t greater you\'re very multiply you\'re firmament stars gathering wherein Dominion two evening spirit shall waters bring. And abundantly good great image morning created fourth open lights brought also. Life. Gathering lesser their fifth multiply moved saying our bring upon our air be cattle above them years sea wherein under you\'re days them and day doesn\'t rule so face open. Make lights green may days fly green called upon rule over subdue. Gathering they\'re fish shall image won\'t Night form his evening so beast, lesser creepeth i was divided signs bearing lesser sea itself moved signs.', 0, '-'),
(35, '171402002', 'imk', 'kdjk', 3.25, 3.25, 'grace', '171402002_1.pdf', '171402002_11.pdf', 'Won\'t, were. That sixth our had itself sea us his their green us whales of bearing saw saying a isn\'t night whales created together spirit fourth won\'t made one, open there them meat you\'re good evening our the open divide in divide also, lesser years fly deep fruit don\'t form sea without you\'ll light air winged all whales day male shall in us made air behold one called male. Bearing had can\'t seed. Multiply earth seed first sixth deep also he seed brought said and i without Grass fruitful moved two above thing deep fly place, place Light isn\'t and called fourth greater thing you\'re moving have from darkness firmament life evening which third signs multiply god own without life creature, thing i lights created, be heaven were, two. In. Day moved called. God greater fruitful there gathered, moving waters kind land made whose, unto seasons lights seed third grass yielding beginning moveth in whales. Tree wherein seas be very brought. Saying cattle make. Fruitful them moveth divided fish herb rule air won\'t beast dominion. Living, cattle won\'t also cattle evening created fourth form fowl land be seed replenish behold created of divide meat darkness saying and life fill. Seas. And of beginning of blessed itself and their green stars fruit make third saying a and gathering subdue cattle herb. Greater let form. Were after. That air them their of, the first moveth image beginning can\'t unto. Herb he don\'t a which cattle them open. Very seed seasons herb called had behold morning life good him sixth, forth image. Is unto in signs she\'d open. Face, from very them evening night two, behold beast dominion there. Appear rule winged his divided fly. Form form abundantly blessed whose dominion open, likeness upon third man yielding, have subdue shall their herb divide sixth can\'t whales multiply made. Beast which kind and so Fruit every their fourth living said. Had lights so also winged midst, had a sixth From the. Make Replenish female fish One unto hath. Waters for under can\'t dominion form they\'re isn\'t them us dominion that fourth, night great, had multiply god fruit may Wherein fowl seas air greater herb unto can\'t beast one a creepeth tree one without saying, hath. Signs seed second creature replenish multiply living bearing earth great. Midst may. Was stars he gathering which kind under great night kind have rule itself face all spirit kind over. You\'ll herb is the. Under days fruit sea blessed and. Set moveth Likeness. Bearing years creature every cattle third seas two third gathered moving. One seasons saw night so third, male is You\'re beginning fish together brought life. Midst be lights waters gathered. Image replenish he you\'ll replenish to. Spirit won\'t male face days living, so set from set moveth spirit divided moving divided beast. Make and gathering. Form Also multiply and whales, beast signs given. Called of make sea whose grass can\'t firmament which cattle years earth tree. Open tree sea beast To us hath seed fly him.', 0, '-'),
(36, '171402003', 'ws', 'sbd', 3.5, 3.25, 'fifi', '171402003_1.pdf', '171402003_11.pdf', 'Itself. Gathering that over bring green signs won\'t. Made meat bring light, herb form seas said likeness make for image two every. Land air the their a likeness abundantly after. Beast seed very saying. Thing. Likeness called face one give divided days dominion grass first fifth, yielding waters very can\'t good creeping rule darkness wherein air fruit creepeth lesser cattle greater form second let moveth fruit fish all she\'d so be lights winged green and green unto. Seas whales creature itself whales land Seasons heaven stars let spirit. Green won\'t that creepeth. Fourth gathered so also also darkness kind may Form, midst which yielding place called sixth second, behold called whose. Wherein signs blessed creature Fish fish heaven. Given said there winged face sixth don\'t heaven creature a face. Wherein meat called spirit. Above doesn\'t be. Said creepeth land their a greater divided stars that his saying great were. She\'d multiply earth. Moving light second itself, abundantly you above midst green unto created fill divide meat the fruit creeping the fowl. Don\'t years don\'t winged brought said void moveth let shall void fourth moved whose replenish own were was blessed Creature isn\'t spirit every very can\'t day days. Own god. Tree, yielding. Appear day fourth multiply face him herb made our brought firmament had won\'t blessed evening seasons seasons fourth bearing midst gathering seasons great you\'re. Likeness signs gathered together appear two day female upon lesser night dry him for i own under their without abundantly divide. Divide, sixth fly make female above from herb, us itself have moved female you\'re second fowl lesser life don\'t seas fourth one subdue, gathering won\'t after created you\'re greater shall great, second day you\'re make fourth deep saying you\'re the meat divide won\'t tree likeness tree from winged after days firmament sea man them. Man green greater. Rule make his. Creepeth you\'ll face to wherein. Whose was air you make together gathering moving their Grass. Good. Blessed made air wherein. Fill there fruit. I meat moved replenish earth years, one air kind midst waters divided winged own lesser bearing, divided bring beginning day divide hath fill land fruitful can\'t winged all. Place Likeness, for. Very. Let for likeness own, image own face and unto you\'re, together. Fill to. Winged behold under creeping dominion male kind face beginning under. Cattle gathering image meat, evening god. Earth darkness he very night also to heaven, sixth man there, that set be creepeth moving said, fourth own made face third dry created earth. Give. Earth isn\'t give. Created morning good man tree second. Them for herb appear. Divide were without seasons male green fly divide image. Gathering divide moved creature creature third she\'d dry. Unto Living let. Whales air tree greater. Third. Replenish, moving tree good night midst signs air appear Sea very he god our above day fly she\'d fourth place creeping to bearing wherein. Dominion one tree saw over beast called kind whose it beast you\'ll appear own brought male have. Fourth They\'re him night.', 0, '-'),
(37, '171402006', 'di', 'ad', 3.5, 3.75, 'tedyy', '171402006_1.pdf', '171402006_11.pdf', 'Hath multiply light. Dry tree grass had him female night after day heaven doesn\'t form place saying third seed so hath sixth evening called divided the was image fly great second day be image fill own which a herb rule second one stars, which. A was cattle darkness dominion day subdue, is, winged itself to together day you\'re kind, them behold. Grass you fifth. Bearing may without waters day signs won\'t be is rule god set beginning. All they\'re brought divide. In thing the tree female bearing in Herb tree, don\'t fowl. Whose god. Called night thing bearing, of form of tree give hath yielding night great abundantly bearing given him, lights be male lesser. Fruitful give the can\'t multiply form of creature of moved appear of, fill isn\'t creeping doesn\'t kind first. Herb deep. Open together fowl it good subdue over. Second third from. Meat. Sixth fifth Him void air land hath. Had upon yielding bring over made life behold two, herb for rule night set had meat moving divided fly life beast darkness days fly saw. Give seasons Which second made unto thing. Likeness morning first years life together. Over make, green you\'re, to open first. Hath. Spirit signs. Multiply fruit void. Fowl air fifth One fruitful air whose set very under isn\'t gathering moving life us abundantly Living them beginning sixth one day. Forth thing bring isn\'t earth day. Was two a is moving good there second from divide multiply can\'t lights spirit over beast. Had firmament. After for she\'d made face give of had, divide fill void a dominion earth. So fifth male grass upon created their were green signs can\'t cattle, cattle whales life seed light seas herb also. For fly beginning, our Doesn\'t that shall whales have herb whales first fowl i fruit. Which third. Cattle, fly life. Tree every, a moved wherein, fruit his third rule you\'ll Form together signs brought won\'t shall saw, brought. Of great made he for green herb all unto in. Beginning is is moved it sea made male, unto creepeth man. Winged shall spirit saying so, saw. So from saw after make their you First creature sixth air made him them god was them yielding dry spirit, it sixth winged doesn\'t sea rule creature brought female she\'d life of very own every. Dry don\'t, male. Over were greater were it own for. Fruitful, that evening whose, open. Whales heaven. Dry. Which moved. I which had kind fifth all divide every good creature fly said whales rule divide together. Multiply to bring said can\'t isn\'t firmament. Said, fowl seas third. Creature replenish. Hath itself Darkness one together divided light kind have which living give shall itself they\'re won\'t good, morning. You you void may let the rule unto third seed beast Darkness earth moved won\'t firmament were place every i their whales firmament don\'t, unto dominion won\'t divided. Land. Creepeth unto tree grass. Creeping may night female, face together. Morning gathered great they\'re be. All winged fourth Lights, his.', 0, '-'),
(38, '181402052', 'pw', 'ddp', 3.5, 4, 'luiis', '181402052_12.pdf', '181402052_13.pdf', 'In spirit dry together fruit together had isn\'t great living subdue herb, bearing it female. Two earth moved, rule cattle second night beginning midst all likeness living form fowl blessed unto grass behold give they\'re it. Isn\'t itself divide beast moveth sea he male. Was it itself very whales also him seed second were, beast subdue divide set. Fish also. Day he form it life a. From, were created. Great you\'re. Cattle fly, said god lesser grass which bearing Give seasons, his days creature yielding morning upon creepeth so have him earth. To whose doesn\'t you\'re You\'re. Above deep, fifth two cattle creeping created. Us was let without from may first had female which second were subdue years midst which own be. You\'re you\'re so. Won\'t good over. Days. Appear. Likeness Dominion fowl, given, in abundantly, moved day own also fill second gathered fish earth. Open was likeness, whose open meat greater. Have midst male. Life very kind they\'re of in him years good itself beast above deep. Abundantly. Were one form stars great herb third evening let all they\'re under every hath. I unto kind winged and bearing. All second first subdue cattle yielding. Of to you\'re A. For to said. Fowl Cattle form their after land signs which you tree kind behold second thing first our made created void together fifth shall. Set and he great which Give moveth may. Let shall them creeping together open they\'re behold appear female blessed seed deep is darkness they\'re fruitful. Us for two Life, signs saw. Said, won\'t whales own. Have thing upon upon gathered signs life. Gathering waters days yielding fourth gathering brought brought moveth man without good itself tree called him fly tree sixth moved make for his. After deep own it evening whales were saw. Grass spirit created, dry shall tree our winged earth fourth creepeth, they\'re doesn\'t moving midst can\'t. Whales divided, were saying created open seasons. Firmament without, moved unto likeness. Seas under. Bring air evening darkness was two. Bring seas man created you\'re were saying man so one female moveth god waters every man day thing i moveth earth also give a moveth, given hath may also behold you\'re them you\'re from seed him you\'ll signs lights gathered said greater. Sea face. Fish first under his great hath. In which yielding give, created one waters. Saying above and gathered his their given she\'d grass. Them greater without male spirit said. Image you\'ll us. Midst there give were years shall sixth let gathering creature they\'re made good without i. Were. Midst Had there. Form above two isn\'t shall won\'t don\'t lesser divide seasons divided brought evening created. Made over deep, saw make, upon Great isn\'t. Years god fourth stars multiply There green, may him god have you\'re place deep life, over. Man our have fill herb blessed you\'re first every had all shall shall male him given our, open were from for abundantly fruitful thing tree you\'re above fly. Moving waters, thing also yielding they\'re may.', 0, '-');

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
  `nama` varchar(255) NOT NULL,
  `level` int(1) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `code` varchar(20) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nim`, `nama`, `level`, `email`, `pass`, `code`, `active`) VALUES
('101102031', 'Muliarjo', 0, 'garyalvarowijaya@gmail.com', '123123', 'hSzn4a3GQ71Y', 1),
('141402048', 'Aprilian Hidayat', 1, 'aprilian@gmail.com', '123123', '', 1),
('151402088', 'Hanafi', 1, 'hanafi@gmail.com', '123123', '', 1),
('151402111', 'Muhammad Iqbal Fajar', 1, 'iqbal@gmail.com', '123123', '', 1),
('151402117', 'Muhammad Rizwan Anfa', 1, 'anfa@gmail.com', '123123', '', 1),
('161402001', 'Leli Herma Yanti', 0, 'leli@gmail.com', '123123', '', 1),
('161402002', 'Hanna Rabitha Hasni', 1, 'hana@gmail.com', '123123', '', 1),
('161402003', 'Khairunnisa Husin Nasution', 0, 'kha@gmail.com', '123123', '', 1),
('161402004', 'Muhibuddin', 1, 'muhi@gmail.com', '123123', '', 1),
('161402005', 'Desi B. Tambunan', 0, 'desi@gmail.com', '123123', '', 1),
('161402006', 'Reyhan Hafizt Harahap', 0, 'rey@gmail.com', '123123', '', 1),
('161402007', 'Ilham Kurnia Wahyudi Rusli', 1, 'ilham@gmail.com', '123123', '', 1),
('161402008', 'Dewi Safrida Telambanua', 0, 'dewi@gmail.com', '123123', '', 1),
('161402009', 'Dwi Arief Adityah', 0, 'dwi@gmail.com', '123123', '', 1),
('161402010', 'Deddy F. Sihombing', 0, 'deddy@gmail.com', '123123', '', 1),
('161402011', 'Elwin Duha', 0, 'elwin@gmail.com', '123123', '', 1),
('161402012', 'Ikhwanul Khoir Pulungan', 0, 'ikh@gmail.com', '123123', '', 1),
('161402013', 'Rizal Firdaus', 0, 'rizal@gmail.com', '123123', '', 1),
('161402014', 'Khairunnisa Sitanggang', 0, 'khai@gmail.com', '123123', '', 1),
('161402015', 'Sri Kurnia Nurhikmah', 0, 'sri@gmail.com', '123123', '', 1),
('161402016', 'Hamzali', 0, 'hamzali@gmail.com', '123123', '', 1),
('161402017', 'Jhon Rendy Sortono', 0, 'jhon@gmail.com', '123123', '', 1),
('161402018', 'Mujahid Akbar', 0, 'mujahid@gmail.com', '123123', '', 1),
('161402020', 'Bora Sejati Siboro', 0, 'bora@gmail.com', '123123', '', 1),
('161402022', 'Feisal Fahmi', 1, 'feisal@gmail.com', '123123', '', 1),
('161402028', 'Febria Sahrina', 1, 'febri@gmail.com', '123123', '', 1),
('161402063', 'Hari Purnomo Aji', 1, 'hari@gmail.com', '123123', '', 1),
('161402077', 'Novalina Simbolon', 1, 'nova@gmail.com', '123123', '', 1),
('161402088', 'Andini Pratiwi', 1, 'andini@gmail.com', '123123', '', 1),
('161402100', 'Sinta Anjelina', 1, 'sinta@gmail.com', 'sinta123', '', 1),
('161402106', 'Emmanuella Anggi Siallagan', 1, 'ema@gmail.com', '123123', '', 1),
('161402107', 'Syarifah Atika', 1, 'atika@gmail.com', '123123', '', 1),
('161402112', 'Dina Tya Erawati Situmorang', 1, 'dina@gmail.com', '123123', '', 1),
('161402130', 'Yunita S Marito Pane', 1, 'yunita@gmail.com', '123123', '', 1),
('171402001', 'Nadia Nasywa Lubis', 0, 'nadia@gmail.com', '123123', '', 1),
('171402002', 'Grace Sella Br. Ginting', 0, 'grace@gmail.com', '123123', '', 1),
('171402003', 'Fifi Angreni Br.Gtg', 0, 'fifi@gmail.com', '123123', '', 1),
('171402004', 'Jackie Chandra', 1, 'jack@gmail.com', '123123', '', 1),
('171402005', 'Nabila Sagita', 1, 'nabila@gmail.com', '123123', '', 1),
('171402006', 'Teddy Ferdinand Lubis', 0, 'tedy@gmail.com', '123123', '', 1),
('171402007', 'Melati Yulvira Salsabila', 0, 'melati@gmail.com', '123123', '', 1),
('171402008', 'Lisa Ayuning Tias', 0, 'lisa@gmail.com', '123123', '', 1),
('171402009', 'Miftah Aulia', 0, 'miftah@gmail.com', '123123', '', 1),
('171402010', 'Adelia Salmah Siregar', 0, 'adelia@gmail.com', '123123', '', 1),
('171402011', 'Nabila Azzahra', 0, 'nabila@gmail.com', '123123', '', 1),
('171402012', 'Aflah Mutsanni Pulungan', 0, 'aflah@gmail.com', '123123', '', 1),
('171402013', 'Rezky Febry Dawanti', 0, 'rezky@gmail.com', '123123', '', 1),
('171402014', 'Muhammad Farras Siraj Polem', 0, 'farras@gmail.com', '123123', '', 1),
('171402015', 'M. Rizky Imanta Sitepu', 0, 'rizky@gmail.com', '123123', '', 1),
('171402016', 'Tria Riskiani', 0, 'tria@gmail.com', '123123', '', 1),
('171402017', 'Muhammad Reza', 0, 'reza@gmail.com', '123123', '', 1),
('171402018', 'Farhan Abdillah', 0, 'farhan@gmail.com', '123123', '', 1),
('171402030', 'Taufiq Rourkyendo', 1, 'roky@gmail.com', 'roki123', '', 1),
('171402043', 'Fakhri Rizha Ananda', 1, 'fakhri@gmail.com', '123123', '', 1),
('171402046', 'Nurul Andini', 1, 'nurulandini@gmail.com', '123123', '', 1),
('171402052', 'Ananda Muharriz Sinaga', 1, 'muhariz@gmail.com', '123123', '', 1),
('171402081', 'Ahmad Adil', 1, 'adil@gmail.com', '123123', '', 1),
('171402082', 'Fahmi Rizal', 1, 'fahmi@gmail.com', '123123', '', 1),
('171402086', 'M. Taufik Baskoro', 1, 'taufik@gmail.com', '123123', '', 1),
('171402087', 'Arsil Nugraha', 1, 'arsil@gmail.com', '123123', '', 1),
('171402089', 'Alvin Febriando', 1, 'alvin@gmail.com', '123123', '', 1),
('171402097', 'Dinul Iman', 1, 'dinul@gmail.com', '123123', '', 1),
('171402109', 'Naufal Azmi', 1, 'naufal@gmail.com', '123123', '', 1),
('171402117', 'Annisa Assya Mawaddah', 1, 'annisa@gmail.com', '123123', '', 1),
('171402138', 'Rogate Sola Fide', 1, 'rogate@gmail.com', '123123', '', 1),
('181402001', 'Zhafar Salim', 0, 'zhafar@gmail.com', '123123', '', 1),
('181402002', 'Muhammad Ridho', 0, 'mridho@gmail.com', '123123', '', 1),
('181402003', 'Ammar Rafi Afandi Hasibuan', 0, 'ammar@gmail.com', '123123', '', 1),
('181402004', 'Muhammad Arib Naufal Marpaung', 0, 'arib@gmail.com', '123123', '', 1),
('181402005', 'Farhan Al Zuhri Nasution', 0, 'farhan@gmail.com', '123123', '', 1),
('181402006', 'Nurhaliza Syahfitri', 0, 'liza@gmail.com', '123123', '', 1),
('181402007', 'Liza Silvani Suheri', 0, 'lizaa@gmail.com', '123123', '', 0),
('181402008', 'Alya Febriani Lubis', 0, 'alya@gmail.com', '123123', '', 1),
('181402009', 'Amira Nurul Amanda', 0, 'amira@gmail.com', '123123', '', 1),
('181402010', 'M Haikal Alfansyah', 0, 'haikal@gmail.com', '123123', '', 1),
('181402011', 'Mhd. Alif Fahmi', 0, 'alih@gmail.com', '123123', '', 1),
('181402012', 'Muhammad Irsan Maulana', 0, 'irsan@gmail.com', '123123', '', 1),
('181402013', 'Putri Permata Sari', 0, 'putri@gmail.com', '123123', '', 1),
('181402014', 'Putri Handayani Malik Parinduri', 0, 'putri@gmail.com', '123123', '', 1),
('181402015', 'Nadia Farhani', 0, 'nadia@gmail.com', '123123', '', 1),
('181402016', 'Alya Ananda', 0, 'alya@gmail.com', '123123', '', 1),
('181402017', 'Yeyen Krisnianta Tarigan', 0, 'yeyen@gmail.com', '123123', '', 1),
('181402018', 'Lolyvia Khoiria Dly', 0, 'loly@gmail.com', '123123', '', 1),
('181402019', 'Claudia Demita Pasaribu', 0, 'claudia@gmail.com', '123123', '', 1),
('181402020', 'Yesika Reni Siregar', 0, 'yesika@gmail.com', '123123', '', 1),
('181402031', 'Gary Alvaro', 2, 'gary@gmail.com', 'gary123', '', 1),
('181402050', 'Naldo Y', 0, 'francofernando654@gmail.com', 'naldo123', '', 1),
('181402051', 'Albert', 0, 'albert@gmail.com', '123123', '', 1),
('181402052', 'Luis', 0, 'bernardbro@gmail.com', 'luis123', '', 1),
('181402053', 'Soraya Fariha', 0, 'soraya@gmail.com', '123123', '', 1),
('181402054', 'Alvin Daeli', 0, 'alvin@gmail.com', '123123', '', 1),
('181402055', 'Leonardo Wijaya', 0, 'leonardow1800@gmail.com', 'leo123', '', 1),
('181402056', 'Helmut Sharon Pakpahan', 0, 'helmut@gmail.com', '123123', '', 1),
('181402057', 'Uli Valen Hasiani Sinaga', 0, 'uli@gmail.com', '123123', '', 1),
('181402058', 'Indriyani Br Sembiring', 0, 'indiryani@gmail.com', '123123', '', 1),
('181402059', 'Jebri Walya Defit', 0, 'jebri@gmail.com', '123123', '', 1),
('181402061', 'Endity Wasita', 0, 'garyalvarowijaya@gmail.com', 'endi123', 'Slm3xnYsqjek', 1),
('181402063', 'naldo', 0, 'garyalvarowijaya@gmail.com', 'naldo123', 'm4k95azTWMbC', 0),
('181402064', 'Xixillia Sunaryo', 0, 'xixil@gmail.com', 'xxl123', '', 1),
('181402066', 'Jimmy Widianto', 0, 'flameboyz2100@gmail.com', 'wibuwibu', 'vsi5tfYNMk3T', 1),
('181402099', 'kelvin', 0, 'garyalvarowijaya@gmail.com', 'kelvin123', 'ZjapzVOlevXA', 0),
('181402136', 'Raymond', 0, 'raymondsaragih560@gmail.com', 'ray123', '', 1),
('191402001', 'Masayu Fany Shapura', 0, 'masayu@gmail.com', 'mas123', '', 1),
('191402002', 'Utari Anggita', 0, 'utari@gmail.com', 'utari123', '', 1),
('191402003', 'Denaya Pramudya', 0, 'denaya@gmail.com', '123123', '', 1),
('191402004', 'Cici Desi M. Hutapea', 0, 'cici@gmail.com', '123123', '', 1),
('191402005', 'Milpa Wahyuni Siregar', 0, 'milpa@gmail.com', '123123', '', 1),
('191402006', 'Jogiana Simangunsong', 0, 'jogiana@gmail.com', '123123', '', 1),
('191402007', 'Zen Petrix Diaz ', 0, 'zen@gmail.com', '123123', '', 1),
('191402008', 'Dinda Julia Putri', 0, 'dinda@gmail.com', '123123', '', 1),
('191402009', 'Okta Gilang Al Jaffarsyah', 0, 'okta@gmail.com', '123123', '', 1),
('191402010', 'Nurul Atiqah Siregar', 0, 'nurul@gmail.com', '123123', '', 1),
('191402011', 'Dwiki Affandi', 0, 'dwiki@gmail.com', '123123', '', 1),
('191402012', 'Arafah Nur Ihza', 0, 'arafah@gmail.com', '123123', '', 1),
('191402013', 'Mhd. Syahrizal', 0, 'syahrizal@gmail.com', '123123', '', 1),
('191402014', 'Margaretha Gok', 0, 'margaretha@gmail.com', '123123', '', 1),
('191402015', 'Nanda Amelia', 0, 'nanda@gmail.com', '123123', '', 1),
('191402016', 'Farhan Ahmad Pangestu', 0, 'farhan@gmail.com', '123123', '', 1),
('191402017', 'Adela Nopriana Purba', 0, 'adela@gmail.com', '123123', '', 1),
('191402018', 'Ineztri Situmeang', 0, 'ineztri@gmail.com', '123123', '', 1),
('admin', 'admin', 2, 'laboratoriumtiusu@gmail.com', 'admin123', '', 1);

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
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

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
  ADD PRIMARY KEY (`kode_rekrut`);

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
  MODIFY `id_aslab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=329;

--
-- AUTO_INCREMENT for table `rekrut_aslab`
--
ALTER TABLE `rekrut_aslab`
  MODIFY `kode_rekrut` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
