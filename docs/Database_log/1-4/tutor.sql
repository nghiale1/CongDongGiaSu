-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 04:13 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `bangcap`
--

CREATE TABLE `bangcap` (
  `bc_id` bigint(20) UNSIGNED NOT NULL,
  `gs_id` bigint(20) UNSIGNED NOT NULL,
  `bc_tenbangcap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bc_ngaycap` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bc_hinhanh` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bc_trangthai` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Chưa xác thực'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `baocao`
--

CREATE TABLE `baocao` (
  `bc_id` bigint(20) UNSIGNED NOT NULL,
  `bc_noidung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_id` bigint(20) UNSIGNED DEFAULT NULL,
  `hv_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bc_trangthai` int(11) NOT NULL DEFAULT 0,
  `bc_ngaytao` timestamp NOT NULL DEFAULT current_timestamp(),
  `bc_ngaysua` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `bc_ngayxoa` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chitietchuyenmon`
--

CREATE TABLE `chitietchuyenmon` (
  `ctcm_id` bigint(20) UNSIGNED NOT NULL,
  `gs_id` bigint(20) UNSIGNED NOT NULL,
  `cm_id` int(10) UNSIGNED NOT NULL,
  `dtnh_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitietchuyenmon`
--

INSERT INTO `chitietchuyenmon` (`ctcm_id`, `gs_id`, `cm_id`, `dtnh_id`) VALUES
(23, 7, 1, 21),
(24, 7, 16, 24);

-- --------------------------------------------------------

--
-- Table structure for table `chitietlichday`
--

CREATE TABLE `chitietlichday` (
  `ctld_id` bigint(20) UNSIGNED NOT NULL,
  `gs_id` bigint(20) UNSIGNED NOT NULL,
  `tgd_id` int(10) UNSIGNED NOT NULL,
  `ctld_trangthai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Ban'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitietlichday`
--

INSERT INTO `chitietlichday` (`ctld_id`, `gs_id`, `tgd_id`, `ctld_trangthai`) VALUES
(1, 7, 1, 'Ranh'),
(2, 7, 2, 'Ban'),
(3, 7, 3, 'Ranh'),
(4, 7, 4, 'Ban'),
(5, 7, 5, 'Ranh'),
(6, 7, 6, 'Ban'),
(7, 7, 7, 'Ranh'),
(8, 7, 8, 'Ranh'),
(9, 7, 9, 'Ranh'),
(10, 7, 10, 'Ranh'),
(11, 7, 11, 'Ranh'),
(12, 7, 12, 'Ranh'),
(13, 7, 13, 'Ranh'),
(14, 7, 14, 'Ranh'),
(15, 7, 15, 'Ranh'),
(16, 7, 16, 'Ranh'),
(17, 7, 17, 'Ranh'),
(18, 7, 18, 'Ranh'),
(19, 7, 19, 'Ranh'),
(20, 7, 20, 'Ranh'),
(21, 7, 21, 'Ranh');

-- --------------------------------------------------------

--
-- Table structure for table `chuong`
--

CREATE TABLE `chuong` (
  `c_id` bigint(20) NOT NULL,
  `c_ten` varchar(255) NOT NULL,
  `l_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chuyenmon`
--

CREATE TABLE `chuyenmon` (
  `cm_id` int(10) UNSIGNED NOT NULL,
  `cm_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lv_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chuyenmon`
--

INSERT INTO `chuyenmon` (`cm_id`, `cm_ten`, `lv_id`) VALUES
(1, 'A1', 1),
(2, 'A2', 1),
(3, 'B1', 1),
(4, 'B2', 1),
(5, 'C1', 1),
(6, 'C2', 1),
(7, 'N1', 3),
(8, 'N2', 3),
(9, 'N3', 3),
(10, 'N4', 3),
(11, 'N5', 3),
(12, 'TOEIC 200-450', 5),
(13, 'TOEIC 450-600', 5),
(14, 'TOEIC 600-750', 5),
(15, 'TOEIC 750-990', 5),
(16, '5.5', 7),
(17, '6.0', 7),
(18, '6.5', 7),
(19, '7.0', 7),
(20, '7.5', 7),
(21, '8.0-9.0', 7),
(22, 'Android', 8),
(23, 'Web', 8),
(24, 'Game', 8),
(25, 'Đàn Guitar', NULL),
(26, 'Đàn Piano', NULL),
(27, 'Đàn violin', NULL),
(28, 'Vẽ', NULL),
(29, 'Toán', NULL),
(30, 'Hóa', NULL),
(31, 'Lý', NULL),
(32, 'Sinh', NULL),
(33, 'Địa', NULL),
(34, 'Sử', NULL),
(35, 'Văn', NULL),
(36, 'Luyện thi đại học', NULL),
(37, 'Tiếng Đức', NULL),
(38, 'Tiếng Ý', NULL),
(39, 'Tiếng Hàn', NULL),
(40, 'Báo bài', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE `danhgia` (
  `dg_id` bigint(20) UNSIGNED NOT NULL,
  `hv_id` bigint(20) UNSIGNED NOT NULL,
  `l_id` bigint(20) UNSIGNED NOT NULL,
  `dg_xephang` int(11) NOT NULL,
  `dg_noidung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dg_ngaytao` timestamp NOT NULL DEFAULT current_timestamp(),
  `dg_ngaysua` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `dg_ngayxoa` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhgiags`
--

CREATE TABLE `danhgiags` (
  `dggs_id` bigint(20) UNSIGNED NOT NULL,
  `hd_id` bigint(20) UNSIGNED NOT NULL,
  `dggs_sodiem` int(10) UNSIGNED NOT NULL,
  `dggs_noidung` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhgiahv`
--

CREATE TABLE `danhgiahv` (
  `dghv_id` bigint(20) UNSIGNED NOT NULL,
  `hd_id` bigint(20) UNSIGNED NOT NULL,
  `dghv_sodiem` int(10) UNSIGNED NOT NULL,
  `dghv_noidung` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhsachchatgs`
--

CREATE TABLE `danhsachchatgs` (
  `dsc_id` bigint(20) UNSIGNED NOT NULL,
  `chatId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tk_id` bigint(20) UNSIGNED DEFAULT NULL,
  `gs_id` bigint(20) UNSIGNED DEFAULT NULL,
  `time` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhsachchatgs`
--

INSERT INTO `danhsachchatgs` (`dsc_id`, `chatId`, `tk_id`, `gs_id`, `time`) VALUES
(1, 'giasu1', 27, 7, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `danhsachchatlop`
--

CREATE TABLE `danhsachchatlop` (
  `dsc_id` bigint(20) UNSIGNED NOT NULL,
  `chatId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_id` bigint(20) UNSIGNED DEFAULT NULL,
  `gs_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tk_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doituongnguoihoc`
--

CREATE TABLE `doituongnguoihoc` (
  `dtnh_id` int(10) UNSIGNED NOT NULL,
  `dtnh_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doituongnguoihoc`
--

INSERT INTO `doituongnguoihoc` (`dtnh_id`, `dtnh_ten`) VALUES
(21, 'Cấp 1'),
(22, 'Cấp 2'),
(23, 'Cấp 3'),
(24, 'Đại học/Cao đẳng'),
(25, 'Khác'),
(19, 'Không phân biệt'),
(20, 'Mầm non');

-- --------------------------------------------------------

--
-- Table structure for table `giaodich`
--

CREATE TABLE `giaodich` (
  `gd_id` bigint(20) UNSIGNED NOT NULL,
  `tk_id` bigint(20) UNSIGNED NOT NULL,
  `l_id` bigint(20) UNSIGNED NOT NULL,
  `gd_tongtien` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `gd_trangthai` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `gd_ngaytao` timestamp NOT NULL DEFAULT current_timestamp(),
  `gd_ngaysua` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `gd_ngayxoa` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `giasu`
--

CREATE TABLE `giasu` (
  `gs_id` bigint(20) UNSIGNED NOT NULL,
  `gs_hinhdaidien` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `gs_videogioithieu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gs_motangan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gs_gioithieu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gs_hoten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gs_gioitinh` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gs_namsinh` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gs_sdt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gs_diachi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gs_toado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gs_mucluong` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gs_giongnoi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gs_vitri` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tk_id` bigint(20) UNSIGNED NOT NULL,
  `gs_ngaytao` timestamp NOT NULL DEFAULT current_timestamp(),
  `gs_ngayxoa` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `giasu`
--

INSERT INTO `giasu` (`gs_id`, `gs_hinhdaidien`, `gs_videogioithieu`, `gs_motangan`, `gs_gioithieu`, `gs_hoten`, `gs_gioitinh`, `gs_namsinh`, `gs_sdt`, `gs_diachi`, `gs_toado`, `gs_mucluong`, `gs_giongnoi`, `gs_vitri`, `tk_id`, `gs_ngaytao`, `gs_ngayxoa`) VALUES
(7, 'client/svg/teacher_male.svg', NULL, 'mô tả về gia sư số 1', 'thông tin giới thiệu', 'gia sư 1', 'Nam', NULL, NULL, 'Đại học Cần Thơ - Can tho University, Đường 3/2, Xuân Khánh, Ninh Kiều, Cần Thơ, Vietnam', NULL, NULL, NULL, NULL, 27, '2021-01-04 14:57:29', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hocvien`
--

CREATE TABLE `hocvien` (
  `hv_id` bigint(20) UNSIGNED NOT NULL,
  `hv_hinhdaidien` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `hv_hinhnen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'client/img/1108x362.png',
  `hv_hoten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hv_uocmuon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hv_ngaysinh` date DEFAULT '2000-01-01',
  `hv_gioitinh` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hv_trinhdo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hv_hocluc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hv_tentruong` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tk_id` bigint(20) UNSIGNED NOT NULL,
  `hv_ngaytao` timestamp NOT NULL DEFAULT current_timestamp(),
  `hv_ngayxoa` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hocvien`
--

INSERT INTO `hocvien` (`hv_id`, `hv_hinhdaidien`, `hv_hinhnen`, `hv_hoten`, `hv_uocmuon`, `hv_ngaysinh`, `hv_gioitinh`, `hv_trinhdo`, `hv_hocluc`, `hv_tentruong`, `tk_id`, `hv_ngaytao`, `hv_ngayxoa`) VALUES
(1, 'client/svg/student_male.svg', 'client/img/1108x362.png', 'Học viên 1', NULL, '2000-01-01', 'Nam', NULL, NULL, NULL, 28, '2021-01-04 17:00:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hopdong`
--

CREATE TABLE `hopdong` (
  `hd_id` bigint(20) UNSIGNED NOT NULL,
  `hv_id` bigint(20) UNSIGNED NOT NULL,
  `l_id` bigint(20) UNSIGNED NOT NULL,
  `hd_ngayky` date NOT NULL,
  `hd_camketdiem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hd_hieuluctu` date NOT NULL,
  `hd_hieulucden` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `linhvuc`
--

CREATE TABLE `linhvuc` (
  `lv_id` int(10) UNSIGNED NOT NULL,
  `lv_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `linhvuc`
--

INSERT INTO `linhvuc` (`lv_id`, `lv_ten`) VALUES
(7, 'IELTS'),
(8, 'Lập trình'),
(4, 'Nhạc'),
(1, 'Tiếng Anh'),
(3, 'Tiếng Nhật'),
(2, 'Tiếng Pháp'),
(6, 'TOEFL'),
(5, 'TOEIC');

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `l_id` bigint(20) UNSIGNED NOT NULL,
  `l_mota` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_daidien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'client/img/300.png',
  `l_gioithieu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_hocphi` int(10) UNSIGNED NOT NULL,
  `l_soluong` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `l_ngaybatdau` date NOT NULL,
  `l_ngayketthuc` date NOT NULL,
  `l_sobuoi` int(10) UNSIGNED NOT NULL,
  `l_diachi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gs_id` bigint(20) UNSIGNED NOT NULL,
  `ctcm_id` int(11) NOT NULL,
  `l_ngaytao` timestamp NOT NULL DEFAULT current_timestamp(),
  `l_ngaycapnhat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `l_ngayxoa` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`l_id`, `l_mota`, `l_ten`, `l_daidien`, `l_gioithieu`, `l_hocphi`, `l_soluong`, `l_ngaybatdau`, `l_ngayketthuc`, `l_sobuoi`, `l_diachi`, `gs_id`, `ctcm_id`, `l_ngaytao`, `l_ngaycapnhat`, `l_ngayxoa`) VALUES
(14, '<div class=\"overall-description\">\r\n<div class=\"description-details\">\r\n<div class=\"des-partial\">\r\n<p>Rất nhiều bạn học tiếng Anh v&agrave; đang gặp phải c&aacute;c vấn đề như:</p>\r\n<p>- Kh&ocirc;ng biết n&ecirc;n học tiếng Anh như thế n&agrave;o cho hiệu quả</p>\r\n<p>- Học tiếng Anh đ&atilde; l&acirc;u rồi nhưng chưa thể n&oacute;i ra th&agrave;nh phản xạ c&aacute;c chủ đề th&ocirc;ng dụng trong giao tiếp h&agrave;ng ng&agrave;y cũng như trong c&ocirc;ng việc</p>\r\n<p>- Bối rối v&agrave; kh&ocirc;ng biết n&oacute;i g&igrave; khi giao tiếp với người nước ngo&agrave;i</p>\r\n<p>- Mất tự tin khi sử dụng tiếng Anh trong học tập cũng như c&ocirc;ng việc h&agrave;ng ng&agrave;y</p>\r\n<p>Kh&oacute;a học n&agrave;y gi&uacute;p bạn giải quyết c&aacute;c vấn đề tr&ecirc;n bằng việc ph&aacute;t triển vốn từ vựng v&agrave; ngữ ph&aacute;p trong c&ocirc;ng việc h&agrave;ng ng&agrave;y v&agrave; cho 12 chuy&ecirc;n ng&agrave;nh phổ biến nhất.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"course-benefits\">\r\n<div class=\"benefit-title\">Lợi &iacute;ch từ kho&aacute; học</div>\r\n<div class=\"benefit-items\">\r\n<div class=\"benefit-item\">\r\n<div class=\"benefit-term\">X&acirc;y dựng vốn từ vựng - cấu tr&uacute;c c&acirc;u - mẫu c&acirc;u phong ph&uacute; trong c&aacute;c chủ đề kh&aacute;c nhau nơi c&ocirc;ng sở để tự tin giao tiếp</div>\r\n</div>\r\n<div class=\"benefit-item\">\r\n<div class=\"benefit-term\">C&aacute;ch phỏng vấn - đ&agrave;m ph&aacute;n lương chuy&ecirc;n nghiệp khi ứng tuyển c&ocirc;ng việc</div>\r\n</div>\r\n<div class=\"benefit-item\">\r\n<div class=\"benefit-term\">Cung cấp chủ đề v&agrave; vốn từ cho những c&acirc;u chuyện x&atilde; giao nơi c&ocirc;ng sở</div>\r\n</div>\r\n<div class=\"benefit-item\">\r\n<div class=\"benefit-term\">C&aacute;ch l&agrave;m quen - h&ograve;a nhập m&ocirc;i trường mới tự nhi&ecirc;n, dễ d&agrave;ng</div>\r\n</div>\r\n<div class=\"benefit-item\">\r\n<div class=\"benefit-term\">Những c&ocirc;ng việc thường ng&agrave;y - kỹ năng thiết yếu nơi c&ocirc;ng sở</div>\r\n</div>\r\n<div class=\"benefit-item\">\r\n<div class=\"benefit-term\">Từ vựng chuy&ecirc;n ng&agrave;nh cho 12 chuy&ecirc;n ng&agrave;nh phổ biến nhất</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"course-good-for-area\">\r\n<div class=\"title\">Ph&ugrave; hợp với</div>\r\n<div class=\"item\"><span class=\"term\">Biết tiếng Anh nhưng kh&ocirc;ng giao tiếp được trong c&ocirc;ng việc</span></div>\r\n<div class=\"item\"><span class=\"term\">Muốn ph&aacute;t triển khả năng nghe n&oacute;i v&agrave; phản xạ của m&igrave;nh</span></div>\r\n<div class=\"item\"><span class=\"term\">Muốn giao tiếp tự tin với người nước ngo&agrave;i</span></div>\r\n<div class=\"item\"><span class=\"term\">Muốn giỏi tiếng Anh giao tiếp c&ocirc;ng sở trong một thời gian ngắn</span></div>\r\n</div>', 'Anh văn căn bản A1', 'client/img/class//hoc-tieng-anh-12(1).jpg.jpg', '<div class=\"overall-description\">\r\n<div class=\"description-details\">\r\n<div class=\"des-partial\">\r\n<p>Rất nhiều bạn học tiếng Anh v&agrave; đang gặp phải c&aacute;c vấn đề như:</p>\r\n<p>- Kh&ocirc;ng biết n&ecirc;n học tiếng Anh như thế n&agrave;o cho hiệu quả</p>\r\n<p>- Học tiếng Anh đ&atilde; l&acirc;u rồi nhưng chưa thể n&oacute;i ra th&agrave;nh phản xạ c&aacute;c chủ đề th&ocirc;ng dụng trong giao tiếp h&agrave;ng ng&agrave;y cũng như trong c&ocirc;ng việc</p>\r\n<p>- Bối rối v&agrave; kh&ocirc;ng biết n&oacute;i g&igrave; khi giao tiếp với người nước ngo&agrave;i</p>\r\n<p>- Mất tự tin khi sử dụng tiếng Anh trong học tập cũng như c&ocirc;ng việc h&agrave;ng ng&agrave;y</p>\r\n<p>Kh&oacute;a học n&agrave;y gi&uacute;p bạn giải quyết c&aacute;c vấn đề tr&ecirc;n bằng việc ph&aacute;t triển vốn từ vựng v&agrave; ngữ ph&aacute;p trong c&ocirc;ng việc h&agrave;ng ng&agrave;y v&agrave; cho 12 chuy&ecirc;n ng&agrave;nh phổ biến nhất.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"course-benefits\">\r\n<div class=\"benefit-title\">Lợi &iacute;ch từ kho&aacute; học</div>\r\n<div class=\"benefit-items\">\r\n<div class=\"benefit-item\">\r\n<div class=\"benefit-term\">X&acirc;y dựng vốn từ vựng - cấu tr&uacute;c c&acirc;u - mẫu c&acirc;u phong ph&uacute; trong c&aacute;c chủ đề kh&aacute;c nhau nơi c&ocirc;ng sở để tự tin giao tiếp</div>\r\n</div>\r\n<div class=\"benefit-item\">\r\n<div class=\"benefit-term\">C&aacute;ch phỏng vấn - đ&agrave;m ph&aacute;n lương chuy&ecirc;n nghiệp khi ứng tuyển c&ocirc;ng việc</div>\r\n</div>\r\n<div class=\"benefit-item\">\r\n<div class=\"benefit-term\">Cung cấp chủ đề v&agrave; vốn từ cho những c&acirc;u chuyện x&atilde; giao nơi c&ocirc;ng sở</div>\r\n</div>\r\n<div class=\"benefit-item\">\r\n<div class=\"benefit-term\">C&aacute;ch l&agrave;m quen - h&ograve;a nhập m&ocirc;i trường mới tự nhi&ecirc;n, dễ d&agrave;ng</div>\r\n</div>\r\n<div class=\"benefit-item\">\r\n<div class=\"benefit-term\">Những c&ocirc;ng việc thường ng&agrave;y - kỹ năng thiết yếu nơi c&ocirc;ng sở</div>\r\n</div>\r\n<div class=\"benefit-item\">\r\n<div class=\"benefit-term\">Từ vựng chuy&ecirc;n ng&agrave;nh cho 12 chuy&ecirc;n ng&agrave;nh phổ biến nhất</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"course-good-for-area\">\r\n<div class=\"title\">Ph&ugrave; hợp với</div>\r\n<div class=\"item\"><span class=\"term\">Biết tiếng Anh nhưng kh&ocirc;ng giao tiếp được trong c&ocirc;ng việc</span></div>\r\n<div class=\"item\"><span class=\"term\">Muốn ph&aacute;t triển khả năng nghe n&oacute;i v&agrave; phản xạ của m&igrave;nh</span></div>\r\n<div class=\"item\"><span class=\"term\">Muốn giao tiếp tự tin với người nước ngo&agrave;i</span></div>\r\n<div class=\"item\"><span class=\"term\">Muốn giỏi tiếng Anh giao tiếp c&ocirc;ng sở trong một thời gian ngắn</span></div>\r\n</div>', 1000000, 20, '2021-01-03', '2021-01-17', 10, 'Đại học Cần Thơ - Can tho University, Đường 3/2, Xuân Khánh, Ninh Kiều, Cần Thơ, Vietnam', 7, 23, '2021-01-02 01:45:31', '2021-01-02 01:45:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loptgd`
--

CREATE TABLE `loptgd` (
  `l_id` bigint(20) UNSIGNED NOT NULL,
  `tgd_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loptgd`
--

INSERT INTO `loptgd` (`l_id`, `tgd_id`) VALUES
(14, 2),
(14, 4),
(14, 6);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(55, '2020_09_23_140313_create_linhvuc_table', 1),
(56, '2020_09_23_140358_create_chuyenmon_table', 1),
(57, '2020_09_23_140412_create_doituongnguoihoc_table', 1),
(58, '2020_09_23_140424_create_thoigianday_table', 1),
(59, '2020_09_23_140453_create_taikhoan_table', 1),
(60, '2020_09_23_140502_create_giasu_table', 1),
(61, '2020_09_23_140509_create_hocvien_table', 1),
(62, '2020_09_23_140520_create_chitietlichday_table', 1),
(63, '2020_09_23_140533_create_chitietchuyenmon_table', 1),
(64, '2020_09_23_140549_create_bangcap_table', 1),
(65, '2020_09_23_140559_create_truonghoc_table', 1),
(66, '2020_09_23_140616_create_phanhoi_table', 1),
(67, '2020_09_23_140630_create_lop_table', 1),
(68, '2020_09_23_140645_create_hopdong_table', 1),
(69, '2020_09_23_140654_create_danhgiags_table', 1),
(70, '2020_09_23_140700_create_danhgiahv_table', 1),
(71, '2020_09_23_140727_create_thumuclop_table', 1),
(72, '2020_09_23_140752_create_thumuchv_table', 1),
(73, '2020_09_23_140758_create_thumucgs_table', 1),
(74, '2020_09_23_140811_create_taptinlop_table', 1),
(75, '2020_09_23_140817_create_taptinhv_table', 1),
(76, '2020_09_23_140824_create_taptings_table', 1),
(77, '2020_09_23_140838_create_loptgd_table', 1),
(78, '2020_09_24_122046_create_yeuthich_table', 1),
(79, '2020_12_05_102349_create_giaodich_table', 1),
(80, '2020_12_09_223657_create_danhgia_table', 1),
(81, '2020_12_16_075621_create_theodoilichhoc_table', 2),
(85, '2020_12_16_221352_create_danhsachchatgs_table', 3),
(86, '2020_12_17_070757_create_danhsachchatlop_table', 3),
(87, '2021_01_01_103837_create_baocao_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `phanhoi`
--

CREATE TABLE `phanhoi` (
  `ph_id` bigint(20) UNSIGNED NOT NULL,
  `tk_id` bigint(20) UNSIGNED NOT NULL,
  `ph_trangthai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Chờ duyệt',
  `ph_noidung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ph_ngaygui` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `tk_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tk_quyen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'GiaSu',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`tk_id`, `username`, `password`, `tk_quyen`, `remember_token`) VALUES
(20, 'admin', '$2y$10$f9t9aysLa9OA2xLPMpxym.R.E8pspfBNOt9WxehYMgUDzvhe9bPFa', 'Admin', '0PvpA87xT1TawWnhuYzt9d0RDoktOzGTfbwWsmM7D18WaaSAEdSgepAY04Y5'),
(27, 'giasu1', '$2y$10$ZR/MBErtzbK2y4SchtFgfO38yE12YBIQYkK6bAV1m1mJcovgHUGgW', 'GiaSu', 'ttQhh5rWVVfkGAgeffFuqkAapwmQCOcEx95SrQHG16icEw3xMoXrbMYU6jWs'),
(28, 'hocvien1', '$2y$10$5063PaRaf4T2zd4Q7eiqm.EeuO/GOyGcAQV0axBfb74zcHsMahtTS', 'HocVien', 'mjBpFNiYQxHQ5yxJ1d7MTXyc8F7cCzBYxwDXoSXMfVJ3MvUbMRmAqhJOorGG');

-- --------------------------------------------------------

--
-- Table structure for table `taptings`
--

CREATE TABLE `taptings` (
  `ttgs_id` bigint(20) UNSIGNED NOT NULL,
  `tmgs_id` bigint(20) UNSIGNED NOT NULL,
  `ttgs_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttgs_kichthuoc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttgs_duongdan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttgs_ngaytao` timestamp NOT NULL DEFAULT current_timestamp(),
  `ttgs_ngaysua` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ttgs_ngayxoa` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taptinhv`
--

CREATE TABLE `taptinhv` (
  `tthv_id` bigint(20) UNSIGNED NOT NULL,
  `tmhv_id` bigint(20) UNSIGNED NOT NULL,
  `tthv_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tthv_kichthuoc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tthv_duongdan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tthv_ngaytao` timestamp NOT NULL DEFAULT current_timestamp(),
  `tthv_ngaysua` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tthv_ngayxoa` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taptinlop`
--

CREATE TABLE `taptinlop` (
  `ttl_id` bigint(20) UNSIGNED NOT NULL,
  `tml_id` bigint(20) UNSIGNED NOT NULL,
  `ttl_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl_kichthuoc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl_duongdan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl_ngaytao` timestamp NOT NULL DEFAULT current_timestamp(),
  `ttl_ngaysua` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ttl_ngayxoa` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theodoilichhoc`
--

CREATE TABLE `theodoilichhoc` (
  `tdlh_id` bigint(20) UNSIGNED NOT NULL,
  `hv_id` bigint(20) UNSIGNED NOT NULL,
  `l_id` bigint(20) UNSIGNED NOT NULL,
  `tdlh_trangthai` int(11) NOT NULL,
  `tdlh_noidung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tdlh_ngaytao` timestamp NOT NULL DEFAULT current_timestamp(),
  `tdlh_ngaysua` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tdlh_ngayxoa` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thoigianday`
--

CREATE TABLE `thoigianday` (
  `tgd_id` int(10) UNSIGNED NOT NULL,
  `tgd_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgd_ghichu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thoigianday`
--

INSERT INTO `thoigianday` (`tgd_id`, `tgd_ten`, `tgd_ghichu`) VALUES
(1, 'Sáng thứ 2', NULL),
(2, 'Sáng thứ 3', NULL),
(3, 'Sáng thứ 4', NULL),
(4, 'Sáng thứ 5', NULL),
(5, 'Sáng thứ 6', NULL),
(6, 'Sáng thứ 7', NULL),
(7, 'Sáng chủ nhật', NULL),
(8, 'Chiều thứ 2', NULL),
(9, 'Chiều thứ 3', NULL),
(10, 'Chiều thứ 4', NULL),
(11, 'Chiều thứ 5', NULL),
(12, 'Chiều thứ 6', NULL),
(13, 'Chiều thứ 7', NULL),
(14, 'Chiều chủ nhật', NULL),
(15, 'Tối thứ 2', NULL),
(16, 'Tối thứ 3', NULL),
(17, 'Tối thứ 4', NULL),
(18, 'Tối thứ 5', NULL),
(19, 'Tối thứ 6', NULL),
(20, 'Tối thứ 7', NULL),
(21, 'Tối chủ nhật', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thumucgs`
--

CREATE TABLE `thumucgs` (
  `tmgs_id` bigint(20) UNSIGNED NOT NULL,
  `ctcm_id` bigint(20) UNSIGNED NOT NULL,
  `tmgs_tmid` bigint(20) UNSIGNED DEFAULT NULL,
  `tmgs_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmgs_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmgs_duongdan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmgs_duongdancha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gs_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thumucgs`
--

INSERT INTO `thumucgs` (`tmgs_id`, `ctcm_id`, `tmgs_tmid`, `tmgs_ten`, `tmgs_slug`, `tmgs_duongdan`, `tmgs_duongdancha`, `gs_id`) VALUES
(1, 23, NULL, 'A1-Cấp 1', 'a1-cap-1', 'tai-lieu-gia-su/7/a1-cap-1', 'tai-lieu-gia-su/7', 7),
(2, 24, NULL, '5.5-Đại học/Cao đẳng', '55-dai-hoccao-dang.2', 'tai-lieu-gia-su/255-dai-hoccao-dang.2', 'tai-lieu-gia-su/7', 7);

-- --------------------------------------------------------

--
-- Table structure for table `thumuchv`
--

CREATE TABLE `thumuchv` (
  `tmhv_id` bigint(20) UNSIGNED NOT NULL,
  `hv_id` bigint(20) UNSIGNED NOT NULL,
  `tmhv_tmid` bigint(20) UNSIGNED DEFAULT NULL,
  `tmhv_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmhv_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmhv_duongdan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thumuchv`
--

INSERT INTO `thumuchv` (`tmhv_id`, `hv_id`, `tmhv_tmid`, `tmhv_ten`, `tmhv_slug`, `tmhv_duongdan`) VALUES
(1, 1, NULL, 'Học viên 1', '1', 'tai-lieu-hoc-vien/1');

-- --------------------------------------------------------

--
-- Table structure for table `thumuclop`
--

CREATE TABLE `thumuclop` (
  `tml_id` bigint(20) UNSIGNED NOT NULL,
  `l_id` bigint(20) UNSIGNED NOT NULL,
  `tml_tmid` bigint(20) UNSIGNED DEFAULT NULL,
  `tml_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tml_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tml_duongdan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thumuclop`
--

INSERT INTO `thumuclop` (`tml_id`, `l_id`, `tml_tmid`, `tml_ten`, `tml_slug`, `tml_duongdan`) VALUES
(16, 14, NULL, 'Anh văn căn bản A1', 'anh-van-can-ban-a1.14', 'tai-lieu-mon-hoc/14/anh-van-can-ban-a1');

-- --------------------------------------------------------

--
-- Table structure for table `truonghoc`
--

CREATE TABLE `truonghoc` (
  `th_id` bigint(20) UNSIGNED NOT NULL,
  `gs_id` bigint(20) UNSIGNED NOT NULL,
  `th_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `th_chucdanh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Từng học',
  `th_batdau` year(4) DEFAULT NULL,
  `th_ketthuc` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `truonghoc`
--

INSERT INTO `truonghoc` (`th_id`, `gs_id`, `th_ten`, `th_chucdanh`, `th_batdau`, `th_ketthuc`) VALUES
(1, 7, 'Đại học Cần Thơ', 'Giáo viên khoa CNTT', 2018, 2020);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `v_id` bigint(20) NOT NULL,
  `l_id` bigint(20) NOT NULL,
  `v_duongdan` varchar(255) DEFAULT NULL,
  `v_ten` varchar(255) DEFAULT NULL,
  `v_dodai` varchar(255) DEFAULT NULL,
  `v_theloai` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `yeuthich`
--

CREATE TABLE `yeuthich` (
  `gs_id` bigint(20) UNSIGNED NOT NULL,
  `tk_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bangcap`
--
ALTER TABLE `bangcap`
  ADD PRIMARY KEY (`bc_id`),
  ADD KEY `bangcap_gs_id_index` (`gs_id`);

--
-- Indexes for table `baocao`
--
ALTER TABLE `baocao`
  ADD PRIMARY KEY (`bc_id`),
  ADD KEY `baocao_l_id_index` (`l_id`),
  ADD KEY `baocao_hv_id_index` (`hv_id`);

--
-- Indexes for table `chitietchuyenmon`
--
ALTER TABLE `chitietchuyenmon`
  ADD PRIMARY KEY (`ctcm_id`),
  ADD KEY `chitietchuyenmon_gs_id_index` (`gs_id`),
  ADD KEY `chitietchuyenmon_cm_id_index` (`cm_id`),
  ADD KEY `chitietchuyenmon_dtnh_id_index` (`dtnh_id`);

--
-- Indexes for table `chitietlichday`
--
ALTER TABLE `chitietlichday`
  ADD PRIMARY KEY (`ctld_id`),
  ADD KEY `chitietlichday_gs_id_index` (`gs_id`),
  ADD KEY `chitietlichday_tgd_id_index` (`tgd_id`);

--
-- Indexes for table `chuong`
--
ALTER TABLE `chuong`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `chuyenmon`
--
ALTER TABLE `chuyenmon`
  ADD PRIMARY KEY (`cm_id`),
  ADD KEY `chuyenmon_cm_ten_index` (`cm_ten`),
  ADD KEY `chuyenmon_lv_id_index` (`lv_id`);

--
-- Indexes for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`dg_id`),
  ADD KEY `danhgia_hv_id_index` (`hv_id`),
  ADD KEY `danhgia_l_id_index` (`l_id`);

--
-- Indexes for table `danhgiags`
--
ALTER TABLE `danhgiags`
  ADD PRIMARY KEY (`dggs_id`),
  ADD KEY `danhgiags_hd_id_index` (`hd_id`);

--
-- Indexes for table `danhgiahv`
--
ALTER TABLE `danhgiahv`
  ADD PRIMARY KEY (`dghv_id`),
  ADD KEY `danhgiahv_hd_id_index` (`hd_id`);

--
-- Indexes for table `danhsachchatgs`
--
ALTER TABLE `danhsachchatgs`
  ADD PRIMARY KEY (`dsc_id`),
  ADD KEY `danhsachchatgs_tk_id_index` (`tk_id`),
  ADD KEY `danhsachchatgs_gs_id_index` (`gs_id`);

--
-- Indexes for table `danhsachchatlop`
--
ALTER TABLE `danhsachchatlop`
  ADD PRIMARY KEY (`dsc_id`),
  ADD KEY `danhsachchatlop_l_id_index` (`l_id`),
  ADD KEY `danhsachchatlop_gs_id_index` (`gs_id`),
  ADD KEY `danhsachchatlop_tk_id_index` (`tk_id`);

--
-- Indexes for table `doituongnguoihoc`
--
ALTER TABLE `doituongnguoihoc`
  ADD PRIMARY KEY (`dtnh_id`),
  ADD KEY `doituongnguoihoc_dtnh_ten_index` (`dtnh_ten`);

--
-- Indexes for table `giaodich`
--
ALTER TABLE `giaodich`
  ADD PRIMARY KEY (`gd_id`),
  ADD KEY `giaodich_tk_id_index` (`tk_id`),
  ADD KEY `giaodich_l_id_index` (`l_id`);

--
-- Indexes for table `giasu`
--
ALTER TABLE `giasu`
  ADD PRIMARY KEY (`gs_id`),
  ADD KEY `giasu_gs_gioitinh_index` (`gs_gioitinh`),
  ADD KEY `giasu_gs_namsinh_index` (`gs_namsinh`),
  ADD KEY `giasu_gs_diachi_index` (`gs_diachi`),
  ADD KEY `giasu_gs_mucluong_index` (`gs_mucluong`),
  ADD KEY `giasu_gs_giongnoi_index` (`gs_giongnoi`),
  ADD KEY `giasu_tk_id_index` (`tk_id`);

--
-- Indexes for table `hocvien`
--
ALTER TABLE `hocvien`
  ADD PRIMARY KEY (`hv_id`),
  ADD KEY `hocvien_hv_trinhdo_index` (`hv_trinhdo`),
  ADD KEY `hocvien_hv_hocluc_index` (`hv_hocluc`),
  ADD KEY `hocvien_tk_id_index` (`tk_id`);

--
-- Indexes for table `hopdong`
--
ALTER TABLE `hopdong`
  ADD PRIMARY KEY (`hd_id`),
  ADD KEY `hopdong_hv_id_index` (`hv_id`),
  ADD KEY `hopdong_l_id_index` (`l_id`);

--
-- Indexes for table `linhvuc`
--
ALTER TABLE `linhvuc`
  ADD PRIMARY KEY (`lv_id`),
  ADD KEY `linhvuc_lv_ten_index` (`lv_ten`);

--
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`l_id`),
  ADD KEY `lop_l_malop_index` (`l_mota`(768)),
  ADD KEY `lop_l_ten_index` (`l_ten`),
  ADD KEY `lop_l_hocphi_index` (`l_hocphi`),
  ADD KEY `lop_l_soluong_index` (`l_soluong`),
  ADD KEY `lop_l_ngaybatdau_index` (`l_ngaybatdau`),
  ADD KEY `lop_l_ngayketthuc_index` (`l_ngayketthuc`),
  ADD KEY `lop_l_sobuoi_index` (`l_sobuoi`),
  ADD KEY `lop_gs_id_index` (`gs_id`);

--
-- Indexes for table `loptgd`
--
ALTER TABLE `loptgd`
  ADD PRIMARY KEY (`l_id`,`tgd_id`),
  ADD KEY `loptgd_l_id_index` (`l_id`),
  ADD KEY `loptgd_tgd_id_foreign` (`tgd_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD PRIMARY KEY (`ph_id`),
  ADD KEY `phanhoi_tk_id_index` (`tk_id`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`tk_id`),
  ADD KEY `taikhoan_username_index` (`username`),
  ADD KEY `taikhoan_password_index` (`password`),
  ADD KEY `taikhoan_tk_quyen_index` (`tk_quyen`);

--
-- Indexes for table `taptings`
--
ALTER TABLE `taptings`
  ADD PRIMARY KEY (`ttgs_id`),
  ADD KEY `taptings_tmgs_id_index` (`tmgs_id`);

--
-- Indexes for table `taptinhv`
--
ALTER TABLE `taptinhv`
  ADD PRIMARY KEY (`tthv_id`),
  ADD KEY `taptinhv_tmhv_id_index` (`tmhv_id`);

--
-- Indexes for table `taptinlop`
--
ALTER TABLE `taptinlop`
  ADD PRIMARY KEY (`ttl_id`),
  ADD KEY `taptinlop_tml_id_index` (`tml_id`);

--
-- Indexes for table `theodoilichhoc`
--
ALTER TABLE `theodoilichhoc`
  ADD PRIMARY KEY (`tdlh_id`),
  ADD KEY `theodoilichhoc_hv_id_index` (`hv_id`),
  ADD KEY `theodoilichhoc_l_id_index` (`l_id`);

--
-- Indexes for table `thoigianday`
--
ALTER TABLE `thoigianday`
  ADD PRIMARY KEY (`tgd_id`),
  ADD KEY `thoigianday_tgd_ten_index` (`tgd_ten`);

--
-- Indexes for table `thumucgs`
--
ALTER TABLE `thumucgs`
  ADD PRIMARY KEY (`tmgs_id`),
  ADD KEY `thumucgs_ctcm_id_index` (`ctcm_id`),
  ADD KEY `thumucgs_tmgs_tmid_index` (`tmgs_tmid`),
  ADD KEY `tmgs_slug` (`tmgs_slug`),
  ADD KEY `gs_id` (`gs_id`),
  ADD KEY `tmgs_duongdan` (`tmgs_duongdan`);

--
-- Indexes for table `thumuchv`
--
ALTER TABLE `thumuchv`
  ADD PRIMARY KEY (`tmhv_id`),
  ADD KEY `thumuchv_hv_id_index` (`hv_id`),
  ADD KEY `thumuchv_tmhv_tmid_index` (`tmhv_tmid`);

--
-- Indexes for table `thumuclop`
--
ALTER TABLE `thumuclop`
  ADD PRIMARY KEY (`tml_id`),
  ADD KEY `thumuclop_l_id_index` (`l_id`),
  ADD KEY `thumuclop_tml_tmid_index` (`tml_tmid`);

--
-- Indexes for table `truonghoc`
--
ALTER TABLE `truonghoc`
  ADD PRIMARY KEY (`th_id`),
  ADD KEY `truonghoc_gs_id_index` (`gs_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`v_id`);

--
-- Indexes for table `yeuthich`
--
ALTER TABLE `yeuthich`
  ADD PRIMARY KEY (`gs_id`,`tk_id`),
  ADD KEY `yeuthich_gs_id_index` (`gs_id`),
  ADD KEY `yeuthich_tk_id_index` (`tk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bangcap`
--
ALTER TABLE `bangcap`
  MODIFY `bc_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `baocao`
--
ALTER TABLE `baocao`
  MODIFY `bc_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chitietchuyenmon`
--
ALTER TABLE `chitietchuyenmon`
  MODIFY `ctcm_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `chitietlichday`
--
ALTER TABLE `chitietlichday`
  MODIFY `ctld_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `chuong`
--
ALTER TABLE `chuong`
  MODIFY `c_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chuyenmon`
--
ALTER TABLE `chuyenmon`
  MODIFY `cm_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `dg_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `danhgiags`
--
ALTER TABLE `danhgiags`
  MODIFY `dggs_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhgiahv`
--
ALTER TABLE `danhgiahv`
  MODIFY `dghv_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhsachchatgs`
--
ALTER TABLE `danhsachchatgs`
  MODIFY `dsc_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `danhsachchatlop`
--
ALTER TABLE `danhsachchatlop`
  MODIFY `dsc_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doituongnguoihoc`
--
ALTER TABLE `doituongnguoihoc`
  MODIFY `dtnh_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `giaodich`
--
ALTER TABLE `giaodich`
  MODIFY `gd_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `giasu`
--
ALTER TABLE `giasu`
  MODIFY `gs_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hocvien`
--
ALTER TABLE `hocvien`
  MODIFY `hv_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hopdong`
--
ALTER TABLE `hopdong`
  MODIFY `hd_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `linhvuc`
--
ALTER TABLE `linhvuc`
  MODIFY `lv_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lop`
--
ALTER TABLE `lop`
  MODIFY `l_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `phanhoi`
--
ALTER TABLE `phanhoi`
  MODIFY `ph_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `tk_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `taptings`
--
ALTER TABLE `taptings`
  MODIFY `ttgs_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taptinhv`
--
ALTER TABLE `taptinhv`
  MODIFY `tthv_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taptinlop`
--
ALTER TABLE `taptinlop`
  MODIFY `ttl_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `theodoilichhoc`
--
ALTER TABLE `theodoilichhoc`
  MODIFY `tdlh_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thoigianday`
--
ALTER TABLE `thoigianday`
  MODIFY `tgd_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `thumucgs`
--
ALTER TABLE `thumucgs`
  MODIFY `tmgs_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `thumuchv`
--
ALTER TABLE `thumuchv`
  MODIFY `tmhv_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `thumuclop`
--
ALTER TABLE `thumuclop`
  MODIFY `tml_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `truonghoc`
--
ALTER TABLE `truonghoc`
  MODIFY `th_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `v_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bangcap`
--
ALTER TABLE `bangcap`
  ADD CONSTRAINT `bangcap_gs_id_foreign` FOREIGN KEY (`gs_id`) REFERENCES `giasu` (`gs_id`) ON DELETE CASCADE;

--
-- Constraints for table `baocao`
--
ALTER TABLE `baocao`
  ADD CONSTRAINT `baocao_hv_id_foreign` FOREIGN KEY (`hv_id`) REFERENCES `hocvien` (`hv_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `baocao_l_id_foreign` FOREIGN KEY (`l_id`) REFERENCES `lop` (`l_id`) ON DELETE CASCADE;

--
-- Constraints for table `chitietchuyenmon`
--
ALTER TABLE `chitietchuyenmon`
  ADD CONSTRAINT `chitietchuyenmon_cm_id_foreign` FOREIGN KEY (`cm_id`) REFERENCES `chuyenmon` (`cm_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `chitietchuyenmon_dtnh_id_foreign` FOREIGN KEY (`dtnh_id`) REFERENCES `doituongnguoihoc` (`dtnh_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `chitietchuyenmon_gs_id_foreign` FOREIGN KEY (`gs_id`) REFERENCES `giasu` (`gs_id`) ON DELETE CASCADE;

--
-- Constraints for table `chitietlichday`
--
ALTER TABLE `chitietlichday`
  ADD CONSTRAINT `chitietlichday_gs_id_foreign` FOREIGN KEY (`gs_id`) REFERENCES `giasu` (`gs_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `chitietlichday_tgd_id_foreign` FOREIGN KEY (`tgd_id`) REFERENCES `thoigianday` (`tgd_id`) ON DELETE CASCADE;

--
-- Constraints for table `chuyenmon`
--
ALTER TABLE `chuyenmon`
  ADD CONSTRAINT `chuyenmon_lv_id_foreign` FOREIGN KEY (`lv_id`) REFERENCES `linhvuc` (`lv_id`) ON DELETE CASCADE;

--
-- Constraints for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_hv_id_foreign` FOREIGN KEY (`hv_id`) REFERENCES `hocvien` (`hv_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `danhgia_l_id_foreign` FOREIGN KEY (`l_id`) REFERENCES `lop` (`l_id`) ON DELETE CASCADE;

--
-- Constraints for table `danhgiags`
--
ALTER TABLE `danhgiags`
  ADD CONSTRAINT `danhgiags_hd_id_foreign` FOREIGN KEY (`hd_id`) REFERENCES `hopdong` (`hd_id`) ON DELETE CASCADE;

--
-- Constraints for table `danhgiahv`
--
ALTER TABLE `danhgiahv`
  ADD CONSTRAINT `danhgiahv_hd_id_foreign` FOREIGN KEY (`hd_id`) REFERENCES `hopdong` (`hd_id`) ON DELETE CASCADE;

--
-- Constraints for table `danhsachchatgs`
--
ALTER TABLE `danhsachchatgs`
  ADD CONSTRAINT `danhsachchatgs_gs_id_foreign` FOREIGN KEY (`gs_id`) REFERENCES `giasu` (`gs_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `danhsachchatgs_tk_id_foreign` FOREIGN KEY (`tk_id`) REFERENCES `taikhoan` (`tk_id`) ON DELETE CASCADE;

--
-- Constraints for table `danhsachchatlop`
--
ALTER TABLE `danhsachchatlop`
  ADD CONSTRAINT `danhsachchatlop_gs_id_foreign` FOREIGN KEY (`gs_id`) REFERENCES `giasu` (`gs_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `danhsachchatlop_l_id_foreign` FOREIGN KEY (`l_id`) REFERENCES `lop` (`l_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `danhsachchatlop_tk_id_foreign` FOREIGN KEY (`tk_id`) REFERENCES `taikhoan` (`tk_id`) ON DELETE CASCADE;

--
-- Constraints for table `giaodich`
--
ALTER TABLE `giaodich`
  ADD CONSTRAINT `giaodich_l_id_foreign` FOREIGN KEY (`l_id`) REFERENCES `lop` (`l_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `giaodich_tk_id_foreign` FOREIGN KEY (`tk_id`) REFERENCES `taikhoan` (`tk_id`) ON DELETE CASCADE;

--
-- Constraints for table `giasu`
--
ALTER TABLE `giasu`
  ADD CONSTRAINT `giasu_tk_id_foreign` FOREIGN KEY (`tk_id`) REFERENCES `taikhoan` (`tk_id`) ON DELETE CASCADE;

--
-- Constraints for table `hocvien`
--
ALTER TABLE `hocvien`
  ADD CONSTRAINT `hocvien_tk_id_foreign` FOREIGN KEY (`tk_id`) REFERENCES `taikhoan` (`tk_id`) ON DELETE CASCADE;

--
-- Constraints for table `hopdong`
--
ALTER TABLE `hopdong`
  ADD CONSTRAINT `hopdong_hv_id_foreign` FOREIGN KEY (`hv_id`) REFERENCES `hocvien` (`hv_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `hopdong_l_id_foreign` FOREIGN KEY (`l_id`) REFERENCES `lop` (`l_id`) ON DELETE CASCADE;

--
-- Constraints for table `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_gs_id_foreign` FOREIGN KEY (`gs_id`) REFERENCES `giasu` (`gs_id`) ON DELETE CASCADE;

--
-- Constraints for table `loptgd`
--
ALTER TABLE `loptgd`
  ADD CONSTRAINT `loptgd_l_id_foreign` FOREIGN KEY (`l_id`) REFERENCES `lop` (`l_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `loptgd_tgd_id_foreign` FOREIGN KEY (`tgd_id`) REFERENCES `thoigianday` (`tgd_id`) ON DELETE CASCADE;

--
-- Constraints for table `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD CONSTRAINT `phanhoi_tk_id_foreign` FOREIGN KEY (`tk_id`) REFERENCES `taikhoan` (`tk_id`) ON DELETE CASCADE;

--
-- Constraints for table `taptings`
--
ALTER TABLE `taptings`
  ADD CONSTRAINT `taptings_tmgs_id_foreign` FOREIGN KEY (`tmgs_id`) REFERENCES `thumucgs` (`tmgs_id`) ON DELETE CASCADE;

--
-- Constraints for table `taptinhv`
--
ALTER TABLE `taptinhv`
  ADD CONSTRAINT `taptinhv_tmhv_id_foreign` FOREIGN KEY (`tmhv_id`) REFERENCES `thumuchv` (`tmhv_id`) ON DELETE CASCADE;

--
-- Constraints for table `taptinlop`
--
ALTER TABLE `taptinlop`
  ADD CONSTRAINT `taptinlop_tml_id_foreign` FOREIGN KEY (`tml_id`) REFERENCES `thumuclop` (`tml_id`) ON DELETE CASCADE;

--
-- Constraints for table `theodoilichhoc`
--
ALTER TABLE `theodoilichhoc`
  ADD CONSTRAINT `theodoilichhoc_hv_id_foreign` FOREIGN KEY (`hv_id`) REFERENCES `hocvien` (`hv_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `theodoilichhoc_l_id_foreign` FOREIGN KEY (`l_id`) REFERENCES `lop` (`l_id`) ON DELETE CASCADE;

--
-- Constraints for table `thumucgs`
--
ALTER TABLE `thumucgs`
  ADD CONSTRAINT `thumucgs_ctcm_id_foreign` FOREIGN KEY (`ctcm_id`) REFERENCES `chitietchuyenmon` (`ctcm_id`) ON DELETE CASCADE;

--
-- Constraints for table `thumuchv`
--
ALTER TABLE `thumuchv`
  ADD CONSTRAINT `thumuchv_hv_id_foreign` FOREIGN KEY (`hv_id`) REFERENCES `hocvien` (`hv_id`) ON DELETE CASCADE;

--
-- Constraints for table `thumuclop`
--
ALTER TABLE `thumuclop`
  ADD CONSTRAINT `thumuclop_l_id_foreign` FOREIGN KEY (`l_id`) REFERENCES `lop` (`l_id`) ON DELETE CASCADE;

--
-- Constraints for table `truonghoc`
--
ALTER TABLE `truonghoc`
  ADD CONSTRAINT `truonghoc_gs_id_foreign` FOREIGN KEY (`gs_id`) REFERENCES `giasu` (`gs_id`) ON DELETE CASCADE;

--
-- Constraints for table `yeuthich`
--
ALTER TABLE `yeuthich`
  ADD CONSTRAINT `yeuthich_gs_id_foreign` FOREIGN KEY (`gs_id`) REFERENCES `giasu` (`gs_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `yeuthich_tk_id_foreign` FOREIGN KEY (`tk_id`) REFERENCES `taikhoan` (`tk_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
