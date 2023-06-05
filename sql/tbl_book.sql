/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 80031
 Source Host           : localhost:3306
 Source Schema         : test

 Target Server Type    : MySQL
 Target Server Version : 80031
 File Encoding         : 65001

 Date: 05/06/2023 17:13:12
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_book
-- ----------------------------
DROP TABLE IF EXISTS `tbl_book`;
CREATE TABLE `tbl_book`  (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `price` int NOT NULL,
  `publicationdate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `publishinghouse` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_book
-- ----------------------------
INSERT INTO `tbl_book` VALUES ('c++', 23, '2018-05-06', '清华出版社');
INSERT INTO `tbl_book` VALUES ('java', 66, '2019-02-02', '清华出版社');
INSERT INTO `tbl_book` VALUES ('php', 55, '2021-02-02', '人民邮电出版社');
INSERT INTO `tbl_book` VALUES ('python', 33, '2019-03-01', '清华出版社');
INSERT INTO `tbl_book` VALUES ('spring', 22, '2022-02-02', '人民邮电出版社');

SET FOREIGN_KEY_CHECKS = 1;
