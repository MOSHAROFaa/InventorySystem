-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jan 25, 2024 at 07:09 AM
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
(5, '2024_01_22_194232_product_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mosharofalahsan@gmail.com', '$2y$10$2Mr1/11TQzkX3ntiC7E8/u1wo4UO6HlClrW8UXAo9HuINMqLI51My', '2024-01-24 18:01:28');

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
(1, '101', 10, 'Flower Soap', 'The lifebuoy is an antibacterial soap.', '2024-01-22 13:23:01', '2024-01-24 02:50:47'),
(2, '201-A', 100, 'Hand Wash', 'International brand Lux is an antibacterial handwash. It\'s a product of uniliver company and is distributed all over the world.', '2024-01-22 13:27:42', '2024-01-22 13:29:24'),
(4, '301-C', 300, 'Tooth Paste', 'This is Mr Whites. Antibacterial tooth paste.', '2024-01-22 16:36:18', '2024-01-22 16:36:18'),
(5, '401-A', 3500, 'Salt', 'ACI salt is an antibacterial salt.', '2024-01-22 17:16:36', '2024-01-22 21:09:37'),
(8, '1001-B', 40000, 'Flower Pen', 'Designed pen for kids.', '2024-01-23 06:46:42', '2024-01-23 06:57:37'),
(9, '506-B', 4500, 'Mouse Pad', 'Logitech mouse pad is the best. Mostly professionals and gamers buy this.', '2024-01-24 04:49:19', '2024-01-24 04:49:19'),
(10, '615-AA', 800200, 'Mobile Cover', 'Plastic minion mobile cover. This cover fits well for POCO phones.', '2024-01-24 07:09:17', '2024-01-24 07:09:17'),
(15, '60A-01', 60120000, 'Bike Tyre', 'Perilli diabolo rosso are one of the best tires around the globe. It has thick layer of rubber & net.', '2024-01-24 07:40:24', '2024-01-24 09:15:42'),
(17, '10EU-AAA', 16000000, 'Duracel Battery', 'This battery is good and cheaper than other international brands.', '2024-01-24 09:21:12', '2024-01-24 09:21:12'),
(18, '19EU-87', 3901000, 'Typo Face Mask', 'Respirator masks, or “respirators,” like the N95 give the highest level of protection against the coronavirus, according to the CDC.', '2024-01-24 11:08:58', '2024-01-24 11:08:58'),
(19, '1001-USA-A', 100000000, 'Vaccine', 'Vaccines are medications that are used to make people immune to certain diseases. They contain the bacteria or virus, or parts of the bacteria or virus that cause illness and disease. The bacteria or virus is included in the vaccine so that the immune.', '2024-01-24 11:18:24', '2024-01-24 11:18:24'),
(20, '100ZSW40', 150, 'Nutty', 'Nutty is a biscuit combined with flour and nut.', '2024-01-24 17:14:05', '2024-01-24 20:44:39'),
(21, '22001EUU', 10000, 'Socks', 'Bata socks are good.', '2024-01-24 20:47:33', '2024-01-24 20:47:33');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mosharof', 'mosharof@gmail.com', NULL, '$2y$10$PhzTqsw.RMM60FCCpP9mr.UAUWVUTVGsK.MNv2lE8lxppD.Hd16UG', 'uyBcj6fx59q1RbKVY5fuhLnzv10qvN22iIqoa3RvMfDynGnOFXgI3o83hqpc', '2024-01-22 18:33:03', '2024-01-22 18:46:21'),
(2, 'Ali', 'ali@gmail.com', NULL, '$2y$10$e0lJFFGaL0fAsHgkf8cEJ.M5Ld4fA98v82PAIuBWJNblcJiEaXtO6', 'oklxnZ0ucKVjSsz3T8uy8G8xdJ4X864VrIaCLMbJl64UhjHEMZizOLVHYmJv', '2024-01-23 05:57:56', '2024-01-23 06:00:56'),
(3, 'Maksudul', 'maksud123@gmail.com', NULL, '$2y$10$2m6/hofa002jIrB9Qgv1ZuvKzrj3LIEuEGQxPtp6BMujlHZhKi8Ly', 'pernDm9ojs49zuO5O18FWcWsOPxZh5LxRN2Sxf3Qi2ZoOPQacO6EWaUMBxJq', '2024-01-24 17:04:18', '2024-01-24 17:22:17');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
