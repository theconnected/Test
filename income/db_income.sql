-- phpMyAdmin SQL Dump
-- version 4.2.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 11, 2014 at 03:28 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_income`
--

-- --------------------------------------------------------

--
-- Table structure for table `datas`
--

CREATE TABLE IF NOT EXISTS `datas` (
`id` int(11) NOT NULL COMMENT 'รหัส',
  `user_id` int(11) NOT NULL COMMENT 'รหัสผู้ใช้',
  `type` varchar(100) DEFAULT NULL COMMENT 'ประเภทรายการ',
  `name` varchar(255) DEFAULT NULL COMMENT 'ชื่อรายการ',
  `qty` int(6) DEFAULT NULL COMMENT 'จำนวน',
  `created` datetime DEFAULT NULL COMMENT 'สร้าง',
  `modified` datetime DEFAULT NULL COMMENT 'แก้ไข'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `datas`
--

INSERT INTO `datas` (`id`, `user_id`, `type`, `name`, `qty`, `created`, `modified`) VALUES
(1, 1, 'income', 'แม่ให้ไปโรงเรียน', 100, '2014-09-23 09:26:47', '2014-10-11 09:28:04'),
(12, 2, 'pay', 'เบียร์', 120, '2014-10-11 12:27:06', '2014-10-11 12:27:39'),
(13, 1, 'pay', 'เที่ยง', 40, '2014-09-23 13:32:56', NULL),
(14, 1, 'income', 'น้าให้ค่ารถเติมน้ำมัน', 120, '2014-10-11 13:33:34', NULL),
(15, 1, 'pay', 'น้าให้ค่ารถเติมน้ำมัน', 123, '2014-10-11 13:34:21', NULL),
(18, 1, 'pay', 'กาแฟ', 25, '2014-10-11 13:44:47', NULL),
(19, 1, 'pay', 'น้้ำมัน', 50, '2014-10-11 13:47:00', NULL),
(20, 1, 'pay', 'มาม่าคัพ', 120, '2014-10-11 13:52:29', NULL),
(23, 2, 'income', 'รับจ้าง', 60, '2014-10-11 14:47:20', NULL),
(24, 1, 'income', '55', 55, '2014-01-01 00:00:00', NULL),
(25, 1, 'pay', '100', 100, '2014-01-01 00:00:00', NULL),
(26, 1, 'income', '5', 500, '2014-02-11 00:00:00', NULL),
(27, 1, 'pay', '400', 400, '2014-02-11 00:00:00', NULL),
(28, 1, 'income', '55', 550, '2014-03-08 00:00:00', NULL),
(29, 1, 'pay', '8jkvkski', 360, '2014-03-11 00:00:00', NULL),
(30, 1, 'income', 'fgsdg', 700, '2014-04-01 00:00:00', NULL),
(31, 1, 'pay', 'sdfsd', 500, '2014-04-11 00:00:00', NULL),
(32, 1, 'income', 'fgsdg', 700, '2014-05-01 00:00:00', NULL),
(33, 1, 'pay', 'sdfsd', 500, '2014-05-11 00:00:00', NULL),
(34, 1, 'income', 'dfds', 650, '2014-06-04 00:00:00', NULL),
(35, 1, 'pay', 'dfdss', 550, '2014-06-16 00:00:00', NULL),
(36, 1, 'income', 'dfds', 750, '2014-07-04 00:00:00', NULL),
(37, 1, 'pay', 'dfdss', 600, '2014-07-16 00:00:00', NULL),
(38, 1, 'income', 'dfds', 690, '2014-08-04 00:00:00', NULL),
(39, 1, 'pay', 'dfdss', 520, '2014-08-16 00:00:00', NULL),
(40, 1, 'income', 'dfds', 650, '2014-11-04 00:00:00', NULL),
(41, 1, 'pay', 'dfdss', 550, '2014-11-16 00:00:00', NULL),
(42, 1, 'income', 'dfds', 900, '2014-12-04 00:00:00', NULL),
(43, 1, 'pay', 'dfdss', 800, '2014-12-16 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login_logs`
--

CREATE TABLE IF NOT EXISTS `login_logs` (
`id` int(11) NOT NULL COMMENT 'รหัส',
  `user_id` int(11) NOT NULL COMMENT 'รหัสผู้ใช้',
  `last_login` datetime DEFAULT NULL COMMENT 'เข้าระบบล่าสุด',
  `ip` varchar(100) DEFAULT NULL COMMENT 'ไอพี'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `login_logs`
--

INSERT INTO `login_logs` (`id`, `user_id`, `last_login`, `ip`) VALUES
(1, 1, '2014-10-11 09:24:31', '::1'),
(2, 1, '2014-10-11 09:26:17', '::1'),
(3, 2, '2014-10-11 12:26:45', '::1'),
(4, 2, '2014-10-11 12:28:12', '::1'),
(5, 1, '2014-10-11 12:29:12', '::1'),
(6, 1, '2014-10-11 14:23:36', '::1'),
(7, 2, '2014-10-11 14:42:56', '::1'),
(8, 2, '2014-10-11 14:46:47', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL COMMENT 'รหัส',
  `user_type_tid` int(11) NOT NULL COMMENT 'รหัสประเภทผู้ใช้',
  `username` varchar(255) DEFAULT NULL COMMENT 'ผู้ใช้',
  `password` varchar(255) DEFAULT NULL COMMENT 'รหัสผ่าน',
  `fname` varchar(255) DEFAULT NULL COMMENT 'ชื่อ',
  `lname` varchar(255) DEFAULT NULL COMMENT 'นามสกุล',
  `address` text COMMENT 'ที่อยู่',
  `email` varchar(255) DEFAULT NULL COMMENT 'อีเมลล์',
  `tel` varchar(45) DEFAULT NULL COMMENT 'เบอร์โทร',
  `created` datetime DEFAULT NULL COMMENT 'สร้างเมื่อ',
  `modified` datetime DEFAULT NULL COMMENT 'แก้ไขเมื่อ'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type_tid`, `username`, `password`, `fname`, `lname`, `address`, `email`, `tel`, `created`, `modified`) VALUES
(1, 2, 'admin', 'admin', 'นาวิน', 'ศรีสอน', 'ดาวอังคาร', 'nawin.tor.cs@gmail.com', '0819758232', '2014-10-11 09:24:00', '2014-10-11 13:57:23'),
(2, 1, 'test', 'test', 'ขยัน', 'แต่มาสาย', 'ทุ่งนาบ้านเฮา', 'email@mail.com', '02-123456', '2014-10-11 09:30:24', NULL),
(7, 1, 'test2', 'test2', 'ชไมพร', 'เสียงหวาน', '14/2 ม3 ตำบล อำเภอ จังหวัด', 'mail@email.co.th', '0895412365', '2014-10-11 09:51:31', '2014-10-11 13:13:28'),
(9, 1, 'test3', 'test3', 'มานิต', 'นิดมา', '555 เสียงอีสาน', 'manid@mail.com', '08456923', '2014-10-11 09:51:46', '2014-10-11 13:16:30'),
(10, 1, 'test4', 'test4', 'ศักรินทร์', 'ดาวร้าย', 'บ้าน', 'sak@mail.com', '012345681', '2014-10-11 09:51:55', '2014-10-11 13:20:07'),
(11, 1, 'test5', 'test5', 'วอก', 'ฟองฟอด', 'บางบา', 'work@mail.com', '084561237', '2014-10-11 09:52:03', '2014-10-11 13:21:00'),
(12, 1, 'test6', 'test6', 'นนทชัย', 'ดาวร้าย', 'โคกอี่โด่ย', 'non@mail.com', '12345678', '2014-10-11 09:58:42', '2014-10-11 13:18:43'),
(13, 1, 'test7', 'test7', 'ขยันซ่อม', 'ขยันจริง', 'คอมพิวเตอร์เซอร์วิซ', 'mail@mail.com', '08753159', '2014-10-11 09:58:49', '2014-10-11 13:17:47'),
(14, 1, 'test8', 'test8', 'สมใจ', 'อย่างคิด', '789 ม1', 'email@mailcom', '012345678', '2014-10-11 09:58:58', '2014-10-11 13:15:15'),
(18, 1, 'test9', 'test9', 'ยม', 'ผัวเจ้มิ้น', 'บางบา', 'yom@email.com', '02456789', '2014-10-11 13:26:11', NULL),
(19, 1, 'test10', 'test10', 'มะนาว', 'มะพร้าว', 'สวนผักและผลไม้ บ้านหนองบักตัน', 'mail@mail.com', '12349587', '2014-10-11 13:27:25', '2014-10-11 13:57:31');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE IF NOT EXISTS `user_types` (
`tid` int(11) NOT NULL COMMENT 'รหัสประเภท',
  `name` varchar(255) DEFAULT NULL COMMENT 'ชื่อประเภท'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`tid`, `name`) VALUES
(1, 'สมาชิก'),
(2, 'ผู้ดูแลระบบ'),
(3, 'เทสเตอร์'),
(4, 'สมาชิก VIP'),
(5, 'โปรแกรมเมอร์');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datas`
--
ALTER TABLE `datas`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_datas_users_idx` (`user_id`);

--
-- Indexes for table `login_logs`
--
ALTER TABLE `login_logs`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_login_logs_users1_idx` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_users_user_types1_idx` (`user_type_tid`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
 ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datas`
--
ALTER TABLE `datas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส',AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `login_logs`
--
ALTER TABLE `login_logs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส',AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส',AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสประเภท',AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `datas`
--
ALTER TABLE `datas`
ADD CONSTRAINT `fk_datas_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `login_logs`
--
ALTER TABLE `login_logs`
ADD CONSTRAINT `fk_login_logs_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `fk_users_user_types1` FOREIGN KEY (`user_type_tid`) REFERENCES `user_types` (`tid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
