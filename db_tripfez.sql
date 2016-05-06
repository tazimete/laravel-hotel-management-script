-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2016 at 08:14 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_tripfez`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_settings`
--

CREATE TABLE IF NOT EXISTS `admin_settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `email_marketing_page` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_request_certificate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_marketing` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_settings`
--

INSERT INTO `admin_settings` (`id`, `user_id`, `email_marketing_page`, `email_request_certificate`, `file_marketing`, `created_at`, `updated_at`) VALUES
(1, 1, 'user@gmail.com', 'admin@gmail.com', 'attachment_admin/Penguins.jpg', '2016-04-06 20:51:36', '2016-04-06 20:52:08');

-- --------------------------------------------------------

--
-- Table structure for table `amenities_review`
--

CREATE TABLE IF NOT EXISTS `amenities_review` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `property_id` bigint(20) NOT NULL,
  `muslim_prayer_mat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qibla_direction` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quran_in_room` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `praying_direction_from_hotel_staff` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `local_prayer_time_table` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `halal_restaurant_list` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mosque_or_suraus_list` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alcoholic_beverages` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `halal_food` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_04_11_211519_CreateRestaurantTable', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promotional_tips`
--

CREATE TABLE IF NOT EXISTS `promotional_tips` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `promotional_tips`
--

INSERT INTO `promotional_tips` (`id`, `user_id`, `title`, `description`, `image_url`, `created_at`, `updated_at`) VALUES
(1, 1, 'Promo One', 'Promo description   Promo description    Promo description    Promo description    Promo description   Promo description   Promo description', 'Penguins.jpg', '2016-04-04 17:04:45', '2016-04-04 17:04:45'),
(2, 1, 'Promo Tips Two', 'Promo Tips TwoPromo Tips TwoPromo Tips TwoPromo Tips TwoPromo Tips TwoPromo Tips TwoPromo Tips Two  Promo Tips TwoPromo Tips Two Promo Tips Two Promo Tips Two Promo Tips Two Promo Tips TwoPromo Tips TwoPromo Tips Two', 'Koala.jpg', '2016-04-04 23:08:39', '2016-04-04 23:08:39'),
(3, 1, 'Promo Tips nThree', 'Promo Tips nThree Promo Tips nThree Promo Tips nThree Promo Tips nThree Promo Tips nThreePromo Tips nThreev Promo Tips nThreevPromo Tips nThree vPromo Tips nThree vPromo Tips nThree', 'Tulips.jpg', '2016-04-04 23:10:29', '2016-04-04 23:10:29'),
(4, 2, 'Tip Four', 'Tip Four Tip Four Tip Four Tip Four Tip Four Tip Four Tip Four Tip Four Tip Four Tip Four Tip Four Tip Four Tip Four Tip Four Tip Four Tip Four Tip Four Tip Four Tip Four Tip Four Tip Four Tip Four Tip Four Tip Four Tip Four Tip Four', 'Jellyfish.jpg', '2016-04-05 13:24:36', '2016-04-05 13:24:36'),
(5, 2, 'Tip Five', 'Tip FiveTip FiveTip FiveTip FiveTip FiveTip FiveTip FiveTip FiveTip FiveTip FiveTip FiveTip FiveTip FiveTip FiveTip FiveTip FiveTip FiveTip FiveTip FiveTip FiveTip FiveTip FiveTip FiveTip FiveTip FiveTip FiveTip FiveTip FiveTip FiveTip FiveTip FiveTip Fiv', 'Desert.jpg', '2016-04-05 13:24:54', '2016-04-05 13:24:54'),
(6, 2, 'Tip Six', 'Tip SixTip SixTip SixTip SixTip SixTip SixTip SixTip SixTip SixTip SixTip SixTip SixTip SixTip SixTip SixTip SixTip SixTip SixTip SixTip SixTip SixTip SixTip SixTip SixTip SixTip SixTip SixTip SixTip SixTip SixTip SixTip SixTip SixTip SixTip SixTip SixTip', 'Chrysanthemum.jpg', '2016-04-05 13:30:29', '2016-04-05 13:30:29'),
(7, 2, 'Tip Seven', 'Tip Seven Tip Seven Tip Seven Tip Seven Tip Seven Tip Seven Tip Seven Tip Seven Tip Seven Tip Seven Tip Seven Tip Seven Tip Seven Tip Seven Tip Seven Tip Seven Tip Seven Tip Seven Tip Seven Tip Seven Tip Seven Tip Seven Tip Seven Tip Seven Tip Seven Tip S', 'Lighthouse.jpg', '2016-04-05 13:30:46', '2016-04-05 13:30:46');

-- --------------------------------------------------------

--
-- Table structure for table `property_options`
--

CREATE TABLE IF NOT EXISTS `property_options` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `property_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `property_logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `property_twitter_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `property_tripadvisor_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `legal_property_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suffix` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city_lat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city_lng` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state_region` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `property_options`
--

INSERT INTO `property_options` (`id`, `user_id`, `property_name`, `property_logo`, `property_twitter_url`, `property_tripadvisor_url`, `legal_property_name`, `street_address`, `suffix`, `city`, `city_lat`, `city_lng`, `postal_code`, `state_region`, `country`, `phone`, `fax`, `created_at`, `updated_at`) VALUES
(1, 1, 'thtrh', 'Penguins.jpg', 'btrhbtrhbh', 'trhtrhtrh', 'trhtr', 'htrh', 'trhtrhtr', 'Kuala Lumpur', '3.139003', '101.68685499999992', 'fbfg', 'gfgfdg', 'Malaysia', 'fbfg', 'fdg', '2016-04-02 04:54:40', '2016-04-06 23:43:50'),
(2, 2, 'USer', 'Penguins.jpg', 'regtrety', 'tryhtrytry', 'tryt', 'rytrytr', 'ytrytryt', 'Manjung, Perak Malaysia', '4.4022491', '100.7097867', 'tryhtrgh', 'tghtrhtrh', 'Malaysia', 'trhtrhtrh', 'trhtrhtrh', '2016-04-09 02:39:25', '2016-04-09 02:39:25'),
(3, 3, 'bnzhgfh', 'Jellyfish.jpg', 'gfhhgfhg', 'gfhgfh', 'gfh', 'gfhgfhgf', 'gfhgf', 'Kuala Lumpur Federal Territory of Kuala Lumpur Malaysia', '3.139003', '101.68685499999992', 'tht', 'hthtrh', 'Malaysia', 'thth', 'thrhtrht', '2016-04-10 17:03:23', '2016-04-10 17:03:23');

-- --------------------------------------------------------

--
-- Table structure for table `request_certificate`
--

CREATE TABLE IF NOT EXISTS `request_certificate` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `business_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `buiness_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `request_certificate`
--

INSERT INTO `request_certificate` (`id`, `user_id`, `name`, `business_name`, `language`, `buiness_phone`, `email_address`, `street_address`, `city`, `state`, `postal_code`, `country`, `created_at`, `updated_at`) VALUES
(1, 2, 'AGM TAzim', 'gfdg', '', 'fdhg', 'hbgf@serf.dfgr', 'hfgh', 'fghbgf', 'hgfhbgf', 'hgfhgfh', '1', '2016-04-05 15:16:41', '2016-04-05 15:16:41'),
(2, 2, 'User', 'dfgrfdeg', '', 'erwgfverw', 'gfverfg@sedf.gh', 'verg', 'erfg', 'regvergverrfgre', 'gergregre', '1', '2016-04-05 15:17:37', '2016-04-05 15:17:37');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE IF NOT EXISTS `restaurant` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cuisine` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `name`, `address`, `cuisine`, `picture`, `created_at`, `updated_at`) VALUES
(1, 'fffffffff', 'gghhhhhhhhhhhhhhhhh', 'ggggggggggg', 'restaurant-images/Jellyfish.jpg', '2016-04-12 00:07:58', '2016-04-12 00:07:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `is_admin` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `title`, `first_name`, `last_name`, `email`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'miah', 'admin@gmail.com', '$2y$10$15EHyXKsmNiC4QPcHwMXJ.oeExul0rMhrQiTu58iZO7AAf6NcuwAC', 1, '3KhTkOV7YZux1svKkVD9SjqzupcBYmOGBRP4m1qUDh8dKZBGaEf9jElDevfV', '2016-04-04 17:00:46', '2016-04-10 16:34:38'),
(2, 1, 'user', 'uddin', 'user@gmail.com', '$2y$10$tlrYYMb6L2yGcX.HznY9..NMSTrFFysNRjDpDokJqLyqbkmgilCk6', 0, NULL, '2016-04-04 22:46:48', '2016-04-04 22:46:48'),
(3, 2, 'user1', 'miah', 'user1@gmail.com', '$2y$10$DulTds/91fyCRYxpnwAeNeRDxL8tKOZyGujWz.0SEuErMgHc/5HMS', 0, 'Vc59gPR5NmbaIf8kxdYCzPvKV0sLrpHZpE7cbocQJ49f9IGZN0rqMJpb1lrB', '2016-04-04 22:47:11', '2016-04-09 12:23:13'),
(4, 1, 'user4', 'hossain', 'user4@gmail.com', '$2y$10$V7iCMYPy3FGbzQAqE4mZfefjJfJOs5UNNauKksnVwNQWCYe4lsl4C', 0, NULL, '2016-04-05 13:35:09', '2016-04-05 13:35:09'),
(5, 1, 'User5', 'miah', 'user5@gmail.com', '$2y$10$d8zcryMd3Y/IMFnqCIDZzOOM173koW/X7cB9MFwA.xMiEHIS.oZTq', 0, NULL, '2016-04-05 13:35:31', '2016-04-05 13:35:31'),
(6, 1, 'User6', 'khan', 'user6@gmail.com', '$2y$10$Bjdyte/DaWzMhmm1m5TS1eT3Ok/3P5gxUZBxyAiyy20yr8yr0aWOW', 0, NULL, '2016-04-05 13:35:54', '2016-04-05 13:35:54'),
(7, 1, 'user7', 'user7', 'user7@gmail.com', '$2y$10$iQSc2bU0Hww9nnOmJY9QYe.Dy4I0kHJD/HO9GiZLGq50tV.k39REy', 0, NULL, '2016-04-05 13:36:13', '2016-04-05 13:36:13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
