-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 04:31 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_student_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `group_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`group_id`, `name`, `logo`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Andy Bradtkeaas', NULL, 'thisProf. Selmer Bernhard IVgood group', '2022-12-12 12:14:07', '2022-12-13 11:59:22'),
(2, 'Miss Mozell Dickinson DVMas', NULL, 'thisInes Lednergood group', '2022-12-12 12:14:07', '2022-12-13 11:59:41'),
(3, 'Ms. Laury Feilx', NULL, 'thisTanya Bergstrom Vgood group', '2022-12-12 12:14:07', '2022-12-13 12:02:30'),
(4, 'Frida Rippin', NULL, 'thisKatlynn Swaniawskigood groupd', '2022-12-12 12:14:07', '2022-12-13 12:17:32'),
(5, 'Ms. Janessa Gaylord', NULL, 'thisMonserrat Gradygood group', '2022-12-12 12:14:07', '2022-12-12 12:14:07'),
(6, 'Courtney Moore', NULL, 'thisProf. Esteban Walshgood group', '2022-12-12 12:14:07', '2022-12-12 12:14:07'),
(7, 'Eldon Schulist', NULL, 'thisDr. Travon Koss Sr.good group', '2022-12-12 12:14:07', '2022-12-12 12:14:07'),
(8, 'Tracy Monahan', NULL, 'thisEden Maggio DVMgood group', '2022-12-12 12:14:07', '2022-12-12 12:14:07'),
(9, 'Jacques Feeney', NULL, 'thisMax Kreiger Sr.good group', '2022-12-12 12:14:07', '2022-12-12 12:14:07'),
(10, 'Armando Rowe', NULL, 'thisGreg Padberggood group', '2022-12-12 12:14:07', '2022-12-12 12:14:07'),
(11, 'jay rajputana', NULL, 'asas', '2022-12-12 12:14:35', '2022-12-12 12:14:35'),
(12, 'aaa', NULL, 'asasaas', '2022-12-13 10:02:39', '2022-12-13 10:02:39'),
(13, 'klk', NULL, 'klkl', '2022-12-13 10:03:06', '2022-12-13 10:03:06'),
(14, 'sd', NULL, 'sd', '2022-12-13 10:10:33', '2022-12-13 10:10:33'),
(15, 'as', NULL, 'asas', '2022-12-13 10:11:33', '2022-12-13 10:11:33'),
(16, 'kkk', NULL, 'asas', '2022-12-13 10:11:53', '2022-12-13 10:11:53'),
(17, 'kkk', 'uploads/mxXolOtDn0xxhyZkvVdh58nssPyFKp9DASR9RQMh.jpg', 'asas', '2022-12-13 11:19:41', '2022-12-13 11:19:41'),
(18, 'kkksd', 'uploads/rWV1EL38qbiOnUFUW8w9KmH43f0ckZbSrFabbnFU.jpg', 'sdsdsdsd', '2022-12-13 11:21:53', '2022-12-13 11:21:53'),
(19, 'kkk', 'uploads/zKesWvRjpM869lYqLBPdz6IrIJNLLVflm0jidWA4.jpg', 'erer', '2022-12-13 11:24:38', '2022-12-13 11:24:38'),
(20, 'kkkerer', 'uploads/ZszNidmp6Ioqs6sY7JBrb0PRz8NDPW7FdNh1WhD8.jpg', 'ere3W', '2022-12-13 11:25:00', '2022-12-13 11:25:00'),
(21, 'sdsds', 'uploads/GZiT6xcu4x1ZYw55VeJKILnerqn1U6tCEDgKrJEc.jpg', 'asas', '2022-12-13 11:31:37', '2022-12-13 11:31:37');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `group_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `name`, `email`, `contact`, `group_id`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Jaqueline Volkman', 'sheldon55@gmail.com', '12345568', 2, '2022-12-12 12:14:07', '2022-12-12 12:14:07'),
(2, 'Prof. Roscoe Schaden PhD', 'quentin.schuppe@corwin.com', '12345568', 2, '2022-12-12 12:14:07', '2022-12-12 12:14:07'),
(3, 'Astrid Kuhlman', 'jmuller@turcotte.com', '12345568', 2, '2022-12-12 12:14:07', '2022-12-12 12:14:07'),
(4, 'Mr. Allan Stracke V', 'mitchell.nathan@gmail.com', '12345568', 2, '2022-12-12 12:14:07', '2022-12-12 12:14:07'),
(5, 'Ms. Christina Anderson III', 'buckridge.margarete@gmail.com', '12345568', 2, '2022-12-12 12:14:07', '2022-12-12 12:14:07'),
(6, 'Isom Cartwright', 'kareem.batz@gmail.com', '12345568', 2, '2022-12-12 12:14:07', '2022-12-12 12:14:07'),
(7, 'Amina Kirlin', 'fstanton@okuneva.biz', '12345568', 2, '2022-12-12 12:14:07', '2022-12-12 12:14:07'),
(8, 'Dr. Lawson Walsh', 'dickens.kacey@murazik.com', '12345568', 2, '2022-12-12 12:14:08', '2022-12-12 12:14:08'),
(9, 'Dr. Karlie Torphy', 'ydicki@kreiger.biz', '12345568', 2, '2022-12-12 12:14:08', '2022-12-12 12:14:08'),
(10, 'Freddy Cummerata', 'kreiger.leanne@zieme.net', '12345568', 2, '2022-12-12 12:14:08', '2022-12-12 12:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(14, '2014_10_12_000000_create_users_table', 1),
(15, '2014_10_12_100000_create_password_resets_table', 1),
(16, '2019_08_19_000000_create_failed_jobs_table', 1),
(17, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(18, '2022_12_04_111529_create_student_table', 1),
(19, '2022_12_04_111706_add_columns_to_student_table', 1),
(20, '2022_12_04_133725_create_group_table', 1),
(21, '2022_12_04_135808_create_members_table', 1),
(22, '2022_12_07_163312_rename_group_to_tempgroup', 1),
(23, '2022_12_12_164411_add_columns_to_group_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) UNSIGNED NOT NULL,
  `rollno` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `gender` enum('M','F','O') DEFAULT NULL,
  `phone_no` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `members_group_id_foreign` (`group_id`);

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
-- Indexes for table `student`
--
ALTER TABLE `student`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `group_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `group` (`group_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
