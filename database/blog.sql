-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2024 at 11:19 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(80) NOT NULL,
  `created_at` datetime NOT NULL,
  `slug` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `image`, `created_at`, `slug`) VALUES
(29, 'A Practical Guide to Securing Your Windows PC', '<p>There’s no one-size-fits-all solution to computer security, \r\n    and locking down and securing your computer might feel like an \r\n    impossible task, but that doesn’t have to be the case. There is such a \r\n    thing as “good enough” security for most people. And securing your Windows\r\n     PC doesn’t have to cost money, consume a lot of time, or require technical \r\n     know-how—it just takes enough patience to navigate a series of Windows settings.\r\n</p>\r\n<h1>The research</h1>\r\n<h1>Click cautiously and install less</h1>\r\n<h1>Don’t put off automatic updates</h1>\r\n<h1>Enable BitLocker</h1>\r\n<h1>Back up your files</h1>\r\n<h1>Set up Microsoft Defender properly</h1>\r\n<h1>Secure your Windows login with a password (and consider logging in with Windows Hello)</h1>\r\n<h1>Remove software you don’t need (and any “bloatware”)</h1>\r\n<h1>Do a permissions audit</h1>\r\n<h1>Check your privacy settings</h1>\r\n<h1>Footnotes</h1>\r\n\r\n\r\n', 'cyberpunk (1).jpg', '2024-01-13 00:00:00', 'A-Practical-Guide-to-Securing-Your-Windows-PC');

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE `post_tags` (
  `tag_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_tags`
--

INSERT INTO `post_tags` (`tag_id`, `post_id`) VALUES
(1, 7),
(2, 7),
(1, 8),
(2, 8),
(4, 9),
(2, 10),
(2, 13),
(1, 14),
(4, 15),
(5, 15),
(5, 16),
(1, 17),
(1, 18),
(4, 19),
(1, 20),
(1, 21),
(3, 21),
(1, 22),
(1, 23),
(1, 24),
(2, 25),
(5, 26),
(3, 27),
(1, 28),
(1, 29),
(2, 29);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `tag` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag`) VALUES
(1, 'tech'),
(2, 'hacking'),
(3, 'cyber'),
(4, 'cyber crime'),
(5, 'coding');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
(1, 'pratham', 'pratham', '916172e7995de7e1e64c0c3aad1edd59'),
(2, 'hello', 'hello', '5d41402abc4b2a76b9719d911017c592');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
