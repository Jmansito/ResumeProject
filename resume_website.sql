-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 07:41 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL COMMENT 'Username',
  `resume_id` int(4) NOT NULL,
  `f_name` varchar(255) NOT NULL COMMENT 'First Name',
  `l_name` varchar(255) NOT NULL COMMENT 'Last Name',
  `dob` date NOT NULL COMMENT 'Dob',
  `email` varchar(255) NOT NULL COMMENT 'email',
  `phone_number` varchar(12) NOT NULL COMMENT 'phone number',
  `previous_job` varchar(255) NOT NULL COMMENT 'previous job title',
  `previous_job_desc` varchar(4095) NOT NULL COMMENT 'previous job description',
  `previous_job_sd` date NOT NULL COMMENT 'previous job start date',
  `previous_job_ed` date NOT NULL COMMENT 'previous job end date',
  `skill1` varchar(255) DEFAULT NULL,
  `skill2` varchar(255) DEFAULT NULL,
  `skill3` varchar(255) DEFAULT NULL,
  `profile_pic` mediumblob NOT NULL,
  `resume_pdf` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`user_id`, `user_name`, `resume_id`, `f_name`, `l_name`, `dob`, `email`, `phone_number`, `previous_job`, `previous_job_desc`, `previous_job_sd`, `previous_job_ed`, `skill1`, `skill2`, `skill3`, `profile_pic`, `resume_pdf`) VALUES
(7, 'userbob', 13, 'Michael', 'Scott', '1965-03-15', 'mscarn@aol.com', '570-555-8977', 'Regional Manager', 'Hate Toby', '1992-06-06', '2011-05-20', 'Managing', 'Stand Up', 'Improv', '', 0x6d69636861656c2d676172792d73636f74742d726573756d652e706466),
(9, 'JoshM', 16, 'Josh', 'Mansito', '1992-10-25', 'josh@email.com', '984-234-2333', 'Student', 'Studying', '2022-12-01', '2022-12-23', 'Coding', 'Testing', 'Deleting', 0x636c617373206469616772616d2e706e67, 0x4a6f7368204d616e7369746f20526573756d652e706466),
(10, 'Demo', 17, 'bob', 'mansito', '2022-12-22', 'bob@email.com', '', 'hhhhh', 'Studying', '2022-12-07', '2022-12-15', 'ff', 'gss', 'c', '', 0x4a6f7368204d616e7369746f20526573756d652e706466);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_name` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `dob` date NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `password` char(60) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_name`, `id`, `f_name`, `l_name`, `dob`, `email`, `phone_number`, `password`, `is_admin`) VALUES
('userbob', 7, 'bob', 'bobbybob', '2022-11-17', 'bob@email.com', '123-123-1234', '$2y$10$s/DiDSJy9AeKX2P0zLCAbeTHPrRP.80lJm58f/o278bQQUV5fA8ri', 0),
('newuser', 8, 'Ronald', 'Tester', '2022-12-04', 'ron@tester.com', '999-999-9999', '$2y$10$5Hjk9lGhFNblJEsY42oA2eLi6XHBFhHfSEcy0vx7LqgXdWTckkmO.', 0),
('JoshM', 9, 'Josh', 'Mansito', '1992-10-25', 'jman@email.com', '747-229-2295', '$2y$10$v5PxMSsomfm7/Ec5qnVJqevimvoXtNs76CqlfR.xEm05nPFmVM60W', 0),
('Demo', 10, 'josh', 'mansito', '2022-12-17', 'bob@email.com', '333-333-3333', '$2y$10$LHgm3vCKH4I/QCm0jrGjtebutv7tniTLViSVu7J8Q5WBrENp6jrLG', 0),
('Admindemo', 11, 'josh', 'mcbobby', '2022-12-16', 'josh@email.com', '222-222-2222', '$2y$10$kfrh4FtKjfZi70OdipIVGORI1SG8nNnt4euPM6mNMDaMbVvFIKKg6', 0),
('admin', 12, 'bob', 'mansito', '2022-12-23', 'josh@email.com', '999-999-9999', '$2y$10$iztWC8D6n8SrFrCgAE3jquqpoGTj5ljN7iZD1xUSuWM7eI0TZavGu', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`resume_id`),
  ADD KEY `id_fk` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `resume_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `resume`
--
ALTER TABLE `resume`
  ADD CONSTRAINT `id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
