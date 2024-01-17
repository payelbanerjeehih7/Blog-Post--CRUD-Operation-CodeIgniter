-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 23, 2023 at 10:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payelci`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `body`, `post_image`, `created_at`) VALUES
(1, 1, 0, 'abc', 'abc', 'lorem', '', '2023-11-15 11:16:06'),
(4, 1, 0, 'abc', '123', 'lorem123', '', '2023-11-16 10:28:28'),
(5, 2, 0, 'me2', 'me2', 'payel2edited banerjee', '', '2023-11-16 10:55:41'),
(6, 2, 0, 'iam', 'iam', 'iam persley', '', '2023-11-16 12:14:31'),
(7, 2, 0, 'me3', 'me3', 'ttttttttttttttttttttttttttttttg ttttttttttttttg', '', '2023-11-16 12:15:28'),
(8, 2, 0, 'payel3', 'payel3', 'payel ban', '', '2023-11-16 12:19:51'),
(9, 1, 0, 'aaa', 'aaa', 'aaaaaaaaaaa', '', '2023-11-16 12:52:40'),
(10, 2, 0, 'img', 'img', 'image', 'noimage.jpg', '2023-11-17 06:49:39'),
(14, 1, 0, 'im', 'im', 'ima', 'noimage.jpg', '2023-11-17 07:12:52'),
(15, 1, 0, 'abc', 'abc', 'abbcc', 'noimage.jpg', '2023-11-17 07:17:41'),
(16, 2, 0, 'ioioi', 'ioioi', 'oiioio', 'noimage.jpg', '2023-11-17 07:18:33'),
(17, 1, 0, 'aaa', 'aaa', 'aaaaaaa', 'Screenshot (2).png', '2023-11-17 07:23:00'),
(18, 1, 0, 'aaa', 'aaa', 'aaaaaaaaaaaaaa', 'Screenshot (1).png', '2023-11-17 08:47:17'),
(19, 1, 0, 'u8oy8uou', 'u8oy8uou', 'ououo', 'img2.jpg', '2023-11-17 09:30:40'),
(20, 1, 0, 'fsdgf', 'fsdgf', 'gdfdfdfdfdfdfdfdfdfdfdfdfdfdfdf', 'Screenshot(1).png', '2023-11-17 09:39:36'),
(21, 1, 0, 'fffffffffffffffffff', 'fffffffffffffffffff', 'aaaaaaaaaaaaaaaaaaaa', 'final.png', '2023-11-17 09:42:24'),
(22, 1, 0, 'no img', 'no-img', 'non-image', 'noimage.jpg', '2023-11-17 09:46:15'),
(24, 2, 0, 'ffff', 'ffff', 'ffffffff', 'img5.jpg', '2023-11-17 12:31:19'),
(25, 1, 0, 'final post', 'final-post', '1st post', 'img2.jpg', '2023-11-17 12:32:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
