-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2019 at 05:16 PM
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
  `Id_Diem` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Id_SV` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Id_MonHoc` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Id_KyHoc` int(11) NOT NULL,
  `DiemQuaTrinh` float NOT NULL,
  `DiemThi` float NOT NULL,
  `HeSoDQT` float NOT NULL,
  `HeSoDT` float NOT NULL,
  `DiemTongKet` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `Id_Khoa` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Id_TaiKhoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kyhoc`
--

CREATE TABLE `kyhoc` (
  `Id_KyHoc` int(11) NOT NULL,
  `HocKy` tinyint(4) NOT NULL,
  `NamHoc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `Id_Lop` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenLop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NguoiTao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayTao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Id_Nganh` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrangThai` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `nganhhoc`
--

CREATE TABLE `nganhhoc` (
  `Id_NganhHoc` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenNganh` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayTao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NguoiTao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrangThai` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nganhhoc`
--

INSERT INTO `nganhhoc` (`Id_NganhHoc`, `TenNganh`, `NgayTao`, `NguoiTao`, `TrangThai`) VALUES
('14', '14', '2019-12-25 14:37:04', 'Admin', 1),
('15', '15', '2019-12-25', 'Admin', 1),
('TL01', 'TIn học quản lý 123', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `Id_Post` int(11) UNSIGNED NOT NULL,
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

INSERT INTO `posts` (`Id_Post`, `title`, `category`, `description`, `content`, `author`, `datecreated`) VALUES
(3, 'Seminar giới thiệu: “Quang hợp và các vấn đề liên quan” diễn ra thành công tốt đẹp', 'tintuc', 'Ngày 17-12-2019 tại Room5/K1- Trường Đại học Thủy lợi, ngành Công nghệ sinh học (Khoa H&MT- ĐHTL) cùng một số chuyên gia Công nghệ sinh học của Viện Công nghệ sinh học (Viện Hàn lâm Khoa học và Công n', 'Buổi hội nghị diễn ra với sự tham dự của đại diện ban chủ nhiệm và các thầy/cô giáo là CBGV khoa Hóa và Môi Trường- Đại học Thủy Lợi, các chuyên gia Công nghệ sinh học- Viện Hàn lâm Khoa học và Công nghệ Việt Nam cùng sự hiện diện của hơn 100 bạn sinh viên trong khoa.\r\nPhát biểu khai mạc hội nghị, GS.TS. Đặng Diễm Hồng-chuyên gia trong lĩnh vực tảo và vi tảo-viện Công nghệ Sinh học (viện Hàn lâm Khoa học và Công nghệ Việt Nam) cho hay, thế kỉ 21 được gọi là thế kỉ của Công nghệ sinh học khi mà các nước trên thế giới đua nhau đẩy mạnh phát triển lĩnh vực Kinh tế- kỹ thuật mũi nhọn này. Tại Việt Nam, ngành Công nghệ sinh học cũng nằm trong chiến lược phát triển Khoa học và công nghệ từ nay cho đến năm 2030, nhằm ứng dụng vào các lĩnh vực như y dược, nông-lâm-ngư nghiệp, công nghiệp chế biến, bảo vệ môi trường. Hầu hết, các vấn đề về công nghệ sinh học đều bắt nguồn từ thiên nhiên, từ sự sống trên Trái Đất. Và một trong những vấn đề gần gũi nhất với chúng ta chính là chủ đề về Quang hợp.\r\nGS.TS.Choon-Hwan Lee chia sẻ, Quang hợp là một đề tài nghiên cứu thành công của thầy trong vòng 40 năm. Và đó cũng là chủ đề chính của buổi Hội nghị.\r\n\r\nPhần diễn giả của GS cũng đã nhận được nhiều phản hồi và những ý kiến trao đổi tích cực đến từ các bạn sinh viên góp phần tăng cao hiệu quả của hội nghị.', 'Ban truyền thông khoa Hóa và Môi Trường', '2019-12-26 15:24:20'),
(4, 'Sinh viên Trường Đại học Thủy lợi đồng hành cùng chuỗi hoạt động tại ngày hội \"Sinh viên 5 tốt\"', 'tintuc', 'Sinh viên Trường Đại học Thủy lợi đồng hành cùng chuỗi hoạt động tại ngày hội \"Sinh viên 5 tốt\"', 'Với gần 50 gian hàng giới thiệu về các lĩnh vực khoa học công nghệ, thủ công mỹ nghệ, đồ gia dụng, nhu yếu phẩm, ẩm thực..., Ngày hội Tuổi trẻ Thủ đô đồng hành cùng hàng Việt Nam là một trong những hoạt động thiết thực nhằm cụ thể hóa cuộc vận động \"Người Việt Nam ưu tiên dùng hàng Việt Nam\". Tại đây, hàng nghìn sinh viên đến từ các trường đại học, cao đẳng, học viện trên địa bàn thành phố Hà Nội đã cùng cam kết ưu tiên sử dụng hàng hóa có xuất xứ trong nước. \r\n\r\nĐến với Ngày hội Sinh viên Thủ đô sáng tạo, nhiều bạn trẻ đã có cơ hội tìm hiểu, trải nghiệm những công trình sáng tạo, đề tài nghiên cứu khoa học, dự án giành giải cao trong các cuộc thi dành cho sinh viên trên phạm vi cả nước. Nhiều công trình, đề tài trong số này có tính ứng dụng cao, đã được ứng dụng vào cuộc sống, góp phần giải quyết nhiều vấn đề của cuộc sống.\r\n\r\nTrong khuôn khổ các ngày hội còn có triển lãm \"Sinh viên Việt Nam với biển, đảo Tổ quốc\". Tại không gian triển lãm, 60 tấm ảnh tư liệu quý đã phác họa vẻ đẹp biển, đảo Việt Nam, sự kiên cường, dũng cảm của cán bộ, chiến sĩ và nhân dân tại các vùng biển, hải đảo cũng như các công trình, hành động cách mạng của tuổi trẻ cả nước hướng về biển, đảo quê hương. \r\nHội khỏe sinh viên Thủ đô đã thu hút hàng nghìn bạn trẻ tranh tài trên tinh thần lành mạnh, gắn kết, với nhiều nội dung như: Điền kinh, kéo co, nhảy bao bố, vật tay... Qua đó, hình thành ý thức rèn luyện thân thể theo tấm gương Chủ tịch Hồ Chí Minh. \r\n\r\nCác bạn trẻ cũng đã sôi nổi tham gia cuộc thi Rung chuông vàng \"Tìm hiểu kiến thức các môn học Mác-Lênin, tư tưởng Hồ Chí Minh và lịch sử Đảng Cộng sản Việt Nam\"; chương trình sinh viên hiến máu tình nguyện; hội thi lái xe mô tô giỏi, an toàn...', 'Bích Việt', '2019-12-25 00:00:00'),
(5, 'Bế giảng khóa học bồi dưỡng tiếng Anh cho công chức thuộc Bộ Nông nghiệp và Phát triển nông thôn năm', 'tintuc', 'Vừa qua Trường Đại học Thủy lợi đã tổ chức bế giảng khóa học bồi dưỡng tiếng Anh cho công chức thuộc Bộ Nông nghiệp và Phát triển nông thôn năm 2019.', 'Đến dự với buổi bế giảng có GS.TS Nguyễn Trung Việt, Phó hiệu trưởng Trường Đại học Thủy lợi; Bà Trần Thị Anh Thư đại diện Bộ NN&PTNT; cùng các anh chị học viên đến từ nhiều cơ quan trực thuộc Bộ.\r\nKhóa học bồi dưỡng tiếng Anh cho công chức thuộc Bộ Nông nghiệp và Phát triển nông thôn năm 2019 được Vụ Tổ chức cán bộ - Bộ NN&PTNT phối hợp với Trường Đại học Thủy lợi tổ chức nhằm hoàn thiện chuẩn đánh giá viên chức, công chức cho các cán bộ đang công tác trong ngành.\r\n\r\nKhóa học kéo dài 6 tháng được xây dựng theo chuẩn IEILS tương đương chuẩn tham chiếu B1, B2 khung châu Âu được Bộ Giáo dục và Đào tạo quy định.\r\n\r\nTheo Ban tổ chức, khóa học có 34 học viên tham gia kiểm tra đầu vào tiếng Anh với trình độ khá chênh lệch và mức điểm khá thấp (từ 0,5 đến 6 điểm - điểm IEILS). Từ tình hình cụ thể như vậy, Nhà trường đã phối hợp cùng với Bộ NN&PTNT xây dựng khung chương trình đào tạo phù hợp với trình độ của học viên, đồng thời lựa chọn những giảng viên có kinh nghiệm, có uy tín để tham gia giảng dạy cho lớp học.', 'Bình Dương, Tất Hiển', '2019-12-23 00:00:00'),
(6, 'Đại học Thủy lợi là một trong 30 trường đại học Việt Nam có công bố quốc tế nhiều nhất', 'thongbao', 'Số lượng công bố quốc tế hàng năm của Việt Nam đã cán mốc gần 10.000 bài/năm (năm 2018) trong đó các cơ sở giáo dục đại học đóng góp tới 70%. Tốc độ gia tăng các bài báo WoS & Scopus hàng năm của Việt Nam tăng mạnh (34,7% đối với cả nước và 41,6% đối với riêng các CSGDĐH).', 'Trong 5 năm đó, cả nước đã công bố 22.438 bài báo WoS, 29.932 bài báo Scopus và tổng cộng 32.732 bài trong CSDL tích hợp WoS & Scopus. Đồng thời, số liệu tương ứng của các CSGDĐH là 13.728 (WoS), 21.702 (Scopus) và 23.144 bài (WoS & Scopus), chiếm trung bình khoảng 70% so với năng suất của cả nước.\r\n\r\nVề tổng số bài báo Scopus cao hơn số bài báo WoS 1,33 lần; tổng số bài báo WoS & Scopus cao hơn số bài báo WoS 1,46 lần và số bài báo Scopus 1,09 lần.\r\n\r\nLưu ý, tổng số bài báo WoS & Scopus trong giai đoạn 2014-2018 của Việt Nam chỉ tương đương với năng suất công bố bài báo Scopus của Indonesia trong năm 2017 (21.300 bài) hoặc năm 2018 (33.988 bài).\r\n\r\nNăng suất khoa học - số lượng bài báo công bố trên Việt Nam đang tăng qua từng năm và có dấu hiệu tăng mạnh hơn sau năm 2017.\r\n\r\nTrong giai đoạn 2014-2017, trung bình mỗi năm số lượng bài báo WoS & Scopus tăng khoảng 18,8% (từ 4.332 bài đến 7.217 bài trong 3 năm). Tuy nhiên, chỉ trong một năm từ 2017-2018, số lượng bài báo đã tăng lên 34,7% (từ 7.217 đến 9.719 bài). Như vậy, năm 2018, Việt Nam đã gần như đã cán mốc 10.000 công bố quốc tế một năm.\r\n\r\nKết quả này cao hơn một chút so với năng suất công bố bài báo Scopus hàng năm (ví dụ: 8.800 bài năm 2018) của Trường ĐHQG Singapore. Trong số đó, tốc độ gia tăng số công bố trong hai giai đoạn phân kỳ ấy của WoS là 22,4% và 30,5%; của Scopus là 18,1% và 33,7%.\r\n\r\nTương tự, số lượng bài báo WoS & Scopus của các CSGDĐH Việt Nam, từ 2014-2017, trung bình mỗi năm tăng 21,8%, nhưng chỉ tính riêng năm từ 2017-2018, con số này tăng lên đến 41,6%. Trong đó, tốc độ gia tăng số công bố trong hai giai đoạn phân kỳ ấy của WoS là 29,4 % và 38,5%; của Scopus là 21.3% và 41,1%.', 'Hồng Hạnh', '2019-12-26 22:11:24'),
(7, 'Thông báo thi Olympic môn Sức bền vật liệu và Cơ học kết cấu cấp trường năm học 2019 -202', 'thongbao', 'Bộ môn Sức bền – Kết cấu kết hợp với phòng Chính trị và Công tác sinh viên tổ chức kỳ thi Olympic môn Sức bền vật liệu và Cơ học kết cấu cấp trường năm học 2019 -2020.', 'Môn thi Sức bền vật liệu:\r\n\r\n- Thời gian: 08h00, thứ Bảy 28/12/2019. Địa điểm: Phòng thi 307, 308 B5.\r\n\r\nMôn thi Cơ học kết cấu:\r\n\r\n- Thời gian: 13h30, thứ Bảy 28/12/2019. Địa điểm: Phòng thi 307, 308 B5.\r\n\r\nNội dung:\r\n\r\n- Môn thi Sức bền vật liệu: Các nội dung trong môn học Sức bền vật liệu 1.\r\n\r\n- Môn thi Cơ học kết cấu: Cơ học kết cấu 1.\r\n\r\nHình thức: Thi viết thời gian 180 phút, không sử dụng tài liệu.\r\n\r\nSinh viên đang tham gia đăng ký trực tiếp trên lớp với Giáo viên đang giảng dạy học phần Sức bền vật liệu và Cơ học kết cấu (Đối với sinh viên đang theo học các lớp do Giảng viên Bộ môn phụ trách) hoặc đăng ký trực tiếp tại phòng thi trong buổi thi môn thi đó.', 'Đại học Thủy Lợi', '2019-12-27 00:00:00'),
(8, 'Triển khai đánh giá kết quả rèn luyện học kỳ 1 và toàn khóa học của sinh viên hệ chính quy làm tốt nghiệp học kỳ 1 năm học 2019-2020', 'thongbao', 'Nhà trường thông báo kế hoạch triển khai đánh giá kết quả rèn luyện học kỳ 1 năm học 2019 – 2020 và toàn khóa học cho sinh viên hệ chính quy đang làm ĐATN tại kỳ 1 (2019 – 2020)', 'Đề nghị:\r\n\r\n1. Tất cả các biểu mẫu và kế hoạch đánh giá kết quả rèn luyện đề nghị các khoa, Trung tâm Đào tạo quốc tế, Cơ sở 2 và các lớp trong toàn trường lấy trên trang Web của trường.\r\n\r\n2. Đề nghị các khoa, Trung tâm Đào tạo quốc tế, Cơ sở 2:\r\n\r\n- Nhập dữ liệu vào máy tính bằng Font chữ Times New Roman, Size: 13.\r\n\r\n- Gửi bản tổng hợp đánh giá kết quả rèn luyện về phòng Chính trị & CTSV (bằng công văn & gửi File theo địa chỉ Email: thuyp72002@tlu.edu.vn)\r\n\r\nChi tiết thông báo: tại đây\r\n\r\nDownload các biểu mẫu: Mẫu 1, Mẫu 2, Mẫu 3', 'Đại học Thủy Lợi', '2019-12-24 00:00:00');

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
  `Id_Lop` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Id_TaiKhoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `Id_TaiKhoan` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MatKhau` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VaiTro` int(11) NOT NULL,
  `TrangThai` tinyint(4) NOT NULL DEFAULT 0,
  `NgayTao` datetime NOT NULL DEFAULT current_timestamp(),
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  ADD KEY `Id_Khoa` (`Id_Khoa`),
  ADD KEY `Id_TaiKhoan` (`Id_TaiKhoan`),
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
  ADD KEY `Id_TaiKhoan` (`Id_TaiKhoan`),
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
-- AUTO_INCREMENT for table `kyhoc`
--
ALTER TABLE `kyhoc`
  MODIFY `Id_KyHoc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `Id_Post` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `Id_TaiKhoan` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `giangvien_ibfk_1` FOREIGN KEY (`Id_Khoa`) REFERENCES `nganhhoc` (`Id_NganhHoc`),
  ADD CONSTRAINT `giangvien_ibfk_2` FOREIGN KEY (`Id_TaiKhoan`) REFERENCES `taikhoan` (`Id_TaiKhoan`),
  ADD CONSTRAINT `giangvien_ibfk_3` FOREIGN KEY (`Email`) REFERENCES `taikhoan` (`Email`);

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
  ADD CONSTRAINT `sinhvien_ibfk_3` FOREIGN KEY (`Id_TaiKhoan`) REFERENCES `taikhoan` (`Id_TaiKhoan`),
  ADD CONSTRAINT `sinhvien_ibfk_4` FOREIGN KEY (`Email`) REFERENCES `taikhoan` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
