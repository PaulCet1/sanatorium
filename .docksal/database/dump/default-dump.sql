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
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20230907111841','2023-09-07 13:22:54',221),('DoctrineMigrations\\Version20230907112821','2023-09-07 13:28:29',84),('DoctrineMigrations\\Version20230907201117','2023-09-07 22:12:01',502),('DoctrineMigrations\\Version20230921184426','2023-09-21 20:46:17',85);
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
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reservation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation`
--

LOCK TABLES `reservation` WRITE;
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `therapy_room`
--

LOCK TABLES `therapy_room` WRITE;
/*!40000 ALTER TABLE `therapy_room` DISABLE KEYS */;
INSERT INTO `therapy_room` VALUES (2,'W2','personal',40,'2023-09-21 20:50:00'),(3,'W12','group',20,'2023-09-21 21:34:29');
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_98013C315E237E06` (`name`),
  KEY `IDX_98013C31BC399E7D` (`leading_person_id`),
  CONSTRAINT `FK_98013C31BC399E7D` FOREIGN KEY (`leading_person_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `treatment`
--

LOCK TABLES `treatment` WRITE;
/*!40000 ALTER TABLE `treatment` DISABLE KEYS */;
INSERT INTO `treatment` VALUES (1,'Masaż klasyczny','2023-09-19 11:48:38',3849),(2,'Basen','2023-09-19 11:57:34',3849),(3,'test','2023-09-19 14:31:11',3851),(6,'Swimming pools','2023-09-19 19:55:56',3847);
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
) ENGINE=InnoDB AUTO_INCREMENT=3854 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (3842,'admin@admin.com','admin','Admin Administrator','[\"ROLE_ADMIN\"]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3843,'rschuppe@hilll.com','deja234','Ms. Nyah Stroman MD','[]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3844,'ethel.lehner@durgan.com','sincere.greenfelder','Dr. Jordi Schmitt I','[]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3845,'alfred.lynch@yahoo.com','dbartell','Breanna O\'Hara','[]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3846,'sschmidt@mueller.com','ruecker.roderick','Noel Greenfelder','[]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3847,'jake.bashirian@wolff.com','oma.lueilwitz','Effie Hamill','[\"ROLE_INSTRUCTOR\"]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3848,'eryan@hotmail.com','jany41','Emmy Abernathy','[]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3849,'vida.cummerata@cormier.com','homenick.nelda','Gilbert Langworth','[\"ROLE_INSTRUCTOR\"]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3850,'craig05@hotmail.com','roxanne.wuckert','Prof. Antoinette Bradtke Jr.','[]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3851,'nyasia40@gmail.com','jaqueline.schumm','Dr. Noel Shields','[\"ROLE_INSTRUCTOR\"]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3852,'borer.lynn@ritchie.com','khalid87','Dylan McGlynn','[]','$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym','2023-09-07 23:24:55'),(3853,'pawel@o2.pl','pawel.cetnarowski','Paweł Kowalski','[\"ROLE_USER\", \"ROLE_ADMIN\", \"ROLE_INSTRUCTOR\"]','$2y$13$PhDoHUsLlwcqK2Q0LrozI.hFRkIvyl57q/dRPmX5rE0hqJE/ssaqe','2023-09-21 20:58:31');
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

-- Dump completed on 2023-09-21 21:39:00
