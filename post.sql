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
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `post_number` int(13) NOT NULL,
  `post_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `post_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `post_date` datetime DEFAULT NULL,
  `post_image` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countView` int(13) NOT NULL DEFAULT '0',
  `countLike` int(11) NOT NULL DEFAULT '0',
  `countCmt` int(11) NOT NULL DEFAULT '0',
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`post_number`, `post_id`, `post_content`, `post_date`, `post_image`, `countView`, `countLike`, `countCmt`, `updated_at`) VALUES
(8, '03bf391d15163df28e5957b53acea197', 'Tự nhiên mò đc cái page này Hí hửng coi thì gần như mn chỉ nc công việc, học tập :(( Ko biết tin thoát ế có đc đăng ko 😂\r\n\r\nVào thẳng vđe nhé, m 23t, đã đi làm mà mỗi lần về quê bme cứ lân la sao ko có thằng nào về nhà m chơi hả con, sốt ruột thay bme, nên có ai cũng trong hoàn cảnh như m thì bắt tay giúp nhau cái nhỉ\r\n\r\nNghiêm túc lắm luônnnnn\r\n\r\n______________________________________\r\n\r\nĐây là thính hay là bả? Liệu là trai hay gái (if u know what i mean bae)! Giúp là giúp kiểu gì vậy em? :v Mới 23t thì còn trẻ lắm chứ có gì đâu mà sợ. Cái này là không phải kiểu ba mẹ muốn mà chính em mong muốn thì hãy kiếm người yêu chứ dắt về rồi phán bạn thân, friendzone thì lại chết mấy ông Dev nữa.', '2018-07-19 00:00:00', NULL, 6, 0, 2, '2018-08-10'),
(27, '05f8a0570e530cdab5958a7ee05f2823', 'toan ngu lol.', '2018-08-24 13:56:23', '05f8a0570e530cdab5958a7ee05f2823.jpg', 5, 0, 2, '2018-08-24'),
(1, '1174d76cb2398fe48c28fac7caf391fe', 'Anh em nào có nhã hứng không này, mình biết qua đứa em đang làm HR ở WeFit mà ko biết tìm DEV ở đâu, cứ kêu dân IT nhiều mà ko biết tuyển ở đâu :))\r\nAi có tập gym hay quan tâm nhiều đến start-up thì sẽ biết WeFit hiện tại đang là top Start-up công nghệ Việt Nam\r\nHiện tại WeFit đang tìm kiếm team Front-end, Back-end cho dự án mới của họ. \r\nBack-end: level Intermediate, yêu cầu Tối thiểu 6 tháng kinh nghiệm sử dụng Ruby/Ruby-on-Rails trên 1 dự án đã chạy thực tế.\r\nFront-end: level Junior. Intermediate, yêu cầu Tối thiểu 6 tháng kinh nghiệm sử dụng JavaScript/ReactJS/VueJS trên 1 dự án đã chạy thực tế \r\nAi có nhã hứng thì mail cho thằng cu hoặc ib nó nhé: tutv@gmail.com, fb:', '2018-07-14 00:00:00', NULL, 3, 0, 0, '2018-08-10'),
(21, '4880e9f59a7c45f35642f7d0f99a3b3d', 'Chào add và cả nhà\r\n\r\nXin phép cả nhà cho mìh mạo muội vào đây để tìm 1 chàng trai IT chuyên về phần mềm để cùng mìh thực hiện ước mơ nhỏ nhoi mà mìh đã cất dấu từ lâu . Tự giới thiệu tí e sv năm 3 ( học trườg HUFI nhé) theo ngàh IT ( cho mìh đc xứng là e nha).\r\n\r\nE vào đây để tìm 1 a IT năm 4 hay đã ra trường rồi í ạ để cùng e viết 1 ứng dụng tên là \"THỬ YÊU \" ( cái tên hơn bùn cười nhưg cũng có thể thay đổi nếu có cái tên nào hay hơn ).E giới thiệu sợ về ứng dụng tí. ứng dụng này dành riêng cho các b đang là FA và muốn tìm 1 nữa còn lại của mìh và ứng dụng đc viết trên hệ điền hành Android dùng ngngữ java hoặc c#.\r\n\r\nNhưg mà e thì là sv năm 3 mà trường e học thì môn lập trình đi động thì năm 4 mới đc học nên e ko thể tự mìh viết ứng dụng này đc.E cũng tự nghiên cứu tìm tòi tự học nhưng mà có nhìu chỗ e viết code bị lỗi lun nên phải cần 1 người cùng e thực hiên.\r\n\r\nÀ mà e cũng muốn là người test ứng dụng của mìh cùng vs a mà viết ứng dụng vs e vì e cũg đag FA mà .Vậy nên để đc hoàn hảo thì e xin đề nghị tí là khi viết ứng dụng chúng ta sẽ hạn chế gặp mặt nhé để đc kết quả tốt nhất đối vs ứng dụng và e.', '2018-08-02 16:05:20', NULL, 16, 0, 0, '2018-08-11'),
(26, '4f363e854ae2a30eaf137995357d1a46', 'Chào Ad và các anh/chị tiền bối đi trước, Em là sinh viên sắp lên năm 3, chuyên ngành Công nghệ Phần mềm.\r\n\r\nHiện tại định hướng của em đang khá mù mịt, không biết nên theo hướng làm Web hay Mobile, hay làm phần mềm chạy trên PC,... và sau 2 năm học hành thì em cũng cảm thấy đam mê của mình với ngành là không quá lớn, mà lại khá thích kinh doanh T_T.\r\n\r\nMong các tiến bối tư vấn giúp em nên đi theo hướng nào mà có thể kết hợp được với kinh doanh cho mau giàu ạ :D :D. Hoặc ít nhất là hướng đi sẽ phát triển và có thể sống tốt trong tương lai. Em cảm ơn ạ :D :D.\r\n\r\n_________________________________\r\n\r\nAd mà biết cách kinh doanh cho mau giàu thì chả ngồi làm ad nữa :v Em hỏi theo đúng kiểu mấy thằng khôn đầy ở quê ad.\r\n\r\nĐầu tiên kinh doanh thì phải có cái đầu biết suy nghĩ, phải giỏi một cái gì đó. Nếu vậy thì sao không lo tập trung cho giỏi vụ dev đi, rồi đi làm học hỏi sau này mở công ty cũng được vậy.\r\n\r\nChỉ sợ em không có đủ năng lực lại mơ cao thôi. Vì vậy nên ngồi suy nghĩ cho kĩ mình muốn theo hướng nào đi. Đừng khôn \"lanh\" nữa', '2018-08-10 22:57:30', '4f363e854ae2a30eaf137995357d1a46.png', 20, 0, 4, '2018-08-24'),
(7, '774183dfbbd448eb1bab84bd9aa425b4', 'Mấy anh chị cho em hỏi?? Em là 2k mới thi Đh xong, em muốn theo đuổi ngành CNTT . Em hiện đang hoang mang là không biết nên chọn ĐH Khoa học- Tự nhiên hay ĐH CNTT hay là RMIT. Nếu chọn Đh trong nước thì nên chọn chương trình đại trà or CLC . Em cảm ơn nhiều\r\n\r\n______________________________________\r\n\r\nThật sự thì CNTT không quá quan trọng vụ trường, miễn tầm trung trở lên là đủ rồi. Quan trọng nhất vẫn là tự học. Hồi đó ad chọn trường cũng đơn giản là cứ xem trường nào mình đủ điểm vào và có ngành ad thích với gần nhà. Tuy vậy, nếu em đủ khả năng vào RMIT thì cũng có nghĩa là vấn đề tài chính gọi là cũng ổn định. Vậy thì ad khuyên nên đầu tư một con laptop tốt và tù tì luyện đi.\r\n\r\nChương trình đại trà hay CLC thì ad nghĩ nó cũng không khác nhau mấy về cơ bản. Tùy vào mỗi trường mà CLC nó là có nghĩa khác nhau, một số thì chú trọng anh văn, một số mở ra chủ yếu là để làm tiền sinh viên. Ad thấy cái này tùy vào em chứ ad cũng không thấy có quá nhiều sự khác biệt, người tuyển dụng càng chẳng để tâm.', '2018-07-19 00:00:00', NULL, 1, 0, 0, '2018-08-09'),
(9, '792c9df3e9b07bb2d8e113ca55492c33', 'Em từ lâu đã quyết chí theo ngành lập trình này. Bố mẹ không cấm cản nhưng vẫn luôn khuyên em học gì-đó-khác-không-phải-cntt, con gái học vất vả, vân vân.\r\n\r\nNhưng em vốn thân xác nữ nhi tâm hồn nam nhi nên đều không nghe. Một bác sau khi hết lời khuyên can em đổi ngành mà không được cho hay: “Thằng X-con-bác học trường Y-danh-tiếng ra trường còn không-thèm-làm lại làm ngành khác, m điểm thấp học mấy-trường-vớ-vẩn-đấy thì sau-cũng-thất-nghiệp thôi.”\r\n\r\nThật ra bác này rất tốt nhưng nghe xong em cảm giác như có cả xô cớt úp lên đầu vậy. Trường học rồi giới tính ảnh hưởng ghê gớm thế sao ạ?\r\n\r\nĐể học và làm trong nghề, các tiền bối thấy khó khăn nhất ở đâu? Mong nhận được phản hồi của mọi người.\r\n\r\n______________________________\r\n\r\nMấy người mà đưa ra lời khuyên kiểu là kiểu tốt bụng vô tâm. Họ nghĩ mọi thứ theo cách nhìn của họ là tốt nhất chứ không thật sự suy nghĩ và quan tâm cho mình. Nói chung em lớn rồi, ba mẹ nói gì đi nữa thì chỉ là lời khuyên còn em vẫn là người quyết định cuối cùng.\r\n\r\nTuy vậy, ad khuyên em nên google đọc các bài viết về lập trình cũng như thử học sơ qua vài cái cơ bản của nó thử coi mình thật sự có thích không. Nếu vẫn ok thì cứ làm không phải sợ gì cả.', '2018-07-19 00:00:00', NULL, 7, 0, 0, '2018-08-24'),
(29, '7b66f7bba074437d67280c7223c628ad', '😃 demo emoji', '2018-09-08 00:25:29', NULL, 0, 0, 0, NULL),
(5, '9cb1c5e945b70a68002a69126ebb9cbb', '23 tuổi em bị trầm cảm, trước đây em từng vậy rồi, em không có hứng thú với cuộc sống, em sống để kiếm tiền, làm vui gia đình, những gì em nhận từ cuộc sống là sự bỏ mặc, không động lực, không niềm vui.\r\n\r\nĐấy là 1 cái vực, em rơi vào, đỉnh điểm là khi em hoang mang trong công việc, mệt mỏi, chỉ muốn được mè nhèo như bao đứa con gái nhưng vẫn cứng cỏi như những thằng dev, vẫn tỏ ra là 1 con đàn ông, em không biết 5 năm, 10 năm nữa sẽ thế nào, thì anh xuất hiện.\r\n\r\nAnh không đẹp, không giàu, không gì cả, chỉ là anh hợp em, em tưởng chừng anh là niềm vui mà sau 23 năm mệt mỏi cuộc đời cho em, anh đối xử với em tốt, mọi việc em đều nói với anh, hỏi ý anh, khoe với anh, em thay đổi, em tốt với bản thân hơn, cảm thấy vui với việc thức dậy và đi ngủ, chưa bao giờ em thấy cuộc sống tốt như vậy, cho tới khi em nói thích anh.\r\n\r\nEm sai rồi, anh xem em như em gái, vì em giống em gái anh, anh quan tâm em cũng chỉ vì vậy, vậy mà em lại thích anh, nói với anh, rồi anh biến mất, không còn liên lạc, từ lúc đó tới giờ gần 1 tháng rồi anh ạ. Cái vực lúc này của em còn sâu hơn cả lúc trước khi anh xuất hiện, em khóc, rồi hết khóc, không phải vì anh không có tình cảm với em, mà vì em không tìm được gì sau mỗi ngày trôi qua ngoài nhớ về anh, có quá nhiều thứ anh tốt với em.\r\n\r\nEm xin lỗi, em vẫn hay dùng số lạ gọi cho anh, không nói gì, nghe giọng anh thôi, để biết anh vẫn khỏe. Anh à, em xin lỗi nhé, giờ mình gặp nhau anh ngại phải không, anh yên tâm, em diễn giỏi lắm, sẽ không để anh khó xử khi gặp nhau đâu, dù gì lần này là lần cuối mình gặp, em sẽ không đem mặt buồn gặp anh đâu, sẽ như những gì anh vẫn thấy trước kia, con nhỏ lầy lội, cộc tính. Em nhớ anh.', '2018-07-19 00:00:00', NULL, 2, 0, 0, '2018-08-10'),
(2, 'b20a026722a7a496593d210ab3fa91d2', 'Có bác nào hứng thú không ạ ?\r\nCông ty Người trợ lý ảo ( NTLA) đang cần tuyển gấp: Lập trình viên. Lương thưởng thỏa thuận chỉ cần đáp ứng yêu cầu thôi : \r\n• Hiểu biết 1 trong các ngôn ngữ lập trình C++, Java, C#\r\n• Có kiến thức về 1 trong các hệ quản trị CSDL: MS SQL Server, MySQL, Oracle\r\n• Có khả năng học hỏi và tiếp thu nhanh các công nghệ và ngôn ngữ lập trình mới, chịu được áp lực công việc.\r\n• Có khả năng làm việc theo nhóm cũng như làm việc độc lập.\r\n• Ngoại ngữ tốt là một lợi thế\r\n🍇🍇Đãi ngộ tốt, môi trường cực trẻ trung, năng động,, .🍍🍍 Các a/c/bb chỉ cần nộp hồ sơ về : chiemtt@ntla.com.vn\r\nHoặc liên hệ theo sdt : 0916978467/0962621491 . Việc còn lại cứ để em lo :)\r\nhttp://ntla.com.vn/recruitment.aspx?mnuid=17', '2018-07-14 00:00:00', NULL, 0, 0, 0, NULL),
(6, 'e656bc8f4ac35aacd5083e813aaa3174', 'Em chào các anh chị ạ. Em là 2k-er, đây là lần đầu tiên em viết cfs của page, có gì sai sót mong anh chị thông cảm. Em sắp bắt đầu cuộc sống IT rồi ạ, em nghe nói ngành này chủ yếu là tự học và có rất rất nhiều tài liệu trên mạng. Không biết các anh chị sử dụng thiết bị nào để đọc tài liệu ạ, điện thoại, laptop, máy tính bảng,...\r\n\r\nEm tính mua hoặc máy tính bảng hoặc Kindle để đọc tài liệu dễ hơn, em phân vân không biết nên mua cái nào vì sợ máy nó kén một số định dạng. Em chỉ cần máy vừa thôi ạ, khoảng 10 triệu đổ xuống. Mong anh chị tư vấn giúp em, em cảm ơn ạ!', '2018-07-19 00:00:00', NULL, 5, 0, 0, '2018-08-10'),
(28, 'ebac0a4b89503a491219ca7321ec46f3', '😀😀😀😀 như lol', '2018-08-24 18:09:21', NULL, 2, 0, 0, '2018-09-08'),
(19, 'fa4e581d8e4ba44f905c1a06d560fb3d', 'Chào add và cả nhà\r\n\r\nXin phép cả nhà cho mìh mạo muội vào đây để tìm 1 chàng trai IT chuyên về phần mềm để cùng mìh thực hiện ước mơ nhỏ nhoi mà mìh đã cất dấu từ lâu . Tự giới thiệu tí e sv năm 3 ( học trườg HUFI nhé) theo ngàh IT ( cho mìh đc xứng là e nha).\r\n\r\nE vào đây để tìm 1 a IT năm 4 hay đã ra trường rồi í ạ để cùng e viết 1 ứng dụng tên là \"THỬ YÊU \" ( cái tên hơn bùn cười nhưg cũng có thể thay đổi nếu có cái tên nào hay hơn ).E giới thiệu sợ về ứng dụng tí. ứng dụng này dành riêng cho các b đang là FA và muốn tìm 1 nữa còn lại của mìh và ứng dụng đc viết trên hệ điền hành Android dùng ngngữ java hoặc c#.\r\n\r\nNhưg mà e thì là sv năm 3 mà trường e học thì môn lập trình đi động thì năm 4 mới đc học nên e ko thể tự mìh viết ứng dụng này đc.E cũng tự nghiên cứu tìm tòi tự học nhưng mà có nhìu chỗ e viết code bị lỗi lun nên phải cần 1 người cùng e thực hiên.\r\n\r\nÀ mà e cũng muốn là người test ứng dụng của mìh cùng vs a mà viết ứng dụng vs e vì e cũg đag FA mà .Vậy nên để đc hoàn hảo thì e xin đề nghị tí là khi viết ứng dụng chúng ta sẽ hạn chế gặp mặt nhé để đc kết quả tốt nhất đối vs ứng dụng và e.\r\n\r\n______________________________\r\n\r\nCái app chắc toàn thu hút mấy đứa đực rựa với gà kinh doanh không quá. Nói chung là idea thằng nó nghĩ ra nó cũng nghe cao siêu cho tới khi bắt tay vào làm. Ad khuyên là nên lên Github lục kiếm mấy cái project tương tự ấy. Có đầy, vào đó đọc code mà học hỏi nó sẽ có ích cho em hơn.\r\n\r\nMặt khác, kiếm thằng nào có thể gặp mặt trực tiếp ấy còn không thì chơi open source luôn chứ kiểu này thì ad thấy lập team để làm gì khi còn cố ý hạn chế gặp nhau :v\r\n\r\nĐiều quan trọng nhất nữa quyết định việc người ta có tham gia project này của em hay không: em là nam hay nữ?', '2018-08-02 00:00:00', 'fa4e581d8e4ba44f905c1a06d560fb3d.jpg', 12, 0, 0, '2018-08-10'),
(3, 'uB7v50ZVMRqfoQn9SQFXsKMdJdhCok12HxAAX2gt', 'Anh em nào có nhã hứng không này, mình biết qua đứa em đang làm HR ở WeFit mà ko biết tìm DEV ở đâu, cứ kêu dân IT nhiều mà ko biết tuyển ở đâu :))\r\nAi có tập gym hay quan tâm nhiều đến start-up thì sẽ biết WeFit hiện tại đang là top Start-up công nghệ Việt Nam\r\nHiện tại WeFit đang tìm kiếm team Front-end, Back-end cho dự án mới của họ. \r\nBack-end: level Intermediate, yêu cầu Tối thiểu 6 tháng kinh nghiệm sử dụng Ruby/Ruby-on-Rails trên 1 dự án đã chạy thực tế.\r\nFront-end: level Junior. Intermediate, yêu cầu Tối thiểu 6 tháng kinh nghiệm sử dụng JavaScript/ReactJS/VueJS trên 1 dự án đã chạy thực tế \r\nAi có nhã hứng thì mail cho thằng cu hoặc ib nó nhé: tutv@gmail.com, fb:', '2018-07-14 00:00:00', NULL, 0, 0, 0, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_number` (`post_number`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `post_number` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
