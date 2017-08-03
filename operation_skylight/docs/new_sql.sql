DROP TABLE IF EXISTS `register`;
CREATE TABLE `register` (
  `register_id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `birthday` datetime NOT NULL,
  `gender` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emergency_contact` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emergency_phone` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emergency_relation` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `eat` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `other` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`register_id`)) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
  

DROP TABLE IF EXISTS `log`;
CREATE TABLE `log` (
  `log_id` int(255) NOT NULL AUTO_INCREMENT,
  `log_ip` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `log_time` datetime DEFAULT NULL,
  `log_event` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `log_page` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;