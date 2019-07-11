-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2019 at 12:03 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `undangan`
--

CREATE TABLE `undangan` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `alamat_lengkap` varchar(50) DEFAULT NULL,
  `nominal` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `undangan`
--

INSERT INTO `undangan` (`id`, `nama_lengkap`, `alamat_lengkap`, `nominal`, `status`) VALUES
(1, 'Agis Mutaqin', 'Babakan Sindang, Rajagaluh', 'Rp. 100.000', 'Sudah Kembali'),
(2, 'Siti Rusjannah Husifah', 'Pasir Muncang, Majalengka', 'Rp. 100.000', 'Belum Kembali'),
(3, 'Selvi Aprianingsih', 'Sukabumi, Jawa Barat', 'Rp. 1000.000', 'Belum Kembali'),
(4, 'Desi Yuliani', 'Sukabumi, Jawa Barat', 'Rp. 50.000', 'Belum Kembali'),
(5, 'Vivit Siti Fattimah', 'Bantarujeg, Jawa Barat', 'Rp. 100.000', 'Belum Kembali'),
(6, 'Puput Puspita Sari Ningsih', 'Cikijing, Jawa Barat', 'Rp. 900.000', 'Belum Kembali'),
(8, 'Handika', 'Bekasi, Jakarta', 'Rp. 100.000', 'Belum Kembali'),
(9, 'Irwan Andriawan', 'Malang, Jawa Timur', 'Rp. 100.000', 'Belum Kembali'),
(10, 'Rahmat Siddiq', 'Jakarta, No 16', 'Rp. 300.000', 'Belum Kembali'),
(11, 'Fitra Ardiansayh', 'Malang, Jawa Timur', 'Rp. 1000.000', 'Belum Kembali'),
(13, 'Sakit Perut', 'hahahah', 'Rp. 900.000', 'Belum Kembali'),
(14, 'aa', 'aa', 'aa', 'aa'),
(15, 'aa', 'aa', 'aa', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `undangan_k`
--

CREATE TABLE `undangan_k` (
  `id` int(11) NOT NULL,
  `nama_lengkap_uk` varchar(50) NOT NULL,
  `alamat_lengkap_uk` varchar(50) NOT NULL,
  `nominal_uk` varchar(50) NOT NULL,
  `status_uk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `undangan_k`
--

INSERT INTO `undangan_k` (`id`, `nama_lengkap_uk`, `alamat_lengkap_uk`, `nominal_uk`, `status_uk`) VALUES
(1, 'Siti Rusjannah Husifah', 'Pasir Muncang, Majalengka', 'Rp. 200.000', 'Kembali'),
(2, 'Vanny Wahyulianingsih', 'Majalengka', 'Rp. 100.000', 'Belum Kembali'),
(3, 'Lilis Lusiana', 'Jatiwangi, Majalengka', 'Rp. 2000.000', 'Belum Kembali'),
(4, 'Erina Sari', 'Indrakila, Sindang', 'Rp. 100.000', 'Belum Kembali'),
(5, 'Uswatun Hasannah', 'Garawastu, Sindang', 'Rp. 200.000', 'Belum Kembali'),
(8, 'Asryall Difani', 'Malang, Jawa Timur', 'Rp. 200.000', 'Belum Kembali'),
(9, 'Aldi', 'Talaga, Majalengka', 'Rp. 200.000', 'Belum Kembali');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Administrator', 'admin@gmail.com', '$2y$10$40dRMkfhJ587AlV5xjyVxe3iWapjGBGXbO0Yg/XugwhxQdiHaMlTq', 'LBURxH85HQtpVrFqLiQTcuPw3cRm5ToM1niBogSuoB0NBeIBrZ0Eb1pMPXhN', '2019-07-02 02:55:43', '2019-07-02 02:55:43'),
(3, 'irwan andriawan', 'irwan@gmail.com', '$2y$10$WJHmGFtCu.V5hkoCtfI2xOs7vq/E7VGN/EZ8W34HsRlxjgkFteF0m', NULL, NULL, NULL),
(4, 'agis mutaqin', 'agis@gmail.com', '$2y$10$SW/LuQcDDIvAaa1RINZGtOOwGYciDkXLKejaRE8PivfR5XTKTuG5q', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `undangan`
--
ALTER TABLE `undangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `undangan_k`
--
ALTER TABLE `undangan_k`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `undangan`
--
ALTER TABLE `undangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `undangan_k`
--
ALTER TABLE `undangan_k`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
