-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2022 pada 16.51
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s_aktif`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tetala` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `nomer_surat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `nim`, `nama`, `alamat`, `tetala`, `jurusan`, `angkatan`, `semester`, `nomer_surat`) VALUES
(7, 22324245, 'rahman', 'sumenep', 'sumenep 10-04-99', 'informasi', 3, 2, 22),
(8, 2002310064, 'amir', 'lokasi', 'sumenep 09-09-1999', 'informatika', 1, 2, 8),
(9, 0, 'jv', 'vj', 'jv', 'vj', 0, 0, 0),
(10, 2525253, 'ncj', 'hxj', 'hxj', '3', 3, 3, 0),
(11, 6655678, 'agil', 'Lenteng ', 'lenteng 10-10-99', 'tidur', 8, 8, 0),
(12, 2191, 'ahaja', 'hhaha', 'hahuss', 'jajja', 4, 4, 0),
(13, 23231132, 'oyong', 'sumenep', 'sumenep 10-10-1999', 'sistem informasi', 3, 2, 0),
(14, 23231132, 'oyong', 'sumenep', 'sumenep 10-10-1999', 'sistem informasi', 3, 2, 11),
(15, 5543456, 'fausi', 'sumenep', 'rubaru 10-10-1999', 'INF', 4, 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
