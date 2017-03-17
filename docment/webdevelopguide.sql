/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : webdevelopguide

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-03-17 20:32:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `yunzhi_attachment`
-- ----------------------------
DROP TABLE IF EXISTS `yunzhi_attachment`;
CREATE TABLE `yunzhi_attachment` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `saveName` varchar(50) NOT NULL,
  `savePath` varchar(50) NOT NULL,
  `sha1` varchar(40) NOT NULL,
  `md5` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yunzhi_attachment
-- ----------------------------

-- ----------------------------
-- Table structure for `yunzhi_course`
-- ----------------------------
DROP TABLE IF EXISTS `yunzhi_course`;
CREATE TABLE `yunzhi_course` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `beginTime` int(11) NOT NULL,
  `endTime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yunzhi_course
-- ----------------------------

-- ----------------------------
-- Table structure for `yunzhi_current_course`
-- ----------------------------
DROP TABLE IF EXISTS `yunzhi_current_course`;
CREATE TABLE `yunzhi_current_course` (
  `courseId` int(10) unsigned NOT NULL,
  PRIMARY KEY (`courseId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yunzhi_current_course
-- ----------------------------

-- ----------------------------
-- Table structure for `yunzhi_details`
-- ----------------------------
DROP TABLE IF EXISTS `yunzhi_details`;
CREATE TABLE `yunzhi_details` (
  `studentId` char(10) NOT NULL,
  `courseId` int(11) NOT NULL,
  `positionId` int(11) NOT NULL,
  `regionId` int(11) NOT NULL,
  `attachmentId` int(11) NOT NULL,
  `createTime` int(11) NOT NULL,
  `updateTime` int(11) NOT NULL,
  PRIMARY KEY (`studentId`,`courseId`,`positionId`,`regionId`,`attachmentId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yunzhi_details
-- ----------------------------

-- ----------------------------
-- Table structure for `yunzhi_position`
-- ----------------------------
DROP TABLE IF EXISTS `yunzhi_position`;
CREATE TABLE `yunzhi_position` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `regionId` int(10) unsigned NOT NULL,
  `rowsNum` int(10) unsigned NOT NULL,
  `columnNum` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`,`regionId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yunzhi_position
-- ----------------------------

-- ----------------------------
-- Table structure for `yunzhi_region`
-- ----------------------------
DROP TABLE IF EXISTS `yunzhi_region`;
CREATE TABLE `yunzhi_region` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(10) NOT NULL,
  `totalRows` int(11) NOT NULL,
  `totalColumns` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yunzhi_region
-- ----------------------------

-- ----------------------------
-- Table structure for `yunzhi_student`
-- ----------------------------
DROP TABLE IF EXISTS `yunzhi_student`;
CREATE TABLE `yunzhi_student` (
  `id` char(10) NOT NULL,
  `attachmentId` int(11) unsigned NOT NULL,
  `name` char(10) NOT NULL,
  `openid` char(40) NOT NULL,
  PRIMARY KEY (`id`,`attachmentId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yunzhi_student
-- ----------------------------
