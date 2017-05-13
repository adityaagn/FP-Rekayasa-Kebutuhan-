-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13 Mei 2017 pada 13.14
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
-- Struktur dari tabel `list_mahasiswa`
--

CREATE TABLE `list_mahasiswa` (
  `NRP` varchar(15) NOT NULL,
  `Nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list_mahasiswa`
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
