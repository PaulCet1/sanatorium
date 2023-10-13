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
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20230907111841','2023-09-07 13:22:54',221),('DoctrineMigrations\\Version20230907112821','2023-09-07 13:28:29',84),('DoctrineMigrations\\Version20230907201117','2023-09-07 22:12:01',502),('DoctrineMigrations\\Version20230921184426','2023-09-21 20:46:17',85),('DoctrineMigrations\\Version20230922112142','2023-09-22 13:22:38',65),('DoctrineMigrations\\Version20230924113113','2023-09-24 13:31:22',66),('DoctrineMigrations\\Version20230924114456','2023-09-24 13:45:03',388),('DoctrineMigrations\\Version20230925214215','2023-09-25 23:42:37',121),('DoctrineMigrations\\Version20230928194856','2023-09-28 21:49:01',51),('DoctrineMigrations\\Version20230928195610','2023-09-28 21:56:14',64),('DoctrineMigrations\\Version20230928205020','2023-09-28 22:50:25',66),('DoctrineMigrations\\Version20230929083959','2023-09-29 10:40:08',218),('DoctrineMigrations\\Version20230929101909','2023-09-29 12:19:16',77),('DoctrineMigrations\\Version20230929102157','2023-09-29 12:22:06',556),('DoctrineMigrations\\Version20230929122209','2023-09-29 14:22:13',162),('DoctrineMigrations\\Version20230929143830','2023-09-29 16:38:36',590),('DoctrineMigrations\\Version20230929144759','2023-09-29 16:48:03',304),('DoctrineMigrations\\Version20230929145252','2023-09-29 16:52:56',361),('DoctrineMigrations\\Version20230929145523','2023-09-29 16:55:26',62),('DoctrineMigrations\\Version20230929152142','2023-09-29 17:21:46',220),('DoctrineMigrations\\Version20231011205806','2023-10-11 22:58:17',343),('DoctrineMigrations\\Version20231013120515','2023-10-13 14:05:25',279),('DoctrineMigrations\\Version20231013125030','2023-10-13 14:50:37',498),('DoctrineMigrations\\Version20231013140128','2023-10-13 16:01:39',958),('DoctrineMigrations\\Version20231013145756','2023-10-13 16:58:02',944),('DoctrineMigrations\\Version20231013150211','2023-10-13 17:02:16',362);
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
-- Table structure for table `rehabilitation_stay`
--

DROP TABLE IF EXISTS `rehabilitation_stay`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rehabilitation_stay` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rehabilitation_stay`
--

LOCK TABLES `rehabilitation_stay` WRITE;
/*!40000 ALTER TABLE `rehabilitation_stay` DISABLE KEYS */;
INSERT INTO `rehabilitation_stay` VALUES (2,'Rehabilitacja A','2023-09-30 00:00:00','2023-10-12 00:00:00','2023-09-29 10:55:54'),(3,'Borowinowy tydzień','2018-01-01 00:00:00','2018-01-01 00:00:00','2023-09-29 11:56:31'),(4,'test','2021-01-01 01:01:00','2022-01-01 00:00:00','2023-09-29 12:23:25'),(7,'Jestem Jasiek','2018-03-16 00:00:00','2018-04-01 00:00:00','2023-10-02 18:59:37');
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
INSERT INTO `rehabilitation_stay_treatment` VALUES (2,12),(2,13),(2,14),(3,12),(3,13),(3,14),(3,15),(4,12),(4,13),(4,15),(7,12),(7,13),(7,14),(7,15);
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
  `rehabilitationstay_id` int DEFAULT NULL,
  `room_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_42C8495519EB6921` (`client_id`),
  KEY `IDX_42C84955FCA532D` (`rehabilitationstay_id`),
  KEY `IDX_42C8495554177093` (`room_id`),
  CONSTRAINT `FK_42C8495519EB6921` FOREIGN KEY (`client_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_42C8495554177093` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`),
  CONSTRAINT `FK_42C84955FCA532D` FOREIGN KEY (`rehabilitationstay_id`) REFERENCES `rehabilitation_stay` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation`
--

LOCK TABLES `reservation` WRITE;
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
INSERT INTO `reservation` VALUES (20,'2023-10-13 14:51:38',NULL,NULL,NULL),(21,'2023-10-13 14:58:56',3843,3,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room`
--

LOCK TABLES `room` WRITE;
/*!40000 ALTER TABLE `room` DISABLE KEYS */;
INSERT INTO `room` VALUES (1,1,6,'2023-09-25 21:52:05'),(4,4,8,'2023-09-28 19:59:47');
/*!40000 ALTER TABLE `room` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `therapy_room`
--

DROP TABLE IF EXISTS `therapy_room`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `therapy_room` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attendance_limit` int NOT NULL,
  `created` datetime NOT NULL,
  `number` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `therapy_room`
--

LOCK TABLES `therapy_room` WRITE;
/*!40000 ALTER TABLE `therapy_room` DISABLE KEYS */;
INSERT INTO `therapy_room` VALUES (2,'W2','personal',30,'2023-09-21 20:50:00',0),(4,'W11','group',8,'2023-09-22 10:37:31',2),(5,'W44','Group',20,'2023-09-22 11:05:43',0),(6,'Sala gimnastyczna 10','group',40,'2023-09-22 11:15:35',0),(7,'W11','group',60,'2023-09-22 11:26:46',1),(8,'Basen','group',15,'2023-09-25 10:20:43',10),(9,'Borowinka','group',3,'2023-09-29 11:50:29',11);
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
  `leading_person_id` int DEFAULT NULL,
  `price` double NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `therapy_room_id` int DEFAULT NULL,
  `number_of_patients` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_98013C315E237E06` (`name`),
  KEY `IDX_98013C31BC399E7D` (`leading_person_id`),
  KEY `IDX_98013C3141B4AC78` (`therapy_room_id`),
  CONSTRAINT `FK_98013C3141B4AC78` FOREIGN KEY (`therapy_room_id`) REFERENCES `therapy_room` (`id`),
  CONSTRAINT `FK_98013C31BC399E7D` FOREIGN KEY (`leading_person_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `treatment`
--

LOCK TABLES `treatment` WRITE;
/*!40000 ALTER TABLE `treatment` DISABLE KEYS */;
INSERT INTO `treatment` VALUES (12,'Ćwiczenia w wodzie','2023-09-25 10:21:26',3851,14,'60',8,16),(13,'Masaż klasyczny','2023-09-25 10:36:49',3853,60,'60',4,1),(14,'Kąpiel w błocie','2023-09-29 08:44:47',3853,120,'60',4,4),(15,'Zabieg borowinowy','2023-09-29 11:50:49',3847,60,'40',9,3),(16,'rew','2023-10-13 14:05:51',3847,123,'23',6,12);
/*!40000 ALTER TABLE `treatment` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=3864 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (3842,'admin@admin.com','admin','Admin Administrator','[\"ROLE_ADMIN\", \"ROLE_USER\", \"ROLE_INSTRUCTOR\"]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3843,'rschuppe@hilll.com','deja234','Ms. Nyah Stroman MD','[\"ROLE_CLIENT\"]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3844,'ethel.lehner@durgan.com','sincere.greenfelder','Dr. Jordi Schmitt I','[]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3845,'alfred.lynch@yahoo.com','dbartell','Breanna O\'Hara','[]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3846,'sschmidt@mueller.com','ruecker.roderick','Noel Greenfelder','[]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3847,'jake.bashirian@wolff.com','oma.lueilwitz','Effie Hamill','[\"ROLE_INSTRUCTOR\"]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3848,'eryan@hotmail.com','jany41','Emmy Abernathy','[]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3849,'vida.cummerata@cormier.com','homenick.nelda','Gilbert Langworth','[\"ROLE_INSTRUCTOR\"]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3850,'craig05@hotmail.com','roxanne.wuckert','Prof. Antoinette Bradtke Jr.','[]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3851,'nyasia40@gmail.com','jaqueline.schumm','Dr. Noel Shields','[\"ROLE_INSTRUCTOR\"]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3852,'borer.lynn@ritchie.com','khalid87','Dylan McGlynn','[]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3853,'pawel@o2.pl','pawel.cetnarowski','Paweł Kowalski','[\"ROLE_USER\", \"ROLE_ADMIN\", \"ROLE_INSTRUCTOR\"]','$2y$13$PhDoHUsLlwcqK2Q0LrozI.hFRkIvyl57q/dRPmX5rE0hqJE/ssaqe','2023-09-21 20:58:31'),(3854,'test@test.com','test','test','[]','$2y$13$x08L/HfZIwIES7o1JKPeQudIcm1VThUj3nbiwEQPCDojpkWVDywN2','2023-09-24 11:04:02'),(3858,'test@test.comq','test123','testtest','[\"ROLE_USER\", \"ROLE_ADMIN\", \"ROLE_INSTRUCTOR\"]','$2y$13$Ll.7nTAmLH21Xxh/x4l5rOdgODOpbgY.E48hACWJ4luEm4IlWaIR2','2023-09-28 21:21:37'),(3859,'regular@o2.pl','regular','Regular Kowalski','[]','$2y$13$HglijaBvfL.Th3Pp28qDDOM77CIgc9V0CXWPw8kg5RCFtIrDtkgMm','2023-09-29 09:21:51'),(3860,'pawel@sanatorium.com','pawel123','pawel cet','[\"ROLE_USER\", \"ROLE_ADMIN\", \"ROLE_INSTRUCTOR\"]','$2y$13$vH4NvmYhQw8KtHmg6/cxUu2sekJkW.LXhzVyPtbSaud5zFUSQIrgK','2023-10-02 09:29:29'),(3863,'test@test.comq1','test412412','tetetee','[\"ROLE_USER\", \"ROLE_ADMIN\", \"ROLE_INSTRUCTOR\", \"ROLE_CLIENT\"]','$2y$13$koOyukv2Q9u1ZiNPGLO/COAn8ddkQRGGD9s/QNemtgarcYxcstw8a','2023-10-13 12:11:20');
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

-- Dump completed on 2023-10-13 15:24:00
