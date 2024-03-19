-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: fdb1031.biz.nf
-- Generation Time: Mar 18, 2024 at 11:30 AM
-- Server version: 8.0.32
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4436081_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `captains`
--

CREATE TABLE `captains` (
  `id` int NOT NULL,
  `captainName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `captains`
--

INSERT INTO `captains` (`id`, `captainName`) VALUES
(1, 'Captain 1'),
(2, 'Captain 2');

-- --------------------------------------------------------

--
-- Table structure for table `crewmembers`
--

CREATE TABLE `crewmembers` (
  `id` int NOT NULL,
  `crewMemberName` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `crewmembers`
--

INSERT INTO `crewmembers` (`id`, `crewMemberName`) VALUES
(1, 'Crew Member 1'),
(2, 'Crew Member 2');

-- --------------------------------------------------------

--
-- Table structure for table `divemasters`
--

CREATE TABLE `divemasters` (
  `id` int NOT NULL,
  `divemasterName` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `divemasters`
--

INSERT INTO `divemasters` (`id`, `divemasterName`) VALUES
(1, 'Dive Master 1'),
(2, 'Dive Master 2');

-- --------------------------------------------------------

--
-- Table structure for table `doc0`
--

CREATE TABLE `doc0` (
  `id` int NOT NULL,
  `userID` int NOT NULL,
  `participantname` varchar(255) NOT NULL,
  `participantSignature` longtext NOT NULL,
  `participantDate` date NOT NULL,
  `parentSignature` longtext NOT NULL,
  `parentDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doc1`
--

CREATE TABLE `doc1` (
  `id` int NOT NULL,
  `userID` int NOT NULL,
  `divemaster` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `crewMember` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `captain` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `vesselName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `participantname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `participantSignature` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `participantDate` date NOT NULL,
  `parentSignature` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `parentDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doc2`
--

CREATE TABLE `doc2` (
  `id` int NOT NULL,
  `userID` int NOT NULL,
  `instructorName` varchar(25) NOT NULL,
  `resortName` varchar(25) NOT NULL,
  `participantname` varchar(25) NOT NULL,
  `participantSignature` longtext NOT NULL,
  `participantDate` date NOT NULL,
  `parentSignature` longtext NOT NULL,
  `parentDate` date NOT NULL,
  `diverAccidentInsurance` varchar(3) NOT NULL,
  `policyNumber` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doc3`
--

CREATE TABLE `doc3` (
  `id` int NOT NULL,
  `userID` int NOT NULL,
  `instructorName` varchar(25) NOT NULL,
  `resortName` varchar(25) NOT NULL,
  `participantname` varchar(25) NOT NULL,
  `participantSignature` longtext NOT NULL,
  `participantDate` date NOT NULL,
  `parentSignature` longtext NOT NULL,
  `parentDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doc4`
--

CREATE TABLE `doc4` (
  `id` int NOT NULL,
  `userID` int NOT NULL,
  `q1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `q1_1` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `q1_2` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `q1_3` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `q1_4` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `q1_5` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `q2` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q2_1` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q2_2` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q2_3` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q2_4` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q3` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q4` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q4_1` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q4_2` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q4_3` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q4_4` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q5` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q6` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q6_1` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q6_2` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q6_3` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q6_4` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q6_5` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q7` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q7_1` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q7_2` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q7_3` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q7_4` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q8` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q8_1` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q8_2` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q8_3` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q8_4` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q8_5` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q9` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q9_1` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q9_2` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q9_3` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `q9_4` varchar(3) NOT NULL,
  `q9_5` varchar(3) NOT NULL,
  `q9_6` varchar(3) NOT NULL,
  `q10` varchar(3) NOT NULL,
  `medicalUserID` int NOT NULL,
  `medicalExaminerSignatureData` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `medicalExaminerSignatureDate` date NOT NULL,
  `status` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `participantSignatureData` longtext NOT NULL,
  `participantDate` date NOT NULL,
  `parentSignatureData` longtext NOT NULL,
  `parentDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `id` int NOT NULL,
  `instructorName` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`id`, `instructorName`) VALUES
(1, 'Instructor 1'),
(2, 'Instructor 2');

-- --------------------------------------------------------

--
-- Table structure for table `medical_examiner`
--

CREATE TABLE `medical_examiner` (
  `id` int NOT NULL,
  `name` varchar(25) NOT NULL,
  `degree` varchar(60) NOT NULL,
  `clinic` varchar(60) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `stamp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `medical_examiner`
--

INSERT INTO `medical_examiner` (`id`, `name`, `degree`, `clinic`, `address`, `phone`, `email`, `password`, `stamp`) VALUES
(1, 'Dr. Suersh Hemal Perera', 'Medical Degree University of China ', 'Maldives Diving Medical Center', 'Ministry of Health,\r\nH.Roshani Building ,\r\nSosunmagu,\r\nMale\' , Maldives', '+960 3328887', 'moh@health.gov.mv', '', ''),
(2, 'Malith Buddhika Medical', 'Medical Degree', 'test Clinic', 'Test Clinic Address', '+324827947', 'Malith@test.com', 'Malith123', ''),
(3, 'Kamal', 'Degree', 'Click name', 'Ahahhahshh', '9292828282', 'test@gmail.com', '1234', ''),
(4, 'Harissa ', 'Hahaha', 'Jajaj', 'Slakall', '192929299', '1@gmail.com', '1234', 'IMG_3358.jpeg'),
(5, 'Kamal Doctor', 'Test degree', 'Test Clinic', 'ksdakssd Address', '291739127', 'ksdkh@jh.com', '123', ''),
(6, 'Malith Buddhika', 'University of Colombo MBA', 'Male clinic', 'Ajajaja', '28282882', 'test@gmail.com', '123456', '');

-- --------------------------------------------------------

--
-- Table structure for table `resort`
--

CREATE TABLE `resort` (
  `id` int NOT NULL,
  `resortName` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `resort`
--

INSERT INTO `resort` (`id`, `resortName`) VALUES
(1, 'Dhigurah Beach Hotel');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `passport_number` varchar(20) NOT NULL,
  `birthday` date DEFAULT NULL,
  `language` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `name`, `passport_number`, `birthday`, `language`) VALUES
(77, 'Pukkkks', 'Xbxhx', '2024-02-17', 'english'),
(78, 'Nxnnzj', 'Bdhs', '2024-02-23', 'english'),
(79, 'Saman Perera', '123456', '2024-02-24', 'english'),
(80, 'Nimesh kalpna', '123456', '2024-02-24', 'english'),
(81, 'Malith Bandara', '12345', '2024-02-15', 'english'),
(82, 'Kamal', 'jsjs', '2024-02-23', 'english'),
(83, 'Hdh', 'idd', '2024-02-17', 'english'),
(84, 'asdasdd322', 'sdfsdf', '2024-02-25', 'english'),
(85, 'askdnlkjdqwj', '23242423', '2024-02-10', 'english'),
(86, 'Msmsn', 'Shsj', '2024-02-14', 'english'),
(87, 'Kamala ', 'sad2s3', '2024-02-24', 'english'),
(88, 'BHjjJ', 'Isisi', '2024-02-24', 'english'),
(89, 'malitdh', 'jbebjwkefkl1', '2024-02-14', 'english'),
(90, 'Sandeeka perera', '182828', '2024-02-10', 'english'),
(91, 'Lalalala', 'Ksisis', '2024-02-24', 'english'),
(92, 'Uuuuuuuuu', 'Uuuuuu', '2024-02-24', 'english'),
(93, 'sdasdas', 'asdasdasdas', '2024-02-16', 'english'),
(94, 'Isisjsjshaj', 'Jsjshsh', '2024-02-24', 'english'),
(95, 'Ksjsjs', 'Jsjsj', '2024-02-17', 'english'),
(96, 'Kamal Kaa ', '21e2dd2', '2024-02-23', 'english'),
(97, 'Hxjdjd', 'Shhshs', '2024-02-24', 'english'),
(98, 'Hhxhdj', 'Isisisii', '2024-02-23', 'english'),
(99, 'ssdsadasd', 'asdasdasdasd', '2024-03-02', 'english'),
(100, 'kdjfvlkdhfl;adj', 'sdfsdfs', '2024-02-16', 'english'),
(101, 'Hshajjaus', 'Hdhdh', '2024-02-16', 'english'),
(102, 'shdjhas', 'jbfjj', '2024-02-15', 'english'),
(103, 'Eranga', 'N6998601', '1997-06-29', 'english'),
(104, 'Kamal Niroshan Perera', '2618681239N', '1992-04-16', 'english'),
(105, 'Gagan Poudel', '08711087', '1992-05-24', 'english'),
(106, 'Sandeeka Perera', '1238012380V', '1993-04-14', 'english'),
(107, 'hdhdh', 'ahdkhd', '2024-03-21', 'english'),
(108, 'Saman Kumara', '63627nn', '2024-03-31', 'english'),
(109, 'sdasda', 'sdasdasd', '2024-03-17', 'english'),
(110, '123123', '333', '2024-03-24', 'english'),
(111, 'sdasda3243', 'sdasdasd232', '2024-03-17', 'english'),
(112, 'Kamal Suba', '28282', '2024-03-23', 'english'),
(113, 'Hshshhshs', 'Jshshs', '2024-03-24', 'english'),
(114, 'hjoihweroi', '234234rew', '2024-03-15', 'english'),
(115, 'hjoihweroi', '234234rew33', '2024-03-15', 'english'),
(116, 'dalkjdlasjdlj', 'aupdoea', '2024-03-16', 'english'),
(117, 'sdfsdf', 'fsfeeeee', '2024-03-16', 'english'),
(118, 'Kasasd', 'ad233', '2024-03-31', 'english'),
(119, 'Kasasd', 'ad2333', '2024-03-31', 'english'),
(120, 'skjlsfjlsdkjf', 'kfjsldfj', '2024-03-16', 'english'),
(121, 'skjlsfjlsdkjf', 'kfjsldfjjhj', '2024-03-16', 'english'),
(122, 'skjlsfjlsdkjf', 'kfjsldfjjhjee', '2024-03-16', 'english'),
(123, '3242342', 'erefer', '2024-03-17', 'english'),
(124, 'aksjhdksadh', 'sjkdfhl2lj', '2024-03-16', 'english'),
(125, 'aksjhdksadh', 'sjkdfhl2ljjhkj', '2024-03-16', 'english'),
(126, 'aksjhdksadh', 'sjkdfhl2ljjhkjdsfds', '2024-03-16', 'english'),
(127, 'aksjhdksadh', 'jhgjhsjkdfhl2ljjhkjd', '2024-03-16', 'english'),
(129, 'ertert', '42werw4rw', '2024-03-16', 'english'),
(130, 'ertertsdfsd', '42werw4rwsdfse', '2024-03-16', 'english'),
(131, 'ertertsdfsddfsdf', '42werw4rwsdfsesdfsdf', '2024-03-16', 'english'),
(132, '3sdfw3s', 'sewfseffe', '2024-03-15', 'english'),
(133, 'mskfh83nl', '89309273h', '2024-03-19', 'english'),
(134, 'dsdfsmskfh83nl', '89309273hsdfsdf', '2024-03-19', 'english'),
(135, 'dsdfsmskfh83sdfsnl', '89309sdfse', '2024-03-19', 'english'),
(136, 'sdfsdgdr', 'w3sfsr5rwd', '2024-03-15', 'english'),
(137, 'Malith Bandara', '82919388N', '2024-03-24', 'english'),
(138, 'sadi', '323werwer', '2024-03-14', 'english'),
(139, 'jjjjj', 'sadlaksjdl', '2024-03-30', 'english'),
(140, 'Sumal', 'N2837292', '2024-03-23', 'english'),
(141, 'ewer', '2423', '2024-03-23', 'english'),
(142, 'dsfsd', '3242', '2024-03-26', 'english'),
(143, 'eeeee', 'sds', '2024-03-10', 'english'),
(144, 'yyfg', '43', '2024-04-02', 'english'),
(145, 'we3fsdf', '3dwd3', '2024-03-23', 'english'),
(146, 'dds', 'sdsds', '2024-03-15', 'english'),
(147, 'fsjfdgskjdfgk', '283dhdh', '2024-03-26', 'english'),
(148, 'sdasdad44', '534', '2024-03-09', 'english'),
(149, 'ttttt', '3444', '2024-03-22', 'english'),
(150, 'kjhkhksjhfksd', 'dd', '2024-03-29', 'english'),
(151, 'Malith Buddhika', 'N7263528', '1993-03-13', 'english'),
(152, 'Kamal Sumal', '2121241N', '2024-03-14', 'english'),
(153, 'jsljalsdjlasdj', '23iselkjl', '2024-03-15', 'english'),
(154, 'jsljalsdjlasdj', 'dsds23iselkjl', '2024-03-15', 'english'),
(155, 'Kamal Pkk', 'sd2easd', '2024-03-22', 'english'),
(156, 'ljflsdhfldsh', 'sdfsf', '2024-03-06', 'english'),
(157, 'Sadi ', '2727', '2024-03-23', 'english'),
(158, 'kamal perera', '3w4dkhjs4', '2024-03-07', 'english'),
(159, 'kjhkdahskjdhaskd', 'ssdfsdf', '2024-03-22', 'english'),
(160, 'Saman Kumara', '727361819N', '2024-03-15', 'english'),
(161, 'sdjalshdl', 'kahdlashd', '2024-03-22', 'english'),
(162, 'ihflshdl', 'lsdhfls', '2024-02-28', 'english'),
(163, 'fwerwe', 'werwe', '2024-03-15', 'english'),
(164, 'mlkjflskdf', '34324', '2024-03-14', 'english'),
(165, 'ddd', 'asdasd33d', '2024-03-21', 'english'),
(166, 'Malith Buddhika Bandara', '123456', '2024-03-23', 'english'),
(167, 'Hahajaj', '456', '2024-03-24', 'english'),
(169, '123456', '123456', '2024-03-13', 'english'),
(170, 'Ffff', '11111', '2024-03-12', 'english'),
(171, 'Ccffcc', '355', '2024-03-22', 'english'),
(172, 'Kamal Jayasuriya Perera', 'N92034802', '1991-03-14', 'english'),
(173, 'Subash Perera', 'N827372929', '1961-12-07', 'english'),
(174, 'Kamamall', 'nwowksk', '2024-03-31', 'english'),
(175, 'Sadi', '272773', '2024-03-23', 'english'),
(176, 'Ddd', 'Ff', '2024-03-14', 'english'),
(177, 'wedfsfs', '23424', '2024-03-16', 'english'),
(178, 'kdfkshf', 'w32wf', '2024-03-20', 'english'),
(179, 'Kakama', 'Ydydy', '2024-03-30', 'english'),
(180, 'Hxhdjd', 'Hdhd', '2024-03-23', 'english'),
(181, 'Hahahs', '92827', '2024-03-23', 'english'),
(182, 'Hhshhssh', '82827', '2024-03-24', 'english'),
(183, 'Hhshhssh', '82827', '2024-03-24', 'english'),
(184, 'Hshsh', 'Iudididuu', '2024-03-17', 'english'),
(185, 'Msksmsjs', 'Hshsh', '2024-03-23', 'english'),
(186, 'Hbxhs', 'Bdhd', '2024-03-24', 'english'),
(187, 'qwdwdqd', 'wqdqwdq', '2024-03-16', 'english'),
(188, 'rferfe', 'ergegerg', '2024-03-24', 'english'),
(189, 'Kakama', '123', '2024-03-23', 'english'),
(190, 'Kalindu Kanchana', 'N827527', '2007-03-11', 'english'),
(191, 'kjkljhasdfhaporig[oi', 'kjdnfkdsnksd', '2024-03-16', 'english'),
(192, 'kjkghqe9hkrakf', 'dfdlkfj', '2024-03-19', 'chinese'),
(193, 'Saman perera', '2827362828', '1974-03-11', 'english'),
(194, 'Jzjdjd', 'shss', '1990-03-23', 'english'),
(195, 'Bzhzj', 'zjz', '2024-03-30', 'english'),
(196, 'sdfsf3vge4kasdfkjh39w', 'iauhdkq2kjs92o', '2024-03-15', 'english'),
(197, 'asjkdnaksh', 'KLSDLADL', '2024-03-23', 'english'),
(198, 'asjkdnakshsdsd', 'KLSDLADL', '2024-03-23', 'chinese'),
(199, 'rferfe', 'rfre', '0000-00-00', 'english'),
(200, 'rerfr', 'erferfer', '2024-03-16', 'chinese'),
(201, 'Shshshhs', 'Ysysysyysy', '2024-03-30', 'chinese'),
(202, 'sdsfds', 'sdfsdfsd', '2024-03-01', 'chinese'),
(203, 'fddgdfgd', 'fgdfgdfgdfg', '2024-03-16', 'english'),
(204, 'sdsdfsdfsfsdfsdf', 'sdfsdf', '2024-03-17', 'chinese'),
(205, 'sdsdfsdfsdf', 'sdsdfsdfsdfs', '0000-00-00', 'chinese'),
(206, 'Malidtu', 'N192729020', '2023-12-14', 'chinese'),
(207, 'Huvoycoycyiv', 'Yf ur ur urc', '2024-03-23', 'chinese'),
(208, 'Jsjdjdjs', 'hshshdh', '2024-02-15', 'chinese'),
(209, 'Ddjdj', 'hddjh', '2024-03-23', 'chinese'),
(210, 'sdfsfs', 'sdfsd', '2024-03-10', 'english'),
(211, 'dfewd3sdfsdf', 'asasasf', '2024-03-20', 'chinese'),
(212, 'sdskjdbfkj', 'sdfsdf', '2024-03-12', 'chinese'),
(213, 'esf', 'sefsef', '2024-03-14', 'chinese'),
(214, 'Lal Kulathunga Kk', 'N91638292', '0000-00-00', 'chinese'),
(215, 'Kamal Santha Perera ', 'N92837299', '1986-01-16', 'chinese'),
(216, 'JJsjajjja', 'bbzhnzjz', '2024-03-30', 'english'),
(217, 'Kauhjak', 'Hahshsk', '2024-03-31', 'chinese'),
(218, 'dfgdfgdfgd', 'dfgdfgdfgdfg', '2024-03-22', 'english'),
(219, 'asdas445243', 'saadasd', '2024-03-22', 'english'),
(220, 'dsfsdf', 'sdfsdf', '0000-00-00', 'english'),
(221, 'jhbsjhsdgjfhgdsjhfg', 'sfsdfasd', '2024-03-20', 'english'),
(222, 'jksdjfhaksdjhf', 'sdkjfhklasdhfkas', '2024-03-22', 'english'),
(223, 'asdasdasdasdasdwwsa', 'dwasdasd', '2024-03-05', 'english'),
(224, 'Jajsgggh', 'hshshsjskk', '2024-03-23', 'chinese'),
(225, 'Jajsgggh', 'hshshsjskk', '2024-03-23', 'chinese'),
(226, 'Jsjs', 'xxh', '2024-03-21', 'chinese'),
(227, 'Hshshs', 'Jsusj', '0000-00-00', 'chinese'),
(228, 'Sussh', '1234', '2024-03-22', 'chinese'),
(229, 'hellp', '222', '2024-03-20', 'chinese'),
(230, 'kjninijn', 'ininijn', '2022-10-11', 'english'),
(231, 'dddd', 'sds', '2024-03-25', 'english'),
(232, 'fvgdfgd', 'dfgdfg', '2024-03-08', 'english'),
(233, 'gfggsdfg4rger', 'dfdsfgdfsg', '2024-03-14', 'english'),
(234, 'Makakakakaka', 'asdasdasdawasdas', '2024-03-20', 'english'),
(235, 'asdasdasda222', 'sdasd22', '2024-03-08', 'english'),
(236, 'saaws332323', 'sdfdsfsdf', '2024-03-09', 'english'),
(237, 'adwsef3w3f23', 'wefwefwefwe', '2024-03-14', 'english'),
(238, 'sdkjbdfkasdhjfk', 'fsldkjlkdjlsdkjf', '2024-03-15', 'english'),
(239, 'dfs3seffsdfs', 'sdfsdfsd', '2024-03-10', 'english'),
(240, 'sdcscsdcsdcsdsdc', 'dcsdcsd', '2024-03-03', 'english'),
(241, 'Bsbshhhshs', 'Hshahahhz', '2024-03-22', 'chinese'),
(242, 'daksdhlkh21lh', 'sdfcsdsdf', '2024-03-21', 'english'),
(243, 'Kamal', 'N123', '2024-03-22', 'english'),
(244, 'Mia Kalifa', 'N696969696', '2024-03-23', 'english'),
(245, 'Jsjsjsjjsjs', 'Jsjsn n', '2024-03-30', 'chinese'),
(246, 'kalkakslask', 'dssdlkjflsdf', '2024-03-07', 'english'),
(247, 'kjdhnkadhfkjladhfklajh', 'sdkjhskdfsdf', '2024-03-07', 'english'),
(248, 'hkhkhkhk', 'jhjhkhk', '2024-03-21', 'chinese'),
(249, 'Udawaththage Malith Buddhika Bandara', 'N927362920', '1993-03-13', 'english'),
(250, 'Makalaallala', 'asdasdasdasdas', '2024-03-14', 'english'),
(251, 'kfjlkjfdfgkjdfshgksjdfh', 'dkjslkdjflsdkjflsdjf', '2024-02-28', 'chinese'),
(252, 'jifhdsjfhgvsdfhg', 'fkdfkjsdfksdf', '2024-03-13', 'chinese'),
(253, 'Hhahhahaha', 'M123', '2024-03-23', 'chinese');

-- --------------------------------------------------------

--
-- Table structure for table `vessels`
--

CREATE TABLE `vessels` (
  `id` int NOT NULL,
  `vesselName` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vessels`
--

INSERT INTO `vessels` (`id`, `vesselName`) VALUES
(1, 'Ship 1'),
(2, 'Ship 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `captains`
--
ALTER TABLE `captains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crewmembers`
--
ALTER TABLE `crewmembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divemasters`
--
ALTER TABLE `divemasters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc0`
--
ALTER TABLE `doc0`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc1`
--
ALTER TABLE `doc1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc2`
--
ALTER TABLE `doc2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc3`
--
ALTER TABLE `doc3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc4`
--
ALTER TABLE `doc4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_examiner`
--
ALTER TABLE `medical_examiner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resort`
--
ALTER TABLE `resort`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vessels`
--
ALTER TABLE `vessels`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `captains`
--
ALTER TABLE `captains`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `crewmembers`
--
ALTER TABLE `crewmembers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `divemasters`
--
ALTER TABLE `divemasters`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doc0`
--
ALTER TABLE `doc0`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `doc1`
--
ALTER TABLE `doc1`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doc2`
--
ALTER TABLE `doc2`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doc3`
--
ALTER TABLE `doc3`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doc4`
--
ALTER TABLE `doc4`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medical_examiner`
--
ALTER TABLE `medical_examiner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `resort`
--
ALTER TABLE `resort`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT for table `vessels`
--
ALTER TABLE `vessels`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
