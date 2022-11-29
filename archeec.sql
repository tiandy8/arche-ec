-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 04:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `archeec`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `barang_id` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `jumlah_harga` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(32, '2014_10_12_000000_create_users_table', 1),
(33, '2014_10_12_100000_create_password_resets_table', 1),
(34, '2019_08_19_000000_create_failed_jobs_table', 1),
(35, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(36, '2022_11_22_023207_create_products_table', 1),
(37, '2022_11_23_053231_create_messages_table', 1),
(38, '2022_11_25_095406_create_services_table', 1),
(39, '2022_11_28_025115_create_orders_table', 2),
(40, '2022_11_28_031841_create_order_details_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('unpaid','diproses','dikirim','diterima') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `tanggal`, `status`, `jumlah_harga`, `created_at`, `updated_at`) VALUES
(39, 3, '2022-11-28', 'unpaid', 276000, '2022-11-28 07:53:31', '2022-11-28 07:53:31'),
(40, 3, '2022-11-28', 'diterima', 1959000, '2022-11-28 07:56:43', '2022-11-28 08:01:25');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `barang_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jumlah_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `barang_id`, `order_id`, `jumlah`, `jumlah_harga`, `created_at`, `updated_at`) VALUES
(37, 12, 39, 4, 100000, '2022-11-28 07:53:31', '2022-11-28 07:53:31'),
(38, 5, 39, 4, 92000, '2022-11-28 07:53:31', '2022-11-28 07:53:31'),
(39, 4, 39, 7, 84000, '2022-11-28 07:53:31', '2022-11-28 07:53:31'),
(40, 10, 40, 6, 198000, '2022-11-28 07:56:43', '2022-11-28 07:56:43'),
(41, 7, 40, 23, 1725000, '2022-11-28 07:56:43', '2022-11-28 07:56:43'),
(42, 4, 40, 3, 36000, '2022-11-28 07:56:43', '2022-11-28 07:56:43');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `gambar_produk` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `nama_produk`, `slug`, `harga`, `gambar_produk`, `stok`, `deskripsi`, `created_at`, `updated_at`) VALUES
(4, 'Whiskas Kaleng', NULL, 12000, 'whiskash.jpg', 0, 'Whiskas kaleng untuk para kitten', '2022-11-28 07:14:24', '2022-11-28 07:56:43'),
(6, 'olla Pet Cage Stackable Pet Fence 35*35CM-DIY Pet Cage For Dog Cat-DIY', NULL, 50000, 'pet-cage.jpg', 12, 'Informasi Produk: Jaring Besi Baja Perakitan Multi-fungsi untuk Rak Buku, Peralatan Rumah Tangga, Kandang Hewan\r\n\r\nSelain dapat dibuat menjadi kandang hewan , anda juga dapat membuat rak buku, lemari , gantungan atau lainnya sesuai kreativitas', '2022-11-28 07:36:34', '2022-11-28 07:36:34'),
(7, 'Tempat Makan Kucing Kayu', NULL, 75000, 'tempatmakan.jpg', 0, 'tempat makan kucing dari kayu', '2022-11-28 07:37:38', '2022-11-28 07:56:43'),
(8, 'Dress Hewan', NULL, 150000, 'dress.jpg', 15, 'Size:\r\nXS Chest: 30cm Length: 23cm\r\nS Chest : 38 cm Length : 28 cm\r\n\r\n\r\nNotes:\r\n1. Due to the different monitor and light effect, the actual color of the item might be slightly different from the color showed on the pictures. Thank you!\r\n2. Please allow 1-3cm measuring deviation due to manual measurement.', '2022-11-28 07:38:43', '2022-11-28 07:38:43'),
(10, 'GULAPAWS Vitamin Kucing Anjing Minyak Ikan COD Liver Oil 100pcs', NULL, 33000, 'f624bbd7-2372-41f8-aaa3-deacb91ce82a.jpg', 117, 'Cod Live Oil\r\n\r\nOmega 3 for Pet\r\n\r\n100% Natural\r\n\r\nBenefits :\r\n\r\n- Improve Skin and Coat\r\n\r\n- Maintain Heart and Blood Vessels\r\n\r\n- Immune Booster\r\n\r\n- Joint Support\r\n\r\nDirection of Use:\r\n\r\n1 Soft Gel Every 5kg\r\n\r\nMix with Food or Give Directly to Your Pet\r\n\r\n100softgels', '2022-11-28 07:40:21', '2022-11-28 07:56:43'),
(11, 'Penutup Mulut Anjing Dog Muzzle Anti Bark Bite Chew Safety Brongsong - Size 1', NULL, 103800, 'ff.jpg', 32, 'Overview\r\nPenutup atau pelindug pada mulut peliharaan anda berfungsi sebagai tidak memakan sembarangan makanan yang ada dijalan saat berpergian santai ditaman, maupun menghindari menggigit sembarang orang bila peliharaan anda susah diatur.', '2022-11-28 07:42:08', '2022-11-28 07:42:08'),
(12, 'Alas Kandang Hewan Kucing / Anjing / Tortoise 40 x 60 - Hitam', NULL, 25000, 'afa.png', 8, 'Keset Anti Slip Alas Kandang Hewan cocok untuk :\r\n* Alas kandang hewan : kucing, anjing, turtoise, kelinci, reptil, anakan burung dan lainnya.\r\n\r\n* Alas kandang terbuat dari PVC empuk memberikan rasa nyaman pada hewan peliharaan.\r\n* Lubang2 kecil akan membuat keset mudah dibersihkan, air bisa mengalir.', '2022-11-28 07:43:14', '2022-11-28 07:53:31'),
(13, 'Pakan Kucing 32', NULL, 32000, 'catnip.jpg', 25, 'pakan kucing untuk semua umur', '2022-11-28 07:57:56', '2022-11-28 07:58:27');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_service` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `nama_service`, `slug`, `gambar_service`, `deskripsi`, `created_at`, `updated_at`) VALUES
(2, 'Service Trimming + Pet Hotel', NULL, 'pet-cage.jpg', 'Service Trimming + Pet Hotel', '2022-11-28 08:00:02', '2022-11-28 08:00:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_profil` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pemulihan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `role`, `phone`, `email`, `foto_profil`, `pemulihan`, `email_verified_at`, `alamat`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'admin', 'admin', 'admin', '0857572198', 'admin@gmail.com', 'lambo.jpg', '251205', NULL, 'Jl.Budi Utomo Margorejo Metro selatan, Lampung , Indonesia', '$2y$10$YicPmht8KMFWxrfmAOPYdugqc/GRpRMDK9YIMQ5o6nsEU1gduca8S', NULL, '2022-11-28 07:11:42', '2022-11-28 07:54:30'),
(4, 'yehwa', 'yehwa', 'user', '0837732982', 'yehwa@gmail.com', 'dress.jpg', '251205', NULL, 'margodadi', '$2y$10$gyOtol40AAqr48ehhGmDsOWDPtVlDQxJJDDljaU0CnGIPL0hCZ2mW', NULL, '2022-11-28 08:02:16', '2022-11-28 08:03:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
