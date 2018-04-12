-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 05:08 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isdm`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(100) NOT NULL,
  `course_name` varchar(64) NOT NULL,
  `course_description` text NOT NULL,
  `course_obj1` varchar(100) NOT NULL,
  `course_obj2` varchar(100) NOT NULL,
  `course_obj3` varchar(100) NOT NULL,
  `course_instructor1` varchar(20) NOT NULL,
  `course_instructor2` varchar(20) NOT NULL,
  `course_instructor3` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_description`, `course_obj1`, `course_obj2`, `course_obj3`, `course_instructor1`, `course_instructor2`, `course_instructor3`) VALUES
(2, 'Machine Learning', 'Supervise Learning, Deep Learning, Unsupervised Learning.', 'Basics ', 'Learn supervised', 'Implement project', 'Matt', '', ''),
(3, 'SDQI', 'Software Development Quality and Imporvement', 'UML', '', '', 'Apichon', '', ''),
(4, 'SDQI', 'Software Development Quality and Imporvement', 'UML', '', '', 'Apichon', '', ''),
(5, 'Project Design', 'Project Design', 'Learn to design projects', '', '', 'Teerapat', '', ''),
(6, 'PLC', 'Programming Languages and Compilers', 'Basics of machine languages', '', '', 'Prof. Dung', '', ''),
(7, 'PLC', 'Programming Languages and Compilers', 'Basics of machine languages', '', '', 'Prof. Dung', '', ''),
(8, 'PLC', 'Programming Languages and Compilers', 'Basics of machine languages', '', '', 'Prof. Dung', '', ''),
(9, 'PLC', 'Programming Languages and Compilers', 'Basics of machine languages', '', '', 'Prof. Dung', '', ''),
(10, 'PLC', 'Programming Languages and Compilers', 'Basics of machine languages', '', '', 'Prof. Dung', '', ''),
(11, 'PLC', 'Programming Languages and Compilers', 'Basics of machine languages', '', '', 'Prof. Dung', '', ''),
(12, 'PLC', 'Programming Languages and Compilers', 'Basics of machine languages', '', '', 'Prof. Dung', '', ''),
(13, 'PLC', 'Programming Languages and Compilers', 'Basics of machine languages', '', '', 'Prof. Dung', '', ''),
(14, 'PLC', 'Programming Languages and Compilers', 'Basics of machine languages', '', '', 'Prof. Dung', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_pwd` varchar(256) NOT NULL,
  `user_username` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_pwd`, `user_username`) VALUES
(1, 'amit.sai.sagar@gmail.com', '912ec803b2ce49e4a541068d495ab570', 'st120004'),
(3, 'st120004@ait.asia', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'sagar'),
(4, 'st119556@ait.asia', 'e2fc714c4727ee9395f324cd2e7f331f', 'melina'),
(5, 'st119967@ait.asia', '1a1dc91c907325c69271ddf0c944bc72', 'karan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_username` (`user_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
