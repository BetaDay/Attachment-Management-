-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2023 at 07:38 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attachment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 'admin'),
(2, 'kendihyvone90@gmail.com', 'admin'),
(3, 'richard@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `assess_students`
--

CREATE TABLE `assess_students` (
  `id` int(11) NOT NULL,
  `student_email` varchar(100) NOT NULL,
  `attendance` varchar(100) NOT NULL,
  `punctuality` varchar(100) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `office_applications` varchar(100) NOT NULL,
  `technical_applications` varchar(100) NOT NULL,
  `specialisation` varchar(100) NOT NULL,
  `scientific_knowledge` varchar(100) NOT NULL,
  `ability_to_learn` varchar(100) NOT NULL,
  `acceptability_to_colleagues` varchar(100) NOT NULL,
  `creativity` varchar(100) NOT NULL,
  `planning` varchar(100) NOT NULL,
  `time_marks` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `elogbook`
--

CREATE TABLE `elogbook` (
  `id` int(11) NOT NULL,
  `Week` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Day1` varchar(500) NOT NULL,
  `Day2` varchar(500) NOT NULL,
  `Day3` varchar(500) NOT NULL,
  `Day4` varchar(500) NOT NULL,
  `Day5` varchar(500) NOT NULL,
  `Day6` varchar(500) NOT NULL,
  `Day7` varchar(500) NOT NULL,
  `StudentComments` varchar(500) NOT NULL,
  `CompanySupervisorComments` varchar(500) NOT NULL,
  `UniversityBasedSupervisorComments` varchar(500) NOT NULL,
  `Marks` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `elogbook`
--

INSERT INTO `elogbook` (`id`, `Week`, `email`, `Day1`, `Day2`, `Day3`, `Day4`, `Day5`, `Day6`, `Day7`, `StudentComments`, `CompanySupervisorComments`, `UniversityBasedSupervisorComments`, `Marks`, `date`) VALUES
(1, 1, 'mukono@gmail.com', 'I installed lans', 'I serviced computers', 'I supported the staff', 'I did printing', 'I swept the office', 'I maintained the server', 'I adviced the other staff', '', 'Good work', 'Good work', 20, '2023-04-21'),
(4, 2, 'mukono@gmail.com', 'I maintained the server', 'I serviced the computers', 'I was in the office', 'I led mentorship program', 'I was in the office', 'I configured the switches', 'I swept the office', '', 'I like what you are doing', 'Good work', 30, '2023-04-21'),
(5, 5, 'mukono@gmail.com', 'Labour Day', 'Balance ledgers', 'Balance accounts', 'Check invoices', 'Submit invoices', 'Record import containers', 'Confirm export containers', '', 'Good work solomon.', 'You are doing some good work', 30, '2023-05-07'),
(6, 3, 'mukono@gmail.com', 'Cleaning the office', 'Dusting off the computers', 'Creating invoices', 'Delivering invoices', 'Climping lans', 'Configuring the router', 'Maintaining the server', 'I realy enjoyed the week', 'You did some good work', 'Good work student', 50, '2023-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `industrial_supervisor`
--

CREATE TABLE `industrial_supervisor` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_address` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `industrial_supervisor`
--

INSERT INTO `industrial_supervisor` (`id`, `firstname`, `lastname`, `email`, `company_name`, `company_address`, `department`, `phone`) VALUES
(3, 'vincent', 'Bett', 'vincentbettoh@gmail.com', 'KPA', '001, Mombasa', 'ICT', '0702502952');

-- --------------------------------------------------------

--
-- Table structure for table `leave_request`
--

CREATE TABLE `leave_request` (
  `id` int(11) NOT NULL,
  `student_email` varchar(100) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `request` varchar(3000) NOT NULL,
  `accepted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leave_request`
--

INSERT INTO `leave_request` (`id`, `student_email`, `from_date`, `to_date`, `request`, `accepted`) VALUES
(4, 'Georgina@gmail.com', '2021-01-27', '2021-01-30', 'I humbly request for a leave ,for my birthday party over the weekend', 1),
(7, 'Sammunesh2000@gmail.com', '2021-01-27', '2021-02-26', 'Leave request to visit my home, Thanks', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `adm` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `company_address` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `supervisor_name` varchar(200) NOT NULL,
  `duration_from` date NOT NULL,
  `duration_to` date NOT NULL,
  `town` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `building` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `lname`, `email`, `adm`, `course`, `company_name`, `company_address`, `department`, `supervisor_name`, `duration_from`, `duration_to`, `town`, `street`, `building`) VALUES
(8, 'Tonny', 'Kalipher', 'kalipher@gmail.com', 'DIT/N/0000/00/25', 'BBIT', 'KPA', '001, Mombasa', 'ICT', 'mgachoka@gmail.com', '2023-04-20', '2023-04-30', 'Mombasa', 'Apolo', 'KPA');

-- --------------------------------------------------------

--
-- Table structure for table `students_logbook`
--

CREATE TABLE `students_logbook` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `file` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `marks` varchar(15) NOT NULL,
  `marked` int(1) NOT NULL,
  `feedback` varchar(250) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `supervisor_email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supervisors`
--

CREATE TABLE `supervisors` (
  `id` int(11) NOT NULL,
  `supervisor_fname` varchar(200) NOT NULL,
  `supervisor_lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `instituition_name` varchar(200) NOT NULL,
  `instituition_address` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supervisors`
--

INSERT INTO `supervisors` (`id`, `supervisor_fname`, `supervisor_lname`, `email`, `course`, `instituition_name`, `instituition_address`, `department`, `phone`) VALUES
(2, 'John', 'Doe', 'admin@gmail.com', '', 'UON', '0010202', 'ICT', '1234567'),
(3, 'Mercy', 'Gachoka', 'mgachoka@gmail.com', '', 'Kabarak', '001,Nakuru', 'ICT', '0712345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assess_students`
--
ALTER TABLE `assess_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elogbook`
--
ALTER TABLE `elogbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industrial_supervisor`
--
ALTER TABLE `industrial_supervisor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_request`
--
ALTER TABLE `leave_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_logbook`
--
ALTER TABLE `students_logbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisors`
--
ALTER TABLE `supervisors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `assess_students`
--
ALTER TABLE `assess_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `elogbook`
--
ALTER TABLE `elogbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `industrial_supervisor`
--
ALTER TABLE `industrial_supervisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `leave_request`
--
ALTER TABLE `leave_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `students_logbook`
--
ALTER TABLE `students_logbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `supervisors`
--
ALTER TABLE `supervisors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
