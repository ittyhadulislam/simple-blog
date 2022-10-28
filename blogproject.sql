-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 10:59 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(50) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'Azmain', 'az.walker30822@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(255) NOT NULL,
  `caterory_title` varchar(255) NOT NULL,
  `category_discription` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `caterory_title`, `category_discription`) VALUES
(1, 'Sports', 'this is the sports category'),
(2, 'Research', 'This is the Research Category'),
(3, 'Event', 'This is the Event category'),
(4, 'Programming', 'This is the programming category.');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(255) NOT NULL,
  `post_title` varchar(60) NOT NULL,
  `post_content` longtext NOT NULL,
  `post_img` varchar(255) NOT NULL,
  `post_category` int(255) NOT NULL,
  `post_author` varchar(60) NOT NULL,
  `post_date` date NOT NULL,
  `post_comment_count` int(255) NOT NULL,
  `post_summery` varchar(200) NOT NULL,
  `post_tag` varchar(255) NOT NULL,
  `post_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_content`, `post_img`, `post_category`, `post_author`, `post_date`, `post_comment_count`, `post_summery`, `post_tag`, `post_status`) VALUES
(4, 'demo post', 'Note: The INNER JOIN keyword selects all rows from both tables as long as there is a match between the columns. If there are records in the \"Orders\" table that do not have matches in \"Customers\", these orders will not be shown!', '260719318_103492275520773_6326921309116485666_n.jpg', 2, 'Admin', '2022-09-29', 3, 'Note: The INNER JOIN keyword selects all rows from both tables as long as there is a match between the columns. If there are records in the \"Orders\" table that do not have matches in \"Customers\", thes', 'sports', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `post_and_category`
-- (See below for the actual view)
--
CREATE TABLE `post_and_category` (
`post_id` int(255)
,`post_title` varchar(60)
,`post_content` longtext
,`post_img` varchar(255)
,`post_author` varchar(60)
,`post_date` date
,`post_comment_count` int(255)
,`post_summery` varchar(200)
,`post_tag` varchar(255)
,`post_status` tinyint(3)
,`category_id` int(255)
,`caterory_title` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure for view `post_and_category`
--
DROP TABLE IF EXISTS `post_and_category`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `post_and_category`  AS  select `posts`.`post_id` AS `post_id`,`posts`.`post_title` AS `post_title`,`posts`.`post_content` AS `post_content`,`posts`.`post_img` AS `post_img`,`posts`.`post_author` AS `post_author`,`posts`.`post_date` AS `post_date`,`posts`.`post_comment_count` AS `post_comment_count`,`posts`.`post_summery` AS `post_summery`,`posts`.`post_tag` AS `post_tag`,`posts`.`post_status` AS `post_status`,`categories`.`category_id` AS `category_id`,`categories`.`caterory_title` AS `caterory_title` from (`posts` join `categories` on((`posts`.`post_category` = `categories`.`category_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
