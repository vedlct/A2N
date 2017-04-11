-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2017 at 09:38 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

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
-- Table structure for table `about_banner`
--

CREATE TABLE `about_banner` (
  `id` int(100) NOT NULL,
  `header` varchar(10000) NOT NULL,
  `details` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_banner`
--

INSERT INTO `about_banner` (`id`, `header`, `details`) VALUES
(1, 'What we do  ', 'We are a full stack development company specializing on Web and mobile development. We provide all services needed for a successful project launch: from detailing specifications to launch, support and maintenance.\r\n\r\nAmong others, web and mobile solutions we developed for our customers include:\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nPhasellus vel ornare ante. Donec mattis volutpat ligula eget pharetra.\r\nNam vel augue purus. Sed tristique convallis odio, vitae aliquam metus laoreet sit amet.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nPhasellus vel ornare ante. Donec mattis volutpat ligula eget pharetra.\r\nNam vel augue purus. Sed tristique convallis odio, vitae aliquam metus laoreet sit amet.\r\nOur Clients come from five of the Seven Continents of the World. [So far, the penguins of Antarctica have shown little interest in surfing the Web when they can surf the waves.]'),
(2, 'A2N’s Mission and Vision', 'Our teams love working on customized solutions that help businesses grow.\r\n\r\nWe know what “customer orientation” means. We respect your time and believe that every client has his or her own unique needs, regardless of size of the business. Success is something that happens to everyone who works smart and sets goals.\r\n\r\nOur goal is to make your solution serve you the way you plan it.\r\n\r\nWe always enjoy our clients’ successes with the code we write for them.'),
(4, 'A2N’s Mission and Vision', 'Our teams love working on customized solutions that help businesses grow. We know what “customer orientation” means. We respect your time and believe that every client has his or her own unique needs, regardless of size of the business. Success is something that happens to everyone who works smart and sets goals. Our goal is to make your solution serve you the way you plan it. We always enjoy our clients’ successes with the code we write for them.');

-- --------------------------------------------------------

--
-- Table structure for table `about_details`
--

CREATE TABLE `about_details` (
  `id` int(100) NOT NULL,
  `header` varchar(10000) NOT NULL,
  `details` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_details`
--

INSERT INTO `about_details` (`id`, `header`, `details`) VALUES
(1, 'Why Choose Us?', '<p>We love great ideas and challenges. We endeavor to provide our services for reasonable costs. Our transparency ensures our clients always know where there money goes. You can rely on us because we: Value your time and pay attention to what you need. Are always open to communication. Do not promise what we cannot do. Deliver what we promise and when we promise. Grant after-launch support to be sure the solution works the proper way.<br></p>'),
(2, 'How are we different? To list a few ', '<p>We usually provide our clients with a detailed sprint plan which proves we understand your project requirements quite well and you can feel absolutely confident that we deliver nothing else than what you look for, what we promised, and what you expect to get.\r\n</p><p>\r\n– We care about your budget and timeline. No deadlocks—ever. Because we respect your hard-earned money, we can suggest ways to minimize costs and reduce the timeline, while still maintaining our signature high quality. Recommendations, best pieces of expert advice and tips, based on experience and expertise, are available throughout our work together.\r\n</p><p>\r\n– Issues? Concerns? Let’s talk. It is well known that open lines of communication play an integral role in the successful process of website development. Therefore, our communication strategy includes interviews, emails, online chats, Q&amp;A sessions, telephone conversations and any other possible ways of communication to achieve the agreed-upon development goals. We are always available for you.\r\n</p><p>\r\n– We don’t launch and leave. You will be delighted with our high quality post-launch support. After your website goes live, we stick around for a while to ensure your system works as beautifully and efficiently as planned. Some issues might surface only when used by a wider audience. We’ve got your back: you are covered to have all issues resolved immediately—and for free—during your warranty period.\r\n</p><p>\r\n– Updates are inevitable. That is why we build easily upgradable applications that can be quickly and cheaply adapted to your changing business needs. Our well-documented and simple-to-read code allows both programmers from IT Craft and elsewhere to make any necessary changes and updates.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(100) NOT NULL,
  `small` varchar(10000) NOT NULL,
  `big` varchar(10000) NOT NULL,
  `quote` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `small`, `big`, `quote`) VALUES
(1, 'Since 2001, A2N has been providing software solutions for people with great ideas and for those needing assistance with software development. Not run-of-the-mill software development but our “skyrockets-our-clients-to-spectacular-success” software development. That is why we were awarded “Top Web & Software Developers, 2015” by Clutch and consistently rank in the Top. A2N started as a one-man band providing server administration services. Today we are 238 employees strong with five separate departments to help serve our ever-growing happy customer base with over 2,250 completed projects. We’ve grown because of our unique global ripple effect of word-of-mouth advertising by our satisfied customers from all over the world. ', 'SOME WORDS ABOUT A2N      ', 'We’re different—not peculiar different—but particular different. Being particular different means that you—our clients—benefit.');

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
(6, 'header', '<p>WE PROVIDE <b>OUTSOURCED SOFTWARE DEVELOPMENT SERVICES</b> TO OVER 50 ACTIVE CLIENTS FROM 21 COUNTRIES<br></p>', 'mujtaba rafid rumi', '');

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
(1, 'admin', 'admin@123', 'Mr Anis', 'Sharkar', '01688888888', 'test@yahoo.com', 'Admin'),
(3, 'rumi', 'rumi@123', 'mujtaba rafid', 'rumi', '01680674598', 'rumi@gmail.com', 'Admin');

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
(2, 'Project', '1', '', 'admin', ''),
(5, 'rumi', '2', '<p>asd</p>', 'mujtaba rafid rumi', '');

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
(8, 'Preview_James-2.jpg', 'project-2', 'admin', '');

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
(1, 'For our clients we developed applications used by companies like Intel and Pepsi. So, what you can see here is only the tip of the iceberg...', 'Admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `services_id` int(100) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `service_name` varchar(1000) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `design_class` varchar(1000) NOT NULL,
  `insert_by` varchar(1000) NOT NULL,
  `insert_time` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`services_id`, `image`, `service_name`, `details`, `design_class`, `insert_by`, `insert_time`) VALUES
(1, 'digital-agensies.png', 'Digital Agencis', '<p>Why do agencies take advantage of our software programming services?<br>\n    We help manage fluctuations in work-stream effectively and work in the background.</p><p><b xss=removed>-bmnbnb</b></p>', 'service-1', 'mujtaba rafid rumi', ''),
(2, 'digital-agensies.png', 'Mobile Programming', 'We apply agile practices to develop and design innovative mobile applications for Android (both smartphones and tablets) and iOS (iPhone, iPad) whatever your needs.', 'service-2', 'admin', ''),
(3, 'digital-agensies.png', 'Startups', 'As a provider of software development services for startups, we developed applications ranging from educational apps to apps for flight planning.', 'service-3', 'admin', ''),
(4, 'digital-agensies.png', 'Web Programming', 'For our clients, we have developed custom web applications that range from simple CMS-powered websites to complex SaaS applications hosted on server clusters.', 'service-4', 'admin', '');

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
(1, 'OUR CORE SERVICES ARE WEB PROGRAMMING AND MOBILE PROGRAMMING', 'Admin', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_banner`
--
ALTER TABLE `about_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_details`
--
ALTER TABLE `about_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `about_banner`
--
ALTER TABLE `about_banner`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `about_details`
--
ALTER TABLE `about_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `design_class`
--
ALTER TABLE `design_class`
  MODIFY `design_class_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `design_page`
--
ALTER TABLE `design_page`
  MODIFY `design_page_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `pages_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `projects_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
