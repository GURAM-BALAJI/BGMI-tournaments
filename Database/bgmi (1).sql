-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 08:50 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bgmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_coins`
--

CREATE TABLE `add_coins` (
  `add_coins_id` bigint(20) NOT NULL,
  `add_coins_user_id` bigint(20) NOT NULL,
  `add_coins_amount` bigint(20) NOT NULL,
  `add_coins_request_date` varchar(50) NOT NULL,
  `add_coins_type` varchar(50) NOT NULL,
  `add_coins_utr` varchar(250) NOT NULL,
  `add_coins_date` date NOT NULL,
  `add_coins_delete` tinyint(1) NOT NULL,
  `add_coins_task` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_coins`
--

INSERT INTO `add_coins` (`add_coins_id`, `add_coins_user_id`, `add_coins_amount`, `add_coins_request_date`, `add_coins_type`, `add_coins_utr`, `add_coins_date`, `add_coins_delete`, `add_coins_task`) VALUES
(1, 6, 90, '05-07-2021 11:57:10 pm', 'PHONE PAY', '4r5t5rg34er3', '2021-07-05', 0, 1),
(2, 1, 90, '06-07-2021 12:01:23 am', 'PHONE PAY', 'retyurhttryg', '2021-07-06', 0, 1),
(3, 2, 100, '06-07-2021 01:20:33 am', 'PHONE PAY', 'dfgh6yhgfdsd', '2021-07-06', 0, 1),
(4, 1, 200, '06-07-2021 01:22:28 am', 'PHONE PAY', '2q3we3sjttyy', '2021-07-06', 0, 1),
(5, 1, 777, '06-07-2021 01:27:00 am', 'PHONE PAY', 'wert5ertt6yt', '2021-07-06', 0, 1),
(6, 2, 1000, '06-07-2021 01:43:57 am', 'PHONE PAY', 'q3we4r5tyu8i', '2021-07-06', 0, 1),
(7, 1, 1000, '16-07-2021 10:29:21 am', 'PHONE PAY', '123456787654', '2021-07-16', 0, 1),
(8, 1, 1000, '16-07-2021 10:33:46 am', 'PHONE PAY', 'ert354w543tr', '2021-07-16', 0, 1),
(9, 1, 123, '24-07-2021 08:33:36 pm', 'PHONE PAY', '1q2ewdefr546', '2021-07-24', 0, 1),
(10, 1, 200, '24-07-2021 09:06:57 pm', 'PHONE PAY', 'ewubhknerfdu', '2021-07-24', 1, 1),
(11, 1, 12, '24-07-2021 09:13:34 pm', 'PHONE PAY', 'hifefkbhjdhk', '2021-07-24', 1, 1),
(12, 1, 123, '24-07-2021 09:15:33 pm', 'PHONE PAY', 'yeuiwooedkjd', '2021-07-24', 1, 1),
(13, 1, 123, '24-07-2021 09:38:03 pm', 'PHONE PAY', 'wesdfyrtradx', '2021-07-24', 1, 1),
(14, 1, 123, '24-07-2021 09:38:40 pm', 'PHONE PAY', '1wasdfghtrgf', '2021-07-24', 1, 1),
(15, 1, 1234, '24-07-2021 09:45:44 pm', 'PHONE PAY', 'sxrftguhikol', '2021-07-24', 1, 1),
(16, 1, 12, '24-07-2021 10:44:15 pm', 'PHONE PAY', 'weretyuiopli', '2021-07-24', 1, 1),
(17, 1, 12, '24-07-2021 10:49:08 pm', 'PHONE PAY', 'gty5juytyhgr', '2021-07-24', 1, 1),
(18, 1, 12, '24-07-2021 10:51:31 pm', 'PHONE PAY', 'wefrtyuyiuoi', '2021-07-24', 1, 1),
(19, 1, 12, '24-07-2021 10:52:53 pm', 'PHONE PAY', 'utyretryjhjh', '2021-07-24', 1, 1),
(20, 1, 23, '24-07-2021 10:53:28 pm', 'PHONE PAY', 'fdyguyuykjhm', '2021-07-24', 1, 1),
(21, 1, 12, '24-07-2021 11:01:14 pm', 'PHONE PAY', 'wshnrdjijoks', '2021-07-24', 1, 1),
(22, 1, 13, '24-07-2021 11:02:36 pm', 'PHONE PAY', 'roopawdmknmr', '2021-07-24', 1, 1),
(23, 1, 14, '24-07-2021 11:04:06 pm', 'PHONE PAY', 'jhsdbunisdmj', '2021-07-24', 1, 1),
(24, 1, 12, '24-07-2021 11:05:43 pm', 'PHONE PAY', 'kmdfkidfsoin', '2021-07-24', 1, 1),
(25, 1, 15, '24-07-2021 11:09:57 pm', 'PHONE PAY', 'sdnjskdkjsdj', '2021-07-24', 1, 1),
(26, 1, 15, '24-07-2021 11:10:34 pm', 'PHONE PAY', 'dshbiuierwin', '2021-07-24', 1, 1),
(27, 1, 16, '24-07-2021 11:13:27 pm', 'PHONE PAY', 'qwertyuiolkj', '2021-07-24', 1, 1),
(28, 5, 500, '28-07-2021 08:09:02 pm', 'PHONE PAY', 'ewrgtyrdgt55', '2021-07-28', 0, 1),
(29, 5, 600, '28-07-2021 08:09:14 pm', 'PHONE PAY', 'dwfergygt5yg', '2021-07-28', 0, 1),
(30, 5, 400, '28-07-2021 08:09:24 pm', 'PHONE PAY', 'wrsrdtghuejw', '2021-07-28', 0, 1),
(31, 5, 100, '29-07-2021 08:15:25 pm', 'PHONE PAY', '123456789345', '2021-07-29', 0, 1),
(32, 5, 1000, '29-07-2021 08:25:04 pm', 'PHONE PAY', '123345612345', '2021-07-29', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` bigint(20) NOT NULL,
  `admin_email` varchar(1100) NOT NULL,
  `admin_password` varchar(2000) NOT NULL,
  `admin_name` varchar(1100) NOT NULL,
  `admin_phone` bigint(50) NOT NULL,
  `admin_photo` varchar(5000) NOT NULL,
  `admin_status` tinyint(1) NOT NULL,
  `users_view` tinyint(1) NOT NULL,
  `users_create` tinyint(1) NOT NULL,
  `users_edit` tinyint(1) NOT NULL,
  `users_del` tinyint(1) NOT NULL,
  `admin_view` tinyint(1) NOT NULL,
  `admin_create` tinyint(1) NOT NULL,
  `admin_edit` tinyint(1) NOT NULL,
  `admin_del` tinyint(1) NOT NULL,
  `users_special` tinyint(1) NOT NULL,
  `admin_special` tinyint(1) NOT NULL,
  `withdraw_view` tinyint(1) NOT NULL,
  `withdraw_edit` tinyint(1) NOT NULL,
  `withdraw_del` tinyint(1) NOT NULL,
  `record_view` tinyint(1) NOT NULL,
  `admin_delete` tinyint(1) NOT NULL,
  `admin_added_date` varchar(50) NOT NULL,
  `admin_updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `history_view` tinyint(1) NOT NULL,
  `played_view` tinyint(1) NOT NULL,
  `add_coins_view` tinyint(1) NOT NULL,
  `add_coins_special` tinyint(1) NOT NULL,
  `game_view` tinyint(1) NOT NULL,
  `game_create` tinyint(1) NOT NULL,
  `game_edit` tinyint(1) NOT NULL,
  `game_del` tinyint(1) NOT NULL,
  `message_view` tinyint(1) NOT NULL,
  `admin_req` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `admin_photo`, `admin_status`, `users_view`, `users_create`, `users_edit`, `users_del`, `admin_view`, `admin_create`, `admin_edit`, `admin_del`, `users_special`, `admin_special`, `withdraw_view`, `withdraw_edit`, `withdraw_del`, `record_view`, `admin_delete`, `admin_added_date`, `admin_updated_date`, `history_view`, `played_view`, `add_coins_view`, `add_coins_special`, `game_view`, `game_create`, `game_edit`, `game_del`, `message_view`, `admin_req`) VALUES
(1, 'admin@admin.com', '$2y$10$k.hbtkYnr4HMzIsCbOGE.e9UhR/KsfoHmB1AyaOp6fARkvzylNDOq', 'admin', 96969696, '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, '2021-01-04', '2021-08-05 06:32:51', 1, 1, 1, 1, 1, 1, 1, 1, 1, 0),
(2, 'balaji@gmail.com', '$2y$10$aVVrenxissCHVa0PxUTVyuA/mJ8fEhJWJ.yZSWZZz1LQkGDTQmrku', 'Balaji', 52738382872, '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, '', '2021-07-22 10:21:53', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `game_id` bigint(20) NOT NULL,
  `game_name` varchar(100) NOT NULL,
  `game_amount` int(11) NOT NULL,
  `game_date` date NOT NULL,
  `game_time` time NOT NULL,
  `game_team_numbers` set('1','2','4') NOT NULL,
  `game_win_amount` varchar(50) NOT NULL,
  `game_player_added` int(11) NOT NULL,
  `game_team_limit` int(11) NOT NULL,
  `game_completed` set('0','1','2') NOT NULL DEFAULT '0',
  `game_status` tinyint(1) NOT NULL,
  `game_delete` tinyint(1) NOT NULL,
  `game_room_id` varchar(100) NOT NULL,
  `game_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`game_id`, `game_name`, `game_amount`, `game_date`, `game_time`, `game_team_numbers`, `game_win_amount`, `game_player_added`, `game_team_limit`, `game_completed`, `game_status`, `game_delete`, `game_room_id`, `game_password`) VALUES
(1, 'BGMI NEW', 10, '2021-07-23', '16:00:00', '2', 'Win Upto  1000', 25, 50, '1', 1, 0, '123456', '654321'),
(2, 'Free Fire', 100, '2021-07-23', '07:00:00', '4', '1st price 1000', 4, 100, '1', 1, 0, '', ''),
(3, 'BGMI', 250, '2021-07-24', '17:30:00', '2', '1st price 2000', 1, 100, '1', 1, 0, '112233', '123'),
(4, 'Free Fire', 100, '2021-07-30', '10:00:00', '4', '1st price 2000', 2, 100, '0', 1, 0, '112233', '112233'),
(5, 'PUBG', 1000, '2021-07-30', '19:15:00', '1', '1st price 20000', 1, 60, '0', 1, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(20) NOT NULL,
  `main` varchar(5000) NOT NULL,
  `recharge` varchar(5000) NOT NULL,
  `withdraw` varchar(5000) NOT NULL,
  `minimum_withdraw` int(11) NOT NULL,
  `minimum_stars_to_create` int(11) NOT NULL,
  `new_login` int(11) NOT NULL,
  `terms_conditions` varchar(10000) NOT NULL,
  `comission` varchar(500) NOT NULL,
  `reload` bigint(20) NOT NULL,
  `background` varchar(1000) NOT NULL,
  `logo` varchar(1000) NOT NULL,
  `video` varchar(1000) NOT NULL,
  `ipagecolor` varchar(100) NOT NULL,
  `ifontcolor` varchar(100) NOT NULL,
  `ipagefont` varchar(250) NOT NULL,
  `ibgcolor` varchar(100) NOT NULL,
  `abgcolor` varchar(100) NOT NULL,
  `pbgcolor` varchar(100) NOT NULL,
  `sbgcolor` varchar(100) NOT NULL,
  `iwinpagecolor` varchar(100) NOT NULL,
  `ipagefontsize` int(11) NOT NULL,
  `ipaymentcolor` varchar(200) NOT NULL,
  `adminphone` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `main`, `recharge`, `withdraw`, `minimum_withdraw`, `minimum_stars_to_create`, `new_login`, `terms_conditions`, `comission`, `reload`, `background`, `logo`, `video`, `ipagecolor`, `ifontcolor`, `ipagefont`, `ibgcolor`, `abgcolor`, `pbgcolor`, `sbgcolor`, `iwinpagecolor`, `ipagefontsize`, `ipaymentcolor`, `adminphone`) VALUES
(1, 'Wrong report 30rs penality', 'Phone pay or google pay to 123456789', 'With in 1 hour of your request', 50, 10, 10, 'ewdftrgf', '400,1000/6,5', 30000, '', '', '', '', '', 'monospace', 'black', 'red', 'pink', 'yellow', 'green', 14, 'red', '1123456789');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `player_id` bigint(20) NOT NULL,
  `player_game_id` bigint(20) NOT NULL,
  `player_user_id` bigint(20) NOT NULL,
  `player_ids` varchar(100) NOT NULL,
  `player_completed` set('0','1','2') NOT NULL DEFAULT '0',
  `player_ss` varchar(200) NOT NULL,
  `player_joined_date_time` varchar(50) NOT NULL,
  `player_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`player_id`, `player_game_id`, `player_user_id`, `player_ids`, `player_completed`, `player_ss`, `player_joined_date_time`, `player_deleted`) VALUES
(1, 3, 5, '123,123', '2', '5_1627485725.jpg', '28-07-2021 08:22:47 pm', 0),
(2, 4, 5, '123,123,123,123', '0', '', '29-07-2021 08:14:16 pm', 0),
(3, 5, 5, '12345', '0', '', '29-07-2021 08:25:28 pm', 0),
(4, 4, 1, '12345,22,3,123', '0', '', '11-10-2021 12:00:37 pm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` bigint(20) NOT NULL,
  `transaction_user_id` bigint(20) NOT NULL,
  `transaction_send_to` varchar(1100) NOT NULL,
  `transaction_amount` varchar(2000) NOT NULL,
  `transaction_method` varchar(2000) NOT NULL,
  `transaction_date` varchar(50) NOT NULL,
  `transaction_added_by` bigint(20) NOT NULL,
  `date_transaction` date NOT NULL,
  `transaction_type` set('0','1','2') NOT NULL DEFAULT '0',
  `present_amount` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `transaction_user_id`, `transaction_send_to`, `transaction_amount`, `transaction_method`, `transaction_date`, `transaction_added_by`, `date_transaction`, `transaction_type`, `present_amount`) VALUES
(1, 1, 'LOING BY SELF', '10', 'ADD COINS', '05-07-2021 11:59:41 pm', 0, '2021-07-05', '0', 10),
(2, 1, 'ADD COINS', '90', 'ADDED COINS', '06-07-2021 12:01:50 am', 1, '2021-07-06', '0', 100),
(3, 1, 'CREATED GAME', '-10', 'MINUS COINS', '06-07-2021 12:04:56 am', 1, '2021-07-06', '0', 90),
(4, 1, 'BY DELETING GAME', '10', 'ADD COINS', '06-07-2021 12:05:43 am', 1, '2021-07-06', '1', 100),
(5, 1, 'CREATED GAME', '-50', 'MINUS COINS', '06-07-2021 12:06:07 am', 1, '2021-07-06', '0', 50),
(6, 2, 'login from admin', '100', 'ADD COINS', '06-07-2021 12:07:01 am', 1, '2021-07-06', '0', 100),
(7, 2, 'JOINED GAME', '-50', 'MINUS COINS', '06-07-2021 12:12:05 am', 2, '2021-07-06', '0', 50),
(8, 1, 'BY CANCELING GAME', '50', 'ADD COINS', '06-07-2021 12:13:40 am', 2, '2021-07-06', '1', 100),
(9, 2, 'BY CANCELING GAME', '50', 'ADD COINS', '06-07-2021 12:13:40 am', 2, '2021-07-06', '1', 100),
(10, 2, 'CREATED GAME', '-30', 'MINUS COINS', '06-07-2021 12:14:19 am', 2, '2021-07-06', '0', 70),
(11, 1, 'JOINED GAME', '-30', 'MINUS COINS', '06-07-2021 12:14:33 am', 1, '2021-07-06', '0', 70),
(12, 2, 'BY CANCELING GAME', '30', 'ADD COINS', '06-07-2021 12:14:49 am', 2, '2021-07-06', '1', 100),
(13, 1, 'BY CANCELING GAME', '30', 'ADD COINS', '06-07-2021 12:14:49 am', 2, '2021-07-06', '1', 100),
(14, 1, 'CREATED GAME', '-40', 'MINUS COINS', '06-07-2021 12:16:05 am', 1, '2021-07-06', '0', 60),
(15, 2, 'JOINED GAME', '-40', 'MINUS COINS', '06-07-2021 12:16:15 am', 2, '2021-07-06', '0', 60),
(16, 1, 'CANCELING GAME BY BOTH', '40', 'ADD COINS', '06-07-2021 12:16:54 am', 1, '2021-07-06', '1', 100),
(17, 2, 'CANCELING GAME BY BOTH', '40', 'ADD COINS', '06-07-2021 12:16:54 am', 1, '2021-07-06', '1', 100),
(18, 1, 'CREATED GAME', '-20', 'MINUS COINS', '06-07-2021 12:17:24 am', 1, '2021-07-06', '0', 80),
(19, 2, 'JOINED GAME', '-20', 'MINUS COINS', '06-07-2021 12:17:31 am', 2, '2021-07-06', '0', 80),
(20, 1, 'WINNING GAME', '39', 'ADDED COINS', '06-07-2021 12:17:57 am', 2, '2021-07-06', '0', 119),
(21, 1, 'CREATED GAME', '-10', 'MINUS COINS', '06-07-2021 12:24:36 am', 1, '2021-07-06', '0', 109),
(22, 2, 'JOINED GAME', '-10', 'MINUS COINS', '06-07-2021 12:24:42 am', 2, '2021-07-06', '0', 70),
(23, 2, 'WINNING GAME', '19', 'ADDED COINS', '06-07-2021 12:25:23 am', 1, '2021-07-06', '0', 89),
(24, 1, 'CREATED GAME', '-15', 'MINUS COINS', '06-07-2021 12:26:32 am', 1, '2021-07-06', '0', 94),
(25, 2, 'JOINED GAME', '-15', 'MINUS COINS', '06-07-2021 12:26:40 am', 2, '2021-07-06', '0', 74),
(26, 1, 'CANCELING GAME BY BOTH', '15', 'ADD COINS', '06-07-2021 12:27:00 am', 1, '2021-07-06', '1', 109),
(27, 2, 'CANCELING GAME BY BOTH', '15', 'ADD COINS', '06-07-2021 12:27:00 am', 1, '2021-07-06', '1', 89),
(28, 2, '123', '-19', 'PAY FRIEND', '06-07-2021 12:28:45 am', 2, '2021-07-06', '2', 70),
(29, 1, '1234', '19', 'PAY FRIEND', '06-07-2021 12:28:45 am', 2, '2021-07-06', '2', 128),
(30, 1, 'WITHDRAW', '-100', 'MINUS COINS', '06-07-2021 12:29:54 am', 1, '2021-07-06', '0', 28),
(31, 1, 'ADDED BY ADMIN', '62', 'ADD COINS', '06-07-2021 12:31:38 am', 1, '2021-07-06', '0', 90),
(32, 1, 'CREATED GAME', '-60', 'MINUS COINS', '06-07-2021 12:32:34 am', 1, '2021-07-06', '0', 30),
(33, 2, 'JOINED GAME', '-60', 'MINUS COINS', '06-07-2021 12:32:44 am', 2, '2021-07-06', '0', 10),
(34, 1, 'WINNING GAME', '116', 'ADDED COINS BY ADMIN', '06-07-2021 12:33:11 am', 1, '2021-07-06', '0', 146),
(35, 1, 'CREATED GAME', '-10', 'MINUS COINS', '06-07-2021 12:34:17 am', 1, '2021-07-06', '0', 136),
(36, 2, 'JOINED GAME', '-10', 'MINUS COINS', '06-07-2021 12:34:24 am', 2, '2021-07-06', '0', 0),
(37, 2, 'WINNING GAME', '19', 'ADDED COINS BY ADMIN', '06-07-2021 12:34:50 am', 1, '2021-07-06', '0', 19),
(38, 1, 'CREATED GAME', '-15', 'MINUS COINS', '06-07-2021 12:35:17 am', 1, '2021-07-06', '0', 121),
(39, 2, 'JOINED GAME', '-15', 'MINUS COINS', '06-07-2021 12:35:26 am', 2, '2021-07-06', '0', 4),
(40, 1, 'CANCELING BY ADMIN', '15', 'ADD COINS', '06-07-2021 12:35:47 am', 1, '2021-07-06', '1', 136),
(41, 2, 'CANCELING BY ADMIN', '15', 'ADD COINS', '06-07-2021 12:35:47 am', 1, '2021-07-06', '1', 19),
(42, 1, 'CREATED GAME', '-10', 'MINUS COINS', '06-07-2021 12:36:48 am', 1, '2021-07-06', '0', 126),
(43, 2, 'JOINED GAME', '-10', 'MINUS COINS', '06-07-2021 12:37:02 am', 2, '2021-07-06', '0', 9),
(44, 2, 'WINNING GAME', '19', 'ADDED COINS BY ADMIN', '06-07-2021 12:37:28 am', 1, '2021-07-06', '0', 28),
(45, 1, 'PENALITY', '15', 'MINUS COINS BY ADMIN', '06-07-2021 12:37:28 am', 1, '2021-07-06', '0', 111),
(46, 1, '1234', '-20', 'PAY FRIEND', '06-07-2021 12:40:46 am', 1, '2021-07-06', '2', 74),
(47, 2, '123', '20', 'PAY FRIEND', '06-07-2021 12:40:46 am', 1, '2021-07-06', '2', 48),
(48, 1, 'CREATED GAME', '-10', 'MINUS COINS', '06-07-2021 12:41:49 am', 1, '2021-07-06', '0', 64),
(49, 2, 'JOINED GAME', '-10', 'MINUS COINS', '06-07-2021 12:41:57 am', 2, '2021-07-06', '0', 38),
(50, 1, 'WINNING GAME', '19', 'ADDED COINS BY ADMIN', '06-07-2021 12:42:19 am', 1, '2021-07-06', '0', 83),
(51, 2, 'PENALITY', '12', 'MINUS COINS BY ADMIN', '06-07-2021 12:42:19 am', 1, '2021-07-06', '0', 26),
(52, 1, 'CREATED GAME', '-12', 'MINUS COINS', '06-07-2021 01:42:33 am', 1, '2021-07-06', '0', 71),
(53, 1, 'BY DELETING GAME', '12', 'ADD COINS', '06-07-2021 01:42:37 am', 1, '2021-07-06', '1', 83),
(54, 1, 'DEPOSIT COINS', '200', 'ADD COINS', '06-07-2021 01:43:10 am', 1, '2021-07-06', '0', 283),
(55, 1, 'WITHDRAW', '-100', 'MINUS COINS', '06-07-2021 01:43:19 am', 1, '2021-07-06', '0', 183),
(56, 1, 'CREATED GAME', '-100', 'MINUS COINS', '06-07-2021 01:43:31 am', 1, '2021-07-06', '0', 83),
(57, 2, 'DEPOSIT COINS', '1000', 'ADD COINS', '06-07-2021 01:44:05 am', 1, '2021-07-06', '0', 1026),
(58, 2, 'JOINED GAME', '-100', 'MINUS COINS', '06-07-2021 01:44:14 am', 2, '2021-07-06', '0', 926),
(59, 1, 'WINNING GAME', '194', 'ADDED COINS', '06-07-2021 01:44:42 am', 2, '2021-07-06', '0', 277),
(60, 2, 'CREATED GAME', '-100', 'MINUS COINS', '06-07-2021 01:45:15 am', 2, '2021-07-06', '0', 826),
(61, 1, 'JOINED GAME', '-100', 'MINUS COINS', '06-07-2021 01:45:26 am', 1, '2021-07-06', '0', 177),
(62, 2, 'BY CANCELING GAME', '100', 'ADD COINS', '06-07-2021 01:45:32 am', 2, '2021-07-06', '1', 926),
(63, 1, 'BY CANCELING GAME', '100', 'ADD COINS', '06-07-2021 01:45:32 am', 2, '2021-07-06', '1', 277),
(64, 1, 'CREATED GAME', '-100', 'MINUS COINS', '06-07-2021 01:47:39 am', 1, '2021-07-06', '0', 177),
(65, 1, 'BY DELETING GAME', '100', 'ADD COINS', '06-07-2021 01:48:05 am', 1, '2021-07-06', '1', 277),
(66, 1, 'DEPOSIT COINS', '777', 'ADD COINS', '06-07-2021 01:59:28 am', 1, '2021-07-06', '0', 1054),
(67, 3, 'LOGIN CREATED BY ADMIN', '10', 'ADD COINS', '06-07-2021 02:11:44 am', 1, '2021-07-06', '0', 10),
(68, 4, 'LOGIN CREATED BY ADMIN', '1e6', 'ADD COINS', '06-07-2021 02:12:11 am', 1, '2021-07-06', '0', 1000000),
(69, 1, 'ADDED BY ADMIN', '-1000', 'ADD COINS', '06-07-2021 02:14:31 am', 1, '2021-07-06', '0', 54),
(70, 1, 'ADDED BY ADMIN', '-1000', 'ADD COINS', '06-07-2021 02:14:31 am', 1, '2021-07-06', '0', -946),
(71, 1, 'ADDED BY ADMIN', '-1000', 'ADD COINS', '06-07-2021 02:14:32 am', 1, '2021-07-06', '0', -1946),
(72, 1, 'ADDED BY ADMIN', '-1000', 'ADD COINS', '06-07-2021 02:14:33 am', 1, '2021-07-06', '0', -2946),
(73, 1, 'ADDED BY ADMIN', '-1000', 'ADD COINS', '06-07-2021 02:14:34 am', 1, '2021-07-06', '0', -3946),
(74, 1, 'ADDED BY ADMIN', '-1000', 'ADD COINS', '06-07-2021 02:14:34 am', 1, '2021-07-06', '0', -4946),
(75, 1, 'ADDED BY ADMIN', '-1000', 'ADD COINS', '06-07-2021 02:14:35 am', 1, '2021-07-06', '0', -5946),
(76, 1, 'ADDED BY ADMIN', '-1000', 'ADD COINS', '06-07-2021 02:14:36 am', 1, '2021-07-06', '0', -6946),
(77, 1, 'ADDED BY ADMIN', '-1000', 'ADD COINS', '06-07-2021 02:14:36 am', 1, '2021-07-06', '0', -7946),
(78, 1, 'ADDED BY ADMIN', '-1000', 'ADD COINS', '06-07-2021 02:14:37 am', 1, '2021-07-06', '0', -8946),
(79, 1, 'ADDED BY ADMIN', '-1000', 'ADD COINS', '06-07-2021 02:14:38 am', 1, '2021-07-06', '0', -9946),
(80, 1, 'ADDED BY ADMIN', '-1000', 'ADD COINS', '06-07-2021 02:14:39 am', 1, '2021-07-06', '0', -10946),
(81, 1, 'ADDED BY ADMIN', '-1000', 'ADD COINS', '06-07-2021 02:14:42 am', 1, '2021-07-06', '0', -11946),
(82, 1, 'ADDED BY ADMIN', '-1000', 'ADD COINS', '06-07-2021 02:14:43 am', 1, '2021-07-06', '0', -12946),
(83, 1, 'ADDED BY ADMIN', '12946', 'ADD COINS', '06-07-2021 02:15:48 am', 1, '2021-07-06', '0', 0),
(84, 1, 'ADDED BY ADMIN', '10', 'ADD COINS', '06-07-2021 02:23:55 am', 1, '2021-07-06', '0', 10),
(85, 1, 'ADDED BY ADMIN', '10', 'ADD COINS', '06-07-2021 02:23:56 am', 1, '2021-07-06', '0', 20),
(86, 1, 'ADDED BY ADMIN', '10', 'ADD COINS', '06-07-2021 02:23:58 am', 1, '2021-07-06', '0', 30),
(87, 1, 'ADDED BY ADMIN', '10', 'ADD COINS', '06-07-2021 02:23:59 am', 1, '2021-07-06', '0', 40),
(88, 1, 'ADDED BY ADMIN', '10', 'ADD COINS', '06-07-2021 02:34:42 am', 1, '2021-07-06', '0', 50),
(89, 1, 'ADDED BY ADMIN', '10', 'ADD COINS', '06-07-2021 02:34:50 am', 1, '2021-07-06', '0', 60),
(90, 1, 'ADDED BY ADMIN', '-10', 'ADD COINS', '06-07-2021 02:36:27 am', 1, '2021-07-06', '0', 50),
(91, 1, 'ADDED BY ADMIN', '-10', 'ADD COINS', '06-07-2021 02:36:36 am', 1, '2021-07-06', '0', 40),
(92, 1, 'ADDED BY ADMIN', '10', 'ADD COINS', '06-07-2021 02:36:56 am', 1, '2021-07-06', '0', 50),
(93, 2, 'DEPOSIT COINS', '100', 'ADD COINS', '06-07-2021 02:42:36 am', 1, '2021-07-06', '0', 1026),
(94, 1, 'BY CANCELING GAME', '100', 'ADD COINS', '06-07-2021 04:19:31 pm', 1, '2021-07-06', '1', 150),
(95, 2, 'BY CANCELING GAME', '100', 'ADD COINS', '06-07-2021 04:19:31 pm', 1, '2021-07-06', '1', 1126),
(96, 3, 'CREATED GAME', '-10', 'MINUS COINS', '10-07-2021 02:22:04 pm', 3, '2021-07-10', '0', 0),
(97, 1, 'JOINED GAME', '-10', 'MINUS COINS', '10-07-2021 02:22:12 pm', 1, '2021-07-10', '0', 140),
(98, 3, 'CANCELING GAME BY BOTH', '10', 'ADD COINS', '10-07-2021 02:22:46 pm', 1, '2021-07-10', '1', 10),
(99, 1, 'CANCELING GAME BY BOTH', '10', 'ADD COINS', '10-07-2021 02:22:46 pm', 1, '2021-07-10', '1', 150),
(100, 3, 'CREATED GAME', '-10', 'MINUS COINS', '10-07-2021 02:23:29 pm', 3, '2021-07-10', '0', 0),
(101, 1, 'JOINED GAME', '-10', 'MINUS COINS', '10-07-2021 02:23:37 pm', 1, '2021-07-10', '0', 140),
(102, 3, 'CANCELING GAME BY BOTH', '10', 'ADD COINS', '10-07-2021 02:24:02 pm', 3, '2021-07-10', '1', 10),
(103, 1, 'CANCELING GAME BY BOTH', '10', 'ADD COINS', '10-07-2021 02:24:02 pm', 3, '2021-07-10', '1', 150),
(104, 1, 'CREATED GAME', '-10', 'MINUS COINS', '10-07-2021 02:25:25 pm', 1, '2021-07-10', '0', 140),
(105, 3, 'JOINED GAME', '-10', 'MINUS COINS', '10-07-2021 02:25:33 pm', 3, '2021-07-10', '0', 0),
(106, 1, 'CANCELING GAME BY BOTH', '10', 'ADD COINS', '10-07-2021 02:26:28 pm', 3, '2021-07-10', '1', 150),
(107, 3, 'CANCELING GAME BY BOTH', '10', 'ADD COINS', '10-07-2021 02:26:28 pm', 3, '2021-07-10', '1', 10),
(108, 1, 'CREATED GAME', '-10', 'MINUS COINS', '10-07-2021 02:26:56 pm', 1, '2021-07-10', '0', 140),
(109, 3, 'JOINED GAME', '-10', 'MINUS COINS', '10-07-2021 02:27:03 pm', 3, '2021-07-10', '0', 0),
(110, 1, 'CANCELING GAME BY BOTH', '10', 'ADD COINS', '10-07-2021 02:27:25 pm', 3, '2021-07-10', '1', 150),
(111, 3, 'CANCELING GAME BY BOTH', '10', 'ADD COINS', '10-07-2021 02:27:25 pm', 3, '2021-07-10', '1', 10),
(112, 1, 'CREATED GAME', '-10', 'MINUS COINS', '10-07-2021 02:42:49 pm', 1, '2021-07-10', '0', 140),
(113, 3, 'JOINED GAME', '-10', 'MINUS COINS', '10-07-2021 02:43:02 pm', 3, '2021-07-10', '0', 0),
(114, 1, 'CANCELING GAME BY BOTH', '10', 'ADD COINS', '10-07-2021 02:43:25 pm', 1, '2021-07-10', '1', 150),
(115, 3, 'CANCELING GAME BY BOTH', '10', 'ADD COINS', '10-07-2021 02:43:25 pm', 1, '2021-07-10', '1', 10),
(116, 1, 'DEPOSIT COINS', '1000', 'ADD COINS', '16-07-2021 10:29:30 am', 1, '2021-07-16', '0', 1150),
(117, 1, 'WITHDRAW', '-100', 'MINUS COINS', '16-07-2021 10:29:43 am', 1, '2021-07-16', '0', 1050),
(118, 1, 'WITHDRAW', '-200', 'MINUS COINS', '16-07-2021 10:30:17 am', 1, '2021-07-16', '0', 850),
(119, 1, 'WITHDRAW', '-300', 'MINUS COINS', '16-07-2021 10:30:34 am', 1, '2021-07-16', '0', 550),
(120, 1, 'WITHDRAW', '-400', 'MINUS COINS', '16-07-2021 10:30:52 am', 1, '2021-07-16', '0', 150),
(121, 1, 'WITHDRAW', '-120', 'MINUS COINS', '16-07-2021 10:31:48 am', 1, '2021-07-16', '0', 30),
(122, 1, 'DEPOSIT COINS', '1000', 'ADD COINS', '16-07-2021 10:33:54 am', 1, '2021-07-16', '0', 1030),
(123, 1, 'WITHDRAW', '-100', 'MINUS COINS', '16-07-2021 10:38:15 am', 1, '2021-07-16', '0', 930),
(124, 1, 'WITHDRAW', '-50', 'MINUS COINS', '16-07-2021 10:39:06 am', 1, '2021-07-16', '0', 880),
(125, 1, 'WITHDRAW', '-100', 'MINUS COINS', '16-07-2021 10:44:03 am', 1, '2021-07-16', '0', 780),
(126, 1, 'WITHDRAW', '-100', 'MINUS COINS', '16-07-2021 10:46:15 am', 1, '2021-07-16', '0', 680),
(127, 1, 'WITHDRAW', '-100', 'MINUS COINS', '16-07-2021 10:46:26 am', 1, '2021-07-16', '0', 580),
(128, 1, 'DEPOSIT COINS', '123', 'ADD COINS', '24-07-2021 08:39:57 pm', 1, '2021-07-24', '0', 703),
(129, 1, '1234', '-123', 'PAY FRIEND', '24-07-2021 09:08:49 pm', 1, '2021-07-24', '2', 580),
(130, 2, '123', '123', 'PAY FRIEND', '24-07-2021 09:08:49 pm', 1, '2021-07-24', '2', 1249),
(131, 1, '1234', '-10', 'PAY FRIEND', '24-07-2021 09:10:15 pm', 1, '2021-07-24', '2', 570),
(132, 2, '123', '10', 'PAY FRIEND', '24-07-2021 09:10:15 pm', 1, '2021-07-24', '2', 1259),
(133, 1, 'JOINED GAME', '-100', 'MINUS COINS', '26-07-2021 03:37:54 pm', 1, '2021-07-26', '0', 390),
(134, 1, 'JOINED GAME', '-10', 'MINUS COINS', '26-07-2021 04:41:47 pm', 1, '2021-07-26', '0', 380),
(135, 1, 'JOINED GAME', '-10', 'MINUS COINS', '26-07-2021 04:42:54 pm', 1, '2021-07-26', '0', 370),
(136, 1, 'JOINED GAME', '-100', 'MINUS COINS', '26-07-2021 05:12:16 pm', 1, '2021-07-26', '0', 270),
(137, 1, 'JOINED GAME', '-100', 'MINUS COINS', '26-07-2021 05:13:16 pm', 1, '2021-07-26', '0', 170),
(138, 1, 'JOINED GAME', '-10', 'MINUS COINS', '27-07-2021 01:06:53 pm', 1, '2021-07-27', '0', 160),
(139, 1, 'JOINED GAME', '-100', 'MINUS COINS', '27-07-2021 01:08:46 pm', 1, '2021-07-27', '0', 60),
(140, 1, 'JOINED GAME', '-10', 'MINUS COINS', '27-07-2021 01:34:51 pm', 1, '2021-07-27', '0', 50),
(141, 1, 'WITHDRAW', '-200', 'MINUS COINS', '27-07-2021 04:30:42 pm', 1, '2021-07-27', '0', 300),
(142, 1, 'JOINED GAME', '-100', 'MINUS COINS', '28-07-2021 01:55:50 pm', 1, '2021-07-28', '0', 200),
(143, 5, 'LOING BY SELF', '10', 'ADD COINS', '28-07-2021 02:36:45 pm', 0, '2021-07-28', '0', 10),
(144, 6, 'LOGIN CREATED BY ADMIN', '10', 'ADD COINS', '28-07-2021 02:38:34 pm', 1, '2021-07-28', '0', 10),
(145, 5, 'DEPOSIT COINS', '500', 'ADD COINS', '28-07-2021 08:09:34 pm', 1, '2021-07-28', '0', 510),
(146, 5, 'DEPOSIT COINS', '600', 'ADD COINS', '28-07-2021 08:09:36 pm', 1, '2021-07-28', '0', 1110),
(147, 5, 'DEPOSIT COINS', '400', 'ADD COINS', '28-07-2021 08:09:39 pm', 1, '2021-07-28', '0', 1510),
(148, 5, 'WITHDRAW', '-400', 'MINUS COINS', '28-07-2021 08:12:10 pm', 5, '2021-07-28', '0', 1110),
(149, 5, 'WITHDRAW', '-500', 'MINUS COINS', '28-07-2021 08:12:21 pm', 5, '2021-07-28', '0', 610),
(150, 5, 'JOINED GAME', '-250', 'MINUS COINS', '28-07-2021 08:22:47 pm', 5, '2021-07-28', '0', 360),
(151, 5, 'JOINED GAME', '-100', 'MINUS COINS', '29-07-2021 08:14:16 pm', 5, '2021-07-29', '0', 260),
(152, 5, 'WITHDRAW', '-200', 'MINUS COINS', '29-07-2021 08:15:47 pm', 5, '2021-07-29', '0', 60),
(153, 5, 'DEPOSIT COINS', '100', 'ADD COINS', '29-07-2021 08:17:21 pm', 1, '2021-07-29', '0', 160),
(154, 5, '123', '-60', 'PAY FRIEND', '29-07-2021 08:18:45 pm', 5, '2021-07-29', '2', 100),
(155, 1, '1123456789', '60', 'PAY FRIEND', '29-07-2021 08:18:45 pm', 5, '2021-07-29', '2', 260),
(156, 5, 'DEPOSIT COINS', '1000', 'ADD COINS', '29-07-2021 08:25:15 pm', 1, '2021-07-29', '0', 1100),
(157, 5, 'JOINED GAME', '-1000', 'MINUS COINS', '29-07-2021 08:25:28 pm', 5, '2021-07-29', '0', 100),
(158, 7, 'LOING BY SELF', '10', 'ADD COINS', '05-08-2021 11:48:26 am', 0, '2021-08-05', '0', 10),
(159, 1, 'JOINED GAME', '-100', 'MINUS COINS', '11-10-2021 12:00:37 pm', 1, '2021-10-11', '0', 160);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) NOT NULL,
  `user_password` varchar(5000) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `user_phone` bigint(20) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_photo` varchar(2000) NOT NULL,
  `user_status` tinyint(1) NOT NULL,
  `user_code` varchar(50) NOT NULL,
  `user_delete` tinyint(1) NOT NULL,
  `user_added_date` varchar(50) NOT NULL,
  `user_amount` float NOT NULL,
  `updated_by_id` bigint(20) NOT NULL,
  `req` tinyint(1) NOT NULL,
  `last_login` bigint(20) NOT NULL,
  `last_login_time` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_password`, `first_name`, `user_phone`, `user_email`, `user_photo`, `user_status`, `user_code`, `user_delete`, `user_added_date`, `user_amount`, `updated_by_id`, `req`, `last_login`, `last_login_time`) VALUES
(1, '$2y$10$PqbTr7y9U5lVS4xzJe1vTOdtWJjDuK8OSNDIS/e9wANsxbDmCvA.C', 'balaji', 123, '', '', 1, '', 0, '05-07-2021 11:59:41 pm', 160, 1, 0, 1641708991, '09/01/2022 11:45:31 am'),
(2, '$2y$10$TkNw4mU.iWoAXxoqVaxr1uWJqaAg.RDfyRCwTFyW9w4QTX7WVzehe', 'qwe', 1234, '', '', 1, '', 0, '06-07-2021 12:07:01 am', 1259, 1, 0, 1643130101, '25/01/2022 10:30:41 pm'),
(3, '$2y$10$A/J4BflhUWrNtiQMs6tWEejnXJQHLeMoeRFb75ZUR4cQMtMRyF9j2', 'qqq', 1234567890, '', '', 1, '', 0, '06-07-2021 02:11:44 am', 10, 0, 0, 1625908474, ''),
(4, '$2y$10$4NhQ7ynFpOPukU0J7jOcNeM7qT70qsEr06QWrDsbOye33psH6aHOq', 'balaji', 12345, '', '', 1, '', 1, '06-07-2021 02:12:11 am', 1000000, 0, 0, 0, ''),
(5, '$2y$10$PhQ9LlqIozsY7GPWtGS0de2UvhUW15IckQaSZbOza661nj32SFx8O', 'aalaji', 1123456789, '', '', 1, '', 0, '28-07-2021 02:36:45 pm', 100, 1, 0, 1627570606, '29/07/2021 08:25:46 pm'),
(6, '$2y$10$C9ts9TEgrMB1hX3yTwzFA.O4NILRDhuttvYjJ9KwlmW1QObgMhfAy', 'qqq', 1234523456, '', '', 1, '', 1, '28-07-2021 02:38:34 pm', 10, 0, 0, 0, ''),
(7, '$2y$10$2tsacUDBwhiSUAS/KVU0GObzgxhRUjX9QzDIA/VAPkdZK4VFWPyTK', 'ludo', 123456, 'admin@admin.com', '', 1, '', 0, '05-08-2021 11:48:26 am', 10, 0, 0, 1628572592, '10/08/2021 10:45:32 am'),
(8, '$2y$10$kAU1wwl.OjRroEbtXv35oe8Jrvs0meK0j2hFCa3YY9zNDRfiQ3ETy', 'qqq', 1234567, 'admin@gmail.com', '', 1, '', 0, '05-08-2021 12:02:34 pm', 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `withdraw_id` bigint(20) NOT NULL,
  `withdraw_user_id` bigint(20) NOT NULL,
  `withdraw_amount` bigint(20) NOT NULL,
  `withdraw_type` varchar(50) NOT NULL,
  `withdraw_phone` varchar(50) NOT NULL,
  `withdraw_request_date` varchar(200) NOT NULL,
  `withdrawn` int(1) NOT NULL,
  `withdrawn_by` varchar(1000) NOT NULL,
  `withdraw_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `withdraw`
--

INSERT INTO `withdraw` (`withdraw_id`, `withdraw_user_id`, `withdraw_amount`, `withdraw_type`, `withdraw_phone`, `withdraw_request_date`, `withdrawn`, `withdrawn_by`, `withdraw_date`) VALUES
(13, 1, 200, 'PHONE PAY', '1234567', '27-07-2021 04:30:42 pm', 1, '1', '2021-07-27'),
(14, 5, 400, 'PHONE PAY', '12345677', '28-07-2021 08:12:10 pm', 1, '1', '2021-07-28'),
(15, 5, 500, 'PHONE PAY', '12345678904', '28-07-2021 08:12:21 pm', 1, '1', '2021-07-28'),
(16, 5, 200, 'PHONE PAY', '98765432123456', '29-07-2021 08:15:47 pm', 1, '1', '2021-07-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_coins`
--
ALTER TABLE `add_coins`
  ADD PRIMARY KEY (`add_coins_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`withdraw_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_coins`
--
ALTER TABLE `add_coins`
  MODIFY `add_coins_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `game_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `player_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `withdraw_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
