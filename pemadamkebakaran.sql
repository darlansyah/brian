-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jul 2019 pada 20.10
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
  `name` varchar(25) NOT NULL,
  `level_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_user`, `id_profile`, `username`, `password`, `name`, `level_user`) VALUES
(1, 0, 'bule', 'admin123', 'Brian', 'admin');

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
(10, 11, '2019-07-04 08:52:11', -8624576235, 2875382375, 'Kebakaran Pasar', 'Cari coba'),
(11, 15, '2019-07-04 08:52:11', 8765486547, 87640293764, 'Kebakaran Rumah', 'Coba Cari...'),
(13, 16, '2019-07-04 16:20:51', -57238735721, 2875382375, 'Kebakaran', 'Upload'),
(15, 11, '2019-07-04 16:29:45', -57238735721, 2875382375, 'Kebakaran Sekolah', 'Cari'),
(16, 16, '2019-07-04 16:29:45', 8765486547, 762357345, 'Kebakaran Pabrik', 'Coba'),
(17, 15, '2019-07-04 16:29:45', 7365484765, 8365476345, 'Kebakaran', 'Coba Cek..');

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
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masyarakat_pelapor`
--

INSERT INTO `masyarakat_pelapor` (`id_masyarakat_pelapor`, `no_ktp`, `nama_masyarakat_pelapor`, `telp`, `alamat`, `username`, `password`) VALUES
(11, '31245635', 'Bule', '087705561080', 'Sukoharjo', '', ''),
(13, '7645871', 'Udin', '34651234', 'Yogyakarta', '', ''),
(14, '63545875', 'Yudhis', '62565235', 'Mangkang', '', ''),
(15, '786450813547', 'Akbar', '762587345', 'Colomadu', '', ''),
(16, '92864507', 'Hilal', '29365409', 'Surabaya', '', ''),
(23, '1231525412', 'Darlan', '087705561080', 'kendari', '', ''),
(28, 'samdkansd', 'kasjd', 'akskdn', 'sadsamdnsa', '', ''),
(29, '826375', 'Gerald', '87253', 'Sleman', '', ''),
(30, '916325', 'doni', '872465876', 'palu', '', ''),
(31, '14124', 'bule', '14587', 'Cirebon', '', ''),
(32, '14124', 'bule', '14587', 'Cirebon', '', ''),
(33, '14124', 'bule', '14587', 'Cirebon', '', ''),
(34, 'asd', 'asd', '123`', 'kelaten', '', ''),
(35, '3216060502970008', 'Brian Chandra AB', '087705561080', 'Bekasi', '', ''),
(36, '14345', 'Bambang Pamungkas', '2365', 'Jakarta', '', ''),
(37, '123145', 'Bagas', '1234', 'Tegal', '', ''),
(38, '1275', 'Darlan', '137542', 'Kendari', '', '');

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
(3, '12345678', 'Eka Ramdhani', '1'),
(4, '12345678', 'Ponaryo Astaman', '2'),
(5, '123140057', 'Maman Abdurahman', '3'),
(6, '12365551', 'Isnan Ali', '4'),
(7, '12345678', 'Hamka Hamza', '5'),
(8, '12345678', 'Brian Chandra Adji Bayu', '1');

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
(5, 'Pos Pemadam Kebakaran 5', 'Jl. Raya Perjuangan No.65, Kebalen, Kec. Babelan, Kab. Bekasi', -6.268905, 107.08666);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_` int(11) NOT NULL,
  `id_profile` int(11) NOT NULL,
  `username` int(15) NOT NULL,
  `password` int(15) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `level_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_`, `id_profile`, `username`, `password`, `nama`, `level_user`) VALUES
(1, 0, 0, 192023, 'kasjd', 'user'),
(2, 0, 0, 213, 'gerald', 'user'),
(3, 0, 0, 0, 'doni', 'user'),
(4, 0, 0, 192023, 'bule', 'user'),
(5, 0, 0, 192023, 'bule', 'user'),
(6, 0, 0, 192023, 'bule', 'user'),
(7, 0, 0, 192023, 'asd', 'user'),
(8, 0, 0, 6, 'Brian Chandra AB', 'user'),
(9, 0, 0, 0, 'Bambang Pamungkas', 'user'),
(10, 0, 0, 0, 'Bagas', 'user'),
(11, 0, 0, 0, 'Darlan', 'user'),
(12, 0, 0, 0, 'egiuf', 'user'),
(13, 0, 0, 0, 'rgif', 'user');

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
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kejadian`
--
ALTER TABLE `kejadian`
  MODIFY `id_kejadian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `masyarakat_pelapor`
--
ALTER TABLE `masyarakat_pelapor`
  MODIFY `id_masyarakat_pelapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pos`
--
ALTER TABLE `pos`
  MODIFY `id_pos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
