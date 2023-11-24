-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:4306:4306
-- Generation Time: Nov 24, 2023 at 04:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `driving`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_compani`
--

CREATE TABLE `about_compani` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `facility_1` varchar(200) NOT NULL,
  `facility_2` varchar(200) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `about_compani`
--

INSERT INTO `about_compani` (`id`, `title`, `content`, `facility_1`, `facility_2`, `image`) VALUES
(5, 'Driving School is the\r\nleading provider of\r\nTraining', 'Nullam tempus vel tortor eget suscipit. Suspendisse enim dolor, placerat quis elit et, feugiat consectetur mauris. Cras tempor sollicitudin eleifend. Cras efficitur libero ', 'Fully equipped\r\nfacility', 'Driving training in\r\nits entirety.', 'about1.png');

-- --------------------------------------------------------

--
-- Table structure for table `about_conter`
--

CREATE TABLE `about_conter` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `count_number` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `about_mission_image`
--

CREATE TABLE `about_mission_image` (
  `id` int(11) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `about_service_mission`
--

CREATE TABLE `about_service_mission` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `heading` varchar(250) NOT NULL,
  `btn_text` varchar(50) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `about_service_mission`
--

INSERT INTO `about_service_mission` (`id`, `title`, `heading`, `btn_text`, `content`) VALUES
(1, 'Our Services', 'Driving School enables\r\nYou to learn how to\r\nDrive a car', 'Our Mission', 'Aliquam mollis nibh quis ante congue, in tempor turpis\r\nvestibulum. Nullam euismod nisi vitae tortor vestibulum, quis\r\nrutrum ante molestie. Ut maximus consequat mi,\r\n\r\n<ul>\r\n<li>Driving training in its entirety.</li>\r\n<li>Driving training in its entirety.</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `email`, `password`, `role`) VALUES
(1, 'siddik', 'siddik@gmail.com', '123456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner_slider`
--

CREATE TABLE `banner_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `content`, `date`, `image`) VALUES
(1, 'All you need is a car and an Instructor', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2023-11-11', 'course1.png'),
(2, 'All you need is a car and an Instructor', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2023-11-11', 'course1.png'),
(3, 'All you need is a car and an Instructor', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2023-11-11', 'course1.png');

-- --------------------------------------------------------

--
-- Table structure for table `compani`
--

CREATE TABLE `compani` (
  `id` int(11) NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `location` varchar(200) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `linkdin` varchar(100) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `t_duration` int(11) NOT NULL,
  `p_duration` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `title`, `t_duration`, `p_duration`, `price`, `image`, `content`) VALUES
(2, 'Basic Driving Course', 4, 20, 0, 'course1.png', 'Proin sed pretium risus, vel porttitor magna. Quisque volutpat'),
(3, 'Basic Driving Course', 4, 20, 0, 'course1.png', 'Proin sed pretium risus, vel porttitor magna. Quisque volutpat'),
(5, 'Basic Driving Course', 4, 20, 0, 'course1.png', 'Proin sed pretium risus, vel porttitor magna. Quisque volutpat');

-- --------------------------------------------------------

--
-- Table structure for table `founded`
--

CREATE TABLE `founded` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `counter` int(11) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `founded`
--

INSERT INTO `founded` (`id`, `title`, `content`, `counter`, `heading`, `image`) VALUES
(1, 'Founded in 1996', 'Phasellus nisi sapien, rutrum placerat sapien eu, rhoncus tempus felis. Nulla non', 160, 'We have Experience Our Company', 'exp.png');

-- --------------------------------------------------------

--
-- Table structure for table `founder`
--

CREATE TABLE `founder` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `founder`
--

INSERT INTO `founder` (`id`, `name`, `title`, `image`) VALUES
(1, 'David Becham', 'Founder Ceo', 'ceo.png');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `linkedin` text NOT NULL,
  `instagram` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `join_com`
--

CREATE TABLE `join_com` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo_img`) VALUES
(1, 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `logo`) VALUES
(1, 'partner1.png'),
(2, 'partner1.png'),
(3, 'partner1.png'),
(4, 'partner1.png');

-- --------------------------------------------------------

--
-- Table structure for table `process`
--

CREATE TABLE `process` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `plan_title` varchar(50) NOT NULL,
  `plan_content` text NOT NULL,
  `buy_title` varchar(50) NOT NULL,
  `buy_content` text NOT NULL,
  `select_title` varchar(50) NOT NULL,
  `select_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `process`
--

INSERT INTO `process` (`id`, `title`, `content`, `mobile`, `plan_title`, `plan_content`, `buy_title`, `buy_content`, `select_title`, `select_content`) VALUES
(1, 'Start the learning Process', 'Praesent eget ullamcorper lorem. Ut nec mauris ac metus\r\nfaucibus consequat. Mauris sed Pharetra augue. Proin eget\r\nfermentum massa, quis dapibus\r\n\r\nNeque. Maecenas at elementum arcu. Integer in justo ligula.\r\nUt efficitur quam quis purus sagittis', '+123 (568) 568 586', 'Select your Plan', 'Praesent eget ullamcorper lorem. Ut\r\nnec mauris ac metus faucibus\r\n\r\n', 'Select your Plan', 'Praesent eget ullamcorper lorem. Ut\r\nnec mauris ac metus faucibus', 'Select your Plan', 'Praesent eget ullamcorper lorem. Ut\r\nnec mauris ac metus faucibus');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `icon` varchar(50) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `title`, `content`, `icon`, `image`) VALUES
(4, 'Basic Driving Course', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the', 'car', 'about1.png'),
(12, 'Basic Driving Course', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the', 'car', 'about1.png');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `title`, `content`, `image`) VALUES
(2, 'Start the learning Process', 'loLorem ipsum is a placeholder text commonly used in the graphic, print, and web industries. It is used to fill in the space of a design or layout to give an idea of how the final product will look with text, without the distraction of readable content. The text is derived from a work by Cicero and is intentionally nonsensical, so as not to distract from the visual aspects of the desig', 'about3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `success`
--

CREATE TABLE `success` (
  `id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `success`
--

INSERT INTO `success` (`id`, `count`, `title`) VALUES
(2, 150, 'Active Student'),
(3, 150, 'Active Student');

-- --------------------------------------------------------

--
-- Table structure for table `testi`
--

CREATE TABLE `testi` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testi_count`
--

CREATE TABLE `testi_count` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `count` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_compani`
--
ALTER TABLE `about_compani`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_conter`
--
ALTER TABLE `about_conter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_mission_image`
--
ALTER TABLE `about_mission_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_service_mission`
--
ALTER TABLE `about_service_mission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_slider`
--
ALTER TABLE `banner_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compani`
--
ALTER TABLE `compani`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `founded`
--
ALTER TABLE `founded`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `founder`
--
ALTER TABLE `founder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `join_com`
--
ALTER TABLE `join_com`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `process`
--
ALTER TABLE `process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `success`
--
ALTER TABLE `success`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testi`
--
ALTER TABLE `testi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testi_count`
--
ALTER TABLE `testi_count`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_compani`
--
ALTER TABLE `about_compani`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `about_conter`
--
ALTER TABLE `about_conter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `about_mission_image`
--
ALTER TABLE `about_mission_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `about_service_mission`
--
ALTER TABLE `about_service_mission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner_slider`
--
ALTER TABLE `banner_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `compani`
--
ALTER TABLE `compani`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `founded`
--
ALTER TABLE `founded`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `founder`
--
ALTER TABLE `founder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `join_com`
--
ALTER TABLE `join_com`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `process`
--
ALTER TABLE `process`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `success`
--
ALTER TABLE `success`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testi`
--
ALTER TABLE `testi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testi_count`
--
ALTER TABLE `testi_count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
