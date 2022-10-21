-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 05, 2022 at 07:48 AM
-- Server version: 10.5.17-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u917410309_defi_detector`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `level` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `image`, `link`, `level`, `created_at`, `updated_at`) VALUES
(1, '1664928738smartcash.gif', 'https://bnbminer.finance/', 1, '2022-10-05 00:12:18', '2022-10-05 00:12:18'),
(3, '16649429901664915650bnbminer15.gif', 'https://bnbminer.finance/', 1, '2022-10-05 04:09:50', '2022-10-05 04:09:50'),
(4, '16649430701664917042wealth_small.gif', 'https://bnbminer.finance/', 3, '2022-10-05 04:11:10', '2022-10-05 04:11:10'),
(5, '1664943089busdwealth_small.gif', 'https://bus.finance/', 3, '2022-10-05 04:11:29', '2022-10-05 04:11:29'),
(6, '1664943192smartcash.gif', 'https://smartcash.finance/', 2, '2022-10-05 04:13:12', '2022-10-05 04:13:12'),
(7, '16649432161664915639wealth_big.gif', 'https://bnbminer.finance/', 2, '2022-10-05 04:13:36', '2022-10-05 04:13:36');

-- --------------------------------------------------------

--
-- Table structure for table `dapps`
--

CREATE TABLE `dapps` (
  `id` int(11) NOT NULL,
  `mining_group` varchar(100) NOT NULL,
  `mining_group_url` varchar(255) NOT NULL,
  `audit` varchar(255) DEFAULT NULL,
  `contract` varchar(255) DEFAULT NULL,
  `kyc` varchar(255) DEFAULT NULL,
  `coin_token` varchar(50) DEFAULT NULL,
  `fees` varchar(50) DEFAULT NULL,
  `ages` varchar(50) DEFAULT NULL,
  `daily` varchar(50) DEFAULT NULL,
  `tvl` varchar(50) DEFAULT NULL,
  `tvl_24h` varchar(50) DEFAULT NULL,
  `show_flag` tinyint(4) NOT NULL,
  `level` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tg_group` varchar(255) DEFAULT NULL,
  `discode_link` varchar(255) DEFAULT NULL,
  `poocoin_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dapps`
--

INSERT INTO `dapps` (`id`, `mining_group`, `mining_group_url`, `audit`, `contract`, `kyc`, `coin_token`, `fees`, `ages`, `daily`, `tvl`, `tvl_24h`, `show_flag`, `level`, `created_at`, `updated_at`, `tg_group`, `discode_link`, `poocoin_link`, `twitter_link`) VALUES
(1, 'Wealth Mountain', 'https://wealthmountain.app/binance?ref=', 'https://bscscan.com/token/', 'https://bscscan.com/token/', 'https://bscscan.com/token/', 'AVAX', '10%/2%', '12d', '32%', '$241', '+2.31%', 1, 1, '2022-10-05 03:48:12', '2022-10-05 03:48:12', 'https://tg.app/tokens/', 'https://discode.app/tokens/', 'https://poocoin.app/tokens/', 'https://twitter.app/tokens/'),
(2, 'Smart Cash Capital', 'https://smartcashcapital.com/index.html?ref=', 'https://audit.com/index.html?ref=', 'https://contract.com/index.html?ref=', 'https://kyc.com/index.html?ref=', 'ETH', '10/2%', '12d', '0%', '$321', '+21%', 1, 2, '2022-10-05 03:49:59', '2022-10-05 03:49:59', 'https://tg.com/index.html?ref=', 'https://discode.com/index.html?ref=', 'https://poocoin.com/index.html?ref=', 'https://twitter/index.html?ref='),
(3, 'BUSD Wealth', 'https://www.busdwealth.com/?ref=', 'https://www.audit.com/?ref=ds', 'https://www.contract.com/?ref=', 'https://www.kyc.com/?ref=', 'POLYGON', '11%/4%', '12d', '3%', '$982', '+4.21', 1, 3, '2022-10-05 04:01:17', '2022-10-05 04:01:17', 'https://www.tg.com/?ref=', 'https://www.discode.com/?ref=', 'https://www.poocoin.com/?ref=sadf', 'https://www.twitter.com/?ref=sd');

-- --------------------------------------------------------

--
-- Table structure for table `influencers`
--

CREATE TABLE `influencers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `telegram` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `influencers`
--

INSERT INTO `influencers` (`id`, `name`, `url`, `telegram`, `twitter`, `created_at`, `updated_at`) VALUES
(1, 'John', 'https://john.com', 'https://t.me/johnson', 'https://twitter.com/abcd', '2022-10-05 04:08:42', '2022-10-05 04:08:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `telegram` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `url`, `telegram`, `twitter`, `created_at`, `updated_at`) VALUES
(1, 'George stamp', 'https://george.xyz/', 'https://t.me/georgestamp', 'https://twitter.com', '2022-10-05 04:07:38', '2022-10-05 04:07:38');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `coin` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `chain` varchar(30) DEFAULT NULL,
  `market_cap` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `change_24h` varchar(50) DEFAULT NULL,
  `show_flag` tinyint(4) NOT NULL,
  `level` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `audit` varchar(255) DEFAULT NULL,
  `contract` varchar(255) DEFAULT NULL,
  `kyc` varchar(255) DEFAULT NULL,
  `chart` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `coin`, `name`, `chain`, `market_cap`, `price`, `change_24h`, `show_flag`, `level`, `created_at`, `updated_at`, `audit`, `contract`, `kyc`, `chart`) VALUES
(1, 'https://storage.googleapis.com/coinsniper-assets/images/4IMp8SyEyHBVlE6JjZDbOejly2mdONRg7cb6qJWh.jpg', 'BIG', 'ETH', 'test market cap', '122', '24h', 1, 3, '2022-10-05 04:05:28', '2022-10-05 04:05:28', 'https://audit?ref=', 'https://contract?ref=', 'https://kyc?ref=', 'https://chart?ref='),
(2, 'https://storage.googleapis.com/coinsniper-assets/images/OMOHXH69x3jZld0r0PWm47UMlGm8dEw1JQP5jJ5m.png', 'TAMA', 'BSC', 'test 2 cap', '342', '21h', 1, 3, '2022-10-05 04:06:32', '2022-10-05 04:06:32', 'https://audit?ref', 'https://c?ref', 'https://kyc?ref', 'https://car?ref');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dapps`
--
ALTER TABLE `dapps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `influencers`
--
ALTER TABLE `influencers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
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
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dapps`
--
ALTER TABLE `dapps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `influencers`
--
ALTER TABLE `influencers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
