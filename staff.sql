-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-12-22 02:48:34
-- 伺服器版本: 10.1.33-MariaDB
-- PHP 版本： 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `staff`
--

-- --------------------------------------------------------

--
-- 資料表結構 `data`
--

CREATE TABLE `data` (
  `id` int(10) NOT NULL,
  `password` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(100) NOT NULL,
  `address` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lv` int(1) NOT NULL DEFAULT '0',
  `score` int(3) NOT NULL DEFAULT '0',
  `ch` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `data`
--

INSERT INTO `data` (`id`, `password`, `name`, `phone`, `address`, `lv`, `score`, `ch`) VALUES
(1, '123', 'Ada', 1234567, '某XXXXXXXXX某XXXXXXXXX', 0, 0, 0),
(2, '456', 'Aditi', 12345678, '某XXXXXXXXX某XXXXXXXXX', 0, 0, 0),
(3, '789', 'Afra', 12345677, '某XXXXXXXXX某XXXXXXXXX', 0, 0, 0),
(4, '111', 'Dan', 12345678, '某XXXXXXXXX某XXXXXXXXX', 0, 0, 0),
(5, '222', 'Dave', 12345676, '某XXXXXXXXX某XXXXXXXXX', 0, 0, 0),
(6, '133', 'boss', 99999999, '999999999999999999', 1, 0, 0);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `data`
--
ALTER TABLE `data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
