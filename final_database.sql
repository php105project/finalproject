-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-05-28 14:17:50
-- 伺服器版本: 5.7.14
-- PHP 版本： 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `final_database`
--

-- --------------------------------------------------------

--
-- 資料表結構 `recom`
--

CREATE TABLE `recom` (
  `songinform` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `recom`
--

INSERT INTO `recom` (`songinform`) VALUES
('');

-- --------------------------------------------------------

--
-- 資料表結構 `song`
--

CREATE TABLE `song` (
  `songname` varchar(20) NOT NULL,
  `singer` varchar(20) NOT NULL,
  `clickrate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `song`
--

INSERT INTO `song` (`songname`, `singer`, `clickrate`) VALUES
('當', '動力火車', NULL),
('痴心絕對', '李圣傑', NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `userdata`
--

CREATE TABLE `userdata` (
  `username` varchar(20) CHARACTER SET utf8 NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 NOT NULL,
  `gender` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `userdata`
--

INSERT INTO `userdata` (`username`, `password`, `gender`) VALUES
('user', 'password', 'female'),
('manager', 'password', 'male'),
('aaa', 'aaa', 'female');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `recom`
--
ALTER TABLE `recom`
  ADD PRIMARY KEY (`songinform`);

--
-- 資料表索引 `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`songname`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
