-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2017 at 12:10 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a2n_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `design_class`
--

CREATE TABLE `design_class` (
  `design_class_id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `type` varchar(1000) NOT NULL,
  `insert_by` varchar(1000) NOT NULL,
  `insert_time` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `design_page`
--

CREATE TABLE `design_page` (
  `design_page_id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `insert_by` varchar(1000) NOT NULL,
  `insert_time` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(100) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `first_name` varchar(1000) NOT NULL,
  `last_name` varchar(1000) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `type` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `parent_id` varchar(1000) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `insert_by` varchar(1000) NOT NULL,
  `insert_time` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `pages_id` int(100) NOT NULL,
  `page_name` varchar(1000) NOT NULL,
  `page_details` varchar(1000) NOT NULL,
  `insert_by` varchar(1000) NOT NULL,
  `insert_time` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `projects_id` int(100) NOT NULL,
  `projects_header` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `design_class` varchar(1000) NOT NULL,
  `insert_by` varchar(1000) NOT NULL,
  `insert_time` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `services_id` int(100) NOT NULL,
  `services_header` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `design_class` varchar(1000) NOT NULL,
  `insert_by` varchar(1000) NOT NULL,
  `insert_time` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `design_class`
--
ALTER TABLE `design_class`
  ADD PRIMARY KEY (`design_class_id`);

--
-- Indexes for table `design_page`
--
ALTER TABLE `design_page`
  ADD PRIMARY KEY (`design_page_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`pages_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`projects_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`services_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `design_class`
--
ALTER TABLE `design_class`
  MODIFY `design_class_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `design_page`
--
ALTER TABLE `design_page`
  MODIFY `design_page_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `pages_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `projects_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `services_id` int(100) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
