-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2021 at 11:00 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `legalconsulting`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Salama', 'Salama_M_Salama@gmail.com', '$2y$10$Q67jEX7z49da/zLyoCG.sOGJcXx4TRDgwDJfDWQULrVL9hC/4rWii', NULL, '2021-06-30 21:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `day` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `lawyer_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `day`, `date`, `lawyer_id`, `created_at`, `updated_at`) VALUES
(1, 'Tusday', '2021-07-13', 18, '2021-07-07 10:31:09', '2021-07-07 10:31:09'),
(2, 'Saturday', '2021-07-30', 18, '2021-07-07 10:32:45', '2021-07-07 10:32:45'),
(4, 'Monday', '2021-07-30', 20, '2021-07-08 13:16:42', '2021-07-08 13:16:42'),
(5, 'Wednesday', '2021-07-08', 18, '2021-07-09 14:56:29', '2021-07-09 14:56:29'),
(6, 'Monday', '2021-07-12', 18, '2021-07-09 15:00:00', '2021-07-09 15:00:00'),
(7, 'Wednesday', '2021-07-15', 4, '2021-07-09 15:14:30', '2021-07-09 15:14:30'),
(8, 'Saturday', '2021-07-17', 4, '2021-07-09 15:27:58', '2021-07-09 15:28:07'),
(9, 'Sunday', '2021-07-18', 4, '2021-07-09 15:31:18', '2021-07-09 15:31:18'),
(10, 'Wednesday', '2021-07-15', 5, '2021-07-09 16:02:41', '2021-07-09 16:02:41'),
(11, 'Saturday', '2021-07-17', 5, '2021-07-09 16:05:13', '2021-07-09 16:05:13'),
(12, 'Wednesday', '2021-07-15', 6, '2021-07-09 16:16:11', '2021-07-09 16:16:11'),
(13, 'Wednesday', '2021-07-15', 7, '2021-07-10 18:40:32', '2021-07-10 18:40:32'),
(14, 'Saturday', '2021-07-17', 7, '2021-07-10 18:44:49', '2021-07-10 18:44:49'),
(15, 'Wednesday', '2021-07-15', 9, '2021-07-10 21:27:14', '2021-07-10 21:27:14'),
(16, 'Saturday', '2021-07-17', 9, '2021-07-10 21:29:18', '2021-07-10 21:29:18'),
(17, 'Sunday', '2021-07-18', 9, '2021-07-10 21:31:22', '2021-07-10 21:31:22'),
(18, 'Wednesday', '2021-07-15', 19, '2021-07-10 21:34:39', '2021-07-10 21:34:39'),
(19, 'Saturday', '2021-07-17', 19, '2021-07-10 21:37:02', '2021-07-10 21:37:02'),
(20, 'Wednesday', '2021-07-15', 8, '2021-07-11 12:38:08', '2021-07-11 12:38:08'),
(21, 'Saturday', '2021-07-17', 8, '2021-07-11 12:41:01', '2021-07-11 12:41:01'),
(22, 'Sunday', '2021-07-18', 8, '2021-07-11 12:43:16', '2021-07-11 12:43:16'),
(23, 'Wednesday', '2021-07-15', 17, '2021-07-11 12:57:50', '2021-07-11 12:57:50'),
(24, 'Saturday', '2021-07-17', 17, '2021-07-11 13:01:04', '2021-07-11 13:01:04'),
(25, 'Sunday', '2021-07-18', 17, '2021-07-11 13:03:47', '2021-07-11 13:03:47'),
(26, 'Sunday', '2021-07-11', 11, '2021-07-11 13:11:20', '2021-07-11 13:11:20'),
(27, 'Wednesday', '2021-07-15', 11, '2021-07-11 13:16:28', '2021-07-11 13:16:28'),
(28, 'Saturday', '2021-07-17', 11, '2021-07-11 13:18:50', '2021-07-11 13:18:50'),
(29, 'Sunday', '2021-07-18', 11, '2021-07-11 13:21:04', '2021-07-11 13:21:04'),
(30, 'Wednesday', '2021-07-15', 12, '2021-07-11 13:34:10', '2021-07-11 13:34:10'),
(31, 'Saturday', '2021-07-17', 12, '2021-07-11 13:34:32', '2021-07-11 13:34:32'),
(32, 'Sunday', '2021-07-18', 12, '2021-07-11 13:35:06', '2021-07-11 13:35:06'),
(33, 'Wednesday', '2021-07-15', 15, '2021-07-11 14:18:55', '2021-07-11 14:18:55'),
(34, 'Saturday', '2021-07-17', 15, '2021-07-11 14:19:22', '2021-07-11 14:19:22'),
(35, 'Sunday', '2021-07-18', 15, '2021-07-11 14:19:49', '2021-07-11 14:19:49'),
(36, 'Sunday', '2021-07-18', 14, '2021-07-11 14:37:19', '2021-07-11 14:37:19'),
(37, 'Monday', '2021-07-19', 14, '2021-07-11 14:43:33', '2021-07-11 14:43:33'),
(38, 'Tusday', '2021-07-20', 14, '2021-07-11 14:44:14', '2021-07-11 14:44:14');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `lawyer_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `user_id`, `username`, `lawyer_id`, `created_at`, `updated_at`) VALUES
(1, 'This Is Good', 4, 'Ali', 4, '2021-07-01 19:49:19', '2021-07-01 19:49:19'),
(3, 'He Is Good', 4, 'Ali', 5, '2021-07-01 19:54:34', '2021-07-01 19:54:34'),
(6, 'He Is Very Good', 3, 'Mona', 14, '2021-07-01 21:26:31', '2021-07-01 21:26:31');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Ayman', 'Ayman@gmail.com', '08659966665584', 'There Is A Problem In Reservation', '2021-07-02 00:11:51', '2021-07-02 00:11:51'),
(10, 'Ali', 'Ali@gmail.com', '018625896548', 'There Is A Problem In Reservation', '2021-07-02 12:11:47', '2021-07-02 12:11:47'),
(11, 'Ramy', 'Ramy@gmail.com', '25896366996', 'There Is A Problem In Reservation', '2021-07-02 12:13:59', '2021-07-02 12:13:59'),
(13, 'Ali', 'Ali@gmail.com', '018625896548', 'There Is A Problem In Reservation', '2021-07-11 10:23:39', '2021-07-11 10:23:39'),
(14, 'Ramy', 'Ramy@gmail.com', '017856985632', 'There Is A Problem In Reservation', '2021-07-11 10:28:05', '2021-07-11 10:28:05');

-- --------------------------------------------------------

--
-- Table structure for table `dates`
--

CREATE TABLE `dates` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lawyer_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lawyers`
--

CREATE TABLE `lawyers` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `governorate` varchar(50) DEFAULT NULL,
  `region` varchar(50) DEFAULT NULL,
  `specialty` varchar(50) DEFAULT NULL,
  `address` text NOT NULL,
  `lawyerPhoto` varchar(100) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lawyers`
--

INSERT INTO `lawyers` (`id`, `firstName`, `lastName`, `name`, `email`, `password`, `gender`, `phone`, `governorate`, `region`, `specialty`, `address`, `lawyerPhoto`, `active`, `created_at`, `updated_at`) VALUES
(4, 'Ramy', 'Yousry', 'Ramy Yousry', 'Ramy_Yousry@gmail.com', '$2y$10$cwj1mNqXRzgL6oELTp7SeOy2UIOtCZaB6AupnexNFQ7WGi1KoTdJi', 'ذكر', '019874589656', 'Domiat', 'domiat_elgdeda', 'محامي عام', 'Domiat_Elgdeda', 'photo-1625261742.jpg', 1, '2021-06-29 18:03:45', '2021-07-02 19:35:42'),
(5, 'Gamal', 'Rami', 'Gamal Rami', 'Gamal_Rami@gmail.com', '$2y$10$.UwuHjwfNbq1jl.4M5XuVOXc43bhlYvlQzxTPK0T6qcwL0tkN80IG', 'ذكر', '08569632258', 'Menofia', 'shebin_elkoom', 'المحامي الجنائي', 'Shebin_Elkoom', 'photo-1625261506.jpg', 1, '2021-06-29 18:14:04', '2021-07-02 19:31:46'),
(6, 'Ramy', 'Adel', 'Ramy Adel', 'Ramy_Adel@gmail.com', '$2y$10$CGbEfrsUximuEgYKxV05iuDMlnTGR4Ddm30X3YwmGMTwHNdiol4Oa', 'ذكر', '08965896587', 'Alex', 'semohaa', 'محامي الملكية الفكرية', 'Semoha', 'photo-1625261393.jpg', 1, '2021-06-29 18:18:06', '2021-07-10 17:59:22'),
(7, 'Khalid', 'Wael', 'Khalid Wael', 'Khalid_Wael@gmail.com', '$2y$10$QSdIoMsSr4lxpn28ujAg5uQZ6ZWsoaxKJ7.BHkE90sx/yUnHGKENe', 'ذكر', '258999999999999999999', 'Bhera', 'damnhour', 'محامي الافلاس', 'Damanhour', 'photo-1625260980.jpg', 1, '2021-06-29 20:14:41', '2021-07-02 19:23:00'),
(8, 'Adel', 'Ramzi', 'Adel Ramzi', 'Adel_Ramzi@gmail.com', '$2y$10$smddTSs.kcH3z5eI5D8AqeUAAArPML/qnw.vWrouH4TidDz2qeeY6', 'ذكر', '089633666666', 'Daqhlia', 'elmansoura', 'محامي الاصابات الشخصية', 'Elmansoura', 'photo-1625260874.jpg', 1, '2021-06-29 21:18:46', '2021-07-02 19:21:14'),
(9, 'Khalid', 'Tamer', 'Khalid Tamer', 'Khalid_Tamer@gmail.com', '$2y$10$fPB.zINemtT4FkNqDAz5S.P4InkAPZOQJTUTAzT6JWfejOospi3GK', 'انثي', '08963366666', 'Gharbia', 'tanta', 'محامي سوء الممارسة الطبية', 'Tanta', 'photo-1625260817.jpg', 1, '2021-06-29 22:03:21', '2021-07-10 19:23:46'),
(11, 'Ayman', 'Wael', 'Ayman Wael', 'Ayman_Wael@gmail.com', '$2y$10$4TxQJR2aohuL7FNocn31r.fw5YAahoda4WJs.yMoqWA7LSNmS60LS', 'انثي', '258966666555', 'Asut', 'mnfloot', 'محامي العمل', 'Mnfloot', 'photo-1625260739.png', 1, '2021-06-29 22:13:09', '2021-07-09 13:06:35'),
(12, 'Gaber', 'Ali', 'Gaber Ali', 'Gaber_Ali@gmail.com', '$2y$10$zk6iYg.daBEH2lhAyaNSeubup6zF73876s7.AouOb1EmjeD8.zd4y', 'انثي', '0111111111111111111111111', 'Asut', 'abnob', 'محامي الدعاوي المدنية', 'Abnob', 'photo-1625260623.jpg', 1, '2021-06-29 22:15:07', '2021-07-09 13:07:30'),
(13, 'Fadi', 'Kamel', 'Fadi Kamel', 'Fadi_Kamel@gmail.com', '$2y$10$q/FPCrxANHMJwZ8yhnYPCet7KH.k1mwukwM9wjWpUApBspa2fKwpC', 'انثي', '866548966333', 'Boursaid', 'madint_boursaid', 'محامي تعويض العمال', 'Madint_Boursaid', 'photo-1625260378.jpg', 0, '2021-06-29 22:26:38', '2021-07-02 19:12:58'),
(14, 'Kamel', 'Wael', 'Kamel Wael', 'Kamel_Wael@gmail.com', '$2y$10$V6cPo1tGW10JM.gLMzmhxOeWWoJ2Mb5b7TUFFJJcMwcCyk0npPWS6', 'ذكر', '01888888888888888888', 'Qalubia', 'banha', 'محامي التخطيط العقاري', 'Banha', 'productImage-1625050148.jpg', 1, '2021-06-30 11:05:06', '2021-07-02 19:10:18'),
(15, 'Ramy', 'Ali', 'Ramy Ali', 'Rami_Ali@gmail.com', '$2y$10$V3Qin/hon089gi2d0w3sCe0.ebEGBkvYwO7QpnVosRPIlE2RELqQ2', 'ذكر', '017896369855', 'Ismalia', 'madint_elesmalia', 'محامي المؤسسة', 'Madint_Elesmalia', 'photo-1625258538.jpg', 1, '2021-06-30 11:15:22', '2021-07-02 18:59:12'),
(16, 'Hani', 'Ayman', 'Hani Ayman', 'Hani_Ayman@gmail.com', '$2y$10$Vm.Y.6NsjxhjbrCdQ60jC.2/EDiNOPcYGAYGpmxxLZXPPaDWGQ0bu', 'ذكر', '2222222222222', 'Asut', 'abnob', 'محامي الاصابات الشخصية', 'Abnob', 'productImage-1625171686.jpg', 1, '2021-07-01 18:34:56', '2021-07-02 18:59:28'),
(17, 'Tamer', 'Fadi', 'Tamer Fadi', 'Tamer_Fadi@gmail.com', '$2y$10$bRbNlbCYyqMd9w9m12K0LupWhffa.vGLvmtJYWBLs2.wZOFqTM/7q', 'ذكر', '25896666666', 'Daqhlia', 'aga', 'محامي الدعاوي المدنية', 'Aga', 'productImage-1625172500.jpg', 1, '2021-07-01 18:48:29', '2021-07-02 18:59:33'),
(18, 'Diaa', 'Ramy', 'Diaa Ramy', 'Diaa_Ramy@gmail.com', '$2y$10$h6Z5apQVGuGpvOj4TjmGSeapwBkwzRxCaukKhPOOjiymOLk/a1Tii', 'ذكر', '22589666666688', 'Matrooh', 'marsa_matrooh', 'محامي تعويض العمال', 'Marsa_Matrooh', 'productImage-1625187842.jpg', 1, '2021-07-01 23:04:10', '2021-07-08 18:46:51'),
(19, 'Tamer', 'Hani', 'Tamer Hani', 'Tamer_Hani@gmail.com', '$2y$10$QMWMYuvPj6EDPrpvOQOiQOIHUO3dVMPcXVHQZXdAfMgg//Cojpqbi', 'ذكر', '5896666666633', 'Domiat', 'domiat', 'محامي العمل', 'Domiat', 'productImage-1625188050.jpg', 1, '2021-07-01 23:07:39', '2021-07-02 18:59:43'),
(20, 'Ashraf', 'Loay', 'Ashraf Loay', 'Ashraf_Loay@gmail.com', '$2y$10$lC0hlvsrCb4ZG88xbVhWeuvsidRxnxADukYoxSUiNm6doHGi/Xh/W', 'ذكر', '2589633333699', 'Asut', 'mnfloot', 'محامي التخطيط العقاري', 'Manfaloot', 'photo-1625267599.jpg', 1, '2021-07-02 21:13:23', '2021-07-09 13:06:42'),
(21, 'Fadi', 'Diab', 'Fadi Diab', 'Fadi_Diab@gmail.com', '$2y$10$BXbScssdCV5Gqkb91g0BFuJ5zl15A.YtTTn6hqZoYQTEM0i8vXzyu', 'ذكر', '0175233698521', 'Asut', 'mnfloot', NULL, 'Mnfloot', 'photo-1626042362.jpg', 0, '2021-07-11 20:29:50', '2021-07-11 20:29:50');

-- --------------------------------------------------------

--
-- Table structure for table `lawyertimeavailables`
--

CREATE TABLE `lawyertimeavailables` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `from` varchar(50) NOT NULL,
  `to` varchar(50) NOT NULL,
  `lawyer_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lawyertimeavailables`
--

INSERT INTO `lawyertimeavailables` (`id`, `date`, `from`, `to`, `lawyer_id`, `created_at`, `updated_at`) VALUES
(1, '2021-07-28', '2 PM', '5 PM', 18, '2021-07-08 00:12:10', '2021-07-08 00:12:10'),
(2, '2021-07-31', '3 PM', '6 PM', 18, '2021-07-08 00:14:29', '2021-07-08 00:14:29'),
(3, '2021-07-15', '1 PM', '5 PM', 14, '2021-07-09 21:25:35', '2021-07-09 21:25:35'),
(4, '2021-07-16', '2 PM', '4 PM', 14, '2021-07-09 21:28:20', '2021-07-09 21:28:20'),
(5, '2021-07-17', '2 PM', '3 PM', 14, '2021-07-09 21:52:30', '2021-07-09 21:52:30'),
(6, '2021-07-15', '1 PM', '3 PM', 6, '2021-07-10 16:02:30', '2021-07-10 16:02:30'),
(7, '2021-07-16', '3 PM', '4 PM', 6, '2021-07-10 16:04:02', '2021-07-10 16:04:02'),
(9, '2021-07-17', '1 PM', '4 PM', 6, '2021-07-10 16:20:23', '2021-07-10 16:20:23'),
(10, '2021-07-18', '1 PM', '3 PM', 7, '2021-07-10 16:50:22', '2021-07-10 16:50:22'),
(11, '2021-07-19', '4 PM', '6 PM', 7, '2021-07-10 16:50:49', '2021-07-10 16:50:49'),
(12, '2021-07-20', '6 PM', '8 PM', 7, '2021-07-10 16:51:12', '2021-07-10 16:51:12'),
(13, '2021-07-20', '1 PM', '3 PM', 9, '2021-07-10 19:25:04', '2021-07-10 19:25:04'),
(14, '2021-07-21', '2 PM', '3 PM', 9, '2021-07-10 19:25:25', '2021-07-10 19:25:25'),
(15, '2021-07-22', '4 PM', '6 PM', 9, '2021-07-10 19:25:44', '2021-07-10 19:25:44'),
(16, '2021-07-19', '1 PM', '3 PM', 19, '2021-07-10 19:39:00', '2021-07-10 19:39:00'),
(17, '2021-07-20', '2 PM', '4 PM', 19, '2021-07-10 19:39:27', '2021-07-10 19:39:27'),
(18, '2021-07-21', '3 PM', '4 PM', 19, '2021-07-10 19:40:04', '2021-07-10 19:40:04'),
(19, '2021-07-19', '2 PM', '4 PM', 4, '2021-07-10 19:47:36', '2021-07-10 19:47:36'),
(20, '2021-07-20', '1 PM', '3 PM', 4, '2021-07-10 19:47:53', '2021-07-10 19:47:53'),
(21, '2021-07-21', '4 PM', '5 PM', 4, '2021-07-10 19:48:10', '2021-07-10 19:48:10'),
(23, '2021-07-19', '1 PM', '4 PM', 8, '2021-07-11 10:48:54', '2021-07-11 10:48:54'),
(24, '2021-07-20', '2 PM', '4 PM', 8, '2021-07-11 10:49:13', '2021-07-11 10:49:13'),
(25, '2021-07-21', '3 PM', '5 PM', 8, '2021-07-11 10:49:46', '2021-07-11 10:49:46'),
(26, '2021-07-19', '1 PM', '3 PM', 17, '2021-07-11 11:05:36', '2021-07-11 11:05:36'),
(27, '2021-07-20', '2 PM', '4 PM', 17, '2021-07-11 11:05:55', '2021-07-11 11:05:55'),
(28, '2021-07-21', '3 PM', '6 PM', 17, '2021-07-11 11:06:13', '2021-07-11 11:06:13'),
(29, '2021-07-19', '2 PM', '4 PM', 11, '2021-07-11 11:26:06', '2021-07-11 11:26:06'),
(30, '2021-07-20', '1 PM', '3 PM', 11, '2021-07-11 11:26:29', '2021-07-11 11:26:29'),
(31, '2021-07-21', '5 PM', '6 PM', 11, '2021-07-11 11:26:49', '2021-07-11 11:26:49'),
(32, '2021-07-19', '2 PM', '4 PM', 12, '2021-07-11 11:38:58', '2021-07-11 11:38:58'),
(33, '2021-07-20', '1 PM', '3 PM', 12, '2021-07-11 11:39:12', '2021-07-11 11:39:12'),
(34, '2021-07-21', '4 PM', '6 PM', 12, '2021-07-11 11:39:30', '2021-07-11 11:39:30'),
(38, '2021-07-19', '1 PM', '4 PM', 15, '2021-07-11 12:30:58', '2021-07-11 12:30:58'),
(39, '2021-07-20', '3 PM', '5 PM', 15, '2021-07-11 12:31:19', '2021-07-11 12:31:19'),
(41, '2021-07-21', '4 PM', '6 PM', 15, '2021-07-11 12:32:20', '2021-07-11 12:32:20'),
(42, '2021-07-19', '1 PM', '4 PM', 16, '2021-07-11 12:49:54', '2021-07-11 12:49:54'),
(43, '2021-07-20', '3 PM', '5 PM', 16, '2021-07-11 12:50:13', '2021-07-11 12:50:13'),
(44, '2021-07-21', '4 PM', '6 PM', 16, '2021-07-11 12:50:35', '2021-07-11 12:50:35'),
(45, '2021-07-19', '2 PM', '5 PM', 20, '2021-07-11 13:51:34', '2021-07-11 13:51:34'),
(46, '2021-07-20', '3 PM', '5 PM', 20, '2021-07-11 13:51:50', '2021-07-11 13:51:50'),
(47, '2021-07-21', '1 PM', '3 PM', 20, '2021-07-11 13:52:07', '2021-07-11 13:52:07'),
(48, '2021-07-22', '4 PM', '6 PM', 20, '2021-07-11 13:52:55', '2021-07-11 13:52:55'),
(49, '2021-07-23', '1 PM', '4 PM', 20, '2021-07-11 13:53:17', '2021-07-11 13:53:17');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lawyer_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `lawyer` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `lawyer_id`, `user`, `lawyer`, `message`, `created_at`, `updated_at`) VALUES
(1, 4, 18, 'fromUser', 'toLawyer', 'Hi', '2021-07-10 03:41:55', '2021-07-10 03:41:55'),
(2, 4, 18, 'toUser', 'fromLawyer', 'Welcome', '2021-07-10 03:55:36', '2021-07-10 03:55:36'),
(3, 3, 18, 'fromUser', 'toLawyer', 'Welcome My Favourite Lawyer', '2021-07-10 04:12:33', '2021-07-10 04:12:33'),
(5, 3, 4, 'fromUser', 'toLawyer', 'اذي حضرتك', '2021-07-10 03:02:47', '2021-07-10 03:02:47'),
(6, 3, 4, 'fromUser', 'toLawyer', 'مينفعش حضرتك تحددلي ميعاد معين', '2021-07-10 03:05:11', '2021-07-10 03:05:11'),
(7, 3, 4, 'fromUser', 'toLawyer', 'او ميعاد مثلا يوم الجمعة', '2021-07-10 03:06:34', '2021-07-10 03:06:34'),
(8, 3, 4, 'toUser', 'fromLawyer', 'تمام لو كده في ميعاد يوم الجمعة 1 PM انا كنت هحطه في الLawyer Time Available وابقي بص علي Lawyer Time Available اما بتخش علي صفحتي هتعرف انا فاضي امتي للاستفسارات', '2021-07-10 12:49:41', '2021-07-10 12:49:41'),
(12, 3, 4, 'toUser', 'fromLawyer', 'تمام وفي ميعاد برضو يوم السبت الساعة 3 PM', '2021-07-10 13:31:11', '2021-07-10 13:31:11'),
(13, 3, 4, 'fromUser', 'toLawyer', 'تمام ميعاد يوم السبت ده', '2021-07-10 13:33:28', '2021-07-10 13:33:28'),
(14, 4, 6, 'fromUser', 'toLawyer', 'اذي حضرتك', '2021-07-10 14:55:07', '2021-07-10 14:55:07'),
(15, 4, 6, 'toUser', 'fromLawyer', 'تمام الحمد لله استفسارك بخصوص ايه', '2021-07-10 15:52:46', '2021-07-10 15:52:46');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `lawyer_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `date`, `time`, `user_id`, `username`, `lawyer_id`, `created_at`, `updated_at`) VALUES
(1, '2021-08-17', '1 PM', 4, 'Ali', 19, '2021-07-02 14:40:34', '2021-07-02 14:40:59'),
(3, '2021-07-26', '5 PM', 4, 'Ali', 18, '2021-07-02 19:02:38', '2021-07-02 19:02:38'),
(4, '2021-07-30', '4 PM', 3, 'Mona', 18, '2021-07-02 19:50:37', '2021-07-02 19:50:37'),
(5, '2021-07-28', '2 PM', 3, 'Mona', 17, '2021-07-02 23:47:29', '2021-07-02 23:47:29'),
(6, '2021-07-13', '5 PM', 4, 'Ali', 18, '2021-07-08 18:36:28', '2021-07-08 18:36:28'),
(7, '2021-07-13', '4 PM', 3, 'Mona', 18, '2021-07-09 12:42:51', '2021-07-09 12:42:51'),
(12, '2021-07-19', '2 PM', 4, 'Ali', 14, '2021-07-12 06:13:12', '2021-07-12 06:13:12'),
(13, '2021-07-15', '3 PM', 4, 'Ali', 6, '2021-07-12 06:31:15', '2021-07-12 06:31:15'),
(17, '2021-07-15', '2 PM', 4, 'Ali', 4, '2021-07-13 22:04:32', '2021-07-13 22:04:32'),
(19, '2021-07-15', '3 PM', 4, 'Ali', 4, '2021-07-13 22:07:39', '2021-07-13 22:07:39'),
(20, '2021-07-15', '3 PM', 4, 'Ali', 4, '2021-07-13 22:08:25', '2021-07-13 22:08:25');

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `id` int(11) NOT NULL,
  `time` varchar(50) NOT NULL,
  `date` date DEFAULT NULL,
  `lawyer_id` int(11) DEFAULT NULL,
  `appointment_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`id`, `time`, `date`, `lawyer_id`, `appointment_id`, `created_at`, `updated_at`) VALUES
(1, '2 PM', '2021-07-13', 18, 1, '2021-07-07 12:26:50', '2021-07-07 12:26:50'),
(3, '4 PM', '2021-07-30', 18, 2, '2021-07-07 12:28:10', '2021-07-07 12:28:10'),
(4, '2 PM', '2021-07-30', 20, 4, '2021-07-08 14:10:01', '2021-07-08 14:10:01'),
(5, '8 PM', '2021-07-08', 18, 5, '2021-07-09 14:58:46', '2021-07-09 14:58:46'),
(6, '2 PM', '2021-07-12', 18, 6, '2021-07-09 15:01:34', '2021-07-09 15:01:34'),
(7, '2 PM', '2021-07-15', 4, 7, '2021-07-09 15:15:50', '2021-07-09 15:15:50'),
(8, '3 PM', '2021-07-15', 4, 7, '2021-07-09 15:16:40', '2021-07-09 15:16:40'),
(9, '5 PM', '2021-07-09', 4, 7, '2021-07-09 15:17:33', '2021-07-09 15:17:33'),
(10, '1 PM', '2021-07-17', 4, 8, '2021-07-09 15:28:53', '2021-07-09 15:28:53'),
(11, '3 PM', '2021-07-17', 4, 8, '2021-07-09 15:30:06', '2021-07-09 15:30:06'),
(12, '4 PM', '2021-07-18', 4, 9, '2021-07-09 15:32:27', '2021-07-09 15:32:27'),
(13, '1 PM', '2021-07-15', 5, 10, '2021-07-09 16:03:41', '2021-07-09 16:03:41'),
(14, '2 PM', '2021-07-17', 5, 11, '2021-07-09 16:06:08', '2021-07-09 16:06:08'),
(15, '3 PM', '2021-07-15', 6, 12, '2021-07-09 16:19:31', '2021-07-09 16:19:31'),
(16, '1 PM', '2021-07-15', 7, 13, '2021-07-10 18:42:17', '2021-07-10 18:42:17'),
(17, '3 PM', '2021-07-15', 7, 13, '2021-07-10 18:43:29', '2021-07-10 18:43:29'),
(18, '4 pm', '2021-07-17', 7, 14, '2021-07-10 18:46:36', '2021-07-10 18:46:36'),
(19, '5 PM', '2021-07-15', 4, 7, '2021-07-10 20:34:37', '2021-07-10 20:34:37'),
(20, '5 PM', '2021-07-15', 4, 7, '2021-07-10 21:11:05', '2021-07-10 21:11:05'),
(21, '2 PM', '2021-07-15', 9, 15, '2021-07-10 21:27:59', '2021-07-10 21:27:59'),
(22, '4 PM', '2021-07-15', 9, 15, '2021-07-10 21:28:34', '2021-07-10 21:28:34'),
(23, '3 PM', '2021-07-17', 9, 16, '2021-07-10 21:30:00', '2021-07-10 21:30:00'),
(24, '5 PM', '2021-07-18', 9, 17, '2021-07-10 21:32:06', '2021-07-10 21:32:06'),
(25, '1 PM', '2021-07-15', 19, 18, '2021-07-10 21:35:18', '2021-07-10 21:35:18'),
(26, '3 PM', '2021-07-15', 19, 18, '2021-07-10 21:36:21', '2021-07-10 21:36:21'),
(27, '2 PM', '2021-07-17', 19, 19, '2021-07-10 21:37:39', '2021-07-10 21:37:39'),
(28, '1 PM', '2021-07-15', 8, 20, '2021-07-11 12:38:52', '2021-07-11 12:38:52'),
(29, '3 PM', '2021-07-15', 8, 20, '2021-07-11 12:39:24', '2021-07-11 12:39:24'),
(30, '2 PM', '2021-07-17', 8, 21, '2021-07-11 12:41:43', '2021-07-11 12:41:43'),
(31, '4 PM', '2021-07-17', 8, 21, '2021-07-11 12:42:21', '2021-07-11 12:42:21'),
(32, '3 PM', '2021-07-18', 8, 22, '2021-07-11 12:43:46', '2021-07-11 12:43:46'),
(33, '1 PM', '2021-07-15', 17, 23, '2021-07-11 12:58:20', '2021-07-11 12:58:20'),
(34, '3 PM', '2021-07-15', 17, 23, '2021-07-11 12:58:58', '2021-07-11 12:58:58'),
(35, '2 PM', '2021-07-17', 17, 24, '2021-07-11 13:01:44', '2021-07-11 13:01:44'),
(36, '4 PM', '2021-07-17', 17, 24, '2021-07-11 13:03:18', '2021-07-11 13:03:18'),
(37, '3 PM', '2021-07-18', 17, 25, '2021-07-11 13:04:12', '2021-07-11 13:04:12'),
(38, '1 PM', '2021-07-15', 11, 27, '2021-07-11 13:17:39', '2021-07-11 13:17:39'),
(39, '3 PM', '2021-07-15', 11, 27, '2021-07-11 13:18:07', '2021-07-11 13:18:07'),
(40, '2 PM', '2021-07-17', 11, 28, '2021-07-11 13:19:50', '2021-07-11 13:19:50'),
(41, '4 PM', '2021-07-17', 11, 28, '2021-07-11 13:20:31', '2021-07-11 13:20:31'),
(42, '3 PM', '2021-07-18', 11, 29, '2021-07-11 13:21:43', '2021-07-11 13:21:43'),
(43, '1 PM', '2021-07-15', 12, 30, '2021-07-11 13:35:33', '2021-07-11 13:35:33'),
(44, '3 PM', '2021-07-15', 12, 30, '2021-07-11 13:35:59', '2021-07-11 13:35:59'),
(45, '2 PM', '2021-07-17', 12, 31, '2021-07-11 13:36:32', '2021-07-11 13:36:32'),
(46, '4 PM', '2021-07-17', 12, 31, '2021-07-11 13:36:59', '2021-07-11 13:36:59'),
(47, '3 PM', '2021-07-18', 12, 32, '2021-07-11 13:37:34', '2021-07-11 13:37:34'),
(48, '1 PM', '2021-07-15', 15, 33, '2021-07-11 14:20:23', '2021-07-11 14:20:23'),
(49, '3 PM', '2021-07-15', 15, 33, '2021-07-11 14:20:57', '2021-07-11 14:20:57'),
(50, '5 PM', '2021-07-15', 15, 33, '2021-07-11 14:21:18', '2021-07-11 14:21:18'),
(51, '2 PM', '2021-07-17', 15, 34, '2021-07-11 14:21:54', '2021-07-11 14:21:54'),
(52, '4 PM', '2021-07-17', 15, 34, '2021-07-11 14:22:18', '2021-07-11 14:22:18'),
(53, '3 PM', '2021-07-18', 15, 35, '2021-07-11 14:22:46', '2021-07-11 14:22:46'),
(54, '1 PM', '2021-07-18', 14, 36, '2021-07-11 14:45:02', '2021-07-11 14:45:02'),
(55, '3 PM', '2021-07-18', 14, 36, '2021-07-11 14:45:40', '2021-07-11 14:45:40'),
(56, '5 PM', '2021-07-18', 14, 36, '2021-07-11 14:46:01', '2021-07-11 14:46:01'),
(57, '2 PM', '2021-07-19', 14, 37, '2021-07-11 14:46:27', '2021-07-11 14:46:27'),
(58, '4 PM', '2021-07-19', 14, 37, '2021-07-11 14:47:00', '2021-07-11 14:47:00'),
(59, '5 PM', '2021-07-20', 14, 38, '2021-07-11 14:47:29', '2021-07-11 14:47:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`, `gender`, `date`) VALUES
(3, 'Mona', 'Mona@gmail.com', NULL, '$2y$10$apxOfBjbGZ3ZwRi9HA1EL.3siaP682NvOi1C5rGtMh58ctpZP6i/G', NULL, '2021-06-27 14:03:16', '2021-06-30 20:30:47', '019856325896', 'انثي', '2021-06-08'),
(4, 'Ali', 'Ali@gmail.com', NULL, '$2y$10$mSQPGqeWdzqmytRuMLBdAeCqDiM2r/01JVybckTRv1ZkLZF35SoNG', NULL, '2021-06-27 18:26:35', '2021-07-01 19:00:06', '018625896548', 'ذكر', '2021-06-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dates`
--
ALTER TABLE `dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawyers`
--
ALTER TABLE `lawyers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawyertimeavailables`
--
ALTER TABLE `lawyertimeavailables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `dates`
--
ALTER TABLE `dates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `lawyers`
--
ALTER TABLE `lawyers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `lawyertimeavailables`
--
ALTER TABLE `lawyertimeavailables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
