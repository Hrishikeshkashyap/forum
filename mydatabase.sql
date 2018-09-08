-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2018 at 04:33 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `scholarId` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `email`, `scholarId`, `password`, `status`) VALUES
(75, 'fdg', 'daniel22233@gmamoil.com', 'varchasvab', '0', 'reload'),
(76, 'Varchasva', 'varchasvab@gmail.com', '1714117', 'abc', 'reload'),
(77, 'hello', 'var@n.com', '12', '12', 'reload'),
(78, 'lk', 'kl@gm.com', 'kl', 'mn', 'reload');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `a_id` varchar(255) NOT NULL,
  `q_id` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `posted_by` varchar(255) NOT NULL,
  `upvotes` int(11) NOT NULL DEFAULT '0',
  `downvotes` int(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`a_id`, `q_id`, `answer`, `posted_by`, `upvotes`, `downvotes`, `status`) VALUES
('2', '5', '', 'nathsagar24', 0, 0, ''),
('1522604413', '3', 'Yu can  use hard reset', 'nathsagar24', -1, 0, ''),
('51', '5', 'MacDonyour Foot Existence', 'Nikhil', 0, 0, ''),
('42', '4', 'I hack into NASA and stole movies from their servers', 'Roshan', -1, 0, ''),
('41', '4', 'Nothing Really', 'Roshan', 0, 1, ''),
('32', '3', 'You can use ctrl+alt+del to start task manage', 'Roshan', 0, 1, ''),
('31', '3', 'Shortcut keys can be used', 'Roshan', 0, 0, ''),
('1522674921', '4', 'ieyiufywui', 'gu', 0, 0, ''),
('1522675058', '4', 'yueyiuf', 'gu', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `a_id` varchar(25) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `posted_by` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`a_id`, `comment`, `posted_by`) VALUES
('1', 'done', 'some1'),
('1', 'hello', '.some1.'),
('1', 'got that', 'some1'),
('2020_1', 'got that', 'some1');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `q_id` varchar(255) NOT NULL,
  `questions` varchar(500) NOT NULL,
  `posted_by` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_id`, `questions`, `posted_by`) VALUES
('3', 'What are some good computer tricks that are not commonly known?', 'nathsagar24'),
('5', 'If each brand had an honest slogan what would it be?', 'kashyap'),
('4', 'What is the most illegal thing you have evr done on a computer?', 'kashyap'),
('10420183', 'How is nit?', 'NSGDUY'),
('10420184', 'How is nits in placements and fests?', 'NSGDUY'),
('10420185', 'How is nits cutoff and gymkhana body?', 'NSGDUY'),
('10420186', 'How is nits cutoff and gymkhana body?', 'NSGDUY'),
('10420187', 'How is nits cutoff and gymkhana body?', 'NSGDUY'),
('10420188', 'bhcedhh', 'NSGDUY'),
('10420189', 'bhcedhh', 'NSGDUY'),
('104201810', 'ohfewsdh;gorvf', 'NSGDUY'),
('104201811', 'ohfewsdh;gorvf', 'NSGDUY'),
('104201812', 'ohfewsdh;gorvf', 'NSGDUY'),
('104201813', 'hweliucdslo', 'NSGDUY'),
('104201814', 'hweliucdslo', 'NSGDUY'),
('104201815', 'hweliucdslo', 'NSGDUY'),
('104201816', 'hweliucdslo', 'NSGDUY'),
('104201817', 'hweliucdslo', 'NSGDUY'),
('104201818', 'hweliucdslo', 'NSGDUY'),
('104201819', 'hweliucdslo', 'NSGDUY');

-- --------------------------------------------------------

--
-- Table structure for table `tags_table`
--

CREATE TABLE `tags_table` (
  `q_id` int(255) NOT NULL,
  `tags` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags_table`
--

INSERT INTO `tags_table` (`q_id`, `tags`) VALUES
(104201818, 'NITS'),
(104201818, 'Training And Placement'),
(104201818, 'Cultural And Technical Fests'),
(104201819, 'NITS'),
(104201819, 'Training And Placement'),
(104201819, 'Cultural And Technical Fests');

-- --------------------------------------------------------

--
-- Table structure for table `upvotes`
--

CREATE TABLE `upvotes` (
  `a_id` varchar(50) NOT NULL,
  `q_id` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `upvote` int(10) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upvotes`
--

INSERT INTO `upvotes` (`a_id`, `q_id`, `user_id`, `upvote`, `status`) VALUES
('51', '5', 'kashyap', 1, ''),
('42', '4', 'kashyap', -1, ''),
('32', '3', 'kashyap', -1, ''),
('42', '4', 'nathsagar24', 1, ''),
('42', '4', 'jndsejk', 1, ''),
('41', '4', 'nathsagar24', -1, 'seen'),
('32', '3', 'nathsagar24', -1, 'unseen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
