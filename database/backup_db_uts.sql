/*
SQLyog Community v13.2.0 (64 bit)
MySQL - 10.4.24-MariaDB : Database - db_uts
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_uts` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_uts`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `hrg` double DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `stok` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `barang` */

insert  into `barang`(`id`,`nama`,`hrg`,`keterangan`,`foto`,`stok`) values 
(1,'Nahida',4000000,'moyai','UI_AvatarIcon_Nahida.png',6);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `nama` varchar(60) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `telp` varchar(25) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_role` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`user_id`,`nama`,`email`,`telp`,`password`,`user_role`) values 
(1,'Naufal','naufal@gmail.com','081315126314','pass','admin'),
(2,'Muhammad','muhammad@gmail.com','081215134216','password','clerk'),
(3,'Majid','majid@gmail.com','081623145123','wordpass','cashier'),
(4,'Abdul','abdul@gmail.com','081562153214','swordsapp','clerk');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
