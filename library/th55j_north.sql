-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2025-02-28 08:36:52
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `th55j_north`
--

-- --------------------------------------------------------

--
-- 資料表結構 `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `item` text NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `settings`
--

INSERT INTO `settings` (`id`, `item`, `value`) VALUES
(1, 'event_info', '455454\r\niughjggl\r\nuigggjfk\r\n* eeqweqew\r\n* afdfadfa\r\n* fasdfdasfas');

-- --------------------------------------------------------

--
-- 資料表結構 `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `phone` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `tickets`
--

INSERT INTO `tickets` (`id`, `firstname`, `lastname`, `phone`, `password`) VALUES
(1, '1', '2', '123123123', '1234'),
(2, '4yr', 'y34y', '123123', '12214'),
(3, 'john', 'wood', '098788766', 'asdasd'),
(5, 'dsaa', 'sasd', 'assas', 'asada'),
(6, 'choua', 'chun', '121231231231', '1234'),
(7, 'first', 'last', '0101001', '1234'),
(8, 's', 'asd', 'asdad', 'asdasd'),
(9, 'asf', 'f', 'asfasf', 'asf');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
