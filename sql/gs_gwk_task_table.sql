-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: mysql635.db.sakura.ne.jp
-- 生成日時: 2024 年 10 月 05 日 13:48
-- サーバのバージョン： 5.7.40-log
-- PHP のバージョン: 8.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `olivehippo18_db_kadai07`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_gwk_task_table`
--

CREATE TABLE `gs_gwk_task_table` (
  `id` int(11) NOT NULL,
  `task_content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `completion_timing_from_start_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `gs_gwk_task_table`
--

INSERT INTO `gs_gwk_task_table` (`id`, `task_content`, `completion_timing_from_start_date`) VALUES
(1, 'FP相談', 14),
(2, '自治体相談', 7),
(3, '申立書作成', 20),
(4, '弁護士相談1', 14),
(5, '引越し', 7),
(6, '陳述書作成', 20),
(7, '弁護士相談2', 14);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_gwk_task_table`
--
ALTER TABLE `gs_gwk_task_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_gwk_task_table`
--
ALTER TABLE `gs_gwk_task_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
