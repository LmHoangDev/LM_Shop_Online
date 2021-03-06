-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 05:09 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_mvc_sales`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adminEmail` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `adminUser` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adminPass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminName`, `adminEmail`, `adminUser`, `adminPass`, `level`) VALUES
(1, 'hoang lam', 'hoanglam@gmail.com', 'lamadmin', 'admin!@#', 0),
(3, 'lam hoang', 'lmhoang@gmail.com', 'lamhoang', '5fec4ba8376f207d1ff2f0cac0882b01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_binhluan`
--

CREATE TABLE `tbl_binhluan` (
  `binhluan_id` int(11) NOT NULL,
  `tenbinhluan` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `binhluan` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brandId` int(11) NOT NULL,
  `brandName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brandId`, `brandName`) VALUES
(6, 'Samsung'),
(7, 'Apple'),
(8, 'Huawei'),
(9, 'Oppo'),
(10, 'Dell'),
(12, 'Viettel'),
(13, 'OEM'),
(15, 'TP-Link');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `sId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `productName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartId`, `productId`, `sId`, `productName`, `price`, `quantity`, `image`) VALUES
(23, 25, '70nvc39luf417ohe6jm6maifp1', 'Apple Watch SE 40mm (GPS) Vi???n Nh??m - D??y Cao Su Ch??nh H??ng', '8000000', 2, '5294e0c4f1.png'),
(24, 24, '7cl8gogdun1hqp55v30qlj41h6', 'Samsung Galaxy A12', '3950000', 2, '9a1040f479.png'),
(25, 25, '7cl8gogdun1hqp55v30qlj41h6', 'Apple Watch SE 40mm (GPS) Vi???n Nh??m - D??y Cao Su Ch??nh H??ng', '8000000', 2, '5294e0c4f1.png'),
(26, 23, '7cl8gogdun1hqp55v30qlj41h6', 'Router Wifi 6 Huawei AX3 b??ng t???n k??p 3000Mbps CPU 2 nh??n ', '1350000', 5, '037af0d362.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `catId` int(11) NOT NULL,
  `catName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`catId`, `catName`) VALUES
(3, 'Laptop'),
(4, 'M??y b??n'),
(5, '??i???n tho???i di ?????ng'),
(6, 'Ph??? ki???n c??ng ngh???'),
(7, 'Ph???n m???m'),
(16, 'Thi???t b??? th??ng minh'),
(17, 'Thi???t b??? m???ng'),
(19, '????? gia d???ng');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_compare`
--

CREATE TABLE `tbl_compare` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `address`, `city`, `country`, `zipcode`, `phone`, `email`, `password`) VALUES
(6, 'Hi???u Programming ', 'S??? 1 L?? Du???n, B???n Ngh??, Qu???n 1, Hi???p Th??nh,Qu???n 12', 'Th??nh ph??? H??? Ch?? Minh', 'hcm', '700000', '0932023992', 'truongngoctanhieu2018@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'lam            ', 'Thon 2 giang cao ha noi', 'hanoi', 'hn', '032132131', '093213213213', 'rutatut2000@gmail.com', '90b4d20e3dbe4dbd4244c636545c16a9'),
(8, 'lambeo12', 'HCM City', 'Ha Noi Company', 'dn', '21321321', '09321321', 'lmhoang1304@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `date_order` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `productId`, `productName`, `customer_id`, `quantity`, `price`, `image`, `status`, `date_order`) VALUES
(74, 25, 'Apple Watch SE 40mm (GPS) Vi???n Nh??m - D??y Cao Su Ch??nh H??ng', 6, 1, '8000000', '5cca03034d.jpg', 1, '2021-02-26 16:24:33'),
(75, 23, 'Router Wifi 6 Huawei AX3 b??ng t???n k??p 3000Mbps CPU 2 nh??n ', 8, 2, '2700000', '037af0d362.png', 0, '2021-12-06 16:43:51'),
(76, 28, 'Apple Watch SE 40mm (GPS) Vi???n Nh??m - D??y Cao Su Ch??nh H??ng', 8, 2, '16000000', '8c5c18fa76.png', 0, '2021-12-06 16:45:59'),
(77, 26, 'Router Wifi 6 Huawei AX3 b??ng t???n k??p 3000Mbps CPU 2 nh??n ', 8, 3, '4050000', '1a1e104f78.png', 1, '2021-12-06 16:57:50'),
(78, 27, 'Samsung Galaxy A12', 8, 3, '11850000', 'd8843e2cf9.png', 0, '2021-12-06 17:02:25'),
(79, 26, 'Router Wifi 6 Huawei AX3 b??ng t???n k??p 3000Mbps CPU 2 nh??n ', 8, 2, '2700000', '1a1e104f78.png', 2, '2021-12-06 17:12:56'),
(80, 23, 'Router Wifi 6 Huawei AX3 b??ng t???n k??p 3000Mbps CPU 2 nh??n ', 8, 2, '2700000', '037af0d362.png', 2, '2021-12-06 17:12:56'),
(81, 26, 'Router Wifi 6 Huawei AX3 b??ng t???n k??p 3000Mbps CPU 2 nh??n ', 8, 2, '2700000', '1a1e104f78.png', 0, '2021-12-06 17:21:47'),
(82, 27, 'Samsung Galaxy A12', 8, 2, '7900000', 'd8843e2cf9.png', 0, '2021-12-06 17:35:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productId` int(11) NOT NULL,
  `productName` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `product_code` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `productQuantity` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `product_soldout` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `product_remain` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `catId` int(11) NOT NULL,
  `brandId` int(11) NOT NULL,
  `product_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `productName`, `product_code`, `productQuantity`, `product_soldout`, `product_remain`, `catId`, `brandId`, `product_desc`, `type`, `price`, `image`) VALUES
(23, 'Router Wifi 6 Huawei AX3 b??ng t???n k??p 3000Mbps CPU 2 nh??n ', '', '', '0', '', 17, 10, '<p><span>Hi&ecirc;??n nay router ch????c ch????n la?? m&ocirc;??t trong nh????ng phu?? ki&ecirc;??n kh&ocirc;ng th&ecirc;?? na??o thi&ecirc;??u ??&ocirc;??i v????i ng??????i du??ng c&ocirc;ng ngh&ecirc;?? pha??i kh&ocirc;ng na??o. Ha??y cho??n mua ngay Router Wifi Huawei AX3 b??ng t???n k&eacute;p Ax3000 CPU 2 nh&acirc;n&nbsp;t&ocirc;??c ??&ocirc;?? truy&ecirc;??n ta??i nhanh cho??ng, nho?? go??n se?? la?? s???? l????a cho??n hoa??n ha??o cho ba??n.</span></p>\r\n<div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\">&nbsp;</div>', 0, '1350000', '037af0d362.png'),
(24, 'Samsung Galaxy A12', '', '', '0', '', 5, 9, '<h2><span>??i???n tho???i Samsung Galaxy A12 &ndash; Smartphone gi&aacute; r??? c???u h&igrave;nh t???t v&agrave; pin tr&acirc;u</span></h2>\r\n<p><span>Samsung A12</span>&nbsp;l&agrave; m???t chi???c smartphone gi&aacute; r??? nh??ng s??? h???u c???u h&igrave;nh ???n ?????nh c&ugrave;ng v???i vi&ecirc;n pin 5000mAh cho th???i l?????ng su???t ng&agrave;y d&agrave;i. B&ecirc;n c???nh ??&oacute; ??i???n tho???i c??ng s??? h???u thi???t k??? th???i trang v&agrave; ph&ugrave; h???p v???i xu h?????ng.</p>\r\n<h3><span>Thi???t k??? ????n gi???n, 4 phi&ecirc;n b???n m&agrave;u, v&acirc;n tay c???nh b&ecirc;n</span></h3>\r\n<p>Galaxy A12 c&oacute; thi???t k??? ????n gi???n v???i b???n g&oacute;c c???nh ???????c bo tr&ograve;n m???m m???i c&ugrave;ng v???i hai c???nh b&ecirc;n ???????c v&aacute;t cong nh??? nh&agrave;ng t???o c???m gi&aacute;c c???m tho???i m&aacute;i cho ng?????i d&ugrave;ng.</p>\r\n<p>B&ecirc;n c???nh ??&oacute; smartphone c&ograve;n ???????c cho ra m???t v???i nhi???u phi&ecirc;n b???n m&agrave;u ??en, Tr???ng, Xanh th???i trang ????? b???n c&oacute; th??? l???a ch???n m&agrave;u s???c y&ecirc;u th&iacute;ch.</p>\r\n<div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\">&nbsp;</div>', 0, '3950000', '9a1040f479.png'),
(25, 'Apple Watch SE 40mm (GPS) Vi???n Nh??m - D??y Cao Su Ch??nh H??ng', '', '', '0', '', 6, 7, '<h2>Apple Watch SE 40mm - Sang tr???ng, ?????ng c???p nh?? b???n cao c???p</h2>\r\n<p>N??m 2020, ch???c h???n c&aacute;c iFan ??ang h&aacute;o h???c ??&oacute;n ch??? c&aacute;c si&ecirc;u ph???m ???????c ra m???t t??? Apple. ?????c bi???t Apple Watch SE 40mm&nbsp; GPS) l&agrave; m???t trong nh???ng phi&ecirc;n b???n ???????c Apple ra m???t v&agrave;o n??m 2020 v&agrave; ??ang ???????c nhi???u ng?????i d&ugrave;ng quan t&acirc;m kh&ocirc;ng k&eacute;m g&igrave; phi&ecirc;n b???n ch&iacute;nh th???c cao c???p.</p>\r\n<h3>Thi???t k??? th???i trang, m&agrave;n h&igrave;nh Retina LTPO OLED hi???n th??? ch???t l?????ng cao</h3>\r\n<p><a title=\"?????ng h??? Apple Watch ch&iacute;nh h&atilde;ng\" href=\"https://cellphones.com.vn/do-choi-cong-nghe/apple-watch.html\" target=\"_self\">Apple Watch</a>&nbsp;SE 40mm (GPS) c&oacute; thi???t k??? v???a n??ng ?????ng v&agrave; mang ?????m t&iacute;nh th???i trang r???t gi???ng v???i th??? h??? tr?????c ??&acirc;y m&agrave; nh&agrave; s???n xu???t Apple ??&atilde; thi???t k???.</p>\r\n<p>H??n th???, d&acirc;y ??eo ???????c l&agrave;m t??? ch???t li???u silicon c&oacute; ????? ??&agrave;n h???i cao gi&uacute;p ng?????i d&ugrave;ng c&oacute; th??? ??eo trong th???i gian d&agrave;i m&agrave; kh&ocirc;ng b??? ??au tay. V???i ch???t li???u n&agrave;y ng?????i d&ugrave;ng d??? d&agrave;ng v??? sinh v&agrave; h???n ch??? b&aacute;m b???n v&agrave; m??? h&ocirc;i.</p>\r\n<div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\">&nbsp;</div>', 0, '8000000', '5294e0c4f1.png'),
(26, 'Router Wifi 6 Huawei AX3 b??ng t???n k??p 3000Mbps CPU 2 nh??n ', '', '', '0', '', 17, 10, '<p><span>Hi&ecirc;??n nay router ch????c ch????n la?? m&ocirc;??t trong nh????ng phu?? ki&ecirc;??n kh&ocirc;ng th&ecirc;?? na??o thi&ecirc;??u ??&ocirc;??i v????i ng??????i du??ng c&ocirc;ng ngh&ecirc;?? pha??i kh&ocirc;ng na??o. Ha??y cho??n mua ngay Router Wifi Huawei AX3 b??ng t???n k&eacute;p Ax3000 CPU 2 nh&acirc;n&nbsp;t&ocirc;??c ??&ocirc;?? truy&ecirc;??n ta??i nhanh cho??ng, nho?? go??n se?? la?? s???? l????a cho??n hoa??n ha??o cho ba??n.</span></p>\r\n<div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\">&nbsp;</div>', 0, '1350000', '1a1e104f78.png'),
(27, 'Samsung Galaxy A12', '', '', '0', '', 5, 6, '<h2><span>??i???n tho???i Samsung Galaxy A12 &ndash; Smartphone gi&aacute; r??? c???u h&igrave;nh t???t v&agrave; pin tr&acirc;u</span></h2>\r\n<p><span>Samsung A12</span>&nbsp;l&agrave; m???t chi???c smartphone gi&aacute; r??? nh??ng s??? h???u c???u h&igrave;nh ???n ?????nh c&ugrave;ng v???i vi&ecirc;n pin 5000mAh cho th???i l?????ng su???t ng&agrave;y d&agrave;i. B&ecirc;n c???nh ??&oacute; ??i???n tho???i c??ng s??? h???u thi???t k??? th???i trang v&agrave; ph&ugrave; h???p v???i xu h?????ng.</p>\r\n<h3><span>Thi???t k??? ????n gi???n, 4 phi&ecirc;n b???n m&agrave;u, v&acirc;n tay c???nh b&ecirc;n</span></h3>\r\n<p>Galaxy A12 c&oacute; thi???t k??? ????n gi???n v???i b???n g&oacute;c c???nh ???????c bo tr&ograve;n m???m m???i c&ugrave;ng v???i hai c???nh b&ecirc;n ???????c v&aacute;t cong nh??? nh&agrave;ng t???o c???m gi&aacute;c c???m tho???i m&aacute;i cho ng?????i d&ugrave;ng.</p>\r\n<p>B&ecirc;n c???nh ??&oacute; smartphone c&ograve;n ???????c cho ra m???t v???i nhi???u phi&ecirc;n b???n m&agrave;u ??en, Tr???ng, Xanh th???i trang ????? b???n c&oacute; th??? l???a ch???n m&agrave;u s???c y&ecirc;u th&iacute;ch.</p>\r\n<div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\">&nbsp;</div>', 0, '3950000', 'd8843e2cf9.png'),
(28, 'Apple Watch SE 40mm (GPS) Vi???n Nh??m - D??y Cao Su Ch??nh H??ng', '', '', '0', '', 6, 7, '<h2>Apple Watch SE 40mm - Sang tr???ng, ?????ng c???p nh?? b???n cao c???p</h2>\r\n<p>N??m 2020, ch???c h???n c&aacute;c iFan ??ang h&aacute;o h???c ??&oacute;n ch??? c&aacute;c si&ecirc;u ph???m ???????c ra m???t t??? Apple. ?????c bi???t Apple Watch SE 40mm&nbsp; GPS) l&agrave; m???t trong nh???ng phi&ecirc;n b???n ???????c Apple ra m???t v&agrave;o n??m 2020 v&agrave; ??ang ???????c nhi???u ng?????i d&ugrave;ng quan t&acirc;m kh&ocirc;ng k&eacute;m g&igrave; phi&ecirc;n b???n ch&iacute;nh th???c cao c???p.</p>\r\n<h3>Thi???t k??? th???i trang, m&agrave;n h&igrave;nh Retina LTPO OLED hi???n th??? ch???t l?????ng cao</h3>\r\n<p><a title=\"?????ng h??? Apple Watch ch&iacute;nh h&atilde;ng\" href=\"https://cellphones.com.vn/do-choi-cong-nghe/apple-watch.html\" target=\"_self\">Apple Watch</a>&nbsp;SE 40mm (GPS) c&oacute; thi???t k??? v???a n??ng ?????ng v&agrave; mang ?????m t&iacute;nh th???i trang r???t gi???ng v???i th??? h??? tr?????c ??&acirc;y m&agrave; nh&agrave; s???n xu???t Apple ??&atilde; thi???t k???.</p>\r\n<p>H??n th???, d&acirc;y ??eo ???????c l&agrave;m t??? ch???t li???u silicon c&oacute; ????? ??&agrave;n h???i cao gi&uacute;p ng?????i d&ugrave;ng c&oacute; th??? ??eo trong th???i gian d&agrave;i m&agrave; kh&ocirc;ng b??? ??au tay. V???i ch???t li???u n&agrave;y ng?????i d&ugrave;ng d??? d&agrave;ng v??? sinh v&agrave; h???n ch??? b&aacute;m b???n v&agrave; m??? h&ocirc;i.</p>\r\n<div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\">&nbsp;</div>', 0, '8000000', '8c5c18fa76.png'),
(31, 'Samsung X507UA', '', '', '0', '', 5, 8, '<p><strong>Kh&aacute; ?????p m???t nh&eacute;</strong></p>\r\n<p>Gi&aacute; c??? h???p l&yacute; n&egrave;</p>\r\n<p>??&atilde; c???p nh???t l???i r???i</p>\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: -11px; top: 45.6px;\">&nbsp;</div>\r\n<div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\">&nbsp;</div>', 1, '100000', '5796a5a671.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `sliderId` int(11) NOT NULL,
  `sliderName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slider_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`sliderId`, `sliderName`, `slider_image`, `type`) VALUES
(14, 'Slider_1', '1802e9b0ca.jpg', 1),
(15, 'Slider_2', '284df3fde5.jpg', 1),
(16, 'Slider_3', 'bb715c15f5.jpg', 1),
(17, 'Slider_4', 'f2edd14198.jpg', 1),
(18, 'Slider_5', 'f9aa699bf0.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_warehouse`
--

CREATE TABLE `tbl_warehouse` (
  `id_warehouse` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `sl_nhap` varchar(50) NOT NULL,
  `sl_ngaynhap` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_warehouse`
--

INSERT INTO `tbl_warehouse` (`id_warehouse`, `id_sanpham`, `sl_nhap`, `sl_ngaynhap`) VALUES
(1, 22, '5', '2019-07-16 18:31:22'),
(2, 21, '10', '2019-07-16 18:32:03'),
(3, 21, '3', '2019-07-16 18:42:59'),
(4, 20, '5', '2019-07-16 18:51:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wishlist`
--

CREATE TABLE `tbl_wishlist` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_wishlist`
--

INSERT INTO `tbl_wishlist` (`id`, `customer_id`, `productId`, `productName`, `price`, `image`) VALUES
(3, 3, 6, ' M??y t??nh Dell A503', '10000000', 'dbb417a309.jpg'),
(4, 3, 18, 'Laptop Dell G7 7588 N7588A Core i7-8750H/Win10 (15.6 inch)', '2589900', '32942e9470.jpg'),
(5, 6, 24, 'Samsung Galaxy A12', '3950000', 'aaa94c8bfc.jpg'),
(6, 6, 25, 'Apple Watch SE 40mm (GPS) Vi???n Nh??m - D??y Cao Su Ch??nh H??ng', '8000000', '5cca03034d.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  ADD PRIMARY KEY (`binhluan_id`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartId`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `tbl_compare`
--
ALTER TABLE `tbl_compare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`sliderId`);

--
-- Indexes for table `tbl_warehouse`
--
ALTER TABLE `tbl_warehouse`
  ADD PRIMARY KEY (`id_warehouse`);

--
-- Indexes for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  MODIFY `binhluan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_compare`
--
ALTER TABLE `tbl_compare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `sliderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_warehouse`
--
ALTER TABLE `tbl_warehouse`
  MODIFY `id_warehouse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
