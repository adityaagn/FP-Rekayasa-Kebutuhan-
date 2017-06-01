-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2017 at 04:08 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_kp`
--

CREATE TABLE `data_kp` (
  `id` int(11) NOT NULL,
  `NRP` varchar(15) NOT NULL,
  `Tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Jenis Berkas` varchar(50) NOT NULL,
  `Nama Berkas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kp`
--

INSERT INTO `data_kp` (`id`, `NRP`, `Tanggal`, `Jenis Berkas`, `Nama Berkas`) VALUES
(1, '5111100190', '2017-04-30 17:00:00', 'Bukti Terima Perusahaan', 'bukti.jpg'),
(2, '5111100190', '2017-05-12 11:23:11', 'Bukti Buku KP', 'BukuKP.jpg'),
(3, '5112100097', '2017-05-13 11:10:48', 'Bukti Perusahaan', 'bukti.jpg'),
(4, '5113100190', '2017-05-13 11:10:48', 'Bukti Perusahaan', 'bukti.jpg'),
(5, '5114100097', '2017-05-13 11:11:32', 'Bukti Perusahaan', 'bukti.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `NRP` varchar(15) NOT NULL,
  `Nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`NRP`, `Nama`) VALUES
('BR001', 'SEMINGGU MENGUASAI CODEIGNITER'),
('BR002', 'MEMBUAT WEB APLIKASI DENGAN PHP, MYSQLI DAN BOOSTR'),
('BR003', 'MEMBANGUN LAYANAN SMS ONLINE VIA SMS GATWAY'),
('BR004', 'TRIK AJAX JQUERYN DALAM PENGOLAHAN DATA 2'),
('BR005', 'video desainw eb ecomamarce'),
('BR001', 'SEMINGGU MENGUASAI CODEIGNITER'),
('BR002', 'MEMBUAT WEB APLIKASI DENGAN PHP, MYSQLI DAN BOOSTR'),
('BR003', 'MEMBANGUN LAYANAN SMS ONLINE VIA SMS GATWAY'),
('BR004', 'TRIK AJAX JQUERYN DALAM PENGOLAHAN DATA 2'),
('BR005', 'video desainw eb ecomamarce');

-- --------------------------------------------------------

--
-- Table structure for table `list_mahasiswa`
--

CREATE TABLE `list_mahasiswa` (
  `NRP` varchar(15) NOT NULL,
  `Nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_mahasiswa`
--

INSERT INTO `list_mahasiswa` (`NRP`, `Nama`) VALUES
('5111100190', 'Soni Dwi Kuncoro'),
('5111100159', 'Budi Santoso'),
('5112100097', 'Adi Winarno'),
('5112100152', 'Bagus Slamet'),
('5113100028', 'Daniswara'),
('5113100190', 'Aji Santoso'),
('5114100159', 'Aditya'),
('5114100097', 'Evan Dimas'),
('5114100152', 'Rudi Tabuti'),
('5115100028', 'Siti Nurbaya');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `Jabatan` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  `Nama_mhs` varchar(50) NOT NULL,
  `NRP` varchar(10) NOT NULL,
  `User` varchar(30) NOT NULL,
  `Pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`Jabatan`, `id`, `Nama_mhs`, `NRP`, `User`, `Pass`) VALUES
('admin', 1, 'Aditya Gunawan', '5114100167', 'agun', 'agun'),
('mahasiswa', 2, 'evan bangun', '5114100169', 'evan', 'evan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kp`
--
ALTER TABLE `data_kp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kp`
--
ALTER TABLE `data_kp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
