-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jan 27, 2024 at 02:21 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_system`
--

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_22_194232_product_table', 1),
(7, '2024_01_27_121306_add_column_to_user', 3);

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
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `quantity`, `title`, `description`, `created_at`, `updated_at`) VALUES
(2, '301USA-C', 300000, 'Tooth Paste', 'This is Mr Whites. Antibacterial tooth paste.', '2024-01-25 17:04:25', '2024-01-25 17:06:36'),
(3, '101USA-A', 240000, 'Socks', 'This is Bata socks. Its worlds first antibacterial sock.', '2024-01-25 17:05:31', '2024-01-25 17:05:31'),
(5, 'USA994-A1', 210000, 'Vaccine', 'This is Johnsons&John. Its worlds third COVID19 vaccine.', '2024-01-25 17:08:54', '2024-01-25 17:08:54'),
(7, '1001-USA-A', 1000000, 'Typo Face Mask', 'This is a good mask.', '2024-01-25 17:25:02', '2024-01-25 17:25:02'),
(8, 'USA2023A1', 1000, 'Logitec Mouse', 'Best mouse in the world now.', '2024-01-25 17:25:58', '2024-01-25 17:27:24'),
(9, 'R15-2024', 10, 'Yamaha', 'This is an indonesian bike from Yamaha.', '2024-01-25 17:29:38', '2024-01-25 17:29:38'),
(10, 'R25-2021', 5, 'Yamaha', 'This is a 250cc bike from Japan Yamaha company.', '2024-01-27 04:20:05', '2024-01-27 04:20:05'),
(12, '2024FIFA', 100, 'Football Game', 'Fifa 2024 is a EA game. This is the best seller game.', '2024-01-27 04:51:24', '2024-01-27 04:51:24'),
(13, '2021FIFA', 5, 'Football Game', 'This is an old version of the FIFA. This is still in demand.', '2024-01-27 05:05:11', '2024-01-27 05:05:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(20, 'mosharof', 'mosharof@gmail.com', NULL, '$2y$10$A6OtuacFVdOtNBeasBaZwuh/jLaAVDAWwzIAfW13JPFIaR6i5YbOK', '3KcByySb5MSQRTMbE5UUpwPtfRJ9MuTqMuj6tC6sxcIO5uu1wCeJ1tRTkMML', '2024-01-25 17:09:55', '2024-01-25 17:09:55', 1),
(21, 'Ali', 'ali@gmail.com', NULL, '$2y$10$onKf/N/gRj.AYOliV0y2LeFLZrVK5MYDQME6hpJhZ7kPEj6db8Gbi', 'qkXyJtosiqYaxNTxClXki2UDCv0l9QhNTV6EGJwtdELM4515zEkFPbd40cFZ', '2024-01-25 17:21:59', '2024-01-25 17:21:59', 0),
(22, 'maksud', 'maksud@gmail.com', NULL, '$2y$10$Qy10m2RjA3RrjPY8aWVNv.GYRpCkJnuLVXTM6DxMFRtcnamZGAkxW', '7ms4LrMImpxNJCJmFNt6CFBQjtVJkIDOJKUNcUnnU9MZspBOAx8fNEKb6GrR', '2024-01-27 05:06:05', '2024-01-27 05:06:05', 1),
(23, 'hasim', 'hasim@gmail.com', NULL, '$2y$10$N9IOGd.wny3lsU4Gw8dZ2eFMFB7xEGS2VYaTT9TpYRXSo3DrxEA.G', NULL, '2024-01-27 05:06:28', '2024-01-27 05:06:28', 0),
(24, 'zarifa', 'zarifa@gmail.com', NULL, '$2y$10$wDZcr3CbJwAaHvD/sl0P4OAARGJ7nyX12Rx1JLwR.xm2B0M/i0TC6', NULL, '2024-01-27 05:06:51', '2024-01-27 05:06:51', 0),
(25, 'anika', 'anika@gmail.com', NULL, '$2y$10$45TP5MPHHkDDw/YBsXGtzuTUgk2YyJRFtcnZQK75X0SEwH5XxyoT2', NULL, '2024-01-27 05:07:12', '2024-01-27 05:07:12', 0),
(26, 'kamal', 'kamal@gmail.com', NULL, '$2y$10$04yx3LAxsxOHDsyK4zQEZedel7jsotPRPCxh18Ez5/zthX7PdkcM6', '2K9oIROLr4Sx7MHPqIBXjNkgwvZ7LnahUMWQ1yTYS73hw83vwAmDeLRtUcea', '2024-01-27 05:07:33', '2024-01-27 05:07:33', 0),
(27, 'Ahsan', 'ahsan@gmail.com', NULL, '$2y$10$MfIYOjNVFLX53tA6/lZ5m.B7hxcnk8KtEIOOLpoGqMdizxuT29Ecu', NULL, '2024-01-27 05:07:52', '2024-01-27 05:07:52', 1),
(28, 'Al Ahsan', 'alahsan@gmail.com', NULL, '$2y$10$0k9bHGzRhp9gR8EAdEiAW.14Ltg4v22fwxFhv296m5zpZ67R5MGke', NULL, '2024-01-27 05:08:19', '2024-01-27 05:08:19', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
