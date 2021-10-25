-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 09:25 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mpasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(3) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `defuzzy`
--

CREATE TABLE `defuzzy` (
  `id_defuzzy` int(11) NOT NULL,
  `id_user` int(10) NOT NULL,
  `defuzzy` float NOT NULL,
  `tgl_cek` date NOT NULL,
  `hasil_gizi` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kalkulator_gizi`
--

CREATE TABLE `kalkulator_gizi` (
  `id_hitung` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `idvariabel` int(3) NOT NULL,
  `nilai` float NOT NULL,
  `predikat` varchar(30) NOT NULL,
  `nilai1` varchar(5) NOT NULL,
  `nilai2` varchar(5) NOT NULL,
  `nilai3` varchar(6) NOT NULL,
  `tgl_cek` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kandungan_gizi_bahan_mpasi`
--

CREATE TABLE `kandungan_gizi_bahan_mpasi` (
  `id_bahan` int(5) NOT NULL,
  `nama_bahan` varchar(50) NOT NULL,
  `kandungan_bahan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kandungan_gizi_bahan_mpasi`
--

INSERT INTO `kandungan_gizi_bahan_mpasi` (`id_bahan`, `nama_bahan`, `kandungan_bahan`) VALUES
(4, 'Pepaya', '1. energy = 3,9 kcal\r\n2. water = -  g\r\n3. protein (6%) = 0,1  g\r\n4. fat (2%) = 0,0  g\r\n5. carbohydr. (92%) = 1,0  g\r\n6. dietary fiber = 0,2  g\r\n7. alcohol (0%) = -  g\r\n8. PUFA  =  0,0  g\r\n9. cholesterol =  0,0 mg\r\n10. Vit. A = 13,5 µg\r\n11. carotene = - mg\r\n12. Vit. E (eq.) =  0,1 mg\r\n13. Vit. B1  =  0,0 mg\r\n14. Vit. B2  =   0,0 mg\r\n15. Vit. B6 = 0,0 mg\r\n16. tot. fol.acid = 3,8 µg\r\n17. Vit. C  =  6,2 mg\r\n18. sodium =  0,3 mg\r\n19. potassium = 25,7 mg\r\n20. calcium	=  2,4 mg\r\n21. magnesium	=  1,0 mg'),
(5, 'Tepung Beras', 'energy	 36,1 kcal\r\nwater	  -  g\r\nprotein (8%)	  0,7  g\r\nfat (1%)	0,1  g\r\ncarbohydr. (91%)	 7,9  g\r\ndietary fiber	 0,1  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,0  g\r\ncholesterol	0,0 mg\r\nVit. A	  0,0 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,0 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,0 mg\r\ntot. fol.acid	 0,6 µg\r\nVit. C	  0,0 mg\r\nsodium	  0,0 mg\r\npotassium	  8,1 mg\r\ncalcium	 0,8 mg\r\nmagnesium	  3,6 mg\r\nphosphorus	10,3 mg\r\niron	 0,1 mg\r\nzinc	 0,1 mg\r\n'),
(6, 'Labu Kuning', 'energy	  3,9 kcal\r\nwater	  -  g\r\nprotein (8%)	  0,1  g\r\nfat (12%)	  0,1  g\r\ncarbohydr. (80%)	 0,9  g\r\ndietary fiber	 0,3  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,0  g\r\ncholesterol	0,0 mg\r\nVit. A	 40,1 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,0 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,0 mg\r\ntot. fol.acid	 2,8 µg\r\nVit. C	  1,0 mg\r\nsodium	  0,1 mg\r\npotassium	 43,7 mg\r\ncalcium	 1,4 mg\r\nmagnesium	  0,8 mg\r\nphosphorus	 2,0 mg\r\niron	 0,0 mg\r\nzinc	 0,0 mg'),
(7, 'Kentang', 'energy	  9,3 kcal\r\nwater	  -  g\r\nprotein (8%)	  0,2  g\r\nfat (1%)	0,0  g\r\ncarbohydr. (91%)	 2,2  g\r\ndietary fiber	 0,2  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,0  g\r\ncholesterol	0,0 mg\r\nVit. A	  0,0 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,0 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,0 mg\r\ntot. fol.acid	 0,9 µg\r\nVit. C	  1,3 mg\r\nsodium	  0,5 mg\r\npotassium	 39,1 mg\r\ncalcium	 0,5 mg\r\nmagnesium	  2,5 mg\r\nphosphorus	 5,0 mg\r\niron	 0,0 mg\r\nzinc	 0,0 mg'),
(8, 'Nasi Tim Ayam', 'energy	 14,0 kcal\r\nwater	  -  g\r\nprotein (17%)	 0,6  g\r\nfat (19%)	  0,3  g\r\ncarbohydr. (64%)	 2,2  g\r\ndietary fiber	 0,0  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,1  g\r\ncholesterol	1,2 mg\r\nVit. A	  0,6 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,0 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,0 mg\r\ntot. fol.acid	 0,2 µg\r\nVit. C	  0,0 mg\r\nsodium	  1,1 mg\r\npotassium	  4,9 mg\r\ncalcium	 0,4 mg\r\nmagnesium	  1,3 mg\r\nphosphorus	 5,5 mg\r\niron	 0,0 mg\r\nzinc	 0,1 mg'),
(9, 'Bubur Pisang', 'energy	  8,3 kcal\r\nwater	  -  g\r\nprotein (14%)	 0,3  g\r\nfat (21%)	  0,2  g\r\ncarbohydr. (65%)	 1,3  g\r\ndietary fiber	 0,0  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,0  g\r\ncholesterol	0,3 mg\r\nVit. A	  4,2 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,0 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,0 mg\r\ntot. fol.acid	 0,5 µg\r\nVit. C	  0,4 mg\r\nsodium	  3,2 mg\r\npotassium	 10,5 mg\r\ncalcium	 7,8 mg\r\nmagnesium	  1,1 mg\r\nphosphorus	 7,0 mg\r\niron	 0,1 mg\r\nzinc	 0,1 mg'),
(10, 'Nasi Tim Wortel Kentang', 'energy	 10,5 kcal\r\nwater	  -  g\r\nprotein (8%)	  0,2  g\r\nfat (2%)	0,0  g\r\ncarbohydr. (91%)	 2,3  g\r\ndietary fiber	 0,1  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,0  g\r\ncholesterol	0,0 mg\r\nVit. A	 19,4 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,0 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,0 mg\r\ntot. fol.acid	 0,4 µg\r\nVit. C	  0,2 mg\r\nsodium	  0,7 mg\r\npotassium	  8,2 mg\r\ncalcium	 0,6 mg\r\nmagnesium	  1,3 mg\r\nphosphorus	 3,4 mg\r\niron	 0,0 mg\r\nzinc	 0,0 mg'),
(11, 'Alpukat', 'energy	 21,7 kcal\r\nwater	7,0  g\r\nprotein (4%)	  0,2  g\r\nfat (96%)	  2,3  g\r\ncarbohydr. (1%)	  0,0  g\r\ndietary fiber	 0,3  g\r\nalcohol (0%)	  0,0  g\r\nPUFA	 0,2  g\r\ncholesterol	0,0 mg\r\nVit. A	  1,2 µg\r\ncarotene	0,0 mg\r\nVit. E (eq.)	  0,1 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,1 mg\r\ntot. fol.acid	 3,0 µg\r\nVit. C	  1,3 mg\r\nsodium	  0,3 mg\r\npotassium	 50,3 mg\r\ncalcium	 1,0 mg\r\nmagnesium	  2,9 mg\r\nphosphorus	 3,8 mg\r\niron	 0,1 mg\r\nzinc	 0,0 mg'),
(12, 'Beras Merah', 'energy	 35,8 kcal\r\nwater	  -  g\r\nprotein (8%)	  0,7  g\r\nfat (6%)	0,3  g\r\ncarbohydr. (85%)	 7,5  g\r\ndietary fiber	 0,5  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,1  g\r\ncholesterol	0,0 mg\r\nVit. A	  0,0 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,0 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,0 mg\r\ntot. fol.acid	 1,3 µg\r\nVit. C	  0,0 mg\r\nsodium	  0,3 mg\r\npotassium	 25,3 mg\r\ncalcium	 3,2 mg\r\nmagnesium	 14,1 mg\r\nphosphorus	24,6 mg\r\niron	 0,2 mg\r\nzinc	 0,2 mg'),
(13, 'Tomat', 'energy	  2,1 kcal\r\nwater	  -  g\r\nprotein (15%)	 0,1  g\r\nfat (11%)	  0,0  g\r\ncarbohydr. (75%)	 0,5  g\r\ndietary fiber	 0,1  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,0  g\r\ncholesterol	0,0 mg\r\nVit. A	  8,7 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,0 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,0 mg\r\ntot. fol.acid	 1,5 µg\r\nVit. C	  1,9 mg\r\nsodium	  0,9 mg\r\npotassium	 22,2 mg\r\ncalcium	 0,5 mg\r\nmagnesium	  1,1 mg\r\nphosphorus	 2,4 mg\r\niron	 0,1 mg\r\nzinc	 0,0 mg'),
(14, 'Hati Ayam', 'energy	 15,7 kcal\r\nwater	  -  g\r\nprotein (65%)	 2,4  g\r\nfat (32%)	  0,6  g\r\ncarbohydr. (2%)	  0,1  g\r\ndietary fiber	 0,0  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,1  g\r\ncholesterol	  63,1 mg\r\nVit. A	  1132,5 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,0 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,3 mg\r\nVit. B6	 0,0 mg\r\ntot. fol.acid	59,0 µg\r\nVit. C	  2,3 mg\r\nsodium	  5,1 mg\r\npotassium	 14,0 mg\r\ncalcium	 1,4 mg\r\nmagnesium	  2,1 mg\r\nphosphorus	31,2 mg\r\niron	 0,9 mg\r\nzinc	 0,4 mg'),
(15, 'Ubi Merah', 'energy	 10,3 kcal\r\nwater	  -  g\r\nprotein (6%)	  0,2  g\r\nfat (1%)	0,0  g\r\ncarbohydr. (93%)	 2,4  g\r\ndietary fiber	 0,3  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,0  g\r\ncholesterol	0,0 mg\r\nVit. A	146,7 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,5 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,0 mg\r\ntot. fol.acid	 2,3 µg\r\nVit. C	  2,5 mg\r\nsodium	  1,0 mg\r\npotassium	 34,8 mg\r\ncalcium	 2,8 mg\r\nmagnesium	  2,0 mg\r\nphosphorus	 5,5 mg\r\niron	 0,1 mg\r\nzinc	 0,0 mg'),
(16, 'Bubur Kacang Hijau', 'energy	  8,3 kcal\r\nwater	  -  g\r\nprotein (14%)	 0,3  g\r\nfat (21%)	  0,2  g\r\ncarbohydr. (65%)	 1,3  g\r\ndietary fiber	 0,0  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,0  g\r\ncholesterol	0,3 mg\r\nVit. A	  4,2 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,0 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,0 mg\r\ntot. fol.acid	 0,5 µg\r\nVit. C	  0,4 mg\r\nsodium	  3,2 mg\r\npotassium	 10,5 mg\r\ncalcium	 7,8 mg\r\nmagnesium	  1,1 mg\r\nphosphorus	 7,0 mg\r\niron	 0,1 mg\r\nzinc	 0,1 mg'),
(17, 'Kurma', 'energy	 27,9 kcal\r\nwater	  -  g\r\nprotein (4%)	  0,3  g\r\nfat (1%)	0,1  g\r\ncarbohydr. (95%)	 7,4  g\r\ndietary fiber	 0,4  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,0  g\r\ncholesterol	0,0 mg\r\nVit. A	  0,1 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,1 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,0 mg\r\ntot. fol.acid	 0,3 µg\r\nVit. C	  0,3 mg\r\nsodium	  1,1 mg\r\npotassium	 69,8 mg\r\ncalcium	 4,6 mg\r\nmagnesium	  3,1 mg\r\nphosphorus	 9,0 mg\r\niron	 0,2 mg\r\nzinc	 0,0 mg'),
(18, 'Salmon', 'energy	 13,1 kcal\r\nwater	7,4  g\r\nprotein (57%)	 1,8  g\r\nfat (43%)	  0,6  g\r\ncarbohydr. (0%)	  0,0  g\r\ndietary fiber	 0,0  g\r\nalcohol (0%)	  0,0  g\r\nPUFA	 0,2  g\r\ncholesterol	3,5 mg\r\nVit. A	  4,1 µg\r\ncarotene	0,0 mg\r\nVit. E (eq.)	  0,2 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,1 mg\r\ntot. fol.acid	 2,6 µg\r\nVit. C	  0,0 mg\r\nsodium	  5,1 mg\r\npotassium	 37,1 mg\r\ncalcium	 1,3 mg\r\nmagnesium	  2,9 mg\r\nphosphorus	26,6 mg\r\niron	 0,1 mg\r\nzinc	 0,1 mg'),
(19, 'Kacang Merah', 'energy	 33,5 kcal\r\nwater	  -  g\r\nprotein (27%)	 2,3  g\r\nfat (3%)	0,1  g\r\ncarbohydr. (70%)	 6,0  g\r\ndietary fiber	 1,7  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,1  g\r\ncholesterol	0,0 mg\r\nVit. A	  0,0 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,0 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,0 mg\r\ntot. fol.acid	34,3 µg\r\nVit. C	  0,3 mg\r\nsodium	  0,5 mg\r\npotassium	106,4 mg\r\ncalcium	 7,4 mg\r\nmagnesium	 11,9 mg\r\nphosphorus	37,5 mg\r\niron	 0,8 mg\r\nzinc	 0,3 mg'),
(20, 'Telur', 'energy	 15,5 kcal\r\nwater	  -  g\r\nprotein (34%)	 1,3  g\r\nfat (63%)	  1,1  g\r\ncarbohydr. (3%)	  0,1  g\r\ndietary fiber	 0,0  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,1  g\r\ncholesterol	  42,4 mg\r\nVit. A	 19,0 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,2 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,1 mg\r\nVit. B6	 0,0 mg\r\ntot. fol.acid	 4,4 µg\r\nVit. C	  0,0 mg\r\nsodium	 12,4 mg\r\npotassium	 12,6 mg\r\ncalcium	 5,0 mg\r\nmagnesium	  1,0 mg\r\nphosphorus	17,2 mg\r\niron	 0,1 mg\r\nzinc	 0,1 mg'),
(21, 'Bayam Merah', 'energy	  3,7 kcal\r\nwater	  -  g\r\nprotein (32%)	 0,4  g\r\nfat (4%)	0,0  g\r\ncarbohydr. (64%)	 0,7  g\r\ndietary fiber	 0,1  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,0  g\r\ncholesterol	0,0 mg\r\nVit. A	 51,9 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,0 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,1 mg\r\ntot. fol.acid	10,4 µg\r\nVit. C	  3,3 mg\r\nsodium	  1,1 mg\r\npotassium	 55,0 mg\r\ncalcium	21,1 mg\r\nmagnesium	  6,2 mg\r\nphosphorus	 7,2 mg\r\niron	 0,3 mg\r\nzinc	 0,0 mg'),
(22, 'Makaroni', 'energy	 35,3 kcal\r\nwater	  -  g\r\nprotein (14%)	 1,2  g\r\nfat (5%)	0,2  g\r\ncarbohydr. (82%)	 7,1  g\r\ndietary fiber	 0,4  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,1  g\r\ncholesterol	0,0 mg\r\nVit. A	  0,0 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,0 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,0 mg\r\ntot. fol.acid	 1,8 µg\r\nVit. C	  0,0 mg\r\nsodium	  0,3 mg\r\npotassium	  7,8 mg\r\ncalcium	 1,8 mg\r\nmagnesium	  4,5 mg\r\nphosphorus	13,5 mg\r\niron	 0,1 mg\r\nzinc	 0,1 mg');

-- --------------------------------------------------------

--
-- Table structure for table `min`
--

CREATE TABLE `min` (
  `id_user` int(10) NOT NULL,
  `idrule` varchar(10) NOT NULL,
  `min` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `min1`
--

CREATE TABLE `min1` (
  `id_user` int(10) NOT NULL,
  `idrule` varchar(10) NOT NULL,
  `min` varchar(10) NOT NULL,
  `tgl_cek` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mpasi_menu`
--

CREATE TABLE `mpasi_menu` (
  `id_menu` int(5) NOT NULL,
  `judul_menu` text NOT NULL,
  `bahan_menu` varchar(500) NOT NULL,
  `resep_menu` text NOT NULL,
  `foto` text NOT NULL,
  `usia` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mpasi_menu`
--

INSERT INTO `mpasi_menu` (`id_menu`, `judul_menu`, `bahan_menu`, `resep_menu`, `foto`, `usia`) VALUES
(7, 'Tepung Beras', 'Beras', '1. Cuci beras sampai bersih, lalu tiriskan. Jemur hingga kering. Beras dapat diganti kacang hijau kupas atau jagung pipil\r\n2. Haluskan beras dengan blender atau food processor\r\n3. Ayak beras halus. Jika ada yang masih kasar, kumpulkan, haluskan, dan ayak lagi.\r\n4. Sangria tepung beras di atas api kecil sampai benar-benar kering, tetapi jangan sampai berubah warna. Angkat dan biarkan dingin.\r\n5. Simpan dalam wadah bersih, kering dan kedap udara.', 'tepung_beras.jpg', '6-7'),
(8, 'Pure Pepaya', '1. 1 Potong Pepaya\r\n2. ASI', '1. Potong pepaya kecil-kecil. Cuci bersih\r\n2. Blender bersama ASI\r\n3. Sajikan dalam keadaan segar\r\n', 'pure_pepaya.jpg', '6-7'),
(9, 'Pure Pepaya dan Pir', '1. 30 gram pir. Kupas, ambil dagingnya saja\r\n2. 30 gram pepaya, kupas ambil dagingnya.\r\n3. ASI\r\n', '1. Kukus pir hingga lunak\r\n2. Blender semua bahan hingga halus\r\n3. Sajikan\r\n', 'pure_pepaya_dan_pir.png', '6-7'),
(10, 'Pure Oatmeal', '1. 1 sdm oatmeal\r\n2. Air (secukupnya)\r\n3. ASIP/Sufor (secukupnya)', '1. Campur oatmeal dengan air. Masak sampai mendidih. Angkat.\r\n2. Masukkan ASIP atau sufor kedalam oatmeal yang telah dimasak. Aduk rata. Sajikan.\r\n', 'pure_oatmeal.jpg', '6-7'),
(11, 'Bubur Jagung Dengan Pasta Tomat', '1. 2 sdm nasi tim\r\n2. ½ buah jagung manis, parut lembut\r\n3. ½ buah tomat', '1. Masaklah bubur hingga matang.\r\n2. Cuci jagung dan tomat hingga bersih.\r\n3. Setelah bubur setengah matang, parut jagung dan campur kedalam bubur. Aduk sampai matang. Angkat dan saring.\r\n4. Rebus tomat sampai matang, saring.\r\n5. Tuang pasta tomat yang telah jadi kedalam mangkuk. Tuangkan bubur jagung diatasnya. \r\n6. Sajikan.\r\n', '', '6-7'),
(12, 'Pure Labu Kuning', '1. 4 potong labu kuning (labu parang)\r\n2. 1-3 potong brokoli/wortel\r\n3. Asi secukupnya\r\n', '1. Cuci labu dan brokoli sampai bersih\r\n2. Rendam brokoli dengan air garam. Cuci kembali.\r\n3. Rebus labu. Jika sudah setengah matang, masukkan brokoli. Masak hingga matang.\r\n4. Blender labu dan brokoli. Saring. Campurkan ASIP. Sajikan.\r\n\r\nNote: brokoli/wortel bisa diganti dengan bahan makanan lain seperti ikan teri basah/salmon\r\n', '', '6-7'),
(13, 'Pure Kentang', '1. 1 buah kentang\r\n2. 2-3 potong brokoli / wortel\r\n3. Asip secukupnya\r\n', '1. Kupas kentang. Potong dadu. Rendam dalam air\r\n2. Cuci brokoli hingga bersih, rendam air garam sebentar lalu cuci lagi (jika menggunakan wortel, cukup dicuci saja).\r\n3. Rebus kentang. Jika sudah setengah matang, masukkan brokoli/wortel; masak sampai matang\r\n?4. Blender kentang, brokoli/wortel, saring. Tambahkan ASIP. Sajikan\r\n\r\nNote: brokoli/wortel bisa diganti dengan ikan teri basah/salmon\r\n', '', '6-7'),
(14, 'Nasi Tim Ayam', '1. Beras hitam dan beras merah (perbandingan 1:1)\r\n2. Santan\r\n3. Fillet dada ayam kampung\r\n4. 2-3 potong brokoli/wortel\r\n5. Sejumput kacang merah\r\n6. Asip secukupnya\r\n', '1. Bersihkan fillet dada ayam; tiriskan\r\n2. Cuci bersih brokoli, rendam air garam sebentar lalu cuci lagi.\r\n3. Cuci beras merah dan beras hitam; masak dengan api sedang\r\n4. Bila beras sudah setengah matang, tambahkan air santan\r\n5. Masukkan fillet dada ayam, brokoli/wortel, kacang merah; masak dengan api kecil\r\n6. Bila sudah masak, blender semua bahan2. Saring. Tambahkan ASIP. Sajikan.\r\n\r\nNote: bila masih ada airnya, jangan dibuang. Berikan kaldu saat anak disuapi nasi tim saring\r\n', '', '6-7'),
(15, 'Pure Wortel Havermut', '1. 2 sdm havermut\r\n2. 30 gram wortel\r\n3. 250 ml air matang\r\n4. 100 ml ASI/PASI (3 Sendok takar peres PASI dilarutkan dalam 100 ml air matang)\r\n', '1.	Campur havermut dengan air matang lalu aduk rata\r\n2.	Masak di atas api kecil sampai mendidih lalu haluskan dengan blender dan campur dengan 100 ml ASI/PASI\r\n3.	Didihkan air secukupnya lalu masukkan wortel dan tunggu sampai wortel agak lunak. Angkat.\r\n4.	Masukkan wortel bersama air rebusannya ke dalam blender lalu haluskan dan sisihkan. Hidangkan.\r\n', '', '6-7'),
(16, 'Pure Beras Merah dan Hati Ayam', '1. 2 sdm tepung beras merah\r\n2. 30 gram hati ayam rebus, potong kecil\r\n3. 250 ml air matang\r\n4. 100 ml ASI/PASI (3 sendok takar peres PASI dilarutkan dalam 100 ml air matang)\r\n', '1.	Larutkan tepung beras merah dengan air matang, aduk rata.\r\n2.	Masak larutkan tepung beras di atas api kecil sampai mendidih. Aduk-aduk terus agar tidak menggumpal. Sisihkan.\r\n3.	Masukkan potongan hati ayam ke dalam blender, haluskan dan sisihkan\r\n4.	Tuang tepung beras merah ke dalam mangkuk, campur ASI/PASI dan aduk rata. Hidangkan dengan pure hati ayam\r\n', '', '6-7'),
(17, 'Pure Labu Kuning Kentang', '1. 50 gram labu kuning, potong menjadi empat\r\n2. 50 gram kentang, potong menjadi empat\r\n3. 100 ml kaldu\r\n4. 100 ml ASI/PASI\r\n', '1.	Rebus kentang dan labu kuning dengan 100 ml kaldu sampai lunak\r\n2.	Campurkan kentang yang sudah lunak dengan 50 ml ASI/PASI lalu haluskan dengan blender atau alat penyaring khusus.\r\n3.	Campurkan pula labu kuning dengan 50 ml ASI/PASI lalu haluskan dengan blender atau alat penyaring khusus. Hidangkan.', '', '6-7'),
(18, 'Pure Ubi Merang Avokad', '1. 50 gram ubi merah (jingga), potong menjadi empat\r\n2. 50 gram avokad, daging buah yang sudah dikerok\r\n3. 100 ml kaldu\r\n4. 100 ml ASI/PASI\r\n', '1.	Rebus ubi merah (jingga) dengan 100 ml kaldu sampai lunak\r\n2.	Campurkan avokad dengan 50 ml ASI/PASI, lalu haluskan dengan blender atau alat penyaring khusus\r\n3.	Campurkan pula ubi merah (jingga) dengaan 50 ml ASI/PASI, lalu haluskan dengan blender atau alat penyaring khusus. Hidangkan\r\n', '', '6-7'),
(19, 'Pure Jagung Manis dan Hati Ayam', '1. 100 gr jagung manis pipil\r\n2. 1 buah hati ayam kampung, kukus dan potong dadu\r\n3. 100 air\r\n4. 1 buah bawang putih, cincang halus\r\n5. 1 sdm mentega tawar\r\n', '1.	Kukus jagung manis hingga sangat lunak.\r\n2.	Blender jagung hingga lembut.\r\n3.	Tumis hati ayam dengan mentega tawar dan bawang putih cincang sebentar hingga harum.\r\n4.	Campurkan tumisan hati ayam di atas pure jagung.\r\n5.	Pure jagung manis dan hati ayam siap dihidangkan.\r\n\r\nRasa manis dari jagung dan gurihnya hati ayam pasti akan sangat disukai oleh bayi, Bu. Selain itu, kandungan nutrisinya pun tak perlu diragukan lagi.', 'tepung_beras.jpg', '8'),
(20, 'Bubur Beras Merah dengan Daging Ayam dan Sayuran', '1. 100 gr beras merah\r\n2. 1 buah bawang putih, cincang halus\r\n3. 1 sdm mentega tawar\r\n4. 100 gr daging ayam giling\r\n5. 1 buah wortel, kukus dan cincang lembut\r\n6. 1 buah brokoli ukuran kecil, kukus dan rajang lembut bagian atasnya saja\r\n', '1.	Masak beras merah dengan cara ditumbuk sampai menjadi tepung atau bisa dimasak seperti biasa menggunakan perbandingan 1:9 air untuk mendapatkan tekstur yang sangat lunak. Masak dengan api kecil.\r\n2.	Aduk-aduk bubur supaya tidak hangus.\r\n3.	Tumis ayam giling dengan minyak mentega tawar dan bawang putih cincang hingga matang.\r\n4.	Masukkan tumisan ayam, wortel dan brokoli kukus pada bubur yang sudah matang. Aduk-aduk rata.\r\n5.	Hidangkan dalam wadah dan tambahkan keju parut untuk menambahkan rasa gurih.\r\n\r\nMenu MPASI 8 bulan ini sudah tergolong menu 4 bintang ya, Bu. Jadi bayi sudah mendapatkan banyak nutrisi yang ia butuhkan untuk tumbuh kembangnya. Bubur ini juga bisa dimakan untuk siang dan malam hari. Ibu hanya perlu menghangatkannya saja dengan api kecil.\r\n', '', '8'),
(21, 'Bubur Pisang Susu', '1. 1 buah pisang raja\r\n2. 150-200 ml susu cair/ASIP\r\n', '1.	Lumat pisang hingga teksturnya lembut.\r\n2.	Tambahkan susu sedikit demi sedikit sambil diaduk rata.\r\n3.	Untuk usia 8 bulan, buat bubur dengan tekstur yang agak kental.\r\n4.	Bubur pisang susu siap dihidangkan.\r\n\r\nMenu ini cocok dihidangkan untuk sarapan yang memiliki waktu singkat untuk memasak. Tekstur yang lembut, rasa yang manis, dan kandungan nutrisi dari pisang membuat bubur ini bisa jadi menu andalan Ibu dan pastinya disukai oleh bayi.\r\n', '', '8'),
(22, 'Bubur Kacang Hijau Kurma', '1. 100 gr kacang hijau kupas, rendam dengan air semalaman\r\n2. 2 buah kurma, ambil dagingnya\r\n3. ASIP atau susu cair secukupnya\r\n', '1.	Rebus kacang hijau hingga empuk.\r\n2.	Blender daging kurma sampai lembut.\r\n3.	Saring kacang hijau lalu campurkan ke dalam blender dan tambahkan ASIP atau susu cair, haluskan.\r\n4.	Tuang ke dalam wadah, sajikan selagi hangat.\r\n\r\nKombinasi antara kacang hijau dan kurma akan memberikan berbagai nutrisi yang baik untuk bayi. Untuk penyimpanan bisa ditunggu hingga dingin lalu simpan dalam wadah dan masukkan ke dalam kulkas.\r\n', '', '8'),
(23, 'Bubur Kentang dan Salmon', '1. 100 gr kentang, kupas dan kukus\r\n2. 50 gr salmon\r\n3. 1 ikat bayam\r\n4. Keju parut secukupnya\r\n5. 1 sdm mentega tawar\r\n6. 100 ml susu cair/ASIP\r\n', '1.	Haluskan kentang kukus kemudian letakkan ke dalam panci.\r\n2.	Tuang susu cair/ASIP, masak dengan api kecil hingga mengental.\r\n3.	Panggang salmon dengan mentega tawar hingga matang, lalu suwir-suwir kecil.\r\n4.	Tuang kentang ke dalam wadah, taburkan suwiran salmon dan keju parut.\r\n5.	Bubur kentang salmon siap disantap.\r\n\r\nKentang sebagai sumber karbohidrat dan salmon yang kaya omega 3 memberikan manfaat untuk otak bayi. Karena memiliki rasa yang gurih dan lezat, dijamin bayi  akan sangat menyukai menu MPASI 8 bulan ini.\r\n', '', '8'),
(24, 'Nasi Tim Daging Cincang dan Sayuran', '1. 100 gram beras putih, cuci bersih\r\n2. 50 gram daging sapi cincang\r\n3. 1 ikat sawi sendok, cincang halus\r\n4. 1 buah bawang putih, cincang halus\r\n5. 1 sdm mentega tawar\r\n', '1.	Rebus beras putih dengan air hingga lembut dengan api kecil. Aduk-aduk agar tidak hangus.\r\n2.	Tumis daging sapi dengan mentega tawar, bawang cincang, dan sawi cincang.\r\n3.	Setelah beras mulai lembek, campurkan tumisan daging lalu aduk rata.\r\n4.	Tuang dalam wadah, sajikan selagi hangat.\r\n\r\nTekstur daging sapi yang cenderung kasar mungkin bagi beberapa bayi akan kesulitan untuk menelannya. Ibu bisa mencincangnya lebih halus lagi agar mudah dikunyah oleh bayi.\r\n', '', '8'),
(25, 'Bubur Tim Hati ayam dan Wortel', '1. 2 sdm beras\r\n2. 1/2 potong hati ayam\r\n3. 25 gr daging giling ayam\r\n4. 1/2 labu siam\r\n5. 3 buah baby carrots\r\n6. 1/2 daun bawang\r\n7. 1/2 siung bawang putih\r\n8. 300 ml kaldu ayam\r\n', '1.	Rendam beras selama empat jam, kemudian tumbuk tapi jangan sampai terlalu halus.\r\n2.	Kukus hati ayam dan daging giling ayam, lalu cincang.\r\n3.	Potong dadu kecil labu siam dan baby carrots.\r\n4.	Cincang halus bawang putih dan daun bawang, tumis.\r\n5.	Setelah harum, masukkan potongan labu siam, baby carrots, hati ayam, dan daging giling.\r\n6.	Masukkan beras, tuang kaldu ayam.\r\n7.	Masak hingga matang, sajikan ke si Kecil.', 'tepung_beras.jpg', '9'),
(26, 'Tim Kacang Merah dan Daging', '1. 20 gr beras, cuci bersih\r\n2. 625 ml air\r\n3. 25 gr dagung giling\r\n4. 10 gr kacang merah\r\n5. 25 gr buncis\r\n6. 25 gr tomat\r\n7. 1 sdm kecap manis\r\n8. 1 sdm santan encer\r\n', '1.	Rendam kacang merah minimal lima jam sebelum memasaknya terlebih dahulu, kemudian dicincang.\r\n2.	Rebus beras dengan air, daging giling, dan kecang merah sambil terus diaduk hingga jadi bubur.\r\n3.	Masukkan buncis dan tomat, masak hingga sayuran matang.\r\n4.	Tambahkan kecap manis dan santan, aduk rata.\r\n5.	Angkat, sajikan ke si Kecil.', '', '9'),
(27, 'Nugget Ayam Wortel', '1. 150 gr daging ayam giling\r\n2. 1 wortel ukuran sedang\r\n3. 3 siung bawang putih\r\n4. 1 sdm bawang merah goreng\r\n5. 1 sdm terigu\r\n6. Tepung roti secukupnya\r\n7. 1 butir telur ayam\r\n', '1.	Haluskan daging ayam, wortel, bawang putih, bawang merah goreng.\r\n2.	Tambahkan terigu pada adonan yang sudah dihaluskan.\r\n3.	Kocok telur, siapkan tepung roti untuk melapisi nugget.\r\n4.	Olesi tangan dengan tepung atau mentega supaya adonan nugget tidak menempel. Ambil adonan secukupnya, bentuk-bentuk, masukkan dalam telur, tiriskan kemudian balurkan pada tepung roti.\r\n5.	Lakukan langkah di atas hingga adonan habis.\r\n6.	Goreng setengah matang dengan api sedang, dinginkan kemudian masukkan dalam freezer.\r\n7.	Jika ingin digunakan, tinggal goreng lagi dan hangatkan, sajikan ke si Kecil.', '', '9'),
(28, 'Bubur Oat Labu Brokoli', '1. 5 sdm oatmeal\r\n2. 200 gr labu kuning atau kabocha\r\n3. 2 kuntum brokoli\r\n4. UB (unsalted butter) secukupnya\r\n5. 200 ml air\r\n', '1.	Potong kecil-kecil labu dan brokoli sampai sesuai selera.\r\n2.	Masak air hingga mendidih, masukkan labu kuning. Masak hingga setengah matang.\r\n3.	Masukkan oatmeal dan brokoli, masak hingga matang.\r\n4.	Dinginkan, sajikan ke si Kecil.', '', '9'),
(29, 'Omelet Nasi', '1. 4 sdm nasi putih matang\r\n2. 2 lembar daun sawi hijau\r\n3. 1 sdm daging sapi cincang\r\n4. 1/4 potong tahu putih\r\n5. 2 butir telur ayam\r\n6. 2 siung bawang putih\r\n7. 2 sdm UB (unsalted butter)\r\n', '1.	Rajang halus daun sawi, dan hancurkan potongan tahu.\r\n2.	Cincang halus bawang putih.\r\n3.	Campurkan semua bahan jadi satu, kecuali UB.\r\n4.	Siapkan teflon panas yang sudah dilapisi UB, dadar campuran bahan sampai matang.\r\n5.	Sajikan ke si Kecil.', '', '9'),
(30, 'Tim Telur Brokoli', '1. 1 butir telur ayam kampung\r\n2. 2 kuntum brokoli\r\n3. 1/2 sdt minyak zaitun\r\n4. 4-6 sdm air panas\r\n', '1.	Cuci bersih brokoli dan kukus sampai matang. Potong kecil-kecil dan buang batangnya.\r\n2.	Pecahkan telur di wadah tahan panas, kocok sebentar dan campurkan minyak zaitun.\r\n3.	Campurkan potongan brokoli, kocok kembali.\r\n4.	Tambahkan 4-6sdm air panas (tergantung besar telur) sambil dikocok.\r\n5.	Kukus telur selama 5-10 menit. Jangan terlalu lama nanti telur jadi keras.', '', '9'),
(31, 'Nasi Telur Puyuh', '1. 4 sdm nasi putih matang\r\n2. 1/2 wortel\r\n3. 1/2 tempe\r\n4. 1 butir telur puyuh\r\n5. 1 sdm UB (unsalted butter)\r\n6. 1 siung bawang putih\r\n', '1.	Rajang halus bawang putih, iris kecil-kecil wortel dan tempe.\r\n2.	Tumis bawang putih dengan UB, kemudian masukkan irisan tempe dan wortel. Masak hingga matang.\r\n3.	Masukkan telur puyuh sambil langsung diorak-arik.\r\n4.	Angkat dan dinginkan, baru campurkan dengan nasi.\r\n5.	Bentuk bola-bola kecil sesuai keinginan, sajikan ke si Kecil.', '', '9'),
(32, 'Bubur Tuna Sayur', '1. 3 sdm nasi matang\r\n2. 2 potong dadu tuna beku (bisa diganti dengan ikan lainnya)\r\n3. 1/2 wortel\r\n4. 2 batang baby buncis\r\n5. 1 keju\r\n6. 1 siung bawang putih\r\n7. Jeruk nipis secukupnya\r\n8. 1 daun salam\r\n9. 1 sdm unsalted butter\r\n', '1.	Rajang tuna dengan jeruk nipis selama 10 menit.\r\n2.	Rebus nasi dengan daun salam sampai nasi lembek, masukkan keju.\r\n3.	Masukkan baby buncis dan wortel yang sudah dipotong kecil-kecil.\r\n4.	Cincang halus bawang putih, tumis dengan UB hingga harum.\r\n5.	Masukkan tuna, masak hingga matang.\r\n6.	Campurkan tumisan tuna ke bubur, aduk hingga mengental.\r\n7.	Sajikan selagi hangat ke si Kecil.', '', '9'),
(33, 'Brokoli, Kembang Kol, Keju', '1. 125 gram kembang kol, dipotong kecil-kecil sesuai ukuran yang aman untuk anak\r\n2. 125 gram brokoli, dipotong kecil-kecil sesuai ukuran yang aman untuk anak.\r\n3. 1 sendok makan mentega tanpa garam (unsalted butter)\r\n4. 1 sendok makan tepung terigu\r\n5. 125 ml susu atau lebih\r\n6. 60 gram keju cheddar putih untuk bayi\r\n', '•	Rebus sayuran hingga hingga lembut selama 3-5 menit.\r\n•	Panaskan oven hingga mencapai suhu 190°C.\r\n•	Siapkan mangkuk tahan panas dan olesi dengan mentega.\r\n•	Susun sayuran yang sudah direbus di mangkuk.\r\n•	Buat saus keju dengan memanaskan mentega dengan panci hingga mencair.\r\n•	Masukkan tepung terigu ke dalam panci sambil terus diaduk.\r\n•	Biarkan hingga sedikit mendidih dan masukkan susu sedikit demi sedikit.\r\n•	Masukkan parutan keju dan biarkan hingga meleleh.\r\n•	Tuang saus keju ke mangkuk tahan panas dan masukkan mangkuk ke oven\r\n•	Panggang selama 15 menit atau hingga berwarna kecokelatan.', '', '10'),
(34, 'Nasi, Kacang Polong, Wortel dan Telur', '1. 1 sendok teh minyak zaitun\r\n2. 2 sendok makan wortel yang sudah diparut\r\n3. 2 sendok makan kacang polong beku\r\n4. 74 gram nasi\r\n5. 1 butir telur yang sudah dikocok\r\n', '•	Panaskan minyak zaitun di panci di atas api sedang.\r\n•	Lalu tambahkan wortel dan dan masak hingga lunak, selama kurang lebih selama 3 menit.\r\n•	Tambahkan kacang polong dan 2 sendok makan air, tumis hingga lunak.\r\n•	Masukkan nasi lalu telur dan aduk hingga semua bahan menyatu dan telur matang sempurna.', '', '10'),
(35, 'Makaroni, Bayam dan Keju', '1. 60 gram makaroni\r\n2. 1 sendok teh minyak zaitun\r\n3. 30 gram bayam\r\n4. 75 gram keju khusus bayi\r\n5. 1 sendok teh parutan kulit jeruk\r\n', '•	Masak makaroni hingga matang.\r\n•	Setelah itu, siapkan wajan dan panaskan minyak zaitun di atas api sedang.\r\n•	Masukkan bayam, masak hingga layu dan lunak.\r\n•	Lalu, sisihkan bayam dan cincang halus.\r\n•	Masukkan pasta, potongan bayam, dan keju ke dalam mangkuk, aduk rata\r\n•	MPASI 10 bulan ini siap dihidangkan', '', '10'),
(36, 'Telur Orak Arik dengan Alpukat dan Telur', '1. 1 butir telur\r\n2. 1 sendok teh air\r\n3. 2 sendok makan tomat dicincang dadu\r\n4. 1 sendok teh minyak zaitun\r\n5. ¼ buah alpukat dicincang dadu\r\n', '•	Siapkan mangkuk kecil, masukkan semua bahan kecuali minyak zaitun dan alpukat.\r\n•	Panaskan minyak zaitun dengan api sedang.\r\n•	Tuang campuran telur, tomat, ke panci berisi minyak zaitun yang telah dipanaskan.\r\n•	Masak dengan api sedang.\r\n•	Lalu, setelah telur mulai matang, masukkan alpukat dan tumis sebentar. Sajikan saat sudah sedikit dingin.', '', '10'),
(37, 'Ayam Kecap', 'Bahan\r\n1. 80 g daging ayam\r\n\r\nBumbu\r\n1. Bawang bombay\r\n2. Bawang putih\r\n3. Bawang merah\r\n4. 1,5 sdm Minyak canola\r\n5. 1/4 sdt kecap\r\n', '•	rebus ayam sampai empuk\r\n•	cincang ayam\r\n•	tumis bawang bombay, bawang merah, bawang putih yang telah dicincang sampai harum\r\n•	masukkan ayam tumis sebentar\r\n•	tambahkan kaldu ayam/ air\r\n•	tambahkan kecap dan garam sedikit\r\n•	masak sampai mendidih\r\n•	sesuaikan tekstur lalu sajikan', '', '10'),
(38, 'Tim Telur Brokoli', '1. 1 butir telur ayam kampung\r\n2. 50 gram brokoli segar\r\n3. 3 mill minyak zaitun\r\n4. 25 mill air panas\r\n', '1.	Sebagai langkah pertamanya, silakan Anda ambil brokoli lalu cuci bersih\r\n2.	Setelah itu, kukus brokoli sampai matang.\r\n3.	Apabila brokolinya sudah matang, potong kecil-kecil dan buang bagian batangnya.\r\n4.	Pecahkan telur dan letakkan dalam wadah tahan panas.\r\n5.	Kocok telurnya sebentar saja, lalu campur dengan minyak zaitun.\r\n6.	Campurkan brokoli yang sudah dipotong kecil tadi, kemudian kocok kembali.\r\n7.	Tuangkan air panas sambil terus dikocok.\r\n8.	Kukus telur sampai matang. Waktu yang dibutuhkan untuk mengukus telur, yakni sekitar 5 - 10 menit.', '', '10'),
(39, 'Nasi Tomat Keju Ayam (Untuk 2 Posi)', '1. 3 sdm beras, cuci bersih\r\n2. 1 bh tomat merah, buang biji potong-potong\r\n3. 1 siung bawang putih, cincang\r\n4. 1 sdm bawang bombay cincang\r\n5. 1-2 sdm daging ayam cincang\r\n6. Keju parut secukupnya\r\n7. Air kaldu secukupnya\r\n8. Minyak utk menumis\r\n', '1. Panaskan minyak, tumis bawang putih dan bawang bombay sampai harum\r\n2. Masukkan daging ayam cincang, masak sampai berubah warna.\r\n3. Tambahkan tomat dan sedikit air kaldu. Masak sampai tomat hancur\r\n4. Masukkan beras dan air kaldu. Masak sampai menjadi nasi aron yg lembek\r\n5. Terakhir masukkan keju parut, aduk rata. Sisihkan kulit tomat.\r\n6. Taruh nasi aron di wadah tahan panas. Kukus selama selama 20 menit.\r\n', '', '10'),
(40, 'Paddas Porridge dengan Slow Cooker versi MPASI', 'Bahan:\r\n1.	4 sdm beras\r\n2.	2 sdm daging sapi cincang\r\n3.	800 ml air kaldu ayam (bisa menggunakan air biasa)\r\n4.	1 sdm wortel potong dadu kecil\r\n5.	1 sdm zucchini potong dadu kecil\r\n6.	1 batang daun bawang, rajang kasar\r\n\r\nBumbu: \r\n1.	1/2 sdm minyak untuk menumis\r\n2.	1 sdm bawang bombay cincang\r\n3.	1 siung bawang putih, cincang halus\r\n4.	1 lembar daun jeruk, sobek kasar bagian tulang tengahnya\r\n5.	1 batang serai, geprek\r\n6.	1 ruas jari jahe, gerek\r\n7.	garam, gula pasir, merica bubuk  secukupnya\r\n', '1.	cuci bersih, masukkan beras ke dalam panci slow cooker. Sisihkan.\r\n2.	panaskan minyak dan tumis bawang bombay hingga harum. Masukkan bawang putih, daun jeruk, jahe dan serai, aduk dan tumis hingga harum. \r\n3.	Masukkan potongan daging sapi, Masak sampai daging berubah warna. Matikan kompor.\r\n4.	Tuangkan tumisan ke dalam panci berisi beras. Masukkan kaldu dan aduk rata. \r\n5.	Tutup panci dan masak dengan posisi high selama 2 – 3 jam atau low selama 4 jam-an. \r\n6.	Jika bubur matang, masukkan semua sayuran, garam, gula pasir dan merica bubuk. Aduk rata dan lanjutkan memasak selama 1 jam hingga sayuran menjadi empuk.\r\n7.	Angkat jahe, serai, dan daun jeruk. Sajikan hangat\r\n\r\nNote:\r\n•	Untuk dibawah 1 tahun, garam, gula, dan merica di skip. Karena bubur sudah gurih dari tumisan daging dan kaldu\r\n•	Sayur bisa disesuaikan dengan selera masing-masing\r\n•	Sayur bisa diparut untuk anak dibawah 1 tahun\r\n•	Bisa dimasak pakai panci biasa\r\n', '', '10'),
(41, 'Makaroni Siram Brokoli', '1.	3 sdm makaroni, rebus sampai empuk. Potong-potong jika baby belum bisa makan 1 buah makaroni utuh\r\n2.	1 sdm bawang bombay cincang\r\n3.	1 sdm daging cincang\r\n4.	2 sdm brokoli\r\n5.	1 sdm tepung terigu\r\n6.	80 ml air\r\n7.	Garam dan merica secukupnya (<1y skip)\r\n8.	Keju parut untuk taburan\r\n9.	1 sdm minyak utk menumis', '1.	Rebus makaroni. Sisihkan\r\n2.	Tumis bawang bombay sampai harus, masukkan daging giling, masak sampai daging matang.\r\n3.	Tuang tepung terigu, aduk cepat. Tambahkan air\r\n4.	Masukkan brokoli, garam, dan merica. Masak sampai brokoli matang\r\n5.	Masukkan makaroni, aduk sebentar. Angkat\r\n6.	Taburi keju di atasnya', '', '10');

-- --------------------------------------------------------

--
-- Table structure for table `mpasi_news`
--

CREATE TABLE `mpasi_news` (
  `id_news` int(5) NOT NULL,
  `judul_news` text NOT NULL,
  `isi_news` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mpasi_news`
--

INSERT INTO `mpasi_news` (`id_news`, `judul_news`, `isi_news`) VALUES
(1011, 'Pentingnya MP-ASI', 'Selamat! Bayi Anda telah lulus masa Asi (air susu ibu) eksklusif. Setelah sela 6 bulan usia pertamanya tanpa tambahan minuman apa pun, termasuk madu dan sebagainya, karena dia memang tidak memerlukannya- kini dia perlu makanan pendamping ASI (MP-ASI).  Pendamping?  Ya, \"pendamping\", karena usia 6-9 bulan, ASI sedapat mungkin masih diberikan sebab masih dapat memenuhi kebutuhan zat gizi bayi hingga 80%.  Jadi boleh dibilang bayi masih belajar makan makanan padat selain memang membutuhkan zat besi dan seng (zinc) dari makanan, karena kandungan zat ini dalam ASI sudah tidak memadai lagi bagi kebutuhan tumbuh kembang bayi.  Catatan Badan Kesehatan Dunia WHO tahun 2008 menunjukkan, 40% di dunia mengalami anemia defisiensi (kekurangan) zat besi.  Akibatnya, anak dapat mengalami gangguan perkembangan, kecerdasan lain, karena zat besi yang diperlukan bagi selubung sel saraf.  Mengingat akibat kekurangan zat besi tidak dapat mencegah, maka pencegahan pencegahan tindakan yang terbaik'),
(1012, 'Piramida Gizi Seimbang', 'Di Indonesia, piramida gizi seimbang digambarrkan dalam bentuk tumpeng, bentuk makanan khas masyarakat kita. Penjabaran dari gizi seimbang ini menggambarkan pembagian gizi per hari.  Selain tumpeng, visualisasi gizi seimbang yang digambarkan dalam bentuk \"Piring Makanku\" sebagai panduan sekali makan, serta kebiasaan cuci tangan sebelum makan. Pada praktiknya, berikan porsi menu gizi seimbang kepada bayi yang agak berbeda.  Karena bayi masih banyak mengonsumsi ASI untuk memenuhi sebagian besar kebutuhan tubuh, selain fungsi pencernaan pun belum optimal.  Itu berkembang MP-ASI diperkenalkan secara bertahap mulai murni (makanan lembut) hingga semakin kasar teksturnya, porsinya bertambah, dan kian variatif bahan makanannya.'),
(1014, 'Usia 6-7 BUlan', 'Pure atau makanan ekstra lembut adalah tekstur yang baru bisa diterima bayi usia ini. Mulailah dengan pemberian makanan yang mengandung zat-zat gizi yang turun atau bahkan tidak ada pada ASI, seperti zat besi, zinc, protein, dan lemak. Apalagi mengingat bayi dan anak usia balita cenderung mengalami anemia defisiensi zat besi.'),
(1015, 'Usia 7-9 Bulan', 'Porsi makanan bayi di usia 7-8 bulan bisa mulai ditambah menjadi 4-5 sendok makan untuk sekali makan, dan hingga usia 9 bulan bisa mencapai 8 sendok makan.  Tekstur makanannya pun secara bertahap bisa lebih kasar.  Di usia 8-9 bulan bisa diberikan makanan halus yang tak perlu disaring lagi. Tambahkan juga sumber lemak seperti santan dan minyak biji bunga matahari atau kanola. Selain menambah energi, lemak juga memberikan rasa gurih serta mempertinggi penyerapan yang larut dalam lemak, yaitu vitamin A, D, E dan K. Bayi membutuhkan cukup lemak untuk tumbuh kembang otaknya. '),
(1016, 'Usia 9-12 Bulan', 'Kini organ pencernaan bayi sudah bisa menerima makanan dengan tekstur lebih kasar lagi, misalnya nasi tim lembek dengan ikan gabus dan wortel serta buncis cincang.  Porsinya pun bisa ditingkatkan secara bertahap menjadi satu mangkuk kecil. Makanan selingan seperti aneka camilan sehat, biskui bubur kacang hijau, dan olahan buah, juga bisa mulai diberikan.  Bayi usia 12 bulan sudah dapat mengonsumsi makanan keluarga, tidak berbumbu tajam, terlalu pedas dan asam.'),
(1017, '6 Tanda Bayi Siap Makan', '1. Berusia 6 bulan ke atas.  \r\n2. Bisa duduk dengan bantuan yang sangat sedikit.  \r\n3. Bisa berkepala.  \r\n4. Membuka mulutnya saat ditawari makanan.  \r\n5. Dapat memutar menolak makanan.  \r\n6. Mampu mengambil makanan dari sendok dan larinya.\r\n'),
(1018, 'Pengganti Air Susu Ibu (PASI', 'Pada kondisi di mana ibu sakit keras atau ada indikasi medis bahwa ibu tidak dapat memberikan ASI, maka kepada bayi yang diberikan Pengganti Air Susu Ibu (PASI). \r\nPASI adalah susu formula yang dibuat dari susu sapi yang kandungan zat gizinya sudah diubah sehingga sesuai dengan kebutuhan bayi selama masa pertumbuhan dan perkembangannya.  Untuk mempersembahkan PASI yang paling tepat untuk bayi Anda, berkonsultasilah dengan dokter anak.\r\n'),
(1019, 'Penuhi Kebutuhan Gizinya', 'Bayi usia 6-18 bulan sedang menjalani proses tumbuh kembang otak yang cepat (brain growth spurts). masa perkembangan kritis keterampilan organ mulut bayi untuk mengunyah dan gelandangan. Itulah alasan pemenuhan gizi seimbang di masa ini sangat penting agar bayi dapat menjalani proses pertumbuhan dan perkembangan yang optimal.  Pemenuhan gizi seimbang di masa ini juga bisa mencegah bayi yang mengalami gangguan kesehatan di kemudian hari, antara penyakit kardiovaskular lain seperti stroke atau penyakit jantung.'),
(1020, 'MP-ASI Tidak tepat Waktu', 'Sejumlah risiko dapat terjadi bila pemberian MP_ASI tidak tepat waktu alias terlalu dini (kurang dari usia 4bulan) atau terlambat (lebih dari usia 7 bulan).\r\n\r\nRisiko MP-ASI terlalu dini:\r\n• Risiko diare dan dehidrasi, antara lain karena organ pencernaan bayi belum siap. \r\n• Produksi ASI menurun akibat bayi kenyang sehingga tidak mau menyusu.  • Risiko bayi tersedak.  Gangguan tumbuh kembang.  \r\n\r\nRisiko MP-ASI terlambat:\r\n• Potensial terjadi gagal tumbuh, mengingat zat gizi ASI tidak lagi mencukupi kebutuhan bayi.  • Defisiensi (kekurangan) zat besi. \r\n• Gangguan tumbuh kembang.\r\n'),
(1021, 'Bayi Vegetarian', 'Anda membesarkan bayi sebagai vegetarian dari lahir?  Cara sederhana untuk memastikan bahwa ia mendapatkan zat gizi yang cukup, tepat, dan selalu bergantung pada makanan, kacang-kacangan (khususnya kacang kedelai), susu dan / atau telur, buah dan sayuran.\r\nTahap makan MP-ASI bayi vegetarian pada acara sama dengan bayi pada umumnya yaitu dari porsi sedikit dan tekstur lembut ke porsi lebih banyak dan tekstur makin kasar hingga ke menu makanan keluarga usia satu tahun.\r\nBedanya, gantikan zat-zat gizi dari makanan hewani (seperti daging dan ikar ke makanan nabati (seperti kacang-kacangan) Zat gizi yang penting diperhatikan adalah protein, zat besi, kalsium, dan vitamin B12.\r\nDalam hal ini, sebaiknya konsultasikan pola makan bayi Anda pada dokter anak Anda, mengingat tumbuh kembang tiap bayi berbeda, termasuk bila diperlukan suplementasi.\r\n'),
(1022, 'Jangan Putus Asa', 'Setelah memasuki bulan kedua mencobakan MP-ASI kepada bayi, ternyata petualangan ini tidak semulus yang Anda harapkan.  Bayi selalu melepeh makanan- nya, menepis sendok yang akan disuapkan sehingga makanan berhamburan, bahkan rewel berkepanjangan.  Jangan putus asa, Bu!  Belum tentu bayi Anda tidak suka makanannya atau menolak makanan Anda.  Perilakunya tersebut sebenarnya merupakan refleks bayi. Dia tidak bermaksud menolak, apalagi membuang, makanan yang Anda tawarkan. \r\nBisa juga hal tersebut karena bayi memerlukan waktu untuk menerima jenis makanan baru. Penelitian menunjukkan bahwa setelah 8-10 kali dicobakan, umumnya bayi baru mau menerima jenis makanan baru tersebut. Dan, orang tua cenderung cepat menyerah.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE `rule` (
  `idrule` varchar(10) NOT NULL,
  `maka` varchar(25) NOT NULL,
  `daerah` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rule`
--

INSERT INTO `rule` (`idrule`, `maka`, `daerah`) VALUES
('R1', 'Gizi Normal ', 3),
('R2', 'Gizi Normal ', 3),
('R3', 'Gizi Kurang ', 2),
('R4', 'Gizi Lebih ', 4),
('R5', 'Gizi Lebih ', 4),
('R6', 'Gizi Lebih ', 4),
('R7', 'Gizi Lebih ', 4),
('R8', 'Gizi Lebih ', 4),
('R9', 'Obesitas', 5),
('R10', 'Gizi Kurang ', 2),
('R11', 'Gizi Kurang ', 2),
('R12', 'Gizi Kurang ', 2),
('R13', 'Gizi Normal ', 3),
('R14', 'Gizi Normal ', 3),
('R15', 'Gizi Normal ', 3),
('R16', 'Gizi Lebih ', 4),
('R17', 'Gizi Lebih ', 4),
('R18', 'Obesitas', 5),
('R19', 'Gizi Buruk ', 1),
('R20', 'Gizi Buruk ', 1),
('R21', 'Gizi Normal ', 3),
('R22', 'Gizi Normal ', 3),
('R23', 'Gizi Normal ', 3),
('R24', 'Gizi Normal ', 3),
('R25', 'Gizi Lebih ', 4),
('R26', 'Gizi Lebih ', 4),
('R27', 'Obesitas', 5),
('R28', 'Gizi Kurang ', 2),
('R29', 'Gizi Kurang ', 2),
('R30', 'Gizi Kurang ', 2),
('R31', 'Gizi Normal ', 3),
('R32', 'Gizi Normal ', 3),
('R33', 'Gizi Normal ', 3),
('R34', 'Gizi Lebih ', 4),
('R35', 'Gizi Lebih ', 4),
('R36', 'Gizi Normal ', 3),
('R37', 'Gizi Buruk ', 1),
('R38', 'Gizi Buruk ', 1),
('R39', 'Gizi Buruk ', 1),
('R40', 'Gizi Kurang ', 2),
('R41', 'Gizi Kurang ', 2),
('R42', 'Gizi Kurang ', 2),
('R43', 'Gizi Lebih ', 4),
('R44', 'Gizi Lebih ', 4),
('R45', 'Gizi Normal ', 3);

-- --------------------------------------------------------

--
-- Table structure for table `rule1`
--

CREATE TABLE `rule1` (
  `idrule` varchar(10) NOT NULL,
  `idvariabel` int(3) NOT NULL,
  `rule1` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rule1`
--

INSERT INTO `rule1` (`idrule`, `idvariabel`, `rule1`) VALUES
('R1', 1, 'Tahap 1'),
('R1', 2, 'Kurang Berat'),
('R1', 3, 'Pendek'),
('R2', 1, 'Tahap 1'),
('R2', 2, 'Kurang Berat'),
('R2', 3, 'Normal'),
('R3', 1, 'Tahap 1'),
('R3', 2, 'Kurang Berat'),
('R3', 3, 'Tinggi'),
('R4', 1, 'Tahap 1'),
('R4', 2, 'Normal '),
('R4', 3, 'Pendek'),
('R5', 1, 'Tahap 1'),
('R5', 2, 'Normal '),
('R5', 3, 'Normal'),
('R6', 1, 'Tahap 1'),
('R6', 2, 'Normal '),
('R6', 3, 'Tinggi'),
('R7', 1, 'Tahap 1'),
('R7', 2, 'Berat lebih'),
('R7', 3, 'Pendek'),
('R8', 1, 'Tahap 1'),
('R8', 2, 'Berat lebih'),
('R8', 3, 'Normal'),
('R9', 1, 'Tahap 1'),
('R9', 2, 'Berat lebih'),
('R9', 3, 'Tinggi'),
('R10', 1, 'Tahap 2'),
('R10', 2, 'Kurang Berat'),
('R10', 3, 'Pendek'),
('R11', 1, 'Tahap 2'),
('R11', 2, 'Kurang Berat'),
('R11', 3, 'Normal'),
('R12', 1, 'Tahap 2'),
('R12', 2, 'Kurang Berat'),
('R12', 3, 'Tinggi'),
('R13', 1, 'Tahap 2'),
('R13', 2, 'Normal '),
('R13', 3, 'Pendek'),
('R14', 1, 'Tahap 2'),
('R14', 2, 'Normal '),
('R14', 3, 'Normal'),
('R15', 1, 'Tahap 2'),
('R15', 2, 'Normal '),
('R15', 3, 'Tinggi'),
('R16', 1, 'Tahap 2'),
('R16', 2, 'Berat lebih'),
('R16', 3, 'Pendek'),
('R17', 1, 'Tahap 2'),
('R17', 2, 'Berat lebih'),
('R17', 3, 'Normal'),
('R18', 1, 'Tahap 2'),
('R18', 2, 'Berat lebih'),
('R18', 3, 'Tinggi'),
('R19', 3, 'Pendek'),
('R19', 2, 'Kurang Berat'),
('R19', 1, 'Tahap 3'),
('R20', 1, 'Tahap 3'),
('R20', 2, 'Kurang Berat'),
('R20', 3, 'Normal'),
('R21', 1, 'Tahap 3'),
('R21', 2, 'Kurang Berat'),
('R21', 3, 'Tinggi'),
('R22', 1, 'Tahap 3'),
('R22', 2, 'Normal '),
('R22', 3, 'Pendek'),
('R23', 1, 'Tahap 3'),
('R23', 2, 'Normal '),
('R23', 3, 'Normal'),
('R24', 1, 'Tahap 3'),
('R24', 2, 'Normal '),
('R24', 3, 'Tinggi'),
('R25', 3, 'Pendek'),
('R25', 2, 'Berat lebih'),
('R25', 1, 'Tahap 3'),
('R26', 1, 'Tahap 3'),
('R26', 2, 'Berat lebih'),
('R26', 3, 'Normal'),
('R27', 1, 'Tahap 3'),
('R27', 2, 'Berat lebih'),
('R27', 3, 'Tinggi'),
('R28', 1, 'Tahap 4'),
('R28', 2, 'Kurang Berat'),
('R28', 3, 'Pendek'),
('R29', 1, 'Tahap 4'),
('R29', 2, 'Kurang Berat'),
('R29', 3, 'Normal'),
('R30', 1, 'Tahap 4'),
('R30', 2, 'Kurang Berat'),
('R30', 3, 'Tinggi'),
('R31', 1, 'Tahap 4'),
('R31', 2, 'Normal '),
('R31', 3, 'Pendek'),
('R32', 1, 'Tahap 4'),
('R32', 2, 'Normal '),
('R32', 3, 'Normal'),
('R33', 1, 'Tahap 4'),
('R33', 2, 'Normal '),
('R33', 3, 'Tinggi'),
('R34', 1, 'Tahap 4'),
('R34', 2, 'Berat lebih'),
('R34', 3, 'Pendek'),
('R35', 1, 'Tahap 4'),
('R35', 2, 'Berat lebih'),
('R35', 3, 'Normal'),
('R36', 1, 'Tahap 4'),
('R36', 2, 'Berat lebih'),
('R36', 3, 'Tinggi'),
('R37', 1, 'Tahap 5'),
('R37', 2, 'Kurang Berat'),
('R37', 3, 'Pendek'),
('R38', 1, 'Tahap 5'),
('R38', 2, 'Kurang Berat'),
('R38', 3, 'Normal'),
('R39', 2, 'Kurang Berat'),
('R39', 1, 'Tahap 5'),
('R39', 3, 'Tinggi'),
('R40', 1, 'Tahap 5'),
('R40', 2, 'Normal '),
('R40', 3, 'Pendek'),
('R41', 1, 'Tahap 5'),
('R41', 2, 'Normal '),
('R41', 3, 'Normal'),
('R42', 1, 'Tahap 5'),
('R42', 2, 'Normal '),
('R42', 3, 'Tinggi'),
('R43', 1, 'Tahap 5'),
('R43', 2, 'Berat lebih'),
('R43', 3, 'Pendek'),
('R44', 1, 'Tahap 5'),
('R44', 2, 'Berat lebih'),
('R44', 3, 'Normal'),
('R45', 1, 'Tahap 5'),
('R45', 2, 'Berat lebih'),
('R45', 3, 'Tinggi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama_user` text NOT NULL,
  `username` varchar(10) NOT NULL,
  `pass_user` varchar(256) NOT NULL,
  `jenis_kelamin` varchar(3) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `berat_badan_kelahiran` varchar(5) NOT NULL,
  `tinggi_badan_kelahiran` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `variabel`
--

CREATE TABLE `variabel` (
  `idvariabel` int(3) NOT NULL,
  `variabel` varchar(100) NOT NULL,
  `nilai1` varchar(10) NOT NULL,
  `nilai11` varchar(10) NOT NULL,
  `nilai2` varchar(10) NOT NULL,
  `nilai22` varchar(10) NOT NULL,
  `nilai3` varchar(10) NOT NULL,
  `nilai33` varchar(10) NOT NULL,
  `nilai4` varchar(10) DEFAULT NULL,
  `nilai44` varchar(10) DEFAULT NULL,
  `nilai5` varchar(10) DEFAULT NULL,
  `nilai55` varchar(10) DEFAULT NULL,
  `atr1` varchar(30) NOT NULL,
  `atr2` varchar(30) NOT NULL,
  `atr3` varchar(30) NOT NULL,
  `atr4` varchar(30) DEFAULT NULL,
  `atr5` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `variabel`
--

INSERT INTO `variabel` (`idvariabel`, `variabel`, `nilai1`, `nilai11`, `nilai2`, `nilai22`, `nilai3`, `nilai33`, `nilai4`, `nilai44`, `nilai5`, `nilai55`, `atr1`, `atr2`, `atr3`, `atr4`, `atr5`) VALUES
(1, 'Umur', '0', '12', '6', '24', '12', '36', '24', '48', '36', '60', 'Tahap 1', 'Tahap 2', 'Tahap 3', 'Tahap 4', 'Tahap 5'),
(2, 'Berat Badan', '0', '7', '7', '19', '12', '26', '', '', '', '', 'Kurang Berat', 'Normal ', 'Berat lebih', '', ''),
(3, 'Tinggi Badan', '0', '49', '49', '101', '75', '124', '', '', '', '', 'Pendek', 'Normal', 'Tinggi', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `var_output`
--

CREATE TABLE `var_output` (
  `nilai1` varchar(10) NOT NULL,
  `nilai11` varchar(10) NOT NULL,
  `nilai2` varchar(10) NOT NULL,
  `nilai22` varchar(10) NOT NULL,
  `nilai3` varchar(10) NOT NULL,
  `nilai33` varchar(10) NOT NULL,
  `nilai4` varchar(10) NOT NULL,
  `nilai44` varchar(10) NOT NULL,
  `nilai5` varchar(10) NOT NULL,
  `nilai55` varchar(10) NOT NULL,
  `atr1` varchar(30) NOT NULL,
  `atr2` varchar(30) NOT NULL,
  `atr3` varchar(30) NOT NULL,
  `atr4` varchar(30) NOT NULL,
  `atr5` varchar(30) NOT NULL,
  `kendali1` text DEFAULT NULL,
  `kendali2` text DEFAULT NULL,
  `kendali3` text DEFAULT NULL,
  `kendali4` text DEFAULT NULL,
  `kendali5` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `var_output`
--

INSERT INTO `var_output` (`nilai1`, `nilai11`, `nilai2`, `nilai22`, `nilai3`, `nilai33`, `nilai4`, `nilai44`, `nilai5`, `nilai55`, `atr1`, `atr2`, `atr3`, `atr4`, `atr5`, `kendali1`, `kendali2`, `kendali3`, `kendali4`, `kendali5`) VALUES
('0', '48', '43', '53', '48', '70', '53', '83', '70', '123', 'Gizi Buruk ', 'Gizi Kurang ', 'Gizi Normal ', 'Gizi Lebih ', 'Obesitas', 'Berikan ASI eksklusif \r\nFaktor ekonomi tidak selalu menjadi penyebab anak kekurangan gizi. Penyebab lainnya adalah anak tidak mendapatkan ASI. Tak heran jika umumnya anak mengalami kekurangan gizi pada usia 6 bulan ke atas. Oleh karena itu, agar anak tidak mengalami malnutrisi, memberi makanan tambahan sebagai pendamping ASI sangat penting. Misalnya, berilah anak bubur susu yang encer atau buah manis seperti pisang yang dihaluskan. \r\n', 'Perbanyak asupan kalori \r\nPenderita kurang gizi harus banyak mengkonsumsi kalori dalam bentuk karbohidrat, lemak, dan gula. Selain itu asupan mineral dan vitamin juga penting bagi penderita gizi buruk.', 'Jika ragu dengan kondisi gizi anak Anda, bawalah anak untuk diperiksakan ke dokter atau ke posyandu terdekat. ', 'Mengatasi gizi lebih ini, perlu perubahan sosial baik gaya hidup, perilaku makan dan penyiapan lingkungan yang kondusif. ', 'Gizi berlebih (obesitas) menjadi masalah serius bagi penduduk Indonesia, dan merupakan ancaman tersembunyi bagi masa depan anak. Kasus ini bukan saja menimpa golongan berpunya, tapi juga dialami masyarakat miskin di pedesaan dan perkotaan.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `defuzzy`
--
ALTER TABLE `defuzzy`
  ADD PRIMARY KEY (`id_defuzzy`);

--
-- Indexes for table `kalkulator_gizi`
--
ALTER TABLE `kalkulator_gizi`
  ADD PRIMARY KEY (`id_hitung`);

--
-- Indexes for table `kandungan_gizi_bahan_mpasi`
--
ALTER TABLE `kandungan_gizi_bahan_mpasi`
  ADD PRIMARY KEY (`id_bahan`);

--
-- Indexes for table `mpasi_menu`
--
ALTER TABLE `mpasi_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `mpasi_news`
--
ALTER TABLE `mpasi_news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`idrule`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `variabel`
--
ALTER TABLE `variabel`
  ADD PRIMARY KEY (`idvariabel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `defuzzy`
--
ALTER TABLE `defuzzy`
  MODIFY `id_defuzzy` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kalkulator_gizi`
--
ALTER TABLE `kalkulator_gizi`
  MODIFY `id_hitung` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kandungan_gizi_bahan_mpasi`
--
ALTER TABLE `kandungan_gizi_bahan_mpasi`
  MODIFY `id_bahan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `mpasi_menu`
--
ALTER TABLE `mpasi_menu`
  MODIFY `id_menu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `mpasi_news`
--
ALTER TABLE `mpasi_news`
  MODIFY `id_news` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1023;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `variabel`
--
ALTER TABLE `variabel`
  MODIFY `idvariabel` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
