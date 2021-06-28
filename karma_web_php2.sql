-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 19, 2021 lúc 05:21 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `karma_web_php2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title_blog` varchar(255) NOT NULL,
  `avatar_blog` varchar(255) DEFAULT NULL,
  `content_blog` text DEFAULT NULL,
  `view_blog` int(11) DEFAULT NULL,
  `type_blog` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id`, `title_blog`, `avatar_blog`, `content_blog`, `view_blog`, `type_blog`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'sdfgsdafasdf', 'uploads/6031cefc58970-post-img1.jpg', '<p>1234123</p>\r\n', NULL, 1, 98, NULL, 2021),
(11, 'bai viet moi nhat', 'uploads/603b9c7ff1b76-feature-img1.jpg', '<p>thin</p>\r\n', NULL, 4, 98, 2021, 2021),
(15, 'moiw', 'uploads/60274d3ac7b0f-men-bg.jpg', '', NULL, 3, 98, 2021, 2021);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cate_avatar` varchar(191) NOT NULL,
  `cate_name` varchar(191) NOT NULL,
  `type_detail` varchar(155) DEFAULT NULL,
  `show_menu` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `cate_avatar`, `cate_name`, `type_detail`, `show_menu`, `created_at`, `updated_at`) VALUES
(1, 'uploads/603c515007a24-https___hypebeast.com_image_2020_12_pharrell-adidas-hu-triple-black-collection-release-date-info-1.jpg', 'adidas', '123123123', NULL, NULL, '2021-02-28 20:28:32'),
(2, 'uploads/603c51641ccff-1595929938_Vans-Logo-Repeat-–-Tai-hien-lai-mot-phien-ban.jpg', 'vans', '', NULL, NULL, '2021-02-28 20:28:52'),
(11, 'uploads/603c522350a2b-gucci-hanoi-trang-tien-plaza-deponline-01-20200212.jpg', 'gucci', '1234', 0, '2021-02-12 22:36:36', '2021-02-28 20:32:03'),
(15, 'uploads/603c59bac98ce-Bitis_Hunter_Street_x_Viet_Max_Hanoi_Culture_Patchwork_7.jpg', 'bitis', 'made in vietnam', 0, '2021-02-28 21:04:26', '2021-02-28 21:04:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `title`, `content`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'deppp', 'moi that day', 100, 25, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` int(11) NOT NULL DEFAULT 0,
  `payment_method` int(11) NOT NULL DEFAULT 1,
  `confirm` int(11) DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `invoices`
--

INSERT INTO `invoices` (`id`, `customer_name`, `customer_phone_number`, `customer_email`, `customer_address`, `total_price`, `payment_method`, `confirm`, `note`, `created_at`, `updated_at`) VALUES
(5, 'tieu cuong', '089987789', 'cuongtieu@gmail.com', '15 dong quan', 42410, 1, 1, '', NULL, '2021-02-20 21:47:36'),
(7, 'thin13', '033342342222', 'thin@gmail.com', 'ha noi', 30000, 2, 1, '', '2021-02-20 21:42:39', '2021-02-24 02:00:20'),
(13, 'nguyen duy thin', '0336061285', 'nguyenduythin@gmail.com', 'ha noi', 283579, 1, 2, 'ship nhanh gium toi', '2021-02-28 09:19:34', '2021-02-28 09:19:34'),
(14, 'trần phúc ngọc', '0336128545', 'ngockk@gmail.com', 'mê linh, hà nội', 2318222, 2, 1, 'chẳng cần ship đâu', '2021-02-28 09:24:47', '2021-02-28 09:24:47'),
(15, 'người mới nhất', '099999999', 'nguoimoi@gmail.com', 'ha noi , viet nam', 165122, 1, 2, 'sản phẩm mới đấy', '2021-02-28 10:02:35', '2021-02-28 10:02:35'),
(17, 'nguoi mua moi', '0336061555', 'thin@gmail.com', 'haf nooiadfadas', 2067342, 2, 2, '34234', '2021-03-01 02:14:18', '2021-03-01 02:14:18'),
(38, 'bùi văn hùng', '0986454545', 'hungbv@gmail.com', 'mê lình, hà nội', 6830365, 2, 1, '<p>Mong chất lượng tốt</p>\r\n\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: -7px; top: 38.6px;\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n', '2021-03-02 10:41:42', '2021-03-09 04:08:27'),
(44, 'nguyen van duy', '123', '123@gmail.com', 'ha noi', 2035000, 2, 2, '123', '2021-03-02 18:39:44', '2021-03-02 18:39:44'),
(45, 'nguyen duy thin', '0336061254', 'thin@gmail.com', 'ha noi', 362380, 2, 1, 'ship nhanh', '2021-03-02 21:21:24', '2021-03-02 21:21:24'),
(46, 'moi nhat', '0336061254', 'thin@gmail.com', 'ha noi', 2362496, 2, 2, 'áđâs', '2021-03-03 04:12:21', '2021-03-03 04:12:21'),
(50, 'co gi', '0336061254', 'ok@gmail.com', 'asdfasdfad', 58330, 1, 1, '', '2021-03-04 22:04:56', '2021-03-04 22:04:56'),
(51, ' vy quan', '036452584', 'dfsdf@gmail.com', 'ha noi', 3344550, 2, 2, '<p>ship nhanh</p>\r\n', '2021-03-08 01:47:04', '2021-03-12 02:14:37'),
(52, 'lê anh tuấn', '03164524565', 'tuan@gmail.com', 'thanh xuân,hà nội', 30405000, 2, 2, '<p>ship đ&uacute;ng địa chỉ gi&ugrave;m t&ocirc;i !</p>\r\n', '2021-03-09 04:10:29', '2021-03-09 10:38:37'),
(53, 'test22222', '02156423513', 'tsss@gmail.com', 'ha noi,text', 447996, 2, 1, '', '2021-03-09 09:59:31', '2021-03-09 10:12:43'),
(55, 'thuan cc', '215324135241523', 'thuan@gmail.com', 'ha noi', 912150, 2, 2, '<p>12313</p>\r\n', '2021-03-12 02:16:31', '2021-03-12 02:17:23'),
(56, 'bui hung', '1234132423', 'hung@gmail.com', 'ha noi', 32000000, 2, 2, '<p>23423</p>\r\n', '2021-03-15 02:31:47', '2021-03-15 02:35:17'),
(58, '234234', '234234', 'thuan@gmail.com', '234234', 6035000, 1, 1, '234234', '2021-03-16 00:23:29', '2021-03-16 00:23:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invoice_detail`
--

CREATE TABLE `invoice_detail` (
  `id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `invoice_detail`
--

INSERT INTO `invoice_detail` (`id`, `invoice_id`, `product_id`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(5, 14, 23, 2, 250000, NULL, NULL),
(8, 14, 24, 123, 123123, NULL, NULL),
(22, 44, 23, 1, 2035000, '2021-03-02 18:39:44', '2021-03-02 18:39:44'),
(23, 45, 24, 1, 362380, '2021-03-02 21:21:24', '2021-03-02 21:21:24'),
(27, 50, 21, 10, 2333, '2021-03-04 22:04:56', '2021-03-04 22:04:56'),
(28, 51, 23, 111, 2000000, '2021-03-08 01:47:04', '2021-03-08 01:47:04'),
(29, 51, 24, 11, 304050, '2021-03-08 01:47:04', '2021-03-12 02:14:37'),
(30, 52, 23, 14, 2000000, '2021-03-09 04:10:29', '2021-03-09 09:47:25'),
(31, 52, 24, 100, 304050, '2021-03-09 04:10:29', '2021-03-09 10:38:37'),
(32, 53, 21, 4, 2333, '2021-03-09 09:59:31', '2021-03-09 10:12:43'),
(34, 55, 23, 9, 2000000, '2021-03-12 02:16:31', '2021-03-12 02:16:31'),
(35, 55, 24, 3, 304050, '2021-03-12 02:16:31', '2021-03-12 02:17:23'),
(36, 56, 23, 16, 2000000, '2021-03-15 02:31:47', '2021-03-15 02:35:17'),
(38, 58, 23, 3, 2000000, '2021-03-16 00:23:29', '2021-03-16 00:23:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_01_05_070735_create_categories_table', 2),
(5, '2019_01_05_072544_alter_table_categories_update_column', 3),
(6, '2019_01_05_074643_create_products_table', 3),
(7, '2019_01_05_075227_create_invoices_table', 4),
(8, '2019_01_05_075449_create_invoice_detail_table', 4),
(9, '2019_01_12_014833_alter_table_products_add_views_column', 5),
(10, '2019_01_12_021523_create_table_product_galleries', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `image` varchar(191) NOT NULL,
  `price` int(11) NOT NULL,
  `short_desc` varchar(150) NOT NULL,
  `detail` text DEFAULT NULL,
  `star` int(11) DEFAULT 0,
  `views` int(11) DEFAULT NULL,
  `cate_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `short_desc`, `detail`, `star`, `views`, `cate_id`, `created_at`, `updated_at`) VALUES
(21, 'giày kkam ', 'uploads/603e64dd6dfc1-x9000l3-w.jpg', 2333, 'môi moi', '<p><strong><s>cuộc sống v&ocirc; mmcmcc</s></strong></p>\r\n', 0, 138, 11, '2021-02-06 21:14:53', '2021-03-18 22:11:03'),
(23, 'giày 1 ', 'uploads/603e64d5920da-123.jpg', 2000000, 'sản phẩm mới nhất', '<p>efsdf</p>\r\n', 0, 124, 2, '2021-02-12 21:58:54', '2021-03-18 22:10:20'),
(24, 'giày 2', 'uploads/603e64b3c1c0e-620337_2ET10_8761_001_100_0000_Light-Mens-Ultrapace-R-sneaker.jpg', 304050, '123123123', '<p>New Season</p>\r\n\r\n<p><a href=\"https://www.farfetch.com/vn/shopping/women/off-white/items.aspx\">Off-White</a>Odsy-100 Arrow sneakers</p>\r\n\r\n<p>The chunkier, the better. With their bold ridged-sole design and signature Zip Tie detailing, the Odsy-1000 sneakers are ready to take charge of your looks Courtesy of Off-White.</p>\r\n\r\n<p>Highlights</p>\r\n\r\n<ul>\r\n	<li>white</li>\r\n	<li>signature Arrows motif</li>\r\n	<li>signature Zip Tie tag</li>\r\n	<li>branded insole</li>\r\n	<li>pull-tab at the heel</li>\r\n	<li>round toe</li>\r\n	<li>front lace-up fastening</li>\r\n	<li>ridged rubber sole</li>\r\n</ul>\r\n\r\n<p>Composition</p>\r\n\r\n<p>Sole: Rubber 100%</p>\r\n\r\n<p>Outer: Polyester 100%</p>\r\n\r\n<p>Lining: Polyester 100%</p>\r\n\r\n<p>Designer Style ID:&nbsp;OWIA180R21FAB0010105</p>\r\n', 0, 25, 2, '2021-02-12 21:59:13', '2021-03-15 02:29:45'),
(25, 'giày 3', 'uploads/603e64eb70b17-623151_H9T40_8476_001_100_0000_Light-Mens-two-tone-Ultrapace-R-sneaker.jpg', 30009, '234', '<p>C&Aacute;C ĐẶC ĐIỂM NỔI BẬT</p>\r\n\r\n<p><img alt=\"\" src=\"https://assets.adidas.com/images/w_600,f_auto,q_auto/f2bb53da39114487a9fbab1400f8cfac_9366/Giay_Superstar_trang_EG4958.jpg\" /></p>\r\n\r\n<p>THIẾT KẾ BIỂU TƯỢNG</p>\r\n\r\n<p>Suốt hơn 50 năm, đ&ocirc;i sneaker adidas Superstar lu&ocirc;n l&agrave; lựa chọn h&agrave;ng đầu của c&aacute;c huyền thoại thể thao v&agrave; thời trang đường phố, kết nối c&aacute;c nh&agrave; kiến tạo đến từ mọi nền văn h&oacute;a.</p>\r\n\r\n<p><img alt=\"\" src=\"https://assets.adidas.com/images/w_600,f_auto,q_auto/79ab65b6b5c241b8ab3eab1400f8d49b_9366/Giay_Superstar_trang_EG4958.jpg\" /></p>\r\n\r\n<p>C&Aacute;C CHI TIẾT ĐẶC TRƯNG</p>\r\n\r\n<p>Mũi gi&agrave;y vỏ s&ograve; dễ d&agrave;ng nhận diện ngay lập tức kết hợp với ba sọc viền răng cưa v&agrave; c&aacute;c điểm nhấn adidas Originals.</p>\r\n\r\n<p><img alt=\"\" src=\"https://assets.adidas.com/images/w_600,f_auto,q_auto/22a4b7471afd415581d0ab1400f8d91e_9366/Giay_Superstar_trang_EG4958.jpg\" /></p>\r\n\r\n<p>CHẤT LIỆU CAO CẤP</p>\r\n\r\n<p>Lu&ocirc;n hợp mốt, gi&agrave;y c&oacute; kiểu d&aacute;ng kinh điển với chất liệu da cật tăng cường độ bền chắc v&agrave; thoải m&aacute;i.</p>\r\n\r\n<p>GI&Agrave;Y SUPERSTAR</p>\r\n\r\n<p>THIẾT KẾ CỔ THẤP ĐẶC TRƯNG VỚI MŨI GI&Agrave;Y VỎ S&Ograve;.</p>\r\n\r\n<p>Thiết kế ban đầu d&agrave;nh cho s&acirc;n b&oacute;ng rổ v&agrave;o thập ni&ecirc;n 70. Được c&aacute;c ng&ocirc;i sao hip hop t&ocirc;n s&ugrave;ng v&agrave;o thập ni&ecirc;n 80. Đ&ocirc;i gi&agrave;y adidas Superstar giờ đ&acirc;y đ&atilde; trở th&agrave;nh biểu tượng của c&aacute;c t&iacute;n đồ thời trang đường phố. Thiết kế mũi gi&agrave;y vỏ s&ograve; nổi tiếng thế giới mang đến phong c&aacute;ch chất lừ v&agrave; khả năng bảo vệ. Giống như những g&igrave; đ&ocirc;i gi&agrave;y n&agrave;y đ&atilde; thể hiện tr&ecirc;n s&acirc;n b&oacute;ng rổ trong qu&aacute; khứ.&nbsp; &nbsp; Giờ đ&acirc;y, bạn c&oacute; thể tự tin tham gia lễ hội &acirc;m nhạc hay dạo phố m&agrave; kh&ocirc;ng sợ bị dẫm l&ecirc;n ch&acirc;n. Chi tiết 3 Sọc viền răng cưa v&agrave; logo adidas Superstar đ&oacute;ng khung mang đậm phong c&aacute;ch nguy&ecirc;n bản ch&iacute;nh hiệu.</p>\r\n\r\n<p><img alt=\"\" src=\"https://assets.adidas.com/images/w_600,f_auto,q_auto/ff2e419f1eda4ebab23faad6009a3a9e_9366/Giay_Superstar_trang_EG4958.jpg\" /></p>\r\n\r\n<p>TH&Ocirc;NG SỐ</p>\r\n\r\n<ul>\r\n	<li>C&oacute; d&acirc;y buộc</li>\r\n	<li>Th&acirc;n gi&agrave;y bằng da</li>\r\n	<li>Biểu tượng gi&agrave;y da</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Đế ngo&agrave;i bằng cao su</li>\r\n	<li>M&agrave;u sản phẩm: Cloud White / Core Black / Cloud White</li>\r\n	<li>M&atilde; sản phẩm: EG4958</li>\r\n</ul>\r\n\r\n<p><img src=\"https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/viVN/Images/originals-ss20-superstar-drop2-launch-pdp-statement-eg4958-onfoot-v1-d_tcm337-445576.jpg\" /></p>\r\n\r\n<p>50 năm đ&atilde; tr&ocirc;i qua kể từ khi đ&ocirc;i gi&agrave;y mũi vỏ s&ograve; lừng danh ra đời. Từ những vận động vi&ecirc;n gi&aacute; trị nhất đến c&aacute;c rapper xuất sắc nhất, Superstar trở th&agrave;nh một phần kh&ocirc;ng thể thiếu trong c&aacute;c bữa tiệc thời trang. Được truyền tay nhau qua nhiều thập kỉ, xuất hiện tr&ecirc;n cả s&acirc;n đấu lẫn ngo&agrave;i đường phố, đ&ocirc;i gi&agrave;y n&agrave;y đ&atilde; trở n&ecirc;n quen thuộc với giới nghệ sĩ, thiết kế, nhạc sĩ v&agrave; c&aacute;c vận động vi&ecirc;n. Đ&ocirc;i gi&agrave;y n&agrave;y đại diện cho một thứ duy nhất&mdash;những c&aacute; nh&acirc;n tạo ra sự thay đổi tr&ecirc;n s&acirc;n đấu. Đ&acirc;y l&agrave; đ&ocirc;i gi&agrave;y của những người thay đổi thể thao đồng đội.</p>\r\n\r\n<p><img src=\"https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/viVN/Images/originals-ss20-superstar-drop2-launch-pdp-statement-eg4957-yearbook-v2-d_tcm337-445574.jpg\" /></p>\r\n', 0, 15, 15, '2021-02-12 21:59:37', '2021-03-02 18:37:03'),
(26, 'giày 4', 'uploads/603e6504e04a5-643489_2KQ20_4465_001_100_0000_Light-Mens-Gucci-Tennis-1977-slip-on-sneaker.jpg', 1234, '123123', '', 0, 28, 1, '2021-02-12 21:59:56', '2021-03-02 18:31:31'),
(37, 'giày 6', 'uploads/603e64fb22486-643489_2HK30_9761_001_100_0000_Light-Mens-Gucci-Tennis-1977-slip-on-sneaker.jpg', 1234444, 'sản phẩm mới nhất ádfadfsdfsdfsdfsdfsdf', '<p><a href=\"https://vansvietnam.vn/vans-old-skool?aelang=vi\"><strong>VANS OLD SKOOL</strong></a>&nbsp;l&agrave; phi&ecirc;n bản được fan h&acirc;m mộ của&nbsp;<strong>VANS</strong>&nbsp;ưa th&iacute;ch nhất bởi kiểu d&aacute;ng đơn giản nhưng vẫn hợp thời trang. Với đế cao su độ b&aacute;m tốt c&ugrave;ng thiết kế tối ưu cho m&ocirc;n trượt v&aacute;n, BMX v&agrave; c&aacute;c m&ocirc;n thể thao mạo hiểm kh&aacute;c, những lĩnh vực&nbsp;<strong>VANS</strong>&nbsp;nhắm tới ho&agrave;n to&agrave;n l&agrave; thể thao mạo hiểm với những chương tr&igrave;nh v&agrave; cuộc thi hấp dẫn tại US.</p>\r\n\r\n<h2><em><strong>VANS Classic Old Skool Navy/White:</strong></em></h2>\r\n\r\n<p>D&ugrave; kh&ocirc;ng nằm trong mục&nbsp;<em>Best Seller</em>&nbsp;của&nbsp;<strong>VANS</strong>&nbsp;nhưng vẫn l&agrave; một trong những phi&ecirc;n bản l&acirc;u đời nhất của d&ograve;ng&nbsp;<strong>Old Skool</strong>&nbsp;v&agrave; vẫn c&oacute; một lượng fan h&acirc;m mộ của&nbsp;<strong>VANS</strong>&nbsp;từ khi ra đời năm 1977</p>\r\n\r\n<p><img alt=\"VANS Việt Nam - VANS CLASSIC OLD SKOOL NAVY WHITE VN000D3HNVY1\" src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-classic-old-skool-navy-white-vn000d3hnvy1-1.png?v=1507804863297\" /><img alt=\"VANS Việt Nam - VANS CLASSIC OLD SKOOL NAVY WHITE VN000D3HNVY1\" src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-classic-old-skool-navy-white-vn000d3hnvy1-2.png?v=1507804863297\" /></p>\r\n\r\n<p><img alt=\"VANS Việt Nam - VANS CLASSIC OLD SKOOL NAVY WHITE VN000D3HNVY1\" src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-classic-old-skool-navy-white-vn000d3hnvy1-3.png?v=1507804863297\" /><img alt=\"VANS Việt Nam - VANS CLASSIC OLD SKOOL NAVY WHITE VN000D3HNVY1\" src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-classic-old-skool-navy-white-vn000d3hnvy1-4.png?v=1507804863297\" /><img alt=\"VANS Việt Nam - VANS CLASSIC OLD SKOOL NAVY WHITE VN000D3HNVY1\" src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-classic-old-skool-navy-white-vn000d3hnvy1-5.png?v=1507804863297\" /></p>\r\n\r\n<h2><a href=\"https://vansvietnam.com/all-vans?aelang=vi\">SẢN PHẨM LI&Ecirc;N QUAN</a></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://vansvietnam.com/vans-old-skool-classic-black-white?aelang=vi\"><img alt=\"VANS OLD SKOOL CLASSIC BLACK/WHITE\" src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-old-skool-classic-black-white-vn000d3hy28-1.png?v=1613362100000\" /></a></p>\r\n\r\n<p>36</p>\r\n\r\n<p>37</p>\r\n\r\n<p>38</p>\r\n\r\n<p>38.5</p>\r\n\r\n<h3><a href=\"https://vansvietnam.com/vans-old-skool-classic-black-white?aelang=vi\">VANS OLD SKOOL CLASSIC BLACK/WHITE</a></h3>\r\n\r\n<p>1.499.000₫&nbsp;1.750.000₫</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://vansvietnam.com/vans-classic-authentic-black-white?aelang=vi\"><img alt=\"VANS CLASSIC AUTHENTIC BLACK/WHITE\" src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-classic-authentic-black-white-vn000ee3blk-1.png?v=1523072586000\" /></a></p>\r\n\r\n<p>38.5</p>\r\n\r\n<p>43</p>\r\n\r\n<h3><a href=\"https://vansvietnam.com/vans-classic-authentic-black-white?aelang=vi\">VANS CLASSIC AUTHENTIC BLACK/WHITE</a></h3>\r\n\r\n<p>1.450.000₫</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://vansvietnam.com/vans-old-skool-sidestripe-v-white-vn0a38g1upc?aelang=vi\"><img alt=\"VANS OLD SKOOL SIDESTRIPE V WHITE\" src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-old-skool-sidestripe-v-white-vn0a38g1upc-1.jpg?v=1549186420000\" /></a></p>\r\n\r\n<p>35</p>\r\n\r\n<h3><a href=\"https://vansvietnam.com/vans-old-skool-sidestripe-v-white-vn0a38g1upc?aelang=vi\">VANS OLD SKOOL SIDESTRIPE V WHITE</a></h3>\r\n\r\n<p>1.700.000₫</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://vansvietnam.com/vans-canvas-old-skool-classic-true-white?aelang=vi\"><img alt=\"VANS CANVAS OLD SKOOL CLASSIC TRUE WHITE\" src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-canvas-old-skool-classic-true-white-1.png?v=1523071923000\" /></a></p>\r\n\r\n<p>36</p>\r\n\r\n<p>38.5</p>\r\n\r\n<p>43</p>\r\n\r\n<h3><a href=\"https://vansvietnam.com/vans-canvas-old-skool-classic-true-white?aelang=vi\">VANS CANVAS OLD SKOOL CLASSIC TRUE WHITE</a></h3>\r\n\r\n<p>1.750.000₫</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://vansvietnam.com/vans-og-authentic-lx-canvas-suede-checkerboard-majolica-vn000uddu9j?aelang=vi\"><img alt=\"VANS VAULT OG AUTHENTIC LX (CANVAS/SUEDE) CHECKERBOARD/MAJOLICA\" src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-og-authentic-lx-canvas-suede-checkerboard-majolica-vn000uddu9j-1.jpg?v=1538659822000\" /></a></p>\r\n\r\n<p>36</p>\r\n\r\n<h3><a href=\"https://vansvietnam.com/vans-og-authentic-lx-canvas-suede-checkerboard-majolica-vn000uddu9j?aelang=vi\">VANS VAULT OG AUTHENTIC LX (CANVAS/SUEDE) CHECKERBOARD/MAJOLICA</a></h3>\r\n\r\n<p>1.700.000₫</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://vansvietnam.com/vans-checkerboard-authentic-anaheim-44-dx-vn0a38enoak?aelang=vi\"><img alt=\"VANS CHECKERBOARD AUTHENTIC ANAHEIM 44 DX\" src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-checkerboard-authentic-anaheim-44-dx-vn0a38enoak-1.jpg?v=1544623534000\" /></a></p>\r\n\r\n<p>35</p>\r\n\r\n<p>40</p>\r\n\r\n<p>40.5</p>\r\n\r\n<p>41</p>\r\n\r\n<p>43</p>\r\n\r\n<h3><a href=\"https://vansvietnam.com/vans-checkerboard-authentic-anaheim-44-dx-vn0a38enoak?aelang=vi\">VANS CHECKERBOARD AUTHENTIC ANAHEIM 44 DX</a></h3>\r\n\r\n<p>1.900.000₫</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://vansvietnam.com/vans-sun-faded-old-skool-black-vn0a38g1r1n?aelang=vi\"><img alt=\"VANS SUN FADED OLD SKOOL BLACK\" src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-sun-faded-old-skool-black-vn0a38g1r1n-1.jpg?v=1525830049000\" /></a></p>\r\n\r\n<p>35</p>\r\n\r\n<h3><a href=\"https://vansvietnam.com/vans-sun-faded-old-skool-black-vn0a38g1r1n?aelang=vi\">VANS SUN FADED OLD SKOOL BLACK</a></h3>\r\n\r\n<p>1.650.000₫</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://vansvietnam.com/vans-classic-authentic-true-white?aelang=vi\"><img alt=\"VANS CLASSIC AUTHENTIC TRUE WHITE\" src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-classic-authentic-true-white-vn000ee3w00-1.jpg?v=1523418376000\" /></a></p>\r\n\r\n<p>40</p>\r\n\r\n<p>40.5</p>\r\n\r\n<p>41</p>\r\n\r\n<p>42</p>\r\n\r\n<p>42.5</p>\r\n\r\n<h3><a href=\"https://vansvietnam.com/vans-classic-authentic-true-white?aelang=vi\">VANS CLASSIC AUTHENTIC TRUE WHITE</a></h3>\r\n\r\n<p>1.450.000₫</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://vansvietnam.com/vans-style-36-otw-repeat-vn0a3dz3rxl?aelang=vi\"><img alt=\"VANS OLD SKOOL STYLE 36 (OTW REPEAT)\" src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-style-36-otw-repeat-vn0a3dz3rxl-1.jpg?v=1542207110000\" /></a></p>\r\n\r\n<p>35</p>\r\n\r\n<p>38.5</p>\r\n\r\n<h3><a href=\"https://vansvietnam.com/vans-style-36-otw-repeat-vn0a3dz3rxl?aelang=vi\">VANS OLD SKOOL STYLE 36 (OTW REPEAT)</a></h3>\r\n\r\n<p>1.700.000₫</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://vansvietnam.com/vans-checker-flame-old-skool-navy-true-white-vn0a38g1rx6?aelang=vi\"><img alt=\"VANS CHECKER FLAME OLD SKOOL NAVY/TRUE WHITE\" src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-checker-flame-old-skool-navy-true-white-vn0a38g1rx6-1.png?v=1542207780000\" /></a></p>\r\n\r\n<p>35</p>\r\n\r\n<h3><a href=\"https://vansvietnam.com/vans-checker-flame-old-skool-navy-true-white-vn0a38g1rx6?aelang=vi\">VANS CHECKER FLAME OLD SKOOL NAVY/TRUE WHITE</a></h3>\r\n\r\n<p>1.650.000₫</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://vansvietnam.com/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou?aelang=vi\"><img alt=\"VANS DALLAS CLAYTON AUTHENTIC RAINBOW TRUE WHITE\" src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou-1.jpg?v=1523252455000\" /></a></p>\r\n\r\n<p>36</p>\r\n\r\n<h3><a href=\"https://vansvietnam.com/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou?aelang=vi\">VANS DALLAS CLAYTON AUTHENTIC RAINBOW TRUE WHITE</a></h3>\r\n\r\n<p>1.800.000₫</p>\r\n', 0, 43, 11, '2021-02-12 22:37:04', '2021-03-02 20:25:50'),
(45, 'Men\'s GG Gucci Tennis 1977 sneaker', 'uploads/603e655db8351-498916_A9L00_9522_001_100_0000_Light-Mens-Rhyton-leather-sneaker.jpg', 840, 'The low-top sneaker is presented in original GG canvas in its classic colour combination of beige and ebony. The style combines different elements fro', '<ul>\r\n	<li>Beige/ebony original GG canvas</li>\r\n	<li>White contrast details</li>\r\n	<li>Green and red Web</li>\r\n	<li>Green grosgrain trim</li>\r\n	<li>Gucci Tennis 1977 label</li>\r\n	<li>GG motif at the sole</li>\r\n	<li>Rubber sole</li>\r\n	<li>15mm height</li>\r\n	<li>Made in Italy</li>\r\n	<li>This product has not been made using materials of animal origin</li>\r\n</ul>\r\n', 0, 12, 11, '2021-02-28 20:11:21', '2021-03-03 03:30:32'),
(47, 'Men\'s Gucci Tennis 1977 high top sneaker', 'uploads/603c4f7a67893-500877_DRW00_9522_001_100_0000_Light-Mens-Rhyton-Gucci-logo-leather-sneaker.jpg', 935, 'The low-top sneaker is presented in original GG canvas in its classic colour combination of beige and ebony. The style combines different elements fro', '<p>The Gucci Tennis 1977 sneaker is presented in a high-top version for the Pre-Fall 2020 collection. Crafted from a monogram canvas that combines with the textured GG motif at the sole and the House Web. The style is finished with a dedicated label with the name of the line and a subtle embroidered detail of the number 77.</p>\r\n\r\n<ul>\r\n	<li>Beige/ebony original GG canvas</li>\r\n	<li>Men&#39;s</li>\r\n	<li>Green and red Web</li>\r\n	<li>White contrast details</li>\r\n	<li>Green grosgrain trim</li>\r\n	<li>Gucci Tennis 1977 label</li>\r\n	<li>GG motif at the sole</li>\r\n	<li>&quot;77&quot; embroidery</li>\r\n	<li>Rubber sole</li>\r\n	<li>20mm height</li>\r\n	<li>12.5cm boot shaft height, measurements based on a size 43 (IT)</li>\r\n	<li>Made in Italy</li>\r\n	<li>This product has not been made using materials of animal origin</li>\r\n</ul>\r\n', 0, 7, 11, '2021-02-28 20:20:24', '2021-03-08 01:41:40'),
(58, 'GIÀY SUPERSTAR', 'uploads/603e643e67c7d-4d-run-1.0.jpg', 1220, 'Thiết kế ban đầu dành cho sân bóng rổ vào thập niên 70. Được các ngôi sao hip hop tôn sùng vào thập niên 80. Đôi giày adidas Superstar giờ đây đã trở ', '<p>C&Aacute;C ĐẶC ĐIỂM NỔI BẬT</p>\r\n\r\n<p><img alt=\"\" src=\"https://assets.adidas.com/images/w_600,f_auto,q_auto/f2bb53da39114487a9fbab1400f8cfac_9366/Giay_Superstar_trang_EG4958.jpg\" /></p>\r\n\r\n<p>THIẾT KẾ BIỂU TƯỢNG</p>\r\n\r\n<p>Suốt hơn 50 năm, đ&ocirc;i sneaker adidas Superstar lu&ocirc;n l&agrave; lựa chọn h&agrave;ng đầu của c&aacute;c huyền thoại thể thao v&agrave; thời trang đường phố, kết nối c&aacute;c nh&agrave; kiến tạo đến từ mọi nền văn h&oacute;a.</p>\r\n\r\n<p><img alt=\"\" src=\"https://assets.adidas.com/images/w_600,f_auto,q_auto/79ab65b6b5c241b8ab3eab1400f8d49b_9366/Giay_Superstar_trang_EG4958.jpg\" /></p>\r\n\r\n<p>C&Aacute;C CHI TIẾT ĐẶC TRƯNG</p>\r\n\r\n<p>Mũi gi&agrave;y vỏ s&ograve; dễ d&agrave;ng nhận diện ngay lập tức kết hợp với ba sọc viền răng cưa v&agrave; c&aacute;c điểm nhấn adidas Originals.</p>\r\n\r\n<p><img alt=\"\" src=\"https://assets.adidas.com/images/w_600,f_auto,q_auto/22a4b7471afd415581d0ab1400f8d91e_9366/Giay_Superstar_trang_EG4958.jpg\" /></p>\r\n\r\n<p>CHẤT LIỆU CAO CẤP</p>\r\n\r\n<p>Lu&ocirc;n hợp mốt, gi&agrave;y c&oacute; kiểu d&aacute;ng kinh điển với chất liệu da cật tăng cường độ bền chắc v&agrave; thoải m&aacute;i.</p>\r\n\r\n<p>GI&Agrave;Y SUPERSTAR</p>\r\n\r\n<p>THIẾT KẾ CỔ THẤP ĐẶC TRƯNG VỚI MŨI GI&Agrave;Y VỎ S&Ograve;.</p>\r\n\r\n<p>Thiết kế ban đầu d&agrave;nh cho s&acirc;n b&oacute;ng rổ v&agrave;o thập ni&ecirc;n 70. Được c&aacute;c ng&ocirc;i sao hip hop t&ocirc;n s&ugrave;ng v&agrave;o thập ni&ecirc;n 80. Đ&ocirc;i gi&agrave;y adidas Superstar giờ đ&acirc;y đ&atilde; trở th&agrave;nh biểu tượng của c&aacute;c t&iacute;n đồ thời trang đường phố. Thiết kế mũi gi&agrave;y vỏ s&ograve; nổi tiếng thế giới mang đến phong c&aacute;ch chất lừ v&agrave; khả năng bảo vệ. Giống như những g&igrave; đ&ocirc;i gi&agrave;y n&agrave;y đ&atilde; thể hiện tr&ecirc;n s&acirc;n b&oacute;ng rổ trong qu&aacute; khứ.&nbsp; &nbsp; Giờ đ&acirc;y, bạn c&oacute; thể tự tin tham gia lễ hội &acirc;m nhạc hay dạo phố m&agrave; kh&ocirc;ng sợ bị dẫm l&ecirc;n ch&acirc;n. Chi tiết 3 Sọc viền răng cưa v&agrave; logo adidas Superstar đ&oacute;ng khung mang đậm phong c&aacute;ch nguy&ecirc;n bản ch&iacute;nh hiệu.</p>\r\n\r\n<p><img alt=\"\" src=\"https://assets.adidas.com/images/w_600,f_auto,q_auto/ff2e419f1eda4ebab23faad6009a3a9e_9366/Giay_Superstar_trang_EG4958.jpg\" /></p>\r\n\r\n<p>TH&Ocirc;NG SỐ</p>\r\n\r\n<ul>\r\n	<li>C&oacute; d&acirc;y buộc</li>\r\n	<li>Th&acirc;n gi&agrave;y bằng da</li>\r\n	<li>Biểu tượng gi&agrave;y da</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Đế ngo&agrave;i bằng cao su</li>\r\n	<li>M&agrave;u sản phẩm: Cloud White / Core Black / Cloud White</li>\r\n	<li>M&atilde; sản phẩm: EG4958</li>\r\n</ul>\r\n\r\n<p><img src=\"https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/viVN/Images/originals-ss20-superstar-drop2-launch-pdp-statement-eg4958-onfoot-v1-d_tcm337-445576.jpg\" /></p>\r\n\r\n<p>50 năm đ&atilde; tr&ocirc;i qua kể từ khi đ&ocirc;i gi&agrave;y mũi vỏ s&ograve; lừng danh ra đời. Từ những vận động vi&ecirc;n gi&aacute; trị nhất đến c&aacute;c rapper xuất sắc nhất, Superstar trở th&agrave;nh một phần kh&ocirc;ng thể thiếu trong c&aacute;c bữa tiệc thời trang. Được truyền tay nhau qua nhiều thập kỉ, xuất hiện tr&ecirc;n cả s&acirc;n đấu lẫn ngo&agrave;i đường phố, đ&ocirc;i gi&agrave;y n&agrave;y đ&atilde; trở n&ecirc;n quen thuộc với giới nghệ sĩ, thiết kế, nhạc sĩ v&agrave; c&aacute;c vận động vi&ecirc;n. Đ&ocirc;i gi&agrave;y n&agrave;y đại diện cho một thứ duy nhất&mdash;những c&aacute; nh&acirc;n tạo ra sự thay đổi tr&ecirc;n s&acirc;n đấu. Đ&acirc;y l&agrave; đ&ocirc;i gi&agrave;y của những người thay đổi thể thao đồng đội.</p>\r\n\r\n<p><img src=\"https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/viVN/Images/originals-ss20-superstar-drop2-launch-pdp-statement-eg4957-yearbook-v2-d_tcm337-445574.jpg\" /></p>\r\n', 0, NULL, 1, '2021-03-02 10:13:50', '2021-03-02 10:13:50'),
(59, 'vans Old shoocld ', 'uploads/603e64a628e97-634298_2FS20_8370_001_100_0000_Light-Mens-Ultrapace-R-sneaker.jpg', 3600, 'Authentic là thiết kế đặc biệt kết hợp giữa VANS Classic Authentic và Sneaker, được ra mắt sớm nhất từ năm 1966 với tên gọi Vans #44, được trang bị đế', '<p><em><strong>Authentic</strong></em>&nbsp;l&agrave; thiết kế&nbsp;đặc biệt&nbsp;kết hợp giữa&nbsp;<a href=\"https://vansvietnam.vn/vans-slip-on?aelang=vi\">VANS Classic Authentic</a>&nbsp;v&agrave;&nbsp;<strong><em>Sneaker</em></strong>, được ra mắt sớm nhất từ năm 1966 với t&ecirc;n gọi&nbsp;<strong>Vans #44</strong>,&nbsp;được trang bị&nbsp;đế cao su độ b&aacute;m tốt cho những m&ocirc;n thể thao mạo hiểm như trượt v&aacute;n, BMX v.v..., upper vải&nbsp;<em>canvas&nbsp;</em>cao cấp,&nbsp;phong c&aacute;ch cổ điển&nbsp;hợp với cả nam lẫn nữ.</p>\r\n\r\n<h2><em><strong>VANS CLASSIC AUTHENTIC BLACK/WHITE:</strong></em></h2>\r\n\r\n<p>L&agrave; phi&ecirc;n bản được ưa chuộng nhất trong bộ sưu tập&nbsp;<em><strong>Authentic</strong></em>&nbsp;của&nbsp;<strong>VANS</strong>, với sự kết hợp&nbsp;m&agrave;u đen trắng dễ phối đồ v&agrave; custom, đặc biệt l&agrave; phi&ecirc;n bản cổ nhất c&oacute; tuổi đời hơn 50 năm.</p>\r\n\r\n<p><img alt=\"VANS Việt Nam - VANS CLASSIC AUTHENTIC BLACK WHITE VN000EE3BLK\" src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-classic-authentic-black-white-vn000ee3blk-1.png?v=1507809735137\" /><img alt=\"VANS Việt Nam - VANS CLASSIC AUTHENTIC BLACK WHITE VN000EE3BLK\" src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-classic-authentic-black-white-vn000ee3blk-3.png?v=1507809735137\" /><img alt=\"VANS Việt Nam - VANS CLASSIC AUTHENTIC BLACK WHITE VN000EE3BLK\" src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-classic-authentic-black-white-vn000ee3blk-4.png?v=1507809735137\" /><img alt=\"VANS Việt Nam - VANS CLASSIC AUTHENTIC BLACK WHITE VN000EE3BLK\" src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-classic-authentic-black-white-vn000ee3blk-5.png?v=1507809735137\" /><img alt=\"VANS Việt Nam - VANS CLASSIC AUTHENTIC BLACK WHITE VN000EE3BLK\" src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-classic-authentic-black-white-vn000ee3blk-6.png?v=1507809735137\" /><img alt=\"VANS Việt Nam - VANS CLASSIC AUTHENTIC BLACK WHITE VN000EE3BLK\" src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-classic-authentic-black-white-vn000ee3blk-2.png?v=1507809735137\" /></p>\r\n', 0, 1, 2, '2021-03-02 10:15:34', '2021-03-02 10:39:54'),
(60, 'GVB bitisss', 'uploads/603e675f7ff1b-643491_2H040_1093_001_100_0000_Light-Rhyton-Herrensneaker.jpg', 123123, 'giày mỹ chất lượng việt', '<p>sản phẩm đặc biệt của ch&uacute;ng tối!</p>\r\n', 0, 4, 15, '2021-03-02 10:27:11', '2021-03-09 07:03:40'),
(61, 'VANS DALLAS CLAYTON AUTHENTIC RAINBOW TRUE WHITE', 'uploads/603ef24f6c6db-645277_2LM30_1295_001_100_0000_Light-Gucci-Tennis-1977-Sneaker-mit-Print-von-Ken-Scott.jpg', 500, 'DALLAS CLAYTON là một tác giả và họa sĩ minh hoạ sách cho thiếu nhi, với những suy nghĩ hài hước, phù hợp với những suy nghĩ của đại đa số sự dễ thươn', '<h1>VANS DALLAS CLAYTON AUTHENTIC RAINBOW TRUE WHITE</h1>\r\n\r\n<p>&nbsp;34.5 - 1.800.000₫&nbsp;35 - 1.800.000₫&nbsp;36 - 1.800.000₫&nbsp;36.5 - 1.800.000₫&nbsp;37 - 1.800.000₫&nbsp;38 - 1.800.000₫&nbsp;38.5 - 1.800.000₫&nbsp;39 - 1.800.000₫&nbsp;40 - 1.800.000₫&nbsp;40.5 - 1.800.000₫&nbsp;41 - 1.800.000₫&nbsp;42 - 1.800.000₫&nbsp;42.5 - 1.800.000₫&nbsp;43 - 1.800.000₫&nbsp;44 - 1.800.000₫&nbsp;44.5 - 1.800.000₫&nbsp;45 - 1.800.000₫&nbsp;46 - 1.800.000₫&nbsp;47 - 1.800.000₫&nbsp;</p>\r\n\r\n<p>SIZE</p>\r\n\r\n<p>34.5<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>35<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>36</p>\r\n\r\n<p>36.5<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>37<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>38<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>38.5<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>39<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>40<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>40.5<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>41<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>42<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>42.5<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>43<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>44<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>44.5<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>45<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>46<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>47<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>Số lượng</p>\r\n\r\n<p>-+</p>\r\n\r\n<p><img alt=\"size chart vans việt nam\" src=\"https://bizweb.dktcdn.net/100/140/774/files/79148.png?v=1507729359345\" /></p>\r\n\r\n<p>1.800.000₫</p>\r\n\r\n<p>ĐẶT NGAY</p>\r\n\r\n<p><em><strong>Khuyến m&atilde;i HOT khi mua h&agrave;ng từ 2 đơn trở l&ecirc;n</strong></em></p>\r\n\r\n<table>\r\n	<thead>\r\n		<tr>\r\n			<th>Số lượng</th>\r\n			<th>Gi&aacute; b&aacute;n</th>\r\n			<th>Phần trăm giảm gi&aacute;</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>Mua 2</td>\r\n			<td>1.710.000₫</td>\r\n			<td>5%</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mua 5</td>\r\n			<td>1.620.000₫</td>\r\n			<td>10%</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Chia sẻ:&nbsp;<a href=\"https://www.facebook.com/sharer.php?u=https://vansvietnam.com/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou&amp;aelang=vi\" target=\"_blank\">&nbsp;</a><a href=\"https://twitter.com/share?text=VANS%20DALLAS%20CLAYTON%20AUTHENTIC%20RAINBOW%20TRUE%20WHITE&amp;url=https://vansvietnam.com/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou&amp;aelang=vi\" target=\"_blank\">&nbsp;</a><a href=\"https://pinterest.com/pin/create/button/?url=https://vansvietnam.com/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou&amp;media=http://bizweb.dktcdn.net/thumb/1024x1024/100/140/774/products/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou-1.jpg?v=1523252455043&amp;description=VANS%20DALLAS%20CLAYTON%20AUTHENTIC%20RAINBOW%20TRUE%20WHITE&amp;aelang=vi\" target=\"_blank\">&nbsp;</a><a href=\"https://fancy.com/fancyit?ItemURL=https://vansvietnam.com/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou&amp;Title=VANS%20DALLAS%20CLAYTON%20AUTHENTIC%20RAINBOW%20TRUE%20WHITE&amp;Category=Other&amp;ImageURL=//bizweb.dktcdn.net/thumb/1024x1024/100/140/774/products/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou-1.jpg?v=1523252455043&amp;aelang=vi\" target=\"_blank\">Fancy&nbsp;</a></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://vansvietnam.com/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou?aelang=vi#content\">CHI TIẾT SẢN PHẨM</a></li>\r\n	<li><a href=\"https://vansvietnam.com/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou?aelang=vi#tab_1\">C&Aacute;CH ĐO SIZE</a></li>\r\n	<li><a href=\"https://vansvietnam.com/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou?aelang=vi#tab_2\">C&Aacute;CH CHECK VANS THẬT V&Agrave; GIẢ</a></li>\r\n</ul>\r\n\r\n<p><strong>DALLAS CLAYTON</strong>&nbsp;l&agrave; một&nbsp;t&aacute;c giả v&agrave; họa sĩ minh hoạ s&aacute;ch cho thiếu nhi, với những suy nghĩ h&agrave;i hước, ph&ugrave; hợp với những suy nghĩ của đại đa số sự dễ thương của thiếu nhi, bất ngờ&nbsp;<strong>DALLAS&nbsp;</strong>c&oacute; một cuộc bắt tay với h&atilde;ng gi&agrave;y thể thao&nbsp;<strong>VANS-OFF THE WALL</strong>&nbsp;để mua bộ sưu tập gi&agrave;y c&oacute; t&aacute;c phẩm nghệ thuật rực rỡ từ những cuốn s&aacute;ch d&agrave;nh cho thiếu nhi nổi tiếng của &ocirc;ng. Cũng gi&oacute;ng như&nbsp;<strong>DALLAS</strong>, tất cả những g&igrave;&nbsp;<em><strong>VANS DALLAS CLAYTON AUTHENTIC RAINBOW TRUE WHITE</strong></em>&nbsp;thể hiện ch&iacute;nh l&agrave; sự trong s&aacute;ng v&agrave; ng&acirc;y thơ cho một đ&ocirc;i gi&agrave;y c&aacute; t&iacute;nh, lẫn trong đ&oacute; ch&iacute;nh l&agrave; sự nhiệt huyết c&ugrave;ng những chất lượng kh&ocirc;ng thể b&atilde;i bỏ đến từ nh&agrave; sản xuất&nbsp;<strong>VANS</strong>. Kiểu d&aacute;ng&nbsp;<strong>AUTHENTIC&nbsp;</strong>tuy l&agrave; một kiểu d&aacute;ng cổ điển, nhưng sự kết hợp giữa<strong>&nbsp;CLAYTON</strong>&nbsp;v&agrave;&nbsp;<strong>VANS&nbsp;</strong>đ&atilde; lần nữa&nbsp;n&acirc;ng th&ecirc;m cho&nbsp;<strong>VANS AUTHENTIC</strong>&nbsp;một tầm cao về họa tiết cũng như c&aacute;i t&ocirc;i c&aacute; nh&acirc;n của cả hai được h&ograve;a quyện cực k&igrave; ngọt ng&agrave;o.&nbsp;<em><strong>VANS DALLAS CLAYTON AUTHENTIC RAINBOW TRUE WHITE</strong></em>&nbsp;xứng đ&aacute;ng l&agrave; một sản phẩm c&aacute; t&iacute;nh, g&acirc;y ấn tượng mạnh đối với tất cả mọi người.&nbsp;</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou-1.jpg?v=1523252455043\" /><img src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou-2.jpg?v=1523252455043\" /><img src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou-3.jpg?v=1523252455043\" /><img src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou-4.jpg?v=1523252455043\" /><img src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou-5.jpg?v=1523252455043\" /><img src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou-6.jpg?v=1523252455043\" /></p>\r\n', 0, NULL, 2, '2021-03-02 20:19:59', '2021-03-02 20:19:59'),
(62, 'VANS  RAINBOW  WHITE 2019', 'uploads/603ef273f4063-625787_1XK10_1000_001_100_0000_Light-AceHerrensneaker-aus-geprgtem-GGLeder.jpg', 860, 'DALLAS CLAYTON là một tác giả và họa sĩ minh hoạ sách cho thiếu nhi, với những suy nghĩ hài hước, phù hợp với những suy nghĩ của đại đa số sự dễ thươn', '<h1>VANS DALLAS CLAYTON AUTHENTIC RAINBOW TRUE WHITE</h1>\r\n\r\n<p>&nbsp;34.5 - 1.800.000₫&nbsp;35 - 1.800.000₫&nbsp;36 - 1.800.000₫&nbsp;36.5 - 1.800.000₫&nbsp;37 - 1.800.000₫&nbsp;38 - 1.800.000₫&nbsp;38.5 - 1.800.000₫&nbsp;39 - 1.800.000₫&nbsp;40 - 1.800.000₫&nbsp;40.5 - 1.800.000₫&nbsp;41 - 1.800.000₫&nbsp;42 - 1.800.000₫&nbsp;42.5 - 1.800.000₫&nbsp;43 - 1.800.000₫&nbsp;44 - 1.800.000₫&nbsp;44.5 - 1.800.000₫&nbsp;45 - 1.800.000₫&nbsp;46 - 1.800.000₫&nbsp;47 - 1.800.000₫&nbsp;</p>\r\n\r\n<p>SIZE</p>\r\n\r\n<p>34.5<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>35<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>36</p>\r\n\r\n<p>36.5<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>37<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>38<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>38.5<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>39<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>40<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>40.5<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>41<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>42<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>42.5<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>43<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>44<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>44.5<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>45<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>46<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>47<img src=\"https://bizweb.dktcdn.net/100/140/774/themes/599109/assets/soldout.png?1614087411992\" /></p>\r\n\r\n<p>Số lượng</p>\r\n\r\n<p>-+</p>\r\n\r\n<p><img alt=\"size chart vans việt nam\" src=\"https://bizweb.dktcdn.net/100/140/774/files/79148.png?v=1507729359345\" /></p>\r\n\r\n<p>1.800.000₫</p>\r\n\r\n<p>ĐẶT NGAY</p>\r\n\r\n<p><em><strong>Khuyến m&atilde;i HOT khi mua h&agrave;ng từ 2 đơn trở l&ecirc;n</strong></em></p>\r\n\r\n<table>\r\n	<thead>\r\n		<tr>\r\n			<th>Số lượng</th>\r\n			<th>Gi&aacute; b&aacute;n</th>\r\n			<th>Phần trăm giảm gi&aacute;</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>Mua 2</td>\r\n			<td>1.710.000₫</td>\r\n			<td>5%</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mua 5</td>\r\n			<td>1.620.000₫</td>\r\n			<td>10%</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Chia sẻ:&nbsp;<a href=\"https://www.facebook.com/sharer.php?u=https://vansvietnam.com/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou&amp;aelang=vi\" target=\"_blank\">&nbsp;</a><a href=\"https://twitter.com/share?text=VANS%20DALLAS%20CLAYTON%20AUTHENTIC%20RAINBOW%20TRUE%20WHITE&amp;url=https://vansvietnam.com/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou&amp;aelang=vi\" target=\"_blank\">&nbsp;</a><a href=\"https://pinterest.com/pin/create/button/?url=https://vansvietnam.com/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou&amp;media=http://bizweb.dktcdn.net/thumb/1024x1024/100/140/774/products/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou-1.jpg?v=1523252455043&amp;description=VANS%20DALLAS%20CLAYTON%20AUTHENTIC%20RAINBOW%20TRUE%20WHITE&amp;aelang=vi\" target=\"_blank\">&nbsp;</a><a href=\"https://fancy.com/fancyit?ItemURL=https://vansvietnam.com/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou&amp;Title=VANS%20DALLAS%20CLAYTON%20AUTHENTIC%20RAINBOW%20TRUE%20WHITE&amp;Category=Other&amp;ImageURL=//bizweb.dktcdn.net/thumb/1024x1024/100/140/774/products/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou-1.jpg?v=1523252455043&amp;aelang=vi\" target=\"_blank\">Fancy&nbsp;</a></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://vansvietnam.com/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou?aelang=vi#content\">CHI TIẾT SẢN PHẨM</a></li>\r\n	<li><a href=\"https://vansvietnam.com/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou?aelang=vi#tab_1\">C&Aacute;CH ĐO SIZE</a></li>\r\n	<li><a href=\"https://vansvietnam.com/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou?aelang=vi#tab_2\">C&Aacute;CH CHECK VANS THẬT V&Agrave; GIẢ</a></li>\r\n</ul>\r\n\r\n<p><strong>DALLAS CLAYTON</strong>&nbsp;l&agrave; một&nbsp;t&aacute;c giả v&agrave; họa sĩ minh hoạ s&aacute;ch cho thiếu nhi, với những suy nghĩ h&agrave;i hước, ph&ugrave; hợp với những suy nghĩ của đại đa số sự dễ thương của thiếu nhi, bất ngờ&nbsp;<strong>DALLAS&nbsp;</strong>c&oacute; một cuộc bắt tay với h&atilde;ng gi&agrave;y thể thao&nbsp;<strong>VANS-OFF THE WALL</strong>&nbsp;để mua bộ sưu tập gi&agrave;y c&oacute; t&aacute;c phẩm nghệ thuật rực rỡ từ những cuốn s&aacute;ch d&agrave;nh cho thiếu nhi nổi tiếng của &ocirc;ng. Cũng gi&oacute;ng như&nbsp;<strong>DALLAS</strong>, tất cả những g&igrave;&nbsp;<em><strong>VANS DALLAS CLAYTON AUTHENTIC RAINBOW TRUE WHITE</strong></em>&nbsp;thể hiện ch&iacute;nh l&agrave; sự trong s&aacute;ng v&agrave; ng&acirc;y thơ cho một đ&ocirc;i gi&agrave;y c&aacute; t&iacute;nh, lẫn trong đ&oacute; ch&iacute;nh l&agrave; sự nhiệt huyết c&ugrave;ng những chất lượng kh&ocirc;ng thể b&atilde;i bỏ đến từ nh&agrave; sản xuất&nbsp;<strong>VANS</strong>. Kiểu d&aacute;ng&nbsp;<strong>AUTHENTIC&nbsp;</strong>tuy l&agrave; một kiểu d&aacute;ng cổ điển, nhưng sự kết hợp giữa<strong>&nbsp;CLAYTON</strong>&nbsp;v&agrave;&nbsp;<strong>VANS&nbsp;</strong>đ&atilde; lần nữa&nbsp;n&acirc;ng th&ecirc;m cho&nbsp;<strong>VANS AUTHENTIC</strong>&nbsp;một tầm cao về họa tiết cũng như c&aacute;i t&ocirc;i c&aacute; nh&acirc;n của cả hai được h&ograve;a quyện cực k&igrave; ngọt ng&agrave;o.&nbsp;<em><strong>VANS DALLAS CLAYTON AUTHENTIC RAINBOW TRUE WHITE</strong></em>&nbsp;xứng đ&aacute;ng l&agrave; một sản phẩm c&aacute; t&iacute;nh, g&acirc;y ấn tượng mạnh đối với tất cả mọi người.&nbsp;</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou-1.jpg?v=1523252455043\" /><img src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou-2.jpg?v=1523252455043\" /><img src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou-3.jpg?v=1523252455043\" /><img src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou-4.jpg?v=1523252455043\" /><img src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou-5.jpg?v=1523252455043\" /><img src=\"https://bizweb.dktcdn.net/100/140/774/products/vans-dallas-clayton-authentic-rainbow-true-white-vn0a38emmou-6.jpg?v=1523252455043\" /></p>\r\n', 0, 2, 2, '2021-03-02 20:20:36', '2021-03-09 10:46:09'),
(63, 'Tabley KORM 22', 'uploads/603ef3101eb63-645360_2PH10_9267_001_100_0000_Light-Ken-Scott-x-Gucci-Screener-Sneaker.jpg', 350, 'DALLAS CLAYTON , với những suy nghĩ hài hước, phù hợp với những suy nghĩ của đại đa số sự dễ thương của thiếu nhi, bất ngờ DALLAS có một cuộc bắt tay ', '<p>New Season</p>\r\n\r\n<p><a href=\"https://www.farfetch.com/vn/shopping/women/off-white/items.aspx\">Off-White</a>Odsy-100 Arrow sneakers</p>\r\n\r\n<p>The chunkier, the better. With their bold ridged-sole design and signature Zip Tie detailing, the Odsy-1000 sneakers are ready to take charge of your looks Courtesy of Off-White.</p>\r\n\r\n<p>Highlights</p>\r\n\r\n<ul>\r\n	<li>white</li>\r\n	<li>signature Arrows motif</li>\r\n	<li>signature Zip Tie tag</li>\r\n	<li>branded insole</li>\r\n	<li>pull-tab at the heel</li>\r\n	<li>round toe</li>\r\n	<li>front lace-up fastening</li>\r\n	<li>ridged rubber sole</li>\r\n</ul>\r\n\r\n<p>Composition</p>\r\n\r\n<p>Sole: Rubber 100%</p>\r\n\r\n<p>Outer: Polyester 100%</p>\r\n\r\n<p>Lining: Polyester 100%</p>\r\n\r\n<p>Designer Style ID:&nbsp;OWIA180R21FAB0010105</p>\r\n', 0, 1, 15, '2021-03-02 20:23:12', '2021-03-02 20:25:56'),
(64, 'giayf moi', 'uploads/603f0141d78c4-624482_2FS10_8762_001_100_0000_Light-Ultrapace-R-Herrensneaker.jpg', 1234, 'DALLAS CLAYTON là một tác giả và họa sĩ minh hoạ sách cho thiếu nhi, với những suy nghĩ hài hước, phù hợp với những suy nghĩ của đại đa số sự dễ thươn', '<p>adfasdasd</p>\r\n', 0, 1, 11, '2021-03-02 21:23:45', '2021-03-03 03:30:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_galleries`
--

CREATE TABLE `product_galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `img_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_galleries`
--

INSERT INTO `product_galleries` (`id`, `product_id`, `img_url`, `created_at`, `updated_at`) VALUES
(643, 21, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(644, 21, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(645, 21, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(646, 21, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(647, 23, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(648, 23, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(649, 23, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(650, 23, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(651, 24, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(652, 24, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(653, 24, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(654, 24, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(655, 25, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(656, 25, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(657, 25, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(658, 25, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(659, 26, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(660, 26, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(661, 26, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(662, 26, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(663, 37, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(664, 37, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(665, 37, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(666, 37, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(667, 45, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(668, 45, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(669, 45, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(670, 45, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(671, 47, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(672, 47, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(673, 47, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(674, 47, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(675, 58, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(676, 58, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(677, 58, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(678, 58, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(679, 59, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(680, 59, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(681, 59, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(682, 59, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(683, 60, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(684, 60, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(685, 60, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(686, 60, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(687, 61, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(688, 61, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(689, 61, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(690, 61, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(691, 62, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(692, 62, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(693, 62, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(694, 62, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(695, 63, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(696, 63, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(697, 63, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39'),
(698, 63, 'https://picsum.photos/540/584', '2021-03-02 20:25:39', '2021-03-02 20:25:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `avatar` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` int(11) DEFAULT NULL,
  `password` varchar(120) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1,
  `remember_token` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(89, 'tạ văn tốn333', 'uploads/601b9a00d5dd1-unnamed.png', 'tavanton@gmail.com', NULL, '$2y$10$3IwCiTAlLumW93f7eSgwGuwgCqi50wgN4JnBaRhtHikxfaARdvHCq', 0, NULL, '2021-02-04 00:53:52', '2021-02-24 01:29:44'),
(98, 'Thìn Duy', 'uploads/6033680020727-2020_05_01_01_15_IMG_2592.jpg', 'thinduy@gmail.com', NULL, '$2y$10$QMDsVt2d1rpMK1sOn1FzOeLr2x8w7l7dbTt/Nf3Yqrr67uya33tHm', 200, NULL, '2021-02-08 22:06:45', '2021-02-22 02:25:41'),
(100, '1234', 'uploads/6038921f8c0c4-next.jpg', '34@gmail.com', NULL, '$2y$10$uCeNAbmSgOakup7.YFR.j.vPBdj3cqcBDyxCrfJEKgQUCtu/9rI0a', 0, NULL, '2021-02-22 05:51:08', '2021-02-26 00:15:59'),
(123, 'thin', 'uploads/603e607e86595-i8.jpg', 'thinduy@gmail.com', NULL, '$2y$10$AclrVo9DizgNo5fsG6.vGOsw680BEv06p9vQ12xBD9gV8KnqKpSOi', 0, NULL, '2021-03-02 09:57:50', '2021-03-02 09:57:50'),
(126, 'Barton Auer', 'uploads/603efeb8b7b86-3TB42S-HERO.webp', 'thinduysss@gmail.com', NULL, '$2y$10$73gWgMacVS6o/y9pPQDALeg7zZ8RvAtX7VEYLQ9jqfgs1CQvYqCo2', 0, NULL, '2021-03-02 21:12:56', '2021-03-02 21:12:56');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_blog_user` (`id_user`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cm_pd` (`product_id`),
  ADD KEY `fk_cm_user` (`user_id`);

--
-- Chỉ mục cho bảng `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `invoice_detail`
--
ALTER TABLE `invoice_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_inD_products` (`product_id`),
  ADD KEY `fk_inD_inv` (`invoice_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pd_category` (`cate_id`);

--
-- Chỉ mục cho bảng `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `invoice_detail`
--
ALTER TABLE `invoice_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT cho bảng `product_galleries`
--
ALTER TABLE `product_galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=699;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `fk_blog_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_cm_pd` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `fk_cm_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `invoice_detail`
--
ALTER TABLE `invoice_detail`
  ADD CONSTRAINT `fk_inD_inv` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_inD_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_pd_category` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
