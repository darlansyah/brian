-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2019 pada 12.20
-- Versi server: 10.3.15-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemadamkebakaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_user` int(11) NOT NULL,
  `id_profile` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_user`, `id_profile`, `username`, `password`, `level_user`) VALUES
(1, 0, 'bule', 'user123', 'user'),
(2, 0, 'bule', 'admin123', 'admin'),
(3, 1, 'bolang', 'admin123', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kejadian`
--

CREATE TABLE `kejadian` (
  `id_kejadian` int(11) NOT NULL,
  `id_masyarakat_pelapor` int(11) NOT NULL,
  `tanggal_waktu_kejadian` timestamp NOT NULL DEFAULT current_timestamp(),
  `longitude` double NOT NULL,
  `latitude` double NOT NULL,
  `deskripsi_kejadian` text NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kejadian`
--

INSERT INTO `kejadian` (`id_kejadian`, `id_masyarakat_pelapor`, `tanggal_waktu_kejadian`, `longitude`, `latitude`, `deskripsi_kejadian`, `gambar`) VALUES
(3, 1, '2019-06-30 11:42:17', -1234124, -123124, 'Kebakaran hebat', 'Cari coba'),
(4, 4, '2019-06-30 11:52:26', -1234124, -123124, 'Kebakaran Pasar', 'Cari coba');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat_pelapor`
--

CREATE TABLE `masyarakat_pelapor` (
  `id_masyarakat_pelapor` int(11) NOT NULL,
  `no_ktp` varchar(25) NOT NULL,
  `nama_masyarakat_pelapor` varchar(25) NOT NULL,
  `telp` varchar(25) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masyarakat_pelapor`
--

INSERT INTO `masyarakat_pelapor` (`id_masyarakat_pelapor`, `no_ktp`, `nama_masyarakat_pelapor`, `telp`, `alamat`, `username`, `pass`) VALUES
(1, '3216060502970008', 'Brian Chandra AB', '087705561080', 'Bekasi', 'brian', '123'),
(2, '08123419573923', 'Anas', '087786326762', 'Kalasan', 'anas', '123'),
(3, '852498234', 'Aditya PS', '87073658072365', 'Palembang', 'aditya', '123'),
(4, '1231525412', 'Rida Arsita', '087705561080', 'Gunung Sindur', 'rida', '123'),
(5, '1231525412', 'Darlan', '087705561080', 'kendari', 'darlan', 'darlan'),
(6, '1234', 'bolang', '0987', 'jekarta', 'bolang', 'bolang'),
(7, '', '', '', '', 'darlan', 'darlan'),
(8, '', '', '', '', 'bule', 'admin123'),
(9, '', '', '', '', 'bule', 'admin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `no_induk_pegawai` varchar(20) NOT NULL,
  `nama_petugas` varchar(25) NOT NULL,
  `id_pos` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `no_induk_pegawai`, `nama_petugas`, `id_pos`) VALUES
(1, '12345678', 'Brian Chandra Adji Bayu', ''),
(2, '12345678', 'Ismed Sofyan', '1'),
(3, '12345678', 'Budi Sudarsono', '1'),
(4, '12345678', 'Ponaryo Astaman', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pos`
--

CREATE TABLE `pos` (
  `id_pos` int(11) NOT NULL,
  `nama_pos` varchar(25) NOT NULL,
  `alamat_pos` varchar(255) NOT NULL,
  `longitude_pos` double NOT NULL,
  `latitude_pos` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pos`
--

INSERT INTO `pos` (`id_pos`, `nama_pos`, `alamat_pos`, `longitude_pos`, `latitude_pos`) VALUES
(1, 'Pos Pemadam Kebakaran 1', 'Jl. Teuku Umar No.12, Tegal Asih, Cikarang Barat. Kab. Bekasi', -1246534, -97387624),
(2, 'Pos Pemadam Kebakaran 2', 'Jl. Sultan Hasanudin, Tambun Selatan, Kab. Bekasi', -6.2595882, 107.055194),
(3, 'Pos Pemadam Kebakaran 3', 'Jl. Ki Hajar Dewantara No 1, Karangasih, Cikarang Utara, Kab. Bekasi', -6.258448, 107.055194),
(4, 'Pos Pemadam Kebakaran 4', 'Jl. Raya Teuku Umar, Gandasari, Kec. Cikarang Barat. Kab. Bekasi', -6.259516, -6.258448),
(5, 'Pos Pemadam Kebakaran 5', 'Jl. Raya Perjuangan No.65, Kebalen, Kec. Babelan, Kab. Bekasi', -6.268905, 107.08663);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `kejadian`
--
ALTER TABLE `kejadian`
  ADD PRIMARY KEY (`id_kejadian`),
  ADD KEY `id_masyarakat_pelapor` (`id_masyarakat_pelapor`);

--
-- Indeks untuk tabel `masyarakat_pelapor`
--
ALTER TABLE `masyarakat_pelapor`
  ADD PRIMARY KEY (`id_masyarakat_pelapor`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `pos`
--
ALTER TABLE `pos`
  ADD PRIMARY KEY (`id_pos`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kejadian`
--
ALTER TABLE `kejadian`
  MODIFY `id_kejadian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `masyarakat_pelapor`
--
ALTER TABLE `masyarakat_pelapor`
  MODIFY `id_masyarakat_pelapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pos`
--
ALTER TABLE `pos`
  MODIFY `id_pos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kejadian`
--
ALTER TABLE `kejadian`
  ADD CONSTRAINT `kejadian_ibfk_1` FOREIGN KEY (`id_masyarakat_pelapor`) REFERENCES `masyarakat_pelapor` (`id_masyarakat_pelapor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
