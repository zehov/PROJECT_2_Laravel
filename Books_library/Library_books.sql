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
-- Database: `Library_books`
--

-- --------------------------------------------------------

--
-- Структура на таблица `authors`
--

CREATE TABLE `authors` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `born_date` int(11) NOT NULL,
  `author_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `books_count` decimal(8,2) DEFAULT NULL,
  `pages_count` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `authors`
--

INSERT INTO `authors` (`id`, `author_name`, `country`, `born_date`, `author_info`, `created_at`, `updated_at`, `books_count`, `pages_count`) VALUES
(2, 'author1', 'bg', 22222, 'fas', '2017-12-01 04:07:12', '2017-12-01 11:12:34', '3.00', '467.00'),
(4, 'Алеко Костантинов', 'България', 12111988, 'Алеко Иваницов Константинов, познат под псевдонима Щастливеца, е български писател, адвокат, общественик и основател на организираното туристическо движение в България', '2017-12-01 11:14:29', '2017-12-01 11:30:45', '2.00', '122.00');

-- --------------------------------------------------------

--
-- Структура на таблица `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL,
  `book_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_pages` decimal(8,2) DEFAULT NULL,
  `book_info` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `books`
--

INSERT INTO `books` (`id`, `author_id`, `book_name`, `total_pages`, `book_info`, `book_link`, `created_at`, `updated_at`) VALUES
(1, 2, 'book1', '123.00', 'rerere', 'file1', '2017-12-01 04:09:07', '2017-12-01 04:09:07'),
(2, 2, 'book2', '344.00', 'fff', 'file4', '2017-12-01 04:09:43', '2017-12-01 04:09:43'),
(4, 2, 'Под игото', '260.00', 'роман', 'file3', '2017-12-01 11:12:34', '2017-12-01 11:12:34'),
(5, 4, 'До чекаго и назад', '122.00', 'летопис', 'file3', '2017-12-01 11:15:18', '2017-12-01 11:15:18'),
(6, 4, 'Бай Ганьо', '60.00', 'В „Бай Ганьо“ е заложен реален исторически трагикомизъм, породен от бързото разместване на социални пластове в новоосвободена България и от припрения ѝ стремеж за догонване на „другите“.', 'file6', '2017-12-01 11:30:45', '2017-12-01 11:30:45');

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
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2014_10_12_100000_create_password_resets_table', 1),
(19, '2017_10_04_165740_add_role_to_users_table', 1),
(20, '2017_10_06_062633_create_profiles_table', 1),
(21, '2017_10_06_062654_create_lectures_table', 1),
(22, '2017_10_06_062745_create_users_lectures_homework', 1),
(23, '2017_10_08_080032_add_user_id_to_profiles_table', 1),
(24, '2017_10_08_082637_create_test_tables_table', 1),
(25, '2017_10_08_082804_create_tests_table', 1),
(26, '2017_10_08_133923_create_courses_table', 1),
(27, '2017_10_08_134020_courses_lectures_table', 1),
(28, '2017_10_08_140219_add_course_id_to_lectures_table', 1),
(29, '2017_10_08_141200_add_hasHomework_to_lectures_table', 1),
(30, '2017_11_14_084104_create_authors_table', 1),
(31, '2017_11_14_084515_create_books_table', 1),
(32, '2017_11_14_084708_create_reads_table', 1),
(33, '2017_11_24_165932_add_count_to_authors_table', 1),
(34, '2017_11_24_204112_add_pages_to_authors_table', 1);

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
(1, 'zehov', 'zehov@abv.bg', '$2y$10$9iSg.uFlVgmZKZjkiFSXo.Hv5/rY8jANd2q0xK2bzSmm0fUbk4nU2', 'admin', 34, 'Yj5LqVHrd5ZZZPKrPaac8cc32Q0EhXHCQUewnPOrve6vbCUcyNGyp053wOh7', '2017-11-30 12:24:16', '2017-11-30 12:24:24'),
(2, 'user1', 'user1@email.com', '$2y$10$j6aFp4XWET.jRlPNvCNwbearYFfpdioDoPia5cLQFy/Exd8T4FIFy', 'user', 34, '4DTe2pr86QzkhR3sdoQEHVZBZxtVRcdZXtko1wUswGUypPTxeG9rySxDUG84', '2017-12-01 03:48:18', '2017-12-01 03:48:24');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `reads`
--
ALTER TABLE `reads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  ADD CONSTRAINT `reads_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
