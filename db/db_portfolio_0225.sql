-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 04, 2026 at 05:59 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_portfolio_0225`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admins`
--

DROP TABLE IF EXISTS `tbl_admins`;
CREATE TABLE IF NOT EXISTS `tbl_admins` (
  `admin_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admins`
--

INSERT INTO `tbl_admins` (`admin_id`, `username`, `password`, `created_at`) VALUES
(1, 'zeranlu', '$2y$10$mB9i.IoGnR50CXGE35y.8uTOW8zVQVBGubEBfTbwiAtoL/L2OQkqe', '2026-02-28 22:42:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_case_studies`
--

DROP TABLE IF EXISTS `tbl_case_studies`;
CREATE TABLE IF NOT EXISTS `tbl_case_studies` (
  `case_study_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `project_title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `project_desc` text COLLATE utf8mb4_general_ci NOT NULL,
  `proj_image_link` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `project_github_link` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `proj_live_link` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`case_study_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_case_studies`
--

INSERT INTO `tbl_case_studies` (`case_study_id`, `project_title`, `project_desc`, `proj_image_link`, `project_github_link`, `proj_live_link`) VALUES
(1, 'project #1', 'this is a testing example for a project in my case studies', 'images/image.png', 'github.com/testlink', 'testlink.com'),
(2, 'Real Project #2', 'this project had X, Y, Z requirements, various tools like HTMl, JS, and CSS were used to create this project', 'images/case_studies/images.png', 'github.com/another-project', 'testproject-number.two'),
(3, 'hello world', 'this is project #3 i think', '', '', ''),
(4, 'hello world I am alive', 'ITS ALIVE!!!', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_form`
--

DROP TABLE IF EXISTS `tbl_contact_form`;
CREATE TABLE IF NOT EXISTS `tbl_contact_form` (
  `contact_id` int NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `contact_message` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `contact_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_contact_form`
--

INSERT INTO `tbl_contact_form` (`contact_id`, `contact_name`, `contact_email`, `contact_message`, `contact_created_at`) VALUES
(37, 'asd asd', 'asfasfd@gmail.com', 'asdad', '2026-03-01 04:51:07'),
(36, 'asd asd', 'asfasfd@gmail.com', 'asdad', '2026-03-01 04:47:48'),
(35, 'asd asd', 'zeranlu0326@gmail.com', 'asd', '2026-03-01 01:04:35'),
(34, 'claire zelcer', 'zeranlu0326@gmail.com', 'let\'s bang', '2026-02-28 23:46:19'),
(33, 'Zeran Lu', 'zeranlu0326@gmail.com', 'hello world', '2026-02-28 18:00:28');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
