-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-06-11 06:40:07
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
-- テーブルの構造 `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED NOT NULL,
  `post_image` varchar(100) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `posts`
--

INSERT INTO `posts` (`id`, `date`, `comment`, `store_id`, `member_id`, `post_image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2024-05-28 00:00:00', 'testcomment1', 1, 1, '1717650457.png', NULL, '2024-06-03 00:39:33', NULL),
(2, '2024-05-29 00:00:00', 'testcomment2', 2, 2, NULL, NULL, '2024-06-03 00:39:33', NULL),
(3, '2024-05-30 00:00:00', 'testcomment3', 3, 3, NULL, NULL, '2024-06-03 00:39:33', NULL),
(4, '2024-06-06 05:04:44', 'aaaa', 1, 2, NULL, NULL, '2024-06-05 20:04:44', '2024-06-05 20:04:44'),
(5, '2024-06-06 05:07:37', 'bbbb', 1, 2, '1717650457.png', NULL, '2024-06-05 20:07:37', '2024-06-05 20:07:37'),
(6, '2024-06-06 05:07:37', 'bbbb', 1, 2, '1717650457.png', NULL, '2024-06-05 20:07:37', '2024-06-05 20:07:37'),
(7, '2024-06-11 01:58:06', 'qqqqqq', 1, 3, NULL, NULL, '2024-06-10 16:58:06', '2024-06-10 16:58:06'),
(8, '2024-06-11 02:01:59', 'qqqqqq', 1, 3, NULL, NULL, '2024-06-10 17:01:59', '2024-06-10 17:01:59'),
(9, '2024-06-11 02:02:52', 'qqqqqqqqqq', 1, 3, NULL, NULL, '2024-06-10 17:02:52', '2024-06-10 17:02:52'),
(10, '2024-06-11 02:04:08', 'qqqqqqqqqq', 1, 3, NULL, NULL, '2024-06-10 17:04:08', '2024-06-10 17:04:08'),
(11, '2024-06-11 02:05:00', 'qqqqqqqqqq', 1, 3, NULL, NULL, '2024-06-10 17:05:00', '2024-06-10 17:05:00'),
(12, '2024-06-11 02:08:45', 'llllllllll', 1, 2, 'C:\\xampp\\tmp\\php2A3A.tmp', NULL, '2024-06-10 17:08:45', '2024-06-10 17:08:45'),
(13, '2024-06-11 02:36:04', 'iiiiii', 1, 2, 'C:\\xampp\\tmp\\php2D20.tmp', NULL, '2024-06-10 17:36:04', '2024-06-10 17:36:04'),
(14, '2024-06-11 02:44:43', 'iiiiii', 1, 2, 'C:\\xampp\\tmp\\php1BB5.tmp', NULL, '2024-06-10 17:44:43', '2024-06-10 17:44:43'),
(15, '2024-06-11 02:45:09', 'bump', 1, 2, 'C:\\xampp\\tmp\\php7E58.tmp', NULL, '2024-06-10 17:45:09', '2024-06-10 17:45:09'),
(16, '2024-06-11 02:52:02', 'bump', 1, 2, 'C:\\xampp\\tmp\\phpCCAB.tmp', NULL, '2024-06-10 17:52:02', '2024-06-10 17:52:02'),
(17, '2024-06-11 03:01:28', 'bump', 1, 2, '1718074888.png', NULL, '2024-06-10 18:01:28', '2024-06-10 18:01:28');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
