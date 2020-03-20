-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Mar 2020 pada 20.41
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umkm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` int(4) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `USERNAME`, `PASSWORD`) VALUES
(1, 'lucas', 'lucas'),
(2, 'lucas', 'dc53fc4f621c80bdc2fa0329a6123708'),
(3, 'lucas12', 'lucas12'),
(4, 'lucas13', '7f315ad43864b34acca3e7aa2d5f18f0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_umkm`
--

CREATE TABLE `daftar_umkm` (
  `ID_UMKM` int(4) NOT NULL,
  `NAMA_USAHA` varchar(50) NOT NULL,
  `JENIS` char(10) NOT NULL,
  `OMSET` int(10) NOT NULL,
  `PEMILIK` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_umkm`
--

INSERT INTO `daftar_umkm` (`ID_UMKM`, `NAMA_USAHA`, `JENIS`, `OMSET`, `PEMILIK`) VALUES
(1, 'Ayam Geprek', 'Kuliner', 120000000, 'AndyDeni'),
(2, 'Toko Komputer', 'Teknologi', 500000000, 'Lucas Jacob'),
(3, 'Toko Buku', 'Pembelajar', 420000000, 'Edi Santoso'),
(10, 'Masuk kekeolah', 'Kuliner', 0, 'Abrim'),
(12, 'Mata Itu', 'Kuliner', 2000000, 'Aan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Indeks untuk tabel `daftar_umkm`
--
ALTER TABLE `daftar_umkm`
  ADD PRIMARY KEY (`ID_UMKM`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_ADMIN` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `daftar_umkm`
--
ALTER TABLE `daftar_umkm`
  MODIFY `ID_UMKM` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
