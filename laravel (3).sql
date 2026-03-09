-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2025 at 01:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_models`
--

CREATE TABLE `admin_login_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_login_models`
--

INSERT INTO `admin_login_models` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart_models`
--

CREATE TABLE `cart_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productid` varchar(10) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `pprice` varchar(10) NOT NULL,
  `billno` tinyint(1) NOT NULL DEFAULT 0,
  `pstatus` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_models`
--

INSERT INTO `cart_models` (`id`, `productid`, `userid`, `qty`, `pprice`, `billno`, `pstatus`, `created_at`, `updated_at`) VALUES
(5, '9', '4', '1', '175400', 5, 'deliver', '2025-03-30 12:48:05', '2025-03-30 13:00:32'),
(6, '10', '4', '2', '185499', 5, 'deliver', '2025-03-30 12:48:08', '2025-04-12 01:06:08'),
(7, '11', '4', '2', '126599', 5, 'process', '2025-03-30 12:57:29', '2025-04-12 01:04:33'),
(8, '9', '4', '1', '175400', 6, 'order', '2025-04-12 00:31:20', '2025-04-12 00:31:20'),
(9, '10', '4', '1', '185499', 6, 'order', '2025-04-12 00:31:34', '2025-04-12 00:31:34'),
(10, '9', '4', '1', '175400', 7, 'deliver', '2025-04-12 07:42:32', '2025-04-12 07:44:10');

-- --------------------------------------------------------

--
-- Table structure for table `checkout_models`
--

CREATE TABLE `checkout_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `custname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobileno` varchar(100) NOT NULL,
  `custemail` varchar(100) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `billno` tinyint(1) NOT NULL DEFAULT 0,
  `custid` varchar(10) NOT NULL,
  `shippingtype` varchar(50) NOT NULL,
  `total` varchar(100) NOT NULL,
  `orderdate` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checkout_models`
--

INSERT INTO `checkout_models` (`id`, `custname`, `address`, `mobileno`, `custemail`, `pincode`, `billno`, `custid`, `shippingtype`, `total`, `orderdate`, `created_at`, `updated_at`) VALUES
(5, 'Keyur Chaudhari', 'vyara', '01234567890', 'keyur@hotmail.com', '394340', 5, '4', 'COD(Case On Delivery)', '839575.8', '2025-03-30', '2025-03-30 13:00:09', '2025-03-30 13:00:09'),
(6, 'Keyur Chaudhari', 'Kalamkui', '01234567890', 'keyur@hotmail.com', '458565', 6, '4', 'COD(Case On Delivery)', '378943.95', '2025-04-12', '2025-04-12 00:32:56', '2025-04-12 00:32:56'),
(7, 'Keyur Chaudhari', 'Kalamkui', '01234567890', 'keyur@hotmail.com', '394340', 7, '4', 'COD(Case On Delivery)', '184170', '2025-04-12', '2025-04-12 07:42:41', '2025-04-12 07:42:41');

-- --------------------------------------------------------

--
-- Table structure for table `customer_reg_models`
--

CREATE TABLE `customer_reg_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(50) NOT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `mobileno` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_reg_models`
--

INSERT INTO `customer_reg_models` (`id`, `name`, `address`, `city`, `gender`, `mobileno`, `dob`, `emailid`, `password`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Keyur Chaudhari', 'vyara', 'vyara', 'Male', '0123456789', '2005-05-04', 'keyur@gmail.com', '1234', 1, '2025-03-30 11:28:43', '2025-03-30 12:50:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `feedback_models`
--

CREATE TABLE `feedback_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `custname` varchar(100) NOT NULL,
  `mobileno` varchar(11) NOT NULL,
  `custemail` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback_models`
--

INSERT INTO `feedback_models` (`id`, `custname`, `mobileno`, `custemail`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Keyur Chaudhari', '01234567890', 'keyur@hotmail.com', 'ADE', '2025-03-30 13:03:44', '2025-03-30 13:03:44'),
(2, 'Keyur Chaudhari', '01234567890', 'keyur@hotmail.com', 'best of quality', '2025-04-12 00:46:50', '2025-04-12 00:46:50');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_12_23_080257_create_product_models_table', 1),
(6, '2024_12_26_052235_create_admin_login_models_table', 1),
(7, '2024_12_27_060452_create_pincode_models_table', 2),
(8, '2024_12_30_051907_create_product_entry_models_table', 3),
(9, '2024_12_31_053225_create_customer_reg_models_table', 4),
(10, '2025_01_02_052443_create_view_product_models_table', 5),
(11, '2025_01_03_051917_create_cart_models_table', 5),
(12, '2025_01_09_071511_create_checkout_models_table', 6),
(14, '2025_01_17_092900_create_feedback_models_table', 7),
(15, '2021_11_19_184137_add_column_is_admin_to_users_table', 8),
(16, '2021_11_19_185717_create_travel_packages_table', 8),
(17, '2021_11_19_195109_create_galleries_table', 8),
(18, '2021_11_20_073204_add_slug_to_travel_packages_table', 8),
(19, '2021_11_21_061956_create_posts_table', 8),
(20, '2021_11_23_143842_create_categories_table', 8),
(21, '2021_11_24_101654_create_cars_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pincode_models`
--

CREATE TABLE `pincode_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pincode_models`
--

INSERT INTO `pincode_models` (`id`, `pincode`, `created_at`, `updated_at`) VALUES
(4, '394650', '2025-03-30 12:59:34', '2025-03-30 12:59:34'),
(5, '394340', '2025-03-30 12:59:41', '2025-03-30 12:59:41'),
(6, '458565', '2025-03-30 12:59:45', '2025-03-30 12:59:45'),
(7, '394646', '2025-03-30 12:59:52', '2025-03-30 12:59:52');

-- --------------------------------------------------------

--
-- Table structure for table `product_entry_models`
--

CREATE TABLE `product_entry_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(50) NOT NULL,
  `pnameid` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `material` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `image4` varchar(100) NOT NULL,
  `productstatus` tinyint(1) NOT NULL DEFAULT 1,
  `price` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_entry_models`
--

INSERT INTO `product_entry_models` (`id`, `category`, `pnameid`, `company`, `color`, `material`, `size`, `description`, `image`, `image1`, `image2`, `image3`, `image4`, `productstatus`, `price`, `created_at`, `updated_at`) VALUES
(9, 'Electric Bike', 'Select Model', 'OOLA CLASS', 'Red', 'high-grade aluminum', '5', 'Discover our intelligent and sustainable electric vehicles. Find an Ola Electric showroom near you to explore our electric scooters. Book a test ride today!', '16861.png', '67529.png', '41862.png', '69127.png', '95974.png', 1, '175400', '2025-03-30 12:32:54', '2025-03-30 12:32:54'),
(10, 'Electric Bike', 'Select Model', 'OOLA CLASS 1', 'Blue', 'high carbon', '52', 'Ola Cabs offers to book cabs nearby your location for best fares. For best taxi service at lowest fares, say Ola!', '40016.png', '39863.png', '11627.png', '54389.png', '69627.png', 1, '185499', '2025-03-30 12:42:57', '2025-03-30 12:42:57'),
(11, 'Electric Bike', 'Select Model', 'OOLA CLASS 2', 'Black', 'Grade aluminum X21', '23', 'This is the photo of OLA S1 Pro in Jet Black. Check out here the 6 OLA S1 Pro colour images to decide which one suits you the best. S1 Pro is available.', '54602.png', '78651.png', '48191.png', '69654.png', '64195.png', 1, '126599', '2025-03-30 12:57:18', '2025-03-30 12:57:18');

-- --------------------------------------------------------

--
-- Table structure for table `product_models`
--

CREATE TABLE `product_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productname` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_models`
--

INSERT INTO `product_models` (`id`, `productname`, `created_at`, `updated_at`) VALUES
(5, 'NEST of BEST', '2025-04-11 12:29:10', '2025-04-11 12:29:10'),
(6, 'Dualtron X Limited', '2025-04-12 00:52:38', '2025-04-12 00:52:38'),
(7, 'NAMI BURN-E 2 MAX', '2025-04-12 00:52:55', '2025-04-12 00:52:55'),
(8, 'OOLA S1 Pro X45', '2025-04-12 00:53:28', '2025-04-12 00:53:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `view_product_models`
--

CREATE TABLE `view_product_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login_models`
--
ALTER TABLE `admin_login_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_models`
--
ALTER TABLE `cart_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout_models`
--
ALTER TABLE `checkout_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_reg_models`
--
ALTER TABLE `customer_reg_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback_models`
--
ALTER TABLE `feedback_models`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pincode_models`
--
ALTER TABLE `pincode_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_entry_models`
--
ALTER TABLE `product_entry_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_models`
--
ALTER TABLE `product_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `view_product_models`
--
ALTER TABLE `view_product_models`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login_models`
--
ALTER TABLE `admin_login_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart_models`
--
ALTER TABLE `cart_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `checkout_models`
--
ALTER TABLE `checkout_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer_reg_models`
--
ALTER TABLE `customer_reg_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback_models`
--
ALTER TABLE `feedback_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pincode_models`
--
ALTER TABLE `pincode_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_entry_models`
--
ALTER TABLE `product_entry_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_models`
--
ALTER TABLE `product_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `view_product_models`
--
ALTER TABLE `view_product_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
