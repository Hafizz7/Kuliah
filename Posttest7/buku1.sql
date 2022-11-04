-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Nov 2022 pada 17.05
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `Id_buku` int(70) NOT NULL,
  `id_produk` int(70) NOT NULL,
  `nama_buku` varchar(250) NOT NULL,
  `pengarang_buku` varchar(250) NOT NULL,
  `penerbit_buku` varchar(240) NOT NULL,
  `gambar_buku` varchar(70) NOT NULL,
  `tanggal_input` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`Id_buku`, `id_produk`, `nama_buku`, `pengarang_buku`, `penerbit_buku`, `gambar_buku`, `tanggal_input`) VALUES
(134, 138, 'Buku Masak', 'Hafiz', '', 'Buku Masak.jpg', '2022-10-19'),
(135, 139, 'Koran Harian', 'Hafiz', '', 'Koran Harian.jpg', '2022-10-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `loginn`
--

CREATE TABLE `loginn` (
  `id_password` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `loginn`
--

INSERT INTO `loginn` (`id_password`, `username`, `password2`) VALUES
(8, 'Hafiz', '$2y$10$r0LnG/VXI03GF3IUsj.mtuH5kckH3SKdh1sVW2K0Tuk3NZBTKCJWm'),
(9, 'user', '$2y$10$0/fn0fmHRHk5P/HPZO5x5ujD0X4cJoX/kNFljyOlbihWCgQ1uN23m');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(70) NOT NULL,
  `jenis_produk` varchar(250) NOT NULL,
  `penerbit_produk` varchar(250) NOT NULL,
  `harga_produk` int(70) NOT NULL,
  `nama_produk` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `jenis_produk`, `penerbit_produk`, `harga_produk`, `nama_produk`) VALUES
(138, 'Novel', 'Gremdia', 168000, 'BK'),
(139, 'Koran', 'Hafiz', 25000, 'KR'),
(140, '2', '2', 2, '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`Id_buku`),
  ADD UNIQUE KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `loginn`
--
ALTER TABLE `loginn`
  ADD PRIMARY KEY (`id_password`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `Id_buku` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT untuk tabel `loginn`
--
ALTER TABLE `loginn`
  MODIFY `id_password` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
