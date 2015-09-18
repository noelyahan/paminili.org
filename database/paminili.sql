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
  `province` varchar(50) DEFAULT '0',
  `district` varchar(50) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


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
  PRIMARY KEY (`id`),
  KEY `FK__police_station` (`police_station_id`),
  CONSTRAINT `FK__police_station` FOREIGN KEY (`police_station_id`) REFERENCES `police_station` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
