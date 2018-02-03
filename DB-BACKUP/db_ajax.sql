-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 05, 2017 at 09:54 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `id` int(11) NOT NULL,
  `post` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_posts`
--

INSERT INTO `tbl_posts` (`id`, `post`) VALUES
(55, 'adad'),
(56, 'da'),
(57, 'dada'),
(58, 'Yeasir arafat'),
(59, 'mim'),
(60, 'lisa'),
(61, 'MIM tuba Moni'),
(62, 'SAS'),
(63, 'FB LIKE POST'),
(64, 'GOOD JOB ARAFAT'),
(65, 'BBBBB');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_saveData`
--

CREATE TABLE `tbl_saveData` (
  `autoSaveId` int(11) NOT NULL,
  `content` text NOT NULL,
  `status` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_saveData`
--

INSERT INTO `tbl_saveData` (`autoSaveId`, `content`, `status`) VALUES
(54, 'arafat mim lisa', 'draft');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`) VALUES
(1, 'Yeasir Arafat', 'arafat@gmail.com'),
(2, 'Mim Tuba Moni', 'mim@gmail.com'),
(3, 'Jarif hasan', 'jarif@gmail.com'),
(4, 'Shamima Lisa', 'lisa@gmail.com'),
(5, 'Saibal Kabir', 'saibal@gmail.com'),
(6, 'Ami Rathik ', 'rathik@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_saveData`
--
ALTER TABLE `tbl_saveData`
  ADD PRIMARY KEY (`autoSaveId`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `tbl_saveData`
--
ALTER TABLE `tbl_saveData`
  MODIFY `autoSaveId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
