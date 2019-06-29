-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2019 at 01:17 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(200) NOT NULL,
  `username` varchar(255) NOT NULL,
  `post_id` int(50) NOT NULL,
  `comment` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `username`, `post_id`, `comment`, `date`) VALUES
(1, 'vaibhav@buccha188', 7, 'this is a comment', '2019-06-27 16:00:52'),
(2, 'vaibhav@buccha188', 13, 'this is a comment', '2019-06-27 16:00:52'),
(5, 'vaibhav@buccha188', 12, 'this is a comment', '2019-06-27 16:00:52'),
(6, 'vaibhav@buccha188', 12, 'this is a comment', '2019-06-27 16:00:52'),
(7, 'vaibhav@buccha188', 12, 'this is a comment', '2019-06-27 16:00:52'),
(8, 'vaibhav@buccha188', 12, 'this is a comment', '2019-06-27 16:00:52'),
(9, 'vaibhav@buccha188', 12, 'this is a comment', '2019-06-27 16:00:52'),
(10, 'vaibhav@buccha188', 12, 'this is a comment', '2019-06-27 16:00:52'),
(11, 'vaibhav@buccha188', 12, 'this is a comment', '2019-06-27 16:00:52'),
(12, 'vaibhav@buccha188', 13, 'nic click ', '2019-06-27 16:00:52'),
(13, 'vaibhav@buccha188', 13, 'vaibhav is here!', '2019-06-27 16:00:52'),
(14, 'vaibhav@buccha188', 13, 'this is comment ', '2019-06-27 16:00:52'),
(15, 'vaibhav@buccha188', 13, 'gdxjgfdjgf', '2019-06-27 16:00:52'),
(16, 'vaibhav@buccha188', 13, 'vaibhav is here!', '2019-06-27 16:00:52'),
(17, 'vaibhav@buccha188', 13, 'vaibhav is here!', '2019-06-27 16:00:52'),
(18, 'vaibhav@buccha188', 13, 'vaibhav is here!', '2019-06-27 16:00:52'),
(19, 'vaibhav@buccha188', 6, 'vaibhav is here!', '2019-06-27 16:00:52'),
(20, 'vaibhav@buccha188', 6, 'vaibhav is here!', '2019-06-27 16:00:52'),
(21, 'vaibhav@buccha188', 5, 'vaibhav is here!', '2019-06-27 16:00:52'),
(22, 'vaibhav@buccha188', 5, 'vaibhav is here!', '2019-06-27 16:00:52'),
(23, 'vaibhav@buccha188', 2, 'vaibhav is here!', '2019-06-27 16:00:52'),
(24, 'vaibhav@buccha188', 2, 'vaibhav is here!', '2019-06-27 16:00:52'),
(25, 'vaibhav@buccha188', 2, 'vaibhav is here!', '2019-06-27 16:00:52'),
(26, 'vaibhav@buccha188', 13, 'vaibhav is here!', '2019-06-27 16:00:52'),
(27, 'vaibhav@buccha188', 13, 'akghdsdkf', '2019-06-27 16:00:52'),
(28, 'vaibhav@buccha188', 12, 'vaibhav is here!', '2019-06-27 16:00:52'),
(29, 'vaibhav@buccha188', 4, 'vaibhav is here!', '2019-06-27 16:00:52'),
(30, 'vaibhav@buccha188', 4, 'vaibhav is here!', '2019-06-27 16:00:52'),
(31, 'vaibhav@buccha188', 14, 'mlknkljkop', '2019-06-27 16:00:52'),
(32, 'naeem@dhattiwala141', 14, 'naeem is here!', '2019-06-27 16:00:52'),
(33, 'naeem@dhattiwala141', 17, 'vaibhav is here!', '2019-06-27 16:03:36'),
(34, 'naeem@dhattiwala141', 20, 'hello', '2019-06-28 15:24:56');

-- --------------------------------------------------------

--
-- Table structure for table `friend_req`
--

CREATE TABLE `friend_req` (
  `id` int(50) NOT NULL,
  `sender_name` varchar(255) NOT NULL,
  `reciver_name` varchar(255) NOT NULL,
  `status` varchar(150) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friend_req`
--

INSERT INTO `friend_req` (`id`, `sender_name`, `reciver_name`, `status`, `time`) VALUES
(3, 'naeem@dhattiwala141', 'vaibhav@buccha188', 'accepted', '2019-06-29 15:55:31'),
(4, 'vaibhav@buccha188', 'naeem@dhattiwala141', 'accepted', '2019-06-29 15:55:31');

-- --------------------------------------------------------

--
-- Table structure for table `like_dislike`
--

CREATE TABLE `like_dislike` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `post_id` varchar(300) NOT NULL,
  `like_dislike` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `like_dislike`
--

INSERT INTO `like_dislike` (`id`, `username`, `post_id`, `like_dislike`) VALUES
(8, 'vaibhav@buccha188', '13', 'like'),
(9, 'vaibhav@buccha188', '12', 'like'),
(10, 'vaibhav@buccha188', '7', 'dislike'),
(11, 'vaibhav@buccha188', '6', 'dislike'),
(12, 'vaibhav@buccha188', '2', 'like'),
(13, 'vaibhav@buccha188', '4', 'dislike'),
(15, 'vaibhav@buccha188', '3', 'like'),
(16, 'vaibhav@buccha188', '5', 'dislike'),
(28, 'vaibhav@buccha188', '14', 'dislike'),
(29, 'naeem@dhattiwala141', '14', 'like'),
(30, 'naeem@dhattiwala141', '13', 'like'),
(31, 'naeem@dhattiwala141', '12', 'dislike'),
(32, 'naeem@dhattiwala141', '17', 'like'),
(33, 'naeem@dhattiwala141', '16', 'like'),
(34, 'naeem@dhattiwala141', '19', 'dislike'),
(35, 'naeem@dhattiwala141', '18', 'like'),
(36, 'naeem@dhattiwala141', '20', 'dislike'),
(37, 'naeem@dhattiwala141', '2', 'like'),
(38, 'naeem@dhattiwala141', '3', 'dislike'),
(39, 'vaibhav@buccha188', '20', 'like'),
(40, 'vaibhav@buccha188', '19', 'like'),
(41, 'vaibhav@buccha188', '18', 'dislike'),
(42, 'vaibhav@buccha188', '17', 'dislike'),
(43, 'vaibhav@buccha188', '16', 'like'),
(44, 'naeem@dhattiwala141', '6', 'dislike'),
(45, 'naeem@dhattiwala141', '5', 'dislike');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(20) NOT NULL,
  `content` varchar(3000) NOT NULL,
  `username` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `images` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `content`, `username`, `date`, `images`) VALUES
(2, 'this is a content', 'vaibhav@buccha188', '0000-00-00 00:00:00', 'Hydrangeas.jpg/Chrysanthemum.jpg/Desert.jpg/'),
(3, 'i am vaibhav buccha belongs to jaipur currently working at i-verve infoweb pvt. ltd.\r\nmy domain is php.', 'vaibhav@buccha188', '0000-00-00 00:00:00', 'Jellyfish.jpg/Koala.jpg/Tulips.jpg/'),
(4, 'The cool thing about gradients is the variety that are available â€“ gradients come in all shapes, sizes, colors. Youâ€™ll likely see the most common ones the most often: linear gradients and radial gradients. Weâ€™ve already talked a bit about CSS Linear Gradients, the most popular ', 'vaibhav@buccha188', '0000-00-00 00:00:00', 'Koala.jpg/Lighthouse.jpg/'),
(5, 'The cool thing about gradients is the variety that are available â€“ gradients come in all shapes, sizes, colors. Youâ€™ll likely see the most common ones the most often: linear gradients and radial gradients. Weâ€™ve already talked a bit about CSS Linear Gradients, the most popular ', 'vaibhav@buccha188', '0000-00-00 00:00:00', 'Hydrangeas.jpg/'),
(6, 'The cool thing about gradients is the variety that are available â€“ gradients come in all shapes, sizes, colors. Youâ€™ll likely see the most common ones the most often: linear gradients and radial gradients. Weâ€™ve already talked a bit about CSS Linear Gradients, the most popular ', 'vaibhav@buccha188', '0000-00-00 00:00:00', 'Desert.jpg/Hydrangeas.jpg/Jellyfish.jpg/Koala.jpg/'),
(7, 'The cool thing about gradients is the variety that are available â€“ gradients come in all shapes, sizes, colors. Youâ€™ll likely see the most common ones the most often: linear gradients and radial gradients. Weâ€™ve already talked a bit about CSS Linear Gradients, the most popular ', 'vaibhav@buccha188', '0000-00-00 00:00:00', 'Desert.jpg/Hydrangeas.jpg/Jellyfish.jpg/Koala.jpg/Lighthouse.jpg/Penguins.jpg/Tulips.jpg/'),
(12, ' The cool thing about gradients is the variety that are available â€“ gradients come in all shapes, sizes, colors. Youâ€™ll likely see the most common ones the most often: linear gradients and radial gradients. Weâ€™ve already talked a bit about CSS Linear Gradients, the most popular', 'Rajesh@Raval23', '0000-00-00 00:00:00', 'Hydrangeas.jpg/Penguins.jpg/Tulips.jpg/'),
(13, 'this is content', 'vaibhav@buccha188', '0000-00-00 00:00:00', 'Lighthouse.jpg/'),
(14, '', 'vaibhav@buccha188', '0000-00-00 00:00:00', 'banner5.jpg/'),
(16, 'evertheless, from around 1949 to the present day, there has been a gradual increase in attention to and promotion of the language. Public Hawaiian-language immersion preschools called PÅ«nana Leo were established in 1984; other immersion schools followed soon after that. The firs', 'naeem@dhattiwala141', '0000-00-00 00:00:00', 'banner4.jpg/'),
(17, 'evertheless, from around 1949 to the present day, there has been a gradual increase in attention to and promotion of the language. Public Hawaiian-language immersion preschools called PÅ«nana Leo were established in 1984; other immersion schools followed soon after that. The firs', 'naeem@dhattiwala141', '0000-00-00 00:00:00', 'banner2.jpg/banner3.jpg/banner4.jpg/'),
(18, 'evertheless, from around 1949 to the present day, there has been a gradual increase in attention to and promotion of the language. Public Hawaiian-language immersion preschools called PÅ«nana Leo were established in 1984; other immersion schools followed soon after that. The firs', 'naeem@dhattiwala141', '2019-06-27 16:04:12', 'download.jpg/'),
(19, 'n publishing, art, and communication, content is the information and experiences that are directed towards retro style an end-user or audience. Content is "something that is to be expressed through some medium, as speech, writing or any of various', 'naeem@dhattiwala141', '2019-06-27 16:21:15', 'harvard.jpg/'),
(20, '', 'naeem@dhattiwala141', '2019-06-27 18:04:18', '10-Free.jpg/');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(400) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `hobbies` varchar(300) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `country` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `dob`, `hobbies`, `gender`, `phone`, `country`, `username`, `image`) VALUES
(3, 'Vaibhav Buccha', 'jainvaibhav415@gmail.com', '234d0453a53aaa305f1932e5f421b280', '2019-09-08', 'Programing,Dancing', 'Male', '7340272191', 'India', 'vaibhav@buccha188', 'image/Penguins.jpg'),
(4, 'vishal', 'vishal@gmail.com', '7da42b28fc17e617095dbf4654187db2', '2019-06-17', 'Programing', 'Male', '5313541', 'India', 'vishal180', 'image/Tulips.jpg'),
(5, 'yukti mahobia', 'yukti@gmail.com', '9597960bc1b5140669ece116ae9cf696', '2019-06-18', 'Programing,Dancing', 'Female', '1234567890', 'Pakistan', 'yukti@mahobia23', 'image/Koala.jpg'),
(6, 'Rajesh Raval', 'rajeshraval792@gmail.com', 'cabf031d5e3dc279f3856ac9a4fdde7d', '2019-06-12', 'Programing', 'Male', '9913699728', 'India', 'Rajesh@Raval23', 'image/Penguins.jpg'),
(7, 'naeem dhattiwala', 'naeem@gmail.com', 'e7d237379e30dd40136f00ed77658d29', '2019-06-27', 'Programing', 'Male', '9876543219', 'India', 'naeem@dhattiwala141', 'image/banner1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friend_req`
--
ALTER TABLE `friend_req`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like_dislike`
--
ALTER TABLE `like_dislike`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
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
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `friend_req`
--
ALTER TABLE `friend_req`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `like_dislike`
--
ALTER TABLE `like_dislike`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
