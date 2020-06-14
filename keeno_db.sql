-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2020 at 06:13 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keeno_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$CGTGuQxac1PhINzn0pO.AekR7CdK70xGi2NGHCa..lxX3CvpFOjlq', NULL, '2020-03-05 18:47:57', '2020-03-05 18:47:57');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image_url`, `created_at`, `updated_at`) VALUES
(1, 'Then they all cheered. Alice.', 'https://lorempixel.com/640/480/?99337', '2020-06-13 16:11:46', '2020-06-13 16:11:46'),
(2, 'I\'ll set Dinah at you!\' There.', 'https://lorempixel.com/640/480/?92918', '2020-06-13 16:11:46', '2020-06-13 16:11:46'),
(3, 'Her first idea was that you.', 'https://lorempixel.com/640/480/?64476', '2020-06-13 16:11:46', '2020-06-13 16:11:46'),
(4, 'Queen: so she took courage.', 'https://lorempixel.com/640/480/?70650', '2020-06-13 16:11:46', '2020-06-13 16:11:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 3),
(7, '2014_10_12_100000_create_password_resets_table', 3),
(8, '2019_08_19_000000_create_failed_jobs_table', 3),
(9, '2020_01_16_073354_create_admins_table', 3),
(25, '2020_06_11_231402_create_products_table', 15),
(26, '2020_06_11_232715_create_categories_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_featured` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `rating` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `images_url`, `is_featured`, `category_id`, `price`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'cumque impedit asperiores', 'Alice heard the Queen shouted at the end of his teacup and bread-and-butter, and then Alice put down the middle, wondering how she would have appeared to them to be in Bill\'s place for a few minutes.', 'https://lorempixel.com/640/480/?11567', 'Aut.', 1, '43261.10', 7, '2020-06-13 16:11:46', '2020-06-13 16:11:46'),
(2, 'aut ab doloribus', 'Queen shrieked out. \'Behead that Dormouse! Turn that Dormouse out of his teacup instead of onions.\' Seven flung down his brush, and had come back and finish your story!\' Alice called out \'The Queen!.', 'https://lorempixel.com/640/480/?68632', 'Sunt.', 3, '86056.01', 0, '2020-06-13 16:11:46', '2020-06-13 16:11:46'),
(3, 'iste libero ut', 'Beautiful, beauti--FUL SOUP!\' \'Chorus again!\' cried the Gryphon, and all of them even when they liked, and left foot, so as to size,\' Alice hastily replied; \'only one doesn\'t like changing so often.', 'https://lorempixel.com/640/480/?73719', 'Sit.', 2, '36908.59', 4, '2020-06-13 16:11:46', '2020-06-13 16:11:46'),
(4, 'sit dolorem modi', 'Duchess was VERY ugly; and secondly, because they\'re making such a thing. After a while, finding that nothing more happened, she decided to remain where she was, and waited. When the sands are all.', 'https://lorempixel.com/640/480/?58348', 'Quam.', 4, '28317.47', 7, '2020-06-13 16:11:46', '2020-06-13 16:11:46'),
(5, 'eveniet harum veritatis', 'Hatter with a lobster as a drawing of a well?\' The Dormouse had closed its eyes were nearly out of the conversation. Alice replied, so eagerly that the Queen in front of them, and just as if she.', 'https://lorempixel.com/640/480/?27377', 'Amet.', 1, '82054.63', 0, '2020-06-13 16:11:46', '2020-06-13 16:11:46'),
(6, 'sunt quia possimus', 'Alice was so long that they were getting so far off). \'Oh, my poor little Lizard, Bill, was in the last words out loud, and the little door about fifteen inches high: she tried the little magic.', 'https://lorempixel.com/640/480/?39624', 'Et.', 3, '71732.42', 0, '2020-06-13 16:11:46', '2020-06-13 16:11:46'),
(7, 'rerum debitis earum', 'Duchess, \'chop off her knowledge, as there seemed to be treated with respect. \'Cheshire Puss,\' she began, in rather a handsome pig, I think.\' And she opened it, and found that, as nearly as she was.', 'https://lorempixel.com/640/480/?70045', 'Odio.', 2, '61336.61', 7, '2020-06-13 16:11:46', '2020-06-13 16:11:46'),
(8, 'perferendis commodi nulla', 'Duchess: \'and the moral of that dark hall, and wander about among those beds of bright flowers and the game was in March.\' As she said to herself. \'I dare say there may be ONE.\' \'One, indeed!\' said.', 'https://lorempixel.com/640/480/?81972', 'Quia.', 4, '54325.34', 6, '2020-06-13 16:11:46', '2020-06-13 16:11:46'),
(9, 'minima nesciunt asperiores', 'WHAT?\' thought Alice; but she did not appear, and after a few minutes, and she heard was a little pattering of feet in the distance, sitting sad and lonely on a summer day: The Knave did so, very.', 'https://lorempixel.com/640/480/?29612', 'Non.', 3, '71664.96', 7, '2020-06-13 16:11:46', '2020-06-13 16:11:46'),
(10, 'distinctio est qui', 'Alice, very loudly and decidedly, and the poor little thing was snorting like a candle. I wonder if I\'ve been changed for Mabel! I\'ll try and say \"How doth the little--\"\' and she could not think of.', 'https://lorempixel.com/640/480/?93429', 'In.', 2, '39859.51', 3, '2020-06-13 16:11:46', '2020-06-13 16:11:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md. Fazley Rabbi', 'fazleyrabbicse@gmail.com', NULL, '$2y$10$cFjH50/dZ6We7FKwjzB8Jur6erhKyawKMDN3ILGYtjV261FO104fu', NULL, '2020-01-20 00:43:51', '2020-01-20 00:43:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
