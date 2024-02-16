-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2024 at 06:53 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nama_dosen` varchar(40) NOT NULL,
  `matkul` varchar(15) NOT NULL,
  `NIP` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama_dosen`, `matkul`, `NIP`) VALUES
(1, 'Suratna', 'Matematika', 11223344);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(13) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `jenis_kelamin` enum('P','L') NOT NULL,
  `alamat` text NOT NULL,
  `id_mhs` int(11) NOT NULL,
  `level` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jurusan`, `jenis_kelamin`, `alamat`, `id_mhs`, `level`, `password`) VALUES
('1234', 'Yusuf', 'TEKNIK MESIN', 'L', 'Ngronggah', 1, 'admin', 'Tegar123'),
('1122', 'Jeco', 'FARMASI', 'L', 'Premulung', 35, 'user', 'jc123'),
('123', 'Arra', 'TEKNIK INFORMATIKA', 'L', '123', 36, 'user', '123'),
('123', 'Kukuh', 'TEKNIK ARSITEKTUR', 'L', 'Gentan', 37, 'user', '123'),
('12121323', 'Arrum', 'FARMASI', 'L', 'Klaten', 38, 'user', '123'),
('1223', 'Yusuf Tegar Ramadhan', 'TEKNIK KEDOKTERAN', 'L', 'SKH', 39, 'user', '123'),
('123', 'www', 'TEKNIK INFORMATIKA', 'L', 'solo', 40, 'user', 'com'),
('1192993838474', 'Kanra', 'TEKNIK INFORMATIKA', 'L', 'Timurnya jerman', 41, 'user', 'aknrahacks'),
('1111', 'tegarr', 'TEKNIK INFORMATIKA', 'L', 'hybucdy', 42, 'user', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id_matkul` int(11) NOT NULL,
  `nama_matkul` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD KEY `matkul` (`matkul`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
