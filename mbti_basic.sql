-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 15, 2024 at 07:17 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mbti_basic`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint UNSIGNED NOT NULL,
  `question_id` bigint UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` enum('E','I','S','N','T','F','J','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `text`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, 'Saya lebih fokus pada dunia luar daripada dunia dalam diri saya.', 'E', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(2, 1, 'Saya lebih fokus pada dunia dalam diri saya daripada dunia luar.', 'I', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(3, 2, 'Saya lebih suka bekerja dengan fakta dan detail konkret.', 'S', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(4, 2, 'Saya lebih suka mempertimbangkan konsep dan ide.', 'N', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(5, 3, 'Saya cenderung mengikuti perasaan dan nilai-nilai saya sendiri.', 'F', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(6, 3, 'Saya lebih memperhatikan logika dan fakta.', 'T', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(7, 4, 'Saya lebih suka merencanakan aktivitas saya daripada mengambil hal-hal sebagaimana adanya.', 'J', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(8, 4, 'Saya lebih suka mengambil hal-hal sebagaimana adanya daripada merencanakan aktivitas saya.', 'P', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(9, 5, 'Saya menemukan energi saya dari berinteraksi dengan orang banyak, bahkan jika itu melelahkan saya.', 'E', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(10, 5, 'Saya menemukan energi saya dari waktu yang saya habiskan sendirian atau dalam kelompok kecil.', 'I', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(11, 6, 'Saya suka membuat daftar dan membuat rencana daripada melompat ke sesuatu tanpa rencana yang jelas.', 'J', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(12, 6, 'Saya lebih suka improvisasi daripada mengikuti rencana yang ketat.', 'P', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(13, 7, 'Saya lebih suka memutuskan berdasarkan fakta dan bukti yang ada.', 'S', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(14, 7, 'Saya lebih suka memutuskan berdasarkan intuisi dan perasaan saya.', 'N', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(15, 8, 'Saya cenderung lebih sensitif terhadap perasaan orang lain daripada logika dan fakta.', 'F', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(16, 8, 'Saya lebih memperhatikan logika dan fakta daripada perasaan orang lain.', 'T', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(17, 9, 'Saya merasa nyaman dengan kepastian dan struktur dalam hidup saya.', 'J', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(18, 9, 'Saya merasa nyaman dengan fleksibilitas dan spontanitas dalam hidup saya.', 'P', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(19, 10, 'Saya cenderung berpikir lebih banyak tentang masa depan daripada masa lalu.', 'J', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(20, 10, 'Saya lebih memperhatikan pengalaman dan kehidupan saya saat ini daripada masa depan.', 'P', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(21, 11, 'Saya senang berpikir secara abstrak dan mempertimbangkan banyak kemungkinan.', 'N', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(22, 11, 'Saya lebih suka berfokus pada fakta dan hal-hal yang konkret.', 'S', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(23, 12, 'Saya lebih suka bekerja sendiri daripada dalam kelompok besar.', 'I', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(24, 12, 'Saya merasa lebih produktif dan senang bekerja dalam kelompok besar.', 'E', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(25, 13, 'Saya lebih suka memutuskan sesuatu dengan memperhatikan nilai-nilai dan kepentingan orang lain.', 'F', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(26, 13, 'Saya lebih memperhatikan logika dan fakta dalam pengambilan keputusan.', 'T', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(27, 14, 'Saya merasa terdorong untuk menyelesaikan tugas tepat waktu dan merencanakan dengan baik.', 'J', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(28, 14, 'Saya lebih fleksibel dan tidak terlalu tertekan oleh jadwal yang ketat.', 'P', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(29, 15, 'Saya cenderung lebih fleksibel dan terbuka terhadap perubahan daripada kaku dan terstruktur.', 'P', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(30, 15, 'Saya lebih nyaman dengan rencana yang terstruktur dan jelas.', 'J', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(31, 16, 'Saya lebih suka belajar dari pengalaman langsung daripada belajar dari teori dan konsep.', 'S', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(32, 16, 'Saya lebih suka belajar dari teori dan konsep daripada pengalaman langsung.', 'N', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(33, 17, 'Saya merasa nyaman dengan keputusan yang cepat dan fleksibel daripada perencanaan jangka panjang.', 'P', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(34, 17, 'Saya lebih mempertimbangkan konsekuensi jangka panjang sebelum mengambil keputusan.', 'J', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(35, 18, 'Saya lebih suka berfokus pada detail dan praktikalitas daripada konsep dan ide.', 'S', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(36, 18, 'Saya lebih suka mempertimbangkan konsep dan ide daripada detail dan praktikalitas.', 'N', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(37, 19, 'Saya cenderung mempertimbangkan pandangan orang lain sebelum membuat keputusan.', 'F', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(38, 19, 'Saya lebih percaya dengan keputusan saya sendiri daripada mempertimbangkan pandangan orang lain.', 'T', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(39, 20, 'Saya lebih suka memiliki kebebasan untuk mengeksplorasi banyak pilihan daripada mengikuti rencana yang ketat.', 'P', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(40, 20, 'Saya lebih nyaman dengan struktur yang jelas dan rencana yang terorganisir.', 'J', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(41, 21, 'Saya lebih suka bekerja dengan cara yang dapat disesuaikan dengan kebutuhan saat ini daripada mengikuti rencana yang sudah ditentukan.', 'P', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(42, 21, 'Saya lebih suka mengikuti rencana yang sudah ditentukan daripada mengandalkan improvisasi.', 'J', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(43, 22, 'Saya merasa terdorong untuk menjaga harmoni dan menghindari konflik dalam interaksi sosial.', 'F', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(44, 22, 'Saya lebih suka fokus pada tujuan dan hasil daripada menghindari konflik.', 'T', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(45, 23, 'Saya cenderung lebih fokus pada detail praktis daripada melihat gambaran besar.', 'S', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(46, 23, 'Saya lebih suka melihat gambaran besar daripada terjebak dalam detail praktis.', 'N', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(47, 24, 'Saya lebih suka menyelesaikan satu proyek sebelum memulai yang lain daripada memiliki beberapa proyek dalam waktu yang bersamaan.', 'J', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(48, 24, 'Saya merasa lebih produktif jika saya dapat bekerja pada beberapa proyek sekaligus.', 'P', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(49, 25, 'Saya merasa nyaman berinteraksi dengan orang yang berbeda dan menemukan nilai dalam keragaman.', 'F', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(50, 25, 'Saya lebih suka berinteraksi dengan orang yang memiliki nilai dan pandangan yang sama dengan saya.', 'T', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(51, 26, 'Saya lebih suka merencanakan kegiatan dan membuat checklist daripada mengandalkan improvisasi.', 'J', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(52, 26, 'Saya lebih suka mengandalkan improvisasi daripada merencanakan kegiatan secara terstruktur.', 'P', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(53, 27, 'Saya cenderung memutuskan berdasarkan prinsip dan etika pribadi daripada kebutuhan praktis dan efisiensi.', 'F', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(54, 27, 'Saya lebih mempertimbangkan kebutuhan praktis dan efisiensi daripada prinsip dan etika pribadi.', 'T', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(55, 28, 'Saya lebih suka menghadapi masalah dan mengatasi tantangan secara langsung daripada menghindarinya.', 'J', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(56, 28, 'Saya lebih suka menghindari konflik dan mencari solusi kompromi.', 'P', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(57, 29, 'Saya cenderung lebih kreatif dan inovatif daripada konsisten dan terorganisir.', 'N', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(58, 29, 'Saya lebih suka konsisten dan terorganisir daripada berubah-ubah dan tidak terduga.', 'S', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(59, 30, 'Saya merasa nyaman dengan perubahan dan sering mencari tantangan baru dalam hidup saya.', 'P', '2024-07-14 16:39:43', '2024-07-14 16:39:43'),
(60, 30, 'Saya lebih suka konsisten dengan rutinitas dan tidak suka dengan perubahan yang tiba-tiba.', 'J', '2024-07-14 16:39:43', '2024-07-14 16:39:43');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mbti_results`
--

CREATE TABLE `mbti_results` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `result` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mbti_results`
--

INSERT INTO `mbti_results` (`id`, `name`, `email`, `result`, `created_at`, `updated_at`) VALUES
(1, 'ujang', 'ujang@gmail.com', 'INTP', '2024-07-14 23:58:11', '2024-07-14 23:58:11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_07_15_050305_create_questions_table', 1),
(5, '2024_07_15_050306_create_answers_table', 1),
(6, '2024_07_15_050419_create_mbti_results_table', 1);

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
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('EI','SN','TF','JP') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `text`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Saya lebih fokus pada dunia luar daripada dunia dalam diri saya.', 'EI', '2024-07-14 23:39:43', '2024-07-14 23:39:43'),
(2, 'Saya lebih suka bekerja dengan fakta dan detail konkret.', 'SN', '2024-07-14 23:39:43', '2024-07-14 23:39:43'),
(3, 'Saya cenderung mengikuti perasaan dan nilai-nilai saya sendiri.', 'TF', '2024-07-14 23:39:43', '2024-07-14 23:39:43'),
(4, 'Saya lebih suka merencanakan aktivitas saya daripada mengambil hal-hal sebagaimana adanya.', 'JP', '2024-07-14 23:39:43', '2024-07-14 23:39:43'),
(5, 'Saya menemukan energi saya dari berinteraksi dengan orang banyak, bahkan jika itu melelahkan saya.', 'EI', '2024-07-14 23:39:43', '2024-07-14 23:39:43'),
(6, 'Saya suka membuat daftar dan membuat rencana daripada melompat ke sesuatu tanpa rencana yang jelas.', 'JP', '2024-07-14 23:39:43', '2024-07-14 23:39:43'),
(7, 'Saya lebih suka memutuskan berdasarkan fakta dan bukti yang ada.', 'SN', '2024-07-14 23:39:43', '2024-07-14 23:39:43'),
(8, 'Saya cenderung lebih sensitif terhadap perasaan orang lain daripada logika dan fakta.', 'TF', '2024-07-14 23:39:43', '2024-07-14 23:39:43'),
(9, 'Saya merasa nyaman dengan kepastian dan struktur dalam hidup saya.', 'JP', '2024-07-14 23:39:43', '2024-07-14 23:39:43'),
(10, 'Saya cenderung berpikir lebih banyak tentang masa depan daripada masa lalu.', 'JP', '2024-07-14 23:39:43', '2024-07-14 23:39:43'),
(11, 'Saya senang berpikir secara abstrak dan mempertimbangkan banyak kemungkinan.', 'SN', '2024-07-14 23:39:43', '2024-07-14 23:39:43'),
(12, 'Saya lebih suka bekerja sendiri daripada dalam kelompok besar.', 'EI', '2024-07-14 23:39:43', '2024-07-14 23:39:43'),
(13, 'Saya lebih suka memutuskan sesuatu dengan memperhatikan nilai-nilai dan kepentingan orang lain.', 'TF', '2024-07-14 23:39:43', '2024-07-14 23:39:43'),
(14, 'Saya merasa terdorong untuk menyelesaikan tugas tepat waktu dan merencanakan dengan baik.', 'JP', '2024-07-14 23:39:43', '2024-07-14 23:39:43'),
(15, 'Saya cenderung lebih fleksibel dan terbuka terhadap perubahan daripada kaku dan terstruktur.', 'JP', '2024-07-14 23:39:43', '2024-07-14 23:39:43'),
(16, 'Saya lebih suka belajar dari pengalaman langsung daripada belajar dari teori dan konsep.', 'SN', '2024-07-14 23:39:43', '2024-07-14 23:39:43'),
(17, 'Saya merasa nyaman dengan keputusan yang cepat dan fleksibel daripada perencanaan jangka panjang.', 'JP', '2024-07-14 23:39:43', '2024-07-14 23:39:43'),
(18, 'Saya lebih suka berfokus pada detail dan praktikalitas daripada konsep dan ide.', 'SN', '2024-07-14 23:39:43', '2024-07-14 23:39:43'),
(19, 'Saya cenderung mempertimbangkan pandangan orang lain sebelum membuat keputusan.', 'TF', '2024-07-14 23:39:43', '2024-07-14 23:39:43'),
(20, 'Saya lebih suka memiliki kebebasan untuk mengeksplorasi banyak pilihan daripada mengikuti rencana yang ketat.', 'JP', '2024-07-14 23:39:43', '2024-07-14 23:39:43'),
(21, 'Saya lebih suka bekerja dengan cara yang dapat disesuaikan dengan kebutuhan saat ini daripada mengikuti rencana yang sudah ditentukan.', 'JP', '2024-07-14 23:39:43', '2024-07-14 23:39:43'),
(22, 'Saya merasa terdorong untuk menjaga harmoni dan menghindari konflik dalam interaksi sosial.', 'TF', '2024-07-14 23:39:43', '2024-07-14 23:39:43'),
(23, 'Saya cenderung lebih fokus pada detail praktis daripada melihat gambaran besar.', 'SN', '2024-07-14 23:39:43', '2024-07-14 23:39:43'),
(24, 'Saya lebih suka menyelesaikan satu proyek sebelum memulai yang lain daripada memiliki beberapa proyek dalam waktu yang bersamaan.', 'JP', '2024-07-14 23:39:43', '2024-07-14 23:39:43'),
(25, 'Saya merasa nyaman berinteraksi dengan orang yang berbeda dan menemukan nilai dalam keragaman.', 'TF', '2024-07-14 23:39:43', '2024-07-14 23:39:43'),
(26, 'Saya lebih suka merencanakan kegiatan dan membuat checklist daripada mengandalkan improvisasi.', 'JP', '2024-07-14 23:39:43', '2024-07-14 23:39:43'),
(27, 'Saya cenderung memutuskan berdasarkan prinsip dan etika pribadi daripada kebutuhan praktis dan efisiensi.', 'TF', '2024-07-14 23:39:43', '2024-07-14 23:39:43'),
(28, 'Saya lebih suka menghadapi masalah dan mengatasi tantangan secara langsung daripada menghindarinya.', 'JP', '2024-07-14 23:39:43', '2024-07-14 23:39:43'),
(29, 'Saya cenderung lebih kreatif dan inovatif daripada konsisten dan terorganisir.', 'SN', '2024-07-14 23:39:43', '2024-07-14 23:39:43'),
(30, 'Saya merasa nyaman dengan perubahan dan sering mencari tantangan baru dalam hidup saya.', 'JP', '2024-07-14 23:39:43', '2024-07-14 23:39:43');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('GDqowh3x8bSAwFrKXiJ8BJ93K5DjToXCsjeoe9yF', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieDhSeDNRODhoS3U5WmV5VzhkRjNMdkpyYzNsRFNWVTBtQnA5VHF1TiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9tYnRpIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721027716);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_question_id_foreign` (`question_id`);

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
-- Indexes for table `mbti_results`
--
ALTER TABLE `mbti_results`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mbti_results`
--
ALTER TABLE `mbti_results`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
