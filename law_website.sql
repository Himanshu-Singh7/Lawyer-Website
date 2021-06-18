-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 01:06 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `law_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_tables`
--

CREATE TABLE `appointment_tables` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `law_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appointment_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appointment_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lawer_assigned_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lawer_assigned_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `payment_order_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment_tables`
--

INSERT INTO `appointment_tables` (`id`, `created_at`, `updated_at`, `uid`, `name`, `email`, `law_type`, `subject`, `message`, `appointment_date`, `appointment_id`, `lawer_assigned_name`, `lawer_assigned_id`, `status`, `payment_order_id`, `transaction_id`, `payment_amount`, `payment_status`) VALUES
(1, '2020-05-11 07:36:24', '2020-05-11 07:36:24', '1', 'robinsingh', 'robinsingh71119@gmail.com', '2', 'bbvnjk', 'fghjkl', '2020-05-28', '3844', 'worklawyer', '3', '1', '5ebcc57deea9f', '20200514111212800110168304901620327', '250', '2'),
(2, '2020-05-11 07:36:34', '2020-05-11 07:36:34', '1', 'Robin', 'robinsingh71119@gmail.com', '1', 'dfgh', 'dffgh', '2020-05-24', '6425', 'ravirana', '4', '1', '5eb94ef31c9c7', '20200511111212800110168704201515039', '250', '2'),
(3, '2020-05-13 22:38:49', '2020-05-13 22:38:49', '1', 'robinsingh', 'robinsingh71119@gmail.com', '1', 'last test', 'last test message', '2020-06-02', '4182', 'ravirana', '4', '1', NULL, NULL, '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `career_detail_tables`
--

CREATE TABLE `career_detail_tables` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lawer_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `court_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case_statuss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case_description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_detail_tables`
--

INSERT INTO `career_detail_tables` (`id`, `created_at`, `updated_at`, `uid`, `lawer_type`, `case_name`, `court_name`, `start_date`, `end_date`, `case_statuss`, `case_description`) VALUES
(1, '2020-03-21 02:48:11', '2020-03-21 02:48:11', '2', 'Business Law', 'io', 'io', '1111-11-11', '1111-11-11', 'sasdssd', 'sdsdsds'),
(2, '2020-05-10 04:04:53', '2020-05-10 04:04:53', '2', 'Business Law', 'fghj', 'ghjjk', '2020-01-02', '2020-03-02', 'cscscs', 'dfdfdfdfdfd'),
(3, '2020-05-10 06:27:09', '2020-05-10 06:27:09', '2', 'Insurance Law', 'jjjj', 'jjjj', '2020-11-11', '2020-12-12', 'Lorem ipsum, or lipsum', 'tter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.');

-- --------------------------------------------------------

--
-- Table structure for table `contact_tables`
--

CREATE TABLE `contact_tables` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `law_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `law_type_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lawer_assigned_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lawer_assigned_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `user_id`, `name`, `email`, `law_type`, `law_type_name`, `lawer_assigned_id`, `lawer_assigned_name`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, '1', 'robinsingh', 'robinsingh71119@gmail.com', '2', 'Business Law', '3', 'worklawyer', 'feedback send', 'feedback send message', '2020-05-11 08:11:26', '2020-05-11 08:11:26'),
(2, '1', 'robinsingh', 'robinsingh71119@gmail.com', '1', 'Family Law', '4', 'ravirana', 'bvghjknm', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.\r\n', '2020-05-11 08:33:21', '2020-05-11 08:33:21');

-- --------------------------------------------------------

--
-- Table structure for table `lawer_tables`
--

CREATE TABLE `lawer_tables` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lawer_first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lawer_last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charges` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lawer_types`
--

CREATE TABLE `lawer_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `law_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lawer_types`
--

INSERT INTO `lawer_types` (`id`, `created_at`, `updated_at`, `law_type`, `description`, `image`) VALUES
(1, '2020-03-21 01:13:12', '2020-03-21 01:13:12', 'Family Law', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', '9316886171584772992.JPG'),
(2, '2020-03-21 01:13:25', '2020-03-21 01:13:25', 'Business Law', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', '20542762631584773005.JPG'),
(3, '2020-03-21 01:13:51', '2020-03-21 01:13:51', 'Insurance Law', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', '4413859551584773031.JPG'),
(4, '2020-03-21 01:14:05', '2020-03-21 01:14:05', 'Criminal Law', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', '7035698821584773045.JPG'),
(5, '2020-03-21 01:14:30', '2020-03-21 01:14:30', 'Property Law', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', '14905255781584773070.JPG'),
(6, '2020-03-21 01:14:49', '2020-03-21 01:14:49', 'Employment Law', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', '4736461581584773089.JPG'),
(7, '2020-03-21 01:15:15', '2020-03-21 01:15:15', 'Financial Law', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', '9645755171584773115.JPG'),
(8, '2020-03-21 01:15:59', '2020-03-21 01:15:59', 'Fire Accident', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', '9488105821584773159.JPG');

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
(26, '2014_10_12_000000_create_users_table', 1),
(27, '2014_10_12_100000_create_password_resets_table', 1),
(28, '2019_11_21_103547_create_contact_tables_table', 1),
(29, '2019_11_23_075129_create_lawer_tables_table', 1),
(30, '2019_11_25_114550_create_lawer_types_table', 1),
(31, '2019_11_27_121658_create_register_lawer_tables_table', 1),
(32, '2019_12_10_101004_create_verify__users_table', 1),
(33, '2019_12_13_081501_create_appointment_tables_table', 1),
(34, '2019_12_14_050739_create_career_detail_tables_table', 1),
(35, '2020_03_21_061359_create_payment_tabels_table', 1),
(36, '2020_05_11_131737_create_feedback_table', 2);

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
-- Table structure for table `payment_tabels`
--

CREATE TABLE `payment_tabels` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register_lawer_tables`
--

CREATE TABLE `register_lawer_tables` (
  `id` int(10) UNSIGNED NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `law_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_n` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_n` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'admin',
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `register_lawer_tables`
--

INSERT INTO `register_lawer_tables` (`id`, `gender`, `law_type`, `first_name`, `last_name`, `username`, `email`, `password`, `father_n`, `mother_n`, `contact`, `alt_contact`, `dob`, `address`, `state`, `city`, `postal_code`, `image`, `type`, `verified`, `created_at`, `updated_at`) VALUES
(1, 'mr', '0', 'Robin', 'Singh', 'robinsingh', 'robinsingh71119@gmail.com', '12345', 'xyz', 'xyz', '1234567890', '1234567890', '1111-11-11', 'kharar', '32', '3214', '140301', '3945105521589031597.jpg', 'user', 0, '2020-03-21 01:06:03', '2020-05-09 08:28:27'),
(2, 'mr', '1', 'Lawyer', 'User', 'lawyeruser', 'lawyeruser@gmail.com', 'Admin@1234', 'xyz', 'xyz', '01234567890', '01234567890', '1111-11-11', 'kharar', '9', '705', '140301', '14509803631589031571.jpg', 'admin', 0, '2020-03-21 01:37:20', '2020-05-09 08:09:31'),
(3, 'mr', '2', 'work', 'lawyer', 'worklawyer', 'workproject906@gmail.com', '1111', 'ayx', 'ayx', '123456789', '123456789', '2020-05-12', 'kharar', '5', '448', '140301', '7177355351589197837.jpg', 'admin', 0, '2020-05-11 06:20:37', '2020-05-11 06:20:37'),
(4, 'mr', '1', 'ravi', 'rana', 'ravirana', 'ravi1234@gmail.com', '1111', 'ax', 'ax', '123456789', '7889472913', '2020-05-13', 'kharar', '32', '3214', '140301', '19847954871589201060.jpg', 'admin', 0, '2020-05-11 07:14:20', '2020-05-11 07:14:20'),
(5, 'mr', '0', 'Robin', 'sds', 'sdsds', 'robinsingh71119@g.com', 'Admin@1234', 'sdfsd', 'ddd', '123456789', '123456789', '2020-05-09', 'kharar', 'Punjab', 'kharar', '140301', '20302906271589432239.jpg', 'user', 0, '2020-05-13 23:27:19', '2020-05-13 23:27:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `verify__users`
--

CREATE TABLE `verify__users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_tables`
--
ALTER TABLE `appointment_tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_detail_tables`
--
ALTER TABLE `career_detail_tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_tables`
--
ALTER TABLE `contact_tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawer_tables`
--
ALTER TABLE `lawer_tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawer_types`
--
ALTER TABLE `lawer_types`
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
-- Indexes for table `payment_tabels`
--
ALTER TABLE `payment_tabels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_lawer_tables`
--
ALTER TABLE `register_lawer_tables`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `register_lawer_tables_username_unique` (`username`),
  ADD UNIQUE KEY `register_lawer_tables_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verify__users`
--
ALTER TABLE `verify__users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_tables`
--
ALTER TABLE `appointment_tables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `career_detail_tables`
--
ALTER TABLE `career_detail_tables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_tables`
--
ALTER TABLE `contact_tables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lawer_tables`
--
ALTER TABLE `lawer_tables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lawer_types`
--
ALTER TABLE `lawer_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `payment_tabels`
--
ALTER TABLE `payment_tabels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register_lawer_tables`
--
ALTER TABLE `register_lawer_tables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `verify__users`
--
ALTER TABLE `verify__users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
