-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5332
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for university
CREATE DATABASE IF NOT EXISTS `university` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `university`;

-- Dumping structure for table university.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `adm_id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`adm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table university.admin: ~0 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`adm_id`, `username`, `password`) VALUES
	('aid01', 'aus01', 'apw01');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table university.course
CREATE TABLE IF NOT EXISTS `course` (
  `sbj_id` varchar(255) NOT NULL,
  `t_id` varchar(255) NOT NULL,
  `sec_id` varchar(255) NOT NULL,
  `prereqisite` varchar(255) NOT NULL DEFAULT '',
  KEY `course_ibfk_1` (`sbj_id`),
  KEY `course_ibfk_2` (`t_id`),
  CONSTRAINT `course_ibfk_1` FOREIGN KEY (`sbj_id`) REFERENCES `subject` (`sbj_id`) ON UPDATE CASCADE,
  CONSTRAINT `course_ibfk_2` FOREIGN KEY (`t_id`) REFERENCES `teacher` (`t_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table university.course: ~6 rows (approximately)
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` (`sbj_id`, `t_id`, `sec_id`, `prereqisite`) VALUES
	('01418120', 'D1414', '200', '3'),
	('01418231', 'D1415', '200', '3'),
	('01418116', 'D1111', '200', '-'),
	('01418116', 'D1234', '201', '-'),
	('01418120', 'D1111', '200', '-');
/*!40000 ALTER TABLE `course` ENABLE KEYS */;

-- Dumping structure for table university.student
CREATE TABLE IF NOT EXISTS `student` (
  `std_id` varchar(255) NOT NULL,
  `std_email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `line_id` varchar(255) NOT NULL,
  PRIMARY KEY (`std_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table university.student: ~2 rows (approximately)
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` (`std_id`, `std_email`, `name`, `faculty`, `department`, `line_id`) VALUES
	('5910450468', 'bannavith.k@ku.th', 'Bannavith KHUHAPREMA', 'Science', 'Computer Science', 'line_brightbright'),
	('5910451081', 'navin.lu@ku.th', 'Navin LUANGTHONGKUM', 'Science', 'Computer Science', 'line_boatboat');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;

-- Dumping structure for table university.student_bhv
CREATE TABLE IF NOT EXISTS `student_bhv` (
  `std_id` varchar(255) NOT NULL,
  `sbj_id` varchar(255) NOT NULL,
  `t_id` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `bhv_info` varchar(255) NOT NULL DEFAULT '',
  `hlt_info` varchar(255) NOT NULL DEFAULT '',
  `bhv_score` int(11) NOT NULL DEFAULT '0',
  KEY `student_bhv_ibfk_1` (`sbj_id`),
  KEY `student_bhv_ibfk_2` (`t_id`),
  KEY `student_bhv_ibfk_3` (`std_id`),
  CONSTRAINT `student_bhv_ibfk_1` FOREIGN KEY (`sbj_id`) REFERENCES `subject` (`sbj_id`) ON UPDATE CASCADE,
  CONSTRAINT `student_bhv_ibfk_2` FOREIGN KEY (`t_id`) REFERENCES `teacher` (`t_id`) ON UPDATE CASCADE,
  CONSTRAINT `student_bhv_ibfk_3` FOREIGN KEY (`std_id`) REFERENCES `student` (`std_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table university.student_bhv: ~3 rows (approximately)
/*!40000 ALTER TABLE `student_bhv` DISABLE KEYS */;
INSERT INTO `student_bhv` (`std_id`, `sbj_id`, `t_id`, `semester`, `bhv_info`, `hlt_info`, `bhv_score`) VALUES
	('5910451081', '01418116', 'D1111', 1, '', '', 0),
	('5910451081', '01418116', 'D1111', 1, '', '', 0),
	('5910451081', '01418120', 'D1111', 1, '', '', 0);
/*!40000 ALTER TABLE `student_bhv` ENABLE KEYS */;

-- Dumping structure for table university.student_class
CREATE TABLE IF NOT EXISTS `student_class` (
  `std_id` varchar(255) NOT NULL,
  `sbj_id` varchar(255) NOT NULL,
  `sec_id` varchar(255) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `mid_score` varchar(50) NOT NULL DEFAULT '0',
  `final_score` varchar(50) NOT NULL DEFAULT '0',
  `total_score` double NOT NULL DEFAULT '0',
  `grade` varchar(255) NOT NULL DEFAULT 'N',
  KEY `student_class_ibfk_1` (`std_id`),
  KEY `student_class_ibfk_2` (`sbj_id`),
  CONSTRAINT `student_class_ibfk_1` FOREIGN KEY (`std_id`) REFERENCES `student` (`std_id`) ON UPDATE CASCADE,
  CONSTRAINT `student_class_ibfk_2` FOREIGN KEY (`sbj_id`) REFERENCES `subject` (`sbj_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table university.student_class: ~0 rows (approximately)
/*!40000 ALTER TABLE `student_class` DISABLE KEYS */;
INSERT INTO `student_class` (`std_id`, `sbj_id`, `sec_id`, `semester`, `mid_score`, `final_score`, `total_score`, `grade`) VALUES
	('5910451081', '01418116', '200', '1', '0', '0', 0, 'N'),
	('5910451081', '01418120', '200', '1', '0', '0', 0, 'N');
/*!40000 ALTER TABLE `student_class` ENABLE KEYS */;

-- Dumping structure for table university.subject
CREATE TABLE IF NOT EXISTS `subject` (
  `sbj_id` varchar(255) NOT NULL,
  `sbj_name` varchar(255) NOT NULL,
  `credit` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  PRIMARY KEY (`sbj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table university.subject: ~3 rows (approximately)
/*!40000 ALTER TABLE `subject` DISABLE KEYS */;
INSERT INTO `subject` (`sbj_id`, `sbj_name`, `credit`, `semester`) VALUES
	('01418116', 'Computer Programming', 3, 2),
	('01418120', 'Intro', 3, 1),
	('01418231', 'Algo', 3, 1);
/*!40000 ALTER TABLE `subject` ENABLE KEYS */;

-- Dumping structure for table university.teacher
CREATE TABLE IF NOT EXISTS `teacher` (
  `t_id` varchar(255) NOT NULL,
  `t_email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table university.teacher: ~4 rows (approximately)
/*!40000 ALTER TABLE `teacher` DISABLE KEYS */;
INSERT INTO `teacher` (`t_id`, `t_email`, `name`, `faculty`, `department`) VALUES
	('D1111', 'teerayuth.a@ku.th', 'Teerayuth ARTIDAKORN', 'Science', 'Computer-Science'),
	('D1234', 'navin.lu@ku.th', 'Navin luangthongkham', 'Science', 'Computer Science'),
	('D1414', 'temail1', 'Sirikorn Chanual', 'Science', 'Computer Science'),
	('D1415', 'temail2', 'Pakaket Vatuya', 'Science', 'Computer Science');
/*!40000 ALTER TABLE `teacher` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
