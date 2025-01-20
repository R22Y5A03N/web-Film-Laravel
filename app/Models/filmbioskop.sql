-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2025 at 09:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filmbioskop`
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
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_film` varchar(255) NOT NULL,
  `bintang_film` varchar(255) NOT NULL,
  `sutradara` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tahun_diterbitkan` year(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `judul_film`, `bintang_film`, `sutradara`, `genre`, `deskripsi`, `gambar`, `tahun_diterbitkan`, `created_at`, `updated_at`) VALUES
(3, 'Wild Agent 2', 'Henry Prince Mak, Luo Liqun, Raquel Xu, Sheng Nan, Wei Lu, Zhong Lei', 'Huang He', 'Action, Crime', NULL, 'films/Q1oXFRv1LhhZwz7bXTVnCIfGHD53a9JgJl8bXjy7.webp', '2024', '2025-01-16 23:33:20', '2025-01-16 23:33:20'),
(4, 'Squid Game', 'Greg Chun, Lee Jung-jae, Park Hae-soo', 'Hwang Dong-hyuk', 'Action, Drama, Mystery', NULL, 'films/hZOpjliC6T7pZnnqkKP7Dx2BzFI6BaR0QNsQKbik.webp', '2021', '2025-01-17 01:32:26', '2025-01-17 01:32:26'),
(5, 'Venom: The Last Dance', 'Alanna Ubach, Chiwetel Ejiofor, Juno Temple, Tom Hardy', 'Kelly Marcel', 'Action, Adventure, Sci-fi', NULL, 'films/paJuuJnnaPmd0UqbNZLAfVLAA2ZLMWhbCXtdwRKr.webp', '2019', '2025-01-17 20:39:23', '2025-01-17 20:39:23'),
(6, 'Monkey King Fight Lion Camel', 'Chai Yuanle, En Jing, Jin Jiayu, Lei Lei, Xie Miao, Zhang Fengjun', 'Guo Yulong', 'Action, Fantasy', NULL, 'films/zKaldyc9AexRp5TbeNEUITdozhanHcHNk2rpDnQr.webp', '2017', '2025-01-17 20:44:43', '2025-01-17 20:44:43'),
(7, 'Sentinel', 'Denitza Diakovska, Ellie Patrikios, Jason R. Moore, John Stewart Arnold, Michael Paré, Neil Cole', 'Stefano Milla', 'Sci-fi', NULL, 'films/DCh666bM9w38NBGGiAKA1PMImSbf4JqE9XzPQn6w.webp', '2024', '2025-01-17 20:46:16', '2025-01-17 20:46:16'),
(8, 'Flow', 'animasi', 'Gints Zilbalodis', 'Adventure, Animation, Family', NULL, 'films/yWZw6P78FmpeH0BC6P96VfTrYdMcWcwnlA4gvwFo.webp', '2023', '2025-01-17 20:50:19', '2025-01-17 20:50:19'),
(9, 'Eye for an Eye 2', 'Enyou Yang, Miao Xie, Tao Huang', 'Bingjia Yang', 'Action, Drama, Western', NULL, 'films/hHRDsaHEWOnixx488VbfIfum476t8XuZOMPATVwj.webp', '2019', '2025-01-17 20:51:21', '2025-01-17 20:51:21'),
(10, 'Kraven: The Hunter', 'Aaron Taylor-Johnson, Ariana DeBose, Fred Hechinger', 'J.C. Chandor', 'Action, Thriller', NULL, 'films/AoSkbt1p6cukdws7Z6DSjr6gkDX42ohU7VmVE2Ii.webp', '2023', '2025-01-17 20:52:48', '2025-01-17 20:52:48'),
(11, 'Joker: Folie a Deux', 'Brendan Gleeson, Joaquin Phoenix, Lady Gaga', 'Todd Phillips', 'Musical, Thriller', NULL, 'films/eUVcWs4suQShxR9V7mTRyjRG5AWrJlupjfdHGpdj.webp', '2024', '2025-01-17 20:53:58', '2025-01-17 20:53:58'),
(12, 'Shadows Side', 'Alice Oliveira, Fábio Campos, Magna Fontes', 'Silvio Toledo', 'Horror', NULL, 'films/IaobyZcDoHAMTYNv4fnprEQQlDHEEzL4HWtir7uK.webp', '2022', '2025-01-17 20:56:47', '2025-01-17 20:56:47'),
(13, 'Sniper', 'filmLv Xin, Raquel Xu, Yang Yi', 'Alastair Fothergill', 'Action, Drama', NULL, 'films/1zMQiC23BhdaFc3zB37NS5UhQZ7j7LCvSY0GRclg.webp', '2023', '2025-01-17 20:58:50', '2025-01-17 20:58:50'),
(14, 'Watchmen', 'Adrienne Barbeau, Michael Cerveris, Troy Baker', 'Brandon Vietti', 'Action, Animation, Drama', NULL, 'films/NzpNvK5LHTJjA3CKTQ3XUTu7awl5y1yHKPpSdyii.webp', '2023', '2025-01-17 21:00:05', '2025-01-17 21:00:05');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_01_17_052418_create_films_table', 2),
(7, '2025_01_18_111427_add_role_to_users_table', 3);

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
  `expires_at` timestamp NULL DEFAULT NULL,
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
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ryan', 'ryanahmad220503@gmail.com', NULL, '$2y$10$sc5DbF137bsp/i5ZbsbCBOQ1IeK7xIU2Qdr3kV8xaVTeeGZMRi7oO', 'user', NULL, '2025-01-18 04:30:21', '2025-01-18 04:30:21'),
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$ngHficLG5qyYjLjQkx3cweUSjRMMF.slQXkl82m8bXor9ZM2CBEF6', 'admin', NULL, '2025-01-19 02:46:57', '2025-01-19 02:46:57');

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
-- Indexes for table `films`
--
ALTER TABLE `films`
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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
