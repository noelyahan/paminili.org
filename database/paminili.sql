-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2015 at 05:04 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `paminili`
--
CREATE DATABASE IF NOT EXISTS `paminili` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `paminili`;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `vote_up` int(11) NOT NULL,
  `vote_down` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `post_id` (`post_id`),
  KEY `user_idFK1` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE IF NOT EXISTS `permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `permission_category` int(11) NOT NULL DEFAULT '0',
  `url` varchar(200) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `permission_category` (`permission_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`id`, `name`, `permission_category`, `url`) VALUES
(1, 'home', 1, 'http://localhost/paminili.org/'),
(2, 'statistics', 2, 'http://localhost/paminili.org/main/statistics'),
(4, 'home', 1, 'http://localhost/paminili.org/main/home'),
(5, 'home', 1, 'http://localhost/paminili.org/main/home'),
(7, 'questions', 3, 'http://localhost/paminili.org/main/questions'),
(9, 'loadBestRatedPoliceStations', 2, 'http://localhost/paminili.org//main/loadBestRatedPoliceStations'),
(10, 'loadWorstRatedPoliceStations', 2, 'http://localhost/paminili.org//main/loadWorstRatedPoliceStations'),
(11, 'loadProblemTypesGraph', 2, 'http://localhost/paminili.org//main/loadProblemTypesGraph'),
(12, 'loadHighestRapeComplains', 2, 'http://localhost/paminili.org//main/loadHighestRapeComplains'),
(13, 'loadHighestChildAbuseComplains', 2, 'http://localhost/paminili.org//main/loadHighestChildAbuseComplains'),
(14, 'loadHighestDomesticViolenceComplains', 2, 'http://localhost/paminili.org//main/loadHighestDomesticViolenceComplains'),
(15, 'loadHighestTrafficOffenceComplains', 2, 'http://localhost/paminili.org//main/loadHighestTrafficOffenceComplains'),
(16, 'loadHighestTheftComplains', 2, 'http://localhost/paminili.org//main/loadHighestTheftComplains'),
(17, 'loadHighestOtherComplains', 2, 'http://localhost/paminili.org//main/loadHighestOtherComplains');

-- --------------------------------------------------------

--
-- Table structure for table `permission_category`
--

CREATE TABLE IF NOT EXISTS `permission_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `permission_category`
--

INSERT INTO `permission_category` (`id`, `name`) VALUES
(1, 'home_page'),
(2, 'statistics'),
(3, 'questions');

-- --------------------------------------------------------

--
-- Table structure for table `police_station`
--

CREATE TABLE IF NOT EXISTS `police_station` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `province` varchar(50) DEFAULT '0',
  `district` varchar(50) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `police_station`
--

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
(23, 'Hambegamuwa', 'Southern', 'Hambantota'),
(24, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post` text NOT NULL,
  `vote_up` int(11) NOT NULL,
  `vote_down` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `police_station_id`, `complain_type`, `is_complain_written`, `complain_record_time`, `is_your_language`, `provide_female_officer`, `time_taken_to_medical_service`, `efficient`, `friendly`, `intimidating`, `humiliating`, `score`) VALUES
(1, 1, 'Rape', 'Yes', 'Within 10 minutes', 'Yes_I read and signed it', 'Not applicable', 'Not applicable', 'Yes', 'Yes', 'Yes', 'Yes', 40),
(2, 1, 'Rape', 'Yes', 'Within 10 minutes', 'Yes_I read and signed it', 'Not applicable', 'Not applicable', 'Yes', 'Yes', 'Yes', 'Yes', 40),
(3, 1, 'Rape', 'Yes', 'Within 10 minutes', 'Yes_I read and signed it', 'Not applicable', 'Not applicable', 'Yes', 'Yes', 'Yes', 'Yes', 40),
(4, 1, 'Rape', 'Yes', 'Within 10 minutes', 'Yes_I read and signed it', 'Not applicable', 'Not applicable', 'Yes', 'Yes', 'Yes', 'Yes', 40),
(5, 1, 'Rape', 'Yes', 'Within 10 minutes', 'Yes_I read and signed it', 'Not applicable', 'Not applicable', 'Yes', 'Yes', 'Yes', 'Yes', 40),
(6, 1, 'Rape', 'Yes', 'Within 10 minutes', 'Yes_I read and signed it', 'Not applicable', 'Not applicable', 'Yes', 'Yes', 'Yes', 'Yes', 40),
(7, 1, 'Rape', 'Yes', 'Within 10 minutes', 'Yes_I read and signed it', 'Not applicable', 'Not applicable', 'Yes', 'Yes', 'Yes', 'Yes', 40);

-- --------------------------------------------------------

--
-- Table structure for table `reply_comment`
--

CREATE TABLE IF NOT EXISTS `reply_comment` (
  `reply_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `comment_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`reply_id`),
  KEY `FK__user` (`user_id`),
  KEY `FK_reply_comment_comment` (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `sessionsid` varchar(100) NOT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `menu` varchar(50) DEFAULT NULL,
  `pg` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `others` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sessionsid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Handle the sessions';

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `user_role` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role` (`user_role`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `user_role`, `password`) VALUES
(2, 'nilupul', 1, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `name`) VALUES
(1, 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `user_role_permission_category`
--

CREATE TABLE IF NOT EXISTS `user_role_permission_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_role` int(11) NOT NULL,
  `permission_category` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_user_role_permission_category_user_role` (`user_role`),
  KEY `FK_user_role_permission_category_permission_category` (`permission_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_role_permission_category`
--

INSERT INTO `user_role_permission_category` (`id`, `user_role`, `permission_category`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE IF NOT EXISTS `vote` (
  `vote_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post__id` int(11) DEFAULT NULL,
  `comment_id` int(10) unsigned DEFAULT NULL,
  `reply_id` int(11) DEFAULT NULL,
  `vote` text,
  PRIMARY KEY (`vote_id`),
  KEY `FK__user_vote` (`user_id`),
  KEY `FK__post_vote` (`post__id`),
  KEY `FK_vote_comment` (`comment_id`),
  KEY `FK_vote_reply_comment` (`reply_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `post_id` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`),
  ADD CONSTRAINT `user_idFK1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `permission`
--
ALTER TABLE `permission`
  ADD CONSTRAINT `permission_category` FOREIGN KEY (`permission_category`) REFERENCES `permission_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `reply_comment`
--
ALTER TABLE `reply_comment`
  ADD CONSTRAINT `FK_reply_comment_comment` FOREIGN KEY (`comment_id`) REFERENCES `comment` (`comment_id`),
  ADD CONSTRAINT `FK__user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `role` FOREIGN KEY (`user_role`) REFERENCES `user_role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_role_permission_category`
--
ALTER TABLE `user_role_permission_category`
  ADD CONSTRAINT `FK_user_role_permission_category_permission_category` FOREIGN KEY (`permission_category`) REFERENCES `permission_category` (`id`),
  ADD CONSTRAINT `FK_user_role_permission_category_user_role` FOREIGN KEY (`user_role`) REFERENCES `user_role` (`id`);

--
-- Constraints for table `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `FK_vote_reply_comment` FOREIGN KEY (`reply_id`) REFERENCES `reply_comment` (`reply_id`),
  ADD CONSTRAINT `FK_vote_comment` FOREIGN KEY (`comment_id`) REFERENCES `comment` (`comment_id`),
  ADD CONSTRAINT `FK__post_vote` FOREIGN KEY (`post__id`) REFERENCES `post` (`post_id`),
  ADD CONSTRAINT `FK__user_vote` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
