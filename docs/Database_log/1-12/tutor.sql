-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 11:27 AM
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

--
-- Dumping data for table `baocao`
--

INSERT INTO `baocao` (`bc_id`, `bc_noidung`, `l_id`, `hv_id`, `bc_trangthai`, `bc_ngaytao`, `bc_ngaysua`, `bc_ngayxoa`) VALUES
(1, 'chưa có nội dung video', 14, 1, 0, '2021-01-08 09:28:30', '2021-01-08 09:28:30', NULL);

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
(24, 7, 16, 24),
(25, 8, 7, 24),
(26, 9, 25, 19),
(27, 10, 29, 22),
(28, 11, 23, 21),
(29, 12, 22, 24),
(30, 13, 24, 24),
(31, 14, 23, 24),
(32, 15, 23, 24),
(33, 16, 23, 23);

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
(15, 7, 15, 'Ban'),
(16, 7, 16, 'Ranh'),
(17, 7, 17, 'Ban'),
(18, 7, 18, 'Ranh'),
(19, 7, 19, 'Ban'),
(20, 7, 20, 'Ranh'),
(21, 7, 21, 'Ranh'),
(22, 8, 1, 'Ranh'),
(23, 8, 2, 'Ranh'),
(24, 8, 3, 'Ranh'),
(25, 8, 4, 'Ranh'),
(26, 8, 5, 'Ranh'),
(27, 8, 6, 'Ranh'),
(28, 8, 7, 'Ranh'),
(29, 8, 8, 'Ranh'),
(30, 8, 9, 'Ranh'),
(31, 8, 10, 'Ranh'),
(32, 8, 11, 'Ranh'),
(33, 8, 12, 'Ranh'),
(34, 8, 13, 'Ranh'),
(35, 8, 14, 'Ranh'),
(36, 8, 15, 'Ranh'),
(37, 8, 16, 'Ban'),
(38, 8, 17, 'Ranh'),
(39, 8, 18, 'Ban'),
(40, 8, 19, 'Ranh'),
(41, 8, 20, 'Ban'),
(42, 8, 21, 'Ranh'),
(43, 9, 1, 'Ranh'),
(44, 9, 2, 'Ranh'),
(45, 9, 3, 'Ranh'),
(46, 9, 4, 'Ranh'),
(47, 9, 5, 'Ranh'),
(48, 9, 6, 'Ranh'),
(49, 9, 7, 'Ranh'),
(50, 9, 8, 'Ranh'),
(51, 9, 9, 'Ranh'),
(52, 9, 10, 'Ranh'),
(53, 9, 11, 'Ranh'),
(54, 9, 12, 'Ranh'),
(55, 9, 13, 'Ranh'),
(56, 9, 14, 'Ranh'),
(57, 9, 15, 'Ban'),
(58, 9, 16, 'Ranh'),
(59, 9, 17, 'Ban'),
(60, 9, 18, 'Ranh'),
(61, 9, 19, 'Ban'),
(62, 9, 20, 'Ranh'),
(63, 9, 21, 'Ranh'),
(64, 10, 1, 'Ranh'),
(65, 10, 2, 'Ranh'),
(66, 10, 3, 'Ranh'),
(67, 10, 4, 'Ranh'),
(68, 10, 5, 'Ranh'),
(69, 10, 6, 'Ranh'),
(70, 10, 7, 'Ranh'),
(71, 10, 8, 'Ranh'),
(72, 10, 9, 'Ranh'),
(73, 10, 10, 'Ranh'),
(74, 10, 11, 'Ranh'),
(75, 10, 12, 'Ranh'),
(76, 10, 13, 'Ranh'),
(77, 10, 14, 'Ranh'),
(78, 10, 15, 'Ranh'),
(79, 10, 16, 'Ranh'),
(80, 10, 17, 'Ranh'),
(81, 10, 18, 'Ranh'),
(82, 10, 19, 'Ranh'),
(83, 10, 20, 'Ranh'),
(84, 10, 21, 'Ranh'),
(85, 11, 1, 'Ranh'),
(86, 11, 2, 'Ranh'),
(87, 11, 3, 'Ranh'),
(88, 11, 4, 'Ranh'),
(89, 11, 5, 'Ranh'),
(90, 11, 6, 'Ranh'),
(91, 11, 7, 'Ranh'),
(92, 11, 8, 'Ranh'),
(93, 11, 9, 'Ranh'),
(94, 11, 10, 'Ranh'),
(95, 11, 11, 'Ranh'),
(96, 11, 12, 'Ranh'),
(97, 11, 13, 'Ranh'),
(98, 11, 14, 'Ranh'),
(99, 11, 15, 'Ranh'),
(100, 11, 16, 'Ranh'),
(101, 11, 17, 'Ranh'),
(102, 11, 18, 'Ranh'),
(103, 11, 19, 'Ranh'),
(104, 11, 20, 'Ranh'),
(105, 11, 21, 'Ranh'),
(106, 12, 1, 'Ranh'),
(107, 12, 2, 'Ranh'),
(108, 12, 3, 'Ranh'),
(109, 12, 4, 'Ranh'),
(110, 12, 5, 'Ranh'),
(111, 12, 6, 'Ranh'),
(112, 12, 7, 'Ranh'),
(113, 12, 8, 'Ranh'),
(114, 12, 9, 'Ranh'),
(115, 12, 10, 'Ranh'),
(116, 12, 11, 'Ranh'),
(117, 12, 12, 'Ranh'),
(118, 12, 13, 'Ranh'),
(119, 12, 14, 'Ranh'),
(120, 12, 15, 'Ranh'),
(121, 12, 16, 'Ranh'),
(122, 12, 17, 'Ranh'),
(123, 12, 18, 'Ranh'),
(124, 12, 19, 'Ranh'),
(125, 12, 20, 'Ranh'),
(126, 12, 21, 'Ranh'),
(127, 13, 1, 'Ranh'),
(128, 13, 2, 'Ranh'),
(129, 13, 3, 'Ranh'),
(130, 13, 4, 'Ranh'),
(131, 13, 5, 'Ranh'),
(132, 13, 6, 'Ranh'),
(133, 13, 7, 'Ranh'),
(134, 13, 8, 'Ranh'),
(135, 13, 9, 'Ranh'),
(136, 13, 10, 'Ranh'),
(137, 13, 11, 'Ranh'),
(138, 13, 12, 'Ranh'),
(139, 13, 13, 'Ranh'),
(140, 13, 14, 'Ranh'),
(141, 13, 15, 'Ranh'),
(142, 13, 16, 'Ranh'),
(143, 13, 17, 'Ranh'),
(144, 13, 18, 'Ranh'),
(145, 13, 19, 'Ranh'),
(146, 13, 20, 'Ranh'),
(147, 13, 21, 'Ranh'),
(148, 14, 1, 'Ranh'),
(149, 14, 2, 'Ranh'),
(150, 14, 3, 'Ranh'),
(151, 14, 4, 'Ranh'),
(152, 14, 5, 'Ranh'),
(153, 14, 6, 'Ranh'),
(154, 14, 7, 'Ranh'),
(155, 14, 8, 'Ranh'),
(156, 14, 9, 'Ranh'),
(157, 14, 10, 'Ranh'),
(158, 14, 11, 'Ranh'),
(159, 14, 12, 'Ranh'),
(160, 14, 13, 'Ranh'),
(161, 14, 14, 'Ranh'),
(162, 14, 15, 'Ranh'),
(163, 14, 16, 'Ranh'),
(164, 14, 17, 'Ranh'),
(165, 14, 18, 'Ranh'),
(166, 14, 19, 'Ranh'),
(167, 14, 20, 'Ranh'),
(168, 14, 21, 'Ranh'),
(169, 15, 1, 'Ranh'),
(170, 15, 2, 'Ranh'),
(171, 15, 3, 'Ranh'),
(172, 15, 4, 'Ranh'),
(173, 15, 5, 'Ranh'),
(174, 15, 6, 'Ranh'),
(175, 15, 7, 'Ranh'),
(176, 15, 8, 'Ranh'),
(177, 15, 9, 'Ranh'),
(178, 15, 10, 'Ranh'),
(179, 15, 11, 'Ranh'),
(180, 15, 12, 'Ranh'),
(181, 15, 13, 'Ranh'),
(182, 15, 14, 'Ranh'),
(183, 15, 15, 'Ranh'),
(184, 15, 16, 'Ranh'),
(185, 15, 17, 'Ranh'),
(186, 15, 18, 'Ranh'),
(187, 15, 19, 'Ranh'),
(188, 15, 20, 'Ranh'),
(189, 15, 21, 'Ranh'),
(190, 16, 1, 'Ranh'),
(191, 16, 2, 'Ranh'),
(192, 16, 3, 'Ranh'),
(193, 16, 4, 'Ranh'),
(194, 16, 5, 'Ranh'),
(195, 16, 6, 'Ranh'),
(196, 16, 7, 'Ranh'),
(197, 16, 8, 'Ranh'),
(198, 16, 9, 'Ranh'),
(199, 16, 10, 'Ranh'),
(200, 16, 11, 'Ranh'),
(201, 16, 12, 'Ranh'),
(202, 16, 13, 'Ranh'),
(203, 16, 14, 'Ranh'),
(204, 16, 15, 'Ranh'),
(205, 16, 16, 'Ranh'),
(206, 16, 17, 'Ranh'),
(207, 16, 18, 'Ranh'),
(208, 16, 19, 'Ranh'),
(209, 16, 20, 'Ranh'),
(210, 16, 21, 'Ranh');

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
(1, 'giasu1', 27, 7, NULL),
(2, 'giasu2', 28, 7, NULL),
(3, 'giasu3', 28, 8, NULL),
(4, 'giasu4', 28, 9, NULL);

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

--
-- Dumping data for table `danhsachchatlop`
--

INSERT INTO `danhsachchatlop` (`dsc_id`, `chatId`, `l_id`, `gs_id`, `tk_id`) VALUES
(1, 'lop1', 18, 9, NULL),
(2, 'lop2', 15, 7, NULL),
(3, 'lop3', 14, 7, NULL);

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

--
-- Dumping data for table `giaodich`
--

INSERT INTO `giaodich` (`gd_id`, `tk_id`, `l_id`, `gd_tongtien`, `gd_trangthai`, `gd_ngaytao`, `gd_ngaysua`, `gd_ngayxoa`) VALUES
(1, 28, 14, 1000000, 0, '2021-01-08 03:31:23', '2021-01-08 03:31:23', NULL),
(2, 28, 18, 0, 0, '2021-01-08 16:05:02', '2021-01-08 16:05:02', NULL),
(3, 28, 18, 0, 0, '2021-01-08 16:09:24', '2021-01-08 16:09:24', NULL),
(4, 28, 18, 0, 0, '2021-01-08 16:10:55', '2021-01-08 16:10:55', NULL),
(5, 28, 17, 3500000, 0, '2021-01-08 16:11:25', '2021-01-08 16:11:25', NULL),
(6, 28, 17, 3500000, 0, '2021-01-08 16:12:55', '2021-01-08 16:12:55', NULL);

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
  `gs_mucluong` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
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
(7, 'client/svg/teacher_male.svg', NULL, 'mô tả về gia sư số 1', 'thông tin giới thiệu', 'gia sư 1', 'Nam', NULL, NULL, 'Đại học Cần Thơ - Can tho University, Đường 3/2, Xuân Khánh, Ninh Kiều, Cần Thơ, Vietnam', '[10.0299337,105.7706153]', 400000, NULL, NULL, 27, '2021-01-04 14:57:29', '0000-00-00 00:00:00'),
(8, 'client/svg/teacher_male.svg', NULL, NULL, NULL, 'Gia Sư 2', 'Nam', NULL, NULL, NULL, '[0,0]', 0, NULL, NULL, 30, '2021-01-06 17:47:22', NULL),
(9, 'client/svg/teacher_male.svg', NULL, NULL, NULL, 'Gia Sư 3', 'Nam', NULL, NULL, NULL, '[0,0]', 0, NULL, NULL, 31, '2021-01-06 17:49:33', NULL),
(10, 'client/svg/teacher_male.svg', NULL, NULL, NULL, 'Gia Sư 4', 'Nam', NULL, NULL, NULL, '[0,0]', 0, NULL, NULL, 32, '2021-01-06 17:50:04', NULL),
(11, 'client/svg/teacher_male.svg', NULL, NULL, NULL, 'Gia Sư 5', 'Nam', NULL, NULL, NULL, '[0,0]', 0, NULL, NULL, 33, '2021-01-06 17:50:08', NULL),
(12, 'client/svg/teacher_female.svg', NULL, NULL, NULL, 'Gia Sư 6', 'Nữ', NULL, NULL, NULL, '[0,0]', 0, NULL, NULL, 34, '2021-01-06 17:50:13', NULL),
(13, 'client/svg/teacher_female.svg', NULL, NULL, NULL, 'Gia Sư 7', 'Nữ', NULL, NULL, NULL, '[0,0]', 0, NULL, NULL, 35, '2021-01-06 17:50:16', NULL),
(14, 'client/svg/teacher_female.svg', NULL, NULL, NULL, 'Gia Sư 8', 'Nữ', NULL, NULL, NULL, '[0,0]', 0, NULL, NULL, 36, '2021-01-06 17:50:19', NULL),
(15, 'client/svg/teacher_female.svg', NULL, NULL, NULL, 'Gia Sư 9', 'Nữ', NULL, NULL, NULL, '[0,0]', 0, NULL, NULL, 37, '2021-01-06 17:50:21', NULL),
(16, 'client/svg/teacher_female.svg', NULL, NULL, NULL, 'Gia Sư 10', 'Nữ', NULL, NULL, NULL, '[0,0]', 0, NULL, NULL, 38, '2021-01-06 17:50:24', NULL);

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
(1, 'client/svg/student_male.svg', 'client/img/1108x362.png', 'Học viên 1', NULL, '2000-01-01', 'Nam', NULL, NULL, NULL, 28, '2021-01-04 17:00:54', NULL),
(2, 'client/svg/student_male.svg', 'client/img/1108x362.png', 'Học viên', NULL, '2000-01-01', 'Nam', NULL, NULL, NULL, 39, '2021-01-06 17:59:40', NULL),
(3, 'client/svg/student_male.svg', 'client/img/1108x362.png', 'Học viên', NULL, '2000-01-01', 'Nam', NULL, NULL, NULL, 40, '2021-01-06 17:59:43', NULL),
(4, 'client/svg/student_male.svg', 'client/img/1108x362.png', 'Học viên', NULL, '2000-01-01', 'Nam', NULL, NULL, NULL, 41, '2021-01-06 17:59:45', NULL),
(5, 'client/svg/student_male.svg', 'client/img/1108x362.png', 'Học viên', NULL, '2000-01-01', 'Nam', NULL, NULL, NULL, 42, '2021-01-06 17:59:47', NULL),
(6, 'client/svg/student_female.svg', 'client/img/1108x362.png', 'Học viên', NULL, '2000-01-01', 'Nữ', NULL, NULL, NULL, 43, '2021-01-06 17:59:49', NULL),
(7, 'client/svg/student_female.svg', 'client/img/1108x362.png', 'Học viên', NULL, '2000-01-01', 'Nữ', NULL, NULL, NULL, 44, '2021-01-06 17:59:51', NULL),
(8, 'client/svg/student_female.svg', 'client/img/1108x362.png', 'Học viên', NULL, '2000-01-01', 'Nữ', NULL, NULL, NULL, 45, '2021-01-06 17:59:53', NULL),
(9, 'client/svg/student_female.svg', 'client/img/1108x362.png', 'Học viên', NULL, '2000-01-01', 'Nữ', NULL, NULL, NULL, 46, '2021-01-06 17:59:55', NULL),
(10, 'client/svg/student_female.svg', 'client/img/1108x362.png', 'Học viên 10', NULL, '2000-01-01', 'Nữ', NULL, NULL, NULL, 47, '2021-01-06 17:59:57', NULL);

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
  `l_diachi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(14, '<div class=\"overall-description\">\r\n<div class=\"description-details\">\r\n<div class=\"des-partial\">\r\n<p>Rất nhiều bạn học tiếng Anh v&agrave; đang gặp phải c&aacute;c vấn đề như:</p>\r\n<p>- Kh&ocirc;ng biết n&ecirc;n học tiếng Anh như thế n&agrave;o cho hiệu quả</p>\r\n<p>- Học tiếng Anh đ&atilde; l&acirc;u rồi nhưng chưa thể n&oacute;i ra th&agrave;nh phản xạ c&aacute;c chủ đề th&ocirc;ng dụng trong giao tiếp h&agrave;ng ng&agrave;y cũng như trong c&ocirc;ng việc</p>\r\n<p>- Bối rối v&agrave; kh&ocirc;ng biết n&oacute;i g&igrave; khi giao tiếp với người nước ngo&agrave;i</p>\r\n<p>- Mất tự tin khi sử dụng tiếng Anh trong học tập cũng như c&ocirc;ng việc h&agrave;ng ng&agrave;y</p>\r\n<p>Kh&oacute;a học n&agrave;y gi&uacute;p bạn giải quyết c&aacute;c vấn đề tr&ecirc;n bằng việc ph&aacute;t triển vốn từ vựng v&agrave; ngữ ph&aacute;p trong c&ocirc;ng việc h&agrave;ng ng&agrave;y v&agrave; cho 12 chuy&ecirc;n ng&agrave;nh phổ biến nhất.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"course-benefits\">\r\n<div class=\"benefit-title\">Lợi &iacute;ch từ kho&aacute; học</div>\r\n<div class=\"benefit-items\">\r\n<div class=\"benefit-item\">\r\n<div class=\"benefit-term\">X&acirc;y dựng vốn từ vựng - cấu tr&uacute;c c&acirc;u - mẫu c&acirc;u phong ph&uacute; trong c&aacute;c chủ đề kh&aacute;c nhau nơi c&ocirc;ng sở để tự tin giao tiếp</div>\r\n</div>\r\n<div class=\"benefit-item\">\r\n<div class=\"benefit-term\">C&aacute;ch phỏng vấn - đ&agrave;m ph&aacute;n lương chuy&ecirc;n nghiệp khi ứng tuyển c&ocirc;ng việc</div>\r\n</div>\r\n<div class=\"benefit-item\">\r\n<div class=\"benefit-term\">Cung cấp chủ đề v&agrave; vốn từ cho những c&acirc;u chuyện x&atilde; giao nơi c&ocirc;ng sở</div>\r\n</div>\r\n<div class=\"benefit-item\">\r\n<div class=\"benefit-term\">C&aacute;ch l&agrave;m quen - h&ograve;a nhập m&ocirc;i trường mới tự nhi&ecirc;n, dễ d&agrave;ng</div>\r\n</div>\r\n<div class=\"benefit-item\">\r\n<div class=\"benefit-term\">Những c&ocirc;ng việc thường ng&agrave;y - kỹ năng thiết yếu nơi c&ocirc;ng sở</div>\r\n</div>\r\n<div class=\"benefit-item\">\r\n<div class=\"benefit-term\">Từ vựng chuy&ecirc;n ng&agrave;nh cho 12 chuy&ecirc;n ng&agrave;nh phổ biến nhất</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"course-good-for-area\">\r\n<div class=\"title\">Ph&ugrave; hợp với</div>\r\n<div class=\"item\"><span class=\"term\">Biết tiếng Anh nhưng kh&ocirc;ng giao tiếp được trong c&ocirc;ng việc</span></div>\r\n<div class=\"item\"><span class=\"term\">Muốn ph&aacute;t triển khả năng nghe n&oacute;i v&agrave; phản xạ của m&igrave;nh</span></div>\r\n<div class=\"item\"><span class=\"term\">Muốn giao tiếp tự tin với người nước ngo&agrave;i</span></div>\r\n<div class=\"item\"><span class=\"term\">Muốn giỏi tiếng Anh giao tiếp c&ocirc;ng sở trong một thời gian ngắn</span></div>\r\n</div>', 'Anh văn căn bản A1', 'client/img/class//hoc-tieng-anh-12(1).jpg.jpg', '<div class=\"overall-description\">\r\n<div class=\"description-details\">\r\n<div class=\"des-partial\">\r\n<p>Rất nhiều bạn học tiếng Anh v&agrave; đang gặp phải c&aacute;c vấn đề như:</p>\r\n<p>- Kh&ocirc;ng biết n&ecirc;n học tiếng Anh như thế n&agrave;o cho hiệu quả</p>\r\n<p>- Học tiếng Anh đ&atilde; l&acirc;u rồi nhưng chưa thể n&oacute;i ra th&agrave;nh phản xạ c&aacute;c chủ đề th&ocirc;ng dụng trong giao tiếp h&agrave;ng ng&agrave;y cũng như trong c&ocirc;ng việc</p>\r\n<p>- Bối rối v&agrave; kh&ocirc;ng biết n&oacute;i g&igrave; khi giao tiếp với người nước ngo&agrave;i</p>\r\n<p>- Mất tự tin khi sử dụng tiếng Anh trong học tập cũng như c&ocirc;ng việc h&agrave;ng ng&agrave;y</p>\r\n<p>Kh&oacute;a học n&agrave;y gi&uacute;p bạn giải quyết c&aacute;c vấn đề tr&ecirc;n bằng việc ph&aacute;t triển vốn từ vựng v&agrave; ngữ ph&aacute;p trong c&ocirc;ng việc h&agrave;ng ng&agrave;y v&agrave; cho 12 chuy&ecirc;n ng&agrave;nh phổ biến nhất.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"course-benefits\">\r\n<div class=\"benefit-title\">Lợi &iacute;ch từ kho&aacute; học</div>\r\n<div class=\"benefit-items\">\r\n<div class=\"benefit-item\">\r\n<div class=\"benefit-term\">X&acirc;y dựng vốn từ vựng - cấu tr&uacute;c c&acirc;u - mẫu c&acirc;u phong ph&uacute; trong c&aacute;c chủ đề kh&aacute;c nhau nơi c&ocirc;ng sở để tự tin giao tiếp</div>\r\n</div>\r\n<div class=\"benefit-item\">\r\n<div class=\"benefit-term\">C&aacute;ch phỏng vấn - đ&agrave;m ph&aacute;n lương chuy&ecirc;n nghiệp khi ứng tuyển c&ocirc;ng việc</div>\r\n</div>\r\n<div class=\"benefit-item\">\r\n<div class=\"benefit-term\">Cung cấp chủ đề v&agrave; vốn từ cho những c&acirc;u chuyện x&atilde; giao nơi c&ocirc;ng sở</div>\r\n</div>\r\n<div class=\"benefit-item\">\r\n<div class=\"benefit-term\">C&aacute;ch l&agrave;m quen - h&ograve;a nhập m&ocirc;i trường mới tự nhi&ecirc;n, dễ d&agrave;ng</div>\r\n</div>\r\n<div class=\"benefit-item\">\r\n<div class=\"benefit-term\">Những c&ocirc;ng việc thường ng&agrave;y - kỹ năng thiết yếu nơi c&ocirc;ng sở</div>\r\n</div>\r\n<div class=\"benefit-item\">\r\n<div class=\"benefit-term\">Từ vựng chuy&ecirc;n ng&agrave;nh cho 12 chuy&ecirc;n ng&agrave;nh phổ biến nhất</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"course-good-for-area\">\r\n<div class=\"title\">Ph&ugrave; hợp với</div>\r\n<div class=\"item\"><span class=\"term\">Biết tiếng Anh nhưng kh&ocirc;ng giao tiếp được trong c&ocirc;ng việc</span></div>\r\n<div class=\"item\"><span class=\"term\">Muốn ph&aacute;t triển khả năng nghe n&oacute;i v&agrave; phản xạ của m&igrave;nh</span></div>\r\n<div class=\"item\"><span class=\"term\">Muốn giao tiếp tự tin với người nước ngo&agrave;i</span></div>\r\n<div class=\"item\"><span class=\"term\">Muốn giỏi tiếng Anh giao tiếp c&ocirc;ng sở trong một thời gian ngắn</span></div>\r\n</div>', 1000000, 20, '2021-01-03', '2021-01-17', 10, 'Đại học Cần Thơ - Can tho University, Đường 3/2, Xuân Khánh, Ninh Kiều, Cần Thơ, Vietnam', 7, 23, '2021-01-02 01:45:31', '2021-01-02 01:45:31', NULL),
(15, '<h2>Understanding IELTS</h2>\r\n<p>The British Council&rsquo;s four Understanding IELTS courses will give you a complete guide to everything you need to know as you prepare for the IELTS test.</p>\r\n<p>During our free 3-week IELTS online preparation courses, you find out about each section of the IELTS test &ndash; Reading, Writing, Listening and Speaking.&nbsp;</p>\r\n<p>You&rsquo;ll receive advice on each part of the test from our video tutor and a team of experienced IELTS educators. You can also share your experiences, tips and opinions with other learners.</p>\r\n<h2>When does it start?</h2>\r\n<p><a title=\"Opens in a new tab or window.\" href=\"https://www.futurelearn.com/courses/understanding-ielts-writing?utm_source=Take_IELTS&amp;utm_medium=web&amp;utm_campaign=IELTS_Writing5_Nov20\" target=\"_blank\" rel=\"noopener\"><strong>Understanding IELTS: Writing</strong>&nbsp;</a>&nbsp;and&nbsp;<a title=\"Opens in a new tab or window.\" href=\"https://www.futurelearn.com/courses/understanding-ielts-listening?utm_source=Take_IELTS&amp;utm_medium=web&amp;utm_campaign=IELTS_Listening5_Nov20\" target=\"_blank\" rel=\"noopener\"><strong>Understanding IELTS: Listening</strong>&nbsp;</a>&nbsp;courses will start on&nbsp;<strong>23 November 2020</strong>.</p>\r\n<p>You can register for free throughout the duration of the course and access previous sessions on demand.</p>\r\n<h2>What will I learn?</h2>\r\n<p>By the end of the&nbsp;<strong>Understanding IELTS: Speaking</strong>&nbsp;course, you will learn about:</p>\r\n<ul>\r\n<li>the IELTS Speaking test format</li>\r\n<li>the assessment criteria</li>\r\n<li>giving a talk</li>\r\n<li>what to expect on test day.</li>\r\n</ul>\r\n<p>By the end of the&nbsp;<strong>Understanding IELTS: Reading</strong>&nbsp;course, you will learn about:</p>\r\n<ul>\r\n<li>the IELTS Reading test format</li>\r\n<li>reading strategies</li>\r\n<li>IELTS Reading task types</li>\r\n<li>dealing with vocabulary</li>\r\n<li>what to expect on test day.</li>\r\n</ul>\r\n<p>By the end of the&nbsp;<strong>Understanding IELTS: Listening</strong>&nbsp;course, you will learn about:</p>\r\n<ul>\r\n<li>the IELTS Listening test format</li>\r\n<li>IELTS Listening task types</li>\r\n<li>Listening skills and strategies</li>\r\n<li>texts on unfamiliar topics</li>\r\n<li>what to expect on test day.</li>\r\n</ul>\r\n<p>By the end of the&nbsp;<strong>Understanding IELTS: Writing</strong>&nbsp;course, you will learn about:</p>\r\n<ul>\r\n<li>the IELTS Academic Writing test format</li>\r\n<li>the Academic Writing task types</li>\r\n<li>graphs and charts - language for successful answers</li>\r\n<li>planning, writing and checking an academic essay</li>\r\n<li>assessment criteria</li>\r\n<li>what to expect on test day.</li>\r\n</ul>', 'khoá luyện thi IELTS 5.5 - 6.5', 'client/img/class//maxresdefault.jpg.jpg', '<p>The British Council\'s four Understanding IELTS courses will give you a complete guide to everything you need to know as you prepare for the IELTS test.</p>\r\n<p>During our free three-week IELTS online preparation courses, you find out about each section of the IELTS test &ndash; Reading, Writing, Listening and Speaking.&nbsp;</p>\r\n<p>You\'ll receive advice on each part of the test from our video tutor and a team of experienced IELTS educators. You can also share your experiences, tips and opinions with other learners.</p>', 5000000, 10, '2021-01-17', '2021-03-07', 10, 'Green Space Solution JSC, Đường số 9, Khu đô thị Him Lam, Tân Hưng, District 7, Ho Chi Minh City, Vietnam', 7, 24, '2021-01-06 18:04:38', '2021-01-06 18:04:38', NULL),
(17, '<p><strong>Đối tượng:</strong></p>\r\n<p>+ Học vi&ecirc;n đ&atilde; c&oacute; bằng N2.</p>\r\n<p>+ Học vi&ecirc;n tr&igrave;nh độ tương đương N2, vượt qua kiểm tra đầu v&agrave;o của lớp n&agrave;y.</p>\r\n<p>+ Học vi&ecirc;n kh&ocirc;ng giới hạn về địa điểm, c&oacute; thể đang sinh sống tại Nhật.</p>\r\n<p><strong>&diams;&nbsp;</strong><strong>Thời lượng học:</strong></p>\r\n<p>+ Tổng thời lượng kh&oacute;a 12 th&aacute;ng.</p>\r\n<p>+ 3 buổi/ tuần.</p>\r\n<p>+ 2 tiết/ buổi.</p>\r\n<p>+ 45 ph&uacute;t/tiết học.</p>\r\n<p><strong>&diams;&nbsp;</strong><strong>Học ph&iacute;:</strong><strong>&nbsp;</strong>3.500.000 VNĐ/ 1 th&aacute;ng. Đ&oacute;ng học ph&iacute; từng th&aacute;ng.&nbsp; (tham khảo c&aacute;ch đ&oacute;ng học ph&iacute; Online b&ecirc;n dưới<strong>&nbsp;</strong>)</p>\r\n<p><strong>&diams;&nbsp;</strong><strong>Số lượng:</strong>&nbsp;5-10 học vi&ecirc;n/ lớp.</p>\r\n<p><strong>&diams;&nbsp;</strong><strong>Gi&aacute;o vi&ecirc;n:</strong></p>\r\n<p>+ 1 lớp 2 gi&aacute;o vi&ecirc;n chủ nhiệm.</p>\r\n<p><strong>&diams;&nbsp;</strong><strong>Gi&aacute;o tr&igrave;nh v&agrave; t&agrave;i liệu:</strong></p>\r\n<p>+ Gi&aacute;o tr&igrave;nh được bi&ecirc;n soạn ri&ecirc;ng.</p>\r\n<p>+ Tổng hợp c&aacute;c gi&aacute;o tr&igrave;nh bổ sung c&aacute;c kỹ năng c&ograve;n yếu cho học vi&ecirc;n.</p>\r\n<p>+ T&agrave;i liệu sẽ được cung cấp từng ng&agrave;y, b&agrave;i tập v&agrave; b&agrave;i kiểm tra mỗi ng&agrave;y.</p>', 'KHOÁ HỌC ON​LINE N1', 'client/img/class//1524035192_678975_8e2651.png.png', '<p>Chương tr&igrave;nh học Online được x&acirc;y dựng theo lớp học thực tế, lớp học sử dụng c&aacute;c b&agrave;i giảng theo chương tr&igrave;nh lớp luyện thi N1 của trường ngoại ngữ Việt Nhật. Lớp học sử dụng c&aacute;c phần mềm hỗ trợ, c&ugrave;ng c&aacute;c chức năng tr&ecirc;n website tạo sự tương t&aacute;c tự nhi&ecirc;n với gi&aacute;o vi&ecirc;n, tương t&aacute;c giữa c&aacute;c học vi&ecirc;n, tạo kh&ocirc;ng kh&iacute; lớp học 1 c&aacute;ch tự nhi&ecirc;n v&agrave; thao t&aacute;c đơn giản nhất. Ngo&agrave;i giờ học trực tuyến với gi&aacute;o vi&ecirc;n, học vi&ecirc;n c&ograve;n được cung cấp c&aacute;c b&agrave;i học offline, c&aacute;c b&agrave;i nghe, b&agrave;i trắc nghiệm bổ sung kiến thức.</p>\r\n<p>Một số đặc điểm t&iacute;nh năng cơ bản trong lớp học Online:</p>\r\n<p><strong>Tương t&aacute;c giữa gi&aacute;o&nbsp; vi&ecirc;n v&agrave; học vi&ecirc;n:</strong></p>\r\n<p>+ Học vi&ecirc;n nghe v&agrave; đối thoại trực tiếp với gi&aacute;o vi&ecirc;n v&agrave; c&aacute;c học vi&ecirc;n kh&aacute;c trong lớp học.</p>\r\n<p>+ Gi&aacute;o vi&ecirc;n trực tiếp giảng b&agrave;i, học vi&ecirc;n nghe v&agrave; nh&igrave;n trực tiếp b&agrave;i giảng.</p>\r\n<p>+ B&agrave;i tập trắc nghiệm, c&aacute;c b&agrave;i kiểm tra kiến thức sử dụng trong lớp học được thực hiện nhanh ch&oacute;ng, gi&aacute;o vi&ecirc;n quan s&aacute;t v&agrave; nhận x&eacute;t ngay trong lớp.</p>\r\n<p>+ B&agrave;i tập online tr&ecirc;n website, c&aacute;c b&agrave;i luyện nghe được gi&aacute;o vi&ecirc;n cung cấp cho từng lớp theo ng&agrave;y học.</p>\r\n<p>+ Mỗi buổi học bao gồm gi&aacute;o vi&ecirc;n dạy ch&iacute;nh, 1 trợ giảng, 1 kỹ thuật vi&ecirc;n. Kỹ thuật vi&ecirc;n hỗ trợ học vi&ecirc;n trong qu&aacute; tr&igrave;nh học đảm bảo lớp diễn ra li&ecirc;n tục.</p>\r\n<p><strong>Chuẩn bị v&agrave; thao t&aacute;c trong lớp học:</strong></p>\r\n<p>+ 1 m&aacute;y t&iacute;nh sử dụng hệ điều h&agrave;nh Win7 trở l&ecirc;n hoặc Win XP. M&aacute;y kết nối mạng inter.net</p>\r\n<p>+ C&oacute; Microphone v&agrave; headphone tốt.</p>\r\n<p>+ Học vi&ecirc;n phải học nơi y&ecirc;n tĩnh (nơi đặt m&aacute;y t&iacute;nh). Trường hợp nơi học vi&ecirc;n ồn, sẽ bị kho&aacute; chức năng n&oacute;i từ ph&iacute;a học vi&ecirc;n đ&oacute;.</p>\r\n<p>+ Học vi&ecirc;n Online trước giờ học 5 ph&uacute;t để kiểm tra m&aacute;y t&iacute;nh v&agrave; đường truyền kết nối trước khi v&agrave;o giờ học.</p>\r\n<p>&nbsp;</p>', 3500000, 5, '2021-01-07', '2021-02-07', 12, 'Nhật Ngữ Dũng Mori, Nguyễn Trãi, Khuong Trung, Thanh Xuân, Hanoi, Vietnam', 8, 25, '2021-01-06 18:13:07', '2021-01-06 18:13:07', NULL),
(18, '<h2>Học guitar c&ugrave;ng guitarist Hiển R&acirc;u ho&agrave;n to&agrave;n miễn ph&iacute; trong h&egrave; n&agrave;y, một m&oacute;n qu&agrave; đặc biệt đến từ TYGY Music d&agrave;nh tặng cho cộng đồng y&ecirc;u guitar Việt Nam ...</h2>\r\n<div class=\"pd-social fl\">\r\n<div class=\"fb-like\" data-href=\"https://tongkhonhaccu.com/khoa-hoc-guitar-hien-rau.html\" data-layout=\"button_count\" data-action=\"like\" data-size=\"small\" data-show-faces=\"false\" data-share=\"true\">&nbsp;</div>\r\n</div>\r\n<div>\r\n<h2><strong><img src=\"https://tongkhonhaccu.com/Data/upload/images/Adv/Icon/Arrow.jpg\" alt=\"guitar online gi&aacute; rẻ 1\" />&nbsp;Học Guitar C&ugrave;ng Hiển R&acirc;u Ho&agrave;n To&agrave;n Miễn Ph&iacute;</strong></h2>\r\n<p><strong>*** Thời Gian Nhận Kh&oacute;a Học:&nbsp;</strong>Từ 15/07/2019 -&gt; hết 31/07/2019</p>\r\n<p><strong>*** Link Kh&oacute;a Học&nbsp;:&nbsp;</strong><a href=\"https://tongkhonhaccu.com/khoa-hoc-dan-guitar-dem-hat-hien-rau.html\">https://tongkhonhaccu.com/khoa-hoc-dan-guitar-dem-hat-hien-rau.html&nbsp;</a></p>\r\n<p><strong>*** Trị Gi&aacute; Kh&oacute;a Học&nbsp;:&nbsp;</strong>699,000Vnđ&nbsp;</p>\r\n<p><strong>*** H&igrave;nh Thức Học&nbsp;:&nbsp;</strong>Học tập Online</p>\r\n<h3><strong>*** Điều Kiện Tham Gia Kh&oacute;a Học:</strong></h3>\r\n<p><strong>- Đặt h&agrave;ng&nbsp; 1 trong 2 c&acirc;y đ&agrave;n guitar Morrison / Rosen:&nbsp;</strong>Đ&acirc;y l&agrave; 2 mẫu đ&agrave;n guitar hot nhất&nbsp;thị trường&nbsp;Việt Nam trong 5 năm li&ecirc;n tục, l&agrave; mẫu đ&agrave;n m&agrave; thầy Hiển R&acirc;u đ&atilde; tin d&ugrave;ng v&agrave; giới thiệu cho h&agrave;ng ng&agrave;n bạn học vi&ecirc;n khắp mọi miền đất nước</p>\r\n<p><img src=\"https://tongkhonhaccu.com/Data/upload/images/Adv/Icon/Arrow.jpg\" alt=\"guitar online gi&aacute; rẻ 1\" />&nbsp;<strong>Đặt Mua Guitar Morrison :</strong>&nbsp;<a href=\"https://bit.ly/2O2txLf\" target=\"_blank\" rel=\"noopener\">https://bit.ly/2O2txLf</a></p>\r\n<p><img src=\"https://tongkhonhaccu.com/Data/upload/images/Adv/Icon/Arrow.jpg\" alt=\"guitar online gi&aacute; rẻ 1\" />&nbsp;<strong>Đặt Mua Guitar Rosen&nbsp;:</strong>&nbsp;<a href=\"https://bit.ly/2HCXwUc\" target=\"_blank\" rel=\"noopener\">https://bit.ly/2HCXwUc</a></p>\r\n<p><em><strong>Điều kiện đăng k&yacute; rất đơn giản phải kh&ocirc;ng n&agrave;o? Nhưng chỉ c&oacute; 100 kh&oacute;a học thầy Hiển R&acirc;u tặng miễn ph&iacute; th&ocirc;i, do vậy c&aacute;c bạn phải nhanh ch&acirc;n đặt h&agrave;ng l&ecirc;n nh&eacute;</strong></em></p>\r\n----------------------------------------------------\r\n<h3><strong>*** Về&nbsp;Hiển R&acirc;u:</strong></h3>\r\n<p><strong>1. Guitarist nổi tiếng nhất cộng đồng guitar:&nbsp;</strong>Với hơn 400,000 subcribers tr&ecirc;n youtube, v&agrave; gần 300,000 followers tr&ecirc;n facebook</p>\r\n<p><strong>2. Kinh nghiệm giảng dạy:</strong>&nbsp;</p>\r\n<p>- Đ&atilde; c&oacute; hơn 10 năm học, l&agrave;m việc v&agrave; giảng dạy với đ&agrave;n guitar.</p>\r\n<p>-&nbsp;Đ&atilde; mở h&agrave;ng trăm lớp dạy nhạc cụ cho h&agrave;ng ng&agrave;n học vi&ecirc;n về guitar.</p>\r\n<p><strong>*** Sau Kh&oacute;a Học Bạn Đạt Được G&igrave;? :</strong></p>\r\n<p>- Nắm vững nhạc l&yacute;, c&aacute;ch đọc tọa độ, bấm hợp &acirc;m, tiết tấu, c&aacute;ch rải hợp &acirc;m v&agrave; quạt chả.</p>\r\n<p>- Th&agrave;nh thạo c&aacute;c điệu cơ bản: surf nhanh, surf chậm, disco, blue, ballad, b&aacute;o, fox, valse, bolero, slowrock &hellip;</p>\r\n<p>- Th&agrave;nh thạo c&aacute;ch d&ograve; c&aacute;c nhịp, điệu của một b&agrave;i h&aacute;t, bắt nhịp v&agrave; chọn điệu, bắt t&ocirc;ng cho ca sỹ, đ&aacute;nh intro v&agrave; outtro, search hợp &acirc;m chuẩn &hellip;</p>\r\n</div>', 'khoá học guitar thần thánh', 'client/img/class//tygy-tang-khoa-hoc-guitar-hien-rau.jpg.jpg', '<h2>Học guitar c&ugrave;ng guitarist Hiển R&acirc;u ho&agrave;n to&agrave;n miễn ph&iacute; trong h&egrave; n&agrave;y, một m&oacute;n qu&agrave; đặc biệt đến từ TYGY Music d&agrave;nh tặng cho cộng đồng y&ecirc;u guitar Việt Nam ...</h2>\r\n<div class=\"pd-social fl\">\r\n<div class=\"fb-like\" data-href=\"https://tongkhonhaccu.com/khoa-hoc-guitar-hien-rau.html\" data-layout=\"button_count\" data-action=\"like\" data-size=\"small\" data-show-faces=\"false\" data-share=\"true\">&nbsp;</div>\r\n</div>\r\n<div>\r\n<h2><strong><img src=\"https://tongkhonhaccu.com/Data/upload/images/Adv/Icon/Arrow.jpg\" alt=\"guitar online gi&aacute; rẻ 1\" />&nbsp;Học Guitar C&ugrave;ng Hiển R&acirc;u Ho&agrave;n To&agrave;n Miễn Ph&iacute;</strong></h2>\r\n<p><strong>*** Thời Gian Nhận Kh&oacute;a Học:&nbsp;</strong>Từ 15/07/2019 -&gt; hết 31/07/2019</p>\r\n<p><strong>*** Link Kh&oacute;a Học&nbsp;:&nbsp;</strong><a href=\"https://tongkhonhaccu.com/khoa-hoc-dan-guitar-dem-hat-hien-rau.html\">https://tongkhonhaccu.com/khoa-hoc-dan-guitar-dem-hat-hien-rau.html&nbsp;</a></p>\r\n<p><strong>*** Trị Gi&aacute; Kh&oacute;a Học&nbsp;:&nbsp;</strong>699,000Vnđ&nbsp;</p>\r\n<p><strong>*** H&igrave;nh Thức Học&nbsp;:&nbsp;</strong>Học tập Online</p>\r\n<h3><strong>*** Điều Kiện Tham Gia Kh&oacute;a Học:</strong></h3>\r\n<p><strong>- Đặt h&agrave;ng&nbsp; 1 trong 2 c&acirc;y đ&agrave;n guitar Morrison / Rosen:&nbsp;</strong>Đ&acirc;y l&agrave; 2 mẫu đ&agrave;n guitar hot nhất&nbsp;thị trường&nbsp;Việt Nam trong 5 năm li&ecirc;n tục, l&agrave; mẫu đ&agrave;n m&agrave; thầy Hiển R&acirc;u đ&atilde; tin d&ugrave;ng v&agrave; giới thiệu cho h&agrave;ng ng&agrave;n bạn học vi&ecirc;n khắp mọi miền đất nước</p>\r\n<p><img src=\"https://tongkhonhaccu.com/Data/upload/images/Adv/Icon/Arrow.jpg\" alt=\"guitar online gi&aacute; rẻ 1\" />&nbsp;<strong>Đặt Mua Guitar Morrison :</strong>&nbsp;<a href=\"https://bit.ly/2O2txLf\" target=\"_blank\" rel=\"noopener\">https://bit.ly/2O2txLf</a></p>\r\n<p><img src=\"https://tongkhonhaccu.com/Data/upload/images/Adv/Icon/Arrow.jpg\" alt=\"guitar online gi&aacute; rẻ 1\" />&nbsp;<strong>Đặt Mua Guitar Rosen&nbsp;:</strong>&nbsp;<a href=\"https://bit.ly/2HCXwUc\" target=\"_blank\" rel=\"noopener\">https://bit.ly/2HCXwUc</a></p>\r\n<p><em><strong>Điều kiện đăng k&yacute; rất đơn giản phải kh&ocirc;ng n&agrave;o? Nhưng chỉ c&oacute; 100 kh&oacute;a học thầy Hiển R&acirc;u tặng miễn ph&iacute; th&ocirc;i, do vậy c&aacute;c bạn phải nhanh ch&acirc;n đặt h&agrave;ng l&ecirc;n nh&eacute;</strong></em></p>\r\n----------------------------------------------------\r\n<h3><strong>*** Về&nbsp;Hiển R&acirc;u:</strong></h3>\r\n<p><strong>1. Guitarist nổi tiếng nhất cộng đồng guitar:&nbsp;</strong>Với hơn 400,000 subcribers tr&ecirc;n youtube, v&agrave; gần 300,000 followers tr&ecirc;n facebook</p>\r\n<p><strong>2. Kinh nghiệm giảng dạy:</strong>&nbsp;</p>\r\n<p>- Đ&atilde; c&oacute; hơn 10 năm học, l&agrave;m việc v&agrave; giảng dạy với đ&agrave;n guitar.</p>\r\n<p>-&nbsp;Đ&atilde; mở h&agrave;ng trăm lớp dạy nhạc cụ cho h&agrave;ng ng&agrave;n học vi&ecirc;n về guitar.</p>\r\n<p><strong>*** Sau Kh&oacute;a Học Bạn Đạt Được G&igrave;? :</strong></p>\r\n<p>- Nắm vững nhạc l&yacute;, c&aacute;ch đọc tọa độ, bấm hợp &acirc;m, tiết tấu, c&aacute;ch rải hợp &acirc;m v&agrave; quạt chả.</p>\r\n<p>- Th&agrave;nh thạo c&aacute;c điệu cơ bản: surf nhanh, surf chậm, disco, blue, ballad, b&aacute;o, fox, valse, bolero, slowrock &hellip;</p>\r\n<p>- Th&agrave;nh thạo c&aacute;ch d&ograve; c&aacute;c nhịp, điệu của một b&agrave;i h&aacute;t, bắt nhịp v&agrave; chọn điệu, bắt t&ocirc;ng cho ca sỹ, đ&aacute;nh intro v&agrave; outtro, search hợp &acirc;m chuẩn &hellip;</p>\r\n</div>', 0, 999, '2021-01-08', '2021-03-12', 30, 'đại học cần thơ', 9, 26, '2021-01-08 02:52:07', '2021-01-08 02:52:07', NULL);

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
(14, 6),
(15, 15),
(15, 17),
(15, 19),
(17, 16),
(17, 18),
(17, 20),
(18, 15),
(18, 17),
(18, 19);

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
(20, 'admin', '$2y$10$f9t9aysLa9OA2xLPMpxym.R.E8pspfBNOt9WxehYMgUDzvhe9bPFa', 'Admin', 'Ks9y1tRdBp9WIPv6CmasPWfnIFzpH1LkiS2fI8CUl4SgljVKQSSYnXBaIJY8'),
(27, 'giasu1', '$2y$10$ZR/MBErtzbK2y4SchtFgfO38yE12YBIQYkK6bAV1m1mJcovgHUGgW', 'GiaSu', 'su9SRYfveb15UqCwGEpU1DNvskBpXx4kgHGkTJZOkpHj0AyWUSVGio8wrgwU'),
(28, 'hocvien1', '$2y$10$5063PaRaf4T2zd4Q7eiqm.EeuO/GOyGcAQV0axBfb74zcHsMahtTS', 'HocVien', 'hUjWmd9TFug85CRau6WWvocmbmNQzNaEYA0nUZlkXEJ7SZnJS5ZomH6cazqd'),
(30, 'giasu2', '$2y$10$XM4bJ8gBtTdIK8zFOAw3h.JD82cYZpg/gpW/e8OL6cas2HQH3IOLS', 'GiaSu', 'Xl7FwOvakZDSvu2qbQsIfOHN4ABDM5Q78Am2lCKXQ8YI1ay3Xad2ywplhWCZ'),
(31, 'giasu3', '$2y$10$Nu0F1.v.m6O1ckORUAyb4eQ1y276ZNhXZ4S4etaoU0vFkOrLOMaA6', 'GiaSu', 'RBlwmCwlelR9Q1MLhKVdb6yTrdtDAx7X2wHN4m9J4V2G0GqMLKh8wAtuDO6A'),
(32, 'giasu4', '$2y$10$U1sn0S5pJgg2.8CHWzbHW.afDmjplSlG48GgMuCWiUh.h0maQvXyG', 'GiaSu', NULL),
(33, 'giasu5', '$2y$10$h0oEZcAIWh51jWfpGJdU3OI5lL5mNNLa3vUehZ7fbQM4cnvQSNbam', 'GiaSu', NULL),
(34, 'giasu6', '$2y$10$F6v7VeMe29mxOXE/3CXadO2TDGVctUeoe40/Z/KC2VhWluK.a3mZq', 'GiaSu', NULL),
(35, 'giasu7', '$2y$10$hYLRCeFRI7b8bGnGyl/skeWLfBOJooR5Ry/6P4oL1d9unHA6uwdum', 'GiaSu', NULL),
(36, 'giasu8', '$2y$10$5serKzfzWePoiJ5CU8aXd./shJvF3wBLLu2ZVUnxVUtp7sZiVFcHO', 'GiaSu', NULL),
(37, 'giasu9', '$2y$10$uy4BlRNjqmeoeY9XH6hxYO8kSoXqWIXTOMyhSmk6Rpsm65GoBEKHK', 'GiaSu', NULL),
(38, 'giasu10', '$2y$10$pqv5RP9Il0oqfBRNGvb8su7r8AHdbLXvUlZWypp9MCWoC00LrG0QS', 'GiaSu', NULL),
(39, 'hocvien2', '$2y$10$9al5NK2NZWvDXZfX2JHNy.m765AeEwS2StCKqdqHvaU.7dJL5r4QS', 'HocVien', NULL),
(40, 'hocvien3', '$2y$10$33BOXDtMJ.qrP5hYz/ZOVuBCJ3OsOLi3OyiGsG4HJWfE07sxjWVxK', 'HocVien', NULL),
(41, 'hocvien4', '$2y$10$zX9809j2yDgjL7tIsrZbPOF8PE0qmqrNwQ/GqrMCI.SY9dxgkR0fO', 'HocVien', NULL),
(42, 'hocvien5', '$2y$10$xPt8dVKTfYXHFAj3UKQFWeZW9jNmmcTcdh41F5a50/OlMRItQ9Iii', 'HocVien', NULL),
(43, 'hocvien6', '$2y$10$Jf0ZZGXvzwWtX7LWqSUV7.Y2gZYf6vzUQRcVCAVHoWCpBvX2ns8Ia', 'HocVien', NULL),
(44, 'hocvien7', '$2y$10$sKhYekCh6Q.uG70DP4ezu.kPibsOy6IVflnmwCWvTpP8AIAnjzjpG', 'HocVien', NULL),
(45, 'hocvien8', '$2y$10$vRHWWbcBjpNbGe/bG4jAee4Qu5jouXsluAfSPjpzDYOTH9UqYSr/i', 'HocVien', NULL),
(46, 'hocvien9', '$2y$10$9E32GRO./gtpwsUHaISTkuBPn28JyiPhRqTzIFf9yvr8Wn7TnWFLS', 'HocVien', NULL),
(47, 'hocvien10', '$2y$10$RltET12OD3eA.kmH56d55OvCHd/UpdBK2tcafPIVxI5UGfEXZBrXS', 'HocVien', NULL);

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
(2, 24, NULL, '5.5-Đại học/Cao đẳng', '55-dai-hoccao-dang.2', 'tai-lieu-gia-su/255-dai-hoccao-dang.2', 'tai-lieu-gia-su/7', 7),
(3, 25, NULL, 'N1-Đại học/Cao đẳng', 'n1-dai-hoccao-dang', 'tai-lieu-gia-su/8/n1-dai-hoccao-dang', 'tai-lieu-gia-su/8', 8),
(4, 26, NULL, 'Đàn Guitar-Không phân biệt', 'dan-guitar-khong-phan-biet', 'tai-lieu-gia-su/9/dan-guitar-khong-phan-biet', 'tai-lieu-gia-su/9', 9),
(5, 27, NULL, 'Toán-Cấp 2', 'toan-cap-2', 'tai-lieu-gia-su/10/toan-cap-2', 'tai-lieu-gia-su/10', 10),
(6, 28, NULL, 'Web-Cấp 1', 'web-cap-1', 'tai-lieu-gia-su/11/web-cap-1', 'tai-lieu-gia-su/11', 11),
(7, 29, NULL, 'Android-Đại học/Cao đẳng', 'android-dai-hoccao-dang', 'tai-lieu-gia-su/12/android-dai-hoccao-dang', 'tai-lieu-gia-su/12', 12),
(8, 30, NULL, 'Game-Đại học/Cao đẳng', 'game-dai-hoccao-dang', 'tai-lieu-gia-su/13/game-dai-hoccao-dang', 'tai-lieu-gia-su/13', 13),
(9, 31, NULL, 'Web-Đại học/Cao đẳng', 'web-dai-hoccao-dang', 'tai-lieu-gia-su/14/web-dai-hoccao-dang', 'tai-lieu-gia-su/14', 14),
(10, 32, NULL, 'Web-Đại học/Cao đẳng', 'web-dai-hoccao-dang', 'tai-lieu-gia-su/15/web-dai-hoccao-dang', 'tai-lieu-gia-su/15', 15),
(11, 33, NULL, 'Web-Cấp 3', 'web-cap-3', 'tai-lieu-gia-su/16/web-cap-3', 'tai-lieu-gia-su/16', 16);

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
(1, 1, NULL, 'Học viên 1', '1', 'tai-lieu-hoc-vien/1'),
(2, 2, NULL, 'Học viên', '2', 'tai-lieu-hoc-vien/2'),
(3, 3, NULL, 'Học viên', '3', 'tai-lieu-hoc-vien/3'),
(4, 4, NULL, 'Học viên', '4', 'tai-lieu-hoc-vien/4'),
(5, 5, NULL, 'Học viên', '5', 'tai-lieu-hoc-vien/5'),
(6, 6, NULL, 'Học viên', '6', 'tai-lieu-hoc-vien/6'),
(7, 7, NULL, 'Học viên', '7', 'tai-lieu-hoc-vien/7'),
(8, 8, NULL, 'Học viên', '8', 'tai-lieu-hoc-vien/8'),
(9, 9, NULL, 'Học viên', '9', 'tai-lieu-hoc-vien/9'),
(10, 10, NULL, 'Học viên 10', '10', 'tai-lieu-hoc-vien/10');

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
(16, 14, NULL, 'Anh văn căn bản A1', 'anh-van-can-ban-a1.14', 'tai-lieu-mon-hoc/14/anh-van-can-ban-a1'),
(17, 15, NULL, 'khoá luyện thi IELTS 5.5 - 6.5', 'khoa-luyen-thi-ielts-55-65.15', 'tai-lieu-mon-hoc/15/khoa-luyen-thi-ielts-55-65'),
(19, 17, NULL, 'KHOÁ HỌC ON​LINE N1', 'khoa-hoc-online-n1.17', 'tai-lieu-mon-hoc/17/khoa-hoc-online-n1'),
(20, 18, NULL, 'khoá học guitar thần thánh', 'khoa-hoc-guitar-than-thanh.18', 'tai-lieu-mon-hoc/18/khoa-hoc-guitar-than-thanh');

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
-- Dumping data for table `yeuthich`
--

INSERT INTO `yeuthich` (`gs_id`, `tk_id`) VALUES
(7, 28);

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
  MODIFY `bc_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chitietchuyenmon`
--
ALTER TABLE `chitietchuyenmon`
  MODIFY `ctcm_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `chitietlichday`
--
ALTER TABLE `chitietlichday`
  MODIFY `ctld_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

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
  MODIFY `dsc_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `danhsachchatlop`
--
ALTER TABLE `danhsachchatlop`
  MODIFY `dsc_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doituongnguoihoc`
--
ALTER TABLE `doituongnguoihoc`
  MODIFY `dtnh_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `giaodich`
--
ALTER TABLE `giaodich`
  MODIFY `gd_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `giasu`
--
ALTER TABLE `giasu`
  MODIFY `gs_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `hocvien`
--
ALTER TABLE `hocvien`
  MODIFY `hv_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `l_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  MODIFY `tk_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

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
  MODIFY `tmgs_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `thumuchv`
--
ALTER TABLE `thumuchv`
  MODIFY `tmhv_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `thumuclop`
--
ALTER TABLE `thumuclop`
  MODIFY `tml_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
