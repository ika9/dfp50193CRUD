-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2021 at 04:48 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `album`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenisalbum`
--

CREATE TABLE `jenisalbum` (
  `id_album` int(12) NOT NULL,
  `nama_album` varchar(100) NOT NULL,
  `harga_album` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenisalbum`
--

INSERT INTO `jenisalbum` (`id_album`, `nama_album`, `harga_album`) VALUES
(2, 'LY', 90),
(3, 'lilac', 150),
(4, 'Butter', 180),
(5, 'Permission To Dance', 210),
(6, 'Attacca', 170);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenisalbum`
--
ALTER TABLE `jenisalbum`
  ADD PRIMARY KEY (`id_album`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenisalbum`
--
ALTER TABLE `jenisalbum`
  MODIFY `id_album` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
