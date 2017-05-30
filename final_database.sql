-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-05-30 10:14:07
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
  `recom_id` int(11) NOT NULL,
  `songname` varchar(200) CHARACTER SET utf8 NOT NULL,
  `singer` varchar(200) CHARACTER SET utf8 NOT NULL,
  `songinform` varchar(200) CHARACTER SET utf8 NOT NULL,
  `recom_num` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `recom`
--

INSERT INTO `recom` (`recom_id`, `songname`, `singer`, `songinform`, `recom_num`) VALUES
(1, 'fatfat', 'jake', 'fffffaaatttt', 1),
(2, 'fatjake2', 'jake', 'fatfat', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `song`
--

CREATE TABLE `song` (
  `songname` varchar(20) NOT NULL,
  `singer` varchar(20) NOT NULL,
  `link` varchar(500) NOT NULL,
  `clickrate` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `song`
--

INSERT INTO `song` (`songname`, `singer`, `link`, `clickrate`) VALUES
('30CM', '頑童', '', 0),
('aaa', 'ccc', '', 0),
('ccc', 'ddd', '', 0),
('幹你娘', '羅百吉', '', 0);

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
  ADD PRIMARY KEY (`recom_id`);

--
-- 資料表索引 `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`songname`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `recom`
--
ALTER TABLE `recom`
  MODIFY `recom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
