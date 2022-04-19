-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2021 at 08:33 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO"; 
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(250) NOT NULL,
  `author_name` varchar(250) NOT NULL,
  `cat_name` varchar(250) NOT NULL,
  `book_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `author_name`, `cat_name`, `book_price`) VALUES
(16, 'C: The Complete Reference', 'Herbert Schildt', 'programming', 220),
(17, 'Data Structures and Algorithms in C++', 'Herbert Schildt', 'Programming', 250),
(19, 'Python Machine Learning', 'Sebastian Raschka', 'programming', 350),
(21, 'PHP 5 Objects, Patterns, and Practice', 'Zandstra, Matt', 'programming', 200),
(22, 'War and Peace', 'Leo Tolstoy', 'Novel', 400),
(23, 'The Great Gatsby', 'F. Scott Fitzgerald', 'Novel', 550),
(25, 'The Green Book', 'Candacy Taylor', 'Biographical ', 300);

-- --------------------------------------------------------

--
-- Table structure for table `issued_books`
--

CREATE TABLE `issued_books` (
  `s_no` int(11) NOT NULL,
  `book_name` varchar(250) NOT NULL,
  `book_author` varchar(250) NOT NULL,
  `student_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `issue_date` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issued_books`
--

INSERT INTO `issued_books` (`s_no`, `book_name`, `book_author`, `student_id`, `status`, `issue_date`) VALUES
(21, 'IELTS', 'Mentors', 3, 1, '2121-01-09'),
(26, 'C: The Complete Reference', 'Herbert Schildt', 2, 1, '2121-05-22'),
(29, 'War and Peace', 'Leo Tolstoy', 4, 1, '2121-05-22'),
(30, 'The Green Book', 'Candacy Taylor', 2, 1, '2121-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `username`, `email`, `password`, `mobile`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '12345', '01735367936'),
(2, 'Tanvir', 'tanvir', 'tanvir@gmail.com', '87654321', '01167834568'),
(3, 'Nazmul', 'nazmul', 'nazmul@gmail.com', '123', '01963467834'),
(4, 'Ragib', 'ragib', 'ragib@gmail.com', '54321', '01567892390'),
(74, 'rayhan', 'ray', 'ray@gmail.com', '12345', '01711'),
(75, 'axel', 'axel', 'axel@gmail.com', '12345678', '0171116');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `issued_books`
--
ALTER TABLE `issued_books`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `issued_books`
--
ALTER TABLE `issued_books`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
