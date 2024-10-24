-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 23, 2024 at 12:09 PM
-- Server version: 10.4.17-MariaDB-log
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trekkers_club`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(6, 'Hiking', 'Join Thrill Trekkers Club for an unforgettable hiking adventure, perfect for all levels. Explore rugged trails, lush forests, and stunning mountains with our expert guides. Discover hidden gems, learn about local wildlife, and enjoy breathtaking views. Lace up your boots for an outdoor journey filled with excitement, discovery, and a deep connection to nature.', '2024-10-21 15:51:41', '2024-10-21 22:46:43'),
(8, 'Kayaking', 'Experience the beauty of nature with Thrill Trekkers Club\'s kayaking adventures! Paddle through serene waters surrounded by breathtaking landscapes, perfect for beginners and seasoned kayakers alike. Our guided tours ensure a safe and enjoyable experience, allowing you to connect with nature and explore hidden gems along the way. Join us for an unforgettable day on the water!', '2024-10-21 20:17:43', '2024-10-21 20:17:43'),
(9, 'Camping', 'Escape the hustle and bustle with Thrill Trekkers Club\'s camping trips! Immerse yourself in the great outdoors, where you\'ll learn essential survival skills and enjoy activities like hiking, fishing, and stargazing. Whether you\'re a seasoned camper or new to the experience, our friendly guides will help you create unforgettable memories around the campfire. Join us for a rejuvenating retreat in nature!', '2024-10-21 20:18:08', '2024-10-21 20:18:08'),
(10, 'rock climbing', 'ejygghkgkjugigug', '2024-10-21 22:58:58', '2024-10-21 22:58:58');

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
(5, '2024_10_20_180328_add_columns_to_users_table', 2),
(6, '2024_10_21_185326_create_activities_table', 3),
(7, '2024_10_21_185421_create_sessions_table', 4),
(8, '2024_10_21_211607_add_slots_available_column_to_sessions_table', 5),
(9, '2024_10_21_213632_update_duration_column_to_sessions_table', 6),
(11, '2024_10_22_003821_create_participants_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `session_id` bigint(20) UNSIGNED NOT NULL,
  `difficulty_level` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id`, `user_id`, `session_id`, `difficulty_level`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 0, '2024-10-21 18:54:12', '2024-10-21 18:54:12'),
(2, 1, 7, 0, '2024-10-21 18:58:27', '2024-10-21 18:58:27'),
(3, 1, 6, 0, '2024-10-21 18:58:31', '2024-10-21 18:58:31'),
(4, 1, 6, 0, '2024-10-21 18:58:34', '2024-10-21 18:58:34'),
(5, 1, 7, 0, '2024-10-21 18:58:47', '2024-10-21 18:58:47'),
(6, 1, 6, 0, '2024-10-21 18:58:51', '2024-10-21 18:58:51'),
(7, 1, 6, 0, '2024-10-21 18:59:16', '2024-10-21 18:59:16'),
(8, 1, 7, 0, '2024-10-21 18:59:24', '2024-10-21 18:59:24'),
(9, 1, 6, 0, '2024-10-21 19:00:07', '2024-10-21 19:00:07'),
(10, 1, 7, 0, '2024-10-21 19:00:10', '2024-10-21 19:00:10'),
(11, 1, 6, 0, '2024-10-21 19:01:16', '2024-10-21 19:01:16'),
(12, 1, 6, 0, '2024-10-21 19:03:22', '2024-10-21 19:03:22'),
(13, 1, 6, 0, '2024-10-21 19:07:12', '2024-10-21 19:07:12'),
(14, 1, 6, 0, '2024-10-21 19:11:23', '2024-10-21 19:11:23'),
(15, 1, 6, 0, '2024-10-21 19:12:53', '2024-10-21 19:12:53'),
(16, 1, 6, 0, '2024-10-21 19:20:02', '2024-10-21 19:20:02'),
(17, 1, 6, 0, '2024-10-21 19:20:03', '2024-10-21 19:20:03'),
(18, 1, 6, 0, '2024-10-21 19:20:04', '2024-10-21 19:20:04'),
(19, 1, 7, 0, '2024-10-21 19:58:13', '2024-10-21 19:58:13'),
(20, 1, 9, 0, '2024-10-21 20:00:51', '2024-10-21 20:00:51'),
(21, 1, 7, 0, '2024-10-21 20:03:46', '2024-10-21 20:03:46'),
(22, 1, 9, 0, '2024-10-21 20:12:42', '2024-10-21 20:12:42'),
(23, 6, 7, 0, '2024-10-21 21:11:23', '2024-10-21 21:11:23'),
(24, 1, 7, 0, '2024-10-21 22:56:09', '2024-10-21 22:56:09'),
(25, 6, 10, 0, '2024-10-21 23:01:21', '2024-10-21 23:01:21');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `activity_id` bigint(20) UNSIGNED NOT NULL,
  `date_time` datetime NOT NULL,
  `total_slots` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fees` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slots_available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `activity_id`, `date_time`, `total_slots`, `duration`, `location`, `fees`, `created_at`, `updated_at`, `slots_available`) VALUES
(6, 6, '2024-10-31 06:03:00', 25, 200, 'demo loc', '200.00', '2024-10-21 18:04:01', '2024-10-21 19:20:04', 0),
(7, 6, '2024-11-01 06:04:00', 23, 25, 'demo loc update', '333.00', '2024-10-21 18:05:13', '2024-10-21 22:56:09', 15),
(9, 6, '2024-11-01 07:31:00', 45, 34, '34sfdg', '234.00', '2024-10-21 19:32:07', '2024-10-21 20:12:41', 43),
(10, 10, '2024-10-24 11:04:00', 25, 30, 'demo loc', '500.00', '2024-10-21 23:00:28', '2024-10-21 23:01:20', 24),
(11, 6, '2024-11-01 15:57:00', 25, 22, 'erf', '250.00', '2024-10-23 03:57:47', '2024-10-23 03:57:47', 25);

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
  `is_admin` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `age` int(10) UNSIGNED DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medical_condition` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dietary_preference` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`, `age`, `phone`, `emergency_contact`, `medical_condition`, `dietary_preference`) VALUES
(1, 'Mufar', 'mufar@gmail.com', NULL, '$2y$10$Bda6X101HJwZmEg8JnGt1Og1JWGIQwWG0T7IdLYIcYTa3/qj9HIgK', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Sayeed', 'sayeed@gmail.com', NULL, '$2y$10$UBwTqEew4PZXnVQN2vg8u.7Kvn2d0E8mtLyvlmMpd3661rfFdwtTO', 0, NULL, '2024-10-21 21:09:22', '2024-10-21 23:47:29', 30, '01453654324', '0145365432411', 'Demo condition', 'Demo Preferance');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `participants_user_id_foreign` (`user_id`),
  ADD KEY `participants_session_id_foreign` (`session_id`);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_activity_id_foreign` (`activity_id`);

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
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `participants`
--
ALTER TABLE `participants`
  ADD CONSTRAINT `participants_session_id_foreign` FOREIGN KEY (`session_id`) REFERENCES `sessions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `participants_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `sessions_activity_id_foreign` FOREIGN KEY (`activity_id`) REFERENCES `activities` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
