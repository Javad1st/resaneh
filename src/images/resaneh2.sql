-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2025 at 10:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resaneh2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(2, 'resaneh_balaee.admin@gmail.com', '$2y$10$o.bbicyX9ytLsUU0Uzmiqe7xbvtK9TgAIMVlqnxENJ/pBInFQJK5G');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_hours` varchar(255) NOT NULL,
  `course_duration` int(11) NOT NULL,
  `course_price` int(11) NOT NULL,
  `instructor_name` varchar(255) NOT NULL,
  `course_description` mediumtext DEFAULT NULL,
  `learning_objectives` mediumtext DEFAULT NULL,
  `major_id` int(11) DEFAULT NULL,
  `course_image` varchar(255) DEFAULT NULL,
  `course_code` varchar(50) NOT NULL,
  `discount_price` int(11) DEFAULT NULL,
  `discounted_price` int(11) DEFAULT NULL,
  `course_days` enum('زوج','فرد') NOT NULL DEFAULT 'زوج',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `course_hours`, `course_duration`, `course_price`, `instructor_name`, `course_description`, `learning_objectives`, `major_id`, `course_image`, `course_code`, `discount_price`, `discounted_price`, `course_days`, `created_at`) VALUES
(37, 'طراحی سایت', '16 تا 18', 4, 30000000, 'آقایی', 'نعلقعلسیتلت', 'یسا', 20, 'uploads/courses/1739632127_download (1).jpg', 'res44ABD3', NULL, 7000000, 'فرد', '2025-02-13 14:39:25');

-- --------------------------------------------------------

--
-- Table structure for table `course_registrations`
--

CREATE TABLE `course_registrations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `family` varchar(255) NOT NULL,
  `national_id` varchar(10) DEFAULT NULL,
  `course_name` varchar(255) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `phone` varchar(15) DEFAULT NULL,
  `course_code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `course_registrations`
--

INSERT INTO `course_registrations` (`id`, `name`, `family`, `national_id`, `course_name`, `registration_date`, `phone`, `course_code`) VALUES
(52, 'امیر', 'عزیز التجار', '', 'ICDL', '2025-02-07 21:49:22', '09301832546', 'resFCC7AE'),
(53, 'Amir', 'عزیز التجار', '', 'ادمینی', '2025-02-11 22:35:48', '09301832546', 'res6B1A51'),
(54, 'Amir', 'عزیز التجار', '', 'طراحی شبکه', '2025-02-13 11:42:53', '09301832546', 'resF2FB2A'),
(55, 'اقا حسین', 'عزیز التجار', '', 'ICDL2', '2025-02-13 11:43:23', '09301832546', 'res38BF1D'),
(56, 'امیر', 'عزیز التجار', '', 'ملوکه', '2025-02-13 11:45:00', '09301832546', 'resF7E3B3'),
(57, 'امیر', 'عزیز التجار', '', 'طراحی سایت', '2025-02-13 14:40:00', '09301832546', 'res44ABD3'),
(58, 'Amir', 'عزیز التجار', '', 'ICDL2', '2025-02-14 23:25:36', '09301832546', 'PRG1739406198');

-- --------------------------------------------------------

--
-- Table structure for table `fields`
--

CREATE TABLE `fields` (
  `id` int(11) NOT NULL,
  `field_name` varchar(255) NOT NULL,
  `field_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `fields`
--

INSERT INTO `fields` (`id`, `field_name`, `field_image`) VALUES
(16, 'کامپیوتر', '../uploads2/download (6).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `majors`
--

CREATE TABLE `majors` (
  `id` int(11) NOT NULL,
  `major_name` varchar(255) NOT NULL,
  `major_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `majors`
--

INSERT INTO `majors` (`id`, `major_name`, `major_image`) VALUES
(20, 'کامپیوتر', 'uploads/download (4).jpg'),
(21, 'کامپیوتر', 'uploads/download (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pre_registration`
--

CREATE TABLE `pre_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `family` varchar(255) NOT NULL,
  `national_id` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `course_name` varchar(255) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `pre_registration`
--

INSERT INTO `pre_registration` (`id`, `name`, `family`, `national_id`, `created_at`, `course_name`, `course_code`, `phone`) VALUES
(110, 'امیر', 'عزیز التجار', '', '2025-02-07 21:50:31', 'php', 'PRG1738964636', '09301832546');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `program_name` varchar(255) NOT NULL,
  `program_description` text DEFAULT NULL,
  `program_hours` varchar(50) DEFAULT NULL,
  `program_duration` int(11) DEFAULT NULL,
  `program_price` decimal(10,2) DEFAULT NULL,
  `instructor_name` varchar(255) NOT NULL,
  `course_description` text DEFAULT NULL,
  `topics_to_learn` text DEFAULT NULL,
  `program_image` varchar(255) DEFAULT NULL,
  `learning_objectives` longtext NOT NULL,
  `program_code` varchar(20) NOT NULL,
  `course_pdf` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `field_id`, `program_name`, `program_description`, `program_hours`, `program_duration`, `program_price`, `instructor_name`, `course_description`, `topics_to_learn`, `program_image`, `learning_objectives`, `program_code`, `course_pdf`) VALUES
(25, 16, 'ICDL2', 'من889', '16 تا 18', 2, 20000000.00, '', NULL, NULL, 'uploads2/courses/1739406198_download (4).jpg', 'ن اتلاب', 'PRG1739406198', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `major_id` (`major_id`);

--
-- Indexes for table `course_registrations`
--
ALTER TABLE `course_registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `majors`
--
ALTER TABLE `majors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pre_registration`
--
ALTER TABLE `pre_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `program_code` (`program_code`),
  ADD KEY `field_id` (`field_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `course_registrations`
--
ALTER TABLE `course_registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `fields`
--
ALTER TABLE `fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `majors`
--
ALTER TABLE `majors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pre_registration`
--
ALTER TABLE `pre_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`major_id`) REFERENCES `majors` (`id`);

--
-- Constraints for table `programs`
--
ALTER TABLE `programs`
  ADD CONSTRAINT `programs_ibfk_1` FOREIGN KEY (`field_id`) REFERENCES `fields` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
