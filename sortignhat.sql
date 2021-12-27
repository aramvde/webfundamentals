-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 27, 2021 at 10:24 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `sorting`
--

-- --------------------------------------------------------

--
-- Table structure for table `sorting`
--

CREATE TABLE `sorting` (
  `id` int(6) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `details` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `gryffindor` int(3) NOT NULL,
  `hufflepuff` int(3) NOT NULL,
  `ravenclaw` int(3) NOT NULL,
  `slytherin` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sorting`
--

INSERT INTO `sorting` (`id`, `firstname`, `lastname`, `age`, `details`, `gender`, `gryffindor`, `hufflepuff`, `ravenclaw`, `slytherin`) VALUES
(1, 'Aram', 'Van den Eynde', 24, 'I like Harry Potter and helping people', 'Female', 5, 5, 3, 0),
(2, 'Inke', 'Haaze', 28, 'I am into writing books and poems.', 'Non-binary', 3, 5, 3, 3),
(3, 'Maarten', 'Heylen', 23, 'I correct people who say leviosA instead of leviOsa.', 'Male', 4, 6, 2, 3),
(4, 'Greta', 'Vandegoor', 45, 'I like reading books', 'Female', 2, 3, 6, 2),
(5, 'Melissa', 'De Groof', 27, 'I like dancing and football', 'Female', 2, 0, 1, 1),
(6, 'Luc', 'Heylen', 54, 'Flying cars are cool', 'Male', 0, 1, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sorting`
--
ALTER TABLE `sorting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sorting`
--
ALTER TABLE `sorting`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
