-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2024 at 11:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bot`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(100) NOT NULL,
  `queries` varchar(2000) NOT NULL,
  `replies` varchar(2900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'hi', 'hello...how can I help you?'),
(2, 'how are you,how are you?', 'fine'),
(3, 'hi,hello,hola,hii,hey,helloo,heloo,HI,Hi,Ayy,HELLO,halo', 'Hello'),
(4, 'what is your name,what is your name?,name,your name,what\'s your name,what\'s your name?', 'Oh!I don\'t have my personal name.You can call me BOT!!!I am here to help you?'),
(9, 'good morning,Good morning,Good Morning,GM,gm', 'good morning!how can I assist you'),
(10, 'good night,Good night,Good Night,gn,GN', 'Good night! If you have any more questions feel to reach out.sleep well!'),
(11, 'who are you,Who are you,who are you?', 'I am chatbot!How can I help you today.'),
(12, 'how are you?,how are you,How are you?,How are you', 'I don\'t have feelings but I am here to help you.'),
(13, 'what do i do in future,What do i do in future?', 'Planning for the future depends on your goals and interests. Consider setting specific goals acquiring relevant skills and staying open to new opportunities. If you have a specific area in mind feel free to ask for advice!'),
(14, 'what do i do after BCA,BCA,', 'Bachelor of computer applications,After completing your BCA (Bachelor of Computer Applications) you have various options. You could pursue further studies like an MCA (Master of Computer Applications) for in-depth knowledge or explore job opportunities in areas like software development web development data analysis or database management. Consider your interests and career goals when making your decision.'),
(15, 'what is BCA', 'BCA stands for Bachelor of Computer Applications. It is an undergraduate academic degree in computer science and information technology. BCA programs typically cover areas such as programming languages  software development  database management and computer networks. Completing a BCA can open doors to various career paths in the field of information technology.'),
(16, 'fybca subjets,which are subject for fybca,FYBCA subjects,fy bca subjects,FY BCA subjects', 'Depending on the university or educational institution.common subjects often include foundational courses in computer science and information technology. These may include:  1.Programming Fundamentals: Introduction to programming languages like C  or C++  or Java. 2.Mathematics: Basic mathematical concepts relevant to computer science. 3.Computer Organization and Architecture: Understanding the structure of computers and their components. 4.Database Management System: Basics of database design and management. 5.Computer Networks: Introduction to computer networking concepts. 6.Web Development Basics: Basics of web technologies or  HTML or CSS etc. '),
(17, 'which are subjects for sybca,sybca subjects,SYBCA subjects,SY BCA subjets,sy bca subjests', 'The subjects taught in the second year of a BCA. Some common subjects may include:  1.Data Structures: Advanced study of data organization and algorithms. 2.Object-Oriented Programming: Further exploration of object-oriented concepts using languages like Java or C++. 3.Operating Systems: Understanding the principles and functions of operating systems. 4.Software Engineering: Introduction to software development methodologies and practices. 5.Computer Graphics: Basics of computer graphics and visualization. 6.Internet Programming: Learning about web development server-side scripting etc. It\'s crucial to refer to the specific curriculum of the university or institute. '),
(18, 'which are subjects for tybca,tybca subjects', 'The subjects taught in the third year of a BCA. Some common subjects may include:  1.Advanced Database Management System: In-depth study of advanced database concepts and technologies. 2.Computer Security: Understanding principles and practices of computer security. 3.Mobile Application Development: Introduction to developing applications for mobile platforms. 4.Cloud Computing: Basics of cloud computing and its applications. 5.Artificial Intelligence: Introduction to AI concepts and techniques. 6.Project Work: Often includes a significant project where students apply their knowledge and skills to real-world scenarios. '),
(19, 'how to study,How to study', 'To study effectively create a schedule. break down topics  .use active learning methods like summarizing and teaching the material and minimize distractions from mobile phones or TV  and take regular breaks to maintain focus.'),
(20, 'have you eat,Have you eat', 'I don\'t eat since I\'m a computer program but I\'m here to help with any questions or information you need!'),
(21, 'ok,k,okay,Ok,OK', 'If you have any more questions feel free to let me know!'),
(22, 'Thank you,Thanks,thank you,thanks,tnx,thnx,Ty,thank u', 'you\'re welcome! If you have more questions feel free to ask.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'gayatri bhausaheb thorat', 'gayatrithorat03@gmail.com', '$2y$10$nYhvsWDqlkJGZfW8Lg1LBO./P4rTgL8WEhD3J5NI9NFTwtHYS96oG'),
(2, 'vaishnavi dhondibhau tamnar', 'vaishutamnar007@gmail.com', '$2y$10$ttt37p7YdpV0roWe9tlVEu8ShzCg3r4p3c1eQv9eD79NzYcOk0Ste'),
(3, 'Thorat Nisha Balasaheb', 'nishathorat123455@gmail.com', '$2y$10$wmMMsAFgQvCvxeB8sMLHUOiLN0oU5jZsplNTiAH2bvgGiy9alWo.O');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
