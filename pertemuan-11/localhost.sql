-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2025 at 02:19 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pwd2025`
--
CREATE DATABASE IF NOT EXISTS `db_pwd2025` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_pwd2025`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tamu`
--

CREATE TABLE `tbl_tamu` (
  `cid` int(11) NOT NULL,
  `cnama` varchar(100) DEFAULT NULL,
  `cemail` varchar(100) DEFAULT NULL,
  `cpesan` text,
  `dcreated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tamu`
--

INSERT INTO `tbl_tamu` (`cid`, `cnama`, `cemail`, `cpesan`, `dcreated_at`) VALUES
(1, 'Yasutora Sado', 'Chado@gmail.com', '\"Semakin kompleks seseorang,semakin lemah mereka.\"- Yasutora Sado\r\n\"Hal yang kita sebut sekuatan itu dinamis, terus berubah.\"- Yasutora Sado\r\n\"benar sekali. Sangat penting. Mungkin Bahkan lebih penting daripada hidupku.\"- Yasutora Sado', '2025-12-15 13:57:35'),
(2, 'Sosuke Aizen', 'Aizenthegoat@gmail.com', '\"Sejak awal, tak seorang pun pernah berdiri di surga, bukan kau, bukan aku, bahkan para dewa. Namun, kekosongan yang tak tertahankan itu telah berakhir. Mulai sekarang... aku akan berdiri di surga.\", serta pandangannya bahwa \"Tidak ada yang namanya \'kebenaran\' atau \'kebohongan\' di dunia ini... Yang ada hanyalah fakta-fakta yang jelas dan nyata. Namun, semua makhluk... hanya mengakui \'fakta\' yang nyaman bagi mereka, dan menganggapnya sebagai \'kebenaran\'.\"- Sosuke Aizen', '2025-12-15 13:57:35'),
(3, 'El Primo', 'PrimoSlam@gmail.com', '\"Waktunya pertunjukan.\"\r\n\"El Primo!\"\r\n\"Demi penderitaan dan demi kemuliaan!\"\r\n\"El Primo, ada di sini.\"\r\n\"Pertunjukan harus terus berlanjut.\"\r\n\"Sin dolor, ¡no hay gloria!\"\r\n\"Adiós mundo cruel.\"\r\n- El Primo.', '2025-12-15 13:57:35'),
(23, 'wildan', 'wildan@gmail.com', 'poiuytreew', '2025-12-16 20:40:56'),
(24, 'wildan', 'wildan@gmail.com', 'poiuytoijh', '2025-12-16 21:02:37'),
(25, 'wildan', 'wildan@gmail.com', 'gdshhhhhfgsh', '2025-12-16 21:14:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
