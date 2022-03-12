-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 08, 2022 lúc 06:33 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ozada`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhsach_banner`
--

CREATE TABLE `danhsach_banner` (
  `id_banner` int(11) NOT NULL,
  `file_upload` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhsach_banner`
--

INSERT INTO `danhsach_banner` (`id_banner`, `file_upload`, `created_at`, `updated_at`) VALUES
(21, 'Cho-–-ngu-–-ngay-–-nguyen-–-nhan-–-vi-–-dau-1.jpg', '04-11-2021 11:34:26 PM', ''),
(22, 'hinh-cho-con-de-thuong-22.jpg', '04-11-2021 11:34:51 PM', ''),
(23, 'image01.jpg', '04-11-2021 11:35:00 PM', ''),
(24, '97356662_158904898969021_4121615333532368896_o.jpg', '04-11-2021 11:54:59 PM', ''),
(25, '95703845_155249282667916_767692191177900032_o.jpg', '05-11-2021 12:01:05 AM', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhsach_donhang`
--

CREATE TABLE `danhsach_donhang` (
  `id_dh` int(11) NOT NULL,
  `Donhang` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Bill` varchar(255) NOT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(30) DEFAULT NULL,
  `soluong_sp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhsach_donhang`
--

INSERT INTO `danhsach_donhang` (`id_dh`, `Donhang`, `Name`, `Address`, `Phone`, `Status`, `Bill`, `created_at`, `updated_at`, `soluong_sp`) VALUES
(39, '14/2 9/1 ', 'Văn Nam', 'Hoa Thanh Quế', '0369258741', 'Done', '18432000', '2021-10-30 10:10:43 AM', '2021-10-30 10:11:43 AM', 2),
(40, '14/1 ', 'Phạm Ngọc Long', 'La Khê', '0373295525', 'Shipping', '6500000', '2021-10-30 10:10:44 AM', '2021-10-30 11:10:43 AM', 1),
(63, '12/1 13/1 ', 'Đức Tài', 'Nam Định', '0766995155', 'Done', '7004000', '03-11-2021 10:52:41 AM', '31-10-2021 10:12:43 AM', 2),
(64, '13/1 1/3 ', 'Vũ Thị Thuỳ Linh', 'Thanh Oai', '0838824566', 'Shipping', '365000', '03-11-2021 03:14:20 PM', '31-10-2021 10:13:43 AM', 2),
(65, '11/3 ', 'Văn Hậu', 'Thái Bình', '0984767676', 'Done', '297000', '03-11-2021 03:15:22 PM', '31-10-2021 10:14:43 AM', 1),
(66, '12/3 6/2 ', ' Công Phượng', 'Nghệ An', '0399399323', 'Done', '21453420', '03-11-2021 03:19:49 PM', '31-10-2021 10:15:43 AM', 2),
(67, '9/1 7/2 ', 'Quang Hải', 'Đông Anh - HN', '0778694444', 'Done', '6432000', '04-11-2021 10:44:34 AM', '31-10-2021 10:16:43 AM', 2),
(68, '4/3 ', 'Hùng Dũng', 'Vinhome - Smart City', '0937658888', 'Done', '1500000', '04-11-2021 10:46:18 AM', '16-01-2022 09:52:37 PM', 1),
(69, '12/1 8/6 ', 'Đức Chinh', 'Bắc Ninh', '0936728145', 'Đang xử lý', '7053000', '04-11-2021 03:48:44 PM', NULL, 2),
(70, '7/4 ', 'Trâm Anh', 'Thanh Hoá', '055346705', 'Đang xử lý', '2000000', '04-11-2021 04:04:43 PM', NULL, 1),
(71, '15/1 14/1 ', 'Văn Toản', 'Hải Phòng Hoa Phương đỏ', '0764599696', 'Đang xử lý', '7043210', '04-11-2021 05:00:11 PM', NULL, 2),
(72, '12/1 ', 'Ngọc Long', 'Hà Nội', '0373295525', 'Done', '6789000', '04-11-2021 07:15:44 PM', '25-02-2022 11:33:30 AM', 1),
(73, '15/1 ', 'Khách Hàng', 'Quảng Bình', '0966552184', 'Đang xử lý', '543210', '05-11-2021 03:39:33 PM', NULL, 1),
(74, '9/3 ', 'Phạm Ngọc Long', '13', '0373295525', 'Shipping', '16296000', '16-01-2022 09:51:37 PM', '16-01-2022 09:52:25 PM', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhsach_kh`
--

CREATE TABLE `danhsach_kh` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(10) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhsach_kh`
--

INSERT INTO `danhsach_kh` (`id`, `username`, `password`, `role`, `phone`, `address`, `birthday`, `fullname`, `sex`) VALUES
(1, 'admin', '$2y$10$UqbRfIY40IyhsbPfB5u2seQ7FwXIiMVJvt5O4EGvH7VrpKwOiIP2G', 0, '0373295525', 'Ứng Hoà - HN', '0000-00-00', 'Ngọc Long', 'nam'),
(2, 'user1', '$2y$10$UqbRfIY40IyhsbPfB5u2seQ7FwXIiMVJvt5O4EGvH7VrpKwOiIP2G', 1, '0966552184', 'Quảng Bình', '0000-00-00', 'Khách Hàng', 'Nữ'),
(3, 'user2', '$2y$10$UqbRfIY40IyhsbPfB5u2seQ7FwXIiMVJvt5O4EGvH7VrpKwOiIP2G', 1, '0779898326', 'Afghanistan', '2021-10-01', 'Văn Nam', 'Male'),
(4, 'user3', '$2y$10$UqbRfIY40IyhsbPfB5u2seQ7FwXIiMVJvt5O4EGvH7VrpKwOiIP2G', 1, '0945367218', 'Taliban', '2021-10-07', 'Đức Tài', 'Nu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhsach_sp`
--

CREATE TABLE `danhsach_sp` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Status` int(9) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Top` int(2) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhsach_sp`
--

INSERT INTO `danhsach_sp` (`ID`, `Name`, `Status`, `Price`, `Top`, `Image`) VALUES
(1, 'Dép lào', 1001, '50000', 0, 'img6.jpg'),
(2, 'Quả bóng đá', 2222, '120000', 0, 'img7.jpg'),
(4, 'Iphone 13 promax ', 7749, '500000', 0, 'img1.jpg'),
(5, 'Bóng đèn rạng đông', 1102, '30000', 0, 'img4.jpg'),
(6, 'Lego thông minh', 6789, '543210', 0, 'img2.jpg'),
(7, 'Kính mắt Audi', 1024, '500000', 0, 'img3.jpg'),
(8, 'Dầu gội trị gầu 500ml', 4953, '44000', 0, '92392135_1343129629229267_8321758109643046912_o (2).jpg'),
(9, 'TV samsung smart 4k', 1080, '5432000', 0, 'img8.jpg'),
(10, 'Máy giặt Panasonic tiết kiệm điện', 2222, '6886000', 0, 'img9.jpg'),
(11, 'Bộ đồ cộc tay thời trang', 6789, '99000', 0, 'img10.jpg'),
(12, 'Túi xách Louis Vuiton', 1234, '6789000', 0, 'img11.jpg'),
(13, 'Máy phun sương tạo ẩm mini', 1000, '215000', 0, 'img12.jpg'),
(14, 'Điều hoa Casper thái', 999, '6500000', 0, 'img13.jpg'),
(15, 'Bộ mỹ phẩm cao cấp MAC', 9, '543210', 0, 'img14.jpg'),
(16, 'Vinhomes Ocean-Park', 2222, '5432100000', 0, 'img15.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhsach_banner`
--
ALTER TABLE `danhsach_banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Chỉ mục cho bảng `danhsach_donhang`
--
ALTER TABLE `danhsach_donhang`
  ADD PRIMARY KEY (`id_dh`);

--
-- Chỉ mục cho bảng `danhsach_kh`
--
ALTER TABLE `danhsach_kh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhsach_sp`
--
ALTER TABLE `danhsach_sp`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhsach_banner`
--
ALTER TABLE `danhsach_banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `danhsach_donhang`
--
ALTER TABLE `danhsach_donhang`
  MODIFY `id_dh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT cho bảng `danhsach_kh`
--
ALTER TABLE `danhsach_kh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `danhsach_sp`
--
ALTER TABLE `danhsach_sp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
