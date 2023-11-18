-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2023 at 06:31 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_soco`
--

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
-- Table structure for table `komentars`
--

CREATE TABLE `komentars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `review_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komentars`
--

INSERT INTO `komentars` (`id`, `isi`, `review_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Coba gunakan Aloe Vera Gel ini sebagai masker wajah malam. Saya melihat hasil yang luar biasa pada bekas jerawat saya. Kulit saya lebih cerah dan jerawat semakin memudar.', 9, 6, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(2, 'Saya baru ingin mencoba produk ini tapi masih ragu. Apakah ada yang memiliki pengalaman lebih lanjut dengan pemakaian jangka panjang? Bagaimana efeknya setelah beberapa bulan pemakaian?', 9, 2, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(3, 'Saya memiliki pengalaman yang berbeda dengan produk ini. Meskipun teksturnya bagus, sayangnya, kulit saya cenderung bereaksi dengan bahan tertentu dalam formulanya. Tapi, hebatnya, setiap kulit memang berbeda-beda ya!', 12, 4, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(4, 'Saya memiliki pengalaman yang berbeda dengan produk ini. Meskipun teksturnya bagus, sayangnya, kulit saya cenderung bereaksi dengan bahan tertentu dalam formulanya. Tapi, hebatnya, setiap kulit memang berbeda-beda ya!', 15, 8, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(5, 'Coba gunakan Aloe Vera Gel ini sebagai masker wajah malam. Saya melihat hasil yang luar biasa pada bekas jerawat saya. Kulit saya lebih cerah dan jerawat semakin memudar.', 1, 5, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(6, 'Saya setuju dengan pengguna pertama. Aloe Vera Gel ini menyelamatkan kulit saya setelah berjemur di pantai juga. Ini menjadi produk andalan saya untuk merawat kulit setelah berjemur.', 11, 8, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(7, 'Coba gunakan Aloe Vera Gel ini sebagai masker wajah malam. Saya melihat hasil yang luar biasa pada bekas jerawat saya. Kulit saya lebih cerah dan jerawat semakin memudar.', 1, 6, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(8, 'Saya lebih suka Sheet Mask yang mengandung bahan aktif lainnya. Mungkin ini tidak cukup kuat untuk permasalahan kulit saya.', 3, 11, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(9, 'Saya setuju, hasilnya luar biasa! Tapi sayangnya, harganya cukup membuat kantong jebol. Apakah ada produk dengan efek serupa namun dengan harga yang lebih terjangkau?', 9, 3, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(10, 'Saya baru ingin mencoba produk ini tapi masih ragu. Apakah ada yang memiliki pengalaman lebih lanjut dengan pemakaian jangka panjang? Bagaimana efeknya setelah beberapa bulan pemakaian?', 11, 6, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(11, 'Saya cuci wajah saya dua kali setelah menggunakan Cleansing Oil, dan hasilnya sangat baik. Kulit saya benar-benar bersih dan terasa segar.', 3, 1, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(12, 'Ulasan yang bagus! Selain menggunakan produk ini, adakah langkah tambahan dalam rutinitas skincare yang membantu meningkatkan hasilnya? Saya ingin memaksimalkan manfaat dari produk ini.', 14, 11, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(13, 'Saya cuci wajah saya dua kali setelah menggunakan Cleansing Oil, dan hasilnya sangat baik. Kulit saya benar-benar bersih dan terasa segar.', 7, 11, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(14, 'Saya lebih suka Sheet Mask yang mengandung bahan aktif lainnya. Mungkin ini tidak cukup kuat untuk permasalahan kulit saya.', 2, 1, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(15, 'erima kasih atas ulasan yang detail! Saya juga menggunakan produk ini dan benar-benar setuju dengan hasil yang Anda rasakan. Bagi saya, konsistensi penggunaan memainkan peran besar dalam melihat perubahan pada kulit.', 8, 5, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(16, 'Saya cuci wajah saya dua kali setelah menggunakan Cleansing Oil, dan hasilnya sangat baik. Kulit saya benar-benar bersih dan terasa segar.', 3, 4, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(17, 'Ulasan yang bagus! Selain menggunakan produk ini, adakah langkah tambahan dalam rutinitas skincare yang membantu meningkatkan hasilnya? Saya ingin memaksimalkan manfaat dari produk ini.', 6, 2, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(18, 'Saya setuju dengan pengguna pertama. Aloe Vera Gel ini menyelamatkan kulit saya setelah berjemur di pantai juga. Ini menjadi produk andalan saya untuk merawat kulit setelah berjemur.', 5, 4, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(19, 'Saya memiliki pengalaman yang berbeda dengan produk ini. Meskipun teksturnya bagus, sayangnya, kulit saya cenderung bereaksi dengan bahan tertentu dalam formulanya. Tapi, hebatnya, setiap kulit memang berbeda-beda ya!', 2, 11, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(20, 'Mungkin efek samping yang saya alami karena salah penggunaan produk. Apakah ada saran atau tips dalam menggunakan skincare tertentu agar hasilnya lebih optimal tanpa menimbulkan efek negatif pada kulit?', 5, 5, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(21, 'Saya setuju, konsistensi dalam penggunaan skincare sangat penting. Namun, adakah tips khusus dalam memasukkan produk ini ke dalam rutinitas skincare harian?', 4, 3, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(22, 'Saya suka bagaimana serum ini membuat kulit saya terasa lebih kencang. Pasti memerlukan waktu untuk melihat perubahan, jadi bersabarlah!', 3, 4, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(23, 'Saya setuju dengan pengguna pertama. Aloe Vera Gel ini menyelamatkan kulit saya setelah berjemur di pantai juga. Ini menjadi produk andalan saya untuk merawat kulit setelah berjemur.', 9, 3, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(24, 'Mengenai kemasan, apakah produk ini ramah lingkungan? Saya mencoba berpindah ke produk-produk yang lebih berkelanjutan untuk lingkungan.', 15, 5, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(25, 'Ulasan yang bagus! Selain menggunakan produk ini, adakah langkah tambahan dalam rutinitas skincare yang membantu meningkatkan hasilnya? Saya ingin memaksimalkan manfaat dari produk ini.', 15, 10, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(26, 'Saya mengalami efek yang sama dengan pengguna kedua. Serum ini tidak bekerja untuk saya. Mungkin saya harus mencari yang lain.', 7, 7, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(27, 'Apakah produk ini bersifat waterproof atau tahan air? Saya aktif di luar ruangan dan mencari sunscreen yang tetap efektif meskipun saat berkeringat atau berenang.', 15, 3, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(28, 'Sheet Mask ini memang bagus untuk meremajakan kulit sebelum acara khusus. Saya selalu gunakan sebelum pernikahan atau acara penting lainnya.', 12, 1, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(29, 'erima kasih atas ulasan yang detail! Saya juga menggunakan produk ini dan benar-benar setuju dengan hasil yang Anda rasakan. Bagi saya, konsistensi penggunaan memainkan peran besar dalam melihat perubahan pada kulit.', 8, 1, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(30, 'Saya lebih suka Sheet Mask yang mengandung bahan aktif lainnya. Mungkin ini tidak cukup kuat untuk permasalahan kulit saya.', 1, 6, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(31, 'Saya setuju dengan pengguna kedua. Cleansing Oil ini cukup sulit dibilas. Mungkin saya akan mencoba merek lain yang lebih mudah dibilas.', 6, 10, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(32, 'Mungkin efek samping yang saya alami karena salah penggunaan produk. Apakah ada saran atau tips dalam menggunakan skincare tertentu agar hasilnya lebih optimal tanpa menimbulkan efek negatif pada kulit?', 9, 4, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(33, 'Saya cuci wajah saya dua kali setelah menggunakan Cleansing Oil, dan hasilnya sangat baik. Kulit saya benar-benar bersih dan terasa segar.', 14, 2, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(34, 'Saya setuju dengan pengguna pertama. Aloe Vera Gel ini menyelamatkan kulit saya setelah berjemur di pantai juga. Ini menjadi produk andalan saya untuk merawat kulit setelah berjemur.', 1, 11, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(35, 'Saya suka bagaimana serum ini membuat kulit saya terasa lebih kencang. Pasti memerlukan waktu untuk melihat perubahan, jadi bersabarlah!', 13, 10, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(36, 'Ulasan yang bagus! Selain menggunakan produk ini, adakah langkah tambahan dalam rutinitas skincare yang membantu meningkatkan hasilnya? Saya ingin memaksimalkan manfaat dari produk ini.', 2, 1, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(37, 'Ulasan yang bagus! Selain menggunakan produk ini, adakah langkah tambahan dalam rutinitas skincare yang membantu meningkatkan hasilnya? Saya ingin memaksimalkan manfaat dari produk ini.', 14, 8, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(38, 'erima kasih atas ulasan yang detail! Saya juga menggunakan produk ini dan benar-benar setuju dengan hasil yang Anda rasakan. Bagi saya, konsistensi penggunaan memainkan peran besar dalam melihat perubahan pada kulit.', 10, 11, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(39, 'Saya mencoba produk ini berdasarkan ulasan positif, namun sayangnya tidak cocok dengan kulit saya. Mungkin memang setiap orang memiliki respons yang berbeda terhadap skincare. Tetap mencari produk yang tepat untuk kulit saya!', 2, 3, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(40, 'Apakah produk ini bersifat waterproof atau tahan air? Saya aktif di luar ruangan dan mencari sunscreen yang tetap efektif meskipun saat berkeringat atau berenang.', 13, 6, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(41, 'Setuju sekali dengan ulasan ini', 1, 15, '2023-11-18 05:23:11', '2023-11-18 05:23:11');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_25_072548_create_produks_table', 1),
(6, '2023_10_25_072614_create_reviews_table', 1),
(7, '2023_10_25_072623_create_komentars_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `nama_produk`, `jenis`, `deskripsi`, `merk`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'MSH Niacinamide Brightening Moisture Gel', 'Sunscreen', 'Pelembap harian yang memberikan perlindungan dari sinar matahari (SPF 30) sambil menjaga kelembapan kulit sepanjang hari. Formula ringan yang tidak lengket, membantu melindungi kulit dari paparan sinar UV dan polusi lingkungan.', 'Azarine', 'sunscreen-1.webp', '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(2, 'Kiehl\'s Midnight Recovery Concentrate', 'Toner', 'Toner ini diformulasikan khusus untuk membersihkan dan mengontrol minyak berlebih. Mengandung bahan-bahan seperti witch hazel atau salicylic acid untuk membantu membersihkan pori-pori, mengurangi kemerahan, dan menjaga kulit tetap segar tanpa membuatnya kering.', 'Mustika Ratu', 'moist-2.jpeg', '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(3, 'Olay Regenerist Micro-Sculpting Cream', 'Toner', 'Pembersih wajah dengan teknologi micellar untuk membersihkan sisa makeup, kotoran, dan minyak tanpa perlu dibilas. Formulasi lembut yang cocok untuk semua jenis kulit, memberikan sensasi kesegaran dan kelembutan setelah digunakan.', 'JAFRA Indonesia', 'serum-5.jpeg', '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(4, 'Moisture Rich Hydrating Toner', 'Moisturizer', 'Serum inovatif yang mengandung campuran peptida canggih untuk meremajakan kulit. Meresap dengan cepat dan membantu meratakan tekstur kulit, mengurangi garis halus, dan meningkatkan elastisitas. Formula ringan yang cocok untuk digunakan sebelum penggunaan pelembap.', 'Mustika Ratu', 'toner-2.webp', '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(5, 'La Roche-Posay Toleriane Double Repair Moisturizer', 'Facial Wash', 'Pembersih wajah dengan teknologi micellar untuk membersihkan sisa makeup, kotoran, dan minyak tanpa perlu dibilas. Formulasi lembut yang cocok untuk semua jenis kulit, memberikan sensasi kesegaran dan kelembutan setelah digunakan.', 'Bali Alus', 'facial-2.png', '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(6, 'Hydrasoothe Sunscreen Mist', 'Moisturizer', 'Serum inovatif yang mengandung campuran peptida canggih untuk meremajakan kulit. Meresap dengan cepat dan membantu meratakan tekstur kulit, mengurangi garis halus, dan meningkatkan elastisitas. Formula ringan yang cocok untuk digunakan sebelum penggunaan pelembap.', 'Purbasari', 'serum-6.png', '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(7, 'Drunk Elephant T.L.C. Framboos Glycolic Night Serum', 'Serum', 'Formula lembut dengan enzim buah-buahan alami, scrub ini memberikan eksfoliasi yang lembut untuk mengangkat sel-sel kulit mati. Membantu menyamarkan tekstur kulit, mengurangi noda, dan menghidrasi kulit. Hasilnya adalah kulit yang lebih halus, segar, dan berseri.', 'Skintific', 'serum-7.jpg', '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(8, 'Sunday Riley Good Genes All-In-One Lactic Acid Treatment', 'Toner', 'Toner ini mengandung campuran ekstrak herbal yang membantu menyeimbangkan pH kulit, mengurangi kemerahan, dan memberikan sensasi kesegaran. Diformulasikan tanpa alkohol, menjadikannya cocok untuk semua jenis kulit, bahkan yang sensitif sekalipun.', 'Natasha Skin Care', 'skincare-1.jpeg', '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(9, 'CeraVe Hydrating Cleanser', 'Serum', 'Dikembangkan khusus untuk kulit sensitif, produk ini memiliki formula hypoallergenic yang lembut namun efektif dalam memberikan perlindungan tinggi terhadap sinar matahari (SPF 50). Tidak mengandung pewangi atau bahan iritan, cocok untuk kulit yang rentan terhadap reaksi alergi.', 'Skintific', 'moist-3.jpg', '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(10, 'Instan Glow Peel Off Nail Polish', 'Moisturizer', 'Toner ini mengandung campuran ekstrak herbal yang membantu menyeimbangkan pH kulit, mengurangi kemerahan, dan memberikan sensasi kesegaran. Diformulasikan tanpa alkohol, menjadikannya cocok untuk semua jenis kulit, bahkan yang sensitif sekalipun.', 'Skintific', 'sunscreen-2.webp', '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(11, '5X Ceramide Barrier Repair Moisturizer Gel', 'Moisturizer', 'Masker yang dirancang untuk membersihkan pori-pori secara mendalam dan menghilangkan kotoran serta racun yang menyumbat kulit. Mengandung campuran lembut dari tanah liat alami dan ekstrak tumbuhan untuk menenangkan kulit, meninggalkan rasa kesegaran dan kelembutan setelah penggunaan.', 'Azarine', 'serum-4.webp', '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(12, 'AHA-BHA-PHA Peeling Serum', 'Sunscreen', 'Formula lembut dengan enzim buah-buahan alami, scrub ini memberikan eksfoliasi yang lembut untuk mengangkat sel-sel kulit mati. Membantu menyamarkan tekstur kulit, mengurangi noda, dan menghidrasi kulit. Hasilnya adalah kulit yang lebih halus, segar, dan berseri.', 'Bali Alus', 'moist-1.jpg', '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(13, 'Revitalift Anti-Wrinkle Cream', 'Facial Wash', 'Sunscreen ini tidak hanya melindungi kulit dari sinar UVA dan UVB dengan SPF 50, tetapi juga memberikan kelembapan yang tahan lama. Dengan tekstur ringan dan cepat meresap, produk ini tidak meninggalkan rasa lengket atau putih pada kulit.', 'JAFRA Indonesia', 'toner-1.webp', '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(14, 'Hydramax C Sunscreen Serum', 'Moisturizer', 'Diformulasikan khusus untuk pemulihan kulit semalam, pelembap ini mengandung kombinasi bahan aktif seperti retinol dan asam hialuronat untuk membantu mengurangi tanda-tanda penuaan, meningkatkan tekstur kulit, dan memberikan hidrasi mendalam selama malam.', 'Viva Cosmetics', 'facial-4.png', '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(15, 'Daily Beginner Exfoliating Toner', 'Serum', 'Toner dengan formula yang diperkaya dengan bahan-bahan yang melembapkan dan menghidrasi kulit secara mendalam. Mengandung asam hialuronat atau ekstrak botani yang membantu menjaga kelembapan alami kulit, memberikan sensasi segar dan kenyal setelah penggunaan.', 'Purbasari', 'toner-3.jpeg', '2023-11-18 04:39:54', '2023-11-18 04:39:54');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `produk_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `isi`, `user_id`, `produk_id`, `created_at`, `updated_at`) VALUES
(1, 'Sayangnya, Aloe Vera Gel ini membuat kulit saya merasa kering. Mungkin bukan cocok untuk saya, tapi banyak orang tampak menyukainya.', 11, 4, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(2, 'Kemasannya praktis dan higienis dengan botol kaca yang elegan dan pipet untuk aplikasi yang mudah. Teksturnya ringan dan cepat meresap ke dalam kulit tanpa meninggalkan rasa lengket.', 8, 2, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(3, 'Saya mencoba Sheet Mask ini sebelum acara penting, dan hasilnya luar biasa! Kulit saya terlihat bersinar dan terhidrasi dengan baik. Sangat cocok untuk perawatan wajah sebelum acara khusus.', 7, 4, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(4, 'Saya tidak melihat perubahan apa pun setelah menggunakan serum ini. Ini mungkin tidak cocok untuk jenis kulit saya.', 1, 4, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(5, 'Saya sangat menyukai Aloe Vera Gel ini. Sangat ringan di kulit dan memberikan perasaan sejuk. Saya menggunakannya setelah berjemur di pantai, dan kulit saya terasa sangat lembut. Ini adalah penyelamat untuk kulit yang terbakar matahari!', 8, 9, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(6, 'Kemasannya praktis dan higienis dengan botol kaca yang elegan dan pipet untuk aplikasi yang mudah. Teksturnya ringan dan cepat meresap ke dalam kulit tanpa meninggalkan rasa lengket.', 6, 15, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(7, 'Saya merasa Cleansing Oil ini agak sulit dibilas, dan meninggalkan lapisan minyak di wajah saya. Mungkin perlu beberapa kali pencucian tambahan.', 9, 15, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(8, 'Saya telah menggunakan serum ini selama 3 bulan, dan saya benar-benar melihat perubahan pada kerutan di wajah saya. Kulit saya tampak lebih kencang dan halus. Ini adalah penyelamat saya untuk melawan tanda-tanda penuaan!', 3, 5, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(9, 'Saya merasa Cleansing Oil ini agak sulit dibilas, dan meninggalkan lapisan minyak di wajah saya. Mungkin perlu beberapa kali pencucian tambahan.', 7, 15, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(10, 'Cleansing Oil ini sangat efektif untuk menghapus riasan wajah. Saya bisa merasa minyaknya melarutkan makeup dengan mudah. Setelah mencucinya, kulit saya terasa segar dan tidak berminyak.', 1, 15, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(11, 'Saya telah menggunakan serum ini selama 3 bulan, dan saya benar-benar melihat perubahan pada kerutan di wajah saya. Kulit saya tampak lebih kencang dan halus. Ini adalah penyelamat saya untuk melawan tanda-tanda penuaan!', 8, 11, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(12, 'Cleansing Oil ini sangat efektif untuk menghapus riasan wajah. Saya bisa merasa minyaknya melarutkan makeup dengan mudah. Setelah mencucinya, kulit saya terasa segar dan tidak berminyak.', 4, 10, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(13, 'Saya merasa Cleansing Oil ini agak sulit dibilas, dan meninggalkan lapisan minyak di wajah saya. Mungkin perlu beberapa kali pencucian tambahan.', 9, 12, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(14, 'Saya mencoba Sheet Mask ini sebelum acara penting, dan hasilnya luar biasa! Kulit saya terlihat bersinar dan terhidrasi dengan baik. Sangat cocok untuk perawatan wajah sebelum acara khusus.', 3, 13, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(15, 'Saya tidak melihat perubahan apa pun setelah menggunakan serum ini. Ini mungkin tidak cocok untuk jenis kulit saya.', 7, 8, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(16, 'Sayangnya, Aloe Vera Gel ini membuat kulit saya merasa kering. Mungkin bukan cocok untuk saya, tapi banyak orang tampak menyukainya.', 11, 8, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(17, 'Produknya sangat memutihkan wajah dan sangat cepat efek samping nya dapat terlihat.', 15, 7, '2023-11-18 05:21:16', '2023-11-18 05:21:16'),
(18, 'Produk ini sangat ampuh dalam membersihkan wajah.', 15, 5, '2023-11-18 05:26:40', '2023-11-18 05:26:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nama_lengkap`, `password`, `gambar`, `admin`, `created_at`, `updated_at`) VALUES
(1, 'vanezuela123', 'Vanez Blossom', '$2y$10$1PmzS6UKP/gikfkGKsxm/eyTgqHOhDZIscI5d6PmifKDirXpCYQ8G', 'vanezuela123.png', 0, '2023-11-18 04:38:58', '2023-11-18 04:38:58'),
(2, 'schulist.dariana', 'Ms. Daphnee Roob V', '$2y$10$hZ5MZ/j/fWzG.dj/WpV5O.u9HDAGXAlL612pGpiep1yCZskZpRgl.', 'user-10.jpg', 0, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(3, 'violette16', 'Devan Robel', '$2y$10$zE3CRfs.fpxn4/JHrmE9beEfiTXWHbfQqJRP1jmkwhqUO3ghtkpT.', 'user-3.jpg', 0, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(4, 'reid61', 'Carson Larkin DVM', '$2y$10$psAk5sCadhZTUdBIPKnx9.C42OnDngZc5uyiREVTdRuq.5jw.G1Qe', 'user-4.jpg', 0, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(5, 'ghintz', 'Prof. Clifton Daniel Jr.', '$2y$10$WfixXZ5v/7hs8IO3rOhENOA6KAInP4rbvJrJ.HTOtGv46lrAzP9tO', 'user-5.jpg', 0, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(6, 'obotsford', 'Dr. Arturo Beahan', '$2y$10$6Sg6mjmdxlV6JSv5qImWoOCSXcBONuIfCFCuGuoCjzy6URUN8CuMq', 'user-2.jpg', 0, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(7, 'lavern.mayert', 'Zackery Koepp', '$2y$10$vFGFnDZS4r.I7HDF.uvXiuLUXVGahvJkR7VWwDP3aifzOpvUcjfa6', 'user-6.jpg', 0, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(8, 'keshawn.wehner', 'Dr. Myrtle Bechtelar', '$2y$10$GFHe/SpUNLzAbwqxRUPtY.ql6HxBYPt.XTxbBkNNK3huZq6lhqKiW', 'user-7.jpg', 0, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(9, 'treva44', 'Vada Schowalter', '$2y$10$r0K/wafEqSXKnydPQDi/Y..sb5mjfu727QiN11BW2qVdQVsnPNkw.', 'user-8.jpg', 0, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(10, 'savanna50', 'Prof. Carmella Bernier IV', '$2y$10$bVzzPtVGj9v4DuLV0os.ueOdBFTt3aA1Fv9gIqGLV99BuIrfYHS3q', 'user-9.jpg', 0, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(11, 'melvina24', 'Devante Schinner', '$2y$10$tUn3f1TWYutOcQEzBk9c1u1hIA2OFER9RsFmNnB1ZiKemrUWwhV1W', 'user-1.jpg', 0, '2023-11-18 04:39:54', '2023-11-18 04:39:54'),
(14, 'admin', 'Arabella Beth', '$2y$10$rOEzb7mEFg2pRR42ownQH.PvILS6remtC1EnLokcyQufYiTJUmSXu', 'admin.png', 1, '2023-11-18 05:14:08', '2023-11-18 05:15:48'),
(15, 'azkina1123', 'Aziizah Oki Shofrina', '$2y$10$rTawIeDey7YLK5kvACKALeD3QA4IdUVfXgNoHjQrdfxH1QPOODTI.', 'azkina1123.png', 0, '2023-11-18 05:18:13', '2023-11-18 05:24:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `komentars`
--
ALTER TABLE `komentars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `komentars_review_id_foreign` (`review_id`),
  ADD KEY `komentars_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_produk_id_foreign` (`produk_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `komentars`
--
ALTER TABLE `komentars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentars`
--
ALTER TABLE `komentars`
  ADD CONSTRAINT `komentars_review_id_foreign` FOREIGN KEY (`review_id`) REFERENCES `reviews` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `komentars_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_produk_id_foreign` FOREIGN KEY (`produk_id`) REFERENCES `produks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
