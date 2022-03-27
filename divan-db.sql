-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2022 at 05:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `divan-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `titer` varchar(200) NOT NULL,
  `led` varchar(200) NOT NULL,
  `matan` text NOT NULL,
  `page` varchar(200) NOT NULL,
  `position` int(11) NOT NULL,
  `time` varchar(200) NOT NULL,
  `side` varchar(100) NOT NULL,
  `cat` varchar(200) NOT NULL,
  `fresh` varchar(200) NOT NULL,
  `importantON` varchar(200) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `titer`, `led`, `matan`, `page`, `position`, `time`, `side`, `cat`, `fresh`, `importantON`, `image`) VALUES
(36, 'تازه خبر', 'تازه خبر', 'تازه خبر', '<p dir=\"rtl\">تازه خبر</p>\r\n', 'first', 1, 'time', 'dari', 'سیاسی', 'true', 'مهم', 'Screenshot (1).png'),
(37, 'تازه خبر', 'تازه خبر', 'تازه خبر', '<p dir=\"rtl\">تازه خبر</p>\r\n', 'first', 1, 'time', 'dari', 'سیاسی', 'true', 'مهم', 'Screenshot (1).png'),
(38, 'تازه خبر', 'تازه خبر', 'تازه خبر', '<p dir=\"rtl\">تازه خبر</p>\r\n', 'first', 1, 'time', 'dari', 'سیاسی', 'true', 'مهم', 'Screenshot (1).png'),
(39, 'سلام افعانستان', 'سلام افعانستان', 'سلام افعانستان', '', 'first', 2, 'time', 'dari', 'سیاسی', 'true', 'مهم', 'add_img.jpg'),
(42, 'سلام افغانستان ', 'سلام افغانستان ', 'سلام افغانستان ', '<p dir=\"rtl\">سلام افغانستان&nbsp;سلام افغانستان&nbsp;سلام افغانستان&nbsp;سلام افغانستان&nbsp;سلام افغانستان&nbsp;سلام افغانستان&nbsp;سلام افغانستان&nbsp;سلام افغانستان&nbsp;سلام افغانستان&nbsp;</p>\r\n', '', 1, 'time', 'dari', 'اقتصادی', 'true', 'مهم', 'slider_img4.jpg'),
(43, 'سلام افغانستان', '', 'سلام افغانستان', '<p dir=\"rtl\">سلام افغانستان&nbsp;سلام افغانستان&nbsp;سلام افغانستان&nbsp;سلام افغانستان&nbsp;سلام افغانستان&nbsp;سلام افغانستان&nbsp;سلام افغانستان&nbsp;سلام افغانستان&nbsp;</p>\r\n', '', 2, 'time', 'dari', 'اقتصادی', 'true', 'مهم', 'photograph_img4.jpg'),
(44, 'سلام افغانستان', 'سلام افغانستان', 'سلام افعانستان', '<p style=\"text-align:right\">سلام افغانستانسلام افغانستانسلام افغانستانسلام افغانستان</p>\r\n', '', 1, 'time', 'dari', 'اجتکاعی', 'true', 'مهم', 'featured_img3.jpg'),
(45, 'سلام فغانستان', 'سلام افعانستان', 'سلام افعانستان', '<p style=\"text-align:right\">سلام افغانستان&nbsp;سلام افغانستان&nbsp;سلام افغانستان&nbsp;سلام افغانستان&nbsp;سلام افغانستان&nbsp;</p>\r\n', 'first', 1, 'time', 'dari', 'سپورتی', 'true', 'مهم', 'photograph_img3.jpg'),
(46, 'سلام افغانستان', 'سلام افعانستان', 'سلام افعانستان', '', 'first', 2, 'time', 'dari', 'سپورتی', 'true', 'مهم', 'download.jpg'),
(47, 'سلام افغانستان', 'سلام افغانستان', 'سلام افغانستان', '', 'first', 1, 'time', 'dari', 'اجتماعی', 'true', 'مهم', 'slider_img2.jpg'),
(48, 'سلام افغانستان', 'سلام افغانستان', 'سلام افغانستان', '', 'first', 2, 'time', 'dari', 'اجتماعی', 'true', '', 'featured_img1.jpg'),
(49, 'سلام افغانستان', 'سلام افغانستان', 'سلام افعانستان', '', '', 1, 'time', 'dari', 'اجتماعی', 'true', '', 'post_img2.jpg'),
(50, 'سلام افغانستان', 'سلام افعانستان', 'سلام افعانستان', '', 'first', 1, 'time', 'dari', 'سیاسی', 'true', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `site` varchar(20) NOT NULL,
  `loginTime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `pass`, `site`, `loginTime`) VALUES
(1, 'khan', 'khan', 'dari', '11:40'),
(2, 'khan', 'khan', 'dari', '11:40'),
(3, 'khan', 'khan', 'dari', '11:40'),
(4, 'khan', 'khan', 'dari', '11:40'),
(5, 'khan', 'khan', 'dari', '11:40'),
(6, 'khan', 'khan', 'dari', '11:40'),
(7, 'khan', 'khan', 'dari', '11:40'),
(8, 'khan', 'khan', 'dari', '11:40'),
(9, 'khan', 'khan', 'dari', '11:40'),
(10, 'khan', 'khan', 'dari', '11:40'),
(11, 'khan', 'khan', 'dari', '11:40'),
(12, 'khan', 'khan', 'dari', '11:40'),
(13, 'khan', 'khan', 'dari', '11:40'),
(14, 'khan', 'khan', 'dari', '11:40'),
(15, 'khan', 'khan', 'dari', '11:40'),
(16, 'khan', 'khan', 'dari', '11:40'),
(17, 'khan', 'khan', 'dari', '11:40'),
(18, 'khan', 'khan', 'dari', '11:40'),
(19, 'khan', 'khan', 'dari', '11:40'),
(20, 'khan', 'khan', 'dari', '11:40'),
(21, 'khan', 'khan', 'dari', '11:40'),
(22, 'khan', 'khan', 'dari', '11:40'),
(23, 'khan', 'khan', 'dari', '11:40'),
(24, 'khan', 'khan', 'dari', '11:40'),
(25, 'khan', 'khan', 'dari', '11:40'),
(26, 'khan', 'khan', 'dari', '11:40'),
(27, 'khan', 'khan', 'dari', '11:40'),
(28, 'khan', 'khan', 'dari', '11:40'),
(29, 'khan', 'khan', 'dari', '11:40'),
(30, 'khan', 'khan', 'dari', '11:40'),
(31, 'khan', 'khan', 'dari', '11:40'),
(32, 'khan', 'khan', 'dari', '11:40'),
(33, 'khan', 'khan', 'dari', '11:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
