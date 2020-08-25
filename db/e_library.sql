/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.4.11-MariaDB : Database - e_library
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`e_library` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `e_library`;

/*Table structure for table `departments` */

DROP TABLE IF EXISTS `departments`;

CREATE TABLE `departments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fuculty_id` int(11) NOT NULL,
  `dept_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `departments` */

insert  into `departments`(`id`,`fuculty_id`,`dept_name`,`created_at`,`updated_at`) values (1,1,'Computer Science & ICT','2020-03-01 08:38:39',NULL),(2,1,'Pysical Sciences','2020-03-01 08:39:34',NULL),(3,1,'Biological Sciences','2020-05-17 15:20:46',NULL),(4,4,'AGED','2020-05-18 12:32:42',NULL),(5,4,'Environmental Studies & Resource Development','2020-05-18 12:34:51',NULL),(6,4,'Animal Sciences',NULL,NULL),(7,2,'Education','2020-05-18 12:36:42',NULL),(8,3,'Business Adminstration','2020-05-18 12:38:01',NULL),(9,3,'Management Science','2020-05-18 12:38:41',NULL);

/*Table structure for table `fuculties` */

DROP TABLE IF EXISTS `fuculties`;

CREATE TABLE `fuculties` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fuculty_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `fuculties` */

insert  into `fuculties`(`id`,`fuculty_name`,`created_at`,`updated_at`) values (1,'Faculty of Science Engineering and Technology.','2020-03-01 08:38:08',NULL),(2,'Faculty of Education and Resources Development.','2020-03-01 08:38:12',NULL),(3,'Faculty of Business Studies.','2020-05-18 12:21:49',NULL),(4,'Faculty of Agriculture and Environmental Studies.','2020-05-18 12:22:07',NULL),(6,'Faculty of Arts and Humanities.','2020-05-18 12:22:53',NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2020_02_28_064555_create_posts_table',2),(4,'2020_02_28_131952_create_fuculties_table',3),(5,'2020_02_28_132256_create_departments_table',3);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tittle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `fuculty_id` int(11) DEFAULT NULL,
  `dept_id` int(11) NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `posts` */

insert  into `posts`(`id`,`tittle`,`author`,`user_id`,`fuculty_id`,`dept_id`,`cover_image`,`book_file`,`created_at`,`updated_at`) values (3,'MySQL for Beginners','Kevin Lioy',1,1,1,'mysql_1589363076.jpg','serial3_1589363076.pdf','2020-05-13 09:44:36','2020-05-13 09:44:36'),(4,'Java Absolute Beginners','Cosmina, Iuliana',1,1,1,'java_1589543117.jpg','3 - Object Oriented Analysis_1589543118.pdf','2020-05-15 11:45:18','2020-05-15 11:45:18'),(5,'Business Adminstration','Robert C Appleby',1,3,8,'business admin_1589795780.jpg','SUBSIDISED BUNDLES UPDATE_1589795781.pdf','2020-05-18 09:56:21','2020-05-30 19:21:24'),(6,'NCBA Environmental Science','S C Santara',3,4,5,'d9e749da7c981bf85933a6d556fae3f113936a74_1590902682.jpg','FRD Logiframe Academy v1.S_1590902683.pdf','2020-05-31 05:24:43','2020-05-31 05:24:43'),(7,'Environmental Chemistry','Balaram Pani',3,4,5,'9789386768025_1590920087.jpg','Windows® 10 For Dummies® (3rd Ed)(gnv64)_1590920088.pdf','2020-05-31 10:14:48','2020-05-31 10:14:48');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) DEFAULT 0,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`is_admin`,`role`,`remember_token`,`created_at`,`updated_at`) values (1,'Cleo','cleoctech@gmail.com',NULL,'$2y$10$dJnSX0leolbH.oXhVPm.RO4Uz3GEtcZkMki7pBbw9.Og2e.ZmRpk.',1,'Admin',NULL,'2020-02-25 11:07:21','2020-02-25 11:07:21'),(2,'Test','test1@gmail.com',NULL,'$2y$10$dJnSX0leolbH.oXhVPm.RO4Uz3GEtcZkMki7pBbw9.Og2e.ZmRpk.',0,'Student','vcIFWwfF2Su85ZJyRMCcUTwFXcPj8wxEq8mAOpmPZdvJhu17Ezsge9wG4krs','2020-05-25 11:15:33',NULL),(3,'Test 2','test2@gmail.com',NULL,'$2y$10$TxUOVj2UwunLpQ1vN0/JFeSzK1byPssoZ0bHtVUchBxdVwttSU/9S',1,'Lecturer',NULL,'2020-05-27 12:29:35','2020-05-27 12:29:35');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
