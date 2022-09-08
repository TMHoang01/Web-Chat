-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: database:3306
-- Generation Time: Sep 08, 2022 at 10:01 AM
-- Server version: 5.7.38
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webchat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(11) NOT NULL,
  `user_id_from` int(11) NOT NULL,
  `user_id_to` int(11) NOT NULL,
  `message` text COLLATE utf8_unicode_ci,
  `image_file_name` text COLLATE utf8_unicode_ci,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `user_id_from`, `user_id_to`, `message`, `image_file_name`, `created`, `modified`) VALUES
(1, 1, 2, 'Holloe;', NULL, NULL, NULL),
(2, 2, 1, 'Hello too.', '', NULL, NULL),
(3, 1, 2, 'Do you have rice', NULL, NULL, NULL),
(4, 1, 3, 'Lo as', '', NULL, NULL),
(5, 1, 3, 'Hello', '', NULL, NULL),
(6, 1, 1, 'w3', NULL, NULL, NULL),
(7, 1, 3, 'awd', NULL, NULL, NULL),
(8, 1, 3, 'awdes', NULL, NULL, NULL),
(9, 1, 3, 'ddse', NULL, NULL, NULL),
(11, 1, 1, 'w', NULL, NULL, NULL),
(18, 1, 2, '1', NULL, '2022-08-26 04:07:24', '2022-08-26 04:07:24'),
(20, 1, 2, 'nao let go', NULL, '2022-08-26 04:16:00', '2022-08-26 04:16:00'),
(21, 1, 2, 'nao let go', NULL, '2022-08-26 04:17:02', '2022-08-26 04:17:03'),
(22, 1, 2, 'hehe go go go', NULL, '2022-08-26 04:17:38', '2022-08-26 04:17:38'),
(23, 1, 2, 'los', NULL, '2022-08-26 04:19:54', '2022-08-26 04:19:54'),
(24, 2, 1, 'whst', NULL, '2022-08-26 04:22:27', '2022-08-26 04:22:27'),
(25, 2, 1, 'aw', NULL, '2022-08-26 04:22:56', '2022-08-26 04:22:56'),
(26, 2, 1, 'xaw', NULL, '2022-08-26 04:23:43', '2022-08-26 04:23:43'),
(27, 2, 1, 'hahaha', NULL, '2022-08-26 04:24:11', '2022-08-26 04:24:11'),
(28, 2, 1, 'hwhye', NULL, '2022-08-26 04:24:21', '2022-08-26 04:24:21'),
(29, 2, 1, 'q', NULL, '2022-08-26 04:25:02', '2022-08-26 04:25:02'),
(30, 2, 1, 'w', NULL, '2022-08-26 04:27:49', '2022-08-26 04:27:49'),
(31, 2, 1, 'w', NULL, '2022-08-26 04:27:52', '2022-08-26 04:27:52'),
(32, 2, 1, 'aw', '/img/stamps/21.png', '2022-08-26 04:27:56', '2022-08-26 04:27:56'),
(33, 1, 1, 'la ho', NULL, '2022-08-26 07:07:07', '2022-08-26 07:07:07'),
(34, 1, 2, 'ds', NULL, '2022-08-26 07:13:12', '2022-08-26 07:13:12'),
(35, 1, 2, 'zo', NULL, '2022-08-30 06:44:30', '2022-08-30 06:44:30'),
(37, 1, 3, 'w', NULL, '2022-08-31 06:43:23', '2022-08-31 06:43:23'),
(38, 1, 3, 'hahaha', NULL, '2022-08-31 06:43:42', '2022-08-31 06:43:42'),
(39, 1, 3, 'dw', NULL, '2022-08-31 06:44:57', '2022-08-31 06:44:57'),
(42, 1, 2, NULL, '/img/stamps/03.png', '2022-08-31 09:53:11', '2022-08-31 09:53:11'),
(43, 1, 2, NULL, '/img/stamps/06.png', '2022-08-31 09:54:06', '2022-08-31 09:54:06'),
(44, 1, 2, NULL, '/img/stamps/06.png', '2022-08-31 09:54:28', '2022-08-31 09:54:28'),
(45, 1, 2, NULL, '/img/stamps/06.png', '2022-08-31 09:54:59', '2022-08-31 09:54:59'),
(46, 1, 2, NULL, '/img/stamps/22.png', '2022-08-31 10:05:04', '2022-08-31 10:05:04'),
(47, 1, 1, 'hah', NULL, '2022-09-08 06:59:36', '2022-09-08 06:59:36'),
(48, 1, 1, 'haha', NULL, '2022-09-08 07:00:17', '2022-09-08 07:00:17'),
(49, 1, 1, 'haha1', NULL, '2022-09-08 07:01:11', '2022-09-08 07:01:11'),
(50, 1, 1, 'Complete edit', NULL, '2022-09-08 07:13:12', '2022-09-08 07:59:05'),
(51, 1, 1, 'end chat', NULL, '2022-09-08 07:49:43', '2022-09-08 08:18:01'),
(52, 1, 3, 'd', NULL, '2022-09-08 08:35:30', '2022-09-08 08:35:30');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `resource_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, '1hoang55dd', '1@gmail.com', '$2y$10$GWI4fHuZexs0F1uh1w6vBuBeBM1GiUA0a6iPUcFQeB7yNaWGiDg7C'),
(2, 'hoang2', '2@gmail.com', '$2y$10$hV.61VW.YyoDvV8c5DYdN.ZGuOdQG4y3p6lO3.BunVjP7NKK0hAky'),
(3, 'hoang 3', '3@gmail.com', '$2y$10$cnUDucmQoCzotlNQXmqg2OV/vGSKvQ6nB65RPb2mZ4fdPjfoI4Kdi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
