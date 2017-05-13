-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13 Mei 2017 pada 13.12
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_informasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kp`
--

CREATE TABLE `data_kp` (
  `id` int(11) NOT NULL,
  `NRP` varchar(15) NOT NULL,
  `Tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Jenis Berkas` varchar(50) NOT NULL,
  `Nama Berkas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kp`
--

INSERT INTO `data_kp` (`id`, `NRP`, `Tanggal`, `Jenis Berkas`, `Nama Berkas`) VALUES
(1, '5111100190', '2017-04-30 17:00:00', 'Bukti Terima Perusahaan', 'bukti.jpg'),
(2, '5111100190', '2017-05-12 11:23:11', 'Bukti Buku KP', 'BukuKP.jpg'),
(3, '5112100097', '2017-05-13 11:10:48', 'Bukti Perusahaan', 'bukti.jpg'),
(4, '5113100190', '2017-05-13 11:10:48', 'Bukti Perusahaan', 'bukti.jpg'),
(5, '5114100097', '2017-05-13 11:11:32', 'Bukti Perusahaan', 'bukti.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kp`
--
ALTER TABLE `data_kp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kp`
--
ALTER TABLE `data_kp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
