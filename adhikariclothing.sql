-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 09, 2021 at 05:34 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adhikariclothing`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `firstname`, `lastname`, `contact`, `address`, `email`, `description`, `email_verified_at`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ravi', 'gurung', 98423463847, 'samakhushi', 'ravi@gmail.com', 'creative,sportsman', NULL, NULL, NULL, '2021-03-08 10:20:30', '2021-03-08 10:24:31'),
(2, 'abhushan', 'malla', 98342348972, 'paiyatar', 'ab@gmail.com', 'cool, handsome', NULL, NULL, NULL, '2021-03-08 10:20:59', '2021-03-08 10:20:59'),
(3, 'susan', 'thapa', 98152342342, 'banasthali', 'susan@gmail.com', 'shy,handsome', NULL, NULL, NULL, '2021-03-08 10:21:38', '2021-03-08 10:21:38'),
(4, 'suprabash', 'dangi', 98782364324, 'naranthan', 'prabash@gmail.com', 'handsome,intellegent', NULL, NULL, NULL, '2021-03-08 10:22:22', '2021-03-08 10:22:22'),
(5, 'utsav', 'thapa', 98723434234, 'tokha', 'utsav@gmail.com', 'creative, handsome', NULL, NULL, NULL, '2021-03-08 10:23:13', '2021-03-08 10:23:13'),
(6, 'sandesh', 'kunwar', 9872342323, 'sanga', 'sandesh@gmail.com', 'innocent,creative', NULL, NULL, NULL, '2021-03-08 10:23:55', '2021-03-08 10:23:55'),
(7, 'mandeep', 'adhikari', 9872346723, 'dharmasthali', 'mandeep@gmail.com', 'tall,handsome', NULL, '2021-03-08 10:25:11', NULL, '2021-03-08 10:25:07', '2021-03-08 10:25:11');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `firstname`, `lastname`, `email`, `description`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'ravi', 'timilsina', 'ravitimilsina@gmail.com', 'improve customer care', NULL, NULL, '2021-03-08 10:34:41', '2021-03-08 10:34:41'),
(3, 'safala', 'tuladhar', 'safala@gmail.com', 'thanks for your service', NULL, NULL, '2021-03-08 10:35:02', '2021-03-08 10:35:02'),
(4, 'yogendra', 'maharjan', 'yogenz@gmail.com', 'keep it up', NULL, NULL, '2021-03-08 10:35:37', '2021-03-08 10:35:37'),
(5, 'ujan', 'manandhar', 'ujan@gmail.com', 'quality products', NULL, NULL, '2021-03-08 10:36:04', '2021-03-08 10:36:04'),
(6, 'alina', 'manandhar', 'alina@gmail.com', 'improve quality of products', NULL, NULL, '2021-03-08 10:36:34', '2021-03-08 10:36:34'),
(7, 'tenzin lhamo', 'sherpa', 'tenzin43@gmail.com', 'liked your products', NULL, NULL, '2021-03-08 10:37:11', '2021-03-08 10:37:11'),
(8, 'indira', 'pahadi', 'indira@gmail.com', 'good products', NULL, NULL, '2021-03-08 11:09:59', '2021-03-08 11:09:59'),
(9, 'mandira', 'shrestha', 'mandy@gmail.com', 'nice products', NULL, NULL, '2021-03-08 11:12:19', '2021-03-08 11:12:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_04_155645_create_employees_table', 1),
(5, '2021_03_06_081439_create_messages_table', 1),
(6, '2021_03_08_043034_create_products_table', 1),
(8, '2021_03_08_044530_create_orders_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productid` bigint(20) NOT NULL,
  `productname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` bigint(20) NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `productid`, `productname`, `category`, `size`, `price`, `firstname`, `lastname`, `contact`, `quantity`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 6, 'male', 'fitness tshirt', 'large', 1000, 'yogendra', 'maharjan', 9841506623, 5, NULL, '2021-03-09 10:16:16', '2021-03-09 10:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `stockquantity` int(11) NOT NULL,
  `imglocation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productname`, `size`, `price`, `stockquantity`, `imglocation`, `category`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'baby boy top', 'small', 550, 100, 'babyboytop.jpg', 'baby', NULL, '2021-03-08 10:46:05', '2021-03-08 10:46:05'),
(2, 'babyhoodie', 'small', 600, 80, 'babyhoodie.jpg', 'baby', NULL, '2021-03-08 10:47:01', '2021-03-08 10:47:01'),
(3, 'baby summer', 'small', 550, 80, 'babysummer.jpg', 'baby', NULL, '2021-03-08 10:47:37', '2021-03-08 10:47:37'),
(4, 'boys sleeveless', 'small', 700, 56, 'boysleeveless.jpg', 'baby', NULL, '2021-03-08 10:48:02', '2021-03-09 09:54:45'),
(5, 'combo set', 'small', 800, 70, 'combo.jpg', 'baby', NULL, '2021-03-08 10:48:23', '2021-03-08 10:48:23'),
(6, 'fitness tshirt', 'large', 1000, 45, 'fitnesstshirt.jpg', 'male', NULL, '2021-03-08 10:49:13', '2021-03-09 10:21:57'),
(7, 'gym bag', 'medium', 950, 70, 'gymbag.jpg', 'male', NULL, '2021-03-08 10:49:50', '2021-03-08 10:49:50'),
(8, 'jackets', 'small', 750, 50, 'jackets.jpg', 'male', NULL, '2021-03-08 10:50:14', '2021-03-08 10:50:14'),
(9, 'joggers hoodie', 'large', 1500, 150, 'joggershoodie.jpg', 'male', NULL, '2021-03-08 10:51:03', '2021-03-08 10:51:03'),
(10, 'summer shorts', 'medium', 950, 50, 'summershorts.jpg', 'male', NULL, '2021-03-08 10:51:34', '2021-03-08 10:51:34'),
(11, 'summer sleevless', 'large', 800, 46, 'summersleeveless.jpg', 'male', NULL, '2021-03-08 10:52:11', '2021-03-09 08:23:26'),
(12, 'v neck sweater', 'medium', 1200, 100, 'vnecksweater.jpg', 'male', NULL, '2021-03-08 10:52:48', '2021-03-08 10:52:48'),
(13, 'butterfly sleeve', 'medium', 800, 190, 'butterflysleeve.jpg', 'female', NULL, '2021-03-08 10:53:29', '2021-03-09 06:37:44'),
(14, 'long sleeves', 'medium', 650, 60, 'longsleeves.jpg', 'female', NULL, '2021-03-08 10:53:55', '2021-03-08 10:53:55'),
(15, 'panther top', 'medium', 600, 45, 'panthertop.jpg', 'female', NULL, '2021-03-08 10:54:23', '2021-03-08 10:54:23'),
(16, 'summer tshirt', 'medium', 550, 50, 'summertshirt.jpg', 'female', NULL, '2021-03-08 10:54:50', '2021-03-08 10:54:50'),
(17, 'trumpet longsleeve', 'large', 1500, 30, 'trumpetlongsleeve.jpg', 'female', NULL, '2021-03-08 10:55:29', '2021-03-08 10:55:29'),
(18, 'snow set baby', 'small', 550, 100, 'snowset.jpg', 'baby', NULL, '2021-03-09 01:21:47', '2021-03-09 01:21:47'),
(19, 'yoga dress', 'medium', 800, 100, 'yogadress.jpg', 'female', NULL, '2021-03-09 01:23:09', '2021-03-09 01:23:09'),
(20, 'summer tshirt', 'medium', 1200, 5, 'babysummer.jpg', 'male', NULL, '2021-03-09 01:27:09', '2021-03-09 01:27:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rohit prasain', 'rohit@gmail.com', NULL, '$2y$10$0ZXHU1O76xUI2eJ6Q7i4NOBV8xHINkp41/ACfuj12t4Gii5ISbLXe', NULL, '2021-03-08 10:19:50', '2021-03-08 10:19:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
