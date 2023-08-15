-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 04:02 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `another_one`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `name`, `address`, `email`, `course`, `date_created`, `date_updated`) VALUES
(1, 'asdad', 'dick123123123heloudpatre', '12-b Archangel St, Urdaneta, Pangasinan, Philippines', 'dick@gmail.com', 'bsit', '2023-08-14 22:04:09', '2023-08-14 23:01:28'),
(2, 'asdadad', 'asdasd', '14 Archangel St, Urdaneta, Pangasinan, Philippines', 'ss@gmail.com', 'bsmath', '2023-08-14 22:07:14', '2023-08-14 22:07:14'),
(3, 'asdadsad', 'asdsad', 'asdadasd', 'hhh@gmail.com', 'bsit', '2023-08-14 22:09:47', '2023-08-14 22:09:47'),
(4, 'asdad', 'adsad', 'sasdsad', 'sadadadsa', 'asdad', '2023-08-14 22:12:53', '2023-08-14 22:12:53'),
(5, 'asdad', 'adsad', 'sasdsad', 'sadadadsa', 'asdad', '2023-08-14 22:12:53', '2023-08-14 22:12:53');

-- --------------------------------------------------------

--
-- Table structure for table `subject_list`
--

CREATE TABLE `subject_list` (
  `id` int(12) NOT NULL,
  `user_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `grade` double DEFAULT NULL,
  `date_created` datetime NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject_list`
--

INSERT INTO `subject_list` (`id`, `user_id`, `name`, `grade`, `date_created`, `date_update`) VALUES
(4, 3, 'http', NULL, '2023-08-14 17:07:19', '2023-08-14 17:07:19'),
(6, 1, 'WEBSYS', 90, '2023-08-14 17:12:51', '2023-08-14 17:12:51'),
(7, 1, 'IT', 90, '2023-08-14 17:33:47', '2023-08-14 17:33:47'),
(8, 1, 'asdad', NULL, '2023-08-14 17:34:47', '2023-08-14 17:34:47'),
(9, 1, '1231321', NULL, '2023-08-14 17:34:47', '2023-08-14 17:34:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_list`
--
ALTER TABLE `subject_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subject_list`
--
ALTER TABLE `subject_list`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subject_list`
--
ALTER TABLE `subject_list`
  ADD CONSTRAINT `subject_list_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
