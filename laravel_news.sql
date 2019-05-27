-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th5 27, 2019 lúc 08:19 PM
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
-- Cơ sở dữ liệu: `laravel_news`
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
  `image` varchar(250) NOT NULL DEFAULT '/img/user/guest.png',
  `insert_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0',
  `post_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `content`, `image`, `insert_time`, `status`, `post_id`) VALUES
(2, 'sdfsd', 'xvcvxc', 'sdfsfsdf', '/img/user/guest.png', '2019-05-12 12:43:49', 1, 1),
(3, 'fdg', 'dfgdfasd@asdasd.com', 'gdfg', '/img/user/guest.png', '2019-05-14 16:59:28', 1, 4),
(4, 'mnaejj', 'admin@gmail.com', 'cxvxcvxcvxcv', '/img/user/guest.png', '2019-05-14 17:03:38', 1, 4),
(5, 'Nhân viên', 'Trong@gmail.com', 'Game choi hay khong', '/img/user/member.png', '2019-05-15 14:58:20', 1, 2),
(6, 'master@aruto.me', 'Trong@yahoo.com', 'sdfsdfsd', '/img/user/guest.png', '2019-05-15 15:24:39', 1, 5),
(7, 'mnaejj', 'tranngoctrongd14th03@gmail.com', 'dsfxcvxsdf', '/img/user/guest.png', '2019-05-15 15:27:55', 1, 5),
(8, '1', 'xcvvsd2@aasda.com', '123456', '/img/user/guest.png', '2019-05-15 15:52:04', 1, 5),
(9, 'admin', 'tranngoctrongd14th03@gmail.com', 'ok', '/img/user/admin.jpg', '2019-05-15 15:54:38', 1, 5),
(10, 'asasasasa', 'abc@gmail.com', 'hello', '/img/user/1477ef126ddc07c0f7ea1823972db300--aoi-ogata-snow.jpg', '2019-05-15 17:31:19', 1, 5),
(11, 'admin', 'tranngoctrongd14th03@gmail.com', 'wel', '/img/user/admin.jpg', '2019-05-27 19:57:19', 1, 3);

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
(1, '180 Cao Lỗ, Phường 4, Quận 8, Hồ Chí Minh', '0906464196', 'tranngoctrongd14th03@gmail.com', 'ModAPK', 'https://www.facebook.com/NeyoKey', 'https://www.instagram.com/neyokey', 'https://plus.google.com/105982857918030209631');

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
  `status` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `position` (`position`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`id`, `name`, `link`, `position`, `status`) VALUES
(1, 'home', '/index', 1, 1),
(3, 'games', NULL, 2, 1),
(19, 'manager', NULL, 6, 1),
(21, 'contact', '/contact', 5, 1),
(22, 'apps', NULL, 3, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `insert_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `content`, `insert_time`, `status`) VALUES
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
(16, 'ádsa', 'Trong@yahoo.com', 'sadasdas', '2018-07-28 20:30:13', 1),
(17, 'mnaejj', 'admin@gmail.com', '123456', '2019-05-13 16:21:27', 1),
(18, 'master@aruto.me', 'admin@gmail.com', 'required=\"required\"', '2019-05-13 16:36:59', 1),
(19, 'blackerghost', 'tranngoctrongd14th03@gmail.com', 'sdfbcvbc', '2019-05-13 16:41:42', 1),
(20, 'blackerghost', 'tranngoctrongd14th03@gmail.com', 'sdfbcvbc', '2019-05-13 16:41:59', 1),
(21, 'master@aruto.me', 'master@aruto.me', 'asssssasa', '2019-05-15 14:57:25', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8mb4 NOT NULL,
  `image` varchar(255) NOT NULL,
  `insert_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `view` int(10) NOT NULL DEFAULT '0',
  `status` int(10) NOT NULL DEFAULT '0',
  `posttype_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_loaibantin` (`posttype_id`) USING BTREE,
  KEY `id_nguodung` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `name`, `content`, `image`, `insert_time`, `view`, `status`, `posttype_id`, `user_id`) VALUES
(1, 'Attack On Titan Offline MultiPlayer v2.0 MOD APK Unlimited Coins', '<div class=\"td-post-content\">\r\n\r\n<p>Attack On Titan Offline MultiPlayer mod apk, Download apk&nbsp;Attack On Titan Offline MultiPlayer Mod, Android game&nbsp;Attack On Titan Offline MultiPlayer mod, Game&nbsp;Attack On Titan Offline MultiPlayer mod free on android</p>\r\n<ul class=\"my-list-content\">\r\n<li><span style=\"color: #b7b233;\"><strong>NAME:&nbsp;Attack On Titan Offline MultiPlayer</strong></span></li>\r\n<li>Version:&nbsp;&nbsp;2.0</li>\r\n<li>Root needed:&nbsp;&nbsp;NO</li>\r\n<li>Internet required:&nbsp;&nbsp;YES</li>\r\n<li>Size:&nbsp;<span id=\"storage-0\" class=\"storage\">83 MB</span></li>\r\n<li>CHPlay URL:</li>\r\n<li>Price: Free</li>\r\n</ul>\r\n<p><span style=\"color: #b7b233;\"><strong>MODS FEATURE:</strong></span></p>\r\n<ul>\r\n<li>Unlimited Coins</li>\r\n</ul>\r\n<p>Credits: <strong><span style=\"color: #b73338;\">???</span></strong><br>\r\n<span style=\"color: #b7b233;\"><strong>PREVIEW IMAGE:</strong></span><br>\r\n<img class=\"aligncenter\" src=\"https://i.imgur.com/5YMzkxc.png\" alt=\"Game Attack On Titan Offline MultiPlayer Mod Free Download  /\" scale=\"0\"><span style=\"color: #b7b233;\"><strong>GAME DESCRIPTION:</strong></span><br>\r\nAttack On Titan Offline MultiPlayer is an action game genre that plays a unique and beautiful Anime version for Android. Experience the game Attack On Titan Offline MultiPlayer, players will be able to show off their adventures in a super-large map centered around the story of the game Attack On Titan that has stormed the PC game market. The game Attack On Titan Android version is a modified version of the PC version to be compatible with Android models, making it possible to experience Attack On Titan on your beloved smartphone.</p>\r\n\r\n<p><span style=\"color: #b7b233;\"><strong>DOWNLOAD HERE:</strong></span></p>\r\n<div class=\"su-button-center\"><a href=\"https://gamemod.io/download/?url=https%3A%2F%2Fdl.gamemod.io%2Ffile%2FYDCYE6E5D20A\" class=\"su-button su-button-style-flat su-button-wide ext-link\" style=\"color:#FFFFFF;background-color:#337ab7;border-color:#296292;border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px\" target=\"_blank\" rel=\"noopener external nofollow\" title=\"Download File!\" onclick=\"this.target=\'_blank\';\"><span style=\"color:#FFFFFF;padding:7px 22px;font-size:17px;line-height:26px;border-color:#70a2cd;border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px;text-shadow:px 0px 0px #000000;-moz-text-shadow:px 0px 0px #000000;-webkit-text-shadow:px 0px 0px #000000\"><i class=\"sui sui-download\" style=\"font-size:17px;color:#FFFFFF\"></i> Attack On Titan Offline MultiPlayer v2.0 Mod (APK)</span></a></div>\r\n</div>', 'https://gamemod.io/wp-content/uploads/2018/12/attack_on_titan_offline_multiplayer.png', '2018-07-05 21:33:50', 18, 1, 1, 8),
(2, 'The Wolf v1.7.3 MOD APK Money/Diamond', '<div class=\"td-post-content\">\r\n<p>The Wolf mod apk, Download apk&nbsp;The Wolf Mod, Android game&nbsp;The Wolf mod, Game&nbsp;The Wolf mod free on android</p>\r\n<ul class=\"my-list-content\">\r\n<li><span style=\"color: #b7b233;\"><strong>NAME:&nbsp;The Wolf</strong></span></li>\r\n<li>Version:&nbsp;&nbsp;1.7.3</li>\r\n<li>Root needed:&nbsp;&nbsp;NO</li>\r\n<li>Internet required:&nbsp;&nbsp;YES</li>\r\n<li>Size:&nbsp;<span id=\"storage-0\" class=\"storage\"> 81Mb</span></li>\r\n<li>CHPlay URL:&nbsp;<a href=\"https://play.google.com/store/apps/details?id=com.swiftappskom.thewolfrpg\" target=\"b_lank\" rel=\"noopener noreferrer\" class=\"local-link\">https://play.google.com/store/apps/details?id=com.swiftappskom.thewolfrpg</a></li>\r\n<li>Price: Free</li>\r\n</ul>\r\n<p><span style=\"color: #b7b233;\"><strong>MODS FEATURE:</strong></span></p>\r\n<ul>\r\n<li>Money</li>\r\n<li>Diamond</li>\r\n<li>In the game you can spend your money as you like, your money will not decrease.</li>\r\n<li>In game you can spend diamonds as you like, the amount of diamonds will not decrease.</li>\r\n<li>\r\n<h3>(Bạn có thể mua Tài khoản VIP, kỹ năng và thuộc tính ngay cả khi bạn không có đủ tiền)</h3>\r\n</li>\r\n</ul>\r\n<p>Credits: <strong><span style=\"color: #b73338;\">???</span></strong><br>\r\n<span style=\"color: #b7b233;\"><strong>PREVIEW IMAGE:</strong></span><br>\r\n<img class=\"aligncenter\" src=\"https://i.imgur.com/Md2Cpiv.png\" alt=\"Game The Wolf Mod Free Download /\" scale=\"0\"><span style=\"color: #b7b233;\"><strong>GAME DESCRIPTION:</strong></span><br>\r\nDive into the world of wild wolves and live your life as one of them! The best wolf RPG on mobile is finally here. Explore the amazing environment, develop your character and upgrade your skills to become the Alpha of your pack! You can try your strength in one of two modes: CO-OP or PVP – everything in Online Real-Time Multiplayer. Play with people from all over the World!</p>\r\n<p>Online Real-Time Multiplayer RPG<br>\r\nStunning 3D graphics<br>\r\nBeautiful environment<br>\r\nRealistic animals<br>\r\nCharacter development and upgrades<br>\r\nCooperative multiplayer hunting and PVP Battle Arena modes<br>\r\nSmooth performance</p>\r\n<p><span style=\"color: #b7b233;\"><strong>DOWNLOAD HERE:</strong></span></p>\r\n<div class=\"su-button-center\"><a href=\"https://gamemod.io/download/?url=https%3A%2F%2Fupfile.us%2Ffile%2FQJGZ814EAFE0\" class=\"su-button su-button-style-flat su-button-wide ext-link\" style=\"color:#FFFFFF;background-color:#337ab7;border-color:#296292;border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px\" target=\"_blank\" rel=\"noopener external nofollow\" title=\"Download File!\" onclick=\"this.target=\'_blank\';\"><span style=\"color:#FFFFFF;padding:7px 22px;font-size:17px;line-height:26px;border-color:#70a2cd;border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px;text-shadow:px 0px 0px #000000;-moz-text-shadow:px 0px 0px #000000;-webkit-text-shadow:px 0px 0px #000000\"><i class=\"sui sui-download\" style=\"font-size:17px;color:#FFFFFF\"></i> The Wolf v1.7.3 Mod (APK)</span></a></div>\r\n</div>', 'https://gamemod.io/wp-content/uploads/2018/11/The-Wolf-Mod-Apk.png', '2018-07-05 21:32:19', 3, 1, 2, 8),
(3, 'Idle Sweet Bakery v1.12.1 MOD free purchases', '<div class=\"td-post-content\">\r\n<p>Download Idle Sweet Bakery MOD free on android, Idle Sweet Bakery mod apk, Android game&nbsp;Idle Sweet Bakery mod, Game&nbsp;Idle Sweet Bakery free mod</p>\r\n<p><span style=\"color: #b7b233;\"><strong>NAME: Idle Sweet Bakery</strong></span></p>\r\n<ul class=\"my-list-content\">\r\n<li>Version: 1.12.1</li>\r\n<li>Size:&nbsp;<span id=\"storage-0\" class=\"storage\">30M</span></li>\r\n<li>Price: Free</li>\r\n<li>Root needed:&nbsp;&nbsp;NO</li>\r\n<li>Requires Android:&nbsp;&nbsp;4.1 and up</li>\r\n<li>CHPlay URL:&nbsp;<a href=\"https://play.google.com/store/apps/details?id=com.ludoslabs.idlesweetbakery&amp;hl=en&amp;gl=us\" target=\"b_lank\" rel=\"noopener noreferrer\" class=\"local-link\">com.ludoslabs.idlesweetbakery</a></li>\r\n</ul>\r\n<p><span style=\"color: #b7b233;\"><strong>MODS FEATURE:</strong></span></p>\r\n<ul>\r\n<li>free purchases</li>\r\n</ul>\r\n<p>Credits: <strong><span style=\"color: #b73338;\">www.GameMod.io</span></strong><br>\r\n<span style=\"color: #b7b233;\"><strong>PREVIEW IMAGE:</strong></span></p>\r\n<p><img class=\"aligncenter\" src=\"https://lh3.googleusercontent.com/wS-1Bw1zX3H1mZKlg1ytbKU9IgqkKdWzQdAHk7TyQ0qYmwsm0Xe_nyE40JO7vYlbPA\" alt=\"Download Idle Sweet Bakery free mod on android\" scale=\"0\"></p>\r\n\r\n<p><span style=\"color: #b7b233;\"><strong>DOWNLOAD HERE:</strong></span></p>\r\n<div class=\"su-button-center\"><a href=\"https://gamemod.io/download/?url=https%3A%2F%2Fupfile.us%2Ffile%2FCM374495FBD2\" class=\"su-button su-button-style-flat su-button-wide ext-link\" style=\"color:#FFFFFF;background-color:#b73338;border-color:#92292d;border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px\" target=\"_blank\" rel=\"noopener external nofollow\" title=\"Download File!\" onclick=\"this.target=\'_blank\';\"><span style=\"color:#FFFFFF;padding:7px 22px;font-size:17px;line-height:26px;border-color:#cd7074;border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px;text-shadow:px 0px 0px #000000;-moz-text-shadow:px 0px 0px #000000;-webkit-text-shadow:px 0px 0px #000000\"><i class=\"sui sui-download\" style=\"font-size:17px;color:#FFFFFF\"></i> Idle Sweet Bakery v1.12.1 Mod (APK)</span></a></div>\r\n</div>', 'https://gamemod.io/wp-content/uploads/2019/03/Idle-Sweet-Bakery.png', '2018-07-05 21:34:14', 134, 1, 1, 8),
(4, 'Grim Soul: Dark Fantasy Survival v1.9.3 MOD One Hit – God Mode', '<div class=\"td-post-content\">\r\n<p>Download Grim Soul: Dark Fantasy Survival MOD free on android, Grim Soul: Dark Fantasy Survival mega mod apk, Android game&nbsp;Grim Soul: Dark Fantasy Survival apk mod, Game&nbsp;Grim Soul: Dark Fantasy Survival free mod</p>\r\n<p><span style=\"color: #b7b233;\"><strong>NAME: Grim Soul: Dark Fantasy Survival</strong></span></p>\r\n<ul class=\"my-list-content\">\r\n<li>Version: 1.9.3</li>\r\n<li>Size:&nbsp;<span id=\"storage-0\" class=\"storage\">86M</span></li>\r\n<li>Category:&nbsp;Role Playing</li>\r\n<li>Developer:&nbsp;Kefir!</li>\r\n<li>Price: Free</li>\r\n<li>Root needed:&nbsp;<span style=\"color: #b73338;\"><strong>NO</strong></span></li>\r\n<li>Internet required:&nbsp;YES</li>\r\n<li>Requires Android:&nbsp;&nbsp;4.1 and up</li>\r\n<li>App ID: fantasy.survival.game.rpg</li>\r\n<li>Playstore Link:&nbsp;<a href=\"https://play.google.com/store/apps/details?id=fantasy.survival.game.rpg&amp;hl=en&amp;gl=us\" target=\"b_lank\" rel=\"noopener noreferrer\" class=\"local-link\">Grim Soul: Dark Fantasy Survival – Apps on Google Play</a></li>\r\n</ul>\r\n<p><span style=\"color: #b7b233;\"><strong>MODS FEATURE:</strong></span></p>\r\n<ul>\r\n<li>INFINITO CRAFT</li>\r\n<li>MAX DURABILITY</li>\r\n<li>ENERGY UNLIMITED – ENERGY UNLIMITED</li>\r\n<li>FREE BUILDING – FREE BUILDING</li>\r\n<li>DO NOT HAVE ROOT – NO ROOT</li>\r\n<li>Infinite armor</li>\r\n<li>Complete no need of resources</li>\r\n<li><strong><span style=\"color: #ff0000;\">GODS MOD:</span></strong></li>\r\n<li><strong><span style=\"color: #ff0000;\">ONE HIT</span></strong></li>\r\n<li><strong><span style=\"color: #ff0000;\">GOD MODE</span></strong></li>\r\n<li><strong><span style=\"color: #ff0000;\">FREE STORE</span></strong></li>\r\n</ul>\r\n<p>Credits: <strong><span style=\"color: #b73338;\">www.GameMod.io</span></strong></p>\r\n<p><span style=\"color: #b7b233;\"><strong>NOTE:</strong></span></p>\r\n<ul>\r\n<li><span style=\"color: #7ab733;\">The God Mod can damage your account. Be careful before downloading. Thank you for supporting the website!</span></li>\r\n</ul>\r\n<p><span style=\"color: #b7b233;\"><strong>PREVIEW:</strong></span></p>\r\n<p><img src=\"https://i.imgur.com/fPabLgK.png\" scale=\"0\" style=\"width: 50%;\"></p><p><br></p>\r\n<p><img src=\"https://i.imgur.com/a42BT9V.png\" scale=\"0\" style=\"width: 50%;\"></p>\r\n<p><span style=\"color: #b7b233;\"><strong>GAME DESCRIPTION:</strong></span><br>\r\n</p><div class=\"su-expand su-expand-link-style-dashed\" data-height=\"100\"><div class=\"su-expand-content\" style=\"color: rgb(51, 51, 51); max-height: none; overflow: hidden;\"><b>Download Grim Soul: Dark Fantasy Survival MOD free on android</b> – Grim Soul is a free-to-play dark fantasy survival MMORPG. A once-prosperous Imperial province, the Plaguelands are now covered in fear and darkness. Its inhabitants have turned into endlessly wandering souls. Your goal is to survive as long as you can in this dangerous land. Collect resources, build a fortress, defend yourself from enemies, and survive combat with zombie-knights and other monsters in this new Souls-like game!<p></p>\r\n<p>● EXPLORE NEW LANDS</p>\r\n<p>Explore the Empire afflicted by the Grey Decay. Discover mysterious Places of Power. Try infiltrating ancient dungeons and other survivors’ castles to obtain the most valuable resources.</p>\r\n<p>● LEARN CRAFTING</p>\r\n<p>Build workbenches and craft new resources. Discover new designs and create realistic medieval weapons and armor to battle with the Plaguelands’ most dangerous inhabitants.</p>\r\n<p>● IMPROVE YOUR CASTLE</p>\r\n<p>Evolve your shelter into invulnerable stronghold. Build a sound foundation for defenses against the undead and other survivors. Defend your citadel, construct and place traps for uninvited guests. But don’t forget to explore your enemies’ territory to collect valuable loot.</p>\r\n<p>● DEFEAT ENEMIES</p>\r\n<p>Morning star? Halberd? Maybe an arbalet? Choose from an arsenal of deadly weapons. Deal critical hits and evade enemy attacks. Use different fighting styles to crush the rivals. Find an effective strategy for wielding every type of weapon!</p>\r\n<p>● CLEAR THE DUNGEONS</p>\r\n<p>Descend into the great orders’ secret catacombs. An entirely new dungeon awaits you every time! Fight epic bosses, attack undeads, look out for deadly traps, and reach the treasure. Find the legendary flaming sword!</p>\r\n<p>● SADDLE YOUR HORSE</p>\r\n<p>Build a stable and don’t miss your chance to gallop into battle against hordes of undead on your war horse or ride through a grim medieval landscape. You can build a boat, a cart, and even a carriage – if you can obtain the necessary parts.</p>\r\n<p>● OVERCOME HARDSHIP</p>\r\n<p>Life in the Plaguelands is solitary, poor, nasty, brutish and short. Hunger and thirst will kill you faster than cold steel in this sinister medieval MMORPG. Conquer nature, hunt dangerous animals, prepare their meat over an open fire, or kill other survivors to replenish your reserves.</p>\r\n<p>● BEFRIEND THE RAVENS</p>\r\n<p>Build a raven cage and these smart birds will be your messengers. Watch the skies. Ravens always circle over something of interest. And that which ravens take interest in will always be of interest for a lonely Exile.</p>\r\n<p>● JOIN A CLAN</p>\r\n<p>A clan will increase your chances of surviving one more day in this cruel and bitter medieval world. Call your brothers in arms to cut down damned knights and bloodthirsty witches. Set your own rules in the Kingdom.</p>\r\n<p>● PREPARE FOR THE NIGHT</p>\r\n<p>When night descends, darkness floods the world, and you’ll need light to escape the terrifying Night Guest.</p>\r\n<p>● RECEIVE REWARDS</p>\r\n<p>You may feel alone, but you are not. There’s always something to do. Complete quests that bring ravens and receive rewards. Take every chance – that’s the best strategy for survival in the grim reality of this forgotten kingdom.</p>\r\n<p>● SOLVE THE MYSTERY</p>\r\n<p>Search for letters and scrolls to learn about the Empire’s ancient history. Find keys to solving the mystery of your past and the truth behind this unfolding catastrophe.</p>\r\n<p>Life in the Plaguelands is a constant battle not only with hunger and thirst but with hordes of undead and cursed beasts. Conquer nature and fight in this action RPG for real heroes. Become a legend! Storm enemy castles, collect loot, and rule the Plaguelands from an iron throne!</p>\r\n<p>Grim Soul is a free-to-play action MMORPG, but it contains in-game items that can be purchased. Your strategy for survival will determine everything. Begin your journey and become a hero in a brutal game for fearless warriors.</p></div><div class=\"su-expand-link su-expand-link-more\" style=\"text-align:left\"><a href=\"javascript:;\" style=\"color:#0088FF;border-color:#0088FF\"><i class=\"sui sui-chevron-circle-down\" style=\"\" aria-label=\"\"></i><span style=\"border-color:#0088FF\">Full Description</span></a></div></div>\r\n<h2 style=\"text-align: center;\"><span style=\"color: #ff0000;\"><strong>The God Mod can damage your account. Be careful before downloading. Thank you for supporting the website!</strong></span></h2>\r\n<p><span style=\"color: #b7b233;\"><strong>DOWNLOAD HERE:</strong></span></p>\r\n<div class=\"su-button-center\"><a href=\"https://gamemod.io/download/?url=https%3A%2F%2Fdl.gamemod.io%2Ffile%2F3KM575BBD80\" class=\"su-button su-button-style-flat su-button-wide ext-link\" style=\"color:#FFFFFF;background-color:#b73338;border-color:#92292d;border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px\" target=\"_blank\" rel=\"noopener external nofollow\" title=\"Download File!\" onclick=\"this.target=\'_blank\';\"><span style=\"color:#FFFFFF;padding:7px 22px;font-size:17px;line-height:26px;border-color:#cd7074;border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px;text-shadow:px 0px 0px #000000;-moz-text-shadow:px 0px 0px #000000;-webkit-text-shadow:px 0px 0px #000000\"><i class=\"sui sui-download\" style=\"font-size:17px;color:#FFFFFF\"></i> Grim Soul: Dark Fantasy Survival v1.9.3 Mod (APK_SIGNED)</span></a></div>\r\n<div class=\"su-button-center\"><a href=\"https://gamemod.io/download/?url=https%3A%2F%2Fupfile.us%2Ffile%2F7989F36C37EB\" class=\"su-button su-button-style-flat su-button-wide ext-link\" style=\"color:#FFFFFF;background-color:#b73338;border-color:#92292d;border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px\" target=\"_blank\" rel=\"noopener external nofollow\" title=\"Download File!\" onclick=\"this.target=\'_blank\';\"><span style=\"color:#FFFFFF;padding:7px 22px;font-size:17px;line-height:26px;border-color:#cd7074;border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px;text-shadow:px 0px 0px #000000;-moz-text-shadow:px 0px 0px #000000;-webkit-text-shadow:px 0px 0px #000000\"><i class=\"sui sui-download\" style=\"font-size:17px;color:#FFFFFF\"></i> Grim Soul: Dark Fantasy Survival v1.9.3 Mod (LIB_MOD_ROOTED)</span></a></div>\r\n<hr>\r\n<hr>\r\n<div class=\"su-button-center\"><a href=\"https://gamemod.io/download/?url=https%3A%2F%2Fupfile.us%2Ffile%2FVN3FE339BAE5\" class=\"su-button su-button-style-flat su-button-wide ext-link\" style=\"color:#FFFFFF;background-color:#337ab7;border-color:#296292;border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px\" target=\"_blank\" rel=\"noopener external nofollow\" title=\"Download File!\" onclick=\"this.target=\'_blank\';\"><span style=\"color:#FFFFFF;padding:7px 22px;font-size:17px;line-height:26px;border-color:#70a2cd;border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px;text-shadow:px 0px 0px #000000;-moz-text-shadow:px 0px 0px #000000;-webkit-text-shadow:px 0px 0px #000000\"><i class=\"sui sui-download\" style=\"font-size:17px;color:#FFFFFF\"></i> Grim Soul v1.9.3 Mega MOD (APK)</span></a></div>\r\n<div class=\"su-button-center\"><a href=\"https://gamemod.io/download/?url=https%3A%2F%2Fupfile.us%2Ffile%2F1S102BFE7E5E\" class=\"su-button su-button-style-flat su-button-wide ext-link\" style=\"color:#FFFFFF;background-color:#337ab7;border-color:#296292;border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px\" target=\"_blank\" rel=\"noopener external nofollow\" title=\"Download File!\" onclick=\"this.target=\'_blank\';\"><span style=\"color:#FFFFFF;padding:7px 22px;font-size:17px;line-height:26px;border-color:#70a2cd;border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px;text-shadow:px 0px 0px #000000;-moz-text-shadow:px 0px 0px #000000;-webkit-text-shadow:px 0px 0px #000000\"><i class=\"sui sui-download\" style=\"font-size:17px;color:#FFFFFF\"></i> Grim Soul v1.9.2 Mega MOD (APK)</span></a></div>\r\n</div>', 'https://gamemod.io/wp-content/uploads/2019/05/Grim-Soul-Dark-Fantasy-Survival.png', '2018-07-05 21:35:51', 6, 1, 1, 8),
(5, 'Fire Gun: Brick Breaker v1.7 MOD High DMG – Free Upgrade', '<div class=\"td-post-content\">\r\n<ul class=\"my-list-content\">\r\n<li>Version: 1.7</li>\r\n<li>Size: <span id=\"storage-0\" class=\"storage\">68M</span></li>\r\n<li>Price: Free</li>\r\n<li>Root needed:  NO</li>\r\n<li>Requires Android:  4.0.3 and up</li>\r\n<li>CHPlay URL: <a href=\"https://play.google.com/store/apps/details?id=com.webzen.appmigos.firegun.android&hl=en&gl=us\" target=\"b_lank\" rel=\"noopener noreferrer\" class=\"local-link\">com.webzen.appmigos.firegun.android</a></li>\r\n</ul>\r\n<p><span style=\"color: #b7b233;\"><strong>MODS FEATURE:</strong></span></p>\r\n<ul>\r\n<li>High DMG</li>\r\n<li>Free Upgrade (Untest)</li>\r\n</ul>\r\n<p>Credits: <strong><span style=\"color: #b73338;\">www.GameMod.io</span></strong></p>\r\n<p><span style=\"color: #b7b233;\"><strong>PREVIEW VIDEO:</strong></span></p>\r\n<p><iframe width=\"100%\" height=\"522\" src=\"https://www.youtube.com/embed/jb_95wxjedg?feature=oembed\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen=\"\" style=\"height: 391.5px;\"></iframe></p>\r\n<p><span style=\"color: #b7b233;\"><strong>GAME DESCRIPTION:</strong></span><br>\r\nAre you ready to break all these blocks apart?<br>\r\nArm your character to the teeth and destroy even the littlest objects standing in your way!</p>\r\n<p>Fire Gun is a mobile shooting brick breaker game -not like any other. In which by choosing characters with unique features and distinctive guns, you’ll be able to tear apart any obstacle.<br>\r\nEquip your character with every type of gun imaginable. Even if you know nothing about guns, that’s not a problem! There are many flashy and eye-catching models. Try them all to see which one fits your style!<br>\r\nWatch your reflexes, though! You might have to think fast while choosing which side to swipe to. You don’t want to hit that block, do you?<br>\r\nCover your character with a protective field to avoid crashing into anything which tries to stand in your way. Try your best to get all the power-ups which will add amazing features to your shots.<br>\r\nCollect as much points as you can and challenge yourself to see how far you can reach. Can you handle the speed?</p>\r\n<p><span style=\"color: #b7b233;\"><strong>DOWNLOAD HERE:</strong></span></p>\r\n<div class=\"su-button-center\"><a href=\"https://gamemod.io/download/?url=https%3A%2F%2Fdl.gamemod.io%2Ffile%2F7U8C2CCF9097\" class=\"su-button su-button-style-flat su-button-wide ext-link\" style=\"color:#FFFFFF;background-color:#b73338;border-color:#92292d;border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px\" target=\"_blank\" rel=\"noopener external nofollow\" title=\"Download File!\" onclick=\"this.target=\'_blank\';\"><span style=\"color:#FFFFFF;padding:7px 22px;font-size:17px;line-height:26px;border-color:#cd7074;border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px;text-shadow:px 0px 0px #000000;-moz-text-shadow:px 0px 0px #000000;-webkit-text-shadow:px 0px 0px #000000\"><i class=\"sui sui-download\" style=\"font-size:17px;color:#FFFFFF\"></i> Fire Gun: Brick Breaker v1.7 Mod (APK)</span></a></div>\r\n</div>', 'https://gamemod.io/wp-content/uploads/2019/04/Fire-Gun-Brick-Breaker.png', '2019-05-13 11:13:26', 71, 1, 1, 17),
(6, 'PUBG MOBILE LITE v0.10.0 Script H.A.C.K New/Menu Mod', '<div class=\"td-post-content\">\r\n<p><span style=\"font-family: &quot;Times New Roman&quot;;\">PUBG MOBILE LITE mod apk, Download apk&nbsp;PUBG MOBILE LITE Mod, Android game&nbsp;PUBG MOBILE LITE mod, Game&nbsp;PUBG MOBILE LITE mod free on android</span></p><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n</span><ul class=\"my-list-content\"><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n</span><li><span style=\"color: rgb(183, 178, 51); font-family: &quot;Times New Roman&quot;;\"><strong>NAME:&nbsp;PUBG MOBILE LITE</strong></span></li><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n</span><li><span style=\"font-family: &quot;Times New Roman&quot;;\">Version:&nbsp;&nbsp;0.10.0</span></li><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n</span><li><span style=\"font-family: &quot;Times New Roman&quot;;\">Root needed:&nbsp;&nbsp;NO</span></li><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n</span><li><span style=\"font-family: &quot;Times New Roman&quot;;\">Internet required:&nbsp;&nbsp;YES</span></li><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n</span><li><span style=\"font-family: &quot;Times New Roman&quot;;\">Requires Android:&nbsp;&nbsp;4.0.3 and up</span></li><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n</span><li><span style=\"font-family: &quot;Times New Roman&quot;;\">Size:&nbsp;</span><span id=\"storage-0\" class=\"storage\" style=\"font-family: &quot;Times New Roman&quot;;\">34M</span></li><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n</span><li><span style=\"font-family: &quot;Times New Roman&quot;;\">CHPlay URL:&nbsp;</span><a href=\"https://play.google.com/store/apps/details?id=com.tencent.iglite&amp;hl=en&amp;gl=us\" target=\"b_lank\" rel=\"noopener noreferrer\" class=\"local-link\"><span style=\"font-family: &quot;Times New Roman&quot;;\">https://play.google.com/store/apps/details?id=com.tencent.iglite&amp;hl=en&amp;gl=us</span></a></li><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n</span><li><span style=\"font-family: &quot;Times New Roman&quot;;\">Price: Free</span></li><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n</span></ul><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n</span><p><span style=\"color: rgb(183, 178, 51); font-family: &quot;Times New Roman&quot;;\"><strong>MODS FEATURE:</strong></span></p><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n</span><ul><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n</span><li><span style=\"font-family: &quot;Times New Roman&quot;;\">Menu Mod</span></li><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n</span><li><span style=\"font-family: &quot;Times New Roman&quot;;\">Aim Bot</span></li><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n</span><li><span style=\"font-family: &quot;Times New Roman&quot;;\">Wall Hack</span></li><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n</span><li><span style=\"font-family: &quot;Times New Roman&quot;;\">Unlimited Bullets</span></li><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n</span><li><span style=\"font-family: &quot;Times New Roman&quot;;\">Speed</span></li><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n</span><li><span style=\"font-family: &quot;Times New Roman&quot;;\">Headshot</span></li><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n</span><li><span style=\"font-family: &quot;Times New Roman&quot;;\">Mod Skin Súng</span></li><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n</span></ul><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n</span><p><span style=\"font-family: &quot;Times New Roman&quot;;\">Credits: </span><strong><span style=\"color: rgb(183, 51, 56); font-family: &quot;Times New Roman&quot;;\">Ệp Channel – GameMod.io Team</span></strong><br><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n</span><span style=\"color: rgb(183, 178, 51); font-family: &quot;Times New Roman&quot;;\"><strong>PREVIEW VIDEO:</strong></span></p><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n</span><p><iframe width=\"100%\" height=\"392\" src=\"https://www.youtube.com/embed/KBWRABjx8Wk?feature=oembed\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen=\"\" style=\"height: 391.5px;\" __idm_frm__=\"624\"></iframe></p><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n</span><p><span style=\"color: rgb(183, 178, 51); font-family: &quot;Times New Roman&quot;;\"><strong>GAME DESCRIPTION:</strong></span><br><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\nPUBG MOBILE LITE is here! Built with Unreal Engine 4, this version of PUBG MOBILE is compatible with even more devices and optimized for devices with less RAM without compromising the gameplay experience that has attracted millions of fans around the world. PUBG MOBILE LITE features a smaller map made for 40 players, which means a faster-paced game that still keeps the traditional PUBG style of play!</span></p><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n</span><p><span style=\"font-family: &quot;Times New Roman&quot;;\">1. PUBG MOBILE LITE</span><br><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n40 players parachute onto a graphically rich 2×2 km island for a winner-takes-all showdown. Players have to scavenge for their own weapons, vehicles, and supplies, while battling it out in an ever-shrinking play zone to be the last player standing. Get ready to land, loot, and do whatever it takes to survive.. This Is Battle Royale!</span></p><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n</span><p><span style=\"font-family: &quot;Times New Roman&quot;;\">2. High-quality Graphics and HD Audio</span><br><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\nThe powerful Unreal Engine 4 creates a jaw-dropping visual experience with stunning detail, realistic gameplay effects and a massive HD map, perfect for Battle Royale. Immerse yourself in the world as you play with high-quality audio and rich 3D sound effects.</span></p><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n</span><p><span style=\"font-family: &quot;Times New Roman&quot;;\">3. Realistic Weapons</span><br><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\nChoose from a constantly growing arsenal of lethal firearms, melee weapons, and throwables, each with realistic ballistics and travel trajectories, that give you the option to shoot, beat down, or incinerate your adversaries. Oh, and PUBG’s signature pan? We’ve got the pan.</span></p><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n</span><p><span style=\"font-family: &quot;Times New Roman&quot;;\">4. Team Up with Friends</span><br><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\nInvite and team up with your friends to coordinate your battle plan through voice chat and set up the perfect ambush for your enemies.</span></p><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n</span><p><span style=\"font-family: &quot;Times New Roman&quot;;\">5. Fair Gaming Environment</span><br><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\nPowerful anti-cheat mechanisms ensure a fun and fair environment for all PUBG MOBILE LITE players.</span></p><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n\r\n</span><p><span style=\"color: rgb(183, 178, 51); font-family: &quot;Times New Roman&quot;;\"><strong>DOWNLOAD HERE:</strong></span></p><span style=\"font-family: &quot;Times New Roman&quot;;\">\r\n</span><div class=\"su-button-center\"><a href=\"https://gamemod.io/download/?url=https%3A%2F%2Fvinaurl.net%2FSFYX6fwOX8\" class=\"su-button su-button-style-flat su-button-wide ext-link\" style=\"color:#FFFFFF;background-color:#337ab7;border-color:#296292;border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px\" target=\"_blank\" rel=\"noopener external nofollow\" title=\"Download File!\" onclick=\"this.target=\'_blank\';\"><span style=\"color:#FFFFFF;padding:7px 22px;font-size:17px;line-height:26px;border-color:#70a2cd;border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px;text-shadow:px 0px 0px #000000;-moz-text-shadow:px 0px 0px #000000;-webkit-text-shadow:px 0px 0px #000000\"><i class=\"sui sui-download\" style=\"font-size:17px;color:#FFFFFF\"></i><span style=\"font-family: &quot;Times New Roman&quot;;\"> Script Hack VIP</span></span></a></div>\r\n</div>', 'https://gamemod.io/wp-content/uploads/2018/12/PUBG-MOBILE-LITE.png', '2019-05-14 17:16:17', 10, 1, 1, 17),
(7, 'Lionheart: Dark Moon RPG v2.0.8 MOD One Hit | God Mode | No Skill Cooldown', '<p>Download Lionheart: Dark Moon RPG MOD free on android, Lionheart: Dark Moon RPG mega mod apk, Android game Lionheart: Dark Moon RPG apk mod, Game Lionheart: Dark Moon RPG free mod\r\n</p><p><br>NAME: Lionheart: Dark Moon RPG\r\n</p><p><br>&nbsp;Version: 2.0.8\r\n</p><p><br>Size: 64M</p><p><br></p><p>Developer: Cheetah Games<br></p><p><br>Price: Free\r\n</p><p><br>Root needed: NO\r\n</p><p><br>Internet required: YES\r\n</p><p><br>Requires Android:  5.0 and up\r\n</p><p><br>App ID: ca.emeraldcitygames.erpg\r\n</p><p><br>Playstore Link: Lionheart: Dark Moon RPG – Apps on Google Play\r\n</p><p><br></p><p>MODS FEATURE:</p><p><br>1. MOD MENU\r\n</p><p><br>2. One Hit Kill\r\n</p><p><br>3. God Mode\r\n</p><p><br>4. No Skill Colldown\r\n</p><p><br>5. NO ADS </p><p><br>&nbsp;PREVIEW VIDEO:&nbsp;</p><p><br></p><p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/miEDYzN9zzA\" width=\"640\" height=\"360\" class=\"note-video-clip\" __idm_frm__=\"703\"></iframe><br>&nbsp;DOWNLOAD HERE:</p><p><br></p><p>\r\n\r\n</p><div><a target=\"_blank\" rel=\"nofollow\" href=\"https://gamemod.io/download/?url=https%3A%2F%2Fupfile.info%2Ffile%2FO4DVE65BA184\"><span><i></i> Fire Gun: Brick Breaker v1.7 Mod (APK)</span></a></div><div><a target=\"_blank\" rel=\"nofollow\" href=\"https://gamemod.io/download/?url=https%3A%2F%2Fupfile.info%2Ffile%2FO4DVE65BA184\"><span><br></span></a></div>\r\n\r\n<div><a target=\"_blank\" rel=\"nofollow\" href=\"https://gamemod.io/download/?url=https%3A%2F%2Fdl.gamemod.io%2Ffile%2F11QDDC7A63D7\"><span><i></i> Lionheart: Dark Moon RPG v2.0.8 Mod (APK_UNSIGNED_ROOTED)</span></a></div><p></p>', 'https://gamemod.io/wp-content/uploads/2019/05/Lionheart-Dark-Moon-RPG.png', '2019-05-27 16:40:27', 17, 1, 1, 17),
(8, 'Blackmoor 2 v1.24 MOD APK Unlimited Money', '<p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\">Blackmoor 2 mod apk, Download apk&nbsp;Blackmoor 2 Mod, Android game&nbsp;Blackmoor 2 mod, Game&nbsp;Blackmoor 2 mod free on android</p><ul style=\"margin-bottom: 26px; color: rgb(34, 34, 34); font-family: Verdana, Geneva, sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><li style=\"line-height: 26px; margin-left: 21px; font-size: 15px;\"><span style=\"color: rgb(183, 178, 51);\"><span style=\"font-weight: 700;\">NAME:&nbsp;Blackmoor 2</span></span></li></ul><p style=\"line-height: 26px; margin-left: 21px; font-size: 15px;\"><span style=\"background-color: rgb(255, 255, 255);\">Version:&nbsp;&nbsp;1.24</span></p><ol><li style=\"line-height: 26px; margin-left: 21px; font-size: 15px;\"><span style=\"background-color: rgb(255, 255, 255);\">Root needed:&nbsp;&nbsp;NO</span></li><li style=\"line-height: 26px; margin-left: 21px; font-size: 15px;\"><span style=\"background-color: rgb(255, 255, 255);\">Internet required:&nbsp;&nbsp;YES</span></li><ol><li style=\"line-height: 26px; margin-left: 21px; font-size: 15px;\"><span style=\"background-color: rgb(255, 255, 255);\">Requires Android:</span></li></ol><li style=\"line-height: 26px; margin-left: 21px; font-size: 15px;\"><span style=\"background-color: rgb(255, 255, 255);\">Size:&nbsp;<span id=\"storage-0\" class=\"storage\" style=\"\">110MB</span></span></li><li style=\"line-height: 26px; margin-left: 21px; font-size: 15px;\">CHPlay URL:&nbsp;<a href=\"https://play.google.com/store/apps/details?id=com.fourfats.blackmoor2&amp;hl=en&amp;gl=us\" target=\"b_lank\" rel=\"noopener noreferrer\" class=\"local-link\" style=\"color: rgb(0, 102, 191);\">https://play.google.com/store/apps/details?id=com.fourfats.blackmoor2&amp;hl=en&amp;gl=us</a></li><li style=\"line-height: 26px; margin-left: 21px; font-size: 15px;\">Price: Free</li></ol><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><span style=\"color: rgb(183, 178, 51);\"><span style=\"font-weight: 700;\">MODS FEATURE:</span></span></p><ul style=\"margin-bottom: 26px; color: rgb(34, 34, 34); font-family: Verdana, Geneva, sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><li style=\"line-height: 26px; margin-left: 21px; font-size: 15px;\">Unlimited Money</li></ul><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\">Credits:&nbsp;<span style=\"font-weight: 700;\"><span style=\"color: rgb(183, 51, 56);\">???</span></span><br><span style=\"color: rgb(183, 178, 51);\"><span style=\"font-weight: 700;\">NOTE:</span></span><br><span style=\"font-size: 18px; color: rgb(0, 96, 114);\">When you enter the game, just look at your money.</span><br><span style=\"color: rgb(183, 178, 51);\"><span style=\"font-weight: 700;\">PREVIEW VIDEO:</span></span></p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/770OqIBl-QI\" width=\"640\" height=\"360\" class=\"note-video-clip\" __idm_frm__=\"780\"></iframe><span style=\"color: rgb(183, 178, 51);\"><span style=\"font-weight: 700;\"><br></span></span></p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><span style=\"color: rgb(183, 178, 51);\"><span style=\"font-weight: 700;\">GAME DESCRIPTION:</span></span><br>Thanks for the feedback, we’re trying to read through all of the comments and check details of each phone/tablet there’s quite a bit more optimization to do.<br>Open Beta notice: This is the version that will go ‘live/post-beta’ as soon as we feel it’s stable. ALL of the game content is here, treat it like the full game including if you want to upgrade the game to premium. For cloud save make sure you have Google Play Games and are logged in. Thanks!.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\">BLACKMOOR 2 is a one of a kind arcade platformer with genre defining combat and a mix of retro classic and modern gaming. Includes cooperative multiplayer!</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\">STORY mode with twists and turns, eight heroes, enemies and bosses full of character. The official sequel to ‘Duberry’s Quest’.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\">BUILD with our user-generated dungeon builder. Build your own challenges and share them with ease. It’s a sandbox for creativity.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\">MULTIPLAYER in real time, fight together with up to 4 players online.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\">Supports Google Play Game Services (Saving).</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\">There are a few in-apps available but we allow the whole game to be playable and unlocked through gameplay. Please consider the Premium Upgrade if you wish to support our game development.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><span style=\"font-weight: 700; color: rgb(183, 178, 51); font-family: Verdana, Geneva, sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal;\">DOWNLOAD HERE:</span></p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><a href=\"https://gamemod.io/download/?url=http%3A%2F%2Fdl.gamemod.io%2Ffile%2FZC9792ABB6E9\" target=\"_blank\">Blackmoor 2 v1.24 Mod (APK)</a><span style=\"font-weight: 700; color: rgb(183, 178, 51); font-family: Verdana, Geneva, sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal;\"><br></span><br></p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><br></p>', 'https://gamemod.io/wp-content/uploads/2018/12/Blackmoor-2.png', '2019-05-27 19:05:49', 13, 1, 1, 17),
(9, 'Freestyle Mobile v2.9.0.0 MOD Enemies can not shoot', '<p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\">Download Freestyle Mobile MOD free on android, Freestyle Mobile mod apk, Android game&nbsp;Freestyle Mobile mod, Game&nbsp;Freestyle Mobile free mod</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><span style=\"color: rgb(183, 178, 51);\"><span style=\"font-weight: 700;\">NAME: Freestyle Mobile</span></span></p><ul class=\"my-list-content\" style=\"margin-bottom: 26px; color: rgb(34, 34, 34); font-family: Verdana, Geneva, sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><li style=\"line-height: 26px; margin-left: 21px; font-size: 15px;\">Version: 2.9.0.0</li><li style=\"line-height: 26px; margin-left: 21px; font-size: 15px;\">Size:&nbsp;<span id=\"storage-0\" class=\"storage\">37M</span></li><li style=\"line-height: 26px; margin-left: 21px; font-size: 15px;\">Price: Free</li><li style=\"line-height: 26px; margin-left: 21px; font-size: 15px;\">Root needed:&nbsp;&nbsp;NO</li><li style=\"line-height: 26px; margin-left: 21px; font-size: 15px;\">Requires Android:&nbsp;&nbsp;4.0.3 and up</li><li style=\"line-height: 26px; margin-left: 21px; font-size: 15px;\">CHPlay URL:&nbsp;<a href=\"https://play.google.com/store/apps/details?id=com.eagamebox.ggplay.freestyle&amp;hl=en&amp;gl=us\" target=\"b_lank\" rel=\"noopener noreferrer\" class=\"local-link\" style=\"color: rgb(0, 102, 191);\">com.eagamebox.ggplay.freestyle</a></li></ul><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><span style=\"color: rgb(183, 178, 51);\"><span style=\"font-weight: 700;\">MODS FEATURE:</span></span></p><ul style=\"margin-bottom: 26px; color: rgb(34, 34, 34); font-family: Verdana, Geneva, sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><li style=\"line-height: 26px; margin-left: 21px; font-size: 15px;\">100% Goal</li><li style=\"line-height: 26px; margin-left: 21px; font-size: 15px;\">Auto</li><li style=\"line-height: 26px; margin-left: 21px; font-size: 15px;\">Enemies can not shoot (PvE)</li></ul><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><span style=\"color: rgb(183, 178, 51);\"><span style=\"font-weight: 700;\">PREVIEW VIDEO:</span></span></p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/bFcyQxDyH18\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><span style=\"color: rgb(183, 178, 51);\"><span style=\"font-weight: 700;\"><br></span></span></p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><span style=\"color: rgb(183, 178, 51);\"><span style=\"font-weight: 700;\">DOWNLOAD HERE:</span></span></p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><a href=\"https://gamemod.io/download/?url=http%3A%2F%2Fupfile.us%2Ffile%2F2EM74A94C873\" target=\"_blank\">Freestyle Mobile v2.9.0.0 Mod (APK)</a><span style=\"color: rgb(183, 178, 51);\"><span style=\"font-weight: 700;\"><br></span></span></p>', 'https://gamemod.io/wp-content/uploads/2019/03/Freestyle-Mobile-PH-CBT.png', '2019-05-27 19:14:58', 31, 1, 1, 17),
(10, 'GameGuardian v8.63.4 – Ứng dụng Hack hầu hết game trên android', '<p><span style=\"color: rgb(34, 34, 34); font-family: Verdana, Geneva, sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\">GameGuardian – Ứng dụng Hack Mọi Loại Game Trên Android</span></p><p><span style=\"color: rgb(34, 34, 34); font-family: Verdana, Geneva, sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><br></span></p><p><img src=\"https://gamemod.io/wp-content/uploads/2018/10/gameguardian-v8-63-4-ung-dung-hack-hau-het-game-tren-android2.png\" style=\"width: 50%;\"><span style=\"color: rgb(34, 34, 34); font-family: Verdana, Geneva, sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><br></span></p><p><span style=\"color: rgb(34, 34, 34); font-family: Verdana, Geneva, sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><br></span></p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\">Chào các bạn, hôm nay mình chia sẻ và đưa link tải gameguardian. Một ứng dụng chuyên hack mod các loại game trên android. Game online và offline nó đều chiến tốt.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\">Trong website của mình có nhiều bài viết hướng dẫn hack game với ứng dụng này.<br>Tùy từng loại game mà có cách hack khác nhau. các bạn có thể tham khảo ở trang chủ web của mình nhé&nbsp;<a href=\"https://gamemod.io/\" class=\"local-link\" style=\"color: rgb(0, 102, 191);\">https://gamemod.io</a>&nbsp;web này của mình lập ra với mục đích sưu tầm tất cả game mod được chia sẻ trên toàn thế giới nhé ;).</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\">Không dài dòng nữa mời bạn tải xuống:</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><a href=\"https://gamemod.io/download/?url=http%3A%2F%2Fupfile.pro%2Ffile%2Fz3YaO8LYbxq\" target=\"_blank\">GameGuardian.8.63.4.apk</a><br></p><p><br></p>', 'https://gamemod.io/wp-content/uploads/2018/10/gameguardian-v8-63-4-ung-dung-hack-hau-het-game-tren-android.jpg', '2019-05-27 19:56:33', 1, 1, 1, 17);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posttype`
--

DROP TABLE IF EXISTS `posttype`;
CREATE TABLE IF NOT EXISTS `posttype` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 NOT NULL,
  `status` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `posttype`
--

INSERT INTO `posttype` (`id`, `name`, `status`) VALUES
(1, 'Android mod', 1),
(2, 'IOS MOD', 1),
(3, 'APPS', 1),
(4, 'TUTORIALS\r\n', 1),
(5, '111sdfs1', 0);

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
  `status` int(11) NOT NULL DEFAULT '0',
  `menu_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_index` (`position`,`menu_id`),
  KEY `submenu_ibfk_1` (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `submenu`
--

INSERT INTO `submenu` (`id`, `name`, `link`, `position`, `status`, `menu_id`) VALUES
(1, 'Android', '/home/combo', 1, 1, 3),
(2, 'IOS', '/home/pizza', 2, 1, 3),
(6, 'Logout', '/logout', 3, 1, 19),
(7, 'Admin', '/admin', 2, 1, 19),
(8, 'Write Post', '/write', 1, 1, 19);

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
  `image` varchar(255) NOT NULL DEFAULT 'img/guest.png',
  `status` int(10) NOT NULL DEFAULT '0',
  `usertype_id` int(10) NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `nguoidung_ibfk_1` (`usertype_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `image`, `status`, `usertype_id`) VALUES
(7, 'blackerghost', 'admin@gmail.com', '$2y$10$0yae9HFUzMUZ7OTxomkTIODrF2B7gg0CldecfB8aid2EzUroXF586', '/img/user/guest.png', 0, 1),
(8, 'member', 'master@aruto.me', '$2y$10$Erap4g7wDmir.lKOVkZwT.OMZ9XL01aRwU2QI187RNH3jjHw/Ktky', '/img/user/member.jpg', 1, 2),
(17, 'admin', 'tranngoctrongd14th03@gmail.com', '$2y$10$OR.EZtJf3wFNQUpYT4zsf.QEfvzbS.BX5vPepgt4a72Y82ZRro29i', '/img/user/admin.jpg', 1, 1),
(19, 'collaborator', 'master1@aruto.me', '$2y$10$5zyixabYFuhFaT5Uy8Z5V.uGkq7/YpEEWCbtYHMpcC0vgdDnGFrLW', '/img/user/126.jpg', 1, 3),
(21, 'asasasasa', 'abc@gmail.com', '$2y$10$jYM2gWsbhtT04iC9IAKY3uSBSA/E4OeuXsNFTQRofVMxUlsTCMqsK', '/img/user/1477ef126ddc07c0f7ea1823972db300--aoi-ogata-snow.jpg', 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `usertype`
--

DROP TABLE IF EXISTS `usertype`;
CREATE TABLE IF NOT EXISTS `usertype` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `status` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `usertype`
--

INSERT INTO `usertype` (`id`, `name`, `status`) VALUES
(1, 'admin', 1),
(2, 'member', 1),
(3, 'collaborator', 1),
(4, 'mnaejj1', 0),
(5, 'xcvxcvxc', 0);

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
