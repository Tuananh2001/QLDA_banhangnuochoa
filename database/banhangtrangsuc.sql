Create table `LoaiSP`(
`maloai` varchar(20) primary key NOT NULL,
`tenloai` varchar(50),
`Mota` text 
);

Create table `nguoidung`(
`taikhoan` varchar(40) primary key NOT NULL,
`matkhau` varchar(40)
);

Create table `Sanpham`(
`masp` varchar(20) primary key NOT NULL,
`maloai` varchar(20),
`tensp` varchar(100),
`soluong` int,
`gia` float,
`anh` varchar(30),
`mota` text,
foreign key (`maloai`) references `LoaiSP`(`maloai`)
);

Create table `Khachhang` (
`makh` varchar(20) primary key NOT NULL,
`tenkh` varchar(50),
`sdt` varchar(10),
`gioitinh` varchar(10),
`ngaysinh` date,
`diachi` varchar(100),
`email` varchar(50)
);

Create table `Hoadon`(
`mahd` varchar(20) primary key NOT NULL,
`makh` varchar(20),
`maloai` varchar(20),
`masp` varchar(20),
`diachi` varchar(100),
`ngayhd` date,
`trangthai` varchar(30),
`tongtien` int,
foreign key (`makh`) references `Khachhang`(`makh`),
foreign key (`maloai`) references `LoaiSP`(`maloai`),
foreign key (`masp`) references `Sanpham`(`masp`)
);

Create table `Giohang`(
`maGH` varchar(20) primary key NOT NULL,
`makh` varchar(20),
`masp` varchar(20),
`gia` float,
`diachi` varchar(100),
`ngay` date,
foreign key (`makh`) references `Khachhang`(`makh`),
foreign key (`masp`) references `Sanpham`(`masp`)
);

Create table `CtHoadon` (
`id` varchar(20) primary key NOT NULL,
`mahd` varchar(20),
`maloai` varchar(20),
`masp` varchar(20),
`gia` float,
`ngay` date,
foreign key (`mahd`) references `Hoadon`(`mahd`),
foreign key (`maloai`) references `LoaiSP`(`maloai`),
foreign key (`masp`) references `Sanpham`(`masp`)
);

INSERT INTO `loaisp` (`maloai`, `tenloai`, `Mota`) VALUES ('Loai1', 'Nhẫn', 'Nhẫn là một vòng tròn, thường làm bằng kim loại, được đeo như một trang sức ở ngón tay, thỉnh thoảng là ngón chân.Khi người sử dụng nó tôn lên được vẻ đẹp cao quý của quý bà hoặc quý ông \r\n');
INSERT INTO `loaisp` (`maloai`, `tenloai`, `Mota`) VALUES ('Loai2', 'Dây chuyền', 'là một loại trang sức đeo ở cổ . Dây chuyền có thể được làm từ rất nhiều loại chất liệu khác nhau dành cho cả nam và nữ được sử dụng từ lâu trong lịch sử. Đây là một loại trang sức được cấu tạo cơ bản bằng một chuỗi hay một dãi đeo quanh cổ để làm đẹp.');

INSERT INTO `sanpham` (`masp`, `maloai`, `tensp`, `soluong`, `gia`, `anh`, `mota`) VALUES ('SP01', 'Loai2', 'Dây chuyền hình vô cực', '10', '499999', 'day-chuyen-1.jpg', 'Dây chuyền mang phong cách cá tính cho người đeo,là sản phẩm thiết kế dựa theo những chi tiết của các con số vô hạn nó ví cho người đeo nó có sức khỏe vô hạn dồi dào năng lực.'), 
('SP02', 'Loai1', 'Nhẫn Kim cương ', '2', '5000000', 'ring-1.jpg', 'Là chiếc nhẫn mang đắc sắc quý tộc biểu hiện cho sự giàu sang phú quý nó tôn lên vẻ đẹp của người đeo nó phù hợp với những cặp đôi kết hôn và nhà có điều kiện');
INSERT INTO `sanpham` (`masp`, `maloai`, `tensp`, `soluong`, `gia`, `anh`, `mota`) VALUES ('SP03', 'Loai1', 'Nhẫn vàng hoa văn uốn lượn', '5', '1000000', 'ring-4.jpg', 'Là sản phẩm hầu như được ưa chuộng vì giá thành vừa đủ mà lại tôn lên được vẻ đẹp vẻ sang cool ngầu của người đeo được thiết kế theo kiểu phổ biến ');

INSERT INTO `hoadon` (`mahd`, `makh`, `maloai`, `masp`, `diachi`, `ngayhd`, `trangthai`) VALUES ('HD01', 'KH01', 'Loai1', 'SP02', 'Thụy thanh,Thái thụy,Thái bình', '2021-09-23', 'đã giao');

