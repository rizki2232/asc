-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 12 Mar 2025 pada 07.18
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
-- Database: `acs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mobil`
--

CREATE TABLE `data_mobil` (
  `id_mobil` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `jumlah` int(30) NOT NULL,
  `tanggal` date NOT NULL,
  `warna` varchar(20) NOT NULL,
  `tahun` int(20) NOT NULL,
  `id_merek` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_mobil`
--

INSERT INTO `data_mobil` (`id_mobil`, `jenis`, `jumlah`, `tanggal`, `warna`, `tahun`, `id_merek`) VALUES
(14, 'MPV', 1, '2025-03-10', 'merah', 2015, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `merek_mobil`
--

CREATE TABLE `merek_mobil` (
  `id_merek` int(11) NOT NULL,
  `merek` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `merek_mobil`
--

INSERT INTO `merek_mobil` (`id_merek`, `merek`) VALUES
(1, 'wuling'),
(2, 'avanza');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil_masuk`
--

CREATE TABLE `mobil_masuk` (
  `id_masuk` int(11) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `tanggal masuk` date NOT NULL,
  `id_mobil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `data_mobil`
--
ALTER TABLE `data_mobil`
  ADD PRIMARY KEY (`id_mobil`),
  ADD KEY `id_merek` (`id_merek`);

--
-- Indeks untuk tabel `merek_mobil`
--
ALTER TABLE `merek_mobil`
  ADD PRIMARY KEY (`id_merek`);

--
-- Indeks untuk tabel `mobil_masuk`
--
ALTER TABLE `mobil_masuk`
  ADD PRIMARY KEY (`id_masuk`),
  ADD UNIQUE KEY `id_mobil` (`id_mobil`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_mobil`
--
ALTER TABLE `data_mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `merek_mobil`
--
ALTER TABLE `merek_mobil`
  MODIFY `id_merek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mobil_masuk`
--
ALTER TABLE `mobil_masuk`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_mobil`
--
ALTER TABLE `data_mobil`
  ADD CONSTRAINT `data_mobil_ibfk_1` FOREIGN KEY (`id_merek`) REFERENCES `merek_mobil` (`id_merek`);

--
-- Ketidakleluasaan untuk tabel `mobil_masuk`
--
ALTER TABLE `mobil_masuk`
  ADD CONSTRAINT `mobil_masuk_ibfk_1` FOREIGN KEY (`id_mobil`) REFERENCES `data_mobil` (`id_mobil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
