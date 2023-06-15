-- Adminer 4.8.1 MySQL 5.7.34 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE `admin_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `admin_users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'admin',	'admin@admin.com',	'$2y$10$AmK.WTy1T0IUkc/8kSm.kOhE0y2mQaxr91VRNt.Xp5FUe3pyzOCle',	'J6nEhs4Uc1mjSsCVoHO6HC0rkzRUsr5SRzDvjjJMy0lUaLvETBGlSP8l1IYe',	'2019-08-09 17:22:02',	'2019-08-09 17:22:02');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2018_02_17_211248_create_products_table',	1),
(4,	'2018_03_20_192027_create_orders_table',	1),
(5,	'2018_03_20_192950_create_order_items_table',	1),
(6,	'2018_04_16_194401_create_admin_users_table',	1);

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `information` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 DEFAULT NULL,
  `send_by` varchar(191) CHARACTER SET utf8mb4 DEFAULT NULL,
  `due_date` timestamp NULL DEFAULT NULL,
  `take_time` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `orders` (`id`, `user_id`, `date`, `address`, `city`, `province`, `postal`, `payment`, `telephone`, `payment_method`, `information`, `status`, `send_by`, `due_date`, `take_time`, `created_at`, `updated_at`) VALUES
(1,	5,	'2023-06-12 06:46:58',	'Bekasi',	'Bekasi',	'Jawa Barat',	'17124',	'gojek.png',	'0812128389488',	'transfer',	NULL,	'Success',	'courir',	NULL,	NULL,	'2023-06-12 06:43:08',	'2023-06-12 06:46:58'),
(2,	5,	'2023-06-12 07:18:55',	'Bekasi',	'Bekasi',	'Jawa Barat',	'17124',	'Picture1.jpg',	'0812128389488',	'gopay',	NULL,	'Success',	NULL,	NULL,	NULL,	'2023-06-12 06:53:30',	'2023-06-12 07:18:55');

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE `order_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1,	1,	1,	1,	20000.00,	'2023-06-12 06:43:08',	'2023-06-12 06:43:08'),
(2,	2,	2,	1,	25000.00,	'2023-06-12 06:53:30',	'2023-06-12 06:53:30');

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(16,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `products` (`id`, `name`, `price`, `description`, `stock`, `image`, `created_at`, `updated_at`) VALUES
(1,	'Salad Buah Enak',	20000.00,	'enak',	2,	'1.webp',	'2022-10-29 15:57:53',	'2023-06-12 06:45:11'),
(2,	'Paket 2',	25000.00,	'Salad enak',	9,	'2.webp',	'2023-06-07 16:01:18',	'2023-06-12 06:54:11'),
(3,	'Paket 3',	90000.00,	'Salad paket 3 pake toge',	8,	'3.webp',	'2023-06-07 16:01:45',	'2023-06-07 16:01:45');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'Mussa',	'mussa@example.com',	'$2y$10$RuOLzG6G9A/13SYDobYTB.ahKh9emm/RHdk7GKC3/wXgUZJBk9ZP6',	NULL,	'2019-08-09 17:22:02',	'2019-08-09 17:22:02'),
(2,	'Billy',	'billy@example.com',	'$2y$10$RuOLzG6G9A/13SYDobYTB.ahKh9emm/RHdk7GKC3/wXgUZJBk9ZP6',	NULL,	'2019-08-09 17:22:02',	'2019-08-09 17:22:02'),
(3,	'Muhammad Ramdhan Syakirin',	'djeldrago22@gmail.com',	'$2y$10$OnrRZb0XDDPFYVD810/3cueQ0DnDAWVVrs4TkcWxVepCfSoCA5lhW',	NULL,	'2019-08-09 17:29:45',	'2019-08-09 17:29:45'),
(4,	'Desi Natalia',	'desi@gmail.com',	'$2y$10$ZWwqY3rvoNf.mYz3/aRa.OVDxiVrBL6E6F6BmXozBnBtQs0BhnNLW',	NULL,	'2019-08-12 00:08:50',	'2019-08-12 00:08:50'),
(5,	'akmal',	'akmal@mail.com',	'$2y$10$AmK.WTy1T0IUkc/8kSm.kOhE0y2mQaxr91VRNt.Xp5FUe3pyzOCle',	NULL,	'2023-06-12 06:39:33',	'2023-06-12 06:39:33');

-- 2023-06-12 07:43:31
