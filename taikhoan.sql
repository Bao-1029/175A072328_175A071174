-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2019 at 11:07 AM
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
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`Id_TaiKhoan`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `Id_TaiKhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
