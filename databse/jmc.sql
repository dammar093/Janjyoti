-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 03:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jmc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uid` int(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uid`, `name`, `email`, `password`) VALUES
(1, 'Dammar Singh Rana', 'dammarrana093@gmail.com', '9b82dea3c1e88dc5d18d8f069c38900d'),
(2, 'Janjyoti Campus', 'jmc093@gmail.com', '4dd184dc209eddb67d00ef764e0e81a7');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `cid` int(100) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_desc` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `course_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`cid`, `course_name`, `course_desc`, `image`, `course_type`) VALUES
(4, 'B.C.A. (Bachelor of computer Application)', '<p>The Bachelor in Computer Applications (BCA) program at Tribhuvan University (TU) in Nepal is a popular undergraduate degree that focuses on computer science and application development. It is a four-year program designed to equip students with the knowledge and skills needed for a career in the IT industry. The curriculum includes subjects like programming, database management, web development, and software engineering. Students also learn about computer networks, operating systems, and project management. Graduates of this program are well-prepared for careers in software development, system analysis, and various IT-related roles. TU is one of the leading universities in Nepal, offering quality education in the field of computer applications.</p>', 'bca.jpg', 'bachelor'),
(5, 'B.B.S. (Bachelor of Business Studies)', '<p>The Bachelor of Business Studies (BBS) program at Tribhuvan University (TU) in Nepal is a popular undergraduate degree designed to provide a strong foundation in business and management. Typically a three-year program, it covers a wide range of subjects, including economics, accounting, marketing, finance, organizational management, and business law. BBS students develop essential business skills and knowledge, making them well-prepared for careers in various sectors such as banking, finance, marketing, and entrepreneurship. TU is a reputable institution known for its quality education, and its BBS program is no exception, helping students acquire the necessary skills and knowledge to excel in the dynamic world of business and commerce.</p>\r\n', 'brooke-cagle--uHVRvDr7pg-unsplash.jpg', 'bachelor'),
(7, 'B.S.W. (Bachelor of Social Work)', '<p>The Bachelor of Social Work (BSW) program at Tribhuvan University (TU) in Nepal is a three-year undergraduate degree aimed at preparing students for careers in social work and related fields. BSW students study various aspects of social work, including social welfare, social problems, human behavior, and community development. They gain practical experience through internships and fieldwork, allowing them to work directly with individuals and communities in need. Graduates of the BSW program are equipped to address social issues, advocate for vulnerable populations, and work in diverse settings such as healthcare, education, and non-profit organizations. TU offers a quality BSW program to train future social workers and help address pressing societal challenges.</p>\r\n', 'christina-wocintechchat-com-eF7HN40WbAQ-unsplash.jpg', 'bachelor'),
(8, 'M.B.S. (Master of Business Studies)', '<p>The Master of Business Studies (MBS) program at Tribhuvan University (TU) in Nepal is a two-year postgraduate degree designed to provide advanced education in business and management. MBS students delve into subjects such as finance, marketing, human resources, strategic management, and economics. This program equips students with analytical and decision-making skills, preparing them for leadership positions in the corporate world, public sector, or entrepreneurship. TU is known for its quality education, and its MBS program is no exception, offering a comprehensive curriculum that combines theoretical knowledge with practical applications. Graduates of the MBS program are well-prepared to tackle complex business challenges and contribute to the economic development of Nepal and beyond.</p>\r\n', 'gulom-nazarov-cE6DB6u_OW4-unsplash.jpg', 'master'),
(11, 'B.Ed. (Bachelor of Education)', '<p>The Bachelor of Education (B.Ed.) program at Tribhuvan University (TU) is a prestigious teacher training program in Nepal. This four-year degree program is designed to prepare educators to excel in various educational settings. TU&#39;s B.Ed. curriculum covers educational psychology, teaching methodologies, and curriculum development, providing students with a solid foundation in pedagogical knowledge and skills. Practical teaching experiences are integrated into the program, allowing students to gain hands-on experience in real classrooms. Graduates of TU&#39;s B.Ed. program are well-equipped to meet the diverse needs of students and contribute positively to the education sector. The B.Ed. degree from TU is highly respected and recognized in the field of education.</p>\r\n', 'jodyhongfilms-sI1mbxJFFpU-unsplash.jpg', 'bachelor'),
(13, 'M.Ed. (Master of Education)', '<p>The Master of Education (M.Ed) program at Tribhuvan University (TU) in Nepal is a two-year postgraduate degree designed for educators and professionals seeking to advance their knowledge and skills in the field of education. This program encompasses various specializations, including curriculum development, educational leadership, educational psychology, and more. M.Ed students engage in research and coursework to gain a deeper understanding of educational theory, practice, and policy. With a focus on enhancing teaching and educational leadership, the M.Ed program equips graduates with the tools to make positive changes in the education sector, whether as teachers, administrators, or educational researchers. TU&#39;s M.Ed program is respected for its quality and impact on educational development in Nepal.</p>\r\n', 'javier-trueba-iQPr1XkF5F0-unsplash.jpg', 'master');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gid` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `gallery_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gid`, `image`, `gallery_type`) VALUES
(21, 'image1.jpg', 'slider'),
(22, 'about-image.jpg', 'slider'),
(23, 'image3.jpg', 'slider'),
(26, 'images.jpeg', 'gallery');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `nid` int(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`nid`, `title`, `description`, `date`) VALUES
(2, 'Dashain Vacation', '<p>Dashain, a major Hindu festival in Nepal, typically extends for 15 days during the lunar month of Ashwin (usually in September or October). It&#39;s a time of family reunions, animal sacrifices, and offering respects to deities. Schools and businesses close, and people return to their ancestral homes to celebrate.</p>\r\n', '2023-11-05 15:26:15'),
(3, 'College Start', '<p>sjandsakdmakdd sada</p>\r\n\r\n<p>s,mn,sams,adm</p>\r\n', '2023-11-06 08:29:08'),
(5, 'awdwe', '<p><img alt=\"\" src=\"https://scontent.fdhi1-1.fna.fbcdn.net/v/t39.30808-6/381358611_1526710901404632_2209950637351083332_n.jpg?_nc_cat=101&amp;ccb=1-7&amp;_nc_sid=5f2048&amp;_nc_ohc=eokeMHTDFgoAX_vMJGV&amp;_nc_ht=scontent.fdhi1-1.fna&amp;oh=00_AfA7mH3354zu9_GdZspHCLIR2SzRN3s3XQ59ezEvcNKarg&amp;oe=654DADEE\" style=\"height:99px; width:100px\" /></p>\r\n', '2023-11-06 19:18:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`nid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `uid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `cid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `nid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
