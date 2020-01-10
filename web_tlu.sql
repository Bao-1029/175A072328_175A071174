-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2020 at 10:22 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_tlu`
--

-- --------------------------------------------------------

--
-- Table structure for table `diem`
--

CREATE TABLE `diem` (
  `Id_Diem` int(11) NOT NULL,
  `Id_SV` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Id_MonHoc` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Id_KyHoc` int(11) NOT NULL,
  `DiemQuaTrinh` float NOT NULL,
  `DiemThi` float NOT NULL,
  `HeSoDQT` float NOT NULL,
  `HeSoDT` float NOT NULL,
  `DiemTongKet` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diem`
--

INSERT INTO `diem` (`Id_Diem`, `Id_SV`, `Id_MonHoc`, `Id_KyHoc`, `DiemQuaTrinh`, `DiemThi`, `HeSoDQT`, `HeSoDT`, `DiemTongKet`) VALUES
(1, '175A072328', 'LTNC', 2, 8, 9, 0.4, 0.6, 9),
(2, '175A072328', 'MMT', 2, 8.8, 8, 0.4, 0.6, 8.5),
(3, '175A072328', 'TKUD', 2, 9, 8, 0.4, 0.6, 8.3),
(4, '175A072328', 'XLA', 2, 10, 10, 0.4, 0.6, 10),
(5, '175A071174', 'LTNC', 2, 8, 8, 0.4, 0.6, 8),
(6, '175A071174', 'MMT', 2, 8.5, 9, 0.4, 0.6, 9.5),
(7, '175A071174', 'TKUD', 2, 9, 9.2, 0.4, 0.6, 9.1),
(8, '175A071174', 'XLA', 2, 8.5, 8.5, 0.4, 0.6, 8.5),
(11, '175A071508', 'LTNC', 2, 8, 8.5, 0.4, 0.6, 8.3),
(12, '175A071508', 'LTNC', 2, 8, 8.5, 0.4, 0.6, 8.3),
(13, '175A071508', 'MMT', 2, 9, 8.5, 0.4, 0.6, 8.5),
(14, '175A071508', 'TKUD', 2, 8, 8, 0.4, 0.6, 8);

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

CREATE TABLE `giangvien` (
  `Id_GV` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HoTen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GioiTinh` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgaySinh` datetime NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Id_Nganh` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`Id_GV`, `HoTen`, `Email`, `GioiTinh`, `NgaySinh`, `DiaChi`, `Id_Nganh`) VALUES
('GV17501', 'Nguyễn Văn Nam', 'namteacher@gmail.com', 'nam', '1970-10-25 00:00:00', 'Hà Nội', 'CNTT'),
('GV17502', 'Phạm Văn Dũng', 'dungteacher@gmail.com', 'nam', '1978-11-15 00:00:00', 'Hà Nội', 'CNTT');

-- --------------------------------------------------------

--
-- Table structure for table `kyhoc`
--

CREATE TABLE `kyhoc` (
  `Id_KyHoc` int(11) NOT NULL,
  `HocKy` tinyint(4) NOT NULL,
  `NamHoc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kyhoc`
--

INSERT INTO `kyhoc` (`Id_KyHoc`, `HocKy`, `NamHoc`) VALUES
(1, 1, '2018-2019\r\n'),
(2, 2, '2018-2019'),
(3, 1, '2019-2020'),
(4, 2, '2019-2020'),
(5, 1, '2020-2021'),
(6, 2, '2020-2021');

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `Id_Lop` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenLop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayTao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Id_Nganh` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrangThai` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`Id_Lop`, `TenLop`, `NgayTao`, `Id_Nganh`, `TrangThai`) VALUES
('HT', '59HT', '2018-10-21', 'HTTT', 1),
('PM1', '59PM1', '2017-12-25', 'CNPM', 1),
('TH1', '59TH1', '2019/1-21', 'CNTT', 1),
('TH2', '59TH2', '2019/3/12', 'CNTT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `Id_MonHoc` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenMonHoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Id_KyHoc` int(11) NOT NULL,
  `SoTinChi` int(11) NOT NULL,
  `NgayTao` datetime NOT NULL,
  `TrangThai` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`Id_MonHoc`, `TenMonHoc`, `Id_KyHoc`, `SoTinChi`, `NgayTao`, `TrangThai`) VALUES
('CNW', 'công nghệ web', 2, 3, '2020-01-09 16:40:43', 0),
('LTNC', 'Lập Trình Nâng Cao', 2, 3, '2020-01-10 14:14:21', 1),
('MMT', 'Mạng máy tính', 2, 3, '2020-01-10 14:16:02', 1),
('TKUD', 'Thống Kê Ứng Dụng', 2, 3, '2020-01-10 14:15:03', 1),
('XLA', 'Xử lý ảnh', 2, 3, '2020-01-10 14:16:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nganhhoc`
--

CREATE TABLE `nganhhoc` (
  `Id_NganhHoc` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenNganh` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayTao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrangThai` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nganhhoc`
--

INSERT INTO `nganhhoc` (`Id_NganhHoc`, `TenNganh`, `NgayTao`, `TrangThai`) VALUES
('CNPM', 'Công nghệ phần mềm ', '2019-12-25 14:37:04', 1),
('CNTT', 'Công Nghệ Thông Tin', '2020-01-08', 1),
('HTTT', 'Hệ Thống Thông Tin', '2020-01-08', 1),
('KHMT', 'Khoa học máy tính', '2019-12-25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `Id_Post` int(11) UNSIGNED NOT NULL,
  `picture` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT './img/thong-bao.png',
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`Id_Post`, `picture`, `title`, `category`, `description`, `content`, `author`, `datecreated`) VALUES
(9, './img/news.jpg', 'hello', 'thongbao', 'hiiii', '<p>dkjsdhfjkd<img alt=\"\" src=\"/175A072328_175A071174/Uploads/Untitled-2.jpg\" style=\"height:580px; width:870px\" /></p>', 'ad', '2020-01-08 17:49:36'),
(13, './Uploads/tin1.jpg', 'Sinh viên Trường Đại học Thủy lợi đạt giải Ba tại chung kết cuộc thi \"Khởi nghiệp Sáng tạo trẻ Bách Khoa năm 2019\"', 'tintuc', 'Cuộc thi Sáng tạo trẻ Bách Khoa do Trường Đại học Bách khoa Hà Nội tổ chức thường niên nhằm khuyến khích khả năng sáng tạo trong sinh viên, kỹ năng kết nối tư duy đa lĩnh vực hướng tới việc tạo ra...', '<h5>Cuộc thi S&aacute;ng tạo trẻ B&aacute;ch Khoa do Trường Đại học B&aacute;ch khoa H&agrave; Nội tổ chức thường ni&ecirc;n nhằm khuyến kh&iacute;ch khả năng s&aacute;ng tạo trong sinh vi&ecirc;n, kỹ năng kết nối tư duy đa lĩnh vực hướng tới việc tạo ra c&aacute;c &yacute; tưởng v&agrave; sản phẩm thiết thực, c&aacute;c giải ph&aacute;p quản l&yacute; đổi mới s&aacute;ng tạo c&oacute; tiềm năng khởi nghiệp. Đ&acirc;y l&agrave; cuộc thi tầm cỡ, danh gi&aacute; với tổng kinh ph&iacute; l&ecirc;n đến h&agrave;ng trăm triệu đồng &ndash; c&ugrave;ng với sự tham gia của nhiều chuy&ecirc;n gia c&oacute; uy t&iacute;n trong nhiều lĩnh vực kh&aacute;c nhau.</h2>\r\n\r\n<p>Chủ đề của Cuộc thi &quot;Khởi nghiệp S&aacute;ng tạo trẻ B&aacute;ch Khoa năm 2019&quot; năm nay l&agrave; &ldquo;Smart up for life&rdquo; hướng tới c&aacute;c sản phẩm ứng dụng c&oacute; khả năng khởi nghiệp phục vụ cho cuộc sống như giao th&ocirc;ng, gi&aacute;o dục, m&ocirc;i trường, biển đảo, c&ocirc;ng nghiệp, n&ocirc;ng nghiệp, y tế. Năm nay cũng l&agrave; năm đầu ti&ecirc;n cuộc thi mở rộng th&agrave;nh phần dự thi ra to&agrave;n bộ c&aacute;c trường đại học tr&ecirc;n to&agrave;n quốc, với điều kiện cần c&oacute; 02 th&agrave;nh vi&ecirc;n n&ograve;ng cốt đến từ c&aacute;c trường Đại học khối kỹ thuật.</p>\r\n\r\n<p style=\"text-align: center;\"><img alt=\"\" src=\"/175A072328_175A071174/Uploads/tin1.jpg\" style=\"height:400px; width:550px\" /></p>\r\n\r\n<p>Về nh&oacute;m Aplastic &ndash; tiền th&acirc;n l&agrave; nh&oacute;m 3 sinh vi&ecirc;n ng&agrave;nh Kỹ thuật m&ocirc;i trường, bao gồm: Nguyễn Đăng Ph&uacute;c (57MT1), Nguyễn Ch&iacute; Cường (58MT1), Ninh Thị Thu (58MT2) với sự hướng dẫn của Ths. Phạm Thị Hồng. Biết đến s&acirc;n chơi đầy th&uacute; vị n&agrave;y, c&ocirc; Hồng đ&atilde; k&ecirc;u gọi, thuyết phục c&aacute;c th&agrave;nh vi&ecirc;n trong nh&oacute;m tham gia với mục ti&ecirc;u mong muốn c&aacute;c bạn được cọ x&aacute;t với c&aacute;c sinh vi&ecirc;n xuất sắc của c&aacute;c trường ĐH kh&aacute;c. Ngay từ l&uacute;c bắt đầu v&ograve;ng 1, Aplastic kh&aacute; thiệt th&ograve;i khi c&aacute;c đội kh&aacute;c đa phần đều dự thi với c&aacute;c kết quả NCKH c&oacute; sẵn. Tuy nhi&ecirc;n, với tinh thần giao lưu, học hỏi, chiến đấu hết m&igrave;nh kh&ocirc;ng quan t&acirc;m đến kết quả - Aplastic đ&atilde; vượt qua h&agrave;ng chục đội kh&aacute;c để trở th&agrave;nh top 18 đội tham gia v&ograve;ng 2 với đề t&agrave;i &ldquo;Nghi&ecirc;n cứu chế tạo c&aacute;c vật liệu nhựa sinh học cao cấp l&agrave;m từ tảo&rdquo;.</p>\r\n\r\n<p style=\"text-align: center;\"><img alt=\"\" src=\"/175A072328_175A071174/Uploads/tin1.1.jpg\" style=\"height:400px; width:550px\" /></p>\r\n\r\n<p style=\"text-align: center;\"><em>C&aacute;c th&agrave;nh vi&ecirc;n nh&oacute;m nghi&ecirc;n cứu v&agrave; c&ocirc; gi&aacute;o Ths. Phạm Thị Hồng hướng dẫn đề t&agrave;i&nbsp;</em></p>\r\n\r\n<p>Khoảng 2 th&aacute;ng tiếp theo l&agrave; thời gian tương đối kh&oacute; khăn v&igrave; nh&oacute;m chỉ c&oacute; 3 th&agrave;nh vi&ecirc;n, c&aacute;c kh&oacute;a huấn luyện của chương tr&igrave;nh đề cập đến nhiều kiến thức về kinh tế - x&atilde; hội, ph&aacute;t triển quảng b&aacute; sản phẩm,&hellip; V&igrave; vậy nh&oacute;m quyết định tuyển th&ecirc;m th&agrave;nh vi&ecirc;n để c&oacute; thể phụ tr&aacute;ch c&aacute;c mảng Marketing v&agrave; l&ecirc;n kế hoạch ph&aacute;t triển sản phẩm tương lai. Nh&oacute;m đ&atilde; c&oacute; buổi thuyết tr&igrave;nh giới thiệu dự &aacute;n b&ecirc;n Đại học Kinh tế quốc d&acirc;n, kết hợp với mạng lưới bạn b&egrave; c&aacute;c trường kinh tế sau nhiều năm tham gia hoạt động ngoại kh&oacute;a của Đăng Ph&uacute;c. Sau khi phỏng vấn, Aplastic đ&atilde; tuyển th&ecirc;m được 2 th&agrave;nh vi&ecirc;n cuối c&ugrave;ng &ndash; bạn Ngọc Mai ( sv Đại học Ngoại thương) v&agrave; Kh&aacute;nh Ly ( sv Đại học Khoa học x&atilde; hội v&agrave; nh&acirc;n văn). Nh&oacute;m vượt qua v&ograve;ng 2 kh&aacute; thuận lợi khi c&aacute;c sản phẩm của nh&oacute;m rất c&oacute; triển vọng v&agrave; phần phản biện được BGK đ&aacute;nh gi&aacute; cao, khi n&agrave;y chỉ c&ograve;n 08 đội mạnh nhất &ndash; được BTC cam kết t&agrave;i trợ tối đa 20 triệu để ph&aacute;t triển dự &aacute;n th&agrave;nh c&aacute;c sản phẩm khả thi để c&oacute; thể sớm nhất đưa ra thị trường.</p>\r\n\r\n<p style=\"text-align: center;\"><img alt=\"\" src=\"/175A072328_175A071174/Uploads/tin1.2.jpg\" style=\"height:400px; width:550px\" /></p>\r\n\r\n<p style=\"text-align: center;\"><em>Nh&oacute;m nghi&ecirc;n cứu chụp ảnh c&ugrave;ng c&aacute;c thầy c&ocirc; l&agrave; ban l&atilde;nh đạo Nh&agrave; trường v&agrave; ban chủ nhiệm Khoa</em></p>\r\n\r\n<p>Giai đoạn tiếp theo, nh&oacute;m tiếp tục tiến h&agrave;nh cải tiến vật liệu, đầu tư c&aacute;c nguy&ecirc;n liệu, phương thức kh&aacute;c nhau để cải thiện t&iacute;nh chất, cụ thể h&oacute;a th&agrave;nh c&aacute;c sản phẩm. V&ograve;ng phản biện giữa 8 nh&oacute;m mạnh nhất diễn ra rất gay cấn, khi c&aacute;c đội được tập dượt để nh&igrave;n r&otilde; điểm mạnh, yếu trước khi ch&iacute;nh thức đưa ra sản phẩm của m&igrave;nh. Nh&oacute;m cũng đ&atilde; gi&agrave;nh chiến thắng trước m&agrave;n đối đầu với dự &aacute;n &ldquo;Robot nhặt b&oacute;ng tennis th&ocirc;ng minh&rdquo; &ndash; trở th&agrave;nh một trong 4 đội được nhận qu&agrave; của BTC.</p>\r\n\r\n<p>Sau 1 th&aacute;ng chuẩn bị, nh&oacute;m đ&atilde; định h&igrave;nh được 3 d&ograve;ng sản phẩm với c&aacute;c t&iacute;nh chất kh&aacute;c nhau. Đ&oacute; l&agrave;: t&uacute;i nilon tan trong nước, vật liệu nhựa c&oacute; t&iacute;nh đ&agrave;n hồi tốt v&agrave; vật liệu c&oacute; t&iacute;nh cơ l&yacute;, chống nước tốt. Phần trả lời thuyết phục trước BGK đ&atilde; gi&uacute;p Aplastic trở th&agrave;nh top6 đội mạnh nhất tiến v&agrave;o v&ograve;ng Chung kết diễn ra v&agrave;o ng&agrave;y 28/12. Đồng nghĩa với việc Aplastic l&agrave; đội đầu ti&ecirc;n v&agrave; duy nhất ngo&agrave;i ĐH B&aacute;ch Khoa c&oacute; thể tiến tới v&ograve;ng n&agrave;y từ trước đến nay.</p>\r\n\r\n<p>Vậy l&agrave; sau 6 th&aacute;ng, từ kh&ocirc;ng c&oacute; g&igrave; trong tay, đội đ&atilde; đến được v&ograve;ng cuối c&ugrave;ng v&agrave; chiến thắng nhiều đội mạnh kh&aacute;c từ c&aacute;c trường ĐH B&aacute;ch Khoa, X&acirc;y dựng, GTVT,&hellip; Tuy nhi&ecirc;n khi n&agrave;y, phần dự thi của đội c&ograve;n đại diện cho cả Trường ĐH Thủy Lợi, khoa H&oacute;a &amp; M&ocirc;i trường n&ecirc;n tinh thần nh&oacute;m rất &aacute;p lực &ndash; nhất l&agrave; khi chỉ c&oacute; 1 tuần để chuẩn bị mẫu sản phẩm cuối c&ugrave;ng đưa ra với triển l&atilde;m. May mắn c&oacute; sự động vi&ecirc;n v&agrave; gi&uacute;p sức, thậm ch&iacute; kh&ocirc;ng ngại thức trắng c&ugrave;ng nh&oacute;m của Ths. Phạm Thị Hồng đ&atilde; gi&uacute;p nh&oacute;m c&oacute; được sản phẩm rất đẹp mắt v&agrave; được c&aacute;c chuy&ecirc;n gia, kh&aacute;n giả đ&aacute;nh gi&aacute; rất cao.</p>\r\n\r\n<p style=\"text-align: center;\"><img alt=\"\" src=\"/175A072328_175A071174/Uploads/tin1.3.jpg\" style=\"height:400px; width:550px\" /></p>\r\n\r\n<p style=\"text-align: center;\"><em>Nh&oacute;m nghi&ecirc;n cứu c&ugrave;ng thầy PGS TS B&ugrave;i Quốc Lập &ndash; Trường Khoa H&oacute;a v&agrave; M&ocirc;i trường</em></p>\r\n\r\n<p>Chung cuộc, nh&oacute;m đ&atilde; xuất sắc đạt Top 3 Dự &aacute;n xuất sắc nhất trị gi&aacute; 5 triệu đồng c&ugrave;ng với Giải thưởng phụ cuộc b&igrave;nh chọn Video xuất sắc nhất. Đ&acirc;y l&agrave; niềm vinh dự của nh&oacute;m cũng như của Khoa H&oacute;a &amp; M&ocirc;i trường, trường ĐH Thủy Lợi. Đồng thời, khẳng định rằng sinh vi&ecirc;n của ĐH Thủy Lợi c&oacute; thể cạnh tranh một c&aacute;ch s&ograve;ng phẳng ở c&aacute;c s&acirc;n chơi lớn v&agrave; tầm cỡ.</p>\r\n\r\n<p style=\"text-align: center;\"><img alt=\"\" src=\"/175A072328_175A071174/Uploads/tin1.4.jpg\" style=\"height:400px; width:550px\" /></p>\r\n\r\n<p style=\"text-align: center;\">&nbsp;&nbsp;<em>C&aacute;c th&agrave;nh vi&ecirc;n nh&oacute;m nghi&ecirc;n cứu trong lễ trao giải cuộc thi</em></p>\r\n\r\n<p>Th&ocirc;ng qua cuộc thi, nh&oacute;m rất mong nh&agrave; trường, c&aacute;c thầy c&ocirc; tiếp tục nhiệt t&igrave;nh hướng dẫn, tạo điều kiện cho c&aacute;c kh&oacute;a sau ph&aacute;t triển mạnh hơn nữa. Để kh&ocirc;ng những c&oacute; thể đạt th&agrave;nh t&iacute;ch tốt hơn ở cuộc thi n&agrave;y, m&agrave; c&ograve;n vươn ra nhiều cuộc thi kh&aacute;c tr&ecirc;n to&agrave;n quốc !</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 'Admin', '2020-01-08 21:30:58'),
(14, './Uploads/tin2.3.jpg', 'Giảng viên Trường Đại học Thủy lợi hướng dẫn học sinh đạt giải Ba cuộc thi Khoa học Kỹ thuật dành cho học sinh phổ thông năm 2019', 'tintuc', '(TLU) - Đề tài “Nghiên cứu sử dụng tổ hợp các chất hoạt động bề mặt và đánh giá khả năng tăng thu hồi dầu” của nhóm học sinh Trần Thu Thủy, Lớp 11A1, Trường THPT Nguyễn Trãi, Thường Tín và Vương Ngọc...', '<p>(TLU) - Đề t&agrave;i &ldquo;Nghi&ecirc;n cứu sử dụng tổ hợp c&aacute;c chất hoạt động bề mặt v&agrave; đ&aacute;nh gi&aacute; khả năng tăng thu hồi dầu&rdquo; của nh&oacute;m học sinh Trần Thu Thủy, Lớp 11A1, Trường THPT Nguyễn Tr&atilde;i, Thường T&iacute;n v&agrave; Vương Ngọc Bảo Linh, Lớp 9G, Trường THCS Th&aacute;i Thịnh, Đống Đa, H&agrave; Nội thực hiện tại Ph&ograve;ng Th&iacute; nghiệm Kỹ thuật H&oacute;a học - Trường Đại học Thủy lợi đ&atilde; gi&agrave;nh giải ba tại cuộc thi Khoa học Kỹ thuật d&agrave;nh cho học sinh phổ th&ocirc;ng năm học 2019-2020 Th&agrave;nh phố H&agrave; Nội.</p>\r\n\r\n<p>Cuộc thi KHKT cấp Th&agrave;nh phố d&agrave;nh cho học sinh phổ th&ocirc;ng l&agrave; hoạt động được tổ chức thường ni&ecirc;n với mục đ&iacute;ch khuyến kh&iacute;ch học sinh phổ th&ocirc;ng NCKH; s&aacute;ng tạo kỹ thuật, c&ocirc;ng nghệ v&agrave; vận dụng kiến thức của c&aacute;c m&ocirc;n học v&agrave;o giải quyết những vấn đề thực tiễn; g&oacute;p phần đổi mới h&igrave;nh thức tổ chức dạy học; đổi mới h&igrave;nh thức v&agrave;&nbsp;phương&nbsp;ph&aacute;p đ&aacute;nh gi&aacute; kết quả học tập; ph&aacute;t triển năng lực v&agrave; phẩm chất của học sinh; th&uacute;c đẩy gi&aacute;o vi&ecirc;n tự bồi dưỡng n&acirc;ng cao năng lực chuy&ecirc;n m&ocirc;n, nghiệp vụ; n&acirc;ng cao chất lượng dạy học trong c&aacute;c&nbsp;cơ sở gi&aacute;o dục&nbsp;trung học; tăng cường tổ chức c&aacute;c hoạt động gi&aacute;o dục trải nghiệm s&aacute;ng tạo theo định hướng ph&aacute;t triển năng lực v&agrave; phẩm chất của học sinh.</p>\r\n\r\n<p>Cuộc thi năm 2019&nbsp;đ&atilde; quy tụ 75 dự &aacute;n thuộc 4 lĩnh vực với sự tham gia của 145 học sinh đến từ c&aacute;c trường trong Th&agrave;nh phố H&agrave; Nội.</p>\r\n\r\n<p style=\"text-align: center;\"><img alt=\"\" src=\"/175A072328_175A071174/Uploads/tin2.1.jpg\" style=\"height:400px; width:550px\" /></p>\r\n\r\n<p style=\"text-align: center;\"><strong>C&aacute;c c&ocirc; hướng dẫn v&agrave; hai học sinh tham dự cuộc thi</strong></p>\r\n\r\n<p>Năm 2019&nbsp;l&agrave; lần thứ hai, ng&agrave;nh Kỹ thuật H&oacute;a học Trường Đại hoc Thủy lợi c&oacute; giảng vi&ecirc;n tham gia hướng dẫn học sinh phổ th&ocirc;ng nghi&ecirc;n cứu khoa học v&agrave; đạt giải Ba. Năm 2018, lần đầu ti&ecirc;n, ng&agrave;nh Kỹ thuật H&oacute;a học&nbsp;tham gia hướng dẫn học sinh phổ th&ocirc;ng nghi&ecirc;n cứu khoa học v&agrave; đạt giải Nhất tỉnh Bắc Giang. Đ&acirc;y l&agrave; cơ hội tốt để quảng b&aacute; h&igrave;nh ảnh của Trường đ&agrave;o tạo đa ng&agrave;nh, c&oacute; cơ sở vật chất tốt đ&aacute;p ứng nhu cầu thực h&agrave;nh, thực tập m&ocirc;n học đến với học sinh c&aacute;c địa phương.</p>\r\n\r\n<p>Ngay sau khi kết th&uacute;c cuộc thi KHKT cấp Th&agrave;nh phố d&agrave;nh cho học sinh phổ th&ocirc;ng H&agrave; Nội; Trường Đại học Thủy lợi đ&atilde; tặng hoa ch&uacute;c mừng cho học sinh Trần Thu Thủy, Lớp 11A1, Trường THPT Nguyễn Tr&atilde;i, Thường T&iacute;n v&agrave; Vương Ngọc Bảo Linh, Lớp 9G, Trường THCS Th&aacute;i Thịnh, Đống Đa nhằm động vi&ecirc;n tinh thần ham học hỏi, nghi&ecirc;n cứu của học sinh.</p>\r\n\r\n<p style=\"text-align: center;\"><img alt=\"\" src=\"/175A072328_175A071174/Uploads/tin2.2.jpg\" style=\"height:300px; width:550px\" /></p>\r\n\r\n<p>Cuộc thi KHKT cho học sinh phổ th&ocirc;ng l&agrave; hoạt động &yacute; nghĩa. Bởi kh&ocirc;ng chỉ khuyến kh&iacute;ch c&aacute;c cơ sở gi&aacute;o dục đại học, cao đẳng, cơ sở nghi&ecirc;n cứu, c&aacute;c tổ chức v&agrave; c&aacute; nh&acirc;n&nbsp;hỗ&nbsp;trợ hoạt động nghi&ecirc;n cứu KHKT của học sinh phổ th&ocirc;ng; tạo cơ hội để học sinh phổ th&ocirc;ng giới thiệu kết quả nghi&ecirc;n cứu KHKT của m&igrave;nh; tăng cường trao đổi, giao lưu văn h&oacute;a, gi&aacute;o dục giữa c&aacute;c đơn vị.</p>\r\n\r\n<p>Trường Đại học Thủy lợi khẳng định, sẽ tiếp tục hỗ trợ học sinh c&aacute;c trường tham gia cuộc thi trong những năm tiếp theo, nhằm ươm mầm c&aacute;c t&agrave;i năng trẻ trong tất cả c&aacute;c lĩnh vực nghi&ecirc;n cứu.</p>', 'Bích Việt - Theo Ngành Kỹ thuật Hóa học', '2020-01-10 15:41:13'),
(15, './img/thong-bao.png', 'V/v: Thành lập đội tuyển tham gia cuộc thi Tin học văn phòng Thế giới năm 2020', 'thongbao', 'Công nghệ thông tin', '<p>Cuộc thi V&ocirc; địch Tin học văn ph&ograve;ng Thế giới&nbsp;<em>(Microsoft Office Specialist World Championship)</em>&nbsp;do Tập đo&agrave;n quốc tế Certiport (Hoa Kỳ) tổ chức từ năm 2002 d&agrave;nh cho thanh thiếu ni&ecirc;n từ 13 đến 22 tuổi, nhằm t&igrave;m kiếm v&agrave; t&ocirc;n vinh những t&agrave;i năng tin học tr&ecirc;n thế giới về kỹ năng sử dụng c&aacute;c ứng dụng tin học văn ph&ograve;ng Microsoft Office</p>', 'admin', '2020-01-10 16:03:07'),
(16, './img/thong-bao.png', 'Triển khai đánh giá kết quả rèn luyện học kỳ 1 và toàn khóa học của sinh viên hệ chính quy làm tốt nghiệp học kỳ 1 năm học 2019-2020', 'thongbao', 'kết quả rèn luyện', '<p>Nh&agrave; trường th&ocirc;ng b&aacute;o kế hoạch triển khai đ&aacute;nh gi&aacute; kết quả r&egrave;n luyện học kỳ 1 năm học 2019 &ndash; 2020 v&agrave; to&agrave;n kh&oacute;a học cho sinh vi&ecirc;n hệ ch&iacute;nh quy đang l&agrave;m ĐATN tại kỳ 1 (2019 &ndash; 2020)</p>\n\n<p><strong>Đề nghị:</strong></p>\n\n<p>1. Tất cả c&aacute;c biểu mẫu v&agrave; kế hoạch đ&aacute;nh gi&aacute; kết quả r&egrave;n luyện đề nghị c&aacute;c khoa, Trung t&acirc;m Đ&agrave;o tạo quốc tế, Cơ sở 2 v&agrave; c&aacute;c lớp trong to&agrave;n trường lấy tr&ecirc;n trang Web của trường.</p>\n\n<p>2. Đề nghị c&aacute;c khoa, Trung t&acirc;m Đ&agrave;o tạo quốc tế, Cơ sở 2:</p>\n\n<p>- Nhập dữ liệu v&agrave;o m&aacute;y t&iacute;nh bằng Font chữ Times New Roman, Size: 13.</p>\n\n<p>- Gửi bản tổng hợp đ&aacute;nh gi&aacute; kết quả r&egrave;n luyện về ph&ograve;ng Ch&iacute;nh trị &amp; CTSV (bằng c&ocirc;ng văn &amp; gửi File theo địa chỉ Email: thuyp72002@tlu.edu.vn)</p>', 'admin', '2020-01-10 16:04:30'),
(17, './img/thong-bao.png', 'Thông báo học bổng du học Ấn Độ (2020-2021)', 'thongbao', 'du học', '<p>Ch&iacute;nh phủ Ấn Độ th&ocirc;ng b&aacute;o d&agrave;nh tặng Việt Nam nhiều suất học bổng cho sinh vi&ecirc;n Việt Nam ưu t&uacute; theo học c&aacute;c chuy&ecirc;n ng&agrave;nh (trừ Y, Dược v&agrave; Thời trang) bậc Đại học/ Sau Đại học/ Tiến sĩ tại c&aacute;c trường ở Ấn Độ trong khu&ocirc;n khổ c&aacute;c chương tr&igrave;nh học bổng ICCR (Hội đồng Giao lưu Văn h&oacute;a Ấn Độ); gồm c&oacute; Chương tr&igrave;nh Học bổng Chung (GSS), Hợp t&aacute;c S&ocirc;ng Hằng-S&ocirc;ng Mekong (MGC), Chương tr&igrave;nh Trao Đổi Gi&aacute;o dục (EEP) v&agrave; Chương tr&igrave;nh Học bổng &Acirc;m nhạc v&agrave; M&uacute;a Ấn Độ. Học bổng bao gồm: lệ ph&iacute; visa, học ph&iacute;, sinh hoạt ph&iacute;, v&eacute; m&aacute;y bay khứ hồi một lần hạng phổ th&ocirc;ng tới s&acirc;n bay gần nhất (chỉ d&agrave;nh cho học bổng MGC v&agrave; EEP), chỗ ở tại k&yacute; t&uacute;c x&aacute; v&agrave; chi ph&iacute; y tế.</p>', 'admin', '2020-01-10 16:05:08'),
(18, './Uploads/tin3.jpg', 'Đại học Thủy lợi là một trong 30 trường đại học Việt Nam có công bố quốc tế nhiều nhất', 'tintuc', 'Số lượng công bố quốc tế hàng năm của Việt Nam đã cán mốc gần 10.000 bài/năm (năm 2018) trong đó các cơ sở giáo dục đại học đóng góp tới 70%. Tốc độ gia tăng các bài báo WoS & Scopus hàng năm của...', '<p>Số lượng c&ocirc;ng bố quốc tế h&agrave;ng năm của Việt Nam đ&atilde; c&aacute;n mốc gần 10.000 b&agrave;i/năm (năm 2018) trong đ&oacute; c&aacute;c cơ sở gi&aacute;o dục đại học đ&oacute;ng g&oacute;p tới 70%. Tốc độ gia tăng c&aacute;c b&agrave;i b&aacute;o WoS &amp; Scopus h&agrave;ng năm của Việt Nam tăng mạnh (34,7% đối với cả nước v&agrave; 41,6% đối với ri&ecirc;ng c&aacute;c CSGDĐH).</p>\r\n\r\n<p><strong>C&aacute;n mốc 10.000 b&agrave;i/năm</strong></p>\r\n\r\n<p>Số liệu c&ocirc;ng bố quốc tế trong CSDL WoS, Scopus v&agrave; WoS &amp; Scopus của Việt Nam n&oacute;i chung v&agrave; c&aacute;c cơ sở gi&aacute;o dục đại học (CSGDĐH) n&oacute;i ri&ecirc;ng trong giai đoạn 2014-2018 được thống k&ecirc; như sau:</p>\r\n\r\n<p style=\"text-align: center;\"><img alt=\"\" src=\"/175A072328_175A071174/Uploads/tin3.1.png\" style=\"height:156px; width:400px\" /></p>\r\n\r\n<p>Trong 5 năm đ&oacute;, cả nước đ&atilde; c&ocirc;ng bố 22.438 b&agrave;i b&aacute;o WoS, 29.932 b&agrave;i b&aacute;o Scopus v&agrave; tổng cộng 32.732 b&agrave;i trong CSDL t&iacute;ch hợp WoS &amp; Scopus. Đồng thời, số liệu tương ứng của c&aacute;c CSGDĐH l&agrave; 13.728 (WoS), 21.702 (Scopus) v&agrave; 23.144 b&agrave;i (WoS &amp; Scopus), chiếm trung b&igrave;nh khoảng 70% so với năng suất của cả nước.</p>\r\n\r\n<p>Về tổng số b&agrave;i b&aacute;o Scopus cao hơn số b&agrave;i b&aacute;o WoS 1,33 lần; tổng số b&agrave;i b&aacute;o WoS &amp; Scopus cao hơn số b&agrave;i b&aacute;o WoS 1,46 lần v&agrave; số b&agrave;i b&aacute;o Scopus 1,09 lần.</p>\r\n\r\n<p>Lưu &yacute;, tổng số b&agrave;i b&aacute;o WoS &amp; Scopus trong giai đoạn 2014-2018 của Việt Nam chỉ tương đương với năng suất c&ocirc;ng bố b&agrave;i b&aacute;o Scopus của Indonesia trong năm 2017 (21.300 b&agrave;i) hoặc năm 2018 (33.988 b&agrave;i).</p>\r\n\r\n<p>Năng suất khoa học - số lượng b&agrave;i b&aacute;o c&ocirc;ng bố tr&ecirc;n Việt Nam đang tăng qua từng năm v&agrave; c&oacute; dấu hiệu tăng mạnh hơn sau năm 2017.</p>\r\n\r\n<p>Trong giai đoạn 2014-2017, trung b&igrave;nh mỗi năm số lượng b&agrave;i b&aacute;o WoS &amp; Scopus tăng khoảng 18,8% (từ 4.332 b&agrave;i đến 7.217 b&agrave;i trong 3 năm). Tuy nhi&ecirc;n, chỉ trong một năm từ 2017-2018, số lượng b&agrave;i b&aacute;o đ&atilde; tăng l&ecirc;n 34,7% (từ 7.217 đến 9.719 b&agrave;i). Như vậy, năm 2018, Việt Nam đ&atilde; gần như đ&atilde; c&aacute;n mốc 10.000 c&ocirc;ng bố quốc tế một năm.</p>\r\n\r\n<p>Kết quả n&agrave;y cao hơn một ch&uacute;t so với năng suất c&ocirc;ng bố b&agrave;i b&aacute;o Scopus h&agrave;ng năm (v&iacute; dụ: 8.800 b&agrave;i năm 2018) của Trường ĐHQG Singapore. Trong số đ&oacute;, tốc độ gia tăng số c&ocirc;ng bố trong hai giai đoạn ph&acirc;n kỳ ấy của WoS l&agrave; 22,4% v&agrave; 30,5%; của Scopus l&agrave; 18,1% v&agrave; 33,7%.</p>\r\n\r\n<p>Tương tự, số lượng b&agrave;i b&aacute;o WoS &amp; Scopus của c&aacute;c CSGDĐH Việt Nam, từ 2014-2017, trung b&igrave;nh mỗi năm tăng 21,8%, nhưng chỉ t&iacute;nh ri&ecirc;ng năm từ 2017-2018, con số n&agrave;y tăng l&ecirc;n đến 41,6%. Trong đ&oacute;, tốc độ gia tăng số c&ocirc;ng bố trong hai giai đoạn ph&acirc;n kỳ ấy của WoS l&agrave; 29,4 % v&agrave; 38,5%; của Scopus l&agrave; 21.3% v&agrave; 41,1%.</p>\r\n\r\n<p style=\"text-align: center;\"><img alt=\"\" src=\"/175A072328_175A071174/Uploads/tin3.2.png\" style=\"height:106px; width:400px\" /></p>\r\n\r\n<p>Kết quả gia tăng c&ocirc;ng bố quốc tế theo bảng tr&ecirc;n nhận thấy rằng, tỉ lệ gia tăng c&aacute;c b&agrave;i b&aacute;o Scopus ng&agrave;y c&agrave;ng chiếm trọng số quan trọng v&agrave; đặc biệt l&agrave; sự đ&oacute;ng g&oacute;p v&agrave;o sự gia tăng đến từ c&aacute;c CSGDDH.</p>\r\n\r\n<p>Kết quả n&agrave;y cho thấy c&aacute;c trường đại học tại Việt Nam đang dần quan t&acirc;m đến c&ocirc;ng bố quốc tế. Ch&iacute;nh sự gia tăng năng suất c&ocirc;ng bố quốc tế của c&aacute;c CSGDĐH đ&atilde; quyết định mức độ gia tăng chung về c&ocirc;ng bố quốc tế của cả nước. Sự gia tăng c&oacute; t&iacute;nh chất đột biến n&agrave;y xảy ra trong thời kỳ c&aacute;c CSGDĐH Việt Nam được trao quyền tự chủ.</p>\r\n\r\n<p style=\"text-align: center;\"><img alt=\"\" src=\"/175A072328_175A071174/Uploads/tin3.3.png\" style=\"height:376px; width:400px\" /></p>\r\n\r\n<p><strong>30 cơ sở gi&aacute;o dục đại học c&oacute; số lượng b&agrave;i b&aacute;o nhiều nhất</strong></p>\r\n\r\n<p>Số liệu về tổng số b&agrave;i b&aacute;o WoS &amp; Scopus v&agrave; số lần tr&iacute;ch dẫn trong giai đoạn 2014-2018 được liệt k&ecirc; cho thấy top 30 CSGDĐH c&oacute; số lượng b&agrave;i b&aacute;o nhiều nhất trong giai đoạn 2014-2018.</p>\r\n\r\n<p>Trong đ&oacute; Trường Đại học Thủy lợi vươn l&ecirc;n đứng vị tr&iacute; số 23 trong bảng xếp hạng mới nhất, với 270 b&agrave;i b&aacute;o được c&ocirc;ng bố; tổng số tr&iacute;ch dẫn 1410; số tr&iacute;ch dẫn trung b&igrave;nh 5,22.</p>\r\n\r\n<p style=\"text-align: center;\"><img alt=\"\" src=\"/175A072328_175A071174/Uploads/tin3.4.png\" style=\"height:356px; width:400px\" /></p>\r\n\r\n<p>C&oacute; thể thấy rằng, đến hết năm 2018, ĐHQGTpHCM v&agrave; ĐHQGHN vẫn l&agrave; hai cơ sở gi&aacute;o dục c&oacute; tổng số b&agrave;i b&aacute;o cao nhất. Điều th&uacute; vị l&agrave; Trường Đại học T&ocirc;n Đức Thắng đ&atilde; vươn l&ecirc;n vị tr&iacute; top 3 v&agrave; Trường đại học Duy T&acirc;n nằm ở vị tr&iacute; top 5.</p>\r\n\r\n<p>Khi so s&aacute;nh năng suất c&ocirc;ng bố quốc tế của c&aacute;c CSGDĐH c&oacute; thể thấy số lượng b&agrave;i b&aacute;o của trường top 1 (ĐHQGTpHCM) chỉ nhiều hơn xấp xỉ 2 lần so với trường top 4 (Trường ĐHBK H&agrave; Nội).</p>\r\n\r\n<p>Thực tế, đ&acirc;y l&agrave; 4 CSGDĐH h&agrave;ng đầu của Việt Nam đ&atilde; c&oacute; t&ecirc;n trong c&aacute;c bảng xếp hạng đại học quốc tế như QS, THE v&agrave; AWRU.</p>\r\n\r\n<p>Tuy nhi&ecirc;n, nếu so s&aacute;nh với c&aacute;c trường top 15 th&igrave; sự kh&aacute;c nhau về số lượng c&ocirc;ng bố quốc tế đ&atilde; l&agrave; 10 lần.</p>\r\n\r\n<p>Đ&aacute;ng n&oacute;i hơn, khi so s&aacute;nh trường top 1 với top 30, sự kh&aacute;c biệt l&ecirc;n đến gần 50 lần. Điều n&agrave;y cho thấy ở Việt Nam mới chỉ c&oacute; khoảng 15 CSGDĐH c&oacute; định hướng v&agrave; năng lực nghi&ecirc;n cứu nổi trội. Đ&acirc;y l&agrave; th&ocirc;ng tin c&oacute; &yacute; nghĩa, c&oacute; thể sử dụng để hoạch định ch&iacute;nh s&aacute;ch ph&aacute;t triển c&aacute;c CSGDĐH.</p>\r\n\r\n<p style=\"text-align: center;\"><img alt=\"\" src=\"/175A072328_175A071174/Uploads/tin3.5.png\" style=\"height:398px; width:400px\" /></p>\r\n\r\n<p style=\"text-align: center;\"><img alt=\"\" src=\"/175A072328_175A071174/Uploads/tin3.6.png\" style=\"height:322px; width:400px\" /></p>\r\n\r\n<p>Tổng số b&agrave;i b&aacute;o WoS &amp; Scopus v&agrave; số tr&iacute;ch dẫn giai đoạn 2014-2018 của top 30 CSGDĐH Việt Nam.</p>\r\n\r\n<p>Khi khảo s&aacute;t cụ thể mức độ gia tăng trong thời gian gần đ&acirc;y của một số CSGDĐH c&oacute; thể thấy rằng, trong giai đoạn 2014-2018, tốc độ gia tăng về c&ocirc;ng bố quốc tế h&agrave;ng năm của ĐHQGHN, ĐHQG TpHCM v&agrave; c&aacute;c CSGDĐH truyền thống hầu như kh&ocirc;ng c&oacute; sự đột biến, trong l&uacute;c đ&oacute; Trường Đại học T&ocirc;n Đức Thắng v&agrave; Trường ĐH Duy T&acirc;n c&oacute; tốc độ gia tăng vượt trội.</p>\r\n\r\n<p>Năm 2017, số lượng b&agrave;i b&aacute;o WoS &amp; Scopus của Trường ĐH T&ocirc;n Đức Thắng đ&atilde; vượt qua ĐHQGHN v&agrave; năm 2018 lại tiếp tục vượt qua ĐHQGTpHCM.</p>\r\n\r\n<p>Năm 2018, số lượng b&agrave;i b&aacute;o WoS &amp; Scopus của Trường ĐH Duy T&acirc;n cũng đ&atilde; tiến kịp Trường ĐHBKHN. Trước đ&oacute;, năm 2014, hai trường n&agrave;y thậm ch&iacute; c&ograve;n kh&ocirc;ng nằm trong top 10 của Việt nam.</p>\r\n\r\n<p>Đ&oacute;ng g&oacute;p của Trường ĐH T&ocirc;n Đức Thắng đ&atilde; l&agrave;m thay đổi c&aacute;n c&acirc;n c&ocirc;ng bố quốc tế của c&aacute;c CSGDDH tại khu vực TP.HCM so với khu vực H&agrave; Nội.</p>\r\n\r\n<p style=\"text-align: center;\"><img alt=\"\" src=\"/175A072328_175A071174/Uploads/tin3.7.png\" style=\"height:192px; width:400px\" /></p>\r\n\r\n<p>So s&aacute;nh mức độ gia tăng về số lượng b&agrave;i b&aacute;o giữa c&aacute;c CSGDĐH tại khu vực H&agrave; Nội v&agrave; TP. HCM.</p>\r\n\r\n<p>Cụ thể, v&agrave;o năm 2014, số lượng b&agrave;i b&aacute;o WoS &amp; Scopus của c&aacute;c CSGDĐH H&agrave; Nội cao hơn, sự c&acirc;n bằng giữa hai khu vực đ&atilde; đạt được v&agrave;o năm 2017. V&agrave;o năm 2018, số lượng b&agrave;i b&aacute;o của c&aacute;c CSGDĐH tại TP.HCM đ&atilde; tăng mạnh, vượt xa so với số lượng b&agrave;i b&aacute;o của c&aacute;c CSGDĐH tại H&agrave; Nội.</p>\r\n\r\n<p>Xu thế n&agrave;y đang tiếp tục được khẳng định trong năm 2019. T&iacute;nh đến 11/2019, Trường ĐH T&ocirc;n Đức Thắng v&agrave; Trường ĐH Duy T&acirc;n lần lượt đ&atilde; c&ocirc;ng bố được 2300 v&agrave; 980 b&agrave;i b&aacute;o WoS &amp; Scopus, dẫn đầu c&aacute;c CSGDĐH. Đồng thời, Trường ĐH T&ocirc;n Đức Thắng đ&atilde; đứng đầu cả nước, vượt qua cả Viện H&agrave;n l&acirc;m KH&amp;CN Việt Nam.</p>\r\n\r\n<p>Kết quả ph&acirc;n t&iacute;ch cho thấy rằng, chỉ số tr&iacute;ch dẫn trung b&igrave;nh của c&aacute;c CSGDĐH Việt Nam đạt gi&aacute; trị 9,2. Sau khi đối s&aacute;nh v&agrave; chuẩn h&oacute;a với CSDL do bảng xếp hạng QS c&ocirc;ng bố cho ĐHQGHN, c&oacute; thể thấy rằng chỉ số tr&iacute;ch dẫn trung b&igrave;nh của Việt Nam xấp xỉ gi&aacute; trị trung b&igrave;nh của khu vực ch&acirc;u &Aacute;.</p>\r\n\r\n<p style=\"text-align: center;\"><img alt=\"\" src=\"/175A072328_175A071174/Uploads/tin3.8.png\" style=\"height:366px; width:400px\" /></p>\r\n\r\n<p>Chỉ số tr&iacute;ch dẫn trung b&igrave;nh của top 30 CSGDĐH Việt Nam giai đoạn 2014 - 2018.</p>\r\n\r\n<p>Theo đ&oacute;, Việt Nam c&oacute; 7 CSGDĐH c&oacute; chỉ số tr&iacute;ch dẫn cao hơn chỉ số trung b&igrave;nh của cả nước v&agrave; của ch&acirc;u &Aacute; l&agrave;: Trường ĐH Y H&agrave; Nội (18,1); Trường ĐH Y tế c&ocirc;ng cộng (16); Trường ĐH Duy T&acirc;n (11,8); Trường ĐH Mỏ Địa chất (11,0); ĐHQGHN (10,7); Trường ĐH Kinh tế Quốc d&acirc;n (10,6) v&agrave; Trường ĐH T&ocirc;n Đức Thắng (10,3).</p>\r\n\r\n<p>Ngo&agrave;i trường hợp c&aacute;c trường đại học thuộc lĩnh vực khoa học sức khỏe, chỉ số tr&iacute;ch dẫn trung b&igrave;nh cao của Trường ĐH Mỏ Địa chất v&agrave; Trường ĐH Kinh tế quốc d&acirc;n l&agrave; điều đ&aacute;ng ghi nhận. C&aacute;c nghi&ecirc;n cứu của hai trường vừa n&ecirc;u c&oacute; thể vừa c&oacute; t&iacute;nh cập nhật, đồng thời li&ecirc;n quan đến c&aacute;c vấn đề đặc th&ugrave; của Việt Nam n&ecirc;n được c&aacute;c nh&agrave; khoa học tr&ecirc;n thế giới quan t&acirc;m nhiều.</p>\r\n\r\n<p style=\"text-align: center;\"><img alt=\"\" src=\"/175A072328_175A071174/Uploads/tin3.9.png\" style=\"height:333px; width:400px\" /></p>\r\n\r\n<p>Trang điện tử của hệ thống CSDL t&iacute;ch hợp WoS v&agrave; Scopus Vcgate https://vcgate.vnu.edu.vn:3000.</p>\r\n\r\n<p>C&aacute;c số liệu c&ocirc;ng bố tr&ecirc;n thuộc c&ocirc;ng tr&igrave;nh nghi&ecirc;n cứu ph&aacute;t triển cơ sở dữ liệu (CSDL) Web of Science v&agrave; Scopus tr&ecirc;n hệ thống Vcgate của ĐHQGHN đối với c&aacute;c b&agrave;i b&aacute;o của c&aacute;c t&aacute;c giả Việt Nam. Nh&oacute;m nghi&ecirc;n cứu Nguyễn Hữu Th&agrave;nh Chung, V&otilde; Đ&igrave;nh Hiếu, Ng&ocirc; Mạnh Dũng - ĐH Quốc gia H&agrave; Nội đ&atilde; triển khai x&acirc;y dựng th&agrave;nh c&ocirc;ng Phần mềm hệ thống cổng th&ocirc;ng tin chỉ số nghi&ecirc;n cứu Việt Nam.</p>\r\n\r\n<p>Hiện nay, hệ thống n&agrave;y n&agrave;y đ&atilde; chỉ mục cho gần 70 tạp ch&iacute; xuất bản trực tuyến của Việt Nam với gần 50.000 b&agrave;i b&aacute;o, bước đầu phục vụ việc xếp hạng chất lượng c&aacute;c tạp ch&iacute; v&agrave; cung cấp khả năng ph&acirc;n t&iacute;ch, đ&aacute;nh gi&aacute; năng lực c&ocirc;ng bố kết quả nghi&ecirc;n cứu ở trong nước.</p>\r\n\r\n<p>Ngo&agrave;i việc thu thập v&agrave; chỉ mục cho c&aacute;c b&agrave;i b&aacute;o tr&ecirc;n c&aacute;c tạp ch&iacute; của Việt Nam, Vcgate c&ograve;n c&oacute; khả năng thu thập chỉ số tr&iacute;ch dẫn. Do đ&oacute;, Vcgate c&oacute; chức năng tương tự như c&aacute;c hệ thống CSDL khoa học của c&aacute;c quốc gia kh&aacute;c, đặc biệt rất tương đồng với WoS v&agrave; Scopus.</p>\r\n\r\n<p>&nbsp;Đặc biệt, c&ocirc;ng tr&igrave;nh n&agrave;y cũng chỉ ra mối li&ecirc;n hệ giữa tự chủ đại học v&agrave; việc n&acirc;ng cao năng suất v&agrave; chất lượng nghi&ecirc;n cứu khoa học.</p>', 'Nguồn: Báo dân trí', '2020-01-10 16:13:33');

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `Id_SV` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HoSV` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenSV` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CMT` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GioiTinh` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgaySinh` datetime NOT NULL,
  `Id_Lop` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`Id_SV`, `HoSV`, `TenSV`, `Email`, `CMT`, `GioiTinh`, `NgaySinh`, `Id_Lop`) VALUES
('175A071174', 'Hoàng', 'Giang Nam', 'hgnam@gmail.com', '017538492', 'nam', '1999-10-23 00:00:00', 'TH2'),
('175A071508', 'Nguyễn ', 'Văn Linh', 'nguyenlinh@gmail.com', '012345698', 'nam', '1999-10-30 00:00:00', 'TH2'),
('175A072328', 'Nguyễn', 'Thái Bảo', 'baont@gmail.co', '164636729', 'nữ', '1999-10-29 00:00:00', 'TH2');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `Id_TaiKhoan` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MatKhau` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VaiTro` int(11) NOT NULL,
  `NgayTao` datetime NOT NULL DEFAULT current_timestamp(),
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`Id_TaiKhoan`, `email`, `MatKhau`, `VaiTro`, `NgayTao`, `username`) VALUES
(1, 'admin@wru.vn', '$2y$10$4dvDvvCbtD8Hkew1LRg.8uNW9XX4cmHCsRY/a3k8EcQKt9beb6G1S', 1, '2019-12-30 20:12:35', 'admin'),
(2, 'student@wru.vn', '$2y$10$BM0VAITvSP4dopal3w.KqOTfe58QBz5whuQSlTHjavhwdsNXqnxCO', 0, '2019-12-30 20:13:08', 'student'),
(3, 'teacher@wru.vn', '$2y$10$qGppmNJm2MGkIJ0ZylD4A.0VgaGhmZeq5cz8N6CzFMI/GsBDQiEYu', 2, '2019-12-30 20:13:38', 'teacher'),
(13, 'hgnam@gmail.com', '$2y$10$Iclx/5NhAMGfmxd8HwDYG.7LBzfIy9SkYU9w8XsQvXIqbAQ0FVNES', 0, '2020-01-10 13:49:48', 'Nam đen'),
(14, 'nguyenlinh@gmail.com', '$2y$10$HL/OFZjowrMq1inC0JmSOeNWF/q7f8cwewLYQBjPBaZEN.AsjHPI6', 0, '2020-01-10 13:54:58', 'Linh Nguyễn'),
(15, 'baont@gmail.co', '$2y$10$mKHKZthY22xvanRGPDT1he7lDOIIlsm4X92FkGK89jrKKvJpegGCy', 0, '2020-01-10 13:58:25', 'Bảo Thái'),
(16, 'namteacher@gmail.com', '$2y$10$v3F5PFsqMEKXZi1gzSIhlOZR3FhhRrs6TtFgRlY7fQIUw6PocP75a', 2, '2020-01-10 13:59:19', 'Nam teacher'),
(17, 'dungteacher@gmail.com', '$2y$10$ZLfFp/zfkyD1VqZ0UjMvSuPKHh8MhBVcZlcXFvoGUYCDQmSjvlv6S', 2, '2020-01-10 14:00:16', 'Dũng teacher'),
(18, 'hungdt@gmail.com', '$2y$10$FEd7cPOrxDHU/yLffD5s2.QlL8EdsccTDio4jnmIxRoYLo4JTUutu', 0, '2020-01-10 00:00:00', 'hello hung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diem`
--
ALTER TABLE `diem`
  ADD PRIMARY KEY (`Id_Diem`),
  ADD KEY `Id_SV` (`Id_SV`),
  ADD KEY `Id_MonHoc` (`Id_MonHoc`),
  ADD KEY `Id_KyHoc` (`Id_KyHoc`);

--
-- Indexes for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`Id_GV`),
  ADD KEY `Id_Khoa` (`Id_Nganh`),
  ADD KEY `Email` (`Email`);

--
-- Indexes for table `kyhoc`
--
ALTER TABLE `kyhoc`
  ADD PRIMARY KEY (`Id_KyHoc`);

--
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`Id_Lop`),
  ADD KEY `Id_Khoa` (`Id_Nganh`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`Id_MonHoc`),
  ADD KEY `id_KyHoc` (`Id_KyHoc`);

--
-- Indexes for table `nganhhoc`
--
ALTER TABLE `nganhhoc`
  ADD PRIMARY KEY (`Id_NganhHoc`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`Id_Post`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`Id_SV`),
  ADD UNIQUE KEY `CMT` (`CMT`),
  ADD KEY `Id_Lop` (`Id_Lop`),
  ADD KEY `Email` (`Email`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`Id_TaiKhoan`),
  ADD UNIQUE KEY `Email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diem`
--
ALTER TABLE `diem`
  MODIFY `Id_Diem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kyhoc`
--
ALTER TABLE `kyhoc`
  MODIFY `Id_KyHoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `Id_Post` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `Id_TaiKhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diem`
--
ALTER TABLE `diem`
  ADD CONSTRAINT `diem_ibfk_1` FOREIGN KEY (`Id_SV`) REFERENCES `sinhvien` (`Id_SV`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `diem_ibfk_2` FOREIGN KEY (`Id_MonHoc`) REFERENCES `monhoc` (`Id_MonHoc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `diem_ibfk_3` FOREIGN KEY (`Id_KyHoc`) REFERENCES `kyhoc` (`Id_KyHoc`);

--
-- Constraints for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD CONSTRAINT `giangvien_ibfk_1` FOREIGN KEY (`Id_Nganh`) REFERENCES `nganhhoc` (`Id_NganhHoc`),
  ADD CONSTRAINT `giangvien_ibfk_3` FOREIGN KEY (`Email`) REFERENCES `taikhoan` (`email`);

--
-- Constraints for table `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`Id_Nganh`) REFERENCES `nganhhoc` (`Id_NganhHoc`);

--
-- Constraints for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD CONSTRAINT `monhoc_ibfk_2` FOREIGN KEY (`id_KyHoc`) REFERENCES `kyhoc` (`Id_KyHoc`);

--
-- Constraints for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_2` FOREIGN KEY (`Id_Lop`) REFERENCES `lop` (`Id_Lop`),
  ADD CONSTRAINT `sinhvien_ibfk_4` FOREIGN KEY (`Email`) REFERENCES `taikhoan` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
