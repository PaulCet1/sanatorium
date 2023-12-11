-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: localhost    Database: default
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_migration_versions`
--

LOCK TABLES `doctrine_migration_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20230907111841','2023-09-07 13:22:54',221),('DoctrineMigrations\\Version20230907112821','2023-09-07 13:28:29',84),('DoctrineMigrations\\Version20230907201117','2023-09-07 22:12:01',502),('DoctrineMigrations\\Version20230921184426','2023-09-21 20:46:17',85),('DoctrineMigrations\\Version20230922112142','2023-09-22 13:22:38',65),('DoctrineMigrations\\Version20230924113113','2023-09-24 13:31:22',66),('DoctrineMigrations\\Version20230924114456','2023-09-24 13:45:03',388),('DoctrineMigrations\\Version20230925214215','2023-09-25 23:42:37',121),('DoctrineMigrations\\Version20230928194856','2023-09-28 21:49:01',51),('DoctrineMigrations\\Version20230928195610','2023-09-28 21:56:14',64),('DoctrineMigrations\\Version20230928205020','2023-09-28 22:50:25',66),('DoctrineMigrations\\Version20230929083959','2023-09-29 10:40:08',218),('DoctrineMigrations\\Version20230929101909','2023-09-29 12:19:16',77),('DoctrineMigrations\\Version20230929102157','2023-09-29 12:22:06',556),('DoctrineMigrations\\Version20230929122209','2023-09-29 14:22:13',162),('DoctrineMigrations\\Version20230929143830','2023-09-29 16:38:36',590),('DoctrineMigrations\\Version20230929144759','2023-09-29 16:48:03',304),('DoctrineMigrations\\Version20230929145252','2023-09-29 16:52:56',361),('DoctrineMigrations\\Version20230929145523','2023-09-29 16:55:26',62),('DoctrineMigrations\\Version20230929152142','2023-09-29 17:21:46',220),('DoctrineMigrations\\Version20231011205806','2023-10-11 22:58:17',343),('DoctrineMigrations\\Version20231013120515','2023-10-13 14:05:25',279),('DoctrineMigrations\\Version20231013125030','2023-10-13 14:50:37',498),('DoctrineMigrations\\Version20231013140128','2023-10-13 16:01:39',958),('DoctrineMigrations\\Version20231013145756','2023-10-13 16:58:02',944),('DoctrineMigrations\\Version20231013150211','2023-10-13 17:02:16',362),('DoctrineMigrations\\Version20231013153152','2023-10-13 17:31:59',163),('DoctrineMigrations\\Version20231013154251','2023-10-13 17:43:09',64),('DoctrineMigrations\\Version20231013154554','2023-10-13 17:45:58',69),('DoctrineMigrations\\Version20231013161647','2023-10-13 18:16:50',968),('DoctrineMigrations\\Version20231013161854','2023-10-13 18:18:57',562),('DoctrineMigrations\\Version20231015144030','2023-10-15 16:46:44',125),('DoctrineMigrations\\Version20231017202542','2023-10-17 22:25:49',270),('DoctrineMigrations\\Version20231017205151','2023-10-17 22:51:55',122),('DoctrineMigrations\\Version20231017210311','2023-10-17 23:03:14',74),('DoctrineMigrations\\Version20231017210549','2023-10-17 23:05:53',342),('DoctrineMigrations\\Version20231017213045','2023-10-17 23:30:48',149),('DoctrineMigrations\\Version20231103213411','2023-11-03 21:34:19',213),('DoctrineMigrations\\Version20231103215232','2023-11-03 21:52:37',678),('DoctrineMigrations\\Version20231103215632','2023-11-03 21:56:35',447),('DoctrineMigrations\\Version20231103223317','2023-11-03 22:35:39',295),('DoctrineMigrations\\Version20231104130016','2023-11-04 13:00:26',514),('DoctrineMigrations\\Version20231104130516','2023-11-04 13:05:21',163),('DoctrineMigrations\\Version20231109194825','2023-11-10 21:44:40',63),('DoctrineMigrations\\Version20231109195008','2023-11-10 21:44:40',246),('DoctrineMigrations\\Version20231109214427','2023-11-10 21:44:41',380),('DoctrineMigrations\\Version20231110214642','2023-11-10 21:47:54',328),('DoctrineMigrations\\Version20231110234412','2023-11-10 23:44:30',90),('DoctrineMigrations\\Version20231111124125','2023-11-11 12:41:32',410),('DoctrineMigrations\\Version20231111150655','2023-11-11 15:06:59',65),('DoctrineMigrations\\Version20231111172759','2023-11-11 17:28:07',66),('DoctrineMigrations\\Version20231111174849','2023-11-11 17:48:53',55),('DoctrineMigrations\\Version20231111224628','2023-11-11 22:46:32',59),('DoctrineMigrations\\Version20231117221509','2023-11-17 22:15:17',67),('DoctrineMigrations\\Version20231123225825','2023-11-23 22:59:19',290),('DoctrineMigrations\\Version20231126205005','2023-11-26 20:50:13',347),('DoctrineMigrations\\Version20231126205256','2023-11-26 20:53:00',505),('DoctrineMigrations\\Version20231126210044','2023-11-26 21:00:49',62);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messenger_messages`
--

DROP TABLE IF EXISTS `messenger_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `messenger_messages` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `body` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  KEY `IDX_75EA56E016BA31DB` (`delivered_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messenger_messages`
--

LOCK TABLES `messenger_messages` WRITE;
/*!40000 ALTER TABLE `messenger_messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messenger_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `places`
--

DROP TABLE IF EXISTS `places`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `places` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_FEAF6C555E237E06` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=166 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `places`
--

LOCK TABLES `places` WRITE;
/*!40000 ALTER TABLE `places` DISABLE KEYS */;
INSERT INTO `places` VALUES (157,'Vero dolor natus.','Stokesport','77004','2023-09-07 23:24:55'),(158,'Amet rem repellat.','Koreyhaven','01352','2023-09-07 23:24:55'),(159,'Illum quia unde.','New Jaronbury','74095-2881','2023-09-07 23:24:55'),(160,'Provident eius accusamus.','New Pariston','47207','2023-09-07 23:24:55'),(161,'Asperiores aperiam.','Izaiahbury','92238-8446','2023-09-07 23:24:55'),(162,'Quibusdam hic aut et.','North Aylinport','02787-8577','2023-09-07 23:24:55'),(163,'Qui unde officiis dignissimos.','Ratkefurt','05797','2023-09-07 23:24:55'),(164,'Adipisci iste laborum.','West Rosetta','25987-6443','2023-09-07 23:24:55'),(165,'Omnis et amet modi.','Port Julius','00566','2023-09-07 23:24:55');
/*!40000 ALTER TABLE `places` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `planned_stay`
--

DROP TABLE IF EXISTS `planned_stay`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `planned_stay` (
  `id` int NOT NULL AUTO_INCREMENT,
  `start_date` datetime NOT NULL,
  `end_date` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `rehabilitationStay_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E551EE01C0776AB1` (`rehabilitationStay_id`),
  CONSTRAINT `FK_E551EE01C0776AB1` FOREIGN KEY (`rehabilitationStay_id`) REFERENCES `rehabilitation_stay` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `planned_stay`
--

LOCK TABLES `planned_stay` WRITE;
/*!40000 ALTER TABLE `planned_stay` DISABLE KEYS */;
INSERT INTO `planned_stay` VALUES (39,'2024-05-01 00:00:00','2024-05-09 00:00:00','2023-11-11 13:12:34',30),(40,'2024-03-31 00:00:00','2024-04-14 00:00:00','2023-11-11 13:35:04',31),(41,'2024-06-03 00:00:00','2024-06-13 00:00:00','2023-11-11 22:03:52',32),(42,'2025-01-01 00:00:00','2025-01-09 00:00:00','2023-11-26 22:25:28',30),(43,'2024-06-01 00:00:00','2024-06-11 00:00:00','2023-11-27 23:06:09',33),(44,'2023-12-20 00:00:00','2024-01-03 00:00:00','2023-12-07 20:33:14',31);
/*!40000 ALTER TABLE `planned_stay` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rehabilitation_stay`
--

DROP TABLE IF EXISTS `rehabilitation_stay`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rehabilitation_stay` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `duration` int NOT NULL,
  `treatment_profile_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A6254374DF84AFAD` (`treatment_profile_id`),
  CONSTRAINT `FK_A6254374DF84AFAD` FOREIGN KEY (`treatment_profile_id`) REFERENCES `treatment_profile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rehabilitation_stay`
--

LOCK TABLES `rehabilitation_stay` WRITE;
/*!40000 ALTER TABLE `rehabilitation_stay` DISABLE KEYS */;
INSERT INTO `rehabilitation_stay` VALUES (30,'Rehabilitacja poudarowa','2023-11-11 13:10:13',8,7),(31,'Dbam o serce','2023-11-11 13:34:16',14,5),(32,'Ulga dla serca','2023-11-11 22:03:07',10,5),(33,'Turnus testowy','2023-11-27 23:00:49',10,5);
/*!40000 ALTER TABLE `rehabilitation_stay` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rehabilitation_stay_treatment`
--

DROP TABLE IF EXISTS `rehabilitation_stay_treatment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rehabilitation_stay_treatment` (
  `rehabilitation_stay_id` int NOT NULL,
  `treatment_id` int NOT NULL,
  PRIMARY KEY (`rehabilitation_stay_id`,`treatment_id`),
  KEY `IDX_58CD0D6AA5E9CD9B` (`rehabilitation_stay_id`),
  KEY `IDX_58CD0D6A471C0366` (`treatment_id`),
  CONSTRAINT `FK_58CD0D6A471C0366` FOREIGN KEY (`treatment_id`) REFERENCES `treatment` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_58CD0D6AA5E9CD9B` FOREIGN KEY (`rehabilitation_stay_id`) REFERENCES `rehabilitation_stay` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rehabilitation_stay_treatment`
--

LOCK TABLES `rehabilitation_stay_treatment` WRITE;
/*!40000 ALTER TABLE `rehabilitation_stay_treatment` DISABLE KEYS */;
INSERT INTO `rehabilitation_stay_treatment` VALUES (30,20),(30,21),(30,23),(30,28),(30,29),(30,33),(31,20),(31,22),(31,25),(31,28),(31,31),(31,37),(32,20),(32,21),(32,22),(32,33),(33,20),(33,21),(33,22),(33,23),(33,24),(33,25),(33,26),(33,27),(33,28),(33,29),(33,30),(33,31),(33,32),(33,33),(33,34),(33,35),(33,37);
/*!40000 ALTER TABLE `rehabilitation_stay_treatment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reservation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `client_id` int DEFAULT NULL,
  `plannedStay_id` int DEFAULT NULL,
  `room_id` int DEFAULT NULL,
  `num_of_people` int NOT NULL,
  `referral_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nfzplace` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_42C8495519EB6921` (`client_id`),
  KEY `IDX_42C8495554177093` (`room_id`),
  KEY `IDX_42C849553A587B23` (`plannedStay_id`),
  CONSTRAINT `FK_42C8495519EB6921` FOREIGN KEY (`client_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_42C849553A587B23` FOREIGN KEY (`plannedStay_id`) REFERENCES `planned_stay` (`id`),
  CONSTRAINT `FK_42C8495554177093` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation`
--

LOCK TABLES `reservation` WRITE;
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
INSERT INTO `reservation` VALUES (81,'2023-11-17 22:16:25',3842,41,1,4,'15/11/111111/A/P5','11111111111','Wielkopolski Oddział Wojewódzki NFZ','accepted'),(83,'2023-11-26 22:27:22',3842,42,1,2,'15/11/111111/A/P6','11111111111','Wielkopolski Oddział Wojewódzki NFZ','rejected'),(84,'2023-11-27 00:27:58',3867,39,9,6,'01/01/010101/A/B6','11111111111','Dolnośląski Oddział Wojewódzki NFZ','accepted'),(85,'2023-11-27 23:11:13',3842,43,8,4,'05/01/000000/B/A5','11111111111','Łódzki Oddział Wojewódzki NFZ','accepted'),(86,'2023-12-03 21:57:02',3842,39,1,4,'16/02/020202/B/A6','00000000000','Zachodniopomorski Oddział Wojewódzki NFZ','accepted'),(87,'2023-12-07 20:29:53',3842,43,1,5,'13/13/323133/A/A5','31273812312','Świętokrzyski Oddział Wojewódzki NFZ','accepted'),(88,'2023-12-07 20:30:33',3842,43,1,12,'13//1/3/3231/3/3/A/A5','31273812312','Świętokrzyski Oddział Wojewódzki NFZ','waiting'),(89,'2023-12-07 20:30:48',3842,43,1,1,'13//1/3/3231/3/3/A/A5','31273812312','Świętokrzyski Oddział Wojewódzki NFZ','waiting'),(90,'2023-12-11 10:10:59',3842,40,5,1,'06/13/213312/B/A5','01011001101','Małopolski Oddział Wojewódzki NFZ','waiting'),(91,'2023-12-11 12:44:33',3869,39,1,2,'16/01/110010/B/A6','11111111111','Zachodniopomorski Oddział Wojewódzki NFZ','waiting');
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `room` (
  `id` int NOT NULL AUTO_INCREMENT,
  `room_number` int NOT NULL,
  `places_num` int NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_729F519BD7DED995` (`room_number`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room`
--

LOCK TABLES `room` WRITE;
/*!40000 ALTER TABLE `room` DISABLE KEYS */;
INSERT INTO `room` VALUES (1,1,2,'2023-09-25 21:52:05'),(4,4,8,'2023-09-28 19:59:47'),(5,2,2,'2023-11-03 14:51:15'),(6,3,2,'2023-11-03 14:51:19'),(8,5,2,'2023-11-03 14:51:28'),(9,6,2,'2023-11-03 14:51:32'),(10,7,2,'2023-11-03 14:51:37');
/*!40000 ALTER TABLE `room` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sanatory_survey`
--

DROP TABLE IF EXISTS `sanatory_survey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sanatory_survey` (
  `id` int NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `reservation_id` int DEFAULT NULL,
  `rehabilitation_stay_rating` int NOT NULL,
  `treatment_rating` int NOT NULL,
  `staff_rating` int NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5C9F9781B83297E7` (`reservation_id`),
  CONSTRAINT `FK_5C9F9781B83297E7` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sanatory_survey`
--

LOCK TABLES `sanatory_survey` WRITE;
/*!40000 ALTER TABLE `sanatory_survey` DISABLE KEYS */;
INSERT INTO `sanatory_survey` VALUES (1,'2023-11-26 22:08:37',81,4,4,3,'Example text'),(2,'2023-11-27 00:28:27',84,4,4,3,'Coś mi się nie podoba ale nie pamiętam co dokładnie.');
/*!40000 ALTER TABLE `sanatory_survey` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `therapy_room`
--

DROP TABLE IF EXISTS `therapy_room`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `therapy_room` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `session` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attendance_limit` int NOT NULL,
  `created` datetime NOT NULL,
  `number` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `therapy_room`
--

LOCK TABLES `therapy_room` WRITE;
/*!40000 ALTER TABLE `therapy_room` DISABLE KEYS */;
INSERT INTO `therapy_room` VALUES (10,'Sala Rehabilitacji','group',9,'2023-10-15 15:07:32',1),(11,'Gabinet Terapeutyczny','group',10,'2023-10-15 15:07:50',2),(12,'Gabinet Masażu','group',4,'2023-10-15 15:08:16',3),(13,'Pracownia Fizjoterapii','group',10,'2023-10-15 15:08:37',4),(14,'Gabinet Zabiegowy','group',2,'2023-10-15 15:09:08',5),(15,'Gabinet Odnowy Biologicznej','group',4,'2023-10-15 15:09:27',6),(16,'Gabinet Balneologiczny','group',2,'2023-10-15 15:09:53',7),(17,'Gabinet Chiropraktora','personal',1,'2023-10-15 15:10:12',8),(18,'Sala do Zabiegów Aquafit','group',15,'2023-10-15 15:10:38',9),(19,'Gabinet Akupunktury','group',6,'2023-10-15 15:11:03',10),(20,'Plener','group',0,'2023-11-08 23:12:58',100);
/*!40000 ALTER TABLE `therapy_room` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `treatment`
--

DROP TABLE IF EXISTS `treatment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `treatment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `price` double NOT NULL,
  `duration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `therapy_room_id` int DEFAULT NULL,
  `number_of_patients` int NOT NULL,
  `leading_person_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_98013C315E237E06` (`name`),
  KEY `IDX_98013C3141B4AC78` (`therapy_room_id`),
  KEY `IDX_98013C31BC399E7D` (`leading_person_id`),
  CONSTRAINT `FK_98013C3141B4AC78` FOREIGN KEY (`therapy_room_id`) REFERENCES `therapy_room` (`id`),
  CONSTRAINT `FK_98013C31BC399E7D` FOREIGN KEY (`leading_person_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `treatment`
--

LOCK TABLES `treatment` WRITE;
/*!40000 ALTER TABLE `treatment` DISABLE KEYS */;
INSERT INTO `treatment` VALUES (20,'Fizjoterapia','2023-10-15 15:12:26',60,'60',10,0,3847),(21,'Kinezyterapia','2023-10-15 15:12:52',60,'60',10,0,3847),(22,'Masaż leczniczy','2023-10-15 15:13:09',60,'60',10,0,3853),(23,'Elektroterapia','2023-10-15 15:13:35',80,'30',10,0,3851),(24,'Terapia manualna','2023-10-15 15:13:56',60,'120',10,0,3849),(25,'Gimnastyka Korekcyjna','2023-10-15 15:14:20',30,'60',10,0,3849),(26,'Terapia zajęciowa','2023-10-15 15:14:47',60,'60',11,0,3844),(27,'Terapia poznawczo-behawioralna','2023-10-15 15:15:10',60,'60',11,0,3844),(28,'Terapia oddechowa','2023-10-15 15:16:34',40,'60',11,0,3847),(29,'Terapia po urazach','2023-10-15 15:16:59',60,'60',11,0,3853),(30,'Terapia ręki','2023-10-15 15:17:34',60,'60',11,0,3844),(31,'Masaż relaksacyjny','2023-10-15 15:17:54',60,'60',12,0,3847),(32,'Masaż spotowy','2023-10-15 15:18:09',60,'60',12,0,3851),(33,'Ćwiczenia izometryczne','2023-10-15 15:18:41',60,'60',13,0,3847),(34,'Elektrostymulacja','2023-10-15 15:19:04',60,'30',13,0,3851),(35,'Zabieg na skórę','2023-10-15 15:19:34',60,'70',14,0,3860),(37,'Wycieczka w góry','2023-11-08 23:13:37',200,'300',20,40,3851);
/*!40000 ALTER TABLE `treatment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `treatment_plan`
--

DROP TABLE IF EXISTS `treatment_plan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `treatment_plan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rehabilitation_stay_id` int DEFAULT NULL,
  `treatment_id` int DEFAULT NULL,
  `start_time` time NOT NULL,
  `created` datetime NOT NULL,
  `end_time` time NOT NULL,
  `day_number` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1E99976CA5E9CD9B` (`rehabilitation_stay_id`),
  KEY `IDX_1E99976C471C0366` (`treatment_id`),
  CONSTRAINT `FK_1E99976C471C0366` FOREIGN KEY (`treatment_id`) REFERENCES `treatment` (`id`),
  CONSTRAINT `FK_1E99976CA5E9CD9B` FOREIGN KEY (`rehabilitation_stay_id`) REFERENCES `rehabilitation_stay` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `treatment_plan`
--

LOCK TABLES `treatment_plan` WRITE;
/*!40000 ALTER TABLE `treatment_plan` DISABLE KEYS */;
INSERT INTO `treatment_plan` VALUES (99,30,20,'08:00:00','2023-11-11 13:10:57','10:00:00',1),(100,30,23,'09:00:00','2023-11-11 13:11:15','12:00:00',2),(101,30,29,'12:00:00','2023-11-11 13:11:29','14:00:00',6),(102,30,28,'08:00:00','2023-11-11 13:32:56','10:00:00',3),(103,31,37,'08:00:00','2023-11-11 13:34:36','16:00:00',1),(104,31,31,'17:00:00','2023-11-11 13:42:36','20:00:00',1),(105,31,37,'08:00:00','2023-11-11 13:43:04','14:00:00',2),(106,31,20,'03:00:00','2023-11-11 16:47:57','04:00:00',1),(107,31,20,'04:00:00','2023-11-11 16:59:34','05:00:00',1),(108,32,21,'04:00:00','2023-11-11 22:03:17','15:00:00',1),(109,32,21,'16:00:00','2023-11-12 22:28:44','15:00:00',1),(110,33,37,'09:00:00','2023-11-27 23:01:48','15:00:00',1),(111,33,31,'16:00:00','2023-11-27 23:02:26','18:00:00',1),(112,33,20,'09:00:00','2023-11-27 23:02:46','10:45:00',2),(113,33,27,'11:00:00','2023-11-27 23:03:09','13:00:00',2),(114,33,24,'14:00:00','2023-11-27 23:03:28','18:00:00',2),(115,33,37,'10:00:00','2023-11-27 23:03:47','15:00:00',5);
/*!40000 ALTER TABLE `treatment_plan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `treatment_profile`
--

DROP TABLE IF EXISTS `treatment_profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `treatment_profile` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `treatment_profile`
--

LOCK TABLES `treatment_profile` WRITE;
/*!40000 ALTER TABLE `treatment_profile` DISABLE KEYS */;
INSERT INTO `treatment_profile` VALUES (1,'Alergologia',1,'2023-11-11 00:02:45'),(2,'Cukrzyca',2,'2023-11-11 00:03:17'),(3,'Dermatologia',3,'2023-11-11 00:03:35'),(4,'Ginekologia',4,'2023-11-11 00:03:52'),(5,'Kardiologia',5,'2023-11-11 12:50:37'),(7,'Rehabilitacja poudarowa',6,'2023-11-11 13:09:23');
/*!40000 ALTER TABLE `treatment_profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3873 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (3842,'admin@admin.com','admin','Paweł Cetnarowski','[\"ROLE_ADMIN\", \"ROLE_USER\", \"ROLE_INSTRUCTOR\", \"ROLE_CLIENT\"]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3843,'rschuppe@hilll.com','deja234','Ms. Nyah Stroman MD','[\"ROLE_CLIENT\"]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3844,'ethel.lehner@durgan.com','sincere.greenfelder','Dr. Jordi Schmitt I','[\"ROLE_USER\", \"ROLE_INSTRUCTOR\"]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3845,'alfred.lynch@yahoo.com','dbartell','Breanna O\'Hara','[]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3846,'sschmidt@mueller.com','ruecker.roderick','Noel Greenfelder','[]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3847,'jake.bashirian@wolff.com','oma.lueilwitz','Effie Hamill','[\"ROLE_INSTRUCTOR\"]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3848,'eryan@hotmail.com','jany41','Emmy Abernathy','[]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3849,'vida.cummerata@cormier.com','homenick.nelda','Gilbert Langworth','[\"ROLE_INSTRUCTOR\"]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3850,'craig05@hotmail.com','roxanne.wuckert','Prof. Antoinette Bradtke Jr.','[]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3851,'nyasia40@gmail.com','jaqueline.schumm','Dr. Noel Shields','[\"ROLE_INSTRUCTOR\"]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3852,'borer.lynn@ritchie.com','khalid87','Dylan McGlynn','[]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3853,'pawel@o2.pl','pawel.cetnarowski','Paweł Kowalski','[\"ROLE_USER\", \"ROLE_ADMIN\", \"ROLE_INSTRUCTOR\"]','$2y$13$PhDoHUsLlwcqK2Q0LrozI.hFRkIvyl57q/dRPmX5rE0hqJE/ssaqe','2023-09-21 20:58:31'),(3854,'test@test.com','test','test','[]','$2y$13$x08L/HfZIwIES7o1JKPeQudIcm1VThUj3nbiwEQPCDojpkWVDywN2','2023-09-24 11:04:02'),(3858,'test@test.comq','test123','testtest','[\"ROLE_USER\", \"ROLE_ADMIN\", \"ROLE_INSTRUCTOR\"]','$2y$13$Ll.7nTAmLH21Xxh/x4l5rOdgODOpbgY.E48hACWJ4luEm4IlWaIR2','2023-09-28 21:21:37'),(3859,'regular@o2.pl','regular','Regular Kowalski','[]','$2y$13$HglijaBvfL.Th3Pp28qDDOM77CIgc9V0CXWPw8kg5RCFtIrDtkgMm','2023-09-29 09:21:51'),(3860,'pawel@sanatorium.com','pawel123','pawel cet','[\"ROLE_USER\", \"ROLE_ADMIN\", \"ROLE_INSTRUCTOR\"]','$2y$13$vH4NvmYhQw8KtHmg6/cxUu2sekJkW.LXhzVyPtbSaud5zFUSQIrgK','2023-10-02 09:29:29'),(3863,'test@test.comq1','test412412','tetetee','[\"ROLE_USER\", \"ROLE_ADMIN\", \"ROLE_INSTRUCTOR\", \"ROLE_CLIENT\"]','$2y$13$koOyukv2Q9u1ZiNPGLO/COAn8ddkQRGGD9s/QNemtgarcYxcstw8a','2023-10-13 12:11:20'),(3864,'client@elda.pl','client','Klient Klientowski','[\"ROLE_CLIENT\"]','$2y$13$C.tQQWNh6Z60wGEB7kLYG.Qi6GZMY.cizgSxrVkKoj0f4S/WsS4hq','2023-11-03 15:04:04'),(3865,'normal@elda.pl','normal','normal normal','[]','$2y$13$ZhYRahqr3e7WWCWo2Up0wO0lg/i7bJryzbj0UiaUEDVVOmPFt3Pga','2023-11-03 17:29:13'),(3866,'jkowalski@o2.pl','jkowalski','Jan Kowalski','[]','$2y$13$yZ4c9zdm0K77ZDDEOfKtWOXz1V0d9ljpppzJvrxNINIhGg6rz3WXG','2023-11-10 23:18:03'),(3867,'piotr@poczta.pl','piotr123','Piotr Nowak','[]','$2y$13$76oXhVT8F2u0XwyUpCnEY.c92WdC0UlVhG8bvyoVTfetpQc86p9pC','2023-11-12 22:24:26'),(3869,'anna.nowak@o2.pl','anna.nowak','Anna Nowak','[\"ROLE_USER\", \"ROLE_CLIENT\"]','$2y$13$SC7VjfxnqTSoy/Egofyj5OuoGaEj6q169AkS/s9GkLG4Z7OTCSrfi','2023-12-11 12:40:36');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-11 13:00:38
