-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 07, 2018 lúc 07:28 PM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `confession`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `cmt_id` int(11) NOT NULL,
  `cmt_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`cmt_id`, `cmt_content`, `post_id`, `user_id`) VALUES
(5, 'Ad mà biết cách kinh doanh cho mau giàu thì chả ngồi làm ad nữa :v Em hỏi theo đúng kiểu mấy thằng khôn đầy ở quê ad.', '4f363e854ae2a30eaf137995357d1a46', 5),
(6, 'Đầu tiên kinh doanh thì phải có cái đầu biết suy nghĩ, phải giỏi một cái gì đó. Nếu vậy thì sao không lo tập trung cho giỏi vụ dev đi, rồi đi làm học hỏi sau này mở công ty cũng được vậy.', '4f363e854ae2a30eaf137995357d1a46', 5),
(7, 'Chỉ sợ em không có đủ năng lực lại mơ cao thôi. Vì vậy nên ngồi suy nghĩ cho kĩ mình muốn theo hướng nào đi. Đừng khôn \"lanh\" nữa', '4f363e854ae2a30eaf137995357d1a46', 5),
(8, 'như lol', '05f8a0570e530cdab5958a7ee05f2823', 5),
(9, 'dm hiếu', '05f8a0570e530cdab5958a7ee05f2823', 5),
(10, 'xinh vl', '4f363e854ae2a30eaf137995357d1a46', 5);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cmt_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `cmt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
