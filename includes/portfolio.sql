-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 08, 2024 at 10:47 AM
-- Server version: 8.0.35
-- PHP Version: 8.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `media_id` int NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `media_type` enum('video','image') NOT NULL,
  `media_url` varchar(255) NOT NULL,
  `projects_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`media_id`, `media_name`, `media_type`, `media_url`, `projects_id`) VALUES
(1, 'Orbitz preview', 'image', 'orbitz-1.jpg', 1),
(2, 'Orbitz', 'image', 'orbitz-2.jpg', 1),
(3, 'Orbitz', 'image', 'orbitz-3.jpg', 1),
(4, 'Orbitz', 'image', 'orbitz-4.jpg', 1),
(5, 'Orbitz', 'image', 'orbitz-5.jpg', 1),
(6, 'Orbitz', 'image', 'orbitz-6.jpg', 1),
(7, 'Orbitz', 'image', 'orbitz-7.jpg', 1),
(8, 'Orbitz video', 'video', 'orbitz-video.webm', 1),
(9, 'Jibek preview', 'image', 'jibek-1.jpg', 2),
(10, 'Jibek', 'image', 'jibek-2.jpg', 2),
(11, 'Jibek', 'image', 'jibek-3.jpg', 2),
(12, 'Jibek', 'image', 'jibek-4.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int NOT NULL,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `heading-1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `heading-2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `heading-3` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `heading-4` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description_1` text NOT NULL,
  `description_2` text NOT NULL,
  `description_3` text NOT NULL,
  `description-4` text NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `heading-1`, `heading-2`, `heading-3`, `heading-4`, `description_1`, `description_2`, `description_3`, `description-4`, `tags`, `date`) VALUES
(1, 'Orbitz', 'Orbitz Reincarnation', 'What Does It Mean?', 'Who Was It Made For?', '', 'The website highlights Orbitz\'s unique and innovative beverages, emphasizing their bold flavors and striking visual appeal. It provides a seamless browsing experience, allowing visitors to explore the brand\'s history, product offerings, and creative designs. With vibrant visuals and engaging content, the website captures the essence of Orbitz and invites users to discover its refreshing and adventurous spirit.', 'Orbitz is all about creativity and innovation, bringing bold flavors and captivating designs to life. The website reflects this energy with vibrant visuals and engaging content, offering a refreshing way to explore the brand and its journey.', 'Orbitz is designed for adventurous and creative individuals who crave unique experiences and bold flavors. Whether they’re trendsetters, explorers, or simply curious minds, the brand appeals to those who enjoy trying something new and exciting.', 'Orbitz is for those who love to explore, experiment, and embrace the unexpected. It’s not just a drink; it’s an experience crafted for adventurous spirits who appreciate bold flavors and striking designs. Whether you\'re looking to try something new or simply enjoy a refreshing moment, Orbitz speaks to individuals who value creativity and originality in everything they do.', 'Figma Photoshop Illustrator CSS HTML', 'April 2024'),
(2, 'Jibek', 'Travel best friend', 'Target Audience', '', '', 'Imagine a mobile app that becomes every traveler\'s best friend, effortlessly guiding them to uncover hidden treasures and share their discoveries with the world. With Jibek, users can seamlessly navigate through local sights, from bustling markets to serene landmarks, all presented in a visually stunning interface designed to ignite their wanderlust.', 'The target audience of Jibek includes culturally curious individuals and global explorers interested in the rich heritage of the Silk Road and nomadic traditions. It appeals to history enthusiasts, travelers, and anyone fascinated by Kazakhstan\'s vibrant culture and the legacy of its ancient trade routes. Additionally, Jibek is tailored for those seeking to connect with authentic experiences and stories that highlight the beauty of interconnected cultures and the enduring spirit of exploration.', '', '', 'Figma Photoshop Illustrator', 'August 2022');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` int NOT NULL,
  `platform` varchar(50) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`),
  ADD KEY `projects_id` (`projects_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `projects_id` FOREIGN KEY (`projects_id`) REFERENCES `projects` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
