-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2022 lúc 07:20 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `maugiao`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `Cart_id` int(11) NOT NULL,
  `MaKhoanThu` int(11) NOT NULL,
  `sid` varchar(255) NOT NULL,
  `TenKhoanThu` varchar(255) NOT NULL,
  `Gia` varchar(10) NOT NULL,
  `MoTa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`Cart_id`, `MaKhoanThu`, `sid`, `TenKhoanThu`, `Gia`, `MoTa`) VALUES
(19, 5, '04cbohhgh8a9sk7asc06n30g1b', 'Lớp Thể Thao Bơi', '600000', '<p><strong>1 Kh&oacute;a/4 Th&aacute;ng</strong></p>\r\n\r\n<p><strong>1 tuần 3 buổi: thứ 2,4,6</strong></p>\r\n\r\n<p><strong>Giờ: 16h00-17h30</strong></p>\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gioitinh`
--

CREATE TABLE `gioitinh` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenGT` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `gioitinh`
--

INSERT INTO `gioitinh` (`id`, `TenGT`) VALUES
(0, 'Nam'),
(1, 'Nữ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanh`
--

CREATE TABLE `hinhanh` (
  `id` int(11) NOT NULL,
  `Ngay` varchar(255) NOT NULL,
  `MoTa` varchar(200) NOT NULL,
  `Anh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hinhanh`
--

INSERT INTO `hinhanh` (`id`, `Ngay`, `MoTa`, `Anh`) VALUES
(22, '2022-09-30', 'Hoạt động ngoài trời khối lớp Mầm', '15bb12306b.jpg'),
(23, '2022-10-02', 'Hoạt động ngoài trời khối lớp Mầm', '7284aaca1c.jpg'),
(24, '2022-10-30', 'Hoạt động ngoài trời khối lớp Lá', '17ca963e36.jpg'),
(25, '2022-11-01', 'Hoạt động ngoài trời khối lớp Chồi', '826b3eab23.jpg'),
(26, '2022-11-01', 'Hoạt động ngoài trời khối lớp Chồi', '789d893bec.jpeg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `SoHD` int(11) NOT NULL,
  `NgayLap` timestamp NOT NULL DEFAULT current_timestamp(),
  `MaPH` varchar(10) NOT NULL,
  `MaKhoanThu` int(11) NOT NULL,
  `TenKhoanThu` varchar(255) NOT NULL,
  `TongHD` float NOT NULL,
  `Trangthai` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`SoHD`, `NgayLap`, `MaPH`, `MaKhoanThu`, `TenKhoanThu`, `TongHD`, `Trangthai`) VALUES
(20, '2022-12-04 19:02:28', 'PH001', 9, 'Lớp Bóng Đá', 500000, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocsinh`
--

CREATE TABLE `hocsinh` (
  `MaHS` varchar(10) NOT NULL,
  `TenHS` varchar(255) NOT NULL,
  `GioiTinh` int(11) UNSIGNED NOT NULL,
  `DanToc` varchar(20) NOT NULL,
  `NamSinh` date NOT NULL,
  `NgayNhapHoc` date NOT NULL,
  `MaLoaiLop` int(11) NOT NULL,
  `MaLop` int(11) NOT NULL,
  `MaPH` varchar(10) NOT NULL,
  `AnhDaiDien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hocsinh`
--

INSERT INTO `hocsinh` (`MaHS`, `TenHS`, `GioiTinh`, `DanToc`, `NamSinh`, `NgayNhapHoc`, `MaLoaiLop`, `MaLop`, `MaPH`, `AnhDaiDien`) VALUES
('B1805626', 'Đinh Hoàng Huy ', 0, 'Kinh', '2000-11-08', '2021-11-08', 6, 1, 'PH001', 'f7be4d1f58.jpeg'),
('B1805627', 'Nguyễn Vân Uyên', 1, 'Kinh', '2000-11-22', '2021-11-08', 6, 1, 'PH002', '4ca4a351bd.jpg'),
('B1805628', 'Nguyễn Phương Nam', 0, 'Hoa', '2018-11-22', '2021-11-08', 12, 3, 'PH003', 'd6cfd4abb1.jpeg'),
('B1805629', 'Trần Huy Vũ', 0, 'Kinh', '2018-11-22', '2021-11-08', 11, 2, 'PH004', 'b0cca77112.jpg'),
('B1805630', 'Nguyễn Gia Huy', 0, 'Kinh', '2018-11-22', '2021-11-08', 6, 1, 'PH005', '9b67f8d2a4.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoanthu`
--

CREATE TABLE `khoanthu` (
  `MaKhoanThu` int(11) NOT NULL,
  `TenKhoanThu` varchar(30) NOT NULL,
  `Gia` varchar(255) NOT NULL,
  `MoTa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khoanthu`
--

INSERT INTO `khoanthu` (`MaKhoanThu`, `TenKhoanThu`, `Gia`, `MoTa`) VALUES
(2, 'Lớp Năng Khiếu Hát', '900000', '<p><strong>1 Kh&oacute;a/4 Th&aacute;ng</strong></p>\r\n\r\n<p><strong>1 tuần 3 buổi: thứ 2,4,6</strong></p>\r\n\r\n<p><strong>Giờ: 18h00-20h00</strong></p>\r\n'),
(3, 'Lớp Năng Khiếu vẽ', '600000', '<p><strong>1 Kh&oacute;a/4 Th&aacute;ng</strong></p>\r\n\r\n<p><strong>1 tuần 3 buổi: thứ 2,4,6</strong></p>\r\n\r\n<p><strong>Giờ: 18h00-20h00</strong></p>\r\n'),
(4, 'Lớp Năng Khiếu Đàn', '600000', '<p><strong>1 Kh&oacute;a/4 Th&aacute;ng</strong></p>\r\n\r\n<p><strong>1 tuần 3 buổi: thứ 3,5,7</strong></p>\r\n\r\n<p><strong>Giờ: 18h00-20h00</strong></p>\r\n'),
(5, 'Lớp Thể Thao Bơi', '600000', '<p><strong>1 Kh&oacute;a/4 Th&aacute;ng</strong></p>\r\n\r\n<p><strong>1 tuần 3 buổi: thứ 2,4,6</strong></p>\r\n\r\n<p><strong>Giờ: 16h00-17h30</strong></p>\r\n'),
(6, 'Lớp Bóng Rổ', '600000', '<p><strong>1 Kh&oacute;a/4 Th&aacute;ng</strong></p>\r\n\r\n<p><strong>1 tuần 3 buổi: thứ 2,4,6</strong></p>\r\n\r\n<p><strong>Giờ: 16h00-18h00</strong></p>\r\n'),
(7, 'Lớp Cờ Vua', '500000', '<p><strong>1 Kh&oacute;a/4 Th&aacute;ng</strong></p>\r\n\r\n<p><strong>1 tuần 3 buổi: thứ 2,4,6</strong></p>\r\n\r\n<p><strong>Giờ: 18h00-20h00</strong></p>\r\n'),
(8, 'Lớp Võ Vovinam', '500000', '<p><strong>1 Kh&oacute;a/4 Th&aacute;ng</strong></p>\r\n\r\n<p><strong>1 tuần 3 buổi: thứ 3,5,7</strong></p>\r\n\r\n<p><strong>Giờ: 18h00-20h00</strong></p>\r\n'),
(9, 'Lớp Bóng Đá', '500000', '<p><strong>1 Kh&oacute;a/4 Th&aacute;ng</strong></p>\r\n\r\n<p><strong>1 tuần 3 buổi: thứ 3,5,7</strong></p>\r\n\r\n<p><strong>Giờ: 16h00-18h00</strong></p>\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loailop`
--

CREATE TABLE `loailop` (
  `MaLoaiLop` int(11) UNSIGNED NOT NULL,
  `TenLoaiLop` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loailop`
--

INSERT INTO `loailop` (`MaLoaiLop`, `TenLoaiLop`) VALUES
(6, 'Mầm'),
(11, 'Chồi'),
(12, 'Lá');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `MaLop` int(11) NOT NULL,
  `TenLop` varchar(30) NOT NULL,
  `SiSo` int(11) NOT NULL,
  `MaLoaiLop` int(11) UNSIGNED NOT NULL,
  `NamHoc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`MaLop`, `TenLop`, `SiSo`, `MaLoaiLop`, `NamHoc`) VALUES
(1, 'Mầm 01', 4, 6, '2021-2022'),
(2, 'Chồi 01', 1, 11, '2021-2022'),
(3, 'Lá 01', 1, 12, '2021-2022'),
(4, 'Mầm 02', 0, 6, '2021-2022'),
(5, 'Mầm 03', 0, 6, '2021-2022'),
(6, 'Mầm 04', 0, 6, '2021-2022'),
(7, 'Mầm 05', 0, 6, '2021-2022'),
(9, 'Chồi 02', 0, 11, '2021-2022'),
(10, 'Chồi 03', 0, 11, '2021-2022'),
(11, 'Chồi 04', 0, 11, '2021-2022'),
(12, 'Lá 02', 0, 12, '2021-2022'),
(13, 'Lá 03', 0, 12, '2021-2022');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `namhoc`
--

CREATE TABLE `namhoc` (
  `NamHoc` varchar(20) NOT NULL,
  `NgayKhaiGiang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `namhoc`
--

INSERT INTO `namhoc` (`NamHoc`, `NgayKhaiGiang`) VALUES
('2021-2022', '2021-08-20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanhoi`
--

CREATE TABLE `phanhoi` (
  `id` int(11) NOT NULL,
  `Ngay` datetime NOT NULL DEFAULT current_timestamp(),
  `NoiDung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phanhoi`
--

INSERT INTO `phanhoi` (`id`, `Ngay`, `NoiDung`) VALUES
(21, '2022-10-08 02:56:54', 'Trường 10 điểm'),
(22, '2022-10-08 02:58:10', 'Rất hài lòng!'),
(25, '2022-10-08 03:00:38', 'Rất chuyên nghiệp\r\nTuyệt vời!'),
(27, '2022-10-08 03:05:48', 'Trường cần thêm nhiều các khóa học mới'),
(51, '2022-12-05 02:10:42', 'Rất hài lòng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuhuynh`
--

CREATE TABLE `phuhuynh` (
  `MaPH` varchar(10) NOT NULL,
  `TenPH` varchar(255) NOT NULL,
  `NamSinh` date NOT NULL,
  `NgheNghiep` varchar(100) NOT NULL,
  `NoiCongTac` varchar(255) NOT NULL,
  `DiaChiThuongTru` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `MatKhau` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phuhuynh`
--

INSERT INTO `phuhuynh` (`MaPH`, `TenPH`, `NamSinh`, `NgheNghiep`, `NoiCongTac`, `DiaChiThuongTru`, `Email`, `MatKhau`) VALUES
('PH001', 'Dinh Thinh Huy Hoang', '1987-11-09', 'Kĩ Sư', 'Hưng Phú, Ninh Kiều, Cần Thơ', 'Ngã Bảy, Ngã Bảy, Hậu Giang', 'hoang@gmail.com', '1234'),
('PH002', 'Nguyễn Văn A', '1987-06-20', 'Buôn Bán', 'Ô Môn, Cần Thơ', 'Ngã Bảy, Ngã Bảy, Hậu Giang', 'VanA@gmail.com', '1234'),
('PH003', 'Nguyễn Thị Liễu', '1990-11-08', 'Buôn Bán', 'Hưng Phú, Ninh Kiều, Cần Thơ', 'Quận 1, Sài Gòn', 'Lieu@gmail.com', '1234'),
('PH004', 'Trần Hải Huy', '1992-02-12', 'Bác Sĩ', 'BVĐK Cần Thơ, Ninh Kiều, Cần Thơ', 'Lê Anh Xuân, Ninh Kiều, Cần Thơ', 'Huy@gmail.com', '1234'),
('PH005', 'Nguyễn Minh Hoàng', '1993-11-22', 'Giáo Viên', 'Hưng Phú, Ninh Kiều, Cần Thơ', 'Lê Anh Xuân, Ninh Kiều, Cần Thơ', 'hoangnguyen@gmail.com', '1234'),
('PH007', 'Bùi Cẩm Đoan', '1989-12-23', 'Y tá', 'BVĐK Cần Thơ, Ninh Kiều, Cần Thơ', 'Lê Anh Xuân, Ninh Kiều, Cần Thơ', 'CĐoan@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theodoisuckhoe`
--

CREATE TABLE `theodoisuckhoe` (
  `MaSo` int(11) NOT NULL,
  `Ngay` date NOT NULL,
  `MaHS` varchar(10) NOT NULL,
  `ChieuCao` varchar(20) NOT NULL,
  `CanNang` varchar(20) NOT NULL,
  `Mat` varchar(100) NOT NULL,
  `TaiMuiHong` varchar(100) NOT NULL,
  `Rang` varchar(100) NOT NULL,
  `HuyetAp` varchar(100) NOT NULL,
  `GhiChu` varchar(255) NOT NULL,
  `KetLuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `theodoisuckhoe`
--

INSERT INTO `theodoisuckhoe` (`MaSo`, `Ngay`, `MaHS`, `ChieuCao`, `CanNang`, `Mat`, `TaiMuiHong`, `Rang`, `HuyetAp`, `GhiChu`, `KetLuan`) VALUES
(1, '2022-05-14', 'B1805627', '1m62', '49kg', '10/10', 'Bình Thường', '10/10', 'Bình Thường', '', 'Tốt'),
(5, '2022-05-14', 'B1805626', '1m71', '53kg', '7/10', 'Bình Thường', '10/10', 'Bình Thường', '', 'Tốt'),
(15, '2022-05-17', 'B1805628', '72cm', '22kg', '10/10', 'Bình Thường', '10/10', 'Bình Thường', '', 'Cần Tăng Cân');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongbao`
--

CREATE TABLE `thongbao` (
  `id` int(11) NOT NULL,
  `Ngay` varchar(255) NOT NULL,
  `ChuDe` varchar(100) NOT NULL,
  `NoiDung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thongbao`
--

INSERT INTO `thongbao` (`id`, `Ngay`, `ChuDe`, `NoiDung`) VALUES
(2, '04/10/2022', 'Khai Giảng', '<p>K&iacute;nh gửi qu&yacute; phụ huynh, nh&agrave; trường xin th&ocirc;ng b&aacute;o ng&agrave;y nhập học cho năm học 2022-2023 l&agrave; ng&agrave;y 05/09/2023 xin ph&uacute; phụ huynh ch&uacute; &yacute;!</p>\r\n\r\n<p><strong>Tr&acirc;n Trọng!</strong></p'),
(4, '04/10/2022', 'Học Phí', '<p><small><big>K&iacute;nh gửi ph&uacute; phụ huynh, về việc ho&agrave;n th&agrave;nh học ph&iacute; xin qu&yacute; phụ huynh ch&uacute; &yacute; ho&agrave;n th&agrave;nh đ&uacute;ng hạn.</big></small></p>\r\n\r\n<p><strong>Hạn ch&oacute;t: 29/12/2022</strong'),
(8, '04/10/2022', 'Khóa học ngoại khóa', '<p>K&iacute;nh gửi qu&yacute; phụ huynh th&ocirc;ng tin về việc đăng k&yacute; c&aacute;c kh&oacute;a học ngoại kh&oacute;a.&nbsp;Qu&yacute; phụ huynh bắt đầu đăng k&yacute; từ h&ocirc;m nay. C&aacute;c lớp sẽ bắt đầu ng&agrave;y 20/09</p>\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thucdon`
--

CREATE TABLE `thucdon` (
  `id` int(11) NOT NULL,
  `Ngay` date NOT NULL,
  `MaLoaiLop` int(11) UNSIGNED NOT NULL,
  `Sang` varchar(255) NOT NULL,
  `Trua` varchar(255) NOT NULL,
  `Chieu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thucdon`
--

INSERT INTO `thucdon` (`id`, `Ngay`, `MaLoaiLop`, `Sang`, `Trua`, `Chieu`) VALUES
(11, '2022-12-04', 11, 'bánh mì, sữa hộp', 'Cơm trắng, canh chua, thịt kho', 'cháo thịt băm, nước trái cây'),
(12, '2022-12-04', 6, 'Nuôi thịt băm, sữa hộp, bánh mì', 'Canh Chua, Cơm xào', 'Banh cuốn, rau câu, nước hoa quả'),
(14, '2022-12-04', 12, 'Cháo dinh dưỡng, sữa milo', 'Cơm trắng, thịt kho, canh bí', 'Miến Xào, nước ép trái cây'),
(15, '2022-12-05', 6, 'Cháo thịt bò đậu xanh', 'Bún gạo nấu thịt heo bắp cải', 'Mì trứng nấu thịt bò bằm rau củ'),
(16, '2022-12-05', 11, 'Nui nấu tôm, thịt, rau củ', 'Thit bò xào dưa leo, cà chua', 'Cháo cá rong biển'),
(17, '2022-12-05', 12, 'Bí đỏ nấu tôm, sữa', 'Rau dền nấu thịt băm', 'Mướp xào nấm bào ngư, nước trái cây');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Cart_id`),
  ADD KEY `MaKhoanThu` (`MaKhoanThu`);

--
-- Chỉ mục cho bảng `gioitinh`
--
ALTER TABLE `gioitinh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`SoHD`),
  ADD KEY `MaPH` (`MaPH`),
  ADD KEY `MaKhoanThu` (`MaKhoanThu`);

--
-- Chỉ mục cho bảng `hocsinh`
--
ALTER TABLE `hocsinh`
  ADD PRIMARY KEY (`MaHS`),
  ADD KEY `MaPH` (`MaPH`),
  ADD KEY `MaLoaiLop` (`MaLoaiLop`),
  ADD KEY `MaLop` (`MaLop`),
  ADD KEY `GioiTinh` (`GioiTinh`);

--
-- Chỉ mục cho bảng `khoanthu`
--
ALTER TABLE `khoanthu`
  ADD PRIMARY KEY (`MaKhoanThu`);

--
-- Chỉ mục cho bảng `loailop`
--
ALTER TABLE `loailop`
  ADD PRIMARY KEY (`MaLoaiLop`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`MaLop`),
  ADD KEY `FK_Lop_NamHoc` (`NamHoc`),
  ADD KEY `MaLoaiLop` (`MaLoaiLop`);

--
-- Chỉ mục cho bảng `namhoc`
--
ALTER TABLE `namhoc`
  ADD PRIMARY KEY (`NamHoc`);

--
-- Chỉ mục cho bảng `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phuhuynh`
--
ALTER TABLE `phuhuynh`
  ADD PRIMARY KEY (`MaPH`);

--
-- Chỉ mục cho bảng `theodoisuckhoe`
--
ALTER TABLE `theodoisuckhoe`
  ADD PRIMARY KEY (`MaSo`),
  ADD KEY `MaHS` (`MaHS`);

--
-- Chỉ mục cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thucdon`
--
ALTER TABLE `thucdon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `MaLoaiLop` (`MaLoaiLop`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `Cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `SoHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `khoanthu`
--
ALTER TABLE `khoanthu`
  MODIFY `MaKhoanThu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `loailop`
--
ALTER TABLE `loailop`
  MODIFY `MaLoaiLop` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `lop`
--
ALTER TABLE `lop`
  MODIFY `MaLop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `phanhoi`
--
ALTER TABLE `phanhoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `theodoisuckhoe`
--
ALTER TABLE `theodoisuckhoe`
  MODIFY `MaSo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `thucdon`
--
ALTER TABLE `thucdon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`MaKhoanThu`) REFERENCES `khoanthu` (`MaKhoanThu`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaPH`) REFERENCES `phuhuynh` (`MaPH`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`MaKhoanThu`) REFERENCES `khoanthu` (`MaKhoanThu`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `hocsinh`
--
ALTER TABLE `hocsinh`
  ADD CONSTRAINT `hocsinh_ibfk_1` FOREIGN KEY (`MaPH`) REFERENCES `phuhuynh` (`MaPH`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `hocsinh_ibfk_2` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `hocsinh_ibfk_3` FOREIGN KEY (`GioiTinh`) REFERENCES `gioitinh` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `FK_Lop_NamHoc` FOREIGN KEY (`NamHoc`) REFERENCES `namhoc` (`NamHoc`),
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`MaLoaiLop`) REFERENCES `loailop` (`MaLoaiLop`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `theodoisuckhoe`
--
ALTER TABLE `theodoisuckhoe`
  ADD CONSTRAINT `theodoisuckhoe_ibfk_1` FOREIGN KEY (`MaHS`) REFERENCES `hocsinh` (`MaHS`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `thucdon`
--
ALTER TABLE `thucdon`
  ADD CONSTRAINT `thucdon_ibfk_2` FOREIGN KEY (`MaLoaiLop`) REFERENCES `loailop` (`MaLoaiLop`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
