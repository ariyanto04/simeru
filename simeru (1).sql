-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Feb 2021 pada 07.30
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simeru`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_admin`
--

CREATE TABLE `login_admin` (
  `no_induk` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login_admin`
--

INSERT INTO `login_admin` (`no_induk`, `password`) VALUES
('12345', 'Puji');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `no` int(55) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `status` varchar(55) NOT NULL,
  `ruangan` varchar(55) NOT NULL,
  `tanggal` varchar(55) NOT NULL,
  `lampiran` longblob NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `ket` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`no`, `nama`, `status`, `ruangan`, `tanggal`, `lampiran`, `deskripsi`, `ket`) VALUES
(111, 'Puji', 'Pengurus', 'Seminar', '4 februari', 0x4265726974612061636172612e706466, 'buataja casc', 'Diterima'),
(123, 'apik', 'DOSEN', 'Aula', '5 februari', 0x4c61706f72616e204b65726a61205072616b74656b20416e6472652054656761722e706466, 'fdadfaefaf', 'Diterima'),
(145, 'tita', 'Pengurus', 'Seminar', '7 februari', 0x4265726974612061636172612e706466, 'anfoweinfoke', 'Ditolak');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
