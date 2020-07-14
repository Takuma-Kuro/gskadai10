-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2020 年 7 月 14 日 10:04
-- サーバのバージョン： 5.7.26
-- PHP のバージョン: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_kadai`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_kadai5_user_table`
--

CREATE TABLE `gs_kadai5_user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `lpw` varchar(500) NOT NULL,
  `area` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `gs_kadai5_user_table`
--

INSERT INTO `gs_kadai5_user_table` (`id`, `name`, `email`, `lpw`, `area`) VALUES
(1, 'TAKUMA KUROKAWA', 'skijump120@gmail.com', '$2y$10$GhyFKmweGQVDEuchEJjYEO./RQnMDl7DDGoi5Aj6UUkRBSWfPE5Nq', NULL),
(2, 'taro yamada', 'kk@yahoo.co.jp', '$2y$10$PygcJQ7O.St8fyetTtQMI./nIjuHgua1YY5792HQqNcHMuAyoLaeS', 'Hokkaido'),
(3, 'hanako yamada', 'kk@gmail.com', '$2y$10$SewxcX7rcaNu2w3twoxCL.4xutTtb3oS3xS11RBvRYsQlwnsarP2y', 'Tokyo'),
(4, 'daisuke motomiya', 'd2@test.jp', '$2y$10$e8HkenRcEgh5pFG0KAbXee3swCz.xGfJUwL6Lr9Saomofm5WUYaMS', 'Tokyo'),
(5, 'kkkk', 'test1', '$2y$10$KlLSPlJTFhJqM9rOr0iarujTfZ.SUMwJ7oJB1GW.JrZjlmm7j.6OS', 'Kyoto');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_kadai5_user_table`
--
ALTER TABLE `gs_kadai5_user_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `gs_kadai5_user_table`
--
ALTER TABLE `gs_kadai5_user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
