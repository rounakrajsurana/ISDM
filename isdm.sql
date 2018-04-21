-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2018 at 10:07 PM
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
  `schedule_id` int(11) NOT NULL,
  `course_description` text NOT NULL,
  `learning_outcome` varchar(200) NOT NULL,
  `course_obj1` varchar(100) NOT NULL,
  `course_obj2` varchar(100) NOT NULL,
  `course_obj3` varchar(100) NOT NULL,
  `course_instructor1` varchar(20) NOT NULL,
  `course_instructor2` varchar(20) NOT NULL,
  `course_instructor3` varchar(20) NOT NULL,
  `course_lang` varchar(100) NOT NULL,
  `course_cat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `schedule_id`, `course_description`, `learning_outcome`, `course_obj1`, `course_obj2`, `course_obj3`, `course_instructor1`, `course_instructor2`, `course_instructor3`, `course_lang`, `course_cat`) VALUES
(21, 'Python', 0, 'Building web applications on Python is easy and fun to do. Python is the go-to language these days. Learn Python from scratch and build some amazing applications.', '', 'Python Basics', 'Variables and Strings', 'Functions', 'Sagar', '', '', 'English', 'Management'),
(22, '', 0, '', '', '', '', '', '', '', '', '', ''),
(23, 'Maths', 0, 'algebra, geometry', '', 'obj 1', 'obj 2', '', 'Melina', '', '', 'English', 'IT'),
(24, 'aoh', 0, 'asfas', '', 'asd', 'ad', 'adsd', 'asd', '', '', 'English', 'Management'),
(25, 'Machine Learning', 0, 'Linear Algebra, Calculus, Deep Learning', '', 'Supervised Learning', 'Deep Learning', 'Unsupervised Learning', 'sagar', '', '', 'English', 'IT'),
(26, 'Machine Learning', 0, 'Learn the unsupervised, neural networks using deep-learning and supervised learning.', 'The student will be ', 'Concepts of Unsupervised Learning', 'Implementation using Python', 'Deep Caffe', 'Karan', 'Sagar', 'Melina', 'English', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `topicname1` varchar(100) NOT NULL,
  `bm1` varchar(100) NOT NULL,
  `tm1` varchar(100) NOT NULL,
  `evaluation1` varchar(100) NOT NULL,
  `duration1` varchar(100) NOT NULL,
  `topicname2` varchar(100) NOT NULL,
  `bm2` varchar(100) NOT NULL,
  `tm2` varchar(100) NOT NULL,
  `evaluation2` varchar(100) NOT NULL,
  `duration2` varchar(100) NOT NULL,
  `topicname3` varchar(100) NOT NULL,
  `bm3` varchar(100) NOT NULL,
  `tm3` varchar(100) NOT NULL,
  `evaluation3` varchar(100) NOT NULL,
  `duration3` varchar(100) NOT NULL,
  `topicname4` varchar(100) NOT NULL,
  `bm4` varchar(100) NOT NULL,
  `tm4` varchar(100) NOT NULL,
  `evaluation4` varchar(100) NOT NULL,
  `duration4` varchar(100) NOT NULL,
  `total_duration` int(100) NOT NULL,
  `target_learner` varchar(20) NOT NULL,
  `problem` varchar(100) NOT NULL,
  `statement` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `topicname1`, `bm1`, `tm1`, `evaluation1`, `duration1`, `topicname2`, `bm2`, `tm2`, `evaluation2`, `duration2`, `topicname3`, `bm3`, `tm3`, `evaluation3`, `duration3`, `topicname4`, `bm4`, `tm4`, `evaluation4`, `duration4`, `total_duration`, `target_learner`, `problem`, `statement`) VALUES
(20, 'Introduction', 'Remember', 'Lecture', 'Pop Quiz', '1 week', 'Elements, Variables and Strings', 'Understand', 'Lecture', 'Assignment', '1 week', '', '', '', '', '', '', '', '', ' ', '', 5, '', '', ''),
(21, 'introduction', 'Remember', 'Lecture', 'Pop Quiz', '1 week', 'topic 2', 'Analyze', 'Presentation', 'Class Activity', '7 weeks', '', '', '', '', '', '', '', '', ' ', '', 8, '', 'internet', 'paper based'),
(22, 'Introduction', 'Understand', 'Lecture', 'Assignment', '2 weeks', 'Unsupervised Learning', 'Analyze', 'Lecture', 'Assignment', '3 weeks', '', '', '', '', '', '', '', '', ' ', '', 5, 'Beginner', 'Internet', 'Lecture Handouts');

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
(21, 'saisagar@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'sagar'),
(22, 'meli@ait.asia', '594f803b380a41396ed63dca39503542', 'meli'),
(23, 'karan@gmail.com', 'db068ce9f744fbb35eedc9a883f91085', 'karan');

-- --------------------------------------------------------

--
-- Table structure for table `user_courses`
--

CREATE TABLE `user_courses` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `course_id` int(100) NOT NULL,
  `schedule_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_courses`
--

INSERT INTO `user_courses` (`id`, `user_id`, `course_id`, `schedule_id`) VALUES
(50, 21, 21, 0),
(51, 21, 21, 20),
(52, 22, 23, 0),
(53, 22, 23, 21),
(54, 22, 24, 0),
(55, 21, 25, 0),
(56, 21, 25, 22),
(57, 23, 26, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_username` (`user_username`);

--
-- Indexes for table `user_courses`
--
ALTER TABLE `user_courses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_courses`
--
ALTER TABLE `user_courses`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
