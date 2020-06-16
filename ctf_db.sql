-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 21, 2019 lúc 10:44 AM
-- Phiên bản máy phục vụ: 10.1.32-MariaDB
-- Phiên bản PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ctf_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `team`
--

CREATE TABLE `team` (
  `idteam` int(8) NOT NULL,
  `teamname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `points` float NOT NULL,
  `idmember1` int(8) NOT NULL,
  `idmember2` int(8) NOT NULL,
  `idmember3` int(8) NOT NULL,
  `idmember4` int(8) NOT NULL,
  `idmember5` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `team`
--

INSERT INTO `team` (`idteam`, `teamname`, `points`, `idmember1`, `idmember2`, `idmember3`, `idmember4`, `idmember5`) VALUES
(1, 'uitctf', 0, 1, -1, -1, -1, -1),
(2, 'uitctf1', 0, 2, -1, -1, -1, -1),
(3, 'uitctf2', 0, 3, -1, -1, -1, -1),
(4, 'uitctf3', 0, 3, -1, -1, -1, -1),
(5, '', 0, 0, 0, 0, 0, 0),
(6, 'BaoTeam', 1000, 7, -1, -1, -1, -1),
(7, 'SamTeam', 1000, 7, -1, -1, -1, -1),
(8, 'Break Your Heart', 100000, 1, -1, -1, -1, -1),
(9, 'Break Your Heart', 100000, 1, -1, -1, -1, -1),
(10, 'Break Your Heart 1', 100000, 1, -1, -1, -1, -1),
(11, 'Break Your Heart 1', 100000, 1, -1, -1, -1, -1),
(12, 'Break Your Heart 2', 1200000, 1, -1, -1, -1, -1),
(13, 'Break Your Heart 2', 1200000, 1, -1, -1, -1, -1),
(14, 'Break Your Heart 3', 1200000, 1, -1, -1, -1, -1),
(15, 'Break Your Heart 3', 1200000, 1, -1, -1, -1, -1),
(16, 'Break Your Heart 3', 1200000, 1, -1, -1, -1, -1),
(17, 'Im out', 1200000, 1, -1, -1, -1, -1),
(18, 'Im out 1', 1200000, 1, -1, -1, -1, -1),
(19, 'Im out 1', 1200000, 1, -1, -1, -1, -1),
(20, 'Im out 3', 1200000, 1, -1, -1, -1, -1),
(21, 'Im out 5', 1200000, 1, -1, -1, -1, -1),
(22, 'Im out 5', 1200000, 1, -1, -1, -1, -1),
(23, 'Im out 5', 1200000, 1, -1, -1, -1, -1),
(24, 'Im out 5', 1200000, 1, -1, -1, -1, -1),
(25, 'Im out 5', 1200000, 1, -1, -1, -1, -1),
(26, 'Im out 5', 1200000, 1, -1, -1, -1, -1),
(27, 'Trong team', 12, 8, -1, -1, -1, -1),
(28, 'PhuongTeam', 120, 5, -1, -1, -1, -1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_infor`
--

CREATE TABLE `user_infor` (
  `id` int(8) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_infor`
--

INSERT INTO `user_infor` (`id`, `email`, `name`) VALUES
(1, 'troibansang@gmail.com', 'Sam'),
(2, 'honganh@gmail.com', 'Anh'),
(3, 'hoaiphuong@gmail.com', 'Phuong'),
(4, 'hongngoc@gmail.com', 'Ngoc'),
(5, 'hoaiphuong@gmail.com', 'hoaiphuong'),
(6, 'giabao@gmail.com', 'bao'),
(7, 'giabao@gmail.com', 'bao'),
(8, 'trong@gmail.com', 'trong');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_pass`
--

CREATE TABLE `user_pass` (
  `userid` int(8) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_pass`
--

INSERT INTO `user_pass` (`userid`, `username`, `password`) VALUES
(1, 'bloodmoon', '56fafa8964024efa410773781a5f9e93'),
(2, 'honganh', 'b710b378de7ef5133b97bd2c9464ffe3'),
(3, 'hoaiphuong', '06dc67758e6bd6f8b089aee4a915441e'),
(4, 'hongngoc', '7bfe8ed9fc8127bfc322b6b24fd13e4d'),
(5, 'hoaiphuong1', '202cb962ac59075b964b07152d234b70'),
(6, 'baobao', 'b6c6cfe1a7ba5eac0f984f3ef97c8490'),
(7, 'baobao1', 'b6c6cfe1a7ba5eac0f984f3ef97c8490'),
(8, 'trong', 'eadf4a44b227470564747ca9ee9bdcaa');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`idteam`);

--
-- Chỉ mục cho bảng `user_infor`
--
ALTER TABLE `user_infor`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user_pass`
--
ALTER TABLE `user_pass`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `team`
--
ALTER TABLE `team`
  MODIFY `idteam` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `user_infor`
--
ALTER TABLE `user_infor`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `user_pass`
--
ALTER TABLE `user_pass`
  MODIFY `userid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
