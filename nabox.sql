-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2020 pada 22.55
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nabox-new`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pemilik` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama`, `pemilik`, `stok`, `harga`, `kategori`) VALUES
(1, 'Kecap ABC', 'PT Rindu Kasih', 8, 20000, 'Kecap'),
(3, 'Kecap Sedap', 'PT Rindu Kasih', 5, 8000, 'Kecap'),
(4, 'Minyak bimoli', 'Toko Selalu Ada', 3, 40000, 'Minyak'),
(5, 'Bimoli 1 Liter', 'PT Mampu Berjaya', 6, 27000, 'Minyak'),
(6, 'Bayam', 'PT Mampu Berjaya', 10, 2500, 'Sayuran'),
(7, 'Kangkung', 'PT Mampu Berjaya', 15, 2000, 'Sayuran'),
(8, 'Pakis', 'PT Mampu Berjaya', 10, 3000, 'Sayuran'),
(9, 'Sania 1 liter', 'PT Mampu Berjaya', 10, 23000, 'Minyak'),
(10, 'Bimoli 2 Liter', 'PT Mampu Berjaya', 10, 38000, 'Minyak'),
(11, 'Filma 1 liter', 'PT Mampu Berjaya', 7, 22500, 'Minyak'),
(12, 'SunCo 2 liter', 'PT Mampu Berjaya', 10, 25000, 'Minyak'),
(13, 'Royco Kaldu Sapi 100gr', 'PT Mampu Berjaya', 15, 4000, 'Bumbu Sachet'),
(14, 'Royco Kaldu Ayam 9gr', 'PT Mampu Berjaya', 13, 2000, 'Bumbu Sachet');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `foto_kategori` varchar(1000) NOT NULL,
  `pemilik` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `foto_kategori`, `pemilik`) VALUES
(4, 'Kecap', 'kecap.jpg', 'PT Rindu Kasih'),
(5, 'Minyak', 'minyak.jpeg', 'Toko Selalu Ada'),
(6, 'Minyak', 'minyak.jpeg', 'PT Mampu Berjaya'),
(7, 'Sayuran', 'sayuran.png', 'PT Mampu Berjaya'),
(8, 'Bumbu Sachet', 'bumbusachet.jpg', 'PT Mampu Berjaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasok`
--

CREATE TABLE `pemasok` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kontak` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `nomor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemasok`
--

INSERT INTO `pemasok` (`id`, `nama`, `kontak`, `kategori`, `nomor`) VALUES
(8, 'Naufal', 'PT Mampu Berjaya', 'Kecap', '+6282323805878'),
(9, 'Intan', 'PT Mampu Berjaya', 'Sayur', '+62895362330906'),
(10, 'Afdhal', 'PT Mampu Berjaya', 'Minyak', '+6282323805878'),
(11, 'Hilya', 'PT Mampu Berjaya', 'Bumbu Sachet', '+6282165110187'),
(12, 'Ridha', 'PT Mampu Berjaya', 'Sayuran', '+6282274009850');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(11) NOT NULL,
  `pemilik` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `nominal` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id`, `pemilik`, `tanggal`, `nominal`) VALUES
(1, 'PT Mampu Berjaya', '2020-04-18', 300000),
(2, 'PT Mampu Berjaya', '2020-06-20', 200000),
(3, 'PT Mampu Berjaya', '2020-07-12', 500000),
(4, 'PT Mampu Berjaya', '2020-08-24', 270000),
(5, 'PT Mampu Berjaya', '2020-05-28', 1000000),
(6, 'PT Mampu Berjaya', '2020-05-28', 140500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nama_toko` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `logged_in` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `nama_toko`, `email`, `password`, `logged_in`) VALUES
(1, 'Hilya', 'Toko Selalu Ada', 'hilya@selaluada.co.id', '$2y$10$jBo5r/8O4rfFgd4j45FuZOyaOlVMGNEWwp.RBB1jI0KTCJSzkbEZm', 0),
(2, 'Ridha', 'PT Rindu Kasih', 'ridha@rindukasih.com', '$2y$10$nVEE1xm0S7xiCsM3vB4PzukH4Eoasxunk9LKVX5xPcv8PG9JXXHx2', 0),
(3, 'Intan', 'Toko Rasa Lama', 'intan@rasalama.com', '$2y$10$O5rvHmIKkNTOGYp/X8AHkuJG1uQZKRbCErNVhAA15IUU5mNqLFqdm', 0),
(4, 'User', 'PT Mampu Berjaya', 'user@gmail.com', '$2y$10$jBo5r/8O4rfFgd4j45FuZOyaOlVMGNEWwp.RBB1jI0KTCJSzkbEZm', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemasok`
--
ALTER TABLE `pemasok`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pemasok`
--
ALTER TABLE `pemasok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
