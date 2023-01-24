-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2021 pada 07.00
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onstore`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `idAdmin` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`email`, `password`, `idAdmin`, `nama`) VALUES
('fathanhidayatullah004@gmail.com', 'kosongempat04', 1, 'Fathan Hidayatullah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fforder`
--

CREATE TABLE `fforder` (
  `idorderFF` varchar(50) NOT NULL,
  `nickFF` varchar(50) NOT NULL,
  `idFF` varchar(50) NOT NULL,
  `orderFF` varchar(50) NOT NULL,
  `buktiFF` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mlorder`
--

CREATE TABLE `mlorder` (
  `idorderML` varchar(50) NOT NULL,
  `orderML` varchar(50) NOT NULL,
  `nickML` varchar(50) NOT NULL,
  `idSerML` varchar(50) NOT NULL,
  `buktiML` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ytorder`
--

CREATE TABLE `ytorder` (
  `idorderYT` varchar(50) NOT NULL,
  `orderYT` varchar(50) NOT NULL,
  `emailYT` varchar(50) NOT NULL,
  `buktiYT` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indeks untuk tabel `fforder`
--
ALTER TABLE `fforder`
  ADD PRIMARY KEY (`idorderFF`);

--
-- Indeks untuk tabel `mlorder`
--
ALTER TABLE `mlorder`
  ADD PRIMARY KEY (`idorderML`);

--
-- Indeks untuk tabel `ytorder`
--
ALTER TABLE `ytorder`
  ADD PRIMARY KEY (`idorderYT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
