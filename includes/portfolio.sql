-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 07, 2025 at 11:00 AM
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
-- Database: portfolio
--

-- --------------------------------------------------------

--
-- Table structure for table contact_form
--

CREATE TABLE contact_form (
  id int NOT NULL,
  name varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  brief text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  submitted_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  field varchar(100) NOT NULL,
  budget text NOT NULL,
  deadline text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table contact_form
--

INSERT INTO contact_form (id, name, email, brief, submitted_at, field, budget, deadline) VALUES
(1, '.alisher.', '.alish.yant@ya.ru.', '.dawdawd.', '2024-12-09 01:18:41', '.Web design.', '.20000.', '.tomorrow.'),
(2, '.alisher.', '.alish.yant@ya.ru.', '.dawdawd.', '2024-12-09 01:29:32', '.Web design.', '.20000.', '.tomorrow.'),
(3, '.Man.', '.man@man.man.', '.adpoakwdj.', '2024-12-09 01:30:45', '.UI.', '.1000.', '.Yesterday.'),
(4, 'Wisdom', 'wisdom@okutepa.com', 'Im wisdom idk what to do', '2024-12-09 01:33:08', 'Graphic', '20000', '2 days'),
(5, 'Wisdom', 'alish.yant@ya.ru', 'Im wisdom idk what to do', '2024-12-09 07:11:48', 'Web design', '20000', 'tomorrow'),
(6, 'Wisdom', 'wisdom@okutepa.com', 'Im wisdom idk what to do', '2024-12-12 08:12:21', 'Web design', '20000', 'tomorrow'),
(7, 'Wisdom', 'wisdom@okutepa.com', 'dawdawd', '2024-12-12 17:58:12', 'Web design', '20000', 'tomorrow'),
(8, 'add', 'wisdom@okutepa.com', 'adpoakwdj', '2025-02-07 18:13:45', 'UI', '69420', 'tomorrow');

-- --------------------------------------------------------

--
-- Table structure for table media
--

CREATE TABLE media (
  media_id int NOT NULL,
  media_name varchar(255) NOT NULL,
  media_type enum('video','image') NOT NULL,
  media_url varchar(255) NOT NULL,
  projects_id int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table media
--

INSERT INTO media (media_id, media_name, media_type, media_url, projects_id) VALUES
(1, 'Orbitz preview', 'image', 'orbitz-preview.jpg', 1),
(2, 'Orbitz', 'image', 'orbitz-2.jpg', 1),
(3, 'Orbitz', 'image', 'orbitz-3.jpg', 1),
(4, 'Orbitz', 'image', 'orbitz-4.jpg', 1),
(5, 'Orbitz', 'image', 'orbitz-5.jpg', 1),
(6, 'Orbitz', 'image', 'orbitz-6.jpg', 1),
(7, 'Orbitz', 'image', 'orbitz-7.jpg', 1),
(9, 'Jibek preview', 'image', 'jibek-preview.jpg', 2),
(10, 'Jibek', 'image', 'jibek-2.jpg', 2),
(11, 'Jibek', 'image', 'jibek-3.jpg', 2),
(12, 'Jibek', 'image', 'jibek-4.jpg', 2),
(36, 'd3d preview', 'image', 'design-preview.jpg', 3),
(37, 'd3d', 'image', 'design-2.jpg', 3),
(38, 'd3d', 'image', 'design-3.jpg', 3),
(39, 'd3d', 'image', 'design-4.jpg', 3),
(40, 'd3d', 'image', 'design-5.jpg', 3),
(41, 'd3d', 'image', 'design-6.jpg', 3),
(42, 'd3d', 'image', 'design-7.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table projects
--

CREATE TABLE projects (
  id int NOT NULL,
  title varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  heading_1 varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  heading_2 varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  heading_3 varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  heading_4 varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  description_1 text NOT NULL,
  description_2 text NOT NULL,
  description_3 text NOT NULL,
  description_4 text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  thumb varchar(255) NOT NULL,
  tags varchar(255) NOT NULL,
  date varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table projects
--

INSERT INTO projects (id, title, heading_1, heading_2, heading_3, heading_4, description_1, description_2, description_3, description_4, thumb, tags, date) VALUES
(1, 'Orbitz', 'Orbitz Reincarnation', 'What Does It Mean?', 'Who Was It Made For?', '', 'The website highlights Orbitz\'s unique and innovative beverages, emphasizing their bold flavors and striking visual appeal. It provides a seamless browsing experience, allowing visitors to explore the brand\'s history, product offerings, and creative designs. With vibrant visuals and engaging content, the website captures the essence of Orbitz and invites users to discover its refreshing and adventurous spirit.', 'Orbitz is all about creativity and innovation, bringing bold flavors and captivating designs to life. The website reflects this energy with vibrant visuals and engaging content, offering a refreshing way to explore the brand and its journey.', 'Orbitz is designed for adventurous and creative individuals who crave unique experiences and bold flavors. Whether they’re trendsetters, explorers, or simply curious minds, the brand appeals to those who enjoy trying something new and exciting.', 'Orbitz is for those who love to explore, experiment, and embrace the unexpected. It’s not just a drink; it’s an experience crafted for adventurous spirits who appreciate bold flavors and striking designs. Whether you\'re looking to try something new or simply enjoy a refreshing moment, Orbitz speaks to individuals who value creativity and originality in everything they do.', '', 'Figma Photoshop Illustrator CSS HTML', 'April 2024'),
(2, 'Jibek', 'Travel best friend', 'Target Audience', '', '', 'Imagine a mobile app that becomes every traveler\'s best friend, effortlessly guiding them to uncover hidden treasures and share their discoveries with the world. With Jibek, users can seamlessly navigate through local sights, from bustling markets to serene landmarks, all presented in a visually stunning interface designed to ignite their wanderlust.', 'The target audience of Jibek includes culturally curious individuals and global explorers interested in the rich heritage of the Silk Road and nomadic traditions. It appeals to history enthusiasts, travelers, and anyone fascinated by Kazakhstan\'s vibrant culture and the legacy of its ancient trade routes. Additionally, Jibek is tailored for those seeking to connect with authentic experiences and stories that highlight the beauty of interconnected cultures and the enduring spirit of exploration.', '', '', '', 'Figma Photoshop Illustrator', 'August 2022'),
(3, 'Design3D', 'Main goal of the website', 'UI/UX Strategies', 'Target Audience', 'Website Features to Engage Target Audience', 'The primary objective of the website is to drive high conversions by turning visitors into engaged clients. This will be achieved through a design that combines clarity and sophistication, offering an intuitive user journey that makes it easy to explore services, view portfolios, and take action. Clear call-to-action buttons, seamless navigation, and a polished interface will guide users naturally toward scheduling consultations or reaching out for inquiries.', 'The website’s user interface and experience will reflect a sophisticated and modern aesthetic. A clean, minimalist design with balanced color schemes and high-quality imagery will appeal to the target audience’s taste for luxury and professionalism. With a mobile-first approach, the site will cater to users who browse on-the-go, ensuring accessibility and responsiveness. The user journey will be streamlined, minimizing the steps required to access essential information or book services, creating a seamless and enjoyable experience.', 'The website is designed for middle and upper-middle-class couples, couples with kids, and single businessmen in Almaty who prioritize stylish, high-quality interiors. These users are looking for elegant, functional spaces that align with their unique lifestyles. Couples may seek to create harmonious living environments that reflect their shared aspirations, while families will prioritize designs that are both sophisticated and practical for daily life with children. Single businessmen, on the other hand, are likely to be drawn to minimalist, high-end interiors that resonate with their professional image and personal goals.', 'The website will showcase a carefully curated portfolio, presenting diverse projects tailored to the tastes and needs of the target audience. Interactive design tools, such as virtual room visualizers or style selectors, will allow users to explore options and visualize potential outcomes, enhancing engagement and trust. Additionally, customer testimonials and case studies will be prominently featured, creating a sense of credibility and inspiring confidence in the studio’s expertise.', '', 'Figma Photoshop Illustrator', 'November 2022'),
(5, 'H', 'e', 'l', 'l', 'o', 'World', 'Please', 'Work', 'Im begging', 'img21443.jpg', 'work', 'August 2077');

-- --------------------------------------------------------

--
-- Table structure for table users
--

CREATE TABLE users (
  id int NOT NULL,
  username varchar(125) NOT NULL,
  password varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table users
--

INSERT INTO users (id, username, password) VALUES
(1, 'alisheryant', '20AlisheR05@29AdiL06@');

--
-- Indexes for dumped tables
--

--
-- Indexes for table contact_form
--
ALTER TABLE contact_form
  ADD PRIMARY KEY (id);

--
-- Indexes for table media
--
ALTER TABLE media
  ADD PRIMARY KEY (media_id),
  ADD KEY projects_id (projects_id);

--
-- Indexes for table projects
--
ALTER TABLE projects
  ADD PRIMARY KEY (id);

--
-- Indexes for table users
--
ALTER TABLE users
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table contact_form
--
ALTER TABLE contact_form
  MODIFY id int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table media
--
ALTER TABLE media
  MODIFY media_id int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table projects
--
ALTER TABLE projects
  MODIFY id int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table users
--
ALTER TABLE users
  MODIFY id int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table media
--
ALTER TABLE media
  ADD CONSTRAINT projects_id FOREIGN KEY (projects_id) REFERENCES projects (id) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
