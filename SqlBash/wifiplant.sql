-- --------------------------------------------------------
-- 主机:                           127.0.0.1
-- 服务器版本:                        5.5.8-log - MySQL Community Server (GPL)
-- 服务器操作系统:                      Win32
-- HeidiSQL 版本:                  9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 导出 wifiplant 的数据库结构
CREATE DATABASE IF NOT EXISTS `wifiplant` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `wifiplant`;


-- 导出  表 wifiplant.alarm 结构
CREATE TABLE IF NOT EXISTS `alarm` (
  `username` varchar(20) NOT NULL,
  `call` varchar(20) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `temp_alarm` tinyint(3) unsigned zerofill DEFAULT NULL,
  `hum_alarm` tinyint(3) unsigned zerofill DEFAULT NULL,
  `feedback_alarm` tinyint(3) unsigned zerofill DEFAULT NULL,
  `week_report` tinyint(3) unsigned zerofill DEFAULT NULL,
  `month_report` tinyint(3) unsigned zerofill DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 正在导出表  wifiplant.alarm 的数据：~2 rows (大约)
/*!40000 ALTER TABLE `alarm` DISABLE KEYS */;
INSERT IGNORE INTO `alarm` (`username`, `call`, `mail`, `temp_alarm`, `hum_alarm`, `feedback_alarm`, `week_report`, `month_report`) VALUES
	('admin', '', NULL, 000, 001, 001, 001, 001),
	('yibu', '18813011762', '563965323@qq.com', 001, 001, 001, 001, 001);
/*!40000 ALTER TABLE `alarm` ENABLE KEYS */;


-- 导出  表 wifiplant.chip_data 结构
CREATE TABLE IF NOT EXISTS `chip_data` (
  `data_id` int(11) NOT NULL AUTO_INCREMENT,
  `chip_id` varchar(50) NOT NULL,
  `time` datetime DEFAULT NULL,
  `temp` float DEFAULT NULL,
  `hum` int(11) DEFAULT NULL,
  `hum_oil` int(11) DEFAULT NULL,
  PRIMARY KEY (`data_id`)
) ENGINE=InnoDB AUTO_INCREMENT=654 DEFAULT CHARSET=utf8;

-- 正在导出表  wifiplant.chip_data 的数据：~56 rows (大约)
/*!40000 ALTER TABLE `chip_data` DISABLE KEYS */;
INSERT IGNORE INTO `chip_data` (`data_id`, `chip_id`, `time`, `temp`, `hum`, `hum_oil`) VALUES
	(1, '2cee1265-ae5f-2a65-2632-474fd0369554', '2017-07-18 11:27:35', NULL, NULL, NULL),
	(2, '2cee1265-ae5f-2a65-2632-474fd0369554', '2017-07-18 11:38:59', NULL, NULL, NULL),
	(3, '2cee1265-ae5f-2a65-2632-474fd0369554', '2017-07-18 11:39:05', NULL, NULL, NULL),
	(4, '2cee1265-ae5f-2a65-2632-474fd0369554', '2017-07-18 11:39:46', NULL, NULL, NULL),
	(5, '2cee1265-ae5f-2a65-2632-474fd0369554', '2017-07-19 17:04:18', NULL, NULL, NULL),
	(6, '2cee1265-ae5f-2a65-2632-474fd0369554', '2017-07-19 17:04:46', NULL, NULL, NULL),
	(7, '2cee1265-ae5f-2a65-2632-474fd0369554', '2017-07-19 17:04:46', NULL, NULL, NULL),
	(8, '2cee1265-ae5f-2a65-2632-474fd0369554', '2017-07-19 17:25:30', NULL, NULL, NULL),
	(9, '2cee1265-ae5f-2a65-2632-474fd0369554', '2017-07-19 17:25:32', NULL, NULL, NULL),
	(10, '2cee1265-ae5f-2a65-2632-474fd0369554', '2017-07-19 17:25:33', NULL, NULL, NULL),
	(11, '2cee1265-ae5f-2a65-2632-474fd0369554', '2017-07-19 17:26:02', NULL, NULL, NULL),
	(609, 'abc', '2017-08-13 19:30:25', 27, 100, 28),
	(610, 'abc', '2017-08-13 19:30:28', 27, 100, 27),
	(611, 'abc', '2017-08-13 19:30:32', 27, 100, 28),
	(612, 'abc', '2017-08-13 19:30:34', 27, 100, 27),
	(613, 'abc', '2017-08-13 20:10:05', 27, 100, 27),
	(614, 'abc', '2017-08-13 20:13:05', 27, 100, 27),
	(615, 'test', '2017-08-24 15:09:56', 28, 96, 23),
	(616, 'test', '2017-08-24 15:10:11', 28, 96, 23),
	(617, 'test', '2017-08-24 15:13:15', 28, 96, 23),
	(618, 'test', '2017-08-24 15:16:17', 28, 96, 23),
	(619, 'test', '2017-08-24 15:19:20', 28, 96, 23),
	(620, 'test', '2017-08-24 15:20:33', 28, 96, 23),
	(621, 'test', '2017-08-24 15:22:22', 28, 96, 24),
	(622, 'test', '2017-08-24 15:25:22', 28, 96, 23),
	(623, 'test', '2017-08-24 15:28:22', 28, 96, 23),
	(624, 'test', '2017-08-24 15:31:22', 28, 94, 23),
	(625, 'test', '2017-08-24 15:34:22', 27, 94, 23),
	(626, 'test', '2017-08-24 15:37:22', 27, 94, 23),
	(627, 'test', '2017-08-24 15:40:22', 27, 94, 24),
	(628, 'test', '2017-08-24 15:43:22', 27, 94, 23),
	(629, 'test', '2017-08-24 15:46:22', 27, 94, 23),
	(630, 'test', '2017-08-24 15:49:22', 27, 94, 23),
	(631, 'test', '2017-08-24 15:52:22', 27, 94, 23),
	(632, 'test', '2017-08-24 15:55:22', 28, 94, 29),
	(633, 'test', '2017-08-24 15:58:22', 28, 94, 23),
	(634, 'test', '2017-08-24 16:01:22', 28, 94, 23),
	(635, 'test', '2017-08-24 16:04:22', 28, 94, 23),
	(636, 'test', '2017-08-24 16:07:22', 28, 93, 22),
	(637, 'test', '2017-08-24 16:10:22', 28, 93, 33),
	(638, 'test', '2017-08-24 16:13:22', 28, 93, 23),
	(639, 'test', '2017-08-24 16:16:22', 28, 93, 23),
	(640, 'test', '2017-08-24 16:19:22', 28, 93, 23),
	(641, 'test', '2017-08-24 16:22:22', 28, 93, 23),
	(642, 'test', '2017-08-24 16:26:07', 28, 93, 23),
	(643, 'test', '2017-08-24 16:29:29', 28, 93, 23),
	(644, 'test', '2017-08-24 16:32:29', 28, 93, 28),
	(645, 'test', '2017-08-24 16:35:29', 28, 93, 23),
	(646, 'test', '2017-08-24 16:38:29', 28, 93, 28),
	(647, 'test', '2017-08-24 16:41:29', 28, 93, 23),
	(648, 'test', '2017-08-24 16:44:29', 28, 93, 23),
	(649, 'test', '2017-08-24 16:47:29', 28, 93, 24),
	(650, 'test', '2017-08-24 16:50:29', 28, 93, 23),
	(651, 'test', '2017-08-24 16:53:29', 28, 93, 23),
	(652, 'test', '2017-08-24 16:56:29', 28, 93, 22),
	(653, 'test', '2017-08-24 16:59:29', 28, 93, 23);
/*!40000 ALTER TABLE `chip_data` ENABLE KEYS */;


-- 导出  表 wifiplant.chip_set 结构
CREATE TABLE IF NOT EXISTS `chip_set` (
  `chip_id` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `bind_time` varchar(20) DEFAULT NULL,
  `last_connect_time` varchar(20) DEFAULT NULL,
  `last_water_time` varchar(20) DEFAULT NULL,
  `water_frequency` int(11) DEFAULT NULL,
  `water_time` time DEFAULT NULL,
  `water_way` int(11) DEFAULT NULL,
  `hum_limit` int(11) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `log` varchar(50) DEFAULT NULL,
  `water_amount` int(20) DEFAULT '0',
  PRIMARY KEY (`chip_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 正在导出表  wifiplant.chip_set 的数据：~3 rows (大约)
/*!40000 ALTER TABLE `chip_set` DISABLE KEYS */;
INSERT IGNORE INTO `chip_set` (`chip_id`, `password`, `username`, `bind_time`, `last_connect_time`, `last_water_time`, `water_frequency`, `water_time`, `water_way`, `hum_limit`, `state`, `log`, `water_amount`) VALUES
	('abc', 'abc', 'yibu', '2017-08-13 18:32:09', '', '', 0, '00:00:00', 0, 0, 0, '', 20),
	('test', 'test', 'yibu', '2017-08-24 15:09:45', '1503565169', '1503565169', 1, '16:30:00', 1, 0, 0, '', 30),
	('yibu', '100', 'yibu', '2017-07-23 15:37:58', '', '', 1, '15:11:00', 1, 0, 0, '', 0);
/*!40000 ALTER TABLE `chip_set` ENABLE KEYS */;


-- 导出  表 wifiplant.chip_temp 结构
CREATE TABLE IF NOT EXISTS `chip_temp` (
  `chip_id` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`chip_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 正在导出表  wifiplant.chip_temp 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `chip_temp` DISABLE KEYS */;
/*!40000 ALTER TABLE `chip_temp` ENABLE KEYS */;


-- 导出  表 wifiplant.user 结构
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(16) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 正在导出表  wifiplant.user 的数据：~3 rows (大约)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT IGNORE INTO `user` (`username`, `password`) VALUES
	('admin', 'admin'),
	('yibu', '199467'),
	('灰', '123456');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
