-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Bulan Mei 2024 pada 07.07
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nim` varchar(12) DEFAULT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `foto_mahasiswa` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mahasiswa`, `nim`, `nama_mahasiswa`, `jenis_kelamin`, `fakultas`, `foto_mahasiswa`, `alamat`) VALUES
(28, '1234567', 'faris', 'Laki-laki', 'Teknik Informatika', '1234567.jpg', 'hdiushfiudshfiudhfiudshifdshfiudshiufhsifsidnisnd'),
(29, '123456', 'mefia', 'Perempuan', 'iuhda', '123456.jpg', 'adiofda'),
(30, '3211', 'faris', 'Laki-laki', 'djaoe', '3211.png', 'huiahfda'),
(31, '12334567', 'bayu', 'Laki-laki', 'gyudagf', '12334567.jpg', 'josafda'),
(33, '1237', 'faris', 'Laki-laki', 'sistem informasi', '1237.jpg', 'jsaoidfja'),
(34, '21432984732', 'ELNI', 'Perempuan', 'AJDOADN', '21432984732.jpg', 'unbara'),
(35, '093843208', 'elni2', 'Perempuan', 'oihjofds', '093843208.jpg', 'oiadjfoids'),
(36, '248094327', 'elni mefia', 'Perempuan', 'oidaoifdc', '248094327.jpg', 'ogan'),
(37, '398432798', 'farisachmad', 'Laki-laki', 'oiufdosa', '398432798.jpg', 'ijfesaoid'),
(38, '34879327', 'achmad', 'Laki-laki', 'oasdjoias', '34879327.jpg', 'oisadas'),
(39, '3982798427', 'oiesufoieu', 'Laki-laki', 'akuntansi', '3982798427.png', 'oiuoaiufa'),
(40, '327498732', 'oijdoie', 'Laki-laki', 'oiqejfdoiea', '327498732.png', 'oiaejdoiea');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
