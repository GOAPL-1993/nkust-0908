-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 
-- 伺服器版本： 8.0.17
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `bbs`
--

-- --------------------------------------------------------

--
-- 資料表結構 `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `vid` varchar(20) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `video`
--

INSERT INTO `video` (`id`, `title`, `vid`, `pid`) VALUES
(1, '【ON AIR】TVBS新聞 55 頻道 24 小時直播', 'A4FbB8UhNRs', 1),
(2, 'EBC 東森新聞 51 頻道 24 小時線上直播', 'RaIJ767Bj_M', 1),
(3, '華視新聞HD直播', 'TL8mmew3jb8', 1),
(4, '台視新聞台HD 24 小時線上直播', 'NbjI0cARzjQ', 1),
(5, '中視新聞台 LIVE直播', 'cYgUeTtO5v8', 1),
(6, '世界是虛擬的，但有一個東西是真實的', 'B-I2guiXzRA', 2),
(7, '海奧華預言，人類起源，耶穌是誰，金字塔之謎，你想知道的答案這裡都有 ', '1rUWY2z4wUk', 2),
(8, '如果沒有月球，“它們”就會出現在地球上', 'r46O1ZyEbQY', 2),
(9, '最神奇的星球，地球以及人類存在的真正原因 ', 'BLpv9fCZqcs', 2),
(10, '人類毀滅的第三種可能，近期可能就會發生的超新星爆炸', 'vBbMnDFy4YY', 2);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
