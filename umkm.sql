-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 01, 2021 at 08:01 PM
-- Server version: 10.2.37-MariaDB-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umkd2439_promosi3`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `slug`, `created_at`, `updated_at`) VALUES
(3, 'Hiburan', 'hiburan', '2021-04-02 02:21:14', '2021-04-02 02:21:14'),
(4, 'Kerajinan', 'kerajinan', '2021-04-02 02:21:14', '2021-04-02 02:21:14'),
(5, 'Makanan & Minuman', 'makanan-minuman', '2021-04-02 02:40:13', '2021-04-04 04:47:13'),
(6, 'Olahraga', 'olahraga', '2021-04-02 02:40:31', '2021-04-02 02:40:31'),
(7, 'Kecantikan', 'kecantikan', '2021-04-02 02:40:37', '2021-04-02 02:40:37'),
(8, 'Pendidikan', 'pendidikan', '2021-04-02 02:40:43', '2021-04-02 02:40:43'),
(9, 'Teknologi', 'teknologi', '2021-04-02 02:41:00', '2021-04-02 02:41:00'),
(10, 'Fashion', 'fashion', '2021-04-04 02:30:21', '2021-04-04 02:30:21');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageable_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `imageable_id`, `imageable_type`, `created_at`, `updated_at`) VALUES
(11, '415033.jpg', '8', 'App\\Product', '2021-04-02 21:58:15', '2021-04-02 21:58:15'),
(17, '161289.jpg', '14', 'App\\Product', '2021-04-03 03:42:37', '2021-04-03 03:42:37'),
(22, '390754.jpg', '17', 'App\\Product', '2021-04-04 02:17:24', '2021-04-04 02:17:24'),
(23, '790731.jpg', '17', 'App\\Product', '2021-04-04 02:17:24', '2021-04-04 02:17:24'),
(24, '210531.jpg', '17', 'App\\Product', '2021-04-04 02:17:24', '2021-04-04 02:17:24'),
(25, '776487.jpg', '18', 'App\\Product', '2021-04-04 02:25:55', '2021-04-04 02:25:55'),
(26, '653808.jpg', '18', 'App\\Product', '2021-04-04 02:25:55', '2021-04-04 02:25:55'),
(27, '300371.jpg', '18', 'App\\Product', '2021-04-04 02:25:55', '2021-04-04 02:25:55'),
(28, '114033.png', '19', 'App\\Product', '2021-04-04 02:33:47', '2021-04-04 02:33:47'),
(29, '219699.png', '19', 'App\\Product', '2021-04-04 02:33:47', '2021-04-04 02:33:47'),
(30, '296283.png', '19', 'App\\Product', '2021-04-04 02:33:47', '2021-04-04 02:33:47'),
(31, '221440.jpg', '20', 'App\\Product', '2021-04-04 02:44:22', '2021-04-04 02:44:22'),
(32, '793323.JPG', '20', 'App\\Product', '2021-04-04 02:44:22', '2021-04-04 02:44:22'),
(33, '300255.jpg', '20', 'App\\Product', '2021-04-04 02:44:22', '2021-04-04 02:44:22'),
(34, '321473.jpg', '22', 'App\\Product', '2021-04-04 03:11:44', '2021-04-04 03:11:44'),
(35, '789469.jpg', '22', 'App\\Product', '2021-04-04 03:11:44', '2021-04-04 03:11:44'),
(36, '651040.jpeg', '22', 'App\\Product', '2021-04-04 03:11:44', '2021-04-04 03:11:44'),
(37, '923469.jpg', '23', 'App\\Product', '2021-04-04 03:11:54', '2021-04-04 03:11:54'),
(38, '364070.jpeg', '23', 'App\\Product', '2021-04-04 03:11:54', '2021-04-04 03:11:54'),
(39, '148162.jpg', '23', 'App\\Product', '2021-04-04 03:11:54', '2021-04-04 03:11:54'),
(40, '843636.jpeg', '24', 'App\\Product', '2021-04-04 03:21:03', '2021-04-04 03:21:03'),
(41, '27605.jpg', '24', 'App\\Product', '2021-04-04 03:21:03', '2021-04-04 03:21:03'),
(42, '637166.jpg', '24', 'App\\Product', '2021-04-04 03:21:03', '2021-04-04 03:21:03'),
(43, '643789.jpg', '25', 'App\\Product', '2021-04-04 03:58:07', '2021-04-04 03:58:07'),
(44, '73473.jpeg', '25', 'App\\Product', '2021-04-04 03:58:07', '2021-04-04 03:58:07'),
(45, '645938.jpg', '25', 'App\\Product', '2021-04-04 03:58:07', '2021-04-04 03:58:07'),
(46, '528143.jpg', '26', 'App\\Product', '2021-04-04 04:15:48', '2021-04-04 04:15:48'),
(47, '894917.jpg', '26', 'App\\Product', '2021-04-04 04:15:48', '2021-04-04 04:15:48'),
(48, '752639.jpg', '26', 'App\\Product', '2021-04-04 04:15:48', '2021-04-04 04:15:48'),
(49, '564086.jpg', '27', 'App\\Product', '2021-04-04 04:27:49', '2021-04-04 04:27:49'),
(50, '16842.jpg', '27', 'App\\Product', '2021-04-04 04:27:50', '2021-04-04 04:27:50'),
(51, '232774.jpeg', '27', 'App\\Product', '2021-04-04 04:27:50', '2021-04-04 04:27:50'),
(52, '81797.jpg', '28', 'App\\Product', '2021-04-04 04:36:29', '2021-04-04 04:36:29'),
(53, '852289.jpg', '28', 'App\\Product', '2021-04-04 04:36:29', '2021-04-04 04:36:29'),
(54, '370066.jpg', '28', 'App\\Product', '2021-04-04 04:36:29', '2021-04-04 04:36:29'),
(55, '407218.jpg', '29', 'App\\Product', '2021-04-04 04:43:47', '2021-04-04 04:43:47'),
(56, '390280.jpg', '29', 'App\\Product', '2021-04-04 04:43:48', '2021-04-04 04:43:48'),
(57, '956695.jpg', '29', 'App\\Product', '2021-04-04 04:43:48', '2021-04-04 04:43:48'),
(58, '74375.jpg', '30', 'App\\Product', '2021-04-04 05:04:24', '2021-04-04 05:04:24'),
(59, '810844.jpg', '30', 'App\\Product', '2021-04-04 05:04:24', '2021-04-04 05:04:24'),
(60, '835869.jpg', '30', 'App\\Product', '2021-04-04 05:04:24', '2021-04-04 05:04:24');

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
(3, '2018_07_06_135130_create_roles_table', 1),
(4, '2018_07_06_135441_create_role_user_table', 1),
(5, '2018_07_06_211652_create_categories_table', 1),
(6, '2018_07_06_211723_create_products_table', 1),
(7, '2018_07_06_233201_create_images_table', 1),
(8, '2018_07_10_213456_create_user_details_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maps` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `user_id`, `slug`, `product_name`, `product_detail`, `email`, `phone`, `address`, `maps`, `created_at`, `updated_at`) VALUES
(8, 6, 4, 'anugrah-sport', 'Anugrah Sport', '<p><b>Anugerah Sport </b>adalah toko olahraga yang menjual berbagai macam alat olahraga. Selain itu harganya sangat terjangkau.</p><p>Terkhusus untuk yang mempunyai masalah pada raket, disini bisa repair atau perbaikan raket</p>', 'Asport@gmail.com', '+6287717257200', 'Jl. Gedongkuning No.153, Pringgolayan, Banguntapan, Kec. Banguntapan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55171', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.857108412801!2d110.40011531413245!3d-7.80494799437557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5768026ceb3d%3A0x2113dce37d6f5abc!2sAnugrah%20Sport!5e0!3m2!1sid!2sid!4v1617936437149!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '2021-04-02 21:58:15', '2021-04-08 19:47:28'),
(14, 5, 4, 'bakso-aci-instan', 'Bakso Aci Instan', '<p><span style=\"background-color: inherit;\"><span style=\"color: rgb(0, 0, 0);\">BoCi Baso Aci Mantap Jiwa Produk UKM Khas Garut Bakso Aci Rasa Mantap Jiwa Produk Fresh - 180gr</span></span></p>', 'boci@gmail.com', '0218989506', 'Jln Kaliurang KM 10.5 Sleman', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.6847001261326!2d110.40309651477767!3d-7.716939894437493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a594a2aa3fecd%3A0xc48395ee24fe74af!2sJl.%20Kaliurang%20No.km.%2010%2C5%2C%20Gadingan%2C%20Sardonoharjo%2C%20Kec.%20Ngaglik%2C%20Kabupaten%20Sleman%2C%20Daerah%20Istimewa%20Yogyakarta%2055581!5e0!3m2!1sid!2sid!4v1619068357295!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '2021-04-03 03:42:37', '2021-04-21 22:13:18'),
(17, 3, 4, 'predator-billiard', 'Predator Billiard', '<p><span style=\"font-weight: bolder; color: rgb(81, 84, 95);\">Predator Billiard </span><span style=\"color: rgb(81, 84, 95);\">adalah tempat untuk bermain billiard. predator billiard menyajikan kenyamanan bermain billiard. selain tempat yang bersih dan nyaman, tempat ini juga memiliki fasilitas yang baik. baik itu dari meja billiard, bola maupun stik </span><br></p>', 'predator@gmail.com', '+6285157488774', 'Jl. Pringgodani No.6e, Mrican, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.1334082235535!2d110.39113061413211!3d-7.775675694396138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59c70cebab2b%3A0x9985a93052006939!2sPREDATOR%20BILLIARD%20JOGJA!5e0!3m2!1sid!2sid!4v1617936747359!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '2021-04-04 02:17:23', '2021-04-08 19:52:36'),
(18, 5, 2, 'toko-oleh-oleh-khas-subang-serba-nanas-alam-sari', 'Toko Oleh-oleh Khas Subang Serba Nanas Alam Sari', '<p><span style=\"color: rgb(0, 0, 0);\"><span style=\"font-weight: normal;\">Selain untuk memenuhi pasar oleh-oleh di Subang, produknya juga telah \r\nmenyebar ke beberapa kota tetangga seperti Bandung, Karawang, Purwakarta\r\n dan Indramayu. Bahkan produknya juga telah sampai ke Yogyakarta dan \r\nBali. Sejak memulai usaha dari tahun 1997, Ade patas mencoba berbagai inovasi \r\nproduk. Kini selain membuat dodol nanas ia juga telah melakukan \r\ndiversifikasi produk dengan mengolah nanas menjadi jus, kerupuk, coklat \r\ndodol yang berisi rujak nanas dan lain-lain.</span></span></p>', 'alamsari@gmail.com', '+6285320753028', 'Jl. Simpang Kumpay, Desa Tambakmekar, Jalancagak, Subang, Jawa Barat', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d507255.2871240655!2d107.4396406328125!3d-6.655359199999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69224a9c12e8e1%3A0x3d3a14cfbfb2eea0!2sSerba%20Nanas%20Alam%20Sari!5e0!3m2!1sid!2sid!4v1617936383962!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '2021-04-04 02:25:55', '2021-04-08 19:46:40'),
(19, 10, 4, 'sandangsari-collection', 'Sandangsari Collection', '<p><span style=\"color: rgb(0, 0, 0);\"><span style=\"font-weight: normal;\">Mulai merintis usaha dibidang fesyen sejak tahun 2007, kini busana payet\r\n produksi Sandang Sari Collection milik Deden Mustofa semakin merambah \r\nke berbagai kota di Indonesia.</span></span></p>', 'sandangsari@gmail.com', '+6281221244339', 'Kp. Arjasari RT 10 RW 04 Desa Cikujang, Kec. Serangpanjang, Kab. Subang', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31701.163824352352!2d107.60273439100334!3d-6.690759116848658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e691ed7f27d3edd%3A0xc9e0393b58dc6ba8!2sCikujang%2C%20Serangpanjang%2C%20Kabupaten%20Subang%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1619068830924!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '2021-04-04 02:33:46', '2021-04-21 22:20:43'),
(20, 8, 4, 'toko-alat-tulis-atk-kurnia', 'Toko Alat Tulis (ATK) Kurnia', '<p><span style=\"color: rgb(0, 0, 0);\">Serba ada untuk segala jenis produk alat tulis, tempat yang paling dicari untuk mereka yang mencari segala kebutuhan segala alat tulis, dari anak sekolah dasar hingga perkuliahan.</span><br></p>', 'atkkurnia@gmail.com', '+6281227411920', 'Jl. Raya Berbah, RT.01/RW.10, Krikilan, Tegaltirto, Kec. Berbah, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55573, Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31622.907332583636!2d110.42376973955079!3d-7.804280899999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a50bb1db30aa9%3A0x84417824d762732d!2sToko%20ATK%20Kurnia!5e0!3m2!1sid!2sid!4v1617936280462!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '2021-04-04 02:44:22', '2021-04-08 19:44:53'),
(22, 4, 2, 'tas-kerajinan-jogja', 'Tas Kerajinan Jogja', '<p><strong style=\"color: rgb(0, 0, 0); font-family: georgia, palatino; font-size: small; text-align: center;\">Tas Kerajinan Jogja</strong><span style=\"color: rgb(0, 0, 0); font-family: georgia, palatino; font-size: small; text-align: center;\"> Menyediakan berbagai macam tas anyaman</span><span style=\"font-family: georgia, palatino; font-size: small; text-align: center; color: rgb(255, 0, 255);\"><a href=\"http://tasanyamanjogja.blogspot.com/\"> </a></span><span style=\"color: rgb(0, 0, 0); font-family: georgia, palatino; font-size: small; text-align: center;\">dari bahan alam dan ramah lingkungan misalnya tas mendong, tas enceng gondok,tas pandan tikar,tas pelepah pisang, tas batok kelapa,tas rajut,tas kulit,tas batik,dan berbagai macam tas etnik jogja</span><span style=\"font-family: georgia, palatino; font-size: small; text-align: center; color: rgb(255, 0, 255);\"> </span><span style=\"color: rgb(0, 0, 0); font-family: georgia, palatino; font-size: small; text-align: center;\"> khas kerajinan Yogyakarta.<br></span><span style=\"color: rgb(0, 0, 0); font-family: georgia, palatino; text-align: center; font-size: small;\"><strong>Tas Kerajinan Jogja</strong> adalah kumpulan dari banyak pengrajin tas jogja</span><span style=\"color: rgb(0, 0, 0); font-family: georgia, palatino; font-size: 12px; text-align: center;\"> </span><span style=\"color: rgb(0, 0, 0); font-family: georgia, palatino; text-align: center; font-size: small;\">mulai dari Pengrajin Tas Enceng Gondok, Pengrajin Tas Kulit,Pengrajin Tas Rajut ,Pengrajin Tas Vynil, Pengrajin Tas Rotan</span><span style=\"color: rgb(0, 0, 0); font-family: georgia, palatino; font-size: 12px; text-align: center;\">,</span><span style=\"color: rgb(0, 0, 0); font-family: georgia, palatino; text-align: center; font-size: small;\">Pengrajin Tas Agel,Pengrajin Tas Batik,Pengrajin Tas Lidi,Pengrajin Tas Batok</span><span style=\"color: rgb(0, 0, 0); font-family: georgia, palatino; font-size: 12px; text-align: center;\"> </span><span style=\"color: rgb(0, 0, 0); font-family: georgia, palatino; text-align: center; font-size: small;\">dan masih banyak lagy yang bergabung dalam grosir tas kerajinan jogja</span><br></p>', 'tasorder@gmail.com', '+6285747025084', 'Jl. pakel baru - dagaran uh06/1066, barat lapangan sidokabul keselatan gang belimbing masuk ke timur   masuk dari jalan mentri supeno (mobil bisa parkir di depan ) Yogyakarta', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.6999786659853!2d110.37795391435702!3d-7.8215463798450235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57883ea9962b%3A0xb56525fc611fe942!2sTas%20Kerajinan%20Jogja!5e0!3m2!1sid!2sid!4v1619068571684!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '2021-04-04 03:11:44', '2021-04-21 22:16:41'),
(23, 5, 4, 'jamu-herbal-sekartaji', 'Jamu Herbal Sekartaji', '<p> <span style=\"color: rgb(0, 0, 0);\"><span style=\"font-weight: normal;\">Kelompok Desa Karangrejo Kabupaten Malang mencoba untuk membantu usaha UMKM yang ada di desa. Jamu herbal, stick daun kunyit dan lekok, jamu asli khas jawa timur. Dibuat dengan berbagai rempah pilihan, halal dan berkualitas. sehingga dapat di simpan tanpa bahan pengawet. </span></span></p>', 'sekartajiherbal@gmail.com', '021298102011', 'Desa Karangrejo Kabupaten Malang', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31599.0384057479!2d112.46890927754957!3d-8.113719626165777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78990d22e0a26d%3A0x1aaccd9139957dce!2sKarangrejo%2C%20Kec.%20Kromengan%2C%20Malang%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1617936520109!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '2021-04-04 03:11:54', '2021-04-08 19:48:53'),
(24, 7, 4, 'scarlet-whitening', 'Scarlet Whitening', '<p><span style=\"font-weight: bolder; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Scarlett</span><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\"> adalah salah satu merk produk perawatan tubuh asal Indonesia yang dirilis oleh Felicya Angelista. Terkenal dengan rangkaian produk whitening-nya, Selain mengandung bahan aktif yang terbukti bisa membantu mengangkat sel kulit mati dari tubuh kita dan juga mencerahkan kulit, produknya juga sudah lolos uji BPOM.</span><br></p>', 'scarlet@gmail.com', '+6282225390863', 'Jl. Kaliurang km 10.6 gadingan 4/8, Dentan, Sinduharjo, Ngaglik, Sleman Regency, Special Region of Yogyakarta 55581', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63253.6086900052!2d110.34565388659402!3d-7.752594479442618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xea736dcb415633c!2sScarlett%20whitening%20jogja!5e0!3m2!1sid!2sid!4v1619068739357!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '2021-04-04 03:21:02', '2021-04-21 22:19:09'),
(25, 3, 4, 'family-fun-karaoke', 'Family Fun Karaoke', '<p><span style=\"color: rgb(150, 147, 155); font-family: Roboto, sans-serif; font-size: 12.6px; letter-spacing: 0.28px; white-space: pre-wrap;\">Karaoke Keluarga Family Fun mengusung tempat hiburan yang bersih, nyaman, aman, lengkap, eksklusif, moderen, dan elegan serta ramah dalam pelayanan saat menikmati akhir pekan bersama keluarga, dengan harga yang terjangkau. Teknologi yang digunakan Touch Screen Keyboard, sistem pengoperasian untuk pemilihan lagu juga lebih friendly. Koleksi lagu kami ada lebih dari 70 ribu item. Ditempat kami Juga menyediakan food and beverage yang langsung diolah dengan resep spesial, fresh, harga terjangkau dan tetap mengedapankan higienitas.Tarif berkaraoke dihitung per jam, jenis room ditentukan berdasarkan jumlah peserta.</span><br></p>', 'karaokefamily@gmail.com', '(0274) 2832408', 'Ruko Pandega Permai, Jl. Ring Road Utara No.19-20, Purwosari, Sinduadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55283', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.349680797999!2d110.37848491435629!3d-7.752686279019878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5900431b1271%3A0xccd813039b62908!2sFamily%20Fun%20Ringroad!5e0!3m2!1sid!2sid!4v1619068674644!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '2021-04-04 03:58:07', '2021-04-21 22:18:08'),
(26, 9, 4, 'pro-computer-jogja', 'Pro Computer Jogja', '<ul style=\"color: rgb(30, 30, 39);\"><li><span style=\"font-weight: bolder;\">Pro Computer Jogja </span>adalah jasa service Laptop dan Notebook yang menangani berbagai macam kerusakan seperti :<br>Mati total</li><li>No display chipset VGA</li><li>Ganti LCD</li><li>Ganti Keyboard</li><li>Upgrade RAM</li><li>Dll</li></ul>', 'pcj@gmail.com', '+628985967173', 'Jl. Imogiri Barat No.KM.13, Barongan, Sumberagung, Kec. Jetis, Bantul, Daerah Istimewa Yogyakarta 55781', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.8472524817616!2d110.37066381413321!3d-7.911020494301088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a55add76a3c87%3A0x40c8d39b7a71c41c!2sPRO%20COMPUTER%20JOGJA!5e0!3m2!1sid!2sid!4v1617936221386!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '2021-04-04 04:15:47', '2021-04-08 19:43:54'),
(27, 7, 4, 'cosmetic-wardah-lightening', 'Cosmetic Wardah Lightening', '<p><span style=\"color: rgba(0, 0, 0, 0.8);\"><b>Wardah</b> adalah sebuah brand kecantikan yang peduli dan mengerti keinginan setiap perempuan untuk selalu memiliki perasaan tenang dan nyaman dengan penampilannya. Wardah sebagai pelopor dalam menciptakan produk kecantikan bersertifikat halal, membagikan pemahaman baru bahwa cara hidup halal dan produk kecantikan mampu berpadu secara elegan. Wardah percaya bahwa kecantikan adalah cahaya hati yang terpancar dari dalam. Wardah, Feel The Beauty.</span><br></p>', 'wardah@gmail.com', '+628837642345', 'Jl. Walesdadi Sulipto No.317, Ambarukmo, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281, Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126507.45957065705!2d110.31367360056008!3d-7.751788728340592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59c2967f7bb3%3A0x3a40a821f2eb4c25!2sCosmetic%20Wardah!5e0!3m2!1sid!2sid!4v1617936162642!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '2021-04-04 04:27:49', '2021-04-08 19:43:19'),
(28, 5, 4, 'distributor-kerupuk-udang-belahan', 'Distributor Kerupuk Udang Belahan', '<p><span style=\"color: rgba(0, 0, 0, 0.8);\">Kerupuk udang siap goreng, kita bisa jual ke kota mana saja. Lebih dari sekedar Kerupuk Udang, sekarang anda dapatkan Kerupuk Udang yang benar - benar memiliki kwalitas tinggi. Pakar kami telah berhasil memadukan udang yang segar, tepung dan rempah - rempah pilihan kwalitas ekspor dan seni memasak dengan teknologi tinggi yang higenis dalam menciptakan Kerupuk Udang.</span><br></p>', 'udang@gmail.com', '+6283126575824', 'Jl. Majapahit III No.9, Margadadi, Kec. Indramayu, Kabupaten Indramayu, Jawa Barat 45211', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126888.1929752134!2d108.17554629004339!3d-6.360899736135657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ebc01c395b0ff%3A0xb1de2eafb5ae401a!2sDistributor%20Kerupuk%20Udang%20Indramayu%2C%20Kerupuk%20Udang%20Padi%20Kapas%2C%202%20Gajah%2C%20Indrasari!5e0!3m2!1sid!2sid!4v1617936326358!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '2021-04-04 04:36:29', '2021-04-08 19:45:48'),
(29, 8, 4, 'rumah-inggris-jogja', 'Rumah Inggris Jogja', '<p><span style=\"font-weight: bolder; color: rgb(81, 84, 95);\">umah Inggris Jogja </span><span style=\"color: rgb(81, 84, 95);\">adalah tempat kursus dan pusat praktek bahasa inggris berbasis kampung di jogja yang menyediakan banyak asrama atau camp berbahasa inggris.</span><br style=\"color: rgb(81, 84, 95);\"><span style=\"color: rgb(81, 84, 95);\">Disini terdapat beberapa pilihan kelas diantaranya kelas reguler, kelas online dan kelas private. selain itu ada paket-paket tertentu yang bisa didapatkan. untuk penjelasan lebih detil silahkan berkunjung ke website : https://kampunginggrisjogja.com/</span><br></p>', 'kinggrisjogja@gmail.com', '+6285740692485', 'SAPEN GK 1/562, RT.18/RW.06, Demangan, Kec. Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55221', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4164.79956285338!2d110.3881900568526!3d-7.784977695361284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59dabac43ca1%3A0xba26d9c5b009201f!2sRumah%20Inggris%20Jogja!5e0!3m2!1sid!2sid!4v1617935909814!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '2021-04-04 04:43:47', '2021-04-08 19:40:09'),
(30, 5, 4, 'evolene', 'Evolene', '<p style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 16px;\"></p><h5></h5><h5><p style=\"\"><span style=\"color: rgb(42, 42, 42); font-family: Roboto, sans-serif;\">Protein merupakan unsur penting yang harus dipenuhi saat kita sedang ingin membangun otot. Tanpa protein yang cukup, otot akan sulit berkembang. Selain itu, kekurangan protein saat kita sedang rutin berlatih beban malah akan merusak sel otot.</span><br style=\"color: rgb(42, 42, 42); font-family: Roboto, sans-serif;\"><span style=\"color: rgb(42, 42, 42); font-family: Roboto, sans-serif;\">Sumber protein yang mudah antara lain telur rebus, selai kacang, keju, susu rendah lemak, daging tanpa lemak, atau daging unggas. Cara praktis untuk menambah asupan protein adalah dengan konsumsi susu fitnes tinggi protein. Saat ini telah tersedia susu tinggi protein buatan lokal sehingga harganya lebih murah dibanding susu impor.</span><br style=\"color: rgb(42, 42, 42); font-family: Roboto, sans-serif;\"><span style=\"color: rgb(42, 42, 42); font-family: Roboto, sans-serif;\">Evolene meluncurkan produk unggulannya, Whey Protein yang terbuat dari penyaringan susu sapi jenis brown swiss dari kota kecil, Evolene, Swiss. Menurut Christian, keunggulan susu tersebut adalah cepat diserap tubuh dan memiliki kualitas protein yang baik sehingga membantu pembentukan otot yang padat.</span><br style=\"color: rgb(42, 42, 42); font-family: Roboto, sans-serif;\"><br></p></h5><p></p>', 'evo@gmail.com', '+628562555600', 'Jl. Ledok Babadan Jl. Plumbon No.650B, RT.24/RW.17, Jomblangan, Banguntapan, Kec. Banguntapan, Bantul, Daerah Istimewa Yogyakarta 55198', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126491.89370324112!2d110.36625294053276!3d-7.803407136007741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a578d7156de29%3A0xbdcd2d10cf36a7c4!2sagen%20evolene%20region%20bantul!5e0!3m2!1sid!2ssg!4v1617892610394!5m2!1sid!2ssg\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '2021-04-04 05:04:24', '2021-04-08 07:38:37');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'standart');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', '$2y$10$r18pOsSe1Q35ro1CMNAkOO5DqXg7QKq95vsn/uhhTgD6InPPspf0e', 'DmDTmQJ0TqNvu2EbhMgupGZmddosjw8idwhOw6B05zgeD8pVn6yiPyEWv4kr', '2021-04-02 02:21:13', '2021-04-02 02:21:13'),
(2, 'User', 'user', 'user@gmail.com', '$2y$10$2dpbf/E44IRsdKllM.IzTOwjEnzDbH.zfXNZgQ19.vwSncGXp6Yr2', 'pI8bkpZ7WFq3AMkx89KHzjsNwbRgPnJmdxrmehGiXpNu8RUxFKTclPYi4pri', '2021-04-02 02:21:13', '2021-04-02 02:21:13'),
(3, 'budi', 'budi', 'budi@jmw.asia', '$2y$10$wDgyh9R/GVvr/rtyNwqJcepq0Kud6iLWMdb.KCYQUU4sQNAtVCc8u', 'rJoBJjckL4IdiOhgHpd7oIdg1TcjA6Ho9OvRKNkMDPDJcwfXLRAt2uCSTJFz', '2021-04-05 07:07:45', '2021-04-05 07:07:45'),
(4, 'Nanang Setyawan', 'nanang', 'nanang@gmail.com', '$2y$10$9vyEV2Kq5tBXSfjeUVYJS.iUQjxk3p4pAH7LHo7dgm8ZKIq/w4uf2', 'piwbic31TBlDgNFJ1RWP6bdjsPkYVly4Q9AsEMuOv2l8VlVU0cB9tTYkBdQy', '2021-04-09 03:20:54', '2021-04-09 03:20:54'),
(5, 'Nabila Abdullah Nabila Abdullah', 'Nabila Abdullah', 'Team.jmw11@gmail.com', '$2y$10$mFpBc6YXJjQMRRd0DCgiTelLYEvK8M3G0roRSn8LFeb48S1/uB60C', NULL, '2021-04-23 02:25:25', '2021-04-23 02:25:25'),
(6, 'Falcon', 'Falcon', 'falcon@gmail.com', '$2y$10$DpgdUcQpZwhsgkq1hfuh0OPv8ssFQF6FLKhR2t3KP2cctbWYAggB2', 'aY16ZY4OmyzjgnPcBDnWlNciICRzzqK9uwSo1f7RAYY0lAq5HZ3VVsGPDuGQ', '2021-04-25 06:24:58', '2021-04-25 06:24:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `address`, `phone`, `m_phone`, `city`, `country`, `zipcode`) VALUES
(1, 1, 'ADMIN ADDRESS', '12345', '12345', 'ADMIN CITY', 'ADMIN COUNTRY', '12345'),
(2, 2, 'USER ADDRESS', '1234', '1234', 'USER CITY', 'USER COUNTRY', '1234'),
(3, 3, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 4, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 5, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 6, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_email_unique` (`email`),
  ADD UNIQUE KEY `products_phone_unique` (`phone`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_details_phone_unique` (`phone`),
  ADD UNIQUE KEY `user_details_m_phone_unique` (`m_phone`),
  ADD KEY `user_details_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
