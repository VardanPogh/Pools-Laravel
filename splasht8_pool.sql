-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 08, 2022 at 08:38 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `splasht8_pool`
--

-- --------------------------------------------------------

--
-- Table structure for table `age_infos`
--

CREATE TABLE `age_infos` (
  `id` int(11) NOT NULL,
  `adult_price` float DEFAULT NULL,
  `youth_price` float DEFAULT NULL,
  `child_price` float DEFAULT NULL,
  `infant_price` float DEFAULT NULL,
  `senior_price` float DEFAULT NULL,
  `family_price` float DEFAULT NULL,
  `max_in_family` int(11) DEFAULT NULL,
  `pricing_notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adult_age_min` int(11) DEFAULT NULL,
  `adult_age_max` int(11) DEFAULT NULL,
  `youth_age_min` int(11) DEFAULT NULL,
  `youth_age_max` int(11) DEFAULT NULL,
  `child_age_min` int(11) DEFAULT NULL,
  `child_age_max` int(11) DEFAULT NULL,
  `infant_age_min` int(11) DEFAULT NULL,
  `infant_age_max` int(11) DEFAULT NULL,
  `senior_age_min` int(11) DEFAULT NULL,
  `senior_age_max` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `age_infos`
--

INSERT INTO `age_infos` (`id`, `adult_price`, `youth_price`, `child_price`, `infant_price`, `senior_price`, `family_price`, `max_in_family`, `pricing_notes`, `adult_age_min`, `adult_age_max`, `youth_age_min`, `youth_age_max`, `child_age_min`, `child_age_max`, `infant_age_min`, `infant_age_max`, `senior_age_min`, `senior_age_max`) VALUES
(1, 1212, 12, 1213, 2312310, 123123, 12312300, 3123123, 'vdfvsdf dsfvdsvdsf dfsvdfvdsfv dsfv', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1212, 12, 1213, 2312310, 123123, 12312300, 3123123, 'vdfvsdf dsfvdsvdsf dfsvdfvdsfv dsfv', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 1111, 12111100000, 1213, 2312310, 123123, 12312300, 3123123, 'vdfvsdf dsfvdsvdsf dfsvdfvdsfv dsfv', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 16, 10, 6, 0, 9, 30, NULL, NULL, 25, 64, 12, 24, 2, 11, 0, 2, 65, NULL),
(23, 16, 10, 8, 0, 9, 30, NULL, 'YMCA provides different day/age discounts. Check website for details', 18, 64, 12, 17, 2, 11, 0, 2, 65, NULL),
(24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 8, 4.1, 3.65, 0, 4.8, 16.3, 6, NULL, 18, 64, 13, 17, 6, 12, 0, 5, 65, NULL),
(31, 8, 4.1, 3.65, 0, 4.8, 16.3, 6, NULL, 18, 64, 13, 17, 6, 12, 0, 5, 65, NULL),
(32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 8, 4.1, 3.65, 0, 4.8, 16.3, 6, NULL, 18, 64, 13, 17, 6, 12, 5, NULL, 65, NULL),
(34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 8, 4.1, 3.65, 0, 4.8, 16.3, 6, NULL, 18, 64, 13, 17, 6, 12, NULL, 5, 65, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_photo` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `sub_text`, `description`, `main_photo`) VALUES
(4, 'Pool Temperature Reference', 'Have you ever jumped into a nice, cool swimming pool on a super-hot day? It’s either refreshing or a nightmarish shock to your system.', '<!--      StartFragment      -->\r\n<h2 style=\"box-sizing: border-box; color: rgb(0, 92, 191); padding: 0px; margin: 0px 0px 12px; font-size: 32px; font-family: Mukta-ExtraBold; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">\r\n	Normal Expanding your fitness possibilities the painless way. \r\n</h2>\r\n<p>\r\n	<br class=\"Apple-interchange-newline\" /> \r\n</p>\r\n<!--      EndFragment      -->\r\n<!--      StartFragment      -->\r\n<div class=\"image-text\" style=\"box-sizing: border-box; color: rgb(0, 0, 0); font-family: Mukta-Regular; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">\r\n	<div class=\"inner-wrap\" style=\"box-sizing: border-box; position: relative; max-width: 1360px; width: calc(100% - 32px); margin: 0px auto; display: flex; -webkit-box-align: start; align-items: flex-start;\">\r\n		<div class=\"text\" style=\"box-sizing: border-box; -webkit-box-flex: 0.9; flex: 0.9 1 0%; margin-left: 32px;\">\r\n			<p style=\"box-sizing: border-box; color: rgb(90, 90, 90); padding: 0px; margin: 0px 0px 24px; list-style: none; font-size: 16px;\">\r\n				Regular aquatic exercise is proven to increase flexibility, improve balance, and strengthen muscles. It can be a physical game-changer for those who find dry-land exercise too painful. The natural properties of water make fluid, low-impact movement possible, and that opens whole new avenues of activity to explore from the convenience of your home. \r\n			</p>\r\n			<p style=\"box-sizing: border-box; color: rgb(90, 90, 90); padding: 0px; margin: 0px; list-style: none; font-size: 16px;\">\r\n				Regular aquatic exercise is proven to increase flexibility, improve balance, and strengthen muscles. It can be a physical game-changer for those who find dry-land exercise too painful. The natural properties of water make fluid, low-impact movement possible, and that opens whole new avenues of activity to explore from the convenience of your home. \r\n			</p>\r\n		</div>\r\n	</div>\r\n</div>\r\n<div class=\"BlogSinglePost-text\" style=\"box-sizing: border-box; margin-top: 32px; color: rgb(0, 0, 0); font-family: Mukta-Regular; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">\r\n	<div class=\"inner-wrap\" style=\"box-sizing: border-box; position: relative; max-width: 1360px; width: calc(100% - 32px); margin: 0px auto;\">\r\n		    <img style=\"width: 300px; height: 300px;\" src=\"https://www.teahub.io/photos/full/18-184685_2000x1333-hd-wallpaper-beach-hd.jpg\" /><br />sd sdcscs s<br /><br /><br class=\"Apple-interchange-newline\" />\r\n		<!--      EndFragment      -->\r\n	</div>\r\n</div>\r\n<p>\r\n	<meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\" /> \r\n</p>\r\n<p class=\"\" style=\"\">\r\n	<br />\r\n</p>', '1614084478.jpg'),
(6, 'Types of Pools', 'What\'s the best pool for you?', '<p>\r\n	There can be plenty of pool designs everywhere. What one fits your needs? and your occasion? Splashtemp searches 6 different types of pools including:&nbsp;\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	Lane Pool;&nbsp;\r\n</p>\r\n<p>\r\n	Dive Tank;&nbsp;\r\n</p>\r\n<p>\r\n	Wave Pool;\r\n</p>\r\n<p>\r\n	Infant Pool;\r\n</p>\r\n<p>\r\n	Therapy Pool;\r\n</p>\r\n<p>\r\n	And the classic \'General\' pool&nbsp;\r\n</p>', '1614084297.jpg'),
(7, 'Why We Developed SplashTemp.com', 'By Jeremy & Ryan McCrea', '<p>\r\n	We\'re two brothers with young families\r\n</p>', '1615166896.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `change_rooms`
--

CREATE TABLE `change_rooms` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `change_rooms`
--

INSERT INTO `change_rooms` (`id`, `name`) VALUES
(1, 'Barrier free access to pool from reception'),
(2, 'Automatic doors'),
(3, 'Assistive Hearing'),
(4, 'Water Wheelchairs available'),
(5, 'Individual Shower Stalls'),
(6, 'Family/Universal Change Rooms'),
(7, 'Accessible shower instalments');

-- --------------------------------------------------------

--
-- Table structure for table `change_room_facility`
--

CREATE TABLE `change_room_facility` (
  `id` int(11) NOT NULL,
  `facility_id` int(11) NOT NULL,
  `change_room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `change_room_facility`
--

INSERT INTO `change_room_facility` (`id`, `facility_id`, `change_room_id`) VALUES
(48, 39, 1),
(49, 39, 2),
(57, 37, 1),
(58, 37, 2),
(59, 37, 3),
(60, 37, 4),
(61, 37, 5),
(62, 37, 6),
(63, 37, 7),
(64, 26, 1),
(65, 26, 2),
(66, 26, 3),
(67, 26, 5),
(68, 26, 6),
(69, 26, 7),
(70, 35, 1),
(71, 35, 3),
(73, 34, 1),
(74, 34, 2),
(75, 34, 3),
(76, 34, 4),
(77, 34, 5),
(78, 34, 6),
(79, 34, 7),
(80, 41, 1),
(81, 43, 6),
(82, 38, 1),
(83, 31, 1),
(84, 31, 2),
(85, 31, 3),
(86, 31, 4),
(87, 31, 5),
(88, 31, 6),
(89, 31, 7),
(90, 69, 6);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `state_id`) VALUES
(1, 'City 1', 1),
(2, 'City 2', 2),
(3, 'new new new', 2),
(4, 'Calgary', 3),
(5, 'Vancouver', 4),
(6, 'Cochrane', 3),
(7, 'Okotoks', 3),
(8, 'Canmore', 3),
(9, 'Banff', 3),
(10, 'Lake Louise', 3),
(11, 'Field', 4),
(12, 'Kelowna', 4),
(13, 'Airdrie', 3),
(14, 'Red Deer', 3),
(15, 'Edmonton', 3),
(16, 'Fort McMurray', 3),
(17, 'Lethbridge', 3),
(18, 'Medicine Hat', 3),
(19, 'Grande Prairie', 3),
(20, 'Kamloops', 4),
(21, 'Revelstoke', 4),
(22, 'Penticton', 4),
(23, 'Salmon Arm', 4),
(24, 'Whistler', 4),
(25, 'Victoria', 4),
(26, 'Radium', 4),
(27, 'Invermere', 4),
(28, 'Fairmont', 4),
(29, 'Regina', 5),
(30, 'Saskatoon', 5);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(2, 'Country 2'),
(3, 'asdcssd'),
(4, 'Canada');

-- --------------------------------------------------------

--
-- Table structure for table `divings`
--

CREATE TABLE `divings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divings`
--

INSERT INTO `divings` (`id`, `name`) VALUES
(1, 'Flexible 1m'),
(2, 'Flexible 3m'),
(3, 'Platform 1m'),
(4, 'Platform 3m'),
(5, 'Platform 5m'),
(6, 'Platform 7m'),
(7, 'Platform 10m'),
(8, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `diving_pool`
--

CREATE TABLE `diving_pool` (
  `id` int(11) NOT NULL,
  `diving_id` int(11) NOT NULL,
  `pool_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diving_pool`
--

INSERT INTO `diving_pool` (`id`, `diving_id`, `pool_id`) VALUES
(7, 1, 48),
(8, 1, 44),
(9, 2, 44),
(12, 4, 52),
(13, 6, 52);

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `operator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotel` int(11) DEFAULT NULL,
  `day_available` tinyint(1) DEFAULT '1',
  `type_id` int(11) DEFAULT NULL,
  `fitness_area` tinyint(1) DEFAULT '1',
  `other_multi_recreation` tinyint(1) DEFAULT '1',
  `viewing_area` tinyint(1) DEFAULT '1',
  `babysitting` tinyint(1) DEFAULT '1',
  `swim_diapers` tinyint(1) DEFAULT '1',
  `swim_program` tinyint(1) DEFAULT '1',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gps_location` text COLLATE utf8mb4_unicode_ci,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_comments` text COLLATE utf8mb4_unicode_ci,
  `age_info_id` int(11) DEFAULT NULL,
  `family_friendly` float DEFAULT NULL,
  `party_atmosphere` float DEFAULT NULL,
  `relaxation` float DEFAULT NULL,
  `accessibility` float DEFAULT NULL,
  `main_photo` text COLLATE utf8mb4_unicode_ci,
  `many_photos` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `name`, `city_id`, `operator`, `hotel`, `day_available`, `type_id`, `fitness_area`, `other_multi_recreation`, `viewing_area`, `babysitting`, `swim_diapers`, `swim_program`, `address`, `phone_number`, `gps_location`, `website`, `other_comments`, `age_info_id`, `family_friendly`, `party_atmosphere`, `relaxation`, `accessibility`, `main_photo`, `many_photos`) VALUES
(26, 'Brookfield Residential YMCA at Seton', 4, 'YMCA', 1, 1, NULL, 1, 1, 1, 1, 1, 1, '4995 Market Street SE', '(403) 351-5262', '{\"lat\":50.87913626047332,\"lng\":-113.94450417327887}', 'https://www.ymcacalgary.org/program-descriptions/locations/brookfield-residential-ymca-at-seton/', NULL, 22, 9, NULL, 6, 10, '1616557160.JPG', '[\"0iBVjKsmucI.JPG\",\"1IzidMhQjAa.JPG\"]'),
(28, 'Melcor YMCA at Crowfoot', 4, 'YMCA', 1, 1, NULL, 1, 1, 1, 1, 1, 1, '8100 John Laurie Blvd NW', '(403) 547-6576', '{\"lat\":51.1290004513889,\"lng\":-114.1955374794007}', 'https://www.ymcacalgary.org/program-descriptions/locations/crowfoot/', NULL, 24, NULL, NULL, NULL, NULL, '1618266342.JPG', '[]'),
(29, 'Remington YMCA', 4, 'YMCA', 1, 1, NULL, 1, 1, 1, 1, 1, 1, '108 Quarry Park Rd SE', '(403) 351-6678', '{\"lat\":45.43656436203468,\"lng\":-75.56174984741217}', 'https://www.ymcacalgary.org/program-descriptions/locations/quarry-park/', NULL, 25, NULL, NULL, NULL, NULL, '1618266798.JPG', '[]'),
(30, 'Saddletowne YMCA', 4, 'YMCA', 1, 1, NULL, 1, 1, 1, 1, 1, 1, '180 - 7556 Falconridge Blvd NE', '(403) 237-2393', '{\"lat\":45.43656436203468,\"lng\":-75.56174984741217}', 'https://www.ymcacalgary.org/program-descriptions/locations/saddletowne/', NULL, 26, NULL, NULL, NULL, NULL, '', '[]'),
(31, 'Shane Homes YMCA at Rocky Ridge', 4, 'YMCA', 1, 1, NULL, 1, 1, 1, 1, 1, 1, '11300 Rocky Ridge Rd NW', '(403) 351-6673', '{\"lat\":51.157364959307614,\"lng\":-114.23182240295417}', 'https://www.ymcacalgary.org/program-descriptions/locations/shane-homes-ymca-at-rocky-ridge/', NULL, 27, 9, NULL, 6, 10, '1620000572.JPG', '[]'),
(32, 'Shawnessy YMCA', 4, 'YMCA', 1, 1, NULL, 1, 1, 1, 1, 1, 1, '400 - 333 Shawville Blvd SE', '(403) 256-5533', '{\"lat\":45.43656436203468,\"lng\":-75.56174984741217}', 'https://www.ymcacalgary.org/program-descriptions/locations/shawnessy/', NULL, 28, NULL, NULL, NULL, NULL, '', '[]'),
(33, 'Bowview Outdoor Pool', 4, 'Calgary Outdoor Swimming Pools Association', 1, 1, NULL, 0, 0, 1, 0, 1, 1, '1910 6 Ave. NW', '403-221-3571', '{\"lat\":45.43656436203468,\"lng\":-75.56174984741217}', 'https://www.calgaryoutdoorpools.ca/', NULL, 29, NULL, NULL, NULL, NULL, '', '[]'),
(34, 'Sir Winston Churchill Aquatic & Recreation Centre', 4, 'City of Calgary', 1, 1, NULL, 1, 0, 1, 0, 1, 1, '1520 Northmount Dr. NW', '403-268-2489', '{\"lat\":51.09687246482947,\"lng\":-114.13779488372809}', 'https://www.calgary.ca/csps/recreation/pools/sir-winston-churchill.html', NULL, 30, 6, NULL, 7, 10, '1610905880.PNG', '[\"0lf2HO311Xz.PNG\",\"1W3mObTnrlA.PNG\",\"26p3KowuUXT.PNG\",\"3gV4edZlMob.PNG\"]'),
(35, 'Shouldice Aquatic Centre', 4, 'City of Calgary', 1, 1, NULL, 0, 0, 0, 0, 1, 1, '5303 Bowness Rd. NW', '403-268-2489', '{\"lat\":51.07701873806915,\"lng\":-114.17174092102057}', 'https://www.calgary.ca/csps/recreation/pools/shouldice/facility-information-and-hours-shouldice.html', NULL, 31, 6, NULL, 6, 8, '1616558124.JPG', '[\"0F5T7DY1dUE.jpeg\",\"1RyjeMaLjII.jpg\",\"0xv1u8NSMMz.JPG\",\"1FgtOQerOaS.JPG\",\"2rbArNqmf3p.JPG\",\"39nqRjQOBAa.PNG\",\"4dYcesMiuaA.jpg\",\"5PwmALYnYa4.JPG\"]'),
(36, 'Bob Bahan Aquatic & Fitness Centre', 4, 'City of Calgary', 1, 1, NULL, 0, 0, 0, 0, 1, 1, '4812 14 Ave. SE', '403-268-2489', '{\"lat\":45.43656436203468,\"lng\":-75.56174984741217}', 'https://www.calgary.ca/csps/recreation/pools/bob-bahan.html', NULL, 32, NULL, NULL, NULL, NULL, '1610906057.PNG', '[\"0QsZH0O7S2f.PNG\",\"15JoWLadhYL.PNG\",\"2GKT56RjrXW.PNG\"]'),
(37, 'Canyon Meadows Aquatic & Fitness Centre', 4, 'City of Calgary', 1, 1, NULL, 1, 0, 0, 0, 1, 1, '89 Canova rd SW', '403-268-2489', '{\"lat\":50.94834978945123,\"lng\":-114.08951512146002}', 'https://www.calgary.ca/csps/recreation/pools/canyon-meadows.html', NULL, 33, 7, NULL, 6, 9, '1616555872.PNG', '[\"0BymPxiaDtU.PNG\",\"15dLP4Sxesg.PNG\",\"29EDC6oanY0.PNG\",\"3O0kahL0kId.PNG\",\"4DNUfUAImAk.JPG\"]'),
(38, 'Banff Ptarmigan Inn', 9, 'Banff Lodging Company', 1, 0, NULL, 0, 0, 0, 0, 0, 0, '337 Banff Ave', '1-800-661-8310', NULL, 'https://banffptarmiganinn.com/', NULL, 34, 3, NULL, 7, 6, '1613696855.PNG', '[\"07JcfEdDj5a.PNG\"]'),
(39, 'Hotel Arts', 4, 'Hotel Arts', 1, 1, NULL, 1, 0, 1, 0, 0, 0, '119 -12 Avenue SW', '403-266-4611', NULL, 'https://www.hotelarts.ca/', 'Restaurant patio with poolside food and bar/beverage service. Outside guests welcome as well.', 35, 5, 9, 9, 8, '1616555273.PNG', '[\"0CRabRyZMXa.PNG\",\"18L9cOU5ICD.PNG\",\"2YeRnW80Ezd.PNG\"]'),
(41, 'Stoney Nakoda Resort & Casino', 8, 'Stoney Nakoda Resort & Casino', 1, 0, NULL, 0, 0, 0, 0, 0, 0, '888 Nakoda Way, Kananaskis', '(403) 881-2830', '{\"lat\":51.103555848050235,\"lng\":-115.0150274353028}', 'https://www.stoneynakodaresort.com/', NULL, 37, 8, NULL, 7, 7, '1616559022.PNG', '[]'),
(42, 'Quality Resort Chateau Canmore', 8, 'Quality Resort Chateau Canmore', 1, 0, NULL, 1, 0, 0, 0, 0, 0, '1718 Bow Valley Trail', '403-678-6699', '{\"lat\":51.09939905896613,\"lng\":-115.36051741409308}', 'https://www.chateaucanmore.com/', 'Fitness area above indoor pool, with outdoor hot tub.', 38, 2, 2, 7, 3, '1618254386.PNG', '[]'),
(43, 'Banff Springs', 9, 'Fairmont', 1, 0, NULL, 1, 0, 1, 1, 0, 0, '405 Spray Ave', '(403) 762.4499', '{\"lat\":51.16438944786853,\"lng\":-115.56181183624274}', 'https://www.fairmont.com/banff-springs/', 'Pool in the hotel, not to be confused for the Willow Stream Spa. Wheelchair Accessibility is available and hotel should be contacted prior to attending.', 39, 7, 6, 8, 8, '1618256160.PNG', '[]'),
(44, 'Buffalo Mountain Lodge', 9, 'Canadian Rocky Mountain Resorts', 1, 0, NULL, 0, 0, 0, 0, 0, 0, '700 Tunnel Mountain Rd', '+18006611367', '{\"lat\":51.18363402533909,\"lng\":-115.55160871315009}', 'https://crmr.com/resorts/buffalo-mountain/', 'Outdoor hot tub', 40, 3, 6, 9, 2, '1618256801.PNG', '[]'),
(45, 'Willow Stream Spa at Banff Springs', 9, 'Fairmont', 1, 1, NULL, 0, 0, 0, 0, 0, 0, '405 Spray Ave', '(403) 762-1772', '{\"lat\":51.16430871269733,\"lng\":-115.56189766693122}', 'www.fairmont.com/banff-springs/spa/the-fairmont-banff-springs-spa/', 'Adult Day Spa located within the Fairmont Banff Springs Hotel', 41, 0, 2, 10, NULL, '1618257595.PNG', '[]'),
(46, 'Canalta Lodge', 9, 'Canalta Lodge', 1, 0, NULL, 0, 0, 1, 0, 0, 0, '545 Banff Ave', '1-403-762-2112', '{\"lat\":51.18524130043144,\"lng\":-115.55799237060553}', 'https://canaltalodge.com/welcome/', 'Outdoor hot tubs', 42, 4, 6, 8, 4, '1618258009.PNG', '[]'),
(47, 'Coast Canmore Hotel & Conference Center', 8, 'Coast Hotels', 1, 0, NULL, 1, 0, 0, 0, 0, 0, '511 Bow Valley Trail', '403.678.3625', '{\"lat\":51.08733080034343,\"lng\":-115.3451751785279}', 'https://www.coasthotels.com/hotels/ab/canmore/coast-canmore-hotel-and-conference-centre/', 'Hotel', 43, 6, 3, 4, 7, '1618258796.PNG', '[]'),
(48, 'Deer Lodge Lake Louise', 9, 'Canadian Rocky Mountain Resorts', 1, 0, NULL, 0, 0, 1, 0, 0, 0, '109 Lake Louise Dr', '403.522.3991', '{\"lat\":51.417201471683285,\"lng\":-116.20893231201178}', 'https://crmr.com/resorts/deer-lodge/', 'Outdoor Hot Tub in Lake Louise', 44, 5, 6, 7, 4, '1618259494.PNG', '[]'),
(49, 'Emerald Lake Lodge', 5, 'Canadian Rocky Mountain Resorts', 1, 0, NULL, 0, 0, 1, 0, 0, 0, '1 Emerald Lake Rd', '12503436321', '{\"lat\":51.440025409464866,\"lng\":-116.53852215576178}', 'https://crmr.com/resorts/emerald-lake/', 'Outdoor hot tub in Field', 45, 4, 4, 8, 4, '1618260482.PNG', '[]'),
(50, 'Banff Park Lodge', 9, 'Banff Park Lodge', 1, 0, NULL, 1, 0, 1, 0, 0, 0, '222 Lynx St', '+14037624433', '{\"lat\":51.17789714302268,\"lng\":-115.57556083965308}', 'http://www.banffparklodge.com/', 'Hotel', 46, 4, 6, 6, 9, '1618261423.PNG', '[]'),
(51, 'Royal Canadian Lodge Banff', 9, 'Royal Canadian Lodge', 1, 0, NULL, 1, 0, 0, 0, 0, 0, '459 Banff Ave', '+14037623307', '{\"lat\":51.18337678887162,\"lng\":-115.56402197647101}', 'https://www.royalcanadianlodge.com/', 'Hotel', 47, 2, 6, 8, 6, '', '[]'),
(52, 'Irwins Mountain Inn', 9, 'Banff Lodging Company', 1, 0, NULL, 1, 0, 0, 0, 0, 0, '429 Banff Ave', '14037624566', '{\"lat\":51.182228454322065,\"lng\":-115.5664681510926}', 'https://irwinsmountaininn.com/', 'Hot tub only', 48, 2, 2, 8, 4, '1618262196.PNG', '[]'),
(53, 'Paradise Resort Club and Spa', 8, 'Paradise Resort Club', 1, 0, NULL, 1, 0, 1, 0, 0, 0, '109 1151 Sidney St', '1.403.675.7862', NULL, 'https://www.paradiseresortclub.com/', 'Hotel', 49, 9, 4, 6, 8, '1618431191.PNG', '[]'),
(55, 'Paradise Resort Club and Spa', 8, 'Paradise Resort Club', 1, 0, NULL, 1, 0, 1, 0, 0, 0, '109 1151 Sidney St', '1.403.675.7862', NULL, 'https://www.paradiseresortclub.com/', 'Hotel', 51, 9, 4, 6, 8, '1618431448.PNG', '[]'),
(56, 'Banff Caribou Lodge', 9, 'Banff Caribou Lodge', 1, 0, NULL, 0, 0, 0, 0, 0, 0, '521 Banff Ave', '1 (800) 563-8764', '{\"lat\":51.18424600698143,\"lng\":-115.56050291824347}', 'https://banffcariboulodge.com/location/', 'Hotel', 52, NULL, NULL, NULL, NULL, '1618431666.PNG', '[]'),
(57, 'Banff Ptarmigan Inn', 9, 'Banff Ptarmigan Inn', 1, 0, NULL, 0, 0, 0, 0, 0, 0, '337 Banff Ave', '1 (800) 661-8310', '{\"lat\":51.18019063649831,\"lng\":-115.56984237003333}', 'https://banffptarmiganinn.com', 'Hotel', 53, 5, 4, 7, 6, '1618432333.PNG', '[]'),
(58, 'Hidden Ridge Resort', 9, 'Banff Lodging Company', 1, 0, NULL, 0, 0, 1, 1, 0, 0, '901 Hidden Ridge Way', '1 800-661-1372', '{\"lat\":51.188119460545984,\"lng\":-115.54623356628424}', 'https://banffhiddenridge.com/', 'Hotel with child play area located within the hotel.', 54, 8, 6, 8.5, 7, '1618433213.PNG', '[]'),
(59, 'Moose Hotel', 9, 'Banff Lodging Company', 1, 0, NULL, 1, 0, 0, 0, 0, 0, '345 Banff Ave', '1 866-379-0021', '{\"lat\":51.180681604145384,\"lng\":-115.56936493682868}', 'https://moosehotelandsuites.com/', 'Hotel', 55, 6, 5, 7, 6, '1618433616.PNG', '[]'),
(60, 'Rocky Mountain Resort', 9, 'Best of Banff', 1, 0, NULL, 1, 1, 0, 0, 0, 0, '1029 Banff Ave', '1 (866) 474-0426', '{\"lat\":51.199872323281326,\"lng\":-115.53589096832286}', 'https://rockymountainresort.com/', 'Hotel', 56, 6, 5, 7, 6, '1618434609.PNG', '[]'),
(61, 'Rocky Mountain Ski Lodge', 8, 'Canmore Lodging Company', 1, 0, NULL, 0, 0, 0, 0, 0, 0, '1711 Bow Valley Trail', '(403) 762-2642', '{\"lat\":51.09797070804536,\"lng\":-115.35699835586554}', 'https://canmoreskilodge.com/', 'Hotel', 57, 2, 3, 7, 1.6, '1618599648.PNG', '[]'),
(62, 'The Fox Hotel and Suites', 9, 'Best of Banff', 1, 0, NULL, 1, 0, 0, 0, 0, 0, '461 Banff Ave', '+18664740425', '{\"lat\":51.18341209592245,\"lng\":-115.56311002540595}', 'https://foxhotelandsuites.com/', 'Hotel', 58, 5, 4, 7, 7, '1618600077.PNG', '[]'),
(63, 'Tunnel Mountain Resort', 9, 'Best of Banff', 1, 0, NULL, 0, 0, 0, 0, 0, 0, '502 Tunnel Mountain Rd', '1 (866) 474-0427', '{\"lat\":51.18469994416011,\"lng\":-115.55048754978186}', 'https://tunnelmountain.com/', 'Hotel', 59, 6, 4, 7, 6, '1618600417.PNG', '[]'),
(64, 'Aspen Lodge', 9, 'Best of Banff', 1, 0, NULL, 0, 0, 0, 0, 0, 0, '401 Banff Ave', '1-403-762-4401', '{\"lat\":51.181381055871874,\"lng\":-115.56880703735358}', 'http://www.banffaspenlodge.com/', 'Hotel', 60, 3, 4, 7, 4, '1618601124.PNG', '[]'),
(65, 'Banff Inn', 9, 'Best of Banff', 1, 0, NULL, 0, 0, 0, 0, 0, 0, '501 Banff Ave', '(403) 762-8844', '{\"lat\":51.18368110113817,\"lng\":-115.56219807434088}', 'https://banffinn.com/', 'Hotel', 61, 5, 4, 7, 7, '1618601536.PNG', '[]'),
(66, 'Red Carpet Inn', 9, 'Best of Banff', 1, 0, NULL, 0, 0, 0, 0, 0, 0, '425 Banff Ave', '1 866 474-0417', '{\"lat\":51.18210403568404,\"lng\":-115.56701532173163}', 'https://banffredcarpet.com/', 'Hotel', 62, 4, 5, 6, 7, '1618602194.PNG', '[]'),
(67, 'Charltons Banff', 9, 'Best of Banff', 1, 0, NULL, 0, 0, 1, 0, 0, 0, '513 Banff Ave', '+18006611225', '{\"lat\":51.18404425568935,\"lng\":-115.56159725952155}', 'https://www.charltonsbanff.com/', 'Hotel', 63, 7, 8, 6, 8, '1618603288.PNG', '[]'),
(68, 'Copperstone Resort', 8, 'Copperstone Resort', 1, 0, NULL, 0, 0, 0, 0, 0, 0, '250 2 Ave', '+14036780303', '{\"lat\":51.04045643748362,\"lng\":-115.26226273345954}', 'copperstoneresort.com', 'Hotel in Dead Man\'s Flats', 64, 6, 6, 4, 7, '1618603673.PNG', '[]'),
(69, 'Acadia Aquatic & Fitness Centre', 4, 'City of Calgary', 1, 1, NULL, 1, 1, 1, 0, 0, 1, '9009 Fairmount Dr SE', '403-268-2489', '{\"lat\":50.973528449754625,\"lng\":-114.06023612785346}', 'https://www.calgary.ca/csps/recreation/pools/acadia.html', NULL, 65, 7, 3, 3, 7, '1620241919.PNG', '[]');

-- --------------------------------------------------------

--
-- Table structure for table `facility_food`
--

CREATE TABLE `facility_food` (
  `id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `facility_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facility_food`
--

INSERT INTO `facility_food` (`id`, `food_id`, `facility_id`) VALUES
(45, 1, 39),
(46, 2, 39),
(47, 4, 39),
(48, 5, 39),
(50, 3, 37),
(51, 3, 26),
(52, 4, 26),
(54, 3, 35),
(56, 3, 34),
(57, 4, 41),
(58, 3, 42),
(59, 3, 28),
(60, 3, 38),
(61, 3, 31);

-- --------------------------------------------------------

--
-- Table structure for table `facility_photos`
--

CREATE TABLE `facility_photos` (
  `id` int(11) NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facility_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facility_photos`
--

INSERT INTO `facility_photos` (`id`, `url`, `facility_id`) VALUES
(28, '0iA41Yu3qJ8.PNG', 39),
(29, '1dD1HAmbPQU.PNG', 39),
(30, '2UHqB4zhjhY.PNG', 39),
(31, '3nabQjjvT67.PNG', 39),
(32, '048kqJkf2Kj.PNG', 37),
(33, '1wxo67AYz1Y.PNG', 37),
(34, '2M8fiFYVzvk.PNG', 37),
(35, '3odXYnVKm91.JPG', 37),
(36, '0HDhXWqixeA.JPG', 26),
(37, '1t7woSXRfWP.JPG', 26),
(38, '2uWOAF86nSJ.JPG', 26),
(39, '3bwHn8fsmAf.JPG', 26),
(40, '43SuZD4OyCk.JPG', 26),
(41, '5I10WWthvQO.JPG', 26),
(42, '0jKyDoOJCEN.JPG', 35),
(43, '1TpYCm5USyb.JPG', 35),
(44, '2eDSow7qcAn.JPG', 35),
(45, '3I3RuhiIzJL.JPG', 35),
(46, '40ldiwb2r5G.PNG', 35),
(47, '5edIe0ApG8B.jpeg', 35),
(48, '61jrIsGQ6Zo.jpg', 35),
(49, '75aZ1PdFo3X.JPG', 35),
(50, '05ee2CcShlU.PNG', 38),
(51, '1cueZoZNUBp.PNG', 38),
(52, '06lZ59Tki8B.PNG', 34),
(53, '1u8hppLCv1t.PNG', 34),
(54, '29IwdH1fGXp.PNG', 34),
(55, '3GfuaoWIP3n.PNG', 34),
(56, '4B9B2XyLiYl.PNG', 34),
(57, '0plCl2ljS0W.PNG', 41),
(58, '1aoN4hoOWUe.PNG', 41),
(59, '20DlEWIhBf5.PNG', 41),
(60, '0rdjOBYo5aG.PNG', 42),
(61, '1KEMzCJnfaU.PNG', 42),
(62, '0CUlcdTdrWW.PNG', 43),
(63, '1rBGQye8gIc.PNG', 43),
(64, '21JuwoNde6F.PNG', 43),
(65, '3hUdOQUMdgr.PNG', 43),
(66, '4arx9QjLBOt.PNG', 43),
(67, '04dARhutDQ7.PNG', 44),
(68, '14Vh5xuOqiH.PNG', 44),
(69, '20IUijqAYZK.PNG', 44),
(70, '0DRPT9PBXil.PNG', 45),
(71, '1DwdkZg3lcS.PNG', 45),
(72, '2P3LB5yq4lG.PNG', 45),
(73, '0EJ2rTsfYFq.PNG', 46),
(74, '1BdK5Q7yz70.PNG', 46),
(75, '2CI7zkexhGF.PNG', 46),
(76, '07I0NWWd1SD.PNG', 47),
(77, '11WS8i82mtO.PNG', 47),
(78, '2nMC6WRudAY.PNG', 47),
(79, '31Her3SWE8V.PNG', 47),
(80, '0UOudBTNuzS.PNG', 48),
(81, '0RbQzt2F4OQ.PNG', 49),
(82, '1Io6elCSzIY.PNG', 49),
(83, '2nU3iyATjKs.PNG', 49),
(84, '04sJKgrEpSu.PNG', 50),
(85, '1rxAp6t2Mxi.PNG', 50),
(86, '2hkXgbFfzLc.PNG', 50),
(87, '35pqN4BPjvQ.PNG', 50),
(88, '0BsmQtdF7Y7.PNG', 51),
(89, '1OA8za4GTWB.PNG', 51),
(90, '2hmnNCw4DHW.PNG', 51),
(91, '3N4kYZKZXO1.PNG', 51),
(92, '0djQZiRoSXT.PNG', 52),
(93, '13Ojqy0JbOU.PNG', 52),
(94, '0EF6eSprQaf.JPG', 29),
(95, '1KV7RHUEayH.JPG', 29),
(96, '2bLuuLXfP4L.JPG', 29),
(97, '3L7K61eWsMi.JPG', 29),
(98, '4No29BBKUEo.JPG', 29),
(99, '03SBdfol9oY.PNG', 53),
(100, '1NgckyqGxOX.PNG', 53),
(104, '0llZTlGPD51.PNG', 56),
(105, '1O1ZBQtg1ms.PNG', 56),
(106, '24YNT2LJPSI.PNG', 56),
(107, '0Y808hBskyJ.PNG', 57),
(108, '0FwdXMKuBd9.PNG', 58),
(109, '1xLNyLNw6CW.PNG', 58),
(110, '2pPrsrs6fy8.PNG', 58),
(111, '3cP04YbD6N5.PNG', 58),
(112, '49TMojkW3Fb.PNG', 58),
(113, '0hAXYzTRf74.PNG', 59),
(114, '13RBce1OrLq.PNG', 59),
(115, '252OnevV4Oa.PNG', 59),
(116, '3IQldCyV4Zu.PNG', 59),
(117, '4ld8PGnpoKx.PNG', 59),
(118, '0kAFhBPxcvB.PNG', 60),
(119, '1ADNkBCshGr.PNG', 60),
(120, '2Dp5objCQOi.PNG', 60),
(121, '0AgkSlgSzjp.PNG', 61),
(122, '0IEABfYmpXA.PNG', 62),
(123, '1oOMMdcL1ss.PNG', 62),
(124, '2t8eMTVij8G.PNG', 62),
(125, '0SOH7BF0GT1.PNG', 63),
(126, '1NE53ExG0ZI.PNG', 63),
(127, '29AcLKEXPN2.PNG', 63),
(128, '0xIMIYlEE5k.PNG', 64),
(129, '1OMhxM2HZGr.PNG', 64),
(130, '253rqr3OHrv.PNG', 64),
(131, '31AtBGGk1IN.PNG', 64),
(132, '0cEfAe9hIPS.PNG', 65),
(133, '1I6P1GfYatL.PNG', 65),
(134, '2pI5F1Pt6xp.PNG', 65),
(135, '3NW31MDjQ0e.PNG', 65),
(136, '4SljLVXXDKm.PNG', 65),
(137, '0Q9WBtt5Neo.PNG', 66),
(138, '1E4kgQ9hnbC.PNG', 66),
(139, '06nPa2ApT8Q.PNG', 67),
(140, '1kcYi9vvI8n.PNG', 67),
(141, '2dBJG596vCo.PNG', 67),
(142, '3zHkyPFGCvZ.PNG', 67),
(143, '4pYj6ORObUq.PNG', 67),
(144, '0xUxFW0gbSR.PNG', 68),
(145, '10OXbeXShtJ.PNG', 68),
(146, '0IWxgIRElw4.JPG', 31),
(147, '1sqCsrw6geZ.JPG', 31),
(148, '29U9pKStPjx.JPG', 31),
(149, '3D9OBcGdbaG.JPG', 31),
(150, '4dvnYQqHt63.JPG', 31),
(151, '5bnunRw9fjm.JPG', 31),
(152, '6mk6KlSQBNJ.JPG', 31),
(153, '7iRgmKA8pCJ.JPG', 31),
(154, '8jnC6JdA15n.JPG', 31),
(155, '0IMTVRdTMOH.PNG', 69),
(156, '1kh5HpdQbbD.PNG', 69);

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `name`) VALUES
(1, 'Toys/Mats Available'),
(2, 'Ball Swing'),
(3, 'Waterfall'),
(4, 'Lazy River'),
(5, 'Spray Canons'),
(6, 'Water Bucket'),
(7, 'Waves'),
(8, 'Tubes'),
(9, 'Flow/Surf Rider'),
(10, 'Climbing Wall'),
(11, 'Small Slides'),
(12, 'Hot Tub'),
(13, 'Steam Room'),
(14, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `features_of_waterslides`
--

CREATE TABLE `features_of_waterslides` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features_of_waterslides`
--

INSERT INTO `features_of_waterslides` (`id`, `name`) VALUES
(1, 'Tunnel'),
(2, 'Trains Allowed'),
(3, 'Steep Drops'),
(4, 'Inverted '),
(5, 'Requires Tube/Board');

-- --------------------------------------------------------

--
-- Table structure for table `feature_of_waterslide_waterslide`
--

CREATE TABLE `feature_of_waterslide_waterslide` (
  `id` int(11) NOT NULL,
  `feature_id` int(11) NOT NULL,
  `waterslide_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feature_of_waterslide_waterslide`
--

INSERT INTO `feature_of_waterslide_waterslide` (`id`, `feature_id`, `waterslide_id`) VALUES
(1, 11, 1),
(2, 11, 3),
(3, 12, 1),
(4, 12, 2),
(5, 12, 3),
(6, 12, 4),
(7, 12, 5);

-- --------------------------------------------------------

--
-- Table structure for table `feature_pool`
--

CREATE TABLE `feature_pool` (
  `id` int(11) NOT NULL,
  `feature_id` int(11) NOT NULL,
  `pool_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feature_pool`
--

INSERT INTO `feature_pool` (`id`, `feature_id`, `pool_id`) VALUES
(14, 1, 48),
(15, 12, 48),
(16, 13, 48),
(19, 1, 44),
(20, 11, 44),
(25, 1, 43),
(26, 2, 43),
(27, 11, 43),
(28, 12, 45),
(33, 1, 47),
(34, 11, 47),
(35, 12, 47),
(36, 13, 47),
(37, 12, 49),
(38, 7, 50),
(39, 1, 51),
(40, 7, 51),
(41, 9, 51),
(45, 4, 52),
(46, 7, 52),
(47, 11, 52),
(48, 13, 53);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`) VALUES
(1, 'Poolside bar service'),
(2, 'Alcohol Allowed'),
(3, 'Strict no Alcohol policy'),
(4, 'Lounge Chairs/Tables on Deck'),
(5, 'Pool Side Menu');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_09_11_094236_create_articles_table', 1),
(4, '2014_10_12_000000_create_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@pool.com', '$2y$10$hS52RLDcxHu62kJNXPmUpeNMw2EfBABvlBLvr1tB79JcR/GF//MLO', '2020-11-06 03:08:26'),
('admin@pool.com', '$2y$10$hS52RLDcxHu62kJNXPmUpeNMw2EfBABvlBLvr1tB79JcR/GF//MLO', '2020-11-06 03:08:26');

-- --------------------------------------------------------

--
-- Table structure for table `pools`
--

CREATE TABLE `pools` (
  `id` int(11) NOT NULL,
  `facility_id` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `indoor_outdoor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heated` tinyint(3) NOT NULL DEFAULT '0',
  `targeted_temperature` float DEFAULT NULL,
  `measured_temperature` float DEFAULT NULL,
  `min_depth` float DEFAULT NULL,
  `max_depth` float DEFAULT NULL,
  `max_length` float DEFAULT NULL,
  `width_length` float DEFAULT NULL,
  `bather_load` float DEFAULT NULL,
  `hotel` int(11) DEFAULT '1' COMMENT 'hotel => 1 public => 2',
  `ropped_off_lanes` float DEFAULT NULL,
  `restrictions` text COLLATE utf8mb4_unicode_ci,
  `comments` text COLLATE utf8mb4_unicode_ci,
  `main_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pools`
--

INSERT INTO `pools` (`id`, `facility_id`, `description`, `details`, `indoor_outdoor`, `entry`, `heated`, `targeted_temperature`, `measured_temperature`, `min_depth`, `max_depth`, `max_length`, `width_length`, `bather_load`, `hotel`, `ropped_off_lanes`, `restrictions`, `comments`, `main_photo`) VALUES
(40, 26, 'general', NULL, 'indoor', 'stairs', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '1607817132.JPG'),
(41, 26, 'infant', NULL, 'indoor', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, '1607817351.JPG'),
(42, 28, 'lane', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, '1610899454.JPG'),
(43, 35, 'lane', NULL, 'indoor', 'stairs', 1, 28, NULL, 1.1, NULL, 25, NULL, NULL, 2, 5, NULL, NULL, '1614523802.JPG'),
(44, 35, 'dive', NULL, 'indoor', 'ladder_only', 1, 28, NULL, 3, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, '1614523471.PNG'),
(45, 38, 'hot_tub', '2 Hot tubs', 'indoor', 'stairs', 0, NULL, 38, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, ''),
(46, 39, 'general', NULL, 'outdoor', 'stairs', 1, 29, NULL, 1.2, NULL, NULL, NULL, NULL, 1, NULL, 'Open at 7:00 am', NULL, '1615166611.PNG'),
(47, 37, 'lane', NULL, 'indoor', 'stairs', 1, NULL, NULL, NULL, NULL, 25, NULL, NULL, 2, NULL, NULL, NULL, NULL),
(48, 37, 'dive', NULL, 'indoor', 'lift_pod', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL),
(49, 41, 'general', NULL, 'indoor', 'stairs', 1, NULL, NULL, NULL, 1.1, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(50, 31, 'lane', NULL, 'indoor', 'stairs', 1, NULL, 28, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL),
(51, 31, 'infant', NULL, 'indoor', 'beach_entry', 0, NULL, 30, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL),
(52, 26, 'therapy', 'New brookfield', 'indoor', 'stairs', 1, NULL, 454, 2, NULL, 65, 45, NULL, 2, 234, 'fgbfg', 'fbdf', NULL),
(53, 41, 'lane', 'test', NULL, 'stairs', 0, NULL, 23, 23, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pool_waterslide`
--

CREATE TABLE `pool_waterslide` (
  `id` int(11) NOT NULL,
  `waterslide_id` int(11) NOT NULL,
  `pool_id` int(11) NOT NULL,
  `count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pool_waterslide`
--

INSERT INTO `pool_waterslide` (`id`, `waterslide_id`, `pool_id`, `count`) VALUES
(19, 1, 48, 333),
(20, 4, 48, 100);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `code`, `country_id`) VALUES
(1, 'State 1', 'ST1', 3),
(2, 'State 2', 'ST2', 2),
(3, 'Alberta', NULL, 4),
(4, 'British Columbia', NULL, 4),
(5, 'Saskatchewan', NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `api_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `api_token`) VALUES
(6, 'Admin', 'admin@pool.com', '$2y$10$k/MqzAtCspWf.hfpLvcWQ.c7rDWYrIvx61oIOYUn5O0HtTH0gJsPi', 'p3K7FDCoWiri5lcYUBGWDHYMCV0ZD0sCPci8JbeMPhSDZ8IoTUFODcCaWaHm', '2020-11-06 04:21:21', '2020-11-06 04:21:21', 'r0p689h40XjJGKAcddKaswtOZf1kJ6AjXMpVcsol0E2tvNxXmDepENCw1SOcibgIHxekxY9xDq0eNCq8');

-- --------------------------------------------------------

--
-- Table structure for table `waterslides`
--

CREATE TABLE `waterslides` (
  `id` int(11) NOT NULL,
  `facility_id` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_height` float DEFAULT NULL,
  `min_age` int(11) DEFAULT NULL,
  `outlet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_height` float DEFAULT NULL,
  `speed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requires` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_comments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `waterslides`
--

INSERT INTO `waterslides` (`id`, `facility_id`, `description`, `min_height`, `min_age`, `outlet`, `slide_height`, `speed`, `requires`, `other_comments`, `main_photo`) VALUES
(10, 26, 'Blue Waterslide', 46.5, 8, 'Pool', 1, 'slow', 'Yes', 'gsbdfg000', '1608039169.jpg'),
(11, 41, 'Blue Slide', NULL, NULL, NULL, 6, 'fast', NULL, NULL, NULL),
(12, 28, '1', 1, 8, '1', 3, 'medium', '1', 'asfdad', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `waterslides_type`
--

CREATE TABLE `waterslides_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `waterslides_type`
--

INSERT INTO `waterslides_type` (`id`, `name`) VALUES
(1, 'Number of Waterslides under 3m'),
(2, 'Number of Waterslides 3-5m'),
(3, 'Number of Waterslides 5-10m'),
(4, 'Number of Waterslides 10m+\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `age_infos`
--
ALTER TABLE `age_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `change_rooms`
--
ALTER TABLE `change_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `change_room_facility`
--
ALTER TABLE `change_room_facility`
  ADD PRIMARY KEY (`id`),
  ADD KEY `facility_id` (`facility_id`),
  ADD KEY `change_room_id` (`change_room_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divings`
--
ALTER TABLE `divings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diving_pool`
--
ALTER TABLE `diving_pool`
  ADD PRIMARY KEY (`id`),
  ADD KEY `diving_id` (`diving_id`),
  ADD KEY `pool_id` (`pool_id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `age_info_id` (`age_info_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `facility_food`
--
ALTER TABLE `facility_food`
  ADD PRIMARY KEY (`id`),
  ADD KEY `food_id` (`food_id`),
  ADD KEY `facility_id` (`facility_id`);

--
-- Indexes for table `facility_photos`
--
ALTER TABLE `facility_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fac` (`facility_id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features_of_waterslides`
--
ALTER TABLE `features_of_waterslides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_of_waterslide_waterslide`
--
ALTER TABLE `feature_of_waterslide_waterslide`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feature_id` (`feature_id`),
  ADD KEY `pool_id` (`waterslide_id`);

--
-- Indexes for table `feature_pool`
--
ALTER TABLE `feature_pool`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feature_id` (`feature_id`),
  ADD KEY `pool_id` (`pool_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
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
-- Indexes for table `pools`
--
ALTER TABLE `pools`
  ADD PRIMARY KEY (`id`),
  ADD KEY `facility_id` (`facility_id`);

--
-- Indexes for table `pool_waterslide`
--
ALTER TABLE `pool_waterslide`
  ADD PRIMARY KEY (`id`),
  ADD KEY `waterslide_id` (`waterslide_id`),
  ADD KEY `pool_id` (`pool_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_api_token_unique` (`api_token`);

--
-- Indexes for table `waterslides`
--
ALTER TABLE `waterslides`
  ADD PRIMARY KEY (`id`),
  ADD KEY `facility_id` (`facility_id`);

--
-- Indexes for table `waterslides_type`
--
ALTER TABLE `waterslides_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `age_infos`
--
ALTER TABLE `age_infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `change_rooms`
--
ALTER TABLE `change_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `change_room_facility`
--
ALTER TABLE `change_room_facility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `divings`
--
ALTER TABLE `divings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `diving_pool`
--
ALTER TABLE `diving_pool`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `facility_food`
--
ALTER TABLE `facility_food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `facility_photos`
--
ALTER TABLE `facility_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `features_of_waterslides`
--
ALTER TABLE `features_of_waterslides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feature_of_waterslide_waterslide`
--
ALTER TABLE `feature_of_waterslide_waterslide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feature_pool`
--
ALTER TABLE `feature_pool`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pools`
--
ALTER TABLE `pools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `pool_waterslide`
--
ALTER TABLE `pool_waterslide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `waterslides`
--
ALTER TABLE `waterslides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `waterslides_type`
--
ALTER TABLE `waterslides_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `change_room_facility`
--
ALTER TABLE `change_room_facility`
  ADD CONSTRAINT `change_room_facility_ibfk_1` FOREIGN KEY (`facility_id`) REFERENCES `facilities` (`id`),
  ADD CONSTRAINT `change_room_facility_ibfk_2` FOREIGN KEY (`change_room_id`) REFERENCES `change_rooms` (`id`);

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`);

--
-- Constraints for table `facilities`
--
ALTER TABLE `facilities`
  ADD CONSTRAINT `facilities_ibfk_1` FOREIGN KEY (`age_info_id`) REFERENCES `age_infos` (`id`),
  ADD CONSTRAINT `facilities_ibfk_3` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`);

--
-- Constraints for table `facility_food`
--
ALTER TABLE `facility_food`
  ADD CONSTRAINT `facility_food_ibfk_1` FOREIGN KEY (`food_id`) REFERENCES `food` (`id`),
  ADD CONSTRAINT `facility_food_ibfk_2` FOREIGN KEY (`facility_id`) REFERENCES `facilities` (`id`);

--
-- Constraints for table `feature_pool`
--
ALTER TABLE `feature_pool`
  ADD CONSTRAINT `feature_pool_ibfk_1` FOREIGN KEY (`feature_id`) REFERENCES `features` (`id`),
  ADD CONSTRAINT `feature_pool_ibfk_2` FOREIGN KEY (`pool_id`) REFERENCES `pools` (`id`);

--
-- Constraints for table `pools`
--
ALTER TABLE `pools`
  ADD CONSTRAINT `pools_ibfk_1` FOREIGN KEY (`facility_id`) REFERENCES `facilities` (`id`);

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

--
-- Constraints for table `waterslides`
--
ALTER TABLE `waterslides`
  ADD CONSTRAINT `waterslides_ibfk_1` FOREIGN KEY (`facility_id`) REFERENCES `facilities` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
