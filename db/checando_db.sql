/*
SQLyog Trial v11.27 (32 bit)
MySQL - 5.1.67-rel14.3-log : Database - checando_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`checando_db` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `checando_db`;

/*Table structure for table `test` */

DROP TABLE IF EXISTS `test`;

CREATE TABLE `test` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `datetime` datetime NOT NULL,
  `venueId` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `test` */

insert  into `test`(`id`,`datetime`,`venueId`) values (2,'2013-11-08 02:20:49',''),(3,'2013-11-08 02:20:49','4b6622d2f964a520af152be3');

/*Table structure for table `venues` */

DROP TABLE IF EXISTS `venues`;

CREATE TABLE `venues` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `datetime` datetime NOT NULL,
  `venueId` varchar(50) NOT NULL,
  `venueName` varchar(50) NOT NULL,
  `venueTwitter` varchar(50) NOT NULL,
  `venueLat` varchar(50) NOT NULL,
  `venueLng` varchar(50) NOT NULL,
  `venueCc` varchar(50) NOT NULL,
  `venueCity` varchar(50) NOT NULL,
  `venueState` varchar(50) NOT NULL,
  `venueCountry` varchar(50) NOT NULL,
  `venueUrl` varchar(150) NOT NULL,
  `venueCategorie` varchar(50) NOT NULL,
  `hereNow` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `venues` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
