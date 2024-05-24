-- MySQL dump 10.13  Distrib 8.0.24, for Win64 (x86_64)
--
-- Host: localhost    Database: user_administration
-- ------------------------------------------------------
-- Server version	8.1.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `id` int unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `daily_wage` decimal(10,2) NOT NULL,
  `daily_worked` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leave_requests`
--

DROP TABLE IF EXISTS `leave_requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `leave_requests` (
  `id` int unsigned NOT NULL,
  `employee_name` varchar(45) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `reason` text NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leave_requests`
--

LOCK TABLES `leave_requests` WRITE;
/*!40000 ALTER TABLE `leave_requests` DISABLE KEYS */;
/*!40000 ALTER TABLE `leave_requests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `position` varchar(45) DEFAULT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` longtext NOT NULL,
  `email` varchar(100) NOT NULL,
  `active` bit(1) DEFAULT b'1',
  `salary` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name_UNIQUE` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=1038 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1001,'Janitor','ivero','Sanity','Nivero','password123','Ivero@email.com',_binary '','13,000.00'),(1003,'Bookkeeper','Samie','dor','Samvador','12324322','Sam@email.com',_binary '\0','23,000.00'),(1004,'Secretary','kimie','Pacheco','EdPach','898962','Ed@email.com',_binary '','25,000.00'),(1025,'Assistant','Xander','Ford','Xander1233','$2y$10$3UbYm2LcKp/fH4j42otzYeW/yd8767pBCNpmDmsWpRgY1rEbzOkni','Xander@gmail.com',_binary '','20,000.00'),(1026,'Administrative Officer','Raquel','Mangarin','Raq123','$2y$10$H1wTDLxZ8yMZ9233Sh.IVeS0zkhwla8hZu5cnsLHY.aLumbu2qXIm','Raq@gmail.com',_binary '','63,000.00'),(1027,'Finance Manager','Marvin','Ola','Marvin123','$2y$10$u0EPm61icSmaZp9fBrYEB./sPyZIbky2Ux0Gr4LlosQn1EtiUJcmu','Marvin@gmail.com',_binary '','65,000.00'),(1028,'Chief Marketing Officer','Charlie','Agustin','Charlie','$2y$10$L9AVnLjM0Bj5ppv0LDefwei1wuVbx.0UcsVGAEZ7QW/Akzqi48UXm','Charlie@gmail.com',_binary '','66,000.00'),(1029,'Chief Information Officer','viego','ruined','viego123','$2y$10$1CrespkvMRCn.FmLdSZG5uPlkJPNVcdHkkjro0bhWSbpi31AFNooa','viego@gmail.com',_binary '','67,500.00'),(1030,'Sales Representative','Greenhills','Peligro','Green1127','$2y$10$uUVs1by7pcm1LDpXZQYQjOe3lykDeZcQbcVmPwVnWMlnNLHvUYEuy','Greenhills@gmail.com',_binary '','67,000.00'),(1031,'HR Generalist','Kata','Rina','Katarina123','$2y$10$yOkUiMB4.xS2AgCTaPLMWe0qEelYBUlHU3KdTpjLHI6cEffJLRbyu','Kata@gmail.com',_binary '\0','68,000.00'),(1033,'Project Manager','Kim','Asias','kim123','$2y$10$QcdL8LLqPPc7.tQEvQBkcekuFfIcF0tfISxdf0FqPu6hVJFIwYQIq','Kim@gmail.com',_binary '','71,000.00'),(1034,'Chief Executive Officer','Alan','Wake','Alan123','$2y$10$QXbNZNGUYmUnEk0Gt6xhX.IIX2iX2WDkscKnH7pHkLPYLuXZ2X/B6','Alan@gmail.com',_binary '','80,000.00'),(1036,'Chief Financial Officer','Eve','Valentine','Eve123 ','$2y$10$niG8LYPfyZNIJZYaT/EVsuHwlSpmtyIXzxIJbhR3j6AdvD8v3zTOi','Eve@gmail.com',_binary '','75,000.00'),(1037,'Marketing Manager','Tylie','Mae','Tylie123','$2y$10$4UzyeReMSvf3fi6SoqtkaezDEWXO.lbbpkrHmOIn/XoqkIhDQC2LG','Tylie@gmail.com',_binary '','76,000.00');
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

-- Dump completed on 2024-05-20 15:05:41
