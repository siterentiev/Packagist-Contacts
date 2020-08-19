-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 26, 2020 at 06:21 AM
-- Server version: 5.7.25
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lvl3mod2exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(249) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(2) UNSIGNED NOT NULL DEFAULT '0',
  `verified` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `resettable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `roles_mask` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `registered` int(10) UNSIGNED NOT NULL,
  `last_login` int(10) UNSIGNED DEFAULT NULL,
  `force_logout` mediumint(7) UNSIGNED NOT NULL DEFAULT '0',
  `job` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acc_vk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acc_teleg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acc_insta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `username`, `status`, `verified`, `resettable`, `roles_mask`, `registered`, `last_login`, `force_logout`, `job`, `phone`, `address`, `photo`, `acc_vk`, `acc_teleg`, `acc_insta`) VALUES
(36, 'rita_carlson@email.com', '$2y$10$3SK0ObEvCEIADaxQTWGLTuz2lN2IdrY1fi4u3yV96qwTXX/UjRj8K', 'Rita Carlson', 2, 1, 1, 0, 1595503546, 1595665805, 3, 'Clothes Designer, Albano & Romiro Powers', '+7 43-512-091-11', 'Italy, Milan, Francesko str 194', 'josh.png', 'vk_rita_moda', 'telegram_rita_moda', 'instagram_rita_moda'),
(37, 'marina_parazzi@email.com', '$2y$10$tFMp5kTeFOfgu/gjeR4qdObeLN55ojzr3dsT5okJ1O7FxbMDLwUPe', 'Marina Parazzi', 0, 1, 1, 0, 1595504469, 1595613971, 2, 'Financial Director, Roten Blumen Industries', '+7 15-901-000-94', 'Germany, Munchen, Linden strase, 158', 'josh.png', 'vk_marina_blumen', 'telegram_marina_blumen', 'instagram_marina_blumen'),
(38, 'administator@email.com', '$2y$10$HpiODWdzTT0MqHtbK4kioO.KAwO6ofXa4FriBcnfymvbDHPzq1WVi', 'Bob Dilan', 0, 1, 1, 1, 1595572330, 1595733459, 0, 'Site Administrator, New Horizonts Co', '+7 15-322-322-00', 'USA, Washington, Linkoln av 214', 'josh.png', 'vk_bob', 'telegram_bob', 'instagram_bob'),
(35, 'pizza_boss@email.com', '$2y$10$aK/2Auqdir7dOW3vpNsS.OzBquZcv3XfmUyWeRcthh8q5s.g6vfk6', 'Alberto Pomidorre', 2, 1, 1, 0, 1595439785, 1595572087, 5, 'President CEO, The Dominos Pizza Limited', '+7 43-322-322-11', 'Italy, Rome, Janny Rodari str, 18', 'roberto.png', NULL, NULL, NULL),
(41, 'jackie_chan@email.com', '$2y$10$4wJS2OSzUhdZschret.6uOckBNqNwr7bB7Kl0kkXrWe5qMbO/RcKC', 'Jackie Chan', 2, 1, 1, 0, 1595698289, NULL, 1, 'Producer, Chang-Shin Studio Corp', '+7 05-322-322-19', 'Hong Kong, Sunny Bay 8', 'sunny.png', '', '', ''),
(40, 'user_to_delete@email.com', '$2y$10$qQmGpt9UBcWcsrFRiHBMb.d6U.ZV3AKQHxO/y5r38cu0rZSD52Z3O', 'User To Delete', 0, 1, 1, 0, 1595614328, NULL, 0, 'User To Delete, User To Delete', '+7 43-322-322-11', 'Not London, Time sqr 15', 'josh.png', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_confirmations`
--

CREATE TABLE `users_confirmations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(249) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selector` varchar(16) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_confirmations`
--

INSERT INTO `users_confirmations` (`id`, `user_id`, `email`, `selector`, `token`, `expires`) VALUES
(12, 22, 'mario2@email.com', '1Xrdy_odMej_orVF', '$2y$10$N.PlMqmTEposL0cIkoixduZGL6XoCmw434pFJrP5mSj8nFiGCMlv.', 1595445580),
(11, 21, 'bear@email.com', '6JYKnSCzsnymbG_5', '$2y$10$1k0Enchq.9M0CS/FS4Q4zea2IqnLBEc0bwCOFSYLzhw1SVoYVOANu', 1595445425),
(10, 20, 'boss@email.com', '21Ow8KnyXHUpL-WK', '$2y$10$DBRvXLcofv3VZ10JW5oNluE3bx08duinwfrG7XwhMH257EeVEwmWq', 1595445265),
(9, 19, 'pie@try.com', 'zADsJrGEuEt3qXf4', '$2y$10$nCL9O3Eolq/w3F/2CtQrReixy8varnODkXJU5kpA0DV5FEQEthUbe', 1595444797),
(8, 18, 'qwerty@try.ru', 'D3oOtaOpfjzMBm7C', '$2y$10$Zx5jxxXqK8sM28lsqVmHDeuIDYs0NPj3gh1Cb0cSOdpxAi0w5HjhS', 1595421830),
(7, 17, 'test1@email.com', 'rjnttxAV0wEPiu9Y', '$2y$10$taE6Uq4.SAseNgBNHw4c3eYcw7L96vH/o3yn5Br/oShREckFrG0RO', 1595421611),
(13, 23, 'mario3@email.com', 'G77nmprqQvVcwOZP', '$2y$10$rUCbaMNU/qqC5DmFh6I82e7kA7uwbVCnmFNu1PXE7/hiqL7RJEpHS', 1595446290),
(14, 24, 'pie@try.com', 'PU7aFYNE-sdtonfO', '$2y$10$j1CZ6y1Pj8Nx4c2PiwhkD.E11VqTGSUDPZRwpBxclaolC3RGfhF2i', 1595446631);

-- --------------------------------------------------------

--
-- Table structure for table `users_remembered`
--

CREATE TABLE `users_remembered` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` int(10) UNSIGNED NOT NULL,
  `selector` varchar(24) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_resets`
--

CREATE TABLE `users_resets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` int(10) UNSIGNED NOT NULL,
  `selector` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_throttling`
--

CREATE TABLE `users_throttling` (
  `bucket` varchar(44) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `tokens` float UNSIGNED NOT NULL,
  `replenished_at` int(10) UNSIGNED NOT NULL,
  `expires_at` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_throttling`
--

INSERT INTO `users_throttling` (`bucket`, `tokens`, `replenished_at`, `expires_at`) VALUES
('rSfexgxRsVspOXpRsa--QAM2KD0wNuLG1CZX6ZXIlVA', 497.15, 1595419739, 1595592539),
('OMhkmdh1HUEdNPRi-Pe4279tbL5SQ-WMYf551VVvH8U', 19, 1595666158, 1595702158),
('PZ3qJtO_NLbJfRIP-8b4ME4WA3xxc6n9nbCORSffyQ0', 2.45436, 1595698289, 1596130289),
('QduM75nGblH2CDKFyk0QeukPOwuEVDAUFE54ITnHM38', 57.9724, 1595733459, 1596273459),
('xN94QXN-AwnOrk8Ij04SWDH9eerMJZb0VnpiKl_yWo4', 499, 1595666158, 1595838958);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users_confirmations`
--
ALTER TABLE `users_confirmations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `email_expires` (`email`,`expires`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users_remembered`
--
ALTER TABLE `users_remembered`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `users_resets`
--
ALTER TABLE `users_resets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `user_expires` (`user`,`expires`);

--
-- Indexes for table `users_throttling`
--
ALTER TABLE `users_throttling`
  ADD PRIMARY KEY (`bucket`),
  ADD KEY `expires_at` (`expires_at`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users_confirmations`
--
ALTER TABLE `users_confirmations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users_remembered`
--
ALTER TABLE `users_remembered`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_resets`
--
ALTER TABLE `users_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
