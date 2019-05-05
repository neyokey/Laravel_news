-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th5 05, 2019 lúc 11:43 AM
-- Phiên bản máy phục vụ: 5.7.21
-- Phiên bản PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravel__news`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `insert_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0',
  `post_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `address` text CHARACTER SET utf8 NOT NULL,
  `phone` text COLLATE latin1_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `brand_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `link_fb` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `link_ins` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `link_yt` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `address`, `phone`, `email`, `brand_name`, `link_fb`, `link_ins`, `link_yt`) VALUES
(1, '180 Cao Lỗ, Phường 4, Quận 8, Hồ Chí Minh', '0906464196', 'tranngoctrongd14th03@gmail.com', 'Pizza STU', 'https://www.facebook.com/NeyoKey', 'https://www.instagram.com/neyokey', 'https://plus.google.com/105982857918030209631');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `position` float NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `position` (`position`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`id`, `name`, `link`, `position`, `status`) VALUES
(1, 'Home', '/home/index', 1, 1),
(2, 'About', '/home/about', 4, 1),
(3, 'Menu', '', 2, 1),
(9, 'Contact', '/home/contact', 5, 1),
(10, 'Login', '/home/login', 6, 1),
(11, '<i class=\"icon-user\"></i> $name', '', 8, 1),
(18, 'News', '/home/news', 3, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message_content` text NOT NULL,
  `insert_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `message_content`, `insert_time`, `status`) VALUES
(1, 'blackerghost', 'Trong@yahoo.com', 'sdfsdfs', '2018-06-27 18:27:12', 1),
(2, 'blackerghost', 'master@aruto.me', '', '2018-06-27 18:27:12', 1),
(3, 'master@aruto.me', 'master@aruto.me', 'sfsdfs', '2018-06-27 18:27:12', 1),
(4, 'master@aruto.me', 'master535345@aruto.me', 'sdfsdfsdfsdf<br>&nbsp;sdfsdfsd<br>sdfsdfsd', '2018-06-27 18:27:12', 1),
(5, 'mnaejj', '2hfghfghf@yahoo.com', 'cvbhfhfg', '2018-06-27 18:27:12', 1),
(6, '2hfghfghf@yahoo.com	', '2hfgh5555fghf@yahoo.com', 'gdfgdfgdf', '2018-06-27 18:27:12', 1),
(7, 'master@aruto.me', 'sdfsdfsdfsdfsd@yahoo.com', 'sdfsdfsdfsd \r\nsdfsd sdf\r\nsdfsdfsd', '2018-06-27 18:27:12', 1),
(8, 'sdfsdfsd', 'sdfs1dfsdfsdfsd@yahoo.com', 'sdfsdfsdfsd \r\nsdfsd sdf\r\nsdfsdfsd', '2018-06-27 18:27:12', 1),
(9, 'master@aruto.me', 'master@aruto.me', 'Có giao hàng ko? \r\nBánh nào ngon nhất v?', '2018-06-27 18:27:12', 1),
(10, 'master@aruto.me', 'master@aruto.me', 'asdasdas', '2018-06-27 18:27:12', 1),
(11, 'master@aruto.me', 'master@aruto.me', 'bánh nào ngon nhất?\r\ncó giao hàng ko', '2018-06-27 18:27:12', 1),
(12, 'Nhân viên', 'admin@gmail.com', 'sdfgdfgdf\r\ndfgdf\r\ngdf\r\ngdfgdf', '2018-06-27 18:29:46', 1),
(13, ' dfsdsdf', 'sdfsdfsdfsdfsd@yahoo.com', 'dfsdfsdf', '2018-06-27 18:32:07', 1),
(14, 'sdfsdf', 'sdfsdfsdfsdfsd@yahoo.com', 'sdfsdfsdf', '2018-07-14 19:09:26', 1),
(15, '111', 'Trong@yahoo.com', '11111', '2018-07-14 19:10:11', 1),
(16, 'ádsa', 'Trong@yahoo.com', 'sadasdas', '2018-07-28 20:30:13', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `insert_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(10) NOT NULL,
  `posttype_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_loaibantin` (`posttype_id`) USING BTREE,
  KEY `id_nguodung` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `name`, `content`, `insert_time`, `status`, `posttype_id`, `user_id`) VALUES
(1, 'Sự kết hợp giữa Pizza x Marou', 'Chúng tôi hân hạnh được giới thiệu sự kết hợp đặc biệt giữa Phô Mai Nhà Làm của Pizza 4P’s, hòa quyện cùng dòng Chocolate thượng hạng của Maison Marou trong 3 món tráng miệng mới:Bánh Tart Sô-cô-la phủ kem Mascarpone vị chanh:&nbsp;Vị chua thanh của kem Mascarpone vị chanh tạo ra sự cân bằng với phần đế bánh được làm từ Sô-cô-la thượng hạng của Marou.<img width=\"600\" alt=\"\" src=\"http://pizza4ps.com/admin/wp-content/uploads/2018/01/IMG_6658-122a-1024x1024.jpg\" height=\"600\">Bánh Su nhân kem Mascarpone với kem Camembert phủ Sô-cô-la:&nbsp;Hương vị đặc trưng của kem Camembert tạo nên dấu ấn độc đáo cho sự phối hợp giữa bánh Su kem Mascarpone và dòng Sô-cô-la nóng của Marou.<img width=\"600\" alt=\"\" src=\"http://pizza4ps.com/admin/wp-content/uploads/2018/01/IMG_6878-1-1024x1024.jpg\" height=\"600\">Ravioli nhân Sô-cô-la Ricotta với Kem vị chanh:&nbsp;Món ngọt được biến tấu từ mì Ravioli truyền thống của Ý. Kem vị chanh ấn tượng là điểm nhấn trong món tráng miệng này, góp phần tôn lên sự kết hợp đặc biệt giữa Sô-cô-la Marou hảo hạng và phô mai Ricotta tươi của Pizza 4P’s.<img width=\"600\" alt=\"\" src=\"http://pizza4ps.com/admin/wp-content/uploads/2018/01/IMG_6915b-1024x1024.jpg\" height=\"600\">Từ những hạt cacao hảo hạng, Marou đã tạo nên những thỏi Chocolate tinh tế làm say lòng nhiều người đam mê trên khắp thế giới.Pizza 4P’s tin rằng, với những đối tác tin cậy cùng đồng hành, chúng tôi có thể chia sẻ đam mê và triết lý “Delivering Wow, Sharing Happiness” hơn nữa đến quý khách tại nhà hàng.', '2018-07-05 21:32:19', 1, 2, 8),
(2, 'Pizza Chả Cá trên Kenh14.vn | “Khi văn hóa địa phương được quảng bá qua một món ăn”', 'Pizza Chả cá của chúng tôi đã xuất hiện trên Kenh14.vn. Từ những hình dung ban đầu về sự kết nối đặc biệt giữa một món ăn đặc trưng của Hà Nội và phô mai Camembert Nhà làm của Pizza 4P’s, Kenh14.vn đã ghé thăm nhà hàng Pizza 4P’s để khám phá hương vị đặc biệt và câu chuyện đằng sau Pizza Chả Cá.Bởi Pizza Chả cá cần giữ lại được nét đặc trưng của nguyên liệu truyền thống trong khi phải cân bằng được hương vị để phục vụ cho các thực khách quốc tế, Kenh14.vn đã đặt ra một câu hỏi về sự kết hợp giữa mắm tôm, nước mắm và phô mai trên một chiếc bánh Pizza.Chúng tôi xin gửi lời cảm ơn đến Kenh14.vn đã chia sẻ trải nghiệm của mình về Pizza Chả Cá. Thông tin chi tiết về bài viết, vui lòng đọc thêm tại đây:<br><a target=\"_blank\" rel=\"nofollow\" href=\"http://kenh14.vn/mon-moi-gay-xon-xao-cua-pizza-4ps-pizza-cha-ca-khi-mam-tom-duoc-ket-hop-cung-pho-mai-20180113154254103.chn\">http://kenh14.vn/mon-moi-gay-xon-xao-cua-pizza-4ps-pizza-cha-ca-khi-mam-tom-duoc-ket-hop-cung-pho-mai-20180113154254103.chn</a> <img width=\"1024\" alt=\"\" src=\"http://pizza4ps.com/admin/wp-content/uploads/2018/01/dscf3471nologo-1515829023503-1024x702.jpg\" height=\"702\"><img width=\"1024\" alt=\"\" src=\"http://pizza4ps.com/admin/wp-content/uploads/2018/01/dscf3485nologo-1515829023507-1024x682.jpg\" height=\"682\">', '2018-07-05 21:33:50', 1, 3, 8),
(3, 'Yuzu | Dòng Bia Thủ Công đầu tiên giữa Pizza x 7 Bridges', 'Crafted Beer (Bia thủ công) là một nét văn hóa truyền thống tại nhiều nước châu Âu. Khác với những loại bia thông thường, bia thủ công cho phéo người ủ thêm vào các thành phần đặc biệt để tạo ra công thức riêng dựa trên cảm hứng, kĩ thuật và cảm giác của họ.<img width=\"1024\" alt=\"\" src=\"http://pizza4ps.com/admin/wp-content/uploads/2018/01/IMG_8049-9c-1024x1024.jpg\" height=\"1024\">Tại Pizza 4P’s, chúng tôi sáng tạo những món ăn mới với mong muốn kết nối nền ẩm thực địa phương với hương vị quốc tế. Vì vậy, chúng tôi muốn tạo nên dòng bia của riêng mình để các thực khách có thể thưởng thức cùng với những món ăn tại Pizza 4P’s.Chia sẻ khát vọng cùng chúng tôi, 7 Bridges là một công ty chuyên sản xuất bia, hướng đến việc tạo ra “cầu nối” giữa hương vị địa phương với quốc tế bằng cách cung cấp những loại bia thủ công chất lượng cao đến mọi người tại Việt Nam.Lần này, chúng tôi rất vui được giới thiệu sự hợp tác giữa chúng tôi và 7 Bridges trong một dòng bia thủ công tự làm từ một loại quýt của Nhật – Yuzu.<img width=\"1024\" alt=\"\" src=\"http://pizza4ps.com/admin/wp-content/uploads/2018/01/IMG_8011a-1-1024x1024.jpg\" height=\"1024\">Góp mặt trong nhiều bí quyết ẩm thực, Yuzu tạo ra hương vị thanh mát đặc trưng cho các món ăn. Sự phối hợp giữa quýt Yuzu và muối biển trong dòng bia thủ công lần này mang đến vị bia tươi đặc biệt kết hợp hoàn hảo với các món Pasta và Phô Mai Nhà Làm của Pizza 4P’s.Chúng tôi hi vọng dòng bia thủ công này sẽ mang những trải nghiệm tươi mới đến quý khách. Bia thủ công Yuzu hiện đã có mặt tại các nhà hàng của chúng tôi ở Hà Nội, Đà Nẵng và Pizza 4P’s Hai Bà Trưng.', '2018-07-05 21:34:14', 1, 2, 8),
(4, 'Nước giấm Trái cây Nhà làm', 'Từ ngàn năm trước tại Nhật, nước giấm trái cây đã trở nên được ưa chuộng bởi những lợi ích dành cho sức khỏe.Tại Pizza 4P’s, chúng tôi tạo nên nước giấm trái cây từ syrup nhà làm – sự kết hợp giữa giấm uống và trái cây tự nhiên. Với hương vị tươi mát từ trái cây nhiệt đới hòa quyện cùng vị chua thanh của giấm, loại thức uống này mang đến cảm giác thư giãn và cân bằng cho bữa ăn.Nước giấm trái cây hiện đã có mặt tại Pizza 4P’s Hai Bà Trưng, với 3 hương vị trái cây tự nhiên: Dâu, Chanh Dây và Xoài. Chúng tôi mong rằng dòng thức uống mới này sẽ mang một trải nghiệm tươi mới hơn đến quý khách tại nhà hàng.<span><img width=\"300\" alt=\"\" src=\"http://pizza4ps.com/admin/wp-content/uploads/2018/01/IMG_7912a1-1024x1024.jpg\" height=\"300\">&nbsp;&nbsp; &nbsp;&nbsp;<img width=\"300\" alt=\"\" src=\"http://pizza4ps.com/admin/wp-content/uploads/2018/01/IMG_7932a1-1024x1024.jpg\" height=\"300\"></span>', '2018-07-05 21:35:51', 1, 2, 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posttype`
--

DROP TABLE IF EXISTS `posttype`;
CREATE TABLE IF NOT EXISTS `posttype` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `posttype`
--

INSERT INTO `posttype` (`id`, `name`, `status`) VALUES
(1, 'Khuyến mãi', 1),
(2, 'Ẩm thực', 1),
(3, 'Truyền thông', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `submenu`
--

DROP TABLE IF EXISTS `submenu`;
CREATE TABLE IF NOT EXISTS `submenu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `link` varchar(255) CHARACTER SET utf8 NOT NULL,
  `position` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `menu_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_index` (`position`,`menu_id`),
  KEY `submenu_ibfk_1` (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `submenu`
--

INSERT INTO `submenu` (`id`, `name`, `link`, `position`, `status`, `menu_id`) VALUES
(1, 'Combo', '/home/combo', 1, 1, 3),
(2, 'Pizza', '/home/pizza', 2, 1, 3),
(3, 'Main', '/home/main', 3, 1, 3),
(4, 'Appetizer', '/home/appetizer', 4, 1, 3),
(5, 'Drinks', '/home/drinks', 5, 1, 3),
(6, 'Manage', '/admin/', 1, 1, 11),
(7, 'Account infomation', '/home/info/$id', 2, 1, 11),
(8, 'Cart', '/home/cart', 3, 1, 11),
(9, 'Logout', '/home/logout', 4, 1, 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` int(10) NOT NULL DEFAULT '1',
  `usertype_id` int(10) NOT NULL DEFAULT '4',
  PRIMARY KEY (`id`),
  KEY `nguoidung_ibfk_1` (`usertype_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `status`, `usertype_id`) VALUES
(2, 'Tuấn Gay', 'GayTuan6969@gmail.com', '$2y$10$pJcsGi76GNFlE1g3mB2eXOtgr7a6DO2VroHq/E1eurUTY6sJqmywy', 1, 3),
(7, 'Trong', 'tranngoctrongd14th03@gmail.com', '$2y$10$VGdSwkYAL18fssmwcEZfe.hVO3Ik7RvZbqa5ga2Q.8p8zW0GeyheG', 1, 2),
(8, 'admin', 'master@aruto.me', '$2y$10$w3hneZ2YxDuypePcWFfGv.t.qm46fIkIzJCWxg/HAqZUWv2atW6kG', 1, 1),
(10, 'admin', 'admin@gmail.com', '$2y$10$9GbqrezYvYQbuVMsfkHbTOv.7dPCZUlLikoha85dJPQvzSByOmkU2', 1, 3),
(11, 'blackerghost', '1master@aruto.me', '$2y$10$Ba4BArWB2f6lH.7xQKYdwOGRGP.P2VPHGOFq0IB9zjqNLeU5PTAne', 0, 3),
(12, 'mnaejj', 'master15@aruto.me', '$2y$10$mE.7rADyK8zSViX2HQDqWOBHQJcv3VfCTcGW4mIN6zNFnRKlCxyMa', 1, 6),
(13, 'vxcvxc', '111master@aruto.me', '$2y$10$sorj5PZs7R709EDkUz/soO.3AXqn7cp1fFlYRGXDyMvX4TZHbhu2i', 1, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `usertype`
--

DROP TABLE IF EXISTS `usertype`;
CREATE TABLE IF NOT EXISTS `usertype` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `usertype`
--

INSERT INTO `usertype` (`id`, `name`, `status`) VALUES
(1, 'Cửa hàng trưởng', 1),
(2, 'Người quản trị', 1),
(3, 'Nhân viên', 1),
(4, 'Thành viên', 1),
(5, 'Thành viên bạc', 1),
(6, 'Thành viên vàng', 1);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`posttype_id`) REFERENCES `posttype` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `submenu`
--
ALTER TABLE `submenu`
  ADD CONSTRAINT `submenu_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`usertype_id`) REFERENCES `usertype` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
