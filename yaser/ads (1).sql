-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 أبريل 2023 الساعة 03:58
-- إصدار الخادم: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ads`
--

-- --------------------------------------------------------

--
-- بنية الجدول `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT 0,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`, `state`, `add_date`) VALUES
(65, 'Ahmed', '3', 0, '2023-03-28 00:34:43'),
(67, 'mohammed', '7', 0, '2023-03-28 00:12:08'),
(75, 'yaser', 'yaserA#4', 0, '2023-03-28 00:33:36');

-- --------------------------------------------------------

--
-- بنية الجدول `campaign`
--

CREATE TABLE `campaign` (
  `id` int(10) NOT NULL,
  `camp_name` varchar(200) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `exp_date` datetime NOT NULL,
  `ads_platform` varchar(100) NOT NULL,
  `daily_exch` varchar(10) NOT NULL,
  `camp_link` varchar(50) NOT NULL,
  `block` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `campaign`
--

INSERT INTO `campaign` (`id`, `camp_name`, `customer_id`, `start_date`, `exp_date`, `ads_platform`, `daily_exch`, `camp_link`, `block`) VALUES
(34, '497849', 12, '2023-03-14 21:00:00', '2023-03-07 00:00:00', 'facebook', '88', 'trwiuetywity', 1),
(38, '841p9481', 14, '2023-03-07 21:00:00', '2023-03-14 00:00:00', 'instgram', '00', '6794691', 0),
(39, 'yutyiti', 12, '2023-03-02 21:00:00', '2023-03-07 00:00:00', 'facebook', '77', '78789', 0),
(40, 'uetletl', 12, '2023-04-05 21:00:00', '2023-04-04 00:00:00', 'facebook', '777', 'ljlaeryjaelry', 0);

-- --------------------------------------------------------

--
-- بنية الجدول `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT 0,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `customer`
--

INSERT INTO `customer` (`id`, `name`, `password`, `state`, `added_date`) VALUES
(10, 'bootstrap', 'yaserA5#', 1, '2023-03-23 02:25:43'),
(12, 'bootstrap', '66', 0, '2023-03-23 02:26:00'),
(14, '568786979', '6868', 0, '2023-03-26 22:30:32'),
(16, 'yyy', 'yaserA5#', 0, '2023-03-28 00:55:53');

-- --------------------------------------------------------

--
-- بنية الجدول `marketers`
--

CREATE TABLE `marketers` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(30) NOT NULL,
  `marketer_customer` int(11) NOT NULL,
  `block` tinyint(1) NOT NULL DEFAULT 0,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `marketers`
--

INSERT INTO `marketers` (`id`, `name`, `password`, `marketer_customer`, `block`, `added_date`) VALUES
(1, 'laravel werwer', '44', 12, 0, '2023-03-31 20:50:10'),
(10, 'yyy', 'yaseraA$3', 16, 0, '2023-03-31 21:51:30'),
(11, 'rafat', '1taR44#6666', 12, 0, '2023-03-31 21:54:24');

-- --------------------------------------------------------

--
-- بنية الجدول `register`
--

CREATE TABLE `register` (
  `register_id` int(10) NOT NULL,
  `campaign_id` int(10) NOT NULL,
  `markter_id` int(10) NOT NULL,
  `register_name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `service` varchar(100) NOT NULL,
  `info` varchar(100) NOT NULL,
  `source` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `register_state` tinyint(4) NOT NULL DEFAULT 0,
  `note` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `register`
--

INSERT INTO `register` (`register_id`, `campaign_id`, `markter_id`, `register_name`, `phone`, `service`, `info`, `source`, `date`, `register_state`, `note`) VALUES
(9, 34, 1, 'yyyryeyqe', '766645653653', 'bxbgbfg', 'ghghh', 'snapchat', '2023-04-02 00:55:13', 1, ''),
(10, 34, 11, 'yey', 'yeye', 'eyeye', 'yeye', 'eyey', '2023-04-01 02:49:37', 0, 'ey'),
(11, 39, 11, 'tttt', 'yeye', 'eyeye', 'yeye', 'eyey', '2023-04-02 00:55:19', 2, 'ey');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Relation_btw_campaign_andcustomer` (`customer_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketers`
--
ALTER TABLE `marketers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `markter_customer` (`marketer_customer`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`register_id`),
  ADD KEY `elation_btw_campaign_register` (`campaign_id`),
  ADD KEY `Relation_btw_markter_register` (`markter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `marketers`
--
ALTER TABLE `marketers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `register_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `campaign`
--
ALTER TABLE `campaign`
  ADD CONSTRAINT `Relation_btw_campaign_andcustomer` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `marketers`
--
ALTER TABLE `marketers`
  ADD CONSTRAINT `marketers_ibfk_1` FOREIGN KEY (`marketer_customer`) REFERENCES `customer` (`id`);

--
-- القيود للجدول `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `Relation_btw_markter_register` FOREIGN KEY (`markter_id`) REFERENCES `marketers` (`id`),
  ADD CONSTRAINT `elation_btw_campaign_register` FOREIGN KEY (`campaign_id`) REFERENCES `campaign` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
