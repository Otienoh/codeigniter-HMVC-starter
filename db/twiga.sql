-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2015 at 08:02 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `twiga`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('202bdf7b06fead59077a05b781635a33', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0', 1441129496, ''),
('4322210e539fc63e31d6adb14661a593', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0', 1441129600, 'a:7:{s:9:"user_data";s:0:"";s:7:"user_id";s:1:"1";s:10:"user_fname";s:5:"Julie";s:10:"user_lname";s:7:"Eustine";s:10:"user_email";s:13:"oti@gmail.com";s:10:"user_group";s:1:"1";s:9:"logged_in";b:1;}'),
('6eaadc9cc9cd5945d1520861f917bc7a', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0', 1441103609, ''),
('93b924497ec4d3d177b1923edda0dd1d', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0', 1441096919, ''),
('badd85d8cc8096ba33f6d6b155361791', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0', 1441096922, '');

-- --------------------------------------------------------

--
-- Table structure for table `m_group`
--

CREATE TABLE IF NOT EXISTS `m_group` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_group`
--

INSERT INTO `m_group` (`id`, `name`, `role`) VALUES
(1, 'Admin', 'Administrator'),
(2, 'Member', 'Normal User');

-- --------------------------------------------------------

--
-- Table structure for table `m_uploads`
--

CREATE TABLE IF NOT EXISTS `m_uploads` (
`id` int(11) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `raw_name` varchar(200) NOT NULL,
  `file_type` varchar(20) NOT NULL,
  `full_path` varchar(1000) NOT NULL,
  `upload_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_uploads`
--

INSERT INTO `m_uploads` (`id`, `file_name`, `raw_name`, `file_type`, `full_path`, `upload_date`) VALUES
(1, 'tttt', 'awesome-code-typography-hd-wallpaper-1920x1080-2616.jpg', 'image/jpeg', 'C:/xampp/htdocs/Twiga/docs/awesome-code-typography-hd-wallpaper-1920x1080-2616.jpg', '2015-09-01'),
(2, 'ddsd', 'images.jpg', 'image/jpeg', 'C:/xampp/htdocs/Twiga/docs/images.jpg', '2015-09-01'),
(4, 'sxsd', 'images1.jpg', 'image/jpeg', 'C:/xampp/htdocs/Twiga/docs/images1.jpg', '2015-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `m_users`
--

CREATE TABLE IF NOT EXISTS `m_users` (
`id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `user_group` int(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_users`
--

INSERT INTO `m_users` (`id`, `f_name`, `l_name`, `username`, `phone`, `email`, `password`, `title`, `user_group`) VALUES
(1, 'Julie', 'Eustine', 'julie', '0703568592', 'oti@gmail.com', '0a692f089b30b507bc881486d21a15f4ce7534ba02cf4d9bcc0062375fdcde1a364a9370593c274e0f0632fc7ae7448bdee5d267b64685f07bd7192128f6ff38', 'Admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `m_group`
--
ALTER TABLE `m_group`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_uploads`
--
ALTER TABLE `m_uploads`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_users`
--
ALTER TABLE `m_users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_group`
--
ALTER TABLE `m_group`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `m_uploads`
--
ALTER TABLE `m_uploads`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `m_users`
--
ALTER TABLE `m_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
