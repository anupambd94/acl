-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2019 at 06:16 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acl`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currentaddress`
--

CREATE TABLE `currentaddress` (
  `currentaddress_id` int(11) NOT NULL,
  `address_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_2` text COLLATE utf8mb4_unicode_ci,
  `city` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `postal_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL,
  `department_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_description` text COLLATE utf8mb4_unicode_ci,
  `IsActive` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `designation_id` int(11) NOT NULL,
  `designation_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation_description` text COLLATE utf8mb4_unicode_ci,
  `IsActive` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `educationdetails`
--

CREATE TABLE `educationdetails` (
  `educationdetails_id` int(11) NOT NULL,
  `highestdegree` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cirtificate_1` text COLLATE utf8mb4_unicode_ci,
  `cirtificate_2` text COLLATE utf8mb4_unicode_ci,
  `special_qualification` text COLLATE utf8mb4_unicode_ci,
  `IsActive` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(11) NOT NULL,
  `first_name` text COLLATE utf8mb4_unicode_ci,
  `last_name` text COLLATE utf8mb4_unicode_ci,
  `username` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nric_fin_wp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci,
  `merital_status` enum('SINGLE','MARRIED','DIVORCED') COLLATE utf8mb4_unicode_ci NOT NULL,
  `expected_join_date` datetime NOT NULL,
  `confirmatin_date` datetime NOT NULL,
  `termination_date` datetime NOT NULL,
  `probation_periods` int(11) NOT NULL,
  `leave_start_date` datetime NOT NULL,
  `pin_expire_date` datetime NOT NULL,
  `id_types` enum('SPASS','WP','PR','CITIZENSHIP','EP') COLLATE utf8mb4_unicode_ci NOT NULL,
  `holiday_types` enum('PH','MC','LOCAL','SINGAPUR') COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_types` enum('FULLTIME','PARTTIME','FLEXI','NONE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NONE',
  `salary_types` enum('FIXED','HOURLY','DAILY','NONE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NONE',
  `days_per_week` int(11) NOT NULL DEFAULT '0',
  `total_hours_per_year` int(11) NOT NULL DEFAULT '0',
  `rate_per_hour` int(11) NOT NULL DEFAULT '0',
  `photo_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `currentaddress_id` int(11) NOT NULL,
  `permanentaddress_id` int(11) NOT NULL,
  `educationdetails_id` int(11) NOT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_photos`
--

CREATE TABLE `employee_photos` (
  `photo_id` int(11) NOT NULL,
  `photo_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_size` int(11) NOT NULL DEFAULT '0',
  `IsActive` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(3, '2017_02_20_233057_create_permission_tables', 1),
(4, '2017_02_22_171712_create_posts_table', 1),
(5, '2019_09_04_151802_create_departments_table', 1),
(6, '2019_09_04_152515_create_sections_table', 1),
(7, '2019_09_04_152537_create_designations_table', 1),
(8, '2019_09_04_152630_create_educationdetails_table', 1),
(9, '2019_09_04_152653_create_countries_table', 1),
(10, '2019_09_04_152729_create_currentaddress_table', 1),
(11, '2019_09_04_152755_create_permanentaddress_table', 1),
(12, '2019_09_04_152836_create_employees_table', 1),
(13, '2019_09_04_172438_create_employee_photos_table', 1),
(14, '2019_09_04_173736_add_foreign_keys_to_currentaddress_table', 1),
(15, '2019_09_04_174801_add_foreign_keys_to_employees_table', 1);

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
-- Table structure for table `permanentaddress`
--

CREATE TABLE `permanentaddress` (
  `permanentaddress_id` int(11) NOT NULL,
  `address_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_2` text COLLATE utf8mb4_unicode_ci,
  `city` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `postal_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IsActive` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Supper Permission', '2019-08-23 00:51:40', '2019-08-23 00:51:40'),
(3, 'Employee Management', '2019-08-23 02:32:04', '2019-08-23 02:32:04'),
(4, 'Expense Management', '2019-08-23 02:32:36', '2019-08-23 02:32:36'),
(5, 'Project Management', '2019-08-23 02:32:53', '2019-08-23 02:32:53'),
(6, 'Banking Management', '2019-08-23 02:33:05', '2019-08-23 02:33:05'),
(7, 'Interactions', '2019-08-23 02:34:04', '2019-08-23 02:34:04'),
(8, 'Income Management', '2019-08-23 02:53:24', '2019-08-23 02:53:24'),
(9, 'Inventory Management', '2019-08-23 02:59:50', '2019-08-23 02:59:50'),
(10, 'Reports', '2019-08-22 18:00:00', NULL),
(11, 'Settings', '2019-08-22 18:00:00', NULL),
(12, 'Stock Management', '2019-08-23 04:38:24', '2019-08-23 04:38:24');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', '2019-08-23 00:51:40', '2019-08-23 00:51:40'),
(3, 'Admin', '2019-08-23 01:07:29', '2019-08-23 01:07:29'),
(4, 'Employee', '2019-08-23 04:33:26', '2019-08-23 04:33:26'),
(6, 'Vendor', '2019-08-23 08:20:20', '2019-08-23 08:20:20'),
(7, 'Client', '2019-08-23 08:20:54', '2019-08-23 08:20:54'),
(8, 'Developer', '2019-08-23 08:23:46', '2019-08-23 08:23:46');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 8),
(3, 1),
(3, 3),
(3, 8),
(4, 1),
(4, 3),
(4, 4),
(4, 7),
(4, 8),
(5, 1),
(5, 3),
(5, 8),
(6, 1),
(6, 8),
(7, 1),
(7, 3),
(7, 8),
(8, 1),
(8, 3),
(8, 4),
(8, 6),
(8, 8),
(9, 1),
(9, 3),
(9, 8),
(10, 1),
(10, 3),
(10, 4),
(10, 6),
(10, 7),
(10, 8),
(11, 1),
(11, 3),
(11, 4),
(11, 6),
(11, 7),
(11, 8),
(12, 8);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `section_id` int(11) NOT NULL,
  `section_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_description` text COLLATE utf8mb4_unicode_ci,
  `department_id` int(11) NOT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md Anupam Hayat Shawon', 'anupam.bd94@gmail.com', '$2y$10$t3M3xSfhxTCM6b8dxuxsPO6ssxFIUZ3iqUSBeVQGJm0TmzO/tSGCq', 'EdirE4ddAQnGBg9WpntOMEEyDoERGdSZF1bNLX3t2O4g81ehZ28x46g4gpCi', '2019-08-22 22:56:01', '2019-08-23 08:24:18'),
(4, 'Md. Anuapm', 'itsshawon.bd@gmail.com', '$2y$10$WSp7xJ4Oj51qebk/VrGoz.ZG9AVpEI.UYf6g0AjnL/8PZA./p/3rS', '2uAB0IzYMIleA33mcxZCCyxECeM9hYA99SVaJHgpXFf2XrXXAehblKZxt1aa', '2019-08-23 01:57:05', '2019-08-23 08:24:53'),
(7, 'Test Employee', 'employee@gmail.com', '$2y$10$KcRMdhV3AiOpGciD6P6Pb.m.8T/CCU9vpRtUf1vWILjM/QIfoIsey', 'hWgWqzqo0ShKuUfSiOi85PdfRadXSSYrP4LJWCnB7PNFsGQeoiVAxRBcGovk', '2019-08-23 08:21:52', '2019-08-23 08:21:52'),
(8, 'Test Vandor', 'vendor@gmail.com', '$2y$10$IHslIxVAE0PIiFU8vpRV1OD8mn0xlaygJXTm0uRwmLpsoMEcKnS3W', NULL, '2019-08-23 08:22:22', '2019-08-23 08:22:22'),
(9, 'Test Client', 'client@gmail.com', '$2y$10$O4yP0Dhd4DoRktQMgkDAzO3pluQJnVuDmuxAPxamnynFtZnuDIod.', NULL, '2019-08-23 08:22:56', '2019-08-23 08:22:56');

-- --------------------------------------------------------

--
-- Table structure for table `user_has_permissions`
--

CREATE TABLE `user_has_permissions` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_has_permissions`
--

INSERT INTO `user_has_permissions` (`user_id`, `permission_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_has_roles`
--

CREATE TABLE `user_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_has_roles`
--

INSERT INTO `user_has_roles` (`role_id`, `user_id`) VALUES
(1, 4),
(4, 7),
(6, 8),
(7, 9),
(8, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`),
  ADD UNIQUE KEY `countries_country_name_unique` (`country_name`),
  ADD UNIQUE KEY `countries_country_code_unique` (`country_code`);

--
-- Indexes for table `currentaddress`
--
ALTER TABLE `currentaddress`
  ADD PRIMARY KEY (`currentaddress_id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `educationdetails`
--
ALTER TABLE `educationdetails`
  ADD PRIMARY KEY (`educationdetails_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `photo_id` (`photo_id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `section_id` (`section_id`),
  ADD KEY `designation_id` (`designation_id`),
  ADD KEY `currentaddress_id` (`currentaddress_id`),
  ADD KEY `permanentaddress_id` (`permanentaddress_id`),
  ADD KEY `educationdetails_id` (`educationdetails_id`);

--
-- Indexes for table `employee_photos`
--
ALTER TABLE `employee_photos`
  ADD PRIMARY KEY (`photo_id`);

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
-- Indexes for table `permanentaddress`
--
ALTER TABLE `permanentaddress`
  ADD PRIMARY KEY (`permanentaddress_id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_has_permissions`
--
ALTER TABLE `user_has_permissions`
  ADD PRIMARY KEY (`user_id`,`permission_id`),
  ADD KEY `user_has_permissions_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `user_has_roles`
--
ALTER TABLE `user_has_roles`
  ADD PRIMARY KEY (`role_id`,`user_id`),
  ADD KEY `user_has_roles_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currentaddress`
--
ALTER TABLE `currentaddress`
  MODIFY `currentaddress_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `educationdetails`
--
ALTER TABLE `educationdetails`
  MODIFY `educationdetails_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_photos`
--
ALTER TABLE `employee_photos`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permanentaddress`
--
ALTER TABLE `permanentaddress`
  MODIFY `permanentaddress_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `currentaddress`
--
ALTER TABLE `currentaddress`
  ADD CONSTRAINT `country_id` FOREIGN KEY (`country_id`) REFERENCES `countries` (`country_id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `currentaddress_id` FOREIGN KEY (`currentaddress_id`) REFERENCES `currentaddress` (`currentaddress_id`),
  ADD CONSTRAINT `department_id` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`),
  ADD CONSTRAINT `designation_id` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`designation_id`),
  ADD CONSTRAINT `educationdetails_id` FOREIGN KEY (`educationdetails_id`) REFERENCES `educationdetails` (`educationdetails_id`),
  ADD CONSTRAINT `permanentaddress_id` FOREIGN KEY (`permanentaddress_id`) REFERENCES `permanentaddress` (`permanentaddress_id`),
  ADD CONSTRAINT `photo_id` FOREIGN KEY (`photo_id`) REFERENCES `employee_photos` (`photo_id`),
  ADD CONSTRAINT `section_id` FOREIGN KEY (`section_id`) REFERENCES `sections` (`section_id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_has_permissions`
--
ALTER TABLE `user_has_permissions`
  ADD CONSTRAINT `user_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_has_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_has_roles`
--
ALTER TABLE `user_has_roles`
  ADD CONSTRAINT `user_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_has_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
