-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2025 at 02:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk-karyawan-telkom`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatives`
--

CREATE TABLE `alternatives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alternatives`
--

INSERT INTO `alternatives` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Abdan', '2024-02-27 07:30:20', '2024-02-27 07:30:20'),
(2, 'Aziz', '2024-02-27 07:30:48', '2024-02-27 07:30:48'),
(3, 'Bella', '2024-02-27 07:31:22', '2024-02-27 07:31:22'),
(4, 'Erlin', '2024-02-27 07:31:43', '2024-02-27 07:31:43'),
(5, 'Ibrahim', '2024-02-27 07:32:08', '2024-02-27 07:32:08'),
(6, 'Hanum', '2024-02-27 07:32:36', '2024-02-27 07:32:36'),
(7, 'Galih', '2024-02-27 07:32:55', '2024-02-27 07:32:55');

-- --------------------------------------------------------

--
-- Table structure for table `alternativescores`
--

CREATE TABLE `alternativescores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alternative_id` bigint(20) UNSIGNED NOT NULL,
  `criteria_id` bigint(20) UNSIGNED NOT NULL,
  `rating_id` bigint(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alternativescores`
--

INSERT INTO `alternativescores` (`id`, `alternative_id`, `criteria_id`, `rating_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2024-02-27 07:30:20', '2024-02-27 07:30:20'),
(2, 1, 2, 8, '2024-02-27 07:30:20', '2024-02-27 07:30:20'),
(3, 1, 3, 15, '2024-02-27 07:30:20', '2024-02-27 07:30:20'),
(4, 1, 4, 22, '2024-02-27 07:30:20', '2024-02-27 07:30:20'),
(5, 1, 5, 29, '2024-02-27 07:30:20', '2024-02-27 07:30:20'),
(6, 2, 1, 2, '2024-02-27 07:30:48', '2024-02-27 07:30:48'),
(7, 2, 2, 9, '2024-02-27 07:30:48', '2024-02-27 07:30:48'),
(8, 2, 3, 16, '2024-02-27 07:30:48', '2024-02-27 07:30:48'),
(9, 2, 4, 23, '2024-02-27 07:30:48', '2024-02-27 07:30:48'),
(10, 2, 5, 30, '2024-02-27 07:30:48', '2024-02-27 07:30:48'),
(11, 3, 1, 3, '2024-02-27 07:31:22', '2024-02-27 07:31:22'),
(12, 3, 2, 10, '2024-02-27 07:31:22', '2024-02-27 07:31:22'),
(13, 3, 3, 17, '2024-02-27 07:31:22', '2024-02-27 07:31:22'),
(14, 3, 4, 24, '2024-02-27 07:31:22', '2024-02-27 07:31:22'),
(15, 3, 5, 31, '2024-02-27 07:31:22', '2024-02-27 07:31:22'),
(16, 4, 1, 4, '2024-02-27 07:31:43', '2024-02-27 07:31:43'),
(17, 4, 2, 11, '2024-02-27 07:31:43', '2024-02-27 07:31:43'),
(18, 4, 3, 18, '2024-02-27 07:31:43', '2024-02-27 07:31:43'),
(19, 4, 4, 25, '2024-02-27 07:31:43', '2024-02-27 07:31:43'),
(20, 4, 5, 32, '2024-02-27 07:31:43', '2024-02-27 07:31:43'),
(21, 5, 1, 5, '2024-02-27 07:32:08', '2024-02-27 07:32:08'),
(22, 5, 2, 12, '2024-02-27 07:32:08', '2024-02-27 07:32:08'),
(23, 5, 3, 19, '2024-02-27 07:32:08', '2024-02-27 07:32:08'),
(24, 5, 4, 26, '2024-02-27 07:32:08', '2024-02-27 07:32:08'),
(25, 5, 5, 33, '2024-02-27 07:32:08', '2024-02-27 07:32:08'),
(26, 6, 1, 6, '2024-02-27 07:32:36', '2024-02-27 07:32:36'),
(27, 6, 2, 13, '2024-02-27 07:32:36', '2024-02-27 07:32:36'),
(28, 6, 3, 20, '2024-02-27 07:32:36', '2024-02-27 07:32:36'),
(29, 6, 4, 27, '2024-02-27 07:32:36', '2024-02-27 07:32:36'),
(30, 6, 5, 34, '2024-02-27 07:32:36', '2024-02-27 07:32:36'),
(31, 7, 1, 7, '2024-02-27 07:32:55', '2024-02-27 07:32:55'),
(32, 7, 2, 14, '2024-02-27 07:32:55', '2024-02-27 07:32:55'),
(33, 7, 3, 21, '2024-02-27 07:32:55', '2024-02-27 07:32:55'),
(34, 7, 4, 28, '2024-02-27 07:32:55', '2024-02-27 07:32:55'),
(35, 7, 5, 35, '2024-02-27 07:32:55', '2024-02-27 07:32:55');

-- --------------------------------------------------------

--
-- Table structure for table `criteriaratings`
--

CREATE TABLE `criteriaratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `criteria_id` bigint(20) UNSIGNED NOT NULL,
  `rating` double(8,2) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `criteriaratings`
--

INSERT INTO `criteriaratings` (`id`, `criteria_id`, `rating`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 4.00, 'r11', '2024-02-27 06:45:22', '2024-02-27 06:45:22'),
(2, 1, 4.00, 'r21', '2024-02-27 07:15:20', '2024-02-27 07:15:20'),
(3, 1, 4.00, 'r31', '2024-02-27 07:15:32', '2024-02-27 07:15:32'),
(4, 1, 4.00, 'r41', '2024-02-27 07:15:45', '2024-02-27 07:15:45'),
(5, 1, 3.00, 'r51', '2024-02-27 07:15:57', '2024-02-27 07:17:39'),
(6, 1, 4.00, 'r61', '2024-02-27 07:16:05', '2024-02-27 07:16:05'),
(7, 1, 4.00, 'r71', '2024-02-27 07:16:13', '2024-02-27 07:16:13'),
(8, 2, 5.00, 'r12', '2024-02-27 07:18:30', '2024-02-27 07:18:30'),
(9, 2, 4.00, 'r22', '2024-02-27 07:18:50', '2024-02-27 07:18:50'),
(10, 2, 4.00, 'r32', '2024-02-27 07:19:19', '2024-02-27 07:19:19'),
(11, 2, 4.00, 'r42', '2024-02-27 07:19:50', '2024-02-27 07:19:50'),
(12, 2, 4.00, 'r52', '2024-02-27 07:20:02', '2024-02-27 07:20:02'),
(13, 2, 5.00, 'r62', '2024-02-27 07:20:26', '2024-02-27 07:20:26'),
(14, 2, 4.00, 'r72', '2024-02-27 07:20:59', '2024-02-27 07:20:59'),
(15, 3, 5.00, 'r13', '2024-02-27 07:21:59', '2024-02-27 07:21:59'),
(16, 3, 5.00, 'r23', '2024-02-27 07:22:10', '2024-02-27 07:22:10'),
(17, 3, 4.00, 'r33', '2024-02-27 07:22:21', '2024-02-27 07:22:21'),
(18, 3, 4.00, 'r43', '2024-02-27 07:22:38', '2024-02-27 07:22:38'),
(19, 3, 4.00, 'r53', '2024-02-27 07:23:28', '2024-02-27 07:23:28'),
(20, 3, 5.00, 'r63', '2024-02-27 07:23:56', '2024-02-27 07:23:56'),
(21, 3, 4.00, 'r73', '2024-02-27 07:24:07', '2024-02-27 07:24:07'),
(22, 4, 4.00, 'r14', '2024-02-27 07:25:07', '2024-02-27 07:25:07'),
(23, 4, 5.00, 'r24', '2024-02-27 07:25:18', '2024-02-27 07:25:18'),
(24, 4, 4.00, 'r34', '2024-02-27 07:25:31', '2024-02-27 07:25:31'),
(25, 4, 4.00, 'r44', '2024-02-27 07:25:44', '2024-02-27 07:25:44'),
(26, 4, 4.00, 'r54', '2024-02-27 07:26:04', '2024-02-27 07:26:04'),
(27, 4, 4.00, 'r64', '2024-02-27 07:26:27', '2024-02-27 07:26:27'),
(28, 4, 4.00, 'r74', '2024-02-27 07:26:46', '2024-02-27 07:26:46'),
(29, 5, 4.00, 'r15', '2024-02-27 07:27:15', '2024-02-27 07:27:15'),
(30, 5, 4.00, 'r25', '2024-02-27 07:27:24', '2024-02-27 07:27:24'),
(31, 5, 4.00, 'r35', '2024-02-27 07:27:33', '2024-02-27 07:27:33'),
(32, 5, 4.00, 'r45', '2024-02-27 07:27:41', '2024-02-27 07:27:41'),
(33, 5, 4.00, 'r55', '2024-02-27 07:27:49', '2024-02-27 07:27:49'),
(34, 5, 4.00, 'r65', '2024-02-27 07:27:57', '2024-02-27 07:27:57'),
(35, 5, 4.00, 'r75', '2024-02-27 07:28:05', '2024-02-27 07:28:05');

-- --------------------------------------------------------

--
-- Table structure for table `criteriaweights`
--

CREATE TABLE `criteriaweights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` enum('benefit','cost') NOT NULL,
  `weight` double(8,2) NOT NULL,
  `description` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `criteriaweights`
--

INSERT INTO `criteriaweights` (`id`, `name`, `type`, `weight`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Perilaku', 'benefit', 0.15, 'Kriteria perilaku', '2024-02-27 06:44:54', '2024-02-27 06:44:54'),
(2, 'Kehadiran', 'benefit', 0.20, 'Kriteria kehadiran', '2024-02-27 07:12:24', '2024-02-27 07:12:24'),
(3, 'Tanggung Jawab', 'benefit', 0.25, 'Kriteria tanggung jawab', '2024-02-27 07:12:47', '2024-02-27 07:12:47'),
(4, 'Kinerja', 'benefit', 0.25, 'Kriteria kinerja', '2024-02-27 07:13:06', '2024-02-27 07:13:06'),
(5, 'Prestasi kerja', 'benefit', 0.15, 'Kriteria prestasi kerja', '2024-02-27 07:13:28', '2024-02-27 07:13:28');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_27_022313_create_alternatives_table', 1),
(6, '2024_02_27_022559_create_criteriaweights_table', 2),
(7, '2024_02_27_022902_create_criteriaratings_table', 3),
(8, '2024_02_27_023809_create_alternativescores_table', 4),
(9, '2024_02_27_035014_add_roles_field_to_users_table', 5),
(10, '2014_10_12_100000_create_password_resets_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) NOT NULL DEFAULT 'USER'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES
(1, 'admin', 'admin@ittp.com', NULL, '$2y$12$5CsTV14jRHLUof6XoQ1TYO68rI6ZfxmZ28az4dymizuAqiDcC0uoW', NULL, '2024-02-26 21:09:18', '2024-02-26 21:09:18', 'ADMIN'),
(2, 'sfauzi', 'sfauzi@gmail.com', NULL, '$2y$12$tDDM6KMY4nw0.cXXsLG/TeUPAZ02m2qwxvBAzfiFYr.Ocyi9eZJ96', NULL, '2024-02-27 18:54:05', '2024-02-27 18:54:05', 'ADMIN'),
(3, 'speechlessmind', 'speechlessmind@gmail.com', NULL, '$2y$12$WLFALOOc93WE9yRTm9NMw.RD8RUN.WmxDPifAscgfZycykAPHRYOG', NULL, '2024-05-07 21:30:52', '2024-05-07 21:30:52', 'USER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatives`
--
ALTER TABLE `alternatives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alternativescores`
--
ALTER TABLE `alternativescores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alternativescores_alternative_id_foreign` (`alternative_id`),
  ADD KEY `alternativescores_criteria_id_foreign` (`criteria_id`);

--
-- Indexes for table `criteriaratings`
--
ALTER TABLE `criteriaratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `criteriaratings_criteria_id_foreign` (`criteria_id`);

--
-- Indexes for table `criteriaweights`
--
ALTER TABLE `criteriaweights`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `alternatives`
--
ALTER TABLE `alternatives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `alternativescores`
--
ALTER TABLE `alternativescores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `criteriaratings`
--
ALTER TABLE `criteriaratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `criteriaweights`
--
ALTER TABLE `criteriaweights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alternativescores`
--
ALTER TABLE `alternativescores`
  ADD CONSTRAINT `alternativescores_alternative_id_foreign` FOREIGN KEY (`alternative_id`) REFERENCES `alternatives` (`id`),
  ADD CONSTRAINT `alternativescores_criteria_id_foreign` FOREIGN KEY (`criteria_id`) REFERENCES `criteriaweights` (`id`);

--
-- Constraints for table `criteriaratings`
--
ALTER TABLE `criteriaratings`
  ADD CONSTRAINT `criteriaratings_criteria_id_foreign` FOREIGN KEY (`criteria_id`) REFERENCES `criteriaweights` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
