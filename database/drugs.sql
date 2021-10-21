-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 08:31 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cnweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `drugs`
--

CREATE TABLE `drugs` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `barcode` varchar(50) NOT NULL,
  `dose` varchar(50) NOT NULL,
  `code` int(11) NOT NULL,
  `cost_price` double NOT NULL,
  `selling_price` double NOT NULL,
  `expiry` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `production_date` datetime NOT NULL,
  `expiration_date` datetime NOT NULL,
  `place` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `drugs`
--

INSERT INTO `drugs` (`id`, `name`, `type`, `barcode`, `dose`, `code`, `cost_price`, `selling_price`, `expiry`, `company_name`, `production_date`, `expiration_date`, `place`, `quantity`) VALUES
(1, 'Thuốc A', 'Loai dau tay', 'a9999', '500ml', 8888, 5000, 7000, 'Con HSD', 'Cty A', '2020-10-21 08:14:54', '2022-10-21 08:14:54', 'Ha Noi', 100),
(2, 'Thuốc A', 'Loai dau chan', 'b9999', '600ml', 9999, 6000, 8000, 'Con HSD', 'Cty B', '2020-01-21 08:14:54', '2022-01-21 08:14:54', 'Nam Dinh', 200),
(3, 'Thuốc C', 'Loai dau tai', 'c9999', '600ml', 1111, 7000, 9000, 'Het HSD', 'Cty C', '2019-08-21 08:14:54', '2021-08-21 08:14:54', 'TP HCM', 300);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
