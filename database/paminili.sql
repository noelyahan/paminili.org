-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.5.13 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for paminili
CREATE DATABASE IF NOT EXISTS `paminili` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `paminili`;


-- Dumping structure for table paminili.police_station
CREATE TABLE IF NOT EXISTS `police_station` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `province` varchar(50) DEFAULT '0',
  `district` varchar(50) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- Dumping data for table paminili.police_station: ~0 rows (approximately)
DELETE FROM `police_station`;
/*!40000 ALTER TABLE `police_station` DISABLE KEYS */;
INSERT INTO `police_station` (`id`, `name`, `province`, `district`) VALUES
	(1, 'Embilipitiya', 'Southern', 'Hambantota'),
	(2, 'Tangalle', 'Southern', 'Hambantota'),
	(3, 'Lunugamvehera', 'Southern', 'Hambantota'),
	(4, 'Katuwana', 'Southern', 'Hambantota'),
	(5, 'Kataragama', 'Southern', 'Hambantota'),
	(6, 'Middeniya', 'Southern', 'Hambantota'),
	(7, 'Weeraketiya', 'Southern', 'Hambantota'),
	(8, 'Hakmana', 'Southern', 'Hambantota'),
	(9, 'Hungama', 'Southern', 'Hambantota'),
	(10, 'Mawarala', 'Southern', 'Hambantota'),
	(11, 'Tissamaharama', 'Southern', 'Hambantota'),
	(12, 'Urubokka', 'Southern', 'Hambantota'),
	(13, 'Hambantota', 'Southern', 'Hambantota'),
	(14, 'Angunukolapelessa', 'Southern', 'Hambantota'),
	(15, 'Panamura', 'Southern', 'Hambantota'),
	(16, 'Dickwella', 'Southern', 'Hambantota'),
	(17, 'Gandara', 'Southern', 'Hambantota'),
	(18, 'Thihagoda', 'Southern', 'Hambantota'),
	(19, 'Kamburupitiya', 'Southern', 'Hambantota'),
	(20, 'Deniyaya', 'Southern', 'Hambantota'),
	(21, 'Akuressa', 'Southern', 'Hambantota'),
	(22, 'Udawalawa', 'Southern', 'Hambantota'),
	(23, 'Hambegamuwa', 'Southern', 'Hambantota');
/*!40000 ALTER TABLE `police_station` ENABLE KEYS */;


-- Dumping structure for table paminili.question
CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `police_station_id` int(11) NOT NULL,
  `complain_type` varchar(100) DEFAULT NULL,
  `is_complain_written` varchar(100) DEFAULT NULL,
  `complain_record_time` varchar(100) DEFAULT NULL,
  `is_your_language` varchar(100) DEFAULT NULL,
  `provide_female_officer` varchar(100) DEFAULT NULL,
  `time_taken_to_medical_service` varchar(100) DEFAULT NULL,
  `efficient` varchar(100) DEFAULT NULL,
  `friendly` varchar(100) DEFAULT NULL,
  `intimidating` varchar(100) DEFAULT NULL,
  `humiliating` varchar(100) DEFAULT NULL,
  `score` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table paminili.question: ~0 rows (approximately)
DELETE FROM `question`;
/*!40000 ALTER TABLE `question` DISABLE KEYS */;
INSERT INTO `question` (`id`, `police_station_id`, `complain_type`, `is_complain_written`, `complain_record_time`, `is_your_language`, `provide_female_officer`, `time_taken_to_medical_service`, `efficient`, `friendly`, `intimidating`, `humiliating`, `score`) VALUES
	(1, 1, 'Rape', 'Yes', 'Within 10 minutes', 'Yes_I read and signed it', 'Not applicable', 'Not applicable', 'Yes', 'Yes', 'Yes', 'Yes', 40),
	(2, 1, 'Rape', 'Yes', 'Within 10 minutes', 'Yes_I read and signed it', 'Not applicable', 'Not applicable', 'Yes', 'Yes', 'Yes', 'Yes', 40),
	(3, 1, 'Rape', 'Yes', 'Within 10 minutes', 'Yes_I read and signed it', 'Not applicable', 'Not applicable', 'Yes', 'Yes', 'Yes', 'Yes', 40),
	(4, 1, 'Rape', 'Yes', 'Within 10 minutes', 'Yes_I read and signed it', 'Not applicable', 'Not applicable', 'Yes', 'Yes', 'Yes', 'Yes', 40),
	(5, 1, 'Rape', 'Yes', 'Within 10 minutes', 'Yes_I read and signed it', 'Not applicable', 'Not applicable', 'Yes', 'Yes', 'Yes', 'Yes', 40),
	(6, 1, 'Rape', 'Yes', 'Within 10 minutes', 'Yes_I read and signed it', 'Not applicable', 'Not applicable', 'Yes', 'Yes', 'Yes', 'Yes', 40),
	(7, 1, 'Rape', 'Yes', 'Within 10 minutes', 'Yes_I read and signed it', 'Not applicable', 'Not applicable', 'Yes', 'Yes', 'Yes', 'Yes', 40);
/*!40000 ALTER TABLE `question` ENABLE KEYS */;


-- Dumping structure for table paminili.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `sessionsid` varchar(100) NOT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `menu` varchar(50) DEFAULT NULL,
  `pg` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `others` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sessionsid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Handle the sessions';

-- Dumping data for table paminili.sessions: ~0 rows (approximately)
DELETE FROM `sessions`;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
