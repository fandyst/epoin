-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2017 at 05:47 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek_skripsi_epoin`
--
CREATE DATABASE IF NOT EXISTS `proyek_skripsi_epoin` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `proyek_skripsi_epoin`;

-- --------------------------------------------------------

--
-- Table structure for table `dasbors`
--

CREATE TABLE `dasbors` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desc` text COLLATE utf8_unicode_ci NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dasbors`
--

INSERT INTO `dasbors` (`id`, `title`, `desc`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'Informasi', 'Terima kasih telah menggunakan sistem e-Poin. Silakan dipergunakan sesuai dengan kebutuhan. Jika ada pertanyaan dapat menghubungi saya melalui email di me@fandyst.com ataupun melalui halaman kontak di www.fandyst.com.', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2017_07_11_004538_create_dasbors_table', 1),
(11, '2017_07_11_004559_create_peraturans_table', 1),
(12, '2017_07_11_004631_create_siswas_table', 1),
(13, '2017_07_11_011212_create_poins_table', 1),
(14, '2017_07_11_011509_create_poin_details_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peraturans`
--

CREATE TABLE `peraturans` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `nama_peraturan` text COLLATE utf8_unicode_ci NOT NULL,
  `poin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `peraturans`
--

INSERT INTO `peraturans` (`id`, `kode`, `nama_peraturan`, `poin`) VALUES
(1, 'R000', 'Siswa Baru', 300);

-- --------------------------------------------------------

--
-- Table structure for table `poin_details`
--

CREATE TABLE `poin_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `poins_id` int(10) UNSIGNED NOT NULL,
  `kode` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `poins`
--

CREATE TABLE `poins` (
  `id` int(10) UNSIGNED NOT NULL,
  `nis` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `jml_poin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `nis` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nip` varchar(18) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nip`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '111111111111111111', 'Irfan Fediyanto', 'me@fandyst.com', '$2y$10$r191ktLvOenSHPCOrFjshepejTJ4nFK9Pxr.KF9Z7s7TZK0gHatVy', NULL, '2017-07-10 18:27:05', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dasbors`
--
ALTER TABLE `dasbors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dasbors_users_id_unique` (`users_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `peraturans`
--
ALTER TABLE `peraturans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `peraturans_kode_unique` (`kode`);

--
-- Indexes for table `poin_details`
--
ALTER TABLE `poin_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `poin_details_poins_id_unique` (`poins_id`),
  ADD UNIQUE KEY `poin_details_kode_unique` (`kode`);

--
-- Indexes for table `poins`
--
ALTER TABLE `poins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `poins_nis_unique` (`nis`);

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dasbors`
--
ALTER TABLE `dasbors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `peraturans`
--
ALTER TABLE `peraturans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `poin_details`
--
ALTER TABLE `poin_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `poins`
--
ALTER TABLE `poins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dasbors`
--
ALTER TABLE `dasbors`
  ADD CONSTRAINT `dasbors_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `poin_details`
--
ALTER TABLE `poin_details`
  ADD CONSTRAINT `poin_details_kode_foreign` FOREIGN KEY (`kode`) REFERENCES `peraturans` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `poin_details_poins_id_foreign` FOREIGN KEY (`poins_id`) REFERENCES `poins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `poins`
--
ALTER TABLE `poins`
  ADD CONSTRAINT `poins_nis_foreign` FOREIGN KEY (`nis`) REFERENCES `siswas` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
