-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2019 at 08:46 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `19s2_g7`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_status`
--

CREATE TABLE `attendance_status` (
  `idAttend` int(11) NOT NULL,
  `stdId` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dayCheckName` date NOT NULL,
  `attendanceStatus` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `attendance_status`
--

INSERT INTO `attendance_status` (`idAttend`, `stdId`, `dayCheckName`, `attendanceStatus`, `subject_id`) VALUES
(6, '583020370-9', '2019-01-07', 'มา', 1),
(7, '583020330-1', '2019-01-07', 'ลา', 1),
(8, '593020403-1', '2019-01-07', 'มา', 1),
(9, '593020474-8', '2019-01-07', 'มา', 1),
(10, '593020423-5', '2019-01-07', 'มา', 1),
(11, '593020425-1', '2019-01-07', 'มา', 1),
(12, '593020437-4', '2019-01-07', 'มา', 1),
(13, '593020455-2', '2019-01-07', 'มา', 1),
(14, '593020459-4', '2019-01-07', 'มา', 1),
(15, '593020462-5	', '2019-01-07', 'มา', 1),
(16, '583020370-9', '2019-01-21', 'มา', 1),
(17, '583020330-1', '2019-01-21', 'มา', 1),
(18, '593020403-1', '2019-01-21', 'มา', 1),
(19, '593020474-8', '2019-01-21', 'มา', 1),
(20, '593020423-5', '2019-01-21', 'มา', 1),
(21, '593020425-1', '2019-01-21', 'มา', 1),
(22, '593020437-4', '2019-01-21', 'มา', 1),
(23, '593020455-2', '2019-01-21', 'มา', 1),
(24, '593020459-4', '2019-01-21', 'มา', 1),
(25, '593020462-5	', '2019-01-21', 'มา', 1),
(28, '593020403-1', '2019-01-28', 'มา', 1),
(29, '593020474-8', '2019-01-28', 'มา', 1),
(30, '593020423-5', '2019-01-28', 'ขาด', 1),
(31, '593020425-1', '2019-01-28', 'มา', 1),
(32, '593020437-4', '2019-01-28', 'มา', 1),
(33, '593020455-2', '2019-01-28', 'มา', 1),
(34, '593020459-4', '2019-01-28', 'มา', 1),
(35, '593020462-5	', '2019-01-28', 'ขาด', 1),
(36, '583020370-9', '2019-01-14', 'มา', 1),
(38, '593020403-1', '2019-01-14', 'มา', 1),
(39, '593020474-8', '2019-01-14', 'มา', 1),
(40, '593020423-5', '2019-01-14', 'มา', 1),
(41, '593020425-1', '2019-01-14', 'มา', 1),
(42, '593020437-4', '2019-01-14', 'มา', 1),
(43, '593020455-2', '2019-01-14', 'มา', 1),
(44, '593020459-4', '2019-01-14', 'มา', 1),
(45, '593020462-5	', '2019-01-14', 'มา', 1),
(56, '583020330-1', '2019-01-14', 'ลา', 1),
(57, '583020370-9', '2019-01-28', 'มา', 1),
(58, '583020330-1', '2019-01-28', 'มา', 1),
(70, '593021283-0', '2019-01-14', 'มา', 7),
(71, '593021284-8', '2019-01-14', 'มา', 7),
(72, '593020426-9', '2019-01-14', 'มา', 7),
(73, '593021286-4', '2019-01-14', 'มา', 7),
(74, '593020407-3', '2019-01-14', 'มา', 7),
(75, '593020428-5', '2019-01-14', 'มา', 7),
(76, '593020447-1', '2019-01-14', 'มา', 7),
(77, '593020450-2', '2019-01-14', 'มา', 7),
(78, '593020456-0', '2019-01-14', 'มา', 7),
(79, '593020464-1', '2019-01-14', 'ขาด', 7),
(80, '593020802-7', '2019-01-14', 'มา', 7),
(81, '593021283-0', '2019-01-21', 'มา', 7),
(82, '593021284-8', '2019-01-21', 'มา', 7),
(83, '593020426-9', '2019-01-21', 'มา', 7),
(84, '593021286-4', '2019-01-21', 'มา', 7),
(85, '593020407-3', '2019-01-21', 'มา', 7),
(86, '593020428-5', '2019-01-21', 'มา', 7),
(87, '593020447-1', '2019-01-21', 'มา', 7),
(88, '593020450-2', '2019-01-21', 'มา', 7),
(89, '593020456-0', '2019-01-21', 'มา', 7),
(90, '593020464-1', '2019-01-21', 'มา', 7),
(91, '593020802-7', '2019-01-21', 'มา', 7),
(92, '593021283-0', '2019-01-28', 'มา', 7),
(93, '593021284-8', '2019-01-28', 'มา', 7),
(94, '593020426-9', '2019-01-28', 'มา', 7),
(95, '593021286-4', '2019-01-28', 'มา', 7),
(96, '593020407-3', '2019-01-28', 'มา', 7),
(97, '593020428-5', '2019-01-28', 'มา', 7),
(98, '593020447-1', '2019-01-28', 'ขาด', 7),
(99, '593020450-2', '2019-01-28', 'มา', 7),
(100, '593020456-0', '2019-01-28', 'มา', 7),
(101, '593020464-1', '2019-01-28', 'มา', 7),
(102, '593020802-7', '2019-01-28', 'มา', 7);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `subjectName_Th` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `subjectName_En` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `section` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `Semester` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_code`, `subjectName_Th`, `subjectName_En`, `section`, `year`, `Semester`) VALUES
(1, '322371', 'วิศวกรรมซอฟต์แวร์', 'SOFTWARE ENGINEERING', '1', 2561, 2),
(2, '322391', 'ระเบียบวิธีวิจัย	', 'RESEARCH METHODOLOGY', '1', 2561, 2),
(3, '322492', 'สัมมนาทางวิทยาการคอมพิวเตอร์	', 'SEMINAR IN COMPUTER SCIENCE', '1', 2561, 1),
(4, '322327', 'ความมั่นคงระบบเครื่อข่ายคอมพิวเตอร์	', 'COMPUTER NETWORK SECURITY', '1', 2561, 1),
(5, 'SC002104', 'วิทยาศาสตร์กายภาพ', 'PHYSICAL SCIENCE', '1', 2561, 2),
(6, 'SC311004', 'การเขียนโปรแกรมเชิงวัตถุ', 'OBJECT-ORIENTED PROGRAMMING ', '1', 2561, 2),
(7, '322371', 'วิศวกรรมซอฟต์แวร์', 'SOFTWARE ENGINEERING', '2', 2561, 2),
(8, '322391', 'ระเบียบวิธีวิจัย	', 'RESEARCH METHODOLOGY', '2', 2561, 2),
(9, '322391', 'ระเบียบวิธีวิจัย	', 'RESEARCH METHODOLOGY', '3', 2561, 2),
(10, 'SC311004', 'การเขียนโปรแกรมเชิงวัตถุ', 'OBJECT-ORIENTED PROGRAMMING ', '2', 2561, 2),
(11, '322385', 'การประกันคุณภาพซอฟต์แวร์', 'SOFTWARE QUALITY ASSURANCE', '1', 2561, 1),
(12, '322385', 'การประกันคุณภาพซอฟต์แวร์', 'SOFTWARE QUALITY ASSURANCE', '2', 2561, 1),
(13, '322327', 'ความมั่นคงระบบเครื่อข่ายคอมพิวเตอร์', 'COMPUTER NETWORK SECURITY', '2', 2561, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `UID` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `stdId` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `count_CheckLogin` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  `Branch` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='ตารางข้อมูลของผู้ใช้';

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`UID`, `username`, `password`, `firstName`, `lastName`, `stdId`, `email`, `count_CheckLogin`, `Year`, `Branch`) VALUES
(1, 'chitsutha', 'chitsuthakku2019', 'อ.ดร.ชิตสุธา', 'สุ่มเล็ก', '-', 'chitsutha@kku.ac.th ', 0, 0, ''),
(2, '593021283-0', 'onvarathakoo2019', 'นางสาวอรวรา', 'ทาสระคู', '593021283-0', 'onvara.thasakoo@kkumail.com', 0, 3, 'CS'),
(3, '593020413-8', 'chaiwat413-8', 'ชัยวัฒน์', 'แก้วมุกดาสวรรค์', '593020413-8', 'k.chaiwat@kkumail.com', 0, 4, 'CS'),
(4, 'punhor1', 'punhorkku2019', 'ผศ.ดร.ปัญญาพล', 'หอระตะ', '-', 'punhor1@kku.ac.th', 0, 0, ''),
(5, '593021274-1', 'meytawut274-1', 'นายเมธวัฒน์', 'จงใจภักดิ์', '593021274-1', 'j_meytawut@kkumail.com', 0, 4, 'CS'),
(8, '593021286-4', 'anuparp2019', 'นายอานุภาพ', 'จันทศรี', '593021286-4', 'anuparp_j@kkumail.com', 0, 3, 'CS'),
(9, '593021284-8', 'atchara2019', 'นางสาวอัจฉรา', 'มณีพร', '593021284-8', 'atchara_m@kkumail.com', 0, 3, 'CS'),
(10, '593020426-9', 'thanakit2019', 'ธนกฤต', 'ชำกรมวัฒนกุล', '593020426-9', 'thanakit@kkumail.com', 0, 3, 'CS'),
(11, '583020370-9', 'apiwat2019', 'นายอภิวัฒน์', 'เมฆวัน', '583020370-9', '', 0, 4, 'CS'),
(12, '593020403-1', 'kanok2019', 'นางสาวกนกสุดา', 'ดีแล้ว', '593020403-1', '', 0, 3, 'CS'),
(13, '583020330-1', 'nuttapong2019', 'นายณัฎฐพงค์', 'รัตนศิริพรหม', '583020330-1', '', 0, 4, 'CS'),
(14, '593020425-1', 'thanat2019', 'นายธณัฐพงษ์', 'เค้ามาก', '593020425-1', '', 0, 3, 'CS'),
(15, '593020459-4', 'wasinee2019', 'นางสาววศินี', 'ชมชื่น', '593020459-4', '', 0, 3, 'CS'),
(16, '593020437-4', 'prapassorn2019', 'นางสาวประภัสสร', 'จันทราษี', '593020437-4', '', 0, 3, 'CS'),
(17, '593020462-5	', 'wilawan2019', 'นางสาววิลาวัณย์', 'ชินสงคราม', '593020462-5	', '', 0, 3, 'CS'),
(18, '593020474-8', 'uracha2019', 'นางสาวอุรชา', 'ภูดิฐวัฒนโชค', '593020474-8', '', 0, 3, 'CS'),
(19, '593020455-2', 'rattaphol2019', 'นายรัฐพล', 'กิจวิวัฒน์กุล', '593020455-2', '', 0, 3, 'CS'),
(20, '593020423-5', 'nitchakran2019', 'นางสาวณิชกานต์', 'ปัตลา', '593020423-5', '', 0, 3, 'CS'),
(21, '593020407-3', 'kunyakorn2019', 'นางสาวกัลยกร', 'พูลปัญญา', '593020407-3', '', 0, 3, 'CS'),
(22, '593020428-5', 'thunsita2019', 'นางสาวธัญสิตา', 'เคนโสม', '593020428-5', '', 0, 3, 'CS'),
(23, '593020447-1', 'putsorn2019', 'นางสาวพุทซ้อน', 'เสาร์วงค์', '593020447-1', '', 0, 3, 'CS'),
(24, '593020450-2', 'phuminth2019', 'นายภูมินทร์', 'ดวนขันธ์', '593020450-2', '', 0, 3, 'CS'),
(25, '593020456-0', 'ruengyod', 'นายเรืองยศ', 'ตรีมาศ', '593020456-0', '', 0, 3, 'CS'),
(26, '593020464-1', 'sarawut2019', 'นายศราวุธ', 'ราชจันดี', '593020464-1', '', 0, 3, 'CS'),
(27, '593020802-7', 'patnarin2019', 'นายภัทนรินทร์', 'สัมพันธะ', '593020802-7', '', 0, 3, 'CS');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `subject_id` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `roleID` int(11) NOT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`subject_id`, `UID`, `roleID`, `role`) VALUES
(1, 1, 1, 'อาจารย์'),
(7, 2, 2, 'นักศึกษา'),
(1, 3, 3, 'ผู้ช่วยสอน'),
(2, 3, 4, 'นักศึกษา'),
(6, 4, 5, 'อาจารย์'),
(6, 5, 6, 'ผู้ช่วยสอน'),
(5, 5, 7, 'นักศึกษา'),
(7, 8, 8, 'นักศึกษา'),
(7, 9, 9, 'นักศึกษา'),
(7, 10, 10, 'นักศึกษา'),
(1, 11, 11, 'นักศึกษา'),
(1, 12, 12, 'นักศึกษา'),
(1, 13, 13, 'นักศึกษา'),
(1, 14, 14, 'นักศึกษา'),
(1, 15, 15, 'นักศึกษา'),
(1, 16, 16, 'นักศึกษา'),
(1, 17, 17, 'นักศึกษา'),
(1, 18, 18, 'นักศึกษา'),
(1, 19, 19, 'นักศึกษา'),
(1, 20, 20, 'นักศึกษา'),
(7, 21, 21, 'นักศึกษา'),
(7, 22, 22, 'นักศึกษา'),
(7, 23, 23, 'นักศึกษา'),
(7, 24, 24, 'นักศึกษา'),
(7, 25, 25, 'นักศึกษา'),
(7, 26, 26, 'นักศึกษา'),
(7, 27, 27, 'นักศึกษา'),
(2, 4, 28, 'อาจารย์'),
(2, 1, 29, 'อาจารย์'),
(4, 1, 30, 'อาจารย์'),
(7, 1, 31, 'อาจารย์'),
(8, 1, 32, 'อาจารย์'),
(9, 1, 33, 'อาจารย์'),
(11, 1, 34, 'อาจารย์'),
(12, 1, 35, 'อาจารย์'),
(13, 1, 36, 'อาจารย์');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_status`
--
ALTER TABLE `attendance_status`
  ADD PRIMARY KEY (`idAttend`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`),
  ADD KEY `subject_code` (`subject_code`),
  ADD KEY `section` (`section`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`UID`),
  ADD KEY `stdId` (`stdId`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`roleID`,`subject_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `UID` (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `roleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `user_role_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`),
  ADD CONSTRAINT `user_role_ibfk_2` FOREIGN KEY (`UID`) REFERENCES `user_info` (`UID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
