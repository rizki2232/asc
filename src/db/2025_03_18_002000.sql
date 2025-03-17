-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 17, 2025 at 05:20 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.16

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Wuling', '2025-03-12 18:52:16', '2025-03-12 18:52:16'),
(3, 'Suzuki', '2025-03-13 11:10:48', '2025-03-13 11:10:48');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int NOT NULL,
  `brand_id` int NOT NULL,
  `type` varchar(255) NOT NULL,
  `color` varchar(32) NOT NULL,
  `year` year NOT NULL,
  `quantity` int NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `brand_id`, `type`, `color`, `year`, `quantity`, `date`, `created_at`, `updated_at`) VALUES
(3, 3, 'Ertiga', 'Putih', '2021', 1, '2025-03-13', '2025-03-13 11:59:23', '2025-03-13 11:59:23');

-- --------------------------------------------------------

--
-- Table structure for table `data_mobil`
--

CREATE TABLE `data_mobil` (
  `id_mobil` int NOT NULL,
  `jenis` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah` int NOT NULL,
  `tanggal` date NOT NULL,
  `warna` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `tahun` int NOT NULL,
  `id_merek` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_mobil`
--

INSERT INTO `data_mobil` (`id_mobil`, `jenis`, `jumlah`, `tanggal`, `warna`, `tahun`, `id_merek`) VALUES
(14, 'MPV', 1, '2025-03-10', 'merah', 2015, 1);

-- --------------------------------------------------------

--
-- Table structure for table `merek_mobil`
--

CREATE TABLE `merek_mobil` (
  `id_merek` int NOT NULL,
  `merek` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `merek_mobil`
--

INSERT INTO `merek_mobil` (`id_merek`, `merek`) VALUES
(1, 'wuling'),
(2, 'avanza');

-- --------------------------------------------------------

--
-- Table structure for table `mobil_masuk`
--

CREATE TABLE `mobil_masuk` (
  `id_masuk` int NOT NULL,
  `jumlah` int NOT NULL,
  `tanggal masuk` date NOT NULL,
  `id_mobil` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Postingan Pertama', '<h2>Konten Pertama</h2><p>Preset build with <code>snow</code> theme, and some common formats.</p>', '2025-03-16 17:00:00', '2025-03-17 12:17:19', '2025-03-17 12:17:19'),
(2, 'Postingan Kedua', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius consequuntur voluptatum possimus, repellendus ipsum ex temporibus provident maiores reiciendis totam soluta, natus suscipit dolorem. Commodi repellendus enim sunt consectetur harum!</p>', '2025-03-16 17:00:00', '2025-03-17 14:43:12', '2025-03-17 14:43:12'),
(3, 'Postingan Ketiga', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius consequuntur voluptatum possimus, repellendus ipsum ex temporibus provident maiores reiciendis totam soluta, natus suscipit dolorem. Commodi repellendus enim sunt consectetur harum!</p>', '2025-03-17 17:00:00', '2025-03-17 14:43:32', '2025-03-17 14:43:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `username` varchar(14) NOT NULL,
  `password` varchar(14) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin', 'admin@example.com', '2025-03-12 18:21:21', '2025-03-12 18:21:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand` (`brand_id`);

--
-- Indexes for table `data_mobil`
--
ALTER TABLE `data_mobil`
  ADD PRIMARY KEY (`id_mobil`),
  ADD KEY `id_merek` (`id_merek`);

--
-- Indexes for table `merek_mobil`
--
ALTER TABLE `merek_mobil`
  ADD PRIMARY KEY (`id_merek`);

--
-- Indexes for table `mobil_masuk`
--
ALTER TABLE `mobil_masuk`
  ADD PRIMARY KEY (`id_masuk`),
  ADD UNIQUE KEY `id_mobil` (`id_mobil`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_mobil`
--
ALTER TABLE `data_mobil`
  MODIFY `id_mobil` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `merek_mobil`
--
ALTER TABLE `merek_mobil`
  MODIFY `id_merek` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mobil_masuk`
--
ALTER TABLE `mobil_masuk`
  MODIFY `id_masuk` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `brand` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Constraints for table `data_mobil`
--
ALTER TABLE `data_mobil`
  ADD CONSTRAINT `data_mobil_ibfk_1` FOREIGN KEY (`id_merek`) REFERENCES `merek_mobil` (`id_merek`);

--
-- Constraints for table `mobil_masuk`
--
ALTER TABLE `mobil_masuk`
  ADD CONSTRAINT `mobil_masuk_ibfk_1` FOREIGN KEY (`id_mobil`) REFERENCES `data_mobil` (`id_mobil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
