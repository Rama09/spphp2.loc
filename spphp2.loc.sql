/*
Navicat MariaDB Data Transfer

Source Server         : localhost
Source Server Version : 100028
Source Host           : localhost:3306
Source Database       : spphp2.loc

Target Server Type    : MariaDB
Target Server Version : 100028
File Encoding         : 65001

Date: 2016-12-30 14:16:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for authors
-- ----------------------------
DROP TABLE IF EXISTS `authors`;
CREATE TABLE `authors` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(180) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of authors
-- ----------------------------
INSERT INTO `authors` VALUES ('1', 'Иван');
INSERT INTO `authors` VALUES ('2', 'Ваня');

-- ----------------------------
-- Table structure for foo
-- ----------------------------
DROP TABLE IF EXISTS `foo`;
CREATE TABLE `foo` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of foo
-- ----------------------------
INSERT INTO `foo` VALUES ('1', 'иван');
INSERT INTO `foo` VALUES ('2', 'петр');
INSERT INTO `foo` VALUES ('3', 'семен');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` smallint(6) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `text` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('4', '1', 'Новый заголовок', 'описание', 'текстткскет');
INSERT INTO `news` VALUES ('5', '2', 'Новый заголовок', 'описание', 'текстткскет');
INSERT INTO `news` VALUES ('6', '1', 'Новый заголовок', 'описание', 'текстткскет');
INSERT INTO `news` VALUES ('7', '2', 'Новый заголовок', 'описание', 'текстткскет');
INSERT INTO `news` VALUES ('8', '1', 'Новый заголовок', 'описание', 'текстткскет');
INSERT INTO `news` VALUES ('9', '0', 'Новый заголовок ', 'описание', 'текстткскет');
INSERT INTO `news` VALUES ('10', '0', '111Новый заголовок', 'о111писание', 'текстткскет');
INSERT INTO `news` VALUES ('12', '0', 'Новый заголовок', 'описание', 'текстткскет');
INSERT INTO `news` VALUES ('13', '0', '111Новый заголовок', 'о111писание', 'текстткскет');
INSERT INTO `news` VALUES ('14', '0', 'Новый заголовок', 'описание', 'текстткскет');
INSERT INTO `news` VALUES ('15', '0', 'Новый заголовок', 'описание', 'текстткскет');
INSERT INTO `news` VALUES ('16', '0', 'Новый заголовок ', 'описание', 'текстткскет');
INSERT INTO `news` VALUES ('17', '0', 'Новый заголовок', 'описание', 'текстткскет');
INSERT INTO `news` VALUES ('18', '0', 'Новый заголовок', 'описание', 'текстткскет');
INSERT INTO `news` VALUES ('19', '0', 'Новый заголовок', 'описание', 'текстткскет');
INSERT INTO `news` VALUES ('20', '0', 'Новый заголовок ', 'описание', 'текстткскет');
INSERT INTO `news` VALUES ('21', '0', 'Новый заголовок', 'описание', 'текстткскет');
INSERT INTO `news` VALUES ('22', '0', 'Новый заголовок', 'описание', 'текстткскет');
INSERT INTO `news` VALUES ('23', '0', 'Новый заголовок ', 'описание', 'текстткскет');
INSERT INTO `news` VALUES ('24', '0', 'Новый заголовок', 'описание', 'текстткскет');
INSERT INTO `news` VALUES ('25', '0', 'Новый заголовок ', 'описание', 'текстткскет');
INSERT INTO `news` VALUES ('26', '0', 'Новый заголовок', 'описание', 'текстткскет');
INSERT INTO `news` VALUES ('27', '0', 'Новый заголовок ', 'описание', 'текстткскет');
INSERT INTO `news` VALUES ('28', '0', 'Новый заголовок', 'описание', 'текстткскет');
INSERT INTO `news` VALUES ('29', '0', 'Новый заголовок', 'описание', 'текстткскет');
INSERT INTO `news` VALUES ('30', '0', '111Новый заголовок', 'о111писание', null);
INSERT INTO `news` VALUES ('31', '0', '111Новый заголовок', 'о111писание', null);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('0', 'петр', 'gfd@test.ru');
INSERT INTO `user` VALUES ('1', 'мария', 'gfgf@fdsf.ru');
SET FOREIGN_KEY_CHECKS=1;
