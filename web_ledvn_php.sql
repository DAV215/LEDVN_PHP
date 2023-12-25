-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3307
-- Thời gian đã tạo: Th12 12, 2023 lúc 07:13 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_ledvn_php`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'anhvu123', '0ede985fd6425b67be7e4e92c63e81f8', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `id_baiviet` int(11) NOT NULL,
  `danhmucbaiviet` varchar(100) NOT NULL,
  `tenbaiviet` varchar(200) NOT NULL,
  `hinhanh` varchar(300) NOT NULL,
  `tomtat` longtext NOT NULL,
  `noidung` longtext NOT NULL,
  `ngayviet` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`id_baiviet`, `danhmucbaiviet`, `tenbaiviet`, `hinhanh`, `tomtat`, `noidung`, `ngayviet`) VALUES
(1, 'Bài viết Neon decor', 'Bài viết Neon Wedding 1', '1701620725_Lincy_nail.jpg', '<p><strong>Neon Wedding - Sự lựa chọn ho&agrave;n hảo</strong></p>\r\n', '<p>Trong việc thiết kế nội thất của qu&aacute;n c&agrave; ph&ecirc;, bạn phải đảm bảo được mọi yếu tố từ trang tr&iacute; trần nh&agrave;, tường, b&agrave;n ghế, tủ, tranh ảnh cũng như bộ nhận diện thương hiệu (đồng phục, logo t&ecirc;n qu&aacute;n, menu, cốc, t&uacute;i...) của qu&aacute;n phải thống nhất với nhau.</p>\r\n\r\n<p>Về nội thất trong thiết kế qu&aacute;n c&agrave; ph&ecirc; cần h&agrave;i h&ograve;a với m&agrave;u sơn tường. Tr&aacute;nh sử dụng gam m&agrave;u n&oacute;ng hoặc m&agrave;u lạnh m&agrave; h&atilde;y kết hợp c&aacute;c m&agrave;u n&agrave;y lại với nhau một c&aacute;ch ph&ugrave; hợp. C&aacute;i n&agrave;y bạn n&ecirc;n tham khảo &yacute; kiến của c&aacute;c nh&agrave; thiết kế để c&oacute; được &yacute; tưởng độc đ&aacute;o nhất.</p>\r\n\r\n<p>Tr&aacute;nh việc chọn nội thất, đồng phục, menu, sơn tường,...mỗi thứ một m&agrave;u khiến mọi thứ kh&ocirc;ng li&ecirc;n kết v&agrave; bị rối mắt. Nếu một người c&oacute; thẩm mỹ nh&igrave;n v&agrave;o sẽ thấy bạn cũng như qu&aacute;n c&agrave; ph&ecirc; của bạn thiếu chuy&ecirc;n nghiệp.</p>\r\n\r\n<p>Ngo&agrave;i ra, khi trang trí quán cafe bạn cần lưu &yacute; đến việc chọn chất liệu b&agrave;n ghế hợp với phong c&aacute;ch qu&aacute;n cũng như diện t&iacute;ch của qu&aacute;n. Nếu qu&aacute;n qu&aacute; nhỏ hẹp, bạn c&oacute; thể gian lận diện t&iacute;ch cho qu&aacute;n bằng c&aacute;ch sử dụng tranh tường 3D đơn giản nhưng đầy t&iacute;nh nghệ thuật.</p>\r\n\r\n<p><img alt=\"\" src=\"https://scontent.fsgn2-7.fna.fbcdn.net/v/t39.30808-6/341823931_101416742938687_4091076106893922033_n.png?stp=dst-png_p600x600&amp;_nc_cat=109&amp;ccb=1-7&amp;_nc_sid=783fdb&amp;_nc_ohc=S8N28F4Y0AIAX_iO8sl&amp;_nc_ht=scontent.fsgn2-7.fna&amp;oh=00_AfCJdPbq4jqxyuoA8TtumhKCjnT57RGiYGAGUYwl6YqCQQ&amp;oe=656F80B2\" style=\"float:left; height:266px; width:700px\" /></p>\r\n', '2023-12-03 23:25:25'),
(3, 'Bài viết Neon Wedding', 'Những mẫu Neon sang trọng trong decor tiệc cưới.', '1701596355_TX.jpg', '<p><strong>Những mẫu Neon sang trọng trong decor tiệc cưới.&nbsp;</strong></p>\r\n\r\n<p>C&aacute;ch chọn đ&egrave;n Neon ph&ugrave; hợp với concept của m&igrave;nh.</p>\r\n', '<p><span style=\"font-size:16px\">Tiệc cưới kh&ocirc;ng chỉ l&agrave; dịp quan trọng để đ&aacute;nh dấu t&igrave;nh y&ecirc;u đẹp đẽ, m&agrave; c&ograve;n l&agrave; cơ hội để thể hiện sự s&aacute;ng tạo v&agrave; c&aacute; t&iacute;nh. Trong những năm gần đ&acirc;y, đ&egrave;n LED Neon đ&atilde; trở th&agrave;nh xu hướng trang tr&iacute; kh&ocirc;ng thể bỏ qua, mang lại kh&ocirc;ng kh&iacute; ấn tượng v&agrave; độc đ&aacute;o cho kh&ocirc;ng gian tiệc cưới. H&atilde;y c&ugrave;ng kh&aacute;m ph&aacute; tại sao đ&egrave;n LED Neon l&agrave; lựa chọn ho&agrave;n hảo cho việc trang tr&iacute; tiệc cưới của bạn.</span></p>\r\n\r\n<p><span style=\"font-size:18px\"><strong>1. Lợi &iacute;ch của Đ&egrave;n LED Neon trong Tiệc Cưới:</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Đ&egrave;n LED Neon kh&ocirc;ng chỉ đẹp mắt m&agrave; c&ograve;n mang lại nhiều lợi &iacute;ch. Sự linh hoạt trong thiết kế, khả năng đa dạng về h&igrave;nh d&aacute;ng l&agrave; những điểm thu h&uacute;t của loại đ&egrave;n n&agrave;y.</span></p>\r\n\r\n<p><span style=\"font-size:18px\"><strong>2. &Yacute; Tưởng S&aacute;ng Tạo cho Trang Tr&iacute; Tiệc Cưới:</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">C&ugrave;ng nhau kh&aacute;m ph&aacute; những &yacute; tưởng s&aacute;ng tạo với đ&egrave;n LED Neon. Từ t&ecirc;n cặp đ&ocirc;i, c&acirc;u n&oacute;i y&ecirc;u thương cho đến những h&igrave;nh ảnh tượng trưng, đ&egrave;n LED Neon c&oacute; thể tạo n&ecirc;n điểm nhấn l&atilde;ng mạn v&agrave; c&aacute; nh&acirc;n cho kh&ocirc;ng gian tiệc cưới.</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><img alt=\"\" class=\"baiviet_img\" src=\"https://i.postimg.cc/Kj1z117W/1701242650-DUCTAN-KHANHLINH.jpg\" style=\"border-radius:20px; height:394px; width:500px\" /></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><strong>3. L&agrave;m Thế N&agrave;o để Chọn Đ&uacute;ng Đ&egrave;n LED Neon cho Tiệc Cưới:</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Hướng dẫn chi tiết về c&aacute;ch lựa chọn đ&egrave;n LED Neon ph&ugrave; hợp với chủ đề v&agrave; kh&ocirc;ng gian của tiệc cưới. Bạn sẽ t&igrave;m hiểu về k&iacute;ch thước, m&agrave;u sắc, v&agrave; loại đ&egrave;n ph&ugrave; hợp nhất cho sự kiện của m&igrave;nh.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">C&oacute; 4 thiết kế nổi bật cho Led neon Wedding.</span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\"><strong>Led neon chữ lồng:</strong></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:40px\"><span style=\"font-size:16px\"><img alt=\"\" class=\"baiviet_img\" src=\"https://i.postimg.cc/v8K739Kc/1701245764-TX.jpg\" style=\"border-radius:20px; width:400px\" /></span></p>\r\n\r\n<p style=\"margin-left:40px\"><span style=\"font-size:16px\"><img alt=\"\" class=\"baiviet_img\" src=\"https://i.postimg.cc/VNLQ43S9/1700736923-G.jpg\" style=\"border-radius:20px; width:400px\" /></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\"><strong>T&ecirc;n của d&acirc;u rể:</strong></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:40px\"><span style=\"font-size:16px\"><img alt=\"\" class=\"baiviet_img\" src=\"https://i.postimg.cc/tCwjqrMp/1700757902-Phat-Tam700.jpg\" style=\"border-radius:20px; width:400px\" /></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\"><strong>Full t&ecirc;n d&acirc;u rể cho backdrop:</strong></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:40px\"><span style=\"font-size:16px\"><img alt=\"\" class=\"baiviet_img\" src=\"https://i.postimg.cc/FF0WdTzh/1701240920-Hoangtri-Kim-Nguyen.jpg\" style=\"border-radius:20px; width:400px\" /></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\"><strong>Full t&ecirc;n d&acirc;u rể cho s&acirc;n khấu:</strong></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:40px\"><span style=\"font-size:16px\"><strong><img alt=\"\" class=\"baiviet_img\" src=\"https://i.postimg.cc/Kj1z117W/1701242650-DUCTAN-KHANHLINH.jpg\" style=\"border-radius:20px; width:400px\" /></strong></span></p>\r\n\r\n<p style=\"margin-left:40px\"><span style=\"font-size:16px\"><strong><img alt=\"\" class=\"baiviet_img\" src=\"https://i.postimg.cc/6Q7z90FJ/1701242770-DUCTRONG-QUYNHPHUONG.jpg\" style=\"border-radius:20px; width:400px\" /></strong></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\"><strong>Neon lắp gh&eacute;p tận dụng cho nh&agrave; trai, nh&agrave; g&aacute;i, nh&agrave; h&agrave;ng:</strong></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:40px\"><span style=\"font-size:16px\"><img alt=\"\" class=\"baiviet_img\" src=\"https://i.postimg.cc/2yFN0mxw/1701242267-QUOCHUNG-KIMNGAN.jpg\" style=\"border-radius:20px; width:400px\" /></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><strong>4. Trải Nghiệm Của Những Cặp Đ&ocirc;i:</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Nghe những c&acirc;u chuyện thực tế về việc sử dụng đ&egrave;n LED Neon trong tiệc cưới. C&aacute;c cặp đ&ocirc;i chia sẻ về cảm x&uacute;c, &yacute; nghĩa, v&agrave; những khoảnh khắc đặc biệt m&agrave; đ&egrave;n LED Neon đ&atilde; tạo n&ecirc;n trong ng&agrave;y trọng đại của họ.</span></p>\r\n\r\n<p><span style=\"font-size:18px\"><strong>5. Tại Sao Đ&egrave;n LED Neon L&agrave; Xu Hướng Trang Tr&iacute; Nổi Bật:</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Tr&ecirc;n tất cả, đ&egrave;n LED Neon kh&ocirc;ng chỉ l&agrave; một phụ kiện trang tr&iacute;, m&agrave; c&ograve;n l&agrave; nguồn cảm hứng v&agrave; &yacute; nghĩa cho ng&agrave;y cưới của bạn. H&atilde;y để &aacute;nh s&aacute;ng của đ&egrave;n LED Neon l&agrave;m nổi bật kh&ocirc;ng gian v&agrave; kỷ niệm của bạn trở n&ecirc;n đặc biệt. H&atilde;y kh&aacute;m ph&aacute; thế giới s&aacute;ng tạo của đ&egrave;n LED Neon v&agrave; tạo n&ecirc;n một kỷ niệm đẹp đẽ cho ng&agrave;y trọng đại của bạn.</span></p>\r\n', '2023-12-03 18:33:02'),
(4, 'Bài viết bảng hiệu neon mặt mica decal', '', '1702402805_Changa.jpg', '<p>Bảng hiệu LED Neon mặt mica d&aacute;n decal, một lựa chọn ho&agrave;n hảo để tạo điểm nhấn s&aacute;ng tạo v&agrave; độc đ&aacute;o cho thương hiệu của bạn.</p>\r\n', '<p><strong>&nbsp;Bảng Hiệu LED Neon Mặt Mica - Sự Kết Hợp Tinh Tế Giữa &Aacute;nh S&aacute;ng Độc Đ&aacute;o v&agrave; Thiết Kế Chất Lượng&nbsp;</strong></p>\r\n\r\n<p>Ch&agrave;o mừng bạn đến với giới thiệu ngắn gọn về bảng hiệu LED Neon mặt mica d&aacute;n decal, một lựa chọn ho&agrave;n hảo để tạo điểm nhấn s&aacute;ng tạo v&agrave; độc đ&aacute;o cho thương hiệu của bạn.</p>\r\n\r\n<p>&nbsp;Tại Sao Chọn Bảng Hiệu LED Neon Mặt Mica D&aacute;n Decal của Ch&uacute;ng T&ocirc;i?&nbsp;</p>\r\n\r\n<p><strong>1. &nbsp;&Aacute;nh S&aacute;ng LED Neon Độc Đ&aacute;o:&nbsp;</strong><br />\r\n&nbsp; &nbsp;Kết hợp &aacute;nh s&aacute;ng LED Neon tinh tế với mặt mica chất lượng, bảng hiệu của ch&uacute;ng t&ocirc;i tạo n&ecirc;n hiệu ứng s&aacute;ng độc đ&aacute;o v&agrave; thu h&uacute;t mọi &aacute;nh nh&igrave;n.</p>\r\n\r\n<p><img alt=\"\" src=\"https://drive.google.com/file/d/1RA_AAgUmDY17twB9yW0yL1SShYaBWrov/view?usp=sharing\" /><img alt=\"\" src=\"https://drive.google.com/file/d/1RA_AAgUmDY17twB9yW0yL1SShYaBWrov/view?usp=sharing\" /><img alt=\"\" src=\"https://drive.google.com/file/d/1RA_AAgUmDY17twB9yW0yL1SShYaBWrov/view\" /><img alt=\"\" class=\"baiviet_img\" src=\"https://i.postimg.cc/vBpXVQsf/Changa.jpg\" style=\"height:800px; width:1067px\" /></p>\r\n\r\n<p><strong>2. &nbsp;Mặt Mica D&aacute;n Decal T&ugrave;y Chỉnh:&nbsp;</strong><br />\r\n&nbsp; &nbsp;Ch&uacute;ng t&ocirc;i cung cấp dịch vụ d&aacute;n decal t&ugrave;y chỉnh, cho ph&eacute;p bạn thể hiện đ&uacute;ng phong c&aacute;ch v&agrave; th&ocirc;ng điệp của doanh nghiệp.</p>\r\n\r\n<p><strong>3. &nbsp;Chất Liệu Mica Chất Lượng Cao:&nbsp;</strong><br />\r\n&nbsp; &nbsp;Sử dụng mica chất lượng cao, bảng hiệu của ch&uacute;ng t&ocirc;i đảm bảo độ bền, độ trong suốt v&agrave; khả năng chịu lực tốt.</p>\r\n\r\n<p><strong>4. &nbsp;SEO-Friendly:&nbsp;</strong><br />\r\n&nbsp; &nbsp;Bảng hiệu được tối ưu h&oacute;a với từ kh&oacute;a li&ecirc;n quan để đảm bảo sự xuất hiện trực tuyến cao, gi&uacute;p tăng cường tiềm năng kh&aacute;ch h&agrave;ng qua c&aacute;c c&ocirc;ng cụ t&igrave;m kiếm.</p>\r\n\r\n<p><strong>5. &nbsp;Dễ Lắp Đặt v&agrave; Di Chuyển:&nbsp;</strong><br />\r\n&nbsp; &nbsp;Thiết kế nhẹ gi&uacute;p qu&aacute; tr&igrave;nh lắp đặt v&agrave; di chuyển linh hoạt, tiết kiệm thời gian v&agrave; chi ph&iacute;.</p>\r\n\r\n<p><strong>6. &nbsp;Ph&ugrave; Hợp Mọi Nhu Cầu Trang Tr&iacute;:&nbsp;</strong><br />\r\n&nbsp; &nbsp;T&ugrave;y chọn k&iacute;ch thước v&agrave; m&agrave;u sắc đa dạng gi&uacute;p bảng hiệu ph&ugrave; hợp với mọi kh&ocirc;ng gian v&agrave; nhu cầu trang tr&iacute;.</p>\r\n\r\n<p>Chọn bảng hiệu LED Neon mặt mica d&aacute;n decal của ch&uacute;ng t&ocirc;i để tạo n&ecirc;n bức tranh s&aacute;ng tạo v&agrave; tăng cường hiệu quả quảng c&aacute;o của doanh nghiệp bạn. Sự độc đ&aacute;o v&agrave; chất lượng sẽ khiến thương hiệu của bạn nổi bật trong đ&aacute;m đ&ocirc;ng.</p>\r\n', '2023-12-13 00:44:00'),
(5, 'Bài viết bảng hiệu mica sáng mặt', '', '1702403026_Khoi.jpg', '<p><strong>Bảng Hiệu Mica S&aacute;ng Mặt - Chất Lượng v&agrave; Tinh Tế cho Mọi Doanh Nghiệp</strong></p>\r\n', '<p><strong>Bảng Hiệu Mica S&aacute;ng Mặt - Chất Lượng v&agrave; Tinh Tế cho Mọi Doanh Nghiệp</strong></p>\r\n\r\n<p>Giải ph&aacute;p quảng c&aacute;o hiệu quả v&agrave; chuy&ecirc;n nghiệp cho doanh nghiệp của bạn.</p>\r\n\r\n<p><img alt=\"\" class=\"baiviet_img\" src=\"https://i.postimg.cc/rmnG1q2Q/Khoi.jpg\" style=\"height:769px; width:1280px\" /></p>\r\n\r\n<p><strong>1. Thiết Kế Tinh Tế:</strong><br />\r\n&nbsp; &nbsp;Bảng hiệu mica s&aacute;ng mặt của ch&uacute;ng t&ocirc;i được thiết kế với sự tinh tế v&agrave; chất lượng, tạo n&ecirc;n ấn tượng mạnh mẽ v&agrave; chuy&ecirc;n nghiệp cho thương hiệu của bạn.</p>\r\n\r\n<p><strong>2. &Aacute;nh S&aacute;ng Đồng Đều:</strong><br />\r\n&nbsp; &nbsp;&Aacute;nh s&aacute;ng s&aacute;ng mặt gi&uacute;p bảng hiệu nổi bật v&agrave; dễ nhận biết, thu h&uacute;t sự ch&uacute; &yacute; của kh&aacute;ch h&agrave;ng ngay từ xa.</p>\r\n\r\n<p><img alt=\"\" class=\"baiviet_img\" src=\"https://i.postimg.cc/PrzWybHC/May.jpg\" style=\"height:649px; width:1280px\" /></p>\r\n\r\n<p><strong>3. Chất Liệu Mica Chất Lượng Cao:</strong><br />\r\n&nbsp; &nbsp;Sử dụng mica chất lượng cao, bảng hiệu của ch&uacute;ng t&ocirc;i đảm bảo độ bền, độ trong suốt v&agrave; khả năng chịu lực tốt.</p>\r\n\r\n<p><strong>4. Th&iacute;ch Ứng Mọi Nhu Cầu Quảng C&aacute;o:</strong><br />\r\n&nbsp; &nbsp;T&ugrave;y chọn k&iacute;ch thước, m&agrave;u sắc, v&agrave; thiết kế linh hoạt gi&uacute;p bảng hiệu phản &aacute;nh đ&uacute;ng với bản chất v&agrave; gi&aacute; trị của doanh nghiệp.</p>\r\n\r\n<p><strong>5. SEO-Friendly:</strong><br />\r\n&nbsp; &nbsp;Bảng hiệu mica s&aacute;ng mặt được tối ưu h&oacute;a với c&aacute;c từ kh&oacute;a li&ecirc;n quan để đảm bảo sự hiện diện trực tuyến tốt, gi&uacute;p thu h&uacute;t kh&aacute;ch h&agrave;ng qua c&aacute;c c&ocirc;ng cụ t&igrave;m kiếm.</p>\r\n\r\n<p><strong>6. Lắp Đặt Dễ D&agrave;ng:</strong><br />\r\n&nbsp; &nbsp;Thiết kế nhẹ gi&uacute;p qu&aacute; tr&igrave;nh lắp đặt nhanh ch&oacute;ng v&agrave; thuận lợi, giảm chi ph&iacute; v&agrave; thời gian.</p>\r\n\r\n<p>Duyệt qua c&aacute;c mẫu bảng hiệu mica s&aacute;ng mặt của ch&uacute;ng t&ocirc;i để t&igrave;m ra sự lựa chọn ho&agrave;n hảo, mang lại gi&aacute; trị l&acirc;u d&agrave;i cho sự th&agrave;nh c&ocirc;ng của doanh nghiệp bạn. Ch&uacute;ng t&ocirc;i cam kết đem đến giải ph&aacute;p quảng c&aacute;o chất lượng nhất cho thương hiệu của bạn.</p>\r\n', '2023-12-13 00:43:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `cart_date` datetime NOT NULL,
  `cart_code` varchar(10) NOT NULL,
  `id_user` int(15) NOT NULL,
  `cart_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `cart_date`, `cart_code`, `id_user`, `cart_status`) VALUES
(13, '2023-12-02 22:37:27', '7983', 2, 1),
(14, '2023-12-12 22:41:04', '2322', 18, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cartdetail`
--

CREATE TABLE `tbl_cartdetail` (
  `id_cart_detail` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `id_sanpham` varchar(100) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cartdetail`
--

INSERT INTO `tbl_cartdetail` (`id_cart_detail`, `code_cart`, `id_sanpham`, `soluong`) VALUES
(1, '2535', '50', 1),
(2, '9776', '50', 1),
(3, '9776', '39', 3),
(4, '579', '48', 2),
(5, '579', '46', 2),
(6, '7932', '50', 1),
(7, '2350', '50', 2),
(8, '9842', '50', 1),
(9, '9842', '48', 1),
(10, '8577', '50', 1),
(11, '8577', '48', 1),
(12, '7983', '46', 1),
(13, '2322', '1', 5),
(14, '2322', '39', 3),
(15, '2322', '43', 2),
(16, '2322', '40', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(1, 'LedneonWedding', 1),
(2, 'LedneonDecor', 2),
(8, 'Banghieu', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmucbaiviet`
--

CREATE TABLE `tbl_danhmucbaiviet` (
  `id_danhmucbaiviet` int(11) NOT NULL,
  `tendanhmuc_baiviet` varchar(200) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmucbaiviet`
--

INSERT INTO `tbl_danhmucbaiviet` (`id_danhmucbaiviet`, `tendanhmuc_baiviet`, `thutu`) VALUES
(2, 'Bài viết Neon Wedding', 1),
(3, 'Bài viết Neon decor', 2),
(4, 'Bài viết bảng hiệu mica sáng mặt', 3),
(5, 'Bài viết bảng hiệu neon mặt mica decal', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `danhmucsanpham` varchar(100) NOT NULL,
  `tensp` varchar(250) NOT NULL,
  `kichthuoc` varchar(50) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giasp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `tomtat` tinytext NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `noibat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `danhmucsanpham`, `tensp`, `kichthuoc`, `masp`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `noibat`) VALUES
(1, 'LedneonWedding', 'Neon Wedding Full tên dâu rể', '1m2*90cm', 'NW_F_12090', '1150000                             ', 3, '1700730959_LEKHANH.jpg', '<p>Led neon full t&ecirc;n d&acirc;u rể, k&iacute;ch thước cực to, ph&ugrave; hợp với s&acirc;n khấu.</p>\r\n', '<p>.</p>\r\n\r\n<p><strong>Tạo N&eacute;t Độc Đ&aacute;o v&agrave; L&atilde;ng Mạn</strong></p>\r\n\r\n<p><strong>1. Thiết Kế T&ugrave;y Chỉnh:</strong><br />\r\n&nbsp; &nbsp;Ch&uacute;ng t&ocirc;i cung cấp dịch vụ thiết kế t&ugrave;y chỉnh, cho ph&eacute;p bạn &aacute;p dụng t&ecirc;n c&ocirc; d&acirc;u, ch&uacute; rể hoặc c&aacute;c từ ngữ &yacute; nghĩa kh&aacute;c. Sự c&aacute; nh&acirc;n h&oacute;a n&agrave;y tạo n&ecirc;n điểm nhấn ri&ecirc;ng biệt cho đ&aacute;m cưới của bạn.</p>\r\n\r\n<p><strong>2. &Aacute;nh S&aacute;ng LED Ấm &Aacute;p:</strong><br />\r\n&nbsp; &nbsp;Đ&egrave;n LED neon tạo ra &aacute;nh s&aacute;ng ấm &aacute;p, tạo kh&ocirc;ng kh&iacute; l&atilde;ng mạn v&agrave; tuyệt vời cho bữa tiệc cưới. &Aacute;nh s&aacute;ng mềm mại tạo n&ecirc;n bức tranh l&ocirc;i cuốn cho ng&agrave;y trọng đại.</p>\r\n\r\n<p><strong>3. Ph&ugrave; Hợp Mọi Kh&ocirc;ng Gian:</strong><br />\r\n&nbsp; &nbsp;Với k&iacute;ch thước v&agrave; m&agrave;u sắc đa dạng, đ&egrave;n LED neon ph&ugrave; hợp với mọi kh&ocirc;ng gian trang tr&iacute;, từ ph&ograve;ng tiệc lớn đến những khu vực nhỏ hẹp.</p>\r\n\r\n<p><strong>4. Kỷ Niệm L&acirc;u D&agrave;i:</strong><br />\r\n&nbsp; &nbsp;Đ&egrave;n LED neon kh&ocirc;ng chỉ l&agrave; sản phẩm trang tr&iacute; tạm thời m&agrave; c&ograve;n l&agrave; kỷ niệm l&acirc;u d&agrave;i cho ng&agrave;y cưới. Giữ lại ch&uacute;ng như một đồ trang tr&iacute; độc đ&aacute;o v&agrave; &yacute; nghĩa.</p>\r\n\r\n<p>D&agrave;nh cho những cặp đ&ocirc;i t&igrave;m kiếm sự kh&aacute;c biệt v&agrave; c&aacute; nh&acirc;n h&oacute;a trong ng&agrave;y cưới, LED Neon l&agrave; lựa chọn ho&agrave;n hảo để tạo n&ecirc;n kh&ocirc;ng gian đ&aacute;m cưới đặc sắc v&agrave; kh&ocirc;ng qu&ecirc;n. H&atilde;y để ch&uacute;ng t&ocirc;i gi&uacute;p bạn biến &yacute; tưởng của bạn th&agrave;nh hiện thực!</p>\r\n', 1, 0),
(39, 'LedneonWedding', 'Neon Wedding 2 chữ', '90*35cm', 'NW_NF_9035', ' 700000      ', 3, '1700736703_TuongDiem700.jpg', '<p>Led neon t&ecirc;n d&acirc;u rể, k&iacute;ch thước vừa phải, ph&ugrave; hợp với trang tr&iacute; gia ti&ecirc;n v&agrave; s&acirc;n khấu nhỏ.</p>\r\n', '<p>.</p>\r\n\r\n<p><strong>Tạo N&eacute;t Độc Đ&aacute;o v&agrave; L&atilde;ng Mạn</strong></p>\r\n\r\n<p><strong>1. Thiết Kế T&ugrave;y Chỉnh:</strong><br />\r\n&nbsp; &nbsp;Ch&uacute;ng t&ocirc;i cung cấp dịch vụ thiết kế t&ugrave;y chỉnh, cho ph&eacute;p bạn &aacute;p dụng t&ecirc;n c&ocirc; d&acirc;u, ch&uacute; rể hoặc c&aacute;c từ ngữ &yacute; nghĩa kh&aacute;c. Sự c&aacute; nh&acirc;n h&oacute;a n&agrave;y tạo n&ecirc;n điểm nhấn ri&ecirc;ng biệt cho đ&aacute;m cưới của bạn.</p>\r\n\r\n<p><strong>2. &Aacute;nh S&aacute;ng LED Ấm &Aacute;p:</strong><br />\r\n&nbsp; &nbsp;Đ&egrave;n LED neon tạo ra &aacute;nh s&aacute;ng ấm &aacute;p, tạo kh&ocirc;ng kh&iacute; l&atilde;ng mạn v&agrave; tuyệt vời cho bữa tiệc cưới. &Aacute;nh s&aacute;ng mềm mại tạo n&ecirc;n bức tranh l&ocirc;i cuốn cho ng&agrave;y trọng đại.</p>\r\n\r\n<p><strong>3. Ph&ugrave; Hợp Mọi Kh&ocirc;ng Gian:</strong><br />\r\n&nbsp; &nbsp;Với k&iacute;ch thước v&agrave; m&agrave;u sắc đa dạng, đ&egrave;n LED neon ph&ugrave; hợp với mọi kh&ocirc;ng gian trang tr&iacute;, từ ph&ograve;ng tiệc lớn đến những khu vực nhỏ hẹp.</p>\r\n\r\n<p><strong>4. Kỷ Niệm L&acirc;u D&agrave;i:</strong><br />\r\n&nbsp; &nbsp;Đ&egrave;n LED neon kh&ocirc;ng chỉ l&agrave; sản phẩm trang tr&iacute; tạm thời m&agrave; c&ograve;n l&agrave; kỷ niệm l&acirc;u d&agrave;i cho ng&agrave;y cưới. Giữ lại ch&uacute;ng như một đồ trang tr&iacute; độc đ&aacute;o v&agrave; &yacute; nghĩa.</p>\r\n\r\n<p>D&agrave;nh cho những cặp đ&ocirc;i t&igrave;m kiếm sự kh&aacute;c biệt v&agrave; c&aacute; nh&acirc;n h&oacute;a trong ng&agrave;y cưới, LED Neon l&agrave; lựa chọn ho&agrave;n hảo để tạo n&ecirc;n kh&ocirc;ng gian đ&aacute;m cưới đặc sắc v&agrave; kh&ocirc;ng qu&ecirc;n. H&atilde;y để ch&uacute;ng t&ocirc;i gi&uacute;p bạn biến &yacute; tưởng của bạn th&agrave;nh hiện thực!</p>\r\n', 1, 0),
(40, 'LedneonWedding', 'Neon Wedding chữ lồng', '90cm*90cm', 'NW_CL_9090', '750000   ', 2, '1700736923_ĐG.jpg', '<p>Led neon chữ lồng, k&iacute;ch thước cực to, ph&ugrave; hợp với s&acirc;n khấu v&agrave; cổng cưới.</p>\r\n', '<p>.</p>\r\n\r\n<p><strong>Tạo N&eacute;t Độc Đ&aacute;o v&agrave; L&atilde;ng Mạn</strong></p>\r\n\r\n<p><strong>1. Thiết Kế T&ugrave;y Chỉnh:</strong><br />\r\n&nbsp; &nbsp;Ch&uacute;ng t&ocirc;i cung cấp dịch vụ thiết kế t&ugrave;y chỉnh, cho ph&eacute;p bạn &aacute;p dụng t&ecirc;n c&ocirc; d&acirc;u, ch&uacute; rể hoặc c&aacute;c từ ngữ &yacute; nghĩa kh&aacute;c. Sự c&aacute; nh&acirc;n h&oacute;a n&agrave;y tạo n&ecirc;n điểm nhấn ri&ecirc;ng biệt cho đ&aacute;m cưới của bạn.</p>\r\n\r\n<p><strong>2. &Aacute;nh S&aacute;ng LED Ấm &Aacute;p:</strong><br />\r\n&nbsp; &nbsp;Đ&egrave;n LED neon tạo ra &aacute;nh s&aacute;ng ấm &aacute;p, tạo kh&ocirc;ng kh&iacute; l&atilde;ng mạn v&agrave; tuyệt vời cho bữa tiệc cưới. &Aacute;nh s&aacute;ng mềm mại tạo n&ecirc;n bức tranh l&ocirc;i cuốn cho ng&agrave;y trọng đại.</p>\r\n\r\n<p><strong>3. Ph&ugrave; Hợp Mọi Kh&ocirc;ng Gian:</strong><br />\r\n&nbsp; &nbsp;Với k&iacute;ch thước v&agrave; m&agrave;u sắc đa dạng, đ&egrave;n LED neon ph&ugrave; hợp với mọi kh&ocirc;ng gian trang tr&iacute;, từ ph&ograve;ng tiệc lớn đến những khu vực nhỏ hẹp.</p>\r\n\r\n<p><strong>4. Kỷ Niệm L&acirc;u D&agrave;i:</strong><br />\r\n&nbsp; &nbsp;Đ&egrave;n LED neon kh&ocirc;ng chỉ l&agrave; sản phẩm trang tr&iacute; tạm thời m&agrave; c&ograve;n l&agrave; kỷ niệm l&acirc;u d&agrave;i cho ng&agrave;y cưới. Giữ lại ch&uacute;ng như một đồ trang tr&iacute; độc đ&aacute;o v&agrave; &yacute; nghĩa.</p>\r\n\r\n<p>D&agrave;nh cho những cặp đ&ocirc;i t&igrave;m kiếm sự kh&aacute;c biệt v&agrave; c&aacute; nh&acirc;n h&oacute;a trong ng&agrave;y cưới, LED Neon l&agrave; lựa chọn ho&agrave;n hảo để tạo n&ecirc;n kh&ocirc;ng gian đ&aacute;m cưới đặc sắc v&agrave; kh&ocirc;ng qu&ecirc;n. H&atilde;y để ch&uacute;ng t&ocirc;i gi&uacute;p bạn biến &yacute; tưởng của bạn th&agrave;nh hiện thực!</p>\r\n', 1, 0),
(41, 'LedneonWedding', 'Neon Wedding Full tên dâu rể', '1m2*90cm', 'NW_F_12090', '1150000    ', 1, '1700757590_HienDiem.jpg', '<p>Led neon full t&ecirc;n d&acirc;u rể, k&iacute;ch thước cực to, ph&ugrave; hợp với s&acirc;n khấu.</p>\r\n', '<p>.</p>\r\n\r\n<p><strong>Tạo N&eacute;t Độc Đ&aacute;o v&agrave; L&atilde;ng Mạn</strong></p>\r\n\r\n<p><strong>1. Thiết Kế T&ugrave;y Chỉnh:</strong><br />\r\n&nbsp; &nbsp;Ch&uacute;ng t&ocirc;i cung cấp dịch vụ thiết kế t&ugrave;y chỉnh, cho ph&eacute;p bạn &aacute;p dụng t&ecirc;n c&ocirc; d&acirc;u, ch&uacute; rể hoặc c&aacute;c từ ngữ &yacute; nghĩa kh&aacute;c. Sự c&aacute; nh&acirc;n h&oacute;a n&agrave;y tạo n&ecirc;n điểm nhấn ri&ecirc;ng biệt cho đ&aacute;m cưới của bạn.</p>\r\n\r\n<p><strong>2. &Aacute;nh S&aacute;ng LED Ấm &Aacute;p:</strong><br />\r\n&nbsp; &nbsp;Đ&egrave;n LED neon tạo ra &aacute;nh s&aacute;ng ấm &aacute;p, tạo kh&ocirc;ng kh&iacute; l&atilde;ng mạn v&agrave; tuyệt vời cho bữa tiệc cưới. &Aacute;nh s&aacute;ng mềm mại tạo n&ecirc;n bức tranh l&ocirc;i cuốn cho ng&agrave;y trọng đại.</p>\r\n\r\n<p><strong>3. Ph&ugrave; Hợp Mọi Kh&ocirc;ng Gian:</strong><br />\r\n&nbsp; &nbsp;Với k&iacute;ch thước v&agrave; m&agrave;u sắc đa dạng, đ&egrave;n LED neon ph&ugrave; hợp với mọi kh&ocirc;ng gian trang tr&iacute;, từ ph&ograve;ng tiệc lớn đến những khu vực nhỏ hẹp.</p>\r\n\r\n<p><strong>4. Kỷ Niệm L&acirc;u D&agrave;i:</strong><br />\r\n&nbsp; &nbsp;Đ&egrave;n LED neon kh&ocirc;ng chỉ l&agrave; sản phẩm trang tr&iacute; tạm thời m&agrave; c&ograve;n l&agrave; kỷ niệm l&acirc;u d&agrave;i cho ng&agrave;y cưới. Giữ lại ch&uacute;ng như một đồ trang tr&iacute; độc đ&aacute;o v&agrave; &yacute; nghĩa.</p>\r\n\r\n<p>D&agrave;nh cho những cặp đ&ocirc;i t&igrave;m kiếm sự kh&aacute;c biệt v&agrave; c&aacute; nh&acirc;n h&oacute;a trong ng&agrave;y cưới, LED Neon l&agrave; lựa chọn ho&agrave;n hảo để tạo n&ecirc;n kh&ocirc;ng gian đ&aacute;m cưới đặc sắc v&agrave; kh&ocirc;ng qu&ecirc;n. H&atilde;y để ch&uacute;ng t&ocirc;i gi&uacute;p bạn biến &yacute; tưởng của bạn th&agrave;nh hiện thực!</p>\r\n', 1, 1),
(42, 'LedneonWedding', 'Neon Wedding 2 chữ', '90*35cm', 'NW_NF_9035', ' 700000    ', 1, '1700757902_PhatTam700.jpg', '<p>Led neon t&ecirc;n d&acirc;u rể, k&iacute;ch thước vừa phải, ph&ugrave; hợp với trang tr&iacute; gia ti&ecirc;n v&agrave; s&acirc;n khấu nhỏ.</p>\r\n', '<p>.</p>\r\n\r\n<p><strong>Tạo N&eacute;t Độc Đ&aacute;o v&agrave; L&atilde;ng Mạn</strong></p>\r\n\r\n<p><strong>1. Thiết Kế T&ugrave;y Chỉnh:</strong><br />\r\n&nbsp; &nbsp;Ch&uacute;ng t&ocirc;i cung cấp dịch vụ thiết kế t&ugrave;y chỉnh, cho ph&eacute;p bạn &aacute;p dụng t&ecirc;n c&ocirc; d&acirc;u, ch&uacute; rể hoặc c&aacute;c từ ngữ &yacute; nghĩa kh&aacute;c. Sự c&aacute; nh&acirc;n h&oacute;a n&agrave;y tạo n&ecirc;n điểm nhấn ri&ecirc;ng biệt cho đ&aacute;m cưới của bạn.</p>\r\n\r\n<p><strong>2. &Aacute;nh S&aacute;ng LED Ấm &Aacute;p:</strong><br />\r\n&nbsp; &nbsp;Đ&egrave;n LED neon tạo ra &aacute;nh s&aacute;ng ấm &aacute;p, tạo kh&ocirc;ng kh&iacute; l&atilde;ng mạn v&agrave; tuyệt vời cho bữa tiệc cưới. &Aacute;nh s&aacute;ng mềm mại tạo n&ecirc;n bức tranh l&ocirc;i cuốn cho ng&agrave;y trọng đại.</p>\r\n\r\n<p><strong>3. Ph&ugrave; Hợp Mọi Kh&ocirc;ng Gian:</strong><br />\r\n&nbsp; &nbsp;Với k&iacute;ch thước v&agrave; m&agrave;u sắc đa dạng, đ&egrave;n LED neon ph&ugrave; hợp với mọi kh&ocirc;ng gian trang tr&iacute;, từ ph&ograve;ng tiệc lớn đến những khu vực nhỏ hẹp.</p>\r\n\r\n<p><strong>4. Kỷ Niệm L&acirc;u D&agrave;i:</strong><br />\r\n&nbsp; &nbsp;Đ&egrave;n LED neon kh&ocirc;ng chỉ l&agrave; sản phẩm trang tr&iacute; tạm thời m&agrave; c&ograve;n l&agrave; kỷ niệm l&acirc;u d&agrave;i cho ng&agrave;y cưới. Giữ lại ch&uacute;ng như một đồ trang tr&iacute; độc đ&aacute;o v&agrave; &yacute; nghĩa.</p>\r\n\r\n<p>D&agrave;nh cho những cặp đ&ocirc;i t&igrave;m kiếm sự kh&aacute;c biệt v&agrave; c&aacute; nh&acirc;n h&oacute;a trong ng&agrave;y cưới, LED Neon l&agrave; lựa chọn ho&agrave;n hảo để tạo n&ecirc;n kh&ocirc;ng gian đ&aacute;m cưới đặc sắc v&agrave; kh&ocirc;ng qu&ecirc;n. H&atilde;y để ch&uacute;ng t&ocirc;i gi&uacute;p bạn biến &yacute; tưởng của bạn th&agrave;nh hiện thực!</p>\r\n', 1, 0),
(43, 'LedneonDecor', 'Neon decor Cá chép om dưa', '90*70cm', 'ND_XXL_12090', ' 700000        ', 1, '1700760883_CACHEPOMDUA.jpg', '<p>C&aacute; ch&eacute;p</p>\r\n', '<p><strong>Bước Nhảy Về Phong C&aacute;ch Trang Tr&iacute; Hiện Đại v&agrave; S&aacute;ng Tạo</strong></p>\r\n\r\n<p><strong>1. Thiết Kế Độc Đ&aacute;o:</strong><br />\r\n&nbsp; &nbsp;Bạn sẽ kh&ocirc;ng t&igrave;m thấy những m&ocirc; h&igrave;nh n&agrave;y ở bất kỳ nơi n&agrave;o kh&aacute;c. Đ&egrave;n LED Neon Decor của ch&uacute;ng t&ocirc;i được thiết kế độc quyền, mang lại sự kh&aacute;c biệt v&agrave; phong c&aacute;ch ri&ecirc;ng cho kh&ocirc;ng gian của bạn.</p>\r\n\r\n<p><strong>2. Phong C&aacute;ch Tinh Tế:</strong><br />\r\n&nbsp; &nbsp;Tạo điểm nhấn tinh tế v&agrave; hiện đại với &aacute;nh s&aacute;ng Neon. D&ugrave; l&agrave; trong ph&ograve;ng kh&aacute;ch, ph&ograve;ng ngủ, hay kh&ocirc;ng gian l&agrave;m việc, ch&uacute;ng tạo n&ecirc;n kh&ocirc;ng kh&iacute; ấm &aacute;p v&agrave; thuận lợi cho nhu cầu trang tr&iacute; của bạn.</p>\r\n\r\n<p><strong>3. M&agrave;u Sắc Đa Dạng:</strong><br />\r\n&nbsp; &nbsp;Chọn từ một loạt c&aacute;c m&agrave;u sắc phong ph&uacute; để phản &aacute;nh c&aacute; t&iacute;nh của bạn hoặc tạo điểm nhấn ph&ugrave; hợp với nội thất. Sự đa dạng n&agrave;y gi&uacute;p bạn dễ d&agrave;ng t&iacute;ch hợp LED Neon Decor v&agrave;o bất kỳ phong c&aacute;ch n&agrave;o.</p>\r\n\r\n<p><strong>4. Dễ Lắp Đặt v&agrave; Di Chuyển:</strong><br />\r\n&nbsp; &nbsp;Với thiết kế nhẹ v&agrave; dễ lắp đặt, bạn c&oacute; thể dễ d&agrave;ng đặt đ&egrave;n LED Neon Decor ở bất kỳ nơi n&agrave;o bạn muốn. Ch&uacute;ng cũng dễ d&agrave;ng di chuyển, tạo linh hoạt trong việc thay đổi trang tr&iacute;.</p>\r\n\r\n<p><strong>5. Tiết Kiệm Năng Lượng:</strong><br />\r\n&nbsp; &nbsp;LED Neon Decor kh&ocirc;ng chỉ mang lại &aacute;nh s&aacute;ng chất lượng m&agrave; c&ograve;n tiết kiệm năng lượng, gi&uacute;p giảm chi ph&iacute; v&agrave; bảo vệ m&ocirc;i trường.</p>\r\n\r\n<p>Cho d&ugrave; bạn đang t&igrave;m kiếm điểm nhấn trang tr&iacute; cho kh&ocirc;ng gian sống, l&agrave;m việc, hay l&agrave;m qu&agrave; tặng độc đ&aacute;o, đ&egrave;n LED Neon Decor của ch&uacute;ng t&ocirc;i sẽ l&agrave;m cho mọi kh&ocirc;ng gian trở n&ecirc;n đặc biệt. Kh&aacute;m ph&aacute; sự đa dạng v&agrave; tạo n&ecirc;n kh&ocirc;ng gian sống theo c&aacute;ch của bạn với LED Neon Decor!</p>\r\n', 1, 1),
(44, 'LedneonWedding', 'Led neon Full têndâu rể', '1m2*35cm', 'NW_F_12035', '900000  ', 3, '1701240920_Hoangtri_KimNguyen.jpg', '<p>Led neon full t&ecirc;n ph&ugrave; hợp với backdrop v&agrave; cổng cưới.</p>\r\n', '<p>.</p>\r\n\r\n<p><strong>Tạo N&eacute;t Độc Đ&aacute;o v&agrave; L&atilde;ng Mạn</strong></p>\r\n\r\n<p><strong>1. Thiết Kế T&ugrave;y Chỉnh:</strong><br />\r\n&nbsp; &nbsp;Ch&uacute;ng t&ocirc;i cung cấp dịch vụ thiết kế t&ugrave;y chỉnh, cho ph&eacute;p bạn &aacute;p dụng t&ecirc;n c&ocirc; d&acirc;u, ch&uacute; rể hoặc c&aacute;c từ ngữ &yacute; nghĩa kh&aacute;c. Sự c&aacute; nh&acirc;n h&oacute;a n&agrave;y tạo n&ecirc;n điểm nhấn ri&ecirc;ng biệt cho đ&aacute;m cưới của bạn.</p>\r\n\r\n<p><strong>2. &Aacute;nh S&aacute;ng LED Ấm &Aacute;p:</strong><br />\r\n&nbsp; &nbsp;Đ&egrave;n LED neon tạo ra &aacute;nh s&aacute;ng ấm &aacute;p, tạo kh&ocirc;ng kh&iacute; l&atilde;ng mạn v&agrave; tuyệt vời cho bữa tiệc cưới. &Aacute;nh s&aacute;ng mềm mại tạo n&ecirc;n bức tranh l&ocirc;i cuốn cho ng&agrave;y trọng đại.</p>\r\n\r\n<p><strong>3. Ph&ugrave; Hợp Mọi Kh&ocirc;ng Gian:</strong><br />\r\n&nbsp; &nbsp;Với k&iacute;ch thước v&agrave; m&agrave;u sắc đa dạng, đ&egrave;n LED neon ph&ugrave; hợp với mọi kh&ocirc;ng gian trang tr&iacute;, từ ph&ograve;ng tiệc lớn đến những khu vực nhỏ hẹp.</p>\r\n\r\n<p><strong>4. Kỷ Niệm L&acirc;u D&agrave;i:</strong><br />\r\n&nbsp; &nbsp;Đ&egrave;n LED neon kh&ocirc;ng chỉ l&agrave; sản phẩm trang tr&iacute; tạm thời m&agrave; c&ograve;n l&agrave; kỷ niệm l&acirc;u d&agrave;i cho ng&agrave;y cưới. Giữ lại ch&uacute;ng như một đồ trang tr&iacute; độc đ&aacute;o v&agrave; &yacute; nghĩa.</p>\r\n\r\n<p>D&agrave;nh cho những cặp đ&ocirc;i t&igrave;m kiếm sự kh&aacute;c biệt v&agrave; c&aacute; nh&acirc;n h&oacute;a trong ng&agrave;y cưới, LED Neon l&agrave; lựa chọn ho&agrave;n hảo để tạo n&ecirc;n kh&ocirc;ng gian đ&aacute;m cưới đặc sắc v&agrave; kh&ocirc;ng qu&ecirc;n. H&atilde;y để ch&uacute;ng t&ocirc;i gi&uacute;p bạn biến &yacute; tưởng của bạn th&agrave;nh hiện thực!</p>\r\n', 1, 0),
(45, 'LedneonWedding', 'Led neon lắp ghép Full tên', '1m2*90cm', 'NW_F2_12090', '900000    ', 3, '1701242267_QUOCHUNG_KIMNGAN.jpg', '<p>Led neon phi&ecirc;n bẳn lắp gh&eacute;p.</p>\r\n', '<p>.</p>\r\n\r\n<p><strong>Tạo N&eacute;t Độc Đ&aacute;o v&agrave; L&atilde;ng Mạn</strong></p>\r\n\r\n<p><strong>1. Thiết Kế T&ugrave;y Chỉnh:</strong><br />\r\n&nbsp; &nbsp;Ch&uacute;ng t&ocirc;i cung cấp dịch vụ thiết kế t&ugrave;y chỉnh, cho ph&eacute;p bạn &aacute;p dụng t&ecirc;n c&ocirc; d&acirc;u, ch&uacute; rể hoặc c&aacute;c từ ngữ &yacute; nghĩa kh&aacute;c. Sự c&aacute; nh&acirc;n h&oacute;a n&agrave;y tạo n&ecirc;n điểm nhấn ri&ecirc;ng biệt cho đ&aacute;m cưới của bạn.</p>\r\n\r\n<p><strong>2. Dễ d&agrave;ng lắp đặt:</strong><br />\r\n&nbsp; &nbsp;Với cấu tạo độc lập, dễ d&agrave;ng lắp dặt cho mọi backdrop v&agrave; s&acirc;n khấu. Tận dụng được cho<strong> nh&agrave; trai, nh&agrave; g&aacute;i v&agrave; cả nh&agrave; h&agrave;ng.</strong></p>\r\n\r\n<p><strong>3. Kỷ Niệm L&acirc;u D&agrave;i:</strong><br />\r\n&nbsp; &nbsp;Đ&egrave;n LED neon kh&ocirc;ng chỉ l&agrave; sản phẩm trang tr&iacute; tạm thời m&agrave; c&ograve;n l&agrave; kỷ niệm l&acirc;u d&agrave;i cho ng&agrave;y cưới. Giữ lại ch&uacute;ng như một đồ trang tr&iacute; độc đ&aacute;o v&agrave; &yacute; nghĩa.</p>\r\n\r\n<p>D&agrave;nh cho những cặp đ&ocirc;i t&igrave;m kiếm sự kh&aacute;c biệt v&agrave; c&aacute; nh&acirc;n h&oacute;a trong ng&agrave;y cưới, LED Neon l&agrave; lựa chọn ho&agrave;n hảo để tạo n&ecirc;n kh&ocirc;ng gian đ&aacute;m cưới đặc sắc v&agrave; kh&ocirc;ng qu&ecirc;n. H&atilde;y để ch&uacute;ng t&ocirc;i gi&uacute;p bạn biến &yacute; tưởng của bạn th&agrave;nh hiện thực!</p>\r\n', 1, 0),
(46, 'LedneonDecor', 'Led neon thương hiệu', '1m2*50cm', 'ND_F_12050', '900000', 3, '1701242442_Lincy_nail.jpg', 'Led neon thương hiệu, màu sắc đa dạng.', ' <br> Màu sắc đa dạng. <br> Lắp đặt dễ dàng <br> Mẫu mã da dạng thỏa sức sang tạo.', 1, 1),
(47, 'LedneonWedding', 'Led neon Full tên ', '1m2*90cm', 'NW_F_12090', '1150000 ', 3, '1701242650_DUCTAN_KHANHLINH.jpg', '<p>Led neon full t&ecirc;n d&acirc;u rể, k&iacute;ch thước cực to, ph&ugrave; hợp với s&acirc;n khấu.</p>\r\n', '<p>.</p>\r\n\r\n<p><strong>Tạo N&eacute;t Độc Đ&aacute;o v&agrave; L&atilde;ng Mạn</strong></p>\r\n\r\n<p><strong>1. Thiết Kế T&ugrave;y Chỉnh:</strong><br />\r\n&nbsp; &nbsp;Ch&uacute;ng t&ocirc;i cung cấp dịch vụ thiết kế t&ugrave;y chỉnh, cho ph&eacute;p bạn &aacute;p dụng t&ecirc;n c&ocirc; d&acirc;u, ch&uacute; rể hoặc c&aacute;c từ ngữ &yacute; nghĩa kh&aacute;c. Sự c&aacute; nh&acirc;n h&oacute;a n&agrave;y tạo n&ecirc;n điểm nhấn ri&ecirc;ng biệt cho đ&aacute;m cưới của bạn.</p>\r\n\r\n<p><strong>2. &Aacute;nh S&aacute;ng LED Ấm &Aacute;p:</strong><br />\r\n&nbsp; &nbsp;Đ&egrave;n LED neon tạo ra &aacute;nh s&aacute;ng ấm &aacute;p, tạo kh&ocirc;ng kh&iacute; l&atilde;ng mạn v&agrave; tuyệt vời cho bữa tiệc cưới. &Aacute;nh s&aacute;ng mềm mại tạo n&ecirc;n bức tranh l&ocirc;i cuốn cho ng&agrave;y trọng đại.</p>\r\n\r\n<p><strong>3. Ph&ugrave; Hợp Mọi Kh&ocirc;ng Gian:</strong><br />\r\n&nbsp; &nbsp;Với k&iacute;ch thước v&agrave; m&agrave;u sắc đa dạng, đ&egrave;n LED neon ph&ugrave; hợp với mọi kh&ocirc;ng gian trang tr&iacute;, từ ph&ograve;ng tiệc lớn đến những khu vực nhỏ hẹp.</p>\r\n\r\n<p><strong>4. Kỷ Niệm L&acirc;u D&agrave;i:</strong><br />\r\n&nbsp; &nbsp;Đ&egrave;n LED neon kh&ocirc;ng chỉ l&agrave; sản phẩm trang tr&iacute; tạm thời m&agrave; c&ograve;n l&agrave; kỷ niệm l&acirc;u d&agrave;i cho ng&agrave;y cưới. Giữ lại ch&uacute;ng như một đồ trang tr&iacute; độc đ&aacute;o v&agrave; &yacute; nghĩa.</p>\r\n\r\n<p>D&agrave;nh cho những cặp đ&ocirc;i t&igrave;m kiếm sự kh&aacute;c biệt v&agrave; c&aacute; nh&acirc;n h&oacute;a trong ng&agrave;y cưới, LED Neon l&agrave; lựa chọn ho&agrave;n hảo để tạo n&ecirc;n kh&ocirc;ng gian đ&aacute;m cưới đặc sắc v&agrave; kh&ocirc;ng qu&ecirc;n. H&atilde;y để ch&uacute;ng t&ocirc;i gi&uacute;p bạn biến &yacute; tưởng của bạn th&agrave;nh hiện thực!</p>\r\n', 1, 1),
(48, 'LedneonWedding', 'Led neon Full tên 1m2*90cm', '1m2*90cm', 'NW_F_12090', '1150000  ', 3, '1701242770_DUCTRONG_QUYNHPHUONG.jpg', '<p>Led neon full t&ecirc;n d&acirc;u rể, k&iacute;ch thước lớn, m&agrave;u sắc đa dạng.</p>\r\n', '<p>.</p>\r\n\r\n<p><strong>Tạo N&eacute;t Độc Đ&aacute;o v&agrave; L&atilde;ng Mạn</strong></p>\r\n\r\n<p><strong>1. Thiết Kế T&ugrave;y Chỉnh:</strong><br />\r\n&nbsp; &nbsp;Ch&uacute;ng t&ocirc;i cung cấp dịch vụ thiết kế t&ugrave;y chỉnh, cho ph&eacute;p bạn &aacute;p dụng t&ecirc;n c&ocirc; d&acirc;u, ch&uacute; rể hoặc c&aacute;c từ ngữ &yacute; nghĩa kh&aacute;c. Sự c&aacute; nh&acirc;n h&oacute;a n&agrave;y tạo n&ecirc;n điểm nhấn ri&ecirc;ng biệt cho đ&aacute;m cưới của bạn.</p>\r\n\r\n<p><strong>2. &Aacute;nh S&aacute;ng LED Ấm &Aacute;p:</strong><br />\r\n&nbsp; &nbsp;Đ&egrave;n LED neon tạo ra &aacute;nh s&aacute;ng ấm &aacute;p, tạo kh&ocirc;ng kh&iacute; l&atilde;ng mạn v&agrave; tuyệt vời cho bữa tiệc cưới. &Aacute;nh s&aacute;ng mềm mại tạo n&ecirc;n bức tranh l&ocirc;i cuốn cho ng&agrave;y trọng đại.</p>\r\n\r\n<p><strong>3. Ph&ugrave; Hợp Mọi Kh&ocirc;ng Gian:</strong><br />\r\n&nbsp; &nbsp;Với k&iacute;ch thước v&agrave; m&agrave;u sắc đa dạng, đ&egrave;n LED neon ph&ugrave; hợp với mọi kh&ocirc;ng gian trang tr&iacute;, từ ph&ograve;ng tiệc lớn đến những khu vực nhỏ hẹp.</p>\r\n\r\n<p><strong>4. Kỷ Niệm L&acirc;u D&agrave;i:</strong><br />\r\n&nbsp; &nbsp;Đ&egrave;n LED neon kh&ocirc;ng chỉ l&agrave; sản phẩm trang tr&iacute; tạm thời m&agrave; c&ograve;n l&agrave; kỷ niệm l&acirc;u d&agrave;i cho ng&agrave;y cưới. Giữ lại ch&uacute;ng như một đồ trang tr&iacute; độc đ&aacute;o v&agrave; &yacute; nghĩa.</p>\r\n\r\n<p>D&agrave;nh cho những cặp đ&ocirc;i t&igrave;m kiếm sự kh&aacute;c biệt v&agrave; c&aacute; nh&acirc;n h&oacute;a trong ng&agrave;y cưới, LED Neon l&agrave; lựa chọn ho&agrave;n hảo để tạo n&ecirc;n kh&ocirc;ng gian đ&aacute;m cưới đặc sắc v&agrave; kh&ocirc;ng qu&ecirc;n. H&atilde;y để ch&uacute;ng t&ocirc;i gi&uacute;p bạn biến &yacute; tưởng của bạn th&agrave;nh hiện thực!</p>\r\n', 1, 1),
(49, 'LedneonDecor', 'Led neon livestream', '60*30cm', 'ND_M_6030', '499000 ', 3, '1701242943_Napy.jpg', '                        Led neon livestream màu sắc và thiết kế đa dạng.                    ', '                        . <br> Màu sắc đa dạng. <br> Lắp đặt dễ dàng <br> Thời gian giao hàng cực nhanh từ 1-2 ngày.                    ', 1, 0),
(50, 'LedneonWedding', 'Led neon chữ lồng', '90cm*90cm', 'NW_CL_9090', ' 750000  ', 3, '1701245764_TX.jpg', '<p>&nbsp;</p>\r\n\r\n<p>Chữ lồng LED neon l&agrave; lựa chọn trang tr&iacute; s&aacute;ng tạo cho đ&aacute;m cưới, tạo điểm nhấn độc đ&aacute;o.</p>\r\n\r\n<p>Thiết kế t&ugrave;y chỉnh với t&ecirc;n c&ocirc; d&acirc;u, ch&uacute; ', '<p>Chữ lồng LED neon l&agrave; lựa chọn trang tr&iacute; s&aacute;ng tạo cho đ&aacute;m cưới, tạo điểm nhấn độc đ&aacute;o.</p>\r\n\r\n<p>Thiết kế t&ugrave;y chỉnh với t&ecirc;n c&ocirc; d&acirc;u, ch&uacute; rể, &aacute;nh s&aacute;ng LED ấm &aacute;p v&agrave; tiết kiệm năng lượng.</p>\r\n\r\n<p>Ph&ugrave; hợp với mọi kh&ocirc;ng gian, ch&uacute;ng mang lại kh&ocirc;ng kh&iacute; l&atilde;ng mạn, v&agrave; bền bỉ trong thời gian d&agrave;i.</p>\r\n\r\n<p>Sự s&aacute;ng tạo n&agrave;y kh&ocirc;ng chỉ trang tr&iacute; tạm thời m&agrave; c&ograve;n l&agrave; kỷ niệm đặc biệt cho ng&agrave;y cưới.</p>\r\n', 1, 1),
(51, 'Banghieu', 'Bảng hiệu mica sáng mặt', '60*35cm', 'BHSM_6035', '700000 ', 3, '1702401794_May.jpg', '<p>Giải ph&aacute;p quảng c&aacute;o hiệu quả v&agrave; chuy&ecirc;n nghiệp cho doanh nghiệp của bạn.</p>\r\n', '<p><strong>Bảng Hiệu Mica S&aacute;ng Mặt - Chất Lượng v&agrave; Tinh Tế cho Mọi Doanh Nghiệp</strong></p>\r\n\r\n<p>Giải ph&aacute;p quảng c&aacute;o hiệu quả v&agrave; chuy&ecirc;n nghiệp cho doanh nghiệp của bạn.</p>\r\n\r\n<p><strong>1. Thiết Kế Tinh Tế:</strong><br />\r\n&nbsp; &nbsp;Bảng hiệu mica s&aacute;ng mặt của ch&uacute;ng t&ocirc;i được thiết kế với sự tinh tế v&agrave; chất lượng, tạo n&ecirc;n ấn tượng mạnh mẽ v&agrave; chuy&ecirc;n nghiệp cho thương hiệu của bạn.</p>\r\n\r\n<p><strong>2. &Aacute;nh S&aacute;ng Đồng Đều:</strong><br />\r\n&nbsp; &nbsp;&Aacute;nh s&aacute;ng s&aacute;ng mặt gi&uacute;p bảng hiệu nổi bật v&agrave; dễ nhận biết, thu h&uacute;t sự ch&uacute; &yacute; của kh&aacute;ch h&agrave;ng ngay từ xa.</p>\r\n\r\n<p><strong>3. Chất Liệu Mica Chất Lượng Cao:</strong><br />\r\n&nbsp; &nbsp;Sử dụng mica chất lượng cao, bảng hiệu của ch&uacute;ng t&ocirc;i đảm bảo độ bền, độ trong suốt v&agrave; khả năng chịu lực tốt.</p>\r\n\r\n<p><strong>4. Th&iacute;ch Ứng Mọi Nhu Cầu Quảng C&aacute;o:</strong><br />\r\n&nbsp; &nbsp;T&ugrave;y chọn k&iacute;ch thước, m&agrave;u sắc, v&agrave; thiết kế linh hoạt gi&uacute;p bảng hiệu phản &aacute;nh đ&uacute;ng với bản chất v&agrave; gi&aacute; trị của doanh nghiệp.</p>\r\n\r\n<p><strong>5. SEO-Friendly:</strong><br />\r\n&nbsp; &nbsp;Bảng hiệu mica s&aacute;ng mặt được tối ưu h&oacute;a với c&aacute;c từ kh&oacute;a li&ecirc;n quan để đảm bảo sự hiện diện trực tuyến tốt, gi&uacute;p thu h&uacute;t kh&aacute;ch h&agrave;ng qua c&aacute;c c&ocirc;ng cụ t&igrave;m kiếm.</p>\r\n\r\n<p><strong>6. Lắp Đặt Dễ D&agrave;ng:</strong><br />\r\n&nbsp; &nbsp;Thiết kế nhẹ gi&uacute;p qu&aacute; tr&igrave;nh lắp đặt nhanh ch&oacute;ng v&agrave; thuận lợi, giảm chi ph&iacute; v&agrave; thời gian.</p>\r\n\r\n<p>Duyệt qua c&aacute;c mẫu bảng hiệu mica s&aacute;ng mặt của ch&uacute;ng t&ocirc;i để t&igrave;m ra sự lựa chọn ho&agrave;n hảo, mang lại gi&aacute; trị l&acirc;u d&agrave;i cho sự th&agrave;nh c&ocirc;ng của doanh nghiệp bạn. Ch&uacute;ng t&ocirc;i cam kết đem đến giải ph&aacute;p quảng c&aacute;o chất lượng nhất cho thương hiệu của bạn.</p>\r\n', 1, 0),
(52, 'Banghieu', 'Bảng hiệu mica sáng mặt', '60*35cm', 'BHSM_6035', ' 700000', 3, '1702401856_Khoi.jpg', '<p>Giải ph&aacute;p quảng c&aacute;o hiệu quả v&agrave; chuy&ecirc;n nghiệp cho doanh nghiệp của bạn.</p>\r\n', '<p><strong>Bảng Hiệu Mica S&aacute;ng Mặt - Chất Lượng v&agrave; Tinh Tế cho Mọi Doanh Nghiệp</strong></p>\r\n\r\n<p>Giải ph&aacute;p quảng c&aacute;o hiệu quả v&agrave; chuy&ecirc;n nghiệp cho doanh nghiệp của bạn.</p>\r\n\r\n<p><strong>1. Thiết Kế Tinh Tế:</strong><br />\r\n&nbsp; &nbsp;Bảng hiệu mica s&aacute;ng mặt của ch&uacute;ng t&ocirc;i được thiết kế với sự tinh tế v&agrave; chất lượng, tạo n&ecirc;n ấn tượng mạnh mẽ v&agrave; chuy&ecirc;n nghiệp cho thương hiệu của bạn.</p>\r\n\r\n<p><strong>2. &Aacute;nh S&aacute;ng Đồng Đều:</strong><br />\r\n&nbsp; &nbsp;&Aacute;nh s&aacute;ng s&aacute;ng mặt gi&uacute;p bảng hiệu nổi bật v&agrave; dễ nhận biết, thu h&uacute;t sự ch&uacute; &yacute; của kh&aacute;ch h&agrave;ng ngay từ xa.</p>\r\n\r\n<p><strong>3. Chất Liệu Mica Chất Lượng Cao:</strong><br />\r\n&nbsp; &nbsp;Sử dụng mica chất lượng cao, bảng hiệu của ch&uacute;ng t&ocirc;i đảm bảo độ bền, độ trong suốt v&agrave; khả năng chịu lực tốt.</p>\r\n\r\n<p><strong>4. Th&iacute;ch Ứng Mọi Nhu Cầu Quảng C&aacute;o:</strong><br />\r\n&nbsp; &nbsp;T&ugrave;y chọn k&iacute;ch thước, m&agrave;u sắc, v&agrave; thiết kế linh hoạt gi&uacute;p bảng hiệu phản &aacute;nh đ&uacute;ng với bản chất v&agrave; gi&aacute; trị của doanh nghiệp.</p>\r\n\r\n<p><strong>5. SEO-Friendly:</strong><br />\r\n&nbsp; &nbsp;Bảng hiệu mica s&aacute;ng mặt được tối ưu h&oacute;a với c&aacute;c từ kh&oacute;a li&ecirc;n quan để đảm bảo sự hiện diện trực tuyến tốt, gi&uacute;p thu h&uacute;t kh&aacute;ch h&agrave;ng qua c&aacute;c c&ocirc;ng cụ t&igrave;m kiếm.</p>\r\n\r\n<p><strong>6. Lắp Đặt Dễ D&agrave;ng:</strong><br />\r\n&nbsp; &nbsp;Thiết kế nhẹ gi&uacute;p qu&aacute; tr&igrave;nh lắp đặt nhanh ch&oacute;ng v&agrave; thuận lợi, giảm chi ph&iacute; v&agrave; thời gian.</p>\r\n\r\n<p>Duyệt qua c&aacute;c mẫu bảng hiệu mica s&aacute;ng mặt của ch&uacute;ng t&ocirc;i để t&igrave;m ra sự lựa chọn ho&agrave;n hảo, mang lại gi&aacute; trị l&acirc;u d&agrave;i cho sự th&agrave;nh c&ocirc;ng của doanh nghiệp bạn. Ch&uacute;ng t&ocirc;i cam kết đem đến giải ph&aacute;p quảng c&aacute;o chất lượng nhất cho thương hiệu của bạn.</p>\r\n', 1, 0),
(53, 'Banghieu', 'Bảng hiệu Led neon và mặt in Decal', '1m*80cm', 'BHN_10080', '1550000', 3, '1702402105_Changa.jpg', '<p>Bảng hiệu LED Neon mặt mica d&aacute;n decal, một lựa chọn ho&agrave;n hảo để tạo điểm nhấn s&aacute;ng tạo v&agrave; độc đ&aacute;o cho thương hiệu của bạn.</p>\r\n', '<p>&nbsp;Bảng Hiệu LED Neon Mặt Mica - Sự Kết Hợp Tinh Tế Giữa &Aacute;nh S&aacute;ng Độc Đ&aacute;o v&agrave; Thiết Kế Chất Lượng&nbsp;</p>\r\n\r\n<p>Ch&agrave;o mừng bạn đến với giới thiệu ngắn gọn về bảng hiệu LED Neon mặt mica d&aacute;n decal, một lựa chọn ho&agrave;n hảo để tạo điểm nhấn s&aacute;ng tạo v&agrave; độc đ&aacute;o cho thương hiệu của bạn.</p>\r\n\r\n<p><strong>1. &nbsp;&Aacute;nh S&aacute;ng LED Neon Độc Đ&aacute;o:&nbsp;</strong><br />\r\n&nbsp; &nbsp;Kết hợp &aacute;nh s&aacute;ng LED Neon tinh tế với mặt mica chất lượng, bảng hiệu của ch&uacute;ng t&ocirc;i tạo n&ecirc;n hiệu ứng s&aacute;ng độc đ&aacute;o v&agrave; thu h&uacute;t mọi &aacute;nh nh&igrave;n.</p>\r\n\r\n<p><strong>2. &nbsp;Mặt Mica D&aacute;n Decal T&ugrave;y Chỉnh:&nbsp;</strong><br />\r\n&nbsp; &nbsp;Ch&uacute;ng t&ocirc;i cung cấp dịch vụ d&aacute;n decal t&ugrave;y chỉnh, cho ph&eacute;p bạn thể hiện đ&uacute;ng phong c&aacute;ch v&agrave; th&ocirc;ng điệp của doanh nghiệp.</p>\r\n\r\n<p><strong>3. &nbsp;Chất Liệu Mica Chất Lượng Cao:&nbsp;</strong><br />\r\n&nbsp; &nbsp;Sử dụng mica chất lượng cao, bảng hiệu của ch&uacute;ng t&ocirc;i đảm bảo độ bền, độ trong suốt v&agrave; khả năng chịu lực tốt.</p>\r\n\r\n<p><strong>4. &nbsp;SEO-Friendly:&nbsp;</strong><br />\r\n&nbsp; &nbsp;Bảng hiệu được tối ưu h&oacute;a với từ kh&oacute;a li&ecirc;n quan để đảm bảo sự xuất hiện trực tuyến cao, gi&uacute;p tăng cường tiềm năng kh&aacute;ch h&agrave;ng qua c&aacute;c c&ocirc;ng cụ t&igrave;m kiếm.</p>\r\n\r\n<p><strong>5. &nbsp;Dễ Lắp Đặt v&agrave; Di Chuyển:&nbsp;</strong><br />\r\n&nbsp; &nbsp;Thiết kế nhẹ gi&uacute;p qu&aacute; tr&igrave;nh lắp đặt v&agrave; di chuyển linh hoạt, tiết kiệm thời gian v&agrave; chi ph&iacute;.</p>\r\n\r\n<p><strong>6. &nbsp;Ph&ugrave; Hợp Mọi Nhu Cầu Trang Tr&iacute;:&nbsp;</strong><br />\r\n&nbsp; &nbsp;T&ugrave;y chọn k&iacute;ch thước v&agrave; m&agrave;u sắc đa dạng gi&uacute;p bảng hiệu ph&ugrave; hợp với mọi kh&ocirc;ng gian v&agrave; nhu cầu trang tr&iacute;.</p>\r\n\r\n<p>Chọn bảng hiệu LED Neon mặt mica d&aacute;n decal của ch&uacute;ng t&ocirc;i để tạo n&ecirc;n bức tranh s&aacute;ng tạo v&agrave; tăng cường hiệu quả quảng c&aacute;o của doanh nghiệp bạn. Sự độc đ&aacute;o v&agrave; chất lượng sẽ khiến thương hiệu của bạn nổi bật trong đ&aacute;m đ&ocirc;ng.</p>\r\n', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_userlogin`
--

CREATE TABLE `tbl_userlogin` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_gmail` varchar(50) NOT NULL,
  `user_sdt` varchar(15) NOT NULL,
  `user_diachi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_userlogin`
--

INSERT INTO `tbl_userlogin` (`id_user`, `user_name`, `user_password`, `user_gmail`, `user_sdt`, `user_diachi`) VALUES
(2, 'anhvu123', 'c521cc480d2a5bb53fb728ff567d4d48', 'daoanhvu.work@gmail.com', '0973379871', ''),
(16, 'anhvu1235', 'c521cc480d2a5bb53fb728ff567d4d48', 'clone21052001@gmail.com', '0973379871', ''),
(17, 'testmail', 'c521cc480d2a5bb53fb728ff567d4d48', 'daoanhvu.work@gmail.com', '0973379871', ''),
(18, 'anhvu12122023', 'c521cc480d2a5bb53fb728ff567d4d48', 'daoanhvu.work@gmail.com', '0973379871', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbt_sanphamnoibat`
--

CREATE TABLE `tbt_sanphamnoibat` (
  `id_sanphamnoibat` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`id_baiviet`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `tbl_cartdetail`
--
ALTER TABLE `tbl_cartdetail`
  ADD PRIMARY KEY (`id_cart_detail`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_danhmucbaiviet`
--
ALTER TABLE `tbl_danhmucbaiviet`
  ADD PRIMARY KEY (`id_danhmucbaiviet`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Chỉ mục cho bảng `tbl_userlogin`
--
ALTER TABLE `tbl_userlogin`
  ADD PRIMARY KEY (`id_user`);

--
-- Chỉ mục cho bảng `tbt_sanphamnoibat`
--
ALTER TABLE `tbt_sanphamnoibat`
  ADD PRIMARY KEY (`id_sanphamnoibat`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `id_baiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tbl_cartdetail`
--
ALTER TABLE `tbl_cartdetail`
  MODIFY `id_cart_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmucbaiviet`
--
ALTER TABLE `tbl_danhmucbaiviet`
  MODIFY `id_danhmucbaiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `tbl_userlogin`
--
ALTER TABLE `tbl_userlogin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tbt_sanphamnoibat`
--
ALTER TABLE `tbt_sanphamnoibat`
  MODIFY `id_sanphamnoibat` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
