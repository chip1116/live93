-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-06-12 03:00:56
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
-- テーブルの構造 `stores`
--

CREATE TABLE `stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `postal_code` varchar(8) NOT NULL,
  `location_id` bigint(20) NOT NULL,
  `address_level3` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `web` varchar(255) NOT NULL,
  `access` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `store_comment` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `stores`
--

INSERT INTO `stores` (`id`, `member_id`, `name`, `postal_code`, `location_id`, `address_level3`, `tel`, `web`, `access`, `image`, `store_comment`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'ひー', '8880000', 1, '佐土原町', '985880000', 'hi.jp', '駅から徒歩５分', '1717650457.png', 'comment', NULL, '2024-06-03 02:37:50', NULL),
(2, 2, 'ふー', '8880001', 2, '田野町', '985880001', 'fu.jp', '駅から車で５分', '1717650457.png', '', NULL, '2024-06-03 02:37:49', NULL),
(3, 3, 'みー', '8880002', 1, '清武町', '985880002', 'mi.jp', '駅前', '', '', NULL, '2024-06-03 02:37:51', NULL);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `stores`
--
ALTER TABLE `stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
