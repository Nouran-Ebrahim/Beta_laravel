-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 03:13 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beta_education`
--

-- --------------------------------------------------------

--
-- Table structure for table `arpcourses`
--

CREATE TABLE `arpcourses` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `student_id` int(11) NOT NULL,
  `math1` varchar(100) NOT NULL DEFAULT 'closed',
  `arabic1` varchar(100) NOT NULL DEFAULT 'closed',
  `math2` varchar(100) NOT NULL DEFAULT 'closed',
  `arabic2` varchar(100) NOT NULL DEFAULT 'closed',
  `math3` varchar(100) NOT NULL DEFAULT 'closed',
  `arabic3` varchar(100) NOT NULL DEFAULT 'closed',
  `english1` varchar(255) NOT NULL DEFAULT 'closed',
  `english2` varchar(255) NOT NULL DEFAULT 'closed',
  `english3` varchar(255) NOT NULL DEFAULT 'closed',
  `science1` varchar(255) NOT NULL DEFAULT 'closed',
  `science2` varchar(255) NOT NULL DEFAULT 'closed',
  `science3` varchar(255) NOT NULL DEFAULT 'closed',
  `social1` varchar(100) NOT NULL DEFAULT 'closed',
  `social2` varchar(255) NOT NULL DEFAULT 'closed',
  `social3` varchar(255) NOT NULL DEFAULT 'closed',
  `frensh1` varchar(255) NOT NULL DEFAULT 'closed',
  `frensh2` varchar(255) NOT NULL DEFAULT 'closed',
  `frensh3` varchar(255) NOT NULL DEFAULT 'closed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `arpcourses`
--

INSERT INTO `arpcourses` (`id`, `name`, `student_id`, `math1`, `arabic1`, `math2`, `arabic2`, `math3`, `arabic3`, `english1`, `english2`, `english3`, `science1`, `science2`, `science3`, `social1`, `social2`, `social3`, `frensh1`, `frensh2`, `frensh3`, `created_at`, `updated_at`) VALUES
(74, 'Nouran El Mohamady', 71, 'waiting', 'open', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', NULL, NULL),
(76, 'admain', 70, 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', NULL, NULL),
(77, 'Alaa Osama', 72, 'closed', 'waiting', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `arth1coures`
--

CREATE TABLE `arth1coures` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `arabic` varchar(100) NOT NULL DEFAULT 'closed',
  `philosophyLogic` varchar(100) NOT NULL DEFAULT 'closed',
  `algebratrigonometry` varchar(100) NOT NULL DEFAULT 'closed',
  `analyticalengineering` varchar(100) NOT NULL DEFAULT 'closed',
  `history` varchar(100) NOT NULL DEFAULT 'closed',
  `geography` varchar(100) NOT NULL DEFAULT 'closed',
  `physics` varchar(100) NOT NULL DEFAULT 'closed',
  `chemistry` varchar(100) NOT NULL DEFAULT 'closed',
  `biology` varchar(100) NOT NULL DEFAULT 'closed',
  `english` varchar(100) NOT NULL DEFAULT 'closed',
  `frensh` varchar(100) NOT NULL DEFAULT 'closed',
  `italian` varchar(100) NOT NULL DEFAULT 'closed',
  `german` varchar(100) NOT NULL DEFAULT 'closed',
  `spanish` varchar(100) NOT NULL DEFAULT 'closed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `arth1coures`
--

INSERT INTO `arth1coures` (`id`, `student_id`, `name`, `arabic`, `philosophyLogic`, `algebratrigonometry`, `analyticalengineering`, `history`, `geography`, `physics`, `chemistry`, `biology`, `english`, `frensh`, `italian`, `german`, `spanish`, `created_at`, `updated_at`) VALUES
(3, 71, 'Nouran El Mohamady', 'closed', 'waiting', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', NULL, NULL),
(4, 70, 'admain', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', NULL, NULL),
(6, 72, 'Alaa Osama', 'waiting', 'waiting', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `arth2courses`
--

CREATE TABLE `arth2courses` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `arabic` varchar(100) NOT NULL DEFAULT 'closed',
  `philosophyLogic` varchar(100) NOT NULL DEFAULT 'closed',
  `algebratrigonometry` varchar(100) NOT NULL DEFAULT 'closed',
  `analyticalengineering` varchar(100) NOT NULL DEFAULT 'closed',
  `history` varchar(100) NOT NULL DEFAULT 'closed',
  `geography` varchar(100) NOT NULL DEFAULT 'closed',
  `physics` varchar(100) NOT NULL DEFAULT 'closed',
  `chemistry` varchar(100) NOT NULL DEFAULT 'closed',
  `biology` varchar(100) NOT NULL DEFAULT 'closed',
  `english` varchar(100) NOT NULL DEFAULT 'closed',
  `frensh` varchar(100) NOT NULL DEFAULT 'closed',
  `italian` varchar(100) NOT NULL DEFAULT 'closed',
  `german` varchar(100) NOT NULL DEFAULT 'closed',
  `spanish` varchar(100) NOT NULL DEFAULT 'closed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `arth2courses`
--

INSERT INTO `arth2courses` (`id`, `student_id`, `name`, `arabic`, `philosophyLogic`, `algebratrigonometry`, `analyticalengineering`, `history`, `geography`, `physics`, `chemistry`, `biology`, `english`, `frensh`, `italian`, `german`, `spanish`, `created_at`, `updated_at`) VALUES
(1, 72, 'Alaa Osama', 'open', 'waiting', 'closed', 'waiting', 'waiting', 'waiting', 'closed', 'closed', 'waiting', 'closed', 'closed', 'closed', 'waiting', 'closed', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `arth3courses`
--

CREATE TABLE `arth3courses` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `arabic` varchar(100) NOT NULL DEFAULT 'closed',
  `philosophyLogic` varchar(100) NOT NULL DEFAULT 'closed',
  `algebratrigonometry` varchar(100) NOT NULL DEFAULT 'closed',
  `analyticalengineering` varchar(100) NOT NULL DEFAULT 'closed',
  `history` varchar(100) NOT NULL DEFAULT 'closed',
  `geography` varchar(100) NOT NULL DEFAULT 'closed',
  `physics` varchar(100) NOT NULL DEFAULT 'closed',
  `chemistry` varchar(100) NOT NULL DEFAULT 'closed',
  `biology` varchar(100) NOT NULL DEFAULT 'closed',
  `english` varchar(100) NOT NULL DEFAULT 'closed',
  `frensh` varchar(100) NOT NULL DEFAULT 'closed',
  `italian` varchar(100) NOT NULL DEFAULT 'closed',
  `german` varchar(100) NOT NULL DEFAULT 'closed',
  `spanish` varchar(100) NOT NULL DEFAULT 'closed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `arth3courses`
--

INSERT INTO `arth3courses` (`id`, `student_id`, `name`, `arabic`, `philosophyLogic`, `algebratrigonometry`, `analyticalengineering`, `history`, `geography`, `physics`, `chemistry`, `biology`, `english`, `frensh`, `italian`, `german`, `spanish`, `created_at`, `updated_at`) VALUES
(2, 72, 'Alaa Osama', 'open', 'waiting', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'open', 'waiting', 'closed', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enpcourses`
--

CREATE TABLE `enpcourses` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `student_id` int(11) NOT NULL,
  `arabic1` varchar(100) NOT NULL DEFAULT 'closed',
  `arabic2` varchar(100) NOT NULL DEFAULT 'closed',
  `arabic3` varchar(100) NOT NULL DEFAULT 'closed',
  `math1` varchar(100) NOT NULL DEFAULT 'closed',
  `math2` varchar(100) NOT NULL DEFAULT 'closed',
  `math3` varchar(100) NOT NULL DEFAULT 'closed',
  `english1` varchar(100) NOT NULL DEFAULT 'closed',
  `english2` varchar(100) NOT NULL DEFAULT 'closed',
  `english3` varchar(100) NOT NULL DEFAULT 'closed',
  `science1` varchar(100) NOT NULL DEFAULT 'closed',
  `science2` varchar(100) NOT NULL DEFAULT 'closed',
  `science3` varchar(100) NOT NULL DEFAULT 'closed',
  `social1` varchar(100) NOT NULL DEFAULT 'closed',
  `social2` varchar(100) NOT NULL DEFAULT 'closed',
  `social3` varchar(100) NOT NULL DEFAULT 'closed',
  `frensh1` varchar(100) NOT NULL DEFAULT 'closed',
  `frensh2` varchar(100) NOT NULL DEFAULT 'closed',
  `frensh3` varchar(100) NOT NULL DEFAULT 'closed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enpcourses`
--

INSERT INTO `enpcourses` (`id`, `name`, `student_id`, `arabic1`, `arabic2`, `arabic3`, `math1`, `math2`, `math3`, `english1`, `english2`, `english3`, `science1`, `science2`, `science3`, `social1`, `social2`, `social3`, `frensh1`, `frensh2`, `frensh3`, `created_at`, `updated_at`) VALUES
(27, 'Nouran El Mohamady', 71, 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'waiting', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', NULL, NULL),
(28, 'Alaa Osama', 72, 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'open', 'closed', 'closed', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enth1coures`
--

CREATE TABLE `enth1coures` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `student_id` int(11) NOT NULL,
  `arabic` varchar(100) NOT NULL DEFAULT 'closed',
  `philosophyLogic` varchar(100) NOT NULL DEFAULT 'closed',
  `algebratrigonometry` varchar(100) NOT NULL DEFAULT 'closed',
  `analyticalengineering` varchar(100) NOT NULL DEFAULT 'closed',
  `history` varchar(100) NOT NULL DEFAULT 'closed',
  `geography` varchar(100) NOT NULL DEFAULT 'closed',
  `physics` varchar(100) NOT NULL DEFAULT 'closed',
  `chemistry` varchar(100) NOT NULL DEFAULT 'closed',
  `biology` varchar(100) NOT NULL DEFAULT 'closed',
  `english` varchar(100) NOT NULL DEFAULT 'closed',
  `frensh` varchar(100) NOT NULL DEFAULT 'closed',
  `italian` varchar(100) NOT NULL DEFAULT 'closed',
  `german` varchar(100) NOT NULL DEFAULT 'closed',
  `spanish` varchar(100) NOT NULL DEFAULT 'closed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enth1coures`
--

INSERT INTO `enth1coures` (`id`, `name`, `student_id`, `arabic`, `philosophyLogic`, `algebratrigonometry`, `analyticalengineering`, `history`, `geography`, `physics`, `chemistry`, `biology`, `english`, `frensh`, `italian`, `german`, `spanish`, `created_at`, `updated_at`) VALUES
(2, 'Nouran El Mohamady', 71, 'closed', 'waiting', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enth2courses`
--

CREATE TABLE `enth2courses` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `arabic` varchar(100) NOT NULL DEFAULT 'closed',
  `english` varchar(100) NOT NULL DEFAULT 'closed',
  `frensh` varchar(100) NOT NULL DEFAULT 'closed',
  `italy` varchar(100) NOT NULL DEFAULT 'closed',
  `math` varchar(100) NOT NULL DEFAULT 'closed',
  `physics` varchar(100) NOT NULL DEFAULT 'closed',
  `chemistry` varchar(100) NOT NULL DEFAULT 'closed',
  `biology` varchar(100) NOT NULL DEFAULT 'closed',
  `history` varchar(100) NOT NULL DEFAULT 'closed',
  `psychology` varchar(100) NOT NULL DEFAULT 'closed',
  `geography` varchar(100) NOT NULL DEFAULT 'closed',
  `philosophy` varchar(100) NOT NULL DEFAULT 'closed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enth2courses`
--

INSERT INTO `enth2courses` (`id`, `student_id`, `name`, `arabic`, `english`, `frensh`, `italy`, `math`, `physics`, `chemistry`, `biology`, `history`, `psychology`, `geography`, `philosophy`) VALUES
(1, 72, 'Alaa Osama', 'waiting', 'waiting', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed');

-- --------------------------------------------------------

--
-- Table structure for table `enth3courses`
--

CREATE TABLE `enth3courses` (
  `id` int(15) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `arabic` varchar(100) NOT NULL,
  `english` varchar(100) NOT NULL,
  `frensh` varchar(100) NOT NULL,
  `italy` varchar(100) NOT NULL,
  `math` varchar(100) NOT NULL,
  `physics` varchar(100) NOT NULL,
  `chemistry` varchar(100) NOT NULL,
  `biology` varchar(100) CHARACTER SET utf32 NOT NULL,
  `history` varchar(100) NOT NULL,
  `psychology` varchar(100) NOT NULL,
  `geography` varchar(100) NOT NULL,
  `philosophy` varchar(100) NOT NULL,
  `created_at` timestamp(5) NULL DEFAULT NULL,
  `updated_at` timestamp(5) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_07_084103_create_arth2courses_table', 2);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plessons`
--

CREATE TABLE `plessons` (
  `id` int(10) NOT NULL,
  `lesson_name` varchar(100) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `unit_id` int(10) NOT NULL,
  `level` int(5) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plessons`
--

INSERT INTO `plessons` (`id`, `lesson_name`, `link`, `unit_id`, `level`, `subject`, `created_at`, `updated_at`) VALUES
(1, 'الدرس الأول', 'https://www.youtube.com/embed/Bq4WD9c-3qg', 1, 1, 'arabic', '2023-05-25 21:00:00', '2023-05-25 21:00:00'),
(2, 'الدرس الثانى', 'https://www.youtube.com/embed/gDODiKkuBLM', 1, 1, 'arabic', '2023-05-25 21:00:00', '2023-05-25 21:00:00'),
(3, 'الدرس الثالث', 'https://www.youtube.com/embed/cBVKv-ppNeI', 1, 1, 'arabic', '2023-05-25 21:00:00', '2023-05-25 21:00:00'),
(4, 'الدرس الرابع', 'https://www.youtube.com/embed/Yd9iccf59qo', 1, 1, 'arabic', '2023-05-25 21:00:00', '2023-05-25 21:00:00'),
(5, 'الدرس الأول', 'https://www.youtube.com/embed/DftlOK7fCtc', 2, 1, 'arabic', '2023-05-25 21:00:00', '2023-05-25 21:00:00'),
(6, 'الدرس الثانى', 'https://www.youtube.com/embed/z4j4S6GsxaU', 2, 1, 'arabic', '2023-05-25 21:00:00', '2023-05-25 21:00:00'),
(7, 'الدرس الاول', 'https://www.youtube.com/embed/_Nj7laDeRBQ', 3, 2, 'arabic', '2023-05-25 21:00:00', '2023-05-25 21:00:00'),
(8, 'الدرس الثانى', 'https://www.youtube.com/embed/mDEKMonYf1w', 3, 2, 'arabic', '2023-05-25 21:00:00', '2023-05-25 21:00:00'),
(9, 'الدرس الاول', 'https://www.youtube.com/embed/QStpeLp25A4', 4, 2, 'arabic', '2023-05-25 21:00:00', '2023-05-25 21:00:00'),
(10, 'الدرس الثانى', 'https://www.youtube.com/embed/yCUpnvBkfEM', 4, 2, 'arabic', '2023-05-25 21:00:00', '2023-05-25 21:00:00'),
(11, 'الدرس الاول', 'https://www.youtube.com/embed/VE7pgB9tvLU', 5, 3, 'math', '2023-05-25 21:00:00', '2023-05-25 21:00:00'),
(12, 'الدرس الاول', 'https://www.youtube.com/embed/TMubSggUOVE', 1, 1, 'math', '0000-00-00 00:00:00', NULL),
(13, 'الدرس الثاني', 'https://www.youtube.com/embed/H2eXzc2PfEQ', 2, 1, 'math', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `punits`
--

CREATE TABLE `punits` (
  `id` int(10) NOT NULL,
  `unit_name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `punits`
--

INSERT INTO `punits` (`id`, `unit_name`, `created_at`, `updated_at`) VALUES
(1, 'الوحدة الأولى', '2023-05-25 21:00:00', '2023-05-25 21:00:00'),
(2, 'الوحدة الثانية', '2023-05-25 21:00:00', '2023-05-25 21:00:00'),
(3, 'الوحدة التالته', '2023-05-25 21:00:00', '2023-05-25 21:00:00'),
(4, 'الوحدة الرابعه', '2023-05-25 21:00:00', '2023-05-25 21:00:00'),
(5, 'الوحدة الخامسه', '2023-05-25 21:00:00', '2023-05-25 21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` int(15) NOT NULL,
  `parent_mobile` int(15) NOT NULL,
  `phone` int(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `city` varchar(150) NOT NULL,
  `school` varchar(400) NOT NULL,
  `grade` varchar(150) NOT NULL,
  `type` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `email`, `name`, `mobile`, `parent_mobile`, `phone`, `gender`, `city`, `school`, `grade`, `type`, `created_at`, `updated_at`, `code`) VALUES
(69, 'akh52888@gmail.com', 'Ahmed Mohamed khalia', 1003846544, 1003846544, 1017944211, 'male', 'Alexandria', 'gjgv jjn', '2nd Secoundary', 'Experimental School\r\n', NULL, NULL, '227e10f8'),
(70, 'beta.education2022@gmail.com', 'admain', 1223881860, 1277701850, 5914910, 'male', 'Alexandria', 'bbbb', '3th Secoundary', 'Experimental School', NULL, NULL, 'nA$1&5yn'),
(71, 'nouran.ssp@gmail.com', 'Nouran El Mohamady', 1017944211, 1223701860, 5914989, 'female', 'Alexandria', 'nabawya mosa', '2nd Preparatory', 'Experimental School', NULL, NULL, '7092b73f'),
(72, 'alaaosama2121998@gmail.com', 'Alaa Osama', 1554312399, 1554312399, 1554312399, 'female', 'Alexandria', 'نبوية موسى', '2nd Preparatory', 'Experimental School', NULL, NULL, '11646305');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arpcourses`
--
ALTER TABLE `arpcourses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `arth1coures`
--
ALTER TABLE `arth1coures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arth2courses`
--
ALTER TABLE `arth2courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arth3courses`
--
ALTER TABLE `arth3courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enpcourses`
--
ALTER TABLE `enpcourses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enth1coures`
--
ALTER TABLE `enth1coures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enth2courses`
--
ALTER TABLE `enth2courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enth3courses`
--
ALTER TABLE `enth3courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `plessons`
--
ALTER TABLE `plessons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unit_lessons` (`unit_id`);

--
-- Indexes for table `punits`
--
ALTER TABLE `punits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `name` (`name`);

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
-- AUTO_INCREMENT for table `arpcourses`
--
ALTER TABLE `arpcourses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `arth1coures`
--
ALTER TABLE `arth1coures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `arth2courses`
--
ALTER TABLE `arth2courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `arth3courses`
--
ALTER TABLE `arth3courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enpcourses`
--
ALTER TABLE `enpcourses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `enth1coures`
--
ALTER TABLE `enth1coures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enth2courses`
--
ALTER TABLE `enth2courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enth3courses`
--
ALTER TABLE `enth3courses`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plessons`
--
ALTER TABLE `plessons`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `punits`
--
ALTER TABLE `punits`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `plessons`
--
ALTER TABLE `plessons`
  ADD CONSTRAINT `unit_lessons` FOREIGN KEY (`unit_id`) REFERENCES `punits` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
