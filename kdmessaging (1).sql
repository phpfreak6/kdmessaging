-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 08, 2021 at 01:31 PM
-- Server version: 10.6.5-MariaDB-log
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kdmessaging`
--

-- --------------------------------------------------------

--
-- Table structure for table `aws_regions`
--

CREATE TABLE `aws_regions` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `value` varchar(1000) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `aws_regions`
--

INSERT INTO `aws_regions` (`id`, `title`, `value`, `created_at`, `updated_at`) VALUES
(3, 'Asia Pacific(Sydney)', 'ap-southeast-2', NULL, NULL),
(8, 'Europe(Frankfurt)', 'eu-central-1', NULL, NULL),
(9, 'Europe(Ireland)', 'eu-west-1', NULL, NULL),
(19, 'US East(N.Virginia)', 'us-east-1', NULL, NULL),
(21, 'US West(Oregon)', 'us-west-2', NULL, NULL),
(24, 'Asia Pacific(Mumbai)', 'ap-south-1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(15) NOT NULL,
  `whatsapp_optin_message` varchar(1000) DEFAULT NULL,
  `whatsapp_optout_message` varchar(1000) DEFAULT NULL,
  `sub_account_token` varchar(255) DEFAULT NULL,
  `sub_account_id` varchar(255) DEFAULT NULL,
  `whatsapp_phone_number` varchar(255) DEFAULT NULL,
  `brand_name` varchar(255) DEFAULT NULL,
  `brand_code_name` varchar(255) DEFAULT NULL,
  `brand_logo_file` varchar(1000) DEFAULT NULL,
  `short_code` varchar(255) DEFAULT NULL,
  `daily_sending_limit` varchar(1000) DEFAULT NULL,
  `monthly_sending_limit` varchar(1000) DEFAULT NULL,
  `campaign_redirect_url` varchar(1000) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `whatsapp_optin_message`, `whatsapp_optout_message`, `sub_account_token`, `sub_account_id`, `whatsapp_phone_number`, `brand_name`, `brand_code_name`, `brand_logo_file`, `short_code`, `daily_sending_limit`, `monthly_sending_limit`, `campaign_redirect_url`, `created_at`, `updated_at`) VALUES
(1, 'send \'OPT IN\' for receiving message', 'send \'OPT OUT\' for stop receiving message', '6aa461cce7502dd6f4e1a515560f8693', 'AC66299ba35ff68b3943f64866a6e170dd', '+19564460044', 'Nitin Test Brand', 'Nitin', '1626337851_1251499.jpg', '+19564460044', '200', '2000', 'https://www.iamwhiz.com/test-kdmsg/land', NULL, '2021-08-02 12:50:28'),
(2, 'send \'OPT IN\' for receiving message', 'send \'OPT OUT\' for stop receiving message', '29549d3cf1541f7f589ff327498554e5', 'AC6a780e833890e1bb1332064fe11885d4', '+18884489088', 'Whatsapp Test Brand', 'Whatsapp', NULL, '+19564460044', '200', '250', 'https://www.iamwhiz.com/test-kdmsg/land', NULL, '2021-09-14 19:21:17');

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` int(15) NOT NULL,
  `brand_id` int(15) NOT NULL,
  `campaign_hash` varchar(1000) DEFAULT NULL,
  `campaign_name` varchar(1000) NOT NULL,
  `campaign_channel` varchar(1000) NOT NULL DEFAULT 'sms',
  `prefix_brand_code` tinyint(2) DEFAULT NULL,
  `message` varchar(3000) NOT NULL,
  `call_to_action_url` varchar(1000) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`id`, `brand_id`, `campaign_hash`, `campaign_name`, `campaign_channel`, `prefix_brand_code`, `message`, `call_to_action_url`, `created_at`, `updated_at`) VALUES
(1, 1, 'x5J0Waw6Bd', 'Test Campaign-WA', 'WHATSAPP', 1, 'This is 12th WA test message to test twilio api', 'https://www.cnn.com', NULL, '2021-09-14 18:21:19'),
(2, 2, 'jdQ0v7VZDY', 'Whatsapp Campaign', 'WHATSAPP', 1, 'Your {{1}} code is {{2}}yyuuuytuyu', 'https://www.ft.com', NULL, '2021-09-14 19:21:54'),
(3, 1, '3d70aNVEWz', 'Test Campaign-SMS', 'SMS', 1, 'This is 12th SMS List test message to test twilio api', 'https://www.cnn.com', '2021-09-14 18:08:21', '2021-09-14 18:42:50');

-- --------------------------------------------------------

--
-- Table structure for table `cron_requests`
--

CREATE TABLE `cron_requests` (
  `cron_request_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `campaign_id` int(11) DEFAULT NULL,
  `list_id` int(11) DEFAULT NULL,
  `message_type` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `status` tinyint(2) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `cron_requests`
--

INSERT INTO `cron_requests` (`cron_request_id`, `user_id`, `brand_id`, `campaign_id`, `list_id`, `message_type`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 'PROMOTIONAL', 'test', 2, '2021-08-02 06:50:36', '2021-08-02 06:51:22'),
(2, 1, 1, 1, 1, 'PROMOTIONAL', 'test', 2, '2021-08-02 06:53:26', '2021-08-02 06:53:39'),
(3, 1, 1, 1, 1, 'TRANSACTIONAL', 'live', 2, '2021-08-02 11:26:26', '2021-08-02 11:26:43'),
(4, 1, 1, 1, 1, 'TRANSACTIONAL', 'test', 2, '2021-08-02 12:31:56', '2021-08-02 12:32:36'),
(5, 1, 1, 1, 1, 'TRANSACTIONAL', 'live', 2, '2021-08-02 12:33:11', '2021-08-02 12:33:24'),
(6, 1, 1, 1, 1, 'TRANSACTIONAL', 'live', 1, '2021-08-02 12:40:04', '2021-08-02 12:40:28'),
(7, 1, 1, 1, 1, 'PROMOTIONAL', 'test', 2, '2021-08-02 12:45:30', '2021-08-02 12:45:40'),
(8, 1, 1, 1, 1, 'TRANSACTIONAL', 'live', 2, '2021-08-02 12:51:09', '2021-08-02 12:51:59'),
(9, 1, 1, 1, 2, 'PROMOTIONAL', 'test', 2, '2021-08-03 13:18:47', '2021-08-04 05:53:41'),
(10, 1, 1, 1, 2, 'PROMOTIONAL', 'test', 2, '2021-08-03 13:20:19', '2021-08-04 05:54:22'),
(11, 1, 1, 1, 2, 'TRANSACTIONAL', 'live', 2, '2021-08-04 05:52:11', '2021-08-04 05:54:34'),
(12, 1, 1, 1, 2, 'PROMOTIONAL', 'test', 2, '2021-08-10 18:23:12', '2021-08-11 06:13:19'),
(13, 1, 1, 1, 2, 'PROMOTIONAL', 'test', 2, '2021-08-10 18:23:43', '2021-08-11 06:14:38'),
(14, 1, 1, 1, 1, 'PROMOTIONAL', 'live', 2, '2021-08-11 06:12:57', '2021-08-11 06:14:48'),
(15, 1, 1, 1, 1, 'TRANSACTIONAL', 'live', 2, '2021-08-11 06:26:26', '2021-08-11 06:26:38'),
(16, 1, 1, 1, 2, 'TRANSACTIONAL', 'live', 2, '2021-08-13 16:20:32', '2021-08-13 16:20:41'),
(17, 1, 1, 1, 2, 'PROMOTIONAL', 'test', 2, '2021-08-13 16:21:51', '2021-08-13 16:21:56'),
(18, 1, 1, 1, 2, 'PROMOTIONAL', 'test', 1, '2021-08-13 16:22:54', '2021-08-13 16:22:59'),
(19, 1, 2, 2, 3, 'TRANSACTIONAL', 'live', 2, '2021-08-19 09:36:54', '2021-08-19 09:37:13'),
(20, 1, 2, 2, 3, 'TRANSACTIONAL', 'live', 2, '2021-08-19 09:58:06', '2021-08-19 09:58:17'),
(21, 1, 2, 2, 3, 'TRANSACTIONAL', 'live', 2, '2021-08-19 10:45:37', '2021-08-19 10:46:47'),
(22, 1, 2, 2, 3, 'TRANSACTIONAL', 'live', 2, '2021-08-19 10:54:34', '2021-08-19 10:54:56'),
(23, 1, 2, 2, 3, 'PROMOTIONAL', 'live', 2, '2021-08-19 17:44:45', '2021-08-19 17:46:55'),
(24, 1, 2, 2, 3, 'TRANSACTIONAL', 'live', 2, '2021-08-19 17:45:15', '2021-08-19 17:50:49'),
(25, 1, 2, 2, 3, 'TRANSACTIONAL', 'test', 2, '2021-08-19 17:50:37', '2021-08-20 05:02:39'),
(26, 1, 2, 2, 3, 'TRANSACTIONAL', 'live', 2, '2021-08-20 05:02:17', '2021-08-20 23:16:48'),
(27, 1, 2, 2, 3, 'PROMOTIONAL', 'test', 2, '2021-08-20 23:17:39', '2021-08-20 23:17:51'),
(28, 1, 2, 2, 3, 'PROMOTIONAL', 'test', 2, '2021-08-20 23:25:09', '2021-08-20 23:25:21'),
(29, 1, 2, 2, 3, 'TRANSACTIONAL', 'live', 2, '2021-08-23 04:32:06', '2021-08-23 04:32:27'),
(30, 1, 2, 2, 3, 'TRANSACTIONAL', 'live', 2, '2021-08-23 05:25:17', '2021-08-23 05:25:45'),
(31, 1, 1, 3, 2, 'PROMOTIONAL', 'test', 2, '2021-09-14 18:09:24', '2021-09-14 18:10:25'),
(32, 1, 1, 3, 2, 'PROMOTIONAL', 'test', 2, '2021-09-14 18:11:57', '2021-09-14 18:12:08'),
(33, 1, 1, 1, 2, 'PROMOTIONAL', 'test', 1, '2021-09-14 18:21:49', '2021-09-14 18:22:04'),
(34, 1, 1, 3, 2, 'PROMOTIONAL', 'test', 2, '2021-09-14 18:43:10', '2021-09-14 18:43:18'),
(35, 1, 1, 3, 2, 'PROMOTIONAL', 'test', 2, '2021-09-14 18:44:02', '2021-09-14 18:44:10');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` int(255) NOT NULL,
  `brand_id` int(255) DEFAULT NULL,
  `campaign_id` int(255) DEFAULT NULL,
  `campaign_channel` varchar(500) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `message` varchar(3000) DEFAULT NULL,
  `message_id` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `meta_data` varchar(1000) DEFAULT NULL,
  `delivery_time` datetime DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `sent` tinyint(4) DEFAULT NULL,
  `bad_number` tinyint(4) DEFAULT NULL,
  `opted_out` tinyint(4) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(1000) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `brand_id`, `campaign_id`, `campaign_channel`, `phone_number`, `message`, `message_id`, `price`, `meta_data`, `delivery_time`, `type`, `sent`, `bad_number`, `opted_out`, `status`, `status_message`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'SMS', '+917618666966', 'Nitin> This is test message to test twilio api https://www.google.com/xxxxxxxxxx', 'SM5508c2a8f60d4099b06d4a29eee4a453', 'N/A', NULL, '2021-07-30 06:16:30', 'test', NULL, NULL, NULL, 'QUEUED', NULL, '2021-07-30 06:16:29', NULL),
(2, 1, 1, 'SMS', '+917618666966', 'Nitin> This is test message to test twilio api https://www.google.com/xxxxxxxxxx', 'SM3fa1e4be73ff44a3995212f1d03978dd', 'N/A', NULL, '2021-08-02 06:33:27', 'test', NULL, NULL, NULL, 'QUEUED', NULL, '2021-08-02 06:33:26', NULL),
(3, 1, 1, 'SMS', '+917508498585', 'Nitin> This is test message to test twilio api https://www.google.com/xxxxxxxxxx', 'SM50da619e7c4a435d80240bde5909244f', 'N/A', NULL, '2021-08-02 06:45:44', 'test', NULL, NULL, NULL, 'QUEUED', NULL, '2021-08-02 06:45:43', NULL),
(4, 1, 1, 'SMS', '+917508498585', 'Nitin> This is test message to test twilio api https://www.google.com/xxxxxxxxxx', 'SM6a5149d6b0fe49a98d567dbe730724be', 'N/A', NULL, '2021-08-02 06:46:19', 'test', NULL, NULL, NULL, 'QUEUED', NULL, '2021-08-02 06:46:18', NULL),
(5, 1, 1, 'SMS', '+917508498585', 'Nitin> This is test message to test twilio api https://www.google.com/x5J0Waw6Bd', 'SM969c933ed3414adeac949eb896665774', 'N/A', NULL, '2021-08-02 06:51:17', 'test', NULL, NULL, NULL, 'QUEUED', NULL, '2021-08-02 06:51:16', NULL),
(6, 1, 1, 'SMS', '+917618666966', 'Nitin> This is test message to test twilio api https://www.google.com/jdQ0v7VZDY', 'SM618391a1b6be41fa86242ec7657c24d1', 'N/A', NULL, '2021-08-02 06:51:19', 'test', NULL, NULL, NULL, 'QUEUED', NULL, '2021-08-02 06:51:18', NULL),
(7, 1, 1, 'SMS', '+919216222010', 'Nitin> This is test message to test twilio api https://www.google.com/3d70aNVEWz', 'SM803ad28d4d3544c38acdd7f61ea55f37', 'N/A', NULL, '2021-08-02 06:51:21', 'test', NULL, NULL, NULL, 'QUEUED', NULL, '2021-08-02 06:51:21', NULL),
(8, 1, 1, 'SMS', '+917508498585', 'Nitin> This is test message to test twilio api https://www.google.com/5aB0DzwNYj', 'SMe4c8f122c0404eeaac79b56fccd5f55f', 'N/A', NULL, '2021-08-02 06:53:32', 'test', NULL, NULL, NULL, 'QUEUED', NULL, '2021-08-02 06:53:31', NULL),
(9, 1, 1, 'SMS', '+917618666966', 'Nitin> This is test message to test twilio api https://www.google.com/Zgo0Og0Xdz', 'SM69d3b41380624a248248b6b37e5f268a', 'N/A', NULL, '2021-08-02 06:53:34', 'test', NULL, NULL, NULL, 'QUEUED', NULL, '2021-08-02 06:53:33', NULL),
(10, 1, 1, 'SMS', '+919216222010', 'Nitin> This is test message to test twilio api https://www.google.com/le206r0Eny', 'SM1c913f94a9e440edbd4107935fff270c', 'N/A', NULL, '2021-08-02 06:53:37', 'test', NULL, NULL, NULL, 'QUEUED', NULL, '2021-08-02 06:53:36', NULL),
(11, 1, 1, 'SMS', '+919459551238', 'Nitin> This is test message to test twilio api https://www.google.com/XBZVbKwbdR', 'SM590fae88924144d1b7718227a834b0ef', 'N/A', NULL, '2021-08-02 06:53:39', 'test', NULL, NULL, NULL, 'QUEUED', NULL, '2021-08-02 06:53:38', NULL),
(12, 1, 1, 'SMS', '+917508498585', 'Nitin> This is test message to test twilio api https://www.google.com/ly2VQd0WXp', 'SMaaea832e87c841fe8219e9fc5aa3ba05', 'N/A', NULL, '2021-08-02 11:26:37', 'live', NULL, NULL, NULL, 'QUEUED', NULL, '2021-08-02 11:26:36', NULL),
(13, 1, 1, 'SMS', '+917618666966', 'Nitin> This is test message to test twilio api https://www.google.com/QxAVxLVpym', 'SM459ec385e8fb4fcc9ea82ee179c41089', 'N/A', NULL, '2021-08-02 11:26:39', 'live', NULL, NULL, NULL, 'QUEUED', NULL, '2021-08-02 11:26:38', NULL),
(14, 1, 1, 'SMS', '+919216222010', 'Nitin> This is test message to test twilio api https://www.google.com/rnQw4Xwl2J', 'SM39dd27d5c2d04e1692c74f1623a5739e', 'N/A', NULL, '2021-08-02 11:26:41', 'live', NULL, NULL, NULL, 'QUEUED', NULL, '2021-08-02 11:26:40', NULL),
(15, 1, 1, 'SMS', '+919459551238', 'Nitin> This is test message to test twilio api https://www.google.com/WLG0mE0nlg', 'SM353906deb4504f9eb5501fbf3779e38c', 'N/A', NULL, '2021-08-02 11:26:44', 'live', NULL, NULL, NULL, 'QUEUED', NULL, '2021-08-02 11:26:42', NULL),
(16, 1, 1, 'SMS', '+917508498585', 'Nitin> This is test message to test twilio api https://www.google.com/xLZ0lBwQmn', 'SM692b84c0597c44da81923347a86d891c', 'N/A', NULL, '2021-08-02 12:32:30', 'test', NULL, NULL, NULL, 'QUEUED', NULL, '2021-08-02 12:32:30', NULL),
(17, 1, 1, 'SMS', '+917618666966', 'Nitin> This is test message to test twilio api https://www.google.com/Z1zP2bPRbY', 'SMb5adec1fe0b74f1abc2a30815f703c29', 'N/A', NULL, '2021-08-02 12:32:33', 'test', NULL, NULL, NULL, 'QUEUED', NULL, '2021-08-02 12:32:33', NULL),
(18, 1, 1, 'SMS', '+919459551238', 'Nitin> This is test message to test twilio api https://www.google.com/7kpPY7Vrgq', 'SM8bf3f8baf7a648a8b260b77c9887ab0d', 'N/A', NULL, '2021-08-02 12:32:35', 'test', NULL, NULL, NULL, 'QUEUED', NULL, '2021-08-02 12:32:35', NULL),
(19, 1, 1, 'SMS', '+917508498585', 'Nitin> This is test message to test twilio api https://www.google.com/pR3wg50qmW', 'SM45faa545f8b148ef8dfa271cdc01bbdf', 'N/A', NULL, '2021-08-02 12:33:19', 'live', NULL, NULL, NULL, 'QUEUED', NULL, '2021-08-02 12:33:19', NULL),
(20, 1, 1, 'SMS', '+917618666966', 'Nitin> This is test message to test twilio api https://www.google.com/2RmVyqV6Np', 'SM09f604abf0f2483982aa0aeb65a4d289', 'N/A', NULL, '2021-08-02 12:33:21', 'live', NULL, NULL, NULL, 'QUEUED', NULL, '2021-08-02 12:33:21', NULL),
(21, 1, 1, 'SMS', '+919459551238', 'Nitin> This is test message to test twilio api https://www.google.com/98d0GvPr3z', 'SM9c30cb7562d340efb03f4188e4331bd9', 'N/A', NULL, '2021-08-02 12:33:23', 'live', NULL, NULL, NULL, 'QUEUED', NULL, '2021-08-02 12:33:23', NULL),
(22, 1, 1, 'SMS', '+917618666966', 'Nitin> This is test message to test twilio api https://www.google.com/xxxxxxxxxx', 'SM99754495ca524993be818a0d405ffc4c', 'N/A', NULL, '2021-08-02 12:39:41', 'test', NULL, NULL, NULL, 'DELIVERED', NULL, '2021-08-02 12:39:41', '2021-08-02 12:39:45'),
(23, 1, 1, 'SMS', '+917508498585', 'Nitin> This is test message to test twilio api https://www.google.com/Ng4w3vVbAK', 'SM066dde6108c247c081f28d9da2703fc0', 'N/A', NULL, '2021-08-02 12:45:38', 'test', NULL, NULL, NULL, 'DELIVERED', NULL, '2021-08-02 12:45:38', '2021-08-02 12:46:00'),
(24, 1, 1, 'SMS', '+917618666966', 'Nitin> This is test message to test twilio api https://www.google.com/5Ka08jwpxE', 'SM831bd84b9716452c9c4ae398fcf42fbc', 'N/A', NULL, '2021-08-02 12:45:39', 'test', NULL, NULL, NULL, 'DELIVERED', NULL, '2021-08-02 12:45:39', '2021-08-02 12:45:41'),
(25, 1, 1, 'SMS', '+917508498585', 'Nitin> This is test message to test twilio api https://www.iamwhiz.com/test-kdmsg/land/lZkwA5wO5D', 'SM19af1f9e767f42e28bbdca2d6d3e178a', 'N/A', NULL, '2021-08-02 12:51:57', 'live', NULL, NULL, NULL, 'DELIVERED', NULL, '2021-08-02 12:51:57', '2021-08-02 12:52:33'),
(26, 1, 1, 'SMS', '+917618666966', 'Nitin> This is test message to test twilio api https://www.iamwhiz.com/test-kdmsg/land/8W2VKMPAvR', 'SM464ec766efed41a7aa9b7ae4f33992c5', 'N/A', NULL, '2021-08-02 12:51:58', 'live', NULL, NULL, NULL, 'DELIVERED', NULL, '2021-08-02 12:51:58', '2021-08-02 12:52:02'),
(27, 1, 1, 'SMS', '+14045142113', 'Nitin> This is test message to test twilio api https://www.iamwhiz.com/test-kdmsg/land/xxxxxxxxxx', 'SM74d250b51bfa43c3ba3acf4875efdf8a', 'N/A', NULL, '2021-08-03 01:19:45', 'test', NULL, NULL, NULL, 'DELIVERED', NULL, '2021-08-03 01:19:45', '2021-08-03 13:19:47'),
(28, 1, 1, 'SMS', '+14045142113', 'Nitin> This is test message to test twilio api https://www.iamwhiz.com/test-kdmsg/land/6dx09KwEqv', 'SMeff567296d1c454eb762bc509f9e82a9', 'N/A', NULL, '2021-08-04 05:53:40', 'test', NULL, NULL, NULL, 'DELIVERED', NULL, '2021-08-04 05:53:40', '2021-08-04 05:53:42'),
(29, 1, 1, 'SMS', '+14045142113', 'Nitin> This is test message to test twilio api https://www.iamwhiz.com/test-kdmsg/land/JBywzaVQON', 'SMedb2d2ce84db4f8a970ea630e7e94304', 'N/A', NULL, '2021-08-04 05:54:21', 'test', NULL, NULL, NULL, 'DELIVERED', NULL, '2021-08-04 05:54:21', '2021-08-04 05:54:23'),
(30, 1, 1, 'SMS', '+14045142113', 'Nitin> This is test message to test twilio api https://www.iamwhiz.com/test-kdmsg/land/DAYPj6PXJq', 'SM5309097c9ade415e8152a2143247013b', 'N/A', NULL, '2021-08-04 05:54:33', 'live', NULL, NULL, NULL, 'DELIVERED', NULL, '2021-08-04 05:54:33', '2021-08-04 05:54:35'),
(31, 1, 1, 'SMS', '+14045142113', 'Nitin> This is 3rd test message to test twilio api https://www.iamwhiz.com/test-kdmsg/land/xxxxxxxxxx', 'SM50c4e639f7b74f4b99d5f4c3d2c513c9', 'N/A', NULL, '2021-08-10 06:21:39', 'test', NULL, NULL, NULL, 'DELIVERED', NULL, '2021-08-10 06:21:39', '2021-08-10 18:21:41'),
(32, 1, 1, 'SMS', '+14045142113', 'Nitin> This is 4th test message to test twilio api https://www.iamwhiz.com/test-kdmsg/land/xxxxxxxxxx', 'SMbf4156a91f0a471e89200b04ce5579e9', 'N/A', NULL, '2021-08-10 06:22:52', 'test', NULL, NULL, NULL, 'DELIVERED', NULL, '2021-08-10 06:22:52', '2021-08-10 18:22:54'),
(33, 1, 1, 'SMS', '+14045142113', 'Nitin> This is 5th test message to test twilio api https://www.iamwhiz.com/test-kdmsg/land/EvjwdKV8BL', 'SM55481c5c67b247ff95bb04bf881dbd72', 'N/A', NULL, '2021-08-11 06:13:17', 'test', NULL, NULL, NULL, 'DELIVERED', NULL, '2021-08-11 06:13:18', '2021-08-11 06:13:20'),
(34, 1, 1, 'SMS', '+14045142113', 'Nitin> This is 5th test message to test twilio api https://www.iamwhiz.com/test-kdmsg/land/gBAwoDPLZj', 'SM98a439c2362c46db836a51110b145b29', 'N/A', NULL, '2021-08-11 06:14:36', 'test', NULL, NULL, NULL, 'DELIVERED', NULL, '2021-08-11 06:14:37', '2021-08-11 06:14:38'),
(35, 1, 1, 'SMS', '+917618666966', 'Nitin> This is 5th test message to test twilio api https://www.iamwhiz.com/test-kdmsg/land/nObwJoPlM3', 'SM012e7014af614fc283f7dc0dc93b4f72', 'N/A', NULL, '2021-08-11 06:14:47', 'live', NULL, NULL, NULL, 'DELIVERED', NULL, '2021-08-11 06:14:47', '2021-08-11 06:14:50'),
(36, 1, 1, 'SMS', '+917618666966', 'Nitin> This is 5th test message to test twilio api https://www.iamwhiz.com/test-kdmsg/land/mvbVXpV8z3', 'SM92f96fe2baa34cd9a46146af9af5632a', 'N/A', NULL, '2021-08-11 06:26:37', 'live', NULL, NULL, NULL, 'DELIVERED', NULL, '2021-08-11 06:26:37', '2021-08-11 06:26:40'),
(37, 1, 1, 'SMS', '+917618666966', 'Nitin> This is 5th test message to test twilio api https://www.iamwhiz.com/test-kdmsg/land/xxxxxxxxxx', 'SMb0713cc69447445b8d705a182a26c807', 'N/A', NULL, '2021-08-11 06:28:18', 'test', NULL, NULL, NULL, 'DELIVERED', NULL, '2021-08-11 06:28:18', '2021-08-11 06:28:22'),
(38, 1, 1, 'SMS', '+14045142113', 'Nitin> This is 5th test message to test twilio api https://www.iamwhiz.com/test-kdmsg/land/XqO0N4w6YB', 'SM80f6c5ce398744b7b808c9bd156cef0f', 'N/A', NULL, '2021-08-13 04:20:40', 'live', NULL, NULL, NULL, 'DELIVERED', NULL, '2021-08-13 04:20:40', '2021-08-13 16:20:42'),
(39, 1, 1, 'SMS', '+14045142113', 'Nitin> This is 7th test message to test twilio api https://www.iamwhiz.com/test-kdmsg/land/4bL018Pa9G', 'SM306cca257b2d426cb3c3debcd1f04623', 'N/A', NULL, '2021-08-13 04:21:55', 'test', NULL, NULL, NULL, 'DELIVERED', NULL, '2021-08-13 04:21:55', '2021-08-13 16:21:56'),
(40, 2, 2, 'WHATSAPP', '+917618666966', 'Whatsapp> Your {{1}} code is {{2}} https://www.google.com/xxxxxxxxxx', 'SM43a1b326f2cf4d09981b5cbb2a0a2160', NULL, NULL, '2021-08-19 08:26:31', 'test', NULL, NULL, NULL, 'READ', NULL, '2021-08-19 08:26:31', '2021-08-19 08:26:39'),
(41, 2, NULL, 'WHATSAPP', '+917618666966', 'send \'OPT IN\' for receiving message', 'SM383e436360754413b4a15b2ab81ebc95', NULL, NULL, '2021-08-19 08:28:01', 'opt in/out', NULL, NULL, NULL, 'QUEUED', NULL, '2021-08-19 08:28:01', NULL),
(42, 2, 2, 'WHATSAPP', '+917618666966', 'Whatsapp> Your {{1}} code is {{2}} https://www.google.com/Xk3PBo0oB4', 'SM0efa8ffaa11f430387235a166161413f', NULL, NULL, '2021-08-19 09:37:12', 'live', NULL, NULL, NULL, 'READ', NULL, '2021-08-19 09:37:12', '2021-08-19 09:37:44'),
(43, 2, NULL, 'WHATSAPP', '+917508498585', 'send \'OPT IN\' for receiving message', 'SMfc6c6b67ed06477b9de451d0c76869bc', NULL, NULL, '2021-08-19 09:56:55', 'opt in/out', NULL, NULL, NULL, 'QUEUED', NULL, '2021-08-19 09:56:55', NULL),
(44, 2, 2, 'WHATSAPP', '+917618666966', 'Whatsapp> Your {{1}} code is {{2}} https://www.google.com/YoZPemP3DX', 'SM27f2033fec054534b71ca7e91bdecef3', NULL, NULL, '2021-08-19 09:58:15', 'live', NULL, NULL, NULL, 'READ', NULL, '2021-08-19 09:58:15', '2021-08-19 10:06:41'),
(45, 2, 2, 'WHATSAPP', '+917508498585', 'Whatsapp> Your {{1}} code is {{2}} https://www.google.com/Rr10qZVGoB', 'SMd843a0e7a8ba43a09c68b868f4e4b58a', NULL, NULL, '2021-08-19 09:58:16', 'live', NULL, NULL, NULL, 'DELIVERED', NULL, '2021-08-19 09:58:16', '2021-08-19 09:58:18'),
(46, 2, NULL, 'WHATSAPP', '+916283009504', 'send \'OPT IN\' for receiving message', 'SMb9b6d883bb94484cad54e067d3dffcc1', NULL, NULL, '2021-08-19 10:07:46', 'opt in/out', NULL, NULL, NULL, 'QUEUED', NULL, '2021-08-19 10:07:46', NULL),
(47, 2, NULL, 'WHATSAPP', '+916283009504', 'send \'OPT IN\' for receiving message', 'SM3433bd56b09e4592b2cd25fae5655034', NULL, NULL, '2021-08-19 10:15:46', 'opt in/out', NULL, NULL, NULL, 'READ', NULL, '2021-08-19 10:15:46', '2021-08-19 10:15:54'),
(48, 2, NULL, 'WHATSAPP', '+917009341662', 'send \'OPT IN\' for receiving message', 'SM327056b573354e03bbce5a7911185726', NULL, NULL, '2021-08-19 10:43:36', 'opt in/out', NULL, NULL, NULL, 'READ', NULL, '2021-08-19 10:43:36', '2021-08-19 10:44:23'),
(49, 2, 2, 'WHATSAPP', '+917618666966', 'Whatsapp> Your {{1}} code is {{2}} https://www.google.com/NWjP7ZwbvE', 'SM9135e220dc1940fba1f34985031f6cb5', NULL, NULL, '2021-08-19 10:46:42', 'live', NULL, NULL, NULL, 'READ', NULL, '2021-08-19 10:46:42', '2021-08-19 10:47:19'),
(50, 2, 2, 'WHATSAPP', '+917508498585', 'Whatsapp> Your {{1}} code is {{2}} https://www.google.com/amZwM1wJ5D', 'SMcc9f86d4bfd44eec89d322a2a484c1a2', NULL, NULL, '2021-08-19 10:46:43', 'live', NULL, NULL, NULL, 'READ', NULL, '2021-08-19 10:46:43', '2021-08-19 11:01:05'),
(51, 2, 2, 'WHATSAPP', '+916283009504', 'Whatsapp> Your {{1}} code is {{2}} https://www.google.com/LGlwpDwgY2', 'SM7452f456a226437ca425231c659e8649', NULL, NULL, '2021-08-19 10:46:44', 'live', NULL, NULL, NULL, 'READ', NULL, '2021-08-19 10:46:44', '2021-08-19 10:48:42'),
(52, 2, 2, 'WHATSAPP', '+917009341662', 'Whatsapp> Your {{1}} code is {{2}} https://www.google.com/MxDwkOw2NR', 'SM3a6918f653c649e0b18022fa8ad75c18', NULL, NULL, '2021-08-19 10:46:46', 'live', NULL, NULL, NULL, 'READ', NULL, '2021-08-19 10:46:46', '2021-08-19 10:46:55'),
(53, 2, NULL, 'WHATSAPP', '+919877028691', 'send \'OPT IN\' for receiving message', 'SMac7aa289a5cd412a976ced0213c4b34b', NULL, NULL, '2021-08-19 10:52:44', 'opt in/out', NULL, NULL, NULL, 'READ', NULL, '2021-08-19 10:52:44', '2021-08-19 10:52:46'),
(54, 2, 2, 'WHATSAPP', '+917618666966', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.google.com/exXwZp0ME9', 'SM9644ac8da388451687230ba4f7fce485', NULL, NULL, '2021-08-19 10:54:50', 'live', NULL, NULL, NULL, 'READ', NULL, '2021-08-19 10:54:50', '2021-08-19 10:55:45'),
(55, 2, 2, 'WHATSAPP', '+917508498585', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.google.com/qv5wELV7pE', 'SMffe28d1eba3e49b0a3a3499f9fd96f5b', NULL, NULL, '2021-08-19 10:54:51', 'live', NULL, NULL, NULL, 'READ', NULL, '2021-08-19 10:54:51', '2021-08-19 11:01:05'),
(56, 2, 2, 'WHATSAPP', '+916283009504', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.google.com/ErL0RaPYN4', 'SMf84323a479444a7f996f107dfcc31bb2', NULL, NULL, '2021-08-19 10:54:52', 'live', NULL, NULL, NULL, 'READ', NULL, '2021-08-19 10:54:52', '2021-08-19 10:57:40'),
(57, 2, 2, 'WHATSAPP', '+917009341662', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.google.com/A3jPL90Lr5', 'SMca4694ab080248ccbc209b4d6470bbfa', NULL, NULL, '2021-08-19 10:54:54', 'live', NULL, NULL, NULL, 'READ', NULL, '2021-08-19 10:54:54', '2021-08-19 14:06:57'),
(58, 2, 2, 'WHATSAPP', '+919877028691', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.google.com/n9awnXy0zR', 'SM7190430bbcf346ecac85992594019455', NULL, NULL, '2021-08-19 10:54:55', 'live', NULL, NULL, NULL, 'READ', NULL, '2021-08-19 10:54:55', '2021-08-19 10:54:57'),
(59, 2, NULL, 'WHATSAPP', '4045142113', 'send \'OPT IN\' for receiving message', 'SMdfdb2b358ffe4941a187779d2e75c769', NULL, NULL, '2021-08-19 05:41:02', 'opt in/out', NULL, NULL, NULL, 'FAILED', NULL, '2021-08-19 05:41:02', '2021-08-19 17:41:03'),
(60, 2, 2, 'WHATSAPP', '+917618666966', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.google.com/x5J0Waaw6B', 'SMf981cce183fa45c1b5382bc3d0bfef46', NULL, NULL, '2021-08-19 05:46:47', 'live', NULL, NULL, NULL, 'READ', NULL, '2021-08-19 05:46:47', '2021-08-19 17:47:52'),
(61, 2, 2, 'WHATSAPP', '+917508498585', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.google.com/jdQ0vb70ZD', 'SM7f420b56c80948ea992e467398515c33', NULL, NULL, '2021-08-19 05:46:48', 'live', NULL, NULL, NULL, 'READ', NULL, '2021-08-19 05:46:48', '2021-08-19 17:46:56'),
(62, 2, 2, 'WHATSAPP', '+916283009504', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.google.com/3d70aRNVEW', 'SM39e4e46160394e7b82e0f442d631f31c', NULL, NULL, '2021-08-19 05:46:49', 'live', NULL, NULL, NULL, 'FAILED', NULL, '2021-08-19 05:46:49', '2021-08-19 17:46:51'),
(63, 2, 2, 'WHATSAPP', '+917009341662', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.google.com/5aB0DLz0NY', 'SM6b7d8db1927f4dc7b8e82caaade44064', NULL, NULL, '2021-08-19 05:46:51', 'live', NULL, NULL, NULL, 'READ', NULL, '2021-08-19 05:46:51', '2021-08-20 00:37:18'),
(64, 2, 2, 'WHATSAPP', '+919877028691', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.google.com/Zgo0O6gPXd', 'SM68de01267435489187d6e319f8958391', NULL, NULL, '2021-08-19 05:46:52', 'live', NULL, NULL, NULL, 'FAILED', NULL, '2021-08-19 05:46:52', '2021-08-19 17:46:53'),
(65, 2, 2, 'WHATSAPP', '8884489088', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.google.com/le206Br0En', 'SM9f18a5c4d16a46cf942938fab92b3f19', NULL, NULL, '2021-08-19 05:46:54', 'live', NULL, NULL, NULL, 'READ', NULL, '2021-08-19 05:46:54', '2021-08-19 17:48:13'),
(66, 2, 2, 'WHATSAPP', '+917618666966', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.google.com/XBZVboKwbd', 'SM41cb322990a145369b1188ec6bbbfc04', NULL, NULL, '2021-08-19 05:50:41', 'live', NULL, NULL, NULL, 'READ', NULL, '2021-08-19 05:50:41', '2021-08-19 17:52:36'),
(67, 2, 2, 'WHATSAPP', '+917508498585', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.google.com/ly2VQ1dVWX', 'SM8fd03411064b44f184cb81993f2b8d17', NULL, NULL, '2021-08-19 05:50:42', 'live', NULL, NULL, NULL, 'READ', NULL, '2021-08-19 05:50:42', '2021-08-19 18:32:30'),
(68, 2, 2, 'WHATSAPP', '+916283009504', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.google.com/QxAVxmLwpy', 'SM0a26956143e64124b0708593601794d0', NULL, NULL, '2021-08-19 05:50:44', 'live', NULL, NULL, NULL, 'FAILED', NULL, '2021-08-19 05:50:44', '2021-08-19 17:50:45'),
(69, 2, 2, 'WHATSAPP', '+917009341662', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.google.com/rnQw4lXwl2', 'SMb35fc772563c4aaaa45d32c7a2f5ad8b', NULL, NULL, '2021-08-19 05:50:45', 'live', NULL, NULL, NULL, 'READ', NULL, '2021-08-19 05:50:45', '2021-08-20 00:37:18'),
(70, 2, 2, 'WHATSAPP', '+919877028691', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.google.com/WLG0mgEwnl', 'SMc9ab59ce483d455b8b8f155b057986af', NULL, NULL, '2021-08-19 05:50:46', 'live', NULL, NULL, NULL, 'FAILED', NULL, '2021-08-19 05:50:47', '2021-08-19 17:50:48'),
(71, 2, 2, 'WHATSAPP', '8884489088', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.google.com/xLZ0lMBVQm', 'SMf54a1d4dcb224722ab2d4551cf74162e', NULL, NULL, '2021-08-19 05:50:48', 'live', NULL, NULL, NULL, 'READ', NULL, '2021-08-19 05:50:48', '2021-08-19 17:51:03'),
(72, 2, 2, 'WHATSAPP', '+917618666966', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/Z1zP2kb0Rb', 'SM0397c36910704628ac177f7e03584f97', NULL, NULL, '2021-08-20 05:02:31', 'test', NULL, NULL, NULL, 'READ', NULL, '2021-08-20 05:02:31', '2021-08-20 05:02:52'),
(73, 2, 2, 'WHATSAPP', '+917508498585', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/7kpPYZ70rg', 'SM060778bcadf340ebb36dae4d7db4090b', NULL, NULL, '2021-08-20 05:02:33', 'test', NULL, NULL, NULL, 'READ', NULL, '2021-08-20 05:02:33', '2021-08-20 05:04:34'),
(74, 2, 2, 'WHATSAPP', '+916283009504', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/pR3wg75wqm', 'SMb37a335d46a9449f99efecd076616795', NULL, NULL, '2021-08-20 05:02:34', 'test', NULL, NULL, NULL, 'FAILED', NULL, '2021-08-20 05:02:34', '2021-08-20 05:02:35'),
(75, 2, 2, 'WHATSAPP', '+917009341662', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/2RmVylq06N', 'SMe2f2c8dd1c38449b80b5d02b6da85983', NULL, NULL, '2021-08-20 05:02:35', 'test', NULL, NULL, NULL, 'READ', NULL, '2021-08-20 05:02:35', '2021-08-20 15:28:28'),
(76, 2, 2, 'WHATSAPP', '+919877028691', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/98d0G4vVr3', 'SMa666b0a4b65e4ccbb7396002fa448534', NULL, NULL, '2021-08-20 05:02:37', 'test', NULL, NULL, NULL, 'FAILED', NULL, '2021-08-20 05:02:37', '2021-08-20 05:02:38'),
(77, 2, 2, 'WHATSAPP', '8884489088', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/3RY0r5JP5X', 'SM1621f781af894aac95e80627f6849c94', NULL, NULL, '2021-08-20 05:02:38', 'test', NULL, NULL, NULL, 'READ', NULL, '2021-08-20 05:02:38', '2021-08-20 23:16:11'),
(78, 2, 2, 'WHATSAPP', '+14045142113', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/xxxxxxxxxx', 'SM6ff9e916213a45c7a95014239cf54c17', NULL, NULL, '2021-08-20 11:15:43', 'test', NULL, NULL, NULL, 'FAILED', NULL, '2021-08-20 11:15:43', '2021-08-20 23:15:44'),
(79, 2, 2, 'WHATSAPP', '+917618666966', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/Ng4w31v0bA', 'SMcd7442291f674cc8806b7ddfaa7ff068', NULL, NULL, '2021-08-20 11:16:40', 'live', NULL, NULL, NULL, 'UNDELIVERED', NULL, '2021-08-20 11:16:40', '2021-08-20 23:16:43'),
(80, 2, 2, 'WHATSAPP', '+917508498585', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/5Ka08Xj0px', 'SMab568162fce245e0afcfed268594b26e', NULL, NULL, '2021-08-20 11:16:41', 'live', NULL, NULL, NULL, 'UNDELIVERED', NULL, '2021-08-20 11:16:41', '2021-08-20 23:16:44'),
(81, 2, 2, 'WHATSAPP', '+916283009504', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/lZkwAY5wO5', 'SM9a3cdfda16884f96ac1f7ce9bfec4d21', NULL, NULL, '2021-08-20 11:16:43', 'live', NULL, NULL, NULL, 'FAILED', NULL, '2021-08-20 11:16:43', '2021-08-20 23:16:44'),
(82, 2, 2, 'WHATSAPP', '+917009341662', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/8W2VKBM0Av', 'SMba3fcc488b15457ea0fad65b1cc80972', NULL, NULL, '2021-08-20 11:16:44', 'live', NULL, NULL, NULL, 'UNDELIVERED', NULL, '2021-08-20 11:16:44', '2021-08-20 23:16:46'),
(83, 2, 2, 'WHATSAPP', '+919877028691', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/6dx09kKwEq', 'SM94d287a974c246838d055407b0aeed7d', NULL, NULL, '2021-08-20 11:16:45', 'live', NULL, NULL, NULL, 'FAILED', NULL, '2021-08-20 11:16:45', '2021-08-20 23:16:47'),
(84, 2, 2, 'WHATSAPP', '8884489088', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/JBywzqaVQO', 'SMfcd1772437f847b787b6a9aa01a004c3', NULL, NULL, '2021-08-20 11:16:47', 'live', NULL, NULL, NULL, 'UNDELIVERED', NULL, '2021-08-20 11:16:47', '2021-08-20 23:16:49'),
(85, 2, 2, 'WHATSAPP', '+917618666966', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/DAYPjM6wXJ', 'SM8d168c6103d4453d80813b8ad0b93b54', NULL, NULL, '2021-08-20 11:17:43', 'test', NULL, NULL, NULL, 'UNDELIVERED', NULL, '2021-08-20 11:17:43', '2021-08-20 23:17:46'),
(86, 2, 2, 'WHATSAPP', '+917508498585', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/Evjwd1KP8B', 'SMf5293bb133c9497db377d857f3e38322', NULL, NULL, '2021-08-20 11:17:45', 'test', NULL, NULL, NULL, 'UNDELIVERED', NULL, '2021-08-20 11:17:45', '2021-08-20 23:17:48'),
(87, 2, 2, 'WHATSAPP', '+916283009504', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/gBAwozDVLZ', 'SM7e5ed589941d4127b2300366fceb41aa', NULL, NULL, '2021-08-20 11:17:46', 'test', NULL, NULL, NULL, 'FAILED', NULL, '2021-08-20 11:17:46', '2021-08-20 23:17:47'),
(88, 2, 2, 'WHATSAPP', '+917009341662', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/nObwJlo0lM', 'SMbe898826ace54b38a8c3edba18bed6c9', NULL, NULL, '2021-08-20 11:17:48', 'test', NULL, NULL, NULL, 'UNDELIVERED', NULL, '2021-08-20 11:17:48', '2021-08-20 23:17:50'),
(89, 2, 2, 'WHATSAPP', '+919877028691', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/mvbVXMpw8z', 'SM08b1b48730e8499e931253a0fac56335', NULL, NULL, '2021-08-20 11:17:49', 'test', NULL, NULL, NULL, 'FAILED', NULL, '2021-08-20 11:17:49', '2021-08-20 23:17:50'),
(90, 2, 2, 'WHATSAPP', '8884489088', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/XqO0NB406Y', 'SMa9d51894e5a24e27af86684f23b6db56', NULL, NULL, '2021-08-20 11:17:50', 'test', NULL, NULL, NULL, 'UNDELIVERED', NULL, '2021-08-20 11:17:50', '2021-08-20 23:17:53'),
(91, 2, 2, 'WHATSAPP', '+18884489088', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/xxxxxxxxxx', 'SM924c76782b3746fe859b10f987da8c5f', NULL, NULL, '2021-08-20 11:20:43', 'test', NULL, NULL, NULL, 'UNDELIVERED', NULL, '2021-08-20 11:20:43', '2021-08-20 23:20:46'),
(92, 2, 2, 'WHATSAPP', '+14045142113', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/xxxxxxxxxx', 'SMd96ba3a9df9947fd98948a8379ee495f', NULL, NULL, '2021-08-20 11:24:02', 'test', NULL, NULL, NULL, 'FAILED', NULL, '2021-08-20 11:24:02', '2021-08-20 23:24:03'),
(93, 2, 2, 'WHATSAPP', '+917618666966', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/4bL01580a9', 'SMd7397714fb254365ab97df1bac0c27f8', NULL, NULL, '2021-08-20 11:25:13', 'test', NULL, NULL, NULL, 'UNDELIVERED', NULL, '2021-08-20 11:25:13', '2021-08-20 23:25:16'),
(94, 2, 2, 'WHATSAPP', '+917508498585', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/9ZyV5ELVW2', 'SMa250142f2f0c4b59a5cd11a1bbf50f8e', NULL, NULL, '2021-08-20 11:25:15', 'test', NULL, NULL, NULL, 'SENT', NULL, '2021-08-20 11:25:15', '2021-08-20 23:25:18'),
(95, 2, 2, 'WHATSAPP', '+916283009504', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/Xk3PBboPoB', 'SMafc7d4fa07644b02978b36fb8fafe3fe', NULL, NULL, '2021-08-20 11:25:16', 'test', NULL, NULL, NULL, 'FAILED', NULL, '2021-08-20 11:25:16', '2021-08-20 23:25:17'),
(96, 2, 2, 'WHATSAPP', '+917009341662', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/YoZPe3mV3D', 'SMea7644b71a0e42a79d2ace5729609363', NULL, NULL, '2021-08-20 11:25:17', 'test', NULL, NULL, NULL, 'UNDELIVERED', NULL, '2021-08-20 11:25:17', '2021-08-20 23:25:20'),
(97, 2, 2, 'WHATSAPP', '+919877028691', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/Rr10qRZVGo', 'SMc700d843d04942cdab738e580ff29175', NULL, NULL, '2021-08-20 11:25:19', 'test', NULL, NULL, NULL, 'FAILED', NULL, '2021-08-20 11:25:19', '2021-08-20 23:25:20'),
(98, 2, 2, 'WHATSAPP', '+18884489088', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/NWjP7RZwbv', 'SM70a3c17159fc42fc80f00cf0de9e8ef1', NULL, NULL, '2021-08-20 11:25:20', 'test', NULL, NULL, NULL, 'UNDELIVERED', NULL, '2021-08-20 11:25:20', '2021-08-20 23:25:22'),
(99, 2, 2, 'WHATSAPP', '+919582252125', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/xxxxxxxxxx', 'SMa63637842dbc440588564ca29ba7f045', NULL, NULL, '2021-08-21 05:07:25', 'test', NULL, NULL, NULL, 'READ', NULL, '2021-08-21 05:07:25', '2021-08-21 17:07:28'),
(100, 2, 2, 'WHATSAPP', '+917618666966', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/amZwMe1wJ5', 'SMc856e1138ddd4bd2a395cdfcd47cd992', NULL, NULL, '2021-08-23 04:32:19', 'live', NULL, NULL, NULL, 'FAILED', NULL, '2021-08-23 04:32:19', '2021-08-23 04:32:20'),
(101, 2, 2, 'WHATSAPP', '+917508498585', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/LGlwp9DPgY', 'SMadd72e218e2d4f4180a7931d3b113f5e', NULL, NULL, '2021-08-23 04:32:20', 'live', NULL, NULL, NULL, 'FAILED', NULL, '2021-08-23 04:32:20', '2021-08-23 04:32:22'),
(102, 2, 2, 'WHATSAPP', '+916283009504', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/MxDwk1O02N', 'SM583a45b5a61e471b9c39ce28e525c8fc', NULL, NULL, '2021-08-23 04:32:22', 'live', NULL, NULL, NULL, 'FAILED', NULL, '2021-08-23 04:32:22', '2021-08-23 04:32:23'),
(103, 2, 2, 'WHATSAPP', '+917009341662', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/exXwZYpVME', 'SMf85152af0c8a4d02a09d36f8be003321', NULL, NULL, '2021-08-23 04:32:23', 'live', NULL, NULL, NULL, 'FAILED', NULL, '2021-08-23 04:32:23', '2021-08-23 04:32:24'),
(104, 2, 2, 'WHATSAPP', '+919877028691', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/qv5wEQLw7p', 'SMb8d7179f6a714b3091d5815a783317a0', NULL, NULL, '2021-08-23 04:32:24', 'live', NULL, NULL, NULL, 'FAILED', NULL, '2021-08-23 04:32:24', '2021-08-23 04:32:26'),
(105, 2, 2, 'WHATSAPP', '+18884489088', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/ErL0RxawYN', 'SM203381e2ecca469aba5cbdd48e76d91a', NULL, NULL, '2021-08-23 04:32:26', 'live', NULL, NULL, NULL, 'FAILED', NULL, '2021-08-23 04:32:26', '2021-08-23 04:32:27'),
(106, 2, 2, 'WHATSAPP', '+917618666966', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/xxxxxxxxxx', 'SMa3ae279c0829480e8ddb66d6fc694bce', NULL, NULL, '2021-08-23 04:34:20', 'test', NULL, NULL, NULL, 'READ', NULL, '2021-08-23 04:34:20', '2021-08-23 04:43:40'),
(107, 2, 2, 'WHATSAPP', '+917618666966', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/xxxxxxxxxx', 'SMe5621044391e46449cb4dbf1eac8520f', NULL, NULL, '2021-08-23 04:43:20', 'test', NULL, NULL, NULL, 'DELIVERED', NULL, '2021-08-23 04:43:20', '2021-08-23 04:43:23'),
(108, 2, 2, 'WHATSAPP', '+917467075620', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/xxxxxxxxxx', 'SM0352212b6207470993c116e5d65739de', NULL, NULL, '2021-08-23 04:52:30', 'test', NULL, NULL, NULL, 'FAILED', NULL, '2021-08-23 04:52:30', '2021-08-23 04:52:31'),
(109, 2, 2, 'WHATSAPP', '+917467075620', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/xxxxxxxxxx', 'SM04784c752f3e4d889feaf634cc654263', NULL, NULL, '2021-08-23 05:03:09', 'test', NULL, NULL, NULL, 'FAILED', NULL, '2021-08-23 05:03:09', '2021-08-23 05:03:10'),
(110, 2, 2, 'WHATSAPP', '+917618666966', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/xxxxxxxxxx', 'SM3f9ee519877343569b078c01abc0daa7', NULL, NULL, '2021-08-23 05:05:27', 'test', NULL, NULL, NULL, 'READ', NULL, '2021-08-23 05:05:27', '2021-08-23 05:05:34'),
(111, 2, 2, 'WHATSAPP', '+917467075620', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/xxxxxxxxxx', 'SMe790384d7d5643beb726c86e7c897044', NULL, NULL, '2021-08-23 05:24:30', 'test', NULL, NULL, NULL, 'FAILED', 'Twilio Error: [Account not associated with a sandbox]', '2021-08-23 05:24:30', '2021-08-23 05:24:32'),
(112, 2, 2, 'WHATSAPP', '+917618666966', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/A3jPLY90Lr', 'SM10ea5416fed648afa549779ceef2dfd9', NULL, NULL, '2021-08-23 05:25:37', 'live', NULL, NULL, NULL, 'READ', 'N/A', '2021-08-23 05:25:38', '2021-08-23 05:26:50'),
(113, 2, 2, 'WHATSAPP', '+917508498585', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/n9awnYyVzR', 'SM40e135580af949d884ec2fc51beff2fa', NULL, NULL, '2021-08-23 05:25:39', 'live', NULL, NULL, NULL, 'FAILED', 'Twilio Error: [Account not associated with a sandbox]', '2021-08-23 05:25:39', '2021-08-23 05:25:40'),
(114, 2, 2, 'WHATSAPP', '+916283009504', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/x5J0WYaw6B', 'SM8ba3768525704c78a65b7e1852526c31', NULL, NULL, '2021-08-23 05:25:40', 'live', NULL, NULL, NULL, 'FAILED', 'Twilio Error: [Account not associated with a sandbox]', '2021-08-23 05:25:40', '2021-08-23 05:25:42'),
(115, 2, 2, 'WHATSAPP', '+917009341662', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/jdQ0v77VZD', 'SM8853ef5cfbab458282fa4c1584a08543', NULL, NULL, '2021-08-23 05:25:42', 'live', NULL, NULL, NULL, 'FAILED', 'Twilio Error: [Account not associated with a sandbox]', '2021-08-23 05:25:42', '2021-08-23 05:25:43'),
(116, 2, 2, 'WHATSAPP', '+919877028691', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/3d70aEN0EW', 'SM7a4180c8e8d5466b8fa774bd57dada14', NULL, NULL, '2021-08-23 05:25:43', 'live', NULL, NULL, NULL, 'FAILED', 'Twilio Error: [Account not associated with a sandbox]', '2021-08-23 05:25:43', '2021-08-23 05:25:44'),
(117, 2, 2, 'WHATSAPP', '+18884489088', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/5aB0D2zwNY', 'SM9e7d0f12fb5c42378830e88e80a99dad', NULL, NULL, '2021-08-23 05:25:44', 'live', NULL, NULL, NULL, 'FAILED', 'Twilio Error: [Account not associated with a sandbox]', '2021-08-23 05:25:44', '2021-08-23 05:25:46'),
(118, 2, 2, 'WHATSAPP', '+919817498008', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/xxxxxxxxxx', 'SMe644d9c1d8e4465cbc08e937d2426bcb', NULL, NULL, '2021-08-23 05:33:45', 'test', NULL, NULL, NULL, 'READ', 'N/A', '2021-08-23 05:33:46', '2021-08-23 05:33:58'),
(119, 2, 2, 'WHATSAPP', '+919817498008', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/xxxxxxxxxx', 'SM48567ad050f74a5093426f5b0562ecc8', NULL, NULL, '2021-08-23 05:34:44', 'test', NULL, NULL, NULL, 'FAILED', 'Twilio Error: [Account not associated with a sandbox]', '2021-08-23 05:34:44', '2021-08-23 05:34:45'),
(120, 1, 3, 'SMS', '+14045142113', 'Nitin> This is 9th test message to test twilio api https://www.iamwhiz.com/test-kdmsg/land/xxxxxxxxxx', 'SM4ad04cf7ea76410c97f537644b35c16d', 'N/A', NULL, '2021-09-14 06:09:10', 'test', NULL, NULL, NULL, 'DELIVERED', 'N/A', '2021-09-14 06:09:10', '2021-09-14 18:09:12'),
(121, 1, 3, 'SMS', '+14045142113', 'Nitin> This is 9th test message to test twilio api https://www.iamwhiz.com/test-kdmsg/land/Zgo0OegwXd', 'SMb9d3fcd51ff94cb0bd00f134561963d8', 'N/A', NULL, '2021-09-14 06:10:24', 'test', NULL, NULL, NULL, 'DELIVERED', 'N/A', '2021-09-14 06:10:24', '2021-09-14 18:10:26'),
(122, 1, 3, 'SMS', '+14045142113', 'Nitin> This is 10th SMS test message to test twilio api https://www.iamwhiz.com/test-kdmsg/land/xxxxxxxxxx', 'SM133bd701b6fb435a9018154432adca47', 'N/A', NULL, '2021-09-14 06:11:14', 'test', NULL, NULL, NULL, 'DELIVERED', 'N/A', '2021-09-14 06:11:14', '2021-09-14 18:11:16'),
(123, 1, 3, 'SMS', '+14045142113', 'Nitin> This is 10th SMS List test message to test twilio api https://www.iamwhiz.com/test-kdmsg/land/le206prwEn', 'SM819d57fed87247b0a0b60150eb5bbb65', 'N/A', NULL, '2021-09-14 06:12:07', 'test', NULL, NULL, NULL, 'DELIVERED', 'N/A', '2021-09-14 06:12:07', '2021-09-14 18:12:09'),
(124, 2, 2, 'WHATSAPP', '+18884489088', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/xxxxxxxxxx', 'SM31029432c4a54f1a8c451c40343b42af', NULL, NULL, '2021-09-14 06:27:58', 'test', NULL, NULL, NULL, 'READ', 'N/A', '2021-09-14 06:27:58', '2021-09-14 18:28:25'),
(125, 2, 2, 'WHATSAPP', '+18884489088', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/xxxxxxxxxx', 'SM81636b21f6d94073afc1e2215b94530b', NULL, NULL, '2021-09-14 06:28:26', 'test', NULL, NULL, NULL, 'READ', 'N/A', '2021-09-14 06:28:26', '2021-09-14 18:28:41'),
(126, 2, 2, 'WHATSAPP', '+14045142113', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/xxxxxxxxxx', 'SMa24e7a056af5495d84c9f72934661dc9', NULL, NULL, '2021-09-14 06:30:20', 'test', NULL, NULL, NULL, 'FAILED', 'Twilio Error: [Account not associated with a sandbox]', '2021-09-14 06:30:20', '2021-09-14 18:30:21'),
(127, 2, 2, 'WHATSAPP', '+18884489088', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/xxxxxxxxxx', 'SMeb6f43446aac4784a72701146514b988', NULL, NULL, '2021-09-14 06:35:35', 'test', NULL, NULL, NULL, 'READ', 'N/A', '2021-09-14 06:35:35', '2021-09-14 18:35:49'),
(128, 2, 2, 'WHATSAPP', '+14045142113', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/xxxxxxxxxx', 'SMc549803b2e754474bb1b4e89b78c610c', NULL, NULL, '2021-09-14 06:36:12', 'test', NULL, NULL, NULL, 'FAILED', 'Twilio Error: [Account not associated with a sandbox]', '2021-09-14 06:36:12', '2021-09-14 18:36:13'),
(129, 2, 2, 'WHATSAPP', '+14045142113', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/xxxxxxxxxx', 'SMbb8d7e10ae5f47dda56f06c8fa3e5413', NULL, NULL, '2021-09-14 06:37:27', 'test', NULL, NULL, NULL, 'FAILED', 'Twilio Error: [Account not associated with a sandbox]', '2021-09-14 06:37:27', '2021-09-14 18:37:28'),
(130, 2, 2, 'WHATSAPP', '+18884489088', 'Whatsapp> Your {{1}} code is {{2}}yyuuuytuyu https://www.iamwhiz.com/test-kdmsg/land/xxxxxxxxxx', 'SMcf9d3d1e7bc149d888592a08acdfd912', NULL, NULL, '2021-09-14 06:37:47', 'test', NULL, NULL, NULL, 'READ', 'N/A', '2021-09-14 06:37:48', '2021-09-14 19:16:43'),
(131, 1, 3, 'SMS', '+14045142113', 'Nitin> This is 12th SMS List test message to test twilio api https://www.iamwhiz.com/test-kdmsg/land/xxxxxxxxxx', 'SMf81761306cf24288a118c8ebc3585b1a', 'N/A', NULL, '2021-09-14 06:42:53', 'test', NULL, NULL, NULL, 'DELIVERED', 'N/A', '2021-09-14 06:42:53', '2021-09-14 18:42:55'),
(132, 1, 3, 'SMS', '+14045142113', 'Nitin> This is 12th SMS List test message to test twilio api https://www.iamwhiz.com/test-kdmsg/land/ly2VQLd0WX', 'SM8df868aa60ca40f8a8e9b8aabaac52ea', 'N/A', NULL, '2021-09-14 06:43:17', 'test', NULL, NULL, NULL, 'DELIVERED', 'N/A', '2021-09-14 06:43:17', '2021-09-14 18:43:19'),
(133, 1, 3, 'SMS', '+14045142113', 'Nitin> This is 12th SMS List test message to test twilio api https://www.iamwhiz.com/test-kdmsg/land/xxxxxxxxxx', 'SM1995ad96bdfa487fb15b04793dd38ea6', 'N/A', NULL, '2021-09-14 06:43:51', 'test', NULL, NULL, NULL, 'DELIVERED', 'N/A', '2021-09-14 06:43:51', '2021-09-14 18:43:52'),
(134, 1, 3, 'SMS', '+14045142113', 'Nitin> This is 12th SMS List test message to test twilio api https://www.iamwhiz.com/test-kdmsg/land/QxAVx7L0py', 'SM75096d8f9237496494399528c06c3a04', 'N/A', NULL, '2021-09-14 06:44:09', 'test', NULL, NULL, NULL, 'DELIVERED', 'N/A', '2021-09-14 06:44:09', '2021-09-14 18:44:11');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_clicks`
--

CREATE TABLE `delivery_clicks` (
  `id` int(255) NOT NULL,
  `list_phone_number_id` int(255) NOT NULL,
  `campaign_id` int(255) NOT NULL,
  `brand_id` int(255) NOT NULL,
  `click_count` int(255) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `delivery_clicks`
--

INSERT INTO `delivery_clicks` (`id`, `list_phone_number_id`, `campaign_id`, `brand_id`, `click_count`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, 4, '2021-08-02 12:58:00', '2021-08-11 06:27:34'),
(3, 6, 2, 2, 7, '2021-08-20 05:02:32', '2021-08-23 05:26:54'),
(4, 7, 2, 2, 4, '2021-08-20 05:02:33', '2021-08-20 23:25:16'),
(5, 9, 2, 2, 4, '2021-08-20 05:02:36', '2021-08-20 23:25:18'),
(6, 12, 2, 2, 5, '2021-08-20 05:02:39', '2021-09-14 18:28:41');

-- --------------------------------------------------------

--
-- Table structure for table `incoming_messages`
--

CREATE TABLE `incoming_messages` (
  `id` int(255) NOT NULL,
  `message_id` text DEFAULT NULL,
  `platform` text DEFAULT NULL,
  `body` text DEFAULT NULL,
  `segments` text DEFAULT NULL,
  `from_phone` text DEFAULT NULL,
  `file_url` text DEFAULT NULL,
  `account_id` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `incoming_messages`
--

INSERT INTO `incoming_messages` (`id`, `message_id`, `platform`, `body`, `segments`, `from_phone`, `file_url`, `account_id`, `created_at`, `updated_at`) VALUES
(1, 'SMa15b70a20911b5e81c94eb767998a9ab', 'WHATSAPP', ',', '1', '+14155238886', NULL, 'AC345bd84584cf0242aecdd821726e130b', '2021-12-08 13:16:52', '2021-12-08 13:16:52'),
(2, 'SMd554a6100ffaafe93b2f9688c746dfee', 'WHATSAPP', 'or bosdike', '1', '+14155238886', NULL, 'AC345bd84584cf0242aecdd821726e130b', '2021-12-08 13:17:43', '2021-12-08 13:17:43'),
(3, 'SM399fe38b98340a93c784d66bdc6a38b5', 'WHATSAPP', 'kya haal hai', '1', '+14155238886', NULL, 'AC345bd84584cf0242aecdd821726e130b', '2021-12-08 13:17:45', '2021-12-08 13:17:45'),
(4, 'SM9506dc3bf416fabb06eaed9683c10413', 'WHATSAPP', 'ganduuu', '1', '+14155238886', NULL, 'AC345bd84584cf0242aecdd821726e130b', '2021-12-08 13:17:47', '2021-12-08 13:17:47'),
(5, 'SMa6c78ab91816ce13e941a0d7ec1eb353', 'WHATSAPP', 'Hi', '1', '+14155238886', NULL, 'AC345bd84584cf0242aecdd821726e130b', '2021-12-08 13:19:56', '2021-12-08 13:19:56'),
(6, 'MM8e4326b5b280cf7a1f7ed9b3ced961b2', 'WHATSAPP', NULL, '1', '+14155238886', 'https://api.twilio.com/2010-04-01/Accounts/AC345bd84584cf0242aecdd821726e130b/Messages/MM8e4326b5b280cf7a1f7ed9b3ced961b2/Media/MEd874b3cff1ce9cb5d06626bc0d82e284', 'AC345bd84584cf0242aecdd821726e130b', '2021-12-08 13:23:13', '2021-12-08 13:23:13');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` varchar(64) COLLATE utf8mb3_unicode_ci NOT NULL,
  `value` varchar(64) COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `value`) VALUES
('aa', 'Afar'),
('ab', 'Abkhazian'),
('ace', 'Achinese'),
('ach', 'Acoli'),
('ada', 'Adangme'),
('ady', 'Adyghe'),
('ae', 'Avestan'),
('aeb', 'Tunisian Arabic'),
('af', 'Afrikaans'),
('afh', 'Afrihili'),
('agq', 'Aghem'),
('ain', 'Ainu'),
('ak', 'Akan'),
('akk', 'Akkadian'),
('akz', 'Alabama'),
('ale', 'Aleut'),
('aln', 'Gheg Albanian'),
('alt', 'Southern Altai'),
('am', 'Amarik'),
('an', 'Aragonese'),
('ang', 'Old English'),
('anp', 'Angika'),
('ar', 'Arabik'),
('ar_001', 'Modern Standard Arabic'),
('arc', 'Aramaic'),
('arn', 'Mapuche'),
('aro', 'Araona'),
('arp', 'Arapaho'),
('arq', 'Algerian Arabic'),
('arw', 'Arawak'),
('ary', 'Moroccan Arabic'),
('arz', 'Egyptian Arabic'),
('as', 'Assamese'),
('asa', 'Asu'),
('ase', 'American Sign Language'),
('ast', 'Asturian'),
('av', 'Avaric'),
('avk', 'Kotava'),
('awa', 'Awadhi'),
('ay', 'Aymara'),
('az', 'Azerbaijani'),
('azb', 'South Azerbaijani'),
('ba', 'Bashkir'),
('bal', 'Baluchi'),
('ban', 'Balinese'),
('bar', 'Bavarian'),
('bas', 'Basaa'),
('bax', 'Bamun'),
('bbc', 'Batak Toba'),
('bbj', 'Ghomala'),
('be', 'Belarus kasa'),
('bej', 'Beja'),
('bem', 'Bemba'),
('bew', 'Betawi'),
('bez', 'Bena'),
('bfd', 'Bafut'),
('bfq', 'Badaga'),
('bg', 'Bɔlgeria kasa'),
('bho', 'Bhojpuri'),
('bi', 'Bislama'),
('bik', 'Bikol'),
('bin', 'Bini'),
('bjn', 'Banjar'),
('bkm', 'Kom'),
('bla', 'Siksika'),
('bm', 'Bambara'),
('bn', 'Bengali kasa'),
('bo', 'Tibetan'),
('bpy', 'Bishnupriya'),
('bqi', 'Bakhtiari'),
('br', 'Breton'),
('bra', 'Braj'),
('brh', 'Brahui'),
('brx', 'Bodo'),
('bs', 'Bosnian'),
('bss', 'Akoose'),
('bua', 'Buriat'),
('bug', 'Buginese'),
('bum', 'Bulu'),
('byn', 'Blin'),
('byv', 'Medumba'),
('ca', 'Catalan'),
('cad', 'Caddo'),
('car', 'Carib'),
('cay', 'Cayuga'),
('cch', 'Atsam'),
('ce', 'Chechen'),
('ceb', 'Cebuano'),
('cgg', 'Chiga'),
('ch', 'Chamorro'),
('chb', 'Chibcha'),
('chg', 'Chagatai'),
('chk', 'Chuukese'),
('chm', 'Mari'),
('chn', 'Chinook Jargon'),
('cho', 'Choctaw'),
('chp', 'Chipewyan'),
('chr', 'Cherokee'),
('chy', 'Cheyenne'),
('ckb', 'Central Kurdish'),
('co', 'Corsican'),
('cop', 'Coptic'),
('cps', 'Capiznon'),
('cr', 'Cree'),
('crh', 'Crimean Turkish'),
('cs', 'Kyɛk kasa'),
('csb', 'Kashubian'),
('cu', 'Church Slavic'),
('cv', 'Chuvash'),
('cy', 'Welsh'),
('da', 'Danish'),
('dak', 'Dakota'),
('dar', 'Dargwa'),
('dav', 'Taita'),
('de', 'Gyaaman'),
('de_AT', 'Austrian German'),
('de_CH', 'Swiss High German'),
('del', 'Delaware'),
('den', 'Slave'),
('dgr', 'Dogrib'),
('din', 'Dinka'),
('dje', 'Zarma'),
('doi', 'Dogri'),
('dsb', 'Lower Sorbian'),
('dtp', 'Central Dusun'),
('dua', 'Duala'),
('dum', 'Middle Dutch'),
('dv', 'Divehi'),
('dyo', 'Jola-Fonyi'),
('dyu', 'Dyula'),
('dz', 'Dzongkha'),
('dzg', 'Dazaga'),
('ebu', 'Embu'),
('ee', 'Ewe'),
('efi', 'Efik'),
('egl', 'Emilian'),
('egy', 'Ancient Egyptian'),
('eka', 'Ekajuk'),
('el', 'Greek kasa'),
('elx', 'Elamite'),
('en', 'Borɔfo'),
('en_AU', 'Australian English'),
('en_CA', 'Canadian English'),
('en_GB', 'British English'),
('en_US', 'American English'),
('enm', 'Middle English'),
('eo', 'Esperanto'),
('es', 'Spain kasa'),
('es_419', 'Latin American Spanish'),
('es_ES', 'European Spanish'),
('es_MX', 'Mexican Spanish'),
('esu', 'Central Yupik'),
('et', 'Estonian'),
('eu', 'Basque'),
('ewo', 'Ewondo'),
('ext', 'Extremaduran'),
('fa', 'Pɛɛhyia kasa'),
('fan', 'Fang'),
('fat', 'Fanti'),
('ff', 'Fulah'),
('fi', 'Finnish'),
('fil', 'Filipino'),
('fit', 'Tornedalen Finnish'),
('fj', 'Fijian'),
('fo', 'Faroese'),
('fon', 'Fon'),
('fr', 'Frɛnkye'),
('fr_CA', 'Canadian French'),
('fr_CH', 'Swiss French'),
('frc', 'Cajun French'),
('frm', 'Middle French'),
('fro', 'Old French'),
('frp', 'Arpitan'),
('frr', 'Northern Frisian'),
('frs', 'Eastern Frisian'),
('fur', 'Friulian'),
('fy', 'Western Frisian'),
('ga', 'Irish'),
('gaa', 'Ga'),
('gag', 'Gagauz'),
('gan', 'Gan Chinese'),
('gay', 'Gayo'),
('gba', 'Gbaya'),
('gbz', 'Zoroastrian Dari'),
('gd', 'Scottish Gaelic'),
('gez', 'Geez'),
('gil', 'Gilbertese'),
('gl', 'Galician'),
('glk', 'Gilaki'),
('gmh', 'Middle High German'),
('gn', 'Guarani'),
('goh', 'Old High German'),
('gom', 'Goan Konkani'),
('gon', 'Gondi'),
('gor', 'Gorontalo'),
('got', 'Gothic'),
('grb', 'Grebo'),
('grc', 'Ancient Greek'),
('gsw', 'Swiss German'),
('gu', 'Gujarati'),
('guc', 'Wayuu'),
('gur', 'Frafra'),
('guz', 'Gusii'),
('gv', 'Manx'),
('gwi', 'Gwichʼin'),
('ha', 'Hausa'),
('hai', 'Haida'),
('hak', 'Hakka Chinese'),
('haw', 'Hawaiian'),
('he', 'Hebrew'),
('hi', 'Hindi'),
('hif', 'Fiji Hindi'),
('hil', 'Hiligaynon'),
('hit', 'Hittite'),
('hmn', 'Hmong'),
('ho', 'Hiri Motu'),
('hr', 'Croatian'),
('hsb', 'Upper Sorbian'),
('hsn', 'Xiang Chinese'),
('ht', 'Haitian'),
('hu', 'Hangri kasa'),
('hup', 'Hupa'),
('hy', 'Armenian'),
('hz', 'Herero'),
('ia', 'Interlingua'),
('iba', 'Iban'),
('ibb', 'Ibibio'),
('id', 'Indonihyia kasa'),
('ie', 'Interlingue'),
('ig', 'Igbo'),
('ii', 'Sichuan Yi'),
('ik', 'Inupiaq'),
('ilo', 'Iloko'),
('inh', 'Ingush'),
('io', 'Ido'),
('is', 'Icelandic'),
('it', 'Italy kasa'),
('iu', 'Inuktitut'),
('izh', 'Ingrian'),
('ja', 'Gyapan kasa'),
('jam', 'Jamaican Creole English'),
('jbo', 'Lojban'),
('jgo', 'Ngomba'),
('jmc', 'Machame'),
('jpr', 'Judeo-Persian'),
('jrb', 'Judeo-Arabic'),
('jut', 'Jutish'),
('jv', 'Gyabanis kasa'),
('ka', 'Georgian'),
('kaa', 'Kara-Kalpak'),
('kab', 'Kabyle'),
('kac', 'Kachin'),
('kaj', 'Jju'),
('kam', 'Kamba'),
('kaw', 'Kawi'),
('kbd', 'Kabardian'),
('kbl', 'Kanembu'),
('kcg', 'Tyap'),
('kde', 'Makonde'),
('kea', 'Kabuverdianu'),
('ken', 'Kenyang'),
('kfo', 'Koro'),
('kg', 'Kongo'),
('kgp', 'Kaingang'),
('kha', 'Khasi'),
('kho', 'Khotanese'),
('khq', 'Koyra Chiini'),
('khw', 'Khowar'),
('ki', 'Kikuyu'),
('kiu', 'Kirmanjki'),
('kj', 'Kuanyama'),
('kk', 'Kazakh'),
('kkj', 'Kako'),
('kl', 'Kalaallisut'),
('kln', 'Kalenjin'),
('km', 'Kambodia kasa'),
('kmb', 'Kimbundu'),
('kn', 'Kannada'),
('ko', 'Korea kasa'),
('koi', 'Komi-Permyak'),
('kok', 'Konkani'),
('kos', 'Kosraean'),
('kpe', 'Kpelle'),
('kr', 'Kanuri'),
('krc', 'Karachay-Balkar'),
('kri', 'Krio'),
('krj', 'Kinaray-a'),
('krl', 'Karelian'),
('kru', 'Kurukh'),
('ks', 'Kashmiri'),
('ksb', 'Shambala'),
('ksf', 'Bafia'),
('ksh', 'Colognian'),
('ku', 'Kurdish'),
('kum', 'Kumyk'),
('kut', 'Kutenai'),
('kv', 'Komi'),
('kw', 'Cornish'),
('ky', 'Kyrgyz'),
('la', 'Latin'),
('lad', 'Ladino'),
('lag', 'Langi'),
('lah', 'Lahnda'),
('lam', 'Lamba'),
('lb', 'Luxembourgish'),
('lez', 'Lezghian'),
('lfn', 'Lingua Franca Nova'),
('lg', 'Ganda'),
('li', 'Limburgish'),
('lij', 'Ligurian'),
('liv', 'Livonian'),
('lkt', 'Lakota'),
('lmo', 'Lombard'),
('ln', 'Lingala'),
('lo', 'Lao'),
('lol', 'Mongo'),
('loz', 'Lozi'),
('lt', 'Lithuanian'),
('ltg', 'Latgalian'),
('lu', 'Luba-Katanga'),
('lua', 'Luba-Lulua'),
('lui', 'Luiseno'),
('lun', 'Lunda'),
('luo', 'Luo'),
('lus', 'Mizo'),
('luy', 'Luyia'),
('lv', 'Latvian'),
('lzh', 'Literary Chinese'),
('lzz', 'Laz'),
('mad', 'Madurese'),
('maf', 'Mafa'),
('mag', 'Magahi'),
('mai', 'Maithili'),
('mak', 'Makasar'),
('man', 'Mandingo'),
('mas', 'Masai'),
('mde', 'Maba'),
('mdf', 'Moksha'),
('mdr', 'Mandar'),
('men', 'Mende'),
('mer', 'Meru'),
('mfe', 'Morisyen'),
('mg', 'Malagasy'),
('mga', 'Middle Irish'),
('mgh', 'Makhuwa-Meetto'),
('mgo', 'Metaʼ'),
('mh', 'Marshallese'),
('mi', 'Maori'),
('mic', 'Micmac'),
('min', 'Minangkabau'),
('mk', 'Macedonian'),
('ml', 'Malayalam'),
('mn', 'Mongolian'),
('mnc', 'Manchu'),
('mni', 'Manipuri'),
('moh', 'Mohawk'),
('mos', 'Mossi'),
('mr', 'Marathi'),
('mrj', 'Western Mari'),
('ms', 'Malay kasa'),
('mt', 'Maltese'),
('mua', 'Mundang'),
('mul', 'Multiple Languages'),
('mus', 'Creek'),
('mwl', 'Mirandese'),
('mwr', 'Marwari'),
('mwv', 'Mentawai'),
('my', 'Bɛɛmis kasa'),
('mye', 'Myene'),
('myv', 'Erzya'),
('mzn', 'Mazanderani'),
('na', 'Nauru'),
('nan', 'Min Nan Chinese'),
('nap', 'Neapolitan'),
('naq', 'Nama'),
('nb', 'Norwegian Bokmål'),
('nd', 'North Ndebele'),
('nds', 'Low German'),
('ne', 'Nɛpal kasa'),
('new', 'Newari'),
('ng', 'Ndonga'),
('nia', 'Nias'),
('niu', 'Niuean'),
('njo', 'Ao Naga'),
('nl', 'Dɛɛkye'),
('nl_BE', 'Flemish'),
('nmg', 'Kwasio'),
('nn', 'Norwegian Nynorsk'),
('nnh', 'Ngiemboon'),
('no', 'Norwegian'),
('nog', 'Nogai'),
('non', 'Old Norse'),
('nov', 'Novial'),
('nqo', 'NʼKo'),
('nr', 'South Ndebele'),
('nso', 'Northern Sotho'),
('nus', 'Nuer'),
('nv', 'Navajo'),
('nwc', 'Classical Newari'),
('ny', 'Nyanja'),
('nym', 'Nyamwezi'),
('nyn', 'Nyankole'),
('nyo', 'Nyoro'),
('nzi', 'Nzima'),
('oc', 'Occitan'),
('oj', 'Ojibwa'),
('om', 'Oromo'),
('or', 'Oriya'),
('os', 'Ossetic'),
('osa', 'Osage'),
('ota', 'Ottoman Turkish'),
('pa', 'Pungyabi kasa'),
('pag', 'Pangasinan'),
('pal', 'Pahlavi'),
('pam', 'Pampanga'),
('pap', 'Papiamento'),
('pau', 'Palauan'),
('pcd', 'Picard'),
('pdc', 'Pennsylvania German'),
('pdt', 'Plautdietsch'),
('peo', 'Old Persian'),
('pfl', 'Palatine German'),
('phn', 'Phoenician'),
('pi', 'Pali'),
('pl', 'Pɔland kasa'),
('pms', 'Piedmontese'),
('pnt', 'Pontic'),
('pon', 'Pohnpeian'),
('prg', 'Prussian'),
('pro', 'Old Provençal'),
('ps', 'Pashto'),
('pt', 'Pɔɔtugal kasa'),
('pt_BR', 'Brazilian Portuguese'),
('pt_PT', 'European Portuguese'),
('qu', 'Quechua'),
('quc', 'Kʼicheʼ'),
('qug', 'Chimborazo Highland Quichua'),
('raj', 'Rajasthani'),
('rap', 'Rapanui'),
('rar', 'Rarotongan'),
('rgn', 'Romagnol'),
('rif', 'Riffian'),
('rm', 'Romansh'),
('rn', 'Rundi'),
('ro', 'Romenia kasa'),
('ro_MD', 'Moldavian'),
('rof', 'Rombo'),
('rom', 'Romany'),
('root', 'Root'),
('rtm', 'Rotuman'),
('ru', 'Rahyia kasa'),
('rue', 'Rusyn'),
('rug', 'Roviana'),
('rup', 'Aromanian'),
('rw', 'Rewanda kasa'),
('rwk', 'Rwa'),
('sa', 'Sanskrit'),
('sad', 'Sandawe'),
('sah', 'Sakha'),
('sam', 'Samaritan Aramaic'),
('saq', 'Samburu'),
('sas', 'Sasak'),
('sat', 'Santali'),
('saz', 'Saurashtra'),
('sba', 'Ngambay'),
('sbp', 'Sangu'),
('sc', 'Sardinian'),
('scn', 'Sicilian'),
('sco', 'Scots'),
('sd', 'Sindhi'),
('sdc', 'Sassarese Sardinian'),
('se', 'Northern Sami'),
('see', 'Seneca'),
('seh', 'Sena'),
('sei', 'Seri'),
('sel', 'Selkup'),
('ses', 'Koyraboro Senni'),
('sg', 'Sango'),
('sga', 'Old Irish'),
('sgs', 'Samogitian'),
('sh', 'Serbo-Croatian'),
('shi', 'Tachelhit'),
('shn', 'Shan'),
('shu', 'Chadian Arabic'),
('si', 'Sinhala'),
('sid', 'Sidamo'),
('sk', 'Slovak'),
('sl', 'Slovenian'),
('sli', 'Lower Silesian'),
('sly', 'Selayar'),
('sm', 'Samoan'),
('sma', 'Southern Sami'),
('smj', 'Lule Sami'),
('smn', 'Inari Sami'),
('sms', 'Skolt Sami'),
('sn', 'Shona'),
('snk', 'Soninke'),
('so', 'Somalia kasa'),
('sog', 'Sogdien'),
('sq', 'Albanian'),
('sr', 'Serbian'),
('srn', 'Sranan Tongo'),
('srr', 'Serer'),
('ss', 'Swati'),
('ssy', 'Saho'),
('st', 'Southern Sotho'),
('stq', 'Saterland Frisian'),
('su', 'Sundanese'),
('suk', 'Sukuma'),
('sus', 'Susu'),
('sux', 'Sumerian'),
('sv', 'Sweden kasa'),
('sw', 'Swahili'),
('swb', 'Comorian'),
('swc', 'Congo Swahili'),
('syc', 'Classical Syriac'),
('syr', 'Syriac'),
('szl', 'Silesian'),
('ta', 'Tamil kasa'),
('tcy', 'Tulu'),
('te', 'Telugu'),
('tem', 'Timne'),
('teo', 'Teso'),
('ter', 'Tereno'),
('tet', 'Tetum'),
('tg', 'Tajik'),
('th', 'Taeland kasa'),
('ti', 'Tigrinya'),
('tig', 'Tigre'),
('tiv', 'Tiv'),
('tk', 'Turkmen'),
('tkl', 'Tokelau'),
('tkr', 'Tsakhur'),
('tl', 'Tagalog'),
('tlh', 'Klingon'),
('tli', 'Tlingit'),
('tly', 'Talysh'),
('tmh', 'Tamashek'),
('tn', 'Tswana'),
('to', 'Tongan'),
('tog', 'Nyasa Tonga'),
('tpi', 'Tok Pisin'),
('tr', 'Tɛɛki kasa'),
('tru', 'Turoyo'),
('trv', 'Taroko'),
('ts', 'Tsonga'),
('tsd', 'Tsakonian'),
('tsi', 'Tsimshian'),
('tt', 'Tatar'),
('ttt', 'Muslim Tat'),
('tum', 'Tumbuka'),
('tvl', 'Tuvalu'),
('tw', 'Twi'),
('twq', 'Tasawaq'),
('ty', 'Tahitian'),
('tyv', 'Tuvinian'),
('tzm', 'Central Atlas Tamazight'),
('udm', 'Udmurt'),
('ug', 'Uyghur'),
('uga', 'Ugaritic'),
('uk', 'Ukren kasa'),
('umb', 'Umbundu'),
('und', 'Unknown Language'),
('ur', 'Urdu kasa'),
('uz', 'Uzbek'),
('vai', 'Vai'),
('ve', 'Venda'),
('vec', 'Venetian'),
('vep', 'Veps'),
('vi', 'Viɛtnam kasa'),
('vls', 'West Flemish'),
('vmf', 'Main-Franconian'),
('vo', 'Volapük'),
('vot', 'Votic'),
('vro', 'Võro'),
('vun', 'Vunjo'),
('wa', 'Walloon'),
('wae', 'Walser'),
('wal', 'Wolaytta'),
('war', 'Waray'),
('was', 'Washo'),
('wbp', 'Warlpiri'),
('wo', 'Wolof'),
('wuu', 'Wu Chinese'),
('xal', 'Kalmyk'),
('xh', 'Xhosa'),
('xmf', 'Mingrelian'),
('xog', 'Soga'),
('yao', 'Yao'),
('yap', 'Yapese'),
('yav', 'Yangben'),
('ybb', 'Yemba'),
('yi', 'Yiddish'),
('yo', 'Yoruba'),
('yrl', 'Nheengatu'),
('yue', 'Cantonese'),
('za', 'Zhuang'),
('zap', 'Zapotec'),
('zbl', 'Blissymbols'),
('zea', 'Zeelandic'),
('zen', 'Zenaga'),
('zgh', 'Standard Moroccan Tamazight'),
('zh', 'Kyaena kasa'),
('zh_Hans', 'Simplified Chinese'),
('zh_Hant', 'Traditional Chinese'),
('zu', 'Zulu'),
('zun', 'Zuni'),
('zxx', 'No linguistic content'),
('zza', 'Zaza');

-- --------------------------------------------------------

--
-- Table structure for table `lists`
--

CREATE TABLE `lists` (
  `id` int(15) NOT NULL,
  `brand_id` int(15) DEFAULT NULL,
  `list_hash` varchar(1000) DEFAULT NULL,
  `list_name` varchar(1000) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `lists`
--

INSERT INTO `lists` (`id`, `brand_id`, `list_hash`, `list_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'x5J0Waw6Bd', 'Indian Customers', NULL, '2021-08-02 06:49:07'),
(2, 1, 'jdQ0v7VZDY', 'USCustomers', NULL, '2021-08-03 13:16:37'),
(3, 2, '3d70aNVEWz', 'Whatsapp Indian Customers', NULL, '2021-08-19 08:27:43');

-- --------------------------------------------------------

--
-- Table structure for table `list_numbers`
--

CREATE TABLE `list_numbers` (
  `id` int(11) NOT NULL,
  `list_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `list_number_hash` varchar(1000) DEFAULT NULL,
  `first_name` varchar(1000) DEFAULT NULL,
  `last_name` varchar(1000) DEFAULT NULL,
  `phone_number` varchar(1000) DEFAULT NULL,
  `bad_number` tinyint(2) DEFAULT 0,
  `opted_out` tinyint(2) DEFAULT 0,
  `whatsapp_opt` tinyint(2) DEFAULT 2,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `list_numbers`
--

INSERT INTO `list_numbers` (`id`, `list_id`, `brand_id`, `list_number_hash`, `first_name`, `last_name`, `phone_number`, `bad_number`, `opted_out`, `whatsapp_opt`, `created_at`, `updated_at`) VALUES
(5, 2, 1, 'Zgo0Og0Xdz', 'Will', 'M', '+14045142113', 0, 0, 2, NULL, '2021-08-03 13:17:03'),
(6, 3, 2, 'le206r0Eny', 'Nitin', 'Nitin', '+917618666966', 0, 0, 0, NULL, '2021-08-19 08:28:36'),
(7, 3, 2, 'XBZVbKwbdR', 'Php', 'Bawa', '+917508498585', 0, 0, 1, NULL, '2021-08-19 09:57:31'),
(8, 3, 2, 'ly2VQd0WXp', 'Nitin', '2', '+916283009504', 0, 0, 1, NULL, '2021-08-19 10:16:13'),
(9, 3, 2, 'QxAVxLVpym', 'Php', 'Freak 6', '+917009341662', 0, 0, 0, NULL, '2021-08-19 10:45:06'),
(10, 3, 2, 'rnQw4Xwl2J', 'Php', 'Freak 10', '+919877028691', 0, 0, 0, NULL, '2021-08-19 10:56:49'),
(12, 3, 2, 'xLZ0lBwQmn', 'Kalahari', 'D', '+18884489088', 0, 0, 2, NULL, '2021-08-20 23:20:17');

-- --------------------------------------------------------

--
-- Table structure for table `message_info`
--

CREATE TABLE `message_info` (
  `message_info_id` int(255) NOT NULL,
  `brand_id` int(255) NOT NULL,
  `campaign_id` int(255) NOT NULL,
  `list_number_id` int(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `message_info`
--

INSERT INTO `message_info` (`message_info_id`, `brand_id`, `campaign_id`, `list_number_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2021-08-02 06:51:14', '2021-08-02 06:51:14'),
(2, 1, 1, 2, '2021-08-02 06:51:17', '2021-08-02 06:51:17'),
(3, 1, 1, 3, '2021-08-02 06:51:19', '2021-08-02 06:51:19'),
(4, 1, 1, 1, '2021-08-02 06:53:29', '2021-08-02 06:53:29'),
(5, 1, 1, 2, '2021-08-02 06:53:32', '2021-08-02 06:53:32'),
(6, 1, 1, 3, '2021-08-02 06:53:34', '2021-08-02 06:53:34'),
(7, 1, 1, 4, '2021-08-02 06:53:37', '2021-08-02 06:53:37'),
(8, 1, 1, 1, '2021-08-02 11:26:34', '2021-08-02 11:26:34'),
(9, 1, 1, 2, '2021-08-02 11:26:37', '2021-08-02 11:26:37'),
(10, 1, 1, 3, '2021-08-02 11:26:39', '2021-08-02 11:26:39'),
(11, 1, 1, 4, '2021-08-02 11:26:41', '2021-08-02 11:26:41'),
(12, 1, 1, 1, '2021-08-02 12:32:29', '2021-08-02 12:32:29'),
(13, 1, 1, 2, '2021-08-02 12:32:31', '2021-08-02 12:32:31'),
(14, 1, 1, 4, '2021-08-02 12:32:34', '2021-08-02 12:32:34'),
(15, 1, 1, 1, '2021-08-02 12:33:17', '2021-08-02 12:33:17'),
(16, 1, 1, 2, '2021-08-02 12:33:20', '2021-08-02 12:33:20'),
(17, 1, 1, 4, '2021-08-02 12:33:22', '2021-08-02 12:33:22'),
(18, 1, 1, 1, '2021-08-02 12:40:28', '2021-08-02 12:40:28'),
(19, 1, 1, 1, '2021-08-02 12:45:37', '2021-08-02 12:45:37'),
(20, 1, 1, 2, '2021-08-02 12:45:39', '2021-08-02 12:45:39'),
(21, 1, 1, 1, '2021-08-02 12:51:57', '2021-08-02 12:51:57'),
(22, 1, 1, 2, '2021-08-02 12:51:58', '2021-08-02 12:51:58'),
(23, 1, 1, 5, '2021-08-04 05:53:39', '2021-08-04 05:53:39'),
(24, 1, 1, 5, '2021-08-04 05:54:21', '2021-08-04 05:54:21'),
(25, 1, 1, 5, '2021-08-04 05:54:33', '2021-08-04 05:54:33'),
(26, 1, 1, 5, '2021-08-11 06:13:17', '2021-08-11 06:13:17'),
(27, 1, 1, 5, '2021-08-11 06:14:36', '2021-08-11 06:14:36'),
(28, 1, 1, 2, '2021-08-11 06:14:47', '2021-08-11 06:14:47'),
(29, 1, 1, 2, '2021-08-11 06:26:36', '2021-08-11 06:26:36'),
(30, 1, 1, 5, '2021-08-13 16:20:39', '2021-08-13 16:20:39'),
(31, 1, 1, 5, '2021-08-13 16:21:54', '2021-08-13 16:21:54'),
(32, 1, 1, 5, '2021-08-13 16:22:59', '2021-08-13 16:22:59'),
(33, 2, 2, 6, '2021-08-19 09:37:11', '2021-08-19 09:37:11'),
(34, 2, 2, 6, '2021-08-19 09:58:14', '2021-08-19 09:58:14'),
(35, 2, 2, 7, '2021-08-19 09:58:16', '2021-08-19 09:58:16'),
(36, 2, 2, 6, '2021-08-19 10:46:41', '2021-08-19 10:46:41'),
(37, 2, 2, 7, '2021-08-19 10:46:43', '2021-08-19 10:46:43'),
(38, 2, 2, 8, '2021-08-19 10:46:44', '2021-08-19 10:46:44'),
(39, 2, 2, 9, '2021-08-19 10:46:45', '2021-08-19 10:46:45'),
(40, 2, 2, 6, '2021-08-19 10:54:49', '2021-08-19 10:54:49'),
(41, 2, 2, 7, '2021-08-19 10:54:51', '2021-08-19 10:54:51'),
(42, 2, 2, 8, '2021-08-19 10:54:52', '2021-08-19 10:54:52'),
(43, 2, 2, 9, '2021-08-19 10:54:53', '2021-08-19 10:54:53'),
(44, 2, 2, 10, '2021-08-19 10:54:55', '2021-08-19 10:54:55'),
(45, 2, 2, 6, '2021-08-19 17:46:46', '2021-08-19 17:46:46'),
(46, 2, 2, 7, '2021-08-19 17:46:48', '2021-08-19 17:46:48'),
(47, 2, 2, 8, '2021-08-19 17:46:49', '2021-08-19 17:46:49'),
(48, 2, 2, 9, '2021-08-19 17:46:50', '2021-08-19 17:46:50'),
(49, 2, 2, 10, '2021-08-19 17:46:52', '2021-08-19 17:46:52'),
(50, 2, 2, 12, '2021-08-19 17:46:53', '2021-08-19 17:46:53'),
(51, 2, 2, 6, '2021-08-19 17:50:40', '2021-08-19 17:50:40'),
(52, 2, 2, 7, '2021-08-19 17:50:42', '2021-08-19 17:50:42'),
(53, 2, 2, 8, '2021-08-19 17:50:43', '2021-08-19 17:50:43'),
(54, 2, 2, 9, '2021-08-19 17:50:45', '2021-08-19 17:50:45'),
(55, 2, 2, 10, '2021-08-19 17:50:46', '2021-08-19 17:50:46'),
(56, 2, 2, 12, '2021-08-19 17:50:48', '2021-08-19 17:50:48'),
(57, 2, 2, 6, '2021-08-20 05:02:31', '2021-08-20 05:02:31'),
(58, 2, 2, 7, '2021-08-20 05:02:32', '2021-08-20 05:02:32'),
(59, 2, 2, 8, '2021-08-20 05:02:34', '2021-08-20 05:02:34'),
(60, 2, 2, 9, '2021-08-20 05:02:35', '2021-08-20 05:02:35'),
(61, 2, 2, 10, '2021-08-20 05:02:36', '2021-08-20 05:02:36'),
(62, 2, 2, 12, '2021-08-20 05:02:38', '2021-08-20 05:02:38'),
(63, 2, 2, 6, '2021-08-20 23:16:40', '2021-08-20 23:16:40'),
(64, 2, 2, 7, '2021-08-20 23:16:41', '2021-08-20 23:16:41'),
(65, 2, 2, 8, '2021-08-20 23:16:42', '2021-08-20 23:16:42'),
(66, 2, 2, 9, '2021-08-20 23:16:44', '2021-08-20 23:16:44'),
(67, 2, 2, 10, '2021-08-20 23:16:45', '2021-08-20 23:16:45'),
(68, 2, 2, 12, '2021-08-20 23:16:46', '2021-08-20 23:16:46'),
(69, 2, 2, 6, '2021-08-20 23:17:43', '2021-08-20 23:17:43'),
(70, 2, 2, 7, '2021-08-20 23:17:44', '2021-08-20 23:17:44'),
(71, 2, 2, 8, '2021-08-20 23:17:46', '2021-08-20 23:17:46'),
(72, 2, 2, 9, '2021-08-20 23:17:47', '2021-08-20 23:17:47'),
(73, 2, 2, 10, '2021-08-20 23:17:49', '2021-08-20 23:17:49'),
(74, 2, 2, 12, '2021-08-20 23:17:50', '2021-08-20 23:17:50'),
(75, 2, 2, 6, '2021-08-20 23:25:13', '2021-08-20 23:25:13'),
(76, 2, 2, 7, '2021-08-20 23:25:14', '2021-08-20 23:25:14'),
(77, 2, 2, 8, '2021-08-20 23:25:16', '2021-08-20 23:25:16'),
(78, 2, 2, 9, '2021-08-20 23:25:17', '2021-08-20 23:25:17'),
(79, 2, 2, 10, '2021-08-20 23:25:18', '2021-08-20 23:25:18'),
(80, 2, 2, 12, '2021-08-20 23:25:20', '2021-08-20 23:25:20'),
(81, 2, 2, 6, '2021-08-23 04:32:18', '2021-08-23 04:32:18'),
(82, 2, 2, 7, '2021-08-23 04:32:20', '2021-08-23 04:32:20'),
(83, 2, 2, 8, '2021-08-23 04:32:21', '2021-08-23 04:32:21'),
(84, 2, 2, 9, '2021-08-23 04:32:23', '2021-08-23 04:32:23'),
(85, 2, 2, 10, '2021-08-23 04:32:24', '2021-08-23 04:32:24'),
(86, 2, 2, 12, '2021-08-23 04:32:25', '2021-08-23 04:32:25'),
(87, 2, 2, 6, '2021-08-23 05:25:37', '2021-08-23 05:25:37'),
(88, 2, 2, 7, '2021-08-23 05:25:39', '2021-08-23 05:25:39'),
(89, 2, 2, 8, '2021-08-23 05:25:40', '2021-08-23 05:25:40'),
(90, 2, 2, 9, '2021-08-23 05:25:41', '2021-08-23 05:25:41'),
(91, 2, 2, 10, '2021-08-23 05:25:43', '2021-08-23 05:25:43'),
(92, 2, 2, 12, '2021-08-23 05:25:44', '2021-08-23 05:25:44'),
(93, 1, 3, 5, '2021-09-14 18:10:24', '2021-09-14 18:10:24'),
(94, 1, 3, 5, '2021-09-14 18:12:07', '2021-09-14 18:12:07'),
(95, 1, 1, 5, '2021-09-14 18:22:04', '2021-09-14 18:22:04'),
(96, 1, 3, 5, '2021-09-14 18:43:16', '2021-09-14 18:43:16'),
(97, 1, 3, 5, '2021-09-14 18:44:09', '2021-09-14 18:44:09');

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
(1, '2020_09_28_070112_create_aws_regions_table', 0),
(2, '2020_09_28_070112_create_brands_table', 0),
(3, '2020_09_28_070112_create_campaigns_table', 0),
(4, '2020_09_28_070112_create_delivery_table', 0),
(5, '2020_09_28_070112_create_delivery_clicks_table', 0),
(6, '2020_09_28_070112_create_languages_table', 0),
(7, '2020_09_28_070112_create_list_numbers_table', 0),
(8, '2020_09_28_070112_create_lists_table', 0),
(9, '2020_09_28_070112_create_settings_table', 0),
(10, '2020_09_28_070112_create_time_zones_table', 0),
(11, '2020_09_28_070112_create_users_table', 0),
(12, '2020_10_07_055308_create_aws_regions_table', 0),
(13, '2020_10_07_055308_create_brands_table', 0),
(14, '2020_10_07_055308_create_campaigns_table', 0),
(15, '2020_10_07_055308_create_delivery_table', 0),
(16, '2020_10_07_055308_create_delivery_clicks_table', 0),
(17, '2020_10_07_055308_create_languages_table', 0),
(18, '2020_10_07_055308_create_list_numbers_table', 0),
(19, '2020_10_07_055308_create_lists_table', 0),
(20, '2020_10_07_055308_create_settings_table', 0),
(21, '2020_10_07_055308_create_time_zones_table', 0),
(22, '2020_10_07_055308_create_users_table', 0),
(23, '2021_08_02_113358_create_aws_regions_table', 0),
(24, '2021_08_02_113358_create_brands_table', 0),
(25, '2021_08_02_113358_create_campaigns_table', 0),
(26, '2021_08_02_113358_create_cron_requests_table', 0),
(27, '2021_08_02_113358_create_delivery_table', 0),
(28, '2021_08_02_113358_create_delivery_clicks_table', 0),
(29, '2021_08_02_113358_create_languages_table', 0),
(30, '2021_08_02_113358_create_list_numbers_table', 0),
(31, '2021_08_02_113358_create_lists_table', 0),
(32, '2021_08_02_113358_create_message_info_table', 0),
(33, '2021_08_02_113358_create_settings_table', 0),
(34, '2021_08_02_113358_create_time_zones_table', 0),
(35, '2021_08_02_113358_create_users_table', 0),
(36, '2021_12_06_075613_create_aws_regions_table', 0),
(37, '2021_12_06_075613_create_brands_table', 0),
(38, '2021_12_06_075613_create_campaigns_table', 0),
(39, '2021_12_06_075613_create_cron_requests_table', 0),
(40, '2021_12_06_075613_create_delivery_table', 0),
(41, '2021_12_06_075613_create_delivery_clicks_table', 0),
(42, '2021_12_06_075613_create_languages_table', 0),
(43, '2021_12_06_075613_create_list_numbers_table', 0),
(44, '2021_12_06_075613_create_lists_table', 0),
(45, '2021_12_06_075613_create_message_info_table', 0),
(46, '2021_12_06_075613_create_settings_table', 0),
(47, '2021_12_06_075613_create_time_zones_table', 0),
(48, '2021_12_06_075613_create_users_table', 0);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `whatsapp_phone_number` varchar(255) DEFAULT NULL,
  `account_id` varchar(1000) DEFAULT NULL,
  `authentication_token` varchar(1000) DEFAULT NULL,
  `company_name` varchar(1000) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `whatsapp_phone_number`, `account_id`, `authentication_token`, `company_name`, `created_at`, `updated_at`) VALUES
(1, '+19564460044', 'AC66299ba35ff68b3943f64866a6e170dd', '6aa461cce7502dd6f4e1a515560f8693', 'KDMESSAGING', '2020-05-18 00:00:00', '2021-07-27 06:35:33');

-- --------------------------------------------------------

--
-- Table structure for table `time_zones`
--

CREATE TABLE `time_zones` (
  `id` int(11) NOT NULL,
  `country_code` varchar(1000) NOT NULL,
  `zone_name` varchar(1000) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `time_zones`
--

INSERT INTO `time_zones` (`id`, `country_code`, `zone_name`, `created_at`, `updated_at`) VALUES
(1, 'AD', 'Europe/Andorra', NULL, NULL),
(2, 'AE', 'Asia/Dubai', NULL, NULL),
(3, 'AF', 'Asia/Kabul', NULL, NULL),
(4, 'AG', 'America/Antigua', NULL, NULL),
(5, 'AI', 'America/Anguilla', NULL, NULL),
(6, 'AL', 'Europe/Tirane', NULL, NULL),
(7, 'AM', 'Asia/Yerevan', NULL, NULL),
(8, 'AO', 'Africa/Luanda', NULL, NULL),
(9, 'AQ', 'Antarctica/Casey', NULL, NULL),
(10, 'AQ', 'Antarctica/Davis', NULL, NULL),
(11, 'AQ', 'Antarctica/DumontDUrville', NULL, NULL),
(12, 'AQ', 'Antarctica/Mawson', NULL, NULL),
(13, 'AQ', 'Antarctica/McMurdo', NULL, NULL),
(14, 'AQ', 'Antarctica/Palmer', NULL, NULL),
(15, 'AQ', 'Antarctica/Rothera', NULL, NULL),
(16, 'AQ', 'Antarctica/Syowa', NULL, NULL),
(17, 'AQ', 'Antarctica/Troll', NULL, NULL),
(18, 'AQ', 'Antarctica/Vostok', NULL, NULL),
(19, 'AR', 'America/Argentina/Buenos_Aires', NULL, NULL),
(20, 'AR', 'America/Argentina/Catamarca', NULL, NULL),
(21, 'AR', 'America/Argentina/Cordoba', NULL, NULL),
(22, 'AR', 'America/Argentina/Jujuy', NULL, NULL),
(23, 'AR', 'America/Argentina/La_Rioja', NULL, NULL),
(24, 'AR', 'America/Argentina/Mendoza', NULL, NULL),
(25, 'AR', 'America/Argentina/Rio_Gallegos', NULL, NULL),
(26, 'AR', 'America/Argentina/Salta', NULL, NULL),
(27, 'AR', 'America/Argentina/San_Juan', NULL, NULL),
(28, 'AR', 'America/Argentina/San_Luis', NULL, NULL),
(29, 'AR', 'America/Argentina/Tucuman', NULL, NULL),
(30, 'AR', 'America/Argentina/Ushuaia', NULL, NULL),
(31, 'AS', 'Pacific/Pago_Pago', NULL, NULL),
(32, 'AT', 'Europe/Vienna', NULL, NULL),
(33, 'AU', 'Antarctica/Macquarie', NULL, NULL),
(34, 'AU', 'Australia/Adelaide', NULL, NULL),
(35, 'AU', 'Australia/Brisbane', NULL, NULL),
(36, 'AU', 'Australia/Broken_Hill', NULL, NULL),
(37, 'AU', 'Australia/Currie', NULL, NULL),
(38, 'AU', 'Australia/Darwin', NULL, NULL),
(39, 'AU', 'Australia/Eucla', NULL, NULL),
(40, 'AU', 'Australia/Hobart', NULL, NULL),
(41, 'AU', 'Australia/Lindeman', NULL, NULL),
(42, 'AU', 'Australia/Lord_Howe', NULL, NULL),
(43, 'AU', 'Australia/Melbourne', NULL, NULL),
(44, 'AU', 'Australia/Perth', NULL, NULL),
(45, 'AU', 'Australia/Sydney', NULL, NULL),
(46, 'AW', 'America/Aruba', NULL, NULL),
(47, 'AX', 'Europe/Mariehamn', NULL, NULL),
(48, 'AZ', 'Asia/Baku', NULL, NULL),
(49, 'BA', 'Europe/Sarajevo', NULL, NULL),
(50, 'BB', 'America/Barbados', NULL, NULL),
(51, 'BD', 'Asia/Dhaka', NULL, NULL),
(52, 'BE', 'Europe/Brussels', NULL, NULL),
(53, 'BF', 'Africa/Ouagadougou', NULL, NULL),
(54, 'BG', 'Europe/Sofia', NULL, NULL),
(55, 'BH', 'Asia/Bahrain', NULL, NULL),
(56, 'BI', 'Africa/Bujumbura', NULL, NULL),
(57, 'BJ', 'Africa/Porto-Novo', NULL, NULL),
(58, 'BL', 'America/St_Barthelemy', NULL, NULL),
(59, 'BM', 'Atlantic/Bermuda', NULL, NULL),
(60, 'BN', 'Asia/Brunei', NULL, NULL),
(61, 'BO', 'America/La_Paz', NULL, NULL),
(62, 'BQ', 'America/Kralendijk', NULL, NULL),
(63, 'BR', 'America/Araguaina', NULL, NULL),
(64, 'BR', 'America/Bahia', NULL, NULL),
(65, 'BR', 'America/Belem', NULL, NULL),
(66, 'BR', 'America/Boa_Vista', NULL, NULL),
(67, 'BR', 'America/Campo_Grande', NULL, NULL),
(68, 'BR', 'America/Cuiaba', NULL, NULL),
(69, 'BR', 'America/Eirunepe', NULL, NULL),
(70, 'BR', 'America/Fortaleza', NULL, NULL),
(71, 'BR', 'America/Maceio', NULL, NULL),
(72, 'BR', 'America/Manaus', NULL, NULL),
(73, 'BR', 'America/Noronha', NULL, NULL),
(74, 'BR', 'America/Porto_Velho', NULL, NULL),
(75, 'BR', 'America/Recife', NULL, NULL),
(76, 'BR', 'America/Rio_Branco', NULL, NULL),
(77, 'BR', 'America/Santarem', NULL, NULL),
(78, 'BR', 'America/Sao_Paulo', NULL, NULL),
(79, 'BS', 'America/Nassau', NULL, NULL),
(80, 'BT', 'Asia/Thimphu', NULL, NULL),
(81, 'BW', 'Africa/Gaborone', NULL, NULL),
(82, 'BY', 'Europe/Minsk', NULL, NULL),
(83, 'BZ', 'America/Belize', NULL, NULL),
(84, 'CA', 'America/Atikokan', NULL, NULL),
(85, 'CA', 'America/Blanc-Sablon', NULL, NULL),
(86, 'CA', 'America/Cambridge_Bay', NULL, NULL),
(87, 'CA', 'America/Creston', NULL, NULL),
(88, 'CA', 'America/Dawson', NULL, NULL),
(89, 'CA', 'America/Dawson_Creek', NULL, NULL),
(90, 'CA', 'America/Edmonton', NULL, NULL),
(91, 'CA', 'America/Fort_Nelson', NULL, NULL),
(92, 'CA', 'America/Glace_Bay', NULL, NULL),
(93, 'CA', 'America/Goose_Bay', NULL, NULL),
(94, 'CA', 'America/Halifax', NULL, NULL),
(95, 'CA', 'America/Inuvik', NULL, NULL),
(96, 'CA', 'America/Iqaluit', NULL, NULL),
(97, 'CA', 'America/Moncton', NULL, NULL),
(98, 'CA', 'America/Nipigon', NULL, NULL),
(99, 'CA', 'America/Pangnirtung', NULL, NULL),
(100, 'CA', 'America/Rainy_River', NULL, NULL),
(101, 'CA', 'America/Rankin_Inlet', NULL, NULL),
(102, 'CA', 'America/Regina', NULL, NULL),
(103, 'CA', 'America/Resolute', NULL, NULL),
(104, 'CA', 'America/St_Johns', NULL, NULL),
(105, 'CA', 'America/Swift_Current', NULL, NULL),
(106, 'CA', 'America/Thunder_Bay', NULL, NULL),
(107, 'CA', 'America/Toronto', NULL, NULL),
(108, 'CA', 'America/Vancouver', NULL, NULL),
(109, 'CA', 'America/Whitehorse', NULL, NULL),
(110, 'CA', 'America/Winnipeg', NULL, NULL),
(111, 'CA', 'America/Yellowknife', NULL, NULL),
(112, 'CC', 'Indian/Cocos', NULL, NULL),
(113, 'CD', 'Africa/Kinshasa', NULL, NULL),
(114, 'CD', 'Africa/Lubumbashi', NULL, NULL),
(115, 'CF', 'Africa/Bangui', NULL, NULL),
(116, 'CG', 'Africa/Brazzaville', NULL, NULL),
(117, 'CH', 'Europe/Zurich', NULL, NULL),
(118, 'CI', 'Africa/Abidjan', NULL, NULL),
(119, 'CK', 'Pacific/Rarotonga', NULL, NULL),
(120, 'CL', 'America/Punta_Arenas', NULL, NULL),
(121, 'CL', 'America/Santiago', NULL, NULL),
(122, 'CL', 'Pacific/Easter', NULL, NULL),
(123, 'CM', 'Africa/Douala', NULL, NULL),
(124, 'CN', 'Asia/Shanghai', NULL, NULL),
(125, 'CN', 'Asia/Urumqi', NULL, NULL),
(126, 'CO', 'America/Bogota', NULL, NULL),
(127, 'CR', 'America/Costa_Rica', NULL, NULL),
(128, 'CU', 'America/Havana', NULL, NULL),
(129, 'CV', 'Atlantic/Cape_Verde', NULL, NULL),
(130, 'CW', 'America/Curacao', NULL, NULL),
(131, 'CX', 'Indian/Christmas', NULL, NULL),
(132, 'CY', 'Asia/Famagusta', NULL, NULL),
(133, 'CY', 'Asia/Nicosia', NULL, NULL),
(134, 'CZ', 'Europe/Prague', NULL, NULL),
(135, 'DE', 'Europe/Berlin', NULL, NULL),
(136, 'DE', 'Europe/Busingen', NULL, NULL),
(137, 'DJ', 'Africa/Djibouti', NULL, NULL),
(138, 'DK', 'Europe/Copenhagen', NULL, NULL),
(139, 'DM', 'America/Dominica', NULL, NULL),
(140, 'DO', 'America/Santo_Domingo', NULL, NULL),
(141, 'DZ', 'Africa/Algiers', NULL, NULL),
(142, 'EC', 'America/Guayaquil', NULL, NULL),
(143, 'EC', 'Pacific/Galapagos', NULL, NULL),
(144, 'EE', 'Europe/Tallinn', NULL, NULL),
(145, 'EG', 'Africa/Cairo', NULL, NULL),
(146, 'EH', 'Africa/El_Aaiun', NULL, NULL),
(147, 'ER', 'Africa/Asmara', NULL, NULL),
(148, 'ES', 'Africa/Ceuta', NULL, NULL),
(149, 'ES', 'Atlantic/Canary', NULL, NULL),
(150, 'ES', 'Europe/Madrid', NULL, NULL),
(151, 'ET', 'Africa/Addis_Ababa', NULL, NULL),
(152, 'FI', 'Europe/Helsinki', NULL, NULL),
(153, 'FJ', 'Pacific/Fiji', NULL, NULL),
(154, 'FK', 'Atlantic/Stanley', NULL, NULL),
(155, 'FM', 'Pacific/Chuuk', NULL, NULL),
(156, 'FM', 'Pacific/Kosrae', NULL, NULL),
(157, 'FM', 'Pacific/Pohnpei', NULL, NULL),
(158, 'FO', 'Atlantic/Faroe', NULL, NULL),
(159, 'FR', 'Europe/Paris', NULL, NULL),
(160, 'GA', 'Africa/Libreville', NULL, NULL),
(161, 'GB', 'Europe/London', NULL, NULL),
(162, 'GD', 'America/Grenada', NULL, NULL),
(163, 'GE', 'Asia/Tbilisi', NULL, NULL),
(164, 'GF', 'America/Cayenne', NULL, NULL),
(165, 'GG', 'Europe/Guernsey', NULL, NULL),
(166, 'GH', 'Africa/Accra', NULL, NULL),
(167, 'GI', 'Europe/Gibraltar', NULL, NULL),
(168, 'GL', 'America/Danmarkshavn', NULL, NULL),
(169, 'GL', 'America/Nuuk', NULL, NULL),
(170, 'GL', 'America/Scoresbysund', NULL, NULL),
(171, 'GL', 'America/Thule', NULL, NULL),
(172, 'GM', 'Africa/Banjul', NULL, NULL),
(173, 'GN', 'Africa/Conakry', NULL, NULL),
(174, 'GP', 'America/Guadeloupe', NULL, NULL),
(175, 'GQ', 'Africa/Malabo', NULL, NULL),
(176, 'GR', 'Europe/Athens', NULL, NULL),
(177, 'GS', 'Atlantic/South_Georgia', NULL, NULL),
(178, 'GT', 'America/Guatemala', NULL, NULL),
(179, 'GU', 'Pacific/Guam', NULL, NULL),
(180, 'GW', 'Africa/Bissau', NULL, NULL),
(181, 'GY', 'America/Guyana', NULL, NULL),
(182, 'HK', 'Asia/Hong_Kong', NULL, NULL),
(183, 'HN', 'America/Tegucigalpa', NULL, NULL),
(184, 'HR', 'Europe/Zagreb', NULL, NULL),
(185, 'HT', 'America/Port-au-Prince', NULL, NULL),
(186, 'HU', 'Europe/Budapest', NULL, NULL),
(187, 'ID', 'Asia/Jakarta', NULL, NULL),
(188, 'ID', 'Asia/Jayapura', NULL, NULL),
(189, 'ID', 'Asia/Makassar', NULL, NULL),
(190, 'ID', 'Asia/Pontianak', NULL, NULL),
(191, 'IE', 'Europe/Dublin', NULL, NULL),
(192, 'IL', 'Asia/Jerusalem', NULL, NULL),
(193, 'IM', 'Europe/Isle_of_Man', NULL, NULL),
(194, 'IN', 'Asia/Kolkata', NULL, NULL),
(195, 'IO', 'Indian/Chagos', NULL, NULL),
(196, 'IQ', 'Asia/Baghdad', NULL, NULL),
(197, 'IR', 'Asia/Tehran', NULL, NULL),
(198, 'IS', 'Atlantic/Reykjavik', NULL, NULL),
(199, 'IT', 'Europe/Rome', NULL, NULL),
(200, 'JE', 'Europe/Jersey', NULL, NULL),
(201, 'JM', 'America/Jamaica', NULL, NULL),
(202, 'JO', 'Asia/Amman', NULL, NULL),
(203, 'JP', 'Asia/Tokyo', NULL, NULL),
(204, 'KE', 'Africa/Nairobi', NULL, NULL),
(205, 'KG', 'Asia/Bishkek', NULL, NULL),
(206, 'KH', 'Asia/Phnom_Penh', NULL, NULL),
(207, 'KI', 'Pacific/Enderbury', NULL, NULL),
(208, 'KI', 'Pacific/Kiritimati', NULL, NULL),
(209, 'KI', 'Pacific/Tarawa', NULL, NULL),
(210, 'KM', 'Indian/Comoro', NULL, NULL),
(211, 'KN', 'America/St_Kitts', NULL, NULL),
(212, 'KP', 'Asia/Pyongyang', NULL, NULL),
(213, 'KR', 'Asia/Seoul', NULL, NULL),
(214, 'KW', 'Asia/Kuwait', NULL, NULL),
(215, 'KY', 'America/Cayman', NULL, NULL),
(216, 'KZ', 'Asia/Almaty', NULL, NULL),
(217, 'KZ', 'Asia/Aqtau', NULL, NULL),
(218, 'KZ', 'Asia/Aqtobe', NULL, NULL),
(219, 'KZ', 'Asia/Atyrau', NULL, NULL),
(220, 'KZ', 'Asia/Oral', NULL, NULL),
(221, 'KZ', 'Asia/Qostanay', NULL, NULL),
(222, 'KZ', 'Asia/Qyzylorda', NULL, NULL),
(223, 'LA', 'Asia/Vientiane', NULL, NULL),
(224, 'LB', 'Asia/Beirut', NULL, NULL),
(225, 'LC', 'America/St_Lucia', NULL, NULL),
(226, 'LI', 'Europe/Vaduz', NULL, NULL),
(227, 'LK', 'Asia/Colombo', NULL, NULL),
(228, 'LR', 'Africa/Monrovia', NULL, NULL),
(229, 'LS', 'Africa/Maseru', NULL, NULL),
(230, 'LT', 'Europe/Vilnius', NULL, NULL),
(231, 'LU', 'Europe/Luxembourg', NULL, NULL),
(232, 'LV', 'Europe/Riga', NULL, NULL),
(233, 'LY', 'Africa/Tripoli', NULL, NULL),
(234, 'MA', 'Africa/Casablanca', NULL, NULL),
(235, 'MC', 'Europe/Monaco', NULL, NULL),
(236, 'MD', 'Europe/Chisinau', NULL, NULL),
(237, 'ME', 'Europe/Podgorica', NULL, NULL),
(238, 'MF', 'America/Marigot', NULL, NULL),
(239, 'MG', 'Indian/Antananarivo', NULL, NULL),
(240, 'MH', 'Pacific/Kwajalein', NULL, NULL),
(241, 'MH', 'Pacific/Majuro', NULL, NULL),
(242, 'MK', 'Europe/Skopje', NULL, NULL),
(243, 'ML', 'Africa/Bamako', NULL, NULL),
(244, 'MM', 'Asia/Yangon', NULL, NULL),
(245, 'MN', 'Asia/Choibalsan', NULL, NULL),
(246, 'MN', 'Asia/Hovd', NULL, NULL),
(247, 'MN', 'Asia/Ulaanbaatar', NULL, NULL),
(248, 'MO', 'Asia/Macau', NULL, NULL),
(249, 'MP', 'Pacific/Saipan', NULL, NULL),
(250, 'MQ', 'America/Martinique', NULL, NULL),
(251, 'MR', 'Africa/Nouakchott', NULL, NULL),
(252, 'MS', 'America/Montserrat', NULL, NULL),
(253, 'MT', 'Europe/Malta', NULL, NULL),
(254, 'MU', 'Indian/Mauritius', NULL, NULL),
(255, 'MV', 'Indian/Maldives', NULL, NULL),
(256, 'MW', 'Africa/Blantyre', NULL, NULL),
(257, 'MX', 'America/Bahia_Banderas', NULL, NULL),
(258, 'MX', 'America/Cancun', NULL, NULL),
(259, 'MX', 'America/Chihuahua', NULL, NULL),
(260, 'MX', 'America/Hermosillo', NULL, NULL),
(261, 'MX', 'America/Matamoros', NULL, NULL),
(262, 'MX', 'America/Mazatlan', NULL, NULL),
(263, 'MX', 'America/Merida', NULL, NULL),
(264, 'MX', 'America/Mexico_City', NULL, NULL),
(265, 'MX', 'America/Monterrey', NULL, NULL),
(266, 'MX', 'America/Ojinaga', NULL, NULL),
(267, 'MX', 'America/Tijuana', NULL, NULL),
(268, 'MY', 'Asia/Kuala_Lumpur', NULL, NULL),
(269, 'MY', 'Asia/Kuching', NULL, NULL),
(270, 'MZ', 'Africa/Maputo', NULL, NULL),
(271, 'NA', 'Africa/Windhoek', NULL, NULL),
(272, 'NC', 'Pacific/Noumea', NULL, NULL),
(273, 'NE', 'Africa/Niamey', NULL, NULL),
(274, 'NF', 'Pacific/Norfolk', NULL, NULL),
(275, 'NG', 'Africa/Lagos', NULL, NULL),
(276, 'NI', 'America/Managua', NULL, NULL),
(277, 'NL', 'Europe/Amsterdam', NULL, NULL),
(278, 'NO', 'Europe/Oslo', NULL, NULL),
(279, 'NP', 'Asia/Kathmandu', NULL, NULL),
(280, 'NR', 'Pacific/Nauru', NULL, NULL),
(281, 'NU', 'Pacific/Niue', NULL, NULL),
(282, 'NZ', 'Pacific/Auckland', NULL, NULL),
(283, 'NZ', 'Pacific/Chatham', NULL, NULL),
(284, 'OM', 'Asia/Muscat', NULL, NULL),
(285, 'PA', 'America/Panama', NULL, NULL),
(286, 'PE', 'America/Lima', NULL, NULL),
(287, 'PF', 'Pacific/Gambier', NULL, NULL),
(288, 'PF', 'Pacific/Marquesas', NULL, NULL),
(289, 'PF', 'Pacific/Tahiti', NULL, NULL),
(290, 'PG', 'Pacific/Bougainville', NULL, NULL),
(291, 'PG', 'Pacific/Port_Moresby', NULL, NULL),
(292, 'PH', 'Asia/Manila', NULL, NULL),
(293, 'PK', 'Asia/Karachi', NULL, NULL),
(294, 'PL', 'Europe/Warsaw', NULL, NULL),
(295, 'PM', 'America/Miquelon', NULL, NULL),
(296, 'PN', 'Pacific/Pitcairn', NULL, NULL),
(297, 'PR', 'America/Puerto_Rico', NULL, NULL),
(298, 'PS', 'Asia/Gaza', NULL, NULL),
(299, 'PS', 'Asia/Hebron', NULL, NULL),
(300, 'PT', 'Atlantic/Azores', NULL, NULL),
(301, 'PT', 'Atlantic/Madeira', NULL, NULL),
(302, 'PT', 'Europe/Lisbon', NULL, NULL),
(303, 'PW', 'Pacific/Palau', NULL, NULL),
(304, 'PY', 'America/Asuncion', NULL, NULL),
(305, 'QA', 'Asia/Qatar', NULL, NULL),
(306, 'RE', 'Indian/Reunion', NULL, NULL),
(307, 'RO', 'Europe/Bucharest', NULL, NULL),
(308, 'RS', 'Europe/Belgrade', NULL, NULL),
(309, 'RU', 'Asia/Anadyr', NULL, NULL),
(310, 'RU', 'Asia/Barnaul', NULL, NULL),
(311, 'RU', 'Asia/Chita', NULL, NULL),
(312, 'RU', 'Asia/Irkutsk', NULL, NULL),
(313, 'RU', 'Asia/Kamchatka', NULL, NULL),
(314, 'RU', 'Asia/Khandyga', NULL, NULL),
(315, 'RU', 'Asia/Krasnoyarsk', NULL, NULL),
(316, 'RU', 'Asia/Magadan', NULL, NULL),
(317, 'RU', 'Asia/Novokuznetsk', NULL, NULL),
(318, 'RU', 'Asia/Novosibirsk', NULL, NULL),
(319, 'RU', 'Asia/Omsk', NULL, NULL),
(320, 'RU', 'Asia/Sakhalin', NULL, NULL),
(321, 'RU', 'Asia/Srednekolymsk', NULL, NULL),
(322, 'RU', 'Asia/Tomsk', NULL, NULL),
(323, 'RU', 'Asia/Ust-Nera', NULL, NULL),
(324, 'RU', 'Asia/Vladivostok', NULL, NULL),
(325, 'RU', 'Asia/Yakutsk', NULL, NULL),
(326, 'RU', 'Asia/Yekaterinburg', NULL, NULL),
(327, 'RU', 'Europe/Astrakhan', NULL, NULL),
(328, 'RU', 'Europe/Kaliningrad', NULL, NULL),
(329, 'RU', 'Europe/Kirov', NULL, NULL),
(330, 'RU', 'Europe/Moscow', NULL, NULL),
(331, 'RU', 'Europe/Samara', NULL, NULL),
(332, 'RU', 'Europe/Saratov', NULL, NULL),
(333, 'RU', 'Europe/Ulyanovsk', NULL, NULL),
(334, 'RU', 'Europe/Volgograd', NULL, NULL),
(335, 'RW', 'Africa/Kigali', NULL, NULL),
(336, 'SA', 'Asia/Riyadh', NULL, NULL),
(337, 'SB', 'Pacific/Guadalcanal', NULL, NULL),
(338, 'SC', 'Indian/Mahe', NULL, NULL),
(339, 'SD', 'Africa/Khartoum', NULL, NULL),
(340, 'SE', 'Europe/Stockholm', NULL, NULL),
(341, 'SG', 'Asia/Singapore', NULL, NULL),
(342, 'SH', 'Atlantic/St_Helena', NULL, NULL),
(343, 'SI', 'Europe/Ljubljana', NULL, NULL),
(344, 'SJ', 'Arctic/Longyearbyen', NULL, NULL),
(345, 'SK', 'Europe/Bratislava', NULL, NULL),
(346, 'SL', 'Africa/Freetown', NULL, NULL),
(347, 'SM', 'Europe/San_Marino', NULL, NULL),
(348, 'SN', 'Africa/Dakar', NULL, NULL),
(349, 'SO', 'Africa/Mogadishu', NULL, NULL),
(350, 'SR', 'America/Paramaribo', NULL, NULL),
(351, 'SS', 'Africa/Juba', NULL, NULL),
(352, 'ST', 'Africa/Sao_Tome', NULL, NULL),
(353, 'SV', 'America/El_Salvador', NULL, NULL),
(354, 'SX', 'America/Lower_Princes', NULL, NULL),
(355, 'SY', 'Asia/Damascus', NULL, NULL),
(356, 'SZ', 'Africa/Mbabane', NULL, NULL),
(357, 'TC', 'America/Grand_Turk', NULL, NULL),
(358, 'TD', 'Africa/Ndjamena', NULL, NULL),
(359, 'TF', 'Indian/Kerguelen', NULL, NULL),
(360, 'TG', 'Africa/Lome', NULL, NULL),
(361, 'TH', 'Asia/Bangkok', NULL, NULL),
(362, 'TJ', 'Asia/Dushanbe', NULL, NULL),
(363, 'TK', 'Pacific/Fakaofo', NULL, NULL),
(364, 'TL', 'Asia/Dili', NULL, NULL),
(365, 'TM', 'Asia/Ashgabat', NULL, NULL),
(366, 'TN', 'Africa/Tunis', NULL, NULL),
(367, 'TO', 'Pacific/Tongatapu', NULL, NULL),
(368, 'TR', 'Europe/Istanbul', NULL, NULL),
(369, 'TT', 'America/Port_of_Spain', NULL, NULL),
(370, 'TV', 'Pacific/Funafuti', NULL, NULL),
(371, 'TW', 'Asia/Taipei', NULL, NULL),
(372, 'TZ', 'Africa/Dar_es_Salaam', NULL, NULL),
(373, 'UA', 'Europe/Kiev', NULL, NULL),
(374, 'UA', 'Europe/Simferopol', NULL, NULL),
(375, 'UA', 'Europe/Uzhgorod', NULL, NULL),
(376, 'UA', 'Europe/Zaporozhye', NULL, NULL),
(377, 'UG', 'Africa/Kampala', NULL, NULL),
(378, 'UM', 'Pacific/Midway', NULL, NULL),
(379, 'UM', 'Pacific/Wake', NULL, NULL),
(380, 'US', 'America/Adak', NULL, NULL),
(381, 'US', 'America/Anchorage', NULL, NULL),
(382, 'US', 'America/Boise', NULL, NULL),
(383, 'US', 'America/Chicago', NULL, NULL),
(384, 'US', 'America/Denver', NULL, NULL),
(385, 'US', 'America/Detroit', NULL, NULL),
(386, 'US', 'America/Indiana/Indianapolis', NULL, NULL),
(387, 'US', 'America/Indiana/Knox', NULL, NULL),
(388, 'US', 'America/Indiana/Marengo', NULL, NULL),
(389, 'US', 'America/Indiana/Petersburg', NULL, NULL),
(390, 'US', 'America/Indiana/Tell_City', NULL, NULL),
(391, 'US', 'America/Indiana/Vevay', NULL, NULL),
(392, 'US', 'America/Indiana/Vincennes', NULL, NULL),
(393, 'US', 'America/Indiana/Winamac', NULL, NULL),
(394, 'US', 'America/Juneau', NULL, NULL),
(395, 'US', 'America/Kentucky/Louisville', NULL, NULL),
(396, 'US', 'America/Kentucky/Monticello', NULL, NULL),
(397, 'US', 'America/Los_Angeles', NULL, NULL),
(398, 'US', 'America/Menominee', NULL, NULL),
(399, 'US', 'America/Metlakatla', NULL, NULL),
(400, 'US', 'America/New_York', NULL, NULL),
(401, 'US', 'America/Nome', NULL, NULL),
(402, 'US', 'America/North_Dakota/Beulah', NULL, NULL),
(403, 'US', 'America/North_Dakota/Center', NULL, NULL),
(404, 'US', 'America/North_Dakota/New_Salem', NULL, NULL),
(405, 'US', 'America/Phoenix', NULL, NULL),
(406, 'US', 'America/Sitka', NULL, NULL),
(407, 'US', 'America/Yakutat', NULL, NULL),
(408, 'US', 'Pacific/Honolulu', NULL, NULL),
(409, 'UY', 'America/Montevideo', NULL, NULL),
(410, 'UZ', 'Asia/Samarkand', NULL, NULL),
(411, 'UZ', 'Asia/Tashkent', NULL, NULL),
(412, 'VA', 'Europe/Vatican', NULL, NULL),
(413, 'VC', 'America/St_Vincent', NULL, NULL),
(414, 'VE', 'America/Caracas', NULL, NULL),
(415, 'VG', 'America/Tortola', NULL, NULL),
(416, 'VI', 'America/St_Thomas', NULL, NULL),
(417, 'VN', 'Asia/Ho_Chi_Minh', NULL, NULL),
(418, 'VU', 'Pacific/Efate', NULL, NULL),
(419, 'WF', 'Pacific/Wallis', NULL, NULL),
(420, 'WS', 'Pacific/Apia', NULL, NULL),
(421, 'YE', 'Asia/Aden', NULL, NULL),
(422, 'YT', 'Indian/Mayotte', NULL, NULL),
(423, 'ZA', 'Africa/Johannesburg', NULL, NULL),
(424, 'ZM', 'Africa/Lusaka', NULL, NULL),
(425, 'ZW', 'Africa/Harare', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `brand_id` int(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `admin` tinyint(2) NOT NULL DEFAULT 0,
  `remember_token` varchar(1000) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `brand_id`, `first_name`, `last_name`, `email`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'Member', 'admin@kdmessaging.com', '$2y$12$73F.vApb2Nm4jzgucGHJmeJWv5WxaGTukiXVJuhMO/T1FndXjIgCG', 1, '3UC2ONnwfMqID2wORKtD39nC8rZumPXyAy7pix07qbzbJ2ZNCUSdacry36Px', '2019-08-28 02:39:16', '2021-12-06 12:38:24'),
(2, NULL, 'Nitin', 'Kapoor', 'nitinkapoor@whizkraft.net', '$2y$10$lpQTU/Kv9aF/tfmeIq1GfOTnMQU6g9D80V6rhk.2/8Gd4pugoM1ou', 1, NULL, NULL, '2021-01-07 04:48:48'),
(3, NULL, 'Emma', 'Fonji', 'info@onewgroup.com', '$2y$10$g88pDPIeBFc8NepspPgpY.np8Z7IYHNNk2OWytkNTWPyAhZfiAm4e', 1, 'dCkRrkkDQJNXO3niwPWUtkEo2gOvfkKiklhzHxcSikYgGYgkSGEvTjuYvYWK', NULL, NULL),
(4, NULL, 'php', 'freak', 'php@kdmessaging.com', '$2y$10$uWO0tnoMaLbjkvK4KM.YHeHN8tnGzZeIJ47smvikeW0/VjAhWwxxm', 1, NULL, NULL, '2020-10-08 12:18:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aws_regions`
--
ALTER TABLE `aws_regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `cron_requests`
--
ALTER TABLE `cron_requests`
  ADD PRIMARY KEY (`cron_request_id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `campaign_id` (`campaign_id`),
  ADD KEY `list_id` (`list_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `campaign_id` (`campaign_id`),
  ADD KEY `message_id` (`message_id`);

--
-- Indexes for table `delivery_clicks`
--
ALTER TABLE `delivery_clicks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `list_phone_number_id` (`list_phone_number_id`),
  ADD KEY `campaign_id` (`campaign_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `incoming_messages`
--
ALTER TABLE `incoming_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lists`
--
ALTER TABLE `lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `list_numbers`
--
ALTER TABLE `list_numbers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `list_id` (`list_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `message_info`
--
ALTER TABLE `message_info`
  ADD PRIMARY KEY (`message_info_id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `campaign_id` (`campaign_id`),
  ADD KEY `list_number_id` (`list_number_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_zones`
--
ALTER TABLE `time_zones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aws_regions`
--
ALTER TABLE `aws_regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cron_requests`
--
ALTER TABLE `cron_requests`
  MODIFY `cron_request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `delivery_clicks`
--
ALTER TABLE `delivery_clicks`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `incoming_messages`
--
ALTER TABLE `incoming_messages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lists`
--
ALTER TABLE `lists`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `list_numbers`
--
ALTER TABLE `list_numbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `message_info`
--
ALTER TABLE `message_info`
  MODIFY `message_info_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `time_zones`
--
ALTER TABLE `time_zones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=426;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
