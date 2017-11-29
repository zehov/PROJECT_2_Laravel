-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_books`
--

-- --------------------------------------------------------

--
-- Структура на таблица `authors`
--

CREATE TABLE `authors` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `born_date` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_info` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `books_count` decimal(8,2) DEFAULT NULL,
  `pages_count` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `authors`
--

INSERT INTO `authors` (`id`, `author_name`, `country`, `born_date`, `author_info`, `created_at`, `updated_at`, `books_count`, `pages_count`) VALUES
(15, 'автор2', 'Бълария', '12.08.1978', 'Враца', '2017-11-21 13:57:59', '2017-11-28 17:35:28', '2.00', NULL),
(16, 'автор3', 'Бълария', '11.09.1657', 'Sofia', '2017-11-21 14:09:28', '2017-11-28 17:35:51', '3.00', NULL),
(17, 'автор4', 'Русия', '14.04.1955', 'Москва', '2017-11-21 14:40:47', '2017-11-28 19:45:28', '1.00', '0.00'),
(18, 'автор1', 'Китай', '10.10,2001', 'Пекин', '2017-11-24 17:37:06', '2017-11-28 17:35:09', '5.00', '458.00');

-- --------------------------------------------------------

--
-- Структура на таблица `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL,
  `book_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_pages` decimal(8,2) DEFAULT NULL,
  `book_info` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `books`
--

INSERT INTO `books` (`id`, `author_id`, `book_name`, `total_pages`, `book_info`, `book_link`, `created_at`, `updated_at`) VALUES
(21, 15, 'book1', '140.00', 'роман', 'file1', '2017-11-24 17:09:34', '2017-11-29 08:46:08'),
(22, 15, 'book2', '200.00', 'ese', 'file10', '2017-11-24 17:10:06', '2017-11-24 17:10:06'),
(23, 16, 'book3', '155.00', 'drama', 'file1', '2017-11-24 17:10:38', '2017-11-29 10:03:17'),
(24, 16, 'book4', '123.00', 'novela', 'file1', '2017-11-24 17:11:08', '2017-11-29 09:24:18'),
(25, 16, 'book5', '123.00', 'ese', 'file12', '2017-11-24 17:11:34', '2017-11-29 09:25:14'),
(26, 18, 'book6', '123.00', 'ddd', 'fili4', '2017-11-24 17:39:07', '2017-11-29 09:25:37'),
(27, 18, 'book7', '45.00', 'gggg', 'file12', '2017-11-24 17:39:27', '2017-11-29 09:25:51'),
(28, 18, 'book8', '234.00', 'roman', 'file12', '2017-11-24 17:39:49', '2017-11-29 09:26:09'),
(29, 18, 'book9', '56.00', 'treler', 'file6', '2017-11-24 17:40:16', '2017-11-29 09:26:23'),
(30, 18, 'book10', '10.00', 'разкази', 'file10', '2017-11-24 18:52:55', '2017-11-29 09:26:35'),
(31, 17, 'book11', '34.00', 'поема', 'file10', '2017-11-28 19:45:28', '2017-11-29 09:26:48');

-- --------------------------------------------------------

--
-- Структура на таблица `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2017_11_14_084104_create_authors_table', 1),
(9, '2017_11_14_084515_create_books_table', 1),
(10, '2017_11_14_084708_create_reads_table', 1),
(11, '2017_11_24_165932_add_count_to_authors_table', 2),
(12, '2017_11_24_204112_add_pages_to_authors_table', 3);

-- --------------------------------------------------------

--
-- Структура на таблица `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура на таблица `reads`
--

CREATE TABLE `reads` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `book_id` int(10) UNSIGNED NOT NULL,
  `read_pages` decimal(8,2) DEFAULT NULL,
  `day_read` decimal(8,2) DEFAULT NULL,
  `day_all_books` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `reads`
--

INSERT INTO `reads` (`id`, `user_id`, `book_id`, `read_pages`, `day_read`, `day_all_books`, `created_at`, `updated_at`) VALUES
(20, 3, 21, '34.00', NULL, NULL, '2017-11-27 20:06:25', '2017-11-27 20:42:36'),
(21, 1, 28, '34.00', NULL, NULL, '2017-11-27 20:11:07', '2017-11-28 08:54:52'),
(22, 3, 22, '56.00', NULL, NULL, '2017-11-27 20:12:11', '2017-11-27 20:42:43'),
(23, 3, 28, '45.00', NULL, NULL, '2017-11-27 20:12:16', '2017-11-27 20:42:49'),
(24, 1, 21, '45.00', NULL, NULL, '2017-11-27 20:32:40', '2017-11-27 20:41:59'),
(25, 3, 23, '0.00', NULL, NULL, '2017-11-27 20:43:32', '2017-11-27 20:43:32'),
(26, 1, 31, '10.00', NULL, NULL, '2017-11-28 19:47:23', '2017-11-28 19:47:40'),
(27, 4, 22, '24.00', NULL, NULL, '2017-11-29 08:45:04', '2017-11-29 08:45:15');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `speed` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `speed`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dani', 'zehov@abv.bg', '$2y$10$Z9EsyJBk3q1VTeEKxQSVXOJ61QVWxMsL7bydzSpQu/VCEZZxWAFyy', 'admin', 30, 'eFaeuIsgckayEBJ5C5ocbY89577xycygBgfGluw1yzjCKVqWtaSy5daY4eKt', '2017-11-14 14:08:54', '2017-11-27 19:52:09'),
(2, 'Ivan', 'Ivan@email.com', '$2y$10$deWN481qS9jzh1s/C9rdBeDuUw43dDQmGwzxlusTqMV1kqYnJZxra', 'user', 34, 'zlkdaNpC6cfamqCyPwu3t6XhOSZPh2gvPB8oq4sgGRO874H7fSM8wXLw5Sxu', '2017-11-24 19:21:41', '2017-11-24 19:23:00'),
(3, 'user1', 'user1@email.com', '$2y$10$RK9D52rEz5xWQRYgLQdVAeLYBiAvkSVkDtlbcQqOCvjjlANNADXo6', 'user', 28, 'wKCL9LsFBk4Ti4IjLQZHBNSplikLY5W9VWW2mf09s4o0CzGsrZC1GWFXeLn1', '2017-11-24 19:25:27', '2017-11-24 19:25:36'),
(4, 'user2', 'user2@email.com', '$2y$10$kzVfqGBkAD/NukdUffztXewfVgwGQxvcQUiwK6.N9YuRKpj7q3KK2', 'user', 23, 'a3wiDFmOoxNGjzlCYhPn6fy2OSsITXD61OdJbpfRuZfctFDqxfNSEmoamWdf', '2017-11-29 08:44:39', '2017-11-29 08:44:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_author_id_foreign` (`author_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `reads`
--
ALTER TABLE `reads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reads_user_id_foreign` (`user_id`),
  ADD KEY `reads_book_id_foreign` (`book_id`);

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
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `reads`
--
ALTER TABLE `reads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`);

--
-- Ограничения за таблица `reads`
--
ALTER TABLE `reads`
  ADD CONSTRAINT `reads_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `reads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
