-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 03, 2026 at 12:06 AM
-- Server version: 10.6.24-MariaDB-cll-lve
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zeran195_db_portfolio_0225`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admins`
--

CREATE TABLE `tbl_admins` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admins`
--

INSERT INTO `tbl_admins` (`admin_id`, `username`, `password`, `created_at`) VALUES
(1, 'zeranlu', '$2y$10$mB9i.IoGnR50CXGE35y.8uTOW8zVQVBGubEBfTbwiAtoL/L2OQkqe', '2026-02-28 22:42:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_case_studies`
--

CREATE TABLE `tbl_case_studies` (
  `case_study_id` int(10) UNSIGNED NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `project_desc` text NOT NULL,
  `proj_image_link_1` varchar(255) NOT NULL,
  `proj_image_link_2` varchar(255) NOT NULL,
  `proj_image_link_3` varchar(255) NOT NULL,
  `project_github_link` varchar(255) NOT NULL,
  `proj_live_link` varchar(255) NOT NULL,
  `proj_reference_link` varchar(255) NOT NULL,
  `proj_intro` text NOT NULL,
  `proj_solution` text NOT NULL,
  `proj_result` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_form`
--

CREATE TABLE `tbl_contact_form` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_message` varchar(1000) NOT NULL,
  `contact_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admins`
--
ALTER TABLE `tbl_admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_case_studies`
--
ALTER TABLE `tbl_case_studies`
  ADD PRIMARY KEY (`case_study_id`);

--
-- Indexes for table `tbl_contact_form`
--
ALTER TABLE `tbl_contact_form`
  ADD PRIMARY KEY (`contact_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admins`
--
ALTER TABLE `tbl_admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_case_studies`
--
ALTER TABLE `tbl_case_studies`
  MODIFY `case_study_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_contact_form`
--
ALTER TABLE `tbl_contact_form`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
