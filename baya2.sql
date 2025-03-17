-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th3 10, 2025 lúc 01:15 PM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `baya2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account_spins`
--

CREATE TABLE `account_spins` (
  `id` bigint UNSIGNED NOT NULL,
  `code` varchar(22) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spin_item_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account_spins`
--

INSERT INTO `account_spins` (`id`, `code`, `phone`, `email`, `spin_item_id`, `created_at`, `updated_at`) VALUES
(4, 'A462B97E0C', '0356969355', 'tienmanh021995@gmail.com', '170', '2023-12-12 04:00:09', '2023-12-12 04:00:09'),
(5, '432601957A', '0356969355', 'tienmanh021995@gmail.com', '170', '2023-12-12 04:00:42', '2023-12-12 04:00:42'),
(6, 'F77AC575FD', '0356969355', 'tienmanh021995@gmail.com', '170', '2023-12-12 04:03:09', '2023-12-12 04:03:09'),
(7, '1BBBD59BAB', '0342343234', 'demo@gmail.com', '170', '2023-12-12 05:30:00', '2023-12-12 05:30:00'),
(8, 'D717A23CD5', '0708133702', 'jhhhhhhh@gmail.com', '170', '2023-12-12 13:19:50', '2023-12-12 13:19:50'),
(9, '71EDF56EB6', '0906101196', 'mmmmm@gmail.com', '170', '2023-12-12 13:20:40', '2023-12-12 13:20:40'),
(10, 'CE7AAAEFAE', '0906101191', 'manh@gmail.com', '170', '2023-12-12 13:23:48', '2023-12-12 13:23:48'),
(11, '6E50556973', '0945077777', 'ok123@gmail.com', '170', '2023-12-12 13:25:43', '2023-12-12 13:25:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `address`
--

CREATE TABLE `address` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(23) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ward` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_default` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `address`
--

INSERT INTO `address` (`id`, `user_id`, `name`, `last_name`, `phone`, `address`, `country`, `city`, `district`, `ward`, `is_default`, `created_at`, `updated_at`) VALUES
(1, 1, 'manh', '323424', '34234242', 'qewqeq', 'Viet Nam', 'Tỉnh Hà Giang', 'Huyện Mèo Vạc', 'Xã Khâu Vai', 1, '2023-11-13 18:41:14', '2023-11-13 19:42:30'),
(2, 1, 'manh111', '3234241212', '1212', '23132132131', 'Viet Nam', 'Tỉnh Cao Bằng', 'Huyện Trùng Khánh', 'Xã Lăng Hiếu', 0, '2023-11-13 19:55:44', '2023-11-13 19:55:44'),
(5, 6, 'do viet', 'thang', '0965029062', '19 nguyễn cơ thạch, quận nam từ liêm hà nội1', 'Viet Nam', NULL, NULL, NULL, 0, '2024-03-18 03:26:27', '2024-03-27 09:49:39'),
(6, 6, 'do viet', 'thang 1', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-03-27 09:49:59', '2024-03-27 09:49:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo2` text COLLATE utf8mb4_unicode_ci,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `banner_type` enum('small','medium','large','news') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id`, `title`, `photo`, `photo2`, `url`, `description`, `banner_type`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'https://theme.hstatic.net/200000796751/1001150659/14/slide_4_img.jpg?v=1101', 'https://theme.hstatic.net/200000796751/1001150659/14/slide_4_img.jpg?v=1101', 'https://theme.hstatic.net/200000796751/1001150659/14/slide_4_img.jpg?v=1101', '<p><br></p>', 'small', 1, '2023-10-28 11:30:31', '2024-03-15 19:36:48'),
(3, 'ul', 'https://theme.hstatic.net/200000796751/1001150659/14/slide_3_img.jpg?v=1101', 'https://theme.hstatic.net/200000796751/1001150659/14/slide_3_img.jpg?v=1101', 'https://theme.hstatic.net/200000796751/1001150659/14/slide_3_img.jpg?v=1101', '<p><br></p>', 'small', 1, '2023-11-06 16:36:40', '2024-03-15 19:38:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_web` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `photo_index` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_index` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `order_by` int DEFAULT NULL,
  `parent_id` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `title_web`, `photo`, `photo_index`, `description`, `type`, `show_index`, `order_by`, `parent_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Nữ', 'women', 'Thời trang nữ EDIFA | xu hướng thời trang mới', 'https://theme.hstatic.net/200000796751/1001150659/14/collection_banner.jpg?v=1005', 'https://shop.tdptechnology.vn//storage/files/1/danh mục/e7GE7mbl4VU2tYSAJG8NsA4dv4lbXGNoMAgjy5kW.jpg', NULL, 'Menu', '1', 1, NULL, 1, '2023-10-28 10:01:39', '2024-03-14 07:04:08'),
(2, 'Nam', 'men', 'Thời trang nam EDIFA | xu hướng thời trang mới', 'https://theme.hstatic.net/200000796751/1001150659/14/collection_banner.jpg?v=1005', 'https://shop.tdptechnology.vn//storage/files/1/danh mục/NY5XFVusrbEpLVRODbRIBcbmh9dWFCF1faN3PNgE.jpg', NULL, 'Menu', '1', 2, NULL, 1, '2023-10-28 10:01:39', '2024-03-14 04:01:37'),
(3, 'Sofa - Ghế thư giãn', 'sofa-ghe-thu-gian', 'Thời trang EDIFA | xu hướng thời trang mới', 'https://file.hstatic.net/200000796751/collection/_1500x540__sofa_cao_cap-decor_sang_trong_90bab177d4e14e93ab204bddd7a4545a.jpg', NULL, NULL, 'Menu', '1', 0, NULL, 1, '2023-10-28 10:01:39', '2024-03-14 04:01:59'),
(4, 'Combo', 'combo', 'Thời trang EDIFA | xu hướng thời trang mới', 'https://theme.hstatic.net/200000796751/1001150659/14/collection_banner.jpg?v=1005', NULL, NULL, 'Menu', '1', 1, NULL, 1, '2023-10-28 10:01:39', '2024-03-14 07:02:16'),
(5, 'Collection', 'collection', 'Thời trang EDIFA | xu hướng thời trang mới', 'https://shop.tdptechnology.vn//storage/files/1/danh mục/e7GE7mbl4VU2tYSAJG8NsA4dv4lbXGNoMAgjy5kW.jpg', 'https://shop.tdptechnology.vn//storage/files/1/danh mục/gBpUx55951AV4JeKcvLNOoyuEDlh6a5irhbeEIsI.jpg', NULL, 'Menu', '1', 1, NULL, 1, '2023-10-28 10:01:39', '2024-03-15 16:51:53'),
(10, 'ÁO NGỰC', 'ao-nguc', 'Thời trang EDIFA | xu hướng thời trang mới', 'https://shop.tdptechnology.vn/storage/files/1/ao-nguc-1.png', 'https://shop.tdptechnology.vn/storage/files/1/ao-nguc-1.png', '<h2 class=\"ql-align-center\"><span class=\"ql-size-large\">Đồ l&oacute;t nữ EDIFA</span></h2>\r\n<p class=\"ql-align-center\">&nbsp;</p>\r\n<p>Đồ l&oacute;t hay c&ograve;n được gọi l&agrave; nội y nữ, l&agrave; những trang phục cần thiết m&agrave; chị em n&agrave;o cũng cần phải sử dụng. Mặc d&ugrave; được mặc dưới lớp quần &aacute;o thời trang b&ecirc;n ngo&agrave;i, nhưng những phụ kiện n&agrave;y c&oacute; vai tr&ograve; quan trọng gi&uacute;p bảo vệ cơ thể, hỗ trợ tạo n&ecirc;n sự tự tin, vẻ đẹp cho người mặc.</p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"color: #231f20;\">Underwear phục vụ cho việc giữ cho quần &aacute;o b&ecirc;n ngo&agrave;i khỏi bị dơ do chất b&agrave;i tiết, giảm bớt sự cọ x&aacute;t của quần &aacute;o ngo&agrave;i với cơ thể cũng như che chắn đi những phần cơ thể nhạy cảm.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"color: #231f20;\">Đồ l&oacute;t quan trọng nhất l&agrave; sự thoải m&aacute;i. EDIFA tập chung v&agrave;o chất liệu, thiết kế sản phẩm để gi&uacute;p người d&ugrave;ng c&oacute; được sự thoải m&aacute;i tối đa. Từ chất liệu cotton mềm mại, thấm h&uacute;t tốt ph&ugrave; hợp c&aacute;c hoạt động h&agrave;ng ng&agrave;y, đến c&aacute;c chất liệu tổng hợp xốp nhẹ, thấm h&uacute;t mồ hoi, co gi&atilde;n tốt ph&ugrave; hợp c&aacute;c hoạt động thể thao.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"color: #231f20;\">Đa dạng c&aacute;c sản phẩm như quần l&oacute;t, &aacute;o ngực, &aacute;o bra, &aacute;o body, &aacute;o l&oacute;t 2 d&acirc;y .... Đồ l&oacute;t nữ mang thương hiệu EDIFA lu&ocirc;n mang đến cho người d&ugrave;ng sự an to&agrave;n, thoải m&aacute;i, tự tin trong mọi hoạt động cuộc sống.</span></p>\r\n<p class=\"ql-align-center\">&nbsp;</p>', 'Product', '0', NULL, 1, 1, '2023-10-28 11:20:34', '2023-12-18 06:53:15'),
(25, 'QUẦN LÓT', 'quan-lot', 'Thời trang EDIFA | xu hướng thời trang mới', 'https://shop.tdptechnology.vn/storage/files/1/danh mục/quan-lot-1.png', 'https://shop.tdptechnology.vn/storage/files/1/danh mục/quan-lot-1.png', NULL, 'Product', '0', NULL, 39, 1, '2023-10-28 13:55:38', '2023-12-18 06:59:55'),
(37, 'QUẦN LÓT NAM', 'quan-lot-nam', 'Thời trang EDIFA | xu hướng thời trang mới', 'https://shop.tdptechnology.vn/storage/files/1/danh mục/quan-lot-nam-1.png', 'https://shop.tdptechnology.vn/storage/files/1/danh mục/quan-lot-nam-1.png', NULL, 'Product', '0', NULL, 2, 1, '2023-11-05 10:42:38', '2023-12-18 09:08:31'),
(39, 'QUẦN LÓT  NỮ', 'quan-lot-nu', 'Thời trang EDIFA | xu hướng thời trang mới', 'https://shop.tdptechnology.vn/storage/files/1/danh mục/quan-lot-1.png', 'https://shop.tdptechnology.vn/storage/files/1/danh mục/quan-lot-1.png', NULL, 'Product', '1', NULL, 1, 1, '2023-11-05 10:42:54', '2023-12-18 07:09:31'),
(40, 'PHỤ KIỆN', 'phu-kien', 'Thời trang EDIFA | xu hướng thời trang mới', 'https://shop.tdptechnology.vn/storage/files/1/danh mục/phu-kien.jpg', 'https://shop.tdptechnology.vn/storage/files/1/danh mục/phu-kien.jpg', NULL, 'Product', '1', NULL, 1, 1, '2023-11-21 12:24:13', '2023-12-18 07:10:48'),
(41, 'QUẦN LEGGING', 'quan-legging', 'Thời trang EDIFA | xu hướng thời trang mới', 'https://shop.tdptechnology.vn/storage/files/1/danh mục/quan-leging.jpg', 'https://shop.tdptechnology.vn/storage/files/1/danh mục/quan-leging.jpg', NULL, 'Product', '0', NULL, 1, 1, '2023-11-22 00:20:20', '2023-12-18 07:14:18'),
(42, 'XẢ KHO', 'xa-kho', 'Thời trang EDIFA | xu hướng thời trang mới', 'https://shop.tdptechnology.vn/storage/files/1/danh mục/xa-kho-1.png', 'https://shop.tdptechnology.vn/storage/files/1/danh mục/xa-kho-1.png', NULL, 'Product', '1', NULL, 5, 1, '2023-11-22 00:30:44', '2023-12-18 07:15:21'),
(46, 'Nguồn cảm hứng', 'nguon-cam-hung', 'Nguồn cảm hứng', NULL, NULL, NULL, 'MenuPost', '1', NULL, 1, 1, '2023-12-12 05:36:37', '2024-03-12 17:32:32'),
(47, 'yyyy', 'yyyy', NULL, NULL, NULL, NULL, 'Post', '1', NULL, 45, 1, '2023-12-12 05:36:57', '2023-12-12 05:36:57'),
(49, 'Tin tức', 'tin-tuc', 'Tin tức', NULL, NULL, NULL, 'MenuPost', '1', NULL, NULL, 1, '2024-03-12 17:33:05', '2024-03-12 17:33:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_items`
--

CREATE TABLE `category_items` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` int NOT NULL,
  `item_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_items`
--

INSERT INTO `category_items` (`id`, `category_id`, `item_id`, `created_at`, `updated_at`) VALUES
(138, 1, 61, NULL, NULL),
(139, 10, 61, NULL, NULL),
(140, 39, 61, NULL, NULL),
(141, 40, 61, NULL, NULL),
(150, 1, 64, NULL, NULL),
(151, 41, 64, NULL, NULL),
(152, 1, 65, NULL, NULL),
(153, 41, 65, NULL, NULL),
(154, 2, 66, NULL, NULL),
(155, 42, 66, NULL, NULL),
(156, 1, 67, NULL, NULL),
(157, 10, 67, NULL, NULL),
(158, 25, 67, NULL, NULL),
(159, 39, 67, NULL, NULL),
(161, 40, 67, NULL, NULL),
(162, 3, 67, NULL, NULL),
(165, 41, 67, NULL, NULL),
(166, 2, 67, NULL, NULL),
(167, 4, 67, NULL, NULL),
(168, 5, 67, NULL, NULL),
(169, 42, 67, NULL, NULL),
(170, 4, 66, NULL, NULL),
(172, 3, 68, NULL, NULL),
(176, 1, 70, NULL, NULL),
(177, 10, 70, NULL, NULL),
(178, 3, 66, NULL, NULL),
(179, 3, 64, NULL, NULL),
(180, 3, 65, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_posts`
--

CREATE TABLE `category_posts` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` int NOT NULL,
  `item_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_posts`
--

INSERT INTO `category_posts` (`id`, `category_id`, `item_id`, `created_at`, `updated_at`) VALUES
(4, 49, 15, NULL, NULL),
(5, 46, 14, NULL, NULL),
(6, 49, 14, NULL, NULL),
(7, 46, 13, NULL, NULL),
(8, 46, 16, NULL, NULL),
(9, 49, 17, NULL, NULL),
(11, 49, 16, NULL, NULL),
(12, 46, 19, NULL, NULL),
(13, 49, 19, NULL, NULL),
(14, 46, 17, NULL, NULL),
(15, 46, 18, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `colors`
--

CREATE TABLE `colors` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `colors`
--

INSERT INTO `colors` (`id`, `title`, `code`, `value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Trắng', 'Trắng', '#FFFFFF', 1, '2023-10-28 10:24:34', '2023-11-22 03:19:13'),
(2, 'Đỏ', 'SL02', '#E42525', 1, '2023-10-28 10:24:41', '2023-10-28 10:53:44'),
(4, 'Đen', 'Đen', '#000000', 1, '2023-10-28 10:54:36', '2023-11-22 03:19:25'),
(5, 'Xám', 'Xám', '#C4C4C4', 1, '2023-10-28 10:54:50', '2023-11-22 03:19:35'),
(8, 'Vàng', 'Vàng', '#EBEE3A', 1, '2023-10-28 10:55:29', '2023-11-22 03:18:36'),
(9, 'Màu Be', 'Màu Be', '#ded0b3', 1, '2023-10-28 10:55:59', '2023-11-22 03:18:22'),
(13, 'Hồng', 'Sa12', '#e3b5d7', 1, '2023-10-28 15:27:19', '2023-11-22 03:17:40'),
(14, 'Da Đậm', 'Da Đậm', '#f7d4c6', 1, '2023-11-18 02:19:40', '2023-11-22 03:18:06'),
(15, 'Da Nhạt', 'Da Nhạt', '#f1d6bf', 1, '2023-11-18 02:19:51', '2023-11-22 03:17:53'),
(16, 'Xanh Than', 'Xanh Than', '#ccd1d5', 1, '2023-11-24 06:26:40', '2023-11-24 06:26:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `combo_items`
--

CREATE TABLE `combo_items` (
  `id` bigint UNSIGNED NOT NULL,
  `combo_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL DEFAULT '1',
  `amount` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `combo_items`
--

INSERT INTO `combo_items` (`id`, `combo_id`, `product_id`, `quantity`, `amount`, `created_at`, `updated_at`) VALUES
(1, 22, 9, 3, 1, '2023-11-07 15:11:49', '2023-11-07 15:11:49'),
(2, 25, 2, 1, 1, '2023-11-07 15:13:20', '2023-11-13 09:06:09'),
(3, 23, 3, 1, 1, '2023-11-07 15:13:20', '2023-11-13 09:05:11'),
(4, 25, 4, 1, 1, '2023-11-07 18:05:00', '2023-11-13 09:06:09'),
(5, 23, 5, 1, 3, '2023-11-07 18:07:58', '2023-11-13 09:05:11'),
(6, 26, 17, 6, 1, '2023-11-07 18:08:31', '2023-11-07 18:08:31'),
(7, 26, 17, 6, 1, '2023-11-11 08:55:49', '2023-11-11 08:55:49'),
(8, 22, 9, 3, 1, '2023-11-13 09:03:25', '2023-11-13 09:03:25'),
(9, 24, 14, 5, 1, '2023-11-13 09:05:40', '2023-11-13 09:05:40'),
(10, 69, 35, 10, 10, '2024-03-15 16:22:23', '2024-03-15 16:22:23'),
(11, 69, 36, 10, 1, '2024-03-15 16:22:23', '2024-03-15 16:22:23'),
(12, 69, 37, 10, 1, '2024-03-15 16:22:23', '2024-03-15 16:22:23'),
(13, 69, 38, 10, 1, '2024-03-15 16:22:23', '2024-03-15 16:22:23'),
(14, 69, 39, 10, 1, '2024-03-15 16:22:23', '2024-03-15 16:22:23'),
(15, 70, 35, 10000, 10000, '2024-03-29 03:03:09', '2024-03-29 03:03:09'),
(16, 70, 36, 10000, 10000, '2024-03-29 03:03:09', '2024-03-29 03:03:09'),
(17, 70, 37, 10000, 10000, '2024-03-29 03:03:09', '2024-03-29 03:03:09'),
(18, 70, 38, 10000, 10000, '2024-03-29 03:03:09', '2024-03-29 03:03:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_coupon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conten` text COLLATE utf8mb4_unicode_ci,
  `amount_code` int DEFAULT NULL,
  `price_value` double NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `total_order_min` double DEFAULT NULL,
  `price_order_max` double DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `type_coupon`, `name`, `description`, `conten`, `amount_code`, `price_value`, `type`, `status`, `total_order_min`, `price_order_max`, `date_start`, `date_end`, `created_at`, `updated_at`) VALUES
(1, 'RTX-YVA-9XX', 'total order', 'VOUCHER 50K', 'Áp dụng cho ĐH từ 299K', NULL, 28, 50000, 'fixed price', 0, 299000, NULL, NULL, NULL, '2023-10-28 11:31:43', '2023-11-13 09:01:15'),
(2, 'RTX-ODK-D6M', 'total order', 'VOUCHER 100K', 'Áp dụng cho ĐH từ 599K', NULL, 37, 100000, 'fixed price', 0, 599000, NULL, NULL, NULL, '2023-10-28 11:32:57', '2023-11-13 09:01:24'),
(3, 'RTX-Z47-0B6', 'total order', 'VOUCHER 150K', 'Áp dụng cho ĐH từ 799K', '<ul>\r\n<li>D&agrave;nh cho đơn h&agrave;ng từ 3 triệu</li>\r\n<li>Mỗi kh&aacute;ch h&agrave;ng được sử dụng tối đa 1 lần.</li>\r\n<li>Sao ch&eacute;p m&atilde; v&agrave; nhập m&atilde; khuyến m&atilde;i ở trang thanh to&aacute;n</li>\r\n</ul>', 18, 150000, 'fixed price', 1, 799000, NULL, NULL, NULL, '2023-10-28 11:33:39', '2024-03-25 09:24:09'),
(5, NULL, 'products', 'cho luôn khỏi lấy', 'cho luôn đấy', NULL, NULL, 20, 'percent price', 1, NULL, NULL, NULL, NULL, '2024-03-14 03:27:41', '2024-03-14 03:27:41'),
(6, NULL, 'products', 'VOUCHER 200K', 'Giam 200k ok chưa', NULL, NULL, 15, 'percent price', 1, NULL, NULL, NULL, NULL, '2024-03-25 09:42:49', '2024-03-25 09:42:49'),
(7, NULL, 'products', 'VOUCHER 250K', 'Giam 250k ok chưa', '<ul>\r\n<li>D&agrave;nh cho đơn h&agrave;ng từ 3 triệu</li>\r\n<li>Mỗi kh&aacute;ch h&agrave;ng được sử dụng tối đa 1 lần.</li>\r\n<li>Sao ch&eacute;p m&atilde; v&agrave; nhập m&atilde; khuyến m&atilde;i ở trang thanh to&aacute;n</li>\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</ul>', NULL, 10000, 'fixed price', 1, NULL, NULL, NULL, NULL, '2024-03-25 09:44:35', '2024-03-25 09:44:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `indexs`
--

CREATE TABLE `indexs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` text COLLATE utf8mb4_unicode_ci,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `type` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `indexs`
--

INSERT INTO `indexs` (`id`, `title`, `name`, `photo`, `photo2`, `url`, `created_at`, `updated_at`, `status`, `type`) VALUES
(1, 'Sản phẩm nổi bật', 'index_pos1', 'https://theme.hstatic.net/200000796751/1001150659/14/home_coll_1_banner.jpg?v=944', 'https://theme.hstatic.net/200000796751/1001150659/14/home_coll_1_banner.jpg?v=944', 'https://shop.tdptechnology.vn/men/do-lot', NULL, '2024-03-15 19:17:56', 1, NULL),
(2, 'Ceramic - Đồ gốm sứ', 'index_pos2', 'https://theme.hstatic.net/200000796751/1001150659/14/homebanner_1_img.jpg?v=1101', 'https://theme.hstatic.net/200000796751/1001150659/14/homebanner_1_img.jpg?v=1101', NULL, NULL, '2024-03-15 19:28:01', 1, NULL),
(3, 'Nội thất văn phòng', 'index_pos3', 'https://theme.hstatic.net/200000796751/1001150659/14/homebanner_2_img.jpg?v=1101', 'https://theme.hstatic.net/200000796751/1001150659/14/homebanner_2_img.jpg?v=1101', 'https://shop.tdptechnology.vn/combo', NULL, '2024-03-15 19:28:06', 1, NULL),
(4, 'Decor Tháng 3 - Ưu đãi thả ga đến 60% 123', 'index_pos4', 'https://theme.hstatic.net/200000796751/1001150659/14/home_collection_3_banner.jpg?v=1101', 'https://theme.hstatic.net/200000796751/1001150659/14/home_collection_3_banner.jpg?v=1101', 'https://shop.tdptechnology.vn/women', NULL, '2024-03-15 19:23:51', 1, NULL),
(20, '8/3 Quà tặng độc đáo - Giảm đến 80%', 'data_idx', '61,62,63,64,65,66,67,60', NULL, NULL, '2024-03-15 19:52:43', '2024-03-28 08:33:14', 1, 1),
(23, 'Sản phẩm nổi bật', 'data_idx1', '66,67,68,64,65,62,61,60,59,63,57', NULL, NULL, NULL, '2024-03-16 18:55:59', 1, 1),
(24, 'Nội Thất Phòng Khách', 'data_idx2', '68,67,66,65,63,62,61,64,59,58,57,56,55,54', NULL, NULL, NULL, '2024-03-16 18:57:33', 1, 1),
(25, 'Phòng khách', 'index_pos5', 'https://theme.hstatic.net/200000796751/1001150659/14/categorybanner_1_img.jpg?v=944', 'https://theme.hstatic.net/200000796751/1001150659/14/categorybanner_1_img.jpg?v=944', NULL, NULL, NULL, 1, NULL),
(26, 'Phòng ngủ', 'index_pos6', 'https://theme.hstatic.net/200000796751/1001150659/14/categorybanner_2_img.jpg?v=944', 'https://theme.hstatic.net/200000796751/1001150659/14/categorybanner_2_img.jpg?v=944', NULL, NULL, NULL, 1, NULL),
(27, 'Phòng ăn & Bếp', 'index_pos7', 'https://theme.hstatic.net/200000796751/1001150659/14/categorybanner_3_img.jpg?v=944', 'https://theme.hstatic.net/200000796751/1001150659/14/categorybanner_3_img.jpg?v=944', NULL, NULL, NULL, 1, NULL),
(28, 'Phòng làm việc', 'index_pos8', 'https://theme.hstatic.net/200000796751/1001150659/14/categorybanner_4_img.jpg?v=944', 'https://theme.hstatic.net/200000796751/1001150659/14/categorybanner_4_img.jpg?v=944', NULL, NULL, NULL, 1, NULL),
(29, 'quảng cáo', 'index_pos9', 'http://127.0.0.1:8000/front_end_asset/theme.hstatic.net/200000796751/1001150659/14/topbar_img5b01.jpg?v=944', 'http://127.0.0.1:8000/front_end_asset/theme.hstatic.net/200000796751/1001150659/14/topbar_img5b01.jpg?v=944', '#', NULL, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `item_coupons`
--

CREATE TABLE `item_coupons` (
  `id` bigint UNSIGNED NOT NULL,
  `item_id` int DEFAULT NULL,
  `cate_id` int DEFAULT NULL,
  `coupon_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `item_coupons`
--

INSERT INTO `item_coupons` (`id`, `item_id`, `cate_id`, `coupon_id`, `created_at`, `updated_at`) VALUES
(15, NULL, 68, 5, '2024-03-14 03:27:41', '2024-03-14 03:27:41'),
(16, 68, NULL, 5, '2024-03-14 03:28:15', '2024-03-14 03:28:15'),
(17, NULL, 67, 6, '2024-03-25 09:42:49', '2024-03-25 09:42:49'),
(18, NULL, 65, 6, '2024-03-25 09:42:49', '2024-03-25 09:42:49'),
(19, NULL, 64, 6, '2024-03-25 09:42:49', '2024-03-25 09:42:49'),
(20, NULL, 66, 6, '2024-03-25 09:42:49', '2024-03-25 09:42:49'),
(21, NULL, 63, 6, '2024-03-25 09:42:49', '2024-03-25 09:42:49'),
(22, NULL, 48, 7, '2024-03-25 09:44:35', '2024-03-25 09:44:35'),
(23, NULL, 47, 7, '2024-03-25 09:44:35', '2024-03-25 09:44:35'),
(24, NULL, 49, 7, '2024-03-25 09:44:35', '2024-03-25 09:44:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_13_150557_create_categories_table', 1),
(6, '2023_10_13_150602_create_products_table', 1),
(7, '2023_10_13_150634_create_posts_table', 1),
(8, '2023_10_13_150643_create_settings_table', 1),
(9, '2023_10_13_151630_create_skus_table', 1),
(10, '2023_10_13_153458_create_colors_table', 1),
(11, '2023_10_13_153507_create_sizes_table', 1),
(12, '2023_10_13_155849_create_address_table', 1),
(13, '2023_10_13_160059_create_coupons_table', 1),
(14, '2023_10_16_173947_create_banners_table', 1),
(15, '2023_10_17_115916_create_item_coupons_table', 1),
(16, '2023_10_18_085141_create_order_items_table', 1),
(17, '2023_10_18_085145_create_orders_table', 1),
(18, '2023_10_19_163401_create_brands_table', 1),
(19, '2023_10_28_123433_create_category_items_table', 1),
(20, '2023_10_28_133958_create_category_posts_table', 1),
(21, '2023_11_05_154658_create_indexs_table', 2),
(22, '2023_11_07_085349_create_product_combos_table', 3),
(23, '2023_11_07_105601_create_combo_items_table', 3),
(24, '2023_11_10_084749_create_setting2_table', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `order_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `customer_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_date` datetime NOT NULL,
  `sub_total` double NOT NULL,
  `total` double NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wards` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_amount` varchar(18) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fee` int DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_method` int NOT NULL DEFAULT '0',
  `messages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `order_code`, `user_id`, `customer_id`, `name`, `order_date`, `sub_total`, `total`, `region`, `city`, `wards`, `phone`, `coupon_code`, `coupon_amount`, `fee`, `payment_method`, `payment_id`, `status_method`, `messages`, `address`, `payment_status`, `created_at`, `updated_at`) VALUES
(8, 'ORDER-1699816448-127001', 1, 1, NULL, '2023-11-13 02:14:08', 897000, 747000, 'Tỉnh Hà Giang', 'Huyện Yên Minh', NULL, '121312313', 'RTX-Z47-0B6', '150000', 0, 'cod', NULL, 0, NULL, 'Xã Bạch Đích - 12121', 'unpaid', '2023-11-12 19:14:08', '2023-11-12 19:14:08'),
(9, 'ORDER-1699817429-127001', 1, 1, NULL, '2023-11-13 02:30:29', 325000, 384000, 'Tỉnh Hà Giang', 'Huyện Quản Bạ', NULL, '2121212', '', '', 59000, 'cod', NULL, 1, 'weqweqweqeqweqeqewqeqw', 'Xã Cán Tỷ - 1212', 'unpaid', '2023-11-12 19:30:29', '2023-11-12 19:32:39'),
(10, 'ORDER-1699938038-58186178156', 0, 0, NULL, '2023-11-14 12:00:38', 299000, 358000, 'Tỉnh Hà Giang', 'Huyện Yên Minh', NULL, '0945073027', '', '', 59000, 'cod', NULL, 0, 'Ghbv', 'Xã Sủng Thài - Ok', 'unpaid', '2023-11-14 05:00:38', '2023-11-14 05:00:38'),
(11, 'ORDER-1700033017-1712366537', 0, 0, NULL, '2023-11-15 14:23:37', 140000, 199000, 'Tỉnh Hải Dương', 'Thành phố Hải Dương', NULL, '0765938888', '', '', 59000, 'pay', NULL, 0, NULL, 'Phường Lê Thanh Nghị - Số 3 Bạch Đằng, Phường Lê Thanh Nghị, Thành Phố Hải Dương', 'paid', '2023-11-15 07:23:37', '2023-11-15 07:23:37'),
(12, 'ORDER-1700798274-27678771', 6, 0, NULL, '2023-11-24 10:57:54', 279000, 338000, 'Tỉnh Hải Dương', 'Thành phố Hải Dương', NULL, '0788218812', '', '', 59000, 'cod', NULL, 0, NULL, 'Phường Nhị Châu - Ạmn', 'paid', '2023-11-24 03:57:54', '2024-03-18 03:32:21'),
(13, 'EDIFA-173936608511', 11, 11, 'nguyễn van a', '2025-02-12 20:14:45', 558000, 558000, 'Thành phố Hà Nội', 'Quận Ba Đình', 'Phường Phúc Xá', NULL, '', '', 0, 'cod', NULL, 1, 'hanoi', '19 nguyễn cơ thạch, quận nam từ liêm hà nội', 'unpaid', '2025-02-12 13:14:45', '2025-02-12 13:15:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` int NOT NULL,
  `sku_id` int NOT NULL,
  `sub_price` double NOT NULL,
  `price` double NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `sku_id`, `sub_price`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(10, 8, 153, 0, 199000, 2, '2023-11-12 19:14:08', '2023-11-12 19:14:08'),
(11, 8, 150, 0, 199000, 1, '2023-11-12 19:14:08', '2023-11-12 19:14:08'),
(12, 8, 107, 60000, 230000, 5, '2023-11-12 19:14:08', '2023-11-12 19:14:08'),
(13, 8, 105, 60000, 230000, 5, '2023-11-12 19:14:08', '2023-11-12 19:14:08'),
(14, 8, 105, 60000, 230000, 5, '2023-11-12 19:14:08', '2023-11-12 19:14:08'),
(15, 8, 105, 60000, 230000, 5, '2023-11-12 19:14:08', '2023-11-12 19:14:08'),
(16, 8, 105, 60000, 230000, 5, '2023-11-12 19:14:08', '2023-11-12 19:14:08'),
(17, 9, 21, 25, 200000, 3, '2023-11-12 19:30:29', '2023-11-12 19:30:29'),
(18, 9, 41, 25, 150000, 3, '2023-11-12 19:30:29', '2023-11-12 19:30:29'),
(19, 10, 155, 0, 299000, 1, '2023-11-14 05:00:38', '2023-11-14 05:00:38'),
(20, 11, 132, 0, 140000, 1, '2023-11-15 07:23:37', '2023-11-15 07:23:37'),
(21, 12, 572, 0, 279000, 1, '2023-11-24 03:57:54', '2023-11-24 03:57:54'),
(22, 13, 573, 0, 279000, 2, '2025-02-12 13:14:45', '2025-02-12 13:14:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('admin123@gmail.com', '0079d2cb9633e6bcd788967e4b17254739d8840e', '2024-03-17 11:48:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `added_by` int DEFAULT NULL,
  `views` int NOT NULL DEFAULT '0',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `content`, `photo`, `added_by`, `views`, `type`, `status`, `created_at`, `updated_at`, `category`, `description`) VALUES
(1, 'Mua hàng trả góp', 'mua-hang-tra-gop', '<div class=\"content-pageDetail typeList-style\">\r\n<p style=\"text-align: justify;\">Chương tr&igrave;nh&nbsp;<strong>TRẢ G&Oacute;P L&Atilde;I SUẤT 0%</strong>&nbsp;nay đ&atilde; được &aacute;p dụng&nbsp;<strong>TRỰC TUYẾN tại BAYA.VN</strong>&nbsp;cho&nbsp;<strong>CHỦ THẺ VISA/ MASTERCARD/ JCB</strong>&nbsp;của c&aacute;c ng&acirc;n h&agrave;ng: Citibank, MSB, HSBC, TPBank, Standard Chartered, SCB, Shinhan Bank, ANZ, VIB, Sacombank, Vietcombank, Techcombank, BIDV, MBBank, Eximbank, OCB, KienLong Bank, Seabank, VPBank, SHB, FE Credit, Home Credit, ACB, Nam &Aacute;:</p>\r\n<ul>\r\n<li>L&atilde;i suất trả g&oacute;p 0%.</li>\r\n<li>Miễn ph&iacute; chuyển đổi trả g&oacute;p.</li>\r\n<li>Thanh to&aacute;n trước hạn bất kỳ l&uacute;c n&agrave;o.</li>\r\n<li>Kh&ocirc;ng thu bất kỳ phụ ph&iacute; n&agrave;o.</li>\r\n<li>Thời gian trả g&oacute;p:&nbsp;<strong>3, 6, 9 v&agrave; 12 th&aacute;ng</strong></li>\r\n</ul>\r\n<p><strong>BAYA.VN</strong>&nbsp;mời bạn trải nghiệm mua sắm nội thất dễ d&agrave;ng hơn bao giờ hết với chương tr&igrave;nh ưu đ&atilde;i trả g&oacute;p:</p>\r\n<ul>\r\n<li>Truy cập trang web&nbsp;<strong>www.baya.vn</strong>.</li>\r\n<li>Chọn những m&oacute;n h&agrave;ng y&ecirc;u th&iacute;ch.</li>\r\n<li>Chọn h&igrave;nh thức trả g&oacute;p v&agrave; thẻ t&iacute;n dụng của bạn.</li>\r\n<li>Thanh to&aacute;n to&agrave;n bộ đơn h&agrave;ng v&agrave; thực hiện chuyển đổi trả g&oacute;p.</li>\r\n</ul>\r\n<div>&nbsp;</div>\r\n<div><strong>C&Aacute;CH THỨC CHUYỂN ĐỔI TRẢ G&Oacute;P</strong></div>\r\n<p>&nbsp;Trong v&ograve;ng tối đa 10 ng&agrave;y hệ thống tự chuyển đổi. Trường hợp trong 10 ng&agrave;y chờ chuyển đổi m&agrave; t&agrave;i khoản của qu&yacute; kh&aacute;ch đ&atilde; l&ecirc;n sao k&ecirc; th&igrave; khi thanh to&aacute;n với ng&acirc;n h&agrave;ng qu&yacute; kh&aacute;ch h&atilde;y trừ khoản thanh to&aacute;n n&agrave;y ra. Nếu c&oacute; thắc mắc, qu&yacute; kh&aacute;ch vui l&ograve;ng li&ecirc;n hệ Hotline của Ng&acirc;n h&agrave;ng ph&aacute;t h&agrave;nh thẻ/hoặc Hotline Ng&acirc;n Lượng 1900-5858-99</p>\r\n<p><strong>Lưu &yacute;:</strong></p>\r\n<ul>\r\n<li>Chương tr&igrave;nh &aacute;p dụng tại&nbsp;<strong>www.baya.vn</strong>&nbsp;qua&nbsp;<strong>cổng thanh to&aacute;n của NG&Acirc;N LƯỢNG</strong>&nbsp;(kh&ocirc;ng &aacute;p dụng cho c&agrave; thẻ tại cửa h&agrave;ng hoặc tại nh&agrave; kh&aacute;ch).</li>\r\n<li>&Aacute;p dụng cho chủ thẻ ch&iacute;nh (kh&ocirc;ng &aacute;p dụng cho thẻ phụ, thẻ debit v&agrave; thẻ ph&aacute;t h&agrave;nh tại nước ngo&agrave;i).</li>\r\n<li>&Aacute;p dụng cho&nbsp;<strong>đơn h&agrave;ng từ 3 triệu đồng trở l&ecirc;n</strong>&nbsp;(sau khi đ&atilde; trừ c&aacute;c khoản giảm gi&aacute;).</li>\r\n<li>Hiệu lực thẻ phải lớn hơn k&igrave; hạn trả g&oacute;p, thẻ kh&ocirc;ng trong t&igrave;nh trạng chậm thanh to&aacute;n v&agrave; số dư hạn mức t&iacute;n dụng phải lớn hơn hoặc bằng tổng số tiền trả g&oacute;p.</li>\r\n<li>Qu&yacute; kh&aacute;ch vui l&ograve;ng&nbsp;<strong>KH&Ocirc;NG HỦY</strong>&nbsp;đơn h&agrave;ng mua bằng h&igrave;nh thức trả g&oacute;p đ&atilde; thanh to&aacute;n th&agrave;nh c&ocirc;ng.</li>\r\n<li>Chương tr&igrave;nh&nbsp;<strong>kh&ocirc;ng &aacute;p dụng</strong>&nbsp;đối với đơn h&agrave;ng c&oacute;&nbsp;<strong>&aacute;p dụng m&atilde; giảm gi&aacute;, sản phẩm c&oacute; qu&agrave; tặng k&egrave;m, mua 10 t&iacute;nh tiền 8</strong>...</li>\r\n<li>Gh&eacute; ngay&nbsp;<strong>BAYA.VN&nbsp;</strong>để thỏa sức mua, đua sức sắm với chương tr&igrave;nh ưu đ&atilde;i đặc biệt hấp dẫn cho c&aacute;c chủ thẻ t&iacute;n dụng. Mọi chi tiết xin li&ecirc;n hệ&nbsp;<strong>Hotline 1900 63 64 76</strong>.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>ĐỔI/TRẢ H&Agrave;NG ĐỐI VỚI ĐƠN H&Agrave;NG TRẢ G&Oacute;P</strong></p>\r\n<ul>\r\n<li><strong>&nbsp;Trường hợp kh&aacute;ch h&agrave;ng muốn đổi h&agrave;ng ho&aacute;/dịch vụ</strong></li>\r\n</ul>\r\n<p>- Kh&aacute;ch h&agrave;ng được đổi h&agrave;ng c&oacute; gi&aacute; trị bằng hoặc cao hơn gi&aacute; trị đơn h&agrave;ng đ&atilde; trả g&oacute;p trước đ&oacute;.</p>\r\n<ul>\r\n<li><strong>&nbsp;Trường hợp kh&aacute;ch h&agrave;ng muốn huỷ đơn h&agrave;ng ho&agrave;n tiền</strong></li>\r\n</ul>\r\n<p>- Kh&aacute;ch h&agrave;ng được huỷ đối với c&aacute;c đơn h&agrave;ng trả g&oacute;p.</p>\r\n<p><strong>Lưu &yacute;</strong>: Khi hủy c&aacute;c giao dịch đ&atilde; chuyển đổi trả g&oacute;p th&agrave;nh c&ocirc;ng th&igrave; chủ thẻ vẫn bị t&iacute;nh ph&iacute; chuyển đổi trả g&oacute;p.</p>\r\n<p>Chương tr&igrave;nh&nbsp;<strong>Trả G&oacute;p L&atilde;i Suất 0 Đồng</strong>&nbsp;từ c&aacute;c ng&acirc;n h&agrave;ng li&ecirc;n kết cho bạn trải nghiệm mua sắm dễ d&agrave;ng hơn bao giờ hết:</p>\r\n<ul>\r\n<li>Chọn những m&oacute;n h&agrave;ng y&ecirc;u th&iacute;ch.</li>\r\n<li>C&agrave; thẻ t&iacute;n dụng để thanh to&aacute;n to&agrave;n bộ đơn h&agrave;ng.</li>\r\n<li>Đăng k&yacute; chuyển đổi sang chương tr&igrave;nh&nbsp;<strong>Trả G&oacute;p L&atilde;i Suất 0 Đồng</strong>, cụ thể của từng ng&acirc;n h&agrave;ng như sau:</li>\r\n</ul>\r\n<table border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td><strong>STT</strong></td>\r\n<td><strong>Ng&acirc;n h&agrave;ng</strong></td>\r\n<td><strong>Gi&aacute; trị đơn h&agrave;ng</strong></td>\r\n<td><strong>Thời hạn trả g&oacute;p</strong></td>\r\n<td><strong>Ph&iacute; chuyển đổi</strong></td>\r\n<td><strong>Loại thẻ t&iacute;n dụng</strong></td>\r\n</tr>\r\n<tr>\r\n<td>1</td>\r\n<td>VIB</td>\r\n<td>Từ 3 triệu đồng</td>\r\n<td>3/ 6/ 9/ 12 th&aacute;ng</td>\r\n<td>Kh&ocirc;ng</td>\r\n<td>Tất cả</td>\r\n</tr>\r\n<tr>\r\n<td>2</td>\r\n<td>Techcombank</td>\r\n<td>Tr&ecirc;n 5 triệu đồng</td>\r\n<td>3 th&aacute;ng</td>\r\n<td>Kh&ocirc;ng</td>\r\n<td>Tất cả</td>\r\n</tr>\r\n<tr>\r\n<td>3</td>\r\n<td>SCB</td>\r\n<td>Từ 3 triệu đồng</td>\r\n<td>3/ 6/ 9/ 12 th&aacute;ng</td>\r\n<td>Kh&ocirc;ng</td>\r\n<td>Tất cả</td>\r\n</tr>\r\n<tr>\r\n<td>4</td>\r\n<td>Shinhan bank</td>\r\n<td>Từ 3 triệu đồng</td>\r\n<td>6/ 9/ 12 th&aacute;ng</td>\r\n<td>Kh&ocirc;ng</td>\r\n<td>M&atilde; thẻ: 401559, 469673, 469672, 450255, 403013</td>\r\n</tr>\r\n<tr>\r\n<td>5</td>\r\n<td>Maritime bank</td>\r\n<td>Từ 3 triệu đồng</td>\r\n<td>3/ 6 th&aacute;ng</td>\r\n<td>3%</td>\r\n<td>\r\n<p><br />M&atilde; thẻ 532451, 516294, 430389 v&agrave; c&aacute;c m&atilde; thẻ li&ecirc;n kết<br />Samsung Pay: 549743, 518027</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"2\">6</td>\r\n<td rowspan=\"2\">Sacombank</td>\r\n<td rowspan=\"2\">Từ 3 triệu đồng</td>\r\n<td>6 th&aacute;ng</td>\r\n<td>1.2%</td>\r\n<td rowspan=\"2\">Visa, Master, JCB, UnionPay<br />Thẻ c&oacute; 4 số đầu: 4720, 5123, 5268, 3564, 4862, 4364, 5523, 4553, 4662</td>\r\n</tr>\r\n<tr>\r\n<td>12 th&aacute;ng</td>\r\n<td>2,4%</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p><strong>CHỦ THẺ CẦN LƯU &Yacute; TRƯỚC KHI THỰC HIỆN TRẢ G&Oacute;P:</strong></p>\r\n<ul>\r\n<li>&nbsp;Hiệu lực c&ograve;n lại của thẻ phải lớn hơn k&igrave; hạn trả g&oacute;p</li>\r\n<li>&nbsp;Số dư của thẻ phải lớn hơn hoặc bằng tổng gi&aacute; trị trả g&oacute;p</li>\r\n<li>&nbsp;Thẻ t&iacute;n dụng đ&atilde; được đăng k&iacute; chức năng thanh to&aacute;n trực tuyến</li>\r\n<li>(Nếu Kh&aacute;ch h&agrave;ng chưa đăng k&iacute; chức năng n&agrave;y, vui l&ograve;ng li&ecirc;n hệ đến ng&acirc;n h&agrave;ng ph&aacute;t h&agrave;nh để được hướng dẫn)</li>\r\n</ul>\r\n<p>&nbsp;Kh&ocirc;ng n&ecirc;n giao dịch cận ng&agrave;y sao k&ecirc;.</p>\r\n<ul>\r\n<li>Đối với ri&ecirc;ng 7 ng&acirc;n h&agrave;ng bao gồm VCB, SHB, MBBank, OCB, Bản Việt, Standard Chartered, Home Credit, Ng&acirc;n Lượng kho&aacute; tr&ecirc;n hệ thống c&aacute;c ng&agrave;y gần sao k&ecirc; tuỳ theo từng Ng&acirc;n h&agrave;ng, Loại thẻ. Trong thời gian đ&oacute; chủ thẻ vui l&ograve;ng sử dụng thẻ của c&aacute;c Ng&acirc;n h&agrave;ng c&ograve;n lại để thực hiện giao dịch trả g&oacute;p.</li>\r\n<li>&nbsp;Kh&aacute;ch h&agrave;ng phải nhập đ&uacute;ng số thẻ, ng&agrave;y hết hạn v&agrave; số CVV khi thực hiện giao dịch.</li>\r\n</ul>\r\n<ul>\r\n<li>&nbsp;Ri&ecirc;ng Ng&acirc;n h&agrave;ng MSB - MaritimeBank c&oacute; ph&iacute; phụ thu 3%/GTGD v&agrave; Fecredit c&oacute; ph&iacute; phụ thu 2.99%/GTGD. Ng&acirc;n h&agrave;ng sẽ thu tại thời điểm giao dịch được chuyển đổi trả g&oacute;p.</li>\r\n<li>Mức trả g&oacute;p chia đều h&agrave;ng th&aacute;ng.</li>\r\n<li>Gi&aacute; trị đơn h&agrave;ng được t&iacute;nh sau khi &aacute;p dụng c&aacute;c chương tr&igrave;nh khuyến m&atilde;i, giảm gi&aacute; của cửa h&agrave;ng v&agrave; phiếu qu&agrave; tặng (nếu c&oacute;).</li>\r\n<li>Sau khi giao dịch được chuyển sang h&igrave;nh thức trả g&oacute;p, kh&aacute;ch h&agrave;ng vui l&ograve;ng kh&ocirc;ng hủy giao dịch.</li>\r\n<li>Chương tr&igrave;nh kh&ocirc;ng &aacute;p dụng tr&ugrave;ng với c&aacute;c khuyến m&atilde;i, giảm gi&aacute; kh&aacute;c của ng&acirc;n h&agrave;ng.</li>\r\n</ul>\r\n<p>Mạnh tay quẹt thẻ mua thứ m&igrave;nh th&iacute;ch m&agrave; kh&ocirc;ng ngại điều g&igrave;, thủ tục cực kỳ đơn giản, nh&acirc;n vi&ecirc;n BAYA lu&ocirc;n sẵn s&agrave;ng để hỗ trợ bạn! Đến ngay BAYA tr&ecirc;n to&agrave;n quốc để thỏa sức mua, đua sức sắm với chương tr&igrave;nh ưu đ&atilde;i đặc biệt hấp dẫn cho c&aacute;c chủ thẻ t&iacute;n dụng. Mọi chi tiết xin li&ecirc;n hệ hotline 1900 63 64 76.</p>\r\n<p><br />&nbsp;</p>\r\n<p><strong>(Q&amp;A) NHỮNG C&Acirc;U HỎI THƯỜNG GẶP:</strong></p>\r\n<p>1. Điều kiện để t&ocirc;i c&oacute; thể trả g&oacute;p l&agrave; g&igrave;?</p>\r\n<p>Để c&oacute; thể sử dụng thẻ t&iacute;n dụng trong qu&aacute; tr&igrave;nh mua h&agrave;ng trả g&oacute;p Online, bạn cần đ&aacute;p ứng một số điều kiện sau:</p>\r\n<p>- Bạn l&agrave; chủ thẻ ch&iacute;nh v&agrave; thẻ t&iacute;n dụng của bạn c&ograve;n đang trong trạng th&aacute;i hoạt động. Dịch vụ trả g&oacute;p chỉ &aacute;p dụng với thẻ t&iacute;n dụng (Credit) ph&aacute;t h&agrave;nh tại Việt Nam, kh&ocirc;ng &aacute;p dụng với thẻ t&iacute;n dụng doanh nghiệp, thẻ Debit v&agrave; thẻ ATM nội địa.</p>\r\n<p>- Gi&aacute; trị c&aacute;c giao dịch trả g&oacute;p của bạn từ 3 triệu đồng trở l&ecirc;n.</p>\r\n<p>- T&agrave;i khoản của thẻ t&iacute;n dụng kh&ocirc;ng ở trong t&igrave;nh trạng chậm thanh to&aacute;n.</p>\r\n<p>- Số dư hạn mức t&iacute;n dụng lớn hơn số tiền trả g&oacute;p</p>\r\n<p>Số tiền trả g&oacute;p thẻ t&iacute;n dụng h&agrave;ng th&aacute;ng của bạn sẽ được t&iacute;nh bằng c&ocirc;ng thức sau:</p>\r\n<p>(Số tiền đăng k&yacute; trả g&oacute;p/ Kỳ hạn trả g&oacute;p)</p>\r\n<p>&nbsp;</p>\r\n<p>2. L&atilde;i suất l&agrave; bao nhi&ecirc;u khi t&ocirc;i mua trả g&oacute;p qua thẻ t&iacute;n dụng?</p>\r\n<p>Khi mua trả g&oacute;p bằng thẻ t&iacute;n dụng, bạn ho&agrave;n to&agrave;n kh&ocirc;ng phải chịu l&atilde;i suất g&igrave;. L&atilde;i suất trả g&oacute;p bằng 0%.</p>\r\n<p>3. T&ocirc;i c&oacute; phải chịu th&ecirc;m khoản ph&iacute; n&agrave;o kh&aacute;c khi mua trả g&oacute;p bằng thẻ t&iacute;n dụng?</p>\r\n<p>Khi mua trả g&oacute;p tại BAYA bạn được MIỄN PH&Iacute; ph&iacute; chuyển đổi trả g&oacute;p. Tuy nhi&ecirc;n c&oacute; 3 ng&acirc;n h&agrave;ng l&agrave; MSB, FE, Homecredit c&oacute; ph&iacute; phụ thu thay đổi tuỳ theo ch&iacute;nh s&aacute;ch từng thời điểm. Ng&acirc;n h&agrave;ng thu trực tiếp của chủ thẻ tại thời điểm giao dịch được chuyển đổi trả g&oacute;p.</p>\r\n<p>&nbsp;</p>\r\n<p>4. T&ocirc;i c&oacute; thể trả g&oacute;p bằng thẻ t&iacute;n dụng trong thời gian bao l&acirc;u?</p>\r\n<p>Bạn c&oacute; thể trả g&oacute;p trong k&igrave; hạn 3,6,9 v&agrave; 12 th&aacute;ng</p>\r\n<p>&nbsp;</p>\r\n<p>5. Mức trả g&oacute;p bằng bao nhi&ecirc;u % gi&aacute; trị của h&agrave;ng h&oacute;a/dịch vụ khi mua bằng trả g&oacute;p thẻ t&iacute;n dụng?</p>\r\n<p>Bạn c&oacute; thể tuỳ chọn mức trả g&oacute;p bạn mong muốn, tuy nhi&ecirc;n phải đảm bảo gi&aacute; trị trả g&oacute;p tối thiểu từ 3 triệu trở l&ecirc;n.</p>\r\n<p>&nbsp;</p>\r\n<p>6. Nếu mua một sản phẩm trị gi&aacute; 24 triệu VND v&agrave; trả g&oacute;p 100% trong v&ograve;ng 12 th&aacute;ng th&igrave; l&uacute;c mua t&ocirc;i phải trả bao nhi&ecirc;u?</p>\r\n<p>Bạn sẽ thanh to&aacute;n bằng thẻ t&iacute;n dụng quốc tế với số tiền 24 triệu VND ngay tại thời điểm mua h&agrave;ng. Sau đ&oacute; Ng&acirc;n Lượng Alepay sẽ hỗ trợ chuyển đổi trả g&oacute;p cho bạn. Do đ&oacute; thực tế bạn sẽ chỉ phải trả số tiền theo đ&uacute;ng như số tiền đ&atilde; hiển thị tr&ecirc;n trang thanh to&aacute;n của Ng&acirc;n Lượng Alepay tương ứng với số tiền được ghi tr&ecirc;n sao k&ecirc; h&agrave;ng th&agrave;ng.</p>\r\n<p>&nbsp;</p>\r\n<p>7. T&ocirc;i c&oacute; thể thanh to&aacute;n số tiền trả g&oacute;p trước kỳ hạn được kh&ocirc;ng?</p>\r\n<p>Bạn c&oacute; thể thanh to&aacute;n số tiền trả g&oacute;p trước kỳ hạn v&agrave;o bất kỳ l&uacute;c n&agrave;o. Số tiền sẽ được ghi C&Oacute; v&agrave;o thẻ t&iacute;n dụng của bạn. Việc thanh to&aacute;n trước hạn kh&ocirc;ng l&agrave;m tăng/giảm c&aacute;c phụ ph&iacute; Ng&acirc;n h&agrave;ng thu trực tiếp của chủ thẻ (nếu c&oacute;).</p>\r\n<p>&nbsp;</p>\r\n<p>8. Với hạn mức t&iacute;n dụng l&agrave; 30 triệu, khi thực hiện giao dịch trả g&oacute;p gi&aacute; trị 24 triệu VND trong v&ograve;ng 12 th&aacute;ng, t&ocirc;i sẽ vẫn sử dụng được số dư t&agrave;i khoản thẻ l&agrave; (30 triệu VND &ndash; 2 triệu VND) = 28 triệu VND?</p>\r\n<p>Hạn mức khả dụng trong thẻ t&iacute;n dụng của bạn l&uacute;c n&agrave;y c&ograve;n lại l&agrave;:</p>\r\n<p>(30 triệu VND &ndash; 24 triệu VND) = 6 triệu VND.</p>\r\n<p>L&yacute; do: Ng&acirc;n h&agrave;ng ph&aacute;t h&agrave;nh sẽ tạm thời giữ lại khoản giao dịch trả g&oacute;p n&agrave;y của bạn, v&agrave; sẽ trả lại dần mỗi th&aacute;ng sau khi bạn thanh to&aacute;n khoản trả g&oacute;p của th&aacute;ng đ&oacute;. Vd: Sau khi bạn đ&atilde; thanh to&aacute;n khoản trả g&oacute;p 2 triệu VND của th&aacute;ng đầu ti&ecirc;n, số dư khả dụng trong thẻ t&iacute;n dụng của bạn l&uacute;c n&agrave;y sẽ l&agrave;:</p>\r\n<p>(30 triệu VND &ndash; 24 triệu VND) + 2 triệu VND = 8 triệu VND</p>\r\n<p>&nbsp;</p>\r\n<p>9. T&ocirc;i c&oacute; thể ho&agrave;n huỷ đơn h&agrave;ng khi đặt mua trả g&oacute;p kh&ocirc;ng?</p>\r\n<p>Bạn c&oacute; quyền ho&agrave;n huỷ đơn h&agrave;ng khi mua trả g&oacute;p theo ch&iacute;nh s&aacute;ch của đơn vị b&aacute;n hang</p>\r\n<p>&nbsp;</p>\r\n<p>10. Đối với đơn h&agrave;ng mua trả g&oacute;p đủ điều kiện được ph&eacute;p ho&agrave;n huỷ, th&igrave; t&ocirc;i sẽ nhận được tiền như thế n&agrave;o?</p>\r\n<p>- Đối với đơn h&agrave;ng mua trả g&oacute;p đủ kiền kiện được ph&eacute;p ho&agrave;n huỷ, Đơn vị b&aacute;n h&agrave;ng huỷ đơn h&agrave;ng v&agrave; b&aacute;o sang Ng&acirc;n Lượng Alepay ho&agrave;n tiền cho bạn.</p>\r\n<p>- Bạn được ho&agrave;n to&agrave;n bộ số tiền đơn h&agrave;ng.</p>\r\n<p>- Nếu đơn h&agrave;ng đ&atilde; được chuyển đổi trả g&oacute;p, bạn vẫn thực hiện nghĩa vụ trả g&oacute;p theo k&igrave; hạn đ&atilde; chọn. Số tiền trả g&oacute;p h&agrave;ng th&aacute;ng được quy định r&otilde; tr&ecirc;n sao k&ecirc; Ng&acirc;n h&agrave;ng ph&aacute;t h&agrave;nh thẻ gửi cho bạn.</p>\r\n<p>- Số tiền được ho&agrave;n về thẻ t&iacute;n dụng được thể hiện dưới h&igrave;nh thức DƯ C&Oacute; thẻ t&iacute;n dụng. Bạn được ph&eacute;p sử dụng mức DƯ C&Oacute; n&agrave;y để chi ti&ecirc;u hoặc r&uacute;t tiền. Nếu bạn kh&ocirc;ng chi ti&ecirc;u bất k&igrave; khoản n&agrave;o trong k&igrave; hạn trả g&oacute;p, số tiền DƯ C&Oacute; n&agrave;y sẽ được tự động cấn trừ cho số tiền phải trả g&oacute;p h&agrave;ng th&aacute;ng. Mọi thắc mắc về hạn mức DƯ C&Oacute; bạn vui l&ograve;ng li&ecirc;n hệ Hotline của Ng&acirc;n Lượng 1900-58-58-99 (Số m&aacute;y lẻ 3003 hoặc 3036) hoặc Hotline của Ng&acirc;n h&agrave;ng ph&aacute;t h&agrave;nh thẻ.</p>\r\n<p>- Th&ocirc;ng thường bạn sẽ nhận được số tiền ho&agrave;n sau 7-15 ng&agrave;y l&agrave;m việc. Bạn c&oacute; thể check hạn mức thẻ khi đến kỳ sao k&ecirc; gần nhất hoặc tối đa 45 ng&agrave;y (kỳ sao k&ecirc; t&ugrave;y thuộc từng loại thẻ, từng ng&acirc;n h&agrave;ng).</p>\r\n<p>Bạn c&oacute; thể li&ecirc;n hệ Đơn vị b&aacute;n h&agrave;ng để lấy m&atilde; ho&agrave;n tiền v&agrave; l&agrave;m tra so&aacute;t với Ng&acirc;n h&agrave;ng ph&aacute;t h&agrave;nh thẻ.</p>\r\n<p>&nbsp;</p>\r\n<p>11. Thanh to&aacute;n Online/hoặc Thanh to&aacute;n trả g&oacute;p Online của t&ocirc;i kh&ocirc;ng th&agrave;nh c&ocirc;ng, t&ocirc;i c&oacute; thể l&agrave;m g&igrave; b&acirc;y giờ?</p>\r\n<p>&nbsp;</p>\r\n<p>Nếu xảy ra lỗi trong qu&aacute; tr&igrave;nh thanh to&aacute;n, ch&uacute;ng t&ocirc;i khuy&ecirc;n bạn n&ecirc;n kiểm tra c&aacute;c th&ocirc;ng tin sau:</p>\r\n<p>- Thẻ đ&atilde; đăng k&iacute; chức năng thanh to&aacute;n trực tuyến với Ng&acirc;n h&agrave;ng ph&aacute;t h&agrave;nh hay chưa?</p>\r\n<p>- Kiểm tra số dư v&agrave; thời hạn của thẻ</p>\r\n<p>- Bạn đ&atilde; nhập đ&uacute;ng th&ocirc;ng tin thẻ hay chưa, bao gồm t&ecirc;n, số thẻ, ng&agrave;y hết hạn v&agrave; số CVV.</p>\r\n<p>- Tổng thời gian thực hiện giao dịch qu&aacute; 10 ph&uacute;t hay chưa. Do quy định của Ng&acirc;n h&agrave;ng, nếu qu&aacute; thời gian n&agrave;y chưa nhập m&atilde; OTP, giao dịch tự động thất bại.</p>\r\n<p>- Kết nối Internet c&oacute; ổn định hay kh&ocirc;ng?</p>\r\n<p>Sau khi kiểm tra c&aacute;c th&ocirc;ng tin tr&ecirc;n, Bạn n&ecirc;n thử lại một lần nữa. Nếu thanh to&aacute;n thất bại, bạn n&ecirc;n li&ecirc;n hệ đến Ng&acirc;n h&agrave;ng ph&aacute;t h&agrave;nh thẻ để kiểm tra thẻ. Nếu những điều tr&ecirc;n kh&ocirc;ng mang lại kết quả như mong đợi, h&atilde;y li&ecirc;n hệ với Bộ phận dịch vụ kh&aacute;ch h&agrave;ng của Đơn vị b&aacute;n hang</p>\r\n<p>&nbsp;</p>\r\n<p>12. L&agrave;m sao để biết giao dịch đ&atilde; được chuyển đổi trả g&oacute;p th&agrave;nh c&ocirc;ng?</p>\r\n<p>C&aacute;c giao dịch trả g&oacute;p qua Ng&acirc;n lượng được chuyển đổi trả g&oacute;p tự động. Th&ocirc;ng thường trong v&ograve;ng tối đa 10 ng&agrave;y kể từ khi giao dịch th&agrave;nh c&ocirc;ng, giao dịch sẽ được chuyển đổi trả g&oacute;p. Trường hợp trong 10 ng&agrave;y chờ chuyển đổi m&agrave; t&agrave;i khoản của bạn đ&atilde; l&ecirc;n sao k&ecirc; th&igrave; khi thanh to&aacute;n với ng&acirc;n h&agrave;ng bạn h&atilde;y trừ khoản thanh to&aacute;n n&agrave;y ra.</p>\r\n<p>Bạn c&oacute; thể chủ động kiểm tra với Ng&acirc;n h&agrave;ng v&igrave; c&oacute; Ng&acirc;n h&agrave;ng sẽ gọi điện b&aacute;o với chủ thẻ/hoặc gửi tin nhắn, cũng c&oacute; Ng&acirc;n h&agrave;ng chỉ tới ng&agrave;y sao k&ecirc; chủ thẻ mới nhận được tin nhắn Chuyển đổi trả g&oacute;p th&agrave;nh c&ocirc;ng.</p>\r\n<p>Khi kiểm tra với Ng&acirc;n h&agrave;ng, bạn cần n&oacute;i r&otilde; trả g&oacute;p qua cổng thanh to&aacute;n Alepay Ng&acirc;n Lượng để được Ng&acirc;n h&agrave;ng hỗ trợ.</p>\r\n<p>&nbsp;</p>\r\n<p>13. T&ocirc;i c&oacute; được ph&eacute;p thay đổi k&igrave; hạn trả g&oacute;p hay kh&ocirc;ng?</p>\r\n<p>Bạn kh&ocirc;ng thể thay đổi k&igrave; hạn trả g&oacute;p</p>\r\n<p>&nbsp;</p>\r\n</div>', NULL, NULL, 0, 'page', 1, '2023-11-05 19:56:30', '2024-03-13 04:43:16', '2', NULL),
(2, 'Hướng dẫn đặt hàng', 'huong-dan-dat-hang', '<div class=\"content-pageDetail typeList-style\">\r\n<p>Bạn c&oacute; thể mua sắm dễ d&agrave;ng tại trang&nbsp;<strong>www.baya.vn</strong>&nbsp;với c&aacute;c bước đặt h&agrave;ng đơn giản như sau:</p>\r\n<p>1. Chọn sản phẩm</p>\r\n<p>2. Th&ecirc;m v&agrave;o giỏ/ Mua h&agrave;ng</p>\r\n<p>3. Xem giỏ h&agrave;ng</p>\r\n<p>4. Nhập m&atilde; khuyến m&atilde;i (nếu c&oacute;)</p>\r\n<p>5. Thanh to&aacute;n</p>\r\n<p>6. Tick chọn v&agrave;o &ocirc;&nbsp;Th&ocirc;ng tin xuất ho&aacute; đơn điện tử (nếu cần)</p>\r\n<p>7. Đăng nhập (hoặc Đăng k&yacute; nếu chưa c&oacute; t&agrave;i khoản)</p>\r\n<p>8. Đặt h&agrave;ng</p>\r\n<p>BAYA cũng sẵn s&agrave;ng phục vụ bạn qua c&aacute;c k&ecirc;nh sau:</p>\r\n<p>&bull; Cửa sổ Tr&ograve; chuyện trực tuyến tr&ecirc;n trang baya.vn</p>\r\n<p>&bull; Email: webshop@baya.vn</p>\r\n<p>&bull; Trang&nbsp;<strong><a title=\"Facebook BAYA Si&ecirc;u Thị Nội Thất\" href=\"https://www.facebook.com/bayavietnam\" target=\"_blank\" rel=\"noopener\">Facebook BAYA Si&ecirc;u Thị Nội Thất</a></strong></p>\r\n<p>&bull; Hotline:&nbsp;<strong>1900 63 64 76</strong>&nbsp;(từ 8h - 21h)</p>\r\n</div>', NULL, NULL, 0, 'page', 1, '2023-11-05 19:56:30', '2024-03-13 04:42:26', '2', NULL),
(3, 'Câu hỏi thường gặp', 'cau-hoi-thuong-gap', '<div class=\"content-pageDetail typeList-style\">\r\n<p><strong>Hệ thống si&ecirc;u thị BAYA mở v&agrave; đ&oacute;ng cửa l&uacute;c mấy giờ?</strong></p>\r\n<ul>\r\n<li>Cửa h&agrave;ng<strong> BAYA:</strong>&nbsp;9h - 21h.</li>\r\n<li>Th&ocirc;ng tin c&aacute;c chi nh&aacute;nh <strong>BAYA:</strong> <strong><a href=\"https://baya.myharavan.com/pages/he-thong-cua-hang\"><span style=\"color: #c4123f;\">tại đ&acirc;y</span></a></strong></li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>V&igrave; sao sản phẩm thường hay hết h&agrave;ng?</strong></p>\r\n<p style=\"text-align: justify;\">Ch&uacute;ng t&ocirc;i lu&ocirc;n cố gắng duy tr&igrave; số lượng h&agrave;ng h&oacute;a c&oacute; trong catalogue ở mức cao nhất. Tuy nhi&ecirc;n, số lượng đ&oacute; c&ograve;n t&ugrave;y theo sức b&aacute;n của một mặt h&agrave;ng hoặc qu&aacute; tr&igrave;nh cung cấp h&agrave;ng c&oacute; bị tr&igrave; ho&atilde;n hay kh&ocirc;ng. Th&ocirc;ng tin về l&ocirc; h&agrave;ng mới của những sản phẩm hết h&agrave;ng lu&ocirc;n được cập nhật li&ecirc;n tục. Sản phẩm của BAYA được sản xuất ở khắp nơi tr&ecirc;n thế giới v&agrave; trong nhiều trường hợp sẽ ảnh hưởng trực tiếp đến qu&aacute; tr&igrave;nh tiếp nhận h&agrave;ng h&oacute;a.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>T&ocirc;i c&oacute; thể đặt h&agrave;ng, thanh to&aacute;n trực tuyến rồi nhận h&agrave;ng trực tiếp tại cửa h&agrave;ng kh&ocirc;ng?</strong></p>\r\n<p>Hiện tại ch&uacute;ng t&ocirc;i chưa hỗ trợ h&igrave;nh thức mua sắm n&agrave;y. Tất cả sản phẩm của đơn h&agrave;ng trực tuyến sẽ được chuyển trực tiếp từ kho đến nh&agrave; kh&aacute;ch h&agrave;ng n&ecirc;n bạn kh&ocirc;ng thể nhận sản phẩm đ&atilde; đặt trực tuyến tại cửa h&agrave;ng.</p>\r\n<p>&nbsp;</p>\r\n<h3><span style=\"font-size: 22px;\">DỊCH VỤ GIAO H&Agrave;NG</span></h3>\r\n<p><strong>BAYA c&oacute; dịch vụ giao h&agrave;ng kh&ocirc;ng?</strong></p>\r\n<p>BAYA ch&uacute;ng t&ocirc;i c&oacute; dịch vụ giao h&agrave;ng tận nh&agrave; hoặc nơi l&agrave;m việc.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>L&agrave;m sao để li&ecirc;n lạc được với nh&acirc;n vi&ecirc;n đang giao h&agrave;ng cho t&ocirc;i?</strong></p>\r\n<p>Bạn c&oacute; thể gọi v&agrave;o số điện thoại của đội ngũ đang giao đơn h&agrave;ng cho bạn được cung cấp tr&ecirc;n trang x&aacute;c nhận mua h&agrave;ng.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>H&agrave;ng sau khi giao bị thiếu hoặc hỏng h&oacute;c. T&ocirc;i n&ecirc;n l&agrave;m g&igrave;?</strong></p>\r\n<p>Vui l&ograve;ng gọi&nbsp;<a href=\"tel:%201900636476\">1900636476</a>&nbsp;để được bộ phận Chăm s&oacute;c Kh&aacute;ch h&agrave;ng của BAYA giải đ&aacute;p mọi thắc mắc về đơn h&agrave;ng.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>H&agrave;ng được giao bị thiếu mất v&agrave;i bộ phận th&igrave; phải l&agrave;m sao?</strong></p>\r\n<p>Đầu ti&ecirc;n, bạn cảm phiền kiểm tra kỹ lại c&aacute;c kiện h&agrave;ng một lần nữa. Một số mặt h&agrave;ng được chia th&agrave;nh nhiều kiện. Số kiện được ghi r&otilde; tr&ecirc;n th&ugrave;ng v&agrave; nh&atilde;n h&agrave;ng. Nếu nghi ngờ thiếu mất kiện h&agrave;ng n&agrave;o đ&oacute;, hoặc h&agrave;ng h&oacute;a b&ecirc;n trong kiện bị thiếu, vui l&ograve;ng li&ecirc;n hệ cửa h&agrave;ng đ&atilde; mua h&agrave;ng với h&oacute;a đơn gốc v&agrave; tờ hướng dẫn lắp r&aacute;p để đối chiếu. Đối với h&agrave;ng gia dụng bị thiếu bộ phận, bạn cần cung cấp số serial của sản phẩm.</p>\r\n<p>&nbsp;</p>\r\n<h3><span style=\"font-size: 22px;\">C&Aacute;C DỊCH VỤ KH&Aacute;C CỦA BAYA</span></h3>\r\n<p><strong>BAYA c&oacute; dịch vụ lắp r&aacute;p h&agrave;ng tại nh&agrave; kh&ocirc;ng?</strong></p>\r\n<p>C&aacute;c nh&acirc;n vi&ecirc;n kỹ thuật sẽ đến nh&agrave; bạn để lắp r&aacute;p h&agrave;ng th&agrave;nh phẩm v&agrave; bố tr&iacute; ở nơi bạn muốn.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Nếu như c&oacute; sự cố xảy ra khi nh&acirc;n vi&ecirc;n kỹ thuật đang lắp h&agrave;ng tại nh&agrave;, t&ocirc;i n&ecirc;n l&agrave;m g&igrave;?</strong></p>\r\n<p>Trong qu&aacute; tr&igrave;nh lắp r&aacute;p, nếu c&oacute; sự cố xin gọi Hotline&nbsp;<a href=\"tel:%201900636476\">1900636476</a>&nbsp;để được bộ phận Chăm s&oacute;c Kh&aacute;ch h&agrave;ng của BAYA đề xuất hướng giải quyết. Qu&yacute; kh&aacute;ch vui l&ograve;ng giữ h&oacute;a đơn v&agrave; cung cấp số h&oacute;a đơn để nh&acirc;n vi&ecirc;n tra cứu.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>BAYA c&oacute; dịch vụ khoan lắp v&agrave; sơn theo y&ecirc;u cầu kh&ocirc;ng?</strong></p>\r\n<p>Nh&acirc;n vi&ecirc;n kỹ thuật của ch&uacute;ng t&ocirc;i kh&ocirc;ng thể tự &yacute; quyết định khoan hoặc sơn bất cứ thứ g&igrave; trong suốt qu&aacute; tr&igrave;nh l&agrave;m việc tại nh&agrave; kh&aacute;ch. Nếu bạn cần hỗ trợ khoan hoặc sơn tại nh&agrave;, h&atilde;y gọi số hotline&nbsp;<a href=\"tel:%201900636476\">1900636476</a>&nbsp;để được bộ phận Chăm s&oacute;c Kh&aacute;ch h&agrave;ng của BAYA hướng dẫn tận t&igrave;nh v&agrave; t&igrave;m giải ph&aacute;p ph&ugrave; hợp.</p>\r\n</div>', NULL, NULL, 0, 'page', 1, '2023-11-05 19:56:30', '2024-03-13 04:41:47', '2', NULL),
(4, 'Chính sách bảo mật thông tin', 'chinh-sach-bao-mat-thong-tin', '<div class=\"content-pageDetail typeList-style\">\r\n<p><strong>1.</strong>&nbsp;<strong>Mục đ&iacute;ch v&agrave; phạm vi thu thập th&ocirc;ng tin</strong></p>\r\n<p><strong>Baya.vn&nbsp;</strong>kh&ocirc;ng b&aacute;n, chia sẻ hay trao đổi th&ocirc;ng tin c&aacute; nh&acirc;n của kh&aacute;ch h&agrave;ng thu thập tr&ecirc;n trang web cho một b&ecirc;n thứ ba n&agrave;o kh&aacute;c.</p>\r\n<p>Th&ocirc;ng tin c&aacute; nh&acirc;n thu thập được sẽ chỉ được sử dụng trong nội bộ c&ocirc;ng ty.</p>\r\n<p>Khi bạn li&ecirc;n hệ đăng k&yacute; dịch vụ, th&ocirc;ng tin c&aacute; nh&acirc;n m&agrave;&nbsp;<strong>Baya.vn&nbsp;</strong>thu thập bao gồm:</p>\r\n<p>Họ v&agrave; t&ecirc;n</p>\r\n<p>Địa chỉ</p>\r\n<p>Điện thoại</p>\r\n<p>Email</p>\r\n<p>Ngo&agrave;i th&ocirc;ng tin c&aacute; nh&acirc;n l&agrave; c&aacute;c th&ocirc;ng tin về dịch vụ</p>\r\n<p>T&ecirc;n sản phẩm</p>\r\n<p>Số lượng</p>\r\n<p>Thời gian giao nhận sản phẩm</p>\r\n<p><strong>2.&nbsp;</strong><strong>Phạm vi sử dụng th&ocirc;ng tin</strong></p>\r\n<p>Th&ocirc;ng tin c&aacute; nh&acirc;n thu thập được sẽ chỉ được&nbsp;<strong>Baya.vn&nbsp;</strong>sử dụng trong nội bộ c&ocirc;ng ty v&agrave; cho một hoặc tất cả c&aacute;c mục đ&iacute;ch sau đ&acirc;y:</p>\r\n<p>- Hỗ trợ kh&aacute;ch h&agrave;ng</p>\r\n<p>- Cung cấp th&ocirc;ng tin li&ecirc;n quan đến dịch vụ</p>\r\n<p>- Xử l&yacute; đơn đặt h&agrave;ng v&agrave; cung cấp dịch vụ v&agrave; th&ocirc;ng tin qua trang web của ch&uacute;ng t&ocirc;i theo y&ecirc;u cầu của bạn</p>\r\n<p>- Ch&uacute;ng t&ocirc;i c&oacute; thể sẽ gửi th&ocirc;ng tin sản phẩm, dịch vụ mới, th&ocirc;ng tin về c&aacute;c sự kiện sắp tới hoặc th&ocirc;ng tin tuyển dụng nếu qu&yacute; kh&aacute;ch đăng k&iacute; nhận email th&ocirc;ng b&aacute;o.</p>\r\n<p>- Ngo&agrave;i ra, ch&uacute;ng t&ocirc;i sẽ sử dụng th&ocirc;ng tin bạn cung cấp để hỗ trợ quản l&yacute; t&agrave;i khoản kh&aacute;ch h&agrave;ng; x&aacute;c nhận v&agrave; thực hiện c&aacute;c giao dịch t&agrave;i ch&iacute;nh li&ecirc;n quan đến c&aacute;c khoản thanh to&aacute;n trực tuyến của bạn;</p>\r\n<p><strong>3. Thời gian lưu trữ th&ocirc;ng tin</strong></p>\r\n<p>Đối với th&ocirc;ng tin c&aacute; nh&acirc;n,&nbsp;<strong>Baya.vn&nbsp;</strong>chỉ x&oacute;a đi dữ liệu n&agrave;y nếu kh&aacute;ch h&agrave;ng c&oacute; y&ecirc;u cầu, kh&aacute;ch h&agrave;ng y&ecirc;u cầu gửi mail về&nbsp;<a href=\"mailto:%20service@cerealoutfit.com.vn%20\">cskh@baya.vn</a></p>\r\n<p><strong>4. Những người hoặc tổ chức c&oacute; thể được tiếp cận với th&ocirc;ng tin c&aacute; nh&acirc;n</strong></p>\r\n<p>Đối tượng được tiếp cận với th&ocirc;ng tin c&aacute; nh&acirc;n của kh&aacute;ch h&agrave;ng thuộc một trong những trường</p>\r\n<p>hợp sau:</p>\r\n<p>- C&Ocirc;NG TY CỔ PHẦN NỘI THẤT BAYA</p>\r\n<p>- C&aacute;c đối t&aacute;c c&oacute; k&yacute; hợp động thực hiện 1 phần dịch vụ do C&Ocirc;NG TY CỔ PHẦN NỘI THẤT BAYA. C&aacute;c đối t&aacute;c n&agrave;y sẽ nhận được những th&ocirc;ng tin theo thỏa thuận hợp đồng (c&oacute; thể 1phần hoặc to&agrave;n bộ th&ocirc;ng tin tuy theo điều khoản hợp đồng) để tiến h&agrave;nh hỗ trợ người d&ugrave;ng sử dụng dịch vụ do C&ocirc;ng ty cung cấp.</p>\r\n<p><strong>5. Địa chỉ của đơn vị thu thập v&agrave; quản l&yacute; th&ocirc;ng tin c&aacute; nh&acirc;n</strong><br /><strong>C&ocirc;ng ty Cổ phần Nội Thất Baya</strong></p>\r\n<p><strong>Địa&nbsp;</strong><strong>chỉ: Số 673 Điện Bi&ecirc;n Phủ, P. 25, Q. B&igrave;nh Thạnh, Tp. Hồ Ch&iacute; Minh</strong></p>\r\n<p><strong>Điện thoại: 1900 63 64 76</strong></p>\r\n<p><strong>Website: Baya.vn</strong></p>\r\n<p><strong>Email:&nbsp;</strong><strong><a href=\"mailto:service@cerealoutfit.com.vn%20%0d\">cskh@baya.vn</a></strong></p>\r\n<p><strong>6. Phương tiện v&agrave; c&ocirc;ng cụ để người d&ugrave;ng tiếp cận v&agrave; chỉnh sửa dữ liệu c&aacute; nh&acirc;n của m&igrave;nh</strong></p>\r\n<p><strong>Baya.vn&nbsp;</strong>kh&ocirc;ng thu thập th&ocirc;ng tin kh&aacute;ch h&agrave;ng qua trang web, th&ocirc;ng tin c&aacute; nh&acirc;n kh&aacute;ch h&agrave;ng được thực hiện thu thập qua email li&ecirc;n hệ đặt mua sản phẩm, dịch vụ gửi về hộp mail của ch&uacute;ng t&ocirc;i: Cskh@baya.vn hoặc số điện thoại li&ecirc;n hệ đặt mua sản phẩm gọi về 1900 63 64 76</p>\r\n<p>Bạn c&oacute; thể li&ecirc;n hệ địa chỉ email c&ugrave;ng số điện thoại tr&ecirc;n để y&ecirc;u cầu&nbsp;<strong>Baya.vn&nbsp;</strong>chỉnh sửa dữ liệu c&aacute; nh&acirc;n của m&igrave;nh.</p>\r\n<p><strong>7. Cơ chế tiếp nhận v&agrave; giải quyết khiếu nại của người ti&ecirc;u d&ugrave;ng li&ecirc;n quan đến việc th&ocirc;ng tin c&aacute; nh&acirc;n bị sử dụng sai mục đ&iacute;ch hoặc phạm vi đ&atilde; th&ocirc;ng b&aacute;o.</strong></p>\r\n<p>Tại&nbsp;<strong>Baya.vn&nbsp;</strong>, việc bảo vệ th&ocirc;ng tin c&aacute; nh&acirc;n của bạn l&agrave; rất quan trọng, bạn được đảm bảo rằng th&ocirc;ng tin cung cấp cho ch&uacute;ng t&ocirc;i sẽ được mật&nbsp;<strong>Baya.vn&nbsp;</strong>cam kết kh&ocirc;ng chia sẻ, b&aacute;n hoặc cho thu&ecirc; th&ocirc;ng tin c&aacute; nh&acirc;n của bạn cho bất kỳ người n&agrave;o kh&aacute;c.&nbsp;<strong>Baya.vn&nbsp;</strong>cam kết chỉ sử dụng c&aacute;c th&ocirc;ng tin của bạn v&agrave;o c&aacute;c trường hợp sau:</p>\r\n<p>- N&acirc;ng cao chất lượng dịch vụ d&agrave;nh cho kh&aacute;ch h&agrave;ng</p>\r\n<p>- Giải quyết c&aacute;c tranh chấp, khiếu nại</p>\r\n<p>- Khi cơ quan ph&aacute;p luật c&oacute; y&ecirc;u cầu.</p>\r\n<p><strong>Baya.vn&nbsp;</strong>hiểu rằng quyền lợi của bạn trong việc bảo vệ th&ocirc;ng tin c&aacute; nh&acirc;n cũng ch&iacute;nh l&agrave; tr&aacute;ch nhiệm của ch&uacute;ng t&ocirc;i n&ecirc;n trong bất kỳ trường hợp c&oacute; thắc mắc, g&oacute;p &yacute; n&agrave;o li&ecirc;n quan đến ch&iacute;nh s&aacute;ch bảo mật của&nbsp;<strong>Baya.vn&nbsp;</strong>, v&agrave; li&ecirc;n quan đến việc th&ocirc;ng tin c&aacute; nh&acirc;n bị sử dụng sai mục đ&iacute;ch hoặc phạm vi đ&atilde; th&ocirc;ng b&aacute;o vui l&ograve;ng li&ecirc;n hệ qua số hotline 1900 63 64 76 hoặc email: cskh@baya.vn</p>\r\n</div>', NULL, NULL, 0, 'page', 1, '2023-11-05 19:56:30', '2024-03-13 04:40:22', '3', NULL),
(5, 'Các hình thức thanh toán', 'cac-hinh-thuc-thanh-toan', '<div class=\"content-pageDetail typeList-style\">\r\n<p><strong>Ch&iacute;nh s&aacute;ch thanh to&aacute;n</strong></p>\r\n<p>C&oacute; 3 h&igrave;nh thức thanh to&aacute;n, kh&aacute;ch h&agrave;ng c&oacute; thể lựa chọn h&igrave;nh thức thuận tiện v&agrave; ph&ugrave; hợp với m&igrave;nh nhất:</p>\r\n<p>&nbsp;</p>\r\n<p><strong>C&aacute;ch 1: Thanh to&aacute;n tiền mặt</strong></p>\r\n<p>Qu&yacute; kh&aacute;ch c&oacute; thể thanh to&aacute;n tiền mặt trực tiếp khi mua h&agrave;ng tại Hệ thống Cửa h&agrave;ng Nội thất Baya, hoặc thanh to&aacute;n cho nh&acirc;n vi&ecirc;n chuyển ph&aacute;t đối với h&igrave;nh thức chuyển ph&aacute;t COD khi mua h&agrave;ng online qua website <strong><u><a href=\"http://baya.vn\">baya.vn</a></u></strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>C&aacute;ch 2: Thanh to&aacute;n qu&eacute;t m&atilde; VNPAY-QR</strong></p>\r\n<p>Thanh to&aacute;n VNPAY-QR l&agrave; h&igrave;nh thức thanh to&aacute;n ti&ecirc;n phong cho xu thế ti&ecirc;u d&ugrave;ng kh&ocirc;ng d&ugrave;ng tiền mặt tương lai. Thao t&aacute;c thanh to&aacute;n an to&agrave;n, đơn giản, nhanh ch&oacute;ng v&agrave; bảo mật cấp cao. Chỉ cần sử dụng app Mobile Banking ng&acirc;n h&agrave;ng của Qu&yacute; kh&aacute;ch v&agrave; qu&eacute;t m&atilde; VNPAY-QR để thanh to&aacute;n. B&ecirc;n cạnh đ&oacute;, thanh to&aacute;n bằng VNPAY-QR, Qu&yacute; kh&aacute;ch sẽ lu&ocirc;n được hưởng những ưu đ&atilde;i giảm gi&aacute; đặc biệt. Chi tiết ưu đ&atilde;i v&agrave; hướng dẫn thanh to&aacute;n VNPAY-QR Qu&yacute; kh&aacute;ch c&oacute; thể tham khảo <u><strong><a href=\"https://baya.vn/pages/huong-dan-thanh-toan-vnpay-qr-tren-website\">TẠI Đ&Acirc;Y</a></strong></u>. VNPAY-QR được &aacute;p dụng thanh to&aacute;n tại tất cả Hệ thống Cửa h&agrave;ng Nội thất Baya&nbsp;v&agrave; website <u><strong><a href=\"http://baya.vn\">baya.vn</a></strong></u></p>\r\n<p>&nbsp;</p>\r\n<p><strong>C&aacute;ch 3: Chuyển khoản trước</strong></p>\r\n<p>Qu&yacute; kh&aacute;ch vui l&ograve;ng chuyển khoản trước, sau đ&oacute; ch&uacute;ng t&ocirc;i tiến h&agrave;nh giao h&agrave;ng theo thỏa thuận hoặc hợp đồng với Qu&yacute; kh&aacute;ch.</p>\r\n<p><strong>Th&ocirc;ng tin t&agrave;i khoản: 1027565352 &ndash;&nbsp;Vietcombank CN T&acirc;n B&igrave;nh -&nbsp;C&ocirc;ng ty CP Nội thất Baya</strong></p>\r\n<p><em>*Lưu &yacute;:</em></p>\r\n<p>Nội dung chuyển khoản: ghi r&otilde;&nbsp;<strong>Số điện thoại&nbsp;</strong>hoặc&nbsp;<strong>Số đơn h&agrave;ng</strong><br />Sau khi chuyển khoản, ch&uacute;ng t&ocirc;i sẽ li&ecirc;n hệ x&aacute;c nhận v&agrave; tiến h&agrave;nh giao h&agrave;ng.</p>\r\n<p>Nếu sau thời gian thỏa thuận m&agrave; ch&uacute;ng t&ocirc;i kh&ocirc;ng giao h&agrave;ng hoặc kh&ocirc;ng phản hồi lại, qu&yacute; kh&aacute;ch c&oacute; thể gửi khiếu nại trực tiếp về địa chỉ trụ sở</p>\r\n<p>Đối với kh&aacute;ch h&agrave;ng c&oacute; nhu cầu mua số lượng lớn để kinh doanh hoặc bu&ocirc;n sỉ vui l&ograve;ng li&ecirc;n hệ trực tiếp với ch&uacute;ng t&ocirc;i để c&oacute; ch&iacute;nh s&aacute;ch gi&aacute; cả hợp l&yacute;. V&agrave; việc thanh to&aacute;n sẽ được thực hiện theo hợp đồng.</p>\r\n</div>', NULL, NULL, 0, 'page', 1, '2023-11-05 19:56:30', '2024-03-13 04:39:40', '3', NULL),
(6, 'Chính sách vận chuyển và giao nhận', 'chinh-sach-van-chuyen-va-giao-nhan', '<div class=\"content-pageDetail typeList-style\">\r\n<p><strong>Ch&iacute;nh s&aacute;ch vận chuyển v&agrave; giao nhận</strong></p>\r\n<p><strong>a)</strong> <strong>C&aacute;c phương thức giao h&agrave;ng</strong>&nbsp;</p>\r\n<p>Ch&uacute;ng t&ocirc;i sử dụng 02 phương thức giao h&agrave;ng:&nbsp;</p>\r\n<p>- Kh&aacute;ch h&agrave;ng mua trực tiếp tại cửa h&agrave;ng BAYA&nbsp;</p>\r\n<p>- Ship h&agrave;ng&nbsp;</p>\r\n<p><strong>b) Thời hạn ước t&iacute;nh cho việc giao h&agrave;ng</strong>&nbsp;</p>\r\n<p><strong>Giao h&agrave;ng</strong>&nbsp;</p>\r\n<p>BAYA cung cấp Dịch vụ Giao h&agrave;ng tận nh&agrave; trong v&ograve;ng 3 ng&agrave;y trong khung giờ từ 9-17h hoặc trong khung giờ xe tải được ph&eacute;p vận h&agrave;nh tại H&agrave; Nội, Tp. Hồ Ch&iacute; Minh, Đ&agrave; Nẵng, Hội An &amp; Huế, 5 ng&agrave;y tại c&aacute;c tỉnh th&agrave;nh kh&aacute;c kể từ ng&agrave;y thanh to&aacute;n. Biểu ph&iacute; &aacute;p dụng &aacute;p dụng từ 4/5/2023 như sau:&nbsp;</p>\r\n<table border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td colspan=\"1\" rowspan=\"3\">\r\n<p><strong>STT</strong>&nbsp;</p>\r\n</td>\r\n<td colspan=\"1\" rowspan=\"3\">\r\n<p><strong>K&ecirc;nh b&aacute;n</strong>&nbsp;</p>\r\n</td>\r\n<td colspan=\"4\">\r\n<p><strong>Gi&aacute; trị đơn h&agrave;ng</strong>&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"2\">\r\n<p><strong>Nội th&agrave;nh</strong>&nbsp;</p>\r\n</td>\r\n<td colspan=\"2\">\r\n<p><strong>Ngoại th&agrave;nh</strong>&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><strong>&lt;10 triệu đồng</strong>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p><strong>&ge; 10 triệu đồng</strong>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p><strong>&lt; 10 triệu đồng</strong>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p><strong>&ge; 10 triệu đồng</strong>&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>1&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>Mỹ Đ&igrave;nh &amp; T&ocirc; Hiến Th&agrave;nh&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>100.000 VNĐ&nbsp;</p>\r\n</td>\r\n<td colspan=\"1\" rowspan=\"2\">\r\n<p>Miễn ph&iacute;&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>120.000 VNĐ&nbsp;</p>\r\n</td>\r\n<td colspan=\"1\" rowspan=\"2\">\r\n<p>Miễn ph&iacute;&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>2&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>Online&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>30.000 VNĐ&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>40.000 VNĐ&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"6\">\r\n<p><strong><em>***</em></strong><strong>&nbsp;Hồ Ch&iacute; Minh:</strong>&nbsp;</p>\r\n<p><strong>Nội th&agrave;nh:</strong>&nbsp;Quận 1, 3, 4, 5, 6, 7, 8, 10, 11, 12, B&igrave;nh Thạnh, T&acirc;n B&igrave;nh, Ph&uacute; Nhuận, G&ograve; Vấp, T&acirc;n Ph&uacute;, B&igrave;nh T&acirc;n, TP Thủ Đức&nbsp;</p>\r\n<p><strong>Ngoại th&agrave;nh:</strong>&nbsp;H&oacute;c M&ocirc;n, Nh&agrave; B&egrave;, B&igrave;nh Ch&aacute;nh, Củ Chi, Cần Giờ&nbsp;</p>\r\n<p><strong>*** H&agrave; Nội</strong>&nbsp;</p>\r\n<p><strong>Nội th&agrave;nh:</strong>&nbsp;Ba Đ&igrave;nh, Ho&agrave;n Kiếm, Đống Đa, T&acirc;y Hồ, Hai B&agrave; Trưng, Cầu Giấy, Thanh Xu&acirc;n, H&agrave; Đ&ocirc;ng, Nam Từ Li&ecirc;m, Bắc Từ Li&ecirc;m, Ho&agrave;ng Mai, Long Bi&ecirc;n&nbsp;</p>\r\n<p><strong>Ngoại th&agrave;nh:</strong>&nbsp;Ba V&igrave;, Chương Mỹ, Đan Phượng, Ho&agrave;i Đức, Mỹ Đức, Ph&uacute; Xuy&ecirc;n, Ph&uacute;c Thọ, Quốc Oai, Thạch Thất, Thanh Oai, Thường T&iacute;n, Ứng H&ograve;a, Sơn T&acirc;y, Đ&ocirc;ng Anh, Gia L&acirc;m, Thanh Tr&igrave;, S&oacute;c Sơn, M&ecirc; Linh&nbsp;</p>\r\n<p><em>***&nbsp;</em>Ph&iacute; đ&atilde; bao gồm lắp đặt&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"6\">\r\n<p>*** Nh&acirc;n vi&ecirc;n cửa h&agrave;ng + online hỗ trợ book đơn vị vận chuyển kh&aacute;c (Grab, Ahamove,&hellip;) giao h&agrave;ng, kh&aacute;ch tự trả tiền nếu c&oacute; y&ecirc;u cầu&nbsp;</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p>Nếu kh&aacute;ch h&agrave;ng c&oacute; nhu cầu giao h&agrave;ng tối, ch&uacute;ng t&ocirc;i sẽ t&iacute;nh Ph&iacute; vận chuyển nh&acirc;n hai, ph&iacute; n&agrave;y sẽ được miễn đối với đơn h&agrave;ng c&oacute; gi&aacute; trị tr&ecirc;n 10 triệu đồng. Khi ch&uacute;ng t&ocirc;i đ&atilde; l&ecirc;n lịch giao h&agrave;ng, vui l&ograve;ng cử người ở nh&agrave; để nhận h&agrave;ng v&agrave;o thời gian giao h&agrave;ng đ&atilde; thống nhất. Nếu kh&aacute;ch kh&ocirc;ng ở nh&agrave; để nhận h&agrave;ng như đ&atilde; hẹn, BAYA sẽ sắp xếp giao h&agrave;ng lại. Sau 2 lần giao h&agrave;ng kh&ocirc;ng th&agrave;nh c&ocirc;ng, BAYA sẽ t&iacute;nh Ph&iacute; vận chuyển nh&acirc;n hai.&nbsp;</p>\r\n<p>Quý khách vui l&ograve;ng đặt cọc trước 10% gi&aacute; trị h&agrave;ng h&oacute;a khi đặt lịch cho Dịch vụ Giao h&agrave;ng t&acirc;̣n nh&agrave; của BAYA. Phần c&ograve;n lại thanh to&aacute;n bằng thẻ hoặc ti&ecirc;̀n mặt ngay khi nhận h&agrave;ng k&egrave;m bi&ecirc;n lai mua h&agrave;ng.&nbsp;</p>\r\n<p>Y&ecirc;u cầu xuất H&oacute;a đơn đỏ phải được gửi đến BAYA trong c&ugrave;ng ng&agrave;y mua h&agrave;ng với đầy đủ th&ocirc;ng tin tr&ecirc;n phiếu y&ecirc;u cầu viết h&oacute;a đơn đỏ. H&oacute;a đơn đỏ sẽ được gửi tới kh&aacute;ch h&agrave;ng trong v&ograve;ng 3 ng&agrave;y l&agrave;m việc t&iacute;nh từ thời điểm ho&agrave;n th&agrave;nh giao h&agrave;ng.&nbsp;</p>\r\n<p>BAYA chỉ lắp r&aacute;p những sản phẩm trong điều kiện sẵn s&agrave;ng sử dụng, kh&ocirc;ng bao gồm lắp/gắn sản phẩm l&ecirc;n tường, khoan tường&hellip; ngoại trừ c&aacute;c dự &aacute;n tủ bếp v&agrave; đơn hàng doanh nghi&ecirc;̣p. Nh&acirc;n vi&ecirc;n giao h&agrave;ng của ch&uacute;ng t&ocirc;i kh&ocirc;ng được ph&eacute;p thực hiện bất kỳ c&ocirc;ng việc n&agrave;o kh&aacute;c ngo&agrave;i việc lắp r&aacute;p sản phẩm. Nếu quý khách kh&ocirc;ng sử dụng dịch vụ chính thức của BAYA, BAYA sẽ kh&ocirc;ng chịu tr&aacute;ch nhiệm cho những sản phẩm v&agrave; dịch vụ đ&oacute;.&nbsp;</p>\r\n<p>Trong trường hợp muốn thay đổi ng&agrave;y giờ giao h&agrave;ng hoặc c&oacute; bất kỳ y&ecirc;u cầu thay đổi n&agrave;o về h&agrave;ng h&oacute;a, qu&yacute; kh&aacute;ch cần gọi điện đến hotline của Dịch vụ Giao h&agrave;ng (in tr&ecirc;n Phiếu giao h&agrave;ng) &iacute;t nhất 24 giờ trước giờ giao h&agrave;ng đã định sẵn cho c&aacute;c điểm đến tại Tp. Hồ Ch&iacute; Minh hoặc H&agrave; Nội v&agrave; trước 48 giờ đối với c&aacute;c tỉnh kh&aacute;c. BAYA lu&ocirc;n c&ocirc;́ gắng giao h&agrave;ng đ&uacute;ng thời gian đ&atilde; hẹn, tuy nhi&ecirc;n ch&uacute;ng t&ocirc;i được quyền sắp xếp thời gian giao h&agrave;ng thuận tiện cho Dịch vụ Giao h&agrave;ng của BAYA.&nbsp;</p>\r\n<p>Trong trường hợp quý khách kh&ocirc;ng thanh to&aacute;n ngay số tiền h&agrave;ng c&ograve;n lại khi BAYA giao h&agrave;ng, ch&uacute;ng t&ocirc;i c&oacute; quyền giữ lại h&agrave;ng h&oacute;a tương ứng với số tiền chưa thanh to&aacute;n, v&agrave; kh&aacute;ch h&agrave;ng phải trả ph&iacute; vận chuyển số h&agrave;ng h&oacute;a n&agrave;y về cửa h&agrave;ng đ&atilde; mua (xem th&ecirc;m về Ph&iacute; vận chuyển tại Mục 6). C&aacute;c loại ph&iacute; ph&aacute;t sinh theo quy định của Ban Quản l&yacute; nơi cư tr&uacute; li&ecirc;n quan đến việc giao h&agrave;ng bằng xe tải, sử dụng thang m&aacute;y&hellip; sẽ do kh&aacute;ch h&agrave;ng thanh to&aacute;n.&nbsp;</p>\r\n<p><strong>Khoan lắp</strong>&nbsp;</p>\r\n<p>BAYA cung cấp dịch vụ khoan lắp miễn ph&iacute; tại nh&agrave; cho đơn h&agrave;ng từ 10 triệu đồng, v&agrave; &aacute;p dụng mức ph&iacute; đồng gi&aacute; 150.000đ cho đơn h&agrave;ng dưới 10 triệu đồng..&nbsp;</p>\r\n<p><strong>Ph&iacute; vận chuyển</strong>&nbsp;</p>\r\n<p>&Aacute;p dụng cho trường hợp kh&aacute;ch sử dụng dịch vụ vận chuyển của BAYA để:&nbsp;</p>\r\n<p>Đổi trả h&agrave;ng.&nbsp;</p>\r\n<p>Dịch vụ giao h&agrave;ng tận nh&agrave; sau 2 lần giao h&agrave;ng kh&ocirc;ng th&agrave;nh c&ocirc;ng.&nbsp;</p>\r\n<p>C&aacute;c loại ph&iacute; ph&aacute;t sinh theo quy định của Ban Quản l&yacute; nơi cư tr&uacute; li&ecirc;n quan đến việc giao h&agrave;ng bằng xe tải, sử dụng thang m&aacute;y&hellip; sẽ do kh&aacute;ch h&agrave;ng thanh to&aacute;n.&nbsp;</p>\r\n<p><strong>c) C&aacute;c giới hạn về mặt địa l&yacute; cho việc giao h&agrave;ng</strong>&nbsp;</p>\r\n<p>Ri&ecirc;ng kh&aacute;ch tỉnh c&oacute; nhu cầu mua số lượng lớn hoặc kh&aacute;ch bu&ocirc;n sỉ nếu c&oacute; nhu cầu mua sản phẩm , ch&uacute;ng t&ocirc;i sẽ nhờ dịch vụ giao nhận của c&aacute;c c&ocirc;ng ty vận chuyển v&agrave; ph&iacute; sẽ được t&iacute;nh theo ph&iacute; của c&aacute;c đơn vị cung cấp dịch vụ vận chuyển hoặc theo thoản thuận hợp đồng giữa 2 b&ecirc;n.&nbsp;</p>\r\n<p><strong>d) Ph&acirc;n định tr&aacute;ch nhiệm của thương nh&acirc;n, tổ chức cung ứng dịch vụ logistics về cung cấp chứng từ h&agrave;ng h&oacute;a trong qu&aacute; tr&igrave;nh giao nhận.</strong>&nbsp;</p>\r\n<p>Tất cả c&aacute;c đơn h&agrave;ng đều được đ&oacute;ng g&oacute;i sẵn s&agrave;ng trước khi vận chuyển, được ni&ecirc;m phong bởi Baya.vn .&nbsp;</p>\r\n<p>Đơn vị vận chuyển sẽ chỉ chịu tr&aacute;ch nhiệm vận chuyển h&agrave;ng h&oacute;a theo nguy&ecirc;n tắc &ldquo;nguy&ecirc;n đai, nguy&ecirc;n kiện&rdquo;&nbsp;</p>\r\n<p>Tr&ecirc;n bao b&igrave; tất cả c&aacute;c đơn h&agrave;ng đều c&oacute; th&ocirc;ng tin:&nbsp;</p>\r\n<p>Th&ocirc;ng tin Người nhận, bao gồm: T&ecirc;n người nhận, số điện thoại v&agrave; địa chỉ người nhận&nbsp;</p>\r\n<p>M&atilde; vận đơn của đơn h&agrave;ng.&nbsp;</p>\r\n<p>Để đảm bảo an to&agrave;n cho h&agrave;ng h&oacute;a, Baya.vn sẽ gửi k&egrave;m h&oacute;a đơn t&agrave;i ch&iacute;nh hoặc phiếu xuất kho hợp lệ của sản phẩm trong bưu kiện (nếu c&oacute;).&nbsp;</p>\r\n<p>H&oacute;a đơn t&agrave;i ch&iacute;nh hoặc phiếu xuất kho l&agrave; căn cứ hỗ trợ qu&aacute; tr&igrave;nh xử l&yacute; khiếu nại như: x&aacute;c định gi&aacute; trị thị trường của h&agrave;ng h&oacute;a, đảm bảo h&agrave;ng h&oacute;a lưu th&ocirc;ng hợp lệ v.v..&nbsp;</p>\r\n<p><strong>e) Tr&aacute;ch nhiệm về trường hợp h&agrave;ng bị hư hỏng do qu&aacute; tr&igrave;nh vận chuyển</strong>&nbsp;</p>\r\n<p>Về việc cung cấp chứng từ h&agrave;ng h&oacute;a trong qu&aacute; tr&igrave;nh giao nhận.&nbsp;</p>\r\n<p>Đối với h&agrave;ng h&oacute;a bị hư hỏng do qu&aacute; tr&igrave;nh vận chuyển d&ugrave; l&agrave; đơn h&agrave;ng do ch&iacute;nh cửa h&agrave;ng vận chuyển hay do b&ecirc;n thứ 3 vận chuyển th&igrave; ch&uacute;ng t&ocirc;i sẽ l&agrave; b&ecirc;n đứng ra chịu tr&aacute;ch nhiệm giải quyết vấn đề cho kh&aacute;ch h&agrave;ng.&nbsp;</p>\r\n<p>Kh&aacute;ch h&agrave;ng c&oacute; quyền từ chối nhận sản phẩm v&agrave; y&ecirc;u cầu đổi trả theo quy định &ldquo; <strong><em>đổi trả ho&agrave;n ph&iacute;</em></strong>&rdquo; c&ograve;n mọi vấn đề ph&aacute;t sinh ch&uacute;ng t&ocirc;i sẽ l&agrave;m việc lại với đối t&aacute;c vận chuyển để giải quyết đền b&ugrave; cho đơn h&agrave;ng theo thỏa thuận hợp t&aacute;c giữa c&ocirc;ng ty với đối t&aacute;c thứ 3 cung cấp dịch vụ vận chuyển.&nbsp;</p>\r\n<p><strong>Lưu &yacute;: Trường hợp ph&aacute;t sinh chậm trễ trong việc giao h&agrave;ng ch&uacute;ng t&ocirc;i sẽ th&ocirc;ng tin kịp thời cho kh&aacute;ch h&agrave;ng v&agrave; kh&aacute;ch h&agrave;ng c&oacute; thể lựa chọn giữa việc Hủy hoặc tiếp tục chờ h&agrave;ng.</strong>&nbsp;</p>\r\n</div>', NULL, NULL, 0, 'page', 1, '2023-11-05 19:56:30', '2024-03-13 04:37:36', '3', NULL),
(7, 'Chính sách đổi trả và hoàn tiền', 'chinh-sach-doi-tra-va-hoan-tien', '<div class=\"wrapper-pageDetail\">\r\n<div class=\"heading-pageDetail\">\r\n<h1>Ch&iacute;nh s&aacute;ch đổi trả v&agrave; ho&agrave;n tiền</h1>\r\n</div>\r\n<div class=\"content-pageDetail typeList-style\">\r\n<p><strong>1. Điều kiện đổi trả</strong></p>\r\n<p>Qu&yacute; Kh&aacute;ch h&agrave;ng cần kiểm tra t&igrave;nh trạng h&agrave;ng h&oacute;a v&agrave; c&oacute; thể đổi h&agrave;ng/ trả lại h&agrave;ng&nbsp;ngay tại thời điểm giao/nhận h&agrave;ng&nbsp;trong những trường hợp sau:</p>\r\n<ul>\r\n<li>H&agrave;ng kh&ocirc;ng đ&uacute;ng chủng loại, mẫu m&atilde; trong đơn h&agrave;ng đ&atilde; đặt hoặc như tr&ecirc;n website tại thời điểm đặt h&agrave;ng.</li>\r\n<li>Kh&ocirc;ng đủ số lượng, kh&ocirc;ng đủ bộ như trong đơn h&agrave;ng.</li>\r\n<li>T&igrave;nh trạng b&ecirc;n ngo&agrave;i bị ảnh hưởng như r&aacute;ch bao b&igrave;, bong tr&oacute;c, bể vỡ&hellip;</li>\r\n</ul>\r\n<p>&nbsp;Kh&aacute;ch h&agrave;ng c&oacute; tr&aacute;ch nhiệm tr&igrave;nh giấy tờ li&ecirc;n quan chứng minh sự thiếu s&oacute;t tr&ecirc;n để ho&agrave;n th&agrave;nh việc&nbsp;ho&agrave;n trả/đổi trả h&agrave;ng h&oacute;a.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong>2. Quy định về thời gian th&ocirc;ng b&aacute;o v&agrave; gửi sản phẩm đổi trả</strong></p>\r\n<ul>\r\n<li><strong>Thời gian th&ocirc;ng b&aacute;o đổi trả</strong>:&nbsp;trong v&ograve;ng 48h kể từ khi nhận sản phẩm đối với trường hợp sản phẩm thiếu phụ kiện, qu&agrave; tặng hoặc bể vỡ.</li>\r\n<li><strong>Thời gian gửi chuyển trả sản phẩm</strong>: trong v&ograve;ng 14 ng&agrave;y kể từ khi nhận sản phẩm.</li>\r\n<li><strong>Địa điểm đổi trả sản phẩm</strong>: Kh&aacute;ch h&agrave;ng c&oacute; thể mang h&agrave;ng trực tiếp đến văn ph&ograve;ng/ cửa h&agrave;ng của ch&uacute;ng t&ocirc;i hoặc chuyển qua đường bưu điện.</li>\r\n</ul>\r\n<p>Trong trường hợp Qu&yacute; Kh&aacute;ch h&agrave;ng c&oacute; &yacute; kiến đ&oacute;ng g&oacute;p/khiếu nại li&ecirc;n quan đến chất lượng sản phẩm, Qu&yacute; Kh&aacute;ch h&agrave;ng vui l&ograve;ng li&ecirc;n hệ đường d&acirc;y chăm s&oacute;c kh&aacute;ch h&agrave;ng&nbsp;của ch&uacute;ng t&ocirc;i.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>3. Ch&iacute;nh s&aacute;ch xử l&yacute; khiếu nại</strong></p>\r\n<p>- Tiếp nhận mọi khiếu nại của kh&aacute;ch h&agrave;ng li&ecirc;n quan đến việc sử dụng dịch vụ của c&ocirc;ng ty.</p>\r\n<p>- Tất cả mọi trường hơp bảo h&agrave;nh, qu&yacute; kh&aacute;ch c&oacute; thể li&ecirc;n hệ với ch&uacute;ng t&ocirc;i để l&agrave;m thủ tục bảo h&agrave;nh.</p>\r\n<p>- Thời gian giải quyết khiếu nại trong thời hạn tối đa l&agrave; 05 (năm) ng&agrave;y l&agrave;m việc kể từ khi nhận được khiếu nại của của kh&aacute;ch h&agrave;ng. Trong trường hợp bất khả kh&aacute;ng 2 b&ecirc;n sẽ tự thương lượng.</p>\r\n</div>\r\n</div>', NULL, NULL, 0, 'page', 1, '2023-11-05 19:56:30', '2024-03-13 04:12:34', '3', NULL);
INSERT INTO `posts` (`id`, `title`, `slug`, `content`, `photo`, `added_by`, `views`, `type`, `status`, `created_at`, `updated_at`, `category`, `description`) VALUES
(8, 'Chính sách bảo hành', 'chinh-sach-bao-hanh', '<div class=\"content-pageDetail typeList-style\">\r\n<p><strong>1. Bảo h&agrave;nh</strong></p>\r\n<p>Thời gian bảo h&agrave;nh cho tất cả c&aacute;c sản phẩm của BAYA l&agrave;&nbsp;<strong>12 th&aacute;ng&nbsp;</strong>trong phạm vi bảo h&agrave;nh.</p>\r\n<p><strong>Điều kiện bảo h&agrave;nh</strong></p>\r\n<p>BAYA cung cấp dịch vụ bảo h&agrave;nh cho kh&aacute;ch h&agrave;ng xuất tr&igrave;nh được th&ocirc;ng tin Bi&ecirc;n lai gốc (bao gồm H&oacute;a đơn đỏ nếu c&oacute;) hoặc T&ecirc;n kh&aacute;ch h&agrave;ng/ Địa chỉ/ Số điện thoại in tr&ecirc;n Phiếu giao h&agrave;ng. Thời gian bảo h&agrave;nh được t&iacute;nh từ ng&agrave;y quý kh&aacute;ch nhận được sản phẩm. BAYA quyết định việc bảo h&agrave;nh bằng cách sửa chữa, thay thế, hoặc ho&agrave;n trả sản phẩm.</p>\r\n<p><strong>Quy tr&igrave;nh bảo h&agrave;nh</strong></p>\r\n<p><u>Đối với sản phẩm nội thất</u>&nbsp;:</p>\r\n<p>BAYA kiểm tra các sản phẩm để x&aacute;c định trường hợp được &aacute;p dụng dịch vụ bảo h&agrave;nh. BAYA sửa chữa sản phẩm bị lỗi, thay thế bằng một sản ph&acirc;̉m tương tự/ tương đương hoặc hoàn lại ti&ecirc;̀n cho quý khách. Ch&uacute;ng t&ocirc;i c&oacute; thể mang h&agrave;ng về kho để tiến h&agrave;nh sửa chữa.</p>\r\n<p>Nếu sản phẩm kh&ocirc;ng c&ograve;n được bày bán, BAYA sẽ đề xuất một sản ph&acirc;̉m thay thế phù hợp. Khi sản phẩm được bảo h&agrave;nh, BAYA chịu tr&aacute;ch nhiệm về chi ph&iacute; sửa chữa, thay thế c&aacute;c bộ phận, vận chuyển h&agrave;ng ho&aacute; trả lại cho kh&aacute;ch h&agrave;ng. Bất kỳ b&ocirc;̣ ph&acirc;̣n nào bị thay th&ecirc;́ hoặc loại bỏ trong qu&aacute; tr&igrave;nh sửa chữa sẽ thu&ocirc;̣c quy&ecirc;̀n sở hữu của BAYA.</p>\r\n<p><u>Đối với c&aacute;c sản phẩm kh&aacute;c</u>&nbsp;: Qu&yacute; kh&aacute;ch vui l&ograve;ng mang sản phẩm đến cửa h&agrave;ng BAYA bất kỳ để được bảo h&agrave;nh.</p>\r\n<p><strong>Phạm vi bảo h&agrave;nh</strong></p>\r\n<p>Bảo h&agrave;nh BAYA &aacute;p dụng cho sản phẩm hư hỏng do lỗi của nh&agrave; sản xuất hoặc lỗi nguy&ecirc;n vật liệu.</p>\r\n<p>Bảo h&agrave;nh kh&ocirc;ng áp dụng trong c&aacute;c trường hợp sau:</p>\r\n<ul>\r\n<li>Ảnh hưởng của m&ocirc;i trường, thi&ecirc;n tai v&agrave; thi&ecirc;n địch (s&acirc;u bọ, c&ocirc;n tr&ugrave;ng, chuột, gi&aacute;n&hellip;).</li>\r\n<li>Do kh&aacute;ch h&agrave;ng sơ suất, sử dụng hoặc vệ sinh kh&ocirc;ng đ&uacute;ng c&aacute;ch, thiếu bảo tr&igrave; cần thiết, vượt qu&aacute; khả năng tải trọng của sản phẩm&hellip;</li>\r\n<li>Kh&aacute;ch h&agrave;ng tự sửa chữa sản phẩm.</li>\r\n<li>Sản phẩm thanh l&yacute; &ldquo;CLEARANCE&rdquo;.</li>\r\n</ul>\r\n<p>Đối với những sản phẩm kh&ocirc;ng được bảo h&agrave;nh, nếu kh&aacute;ch h&agrave;ng y&ecirc;u cầu BAYA sẽ hỗ trợ với h&igrave;nh thức t&iacute;nh ph&iacute;.</p>\r\n<p><strong>Ch&iacute;nh s&aacute;ch kiểm h&agrave;ng</strong></p>\r\n<p>Trước khi nhận h&agrave;ng v&agrave; thanh to&aacute;n, Qu&yacute; Kh&aacute;ch được quyền kiểm tra sản phẩm.&nbsp;<strong>Kh&ocirc;ng hỗ trợ thử h&agrave;ng.</strong></p>\r\n<p>Qu&yacute; Kh&aacute;ch vui l&ograve;ng mở g&oacute;i h&agrave;ng kiểm tra để đảm bảo đơn h&agrave;ng được giao đ&uacute;ng mẫu m&atilde;, số lượng như đơn h&agrave;ng đ&atilde; đặt.&nbsp;<strong>Kh&ocirc;ng thử hay d&ugrave;ng thử sản phẩm.</strong></p>\r\n<p>Sau khi đồng &yacute; với m&oacute;n h&agrave;ng được giao đến, Qu&yacute; Kh&aacute;ch thanh to&aacute;n với nh&acirc;n vi&ecirc;n giao h&agrave;ng (trường hợp đơn h&agrave;ng được ship COD) v&agrave; nhận h&agrave;ng.</p>\r\n<p>Trường hợp Qu&yacute; Kh&aacute;ch kh&ocirc;ng ưng &yacute; với sản phẩm, Qu&yacute; Kh&aacute;ch c&oacute; thể từ chối nhận h&agrave;ng. Tại đ&acirc;y, ch&uacute;ng t&ocirc;i sẽ thu th&ecirc;m chi ph&iacute; ho&agrave;n h&agrave;ng, tương đương với ph&iacute; ship của đơn h&agrave;ng Qu&yacute; kh&aacute;ch đ&atilde; đặt.</p>\r\n<p><strong>Lưu &yacute;:</strong></p>\r\n<p>- Khi Qu&yacute; Kh&aacute;ch kiểm tra đơn h&agrave;ng, nh&acirc;n vi&ecirc;n giao nhận buộc phải đợi Qu&yacute; Kh&aacute;ch kiểm tra h&agrave;ng h&oacute;a b&ecirc;n trong g&oacute;i h&agrave;ng. Trường hợp nh&acirc;n vi&ecirc;n từ chối cho Qu&yacute; Kh&aacute;ch kiểm tra h&agrave;ng h&oacute;a, Qu&yacute; Kh&aacute;ch vui l&ograve;ng li&ecirc;n hệ với&nbsp;<strong>Baya.vn&nbsp;</strong>qua hotline: 1900 63 64 76 để được hỗ trợ.</p>\r\n<p>- baya.vn sẽ kh&ocirc;ng chịu tr&aacute;ch nhiệm về số lượng, mẫu m&atilde; cũng như lỗi của sản phẩm, sau khi đơn h&agrave;ng đ&atilde; được giao h&agrave;ng th&agrave;nh c&ocirc;ng.</p>\r\n<p>- Qu&yacute; Kh&aacute;ch tr&aacute;nh d&ugrave;ng vật sắc nhọn để mở g&oacute;i h&agrave;ng để tr&aacute;nh g&acirc;y hư hỏng cho sản phẩm b&ecirc;n trong. Đối với những trường hợp sản phẩm bị hư hỏng do lỗi từ ph&iacute;a Kh&aacute;ch h&agrave;ng, baya.vn rất tiếc kh&ocirc;ng thể hỗ trợ Qu&yacute; Kh&aacute;ch đổi/trả/bảo h&agrave;nh sản phẩm.</p>\r\n<p>&nbsp;</p>\r\n</div>', NULL, NULL, 0, 'page', 1, '2023-11-05 19:56:30', '2024-03-13 04:06:37', '3', NULL),
(9, 'Chi phí vận chuyển', 'chi-phi-van-chuyen', '<div class=\"content-pageDetail typeList-style\">\r\n<p style=\"text-align: center;\"><img src=\"//file.hstatic.net/200000796751/file/microsoftteams-image_5__2_1a5b76a30e154da080eccc75af0ad531_grande.png\" /></p>\r\n<p>&nbsp;</p>\r\n</div>', NULL, NULL, 0, 'page', 1, '2023-11-05 19:56:30', '2024-03-13 04:06:56', '3', NULL),
(10, 'Liên hệ', 'lien-he', '<div class=\"row widthContent\">\r\n<div class=\"col-lg-6 col-md-12 col-12 wrapbox-content-left\">\r\n<div class=\"box-info-contact\">\r\n<h2>Th&ocirc;ng tin li&ecirc;n hệ</h2>\r\n<div class=\"wrapbox-contact\">\r\n<ul class=\"infoList-contact row\">\r\n<li class=\"col-md-12 col-xs-12\">\r\n<p><strong>Địa chỉ</strong><br />Tầng 08, T&ograve;a nh&agrave; Pearl Plaza, Số 561A Điện Bi&ecirc;n Phủ, Phường 25, Quận B&igrave;nh Thạnh, Th&agrave;nh phố Hồ Ch&iacute; Minh</p>\r\n</li>\r\n<li class=\"col-md-12 col-xs-12\">\r\n<p><strong>Điện thoại</strong><br />1900 63 64 76</p>\r\n</li>\r\n</ul>\r\n<ul class=\"infoList-contact row\">\r\n<li class=\"col-md-12 col-xs-12\">\r\n<p><strong>Thời gian l&agrave;m việc</strong><br />Từ 8h00 đến 17h00 h&agrave;ng ng&agrave;y</p>\r\n</li>\r\n<li class=\"col-md-12 col-xs-12\">\r\n<p><strong>Email</strong><br />webshop@baya.vn</p>\r\n</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"box-send-contact\">\r\n<h2>Gửi thắc mắc cho ch&uacute;ng t&ocirc;i</h2>\r\n<p>Nếu bạn c&oacute; thắc mắc g&igrave;, c&oacute; thể gửi y&ecirc;u cầu cho ch&uacute;ng t&ocirc;i, v&agrave; ch&uacute;ng t&ocirc;i sẽ li&ecirc;n lạc lại với bạn sớm nhất c&oacute; thể .</p>\r\n<div id=\"col-left contactFormWrapper\"><form class=\"contact-form\" accept-charset=\"UTF-8\" action=\"/contact\" method=\"post\"><input name=\"form_type\" type=\"hidden\" value=\"contact\" /> <input name=\"utf8\" type=\"hidden\" value=\"✓\" />\r\n<div class=\"contact-form\">\r\n<div class=\"row\">\r\n<div class=\"col-sm-12 col-xs-12\">\r\n<div class=\"input-group\"><input class=\"form-control\" name=\"contact[name]\" required=\"\" type=\"text\" placeholder=\"T&ecirc;n của bạn\" aria-describedby=\"basic-addon1\" /></div>\r\n</div>\r\n<div class=\"col-sm-6 col-xs-12\">\r\n<div class=\"input-group\"><input class=\"form-control\" name=\"contact[email]\" required=\"\" type=\"text\" placeholder=\"Email của bạn\" aria-describedby=\"basic-addon1\" /></div>\r\n</div>\r\n<div class=\"col-sm-6 col-xs-12\">\r\n<div class=\"input-group\"><input class=\"form-control\" name=\"contact[phone]\" pattern=\"[0-9]{10,12}\" required=\"\" type=\"text\" placeholder=\"Số điện thoại của bạn\" aria-describedby=\"basic-addon1\" /></div>\r\n</div>\r\n<div class=\"col-sm-12 col-xs-12\">\r\n<div class=\"input-group\"><textarea name=\"contact[body]\" required=\"\" placeholder=\"Nội dung\"></textarea>\r\n<div class=\"sitebox-recaptcha \">This site is protected by reCAPTCHA and the Google <a href=\"https://policies.google.com/privacy\" target=\"_blank\" rel=\"noopener noreferrer\">Privacy Policy</a> and <a href=\"https://policies.google.com/terms\" target=\"_blank\" rel=\"noopener noreferrer\">Terms of Service</a> apply.</div>\r\n</div>\r\n</div>\r\n<div class=\"col-sm-12 col-xs-12\"><button class=\"button dark\">Gửi cho ch&uacute;ng t&ocirc;i</button></div>\r\n</div>\r\n</div>\r\n<input id=\"5449f9153b6044ce935b1d694932c66c\" name=\"g-recaptcha-response\" type=\"hidden\" value=\"03AFcWeA4IUvXFcw8aKGuBividoz-ba6dmBjlSs1w0YCT1ZEmhyt_023eRQY0oZZxCnQwF8AyKzgnDEBMSvHVOizWBscgQKt-0n92Vu2T4yE6IpD2SDQD7dhn55ncWNkccoR12OabQH6XAMMyTq0mZiU5uQT5YsxyzcivgIpe-VhBOyLoMz-ZprvYfFiMFiaWBPuQBxOTaR40rGDG4SvFucvIidtWEE7M68T3j5c7h5c0JJfvgaVCOnjIeYv__K2yeLO0eFwBs2rJD3qj46DyK_ACYDkFf-8SIjmn4nk3Zm3Tde_fzJ8MLa__djt8lagji0KObHcIhh-6C03vjwwSYAu12xXWLkbtZd1aIEm-u0_8b2Uu5sVMbssh_c8wPMMncPGE3QgjMwkoaKbNQ6MssR1N6IdgmdlRlb6t9-VLZkpLSYKJmT6YrZ3Nkzeg2onc5uJVzvKABnmzXdxhN-_zH156JwGgrpzumfJ8UdsM8LS-o8bUJHwJhaaR7JygCLm8JS9D9cPbQQBJKbA0YnmOqnEXzWSBRNwqbCk5u1oOGGtwQOp18uphhblbbQnH2YJvlM7fHbaqAoIkE20wicLQwSnDDZDA9-6ZoBa5oMqvP-YlsOwyNGHnoFYZI7YHg0FWJkm_-1Ltyhm5JH3sIQ8SahbFTIEzdw3ERin0_QRdKdOfV3NLrBFh1iRg\" />\r\n<script src=\"https://www.google.com/recaptcha/api.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-\"></script>\r\n<script>grecaptcha.ready(function() {grecaptcha.execute(\'6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-\', {action: \'submit\'}).then(function(token) {document.getElementById(\'5449f9153b6044ce935b1d694932c66c\').value = token;});});</script>\r\n</form></div>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-6 col-md-12 col-12 wrapbox-content-right\">\r\n<div class=\"box-map-contact\"><iframe style=\"border: 0;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.147746972798!2d106.71596897377519!3d10.799994008761107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529d7845738f3%3A0x6fd8270abc8b4947!2sPearl%20Plaza!5e0!3m2!1svi!2s!4v1698132372400!5m2!1svi!2s\" width=\"600\" height=\"450\" allowfullscreen=\"allowfullscreen\" loading=\"lazy\"></iframe></div>\r\n</div>\r\n</div>', NULL, NULL, 0, 'page', 1, '2023-11-05 19:56:30', '2024-03-29 07:23:10', '1', NULL),
(11, 'Giới thiệu', 'gioi-thieu', '<h2 style=\"text-align: center;\"><strong>C&Acirc;U CHUYỆN THƯƠNG HIỆU</strong></h2>\r\n<div style=\"text-align: center;\"><span style=\"font-size: 16px;\">Lấy cảm hứng từ lo&agrave;i chim được mệnh danh l&agrave; \"Kiến tr&uacute;c sư của thi&ecirc;n nhi&ecirc;n\", c&aacute;i t&ecirc;n BAYA đ&atilde; được lựa chọn để viết tiếp c&acirc;u chuyện cho thương hiệu nội thất h&agrave;ng đầu Việt Nam.</span></div>\r\n<div>&nbsp;</div>\r\n<div><span style=\"font-size: 16px;\"><strong>Tầm nh&igrave;n</strong>:&nbsp;Trở th&agrave;nh thương hiệu nội thất v&agrave; trang tr&iacute; h&agrave;ng đầu Việt Nam, g&oacute;p phần x&acirc;y dựng th&ecirc;m nhiều tổ ấm mỗi ng&agrave;y.<br /><strong>Sứ mệnh</strong>:&nbsp;Mang đến những sản phẩm v&agrave; dịch vụ thiết kế nội thất ph&ugrave; hợp nhất cho mọi người.</span></div>\r\n<div>&nbsp;</div>\r\n<div><span style=\"font-size: 16px;\"><em><strong>V&Igrave; SAO N&Ecirc;N CHỌN CH&Uacute;NG T&Ocirc;I?</strong></em></span></div>\r\n<div>&nbsp;</div>\r\n<div>\r\n<p><span style=\"color: #c51230;\"><span style=\"font-size: 16px;\"><strong>1. DỊCH VỤ HẬU M&Atilde;I HẤP DẪN</strong></span></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"color: #c51230;\"><span style=\"font-size: 16px;\"><strong>2. ĐỘI NGŨ NH&Acirc;N VI&Ecirc;N</strong></span></span></p>\r\n<p><span style=\"font-size: 16px;\">Tận t&acirc;m v&agrave; kh&ocirc;ng ngừng đổi mới với mong muốn mang lại dịch vụ tốt nhất cho kh&aacute;ch h&agrave;ng</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"color: #c51230;\"><span style=\"font-size: 16px;\"><strong>3. DỊCH VỤ TƯ VẤN &amp; THIẾT KẾ NỘI THẤT CHUY&Ecirc;N NGHIỆP</strong></span></span></p>\r\n<p><span style=\"font-size: 16px;\">Thiết kế v&agrave; thi c&ocirc;ng trọn g&oacute;i<br />Ph&iacute; thiết kế tốt nhất thị trường<br />Thời gian ho&agrave;n thiện nhanh 3-5 ng&agrave;y</span></p>\r\n<p><em><span style=\"font-size: 16px;\">* Đối với c&aacute;c c&ocirc;ng tr&igrave;nh sử dụng đồ c&oacute; sẵn tại BAYA *</span></em></p>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: center;\"><img src=\"//file.hstatic.net/200000796751/file/banner-ve-chung-toi_eb9db66f1e3848a49309a400671c6320_grande.jpg\" /></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><strong><span style=\"font-size: 16px;\">ĐỒNG H&Agrave;NH C&Ugrave;NG GIA Đ&Igrave;NH VIỆT</span></strong></p>\r\n<p style=\"text-align: justify;\"><em><span style=\"font-size: 16px;\">\"Trong suốt chặng đường 14 năm của m&igrave;nh, BAYA đ&atilde; c&oacute; cơ hội đồng h&agrave;nh c&ugrave;ng h&agrave;ng trăm ng&agrave;n kh&aacute;ch h&agrave;ng, chung tay dựng x&acirc;y n&ecirc;n những gia đ&igrave;nh tr&ecirc;n khắp Việt Nam. H&atilde;y c&ugrave;ng BAYA tiếp tục h&agrave;nh tr&igrave;nh kiến tạo n&ecirc;n những tổ ấm tươi đẹp, bởi đối với ch&uacute;ng t&ocirc;i, nh&agrave; kh&ocirc;ng chỉ l&agrave; nơi dừng ch&acirc;n m&agrave; c&ograve;n l&agrave; nơi nu&ocirc;i dưỡng những t&acirc;m hồn, nơi những gi&aacute; trị văn ho&aacute; Việt được kế thừa v&agrave; ph&aacute;t huy.\"</span></em></p>\r\n</div>', NULL, NULL, 0, 'page', 1, '2023-11-05 19:56:30', '2024-03-29 07:13:09', '1', NULL),
(12, 'page404', 'page404', '<div class=\"layout-pageNot\">\r\n<div class=\"container\">\r\n<div class=\"content-pagenot text-center\">\r\n<h1>404Kh&ocirc;ng t&igrave;m thấy trang</h1>\r\n<p class=\"subtext\">Trang bạn đang t&igrave;m kiếm c&oacute; thể đ&atilde; bị x&oacute;a, chuyển đi, thay đổi link hoặc chưa bao giờ tồn tại.</p>\r\n<p class=\"\"><a class=\"button\">TRỞ VỀ TRANG CHỦ</a></p>\r\n</div>\r\n</div>\r\n</div>', NULL, NULL, 0, 'page', 1, '2023-11-05 19:56:30', '2024-03-13 07:23:12', '0', NULL),
(13, 'HƯỚNG DẪN ĐO SIZE', 'huong-dan-do-size', '<h2 class=\"subhead-title\">C&Aacute;CH ĐO SIZE &Aacute;O NGỰC</h2>', 'https://shop.tdptechnology.vn/storage/files/1/danh mục/đo size.png', 1, 11, NULL, 1, '2023-12-12 05:37:17', '2024-03-29 07:09:39', '0', NULL),
(14, 'GIỚI THIỆU VỀ EDIFA', 'gioi-thieu-ve-edifa', '<div class=\"td-a-rec td-a-rec-id-content_top  tdi_2 td_block_template_1\">&nbsp;</div>\r\n<p>&nbsp;</p>\r\n<div class=\"td-a-rec td-a-rec-id-content_bottom  tdi_3 td_block_template_1\"><strong>C&Ocirc;NG TY CỔ PHẦN MAY EDIFA</strong></div>', 'https://shop.tdptechnology.vn/storage/files/1/danh mục/edifa blog1.png', 1, 4, NULL, 1, '2023-12-15 03:14:00', '2024-03-29 07:09:36', '0', NULL),
(15, 'QUY ĐỊNH ĐỔI HÀNG TẠI EDIFA', 'quy-dinh-doi-hang-tai-edifa', '<p><strong>QUY ĐỊNH ĐỔI H&Agrave;NG TẠI EDIFA</strong></p>', 'https://shop.tdptechnology.vn/storage/files/1/danh mục/doi-tra-hang.png', 1, 0, NULL, 1, '2023-12-18 09:33:17', '2024-03-12 17:43:29', '0', NULL),
(16, 'Bí Quyết Để Giữ Căn Bếp Luôn Gọn Gàng', 'bi-quyet-de-giu-can-bep-luon-gon-gang', '<h2 id=\"1__sap_xep_do_dac_co_to_chuc\"><strong><span style=\"font-size: 16px;\">1. Sắp xếp đồ đạc c&oacute; tổ chức</span></strong></h2>\r\n<p><span style=\"font-size: 16px;\">Đặt đồ d&ugrave;ng bếp c&ugrave;ng chức năng ở một nơi để l&agrave;m cho kh&ocirc;ng gian bếp tăng th&ecirc;m t&iacute;nh thẩm mỹ, thu h&uacute;t vừa gi&uacute;p cho mọi người trong gia đ&igrave;nh c&oacute; thể dễ d&agrave;ng t&igrave;m kiếm bất k&igrave; vật dụng n&agrave;o đ&oacute; khi c&oacute; nhu cầu.</span></p>\r\n<p><span style=\"font-size: 16px;\">Sắp xếp đồ d&ugrave;ng theo chiều dọc sẽ gi&uacute;p bạn tiết kiệm được một khoảng diện t&iacute;ch kh&aacute; rộng để c&oacute; thể d&agrave;nh b&agrave;y tr&iacute; những thứ quan trọng.</span></p>\r\n<p style=\"text-align: center;\"><img style=\"width: 342px; height: 237px;\" src=\"//file.hstatic.net/200000796751/file/345292973_199342406256364_781804_2474a94b6a5042bbb4160c8f326f35c5_grande.jpg\" /></p>\r\n<h2 id=\"2__su_dung_ke__gia_up_chen_dia__ong_dung_dao__thot_da_nang\"><strong><span style=\"font-size: 16px;\">2. Sử dụng kệ, gi&aacute; &uacute;p ch&eacute;n đĩa, ống đựng dao, thớt đa năng</span></strong></h2>\r\n<p><span style=\"font-size: 16px;\">Với những vật dụng cần thiết như ch&eacute;n b&aacute;t, dĩa th&igrave; bạn kh&ocirc;ng n&ecirc;n xếp theo kiểu truyền thống l&agrave; chồng l&ecirc;n nhau tr&ocirc;ng sẽ rất bề bộn v&agrave; dễ bị va đập. H&atilde;y sắm cho căn bếp của m&igrave;nh gi&aacute; &uacute;p ch&eacute;n đĩa hoặc lắp hệ tủ đựng ch&eacute;n đĩa để dựng đứng ch&uacute;ng l&ecirc;n. C&aacute;ch sắp xếp n&agrave;y vừa gi&uacute;p bạn c&oacute; thể dễ d&agrave;ng lấy đồ vừa gi&uacute;p g&oacute;c bếp gọn g&agrave;ng v&agrave; tinh tế hơn.</span></p>\r\n<p><span style=\"font-size: 16px;\">Muỗng, đũa cũng l&agrave; những vật dụng được sử dụng rất thường xuy&ecirc;n trong nh&agrave; bếp, để thuận tiện cho việc t&igrave;m kiếm v&agrave; dọn dẹp th&igrave; bạn c&oacute; thể tận dụng c&aacute;c hộc tủ bếp hoặc mua c&aacute;c ống đựng muỗng v&agrave; đũa để sắp xếp ch&uacute;ng thật gọn g&agrave;ng.</span></p>\r\n<p style=\"text-align: center;\"><img style=\"width: 332px; height: 332px;\" src=\"//file.hstatic.net/200000796751/file/293718591_1103946460499783_76977_13b3e560877b409b82ae255b3bf91804_grande.jpg\" /></p>\r\n<h2 id=\"3__rua_sach_dung_cu_an_uong_ngay_sau_khi_su_dung\"><strong><span style=\"font-size: 16px;\">3. Rửa sạch dụng cụ ăn uống ngay sau khi sử dụng</span></strong></h2>\r\n<p><span style=\"font-size: 16px;\">Sau khi nấu nướng, nhiều người c&oacute; th&oacute;i quen dồn dụng cụ bẩn v&agrave;o một chỗ v&agrave; chờ đến lần v&agrave;o bếp sau, thậm ch&iacute; l&agrave; v&agrave;i ng&agrave;y mới bắt đầu dọn rửa. Đ&acirc;y l&agrave; th&oacute;i quen kh&ocirc;ng khoa học, dễ tạo m&ocirc;i trường cho vi khuẩn g&acirc;y bệnh sinh s&ocirc;i nảy nở. Kh&ocirc;ng những thế, c&aacute;c nguy&ecirc;n liệu, thực phẩm&hellip; c&ograve;n s&oacute;t lại tr&ecirc;n dụng cụ cũng b&aacute;m chặt hơn, để c&agrave;ng l&acirc;u c&agrave;ng g&acirc;y kh&oacute; khăn cho việc l&agrave;m sạch.</span></p>\r\n<h2 id=\"4__lau_don_bep_ngay_khi_nau_xong\"><strong><span style=\"font-size: 16px;\">4. Lau dọn bếp ngay khi nấu xong</span></strong></h2>\r\n<p><span style=\"font-size: 16px;\">Trong qu&aacute; tr&igrave;nh nấu nướng, mặt bếp rất dễ bị dầu mỡ, thực phẩm&hellip; b&aacute;m v&agrave;o g&acirc;y mất vệ sinh. H&atilde;y lau dọn mặt bếp ngay sau khi nấu để đảm bảo khu vực n&agrave;y lu&ocirc;n sạch sẽ. Đừng để qu&aacute; l&acirc;u sẽ khiến c&aacute;c vết bẩn b&aacute;m d&iacute;nh hơn v&agrave; bạn sẽ phải mất nhiều c&ocirc;ng sức để dọn rửa, chưa kể c&ograve;n v&ocirc; c&ugrave;ng mất thẩm mỹ cho căn bếp.</span></p>\r\n<h2 id=\"5__kep_va_dan_nhan_do_dung_thua_hoac_dung_vao_hop_dung_thuc_pham\"><strong><span style=\"font-size: 16px;\">5. Kẹp v&agrave; d&aacute;n nh&atilde;n đồ d&ugrave;ng thừa hoặc đựng v&agrave;o hộp đựng thực phẩm</span></strong></h2>\r\n<p><span style=\"font-size: 16px;\">Đối với những thực phẩm hoặc nguy&ecirc;n liệu chế biến m&oacute;n ăn bị thừa lại th&igrave; bạn n&ecirc;n n&ecirc;n cho ch&uacute;ng v&agrave;o t&uacute;i nilong v&agrave; d&ugrave;ng kẹp cố đinh lại c&aacute;c khoảng hở hoặc cho v&agrave;o hộp đựng thực phẩm để gi&uacute;p bảo quản được l&acirc;u hơn.</span></p>\r\n<p><span style=\"font-size: 16px;\">Sau đ&oacute; bạn n&ecirc;n ghi d&aacute;n nh&atilde;n r&otilde; th&ocirc;ng tin về t&ecirc;n cũng như ng&agrave;y bảo quản để gi&uacute;p người nấu nướng c&oacute; thể định h&igrave;nh được khoảng thời gian sử dụng c&ograve;n lại của ch&uacute;ng v&agrave; kh&ocirc;ng mất qu&aacute; nhiều thời gian để t&igrave;m kiếm khi c&oacute; nhu cầu. Kế đ&oacute; sẽ sắp xếp c&aacute;c đồ d&ugrave;ng thừa sau khi đ&atilde; được kẹp k&iacute;n thật gọn g&agrave;ng, ngăn nắp trong gian bếp để căn bếp kh&ocirc;ng bị bừa bộn nh&eacute;.</span></p>\r\n<p style=\"text-align: center;\"><img style=\"width: 304px; height: 259px;\" src=\"//file.hstatic.net/200000796751/file/345322401_109098492169235_879849_ef6fa236ba3e47468df6b4a6b530ac27_grande.jpg\" /></p>\r\n<h2 id=\"6__su_dung_cac_moc__gia_treo_vat_dung\"><strong><span style=\"font-size: 16px;\">6. Sử dụng c&aacute;c m&oacute;c, gi&aacute; treo vật dụng</span></strong></h2>\r\n<p><span style=\"font-size: 16px;\">Một giải ph&aacute;p để gi&uacute;p kh&ocirc;ng gian bếp được rộng hơn đ&oacute; ch&iacute;nh l&agrave; sử dụng c&aacute;c loại m&oacute;c, gi&aacute; treo. Những vật dụng nhỏ thường được treo l&ecirc;n thay v&igrave; nh&eacute;t trong ngăn tủ sẽ rất kh&oacute; t&igrave;m kiếm mỗi khi c&oacute; nhu cầu sử dụng.</span></p>\r\n<p><span style=\"font-size: 16px;\">Chỉ cần kh&eacute;o l&eacute;o sử dụng m&oacute;c treo, bạn c&oacute; thể khiến căn bếp trở n&ecirc;n gọn g&agrave;ng hơn hẳn.&nbsp;</span></p>\r\n<p><span style=\"font-size: 16px;\">Một ưu điểm nửa của c&aacute;ch l&agrave;m n&agrave;y l&agrave; gi&aacute; th&agrave;nh của ch&uacute;ng rất rẻ lại dễ t&igrave;m mua v&agrave; dễ sử dụng, c&oacute; thể d&aacute;n ch&uacute;ng ở bất cứ đ&acirc;u bạn cảm thấy tiện lợi.</span></p>\r\n<p style=\"text-align: center;\"><img style=\"width: 283px; height: 283px;\" src=\"//file.hstatic.net/200000796751/file/318432167_478941394376904_191871_ee00211e40ce49a6bed3f9ae96ef8ef2_grande.jpg\" /></p>\r\n<h2 id=\"7__bo_tui_dung_rac_tai_vi_tri_thuong_xuyen_can_su_dung\"><strong><span style=\"font-size: 16px;\">7. Bỏ t&uacute;i đựng r&aacute;c tại vị tr&iacute; thường xuy&ecirc;n cần sử dụng</span></strong></h2>\r\n<p><span style=\"font-size: 16px;\">Trong qu&aacute; tr&igrave;nh nấu nướng, r&aacute;c thải nh&agrave; bếp c&oacute; thể xuất hiện li&ecirc;n tục qua c&aacute;c kh&acirc;u chế biến. H&atilde;y thay thế th&ugrave;ng r&aacute;c cố định trong bếp th&agrave;nh c&aacute;c t&uacute;i đựng r&aacute;c tiện nghi, linh hoạt. Bạn c&oacute; thể dễ d&agrave;ng treo ch&uacute;ng ở những vị tr&iacute; tiện lợi trong bếp, khi c&oacute; r&aacute;c, chỉ cần quay sang l&agrave; bỏ được ngay. Bạn cũng c&oacute; thể treo nhiều t&uacute;i để ph&acirc;n loại r&aacute;c trước khi gom ch&uacute;ng đi đổ.</span></p>\r\n<h2 id=\"8__loai_bo_nhung_vat_dung_khong_can_thiet_trong_bep\"><strong><span style=\"font-size: 16px;\">8. Loại bỏ những vật dụng kh&ocirc;ng cần thiết trong bếp</span></strong></h2>\r\n<p><span style=\"font-size: 16px;\">Để gi&uacute;p căn bếp trở n&ecirc;n gọn g&agrave;ng hơn th&igrave; bạn n&ecirc;n loại bỏ những vật dụng kh&ocirc;ng cần thiết trong gian bếp nhằm tạo th&ecirc;m nhiều khoảng kh&ocirc;ng gian trống d&ugrave;ng để bố tr&iacute; những dụng cụ nấu nướng thiết yếu.</span></p>\r\n<p><span style=\"font-size: 16px;\">Những gia vị, chai lọ hay c&aacute;c dụng cụ nồi, chảo &iacute;t sử dụng hoặc đ&atilde; hư hỏng v&agrave; kh&ocirc;ng c&ograve;n d&ugrave;ng đến nữa th&igrave; bạn n&ecirc;n di dời ch&uacute;ng ra khỏi căn bếp. C&aacute;ch sắp xếp nh&agrave; bếp gọn g&agrave;ng vừa tạo cảm gi&aacute;c tho&aacute;ng đ&atilde;ng, thoải m&aacute;i cho căn bếp vừa gi&uacute;p những người nội trợ thuận lợi hơn trong việc nấu nướng v&agrave; t&igrave;m kiếm đồ d&ugrave;ng đấy nh&eacute;.</span></p>\r\n<p><em><span style=\"font-size: 16px;\">Để c&oacute; một căn bếp đẹp, ngăn nắp th&igrave; đừng bỏ qua những b&iacute; quyết tr&ecirc;n nh&eacute;. Ch&uacute;c bạn n&acirc;ng cấp th&agrave;nh c&ocirc;ng căn bếp cho gia đ&igrave;nh m&igrave;nh. Tham khảo th&ecirc;m c&aacute;c vật dụng cần thiết cho ph&ograve;ng bếp tại <a href=\"https://baya.vn/collections/phu-kien-nha-bep-1\">Baya</a> nh&eacute;.&nbsp;</span></em></p>', 'https://file.hstatic.net/200000796751/article/blog_baya_bq_giu_can_bep_gon_gan_0f15bf82cfa945c884efdc1b49de28ec.jpg', 6, 7, NULL, 1, '2024-03-12 18:18:28', '2024-03-29 07:09:25', '0', 'Khu vực bếp là không gian quan trọng cho việc cả gia đình tận hưởng bữa ăn sau một ngày dài và là nơi để các chị em nội trợ chế biến ra những món ăn ngon. Một căn bếp gọn gàng và sạch sẽ không chỉ mang lại không khí thoải mái và thư giãn, mà còn đảm bảo cho mọi bữa ăn trở nên ngon miệng và chất lượng. Vì vậy, việc duy trì sự sạch sẽ, tổ chức khoa học trong không gian này là quan trọng để tiết kiệm thời gian, công sức và tối ưu hóa trải nghiệm nấu nướng cũng như thưởng thức bữa ăn.\r\n\r\nCùng note lại một vài bí quyết sau đây để giữ cho căn bếp luôn được gọn gàng, sạch đẹp nhé.'),
(17, 'Tips Trang Trí Góc Học Tập, Làm Việc Đẹp Và Khoa Học', 'tips-trang-tri-goc-hoc-tap-lam-viec-dep-va-khoa-hoc', '<h2 id=\"1__bo_tri_goc_hoc_tap_hieu_qua\"><span style=\"font-size: 16px;\"><strong>1. Bố tr&iacute; g&oacute;c học tập hiệu quả</strong></span></h2>\r\n<p><span style=\"font-size: 16px;\">G&oacute;c decor b&agrave;n l&agrave;m việc hiệu quả phải nằm trong một kh&ocirc;ng gian y&ecirc;n tĩnh với diện t&iacute;ch đủ rộng r&atilde;i, tạo cảm gi&aacute;c thoải m&aacute;i cho bạn khi học tập, l&agrave;m việc. Một g&oacute;c l&agrave;m việc nằm trong kh&ocirc;ng gian chật hẹp hay qu&aacute; rộng đều bất hợp l&yacute;, khiến bạn kh&ocirc;ng thể tập trung v&agrave; thường xuy&ecirc;n cảm thấy kh&oacute; chịu do căng thẳng, &aacute;p lực c&ocirc;ng việc. Bạn n&ecirc;n lưu &yacute; chọn g&oacute;c bố tr&iacute; b&agrave;n l&agrave;m việc của m&igrave;nh trong kh&ocirc;ng gian c&oacute; diện t&iacute;ch từ 2 - 4m2. Đ&acirc;y l&agrave; kiểu kh&ocirc;ng gian đủ rộng r&atilde;i v&agrave; l&yacute; tưởng cho ph&eacute;p bạn thể hiện c&aacute; t&iacute;nh s&aacute;ng tạo của ri&ecirc;ng m&igrave;nh.</span></p>\r\n<p><span style=\"font-size: 16px;\">Vị tr&iacute; đặt b&agrave;n l&agrave;m việc cũng l&agrave; một yếu tố quan trọng. Tr&aacute;nh bố tr&iacute; b&agrave;n ngay dưới ch&ugrave;m đ&egrave;n, x&agrave; ngang v&igrave; những vật dụng n&agrave;y dễ g&acirc;y ch&oacute;i mắt v&agrave; nhiệt lượng toả ra từ ch&uacute;ng c&oacute; thể khiến bạn &aacute;p lực v&agrave; kh&oacute; chịu. Đặt b&agrave;n cạnh cửa sổ l&agrave; &yacute; tưởng được nhiều người &aacute;p dụng bởi đ&acirc;y l&agrave; nơi đ&oacute;n gi&oacute; v&agrave; &aacute;nh s&aacute;ng tự nhi&ecirc;n, gi&uacute;p g&oacute;c học tập của bạn kho&aacute;c l&ecirc;n diện mạo mới tr&agrave;n đầy sức sống.&nbsp;</span></p>\r\n<p><span style=\"font-size: 16px;\">Đặc biệt, kh&ocirc;ng n&ecirc;n đặt b&agrave;n l&agrave;m việc đối diện điều h&ograve;a v&igrave; ngồi đối diện điều ho&agrave; khi đang học tập,l&agrave;m việc trong thời gian d&agrave;i sẽ ảnh hưởng đến sức khoẻ.</span></p>\r\n<p style=\"text-align: center;\"><img style=\"width: 400px; height: 349px;\" src=\"//file.hstatic.net/200000796751/file/387799923_653280303559770_947242_2532e3bd49a24ea2b72da6b6a533bfdc_grande.png\" /></p>\r\n<h2 id=\"2__sap_xep_do_vat_gon_gang\"><span style=\"font-size: 16px;\"><strong>2. Sắp xếp đồ vật gọn g&agrave;ng</strong></span></h2>\r\n<p><span style=\"font-size: 16px;\">Sắp xếp đồ d&ugrave;ng gọn g&agrave;ng l&agrave; nguy&ecirc;n tắc quan trọng cần phải tu&acirc;n thủ trong việc trang tr&iacute; nội thất. Đối với trang tr&iacute; b&agrave;n l&agrave;m việc cũng vậy, bạn nhất định kh&ocirc;ng thể bỏ qua yếu tố n&agrave;y. D&ugrave; lựa chọn c&aacute;ch decor b&agrave;n đẹp mắt n&agrave;o đi nữa nhưng vật dụng v&agrave; thiết bị lộn xộn, s&aacute;ch vở t&agrave;i liệu bừa bộn th&igrave; sẽ kh&ocirc;ng đạt được kết quả decor như mong muốn. Bởi sự gọn g&agrave;ng, ngăn nắp v&agrave; khoa học ch&iacute;nh l&agrave; một trong những yếu tố then chốt mang lại t&iacute;nh thẩm mỹ v&agrave; tiện nghi cho mọi g&oacute;c học tập, l&agrave;m việc.</span></p>\r\n<p><span style=\"font-size: 16px;\">Việc b&agrave;y biện, sắp xếp khu vực học tập, l&agrave;m việc kh&ocirc;ng chỉ tạo kh&ocirc;ng gian gọn g&agrave;ng, thoải m&aacute;i m&agrave; c&ograve;n tăng cảm hứng s&aacute;ng tạo v&agrave; khả năng tập trung.</span></p>\r\n<p style=\"text-align: center;\"><img style=\"width: 293px; height: 390px;\" src=\"//file.hstatic.net/200000796751/file/368230450_628387602715707_709821_8d504affe31a437ba4b43a40a253ea91_grande.png\" /></p>\r\n<h2 id=\"3__toi_gian_phu_kien\"><span style=\"font-size: 16px;\"><strong>3. Tối giản phụ kiện</strong></span></h2>\r\n<p><span style=\"font-size: 16px;\">Ch&uacute;ng ta cần chọn lọc một số đồ d&ugrave;ng cần thiết phục vụ cho việc học tập cũng như những phụ kiện decor ph&ugrave; hợp với sở th&iacute;ch của m&igrave;nh v&agrave; diện mạo căn ph&ograve;ng. Tr&aacute;nh lạm dụng qu&aacute; nhiều m&oacute;n đồ trang tr&iacute; khiến g&oacute;c decor b&agrave;n học trở n&ecirc;n rối mắt m&agrave; kh&ocirc;ng hề mang lại gi&aacute; trị thẩm mỹ như mong muốn.</span></p>\r\n<p><span style=\"font-size: 16px;\">Bổ sung th&ecirc;m bộ phụ kiện đựng t&agrave;i liệu, đồ d&ugrave;ng văn ph&ograve;ng phẩm sẽ gi&uacute;p bạn l&agrave;m việc của bạn th&ecirc;m s&aacute;ng sủa, gọn g&agrave;ng, khơi nguồn cảm hứng mỗi ng&agrave;y.</span></p>\r\n<p style=\"text-align: center;\"><img style=\"width: 411px; height: 274px;\" src=\"//file.hstatic.net/200000796751/file/428634499_731140102440456_359565_1455ae9b51ca46229afa141889e52e7a_grande.png\" /></p>\r\n<h2 id=\"4__loi_ich_cua_viec_trang_tri_goc_hoc_tap_dep__khoa_hoc\"><strong><span style=\"font-size: 16px;\">4. Lợi &iacute;ch của việc trang tr&iacute; g&oacute;c học tập đẹp, khoa học</span></strong></h2>\r\n<p><span style=\"font-size: 16px;\">Tạo sự thoải m&aacute;i.</span></p>\r\n<p><span style=\"font-size: 16px;\">Tạo sự hứng th&uacute;.</span></p>\r\n<p><span style=\"font-size: 16px;\">Tăng khả năng s&aacute;ng tạo.</span></p>\r\n<h2 id=\"5__mot_vai_cach_bay_tri_ban_lam_viec_theo_phong_thuy\"><strong><span style=\"font-size: 16px;\">5. Một v&agrave;i c&aacute;ch b&agrave;y tr&iacute; b&agrave;n l&agrave;m việc theo phong thủy</span></strong></h2>\r\n<p><span style=\"font-size: 16px;\">B&agrave;n l&agrave;m việc kh&ocirc;ng n&ecirc;n quay lưng với cửa ra v&agrave;o.</span></p>\r\n<p><span style=\"font-size: 16px;\">Lưng b&agrave;n phải c&oacute; điểm tựa, kh&ocirc;ng tạo lối đi ph&iacute;a sau.</span></p>\r\n<p><span style=\"font-size: 16px;\">Kh&ocirc;ng k&ecirc; b&agrave;n giữa ph&ograve;ng l&agrave;m việc.</span></p>\r\n<p><span style=\"font-size: 16px;\">Tr&aacute;nh đặt dưới đ&egrave;n ch&ugrave;m, x&agrave; ngang,&nbsp; quạt trần.</span></p>\r\n<p><span style=\"font-size: 16px;\">Tr&aacute;nh đặt đối diện với nh&agrave; vệ sinh.</span></p>\r\n<p><span style=\"font-size: 16px;\">Vị tr&iacute; đặt n&ecirc;n k&iacute;ch th&iacute;ch gi&aacute;c quan.</span></p>\r\n<p><strong><span style=\"font-size: 16px;\">Bạn nhớ lưu lại để sau n&agrave;y &aacute;p dụng t&acirc;n trang lại g&oacute;c học tập v&agrave; l&agrave;m việc của m&igrave;nh nh&eacute;, v&agrave; gh&eacute; Baya để trải nghiệm sản phẩm bạn nh&eacute;!</span></strong></p>', 'https://file.hstatic.net/200000796751/article/blog_baya_tt_goc_hoc_tap__lam_vi_d891632de9504a479aa647e560226b51.jpg', 6, 122, NULL, 1, '2024-03-12 18:36:13', '2025-03-07 16:28:40', '0', 'Những góc học tập, làm việc được bài trí một cách khoa học và thông minh, giúp cho công việc học tập của bạn thuận tiện hơn. Tuy nhiên, chúng ta thường sử dụng quá nhiều đồ vật trang trí không cần thiết tạo cho góc học tập của mình trở nên rối ren và mất đi tính thẩm mỹ. Góc học tập chỉ cần một số vật dụng đơn giản như tấm ảnh kỷ niệm, một vài món trang trí xinh xắn như đồng hồ, bình hoa nhỏ,... là đủ để tạo nên hồn cho góc làm việc của mình. Bạn đã có góc học tập, làm việc theo ý mình chưa? Nếu chưa thì hãy tham khảo các ý tưởng trang trí bàn làm việc dưới đây nhé.'),
(18, '10 Phong Cách Thiết Kế Phòng Tắm Đẹp và Hiện Đại', '10-phong-cach-thiet-ke-phong-tam-dep-va-hien-dai', '<div class=\"box-article-detail article-body article-table-contents typeList-style\">\r\n<p><span style=\"font-size: 16px;\">Trong thế giới ng&agrave;y c&agrave;ng hiện đại, <a href=\"https://baya.vn/collections/phu-kien-phong-tam\">ph&ograve;ng tắm</a> kh&ocirc;ng chỉ l&agrave; kh&ocirc;ng gian ri&ecirc;ng tư m&agrave; c&ograve;n l&agrave; nơi thể hiện phong c&aacute;ch v&agrave; gu thẩm mỹ c&aacute; nh&acirc;n. Từ sự tinh tế của phong c&aacute;ch tối giản đến sự sang trọng của phong c&aacute;ch cổ điển, mỗi phong c&aacute;ch mang lại một trải nghiệm v&agrave; cảm x&uacute;c kh&aacute;c nhau. H&atilde;y c&ugrave;ng kh&aacute;m ph&aacute; 10 phong c&aacute;ch thiết kế ph&ograve;ng tắm đẹp v&agrave; hiện đại để t&igrave;m ra nguồn cảm hứng cho kh&ocirc;ng gian sống của bạn.</span></p>\r\n<p>&nbsp;</p>\r\n<h2 id=\"phong_cach_toi_gian__minimalism_\"><strong><span style=\"font-size: 16px;\">Phong c&aacute;ch Tối giản (Minimalism)</span></strong></h2>\r\n<div>\r\n<p style=\"text-align: center;\"><img style=\"width: 437px; height: 657px;\" src=\"//file.hstatic.net/200000796751/file/7278142bc7d38733e637775e7fb67dbf_e1ca89944e2347e99cb23f980bcd63de_grande.jpg\" /></p>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 16px;\">Phong c&aacute;ch tối giản l&agrave; sự kết hợp giữa đơn giản v&agrave; hiện đại. Với gam m&agrave;u trung t&iacute;nh như trắng, x&aacute;m, đen, kh&ocirc;ng gian ph&ograve;ng tắm trở n&ecirc;n thanh lịch v&agrave; tinh tế. Nội thất thường được thiết kế mượt m&agrave;, kh&ocirc;ng cầu kỳ, nhấn mạnh v&agrave;o sự gọn g&agrave;ng v&agrave; tiện &iacute;ch. Sự đơn giản n&agrave;y gi&uacute;p kh&ocirc;ng gian <a href=\"https://baya.vn/collections/phu-kien-phong-tam\">ph&ograve;ng tắm</a> trở n&ecirc;n rộng r&atilde;i, dễ d&agrave;ng vệ sinh v&agrave; bảo tr&igrave;.</span></p>\r\n<p>&nbsp;</p>\r\n<h2 id=\"phong_cach_co_dien__classic_\"><strong><span style=\"font-size: 16px;\">Phong c&aacute;ch Cổ điển (Classic)</span></strong></h2>\r\n<div>\r\n<p style=\"text-align: center;\"><img src=\"//file.hstatic.net/200000796751/file/99c1144ed24f685b53507b97657dc0df_6044a22ea54e4fc281f959e1648a8a30_grande.jpg\" /></p>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 16px;\">Phong c&aacute;ch cổ điển lấy cảm hứng từ c&aacute;c kiến tr&uacute;c cổ k&iacute;nh, sang trọng của ch&acirc;u &Acirc;u. Sự kết hợp giữa đ&aacute; cẩm thạch, đồng, v&agrave;ng v&agrave; gỗ mang đến một kh&ocirc;ng gian nguy nga, tr&aacute;ng lệ. C&aacute;c chi tiết như ch&acirc;n cột, viền trang tr&iacute;, đ&egrave;n ch&ugrave;m tinh xảo l&agrave;m t&ocirc;n l&ecirc;n vẻ đẹp cổ k&iacute;nh. Phong c&aacute;ch n&agrave;y phản &aacute;nh sự sang trọng, qu&yacute; ph&aacute;i v&agrave; vẻ đẹp vượt thời gian.</span></p>\r\n<p>&nbsp;</p>\r\n<h2 id=\"phong_cach_hien_dai__modern_\"><strong><span style=\"font-size: 16px;\">Phong c&aacute;ch Hiện đại (Modern)</span></strong></h2>\r\n<div>\r\n<p style=\"text-align: center;\"><img style=\"width: 437px; height: 657px;\" src=\"//file.hstatic.net/200000796751/file/915a250ba42c13913e9b9072ebbac2df_03cc5c36aa3046388bf9a905fb992850_grande.jpg\" /></p>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 16px;\">Phong c&aacute;ch hiện đại tập trung v&agrave;o sự đơn giản nhưng mạnh mẽ với c&aacute;c đường n&eacute;t sắc sảo v&agrave; h&igrave;nh khối r&otilde; r&agrave;ng. M&agrave;u sắc thường được giữ ở mức tối giản, kết hợp với chất liệu như k&iacute;nh, th&eacute;p kh&ocirc;ng gỉ, v&agrave; b&ecirc; t&ocirc;ng m&agrave;i để tạo n&ecirc;n sự mạnh mẽ, t&aacute;o bạo. Tạo ra một kh&ocirc;ng gian mở, s&aacute;ng sủa v&agrave; v&ocirc; c&ugrave;ng tiện nghi.</span></p>\r\n<h2 id=\"\">&nbsp;</h2>\r\n<h2 id=\"phong_cach_scandinavian__bac_au_\"><strong><span style=\"font-size: 16px;\">Phong c&aacute;ch Scandinavian (Bắc &Acirc;u)</span></strong></h2>\r\n<div>\r\n<p style=\"text-align: center;\"><img src=\"//file.hstatic.net/200000796751/file/77790637a0528fa3aa8f1a77c74d0503_66510ff7e91943afbfcc845b2acf68f3_grande.jpg\" /></p>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 16px;\">Phong c&aacute;ch Scandinavian mang đến sự ấm &aacute;p, th&acirc;n thiện với sử dụng gỗ tự nhi&ecirc;n, m&agrave;u sắc nhẹ nh&agrave;ng như trắng, x&aacute;m, v&agrave; c&aacute;c sắc m&agrave;u pastel. Thiết kế thường đơn giản, nhưng mỗi chi tiết đều được chăm ch&uacute;t tỉ mỉ, mang đến cảm gi&aacute;c thoải m&aacute;i v&agrave; thư th&aacute;i. Kh&ocirc;ng gian trở n&ecirc;n ấm c&uacute;ng v&agrave; gần gũi, ph&ugrave; hợp với những ai y&ecirc;u th&iacute;ch sự nhẹ nh&agrave;ng v&agrave; tinh tế.</span></p>\r\n<p>&nbsp;</p>\r\n<h2 id=\"phong_cach_vintage\"><strong><span style=\"font-size: 16px;\">Phong c&aacute;ch Vintage</span></strong></h2>\r\n<div>\r\n<p style=\"text-align: center;\"><img src=\"//file.hstatic.net/200000796751/file/92400013379e826410e5c535b77cde36_b4f0d2b833684b00bcc1329a068e33c6_grande.jpg\" /></p>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 16px;\">Vintage l&agrave; sự ho&agrave;i niệm về qu&aacute; khứ với những đồ nội thất mang phong c&aacute;ch cũ, những chiếc bồn tắm ch&acirc;n quỳ cổ điển&nbsp;v&agrave; c&aacute;c phụ kiện trang tr&iacute; đậm chất nghệ thuật. Mỗi chi tiết đều mang một c&acirc;u chuyện ri&ecirc;ng, tạo n&ecirc;n một kh&ocirc;ng gian đầy ấn tượng v&agrave; c&aacute; t&iacute;nh. Tạo n&ecirc;n một kh&ocirc;ng gian ph&ograve;ng tắm độc đ&aacute;o v&agrave; đầy cảm x&uacute;c.</span></p>\r\n<p>&nbsp;</p>\r\n<h2 id=\"phong_cach_dia_trung_hai__mediterranean_\"><strong><span style=\"font-size: 16px;\">Phong c&aacute;ch Địa Trung Hải (Mediterranean)</span></strong></h2>\r\n<div>\r\n<p style=\"text-align: center;\"><img style=\"width: 497px; height: 497px;\" src=\"//file.hstatic.net/200000796751/file/f66e6e5452440d95726adf7bbf7202fb_37bf010baf2a4170911f767340632e3f_grande.jpg\" /></p>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 16px;\">Phong c&aacute;ch Địa Trung Hải gợi nhớ đến bầu kh&ocirc;ng kh&iacute; m&aacute;t mẻ của biển cả với m&agrave;u sắc tươi s&aacute;ng như xanh dương, trắng&nbsp;v&agrave; v&agrave;ng. Gạch mosaic, s&agrave;n gỗ hoặc gạch terracotta, c&ugrave;ng với c&acirc;y xanh v&agrave; &aacute;nh s&aacute;ng tự nhi&ecirc;n tạo n&ecirc;n một kh&ocirc;ng gian tươi mới, tho&aacute;ng đ&atilde;ng. Mang đến cảm gi&aacute;c thoải m&aacute;i, thư gi&atilde;n như đang nghỉ m&aacute;t tại một v&ugrave;ng biển đẹp.</span></p>\r\n<p>&nbsp;</p>\r\n<h2 id=\"phong_cach_zen\"><strong><span style=\"font-size: 16px;\">Phong c&aacute;ch Zen</span></strong></h2>\r\n<div>\r\n<p style=\"text-align: center;\"><img style=\"width: 483px; height: 644px;\" src=\"//file.hstatic.net/200000796751/file/b1b57501e56de59ce74b6a3f743ee4f8_c8355e0233f1478a966d3eca735be244_grande.jpg\" /></p>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 16px;\">Phong c&aacute;ch Zen ch&uacute; trọng v&agrave;o việc tạo ra một kh&ocirc;ng gian tĩnh lặng, h&ograve;a m&igrave;nh với thi&ecirc;n nhi&ecirc;n. Sự kết hợp giữa đ&aacute; tự nhi&ecirc;n, gỗ, c&aacute;c yếu tố nước mang đến sự c&acirc;n bằng v&agrave; h&agrave;i h&ograve;a. &Aacute;nh s&aacute;ng tự nhi&ecirc;n v&agrave; c&aacute;c chi tiết trang tr&iacute; như c&acirc;y cảnh, tượng Phật nhẹ nh&agrave;ng tạo n&ecirc;n một kh&ocirc;ng gian thư gi&atilde;n tuyệt vời. Ph&ograve;ng tắm kh&ocirc;ng chỉ l&agrave; nơi chăm s&oacute;c cơ thể m&agrave; c&ograve;n l&agrave; nơi nu&ocirc;i dưỡng t&acirc;m hồn.</span></p>\r\n<p>&nbsp;</p>\r\n<h2 id=\"phong_cach_cong_nghiep__industrial_\"><strong><span style=\"font-size: 16px;\">Phong c&aacute;ch C&ocirc;ng nghiệp (Industrial)</span></strong></h2>\r\n<div>\r\n<p style=\"text-align: center;\"><img style=\"width: 474px; height: 632px;\" src=\"//file.hstatic.net/200000796751/file/eb0e691c217a9315da3cfe4f25ee69bc_1c6d50adb5a143baa3f4695bdddbd2ee_grande.jpg\" /></p>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 16px;\">Phong c&aacute;ch c&ocirc;ng nghiệp l&agrave; sự kết hợp giữa c&aacute;i th&ocirc; mạnh của b&ecirc; t&ocirc;ng, kim loại v&agrave; gạch th&ocirc; với thiết kế hiện đại. C&aacute;c ống nước, d&acirc;y điện được để lộ tạo n&ecirc;n sự c&aacute; t&iacute;nh v&agrave; độc đ&aacute;o. Phong c&aacute;ch n&agrave;y mang lại một kh&ocirc;ng gian đầy sức sống v&agrave; mới mẻ, ph&ugrave; hợp với những người y&ecirc;u th&iacute;ch sự ph&aacute; c&aacute;ch.</span></p>\r\n<p>&nbsp;</p>\r\n<h2 id=\"phong_cach_bohemian\"><strong><span style=\"font-size: 16px;\">Phong c&aacute;ch Bohemian</span></strong></h2>\r\n<div>\r\n<p style=\"text-align: center;\"><img style=\"width: 465px; height: 677px;\" src=\"//file.hstatic.net/200000796751/file/91aea2b847e313a84620ad72d59327b5_8ef5b82a6c394bdcbd831495e9bb14e5_grande.jpg\" /></p>\r\n</div>\r\n<h2 id=\"\">&nbsp;</h2>\r\n<p><span style=\"font-size: 16px;\">Bohemian l&agrave; sự tự do trong việc sử dụng m&agrave;u sắc, hoa văn v&agrave; chất liệu. Phong c&aacute;ch n&agrave;y thường kết hợp những tấm thảm đa sắc, gối trang tr&iacute; nhiều m&agrave;u sắc&nbsp;v&agrave; c&aacute;c phụ kiện nghệ thuật độc đ&aacute;o. Tạo n&ecirc;n một kh&ocirc;ng gian nghệ thuật, tự do v&agrave; đầy s&aacute;ng tạo.</span></p>\r\n<div>&nbsp;</div>\r\n<div>\r\n<h2 id=\"phong_cach_rustic\"><span style=\"font-size: 16px;\"><strong>Phong c&aacute;ch Rustic</strong></span></h2>\r\n<div>\r\n<p style=\"text-align: center;\"><img style=\"width: 474px; height: 711px;\" src=\"//file.hstatic.net/200000796751/file/2b70e1c96d7975c747f499c40c6b29e0_0222cea5143c4c5d98d449b23bb29c72_grande.jpg\" /></p>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 16px;\">Phong c&aacute;ch Rustic l&agrave; phong c&aacute;ch thiết kế nội thất v&agrave; kiến tr&uacute;c đặc trưng sử dụng c&aacute;c chất liệu tự nhi&ecirc;n như gỗ th&ocirc;, đ&aacute; v&agrave; kim loại. Điểm nổi bật của phong c&aacute;ch n&agrave;y l&agrave; việc tạo ra kh&ocirc;ng gian ấm c&uacute;ng, gần gũi v&agrave; th&ocirc; mộc.</span></p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<p><span style=\"font-size: 16px;\">Mỗi phong c&aacute;ch thiết kế ph&ograve;ng tắm mang lại một trải nghiệm ri&ecirc;ng biệt. Hy vọng rằng, qua 10 gợi &yacute; tr&ecirc;n, bạn c&oacute; thể t&igrave;m ra phong c&aacute;ch ph&ugrave; hợp nhất với c&aacute; t&iacute;nh v&agrave; nhu cầu của m&igrave;nh, biến ph&ograve;ng tắm th&agrave;nh một kh&ocirc;ng gian nghệ thuật, thư gi&atilde;n v&agrave; tiện nghi.</span></p>\r\n</div>', 'https://file.hstatic.net/200000796751/article/10_phong_cach_thiet_ke_ddepjj_va_hien_dai_f6f7df446bc44fb8afa05035b42fa4ed.jpg', 6, 4, NULL, 1, '2024-03-12 18:37:18', '2024-03-13 03:24:00', '0', 'Trong thế giới ngày càng hiện đại, phòng tắm không chỉ là không gian riêng tư mà còn là nơi thể hiện phong cách và gu thẩm mỹ cá nhân. Từ sự tinh tế của phong cách tối giản đến sự sang trọng của phong cách cổ điển, mỗi phong cách mang lại một trải nghiệm và cảm xúc khác nhau. Hãy cùng khám phá 10 phong cách thiết kế phòng tắm đẹp và hiện đại để tìm ra nguồn cảm hứng cho không gian sống của bạn.');
INSERT INTO `posts` (`id`, `title`, `slug`, `content`, `photo`, `added_by`, `views`, `type`, `status`, `created_at`, `updated_at`, `category`, `description`) VALUES
(19, 'Khám Phá Phong Cách Nội Thất Bắc Âu - Scandinavia', 'kham-pha-phong-cach-noi-that-bac-au---scandinavia', '<div class=\"box-article-detail article-body article-table-contents typeList-style\">\r\n<p><span style=\"font-size: 16px;\">Phong c&aacute;ch nội thất Bắc &Acirc;u, hay c&ograve;n gọi l&agrave; phong c&aacute;ch Scandinavia bắt nguồn từ c&aacute;c nước Bắc &Acirc;u như Đan Mạch, Na Uy, Thụy Điển v&agrave;o những năm 1950. Phong c&aacute;ch Scandinavia&nbsp;đ&atilde; trở th&agrave;nh một trong những xu hướng thiết kế nổi bật tr&ecirc;n thế giới.&nbsp;</span></p>\r\n<p><span style=\"font-size: 16px;\">Với sự đơn giản, tinh tế v&agrave; gần gũi với thi&ecirc;n nhi&ecirc;n, phong c&aacute;ch Scandinavia kh&ocirc;ng chỉ mang lại vẻ đẹp thẩm mỹ m&agrave; c&ograve;n tạo ra kh&ocirc;ng gian sống thoải m&aacute;i v&agrave; tiện nghi.</span></p>\r\n<p>&nbsp;</p>\r\n<h2 id=\"su_gian_don_va_tinh_te\"><strong><span style=\"font-size: 16px;\">Sự Giản Đơn v&agrave; Tinh Tế</span></strong></h2>\r\n<div>\r\n<p style=\"text-align: center;\"><img style=\"width: 533px; height: 800px;\" src=\"//file.hstatic.net/200000796751/file/82128c03a6c8c06251e206650c62e8a9_1c095ab9d6774148a1ed73a8cd06b84e_grande.jpg\" /></p>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 16px;\">Phong c&aacute;ch Scandinavia đề cao sự giản đơn v&agrave; tinh tế. Mỗi m&oacute;n đồ nội thất đều được thiết kế với đường n&eacute;t tinh tế, đơn giản v&agrave; kh&ocirc;ng cầu kỳ. Điều n&agrave;y kh&ocirc;ng những gi&uacute;p kh&ocirc;ng gian trở n&ecirc;n rộng r&atilde;i, tho&aacute;ng đ&atilde;ng m&agrave; c&ograve;n tạo cảm gi&aacute;c nhẹ nh&agrave;ng, y&ecirc;n b&igrave;nh.</span></p>\r\n<h3 id=\"\">&nbsp;</h3>\r\n<h2 id=\"anh_sang_tu_nhien_va_mau_sac_trung_tinh\"><strong><span style=\"font-size: 16px;\">&Aacute;nh S&aacute;ng Tự Nhi&ecirc;n v&agrave; M&agrave;u Sắc Trung T&iacute;nh</span></strong></h2>\r\n<div>\r\n<p style=\"text-align: center;\"><img style=\"width: 536px; height: 714px;\" src=\"//file.hstatic.net/200000796751/file/30a865ebba27e057e9739565e9de09c2_49786738927746bcb2a30e8878a1322d_grande.jpg\" /></p>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 16px;\">Trong phong c&aacute;ch Scandinavia, việc tận dụng &aacute;nh s&aacute;ng tự nhi&ecirc;n l&agrave; một yếu tố quan trọng. Cửa sổ lớn, thường kh&ocirc;ng che bởi r&egrave;m d&agrave;y, cho ph&eacute;p &aacute;nh s&aacute;ng tự nhi&ecirc;n tr&agrave;n ngập kh&ocirc;ng gian. M&agrave;u sắc chủ đạo thường l&agrave; trắng, x&aacute;m, be&nbsp;v&agrave; c&aacute;c t&ocirc;ng m&agrave;u gỗ nhẹ, mang lại cảm gi&aacute;c ấm c&uacute;ng nhưng kh&ocirc;ng k&eacute;m phần hiện đại.</span></p>\r\n<p>&nbsp;</p>\r\n<h2 id=\"chat_lieu_tu_nhien_va_than_thien_voi_moi_truong\"><strong><span style=\"font-size: 16px;\">Chất Liệu Tự Nhi&ecirc;n v&agrave; Th&acirc;n Thiện với M&ocirc;i Trường</span></strong></h2>\r\n<div>\r\n<p style=\"text-align: center;\"><img style=\"width: 535px; height: 668px;\" src=\"//file.hstatic.net/200000796751/file/0eb58cf2226e592e660c7f876154127b_8ec7eba7768f479e975583a54410d310_grande.jpg\" /></p>\r\n</div>\r\n<p><span style=\"font-size: 16px;\">Phong c&aacute;ch n&agrave;y ưu ti&ecirc;n sử dụng chất liệu tự nhi&ecirc;n như gỗ, len, da v&agrave; đ&aacute;. Sự kết hợp h&agrave;i h&ograve;a giữa c&aacute;c chất liệu n&agrave;y kh&ocirc;ng chỉ mang lại vẻ đẹp tự nhi&ecirc;n m&agrave; c&ograve;n th&acirc;n thiện với m&ocirc;i trường.</span></p>\r\n<p>&nbsp;</p>\r\n<h2 id=\"ung_dung_trong_khong_gian_song_hien_dai\"><strong><span style=\"font-size: 16px;\">Ứng Dụng Trong Kh&ocirc;ng Gian Sống Hiện Đại</span></strong></h2>\r\n<div>\r\n<p style=\"text-align: center;\"><img style=\"width: 547px; height: 639px;\" src=\"//file.hstatic.net/200000796751/file/aa3245fc9c6edb3db3639019b4144c24_b0680b7f68464527ba36f316d04411f5_grande.jpg\" /></p>\r\n</div>\r\n<div>&nbsp;</div>\r\n<p><span style=\"font-size: 16px;\">Phong c&aacute;ch Scandinavia rất linh hoạt v&agrave; c&oacute; thể &aacute;p dụng trong nhiều loại kh&ocirc;ng gian sống kh&aacute;c nhau, từ căn hộ chung cư nhỏ đến nh&agrave; ri&ecirc;ng rộng lớn.</span></p>\r\n<p>&nbsp;</p>\r\n<h3 id=\"phong_khach\"><strong><span style=\"font-size: 16px;\">Ph&ograve;ng Kh&aacute;ch</span></strong></h3>\r\n<div>\r\n<p style=\"text-align: center;\"><img style=\"width: 542px; height: 677px;\" src=\"//file.hstatic.net/200000796751/file/4dd986e6dbe3603dd8283eefc5fb015a_0b4846d8de574c498589d625d7053243_grande.jpg\" /></p>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 16px;\">Trong ph&ograve;ng kh&aacute;ch, ghế sofa thấp, b&agrave;n c&agrave; ph&ecirc; đơn giản v&agrave; kệ s&aacute;ch mở l&agrave; những lựa chọn phổ biến. Sự kết hợp giữa đồ nội thất chức năng v&agrave; trang tr&iacute; tối giản như tranh ảnh, đ&egrave;n trang tr&iacute;, tạo n&ecirc;n một kh&ocirc;ng gian sống đầy t&iacute;nh nghệ thuật nhưng kh&ocirc;ng k&eacute;m phần thoải m&aacute;i.</span></p>\r\n<p>&nbsp;</p>\r\n<h3 id=\"phong_ngu\"><strong><span style=\"font-size: 16px;\">Ph&ograve;ng Ngủ</span></strong></h3>\r\n<div>\r\n<p style=\"text-align: center;\"><img style=\"width: 551px; height: 826px;\" src=\"//file.hstatic.net/200000796751/file/2ecdf287fd5aa977a2b597dce080da73_1ad73a564cc44dd2bbe1c69b3226b827_grande.jpg\" /></p>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 16px;\">Ph&ograve;ng ngủ theo phong c&aacute;ch Scandinavia thường tập trung v&agrave;o sự thoải m&aacute;i v&agrave; y&ecirc;n tĩnh. Giường thấp, chăn ga gối đệm m&agrave;u sắc nhẹ nh&agrave;ng, c&ugrave;ng với &aacute;nh s&aacute;ng dịu nhẹ từ đ&egrave;n ngủ, tạo n&ecirc;n một kh&ocirc;ng gian thư gi&atilde;n l&yacute; tưởng.</span></p>\r\n<p>&nbsp;</p>\r\n<h3 id=\"khong_gian_lam_viec\"><strong><span style=\"font-size: 16px;\">Kh&ocirc;ng Gian L&agrave;m Việc</span></strong></h3>\r\n<div>\r\n<p style=\"text-align: center;\"><img style=\"width: 551px; height: 826px;\" src=\"//file.hstatic.net/200000796751/file/07abbee452e6475d6b68361a562ee4b6_534baf487a09468eaa3ddfeb82294b67_grande.jpg\" /></p>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 16px;\">Khu vực l&agrave;m việc thường được thiết kế gọn g&agrave;ng, ngăn nắp với b&agrave;n l&agrave;m việc đơn giản v&agrave; kệ s&aacute;ch. Sự kết hợp giữa chức năng v&agrave; thẩm mỹ gi&uacute;p tạo ra một kh&ocirc;ng gian l&agrave;m việc hiệu quả v&agrave; thoải m&aacute;i.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 16px;\">Phong c&aacute;ch nội thất Scandinavia kh&ocirc;ng chỉ l&agrave; một xu hướng thời thượng m&agrave; c&ograve;n l&agrave; biểu hiện của lối sống hiện đại: tối giản nhưng kh&ocirc;ng k&eacute;m phần tinh tế v&agrave; thoải m&aacute;i. N&oacute; l&agrave; sự lựa chọn l&yacute; tưởng cho những ai y&ecirc;u th&iacute;ch sự đơn giản, hiện đại v&agrave; muốn tạo ra một kh&ocirc;ng gian sống gần gũi với thi&ecirc;n nhi&ecirc;n v&agrave; th&acirc;n thiện với m&ocirc;i trường.</span></p>\r\n</div>', 'https://file.hstatic.net/200000796751/article/kham_pha_phong_cach_bac_au-scandinavia_3d8237249a07410695844b8733c3a519.jpg', 6, 24, NULL, 1, '2024-03-12 18:39:07', '2025-03-06 13:11:12', '0', 'Phong cách nội thất Bắc Âu, hay còn gọi là phong cách Scandinavia bắt nguồn từ các nước Bắc Âu như Đan Mạch, Na Uy, Thụy Điển vào những năm 1950. Phong cách Scandinavia đã trở thành một trong những xu hướng thiết kế nổi bật trên thế giới. \r\n\r\nVới sự đơn giản, tinh tế và gần gũi với thiên nhiên, phong cách Scandinavia không chỉ mang lại vẻ đẹp thẩm mỹ mà còn tạo ra không gian sống thoải mái và tiện nghi.'),
(20, 'Hệ thống cửa hàng', 'he-thong-cua-hang', '<div class=\"wrapbox-content\">\r\n<div class=\"heading-pageDetail\">\r\n<div class=\"container\">\r\n<h1 class=\"text-center\">Hệ thống cửa h&agrave;ng</h1>\r\n</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col-lg-4 col-md-12 col-12 wrapbox-left\">\r\n<div class=\"wrapbox-info\">\r\n<h2>Cửa h&agrave;ng</h2>\r\n<div id=\"store-info\" class=\"box-content boxscroll\">\r\n<div class=\"store-item\">\r\n<h3 class=\"store--name\">EDIFA</h3>\r\n<p class=\"store--address\">L&ocirc; 26.1-05 đường Nguyễn Đ&igrave;nh Bể, Phường T&acirc;n B&igrave;nh, Th&agrave;nh phố Hải Dương</p>\r\n<p class=\"store--time\">Thời gian hoạt động: 9h00 - 21h00 (kể cả CN v&agrave; ng&agrave;y lễ)</p>\r\n<p class=\"store--hotline\">Điện thoại: 0904045266</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-8 col-md-12 col-12 wrapbox-right\">\r\n<div id=\"boxMap\" class=\"box-map\"><iframe style=\"border: 0;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.3801353890367!2d105.7754283739336!3d21.01747058816873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454aa441737ff%3A0x94bc7c979a4ddb08!2zQkFZQSBN4bu5IMSQw6xuaA!5e0!3m2!1svi!2s!4v1706849503792!5m2!1svi!2s\" width=\"600\" height=\"450\" allowfullscreen=\"allowfullscreen\" loading=\"lazy\"></iframe></div>\r\n</div>\r\n</div>\r\n</div>', NULL, 1, 0, 'page', 1, '2024-03-13 04:08:38', '2024-03-29 08:52:11', '1', NULL),
(21, 'Blogs', 'tin-tuc', NULL, NULL, 1, 0, 'page', 1, '2024-03-13 04:10:56', '2024-03-13 07:18:40', '1', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `type_init` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int NOT NULL DEFAULT '0',
  `option_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `photo` text COLLATE utf8mb4_unicode_ci,
  `photo_size` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `brand_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `sku`, `pos`, `type_init`, `type`, `price`, `option_image`, `photo`, `photo_size`, `description`, `brand_id`, `status`, `created_at`, `updated_at`) VALUES
(61, 'Quần lót nữ Lorencia Q25', 'quan-lot-nu-lorencia-q25', 'Q25', '1', NULL, NULL, 0, '0', 'http://127.0.0.1:8000/storage/files/11/67cb1cdcca7d6.jpeg', NULL, '<article class=\"4ever-article\" data-clipboard-cangjie=\"[&quot;root&quot;,{&quot;copyFrom&quot;:788834159},[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(15, 15, 15)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:12,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;Chắc chắn bạn sẽ y&ecirc;u th&iacute;ch sự thoải m&aacute;i v&agrave; quyến rũ khi trải nghiệm Quần L&oacute;t Nữ &quot;],[&quot;span&quot;,{&quot;bold&quot;:true,&quot;color&quot;:&quot;rgb(15, 15, 15)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:14,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;LORENCIA&quot;],[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(15, 15, 15)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:12,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot; của ch&uacute;ng t&ocirc;i! Với chất liệu si&ecirc;u mềm v&agrave; co gi&atilde;n, chiếc quần l&oacute;t n&agrave;y kh&ocirc;ng chỉ mang lại cảm gi&aacute;c &ecirc;m &aacute;i m&agrave; c&ograve;n &ocirc;m s&aacute;t v&oacute;c d&aacute;ng của bạn một c&aacute;ch tự nhi&ecirc;n.&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(15, 15, 15)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:10.5,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;- M&agrave;u: Be, Đen, Xanh Than, Hồng&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(15, 15, 15)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:10.5,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;- SIZE : M , L, XL&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(15, 15, 15)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:10.5,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;- Chất liệu thun co gi&atilde;n tốt mặc thoải m&aacute;i, &ocirc;m trọn v&ograve;ng 3 quyến rũ&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(15, 15, 15)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:10.5,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;- Đ&aacute;y quần được may chắc chắn&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(15, 15, 15)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:10.5,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;* Quần l&oacute;t nữ hay c&ograve;n được c&aacute;c c&ocirc; g&aacute;i gọi y&ecirc;u &ldquo;quần ch&iacute;p nữ&rdquo;. Đ&acirc;y l&agrave; vật bất ly th&acirc;n của mỗi c&ocirc; g&aacute;i, n&oacute; kh&ocirc;ng chỉ li&ecirc;n quan tới sức khỏe m&agrave; n&oacute; c&ograve;n l&agrave; một m&oacute;n đồ phụ kiện thời trang. Với một chiếc quần l&oacute;t nữ sẽ gi&uacute;p bạn sexy, quyến rũ v&agrave; tự tin hơn trong mắt đối phương.&nbsp;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(15, 15, 15)&quot;,&quot;sz&quot;:10.5,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;* Quần l&oacute;t nữ với chất liệu&nbsp; từ 45%&quot;],[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(15, 15, 15)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:12,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot; POLYESTER, &quot;],[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(15, 15, 15)&quot;,&quot;sz&quot;:10.5,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;45%&quot;],[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(15, 15, 15)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:12,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot; POLYAMIDE, 10% SPANDEX.&quot;],[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(15, 15, 15)&quot;,&quot;sz&quot;:10.5,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot; Đặc điểm của loại chất liệu n&agrave;y thường mềm mại, khi sờ v&agrave;o c&oacute; cảm gi&aacute;c m&aacute;t ở b&agrave;n tay v&agrave; đặc biệt sẽ kh&ocirc;ng bị x&ugrave; trong qu&aacute; tr&igrave;nh sử dụng. Với những đặc điểm tr&ecirc;n, c&aacute;c n&agrave;ng sẽ thoải m&aacute;i, tự tin diện những chiếc quần l&oacute;t m&agrave; kh&ocirc;ng lo sẽ mắc phải c&aacute;c lỗi k&eacute;m duy&ecirc;n khi diện cả những loại trang phục b&oacute; s&aacute;t, &ocirc;m body.&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(15, 15, 15)&quot;,&quot;sz&quot;:10.5,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;* Quần l&oacute;t nữ &quot;],[&quot;span&quot;,{&quot;bold&quot;:true,&quot;color&quot;:&quot;rgb(15, 15, 15)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:14,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;LORENCIA&quot;],[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(15, 15, 15)&quot;,&quot;sz&quot;:10.5,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot; d&agrave;nh cho chị em phụ nữ c&oacute; thể gi&uacute;p cơ thể người mặc lu&ocirc;n gọn g&agrave;ng hơn khi mặc v&agrave;o những trang phục thời trang b&ecirc;n ngo&agrave;i kh&aacute;c, l&agrave;m t&ocirc;n l&ecirc;n vẻ đẹp của c&aacute;c n&agrave;ng nhiều hơn. Hiện nay c&oacute; rất nhiều kiểu cho ph&aacute;i nữ lựa chọn thoải m&aacute;i đồ ph&ugrave; hợp với sở th&iacute;ch m&igrave;nh khi sử dụng cũng như mix đồ.&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(15, 15, 15)&quot;,&quot;sz&quot;:10.5,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;* Đ&acirc;y ch&iacute;nh l&agrave; ưu điểm được rất nhiều kh&aacute;ch h&agrave;ng đ&aacute;nh gi&aacute; cao cho d&ograve;ng sản phẩm, chinh phục ph&aacute;i nữ với chất liệu chất lượng cho mọi người d&ugrave;ng thoải m&aacute;i hơn, tiện nghi hơn khi mặc. Hơn nữa khi mặc quần l&oacute;t nữ kh&ocirc;ng đường may sẽ kh&ocirc;ng để lại c&aacute;c vết hằn l&ecirc;n cơ thể của ph&aacute;i nữ, độ co gi&atilde;n n&ecirc;n dễ d&agrave;ng cử động mạnh, đặc biệt l&agrave; th&iacute;ch hợp với những người năng động. Đa phần c&aacute;c đồ l&oacute;t kh&aacute;c sẽ cho ph&aacute;i nữ&nbsp; cảm gi&aacute;c kh&oacute; chịu sau khi mặc một thời gian d&agrave;i&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(0, 0, 0)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:12,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;H&atilde;y đặt h&agrave;ng ngay để trải nghiệm sự thoải m&aacute;i v&agrave; quyến rũ c&ugrave;ng quần l&oacute;t nữ đặc biệt n&agrave;y. Sự tự tin v&agrave; phong c&aacute;ch đang chờ đ&oacute;n bạn!&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(0, 0, 0)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:12,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;&nbsp;=&gt;EDIFA&nbsp; CAM KẾT&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(0, 0, 0)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:12,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;Đảm bảo vải chất lượng 100%&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(0, 0, 0)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:12,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;&Aacute;o được kiểm tra kỹ c&agrave;ng, cẩn thận v&agrave; tư vấn nhiệt t&igrave;nh trước khi g&oacute;i h&agrave;ng giao cho Qu&yacute; Kh&aacute;ch&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(0, 0, 0)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:12,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;H&agrave;ng c&oacute; sẵn, giao h&agrave;ng ngay khi nhận được đơn&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(0, 0, 0)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:12,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;Ho&agrave;n tiền nếu sản phẩm kh&ocirc;ng giống với m&ocirc; tả&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(0, 0, 0)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:12,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;Giao h&agrave;ng tr&ecirc;n to&agrave;n quốc, nhận h&agrave;ng trả tiền&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(0, 0, 0)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:12,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;Hỗ trợ đổi trả theo quy định của Lazada&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(0, 0, 0)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:12,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;===============================&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(15, 15, 15)&quot;,&quot;sz&quot;:10.5,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;#quanlotnu, #quanlot,, #quanlotnuducsu, #quanchipnu, #quanlotnucute, #quanlotnudethuong,,&nbsp;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(15, 15, 15)&quot;,&quot;sz&quot;:10.5,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;#quanlotnucaocap, #quanlotnucapcao,#quanlotcottonkhangkhuan #dolotnu #quanlotren #edifa &quot;]]]]\">\r\n<p><span style=\"font-weight: 400;\">Quần l&oacute;t nữ si&ecirc;u tho&aacute;ng m&aacute;t ⚡ LORENCIA Q25⚡ Quần l&oacute;t&nbsp; cao cấp&nbsp;</span></p>\r\n<p><span style=\"font-weight: 400;\">Chắc chắn bạn sẽ y&ecirc;u th&iacute;ch sự thoải m&aacute;i v&agrave; quyến rũ khi trải nghiệm Quần L&oacute;t Nữ&nbsp; LORENCIA-Q25 của ch&uacute;ng t&ocirc;i! Với chất liệu si&ecirc;u mềm v&agrave; co gi&atilde;n, chiếc quần l&oacute;t n&agrave;y kh&ocirc;ng chỉ mang lại cảm gi&aacute;c &ecirc;m &aacute;i m&agrave; c&ograve;n &ocirc;m s&aacute;t v&oacute;c d&aacute;ng của bạn một c&aacute;ch tự nhi&ecirc;n.</span></p>\r\n<p><span style=\"font-weight: 400;\">- Chất liệu co gi&atilde;n tốt mặc thoải m&aacute;i, &ocirc;m trọn v&ograve;ng 3 quyến rũ</span></p>\r\n<p><span style=\"font-weight: 400;\">- Đ&aacute;y quần được may chắc chắn</span></p>\r\n<p><span style=\"font-weight: 400;\">- M&agrave;u: Đỏ, Đen, Da Nhạt, Da Đậm</span></p>\r\n<p><span style=\"font-weight: 400;\">- SIZE : M , L, XL</span></p>\r\n<p><span style=\"font-weight: 400;\">Chất liệu: 60% nylon, 40% spandex</span></p>\r\n<p><span style=\"font-weight: 400;\">Quần l&oacute;t kh&ocirc;ng những l&agrave; m&oacute;n thời trang m&agrave; c&ograve;n l&agrave; vũ kh&iacute; thể hiện sự sexxy của bạn.</span></p>\r\n<p><span style=\"font-weight: 400;\">H&atilde;y chọn cho m&igrave;nh 1 m&agrave;u ph&ugrave; hợp nh&eacute;...</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-weight: 400;\">Tuy nhi&ecirc;n, kh&ocirc;ng phải ai cũng biết chọn một chiếc quần l&oacute;t nữ cotton thực sự ph&ugrave; hợp với phom cơ thể của m&igrave;nh.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-weight: 400;\">&nbsp;LORENCIA Mang tới cho c&aacute;c c&ocirc; n&agrave;ng sự thoải m&aacute;i khi đi dạo phố hoặc hẹn h&ograve; b&egrave; bạn, chiếc quần l&oacute;t nữ ren đ&atilde; trở th&agrave;nh người bạn kh&ocirc;ng thể thiếu c&aacute;c n&agrave;ng.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-weight: 400;\">c&oacute; sự đa dạng từ kiểu c&aacute;ch tới m&agrave;u sắc, size&hellip;t&ugrave;y theo nhu cầu của m&igrave;nh m&agrave; c&aacute;c n&agrave;ng lựa chọn một sản phẩm th&iacute;ch hợp.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-weight: 400;\">V&agrave; nếu bạn cũng đang đi t&igrave;m một chiếc quần l&oacute;t nữ gợi cảm để thể hiện được c&aacute; t&iacute;nh của bản th&acirc;n một c&aacute;ch r&otilde; n&eacute;t nhất v&agrave; đang... lạc lối, th&igrave; h&atilde;y c&ugrave;ng kh&aacute;m ph&aacute; v&agrave; cảm nh&acirc;̣n những n&eacute;t đẹp v&agrave; quy&ecirc;́n rũ tại LORENCIA</span></p>\r\n<p><span style=\"font-weight: 400;\">&nbsp;</span></p>\r\n<p><span style=\"font-weight: 400;\">H&atilde;y đặt h&agrave;ng ngay để trải nghiệm sự thoải m&aacute;i v&agrave; quyến rũ c&ugrave;ng quần l&oacute;t nữ đặc biệt n&agrave;y. Sự tự tin v&agrave; phong c&aacute;ch đang chờ đ&oacute;n bạn!</span></p>\r\n<p><span style=\"font-weight: 400;\">&nbsp;=&gt;EDIFA&nbsp; CAM KẾT</span></p>\r\n<p><span style=\"font-weight: 400;\">Đảm bảo vải chất lượng 100%</span></p>\r\n<p><span style=\"font-weight: 400;\">&Aacute;o được kiểm tra kỹ c&agrave;ng, cẩn thận v&agrave; tư vấn nhiệt t&igrave;nh trước khi g&oacute;i h&agrave;ng giao cho Qu&yacute; Kh&aacute;ch</span></p>\r\n<p><span style=\"font-weight: 400;\">H&agrave;ng c&oacute; sẵn, giao h&agrave;ng ngay khi nhận được đơn</span></p>\r\n<p><span style=\"font-weight: 400;\">Ho&agrave;n tiền nếu sản phẩm kh&ocirc;ng giống với m&ocirc; tả</span></p>\r\n<p><span style=\"font-weight: 400;\">Giao h&agrave;ng tr&ecirc;n to&agrave;n quốc, nhận h&agrave;ng trả tiền</span></p>\r\n<p><span style=\"font-weight: 400;\">Hỗ trợ đổi trả theo quy định của EDIFA</span></p>\r\n<p><span style=\"font-weight: 400;\">===============================</span></p>\r\n<p><span style=\"font-weight: 400;\">#quanlotnu, #quanlot,, #quanlotnuducsu, #quanchipnu, #quanlotnucute, #quanlotnudethuong,,&nbsp;</span></p>\r\n<p><span style=\"font-weight: 400;\">#quanlotnucaocap, #quanlotnucapcao,#quanlotcottonkhangkhuan #dolotnu #quanlotren #edifa </span></p>\r\n</article>', NULL, 1, '2023-11-21 15:23:55', '2025-03-07 16:41:14'),
(64, 'Áo thun nam màu xanh MER acc', 'ao-thun-nam-mau-xanh-mer-acc', 'LG01', '1', NULL, NULL, 0, '1', 'http://127.0.0.1:8000/storage/files/11/67cb1d2ec4b6f.jpeg,http://127.0.0.1:8000/storage/files/11/67cb1d2dcee6b.jpeg,http://127.0.0.1:8000/storage/files/11/67cb1d2d8a8f8.jpeg', NULL, '<article class=\"4ever-article\" data-clipboard-cangjie=\"[&quot;root&quot;,{&quot;copyFrom&quot;:788834159},[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(15, 15, 15)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:12,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;Tự tin v&agrave; thoải m&aacute;i, Quần Legging&quot;],[&quot;span&quot;,{&quot;bold&quot;:true,&quot;color&quot;:&quot;rgb(0, 0, 0)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:11,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot; LG 01 (&quot;],[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(15, 15, 15)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:12,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;c&oacute; T&uacute;i) l&agrave; sự kết hợp ho&agrave;n hảo giữa phong c&aacute;ch v&agrave; tiện &iacute;ch. Ch&uacute;ng được thiết kế để mang lại sự thoải m&aacute;i tối đa cho người mặc trong mọi hoạt động h&agrave;ng ng&agrave;y, từ tập luyện đến đi chơi hay thậm ch&iacute; l&agrave; trong những buổi dạo phố năng động.&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(15, 15, 15)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:12,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;Với chất liệu từ, 63% RAYON, 32% POLYAMIDE, 5% ELASTANE. Với chất liệu co gi&atilde;n tốt quần legging n&agrave;y &ocirc;m s&aacute;t v&oacute;c d&aacute;ng, tạo ra một vẻ ngoại h&igrave;nh thon gọn v&agrave; duy&ecirc;n d&aacute;ng. Điểm độc đ&aacute;o của sản phẩm l&agrave; t&uacute;i thiết kế tinh tế, gi&uacute;p bạn thoải m&aacute;i mang theo điện thoại, ch&igrave;a kh&oacute;a hoặc một số vật dụng nhỏ m&agrave; kh&ocirc;ng l&agrave;m ảnh hưởng đến sự thoải m&aacute;i khi di chuyển.&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(15, 15, 15)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:12,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;Thiết kế mảnh mai v&agrave; chất liệu tho&aacute;ng kh&iacute; gi&uacute;p thoải m&aacute;i suốt cả ng&agrave;y d&agrave;i. Quần legging c&oacute; thể kết hợp dễ d&agrave;ng với &aacute;o thun, &aacute;o hoodie hoặc thậm ch&iacute; l&agrave; &aacute;o sơ mi để tạo n&ecirc;n những bộ trang phục đa dạng, phản &aacute;nh phong c&aacute;ch ri&ecirc;ng biệt của bạn.&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(15, 15, 15)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:12,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;Sự linh hoạt của sản phẩm n&agrave;y kh&ocirc;ng chỉ gi&uacute;p bạn tự tin với phong c&aacute;ch thời trang hiện đại m&agrave; c&ograve;n mang lại sự thuận tiện cho cuộc sống đầy bận rộn. Quần legging với t&uacute;i - l&agrave; sự lựa chọn ho&agrave;n hảo cho những người phụ nữ đẳng cấp, y&ecirc;u thể thao v&agrave; đồng thời đ&ograve;i hỏi sự tiện &iacute;ch trong từng chi tiết.Th&ecirc;m v&agrave;o giỏ h&agrave;ng ngay để trải nghiệm sự thoải m&aacute;i v&agrave; phong c&aacute;ch ngay từ b&acirc;y giờ!&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(15, 15, 15)&quot;,&quot;sz&quot;:10.5,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;☑️ Quần đủ size từ S,M, L, XL.&nbsp;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(15, 15, 15)&quot;,&quot;sz&quot;:10.5,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;☑️ M&Agrave;U SẮC: ĐEN&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(0, 0, 0)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:12,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;&nbsp;=&gt;EDIFA&nbsp; CAM KẾT&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(0, 0, 0)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:12,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;Đảm bảo vải chất lượng 100%&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(0, 0, 0)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:12,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;&Aacute;o được kiểm tra kỹ c&agrave;ng, cẩn thận v&agrave; tư vấn nhiệt t&igrave;nh trước khi g&oacute;i h&agrave;ng giao cho Qu&yacute; Kh&aacute;ch&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(0, 0, 0)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:12,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;H&agrave;ng c&oacute; sẵn, giao h&agrave;ng ngay khi nhận được đơn&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(0, 0, 0)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:12,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;Ho&agrave;n tiền nếu sản phẩm kh&ocirc;ng giống với m&ocirc; tả&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(0, 0, 0)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:12,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;Giao h&agrave;ng tr&ecirc;n to&agrave;n quốc, nhận h&agrave;ng trả tiền&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(0, 0, 0)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:12,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;Hỗ trợ đổi trả theo quy định của Lazada&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(0, 0, 0)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:12,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;===============================&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(0, 0, 0)&quot;,&quot;sz&quot;:10.5,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;#quanlegging #leggingdep&nbsp; #leggingcongso #legging # tregging #leggingden #congso #thoaimai #leggingnu #hottrends #freeship #leggingnangmong #cotui #quanleggingnangmong #leggingasos&quot;],[&quot;span&quot;,{&quot;color&quot;:&quot;rgb(0, 0, 0)&quot;,&quot;highlight&quot;:&quot;transparent&quot;,&quot;sz&quot;:12,&quot;szUnit&quot;:&quot;pt&quot;,&quot;data-type&quot;:&quot;leaf&quot;},&quot;#edifa&quot;]]]]\">\r\n<p>Tự&nbsp;tin&nbsp;v&agrave;&nbsp;thoải&nbsp;m&aacute;i,&nbsp;Quần&nbsp;Legging&nbsp;LG&nbsp;01&nbsp;(c&oacute;&nbsp;T&uacute;i)&nbsp;l&agrave;&nbsp;sự&nbsp;kết&nbsp;hợp&nbsp;ho&agrave;n&nbsp;hảo&nbsp;giữa&nbsp;phong&nbsp;c&aacute;ch&nbsp;v&agrave;&nbsp;tiện&nbsp;&iacute;ch.&nbsp;Ch&uacute;ng&nbsp;được&nbsp;thiết&nbsp;kế&nbsp;để&nbsp;mang&nbsp;lại&nbsp;sự&nbsp;thoải&nbsp;m&aacute;i&nbsp;tối&nbsp;đa&nbsp;cho&nbsp;người&nbsp;mặc&nbsp;trong&nbsp;mọi&nbsp;hoạt&nbsp;động&nbsp;h&agrave;ng&nbsp;ng&agrave;y,&nbsp;từ&nbsp;tập&nbsp;luyện&nbsp;đến&nbsp;đi&nbsp;chơi&nbsp;hay&nbsp;thậm&nbsp;ch&iacute;&nbsp;l&agrave;&nbsp;trong&nbsp;những&nbsp;buổi&nbsp;dạo&nbsp;phố&nbsp;năng&nbsp;động.</p>\r\n<p>Với&nbsp;chất&nbsp;liệu&nbsp;từ,&nbsp;63%&nbsp;RAYON,&nbsp;32%&nbsp;POLYAMIDE,&nbsp;5%&nbsp;ELASTANE.&nbsp;Với&nbsp;chất&nbsp;liệu&nbsp;co&nbsp;gi&atilde;n&nbsp;tốt&nbsp;quần&nbsp;legging&nbsp;n&agrave;y&nbsp;&ocirc;m&nbsp;s&aacute;t&nbsp;v&oacute;c&nbsp;d&aacute;ng,&nbsp;tạo&nbsp;ra&nbsp;một&nbsp;vẻ&nbsp;ngoại&nbsp;h&igrave;nh&nbsp;thon&nbsp;gọn&nbsp;v&agrave;&nbsp;duy&ecirc;n&nbsp;d&aacute;ng.&nbsp;Điểm&nbsp;độc&nbsp;đ&aacute;o&nbsp;của&nbsp;sản&nbsp;phẩm&nbsp;l&agrave;&nbsp;t&uacute;i&nbsp;thiết&nbsp;kế&nbsp;tinh&nbsp;tế,&nbsp;gi&uacute;p&nbsp;bạn&nbsp;thoải&nbsp;m&aacute;i&nbsp;mang&nbsp;theo&nbsp;điện&nbsp;thoại,&nbsp;ch&igrave;a&nbsp;kh&oacute;a&nbsp;hoặc&nbsp;một&nbsp;số&nbsp;vật&nbsp;dụng&nbsp;nhỏ&nbsp;m&agrave;&nbsp;kh&ocirc;ng&nbsp;l&agrave;m&nbsp;ảnh&nbsp;hưởng&nbsp;đến&nbsp;sự&nbsp;thoải&nbsp;m&aacute;i&nbsp;khi&nbsp;di&nbsp;chuyển.</p>\r\n<p>Thiết&nbsp;kế&nbsp;mảnh&nbsp;mai&nbsp;v&agrave;&nbsp;chất&nbsp;liệu&nbsp;tho&aacute;ng&nbsp;kh&iacute;&nbsp;gi&uacute;p&nbsp;thoải&nbsp;m&aacute;i&nbsp;suốt&nbsp;cả&nbsp;ng&agrave;y&nbsp;d&agrave;i.&nbsp;Quần&nbsp;legging&nbsp;c&oacute;&nbsp;thể&nbsp;kết&nbsp;hợp&nbsp;dễ&nbsp;d&agrave;ng&nbsp;với&nbsp;&aacute;o&nbsp;thun,&nbsp;&aacute;o&nbsp;hoodie&nbsp;hoặc&nbsp;thậm&nbsp;ch&iacute;&nbsp;l&agrave;&nbsp;&aacute;o&nbsp;sơ&nbsp;mi&nbsp;để&nbsp;tạo&nbsp;n&ecirc;n&nbsp;những&nbsp;bộ&nbsp;trang&nbsp;phục&nbsp;đa&nbsp;dạng,&nbsp;phản&nbsp;&aacute;nh&nbsp;phong&nbsp;c&aacute;ch&nbsp;ri&ecirc;ng&nbsp;biệt&nbsp;của&nbsp;bạn.</p>\r\n<p>Sự&nbsp;linh&nbsp;hoạt&nbsp;của&nbsp;sản&nbsp;phẩm&nbsp;n&agrave;y&nbsp;kh&ocirc;ng&nbsp;chỉ&nbsp;gi&uacute;p&nbsp;bạn&nbsp;tự&nbsp;tin&nbsp;với&nbsp;phong&nbsp;c&aacute;ch&nbsp;thời&nbsp;trang&nbsp;hiện&nbsp;đại&nbsp;m&agrave;&nbsp;c&ograve;n&nbsp;mang&nbsp;lại&nbsp;sự&nbsp;thuận&nbsp;tiện&nbsp;cho&nbsp;cuộc&nbsp;sống&nbsp;đầy&nbsp;bận&nbsp;rộn.&nbsp;Quần&nbsp;legging&nbsp;với&nbsp;t&uacute;i&nbsp;-&nbsp;l&agrave;&nbsp;sự&nbsp;lựa&nbsp;chọn&nbsp;ho&agrave;n&nbsp;hảo&nbsp;cho&nbsp;những&nbsp;người&nbsp;phụ&nbsp;nữ&nbsp;đẳng&nbsp;cấp,&nbsp;y&ecirc;u&nbsp;thể&nbsp;thao&nbsp;v&agrave;&nbsp;đồng&nbsp;thời&nbsp;đ&ograve;i&nbsp;hỏi&nbsp;sự&nbsp;tiện&nbsp;&iacute;ch&nbsp;trong&nbsp;từng&nbsp;chi&nbsp;tiết.Th&ecirc;m&nbsp;v&agrave;o&nbsp;giỏ&nbsp;h&agrave;ng&nbsp;ngay&nbsp;để&nbsp;trải&nbsp;nghiệm&nbsp;sự&nbsp;thoải&nbsp;m&aacute;i&nbsp;v&agrave;&nbsp;phong&nbsp;c&aacute;ch&nbsp;ngay&nbsp;từ&nbsp;b&acirc;y&nbsp;giờ!</p>\r\n<p>☑️&nbsp;Quần&nbsp;đủ&nbsp;size&nbsp;từ&nbsp;S,M,&nbsp;L,&nbsp;XL.&nbsp;</p>\r\n<p>☑️&nbsp;M&Agrave;U&nbsp;SẮC:&nbsp;ĐEN</p>\r\n<p>&nbsp;=&gt;EDIFA&nbsp;&nbsp;CAM&nbsp;KẾT</p>\r\n<p>&nbsp;</p>\r\n<p>Đảm&nbsp;bảo&nbsp;vải&nbsp;chất&nbsp;lượng&nbsp;100%</p>\r\n<p>&nbsp;</p>\r\n<p>&Aacute;o&nbsp;được&nbsp;kiểm&nbsp;tra&nbsp;kỹ&nbsp;c&agrave;ng,&nbsp;cẩn&nbsp;thận&nbsp;v&agrave;&nbsp;tư&nbsp;vấn&nbsp;nhiệt&nbsp;t&igrave;nh&nbsp;trước&nbsp;khi&nbsp;g&oacute;i&nbsp;h&agrave;ng&nbsp;giao&nbsp;cho&nbsp;Qu&yacute;&nbsp;Kh&aacute;ch</p>\r\n<p>&nbsp;</p>\r\n<p>H&agrave;ng&nbsp;c&oacute;&nbsp;sẵn,&nbsp;giao&nbsp;h&agrave;ng&nbsp;ngay&nbsp;khi&nbsp;nhận&nbsp;được&nbsp;đơn</p>\r\n<p>&nbsp;</p>\r\n<p>Ho&agrave;n&nbsp;tiền&nbsp;nếu&nbsp;sản&nbsp;phẩm&nbsp;kh&ocirc;ng&nbsp;giống&nbsp;với&nbsp;m&ocirc;&nbsp;tả</p>\r\n<p>&nbsp;</p>\r\n<p>Giao&nbsp;h&agrave;ng&nbsp;tr&ecirc;n&nbsp;to&agrave;n&nbsp;quốc,&nbsp;nhận&nbsp;h&agrave;ng&nbsp;trả&nbsp;tiền</p>\r\n<p>===============================</p>\r\n<p>#quanlegging&nbsp;#leggingdep&nbsp;&nbsp;#leggingcongso&nbsp;#legging&nbsp;#&nbsp;tregging&nbsp;#leggingden&nbsp;#congso&nbsp;#thoaimai&nbsp;#leggingnu&nbsp;#hottrends&nbsp;#freeship&nbsp;#leggingnangmong&nbsp;#cotui&nbsp;#quanleggingnangmong&nbsp;#leggingasos#edifa</p>\r\n</article>', NULL, 1, '2023-11-22 00:27:54', '2025-03-07 16:22:29'),
(65, 'Áo thun nam màu xanh MER', 'ao-thun-nam-mau-xanh-mer', 'LG02', '1', NULL, NULL, 0, '1', 'http://127.0.0.1:8000/storage/files/11/67cb1cdcca7d6.jpeg', NULL, '<article class=\"4ever-article\" data-clipboard-cangjie=\"[&quot;root&quot;,{&quot;copyFrom&quot;:788834159},[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;- Một trong số những trang phục m&agrave; gần như c&ocirc; g&aacute;i n&agrave;o c&ugrave;ng phải c&oacute; đ&oacute; l&agrave; quần Legging. Đ&acirc;y l&agrave; loại quần ph&ugrave; hợp với nhiều độ tuổi, dễ d&agrave;ng Mix c&ugrave;ng với những trang phục kh&aacute;c v&agrave; ph&ugrave; hợp với nhiều ho&agrave;n cảnh kh&aacute;c nhau.&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;Với sự tự tin v&agrave; v&oacute;c d&aacute;ng ho&agrave;n hảo của chiếc Quần Legging LG 01 (N NG M&Ocirc;NG)&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;! Sản phẩm n&agrave;y kh&ocirc;ng chỉ l&agrave; một chiếc quần legging th&ocirc;ng thường, m&agrave; c&ograve;n được thiết kế đặc biệt để n&acirc;ng cao đường cong tự nhi&ecirc;n của bạn, tạo n&ecirc;n vẻ ngoại h&igrave;nh gợi cảm v&agrave; quyến rũ.&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;-Với chất liệu từ, 63% RAYON, 32% POLYAMIDE, 5% ELASTANE co gi&atilde;n tốt, hạn chế lộ chỗ nhạy cảm&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;☑️ Quần đủ size từ S,M, L, XL. &quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;☑️ M&Agrave;U SẮC: ĐEN&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;Quần Legging N&acirc;ng M&ocirc;ng kh&ocirc;ng chỉ l&agrave; sự lựa chọn ho&agrave;n hảo cho những buổi tập luyện, m&agrave; c&ograve;n l&agrave; một item thời trang xuất sắc cho những hoạt động h&agrave;ng ng&agrave;y. D&ugrave; l&agrave; đi dạo phố, cafe hay thậm ch&iacute; l&agrave; dự tiệc, bạn sẽ lu&ocirc;n tỏa s&aacute;ng với vẻ ngoại h&igrave;nh l&ocirc;i cuốn của m&igrave;nh.&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;Đừng bỏ lỡ cơ hội sở hữu chiếc quần legging n&agrave;y để tạo n&ecirc;n phong c&aacute;ch thời trang độc đ&aacute;o v&agrave; quyến rũ. Th&ecirc;m ngay v&agrave;o giỏ h&agrave;ng để trải nghiệm sự thoải m&aacute;i v&agrave; vẻ đẹp nổi bật của Quần Legging N&acirc;ng M&ocirc;ng!&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;=&gt;EDIFA CAM KẾT&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;Đảm bảo vải chất lượng 100%&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;&Aacute;o được kiểm tra kỹ c&agrave;ng, cẩn thận v&agrave; tư vấn nhiệt t&igrave;nh trước khi g&oacute;i h&agrave;ng giao cho Qu&yacute; Kh&aacute;ch&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;H&agrave;ng c&oacute; sẵn, giao h&agrave;ng ngay khi nhận được đơn&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;Ho&agrave;n tiền nếu sản phẩm kh&ocirc;ng giống với m&ocirc; tả&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;Giao h&agrave;ng tr&ecirc;n to&agrave;n quốc, nhận h&agrave;ng trả tiền&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;Hỗ trợ đổi trả theo quy định của Lazada&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;===============================&quot;]]],[&quot;p&quot;,{&quot;jc&quot;:&quot;left&quot;,&quot;ind&quot;:{},&quot;spacing&quot;:{}},[&quot;span&quot;,{&quot;data-type&quot;:&quot;text&quot;},[&quot;span&quot;,{&quot;data-type&quot;:&quot;leaf&quot;},&quot;#quanlegging #leggingdep #leggingcongso #legging # tregging #leggingden #congso #thoaimai #leggingnu #hottrends #freeship #leggingnangmong #cotui #quanleggingnangmong #leggingasos#edifa&quot;]]]]\">\r\n<p><span style=\"font-weight: 400;\">Một trong số những trang phục m&agrave; gần như c&ocirc; g&aacute;i n&agrave;o c&ugrave;ng phải c&oacute; đ&oacute; l&agrave; quần Legging. Đ&acirc;y l&agrave; loại quần ph&ugrave; hợp với nhiều độ tuổi, dễ d&agrave;ng Mix c&ugrave;ng với những trang phục kh&aacute;c v&agrave; ph&ugrave; hợp với nhiều ho&agrave;n cảnh kh&aacute;c nhau.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-weight: 400;\">V</span><span style=\"font-weight: 400;\">ới sự tự tin v&agrave; v&oacute;c d&aacute;ng ho&agrave;n hảo của chiếc&nbsp; Quần Legging </span><strong>&nbsp;LG 02 (N&Acirc;NG M&Ocirc;NG)</strong></p>\r\n<p><span style=\"font-weight: 400;\">! Sản phẩm n&agrave;y kh&ocirc;ng chỉ l&agrave; một chiếc quần legging th&ocirc;ng thường, m&agrave; c&ograve;n được thiết kế đặc biệt để n&acirc;ng cao đường cong tự nhi&ecirc;n của bạn, tạo n&ecirc;n vẻ ngoại h&igrave;nh gợi cảm v&agrave; quyến rũ.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-weight: 400;\">-V</span><span style=\"font-weight: 400;\">ới chất liệu từ, 63% RAYON, 32% POLYAMIDE, 5% ELASTANE </span><span style=\"font-weight: 400;\">&nbsp;co gi&atilde;n tốt, hạn chế lộ chỗ nhạy cảm</span></p>\r\n<p><span style=\"font-weight: 400;\">☑️ Quần đủ size từ S,M, L, XL.&nbsp;</span></p>\r\n<p><span style=\"font-weight: 400;\">☑️ M&Agrave;U SẮC: ĐEN</span></p>\r\n<p><span style=\"font-weight: 400;\">Quần Legging N&acirc;ng M&ocirc;ng kh&ocirc;ng chỉ l&agrave; sự lựa chọn ho&agrave;n hảo cho những buổi tập luyện, m&agrave; c&ograve;n l&agrave; một item thời trang xuất sắc cho những hoạt động h&agrave;ng ng&agrave;y. D&ugrave; l&agrave; đi dạo phố, cafe hay thậm ch&iacute; l&agrave; dự tiệc, bạn sẽ lu&ocirc;n tỏa s&aacute;ng với vẻ ngoại h&igrave;nh l&ocirc;i cuốn của m&igrave;nh.</span></p>\r\n<p><span style=\"font-weight: 400;\">Đừng bỏ lỡ cơ hội sở hữu chiếc quần legging n&agrave;y để tạo n&ecirc;n phong c&aacute;ch thời trang độc đ&aacute;o v&agrave; quyến rũ. Th&ecirc;m ngay v&agrave;o giỏ h&agrave;ng để trải nghiệm sự thoải m&aacute;i v&agrave; vẻ đẹp nổi bật của Quần Legging N&acirc;ng M&ocirc;ng!</span></p>\r\n<p><span style=\"font-weight: 400;\">&nbsp;=&gt;EDIFA&nbsp; CAM KẾT</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-weight: 400;\">Đảm bảo vải chất lượng 100%</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-weight: 400;\">&Aacute;o được kiểm tra kỹ c&agrave;ng, cẩn thận v&agrave; tư vấn nhiệt t&igrave;nh trước khi g&oacute;i h&agrave;ng giao cho Qu&yacute; Kh&aacute;ch</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-weight: 400;\">H&agrave;ng c&oacute; sẵn, giao h&agrave;ng ngay khi nhận được đơn</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-weight: 400;\">Ho&agrave;n tiền nếu sản phẩm kh&ocirc;ng giống với m&ocirc; tả</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-weight: 400;\">Giao h&agrave;ng tr&ecirc;n to&agrave;n quốc, nhận h&agrave;ng trả tiền</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-weight: 400;\">Hỗ trợ đổi trả theo quy định của Edifa</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-weight: 400;\">===============================</span></p>\r\n<p><span style=\"font-weight: 400;\">#quanlegging #leggingdep&nbsp; #leggingcongso #legging # tregging #leggingden #congso #thoaimai #leggingnu #hottrends #freeship #leggingnangmong #cotui #quanleggingnangmong #leggingasos</span><span style=\"font-weight: 400;\">#edifa</span></p>\r\n</article>', NULL, 1, '2023-11-22 00:29:54', '2025-03-07 16:21:00'),
(66, 'Áo thun nam phong cách sporty', 'ao-thun-nam-phong-cach-sporty', 'ACT04', '1', NULL, NULL, 0, '1', 'http://127.0.0.1:8000/storage/files/11/67cb1c7b042c3.jpeg,http://127.0.0.1:8000/storage/files/11/67cb1c7a6af59.jpeg,http://127.0.0.1:8000/storage/files/11/67cb1c7a028d6.jpeg,http://127.0.0.1:8000/storage/files/11/67cb1c7809f9f.jpeg', NULL, '<p><span style=\"font-weight: 400;\">&Aacute;o Thun L&oacute;t Nam ZULO ACT-04 Cộc Tay M&agrave;u Trắng Chất Liệu Tho&aacute;ng M&aacute;t, &Aacute;o Cộc Tay Thấm H&uacute;t Mồ H&ocirc;i.</span></p>\r\n<p><span style=\"font-weight: 400;\">🔥 TH&Ocirc;NG TIN SẢN PHẨM:</span></p>\r\n<p><span style=\"font-weight: 400;\">- M&atilde; sản phẩm:&nbsp; ZULO ACT-04&nbsp; - &Aacute;o l&oacute;t nam - &Aacute;o cộc tay</span></p>\r\n<p><span style=\"font-weight: 400;\">- Xuất xứ: Việt Nam</span></p>\r\n<p><span style=\"font-weight: 400;\">- Chất liệu vải: 100% Cotton</span></p>\r\n<p><span style=\"font-weight: 400;\">- M&agrave;u sắc: Trắng</span></p>\r\n<p><span style=\"font-weight: 400;\">- Size: S, M, L, XL, XXL (Chi tiết qu&yacute; kh&aacute;ch xem ở bảng quy đổi k&iacute;ch cỡ)</span></p>\r\n<p><span style=\"font-weight: 400;\">- Kiểu d&aacute;ng: &Aacute;o L&oacute;t Nam Cộc Tay</span></p>\r\n<p><span style=\"font-weight: 400;\">ĐẶC ĐIỂM NỔI BẬT:&nbsp;</span></p>\r\n<p><span style=\"font-weight: 400;\">+ Chất vải gi&uacute;p h&uacute;t hơi ẩm v&agrave; di chuyển ch&uacute;ng qua c&aacute;c sợi vải, qua đ&oacute; th&uacute;c đẩy tốc độ bốc hơi mồ h&ocirc;i.</span></p>\r\n<p><span style=\"font-weight: 400;\">+&nbsp; Vải &aacute;o l&oacute;t nam được dệt tr&ecirc;n d&acirc;y chuyền m&aacute;y m&oacute;c v&agrave; c&ocirc;ng nghệ Nhật Bản với kiểu dệt truyền thống, chất liệu vải mềm, tho&aacute;ng m&aacute;t v&agrave; thấm h&uacute;t mồ h&ocirc;i, thoải m&aacute;i khi vận động.</span></p>\r\n<p><span style=\"font-weight: 400;\">+&nbsp; &Aacute;o đ&ocirc;ng xu&acirc;n nam được thiết kế năng động, trẻ trung. Sản phẩm chất lượng tốt v&agrave; th&acirc;n thiện với người sử dụng.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-weight: 400;\">&nbsp;=&gt;EDIFA&nbsp; CAM KẾT</span></p>\r\n<p><span style=\"font-weight: 400;\">Đảm bảo vải chất lượng 100%</span></p>\r\n<p><span style=\"font-weight: 400;\">&Aacute;o được kiểm tra kỹ c&agrave;ng, cẩn thận v&agrave; tư vấn nhiệt t&igrave;nh trước khi g&oacute;i h&agrave;ng giao cho Qu&yacute; Kh&aacute;ch</span></p>\r\n<p><span style=\"font-weight: 400;\">H&agrave;ng c&oacute; sẵn, giao h&agrave;ng ngay khi nhận được đơn</span></p>\r\n<p><span style=\"font-weight: 400;\">Ho&agrave;n tiền nếu sản phẩm kh&ocirc;ng giống với m&ocirc; tả</span></p>\r\n<p><span style=\"font-weight: 400;\">Giao h&agrave;ng tr&ecirc;n to&agrave;n quốc, nhận h&agrave;ng trả tiền</span></p>\r\n<p><span style=\"font-weight: 400;\">==============================</span></p>\r\n<p><span style=\"font-weight: 400;\">#thoitrangnam #EDIFA #aolotnam #aonamcoctay #aolotnamcoctay #aonammautrang #aonamthoangmat #apthunnam #aothethaonam #shopee #aothuntrang #aothuncotton #aonam #thoitrang #cotton #thamhutmohoi #thoangmat #aotrang</span></p>', NULL, 1, '2023-11-22 00:35:41', '2025-03-07 16:19:26');
INSERT INTO `products` (`id`, `title`, `slug`, `sku`, `pos`, `type_init`, `type`, `price`, `option_image`, `photo`, `photo_size`, `description`, `brand_id`, `status`, `created_at`, `updated_at`) VALUES
(67, 'Áo Thun Local Brand Unisex Mệt Tshirt TS232', 'ao-thun-local-brand-unisex-met-tshirt-ts232', 'GLK-195', '1', NULL, NULL, 0, '0', 'http://127.0.0.1:8000/storage/files/11/67cb1bd66a2d5.jpeg,http://127.0.0.1:8000/storage/files/11/67cb1afb11bd5.jpg', NULL, '<p class=\"ql-align-justify\"><strong style=\"background-color: transparent; color: #000000;\">&Aacute;o l&oacute;t nữ Lorencia - GLK 195</strong></p>\r\n<p><span style=\"background-color: transparent; color: #000000;\">Ch&agrave;o mừng bạn đến với thế giới của sự thoải m&aacute;i v&agrave; quyến rũ c&ugrave;ng chiếc </span><strong style=\"background-color: transparent; color: #000000;\">&Aacute;o l&oacute;t nữ Lorencia, GLK - 195</strong><span style=\"background-color: transparent; color: #000000;\"> nữ đặc biệt của ch&uacute;ng t&ocirc;i! Thiết kế tinh tế v&agrave; chất liệu cao cấp, sản phẩm n&agrave;y kh&ocirc;ng chỉ l&agrave; sự kết hợp ho&agrave;n hảo giữa phong c&aacute;ch v&agrave; thoải m&aacute;i m&agrave; c&ograve;n l&agrave; sự chăm s&oacute;c tận t&acirc;m đối với v&oacute;c d&aacute;ng của bạn.</span></p>\r\n<ul>\r\n<li><strong style=\"background-color: transparent;\">&Aacute;o l&oacute;t nữ Lorencia, GLK - 195 với thiết kế:</strong></li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<h4><span style=\"background-color: transparent; color: #000000;\">Khuy&nbsp; Điều Chỉnh:</span></h4>\r\n<p><span style=\"background-color: transparent; color: #000000;\">&Aacute;o được trang bị 3 khuy điều chỉnh, mang lại linh hoạt cho bạn để c&oacute; thể điều chỉnh k&iacute;ch thước ph&ugrave; hợp với phong c&aacute;ch của m&igrave;nh. Điều n&agrave;y gi&uacute;p tối ưu h&oacute;a sự thoải m&aacute;i v&agrave; đảm bảo &aacute;o vừa phải.</span></p>\r\n<h4><span style=\"background-color: transparent; color: #000000;\">C&uacute;p Ren v&agrave; m&uacute;t dầy vừa phải:</span></h4>\r\n<p><span style=\"background-color: transparent; color: #000000;\">Với mạch ren tinh tế, &aacute;o đấu kh&ocirc;ng chỉ tạo điểm nhấn về thẩm mỹ m&agrave; c&ograve;n gi&uacute;p tăng t&iacute;nh nữ. M&uacute;t nhẹ nh&agrave;ng nhẹ nh&agrave;ng, kh&ocirc;ng l&agrave;m cảm gi&aacute;c cứng nhắc, đồng thời giữ cho v&ograve;ng 1 của bạn trở n&ecirc;n ho&agrave;n hảo v&agrave; tự tin hơn.</span></p>\r\n<h4><span style=\"background-color: transparent; color: #000000;\">D&acirc;y C&oacute; Thể Th&aacute;o Rời:</span></h4>\r\n<p><span style=\"background-color: transparent; color: #000000;\">Sự thoải m&aacute;i v&agrave; thuận lợi l&agrave; yếu tố quan trọng trong thiết kế của ch&uacute;ng t&ocirc;i. D&acirc;y &aacute;o c&oacute; thể th&aacute;o rời, gi&uacute;p bạn dễ d&agrave;ng điều chỉnh theo sở hữu c&aacute; nh&acirc;n hoặc phối hợp với trang phục h&agrave;ng ng&agrave;y của bạn.</span></p>\r\n<h4><span style=\"background-color: transparent; color: #000000;\">Th&ocirc;ng Tin Sản Phẩm:</span></h4>\r\n<ul>\r\n<li><strong style=\"background-color: transparent;\">Chất liệu: 85% nylon, 15% spandex</strong></li>\r\n<li><strong style=\"background-color: transparent;\">M&agrave;u sắc: &nbsp;Đen, Đỏ, Da đậm, Da nhạt</strong></li>\r\n<li><strong style=\"background-color: transparent;\">K&iacute;ch thước: &nbsp;34, 36, 38, 40</strong></li>\r\n</ul>\r\n<h3><span style=\"background-color: transparent; color: #000000;\">Tại Sao Chọn &Aacute;o Ngực N&agrave;y?</span></h3>\r\n<p><span style=\"background-color: transparent; color: #000000;\">Ch&uacute;ng t&ocirc;i sử dụng chất liệu cao cấp, kh&ocirc;ng g&acirc;y k&iacute;ch ứng cho da, đảm bảo sự thoải m&aacute;i v&agrave; an to&agrave;n cho sức khỏe. &Aacute;o ngực n&agrave;y cũng dễ d&agrave;ng bảo quản v&agrave; giữ form sau nhiều lần giặt.</span></p>\r\n<p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: #000000;\">H&atilde;y để chiếc &aacute;o ngực kh&ocirc;ng gọng n&agrave;y trở th&agrave;nh người bạn đồng h&agrave;nh l&yacute; tưởng, đồng thời l&agrave; điểm nhấn quyến rũ trong tủ đồ nội y của bạn. Đặt h&agrave;ng ngay để trải nghiệm sự thoải m&aacute;i v&agrave; phong c&aacute;ch tại Edifa!</span></p>\r\n<p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: #000000;\">&nbsp;=&gt;EDIFA&nbsp; CAM KẾT</span></p>\r\n<p>&nbsp;</p>\r\n<p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: #000000;\">Đảm bảo vải chất lượng 100%</span></p>\r\n<p>&nbsp;</p>\r\n<p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: #000000;\">&Aacute;o được kiểm tra kỹ c&agrave;ng, cẩn thận v&agrave; tư vấn nhiệt t&igrave;nh trước khi g&oacute;i h&agrave;ng giao cho Qu&yacute; Kh&aacute;ch</span></p>\r\n<p>&nbsp;</p>\r\n<p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: #000000;\">H&agrave;ng c&oacute; sẵn, giao h&agrave;ng ngay khi nhận được đơn</span></p>\r\n<p>&nbsp;</p>\r\n<p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: #000000;\">Ho&agrave;n tiền nếu sản phẩm kh&ocirc;ng giống với m&ocirc; tả</span></p>\r\n<p>&nbsp;</p>\r\n<p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: #000000;\">Giao h&agrave;ng tr&ecirc;n to&agrave;n quốc, nhận h&agrave;ng trả tiền</span></p>\r\n<p>&nbsp;</p>\r\n<p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: #000000;\">===============================</span></p>\r\n<p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: #000000;\">#aonguc #aolot #aonguckhonggong #aolotnu #aocupnguc #aonguccup #aongucnangnguc #aolotnangnguc #aongucnang #aodonnguc #aongucdon #aogucsu #aongucday #aonangnguc #aongucmutday #aongucmutmong #aongucren #aonguctron #edifa</span></p>', NULL, 1, '2023-11-23 08:12:16', '2025-03-07 16:16:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting2`
--

CREATE TABLE `setting2` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `photo_icon` text COLLATE utf8mb4_unicode_ci,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'bot-right',
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `setting2`
--

INSERT INTO `setting2` (`id`, `title`, `title2`, `url`, `description`, `photo_icon`, `photo`, `position`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Coupon', NULL, NULL, '<p class=\"ql-align-center\">&nbsp;</p>\r\n<p class=\"ql-align-center\"><span style=\"color: #231f20;\">Ch&agrave;o mừng bạn đến với EDIFA</span></p>\r\n<p class=\"ql-align-center\">&nbsp;</p>\r\n<p class=\"ql-align-center\"><span style=\"color: #231f20;\">ưu đ&atilde;i&nbsp;15%</span></p>\r\n<p class=\"ql-align-center\">&nbsp;</p>\r\n<p class=\"ql-align-center\"><span style=\"color: #231f20;\">Cho đơn h&agrave;ng online đầu ti&ecirc;n của bạn</span></p>\r\n<p class=\"ql-align-center\"><span style=\"color: #231f20;\">Đăng k&yacute; ngay</span></p>\r\n<p class=\"ql-align-center\">&nbsp;</p>\r\n<p>&nbsp;</p>', 'https://shop.tdptechnology.vn//storage/files/1/public/lIXuQ.png', 'https://shop.tdptechnology.vn//storage/files/1/danh mục/e7GE7mbl4VU2tYSAJG8NsA4dv4lbXGNoMAgjy5kW.jpg', 'bot-right', 0, NULL, '2023-12-16 06:45:22'),
(2, 'mail_resign', 'subcrip news', NULL, '<div style=\"margin:0;padding:0;color:#333;font-style:normal;line-height:1.42857143;font-size:14px;font-family:\'futura\',\'sans-serif\';font-weight:400;text-align:left;background-color:#f5f5f5\">\ndang ky email\n</div>', '', '', '', 1, NULL, '2023-11-21 02:27:21'),
(3, 'mail_unresign', 'un subcrip happy', NULL, '<div style=\"margin:0;padding:0;color:#333;font-style:normal;line-height:1.42857143;font-size:14px;font-family:\'futura\',\'sans-serif\';font-weight:400;text-align:left;background-color:#f5f5f5\">\nhuy dang ky email\n</div>\n', '', '', '', 1, NULL, '2023-11-21 02:27:21'),
(4, 'send_mail_user', 'send mai user all', NULL, '<div style=\"margin:0;padding:0;color:#333;font-style:normal;line-height:1.42857143;font-size:14px;font-family:\'futura\',\'sans-serif\';font-weight:400;text-align:left;background-color:#f5f5f5\">\r\nsend mai user all\r\n</div>\r\n', '', '', '', 1, NULL, '2023-11-21 02:27:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `header_script` text COLLATE utf8mb4_unicode_ci,
  `footer_script` text COLLATE utf8mb4_unicode_ci,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'App name',
  `site_title_new` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_title_combo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_title_filling` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_title_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_title_footer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_ico` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zalo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_copyright` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_info` text COLLATE utf8mb4_unicode_ci,
  `fee` decimal(10,0) DEFAULT '0',
  `fee2` int NOT NULL DEFAULT '0',
  `freeship` int NOT NULL DEFAULT '0',
  `title_ship` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `header_script`, `footer_script`, `site_name`, `site_title_new`, `site_title_combo`, `site_title_filling`, `site_title_content`, `site_title_footer`, `site_logo`, `site_ico`, `site_email`, `site_address`, `facebook`, `zalo`, `instagram`, `youtube`, `site_phone`, `site_mobile`, `site_copyright`, `site_info`, `fee`, `fee2`, `freeship`, `title_ship`, `token`, `created_at`, `updated_at`) VALUES
(1, NULL, '<!-- Messenger Plugin chat Code -->\r\n<div id=\"fb-root\"></div>\r\n<!-- Your Plugin chat code -->\r\n<div id=\"fb-customer-chat\" class=\"fb-customerchat\"></div>\r\n<p>\r\n<script>\r\n      var chatbox = document.getElementById(\'fb-customer-chat\');\r\n      chatbox.setAttribute(\"page_id\", \"110123164243508\");\r\n      chatbox.setAttribute(\"attribution\", \"biz_inbox\");\r\n    </script>\r\n</p>\r\n<!-- Your SDK code -->\r\n<p>\r\n<script>\r\n      window.fbAsyncInit = function() {\r\n        FB.init({\r\n          xfbml            : true,\r\n          version          : \'v18.0\'\r\n        });\r\n      };\r\n\r\n      (function(d, s, id) {\r\n        var js, fjs = d.getElementsByTagName(s)[0];\r\n        if (d.getElementById(id)) return;\r\n        js = d.createElement(s); js.id = id;\r\n        js.src = \'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js\';\r\n        fjs.parentNode.insertBefore(js, fjs);\r\n      }(document, \'script\', \'facebook-jssdk\'));\r\n    </script>\r\n</p>', 'logo', 'SẢN PHẨM MỚI', 'COMBO GIÁ TỐT', 'logo', 'Thương hiệu đồ lót mang tới trải nghiệm thoải mái mỗi ngày cho mọi người.', 'THEO DÕI CHÚNG TÔI TRÊN INSTAGRAM', 'http://127.0.0.1:8000/storage/files/11/67cb1e04a0b44.png', 'http://127.0.0.1:8000/storage/files/11/67cb1e04a0b44.png', 'email@gmail.com', 'Lô 26.1-05 đường Nguyễn Đình Bể, Phường Tân Bình, Thành phố Hải Dương', 'https://www.facebook.com/EDIFAThoitrangVietNam/', 'https://zalo.me/0904045266', 'https://www.facebook.com/LorenciaThoitrangVietNam', 'https://www.facebook.com/LorenciaThoitrangVietNam', '0904045266', '097000009', 'coppyright@coppyright.com.vn', '<h3>C&Ocirc;NG TY CỔ PHẦN MAY</h3>\r\n<p>Chuy&ecirc;n sản xuất v&agrave; ph&acirc;n phối độc quyền</p>\r\n<p>Đồ l&oacute;t v&agrave; c&aacute;c sản phẩm thời trang</p>\r\n<p>L&ocirc; 26.1-05 đường Nguyễn Đ&igrave;nh Bể, Phường T&acirc;n B&igrave;nh, Th&agrave;nh phố Hải Dương</p>\r\n<p>&nbsp;</p>', 39000, 59000, 50000, '<p>Miễn ph&iacute; vận chuyển đơn h&agrave;ng từ 499k <a style=\"color: #bbbbbb;\" href=\"/pages/chinh-sach-van-chuyen\" target=\"_blank\" rel=\"noopener noreferrer\">xem chi tiết</a></p>', 'https://www.facebook.com/LorenciaThoitrangVietNam', '2023-10-28 10:01:39', '2025-03-07 16:26:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sizes`
--

INSERT INTO `sizes` (`id`, `title`, `value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'S', 'S', 1, '2023-10-28 10:22:22', '2023-10-28 10:22:22'),
(2, 'M', 'M', 1, '2023-10-28 10:22:24', '2023-10-28 10:22:24'),
(3, 'L', 'L', 1, '2023-10-28 10:22:41', '2023-10-28 10:22:41'),
(4, 'XL', 'XL', 1, '2023-10-28 10:22:46', '2023-10-28 10:22:46'),
(5, '2XL', '2XL', 1, '2023-10-28 10:22:51', '2023-10-28 10:22:51'),
(14, '34', '34', 1, '2023-11-16 02:56:49', '2023-11-16 08:44:07'),
(15, '36', '36', 1, '2023-11-16 03:25:07', '2023-11-16 03:25:07'),
(16, '38', '38', 1, '2023-11-16 03:25:14', '2023-11-16 03:25:14'),
(17, '40', '40', 1, '2023-11-16 03:25:21', '2023-11-16 03:25:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `skus`
--

CREATE TABLE `skus` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` int NOT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `cost` double NOT NULL DEFAULT '0',
  `price` double NOT NULL DEFAULT '0',
  `sell_price` double NOT NULL DEFAULT '0',
  `quantity` int NOT NULL DEFAULT '0',
  `sub_quantity` int NOT NULL DEFAULT '0',
  `is_default` int NOT NULL DEFAULT '0',
  `is_default_2` int DEFAULT NULL,
  `color_id` int NOT NULL,
  `size_id` int NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `skus`
--

INSERT INTO `skus` (`id`, `product_id`, `sku`, `photo`, `cost`, `price`, `sell_price`, `quantity`, `sub_quantity`, `is_default`, `is_default_2`, `color_id`, `size_id`, `status`, `created_at`, `updated_at`) VALUES
(44, 6, 'H13TS18002', 'admin/product_sku/oKEPw84coB9csm4BfqmYdyP41ao5Qd3Kr3ctdcSG.jpg', 10000, 150000, 0, 4, 4, 1, 0, 2, 1, 1, '2023-10-28 14:25:04', '2023-10-28 14:25:04'),
(45, 6, 'H13TS18002', 'admin/product_sku/lZRM4doPwMVPWw8eBgTXFpEqumCYEFgerFuB68yk.jpg', 10000, 150000, 0, 4, 4, 0, 0, 2, 2, 1, '2023-10-28 14:25:04', '2023-10-28 14:25:04'),
(46, 6, 'H13TS18002', 'admin/product_sku/NV5t7Pfpzz4jvgv1tEwxR2rrgnzyP2j57dzbVYNZ.jpg', 10000, 150000, 0, 4, 4, 0, 0, 2, 3, 1, '2023-10-28 14:25:04', '2023-10-28 14:25:04'),
(47, 6, 'H13TS18002', 'admin/product_sku/kz0GyeqOm4fI71Uf7etdjmLvJHMQwkW3LAH0ERTe.jpg', 10000, 150000, 0, 4, 4, 0, 0, 10, 1, 1, '2023-10-28 14:25:04', '2023-10-28 14:25:04'),
(48, 6, 'H13TS18002', 'admin/product_sku/DBCAxlGcUCigdVAWGUS14mfGJ3KZUqWDXDDMF4Pk.jpg', 10000, 150000, 0, 4, 4, 0, 0, 10, 2, 1, '2023-10-28 14:25:04', '2023-10-28 14:25:04'),
(49, 6, 'H13TS18002', 'admin/product_sku/hnw6VXsp9LW2XKsOHKJjandFjBADzkULSIXPKoJK.jpg', 10000, 150000, 0, 4, 4, 0, 0, 4, 1, 1, '2023-10-28 14:25:04', '2023-10-28 14:25:04'),
(519, 61, 'Q25', 'http://127.0.0.1:8000/storage/files/11/67cb1c7a028d6.jpeg', 79000, 79000, 0, 100, 100, 1, 0, 2, 2, 1, '2023-11-21 15:23:55', '2025-03-07 16:41:14'),
(520, 61, 'Q25', 'http://127.0.0.1:8000/storage/files/11/67cb1c7a028d6.jpeg', 79000, 79000, 0, 100, 100, 0, 0, 2, 3, 1, '2023-11-21 15:23:55', '2025-03-07 16:41:14'),
(521, 61, 'Q25', 'http://127.0.0.1:8000/storage/files/11/67cb1c7a028d6.jpeg', 79000, 79000, 0, 100, 100, 0, 0, 2, 4, 1, '2023-11-21 15:23:55', '2025-03-07 16:41:14'),
(552, 64, 'LG01', 'http://127.0.0.1:8000/storage/files/11/67cb1d14ebb7f.jpeg', 325000, 325000, 0, 100, 100, 1, 0, 4, 1, 1, '2023-11-22 00:27:54', '2025-03-07 16:22:29'),
(553, 64, 'LG01', 'http://127.0.0.1:8000/storage/files/11/67cb1d14ebb7f.jpeg', 325000, 325000, 0, 100, 100, 0, 0, 4, 2, 1, '2023-11-22 00:27:54', '2025-03-07 16:22:29'),
(554, 64, 'LG01', 'http://127.0.0.1:8000/storage/files/11/67cb1d14ebb7f.jpeg', 325000, 325000, 0, 100, 100, 0, 0, 4, 3, 1, '2023-11-22 00:27:54', '2025-03-07 16:22:29'),
(555, 64, 'LG01', 'http://127.0.0.1:8000/storage/files/11/67cb1d14ebb7f.jpeg', 325000, 325000, 0, 100, 100, 0, 0, 4, 4, 1, '2023-11-22 00:27:54', '2025-03-07 16:22:29'),
(556, 65, 'LG02', 'http://127.0.0.1:8000/storage/files/11/67cb1cc6bc210.jpeg', 325000, 325000, 0, 102, 102, 1, 0, 4, 1, 1, '2023-11-22 00:29:54', '2025-03-07 16:21:00'),
(557, 65, 'LG02', 'http://127.0.0.1:8000/storage/files/11/67cb1cc6bc210.jpeg', 325000, 325000, 0, 102, 102, 0, 0, 4, 2, 1, '2023-11-22 00:29:54', '2025-03-07 16:21:00'),
(558, 65, 'LG02', 'http://127.0.0.1:8000/storage/files/11/67cb1cc6bc210.jpeg', 325000, 325000, 0, 102, 102, 0, 0, 4, 3, 1, '2023-11-22 00:29:54', '2025-03-07 16:21:00'),
(559, 65, 'LG02', 'http://127.0.0.1:8000/storage/files/11/67cb1cc6bc210.jpeg', 325000, 325000, 0, 102, 102, 0, 0, 4, 4, 1, '2023-11-22 00:29:54', '2025-03-07 16:21:00'),
(560, 66, 'ACT04', 'http://127.0.0.1:8000/storage/files/11/67cb1c1c2c447.jpeg', 125000, 125000, 0, 202, 202, 1, 0, 1, 1, 1, '2023-11-22 00:35:41', '2025-03-07 16:19:26'),
(561, 66, 'ACT04', 'http://127.0.0.1:8000/storage/files/11/67cb1c1c2c447.jpeg', 125000, 125000, 0, 202, 202, 0, 0, 1, 2, 1, '2023-11-22 00:35:41', '2025-03-07 16:19:26'),
(562, 66, 'ACT04', 'http://127.0.0.1:8000/storage/files/11/67cb1c1c2c447.jpeg', 125000, 125000, 0, 202, 202, 0, 0, 1, 3, 1, '2023-11-22 00:35:41', '2025-03-07 16:19:26'),
(563, 66, 'ACT04', 'http://127.0.0.1:8000/storage/files/11/67cb1c1c2c447.jpeg', 125000, 125000, 0, 202, 202, 0, 0, 1, 4, 1, '2023-11-22 00:35:41', '2025-03-07 16:19:26'),
(564, 66, 'ACT04', 'http://127.0.0.1:8000/storage/files/11/67cb1c1c2c447.jpeg', 125000, 125000, 0, 202, 202, 0, 0, 1, 5, 1, '2023-11-22 00:35:41', '2025-03-07 16:19:26'),
(572, 67, 'GLK 195', 'http://127.0.0.1:8000/storage/files/11/67cb1afb11bd5.jpg', 279000, 279000, 0, 100, 99, 1, 0, 2, 14, 1, '2023-11-23 08:12:16', '2025-03-07 16:16:57'),
(573, 67, 'GLK 195', 'http://127.0.0.1:8000/storage/files/11/67cb1afb11bd5.jpg', 279000, 279000, 0, 100, 98, 0, 0, 2, 15, 1, '2023-11-23 08:12:16', '2025-03-07 16:16:57'),
(574, 67, 'GLK 195', 'http://127.0.0.1:8000/storage/files/11/67cb1afb11bd5.jpg', 279000, 279000, 0, 100, 100, 0, 0, 2, 16, 1, '2023-11-23 08:12:16', '2025-03-07 16:16:57'),
(575, 67, 'GLK 195', 'http://127.0.0.1:8000/storage/files/11/67cb1afb11bd5.jpg', 279000, 279000, 0, 100, 100, 0, 0, 2, 17, 1, '2023-11-23 08:12:16', '2025-03-07 16:16:57'),
(580, 67, 'GLK-195', 'http://127.0.0.1:8000/storage/files/11/67cb1bd66a2d5.jpeg', 279000, 279000, 0, 100, 100, 0, 1, 14, 14, 1, '2023-11-23 08:12:16', '2025-03-07 16:16:57'),
(581, 67, 'GLK-195', 'http://127.0.0.1:8000/storage/files/11/67cb1bd66a2d5.jpeg', 279000, 279000, 0, 100, 100, 0, 0, 14, 15, 1, '2023-11-23 08:12:16', '2025-03-07 16:16:57'),
(582, 67, 'GLK-195', 'http://127.0.0.1:8000/storage/files/11/67cb1bd66a2d5.jpeg', 279000, 279000, 0, 100, 100, 0, 0, 14, 16, 1, '2023-11-23 08:12:16', '2025-03-07 16:16:57'),
(583, 67, 'GLK-195', 'http://127.0.0.1:8000/storage/files/11/67cb1bd66a2d5.jpeg', 279000, 279000, 0, 100, 100, 0, 0, 14, 17, 1, '2023-11-23 08:12:16', '2025-03-07 16:16:57'),
(611, 66, 'ACT04', 'http://127.0.0.1:8000/storage/files/11/67cb1c59a649b.jpeg', 12555, 125000, 0, 100, 100, 0, 0, 4, 1, 1, '2025-03-07 16:19:26', '2025-03-07 16:19:26'),
(612, 66, 'ACT04', 'http://127.0.0.1:8000/storage/files/11/67cb1c59a649b.jpeg', 12555, 125000, 0, 100, 100, 0, 0, 4, 2, 1, '2025-03-07 16:19:26', '2025-03-07 16:19:26'),
(613, 66, 'ACT04', 'http://127.0.0.1:8000/storage/files/11/67cb1c59a649b.jpeg', 12555, 125000, 0, 100, 100, 0, 0, 4, 3, 1, '2025-03-07 16:19:26', '2025-03-07 16:19:26'),
(614, 66, 'ACT04', 'http://127.0.0.1:8000/storage/files/11/67cb1c77b90d5.jpeg', 12555, 125000, 0, 99, 99, 0, 0, 9, 1, 1, '2025-03-07 16:19:54', '2025-03-07 16:19:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `spins`
--

CREATE TABLE `spins` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expired` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expired_num` int NOT NULL DEFAULT '30',
  `photo` text COLLATE utf8mb4_unicode_ci,
  `photo_icon` text COLLATE utf8mb4_unicode_ci,
  `show_text` int NOT NULL DEFAULT '1',
  `duration` int NOT NULL DEFAULT '5',
  `spin` int NOT NULL DEFAULT '5',
  `rate` text COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `spins`
--

INSERT INTO `spins` (`id`, `title`, `title_1`, `title_2`, `condition`, `expired`, `expired_num`, `photo`, `photo_icon`, `show_text`, `duration`, `spin`, `rate`, `status`, `created_at`, `updated_at`) VALUES
(1, 'https://shop.tdptechnology.vn/storage/files/1/game10102023_title1.png', 'CHÚC MỪNG BẠN ĐÃ NHẬN ĐƯỢC QUÀ BẠN MỚI', 'ma code nhan thuong', 'DÀNH TẶNG KHÁCH HÀNG ĐĂNG KÝ THÀNH VIÊN LẦN ĐẦU TẠI WEBSITE TỪ 15.10', 'chi ap chung cho 30 ngay', 30, 'https://shop.tdptechnology.vn/storage/files/1/game10102023_Wheel_Spin2.png', 'https://shop.tdptechnology.vn/storage/files/1/game10102023_Wheel_Icon.png', 0, 5, 5, '66', 0, NULL, '2023-12-16 08:55:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `spin_items`
--

CREATE TABLE `spin_items` (
  `id` bigint UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `spin_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `spin_items`
--

INSERT INTO `spin_items` (`id`, `text`, `content`, `message`, `amount`, `type`, `spin_id`, `created_at`, `updated_at`) VALUES
(169, '15%', 'Giam 15%', NULL, 15, '1', 1, '2023-12-08 21:23:44', '2023-12-12 02:51:42'),
(170, '30K', 'Giam 30K', NULL, 30000, '0', 1, '2023-12-08 21:23:44', '2023-12-12 02:51:42'),
(171, 'lucky', 'lucky', NULL, 0, '0', 1, '2023-12-08 21:23:44', '2023-12-12 02:51:42'),
(172, 'lucky 2', 'lucky 2', NULL, 0, '0', 1, '2023-12-08 21:23:44', '2023-12-12 02:51:42'),
(173, '15%', 'giam 15%', NULL, 15, '1', 1, '2023-12-08 21:23:44', '2023-12-12 02:52:05'),
(174, '30K', 'Giam 30K', NULL, 30, '0', 1, '2023-12-08 21:23:44', '2023-12-12 02:51:42'),
(175, 'Lucky', 'lucky', NULL, 0, '0', 1, '2023-12-08 21:23:44', '2023-12-12 02:51:42'),
(176, 'Lucky 2', 'Lucky 212222', NULL, 0, '0', 1, '2023-12-08 21:23:44', '2023-12-12 02:51:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `role` int NOT NULL DEFAULT '3',
  `point` int NOT NULL DEFAULT '0',
  `point_bonus` int NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '1',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth` datetime DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `email_verified_at`, `password`, `photo`, `role`, `point`, `point_bonus`, `status`, `phone`, `birth`, `gender`, `ip`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'demo', 'ok', 'admin@gmail.com', '2023-10-28 10:01:39', '$2y$10$788YLwL6DGrO5q4SZIEerew3M4DOSCzlGvwsStutUx7fn9XkidyZW', 'admin/users/JeoJySNp8ngqipIFH70fFx2bxFsW18PyRaT0EVA5.jpg', 0, 0, 0, 1, NULL, NULL, '2', NULL, 'aswRYkQbGKPZlBACgdO0ZdvzGY0lkg8PSIEEVcV9oz3FJSbAiZktINdanA2Z', '2023-10-28 10:01:39', '2023-11-20 09:47:25'),
(2, 'alt sumn', NULL, 'mem@gmail.com', NULL, '$2y$10$NKo6mYa0rmkRjQTT6lgO7ej536iIe5OO1oLm9f6XUQtu/FELJcvBG', '', 3, 0, 0, 1, NULL, NULL, '', NULL, NULL, '2023-10-29 19:38:12', '2023-10-29 19:38:12'),
(3, '123131 313131313', NULL, 'admin1@gmail.com', NULL, '$2y$10$ObLxjN.Nk1/1k8.qGeUOTep1qA0clATmC8QnlLNcvglmmhKJdyi9G', NULL, 3, 0, 0, 1, NULL, '2023-10-11 00:00:00', '1', NULL, NULL, '2023-10-29 20:30:29', '2023-11-15 03:26:22'),
(4, 'ok', 'ok', 'ok@gmail.com', NULL, '$2y$10$MSv36dH59B5CRpuQeEKKFuhzD8absjFW2WlEs3cIM08R1l5.G3dlC', NULL, 3, 0, 0, 1, NULL, '2023-12-05 00:00:00', '1', NULL, 'K8n9hZH0t6A77MUIvkKgB5cFL3AR7An8ISro19vFaJAbF5oydYTTntRnGUHC', '2023-12-02 08:56:33', '2023-12-02 08:56:33'),
(5, '211212', '121212121', 'admin111@gmail.com', NULL, '$2y$10$h8DvKuKourmuBk22lPZZxe.nPgWAFjStdG736wpcdkJCelr.KuXCO', NULL, 3, 0, 0, 1, NULL, '2023-11-30 00:00:00', '1', NULL, NULL, '2023-12-12 04:13:48', '2023-12-12 04:13:48'),
(6, 'do viet', 'thang 1', 'admin123@gmail.com', NULL, '$2y$10$5DdM4lJofLSGykf2/lI.5e4uDSUHbqys/UDLQs/1Q5FxnZd1efj4u', NULL, 0, 0, 0, 1, NULL, '2024-03-27 00:00:00', '1', NULL, 'yuKUw6btbiT8lTN26LgG0KkxYX1bWkBVydKvPH26NoVbvba6zKcgyBg9xfd4', '2024-03-12 17:30:54', '2024-03-27 09:39:59'),
(7, 'do viet', 'thang', 'admin1234@gmail.com', NULL, '$2y$10$OwHya6DRkCj0wX0xgAfF7./xp6oI2kM7l7A5koAGET1owmmPFBfCS', NULL, 3, 0, 0, 1, NULL, NULL, '1', NULL, NULL, '2024-03-17 10:58:58', '2024-03-17 10:58:58'),
(8, 'do viet', 'thang', 'admin1235@gmail.com', NULL, '$2y$10$3oyd.eIYpN5knMS/ngoYfeXY35QIxUWTDmW0Jm1cU62peyxxYMC9K', NULL, 3, 0, 0, 1, NULL, NULL, '2', NULL, NULL, '2024-03-17 11:06:15', '2024-03-17 11:06:15'),
(9, 'do viet', 'thang', 'admin1236@gmail.com', NULL, '$2y$10$NfELGM6J5Ug6ZYfYtkMumueVOl3XR29BaIBp9eiRVFh.Tm/bCvrj2', NULL, 3, 0, 0, 1, NULL, '2024-03-16 00:00:00', '2', NULL, NULL, '2024-03-17 11:08:55', '2024-03-17 11:08:55'),
(10, 'do viet', 'thang', 'admin1237@gmail.com', NULL, '$2y$10$j3jdkpG6f9xhFvEiJ0wsIOtmOc7HNhKre6b6IUmB2Pdfzf/T.mtru', NULL, 3, 0, 0, 1, NULL, '2024-03-17 00:00:00', '1', NULL, NULL, '2024-03-17 11:16:44', '2024-03-17 11:16:44'),
(11, 'do viet', 'thang', 'account2@demo.com', NULL, '$2y$10$pv8ma272E8boH.LpACTVU.7cVE0C23pvGYlGoOayaZIK8p5tXE8CC', NULL, 0, 0, 0, 1, NULL, '2025-02-12 00:00:00', '1', NULL, 'pyNiBNFymX7cIafLTLZbGZTtnirSz5G7tpRDi25Jj4fC1DPPSEGlLEMNFA9G', '2025-02-12 13:13:00', '2025-02-12 13:13:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_email`
--

CREATE TABLE `user_email` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_email`
--

INSERT INTO `user_email` (`id`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mixalphakd@gmail.com', 1, '2023-12-02 09:51:42', '2023-12-02 09:51:42'),
(2, 'oko@gmail.com', 1, '2023-12-09 01:50:31', '2023-12-09 01:50:31'),
(3, 'edifavn@gmail.com', 1, '2023-12-12 01:00:04', '2023-12-12 01:00:04'),
(4, 'medifa522@gmail.com', 1, '2023-12-12 06:22:13', '2023-12-12 06:22:13'),
(5, 'admin123@gmail.com', 1, '2024-03-18 07:18:44', '2024-03-18 07:18:44');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account_spins`
--
ALTER TABLE `account_spins`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category_items`
--
ALTER TABLE `category_items`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category_posts`
--
ALTER TABLE `category_posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `colors_title_unique` (`title`);

--
-- Chỉ mục cho bảng `combo_items`
--
ALTER TABLE `combo_items`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `indexs`
--
ALTER TABLE `indexs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `item_coupons`
--
ALTER TABLE `item_coupons`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_title_unique` (`title`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_title_unique` (`title`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `setting2`
--
ALTER TABLE `setting2`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sizes_title_unique` (`title`);

--
-- Chỉ mục cho bảng `skus`
--
ALTER TABLE `skus`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `spins`
--
ALTER TABLE `spins`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `spin_items`
--
ALTER TABLE `spin_items`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `user_email`
--
ALTER TABLE `user_email`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account_spins`
--
ALTER TABLE `account_spins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `address`
--
ALTER TABLE `address`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `category_items`
--
ALTER TABLE `category_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT cho bảng `category_posts`
--
ALTER TABLE `category_posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `combo_items`
--
ALTER TABLE `combo_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `indexs`
--
ALTER TABLE `indexs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `item_coupons`
--
ALTER TABLE `item_coupons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT cho bảng `setting2`
--
ALTER TABLE `setting2`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `skus`
--
ALTER TABLE `skus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=615;

--
-- AUTO_INCREMENT cho bảng `spins`
--
ALTER TABLE `spins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `spin_items`
--
ALTER TABLE `spin_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `user_email`
--
ALTER TABLE `user_email`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
