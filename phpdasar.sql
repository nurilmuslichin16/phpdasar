-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2019 at 03:53 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `jamtangan`
--

CREATE TABLE `jamtangan` (
  `id` int(11) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `warna` varchar(20) DEFAULT NULL,
  `merek` varchar(20) DEFAULT NULL,
  `ukuran` varchar(20) DEFAULT NULL,
  `gender` varchar(30) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jamtangan`
--

INSERT INTO `jamtangan` (`id`, `type`, `warna`, `merek`, `ukuran`, `gender`, `stok`, `gambar`) VALUES
(1, 'DG2095T', 'Merah', 'DIGITEC', '4,5 cm', 'UNISEX', 2, 'DG2095T_merah.jpg'),
(2, 'DG2094T', 'Hitam', 'DIGITEC', '5 cm', '', 0, 'DG2094T_hitam.jpg'),
(3, 'DG2094T', 'Hitam Gold', 'DIGITEC', '5 cm', 'MEN', 1, 'DG2094T_hitam_gold.jpg'),
(4, 'DG2095T', 'Hitam Gold', 'DIGITEC', '4,5 cm', '', 0, 'DG2095T_hitam_gold.jpg'),
(5, 'DG2059T', 'Biru', 'DIGITEC', '4,5 cm', '', 0, 'DG2059T_biru.jpg'),
(6, 'DG2059T', 'Gold', 'DIGITEC', '4,5 cm', 'UNISEX', 0, 'DG2059T_gold.jpg'),
(7, 'BGZ21083', 'Coklat', 'BREGENZ', '4 cm', '', 0, 'BGZ21083_coklat.jpg'),
(8, 'BGZ21083', 'Coklat Muda', 'BREGENZ', '4 cm', '', 0, 'BGZ21083_coklat_muda.jpg'),
(9, 'BGZ21083', 'Hitam', 'BREGENZ', '4 cm', '', 0, 'BGZ21083_hitam.jpg'),
(10, 'BGZ21083', 'Navy', 'BREGENZ', '4 cm', '', 0, 'BGZ21083_navy.jpg'),
(11, 'BGZ21083', 'Ungu', 'BREGENZ', '4 cm', '', 0, 'BGZ21083_ungu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$xrNZpdKzADNmcqBayB0x8.gzJNxNVhZ7PRm83LUMBoMF2RI8ynQg6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jamtangan`
--
ALTER TABLE `jamtangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jamtangan`
--
ALTER TABLE `jamtangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
