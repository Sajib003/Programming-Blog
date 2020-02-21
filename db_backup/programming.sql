-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2018 at 02:42 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `programming`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Username`, `Email`, `Password`) VALUES
('Sajib', 'Sajib', 'sajib@gmail.com', 'sajib');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `Comment_id` int(20) NOT NULL,
  `Comment` mediumtext,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `Post_id` int(20) NOT NULL,
  `User_id` int(10) DEFAULT NULL,
  `Username` varchar(100) NOT NULL,
  `Title` varchar(100) DEFAULT NULL,
  `Details` mediumtext,
  `Language` varchar(30) DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`Post_id`, `User_id`, `Username`, `Title`, `Details`, `Language`, `Date`) VALUES
(1, NULL, 'Sajib005', 'Program', '  ooooooooooo              ', 'C++', NULL),
(2, NULL, 'Sajib005', 'Abc', '        ssssssssss        ', 'C++', NULL),
(3, NULL, 'Sajib005', 'a', 'sadfds', 'Python', NULL),
(4, NULL, 'Sajib005', 'a', 'sadfds', 'Python', NULL),
(5, NULL, 'Sajib005', 'a', 'sadfds', 'Python', NULL),
(6, NULL, 'Sajib005', 'a', 'sadfds', 'Python', NULL),
(7, NULL, 'Sajib005', 'a', 'sadfds', 'Python', NULL),
(8, NULL, 'Sajib005', 'a', 'sadfds', 'Python', NULL),
(9, NULL, 'Sajib005', 'a', 'sadfds', 'Python', NULL),
(10, NULL, 'Sajib005', 'a', 'sadfds', 'Python', NULL),
(11, NULL, 'Sajib005', 'a', 'sadfds', 'Python', NULL),
(15, NULL, 'Sajib005', 'Program', ' ddddddddddddddddd               ', 'C++', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `Problem_id` int(20) NOT NULL,
  `User_id` int(10) DEFAULT NULL,
  `Username` varchar(100) NOT NULL,
  `Title` varchar(100) DEFAULT NULL,
  `Details` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`Problem_id`, `User_id`, `Username`, `Title`, `Details`) VALUES
(1, NULL, 'Sajib003', 'A', '                ABC'),
(2, NULL, 'Sajib005', 'Program', 'ssssssssssssss                ');

-- --------------------------------------------------------

--
-- Table structure for table `programmers`
--

CREATE TABLE `programmers` (
  `User_id` int(10) NOT NULL,
  `Institution` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `programmers_known_language`
--

CREATE TABLE `programmers_known_language` (
  `User_id` int(10) NOT NULL,
  `Known_language` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `programmers_skill`
--

CREATE TABLE `programmers_skill` (
  `User_id` int(10) NOT NULL,
  `Skill` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `Quiz_id` int(20) NOT NULL,
  `User_id` int(10) DEFAULT NULL,
  `Username` varchar(100) NOT NULL,
  `Question` mediumtext,
  `Answer` varchar(100) DEFAULT NULL,
  `Language` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`Quiz_id`, `User_id`, `Username`, `Question`, `Answer`, `Language`) VALUES
(1, NULL, 'Sajib003', 'What is C++?', 'Programming language', 'C++'),
(2, NULL, 'Sajib', 'sssssssssssdddd                ', 'dd', 'R');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `username`, `password`, `birthday`, `gender`, `phone`) VALUES
(8, 'Sajib Boss', 'sbshaw01@gmail.com', 'Sajib001', 'ceb8447cc4ab78d2ec34cd9f11e4bed2', '1996-05-03', 'm', '01687326575'),
(11, 'Sajib', 'sajibbiswas003@gmail.com', 'Sajib002', 'ebd19ff87cd77c4a4865008ddb1b8a62', '1997-12-30', 'm', '01768727003'),
(12, 'Sajib', 'sbshaw009@gmail.com', 'Sajib003', '7f555568deda61f2eae9eb040ce60a6f', '1996-06-03', 'select', '01768727003'),
(18, 'Sajib', 'sbshaw008@gmail.com', 'Sajib005', '8505b346707134931b145a7c403d5fb0', '1996-11-30', 'm', '01768727003'),
(20, 'Sajib', 'sbshaw2@gmail.com', 'Sajib2', '7b5a86e9e163deb6bbf0b2719e05938f', '1996-08-05', 'm', '018964533'),
(21, 'Ratul', 'ratul@gmail.com', 'Ratul21', 'afcadde773a98154637644213084cf50', '1996-12-01', 'Male', '0172698348');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`id`, `name`, `email`, `username`, `password`, `birthday`, `gender`, `phone`) VALUES
(1, 'Sajib', 'sb01@gmail.com', 'Sajib', '7f555568deda61f2eae9eb040ce60a6f', '1997-12-30', 'Male', '01768720000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_id` int(10) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Photo` longblob NOT NULL,
  `Birthday` date NOT NULL,
  `Gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_id`, `Username`, `Name`, `Email`, `Password`, `Photo`, `Birthday`, `Gender`) VALUES
(1, 'Sajib003', 'Sajib', 'sbshaw009@gmail.com', 'a704f118d71ec1a0782e0a9fba4cf018', '', '0000-00-00', ''),
(3, 'Sajib001', 'Sajib', 'sbshaw008@gmail.com', 'd67d9b0f9de42977168fb9f546d71635', '', '0000-00-00', ''),
(4, 'Sajib002', 'Sajib', 'sa@gmail.com', 'b14307b7c435cd0ccb40bcb37a4e9e00', '', '0000-00-00', ''),
(5, 'Sajib004', 'Sajib', 'sa1@gmail.com', '654ff22a9e5954599b3748f9d188b8a0', '', '0000-00-00', ''),
(6, 'Sajib005', 'Sajib Biswas', 'sa2@gmail.com', '8505b346707134931b145a7c403d5fb0', '', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Comment_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`Post_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`Problem_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `programmers`
--
ALTER TABLE `programmers`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `programmers_known_language`
--
ALTER TABLE `programmers_known_language`
  ADD PRIMARY KEY (`User_id`,`Known_language`);

--
-- Indexes for table `programmers_skill`
--
ALTER TABLE `programmers_skill`
  ADD PRIMARY KEY (`User_id`,`Skill`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`Quiz_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_id`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `Post_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
  MODIFY `Problem_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `Quiz_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`User_id`);

--
-- Constraints for table `problem`
--
ALTER TABLE `problem`
  ADD CONSTRAINT `problem_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`User_id`);

--
-- Constraints for table `programmers`
--
ALTER TABLE `programmers`
  ADD CONSTRAINT `programmers_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`User_id`);

--
-- Constraints for table `programmers_known_language`
--
ALTER TABLE `programmers_known_language`
  ADD CONSTRAINT `programmers_known_language_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`User_id`);

--
-- Constraints for table `programmers_skill`
--
ALTER TABLE `programmers_skill`
  ADD CONSTRAINT `programmers_skill_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`User_id`);

--
-- Constraints for table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`User_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
