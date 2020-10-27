-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2020 at 05:56 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weblanjut`
--

-- --------------------------------------------------------

--
-- Table structure for table `datamahasiswa`
--

CREATE TABLE `datamahasiswa` (
  `id` int(100) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datamahasiswa`
--

INSERT INTO `datamahasiswa` (`id`, `nim`, `nama`) VALUES
(1, '2018071028', 'Evander Naufal Lasmanto'),
(3, '2018071030', 'Aviana Zhafira Rustandi'),
(5, '2018071002', 'Ananda Arya Pratama'),
(7, '2018071004', 'Rolando Imanuel'),
(8, '2018071005', 'Dzaky Athallah'),
(9, '2018071014', 'Rayhan Baihaqi'),
(10, '2018071025', 'Ananda Arta'),
(11, '2018071027', 'Fahdi Azhannu'),
(12, '2018071029', 'Akbar Murdani'),
(13, '2018071037', 'Alexander Mario'),
(14, '2018071038', 'Juliansyah'),
(16, '2018071098', 'Ragil'),
(21, '2018071099', 'Sunan Jiwo');

-- --------------------------------------------------------

--
-- Table structure for table `forminput`
--

CREATE TABLE `forminput` (
  `id` int(100) NOT NULL,
  `namadepan` varchar(30) NOT NULL,
  `namabelakang` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forminput`
--

INSERT INTO `forminput` (`id`, `namadepan`, `namabelakang`, `email`) VALUES
(1, 'admin', 'tew', 'evander20tangsel@gmail.com'),
(2, 'wew', 'tew', 'evander20tangsel@gmail.com'),
(3, 'wew', 'hahaha', 'shokuryoshop@gmail.com'),
(13, '', '', ''),
(14, 'wew', 'tew', 'elsacarinta@gmail.com'),
(15, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kodemk` varchar(10) NOT NULL,
  `namamk` varchar(50) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `sks` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`kodemk`, `namamk`, `kategori`, `sks`) VALUES
('INF101', 'Algoritma dan Pemrograman', 'MKMA', 3),
('INF102', 'Jaringan Komputer', 'MKMA', 3),
('INF103', 'Pemrograman Berorientasi Objek', 'MKMI', 3),
('INF104', 'Desain Web', 'MKMA', 3),
('INF105', 'Aljabar Linier', 'MKMI', 3),
('INF106', 'Sistem Basis Data', 'MKMA', 3),
('INF107', 'Statistika dan Probabilitas', 'MKMI', 3),
('INF108', 'Interaksi Manusia dan Komputer', 'MKMA', 3),
('INF202', 'Struktur Data', 'MKMA', 3),
('INF210', 'Komputer dan Masyarakat', 'MKMI', 2);

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(3) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(500) NOT NULL,
  `email` varchar(20) NOT NULL,
  `namaDepan` varchar(25) NOT NULL,
  `namaBelakang` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id`, `username`, `password`, `email`, `namaDepan`, `namaBelakang`) VALUES
(1, 'admin', '123', 'evander20tangsel@gma', 'admin', 'ku'),
(2, 'anto', '123', 'shokuryoshop@gmail.c', 'admin', 'hahaha'),
(3, 'anto', '', 'shokuryoshop@gmail.c', 'admin', 'hahaha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datamahasiswa`
--
ALTER TABLE `datamahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forminput`
--
ALTER TABLE `forminput`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kodemk`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datamahasiswa`
--
ALTER TABLE `datamahasiswa`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `forminput`
--
ALTER TABLE `forminput`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
