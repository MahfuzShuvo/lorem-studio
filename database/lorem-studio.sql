-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 04, 2021 at 07:01 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lorem-studio`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Misbah Himel', 'misbahhimel@gmail.com', NULL, '$2y$10$41TdhFkdFkGDX4ZNq1UDaOU46g.WGqtQTp/Kf0ZdrxIwVIf0t.G.C', NULL, '2021-06-03 02:37:58', '2021-06-03 02:37:58'),
(2, 'Mahfuz Shuvo', 'i.maf.shuvo@gmail.com', NULL, '$2y$10$wO/2VvKzHnnVQ3SpPhuP8OeOUOEJ8V65RBUEx19njyV6tDbOhXAfC', NULL, '2021-06-13 13:50:22', '2021-06-13 13:50:22');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hireus_attachments`
--

DROP TABLE IF EXISTS `hireus_attachments`;
CREATE TABLE IF NOT EXISTS `hireus_attachments` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `hireus_id` int NOT NULL,
  `attachment` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ext` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hireus_attachments`
--

INSERT INTO `hireus_attachments` (`id`, `hireus_id`, `attachment`, `ext`, `created_at`, `updated_at`) VALUES
(1, 1, 'public/assets/images/hire-us/61a8feffcde681638465279.jpg', 'jpg', '2021-12-02 11:14:39', '2021-12-02 11:14:39'),
(2, 1, 'public/assets/images/hire-us/61a8feffcf0371638465279.png', 'png', '2021-12-02 11:14:39', '2021-12-02 11:14:39');

-- --------------------------------------------------------

--
-- Table structure for table `hire_us`
--

DROP TABLE IF EXISTS `hire_us`;
CREATE TABLE IF NOT EXISTS `hire_us` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hire_us`
--

INSERT INTO `hire_us` (`id`, `customer_name`, `customer_email`, `customer_phone`, `project_title`, `project_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Md. Mahfuz Ul Karim', 'i.maf.shuvo@gmail.com', '15214306840', 'Test Project', 'Its a test project description for testing', 0, '2021-12-02 11:14:39', '2021-12-02 11:14:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(24, '2014_10_12_000000_create_users_table', 1),
(25, '2014_10_12_100000_create_password_resets_table', 1),
(26, '2019_08_19_000000_create_failed_jobs_table', 1),
(39, '2021_05_06_174016_create_hire_us_table', 6),
(28, '2021_05_20_041649_create_portfolios_table', 1),
(29, '2021_05_21_051127_create_portfolio_images_table', 1),
(31, '2021_05_25_164901_create_services_table', 2),
(36, '2021_06_02_060439_create_hireus_attachments_table', 3),
(37, '2021_06_03_070632_create_admins_table', 4),
(38, '2021_06_12_055352_create_portfolio_sections_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('misbahhimel@gmail.com', '$2y$10$vXUVqqfjMTFvuTWs8SZVE.AojYRJQBjme5gyymD1RtdlqBJ.x/Yky', '2021-06-03 10:42:02');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

DROP TABLE IF EXISTS `portfolios`;
CREATE TABLE IF NOT EXISTS `portfolios` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `service_id` int NOT NULL,
  `project_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `service_id`, `project_title`, `project_description`, `cover_image`, `thumbnail`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Test Project', 'Its a demo description', 'public/assets/images/portfolio/61a90034764ae1638465588.png', 'public/assets/images/portfolio/61a90034769171638465588.png', 0, '2021-12-02 11:19:48', '2021-12-02 11:19:48'),
(2, 2, 'Test Project 2', 'Dummy project 2', 'public/assets/images/portfolio/61a900c0d3ea61638465728.png', 'public/assets/images/portfolio/61a900c0d438c1638465728.png', 0, '2021-12-02 11:22:08', '2021-12-02 11:22:08'),
(3, 1, 'Test Project 3', 'Dummy project description 3', 'public/assets/images/portfolio/61a90107231c21638465799.png', 'public/assets/images/portfolio/61a90107236e91638465799.png', 0, '2021-12-02 11:23:19', '2021-12-02 11:23:19'),
(4, 4, 'Test Project 4', 'Dummy description 4', 'public/assets/images/portfolio/61a901336a1861638465843.png', 'public/assets/images/portfolio/61a901336a62a1638465843.png', 0, '2021-12-02 11:24:03', '2021-12-02 11:24:03');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_images`
--

DROP TABLE IF EXISTS `portfolio_images`;
CREATE TABLE IF NOT EXISTS `portfolio_images` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `portfolio_id` int NOT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_images`
--

INSERT INTO `portfolio_images` (`id`, `portfolio_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'public/assets/images/portfolio/61a9003477a9d1638465588.png', '2021-12-02 11:19:48', '2021-12-02 11:19:48'),
(2, 1, 'public/assets/images/portfolio/61a90034789eb1638465588.png', '2021-12-02 11:19:48', '2021-12-02 11:19:48'),
(3, 1, 'public/assets/images/portfolio/61a90034791f41638465588.png', '2021-12-02 11:19:48', '2021-12-02 11:19:48'),
(4, 2, 'public/assets/images/portfolio/61a900c0d4dd21638465728.png', '2021-12-02 11:22:08', '2021-12-02 11:22:08'),
(5, 2, 'public/assets/images/portfolio/61a900c0d5b751638465728.png', '2021-12-02 11:22:08', '2021-12-02 11:22:08'),
(6, 3, 'public/assets/images/portfolio/61a90107241eb1638465799.png', '2021-12-02 11:23:19', '2021-12-02 11:23:19'),
(7, 3, 'public/assets/images/portfolio/61a90107251191638465799.png', '2021-12-02 11:23:19', '2021-12-02 11:23:19'),
(8, 4, 'public/assets/images/portfolio/61a901336afd61638465843.png', '2021-12-02 11:24:03', '2021-12-02 11:24:03'),
(9, 4, 'public/assets/images/portfolio/61a901336b9f31638465843.png', '2021-12-02 11:24:03', '2021-12-02 11:24:03');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_sections`
--

DROP TABLE IF EXISTS `portfolio_sections`;
CREATE TABLE IF NOT EXISTS `portfolio_sections` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `portfolio_id` int NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_sections`
--

INSERT INTO `portfolio_sections` (`id`, `portfolio_id`, `title`, `description`, `images`, `created_at`, `updated_at`) VALUES
(1, 1, 'Test sec 1', 'Dummy section', 'public/assets/images/portfolio/section/61a900347c22d1638465588.png', '2021-12-02 11:19:48', '2021-12-02 11:19:48'),
(2, 2, 'Dummy sec 1', 'Dummy section description', 'public/assets/images/portfolio/section/61a900c0d6c4d1638465728.png', '2021-12-02 11:22:08', '2021-12-02 11:22:08'),
(3, 2, 'Dummy sec 2', 'Dummy section description', 'public/assets/images/portfolio/section/61a900c0d88681638465728.png', '2021-12-02 11:22:08', '2021-12-02 11:22:08');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `slug`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Brand Identity Design', 'brand-identity-design', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 0, '2021-06-01 11:55:58', '2021-12-02 11:24:54'),
(2, 'VR, AR and Game Development', 'vr-ar-and-game-development', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 0, '2021-06-01 11:56:29', '2021-12-02 11:24:58'),
(3, 'UI & UX Design', 'ui-ux-design', 'It is a long established fact that a reader will be distracted by the', 0, '2021-06-01 11:58:07', '2021-12-02 11:25:02'),
(4, 'Print Design & Marketing Material', 'print-design-marketing-material', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 0, '2021-06-13 13:27:40', '2021-12-02 11:25:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
