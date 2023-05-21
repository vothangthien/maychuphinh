-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th5 20, 2023 lúc 05:48 AM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopping`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `name_admin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('male','female') COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` enum('admin') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'admin',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`admin_id`, `name_admin`, `email`, `password`, `phone`, `gender`, `address`, `type`, `created_at`, `updated_at`) VALUES
(2, 'admin@tgu.edu.vn', 'admin@tgu.edu.vn', 'e10adc3949ba59abbe56e057f20f883e', '0335562746', 'male', 'p1', 'admin', '2023-05-16 02:10:44', '2023-05-16 02:10:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `administration`
--

DROP TABLE IF EXISTS `administration`;
CREATE TABLE IF NOT EXISTS `administration` (
  `adminstration_id` int(11) NOT NULL AUTO_INCREMENT,
  `MSADMIN` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `useradministration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('male','female') COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` enum('admin','user','administration') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'administration',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`adminstration_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `administration`
--

INSERT INTO `administration` (`adminstration_id`, `MSADMIN`, `useradministration`, `email`, `password`, `phone`, `gender`, `address`, `type`, `created_at`, `updated_at`) VALUES
(2, '1', 'tgu@edu.vn', 'tgu@edu.vn', 'e10adc3949ba59abbe56e057f20f883e', '0335562746', 'male', 'p11', 'administration', '2023-05-15 05:20:06', '2023-05-15 05:20:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `info_laptop`
--

DROP TABLE IF EXISTS `info_laptop`;
CREATE TABLE IF NOT EXISTS `info_laptop` (
  `MSP_laptop` int(11) NOT NULL AUTO_INCREMENT,
  `TSP_laptop` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DC_laptop` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_laptop` int(11) NOT NULL,
  `email_laptop` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MSP_laptop`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `info_laptop`
--

INSERT INTO `info_laptop` (`MSP_laptop`, `TSP_laptop`, `DC_laptop`, `phone_laptop`, `email_laptop`) VALUES
(1, 'macbook', 'apbac,p10', 335627466, 'macbook@gmaiil.com.vn'),
(2, 'macbook', 'apbac,p10', 335627466, 'macbook@gmaiil.com.vn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pagehome`
--

DROP TABLE IF EXISTS `pagehome`;
CREATE TABLE IF NOT EXISTS `pagehome` (
  `id_pagehome` int(11) NOT NULL AUTO_INCREMENT,
  `url_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `textcontent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_pagehome`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `nameuser` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('male','female') COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `type` enum('user') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `nameuser`, `email`, `password`, `phone`, `gender`, `address`, `created_at`, `updated_at`, `type`) VALUES
(1, 'user@tgu.edu.vn', 'user@tgu.edu.vn', 'e10adc3949ba59abbe56e057f20f883e', '0335562746', 'male', 'p11', '2023-05-15 04:59:10', '2023-05-15 04:59:10', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
