-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 09:33 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10-yahiaalbghdadi-biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10-yahiaalbghdadi-biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10-yahiaalbghdadi-biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(6) NOT NULL,
  `author` varchar(30) NOT NULL,
  `publishDate` varchar(20) DEFAULT NULL,
  `publisher` varchar(40) DEFAULT NULL,
  `type` enum('book','CD','DVD') NOT NULL,
  `status` enum('available','reserved') NOT NULL,
  `authorFirstName` varchar(20) DEFAULT NULL,
  `authorLastName` varchar(20) DEFAULT NULL,
  `publisherName` varchar(30) DEFAULT NULL,
  `publisherAddress` varchar(50) DEFAULT NULL,
  `publisherSize` enum('big','medium','small') DEFAULT NULL,
  `image` varchar(30) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(130) DEFAULT NULL,
  `ISBNCode` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `author`, `publishDate`, `publisher`, `type`, `status`, `authorFirstName`, `authorLastName`, `publisherName`, `publisherAddress`, `publisherSize`, `image`, `title`, `description`, `ISBNCode`) VALUES
(1, 'Richard H. Thaler', '2008', 'James Daniel', 'book', 'available', 'Richard ', 'Thaler', 'Yale University Press', '302 Temple Street', '', 'product.png', 'Nudge: Improving Decisions About Health, Wealth, and Happiness', 'From the winner of the Nobel Prize in Economics, Richard H. Thaler, and Cass R. Sunstein: a revelatory look at how we make decisio', '9780300122237'),
(2, 'Chris MacLeod', '2016', 'Chris MacLeod', 'CD', 'available', 'Chris ', 'MacLeod', 'Chris MacLeod', 'Ontario, Canada.', 'small', 'product.png', 'The Social Skills Guidebook', 'You think your social life could be better. You’ve felt shy as long as you can remember. Your conversations have more awkward mome', '9780994980700'),
(3, 'Simon Sinek', '2009', 'Portfolio', 'book', 'reserved', 'Simon ', 'Sinek', NULL, 'Brentford, Middlesex, United Kingdom', 'medium', 'product.png', 'Start With Why: How Great Leaders Inspire Everyone to Take Action', 'Simon Sinek is leading a movement to build a world in which the vast majority of us are inspired by the work we do. Millions have ', '1-59184-280-8 '),
(4, 'Peter Thiel', '2014', '', 'DVD', 'available', 'Peter ', 'Thiel', 'Peter Parker', 'Wr. Str. 3, 2700 Wiener Neustadt', '', 'product.png', '[Zero to One: Notes on Startups, or How to Build the Future]', 'The great secret of our time is that there are still uncharted frontiers to explore and new inventions to create. In Zero to One,', '9780753555194'),
(5, 'Peter Thiel', '2000', 'Profile Books', 'book', 'available', 'Robert ', 'Greene', NULL, 'UK, London', 'small', 'product.png', 'The 48 Laws of Power', 'In the book that People magazine proclaimed “beguiling” and “fascinating,” Robert Greene and Joost Elffers have distilled three th', '1861972784'),
(6, 'Brian Tracy', '2011', 'Vanguard Press', 'book', 'available', 'Brian', 'Tracy', NULL, 'New York City', 'big', 'product.png', 'No Excuses!: The Power of Self-Discipline', 'Most people think success comes from good luck or enormous talent, but many successful people achieve their accomplishments in a s', '1593156324'),
(8, 'Peter Thiel', '2018', 'Amazon Digital Services LLC', 'CD', 'reserved', 'James', 'Williams', NULL, 'Seattle, WA, United States', 'big', 'product.png', 'How to Analyze People: Dark Psychology - Dark Secrets to Analyze and Influence Anyone Using Body Lan', 'If you’re tired of being manipulated, then there are ways that you can stop the control others have over you. Whether you’re being', '9781790876914'),
(9, 'Daniel James Hollins', '2019', 'Independently Published', 'DVD', 'reserved', 'Daniel ', 'Hollins', NULL, 'Chicago, Illinois', 'small', 'product.png', 'Dark Psychology Secret: The Essential Guide to Persuasion, Emotional Manipulation, Deception, Mind C', 'Whether you have been experiencing manipulation for years, or if this is something entirely new, psychological manipulation can be', '9781072739791'),
(10, 'Matthew Allen', '2004', 'Oxford University Press', 'DVD', 'available', ' Matthew ', 'Allen', NULL, 'Walton Street, Oxford, opposite Somerville College', 'big', 'product.png', 'Smart Thinking: Skills for Critical Understanding and Writing', 'Smart Thinking: Skills for Critical Understanding and Writing 2E is a practical step-by-step guide to improving skills in analysis', '9780195517330'),
(13, 'Ahmad Taktak', '2022', 'Ghiath Serri', 'book', 'available', NULL, NULL, NULL, 'Linzerstrasse', NULL, '61d5b597209e6.jpg', 'HOW TO SPELL THE CODE', '\"HOW TO SPELL THE CODE\" written by Junior Ahmad Taktak and published by Senior Ghiath Serri.', '2304875232'),
(16, 'Ahmad Taktak', '2011', 'CodeFactory', 'book', 'available', NULL, NULL, NULL, 'Volkersdorf', NULL, '61d847d91398c.jpeg', 'Debugging is important', '\"Debugging is important\" Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore', '32875325908'),
(17, 'Ahmad Taktak', '2023', 'Disney', 'CD', 'reserved', NULL, NULL, NULL, 'USA, New York', NULL, '61d84b9ed6539.jpg', 'My Coding Journey', '\"My Coding Journey\" Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repu', '109237599');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
