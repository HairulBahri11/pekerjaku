-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 27, 2023 at 06:30 AM
-- Server version: 10.3.38-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pese_ekantindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id` int(11) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `transaksi_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id`, `quantity`, `transaksi_id`, `product_id`, `created_at`, `updated_at`) VALUES
(14, '2', 11524, 38381, '2023-06-23 13:50:42', '2023-06-23 13:50:42'),
(15, '2', 11524, 60659, '2023-06-23 13:50:42', '2023-06-23 13:50:42'),
(20, '1', 20358, 38381, '2023-06-26 06:38:50', '2023-06-26 06:38:50'),
(22, '2', 97755, 38381, '2023-06-26 07:57:59', '2023-06-26 07:57:59');

--
-- Triggers `detail_transaksi`
--
DELIMITER $$
CREATE TRIGGER `kurang_stok` AFTER INSERT ON `detail_transaksi` FOR EACH ROW UPDATE product SET stok = stok-NEW.quantity WHERE id = NEW.product_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `favorit`
--

CREATE TABLE `favorit` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `favorit`
--

INSERT INTO `favorit` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(6, 5129, 60659, '2023-06-26 07:04:06', '2023-06-26 07:04:06');

-- --------------------------------------------------------

--
-- Table structure for table `penjual`
--

CREATE TABLE `penjual` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_toko` varchar(100) NOT NULL,
  `deskripsi_toko` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `penjual`
--

INSERT INTO `penjual` (`id`, `user_id`, `nama_toko`, `deskripsi_toko`, `created_at`, `updated_at`) VALUES
(3, 7302, 'Pak Radit', 'Menjual makanan Dan minuman dengan rasa yang maknyuss dan mantap', '2023-06-06 03:23:57', '2023-06-20 08:38:15');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` enum('Makanan','Minuman') NOT NULL,
  `price` varchar(100) NOT NULL,
  `stok` varchar(100) NOT NULL,
  `deskripsi_barang` text NOT NULL,
  `penjual_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nama`, `jenis`, `price`, `stok`, `deskripsi_barang`, `penjual_id`, `created_at`, `updated_at`) VALUES
(38381, 'Nasi Padang', 'Makanan', '20000', '35', 'nasi padang dengan ciri khas special', 3, '2023-06-09 08:31:11', '2023-06-23 14:18:08'),
(60659, 'Nasi Goreng', 'Makanan', '15000', '96', 'Nasi Goreng dengan rasa dengan mantep', 3, '2023-06-19 03:45:19', '2023-06-19 03:45:19');

-- --------------------------------------------------------

--
-- Table structure for table `product_galleries`
--

CREATE TABLE `product_galleries` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product_galleries`
--

INSERT INTO `product_galleries` (`id`, `foto`, `product_id`, `created_at`, `updated_at`) VALUES
(16, 'ZJJBH-20230609-033111-4r0.jpg', 38381, '2023-06-09 08:31:11', '2023-06-09 08:31:11'),
(17, 'ESbWM-20230609-033111-KPb.jpg', 38381, '2023-06-09 08:31:11', '2023-06-09 08:31:11'),
(18, 'Ez2eb-20230609-033111-rIl.jpg', 38381, '2023-06-09 08:31:11', '2023-06-09 08:31:11'),
(19, '8aI58-20230619-104519-jc5.jpeg', 60659, '2023-06-19 03:45:19', '2023-06-19 03:45:19'),
(20, 'QqnxP-20230619-104519-zyU.jpeg', 60659, '2023-06-19 03:45:19', '2023-06-19 03:45:19'),
(21, '4U1cm-20230619-104519-Ch7.jpeg', 60659, '2023-06-19 03:45:19', '2023-06-19 03:45:19');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `foto` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `nama`, `no_telp`, `alamat`, `foto`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Admin Sekolah', NULL, NULL, 'avatar.png', 75469, '2023-06-05 01:16:04', '2023-06-20 08:36:09'),
(2, 'Pak Radit', '087987675213', NULL, 'avatar4.png', 7302, '2023-06-06 03:23:57', '2023-06-20 08:38:15'),
(6, 'Riski Ramadhan', NULL, NULL, '1060025810.png', 5129, '2023-06-07 06:03:23', '2023-06-20 16:55:28'),
(7, 'awikwok', NULL, NULL, 'avatar5.png', 57552, '2023-06-22 03:29:26', '2023-06-22 03:29:26');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `review` varchar(200) DEFAULT NULL,
  `detail_transaksi_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `rating`, `review`, `detail_transaksi_id`, `created_at`, `updated_at`) VALUES
(8, '4', 'mantap sekali', 14, '2023-06-26 07:00:40', '2023-06-26 07:00:40'),
(9, '5', 'mantap sekali', 15, '2023-06-26 07:00:40', '2023-06-26 07:00:40'),
(10, '4', 'mantap', 22, '2023-06-26 08:00:44', '2023-06-26 08:00:44');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `total` varchar(100) NOT NULL,
  `payment_status` varchar(100) NOT NULL DEFAULT 'waiting',
  `midtrans_url` varchar(150) DEFAULT NULL,
  `midtrans_booking_code` varchar(150) DEFAULT NULL,
  `status` enum('Diproses','Dikirim','Diterima') NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `total`, `payment_status`, `midtrans_url`, `midtrans_booking_code`, `status`, `user_id`, `tanggal`, `lokasi`, `created_at`, `updated_at`) VALUES
(11524, '750000', 'Lunas', 'https://app.sandbox.midtrans.com/snap/v3/redirection/7c693b36-47db-479d-b5e2-d21c0cf23506', '11524-hgVSf', 'Diterima', 5129, '2023-06-23', 'depan 8A', '2023-06-23 13:50:42', '2023-06-26 06:56:08'),
(20358, '20000', 'pending', 'https://app.sandbox.midtrans.com/snap/v3/redirection/1c14294b-6bcd-454e-b334-2854290f4c6d', '20358-8KXfx', 'Diproses', 57552, '2023-06-26', 'a', '2023-06-26 06:38:50', '2023-06-27 04:43:56'),
(97755, '40000', 'Lunas', 'https://app.sandbox.midtrans.com/snap/v3/redirection/73c641aa-94ee-426d-a9df-a6e52491a28b', '97755-RjvvJ', 'Diterima', 5129, '2023-06-26', 'taman sekolah', '2023-06-26 07:57:59', '2023-06-26 08:00:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('Admin','Penjual','Siswa') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(5129, 'riski123@gmail.com', 'riski', '$2y$10$s9CZ3DppXAwWgU06T.9ImOFsIcRp4VzBBhNE.NF2cIe5ae/UDT6/m', 'Siswa', '2023-06-07 06:03:23', '2023-06-07 06:03:23'),
(7302, 'pakradit@gmail.com', 'pakradit', '$2y$10$HiwNA5tc6exD9vsk8cch6ej8JXZ.GoNNCDN7sYUk30wUC7gPObAWW', 'Penjual', '2023-06-06 03:23:57', '2023-06-06 03:23:57'),
(57552, 'awikwok@gmail.com', 'awikwok', '$2y$10$hUGnzyDDGVOFhGdfmnGEyOmFfoFTROJ6rwRs9NqcCzRHTrn8ePv/i', 'Siswa', '2023-06-22 03:29:26', '2023-06-22 03:29:26'),
(75469, 'admin@gmail.com', 'admin', '$2y$10$V9Szsql5jgGvot2UlRpR7OGAUwRv2nL0SjQQvVQWdWjvqB0JEdDqa', 'Admin', '2023-06-05 01:16:04', '2023-06-05 01:16:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_detail_transaksi_transaksi1_idx` (`transaksi_id`),
  ADD KEY `fk_detail_transaksi_product1_idx` (`product_id`);

--
-- Indexes for table `favorit`
--
ALTER TABLE `favorit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_favorit_user1_idx` (`user_id`),
  ADD KEY `fk_favorit_product1_idx` (`product_id`);

--
-- Indexes for table `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesanan_product1_idx` (`product_id`),
  ADD KEY `fk_pesanan_user1_idx` (`user_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_penjual1_idx` (`penjual_id`);

--
-- Indexes for table `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_detail_product_product1_idx` (`product_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_profile_user1_idx` (`user_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_rating_detail_transaksi1_idx` (`detail_transaksi_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_transaksi_user1_idx` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE_2` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `favorit`
--
ALTER TABLE `favorit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penjual`
--
ALTER TABLE `penjual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89961;

--
-- AUTO_INCREMENT for table `product_galleries`
--
ALTER TABLE `product_galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99681;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `fk_detail_transaksi_product1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_detail_transaksi_transaksi1` FOREIGN KEY (`transaksi_id`) REFERENCES `transaksi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `favorit`
--
ALTER TABLE `favorit`
  ADD CONSTRAINT `favorit_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favorit_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penjual`
--
ALTER TABLE `penjual`
  ADD CONSTRAINT `penjual_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_penjual1` FOREIGN KEY (`penjual_id`) REFERENCES `penjual` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD CONSTRAINT `product_galleries_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `fk_profile_user1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `fk_rating_detail_transaksi1` FOREIGN KEY (`detail_transaksi_id`) REFERENCES `detail_transaksi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_transaksi_user1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
