-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-06-05 13:06:51
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
  `songname` varchar(200) CHARACTER SET utf8 NOT NULL,
  `singer` varchar(200) CHARACTER SET utf8 NOT NULL,
  `songinform` varchar(200) CHARACTER SET utf8 NOT NULL,
  `recom_num` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `song`
--

CREATE TABLE `song` (
  `song_id` int(200) NOT NULL,
  `songname` varchar(500) CHARACTER SET utf8 NOT NULL,
  `singer` varchar(500) CHARACTER SET utf8 NOT NULL,
  `link` varchar(500) CHARACTER SET utf8 NOT NULL,
  `clickrate` int(11) NOT NULL DEFAULT '0',
  `male_click` int(11) NOT NULL DEFAULT '0',
  `female_click` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `song`
--

INSERT INTO `song` (`song_id`, `songname`, `singer`, `link`, `clickrate`, `male_click`, `female_click`) VALUES
(21, 'Rap God', 'Eminem', 'https://www.youtube.com/watch?v=XbGs_qK2PQA&index=267&list=PLkxqFWDbdCLKgmjeY4C2SYCwN0Par-JYV', 4, 0, 0),
(22, 'Taking Off', 'ONE OK ROCK', 'https://www.youtube.com/watch?v=Hdd7-JQ3b0s&list=PLkxqFWDbdCLKgmjeY4C2SYCwN0Par-JYV&index=239', 5, 0, 0),
(28, 'Live for the Night (Explicit)', 'Krewella', 'https://www.youtube.com/watch?v=0mVck88W01I&list=PLkxqFWDbdCLKgmjeY4C2SYCwN0Par-JYV&index=172', 0, 0, 0);

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
('ggggg', 'ggggg', 'female'),
('alex', 'cc1124', 'male'),
('jane', 'jane123', 'female'),
('gginin', 'gginin', 'male');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`song_id`);

--
-- 資料表索引 `userdata`
--
ALTER TABLE `userdata`
  ADD UNIQUE KEY `username` (`username`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `song`
--
ALTER TABLE `song`
  MODIFY `song_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
