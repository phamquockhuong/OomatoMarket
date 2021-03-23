-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 22, 2020 lúc 06:05 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `oomato-market`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id_blog` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `img_blog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id_blog`, `name`, `id_user`, `img_blog`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Some delicious dishes are made simply', 0, 'nau-an-chuyen-nghiep2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 1, '2020-06-23 18:57:11', '2020-07-17 08:21:04'),
(3, 'Nutrients in duck eggs', 0, 'vitlon.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 1, '2020-06-23 19:00:35', '2020-06-29 00:19:32'),
(4, 'Some ways to identify fresh food', 0, 'thuc-pham1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 1, '2020-06-24 00:56:44', '2020-06-29 00:20:36'),
(5, 'Fresh fruits every season', 0, 'banner3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 1, '2020-06-24 00:57:25', '2020-06-29 00:22:31'),
(6, 'Bananaxx', 0, 'banner1.jpg', 'gbvcb', 1, '2020-07-19 05:19:14', '2020-07-19 05:19:14'),
(7, 'Walnuts', 0, 'dâu.jpg', 'sw', 1, '2020-07-19 05:20:05', '2020-07-19 05:20:05'),
(9, 'Omatoê', 1, 'nho (1).jpg', '323', 1, '2020-07-20 01:41:07', '2020-07-20 01:41:07'),
(10, 'Bananađe', 1, 'nuoc_xoai.jpg', 'dưefewf', 1, '2020-07-20 08:09:09', '2020-07-20 08:09:09'),
(11, 'Omatossws', 34, 'banner2.jpg', 'wdwdwe', 1, '2020-07-22 14:47:31', '2020-07-22 14:47:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog_types`
--

CREATE TABLE `blog_types` (
  `id_blog_type` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_blog_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_blog` int(11) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id_cate` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id_cate`, `name`, `parent_id`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Fruits', NULL, 1, '2020-06-16 01:47:24', '2020-06-24 00:38:18'),
(7, 'Vegetable', NULL, 1, '2020-06-16 01:57:45', '2020-06-18 02:11:09'),
(8, 'Meats', NULL, 1, '2020-06-16 01:59:02', '2020-06-18 02:14:04'),
(10, 'Dried food', NULL, 1, '2020-06-16 02:19:47', '2020-06-18 02:12:25'),
(11, 'Eggs', NULL, 1, '2020-06-16 02:20:00', '2020-06-18 02:12:44'),
(12, 'Juices', NULL, 1, '2020-06-16 02:27:00', '2020-06-18 02:14:13'),
(24, 'juyiyt', NULL, 1, '2020-06-23 18:59:13', '2020-07-22 13:51:07'),
(28, 'vfvev', NULL, 1, '2020-07-22 15:17:16', '2020-07-22 15:17:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `com_id` int(10) UNSIGNED NOT NULL,
  `com_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_product` int(11) NOT NULL,
  `id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`com_id`, `com_content`, `id_product`, `id`, `created_at`, `updated_at`) VALUES
(5, 'dcfef', 92, 28, '2020-07-18 08:08:37', '2020-07-18 08:08:37'),
(6, 'kk8k8', 80, 28, '2020-07-18 08:19:07', '2020-07-18 08:19:07'),
(7, 'ngon', 105, 29, '2020-07-19 15:17:13', '2020-07-19 15:17:13'),
(8, 'regtrtg', 82, 1, '2020-07-20 08:11:39', '2020-07-20 08:11:39'),
(9, 'gggggg', 82, 1, '2020-07-20 08:11:50', '2020-07-20 08:11:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `commentblog`
--

CREATE TABLE `commentblog` (
  `com_blog_id` int(10) UNSIGNED NOT NULL,
  `com_blog_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_blog` int(11) NOT NULL,
  `id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `commentblog`
--

INSERT INTO `commentblog` (`com_blog_id`, `com_blog_content`, `id_blog`, `id`, `created_at`, `updated_at`) VALUES
(8, 'xoài', 9, 1, '2020-07-20 09:19:22', '2020-07-20 09:25:55'),
(9, 'vrvrvr', 6, 34, '2020-07-22 15:14:03', '2020-07-22 15:14:03'),
(10, 'wddedew', 5, 34, '2020-07-22 15:16:03', '2020-07-22 15:16:03'),
(11, 'fgrtgllllll', 5, 34, '2020-07-22 15:22:21', '2020-07-22 15:22:21'),
(18, 'dededs', 11, 33, '2020-07-22 15:44:28', '2020-07-22 15:44:28'),
(19, 'dededw', 11, 34, '2020-07-22 15:51:20', '2020-07-22 15:51:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(10) UNSIGNED NOT NULL,
  `email_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id_contact`, `email_contact`, `name_contact`, `message_contact`, `status`, `created_at`, `updated_at`) VALUES
(1, 'kkk@gmail.com', 'kkktasw', 'dưdwdewd', 1, '2020-07-15 07:58:04', '2020-07-22 14:37:04'),
(2, 'kksk@gmail.com', 'kkka', 'dưdawdewd', 1, '2020-07-15 08:00:32', '2020-07-15 08:00:32'),
(3, 'kkks@gmail.com', 'kkksư', 'wsqq', 1, '2020-07-15 08:02:50', '2020-07-15 08:02:50'),
(4, 'kkkt@gmail.com', 'kkkg', 'gt', 1, '2020-07-22 14:36:54', '2020-07-22 14:36:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feature`
--

CREATE TABLE `feature` (
  `id_features` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `feature`
--

INSERT INTO `feature` (`id_features`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'vrerfriiii', 1, '2020-07-20 02:34:06', '2020-07-20 02:51:31'),
(2, 'fvfv', 1, '2020-07-20 02:58:51', '2020-07-20 02:58:51'),
(3, 'vdvdvv', 1, '2020-07-20 02:58:58', '2020-07-20 02:58:58'),
(4, 'fvffd', 1, '2020-07-20 02:59:04', '2020-07-20 02:59:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `id_product` int(11) NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_feedback_parent` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_products`
--

CREATE TABLE `image_products` (
  `id` int(11) NOT NULL,
  `id_product` int(11) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `image_products`
--

INSERT INTO `image_products` (`id`, `id_product`, `image`) VALUES
(70, 82, 'nho.jpg'),
(71, 82, 'nho.jpg'),
(72, 83, 'xa_lach.jpg'),
(73, 83, 'nho.jpg'),
(76, 85, 'ogani.jpg'),
(77, 85, 'mango.jpg'),
(78, 86, 'ca-rot.jpg'),
(79, 86, 'banner3.jpg'),
(80, 87, 'meats/thuc-pham1.jpg'),
(81, 87, 'meats/ca_product.jpg'),
(88, 91, 'meats/thit.jpg'),
(89, 91, 'meats/meats.jpg'),
(90, 92, 'Fruits/tao.jpg'),
(91, 92, 'Fruits/mango.jpg'),
(96, 95, 'eggs/trung4.jpg'),
(97, 95, 'eggs/egg4.jpg'),
(102, 97, 'mango.jpg'),
(103, 97, 'chuoi.jpg'),
(110, 84, 'nuoc_xoai.jpg'),
(111, 84, 'nuoc_xoai.jpg'),
(112, 107, 'mango.jpg'),
(113, 107, 'd%C3%A2u.jpg'),
(117, 109, 'mango.jpg'),
(118, 109, 'mango.jpg'),
(122, 110, 'd%C3%A2u.jpg'),
(123, 110, 'd%C3%A2u.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id_faq` int(10) UNSIGNED NOT NULL,
  `name_quesfaq` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ansfaq` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id_faq`, `name_quesfaq`, `name_ansfaq`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About us2', 'bgrtb', 1, '2020-06-24 02:12:03', '2020-07-16 00:06:45'),
(3, 'vvve', 'vevee', 1, '2020-07-16 00:06:57', '2020-07-16 00:06:57'),
(4, 'vvvee', 'ese', 0, '2020-07-22 14:31:55', '2020-07-22 14:32:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_06_12_035233_create_categories_table', 2),
(4, '2020_06_12_035610_create_products_table', 3),
(5, '2020_06_12_065153_create_feedback_table', 3),
(6, '2020_06_12_065314_create_orders_table', 4),
(7, '2020_06_12_065409_create_slides_table', 4),
(8, '2020_06_12_065551_create_pays_table', 4),
(9, '2020_06_12_065617_create_blog_types_table', 5),
(10, '2020_06_12_065709_create_blogs_table', 5),
(11, '2020_06_12_065738_create_menu_navbars_table', 5),
(12, '2020_06_12_065843_create_images_table', 5),
(13, '2020_06_12_065924_create_order_details_table', 5),
(14, '2020_06_18_033833_create_permission_tables', 6),
(15, '2020_06_24_090112_create_menus_table', 7),
(16, '2014_10_12_100000_create_password_resets_table', 8),
(17, '2020_07_15_143722_create_promotion_table', 8),
(18, '2020_07_15_145215_create_contact_table', 9),
(19, '2020_07_16_080130_comment', 10),
(20, '2020_07_18_143949_create_commentblog_table', 11),
(21, '2020_07_20_092040_create_feature_table', 12),
(22, '2020_07_21_144528_create_roles_table', 13),
(23, '2020_07_21_144548_create_user_roles_table', 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id_order` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship` tinyint(6) NOT NULL DEFAULT 1,
  `id_pay` int(11) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id_order`, `id_user`, `name`, `phone`, `address`, `ship`, `id_pay`, `status`, `created_at`, `updated_at`) VALUES
(90, 34, 'hoang', 22, 'ttg', 1, 3, 0, '2020-07-22 09:09:16', '2020-07-22 09:09:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id_product` int(11) UNSIGNED NOT NULL,
  `id_order` int(11) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `amount` double(8,2) NOT NULL,
  `ship` double NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id_product`, `id_order`, `quantity`, `price`, `amount`, `ship`, `total`, `created_at`, `updated_at`) VALUES
(83, 90, 1, 11, 11.00, 3, 14, '2020-07-22 09:09:16', '2020-07-22 09:09:16'),
(92, 90, 1, 12, 12.00, 3, 15, '2020-07-22 09:09:16', '2020-07-22 09:09:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pays`
--

CREATE TABLE `pays` (
  `id_method` int(10) UNSIGNED NOT NULL,
  `phiship` double NOT NULL,
  `name_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pays`
--

INSERT INTO `pays` (`id_method`, `phiship`, `name_method`, `status`, `created_at`, `updated_at`) VALUES
(1, 10, 'Fast delivery method', 1, '2020-07-15 01:49:41', '2020-07-21 14:10:29'),
(3, 6, 'Mode of saving delivery', 1, '2020-07-20 04:36:26', '2020-07-21 14:11:04'),
(4, 20, 'Mode of delivery in 24 hours', 1, '2020-07-21 13:54:42', '2020-07-21 14:13:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'edit product', 'web', '2020-07-21 07:38:43', '2020-07-21 07:38:43'),
(2, 'add product', 'web', '2020-07-21 07:39:27', '2020-07-21 07:39:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id_product` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_cate` int(11) UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL,
  `sale_price` double(8,2) DEFAULT 0.00,
  `new_product` tinyint(4) NOT NULL DEFAULT 1,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id_product`, `name`, `id_cate`, `price`, `sale_price`, `new_product`, `title`, `img_product`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(80, 'Omato', 7, 11.00, 1.00, 1, 'Sản phẩm rất tốt', 'cachua.jpg', 0, 1, '2020-06-21 04:24:53', '2020-06-21 04:27:06'),
(82, 'Grapes', 7, 27.00, 0.00, 1, 'Sản phẩm rất tốt', 'nho.jpg', 0, 1, '2020-06-21 18:34:35', '2020-06-21 18:36:06'),
(83, 'Purple lettuce', 7, 14.00, 11.00, 1, 'Sản phẩm rất tốt', 'xa_lach.jpg', 0, 1, '2020-06-21 18:39:58', '2020-06-21 18:39:58'),
(84, 'Mango', 7, 19.00, 0.00, 1, 'Sản phẩm rất tốt', 'nuoc_xoai.jpg', 0, 1, '2020-06-21 18:44:17', '2020-06-24 01:55:17'),
(85, 'Orange', 7, 17.00, 0.00, 1, 'Sản phẩm rất tốt', 'ogani.jpg', 0, 1, '2020-06-21 18:46:02', '2020-06-21 18:46:02'),
(86, 'Carrot', 7, 12.00, 9.00, 0, 'Sản phẩm rất tốt', 'ca-rot.jpg', 0, 1, '2020-06-21 18:47:03', '2020-06-21 18:47:03'),
(87, 'Fresh fish', 8, 18.00, 13.00, 0, 'Sản phẩm rất tốt', 'meats/ca_product.jpg', 0, 1, '2020-06-21 19:07:36', '2020-06-21 19:07:36'),
(91, 'Beef', 8, 23.00, 0.00, 1, 'Sản phẩm rất tốt', 'meats/thit_bo.jpg', 0, 1, '2020-06-21 19:55:25', '2020-06-21 19:55:25'),
(92, 'Apple', 5, 16.00, 12.00, 1, 'Sản phẩm rất tốt', 'Fruits/tao.jpg', 0, 1, '2020-06-21 19:56:30', '2020-06-21 19:56:30'),
(93, 'Walnuts', 10, 27.00, 0.00, 1, 'Sản phẩm rất tốt', 'Dry%20Food/oc_cho.jpg', 0, 1, '2020-06-21 19:57:36', '2020-06-21 19:57:36'),
(95, 'Eggs', 11, 33.00, 2.00, 1, 'Sản phẩm rất tốt', 'eggs/vitlon2.jpg', 0, 1, '2020-06-21 20:32:42', '2020-06-21 20:32:42'),
(96, 'Banana69', 5, 22.00, 11.00, 1, 'Sản phẩm rất tốt', 'nho%20(1).jpg', 0, 1, '2020-06-22 02:13:39', '2020-06-24 00:29:17'),
(97, 'Omato2', 8, 7.00, 5.00, 1, 'Sản phẩm rất tốt', 'nuoc_xoai.jpg', 0, 1, '2020-06-22 02:22:31', '2020-06-22 02:22:31'),
(98, 'Omatoô', 7, 555.00, 2.00, 1, 'Sản phẩm rất tốt', 'mango.jpg', 88, 1, '2020-07-15 20:15:15', '2020-07-15 20:15:15'),
(100, 'Omatohhh', 7, 555.00, 2.00, 1, 'Sản phẩm rất tốt', 'chuoi.jpg', 88, 1, '2020-07-15 20:16:06', '2020-07-15 20:16:06'),
(101, 'Omato4', 8, 85.00, 58.00, 1, 'Sản phẩm rất tốt', 'Dry%20Food/peach.jpg', 88, 1, '2020-07-15 20:28:15', '2020-07-15 20:28:15'),
(103, 'Omato4u', 8, 85.00, 58.00, 1, 'Sản phẩm rất tốt', 'mango.jpg', 88, 1, '2020-07-15 20:30:18', '2020-07-15 20:30:18'),
(105, 'Omato4ufrf', 8, 85.00, 58.00, 1, 'Sản phẩm rất tốt', 'ogani.jpg', 88, 1, '2020-07-15 20:34:49', '2020-07-15 20:34:49'),
(107, 'Omato ssa', 8, 125.00, 12.00, 0, '8528', 'Fruits/nho.jpg', 12, 0, '2020-07-15 20:36:42', '2020-07-15 20:36:42'),
(109, 'Omatohhh7', 10, 44.00, 40.00, 1, 'Ut enim ullamco laboris nisi ut aliquip ex ea commodo', 'mango.jpg', 77, 1, '2020-07-19 15:08:22', '2020-07-19 15:15:07'),
(110, 'bvrebu', 7, 85.00, 85.00, 1, '23sfd00', 'd%C3%A2u.jpg', 22, 1, '2020-07-20 03:16:37', '2020-07-20 03:18:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `promotion`
--

CREATE TABLE `promotion` (
  `id_km` int(10) UNSIGNED NOT NULL,
  `name_km` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `promotion`
--

INSERT INTO `promotion` (`id_km`, `name_km`, `status`, `created_at`, `updated_at`) VALUES
(1, 'khuong3000@gmail.com', 0, '2020-07-15 07:41:01', '2020-07-15 07:44:39'),
(2, 'khuong30020@gmail.com', 1, '2020-07-15 07:45:39', '2020-07-15 07:45:39'),
(3, 'khuong3c000@gmail.com', 1, '2020-07-15 08:04:27', '2020-07-15 08:04:27'),
(4, 'ededed@gmail.com', 1, '2020-07-22 14:13:46', '2020-07-22 14:13:46'),
(5, 'khuong3a0020@gmail.com', 1, '2020-07-22 14:14:01', '2020-07-22 14:14:01'),
(6, 'khuongc3000@gmail.com2', 0, '2020-07-22 14:14:42', '2020-07-22 14:17:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rolessss`
--

CREATE TABLE `rolessss` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `rolessss`
--

INSERT INTO `rolessss` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'writer', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slides`
--

CREATE TABLE `slides` (
  `id_slide` int(10) UNSIGNED NOT NULL,
  `name_slide` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_slide` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_slide` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slides`
--

INSERT INTO `slides` (`id_slide`, `name_slide`, `content_slide`, `img_slide`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Welcome to Oomato market', 'Always best Fruits For everyone', 'slide1.jpg', 1, '2020-06-23 19:06:13', '2020-06-23 19:06:13'),
(10, 'Kien an cut', 'dcscdc', 'quatuoi.png', 1, '2020-06-24 00:15:16', '2020-06-24 20:12:41'),
(12, 'ccs', 'cd', 'nuoc-ep-trai-cay.jpg', 1, '2020-06-24 00:44:28', '2020-06-24 00:44:28'),
(13, 'hhtyhfffcscfrrda', 'tgtrtdvv', 'beaf.jpg', 0, '2020-07-22 13:57:59', '2020-07-22 14:03:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_users` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'author.png',
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_code` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `img_users`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`, `code`, `time_code`) VALUES
(0, 'Khuongpham', 'khuong2000@gmail.com', 'author.png', '2020-07-20 01:36:18', '$2y$10$UxC6.ST3mkdacRu.m75Oh.iPq1GDtShYlMeFb7MGAG9a6jBtmOFxK', 1, NULL, '2020-07-17 02:43:25', '2020-07-17 02:43:25', NULL, NULL),
(1, 'sdfsd', 'sad@gmail.com', 'author.png', '2020-07-20 09:46:29', '$2y$10$Hh4q0eW5QVu2NHfsx7bvnegfiemYlm6AAi/VP82Ki3LBYVMDAncGK', 1, 'zbtFgR1wWPPCmzhmE72uOzmr4TjLauSRZ8sTCSoAkBDAWUo0hF1N4d3DgQR1', '2020-07-04 00:35:05', '2020-07-04 00:35:05', NULL, NULL),
(2, 'dmm thk', 'dcm@gmail.com', 'author.png', '2020-07-03 21:09:45', '$2y$10$kDICLagigyjg5aDRGNRT..dtuBSP/fFFJNE0c56ACSPZfPRJh0v2W', 1, NULL, '2020-07-04 04:09:45', '2020-07-04 04:09:45', NULL, NULL),
(3, 'dcm', 'dmm@gmail.com', 'author.png', '2020-07-04 00:10:00', '$2y$10$KQgBNPo59WMZJAucBUMYE.dLCIg58rjwYF7yUlr4BFwmshKf93qBK', 1, NULL, '2020-07-04 07:10:00', '2020-07-04 07:10:00', NULL, NULL),
(4, 'sa', 'sssad@gmail.com', 'author.png', '2020-07-06 15:17:53', '$2y$10$j0rDvMTY3ShK7QmQlYZ2NuBDTdly9QUGZRTR.DC28eaUWXPDJGSe.', 1, NULL, '2020-07-06 22:17:53', '2020-07-06 22:17:53', NULL, NULL),
(5, 'saa', 'ssad@gmail.com', 'author.png', '2020-07-06 15:32:38', '$2y$10$tbOR1vAzLN7OmIk8BRYsdOAD9y2dQzyGF5LxS7ShOuKozdb/OnVv6', 1, NULL, '2020-07-06 22:32:38', '2020-07-06 22:32:38', NULL, NULL),
(6, 'sadarrsed', 'saad@gmail.com', 'author.png', '2020-07-22 14:33:12', '$2y$10$BzAoPnokVnC9UahYJ2bemefwdwzqRWzZiHTJda1fgp78mnzBnTYYi', 1, NULL, '2020-07-06 22:55:36', '2020-07-22 14:33:12', NULL, NULL),
(10, 'sa000', 'hoangq991232@gmail.com', 'author.png', '2020-07-07 17:20:16', '$2y$10$RQT/q2gNWD8E63RFYe4vlOT0iEASqC4yJhV7stSE2jQlegKaX9ZJ6', 1, 'QdwpTHUPQdWSmTof8bpdR37eJOBLn48xZRhfvyg8thiJLd1kBJkNdAPGPKHY', '2020-07-08 00:15:05', '2020-07-08 00:15:05', NULL, NULL),
(13, 'khuong', 'khuong@gmail.com', 'author.png', '2020-07-07 17:32:28', '$2y$10$ytAMRjS7LInBdjC3MGibc.aNugDLUOpcdKpZdXy30eSM/g9FthSUu', 1, NULL, '2020-07-08 00:32:28', '2020-07-08 00:32:28', NULL, NULL),
(14, 'llll', 'sad333@gmail.com', 'author.png', '2020-07-07 17:34:20', '$2y$10$83cP5nYtkgkwvCvJFo6lfuTShyOIFTMUx2.YbNR9mfIes0mbi.7X.', 1, NULL, '2020-07-08 00:34:20', '2020-07-08 00:34:20', NULL, NULL),
(15, 'jjjj', 'sad90@gmail.com', 'author.png', '2020-07-07 17:45:03', '$2y$10$N47.8YK0HuJcKOw/nFLCuO2omLoeAQbsty4U/fA/IiHE4XkDhnh8m', 1, NULL, '2020-07-08 00:45:03', '2020-07-08 00:45:03', NULL, NULL),
(16, 'oo', 'sad55@gmail.com', 'author.png', '2020-07-07 17:45:45', '$2y$10$36G0bdMBOpcXbie9nXsoGufzWAXiIm6sE0E5V1tvQldDnGeRVnkPK', 1, NULL, '2020-07-08 00:45:45', '2020-07-08 00:45:45', NULL, NULL),
(17, 'rrrr', 'sad666@gmail.com', 'author.png', '2020-07-07 17:48:28', '$2y$10$upd0isUgtTKG1AB.Db.bU.bAMM6h2QX9sdzkQL9oXUxlsIcTQU7my', 1, NULL, '2020-07-08 00:48:28', '2020-07-08 00:48:28', NULL, NULL),
(18, 'saqq', 'saaad@gmail.com', 'author.png', '2020-07-07 18:13:26', '$2y$10$hHhJxOgcV75NO2thqj7W3ubD1xZMsgy8K5UaHQriL3zDY0LHk99.S', 1, NULL, '2020-07-08 01:13:26', '2020-07-08 01:13:26', NULL, NULL),
(19, 'sadasd', 'saddd@gmail.com', 'author.png', '2020-07-07 18:14:27', '$2y$10$elQbZSmDDwVmsk1QW5PN5uf6yGCiiaWPevSGam9Xygl9m4IuCgab2', 1, NULL, '2020-07-08 01:14:27', '2020-07-08 01:14:27', NULL, NULL),
(21, 'dcmm', 'dd@gmail.com', 'author.png', '2020-07-08 16:07:33', '$2y$10$HzetEABSx8HenoVeFEvfr.6bA9KyhAAbTzVSn7veofU4xduIQfoxu', 1, NULL, '2020-07-08 23:07:33', '2020-07-08 23:07:33', NULL, NULL),
(22, 'sass', 'saasd@gmail.com', 'author.png', '2020-07-08 16:41:02', '$2y$10$.v3b2pQZEWnB56Xfuts0ceMyftXybwuUr5XzowwEUab1aNcJgeZHa', 1, NULL, '2020-07-08 23:41:02', '2020-07-08 23:41:02', NULL, NULL),
(23, 'Omatosư', 'a@gmail.com', 'author.png', '2020-07-15 04:43:45', '$2y$10$IMs/Kcw8gh5WIunu2onDceOyruY2cmeLVXzf6PusMMYLI72GklkGa', 1, NULL, '2020-07-14 21:43:45', '2020-07-14 21:43:45', NULL, NULL),
(24, 'Author', 'Author@gmail.com', 'dâu.jpg', '2020-07-16 02:47:49', '$2y$10$dtEYBfqjw7cHvdujzf9WV.x70kigIJDW4G4tr/XEPFHUE7zSYOptS', 1, NULL, '2020-07-15 18:29:04', '2020-07-15 19:47:49', NULL, NULL),
(25, 'Bananall', '1111@gmail.com', 'author.png', '2020-07-16 08:19:22', '$2y$10$LyXFMI42N9qkr7PUi.bl0OgAI5VRBL47L3OfHJyIXA86iwQHbYmdS', 1, NULL, '2020-07-16 01:19:22', '2020-07-16 01:19:22', NULL, NULL),
(28, 'Omatorff', 'khuongfpham14072000@gmail.com', 'banner3.jpg', '2020-07-18 15:41:38', '$2y$10$G4e7uacKifB1SBRbVkmb.uN3EiQssr0nI5JnEm.VzkUd0MbFcX..a', 1, NULL, '2020-07-18 07:58:56', '2020-07-18 15:41:38', NULL, NULL),
(29, 'Khuongoi', 'khuongpham@gmail.com', 'author.png', '2020-07-19 14:33:15', '$2y$10$TgCPeg7tHNR5ztWNLuEE6elY.rk6Ilb7xjcllJhzSzUEowbAbJpjS', 1, NULL, '2020-07-19 14:33:15', '2020-07-19 14:33:15', NULL, NULL),
(30, 'sadd', 'sadsad@gmail.com', 'author.png', '2020-07-21 08:44:30', '$2y$10$.W9RCiy44cDPw3murUDzXOibSVX1chKB7e.HWr0p51i5z6XUUCG.6', 1, 'MSG9ojT6E2neRW6XF3SgzHGHXV2mDbdfPOH5DZNSlgP9klK6gShtiayeLEwF', '2020-07-20 10:11:55', '2020-07-20 10:17:20', '$2y$10$IoTKoZFyaWpnW4YRsoewwusiJnuHifLVOCKwe5qoHEhgD10CC5FTm', '2020-07-20 10:16:51'),
(31, 'Omatojuj', 'k@gmail.com', 'author.png', '2020-07-22 01:57:29', '$2y$10$1zUnnW2X.vlP06kB8/0dg.kZo4h.JppkXQHLMD/7kziYlbz5rIjla', 1, 'SYonhvoH6e3JjAGJ24SGaxE6ah0ezSV0ZuNx9wvU2WhpvmaSIha3RmfC57DS', '2020-07-21 09:11:59', '2020-07-21 09:11:59', NULL, NULL),
(32, 'khuong3333', 'khuong3333@gmail.com', 'author.png', '2020-07-22 01:58:31', '$2y$10$Go0wjeHcrt1hqmDXRtue.exWjILq.0dwNK59upfIRxgvl4f1DajNa', 1, NULL, '2020-07-22 01:58:31', '2020-07-22 01:58:31', NULL, NULL),
(33, 'dinhjav', 'dinh@gmail.com', 'author.png', '2020-07-22 15:44:42', '$2y$10$nYv4.fHhn0mCKTFMDpaDYeNZL/zwvBrjzxNYap98b7DPRbPgH2Mey', 1, 'gVeDJtcOM9yH7pXGECoqmyRT1KMSHJBFlpJsmmYjUoFuIadMvoec88HiCfbl', '2020-07-22 04:50:41', '2020-07-22 04:50:41', NULL, NULL),
(34, 'hoang', 'hoang@gmail.com', 'author.png', '2020-07-22 15:51:52', '$2y$10$xq/YzUDI70jnXQJ8O0gZ9eKcovf8Eljt0FubG67tCb4mOyIm6LjFG', 1, 'd29UCIKOVAP4WYs43fMseqnAT5P9YtJsj21Xp0vf1Gyu68rTf76CSw11mN6o', '2020-07-22 07:35:57', '2020-07-22 07:35:57', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id_blog`),
  ADD UNIQUE KEY `blogs_name_unique` (`name`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `blog_types`
--
ALTER TABLE `blog_types`
  ADD PRIMARY KEY (`id_blog_type`),
  ADD UNIQUE KEY `blog_types_name_unique` (`name`),
  ADD KEY `id_blog` (`id_blog`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_cate`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`com_id`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `commentblog`
--
ALTER TABLE `commentblog`
  ADD PRIMARY KEY (`com_blog_id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`),
  ADD UNIQUE KEY `contact_email_contact_unique` (`email_contact`),
  ADD UNIQUE KEY `contact_name_contact_unique` (`name_contact`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`id_features`),
  ADD UNIQUE KEY `feature_name_unique` (`name`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_feedback_parent` (`id_feedback_parent`);

--
-- Chỉ mục cho bảng `image_products`
--
ALTER TABLE `image_products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id_faq`),
  ADD UNIQUE KEY `menus_name_unique` (`name_quesfaq`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Chỉ mục cho bảng `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_order` (`id_order`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id_method`),
  ADD UNIQUE KEY `pays_name_pay_unique` (`name_method`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD KEY `id_cate` (`id_cate`);

--
-- Chỉ mục cho bảng `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id_km`),
  ADD UNIQUE KEY `promotion_name_km_unique` (`name_km`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Chỉ mục cho bảng `rolessss`
--
ALTER TABLE `rolessss`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id_slide`),
  ADD UNIQUE KEY `slides_name_slide_unique` (`name_slide`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`);

--
-- Chỉ mục cho bảng `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id_blog` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `blog_types`
--
ALTER TABLE `blog_types`
  MODIFY `id_blog_type` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id_cate` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `com_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `commentblog`
--
ALTER TABLE `commentblog`
  MODIFY `com_blog_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `feature`
--
ALTER TABLE `feature`
  MODIFY `id_features` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `image_products`
--
ALTER TABLE `image_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id_faq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT cho bảng `pays`
--
ALTER TABLE `pays`
  MODIFY `id_method` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT cho bảng `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id_km` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `rolessss`
--
ALTER TABLE `rolessss`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `slides`
--
ALTER TABLE `slides`
  MODIFY `id_slide` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `blog_types`
--
ALTER TABLE `blog_types`
  ADD CONSTRAINT `blog_types_ibfk_1` FOREIGN KEY (`id_blog`) REFERENCES `blogs` (`id_blog`);

--
-- Các ràng buộc cho bảng `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id_cate`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`id_feedback_parent`) REFERENCES `feedback` (`id_feedback`);

--
-- Các ràng buộc cho bảng `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `rolessss` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id_order`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_cate`) REFERENCES `categories` (`id_cate`);

--
-- Các ràng buộc cho bảng `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `rolessss` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
