-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-06-12 03:17:22
-- サーバのバージョン： 10.4.32-MariaDB
-- PHP のバージョン: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `jmiyazaki`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'カフェ', NULL, '2024-06-03 00:39:33', NULL),
(2, 'ランチ', NULL, '2024-06-03 00:39:33', NULL),
(3, '居酒屋', NULL, '2024-06-03 00:39:33', NULL),
(4, 'on', NULL, '2024-06-11 15:30:11', '2024-06-11 15:30:11');

-- --------------------------------------------------------

--
-- テーブルの構造 `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `title`, `comment`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'コシジロヤマドリ', '123@gmail.com', '赤', 'こんにちは', NULL, '2024-06-03 00:39:33', NULL),
(2, 'らいぶびじねす', 'abc@gmail.com', '青', 'Hello', NULL, '2024-06-03 00:39:33', NULL),
(3, 'KOBAYASHI', 'abc123@gmail.com', '黄', 'お問い合わせしたいことがあります。', NULL, '2024-06-03 00:39:33', NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `failed_jobs`
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
-- テーブルの構造 `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `favorites`
--

INSERT INTO `favorites` (`id`, `store_id`, `member_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, '2024-06-03 00:39:34', NULL),
(2, 2, 2, '2024-06-05 00:42:22', '2024-06-03 00:39:34', '2024-06-04 15:42:22'),
(3, 3, 3, NULL, '2024-06-03 00:39:34', NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `likes`
--

INSERT INTO `likes` (`id`, `store_id`, `member_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, '2024-06-03 00:39:34', NULL),
(2, 2, 2, '2024-06-05 00:42:29', '2024-06-03 00:39:34', '2024-06-04 15:42:29'),
(3, 3, 3, NULL, '2024-06-03 00:39:34', NULL),
(4, 1, 2, NULL, '2024-06-03 00:39:34', NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `locations`
--

INSERT INTO `locations` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '宮崎市', NULL, '2024-06-03 00:39:33', NULL),
(2, '延岡市', NULL, '2024-06-03 00:39:33', NULL),
(3, '都城市', NULL, '2024-06-03 00:39:33', NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `thumbnail` varchar(50) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `password`, `thumbnail`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'kenken', 'aaaa@gmail.com', '$2y$10$mZGXqI/Ox7Lp8JmDcA5.pO2lzjPNt8sHNw1Bo3qRJHeTg0dLp7aIS', 'img', NULL, '2024-06-03 00:34:59', NULL),
(2, 'ponpon', 'bbbb@gmail.com', '$2y$12$Lb00uK.woBcd9xI.ln19GO29Q5pgkDXO8hjbVEiexU38Zz0DWwXp2', 'img', NULL, '2024-06-03 00:34:59', '2024-06-03 17:11:29'),
(3, 'tantan', 'cccc@gmail.com', '7777', 'img', NULL, '2024-06-03 00:34:59', NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_22_061026_add_two_factor_columns_to_users_table', 1),
(5, '2024_05_22_061112_create_personal_access_tokens_table', 1),
(6, '2024_05_27_021144_create_members_table', 1),
(7, '2024_05_27_022212_create_stores_table', 1),
(8, '2024_05_27_130703_create_categories_table', 1),
(9, '2024_05_27_131749_create_locations_table', 1),
(10, '2024_05_27_133608_create_images_table', 1),
(11, '2024_05_27_134033_create_favorites_table', 1),
(12, '2024_05_28_015516_create_store_category_table', 1),
(13, '2024_05_28_022612_create_posts_table', 1),
(14, '2024_05_28_023510_create_contacts_table', 1),
(15, '2024_05_28_023917_create_likes_table', 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `personal_access_tokens`
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
-- テーブルの構造 `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED NOT NULL,
  `post_img` varchar(255) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `posts`
--

INSERT INTO `posts` (`id`, `date`, `comment`, `store_id`, `member_id`, `post_img`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2024-05-28 00:00:00', 'testcomment1', 1, 1, NULL, NULL, '2024-06-03 00:39:33', NULL),
(2, '2024-05-29 00:00:00', 'testcomment2', 2, 2, NULL, NULL, '2024-06-03 00:39:33', NULL),
(3, '2024-05-30 00:00:00', 'testcomment3', 3, 3, NULL, NULL, '2024-06-03 00:39:33', NULL),
(4, '2024-06-11 23:39:08', 'ert', 1, 2, NULL, NULL, '2024-06-11 14:39:08', '2024-06-11 14:39:08'),
(5, '2024-06-11 23:44:16', 'fghjkl;:', 1, 2, NULL, NULL, '2024-06-11 14:44:16', '2024-06-11 14:44:16'),
(6, '2024-06-12 00:15:58', 'jhgfd', 1, 2, NULL, NULL, '2024-06-11 15:15:58', '2024-06-11 15:15:58'),
(7, '2024-06-12 00:21:10', 'jhgfd', 1, 2, NULL, NULL, '2024-06-11 15:21:11', '2024-06-11 15:21:11'),
(8, '2024-06-12 00:25:03', 'jhgfd', 1, 2, NULL, NULL, '2024-06-11 15:25:03', '2024-06-11 15:25:03'),
(9, '2024-06-12 00:27:46', 'jhgfd', 1, 2, NULL, NULL, '2024-06-11 15:27:46', '2024-06-11 15:27:46'),
(10, '2024-06-12 00:30:11', 'jhgfd', 1, 2, NULL, NULL, '2024-06-11 15:30:11', '2024-06-11 15:30:11');

-- --------------------------------------------------------

--
-- テーブルの構造 `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('00qlFV7caXBQVwErV2YPiWVOvTXeKGknc5VjGGjE', NULL, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRmZid1B0aGNXZUNyc0NqMnJKaG5OalpzdGU3aWtVTFFpSDlyR1hZcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly9sb2NhbGhvc3QvbmV3cG9zdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1718148932),
('oepkEcAgWmBVa7NWNGR5Ymp8w2FhswFyW37o4LXG', NULL, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiNWdOQWc3WGlIVTVIeW5sQlNKTWRLZjE3dVduWm8xR2R5dVRhbjd6VSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9sb2NhbGhvc3QvZGV0YWlsLzIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUzOiJsb2dpbl9tZW1iZXJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6OToibWVtYmVyX2lkIjtpOjI7fQ==', 1718152212);

-- --------------------------------------------------------

--
-- テーブルの構造 `stores`
--

CREATE TABLE `stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `postal_code` varchar(8) DEFAULT NULL,
  `location_id` bigint(20) NOT NULL,
  `address_level3` varchar(255) DEFAULT NULL,
  `tel` varchar(255) NOT NULL,
  `web` varchar(255) DEFAULT NULL,
  `access` varchar(50) DEFAULT NULL,
  `store_img` varchar(255) DEFAULT NULL,
  `store_comment` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `stores`
--

INSERT INTO `stores` (`id`, `member_id`, `name`, `postal_code`, `location_id`, `address_level3`, `tel`, `web`, `access`, `store_img`, `store_comment`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'ひー', '8880000', 1, '佐土原町', '985880000', 'hi.jp', '駅から徒歩５分', NULL, '', NULL, '2024-06-03 02:37:50', NULL),
(2, 2, 'ふー', '8880001', 2, '田野町', '985880001', 'fu.jp', '駅から車で５分', NULL, '', NULL, '2024-06-03 02:37:49', NULL),
(3, 3, 'みー', '8880002', 1, '清武町', '985880002', 'mi.jp', '駅前', NULL, '', NULL, '2024-06-03 02:37:51', NULL),
(4, 2, 'ふー', NULL, 3, NULL, '01234567890', NULL, NULL, NULL, '', NULL, '2024-06-11 15:30:11', '2024-06-11 15:30:11');

-- --------------------------------------------------------

--
-- テーブルの構造 `store_category`
--

CREATE TABLE `store_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `store_category`
--

INSERT INTO `store_category` (`id`, `store_id`, `category_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, '2024-06-03 00:39:10', NULL),
(2, 2, 2, NULL, '2024-06-03 00:39:10', NULL),
(3, 3, 3, NULL, '2024-06-03 00:39:10', NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- テーブルのインデックス `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- テーブルのインデックス `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- テーブルのインデックス `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- テーブルのインデックス `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- テーブルのインデックス `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- テーブルのインデックス `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- テーブルのインデックス `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `store_category`
--
ALTER TABLE `store_category`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- テーブルの AUTO_INCREMENT `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- テーブルの AUTO_INCREMENT `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- テーブルの AUTO_INCREMENT `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- テーブルの AUTO_INCREMENT `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- テーブルの AUTO_INCREMENT `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- テーブルの AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- テーブルの AUTO_INCREMENT `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- テーブルの AUTO_INCREMENT `stores`
--
ALTER TABLE `stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- テーブルの AUTO_INCREMENT `store_category`
--
ALTER TABLE `store_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
