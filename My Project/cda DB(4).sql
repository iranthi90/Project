-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2019 at 07:59 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cda`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Kernel Products', '2019-01-25 04:49:15', '2019-01-25 04:49:15'),
(2, 'Fibre & Fibre Processed Products', '2019-01-25 04:49:15', '2019-01-25 04:49:15'),
(3, 'Coconut Shell Products', '2019-01-25 04:49:15', '2019-01-25 04:49:15'),
(4, 'Other Coconut Products', '2019-01-25 04:49:15', '2019-01-25 04:49:15');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`id`, `category_id`, `product_id`, `created_at`, `updated_at`) VALUES
(16, 1, 4, NULL, NULL),
(22, 1, 1, NULL, NULL),
(23, 1, 2, NULL, NULL),
(24, 1, 3, NULL, NULL),
(25, 1, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `channels`
--

CREATE TABLE `channels` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `channels`
--

INSERT INTO `channels` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Products', NULL, NULL),
(2, 'Services', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `discussions`
--

CREATE TABLE `discussions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `channel_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
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
(3, '2019_01_03_141921_create_roles_table', 1),
(4, '2019_01_14_052347_create_products_table', 1),
(5, '2019_01_14_052648_create_categories_table', 1),
(6, '2019_01_14_052835_create_category_product_pivot_table', 1),
(7, '2019_01_23_083645_alter_product_price', 1),
(8, '2019_01_23_084644_add_product_qty', 1),
(9, '2019_01_23_175854_add_product_featured', 1),
(10, '2019_01_26_071429_add_product_video', 2),
(11, '2019_01_30_165757_create_suppliers_table', 3),
(12, '2019_02_02_150330_create_product_supplier_table', 3),
(13, '2019_02_02_154537_create_stocks_table', 3),
(14, '2019_02_02_200442_drop_product_qty', 3),
(15, '2019_02_12_210409_add_product_deleted_at', 4),
(16, '2019_05_25_055332_create_orders_table', 5),
(17, '2019_05_25_090749_create_order_products_table', 6),
(18, '2019_06_24_065451_create_visitor_table', 7),
(19, '2019_07_03_094348_create_payment_table', 8),
(20, '2019_07_04_062448_create_payment_table', 9),
(21, '2019_07_04_064554_create_payment_table', 10),
(22, '2019_07_04_083046_alter_payment_table', 11),
(23, '2019_07_04_102944_alter_payment_table', 12),
(24, '2019_07_04_105205_create_payment_table', 13),
(25, '2019_07_04_105922_alter_order_table', 14),
(26, '2019_07_05_065449_create_setting_table', 15),
(27, '2019_07_05_070433_alter_setting_table', 16),
(28, '2019_07_05_074104_alter_order_table', 17),
(29, '2019_07_05_080350_alter_order_table', 18),
(30, '2019_07_05_081529_create_orders_table', 19),
(31, '2019_07_05_094251_create_payments_table', 20),
(32, '2019_07_05_104116_alter_payments_table', 21),
(33, '2019_07_05_104406_alter_payments_table', 22),
(34, '2019_07_06_021226_alter_setting_table', 23),
(35, '2019_07_06_024507_create_settings_table', 24),
(36, '2019_07_06_040916_create_order_product_table', 25),
(37, '2019_07_06_043849_alter_orders_table', 26),
(38, '2019_07_06_044333_alter_orders_table', 27),
(39, '2019_07_06_050351_alter_orders_table', 28),
(40, '2019_07_06_050614_alter_order_product_table', 29),
(41, '2019_07_06_063842_alter_order_product_table', 30),
(42, '2019_07_06_064246_alter_order_product_table', 31),
(43, '2019_07_06_064728_alter_order_product_table', 32),
(44, '2019_07_06_064927_alter_orders_table', 33),
(45, '2019_07_06_065323_alter_orders_table', 34),
(46, '2019_07_07_075635_create_channels_table', 35),
(47, '2019_07_07_075724_create_discussions_table', 36),
(48, '2019_07_07_075745_create_replies_table', 37);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `payment_status`, `status`, `created_at`, `updated_at`) VALUES
(13, 1, 'paid', 'pending', '2019-07-05 23:25:17', '2019-07-06 00:46:12'),
(14, 1, 'paid', 'pending', '2019-07-06 00:49:08', '2019-07-06 00:49:27'),
(16, 1, 'paid', 'pending', '2019-07-06 01:34:12', '2019-07-06 01:34:47'),
(17, 1, 'paid', 'pending', '2019-07-06 01:37:35', '2019-07-06 01:41:42'),
(18, 1, 'paid', 'pending', '2019-07-06 01:42:13', '2019-07-06 01:42:18'),
(19, 1, 'paid', 'pending', '2019-07-06 01:44:46', '2019-07-06 01:44:49'),
(20, 1, 'paid', 'pending', '2019-07-06 01:46:25', '2019-07-06 01:46:32'),
(22, 1, 'paid', 'pending', '2019-07-06 03:22:52', '2019-07-06 03:23:03'),
(23, 2, 'paid', 'pending', '2019-07-06 05:24:50', '2019-07-06 22:01:28'),
(24, 1, 'incomplete', 'pending', '2019-07-06 07:58:18', '2019-07-06 07:58:18'),
(25, 1, 'incomplete', 'pending', '2019-07-06 08:14:43', '2019-07-06 08:14:43'),
(26, 1, 'incomplete', 'pending', '2019-07-06 08:15:57', '2019-07-06 08:15:57'),
(27, 1, 'incomplete', 'pending', '2019-07-06 08:17:18', '2019-07-06 08:17:18'),
(28, 1, 'incomplete', 'pending', '2019-07-06 08:22:20', '2019-07-06 08:22:20'),
(29, 1, 'incomplete', 'pending', '2019-07-06 08:23:43', '2019-07-06 08:23:43'),
(30, 1, 'incomplete', 'pending', '2019-07-06 08:24:25', '2019-07-06 08:24:25'),
(31, 1, 'incomplete', 'pending', '2019-07-06 08:29:06', '2019-07-06 08:29:06'),
(32, 1, 'incomplete', 'pending', '2019-07-06 08:30:23', '2019-07-06 08:30:23'),
(33, 1, 'incomplete', 'pending', '2019-07-06 08:31:11', '2019-07-06 08:31:11'),
(34, 1, 'incomplete', 'pending', '2019-07-06 08:31:40', '2019-07-06 08:31:40'),
(35, 1, 'incomplete', 'pending', '2019-07-06 08:32:59', '2019-07-06 08:32:59'),
(36, 1, 'incomplete', 'pending', '2019-07-06 08:34:33', '2019-07-06 08:34:33'),
(37, 1, 'incomplete', 'pending', '2019-07-06 08:36:54', '2019-07-06 08:36:54'),
(38, 1, 'incomplete', 'pending', '2019-07-06 08:37:32', '2019-07-06 08:37:32'),
(39, 1, 'incomplete', 'pending', '2019-07-06 08:38:44', '2019-07-06 08:38:44'),
(40, 1, 'incomplete', 'pending', '2019-07-06 08:40:07', '2019-07-06 08:40:07'),
(41, 1, 'incomplete', 'pending', '2019-07-06 08:41:12', '2019-07-06 08:41:12'),
(42, 1, 'incomplete', 'pending', '2019-07-06 08:43:03', '2019-07-06 08:43:03'),
(43, 1, 'incomplete', 'pending', '2019-07-06 08:43:58', '2019-07-06 08:43:58'),
(44, 1, 'incomplete', 'pending', '2019-07-06 08:44:44', '2019-07-06 08:44:44'),
(45, 1, 'incomplete', 'pending', '2019-07-06 08:45:56', '2019-07-06 08:45:56'),
(46, 1, 'incomplete', 'pending', '2019-07-06 08:48:21', '2019-07-06 08:48:21'),
(47, 1, 'incomplete', 'pending', '2019-07-06 08:48:51', '2019-07-06 08:48:51'),
(48, 1, 'incomplete', 'pending', '2019-07-06 08:49:04', '2019-07-06 08:49:04'),
(49, 1, 'incomplete', 'pending', '2019-07-06 08:51:46', '2019-07-06 08:51:46'),
(50, 1, 'incomplete', 'pending', '2019-07-06 08:53:24', '2019-07-06 08:53:24'),
(51, 1, 'incomplete', 'pending', '2019-07-06 08:54:32', '2019-07-06 08:54:32'),
(52, 1, 'incomplete', 'pending', '2019-07-06 08:54:50', '2019-07-06 08:54:50'),
(53, 1, 'incomplete', 'pending', '2019-07-06 08:55:24', '2019-07-06 08:55:24'),
(54, 1, 'incomplete', 'pending', '2019-07-06 08:56:26', '2019-07-06 08:56:26'),
(55, 1, 'incomplete', 'pending', '2019-07-06 08:57:16', '2019-07-06 08:57:16'),
(56, 1, 'incomplete', 'pending', '2019-07-06 08:57:31', '2019-07-06 08:57:31'),
(57, 1, 'incomplete', 'pending', '2019-07-06 08:57:43', '2019-07-06 08:57:43'),
(58, 1, 'incomplete', 'pending', '2019-07-06 08:58:03', '2019-07-06 08:58:03'),
(59, 1, 'incomplete', 'pending', '2019-07-06 08:59:08', '2019-07-06 22:07:28'),
(60, 1, 'incomplete', 'pending', '2019-07-07 12:12:39', '2019-07-07 12:12:39'),
(61, 4, 'incomplete', 'pending', '2019-07-07 12:16:39', '2019-07-07 12:16:39'),
(62, 4, 'incomplete', 'pending', '2019-07-07 12:21:35', '2019-07-07 12:21:35');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '0',
  `commission` decimal(10,2) DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `qty`, `commission`, `created_at`, `updated_at`) VALUES
(1, 10, 2, 0, '0.00', NULL, NULL),
(2, 10, 3, 0, '0.00', NULL, NULL),
(3, 13, 2, 1, '0.00', NULL, NULL),
(4, 13, 2, 1, '0.00', NULL, NULL),
(5, 13, 2, 1, '0.00', NULL, NULL),
(6, 13, 3, 1, '0.00', NULL, NULL),
(7, 13, 2, 1, '0.00', NULL, NULL),
(8, 13, 3, 1, '0.00', NULL, NULL),
(9, 13, 2, 1, '0.00', NULL, NULL),
(10, 13, 3, 1, '0.00', NULL, NULL),
(11, 14, 2, 1, '0.00', NULL, NULL),
(12, 14, 3, 1, '0.00', NULL, NULL),
(13, 17, 5, 1, '0.00', NULL, NULL),
(14, 17, 2, 1, '0.00', NULL, NULL),
(15, 17, 5, 0, '0.00', NULL, NULL),
(16, 17, 5, 0, '0.00', NULL, NULL),
(17, 18, 5, 0, '0.00', NULL, NULL),
(18, 19, 5, 0, '0.00', NULL, NULL),
(19, 20, 5, 1, '50.00', NULL, NULL),
(20, 22, 5, 2, '100.00', NULL, NULL),
(21, 22, 2, 3, '450.00', NULL, NULL),
(22, 23, 2, 1, '150.00', NULL, NULL),
(23, 23, 3, 1, '50.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('test@mail.com', '$2y$10$RNk6vxxoUuetYHLy5Zo28eT6NevsGtvoqt1OzDmfrNelH7wyiDoxO', '2019-07-04 08:41:03');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `merchant_id` int(11) DEFAULT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `payhere_amount` decimal(10,2) DEFAULT NULL,
  `payhere_currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `md5sig` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_holder_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_expiry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `merchant_id`, `order_id`, `payment_id`, `payhere_amount`, `payhere_currency`, `status_code`, `md5sig`, `custom_1`, `custom_2`, `method`, `status_message`, `card_holder_name`, `card_no`, `card_expiry`, `created_at`, `updated_at`) VALUES
(1, 1212585, 'order_2', 2147483647, '76.95', 'USD', 'success', '478C02EFD4DF0BC265625416523D0A12', '', '', 'TEST', 'Successfully completed the payment.', 'test holder', '************1292', '', NULL, NULL),
(2, 1212585, 'order_2', 2147483647, '66.95', 'USD', 'success', '97D14B14FB4CC9FD38B61011ADE21F75', '', '', 'TEST', 'Successfully completed the payment.', 'Jon Doe', '************1292', '', NULL, NULL),
(3, 1212585, 'order_2', 2147483647, '126.95', 'USD', 'success', '1289B75FAC3DC6218B14A407DE371078', '', '', 'TEST', 'Successfully completed the payment.', 'Jon Doe', '************1292', '', NULL, NULL),
(4, 1212585, 'order_2', 2147483647, '66.95', 'USD', 'success', '97D14B14FB4CC9FD38B61011ADE21F75', '', '', 'TEST', 'Successfully completed the payment.', 'Jon Doe', '************1292', '', NULL, NULL),
(5, 1212585, 'order_2', 2147483647, '106.95', 'USD', 'success', '86312D2CF9C59D7FE177957BBADFCF1E', '', '', 'TEST', 'Successfully completed the payment.', 'Jon Doe', '************1292', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `price`, `description`, `product_image`, `featured`, `video`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Desiccated Coconut', 'desiccated-coconut', '10.00', '<p style=\"text-align: justify; \">Desiccated Coconut is the dried, disintegrated white kernel of the coconut, processed under strict hygienic conditions for human consumption and available in the standard cut sizes of Fine, Medium and Super fine. Sri Lanka Desiccated Coconut is used in a variety of major consumer product areas.</p><p>\r\n\r\n</p><p style=\"text-align: justify; \">Desiccated coconut is used to made Chocolates bars, various candy and ice cream more delicious and exotic. It is also used in food processing industry, frozen food industry, bakery trades as topping for cakes and pastries. Many households popularly use Desiccated coconut in the preparation of numerous dishes as well.</p>\r\n\r\n<p style=\"text-align: justify; \">In addition to the Regular cuts, Desiccate coconut is also available in a variety of fancy cuts such as ; Chips, Flakes, Threads and Shreds.</p>\r\n\r\n<p style=\"text-align: justify;\">These cuts can be further processed into Fancy cuts, Thread, Chips, Toasted Chips, Coloured, Sweetened, Flakes and Shreds.</p><p></p>', '1548226256desiccated_coconut.jpg', 1, 'vDpKVY6u3E0', NULL, '2019-01-25 04:49:15', '2019-06-10 22:39:47'),
(2, 'Coconut Cream', 'coconut-cream', '30.00', '<p style=\"text-align: justify;\">Coconut cream is very similar to coconut milk but contains less water. The main difference is its consistency. It has a thicker, more paste-like consistency, while coconut milk is generally a liquid. Coconut cream is used as an ingredient in cooking, having a mild non-sweet taste. </p><p style=\"text-align: justify; \">Coconut cream can be made by simmering 1 part shredded coconut with 1 part water or milk until frothy, then straining the mixture through a cheesecloth, squeezing out as much liquid as possible; this is coconut milk. </p><p style=\"text-align: justify; \">The coconut milk is refrigerated and allowed to set. Coconut cream is the thick non-liquid part that separates and rises to the top of the coconut milk.</p>', '1548495842coconut-cream.jpg', 1, 'fBQpr5Gtl-E', NULL, '2019-01-26 04:14:02', '2019-02-08 02:40:00'),
(3, 'Coconut Milk', 'coconut-milk', '10.00', '<p><span style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: small;\">Coconut milk is the liquid that comes from the grated pulp of a mature coconut. The opacity and rich taste of coconut milk are due to its high oil content, most of which is saturated fat. Coconut milk is a traditional food ingredient used in Southeast Asia, South Asia, the Caribbean, and northern South America</span><br></p>', '1548498110coconut-milk.jpg', 1, NULL, NULL, '2019-01-26 04:38:43', '2019-02-08 04:07:09'),
(4, 'co co', 'co-co', '20.00', 'ffsg', '1548498162co-co.jpg', 1, NULL, NULL, '2019-01-26 04:52:42', '2019-02-08 02:40:28'),
(5, 'Virgin Coconut Oil', 'asfa', '10.00', '<p class=\"MsoNormal\">Virgin Coconut Oil is an innovative product, defined as\r\nnatural oil obtained from fresh kernel of coconut by cold press method. It is\r\ncalled “Virgin” due to its pure, raw, pristine and unadulterated state: snow\r\nwhite in colour, contains natural vitamins. Virgin coconut oil can be\r\nconsidered as one of the healthiest oils in the world. It is fit for\r\nconsumption without the need for further processing. Virgin coconut oil is\r\ncommonly used in cooking, especially when frying. It may also be used for\r\nmaking margarine and cosmetics.<o:p></o:p></p>', '1558689278asfa.jpg', 1, 'ZAq_1zI1LH0', NULL, '2019-01-26 04:53:39', '2019-05-24 03:44:38');

-- --------------------------------------------------------

--
-- Table structure for table `product_supplier`
--

CREATE TABLE `product_supplier` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `supplier_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_supplier`
--

INSERT INTO `product_supplier` (`id`, `product_id`, `supplier_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 3, 2, NULL, NULL),
(5, 5, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `discussion_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', '2019-01-25 04:49:14', '2019-01-25 04:49:14'),
(2, 'manager', 'Manager', '2019-01-25 04:49:14', '2019-01-25 04:49:14'),
(3, 'employee', 'Employee', '2019-01-25 04:49:14', '2019-01-25 04:49:14'),
(4, 'supplier', 'Supplier', '2019-01-25 04:49:14', '2019-01-25 04:49:14'),
(5, 'customer', 'Customer', '2019-01-25 04:49:14', '2019-01-25 04:49:14');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` int(11) NOT NULL,
  `fax` int(11) NOT NULL,
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commis` decimal(10,2) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `flat_ship` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `email`, `address`, `telephone`, `fax`, `fb`, `twit`, `youtube`, `commis`, `tax`, `flat_ship`, `created_at`, `updated_at`) VALUES
(1, 'cda123@gmail.com', '54, Nawala Road,Narahenpita Colombo 5,Sri Lanka', 112421028, 112421028, 'cda.facebook.com', 'cda.twitter.com', 'cda.youtube.com', '1.00', '2.00', '10.00', NULL, '2019-07-06 07:54:40');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `init_qty` int(11) NOT NULL DEFAULT '0',
  `current_qty` int(11) DEFAULT NULL,
  `reorder_level` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `product_id`, `supplier_id`, `init_qty`, `current_qty`, `reorder_level`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 30, 0, 5, '2019-02-07 10:49:15', '2019-02-07 10:49:15'),
(2, 2, 1, 50, 50, 5, '2019-02-07 10:49:45', '2019-02-07 10:49:45'),
(3, 3, 1, 40, 40, 5, '2019-02-07 10:50:06', '2019-02-07 10:50:06'),
(4, 5, 2, 50, 50, 10, '2019-02-08 02:16:56', '2019-02-08 02:16:56'),
(5, 1, 1, 10, 0, 5, '2019-02-08 02:45:49', '2019-02-08 02:45:49'),
(6, 2, 1, 10, 10, 5, '2019-02-08 02:53:50', '2019-02-08 02:53:50');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `phone_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `company_name`, `fname`, `lname`, `email`, `address`, `phone_1`, `phone_2`, `image`, `website`, `created_at`, `updated_at`) VALUES
(1, 'COCOTANA COCONUT PRODUCTS', 'sandaruwan', 'Peragasthenna', 'sandaruwanperagasthenna@gmail.com', 'No:10, Batapaththala Junction, Katana', '0712719075', NULL, '', NULL, '2019-02-07 10:48:39', '2019-02-07 10:48:39'),
(2, 'Virgin Oil International (Pvt) Ltd', 'Mr. Mervin Stephen', 'Gonawela', 'info@voilaceylon.com', '102/08, Kithuwalwatte Road, Colombo 08.', '0112296363', NULL, '1549611777Virgin Oil International (Pvt) Ltd.png', 'http://www.voilaceylon.com/', '2019-02-08 02:12:57', '2019-02-08 02:12:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '5',
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`, `isAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@cda.com', '$2y$10$32tqw9TKanBR6.B0qzZqfOaTTgKwohIXoWacXRSMibkkHVn.YXA/m', 1, 1, 'e62jN7vMlpYFPaKTeH9TrZ7X4n0j709AdTOFX5HhWR4jZESRGzvjYY3fQJNx', '2019-01-25 04:49:14', '2019-01-25 04:49:14'),
(2, 'Jon Doe', 'jondoe@gmail.com', '$2y$10$syPJvEq7k.2.e3qk8ncs3OeRAZJ9bTa9eccDvkNrHBxuiLp18I4Hq', 5, 0, 'uD8a14v0VLGWiPwWIBEJVN9ZikPiGwonp9q1bIHjhK4AqQyRxuq8rLDduIdj', '2019-01-25 04:49:15', '2019-01-25 04:49:15'),
(3, 'Iranthi Shashikala Ranasinghe', 'test@mail.com', '$2y$10$8ExqeznOhu2SVoFzSlWeyuQYdClrLFcTlvlODco7Usv.t9HMlDNVq', 5, 0, 'sxSgdgzEGG3d2RstuqNagItToHKkhCyJnn2GgEeLcztYd3iMBKfBsBc6Tm4J', '2019-02-08 02:07:32', '2019-02-08 02:07:32'),
(4, 'Saman Perera', 'saman@gmail.com', '$2y$10$FfKCkvj0sFE5in9fzBZ.rOtillwCcZr6VleTkWMcfybGnK4AIAfxy', 5, 0, '79iMginbro5mVeTCTCpoM3B3GhoaMKuWZKwQasPDeESRk8sIIj5GHM1msmUW', '2019-07-07 08:40:42', '2019-07-07 08:40:42'),
(5, 'Vihas Dias', 'vihas@gmail.com', '$2y$10$AJB4LEpILgnj9F.c2eghvehkcPE6qS6uzAgU9EO2O7VAigUEiB/AS', 5, 0, 'iEroFVSoISLtJGkysXGjVmWnFtAjiWFwktWMNb9nFYJ2PyBcQkxeYM1ab2VS', '2019-07-07 08:41:08', '2019-07-07 08:41:08'),
(6, 'Mihiri Silva', 'mihiri@gmail.com', '$2y$10$91PWLVDhDvNrc2pMHF9lvOgLimUa7Sgd9mdY68d.zL5ZS525Aieme', 5, 0, 'pRcoU7yT75JuYaImaf8sO7HV8YyLUTAqH1xQvfVRTqPpmakh0WWxHy66Zw1O', '2019-07-07 08:41:38', '2019-07-07 08:41:38'),
(7, 'Suchari Savini', 'savini@yahoo.com', '$2y$10$eE7eJ0yqj4QSvkQTgjocruLKG5ZuRUdfOhGh08mebWawMBGHibpu6', 5, 0, 'Fi8jSaaPRaMlNYO4gisBQI2rdMgMzhwHJnZcKxEnGiHrpF9lJ81pKIhqWWOd', '2019-07-07 08:42:21', '2019-07-07 08:42:21');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(10) UNSIGNED NOT NULL,
  `click` int(11) NOT NULL,
  `viewer` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `click`, `viewer`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2019-06-23 18:30:00', '2019-06-23 18:30:00'),
(2, 1, 1, '2019-06-22 18:30:00', NULL),
(3, 4, 1, NULL, NULL),
(4, 4, 2, NULL, NULL),
(5, 2, 2, NULL, NULL),
(6, 3, 2, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discussions`
--
ALTER TABLE `discussions`
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
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_supplier`
--
ALTER TABLE `product_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `suppliers_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `channels`
--
ALTER TABLE `channels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `discussions`
--
ALTER TABLE `discussions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_supplier`
--
ALTER TABLE `product_supplier`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
