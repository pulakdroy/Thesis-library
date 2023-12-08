-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 05:41 PM
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
-- Database: `thesis_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `create_account`
--

CREATE TABLE `create_account` (
  `Name` varchar(50) DEFAULT NULL,
  `Student_ID` int(8) NOT NULL,
  `Department` char(3) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Phone_Number` int(11) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `create_account`
--

INSERT INTO `create_account` (`Name`, `Student_ID`, `Department`, `Email`, `Phone_Number`, `Password`) VALUES
('alif', 12345675, 'CSE', 'alif@gmail.com', 1788559911, 'alif'),
('joy', 12345676, 'CSE', 'joy@gmail.com', 1745464958, 'joy'),
('kayes', 12345677, 'CSE', 'kayes@gmail.com', 178695248, 'kayes'),
('pulak ', 12345678, 'CSE', 'pulak@gmail.com', 1723456789, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `Serial_Num` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Number` int(11) NOT NULL,
  `Guidelines` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_email`
--

CREATE TABLE `student_email` (
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_email`
--

INSERT INTO `student_email` (`email`) VALUES
('kayes@gmail.com'),
('pulak@gmail.com'),
('didar@gmail.com'),
('mahi@gmail.com'),
('rahul@gmail.com'),
('joy@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student_id`
--

CREATE TABLE `student_id` (
  `Thesis_ID` int(11) NOT NULL,
  `Student_ID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_name`
--

CREATE TABLE `student_name` (
  `thesis_id` int(11) NOT NULL,
  `student_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supervisor_profile`
--

CREATE TABLE `supervisor_profile` (
  `Name` varchar(50) NOT NULL,
  `Supervisor_ID` int(11) NOT NULL,
  `Rank` varchar(50) NOT NULL,
  `Slots` varchar(100) NOT NULL,
  `Interest` varchar(100) NOT NULL,
  `Biography` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supervisor_profile`
--

INSERT INTO `supervisor_profile` (`Name`, `Supervisor_ID`, `Rank`, `Slots`, `Interest`, `Biography`) VALUES
('Nishat Nayla', 42069564, 'Contractual Lecturer', 'Accepting ', 'AI, NLP, Deep learning', 'Ms. Nishat Nayla is a seasoned educator and coding enthusiast, currently serving as a Contractual Lecturer at Brac University in Bangladesh since May 2022. With a fervent dedication to fostering academic growth, Ms. Nishat brings both passion and expertise to the undergraduate students under her guidance.Ms. Nishat\'s journey in education commenced as an Undergraduate Teaching Assistant in the Department of Mathematics and Natural Science at Brac University from January 2020 to May 2020. Expanding her role, she continued to make a significant impact as a Teaching Assistant in the Department of Computer Science and Engineering from May 2020 to January 2022.In addition to her contributions in the academic sphere, Ms. Nishat embraced the opportunity to make a global impact as a Coding Instructor at Codingal, USA, from May 2022 to September 2022. This role allowed her to share her knowledge and passion for coding with students from diverse international backgrounds.Dedicated to creating dyn');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor_publication`
--

CREATE TABLE `supervisor_publication` (
  `Supervisor_ID` int(11) NOT NULL,
  `publication` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `serial_no` int(11) NOT NULL,
  `template` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thesis_files`
--

CREATE TABLE `thesis_files` (
  `id` int(11) NOT NULL,
  `thesis_name` varchar(255) NOT NULL,
  `thesis_topic` varchar(255) NOT NULL,
  `supervisor_name` varchar(255) NOT NULL,
  `session` varchar(20) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `file_content` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thesis_files`
--

INSERT INTO `thesis_files` (`id`, `thesis_name`, `thesis_topic`, `supervisor_name`, `session`, `student_name`, `student_id`, `file_content`) VALUES
(18, 'COMPARATIVE STUDY OF TOXIC COMMENTS CLASSIFICATION USING MACHINE LEARNING ALGORITHMS', ' ML', 'Dr. Amitabha Chakrabarty', 'Spring2021', 'Razia Razzak, Mahmudul Hasan Shakil, Md. Sadril, Mahfuzur Rahman, Sabiha Tul Omman Taki', '16101291, 16301026, ', 0x7468657369732e7061706572732f363537323230316366343065332e706466),
(19, 'Lung Cancer Detection And Classification Using Machine Learning', ' ML', 'Annajiat Alim Rasel', 'Spring2023', 'Mahbubul Arefin,Md. Lokman Hekim,Afia Farjana,Nisarga Bala', '17201083,18101499,19', 0x7468657369732e7061706572732f363537323231323061613436372e706466),
(20, 'Autonomous Precision Landing of UAV Digital Twins on Moving Platforms and River Data Analytics from UAV Imagery', 'AI', 'Dr. Md. Khalilur Rhaman', 'Fall2022', 'Rezwana Ashrafi, Jahir Uddin, Suhail Haque Raf, Mashiat Mamun Raidah', '18101467, 21141072,1', 0x7468657369732e7061706572732f363537333066643735303366622e706466);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `create_account`
--
ALTER TABLE `create_account`
  ADD PRIMARY KEY (`Student_ID`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`Serial_Num`);

--
-- Indexes for table `student_id`
--
ALTER TABLE `student_id`
  ADD PRIMARY KEY (`Thesis_ID`,`Student_ID`);

--
-- Indexes for table `student_name`
--
ALTER TABLE `student_name`
  ADD PRIMARY KEY (`thesis_id`,`student_name`);

--
-- Indexes for table `supervisor_profile`
--
ALTER TABLE `supervisor_profile`
  ADD PRIMARY KEY (`Supervisor_ID`);

--
-- Indexes for table `supervisor_publication`
--
ALTER TABLE `supervisor_publication`
  ADD PRIMARY KEY (`Supervisor_ID`,`publication`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`serial_no`,`template`(255));

--
-- Indexes for table `thesis_files`
--
ALTER TABLE `thesis_files`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `Serial_Num` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thesis_files`
--
ALTER TABLE `thesis_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_id`
--
ALTER TABLE `student_id`
  ADD CONSTRAINT `student_id_ibfk_1` FOREIGN KEY (`Thesis_ID`) REFERENCES `thesis_paper` (`Thesis_ID`);

--
-- Constraints for table `student_name`
--
ALTER TABLE `student_name`
  ADD CONSTRAINT `student_name_ibfk_1` FOREIGN KEY (`thesis_id`) REFERENCES `thesis_paper` (`Thesis_ID`);

--
-- Constraints for table `supervisor_publication`
--
ALTER TABLE `supervisor_publication`
  ADD CONSTRAINT `supervisor_publication_ibfk_1` FOREIGN KEY (`Supervisor_ID`) REFERENCES `supervisor_profile` (`Supervisor_ID`);

--
-- Constraints for table `template`
--
ALTER TABLE `template`
  ADD CONSTRAINT `template_ibfk_1` FOREIGN KEY (`serial_no`) REFERENCES `resources` (`Serial_Num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
