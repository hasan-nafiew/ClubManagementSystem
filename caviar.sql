-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2018 at 07:58 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caviar`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

CREATE TABLE `contactuses` (
  `contactus_id` int(10) UNSIGNED NOT NULL,
  `contactus_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactus_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactus_subject` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contactus_message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactus_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactuses`
--

INSERT INTO `contactuses` (`contactus_id`, `contactus_name`, `contactus_email`, `contactus_subject`, `contactus_message`, `contactus_status`, `created_at`, `updated_at`) VALUES
(1, 'Bariul Islam', 'bari@gmail.com', 'Want to get All menu items', 'I want to eat or serve most of the food of your sites for that reason we should be better opportunity to go there\r\nI want to eat or serve most of the food of your sites for that reason we should be better opportunity to go there\r\nI want to eat or serve most of the food of your sites for that reason we should be better opportunity to go there', 1, '2018-11-25 13:06:04', '2018-11-26 20:42:18'),
(2, 'Kamal Khan Shaheb', 'kamal@gmail.com', 'man wants to born free', 'I want to eat or serve most of the food of your sites for that reason we should be better opportunity to go there\r\nI want to eat or serve most of the food of your sites for that reason we should be better opportunity to go there\r\nI want to eat or serve most of the food of your sites for that reason we should be better opportunity to go there', 1, '2018-11-25 13:12:45', NULL),
(3, 'Kamal Khan Shaheb', 'kamal@gmail.com', 'man wants to born free', 'I want to eat or serve most of the food of your sites for that reason we should be better opportunity to go there\r\nI want to eat or serve most of the food of your sites for that reason we should be better opportunity to go there\r\nI want to eat or serve most of the food of your sites for that reason we should be better opportunity to go there', 1, '2018-11-25 13:13:04', NULL),
(4, 'Anuradha Roy', 'anu@gmail.com', 'man wants to born free', 'We want to learn lots of things from you so we need to learn more and more about your company.', 1, '2018-11-25 13:21:45', NULL),
(5, 'Rakib', 'rakib@gmail.com', 'My Programmes in your company', 'I have built a program to your company for the better purposes so that we can learn more and more about the company for our better purposes', 1, '2018-11-25 21:21:56', NULL),
(6, 'Mominul Islam', 'momin@gmail.com', 'My Expectation about your company', 'I think I can read your company policy and other things so-that we can do better service for our purposes.', 1, '2018-11-25 21:25:41', NULL),
(7, 'Mohibullah Khanmiraj', 'mohi@gmail.com', 'Expection About your Company', 'I would like to talk to your company for that reason to solve in this company better performance for the future images to be or not to be that is the question for more details we nned to do better performance to work with others', 1, '2018-11-26 20:44:50', '2018-11-26 20:48:38'),
(8, 'Amran Hossain', 'amran@gmail.com', 'About Your company', 'I want to know about your compoany', 0, '2018-11-27 05:54:02', '2018-11-27 07:10:32'),
(9, 'plabon', 'plabon@gmailj.com', 'About Your company', 'flasjf;lkwth\r\n', 1, '2018-11-27 07:12:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(10) UNSIGNED NOT NULL,
  `member_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_contact` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_blood_group` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_nid` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_profession` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_date_of_birth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_present_address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_permanent_address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `member_name`, `member_email`, `member_contact`, `member_blood_group`, `member_nid`, `member_profession`, `member_date_of_birth`, `member_present_address`, `member_permanent_address`, `member_status`, `created_at`, `updated_at`) VALUES
(1, 'afaf', 'kjafhkjha@gmail.com', 'aifjkaf', 'jkljfklsjaflkj', 'kfjsklafjl', 'fklajfskljlk', 'fjklajfkl', 'kljfklasjfl', 'fkllk', 0, '2018-11-27 06:47:54', NULL),
(2, 'Nafiew', 'hasan.nafiew@gmail.com', '4848478', 'B+', '848484848', 'student', '545', 'Dhaka', 'Chuadanga', 1, '2018-12-04 05:39:32', NULL),
(3, 'Anuradha Roy', 'anu@gmail.com', '01612832250', 'B-', '1545487878787', 'Developer', '19/12/1995', 'Dhanmondi,Dhaka-1205', 'Begumgonj, Noakhali', 1, '2018-12-04 06:07:01', NULL),
(4, 'Plabon', 'plabon@gmail.com', '5454545', 'b+', '54654654654', 'Student', '13.01.1996', 'Mohakhali, Dhaka', 'Mohakhali , Dhaka', 1, '2018-12-09 06:08:29', NULL),
(5, 'Nafiew Hasan', 'nafiew@gmail.com', '465454545', 'B+', '54545454', 'Web Developer', '2005-02-08', 'Dhanmondi, Dhaka', 'Do', 1, '2018-12-09 06:11:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `member_adds`
--

CREATE TABLE `member_adds` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_25_183350_create_contactuses_table', 2),
(4, '2018_11_27_031736_create_user_roles_table', 3),
(5, '2018_11_27_040427_create_social_media_table', 4),
(6, '2018_11_27_120448_create_member_adds_table', 5),
(7, '2018_11_27_120601_create_members_table', 5);

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
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `social_media_id` int(10) UNSIGNED NOT NULL,
  `social_media_facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_media_twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_media_youtube` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_media_google` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_media_skype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_media_linkedin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_media_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '5',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Nafiew Hasan', 'nafiew@gmail.com', NULL, '$2y$10$5DCe2/jFZIrKHDg9.5ku/e86a6fI2olxLqvHRXLF9FaQrb0.KXcgi', 1, 'NSERx5FWIDQNT9UPrq4HA7A3NZOJTRuVBAtBZNiSdjb3G19cjpIblXcLyfnE', 1, '2018-11-24 12:51:04', '2018-11-24 12:51:04'),
(2, 'Hasan Mahmud', 'hasan@gmail.com', NULL, '$2y$10$HkjMMd7zqOiqxKPkj9d4heKDmh9nVNBWICmyDBuQysDUlE3Y.s6kC', 4, 'W9zWKCSsLDb7hlaugKkYyBAVYcVXGEQ13GsrWlfcDR7f3ZriAP6VIGyDIcFV', 1, '2018-11-24 12:51:25', '2018-11-24 12:51:25'),
(3, 'Rafiul Islam', 'rafi@gmail.com', NULL, '$2y$10$2613qJdpgsys1Pv2YVV/BuUSzjIV77kt8POhIHPLzFcJ7f8AW9KRm', 3, 'vMSq0oyCuQqwa2ILVucCu6vxHpxubD87VaJYtNOITFqhjGe8gkojWK4LNjsY', 1, '2018-11-24 12:51:53', '2018-11-24 12:51:53'),
(4, 'Anuradha Roy', 'anu@gmail.com', NULL, '$2y$10$ec2MaO6YUQnMw2LD4pkcwOqEcXqVFVXgvMmBgX4tsjU2invjbv0Bm', 2, 'nvYp6Zxwd1gtCTrtVSaVrAFthJ4bn1sOZl6KGzPDMoKkW9fABH3giwvXjcCy', 1, '2018-11-25 03:48:04', '2018-11-25 03:48:04'),
(5, 'Kamal Hossain', 'kamal@gmail.com', NULL, '$2y$10$r4UHDymxIjM8Wh.EfrowLOC46LxY45Y2.twVENfY7.E35y/YQVAQy', 5, 'GHfq5Ja1rGO2zhbHcSbkDh2koXrSrlFk0oiCEWu4KjZwOzfsHglBZEsHVFWB', 1, '2018-11-25 04:16:00', '2018-11-25 04:16:00'),
(6, 'Shahin Alam', 'shahin@gmail.com', NULL, '$2y$10$bzMrV0.clYlQmMTjmlTLs.GKNRqL0TMrcCv11yOWmgNh6xNB1fpVu', 3, 'Wvdhi2yncEj39kXtTntttTt6P4kX5EMDrszXwpdebKxH93FlV9QmlCvOg37f', 1, '2018-11-25 04:16:30', '2018-11-25 04:16:30'),
(7, 'Shamim Hossain Rana', 'rana@gmail.com', NULL, '$2y$10$6mIRs/oFsINMkY9SbZLiQ.r12jcuWwYYFjb1rL3914LdE8m0nZMSu', 4, 'hCDd8vomUWcY9Tz69Qhz8Ty6ei77Csw2Tt5gbXGFqp5pmC1MZA9xgxF6WFQk', 1, '2018-11-25 04:17:12', '2018-11-25 04:17:12'),
(8, 'Moutushi Radhika', 'mou@gmail.com', NULL, '$2y$10$rVnJBD1d1ItCRCwNg5IwH.x8EMh/1K0bUoB2kp/efLmNZaSc3tAki', 5, 'qPhqPUbCjZJuWiBQSQ5tLyhQJzB9czHR7BrgFqJk2Z2QY1Drz7F09rIo34Om', 1, '2018-11-26 21:58:50', '2018-11-26 21:58:50');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`role_id`, `role_name`, `role_status`, `created_at`, `updated_at`) VALUES
(1, 'SuperAdmin', 1, '2018-11-15 05:00:00', NULL),
(2, 'Admin', 1, '2018-11-27 06:28:00', NULL),
(3, 'Author', 1, '2018-11-26 23:40:00', NULL),
(4, 'Editor', 1, '2018-11-08 03:23:00', NULL),
(5, 'Subscriber', 1, '2018-11-27 03:19:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactuses`
--
ALTER TABLE `contactuses`
  ADD PRIMARY KEY (`contactus_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `member_adds`
--
ALTER TABLE `member_adds`
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
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`social_media_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `user_roles_role_name_unique` (`role_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactuses`
--
ALTER TABLE `contactuses`
  MODIFY `contactus_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `member_adds`
--
ALTER TABLE `member_adds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `social_media_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `role_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
