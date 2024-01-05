-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2024 at 07:18 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_ID` varchar(10) NOT NULL,
  `course_Name` varchar(255) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_ID`, `course_Name`, `semester`) VALUES
('CSE 4104', 'Engineering Drawing Lab', 1),
('CSE 4107', 'Structured Programming I', 1),
('CSE 4108', 'Structured Programming I Lab', 1),
('CSE 4203', 'Discrete Mathematics', 2),
('CSE 4205', 'Digital Logic Design', 2),
('CSE 4206', 'Digital Logic Design Lab', 2),
('CSE 4303', 'Data Structures', 3),
('CSE 4304', 'Data Structures Lab', 3),
('CSE 4305', 'Computer Organization and Architecture', 3),
('CSE 4307', 'Database Management Systems', 3),
('CSE 4308', 'Database Management Systems Lab', 3),
('CSE 4309', 'Theory of Computing', 3),
('CSE 4403', 'Algorithms', 4),
('CSE 4404', 'Algorithms Lab', 4),
('CSE 4409', 'Database Management Systems II', 4),
('CSE 4410', 'Database Management Systems II Lab', 4),
('CSE 4411', 'Data Communication and Networking', 4),
('CSE 4412', 'Data Communication and Networking Lab', 4),
('CSE 4501', 'Operating Systems', 5),
('CSE 4502', 'Operating Systems Lab', 5),
('Hum 4145', 'Islamiat', 1),
('Hum 4147', 'Technology, Environment and Society', 1),
('Hum 4242', 'Arabic II', 2),
('Hum 4247', 'Accounting', 2),
('Hum 4249', 'Business Psychology and Communications', 2),
('Hum 4441', 'Engineering Ethics', 4),
('Math 4141', 'Geometry and Differential Calculus', 1),
('Math 4241', 'Integral Calculus and Differential Equations', 2),
('Math 4341', 'Linear Algebra', 3),
('Math 4441', 'Probability and Statistics', 4),
('Math 4543', 'Numerical Methods', 5),
('Math 4544', 'Numerical Methods Lab', 5),
('Phy 4143', 'Physics II', 1),
('Phy 4144', 'Physics II Lab', 1),
('SWE 4101', 'Introduction to Software Engineering', 1),
('SWE 4201', 'Object Oriented Concepts I', 2),
('SWE 4202', 'Object Oriented Concepts I Lab', 2),
('SWE 4301', 'Object Oriented Concepts II', 3),
('SWE 4302', 'Object Oriented Concepts II Lab', 3),
('SWE 4304', 'Software Project Lab I', 3),
('SWE 4401', 'Software Requirement and Specifications', 4),
('SWE 4402', 'Software Requirement and Specifications Lab', 4),
('SWE 4404', 'Software Project Lab II', 4),
('SWE 4501', 'Design Patterns', 5),
('SWE 4502', 'Design Patterns Lab', 5),
('SWE 4503', 'Software Security', 5),
('SWE 4504', 'Software Security Lab', 5),
('SWE 4506', 'Design Project I', 5);

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `file_id` int(11) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `file_type` varchar(30) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `course_id` varchar(10) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`file_id`, `file_name`, `file_type`, `url`, `course_id`, `sid`, `date`) VALUES
(1, 'Sadiku Physics Book', 'Book', 'https://drive.google.com/file/d/1wtH9CsUlzwng7x5UJF0XuWpfvNlAKL7X/view?usp=drive_link', 'PHY 4143', 210042106, '2024-01-01'),
(2, 'Boylestad Circuit Book', 'Book', 'https://drive.google.com/file/d/1qtT1QOqGtS5zt2r59YsSkP1iSHnGsrXW/view?usp=drive_link', 'PHY 4143', 210042106, '2024-01-01'),
(3, 'Sadiku Book Solution', 'Book', 'https://drive.google.com/file/d/1wX9LkXVLGPGt6cAEiDpG7iKZy2Kxpz_m/view?usp=drive_link', 'PHY 4143', 210042106, '2024-01-01'),
(4, 'Boylastad Book Solution', 'Book', 'https://drive.google.com/file/d/1ojuA4g6 wRn14amwtDOzLeMLSvlvB88I/view?usp=drive_link', 'PHY 4143', 210042106, '2024-01-01'),
(5, 'SWE fundamental Book', 'Book', 'https://drive.google.com/file/d/1JULY7Aplv nRq6C_ 2pPnV2uXAyewd2Q/view?usp=drive_link', 'SWE 4101', 210042106, '2024-01-01'),
(6, 'Computer Fundamentals Book', 'Book', 'https://drive.google.com/file/d/1wo8Ou4yvznWSAEvjOk1XgM4plSoIpLAP/view?usp=drive_link', 'SWE 4101', 210042106, '2024-01-01'),
(7, 'CPU theory', 'Slide', 'https://drive.google.com/file/d/1Vd8AAqZNfx7MbmDvChtwHVC6eHN6vNju/view?usp=drive_link', 'SWE 4101', 210042106, '2024-01-01'),
(8, 'Upto mid Shuvro Note', 'Hand-Note', 'https://drive.google.com/file/d/1DV4jV60pQkDvB5Sxp32tzYdqocnltyp1/view?usp=drive_link', 'SWE 4101', 210042106, '2024-01-01'),
(9, 'Anton Calculus Book', 'Book', 'https://drive.google.com/file/d/1d9YgBvy8Sd5wLATJFvyMyvBpKVKIcLcr/view?usp=drive_link', 'MATH 4141', 210042106, '2024-01-01'),
(10, 'Anton Calculus Solutions', 'Book', 'https://drive.google.com/file/d/1o_yPXWiM3jf7tmmXfRUU5aSbnZWH5AA2/view?usp=drive_link', 'MATH 4141', 210042106, '2024-01-01'),
(11, 'Das Mukharjee Calculus', 'Book', 'https://drive.google.com/file/d/1Go5gcqp6GVf6TFa PyZeQROsnumV4yq_/view?usp=drive_link', 'MATH 4141', 210042106, '2024-01-01'),
(12, 'A text book on coordinate geometry   pk bhattachargee', 'Book', 'https://drive.google.com/file/d/1KphyIMxQ7t2GdPsun43MpKGDWaLXlXgN/view?usp=drive_link', 'MATH 4141', 210042106, '2024-01-01'),
(13, 'All class slides', 'Slide', 'https://drive.google.com/file/d/1BFUpDWANzgBHARkcWWmmLxdFC6TStxbE/view?usp=drive_link', 'CSE 4107', 210042106, '2024-01-01'),
(14, 'K N king c programming book', 'Book', 'https://drive.google.com/file/d/1LNRC82OkGh3rysA5avDxC0pBgIKyuo7P/view?usp=drive_link', 'CSE 4107', 210042106, '2024-01-01'),
(15, 'All Lab Tasks', 'Code', 'https://drive.google.com/file/d/1yTDp1U2XyoyJtrqaDDKFi9AfWZalcHFi/view?usp=drive_link', 'CSE 4107', 210042106, '2024-01-01'),
(16, 'Teach Yourself C book', 'Book', 'https://drive.google.com/file/d/14typ2j9xM_aq5 Ab aCe_GyyY6DdKCke/view?usp=drive_link', 'CSE 4107', 210042106, '2024-01-01'),
(17, 'Basic Structure of OOP', 'Hand-Note', 'https://drive.google.com/file/d/1DP2VgPD39NEmawdJ80WgxYjumyWcJxdz/view?usp=drive_link', 'SWE 4201', 210042106, '2024-01-01'),
(18, 'Accounting Principles Book 9th ed', 'Book', 'https://drive.google.com/file/d/1lnfYB5 jWb5zdFiWm7WD2fxZUa56f_Ph/view?usp=drive_link', 'HUM 4247', 210042106, '2024-01-01'),
(19, 'Accounting Principle 13th ed', 'Book', 'https://drive.google.com/file/d/1iKYtFYMqwmtEHHm7yOBflERF0c4IXk85/view?usp=drive_link', 'HUM 4247', 210042106, '2024-01-01'),
(20, 'Basic Accounting Shuvro Note', 'Hand-Note', 'https://drive.google.com/file/d/1bpgG_UASrw6C eKLYuKsuT_ORwZtFU5K/view?usp=drive_link', 'HUM 4247', 210042106, '2024-01-01'),
(21, 'Financial Statement Analysis Shuvro Note', 'Hand-Note', 'https://drive.google.com/file/d/1tBunMJHYwIe_C8FU1z v8x8egim6Fnea/view?usp=drive_link', 'HUM 4247', 210042106, '2024-01-01'),
(24, 'Morris Mano 2017', 'Book', 'https://drive.google.com/file/d/1Rt6lFeP 4BOXgYvKPlduPlcnSHP3n1mS/view?usp=drive_link', 'CSE 4205', 210042106, '2024-01-01'),
(25, 'Morris Mano Solution', 'Book', 'https://drive.google.com/file/d/1jiw0svFWyVjShH1ee84H9ppLBeOuNGDm/view?usp=drive_link', 'CSE 4205', 210042106, '2024-01-01'),
(26, 'Sheplay Ross DE book', 'Book', 'https://drive.google.com/file/d/1gGuPxojw9JeG1K90foeFcvBvjZVYnk3Z/view?usp=drive_link', 'MATH 4241', 210042106, '2024-01-01'),
(27, 'Sowkowski   Calculus with analytic geometry', 'Book', 'https://drive.google.com/file/d/1CAMQemdNQXc G6P4m 2DPPKFwNmy2T3Z/view?usp=drive_link', 'MATH 4241', 210042106, '2024-01-01'),
(28, 'PDE   1', 'Slide', 'https://drive.google.com/file/d/1oTOsWESytOD7DOaiS7HNgT_mLijkJmgN/view?usp=drive_link', 'MATH 4241', 210042106, '2024-01-01'),
(29, 'PDE   2', 'Slide', 'https://drive.google.com/file/d/13UxCNGtbd353UFZP Lv1jXJScDcqBCg2/view?usp=drive_link', 'MATH 4241', 210042106, '2024-01-01'),
(30, 'PDE   3 Math Mua note', 'Slide', 'https://drive.google.com/file/d/1x4GFNnaymifkbB9suqUOfj3CGubtX4A_/view?usp=drive_link', 'MATH 4241', 210042106, '2024-01-01'),
(31, 'DE slide 1', 'Slide', 'https://drive.google.com/file/d/1uhctg54mwmXYwRvRlfr1i3thL_b733_a/view?usp=drive_link', 'MATH 4241', 210042106, '2024-01-01'),
(32, 'Bessel eq 1 note', 'Slide', 'https://drive.google.com/file/d/1JzM2_SyZIvcolC5gEBRvTrErXSB4UbKQ/view?usp=drive_link', 'MATH 4241', 210042106, '2024-01-01'),
(33, 'Bessel eq 2 Note', 'Slide', 'https://drive.google.com/file/d/11K Dloy68gWbu NC1MPc9x5eXJtmzi7s/view?usp=drive_link', 'MATH 4241', 210042106, '2024-01-01'),
(34, 'Legendre 1 Note', 'Slide', 'https://drive.google.com/file/d/1om3F7RDoaejG92 in09dEsN WR0gsLW4/view?usp=drive_link', 'MATH 4241', 210042106, '2024-01-01'),
(35, 'Legendre 2 Note', 'Slide', 'https://drive.google.com/file/d/1kLBhjEP_7btSvF9P8U6T3SwPbZNG8B9B/view?usp=drive_link', 'MATH 4241', 210042106, '2024-01-01'),
(36, 'Power Series solution note', 'Slide', 'https://drive.google.com/file/d/1m85W5WmuR71gLmjoVFs4g0bJ2J3RtvjM/view?usp=drive_link', 'MATH 4241', 210042106, '2024-01-01'),
(37, 'Power Series singular points note', 'Slide', 'https://drive.google.com/file/d/1hs5Yx8p44HzYd2IjY1zzxP3YjmPZr32y/view?usp=drive_link', 'MATH 4241', 210042106, '2024-01-01'),
(38, 'Solution to exact equation Note', 'Slide', 'https://drive.google.com/file/d/1QQvQ_DgOhXVCf9Eg9G_Xb3DV0 Wjwh7g/view?usp=drive_link', 'MATH 4241', 210042106, '2024-01-01'),
(39, 'Homogenious and Reducable to Homogeneous Note', 'Slide', 'https://drive.google.com/file/d/1E25KkijEjZ3FH1vGVAGMeu q6MxAgtyU/view?usp=drive_link', 'MATH 4241', 210042106, '2024-01-01'),
(40, 'Variable Separable Note', 'Slide', 'https://drive.google.com/file/d/10Tx2X_FYM8jLK16gMMWAwKcWd2z_YRRs/view?usp=drive_link', 'MATH 4241', 210042106, '2024-01-01'),
(41, 'Virtual digital circuit software', 'Web-Resource', 'https://www.circuitlab.com/', 'CSE 4205', 210042106, '2024-01-01'),
(42, 'Online Circuit  Software', 'Web-Resource', 'https://circuitverse.org/', 'CSE 4205', 210042106, '2024-01-01'),
(43, 'Lab 2 Report   Shuvro', 'Lab-Report', 'https://drive.google.com/file/d/1Erl_Id_yoZ_rXmEgT5Eh58ddu_cnlEF /view', 'CSE 4308', 210042106, '2024-01-01'),
(44, 'DBMS Reference Book', 'Book', 'https://drive.google.com/file/d/1RlpezT_N9tk0JZ6dQHWnXyApiaP0IBA2/view?usp=drive_link', 'CSE 4307', 210042106, '2024-01-01'),
(45, 'DBMS Chapter 1 Slide', 'Slide', 'https://drive.google.com/file/d/1hLgPL3I9Q91ziyOOcPqCrm8CIiiNGWSg/view?usp=drive_link', 'CSE 4307', 210042106, '2024-01-01'),
(46, 'DBMS Chapter 2 Slide', 'Slide', 'https://drive.google.com/file/d/1MSt2OWf_qCoWMzR9cAKgH_WC7NGXvs2D/view?usp=drive_link', 'CSE 4307', 210042106, '2024-01-01'),
(47, 'Automata Theory, Languages, and  Computation', 'Book', 'https://drive.google.com/file/d/1MUSXXf5zqE9N Nwqul9JdndvKcCmHqzR/view?usp=drive_link', 'CSE 4309', 210042106, '2024-01-01'),
(48, 'Introduction To The Theory Of Computation Michael Sipser', 'Book', 'https://drive.google.com/file/d/1sZo9_v UwKB89PUz3vZeMmypxw3IqrXH/view?usp=drive_link', 'CSE 4309', 210042106, '2024-01-01'),
(49, 'Introduction to Theory of computation   Slide', 'Slide', 'https://drive.google.com/file/d/1qdtlT6ZBqomLiTqUc1QapHN9TD6mq4Se/view?usp=drive_link', 'CSE 4309', 210042106, '2024-01-01'),
(50, 'Finite Automata   Slide', 'Slide', 'https://drive.google.com/file/d/1RVpfSqciqx0hYJURKxD0cSLHMB7g0Uf4/view?usp=drive_link', 'CSE 4309', 210042106, '2024-01-01'),
(51, 'Deterministic Finite Automata', 'Slide', 'https://drive.google.com/file/d/1ltpxkCcrmmrPny_2XY9lrfb5kOBj6gJa/view?usp=drive_link', 'CSE 4309', 210042106, '2024-01-01'),
(52, '99 Bottles of OOP   Good Code Practice   Book', 'Book', 'https://drive.google.com/file/d/1FjWEF6TbfYhj1CGkKa24cL3IjUvxiryR/view?usp=drive_link', 'SWE 4301', 210042106, '2024-01-01'),
(53, 'Application of DFAs', 'Slide', 'https://drive.google.com/file/d/16oW67yhc Ec_NMvHFisqa51K7eiFT2Y9/view?usp=sharing', 'CSE 4309', 210042137, '2024-01-01'),
(54, 'DBMS Lecture 03', 'Slide', 'https://drive.google.com/file/d/1BW590pb1oGpvKiuL6Cc507aqNc5KtSwK/view?usp=drive_link', 'CSE 4307', 210042137, '2024-01-01'),
(55, '99 Bottles of OOP (slide)', 'Slide', 'https://drive.google.com/file/d/1pruYpJpZkidjOwHjCwxu6cNXcu73zf5 /view?usp=sharing', 'SWE 4301', 210042137, '2024-01-01'),
(56, 'OOC Recap', 'Slide', 'https://drive.google.com/file/d/1pD6jRFjxOEDaM6ywXC_P1fgoWFi7MZpe/view?usp=drive_link', 'SWE 4301', 210042137, '2024-01-01'),
(57, 'OOP Lecture 01', 'Slide', 'https://drive.google.com/file/d/10NcUJzb0jvrTmchy_sNomdnISPuc_ZPS/view?usp=drive_link', 'SWE 4301', 210042137, '2024-01-01'),
(58, 'OOC Example', 'Slide', 'https://drive.google.com/file/d/1CoPtsGjknvGffxS3Uex4hsB5ZUbyv1PD/view?usp=drive_link', 'SWE 4301', 210042137, '2024-01-01'),
(59, 'Agile Principles, Patterns, and Practices in C# by R Martin (Book)', 'Book', 'https://drive.google.com/file/d/1GXzDDVn0fWGZc6xYyNmiLUKw8SZfmf51/view?usp=drive_link', 'SWE 4301', 210042137, '2024-01-01'),
(60, 'Book 1 Computer Organization and Architecture 10th edition', 'Book', 'https://drive.google.com/file/d/1afrgN_ZukUwwbzrctHDLccCLybG4C6Ir/view?usp=drive_link', 'CSE 4305', 210042137, '2024-01-01'),
(61, 'Book 2 Computer Organization and Design 5th edition', 'Book', 'https://drive.google.com/file/d/1Awqk0Fl_w4NzyppiBddzVGyG_ffblXnp/view?usp=drive_link', 'CSE 4305', 210042137, '2024-01-01'),
(62, 'NFA', 'Slide', 'https://drive.google.com/file/d/1WNcTBOVe1UvsiILLCdQHXYbVE6gZgwxs/view?usp=drive_link', 'CSE 4309', 210042137, '2024-01-01'),
(63, 'Introduction to Linear Algebra 5th edition', 'Book', 'https://drive.google.com/file/d/14vjJPsRCJYYXvL4xW4itsdkMfOTBWVVo/view?usp=sharing', 'Math 4341', 210042137, '2024-01-01'),
(64, 'Lab_2 task EVEN', 'Lab-Report', 'https://drive.google.com/file/d/1bl0KhF7TCOdoYAcgUtImV9dq12Y7y3Z /view?usp=drive_link', 'CSE 4304', 210042137, '2024-01-01'),
(65, 'DS Lecture 1 (Introduction to data structures, Complexity Time Space Tradeoff)', 'Slide', 'https://drive.google.com/file/d/1TJvMLDv5rOWcPZlLocLEFsQBrM_qShDb/view?usp=drive_link', 'CSE 4303', 210042137, '2024-01-01'),
(66, 'DS Lecture 2 (Abstract Data Type, Arrays and Linked List)', 'Slide', 'https://drive.google.com/file/d/1ClK3MMMSMKn4T0Po NIDaEil1a BvENi/view?usp=drive_link', 'CSE 4303', 210042137, '2024-01-01'),
(67, 'DS Lecture 3.1 (Upto Infix, Postfix, Prefix Notation)', 'Slide', 'https://drive.google.com/file/d/1fPfY0WIHpEsbmzKXz45pZN 7oHOf0Uoz/view?usp=drive_link', 'CSE 4303', 210042137, '2024-01-01'),
(68, 'Kenneth Rosen DM 8th ed', 'Book', 'https://drive.google.com/file/d/1AOswTrp9KlNtRiwFpZ09Ac2N67A0Dl9q/view?usp=drive_link', 'CSE 4203', 210042137, '2024-01-01'),
(69, '7th Edition Solution - Rosen DM', 'Book', 'https://drive.google.com/file/d/1MGoVS9N5bvSquYDOZSLIAZjS9DsSzq6K/view?usp=drive_link', 'CSE 4203', 210042137, '2024-01-01'),
(70, 'Graph Chapter 10', 'Slide', 'https://drive.google.com/file/d/1K0ClU3irp7yCD9Xf2VMNfdmlgBStEwA3/view?usp=drive_link', 'CSE 4203', 210042137, '2024-01-01'),
(71, 'Tree', 'Slide', 'https://drive.google.com/file/d/12A9DN1fbMcXwanH B3FJAsTtz2Kp dbd/view?usp=drive_link', 'CSE 4203', 210042137, '2024-01-01'),
(72, 'Scope of Object', 'Hand-Note', 'https://code.sakhawatadib.com/object oriented programming/soo1', 'SWE 4301', 210042106, '2024-01-01'),
(73, 'COA Lecture 01', 'Slide', 'https://drive.google.com/file/d/1ARdI7of1GA3lNAaFkvD7h4e6DoG8C v4/view?usp=drive_link', 'CSE 4305', 210042137, '2024-01-01'),
(74, 'DBMS lab   4 Report', 'Lab-Report', 'https://drive.google.com/file/d/1aHtqrctqdjamNIoQVPZal6tqA3I75Xpw/view?usp=drive_link', 'CSE 4308', 210042106, '2024-01-01'),
(75, 'Slide1 C Fundamentals', 'Slide', 'https://drive.google.com/file/d/1KbQCgvpA8BDTa1p0tIIYSkiFUWDPAajQ/view?usp=drive_link', 'CSE 4107', 220042151, '2024-01-01'),
(76, 'Slide2 C Fundamentals', 'Slide', 'https://drive.google.com/file/d/1mXSBbwhOYAYT5YIBfqO9YChPCae5CxHc/view?usp=drive_link', 'CSE 4107', 220042151, '2024-01-01'),
(77, 'Lab 1 task', 'Code', 'https://drive.google.com/file/d/1HYs h GFnzUu_mj7mccPaZN9wVewT7KF/view?usp=drive_link', 'CSE 4108', 220042151, '2024-01-01'),
(78, 'Lab 2 tasks', 'Code', 'https://drive.google.com/file/d/1k3CbHVnIrarzWTy3v6TOHOjDhf6fuDWt/view?usp=drive_link', 'CSE 4108', 220042151, '2024-01-01'),
(79, 'Lab 3 tasks', 'Code', 'https://drive.google.com/file/d/1tM2Xmt6zzfonuCJefHkNje2zU5YRS232/view?usp=drive_link', 'CSE 4108', 220042151, '2024-01-01'),
(80, 'Written Notes', 'Class-Note', 'https://drive.google.com/drive/folders/10F8e7rr3wHlbRlXNuGoPdLQVvKXgzvgZ?usp=drive_link', 'Math 4141', 220042151, '2024-01-01'),
(81, 'Hand notes', 'Hand-Note', 'https://drive.google.com/drive/folders/1qoBr6ICqSBwNEsw5D5U2G_F_KhAp9s9h?usp=drive_link', 'PHY 4143', 220042151, '2024-01-01'),
(82, 'Hand notes', 'Hand-Note', 'https://drive.google.com/drive/folders/17C_AZKY5uAYMCnbA2f1hIsWvNhpvKWwm?usp=drive_link', 'SWE 4101', 220042151, '2024-01-01'),
(83, 'DBMS Lab Manual   lab 2', 'Slide', 'https://drive.google.com/file/d/1HAGVaJpZ2WIDCR7nhMK54vlPxh8Y1Psf/view?usp=drive_link', 'CSE 4308', 210042106, '2024-01-01'),
(84, 'DBMS Lab Manual   lab 3', 'Slide', 'https://drive.google.com/file/d/1WmQxZqO8njlz4FWlcXYimnvwCbFqueK1/view?usp=drive_link', 'CSE 4308', 210042106, '2024-01-01'),
(85, 'DBMS Lab Manual   lab 4', 'Slide', 'https://drive.google.com/file/d/1eIiGZs_4L3_UZXvTtGI8jbfzHDuXV8IH/view?usp=drive_link', 'CSE 4308', 210042106, '2024-01-01'),
(86, 'DBMS Lab DDL   lab 4', 'Slide', 'https://drive.google.com/file/d/1 71Kq9Powflgp0nlrx3lw4CEzpitrsUL/view?usp=drive_link', 'CSE 4308', 210042106, '2024-01-01'),
(87, '	DBMS Lab Manual   lab 5', 'Slide', 'https://drive.google.com/file/d/1IgY3dAZKUEKWp5BRs0LGKNc7Y8QLrEaJ/view?usp=drive_link', 'CSE 4308', 210042106, '2024-01-01'),
(88, 'DBMS Lab DDL   lab 5', 'Slide', 'https://drive.google.com/file/d/1zrEpZXPz3J1661tU0EizK0fQUOkvOFbV/view?usp=drive_link', 'CSE 4308', 210042106, '2024-01-01'),
(89, 'DBMS Lab Manual   lab 6', 'Slide', 'https://drive.google.com/file/d/1UzfP9lhrsogbmxzx raYjUkmpxy_ant0/view?usp=drive_link', 'CSE 4308', 210042106, '2024-01-01'),
(90, 'DBMS Lab DDL (1)   lab 6', 'Slide', 'https://drive.google.com/file/d/1Gf1_dVpJN_VjIEBajJVGWPvcN0o07WoC/view?usp=drive_link', 'CSE 4308', 210042106, '2024-01-01'),
(91, 'DBMS Lab DDL (2)   lab 6', 'Slide', 'https://drive.google.com/file/d/13M0o6fWj13AknEZS2ZazA49afTJLRwvj/view?usp=drive_link', 'CSE 4308', 210042106, '2024-01-01'),
(92, 'DBMS Chapter 4 (Intermediate SQL) Note By 210042137', 'Hand-Note', 'https://rayshad11.files.wordpress.com/2023/10/chapter 4 intermediate sql.pdf', 'CSE 4307', 210042137, '2024-01-01'),
(93, 'DBMS Chapter 3 (Introduction to SQL) Note By 210042137', 'Hand-Note', 'https://rayshad11.files.wordpress.com/2023/10/chapter 3 introduction to sql.pdf', 'CSE 4307', 210042137, '2024-01-01'),
(94, 'DBMS Chapter 2 (Introduction to Relational Model) Note by 210042137', 'Hand-Note', 'https://rayshad11.files.wordpress.com/2023/10/chapter 2 introduction to relational model.pdf', 'CSE 4307', 210042137, '2024-01-01'),
(95, 'DBMS Chapter 1 Note by 210042137', 'Hand-Note', 'https://rayshad11.files.wordpress.com/2023/10/chapter 1 dbms notes.pdf', 'CSE 4307', 210042137, '2024-01-01'),
(96, 'Lecture Note 1 (shuvro)', 'Hand-Note', 'https://drive.google.com/file/d/1_55EfrM5byPumIwWgm9bEWN1no3ZjNGA/view?usp=drive_link', 'CSE 4305', 210042106, '2024-01-01'),
(97, 'Lecture Note 2 (shuvro)', 'Hand-Note', 'https://drive.google.com/file/d/1emnYXSR3svzeOPiOPu53gAJ9fE8oAE6s/view?usp=drive_link', 'CSE 4305', 210042106, '2024-01-01'),
(98, 'LA Mid and Final Question Batch 20', 'Question', 'https://drive.google.com/file/d/1J3sZRYlLH9FRvAw67uiuRsW_zj98gyFN/view?usp=drive_link', 'Math 4341', 210042137, '2024-01-01'),
(99, 'TOC Context Free Grammar', 'Slide', 'https://drive.google.com/file/d/12a_Vhn_WFM yCcVFg9uz 43qz5LiVXuF/view?usp=drive_link', 'CSE 4309', 210042137, '2024-01-01'),
(100, 'Graph Theory Note by SHUVRO', 'Hand-Note', 'https://drive.google.com/file/d/1ZmQZDQT2R953YVp8Pkklx4W7EurBZksa/view?usp=sharing', 'CSE 4303', 210042106, '2024-01-01'),
(101, 'PL/SQL NOTE BY SHUVRO', 'Hand-Note', 'https://docs.google.com/document/d/1TdmMGPFKX9BBPgcfeJ7aAC4JAp2cHiwUg7l9cu PzBM/edit?usp=sharing', 'CSE 4307', 210042106, '2024-01-01'),
(102, 'PL/SQL NOTE BY SHUVRO [PDF]', 'Hand-Note', 'https://drive.google.com/file/d/1i8SCyYl76LYpu7ORjNpfpCJ7fiftv9wb/view?usp=sharing', 'CSE 4307', 210042106, '2024-01-01'),
(103, 'Triggers in Oracle   Note by Shuvro', 'Hand-Note', 'https://drive.google.com/file/d/1kUY1GAqwVHgeaF9DlGM9HsJIuVI8a5dN/view?usp=sharing', 'CSE 4307', 210042106, '2024-01-01'),
(104, 'Comparator_Comparable Note by Shuvro', 'Hand-Note', 'https://drive.google.com/file/d/13Wanwa82lVsM2zhBZm 1H2NRp3odcXY7/view?usp=drive_link', 'SWE 4301', 210042106, '2024-01-01'),
(105, 'Annotation   Note By Shuvro', 'Hand-Note', 'https://drive.google.com/file/d/1C3bYlBScuC4QB8YlxLxGEacwA3eUy80Q/view?usp=drive_link', 'SWE 4301', 210042106, '2024-01-01'),
(106, 'Lambda Expression   Note by shuvro', 'Hand-Note', 'https://drive.google.com/file/d/13v8H1K_yohmrDaxoiafetMb9icCAXYCG/view?usp=drive_link', 'SWE 4301', 210042106, '2024-01-01'),
(107, 'JDBC in Oracle   Note by Shuvro', 'Hand-Note', 'https://drive.google.com/file/d/1APdvp3Oi4qyzYOBzogy4O7Rx UnNBksk/view?usp=drive_link', 'CSE 4307', 210042106, '2024-01-01'),
(108, 'TOC note by KHALID HASAN', 'Hand-Note', 'https://drive.google.com/file/d/1PCLwlsVZAlFGEes XWX8rcXvdVLlQ8Ag/view?usp=drive_link', 'CSE 4309', 210042106, '2024-01-01'),
(109, 'DBMS Note by Khalid', 'Hand-Note', 'https://drive.google.com/file/d/1Lwq65CNi9qKrIbHhu_12upAJhQtXPDSc/view?usp=drive_link', 'CSE 4307', 210042106, '2024-01-01'),
(110, 'DBMS Functional Dependency and Normalization', 'Hand-Note', 'https://rayshad11.files.wordpress.com/2023/11/dbms functional dependency and normalization by shuvro.pdf', 'CSE 4307', 210042137, '2024-01-01'),
(111, 'Generics Note by Shuvro', 'Hand-Note', 'https://docs.google.com/document/d/1ZTym1BUyo3vUX_eb_pm1v5l6FNoQeyH5pC0lUYVTAKg/edit?usp=sharing', 'SWE 4301', 210042106, '2024-01-01'),
(112, 'Generics Note by Shuvro [PDF]', 'Hand-Note', 'https://drive.google.com/file/d/1NkDPmzHt1AdxRen9hiQRB9bkZvgtpsCw/view?usp=drive_link', 'SWE 4301', 210042106, '2024-01-01'),
(113, 'COA Chapter 4 Note by Shuvro', 'Hand-Note', 'https://drive.google.com/file/d/1vCuPkPxhCD EcarTOWlvnHDNzMaYZgws/view?usp=drive_link', 'CSE 4305', 210042137, '2024-01-01'),
(114, 'Pointer & Recursion Note by Shuvro', 'Hand-Note', 'https://drive.google.com/file/d/1ceGt5IfQSwXdkWDiOBf xs3b6uQWKigx/view?usp=drivesdk', 'CSE 4303', 210042137, '2024-01-01'),
(115, 'Tree Notes DM by Shuvro', 'Hand-Note', 'https://drive.google.com/file/d/1jPt8xq1upOkt1bLnKF5dkCSQjwKB yun/view?usp=sharing', 'CSE 4203', 210042137, '2024-01-01'),
(116, 'Recursion and Pointer Note by Shuvro', 'Hand-Note', 'https://drive.google.com/file/d/1ceGt5IfQSwXdkWDiOBf xs3b6uQWKigx/view?usp=drive_link', 'CSE 4303', 210042106, '2024-01-01'),
(117, 'Binary Tree Note by Shuvro', 'Hand-Note', 'https://drive.google.com/file/d/1xE9jwbtdzT04vIGiKe1N0C728ToFtC8A/view?usp=drive_link', 'CSE 4303', 210042106, '2024-01-01'),
(118, 'BST note by shuvro', 'Hand-Note', 'https://drive.google.com/file/d/1gj1t2AIyi9Ws_oIJ_LfeoAz67tzD0G7I/view?usp=drive_link', 'CSE 4303', 210042106, '2024-01-01'),
(119, 'AVL Tree', 'Hand-Note', 'https://drive.google.com/file/d/1kriZmIfp4iTw0HzC28IbHfYQoH73_RrD/view?usp=drive_link', 'CSE 4303', 210042106, '2024-01-01'),
(120, 'DBMS Final Note by Khalid', 'Hand-Note', 'https://drive.google.com/file/d/1jR muvNCMrWNLtwNc8jrGf4nAJWEArpq/view?usp=drive_link', 'CSE 4307', 210042106, '2024-01-01'),
(121, 'DS Final Note by Shuvro', 'Hand-Note', 'https://drive.google.com/file/d/1iC xWgk4HUAGkEPyX2 11UfxDN08oiDU/view?usp=drive_link', 'CSE 4303', 210042106, '2024-01-01'),
(122, 'COA Lecture 3 Note ISA', 'Hand-Note', 'https://rayshad11.files.wordpress.com/2023/10/lecture 3 note.pdf', 'CSE 4305', 210042137, '2024-01-01'),
(123, 'Multi Threading Note by Shuvro', 'Hand-Note', 'https://drive.google.com/file/d/1JYj7LAXv0Q1zYjiKiUhJ50ASknY1iFrI/view?usp=drive_link', 'SWE 4301', 210042106, '2024-01-01'),
(124, 'Serialization   Deserialization Note by Shuvro', 'Hand-Note', 'https://drive.google.com/file/d/1WNks2HbcU2_QgXDYdqFMJFvR7 rRLVnL/view?usp=drive_link', 'SWE 4301', 210042106, '2024-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `file_type`
--

CREATE TABLE `file_type` (
  `ftype` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `file_type`
--

INSERT INTO `file_type` (`ftype`) VALUES
('Book'),
('Class-Note'),
('Code'),
('Hand-Note'),
('Lab-Report'),
('Other'),
('Question'),
('Slide'),
('Web-Resource');

-- --------------------------------------------------------

--
-- Table structure for table `shuser`
--

CREATE TABLE `shuser` (
  `sid` int(11) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `batch` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shuser`
--

INSERT INTO `shuser` (`sid`, `fullName`, `email`, `pass`, `batch`) VALUES
(210042106, 'Adib Sakhawat', 'sakhawatadib@gmail.com', '$2y$10$ZRSrpJ0RUasPw9XH9LVHPuFmJJVStmEBuwNlvMK8Mxenr9g2s4C6e', '21'),
(210042137, 'Tahsin Islam', 'tahsinislam@iut-dhaka.edu', '$2y$10$rd8F.RBVOP8Vlhm2/18f4OfP8k6VeP7NcRBYtwJDy3PDqfoycfZma', '21'),
(220042151, 'Adib Rahman', 'adibrahman44@gmail.com', '$2y$10$Ike6XOvDTL.E0dD5GSpvHeuHiWeTEzMSohFNY9BVi3gjoQBsqjOn2', '22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_ID`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`file_id`),
  ADD KEY `file_type` (`file_type`),
  ADD KEY `fk_course` (`course_id`),
  ADD KEY `fk_sid` (`sid`);

--
-- Indexes for table `file_type`
--
ALTER TABLE `file_type`
  ADD PRIMARY KEY (`ftype`);

--
-- Indexes for table `shuser`
--
ALTER TABLE `shuser`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `file`
--
ALTER TABLE `file`
  ADD CONSTRAINT `file_ibfk_1` FOREIGN KEY (`file_type`) REFERENCES `file_type` (`ftype`),
  ADD CONSTRAINT `fk_course` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_ID`),
  ADD CONSTRAINT `fk_sid` FOREIGN KEY (`sid`) REFERENCES `shuser` (`sid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
