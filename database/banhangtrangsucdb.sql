-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 12:06 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banhangtrangsucdb`
--
CREATE DATABASE IF NOT EXISTS `banhangtrangsucdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `banhangtrangsucdb`;

-- --------------------------------------------------------

--
-- Table structure for table `cthoadon`
--

DROP TABLE IF EXISTS `cthoadon`;
CREATE TABLE `cthoadon` (
  `id` varchar(20) NOT NULL,
  `mahd` varchar(20) DEFAULT NULL,
  `maloai` varchar(20) DEFAULT NULL,
  `masp` varchar(20) DEFAULT NULL,
  `gia` float DEFAULT NULL,
  `ngay` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

DROP TABLE IF EXISTS `giohang`;
CREATE TABLE `giohang` (
  `maGH` varchar(20) NOT NULL,
  `makh` varchar(20) DEFAULT NULL,
  `masp` varchar(20) DEFAULT NULL,
  `gia` float DEFAULT NULL,
  `diachi` varchar(100) DEFAULT NULL,
  `ngay` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE `hoadon` (
  `mahd` varchar(20) NOT NULL,
  `makh` varchar(20) DEFAULT NULL,
  `maloai` varchar(20) DEFAULT NULL,
  `masp` varchar(20) DEFAULT NULL,
  `diachi` varchar(100) DEFAULT NULL,
  `ngayhd` date DEFAULT NULL,
  `trangthai` varchar(30) DEFAULT NULL,
  `tongtien` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `makh`, `maloai`, `masp`, `diachi`, `ngayhd`, `trangthai`, `tongtien`) VALUES
('HD01', 'KH01', 'Loai1', 'SP02', 'Thụy thanh,Thái thụy,Thái bình', '2021-09-23', 'đã giao', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE `khachhang` (
  `makh` varchar(20) NOT NULL,
  `tenkh` varchar(50) DEFAULT NULL,
  `sdt` varchar(10) DEFAULT NULL,
  `gioitinh` varchar(10) DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `diachi` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `matkhau` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `sdt`, `gioitinh`, `ngaysinh`, `diachi`, `email`, `matkhau`) VALUES
('', 'Nguyễn Hải Anh', '0986506533', 'Nam', '2001-12-22', 'Nam Định', 'HaiAnh@gmail.com', ''),
('KH01', 'Nguyễn Tiến Tuân Anh', '0362831805', 'Nam  ', '2021-10-07', 'Thụy thanh thái thụy thái bình                                                ', 'Nguyentuanepud14@gmail.com', ''),
('KH02', 'Nguyễn Tiến Tuân em', '0362831805', 'Nu', '2021-10-07', 'Thụy thanh, Thái Thụy, Thái Bình                                                ', 'Nguyentuanepud14@gmail.com', ''),
('kh020', 'dffg', '0986506533', 'Nữ', '2021-10-08', '23456787sđfgh', 'Nguyentientuananh2k1@simple.com', ''),
('KH03', 'Nguyễn Tiến Tuấn ANh', '0986506533', 'Nam', '2021-10-05', 'thụ thanh', 'nguyentuanepud14@gmail.com', ''),
('Kh05', 'nguyễn tiến việt anh', '098774722', 'Nam', '2021-10-07', 'Hà nội                                                                                              ', 'nguyentuanepud14@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang1`
--

DROP TABLE IF EXISTS `khachhang1`;
CREATE TABLE `khachhang1` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `gioitinh` varchar(10) NOT NULL,
  `ngaysinh` date NOT NULL,
  `diachi` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `matkhau` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khachhang1`
--

INSERT INTO `khachhang1` (`makh`, `tenkh`, `sdt`, `gioitinh`, `ngaysinh`, `diachi`, `Email`, `matkhau`) VALUES
(1, 'Nguyễn Hải Anh', '986506533', 'Nam', '2001-07-24', 'Nam Định', 'HaiAnh@gmail.com', '123456'),
(2, 'Nguyễn Tiến Tuấn ANh', '0987747', 'Nam', '2004-06-16', 'Hà nội', 'Nguyentientuananh2k1@simple.com', '123456'),
(3, 'nguyễn tiến việt anh', '0986506544', 'Nam', '2012-07-16', 'Hải phòng', 'vietanhskt1@gmail.com', '123456'),
(5, 'Mai hao hậu', '09876506', 'on', '2021-10-13', 'hà nội', 'haohai@gmail.com', '123456'),
(8, 'Phạm Văn Tú', '09864382', 'on', '2007-06-19', 'Thái Bình', 'phamvantu@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(9, 'Nguyễn minh anh', '0986506544', 'on', '2001-10-19', 'Hà nội', 'minhanh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'Đào Hoàng Hải', '0362831805', 'on', '2001-10-17', 'Nam Định', 'hoanghai@gmail.com', '$2y$10$T5yfN9hZvwBhLyRQonPtgegpVtm0otBpf.beknvw5y9'),
(11, 'Mai Kim Anh', '0362831805', 'on', '2004-10-10', 'Hải Phòng', 'Kimanh@gmail.com', '$2y$10$YwoIQnCWbUO/D8LpgOWliuplXUeOsnkJwP79yCyTluf');

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

DROP TABLE IF EXISTS `loaisp`;
CREATE TABLE `loaisp` (
  `maloai` varchar(20) NOT NULL,
  `tenloai` varchar(50) DEFAULT NULL,
  `Mota` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`maloai`, `tenloai`, `Mota`) VALUES
('Loai1', 'Nhẫn', 'Nhẫn là một vòng tròn, thường làm bằng kim loại, được đeo như một trang sức ở ngón tay, thỉnh thoảng là ngón chân.Khi người sử dụng nó tôn lên được vẻ đẹp cao quý của quý bà hoặc quý ông  quý sờ tộc thượng lưu\r\n'),
('Loai2', 'Dây chuyền', 'là một loại trang sức đeo ở cổ . Dây chuyền có thể được làm từ rất nhiều loại chất liệu khác nhau dành cho cả nam và nữ được sử dụng từ lâu trong lịch sử. Đây là một loại trang sức được cấu tạo cơ bản bằng một chuỗi hay một dãi đeo quanh cổ để làm đẹp.'),
('loai3', 'Bông tai', 'Bông taiTitan Kim Tự Tháp  trẻ trung dáng dài  phong cách hàn quốc BTZ33\r\nMột trong những món phụ kiện không thể thiếu đối với phái nữ đó chính là trang sức.Là con gái ai cũng muốn mình luôn xinh đẹp và có sức hút trong mắt người đối diện.\r\nBông tai mạ bạc ngọc trai long lanh xinh xắn thời trang BTZ33 bên ngoài mạ lớp vàng sáng viền tam giác bao bọc viên ngọc trai long lanh kiểu dáng thanh lịch trẻ trung sang trọng và quyến rủ phù hợp bạn gái yêu thích thời trang.\r\nCó thể kết hợp với nhiều loại trang phục, phụ kiện đi kèm tôn nét đẹp tinh tế của phái đẹp.');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

DROP TABLE IF EXISTS `nguoidung`;
CREATE TABLE `nguoidung` (
  `taikhoan` varchar(40) NOT NULL,
  `matkhau` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`taikhoan`, `matkhau`) VALUES
('admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE `sanpham` (
  `masp` varchar(20) NOT NULL,
  `maloai` varchar(20) DEFAULT NULL,
  `tensp` varchar(100) DEFAULT NULL,
  `soluong` int(30) DEFAULT NULL,
  `gia` float DEFAULT NULL,
  `anh` varchar(30) DEFAULT NULL,
  `mota` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `maloai`, `tensp`, `soluong`, `gia`, `anh`, `mota`) VALUES
('SP01', 'loai3', 'Bông tai hình trăng lưỡi liềm', 10, 1500000, 'anhbongtailuoiliem.jpg', 'Một trong những món phụ kiện không thể thiếu đối với phái nữ đó chính là trang sức.Là con gái ai cũng muốn mình luôn xinh đẹp và có sức hút trong mắt người đối diện.\r\nBông tai mạ bạc ngọc trai long lanh xinh xắn thời trang BTZ33 bên ngoài mạ lớp vàng sáng viền tam giác bao bọc viên ngọc trai long lanh kiểu dáng thanh lịch trẻ trung sang trọng và quyến rủ phù hợp bạn gái yêu thích thời trang.\r\nCó thể kết hợp với nhiều loại trang phục, phụ kiện đi kèm tôn nét đẹp tinh tế của phái đẹp.'),
('SP02', 'Loai1', 'Dây chuyền kim tự tháp', 5, 2000000, 'day-chuyen-1.jpg', 'Là sản phẩm hầu như được ưa chuộng vì giá thành vừa đủ mà lại tôn lên được vẻ đẹp vẻ sang cool ngầu của người đeo được thiết kế theo kiểu phổ biến '),
('SP03', 'Loai1', 'Nhẫn vàng hoa văn uốn lượn', 56, 1000000, 'ring-1.jpg', 'Là sản phẩm hầu như được ưa chuộng vì giá thành vừa đủ mà lại tôn lên được vẻ đẹp vẻ sang cool ngầu của người đeo được thiết kế theo kiểu phổ biến '),
('SP04', 'Loai2', 'Vòng cổ mạ vàng', 8, 480000, 'day-chuyen-2.jpg', 'Vòng cổ cho nữ: Đây là loại vòng cổ truyền thống dành cho những ngươi phụ nữ trong nhu cầu làm đẹp, không phân biệt giai cấp, tầng lớp...Nó phù hợp cho tất cả mọi người và vẫn còn nguyên giá trị của mình trong xã hội hiện đại.'),
('SP05', 'Loai1', 'NHẪN CỔ ĐIỂN', 12, 398000, 'ring-5.jpg', 'Đây là kiểu nhẫn được thiết kế theo phong cách cổ điển mới, romantic ở đây đó chính là sự lãng mạn. Được thiết kế với vòng đeo trơn theo lối cổ điển bằng chất liệu vàng ngoại 18k, thêm vào đó là viên kim cương nhỏ được đính vào phần thân chiếc nhẫn tạo ra sự mới mẻ.'),
('SP06', 'Loai1', 'Nhẫn Vàng', 10, 450000, 'ring-4.jpg', 'Vàng là chất liệu làm nhẫn cưới được rất nhiều cặp đôi yêu thích, một là giá thành của nó rẻ hơn, nhưng mặt khác vẫn đảm bảo được chất lượng. Vàng được xem như là của hồi môn cho các đám cưới, màu vàng mang lại sự ấm áp cho người đeo, một cuộc sống hôn nhân ấm áp cho các cặp vợ chồng.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mahd` (`mahd`),
  ADD KEY `maloai` (`maloai`),
  ADD KEY `masp` (`masp`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`maGH`),
  ADD KEY `masp` (`masp`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`),
  ADD KEY `maloai` (`maloai`),
  ADD KEY `masp` (`masp`),
  ADD KEY `makh` (`makh`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Indexes for table `khachhang1`
--
ALTER TABLE `khachhang1`
  ADD PRIMARY KEY (`makh`);

--
-- Indexes for table `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`maloai`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`taikhoan`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `maloai` (`maloai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `khachhang1`
--
ALTER TABLE `khachhang1`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD CONSTRAINT `cthoadon_ibfk_1` FOREIGN KEY (`mahd`) REFERENCES `hoadon` (`mahd`),
  ADD CONSTRAINT `cthoadon_ibfk_2` FOREIGN KEY (`maloai`) REFERENCES `loaisp` (`maloai`),
  ADD CONSTRAINT `cthoadon_ibfk_3` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`);

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`),
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`maloai`) REFERENCES `loaisp` (`maloai`),
  ADD CONSTRAINT `hoadon_ibfk_3` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`maloai`) REFERENCES `loaisp` (`maloai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
