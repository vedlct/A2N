-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2017 at 02:27 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a2n`
--

-- --------------------------------------------------------

--
-- Table structure for table `design_class`
--

CREATE TABLE `design_class` (
  `design_class_id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `type` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `design_class`
--

INSERT INTO `design_class` (`design_class_id`, `name`, `type`) VALUES
(1, 'service-1', 'service'),
(2, 'service-2', 'service'),
(3, 'service-3', 'service'),
(4, 'service-4', 'service'),
(5, 'project-1', 'project'),
(6, 'project-2', 'project'),
(7, 'project-3', 'project');

-- --------------------------------------------------------

--
-- Table structure for table `design_page`
--

CREATE TABLE `design_page` (
  `design_page_id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `details` varchar(60000) NOT NULL,
  `insert_by` varchar(1000) NOT NULL,
  `insert_time` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `design_page`
--

INSERT INTO `design_page` (`design_page_id`, `name`, `details`, `insert_by`, `insert_time`) VALUES
(1, 'header', 'WE PROVIDE OUTSOURCED SOFTWARE DEVELOPMENT SERVICES TO OVER 50 ACTIVE CLIENTS FROM 21 COUNTRIES', 'admin', '');

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

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`, `first_name`, `last_name`, `phone_number`, `email`, `type`) VALUES
(1, 'admin', 'admin@123', 'Mr Anis', 'Sharkar', '0123114164', 'test@gmail.com', 'Admin');

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

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `name`, `parent_id`, `details`, `insert_by`, `insert_time`) VALUES
(1, 'Services', '1', '', 'admin', ''),
(2, 'Project', '1', '', 'admin', '');

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
  `image` varchar(1000) NOT NULL,
  `design_class` varchar(1000) NOT NULL,
  `insert_by` varchar(1000) NOT NULL,
  `insert_time` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`projects_id`, `image`, `design_class`, `insert_by`, `insert_time`) VALUES
(1, 'Preview_James-2.jpg', 'project-1', 'admin', ''),
(2, 'Preview_James-2.jpg', 'project-2', 'admin', ''),
(3, 'Preview_James-2.jpg', 'project-3', 'admin', ''),
(4, 'Preview_James-2.jpg', 'project-1', 'admin', ''),
(5, 'Preview_James-2.jpg', 'project-2', 'admin', ''),
(6, 'Preview_James-2.jpg', 'project-3', 'admin', ''),
(7, 'Preview_James-2.jpg', 'project-1', 'admin', ''),
(8, 'Preview_James-2.jpg', 'project-2', 'admin', ''),
(9, 'Preview_James-2.jpg', 'project-3', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `project_header`
--

CREATE TABLE `project_header` (
  `id` int(10) NOT NULL,
  `name` varchar(60000) NOT NULL,
  `insert_by` varchar(100) NOT NULL,
  `insert_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_header`
--

INSERT INTO `project_header` (`id`, `name`, `insert_by`, `insert_time`) VALUES
(1, 'For our clients we developed applications used by companies like Intel and Pepsi. So, what you can see here is only the tip of the iceberg...', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `services_id` int(100) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `design_class` varchar(1000) NOT NULL,
  `insert_by` varchar(1000) NOT NULL,
  `insert_time` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`services_id`, `image`, `details`, `design_class`, `insert_by`, `insert_time`) VALUES
(1, 'digital-agensies.png', 'Why do agencies take advantage of our software programming services?<br>\r\n    We help manage fluctuations in work-stream effectively and work in the background.', 'service-1', 'admin', ''),
(2, 'digital-agensies.png', 'We apply agile practices to develop and design innovative mobile applications for Android (both smartphones and tablets) and iOS (iPhone, iPad) whatever your needs.', 'service-2', 'admin', ''),
(3, 'digital-agensies.png', 'As a provider of software development services for startups, we developed applications ranging from educational apps to apps for flight planning.', 'service-3', 'admin', ''),
(4, 'digital-agensies.png', 'For our clients, we have developed custom web applications that range from simple CMS-powered websites to complex SaaS applications hosted on server clusters.', 'service-4', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `services_header`
--

CREATE TABLE `services_header` (
  `id` int(10) NOT NULL,
  `name` varchar(60000) NOT NULL,
  `insert_by` varchar(1000) NOT NULL,
  `insert_time` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services_header`
--

INSERT INTO `services_header` (`id`, `name`, `insert_by`, `insert_time`) VALUES
(1, 'OUR CORE SERVICES ARE WEB PROGRAMMING AND MOBILE PROGRAMMING', 'admin', '');

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
-- Indexes for table `project_header`
--
ALTER TABLE `project_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`services_id`);

--
-- Indexes for table `services_header`
--
ALTER TABLE `services_header`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `design_class`
--
ALTER TABLE `design_class`
  MODIFY `design_class_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `design_page`
--
ALTER TABLE `design_page`
  MODIFY `design_page_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `pages_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `projects_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `project_header`
--
ALTER TABLE `project_header`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `services_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `services_header`
--
ALTER TABLE `services_header`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
