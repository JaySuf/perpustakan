-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Bulan Mei 2023 pada 08.03
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bubub`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul_buku` varchar(500) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `penerbit` varchar(150) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `jumlah_halaman` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul_buku`, `penulis`, `penerbit`, `genre`, `isbn`, `tahun_terbit`, `jumlah_halaman`) VALUES
(3, 'fisika', 'soliking', 'joner jordan', 'edukasi', '62389762946329', 2022, 123),
(4, 'fisika', 'soliking', 'joner jordan', 'edukasi', '62389762946329', 2022, 123),
(5, 'matematika', 'soliking', 'joner jordan', 'edukasi', '62389762946329', 2016, 122),
(8, 'Ekonomi', 'Joshua', 'Sudir', 'live action', '62354756976598', 2015, 120),
(9, '', '', '', '', '62389762946329', 0000, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_peminjam`
--

CREATE TABLE `data_peminjam` (
  `id` int(11) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `nomor_telepon` int(11) NOT NULL,
  `alamat_email` varchar(100) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `id_anggota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_peminjam`
--

INSERT INTO `data_peminjam` (`id`, `nama`, `nomor_telepon`, `alamat_email`, `instansi`, `id_anggota`) VALUES
(1, 'Sufutra Jaya ', 82836475, 'sufutganteng234@gmail.co', 'sma internasional 3 palangka ', 123746),
(4, 'Kristia', 2147483647, 'kristia@gmail.com', 'sma internasional 3 palangka raya', 1237467),
(5, 'josua', 2147483647, 'josuaaneh@gmail.com', 'sma internasional 3 palangka raya', 2147483647);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_peminjaman`
--

CREATE TABLE `transaksi_peminjaman` (
  `id` int(11) NOT NULL,
  `isbn` int(255) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_tenggat_pengembalian` date NOT NULL,
  `tanggal_dikembalikan` date NOT NULL,
  `id_peminjam` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi_peminjaman`
--

INSERT INTO `transaksi_peminjaman` (`id`, `isbn`, `tanggal_pinjam`, `tanggal_tenggat_pengembalian`, `tanggal_dikembalikan`, `id_peminjam`, `status`) VALUES
(2, 2147483647, '2023-05-08', '2023-05-09', '2023-05-09', 123746, 1),
(3, 2147483647, '2023-05-08', '2023-05-09', '2023-05-08', 2147483647, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_peminjam`
--
ALTER TABLE `data_peminjam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_peminjaman`
--
ALTER TABLE `transaksi_peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `data_peminjam`
--
ALTER TABLE `data_peminjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `transaksi_peminjaman`
--
ALTER TABLE `transaksi_peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
