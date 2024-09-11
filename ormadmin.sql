<p>
  -- phpMyAdmin SQL Dump
  -- version 5.2.1
  -- https://www.phpmyadmin.net/
  --
  -- Host: 127.0.0.1
  -- Generation Time: Jul 16, 2024 at 01:04 PM
  -- Server version: 10.4.32-MariaDB
  -- PHP Version: 8.2.12
  
  SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
  START TRANSACTION;
  SET time_zone = "+00:00";
  
  
  /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
  /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
  /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
  /*!40101 SET NAMES utf8mb4 */;
  
  --
  -- Database: `ormadmin`
  --
  
  -- --------------------------------------------------------
  
  --
  -- Table structure for table `admins`
  --
  
  CREATE TABLE `admins` (
    `id` bigint(20) UNSIGNED NOT NULL,
    `name` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
  
  -- --------------------------------------------------------
  
  --
  -- Table structure for table `cache`
  --
  
  CREATE TABLE `cache` (
    `key` varchar(255) NOT NULL,
    `value` mediumtext NOT NULL,
    `expiration` int(11) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
  
  -- --------------------------------------------------------
  
  --
  -- Table structure for table `cache_locks`
  --
  
  CREATE TABLE `cache_locks` (
    `key` varchar(255) NOT NULL,
    `owner` varchar(255) NOT NULL,
    `expiration` int(11) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
  
  -- --------------------------------------------------------
  
  --
  -- Table structure for table `carts`
  --
  
  CREATE TABLE `carts` (
    `cart_id` bigint(20) UNSIGNED NOT NULL,
    `product_id` int(11) NOT NULL,
    `quantity` varchar(255) NOT NULL,
    `price` varchar(255) NOT NULL,
    `user_id` int(11) NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
  
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
  -- Table structure for table `jobs`
  --
  
  CREATE TABLE `jobs` (
    `id` bigint(20) UNSIGNED NOT NULL,
    `queue` varchar(255) NOT NULL,
    `payload` longtext NOT NULL,
    `attempts` tinyint(3) UNSIGNED NOT NULL,
    `reserved_at` int(10) UNSIGNED DEFAULT NULL,
    `available_at` int(10) UNSIGNED NOT NULL,
    `created_at` int(10) UNSIGNED NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
  
  -- --------------------------------------------------------
  
  --
  -- Table structure for table `job_batches`
  --
  
  CREATE TABLE `job_batches` (
    `id` varchar(255) NOT NULL,
    `name` varchar(255) NOT NULL,
    `total_jobs` int(11) NOT NULL,
    `pending_jobs` int(11) NOT NULL,
    `failed_jobs` int(11) NOT NULL,
    `failed_job_ids` longtext NOT NULL,
    `options` mediumtext DEFAULT NULL,
    `cancelled_at` int(11) DEFAULT NULL,
    `created_at` int(11) NOT NULL,
    `finished_at` int(11) DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
  
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
  (28, '0001_01_01_000000_create_users_table', 1),
  (29, '0001_01_01_000001_create_cache_table', 1),
  (30, '0001_01_01_000002_create_jobs_table', 1),
  (31, '2024_07_07_030653_create_admins_table', 1),
  (32, '2024_07_08_082757_create_students_table', 1),
  (33, '2024_07_15_101448_create_products_table', 1),
  (35, '2024_07_16_095755_create_carts_table', 2),
  (37, '2024_07_16_095911_create_order_masters_table', 3);
  
  -- --------------------------------------------------------
  
  --
  -- Table structure for table `order_masters`
  --
  
  CREATE TABLE `order_masters` (
    `ordermaster_id` bigint(20) UNSIGNED NOT NULL,
    `user_id` int(11) NOT NULL,
    `order_date` varchar(255) NOT NULL,
    `shipping_name` varchar(255) NOT NULL,
    `shipping_address` varchar(255) NOT NULL,
    `shipping_mobileno` varchar(255) NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
  
  -- --------------------------------------------------------
  
  --
  -- Table structure for table `password_reset_tokens`
  --
  
  CREATE TABLE `password_reset_tokens` (
    `email` varchar(255) NOT NULL,
    `token` varchar(255) NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
  
  -- --------------------------------------------------------
  
  --
  -- Table structure for table `products`
  --
  
  CREATE TABLE `products` (
    `id` bigint(20) UNSIGNED NOT NULL,
    `p_name` varchar(255) NOT NULL,
    `p_price` varchar(255) NOT NULL,
    `p_detail` longtext NOT NULL,
    `performance` varchar(255) NOT NULL,
    `display` varchar(255) NOT NULL,
    `camera` varchar(255) NOT NULL,
    `battery` varchar(255) NOT NULL,
    `img` varchar(255) NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
  
  --
  -- Dumping data for table `products`
  --
  
  INSERT INTO `products` (`id`, `p_name`, `p_price`, `p_detail`, `performance`, `display`, `camera`, `battery`, `img`, `created_at`, `updated_at`) VALUES
  (1, 'iQOO Z9', 'Rs. 19,999', 'The iQOO Z9 5G is easily one of the best-performing phones in the sub-Rs 20,000 right now thanks to the Dimensity 7200 chipset. Additionally, you get a bright and attractive display along with dependable battery life, making a solid all-round device in this segment. However, the camera system lacks versatility and the company only promises two years of software updates.', 'Octa core (2.8 GHz, Dual Core + 2 GHz, Hexa Core)MediaTek Dimensity 72008 GB RAM', '6.67 inches (16.94 cm)FHD+, AMOLED120 Hz Refresh Rate', '50 MP + 2 MP Dual Primary CamerasLED Flash16 MP Front Camera', '5000 mAhFlash ChargingUSB Type-C Port', '6c5d6c0de26dd96cb62f27f8df1037db0de90196.webp', '2024-07-16 03:34:05', '2024-07-16 03:34:05'),
  (2, 'iQOO Neo 9 Pro', 'Rs. 36,999', 'The iQOO Neo 9 Pro keeps up the Neo 7 Pro`s legacy as a reliable performance-oriented smartphone with a not-so-high sticker price. The 50MP primary camera works well in daylight and low-light conditions, though the ultra-wide camera can use some improvements. If a good battery and fast charging matter to you, again, the Neo 9 Pro won`t disappoint. But for an immersive Android ecosystem, the OnePlus 12, which also rocks Snapdragon 8 Gen 2, will be a better bet.', 'Octa core (3.2 GHz, Single Core + 2.8 GHz, Quad core + 2 GHz, Tri core)Snapdragon 8 Gen 28 GB RAM', '6.78 inches (17.22 cm)FHD+, AMOLED144 Hz Refresh Rate', '50 MP + 8 MP Dual Primary CamerasLED Flash16 MP Front Camera', '5160 mAhFlash ChargingUSB Type-C Port', '156670-v4-iqoo-neo-9-pro-mobile-phone-large-5.webp', '2024-07-16 03:38:57', '2024-07-16 03:38:57'),
  (3, 'iQOO 12 5G', 'Rs. 52,999', 'The iQOO 12 stands out as the fastest Android smartphone currently available. It also earns high marks for its exceptional viewing experience, loud speakers, incredible cameras, great battery life, and blazing-fast charging speeds. That said, there is wireless charging support yet, and the software, which has been refined, still leaves room for improvement.', 'Octa core (3.3 GHz, Single Core + 3.2 GHz, Tri core + 3 GHz, Dual core + 2.3 GHz, Dual core)Snapdragon 8 Gen 312 GB RAM', '6.78 inches (17.22 cm)FHD+, AMOLED144 Hz Refresh Rate', '50 MP + 50 MP + 64 MP Triple Primary CamerasDual LED Flash16 MP Front Camera', '5000 mAhFlash ChargingUSB Type-C Port', '3d8019ad3720308dbc3249e8c2b925df075f4bf2.webp', '2024-07-16 03:42:59', '2024-07-16 03:42:59'),
  (4, 'vivo T3x', 'Rs. 13,499', 'The Vivo T3x stands out as a performance-focused smartphone for anyone on a budget. Be it regular usage or casual gaming, this handset proves its versatility. Besides that, the phone boasts a respectable display, impressive battery life, and a likeable design. However, the cameras might leave you wanting more.', 'Octa core (2.2 GHz, Quad Core + 1.8 GHz, Quad core)Snapdragon 6 Gen 14 GB RAM', '6.72 inches (17.07 cm)FHD+, LCD120 Hz Refresh Rate', '50 MP + 2 MP Dual Primary CamerasLED Flash8 MP Front Camera', '6000 mAhFlash ChargingUSB Type-C Port', '208258b28929f1cddde289f6941593f2a3272c58.webp', '2024-07-16 03:50:17', '2024-07-16 03:50:17');
  
  -- --------------------------------------------------------
  
  --
  -- Table structure for table `sessions`
  --
  
  CREATE TABLE `sessions` (
    `id` varchar(255) NOT NULL,
    `user_id` bigint(20) UNSIGNED DEFAULT NULL,
    `ip_address` varchar(45) DEFAULT NULL,
    `user_agent` text DEFAULT NULL,
    `payload` longtext NOT NULL,
    `last_activity` int(11) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
  
  --
  -- Dumping data for table `sessions`
  --
  
  INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
  ('7wDYlQuiMYaosF5kYMluWdpUUeJeOkNGZbEBcgqL', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNW82OFBxWXpBOEVyWDRXQmhiS09ncFRFaXp5M1lVajJ3QWxrVk54UCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0cy80Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721122195),
  ('jVj66dFORbIQ9ddeAN7w09wiYkslOQ8lA4DkvyyN', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUFdQTG1PZldoMTdhZThOZ2c4RW11R25oZkdHbU5ibnRnYXlTcjloVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0cy8xIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721127162);
  
  -- --------------------------------------------------------
  
  --
  -- Table structure for table `students`
  --
  
  CREATE TABLE `students` (
    `id` bigint(20) UNSIGNED NOT NULL,
    `name` varchar(255) NOT NULL,
    `gender` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `mobile` varchar(255) NOT NULL,
    `address` varchar(255) NOT NULL,
    `img` varchar(255) NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
  
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
    `updated_at` timestamp NULL DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
  
  --
  -- Indexes for dumped tables
  --
  
  --
  -- Indexes for table `admins`
  --
  ALTER TABLE `admins`
    ADD PRIMARY KEY (`id`);
  
  --
  -- Indexes for table `cache`
  --
  ALTER TABLE `cache`
    ADD PRIMARY KEY (`key`);
  
  --
  -- Indexes for table `cache_locks`
  --
  ALTER TABLE `cache_locks`
    ADD PRIMARY KEY (`key`);
  
  --
  -- Indexes for table `carts`
  --
  ALTER TABLE `carts`
    ADD PRIMARY KEY (`cart_id`);
  
  --
  -- Indexes for table `failed_jobs`
  --
  ALTER TABLE `failed_jobs`
    ADD PRIMARY KEY (`id`),
    ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);
  
  --
  -- Indexes for table `jobs`
  --
  ALTER TABLE `jobs`
    ADD PRIMARY KEY (`id`),
    ADD KEY `jobs_queue_index` (`queue`);
  
  --
  -- Indexes for table `job_batches`
  --
  ALTER TABLE `job_batches`
    ADD PRIMARY KEY (`id`);
  
  --
  -- Indexes for table `migrations`
  --
  ALTER TABLE `migrations`
    ADD PRIMARY KEY (`id`);
  
  --
  -- Indexes for table `order_masters`
  --
  ALTER TABLE `order_masters`
    ADD PRIMARY KEY (`ordermaster_id`);
  
  --
  -- Indexes for table `password_reset_tokens`
  --
  ALTER TABLE `password_reset_tokens`
    ADD PRIMARY KEY (`email`);
  
  --
  -- Indexes for table `products`
  --
  ALTER TABLE `products`
    ADD PRIMARY KEY (`id`);
  
  --
  -- Indexes for table `sessions`
  --
  ALTER TABLE `sessions`
    ADD PRIMARY KEY (`id`),
    ADD KEY `sessions_user_id_index` (`user_id`),
    ADD KEY `sessions_last_activity_index` (`last_activity`);
  
  --
  -- Indexes for table `students`
  --
  ALTER TABLE `students`
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
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
  
  --
  -- AUTO_INCREMENT for table `carts`
  --
  ALTER TABLE `carts`
    MODIFY `cart_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
  
  --
  -- AUTO_INCREMENT for table `failed_jobs`
  --
  ALTER TABLE `failed_jobs`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
  
  --
  -- AUTO_INCREMENT for table `jobs`
  --
  ALTER TABLE `jobs`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
  
  --
  -- AUTO_INCREMENT for table `migrations`
  --
  ALTER TABLE `migrations`
    MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
  
  --
  -- AUTO_INCREMENT for table `order_masters`
  --
  ALTER TABLE `order_masters`
    MODIFY `ordermaster_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
  
  --
  -- AUTO_INCREMENT for table `products`
  --
  ALTER TABLE `products`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
  
  --
  -- AUTO_INCREMENT for table `students`
  --
  ALTER TABLE `students`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
  
  --
  -- AUTO_INCREMENT for table `users`
  --
  ALTER TABLE `users`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
  COMMIT;
  
  /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
  /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
  /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
  
</p>