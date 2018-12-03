-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 02, 2018 at 09:37 AM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelisweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `pelicula_id` int(11) NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comentarios`
--

INSERT INTO `comentarios` (`id`, `user_id`, `pelicula_id`, `body`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'comentario 1', '2018-12-02 09:17:32', '2018-12-02 09:17:32'),
(2, 1, 1, 'comentario 2', '2018-12-02 09:39:53', '2018-12-02 09:39:53'),
(3, 1, 1, 'comentario 3', '2018-12-02 09:40:53', '2018-12-02 09:40:53'),
(4, 1, 2, 'Comentario 1 de Pelicula ID 2', '2018-12-02 09:45:42', '2018-12-02 09:45:42'),
(5, 1, 2, 'Comentario 2 de Pelcula ID 2', '2018-12-02 09:51:51', '2018-12-02 09:51:51'),
(6, 2, 3, 'La Pelicula 3 estuvo bien LoL', '2018-12-02 09:53:56', '2018-12-02 09:53:56'),
(7, 2, 3, 'La pelicula 3 estuvo poquilol', '2018-12-02 09:56:17', '2018-12-02 09:56:17'),
(8, 2, 1, 'Comentario hecho por Porfirio', '2018-12-02 10:02:15', '2018-12-02 10:02:15'),
(9, 2, 2, 'Pelicula LOL por Porfirio', '2018-12-02 10:25:47', '2018-12-02 10:25:47'),
(10, 2, 1, 'Porfirio Ha comentado sobre la pelicula 1 otra vez', '2018-12-02 12:47:46', '2018-12-02 12:47:46'),
(11, 3, 2, 'Andrea comento sobre pelicula 2', '2018-12-02 12:48:22', '2018-12-02 12:48:22'),
(12, 3, 1, 'No me gustó.', '2018-12-02 12:57:42', '2018-12-02 12:57:42'),
(13, 3, 4, 'No la he visto, pero la veré', '2018-12-02 13:02:15', '2018-12-02 13:02:15'),
(14, 2, 4, 'Yo también la quiero ver!!', '2018-12-02 13:03:09', '2018-12-02 13:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(55, '2014_10_12_000000_create_users_table', 1),
(56, '2014_10_12_100000_create_password_resets_table', 1),
(57, '2018_11_26_171917_create_items_table', 1),
(58, '2018_11_27_064212_create_peliculas_table', 1),
(59, '2018_11_27_153526_create_posters_table', 1),
(60, '2018_11_30_200904_create_comentarios_table', 1);

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
-- Table structure for table `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinopsis` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `resena` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estreno` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peliculas`
--

INSERT INTO `peliculas` (`id`, `user_id`, `titulo`, `sinopsis`, `resena`, `poster_image`, `estreno`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pelicula 1 BB', 'Sinonpsis 1', 'Reseña 1', 'Screenshot from 2018-11-12 23-32-53_1543762534.png', '2018-11-08', '2018-12-02 06:47:33', '2018-12-02 20:55:35'),
(2, 1, 'Pelicula 2 A', 'Sinopsis 2', 'Reseña 2', 'Screenshot from 2018-11-13 09-25-31_1543762511.png', '2018-11-08', '2018-12-02 09:43:31', '2018-12-02 20:55:11'),
(3, 2, 'Pelicula 3', 'Sinopsis 3', 'Reseña de Pelicula 3', 'Screenshot from 2018-11-11 09-35-40_1543722802.png', '2018-11-30', '2018-12-02 09:53:22', '2018-12-02 09:53:22'),
(4, 1, 'Pelicula 4', 'Sinopsis 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent efficitur pulvinar erat, vitae ultricies enim vestibulum non. Curabitur finibus lorem nisi, quis porta tellus sagittis quis. Nunc orci ante, pellentesque eget laoreet et, porttitor ut lectus. Phasellus quis ornare sapien. Sed porttitor lacus eleifend, efficitur erat ut, vehicula sem. Etiam at ligula eget orci cursus molestie. Sed a eleifend eros. In eget sapien leo. Nunc ac cursus mi. Proin id sapien rhoncus, scelerisque enim sed, sodales nunc. Aenean interdum nisl vitae rhoncus vehicula. Aenean iaculis, mauris vitae accumsan rhoncus, metus justo lobortis ante, id condimentum sapien eros vitae tellus.\r\n\r\nNullam justo arcu, viverra vitae bibendum eu, venenatis vitae dui. Praesent molestie sit amet ante eu porta. Fusce convallis elit eu blandit tempor. Nam id nulla cursus, pellentesque risus sit amet, hendrerit elit. Mauris luctus metus consequat, maximus libero in, mattis sapien. Etiam in mollis diam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In sollicitudin molestie quam at vehicula. Nunc vel consequat purus. Etiam sed maximus metus. Quisque ullamcorper venenatis congue. Sed sed pellentesque dui, a gravida justo.', 'Screenshot from 2018-10-18 20-12-07_1543733957.png', '2018-11-01', '2018-12-02 12:59:17', '2018-12-02 12:59:17');

-- --------------------------------------------------------

--
-- Table structure for table `posters`
--

CREATE TABLE `posters` (
  `id` int(10) UNSIGNED NOT NULL,
  `pelicula_id` int(11) NOT NULL,
  `poster` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'jdoe@email.com', '$2y$10$WAkpwlhg7Qt.obBJHMuARuLjIxqine3QkL67gjNe3mX9gnijBWp.K', 'admin', 'V0P5BNYZ9npIavbyZnzg8wQjQnDiN5sQMmcy9BiFEvKPZm5nfMRFgtSClxWI', '2018-12-02 06:47:10', '2018-12-02 06:47:10'),
(2, 'Porfirio', 'pilo@email.com', '$2y$10$LlhS7i6F.Y0gEPXemuYajugCtv5fID.BGw1vtH4HcdWTvpA6ppPIm', 'default', 'cSjKT4l8JRg5cdV78j9US1DuwQq1Qt5G7wRa0OYUD1W4AELbN2p9FPE7I9zE', '2018-12-02 09:52:37', '2018-12-02 09:52:37'),
(3, 'Andrea', 'andrea@email.com', '$2y$10$QL5q8HASRn4bVaNROkGYpeuJp7ICVLkgf/0DSRGIYwRKRT6IA5XzK', 'default', '8hmqIJOum4BC4mLJIrPV18GBG9IssYZmus6iJClPcxFmLIuwPrLX5sV7flt9', '2018-12-02 12:20:49', '2018-12-02 12:20:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
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
-- Indexes for table `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posters`
--
ALTER TABLE `posters`
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
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `posters`
--
ALTER TABLE `posters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
