-- MySQL dump 10.13  Distrib 8.0.29, for Linux (x86_64)
--
-- Host: localhost    Database: patient2
-- ------------------------------------------------------
-- Server version	8.0.29-0ubuntu0.21.10.2

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
-- Table structure for table `answersbotman`
--

DROP TABLE IF EXISTS `answersbotman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `answersbotman` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `message_id` bigint unsigned NOT NULL,
  `order` int NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `answersbotman_message_id_foreign` (`message_id`),
  CONSTRAINT `answersbotman_message_id_foreign` FOREIGN KEY (`message_id`) REFERENCES `messagesbotman` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answersbotman`
--

LOCK TABLES `answersbotman` WRITE;
/*!40000 ALTER TABLE `answersbotman` DISABLE KEYS */;
INSERT INTO `answersbotman` VALUES (1,1,0,'Our team is ready to help, but to get you to the right person, what do you need help with?'),(2,1,5,'A couple quick questions to make sure we get you to the right person'),(3,1,2,'Great! we\'re here to help modernize and accelerate your claims and payments process.'),(4,1,3,'You can find a list of our current openings on our careers page'),(5,1,4,'No worries! Just ring the bell to start over 😀No worries! Just ring the bell to start over 😀'),(6,3,7,'To best get you the support you need, please call our support team at 123-456-7890 ext. 111'),(7,3,7,'Thank you for chatting with us today!'),(8,3,8,'To best get you the support you need, please call our support team at 123-456-7890 ext. 111'),(9,3,8,'Thank you for chatting with us today!'),(10,3,9,'To best get you the support you need, please call our support team at 123-456-7890 ext. 111'),(11,3,9,'Thank you for chatting with us today!'),(12,3,10,'To best get you the support you need, please call our support team at 123-456-7890 ext. 111'),(13,3,10,'Thank you for chatting with us today!'),(14,3,11,'To best get you the support you need, please call our support team at 123-456-7890 ext. 111'),(15,3,11,'Thank you for chatting with us today!'),(16,3,12,'To best get you the support you need, please call our support team at 123-456-7890 ext. 111'),(17,3,12,'Thank you for chatting with us today!'),(18,3,13,'To best get you the support you need, please call our support team at 123-456-7890 ext. 111'),(19,3,13,'Thank you for chatting with us today!'),(20,4,15,' helps you manage your claims by letting you submit, edit, and manage all your claims online. Do this all directly from your practice management software.'),(21,4,16,'We make your payment collection easy. A centralized dashboard gives you a holistic view of the patient payment activity. Gives your patients an easy way to pay and set-up payment plans.'),(22,5,17,'didnt get you'),(23,5,18,'didnt get you'),(24,5,19,'didnt get you'),(25,6,17,'didnt get you'),(26,6,18,'didnt get you'),(27,6,19,'didnt get you'),(28,6,17,'didnt get you'),(29,6,18,'didnt get you'),(30,6,19,'didnt get you'),(31,7,20,'Great! Let me take you to the right place.'),(32,7,21,'Great! Let me take you to the right place.'),(33,7,22,'Great! Let me take you to the right place.'),(34,7,23,'I’m a current user of CheckinAsyst looking for support'),(35,8,24,'Different practices have tailored CheckinAsyst to meet their unique needs. Please reach out to your doctor’s office directly for resolving your queries.'),(36,8,24,'Hope I was able to help.'),(37,8,25,'Don’t worry, we have your back. Please have your organization’s SPOC for CheckinAsyst raise a ticket on: support.healthasyst.com'),(38,8,25,'Alternatively, you can also reach us at: +1 (404) 596 8228 and then select Option #2.'),(39,8,25,'Thank you for enquiring.');
/*!40000 ALTER TABLE `answersbotman` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buttonsbotman`
--

DROP TABLE IF EXISTS `buttonsbotman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `buttonsbotman` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `message_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int NOT NULL,
  `next` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `buttonsbotman_message_id_foreign` (`message_id`),
  CONSTRAINT `buttonsbotman_message_id_foreign` FOREIGN KEY (`message_id`) REFERENCES `messagesbotman` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buttonsbotman`
--

LOCK TABLES `buttonsbotman` WRITE;
/*!40000 ALTER TABLE `buttonsbotman` DISABLE KEYS */;
INSERT INTO `buttonsbotman` VALUES (1,1,'i need support',0,3),(2,1,'Talk with payments pro',1,2),(3,1,'Learn more about patientconnect',2,4),(4,1,'Jobs at patientconnect',3,0),(5,1,'Just browsing',4,0),(6,2,'No, chat with a rep about sales',5,3),(7,2,'Get product support',6,3),(8,3,'Payments',7,0),(9,3,'Claims',8,0),(10,3,'Attachments',9,0),(11,3,'Eligbility',10,0),(12,3,'Claim Status',11,0),(13,3,'ERAS',12,0),(14,3,'Patient Statement',13,0),(15,4,'Claims management',14,5),(16,4,'Claims submission',15,6),(17,4,'Payments',16,6),(18,5,'Yes! Lets do it',17,0),(19,5,'Can you just email me',18,0),(20,5,'No thanks',19,0),(21,6,'Yes! Lets do it',17,0),(22,6,'Can you just email me',18,0),(23,6,'No thanks',19,0),(24,6,'Yes! Lets do it',17,0),(25,6,'Can you just email me',18,0),(26,6,'No thanks',19,0),(27,7,'i\'m looking for more information about your patient check in and communication platform',20,0),(28,7,'i\'m a healthcare technology company looking for it services partner',21,0),(29,7,'i want to start an exciting career with ',22,0),(30,7,'i\'m a current user looking for support',23,8),(31,8,'i\'m a patient',24,0),(32,8,'i\'m a healthcare practice',25,0);
/*!40000 ALTER TABLE `buttonsbotman` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messagesbotman`
--

DROP TABLE IF EXISTS `messagesbotman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `messagesbotman` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messagesbotman`
--

LOCK TABLES `messagesbotman` WRITE;
/*!40000 ALTER TABLE `messagesbotman` DISABLE KEYS */;
INSERT INTO `messagesbotman` VALUES (1,'what can i help you with'),(2,'Sounds great. But first, do you need help with an existing product'),(3,'what can i help you with'),(4,'What solutions are you interested in?'),(5,'What do you want to learn more about?'),(6,'Ready to speak to one of our experts?'),(7,'Hi, I’m Peter. I am here to help you find what you are looking for. How can I help you today?'),(8,'Are you a patient or a healthcare practice?');
/*!40000 ALTER TABLE `messagesbotman` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_04_24_094218_subscribe',1),(6,'2023_04_28_080633_message_migration',1),(7,'2023_05_08_115734_answerbotman',1),(8,'2023_05_09_120045_buttons_question',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscriber`
--

DROP TABLE IF EXISTS `subscriber`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subscriber` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscriber`
--

LOCK TABLES `subscriber` WRITE;
/*!40000 ALTER TABLE `subscriber` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscriber` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-09 12:32:01
