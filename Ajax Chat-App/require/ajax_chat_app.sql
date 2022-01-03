/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.19-MariaDB : Database - ajax_chat_box
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ajax_chat_box` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `ajax_chat_box`;

/*Table structure for table `chat` */

DROP TABLE IF EXISTS `chat`;

CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL AUTO_INCREMENT,
  `msg` text DEFAULT NULL,
  `added_on` varchar(20) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`chat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

/*Data for the table `chat` */

LOCK TABLES `chat` WRITE;

insert  into `chat`(`chat_id`,`msg`,`added_on`,`user_id`) values (9,'Assalam Alaikum everyone..!','05:04:13',1),(10,'How are you..','08:06:11',1),(11,'Hi everyone..','08:59:06',1),(13,'kjdfk','10:41:33',4),(14,'whats going on..??','10:42:13',4);

UNLOCK TABLES;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `is_online` enum('1','0') DEFAULT '0',
  `is_active` enum('1','0') DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

LOCK TABLES `user` WRITE;

insert  into `user`(`user_id`,`full_name`,`email`,`password`,`is_online`,`is_active`) values (1,'Zafar Sarki','zafar@gmail.com','123','0','1'),(2,'Manzoor Memon','manzoor@gmail.com','123','0','1'),(3,'Nadeem Chandio','nadeem@gmail.com','123','1','1'),(4,'Yousuf Khan','yousuf@gmail.com','123','0','1'),(5,'Ahsan Ali','ahsan@gmail.com','123','1','1'),(6,'Ahmed Ali','ahmed@gmail.com','123','0','1'),(7,'','','','0','1'),(8,'','','','0','1'),(9,'','','','0','1');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
