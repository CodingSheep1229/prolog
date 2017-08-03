-- MySQL dump 10.13  Distrib 5.7.18, for Linux (i686)
--
-- Host: localhost    Database: judge
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+08:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `challenge`
--

DROP TABLE IF EXISTS `challenge`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `challenge` (
  `challenge_id` int(255) NOT NULL AUTO_INCREMENT,
  `challenge_title` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `challenge_description` text COLLATE utf8_unicode_ci,
  `challenge_mode` int(11) NOT NULL DEFAULT '1',
  `challenge_level` int(32) NOT NULL DEFAULT '1',
  `challenge_start` datetime NOT NULL,
  `challenge_end` datetime NOT NULL,
  `challenge_feedback` int(32) NOT NULL DEFAULT '0',
  `challenge_score` int(32) NOT NULL DEFAULT '1',
  `challenge_oi` int(32) NOT NULL DEFAULT '1',
  `challenge_penalty` int(255) NOT NULL DEFAULT '0',
  `challenge_showscoreboard` int(32) NOT NULL DEFAULT '1',
  `challenge_open` int(255) NOT NULL DEFAULT '0',
  `group_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`challenge_id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `challenge_prob`
--

DROP TABLE IF EXISTS `challenge_prob`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `challenge_prob` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `challenge_id` int(255) NOT NULL,
  `problem_id` int(255) NOT NULL,
  `score` int(255) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `confirm`
--

DROP TABLE IF EXISTS `confirm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `confirm` (
  `user_id` int(32) NOT NULL,
  `code` varchar(40) NOT NULL,
  `expired` int(11) NOT NULL DEFAULT '0',
  `try` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`,`try`),
  KEY `code` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `forget`
--

DROP TABLE IF EXISTS `forget`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forget` (
  `index` int(32) NOT NULL AUTO_INCREMENT,
  `user_id` int(32) NOT NULL,
  `code` varchar(40) NOT NULL,
  `expired` int(11) NOT NULL,
  `try` int(11) NOT NULL,
  PRIMARY KEY (`index`),
  KEY `index` (`index`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `grouplist`
--

DROP TABLE IF EXISTS `grouplist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grouplist` (
  `group_id` int(32) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(256) NOT NULL,
  `group_type` int(32) NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log` (
  `log_id` int(255) NOT NULL AUTO_INCREMENT,
  `log_ip` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `log_time` datetime DEFAULT NULL,
  `log_event` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `log_page` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `peer_association`
--

DROP TABLE IF EXISTS `peer_association`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peer_association` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `peer_id` int(255) NOT NULL,
  `score_setter` int(32) NOT NULL,
  `scored_user` int(32) NOT NULL,
  `score` int(32) DEFAULT NULL,
  `comment` text,
  `set_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `peer_info`
--

DROP TABLE IF EXISTS `peer_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peer_info` (
  `peer_id` int(255) NOT NULL AUTO_INCREMENT,
  `problem_id` int(255) NOT NULL,
  `challenge_id` int(255) DEFAULT NULL,
  `group_id` int(255) NOT NULL,
  `peer_start` datetime NOT NULL,
  `peer_end` datetime NOT NULL,
  `option_num` int(32) NOT NULL,
  `peer_description` text,
  `peer_setter` int(32) NOT NULL,
  PRIMARY KEY (`peer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `problem`
--

DROP TABLE IF EXISTS `problem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `problem` (
  `problem_id` int(100) NOT NULL,
  `problem_title` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `problem_group` int(11) NOT NULL,
  `problem_description` text COLLATE utf8_unicode_ci,
  `problem_level` int(32) NOT NULL DEFAULT '0',
  `problem_hint` text COLLATE utf8_unicode_ci,
  `problem_source` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `problem_special` int(32) DEFAULT '0',
  `problem_check` text COLLATE utf8_unicode_ci,
  `problem_input` text COLLATE utf8_unicode_ci,
  `problem_output` text COLLATE utf8_unicode_ci,
  `problem_samplein` text COLLATE utf8_unicode_ci,
  `problem_sampleout` text COLLATE utf8_unicode_ci,
  `problem_task` text COLLATE utf8_unicode_ci,
  `problem_testdata` text COLLATE utf8_unicode_ci,
  `problem_setter` int(32) NOT NULL DEFAULT '1',
  PRIMARY KEY (`problem_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `problem_group`
--

DROP TABLE IF EXISTS `problem_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `problem_group` (
  `problem_groupid` int(11) NOT NULL AUTO_INCREMENT,
  `problem_groupname` varchar(256) NOT NULL,
  PRIMARY KEY (`problem_groupid`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `submission`
--

DROP TABLE IF EXISTS `submission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `submission` (
  `submission_id` int(255) NOT NULL AUTO_INCREMENT,
  `submission_status` int(32) NOT NULL DEFAULT '0',
  `submission_result` text COLLATE utf8_bin,
  `submission_score` int(32) DEFAULT '0',
  `user_id` int(32) NOT NULL,
  `problem_id` int(32) DEFAULT NULL,
  `challenge_id` int(32) NOT NULL DEFAULT '-1',
  `submission_code` text COLLATE utf8_bin,
  `submission_mode` int(32) NOT NULL DEFAULT '0',
  `submission_error` text COLLATE utf8_bin,
  `submission_time` int(64) NOT NULL DEFAULT '0',
  `submission_mem` bigint(64) DEFAULT NULL,
  `submission_len` int(32) NOT NULL DEFAULT '0',
  `submission_date` datetime DEFAULT NULL,
  `submission_language` int(8) DEFAULT NULL,
  PRIMARY KEY (`submission_id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_id` int(32) NOT NULL AUTO_INCREMENT,
  `user_username` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_solved` int(32) NOT NULL DEFAULT '0',
  `user_nick` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_level` int(32) NOT NULL DEFAULT '1',
  `student_id` varchar(9) CHARACTER SET utf8 DEFAULT NULL,
  `user_name` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_class` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user_group`
--

DROP TABLE IF EXISTS `user_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_group` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `user_id` int(32) NOT NULL,
  `group_id` int(32) NOT NULL,
  `group_type` int(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-11 14:23:55
