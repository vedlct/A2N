-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2017 at 06:34 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `a2n`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_banner`
--

CREATE TABLE IF NOT EXISTS `about_banner` (
`id` int(100) NOT NULL,
  `header` varchar(10000) NOT NULL,
  `details` varchar(10000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

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

CREATE TABLE IF NOT EXISTS `about_details` (
`id` int(100) NOT NULL,
  `header` varchar(10000) NOT NULL,
  `details` varchar(10000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `about_details`
--

INSERT INTO `about_details` (`id`, `header`, `details`) VALUES
(1, 'Why Choose Us? ', 'no We love great ideas and challenges. We endeavor to provide our services for reasonable costs. Our transparency ensures our clients always know where there money goes.\r\n\r\nYou can rely on us because we:\r\n\r\nValue your time and pay attention to what you need.\r\nAre always open to communication.\r\nDo not promise what we cannot do.\r\nDeliver what we promise and when we promise.\r\nGrant after-launch support to be sure the solution works the proper way.'),
(2, 'How are we different? To list a few', '– We usually provide our clients with a detailed sprint plan which proves we understand your project requirements quite well and you can feel absolutely confident that we deliver nothing else than what you look for, what we promised, and what you expect to get.\n\n– We care about your budget and timeline. No deadlocks—ever. Because we respect your hard-earned money, we can suggest ways to minimize costs and reduce the timeline, while still maintaining our signature high quality. Recommendations, best pieces of expert advice and tips, based on experience and expertise, are available throughout our work together.\n\n– Issues? Concerns? Let’s talk. It is well known that open lines of communication play an integral role in the successful process of website development. Therefore, our communication strategy includes interviews, emails, online chats, Q&A sessions, telephone conversations and any other possible ways of communication to achieve the agreed-upon development goals. We are always available for you.\n\n– We don’t launch and leave. You will be delighted with our high quality post-launch support. After your website goes live, we stick around for a while to ensure your system works as beautifully and efficiently as planned. Some issues might surface only when used by a wider audience. We’ve got your back: you are covered to have all issues resolved immediately—and for free—during your warranty period.\n\n– Updates are inevitable. That is why we build easily upgradable applications that can be quickly and cheaply adapted to your changing business needs. Our well-documented and simple-to-read code allows both programmers from IT Craft and elsewhere to make any necessary changes and updates.'),
(4, 'sadsad', '<p>sadsadasdsadsad</p>');

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE IF NOT EXISTS `about_us` (
`id` int(100) NOT NULL,
  `small` varchar(10000) NOT NULL,
  `big` varchar(10000) NOT NULL,
  `quote` varchar(10000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `small`, `big`, `quote`) VALUES
(1, 'Since 2001, A2N has been providing software solutions for people with great ideas and for those needing assistance with software development. Not run-of-the-mill software development but our “skyrockets-our-clients-to-spectacular-success” software development. That is why we were awarded “Top Web & Software Developers, 2015” by Clutch and consistently rank in the Top. A2N started as a one-man band providing server administration services. Today we are 238 employees strong with five separate departments to help serve our ever-growing happy customer base with over 2,250 completed projects. We’ve grown because of our unique global ripple effect of word-of-mouth advertising by our satisfied customers from all over the world. ', 'SOME WORDS ABOUT A2N', 'We’re different—not peculiar different—but particular different. Being particular different means that you—our clients—benefit.');

-- --------------------------------------------------------

--
-- Table structure for table `about_us_feature`
--

CREATE TABLE IF NOT EXISTS `about_us_feature` (
`id` int(100) NOT NULL,
  `header` varchar(10000) NOT NULL,
  `details` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `design_class`
--

CREATE TABLE IF NOT EXISTS `design_class` (
`design_class_id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `type` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

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

CREATE TABLE IF NOT EXISTS `design_page` (
`design_page_id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `details` varchar(60000) NOT NULL,
  `insert_by` varchar(1000) NOT NULL,
  `insert_time` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `design_page`
--

INSERT INTO `design_page` (`design_page_id`, `name`, `details`, `insert_by`, `insert_time`) VALUES
(1, 'header', 'WE PROVIDE OUTSOURCED SOFTWARE DEVELOPMENT SERVICES TO OVER 50 ACTIVE CLIENTS FROM 21 COUNTRIES', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`login_id` int(100) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `first_name` varchar(1000) NOT NULL,
  `last_name` varchar(1000) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `type` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`, `first_name`, `last_name`, `phone_number`, `email`, `type`) VALUES
(1, 'admin', 'admin@123', 'Mr Anis', 'Sharkar', '0123114164', 'test@gmail.com', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`menu_id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `parent_id` varchar(1000) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `insert_by` varchar(1000) NOT NULL,
  `insert_time` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `name`, `parent_id`, `details`, `insert_by`, `insert_time`) VALUES
(1, 'Services', '0', '<p>treyt</p>', 'Mr Anis Sharkar', ''),
(2, 'Project', '0', '', 'Mr Anis Sharkar', ''),
(3, 'a', '0', '<p>dsadsa</p>', 'Mr Anis Sharkar', ''),
(4, 'b', '0', '<p>sadsa</p>', 'Mr Anis Sharkar', ''),
(5, 'test1', '3', 'sa', 'Mr Anis Sharkar', ''),
(6, 'test2', '4', 'asdsad', '', ''),
(7, 'dsafd', '0', '<p>gfhgf</p>', 'Mr Anis Sharkar', '');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
`pages_id` int(100) NOT NULL,
  `page_name` varchar(1000) NOT NULL,
  `page_details` varchar(1000) NOT NULL,
  `insert_by` varchar(1000) NOT NULL,
  `insert_time` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
`projects_id` int(100) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `design_class` varchar(1000) NOT NULL,
  `insert_by` varchar(1000) NOT NULL,
  `insert_time` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`projects_id`, `image`, `design_class`, `insert_by`, `insert_time`) VALUES
(2, 'Preview_James-2.jpg', 'project-2', 'admin', ''),
(4, 'Preview_James-2.jpg', 'project-1', 'admin', ''),
(5, 'Preview_James-2.jpg', 'project-2', 'admin', ''),
(6, 'Preview_James-2.jpg', 'project-3', 'admin', ''),
(7, 'Preview_James-2.jpg', 'project-1', 'admin', ''),
(8, 'Preview_James-2.jpg', 'project-2', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `project_header`
--

CREATE TABLE IF NOT EXISTS `project_header` (
`id` int(10) NOT NULL,
  `name` varchar(60000) NOT NULL,
  `insert_by` varchar(100) NOT NULL,
  `insert_time` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `project_header`
--

INSERT INTO `project_header` (`id`, `name`, `insert_by`, `insert_time`) VALUES
(1, 'For our clients we developed applications used by companies like Intel and Pepsi. So, what you can see here is only the tip of the iceberg...', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
`id` int(10) NOT NULL,
  `big` varchar(10000) NOT NULL,
  `small` varchar(10000) NOT NULL,
  `quote` varchar(10000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `big`, `small`, `quote`) VALUES
(1, ' service header', '<p>service head details</p>', '<p>service head quote</p>');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
`services_id` int(100) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `service_name` varchar(1000) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `design_class` varchar(1000) NOT NULL,
  `insert_by` varchar(1000) NOT NULL,
  `insert_time` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`services_id`, `image`, `service_name`, `details`, `design_class`, `insert_by`, `insert_time`) VALUES
(1, 'digital-agensies.png', 'Digital Agencis', 'Why do agencies take advantage of our software programming services?<br>\r\n    We help manage fluctuations in work-stream effectively and work in the background.', 'service-1', 'admin', ''),
(2, 'digital-agensies.png', 'Mobile Programming', 'We apply agile practices to develop and design innovative mobile applications for Android (both smartphones and tablets) and iOS (iPhone, iPad) whatever your needs.', 'service-2', 'admin', ''),
(3, 'digital-agensies.png', 'Startups', 'As a provider of software development services for startups, we developed applications ranging from educational apps to apps for flight planning.', 'service-3', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `services_header`
--

CREATE TABLE IF NOT EXISTS `services_header` (
`id` int(10) NOT NULL,
  `name` varchar(60000) NOT NULL,
  `insert_by` varchar(1000) NOT NULL,
  `insert_time` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `services_header`
--

INSERT INTO `services_header` (`id`, `name`, `insert_by`, `insert_time`) VALUES
(1, 'OUR CORE SERVICES ARE WEB PROGRAMMING AND MOBILE PROGRAMMING', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `service_banner`
--

CREATE TABLE IF NOT EXISTS `service_banner` (
`id` int(10) NOT NULL,
  `big` varchar(10000) NOT NULL,
  `small` varchar(10000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `service_banner`
--

INSERT INTO `service_banner` (`id`, `big`, `small`) VALUES
(1, ' service banner head ', '<p>banner details</p>');

-- --------------------------------------------------------

--
-- Table structure for table `service_details`
--

CREATE TABLE IF NOT EXISTS `service_details` (
`id` int(10) NOT NULL,
  `header` varchar(10000) NOT NULL,
  `details` varchar(10000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `service_details`
--

INSERT INTO `service_details` (`id`, `header`, `details`) VALUES
(1, '1', '<p>1-dfsdfsdfsdfsfds</p>'),
(2, '2', '<p>2-ddfsdfsd</p>'),
(3, '3', '<p>3-adasdadadsa</p>');

-- --------------------------------------------------------

--
-- Table structure for table `service_details_big`
--

CREATE TABLE IF NOT EXISTS `service_details_big` (
`id` int(10) NOT NULL,
  `big` varchar(10000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `service_details_big`
--

INSERT INTO `service_details_big` (`id`, `big`) VALUES
(1, 'service details header');

-- --------------------------------------------------------

--
-- Table structure for table `service_images`
--

CREATE TABLE IF NOT EXISTS `service_images` (
`id` int(10) NOT NULL,
  `vertical_image` varchar(1000) NOT NULL,
  `horizontal_image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
-- Indexes for table `about_us_feature`
--
ALTER TABLE `about_us_feature`
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
-- Indexes for table `service`
--
ALTER TABLE `service`
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
-- Indexes for table `service_banner`
--
ALTER TABLE `service_banner`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_details`
--
ALTER TABLE `service_details`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_details_big`
--
ALTER TABLE `service_details_big`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_images`
--
ALTER TABLE `service_images`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_banner`
--
ALTER TABLE `about_banner`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `about_details`
--
ALTER TABLE `about_details`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `about_us_feature`
--
ALTER TABLE `about_us_feature`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `design_class`
--
ALTER TABLE `design_class`
MODIFY `design_class_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `design_page`
--
ALTER TABLE `design_page`
MODIFY `design_page_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `login_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `menu_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
MODIFY `pages_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
MODIFY `projects_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `project_header`
--
ALTER TABLE `project_header`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
MODIFY `services_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `services_header`
--
ALTER TABLE `services_header`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `service_banner`
--
ALTER TABLE `service_banner`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `service_details`
--
ALTER TABLE `service_details`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `service_details_big`
--
ALTER TABLE `service_details_big`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `service_images`
--
ALTER TABLE `service_images`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
