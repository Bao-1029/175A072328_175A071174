-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2019 at 12:18 PM
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
-- Database: `ql_diemtlu`
--

-- --------------------------------------------------------

--
-- Table structure for table `diem`
--

CREATE TABLE `diem` (
  `Id_Diem` int(10) UNSIGNED NOT NULL,
  `Id_NguoiDung` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Id_LichHoc` int(11) UNSIGNED NOT NULL,
  `DiemQuaTrinh` float DEFAULT NULL,
  `DiemThi` float DEFAULT NULL,
  `TrongSoDQT` float NOT NULL,
  `TrongSoDT` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diem`
--

INSERT INTO `diem` (`Id_Diem`, `Id_NguoiDung`, `Id_LichHoc`, `DiemQuaTrinh`, `DiemThi`, `TrongSoDQT`, `TrongSoDT`) VALUES
(1, '175A071174', 1, 9, 8, 0.4, 0.6);

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

CREATE TABLE `khoa` (
  `Id_Khoa` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenKhoa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khoa`
--

INSERT INTO `khoa` (`Id_Khoa`, `TenKhoa`) VALUES
('cntt', 'công nghệ thông tin');

-- --------------------------------------------------------

--
-- Table structure for table `lichhoc`
--

CREATE TABLE `lichhoc` (
  `Id_LichHoc` int(10) UNSIGNED NOT NULL,
  `Id_MonHoc` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NamHoc` year(4) NOT NULL,
  `HocKy` tinyint(4) NOT NULL,
  `GiaiDoan` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lichhoc`
--

INSERT INTO `lichhoc` (`Id_LichHoc`, `Id_MonHoc`, `NamHoc`, `HocKy`, `GiaiDoan`) VALUES
(1, 'pt1', 2019, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `Id_Lop` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Id_Khoa` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenLop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`Id_Lop`, `Id_Khoa`, `TenLop`) VALUES
('59th2', 'cntt', 'công nghệ 2');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `Id_MonHoc` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenMonHoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoTinChi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`Id_MonHoc`, `TenMonHoc`, `SoTinChi`) VALUES
('pt1', 'phân tích thiết kế', 3);

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `Id_NguoiDung` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HoND` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenND` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgaySinh` datetime NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CMT` int(11) NOT NULL,
  `Id_Lop` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Id_TaiKhoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`Id_NguoiDung`, `HoND`, `TenND`, `NgaySinh`, `DiaChi`, `CMT`, `Id_Lop`, `Id_TaiKhoan`) VALUES
('175A071174', 'hoàng', 'giang nam', '1999-10-23 00:00:00', 'hà nội', 9238749, '59th2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `Id_Post` int(11) NOT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datecreated` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`Id_Post`, `title`, `category`, `description`, `content`, `author`, `datecreated`) VALUES
(1, 'fhsakfdhsa', 'hello', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'dsfsdfjsdlfjklfjasdlkfjasdlkfasd', 'namh', '2019-12-26 15:24:20');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `Id_TaiKhoan` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MatKhau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VaiTro` int(11) NOT NULL,
  `TrangThai` tinyint(1) NOT NULL DEFAULT 0,
  `NgayTao` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`Id_TaiKhoan`, `email`, `MatKhau`, `VaiTro`, `TrangThai`, `NgayTao`) VALUES
(1, 'namhg@wru.vn', '123456', 1, 0, '2019-12-26 15:21:20'),
(3, 'giangnam@gmail.com', '$2y$10$frR.7DVYqELRIMFtcl1TJebPV4easOeiDWAME8URZLIn3l1izaUHi', 0, 0, '2019-12-26 16:45:53'),
(9, 'giangnam_cool@gmail.com', '$2y$10$l0P4E4l4OUd52D0BN3A/T.lU2CQj3eHSa0iExrLcPf2gDt2nxLuHW', 0, 0, '2019-12-26 16:58:02'),
(10, 'giangnam_0cool@gmail.com', '$2y$10$yE8Vbul3KR40nT3tMq7pBu0ofGIFRxBuvq7xM3qC3wZUCsJ//FL3i', 0, 0, '2019-12-26 17:00:52'),
(11, 'giangnam_1cool@gmail.com', '$2y$10$9BJ2K8OQhwgY93Blu49.gOaaQmb5nQ5GMSaKLv6sRgrE78E5JUFai', 0, 0, '2019-12-26 17:01:07'),
(12, 'giangnam_1coool@gmail.com', '$2y$10$7nIlcvtHYOul1i93UpR10uGSsk5jhYN.phT.WoK0Bw5TdT94EOwRe', 0, 0, '2019-12-26 17:03:56'),
(13, 'giangnam_1colool@gmail.com', '$2y$10$O0pZyhXcto7kk3hqZAFRj.dnGJDsB56Wd9cqoWVRContVUjYtWPw2', 0, 0, '2019-12-26 17:04:03'),
(14, 'giangnam_1cololol@gmail.com', '$2y$10$3ozGSG51C7npEAB5I3El9Oxz6QtLtdGJWM57eN1NoMB1zFwRjMaSm', 0, 0, '2019-12-26 17:04:59'),
(15, 'giangnam_1colokklol@gmail.com', '$2y$10$ukLQ/j8gQIBq7zWaoqEKIerQMJsqWYLZA4VLlC4Gn4YlSHy7ZKPyO', 0, 0, '2019-12-26 17:05:28'),
(16, '0373528404', '$2y$10$ndDFFU8AHup94KYhQRb/z.OpkiI9g8uGxwuCTuQ4QSk8/HbHJF0NO', 0, 0, '2019-12-26 17:06:00'),
(17, '0373528404uuu', '$2y$10$5hxP/PSE4plPc6lfmeX/nOjs0cD2yRGj3rSIartwZMVOwZ5wxu3Bi', 0, 0, '2019-12-26 17:06:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diem`
--
ALTER TABLE `diem`
  ADD PRIMARY KEY (`Id_Diem`),
  ADD KEY `Id_NguoiDung` (`Id_NguoiDung`),
  ADD KEY `Id_LichHoc` (`Id_LichHoc`);

--
-- Indexes for table `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`Id_Khoa`);

--
-- Indexes for table `lichhoc`
--
ALTER TABLE `lichhoc`
  ADD PRIMARY KEY (`Id_LichHoc`),
  ADD KEY `Id_MonHoc` (`Id_MonHoc`);

--
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`Id_Lop`),
  ADD KEY `Id_Khoa` (`Id_Khoa`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`Id_MonHoc`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`Id_NguoiDung`),
  ADD KEY `Id_TaiKhoan` (`Id_TaiKhoan`),
  ADD KEY `Id_Lop` (`Id_Lop`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`Id_Post`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`Id_TaiKhoan`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diem`
--
ALTER TABLE `diem`
  MODIFY `Id_Diem` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lichhoc`
--
ALTER TABLE `lichhoc`
  MODIFY `Id_LichHoc` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `Id_Post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `Id_TaiKhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diem`
--
ALTER TABLE `diem`
  ADD CONSTRAINT `diem_ibfk_1` FOREIGN KEY (`Id_NguoiDung`) REFERENCES `nguoidung` (`Id_NguoiDung`),
  ADD CONSTRAINT `diem_ibfk_2` FOREIGN KEY (`Id_LichHoc`) REFERENCES `lichhoc` (`Id_LichHoc`);

--
-- Constraints for table `lichhoc`
--
ALTER TABLE `lichhoc`
  ADD CONSTRAINT `lichhoc_ibfk_1` FOREIGN KEY (`Id_MonHoc`) REFERENCES `monhoc` (`Id_MonHoc`);

--
-- Constraints for table `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`Id_Khoa`) REFERENCES `khoa` (`Id_Khoa`);

--
-- Constraints for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`Id_TaiKhoan`) REFERENCES `taikhoan` (`Id_TaiKhoan`),
  ADD CONSTRAINT `nguoidung_ibfk_2` FOREIGN KEY (`Id_Lop`) REFERENCES `lop` (`Id_Lop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
