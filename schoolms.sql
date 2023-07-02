-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2023 at 04:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolms`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:active,1:inative',
  `is_delete` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:no,1:yes',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`, `status`, `is_delete`, `created_by`, `created_at`, `updated_at`) VALUES
(1, '7A', 0, 0, 8, '2023-06-15 01:46:25', '2023-06-14 18:50:30'),
(2, '7B', 0, 0, 8, '2023-06-15 01:46:52', '0000-00-00 00:00:00'),
(3, '7C', 0, 0, 8, '2023-06-15 01:46:52', '0000-00-00 00:00:00'),
(4, '7D', 0, 0, 8, '2023-06-15 01:46:52', '0000-00-00 00:00:00'),
(5, '7E', 0, 0, 8, '2023-06-15 01:46:52', '0000-00-00 00:00:00'),
(6, '7F', 0, 0, 8, '2023-06-15 01:46:52', '0000-00-00 00:00:00'),
(7, '7G', 0, 0, 8, '2023-06-15 01:46:52', '0000-00-00 00:00:00'),
(8, '7H', 0, 0, 8, '2023-06-15 01:46:52', '0000-00-00 00:00:00'),
(9, '7I', 0, 0, 8, '2023-06-15 01:46:52', '0000-00-00 00:00:00'),
(10, '7J', 0, 0, 8, '2023-06-15 01:46:52', '0000-00-00 00:00:00'),
(11, '7K', 0, 0, 8, '2023-06-15 01:46:52', '2023-06-14 18:18:31'),
(12, '9A', 0, 0, 8, '2023-06-15 01:46:52', '0000-00-00 00:00:00'),
(13, '9B', 0, 0, 8, '2023-06-15 01:46:52', '0000-00-00 00:00:00'),
(14, '9C', 0, 0, 8, '2023-06-15 01:46:52', '0000-00-00 00:00:00'),
(15, '9D', 0, 0, 8, '2023-06-15 01:46:52', '0000-00-00 00:00:00'),
(16, '9E', 0, 0, 8, '2023-06-15 01:46:52', '0000-00-00 00:00:00'),
(17, '9F', 0, 0, 8, '2023-06-15 01:46:52', '0000-00-00 00:00:00'),
(18, '9G', 0, 0, 8, '2023-06-15 01:46:52', '0000-00-00 00:00:00'),
(19, '9H', 0, 0, 8, '2023-06-15 01:46:52', '0000-00-00 00:00:00'),
(20, '9I', 0, 0, 8, '2023-06-15 01:46:52', '0000-00-00 00:00:00'),
(21, '9J', 0, 0, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, '10A', 0, 1, 1, '0000-00-00 00:00:00', '2023-06-15 13:30:48'),
(23, '10B', 0, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, '10C', 0, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, '10D', 0, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, '10E', 0, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, '10F', 0, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, '10G', 0, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, '10H', 0, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, '10I', 0, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, '10J', 0, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, '8A', 0, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, '8B', 0, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, '8C', 0, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, '8D', 0, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, '8E', 0, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, '8F', 0, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, '8G', 0, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, '8H', 0, 0, 1, '2023-06-15 01:46:15', '0000-00-00 00:00:00'),
(40, '8I', 0, 0, 1, '2023-06-15 01:45:52', '0000-00-00 00:00:00'),
(41, '8J', 0, 0, 1, '2023-06-15 01:45:42', '0000-00-00 00:00:00'),
(66, '8K', 0, 0, 1, '2023-06-15 08:57:53', '2023-06-15 17:32:26'),
(67, '10A', 0, 0, 1, '2023-06-15 13:31:13', '2023-06-15 13:31:13');

-- --------------------------------------------------------

--
-- Table structure for table `class_subject`
--

CREATE TABLE `class_subject` (
  `id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_subject`
--

INSERT INTO `class_subject` (`id`, `class_id`, `subject_id`, `created_by`, `is_delete`, `status`, `created_at`, `updated_at`) VALUES
(50, 67, 7, 17, 0, 0, '2023-06-17 16:36:21', '2023-06-17 16:36:21'),
(51, 67, 2, 17, 0, 0, '2023-06-17 16:36:21', '2023-06-17 16:36:21'),
(52, 67, 4, 17, 0, 0, '2023-06-17 16:36:21', '2023-06-17 16:36:21'),
(53, 67, 3, 17, 0, 0, '2023-06-17 16:36:21', '2023-06-17 16:36:21'),
(54, 23, 7, 17, 0, 0, '2023-06-17 16:36:30', '2023-06-17 16:36:30'),
(55, 23, 2, 17, 0, 0, '2023-06-17 16:36:30', '2023-06-17 16:36:30'),
(56, 23, 4, 17, 0, 0, '2023-06-17 16:36:30', '2023-06-17 16:36:30'),
(57, 23, 3, 17, 0, 0, '2023-06-17 16:36:30', '2023-06-17 16:36:30'),
(58, 9, 7, 17, 0, 0, '2023-07-02 02:10:14', '2023-07-02 02:10:14'),
(59, 9, 2, 17, 0, 0, '2023-07-02 02:10:14', '2023-07-02 02:10:14'),
(60, 9, 4, 17, 0, 0, '2023-07-02 02:10:14', '2023-07-02 02:10:14'),
(61, 9, 3, 17, 0, 0, '2023-07-02 02:10:14', '2023-07-02 02:10:14');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` tinyint(255) DEFAULT 0 COMMENT '0:គណិតវិទ្យា\r\n1:សិក្សាសង្គម\r\n2:វិទ្យាសាស្រ្ត\r\n3:ភាសារខ្មែរ\r\n4:English',
  `created_by` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:active, 1:inactive',
  `is_delete` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:not, 1:yes',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `type`, `created_by`, `status`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 'សីលធម', 0, 1, 0, 1, '2023-06-15 07:22:25', '2023-06-15 07:29:46'),
(2, 'ធរណីមាត្រ', 0, 1, 0, 0, '2023-06-15 07:30:17', '2023-06-15 07:57:38'),
(3, 'ពិជគណិត', 0, 1, 0, 0, '2023-06-15 07:30:52', '2023-06-15 07:30:52'),
(4, 'ប្រវត្តិវិទ្យា', 1, 1, 0, 0, '2023-06-15 07:44:25', '2023-06-15 07:44:25'),
(7, 'English', 4, 17, 0, 0, '2023-06-17 16:35:49', '2023-07-01 08:30:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(250) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `current_address` varchar(250) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `date_of_join` date DEFAULT NULL,
  `religion` varchar(58) DEFAULT NULL,
  `mobile_number` varchar(15) DEFAULT NULL,
  `profile_pic` varchar(100) DEFAULT NULL,
  `user_type` tinyint(4) NOT NULL DEFAULT 3 COMMENT '1:admin, 2:teacher, 3:student, 4:parent',
  `is_delete` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:not delete,1:deteted',
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:active,1:inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `subject_id`, `gender`, `current_address`, `date_of_birth`, `date_of_join`, `religion`, `mobile_number`, `profile_pic`, `user_type`, `is_delete`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, 'Admin@admin.com', NULL, '$2y$10$f/SeyLDYSF/TsmgX9qB/C.H7W9Eaixn03rnrnsZyu4yRaODNHix2e', 'n5wjTfvelQyEIaPFy76iGXPt3RBiMy2AnGuCmj1D1e6mGmmbb1ss14w2Ottb', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, '2023-06-13 07:24:07', '2023-06-14 01:24:06'),
(2, 'Teacher', NULL, 'teacher@gmail.com', NULL, '$2y$10$D0b5EnZS9Tr8uGjtWVJIb.cSyQP2VN/05sJ5IW18cKdwpAoyxWfvG', 'sIF1x466qdEi8C9l85Uiw9T5GrQjlJa8amjp0RzDkwjmWe542N7A03U2Uux3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 0, '2023-06-13 07:56:07', '2023-06-30 23:12:19'),
(3, 'Student', NULL, 'student@gmail.com', '2023-06-14 07:56:59', '$2y$10$D0b5EnZS9Tr8uGjtWVJIb.cSyQP2VN/05sJ5IW18cKdwpAoyxWfvG', 'jmV1vlRqtI4ZhOaZtLRyby41YPoayzliWQz9PDMYaOz0c7LMujiWr4yZ1R55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 0, 0, '2023-06-13 07:56:07', NULL),
(4, 'Parent', NULL, 'parent@gmail.com', '2023-06-14 07:56:59', '$2y$10$D0b5EnZS9Tr8uGjtWVJIb.cSyQP2VN/05sJ5IW18cKdwpAoyxWfvG', 'sIF1x466qdEi8C9l85Uiw9T5GrQjlJa8amjp0RzDkwjmWe542N7A03U2Uux3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 0, 0, '2023-06-13 07:56:07', NULL),
(5, 'Chhunleang', NULL, 'leangmini30@gmail.com', '2023-06-14 07:56:59', '$2y$10$D0b5EnZS9Tr8uGjtWVJIb.cSyQP2VN/05sJ5IW18cKdwpAoyxWfvG', 'IQcEbLGT5IzajKZWz2aNNX4CDeYwUe0SbcR1ulU1rXNLmjYXnDx7mcBgq8K7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 0, 0, '2023-06-13 07:56:07', '2023-06-14 00:14:59'),
(6, 'Khunhy Thouen', NULL, 'Khunhy@mail.com', NULL, '$2y$10$0.5P.qHpKRDuEUenxvgqr.bUDGV0KXSvGVGEEZ7O1LiyCYIa2DIOe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 0, 0, '2023-06-14 02:14:05', '2023-06-14 02:14:05'),
(7, 'Mom Sokunthea', NULL, 'sokunthea@gmail.com', NULL, '$2y$10$A.aBJUBk/1NxSGPVGts5OODFUuwJ6uP..EXB0ZAj14SLMBBUKcrXW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 0, 0, '2023-06-14 02:17:06', '2023-06-17 10:19:39'),
(8, 'Mom Dararoad', NULL, 'Dararoad@gmail.com', NULL, '$2y$10$FYguyIxi0UW/bVP1IrPKh.R4hggcQwdXONB6SWOwF0VlEkUN51pAe', 'gsRehhJPak35GtEPYHAubV38iLGWaP', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, '2023-06-14 02:18:36', '2023-06-14 04:08:24'),
(9, 'Seyla', NULL, 'Seyla@gmail.com', NULL, '$2y$10$9cUIXGIRfXstXty1H2zWjupFQPJdAu36q5osTqCO/0nhSKkAitwl.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, '2023-06-14 02:20:30', '2023-06-14 02:20:30'),
(14, 'Siva', NULL, 'Siva@gmail.com', NULL, '$2y$10$5.Bd3EotkkBZY7vqLxUQietvi1YT.YknZNQ1dBaM0BGE9TphZbCyO', 'J4v7FGG3yuRH4j78h2bDh6jC4yuGXPX8WLsTV2IW49Zxf1LTyeC179QRqVHj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '2023-06-14 02:33:11', '2023-06-14 03:22:41'),
(16, 'admin', NULL, 'admin@test.com', NULL, '$2y$10$qC5zf8O8zrA3KHpgKm2FXuQ7bMf8w3rfj2ED2WoxrAxxE6PadJ6ty', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, '2023-06-14 07:32:36', '2023-06-14 07:48:48'),
(17, 'Tuy Chhunleang', NULL, 'Tuychhunleang@gmail.com', NULL, '$2y$10$PP8tzf8UnQB2t1gJSNqG4e4tsi7A7iV0uQo4/a04MG6uetdq9OKz6', 'CYJScgHnjtHBVJkPlJaUbcdVK7EJG1TeGHRTBnzDlDywdsvRqiv7Sf76klUm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, '2023-06-15 10:30:03', '2023-06-17 10:12:35'),
(32, 'Tuy Chhunleang', 'Chhunleang', 'Chhunleang@gmail.com', NULL, '$2y$10$AiQJVQo/byJ9S/bicx3qZe2iYzlRy6QuamLg6K/DgYVcYBQeeiQUS', NULL, 2, '1', 'Khmer', '2023-06-30', '2023-06-30', 'Khmer', 'Khmer', 'yiufcerlg1mpvoisgw70.jpg', 2, 0, 0, '2023-06-30 22:18:25', '2023-07-01 02:09:29'),
(33, 'Mom Dararoad', 'Dararoad', 'Momdararoad@gmail.com', NULL, '$2y$10$hGStt7sJORwdSnUJkd11YOcgKJDcHhPIulwL7ydA0h0oEn.bwdLiG', NULL, 1, '1', 'Cambodia', '2023-07-01', '2023-07-01', 'Khmer', '+855966106833', '4svihcbig1vseu1sxsn5.JPG', 2, 0, 0, '2023-06-30 23:42:39', '2023-07-01 01:43:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_subject`
--
ALTER TABLE `class_subject`
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
-- Indexes for table `subject`
--
ALTER TABLE `subject`
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
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `class_subject`
--
ALTER TABLE `class_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
