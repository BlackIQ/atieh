-- MariaDB dump 10.18  Distrib 10.5.8-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: Atieh
-- ------------------------------------------------------
-- Server version	10.5.8-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `agent`
--

DROP TABLE IF EXISTS `agent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agent` (
  `agent_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agent`
--

LOCK TABLES `agent` WRITE;
/*!40000 ALTER TABLE `agent` DISABLE KEYS */;
INSERT INTO `agent` VALUES ('369','agent','MissAgent','Lady Agent','missagent@yahoo.com','9220513088' , "10");
/*!40000 ALTER TABLE `agent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class` (
  `code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teacher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teacher_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_time` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tuition_price` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homework_session` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homework_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homework_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `days` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class`
--

LOCK TABLES `class` WRITE;
/*!40000 ALTER TABLE `class` DISABLE KEYS */;
INSERT INTO `class` VALUES ('147','Mr.Tabrizi','123','6:00 PM','7:30 PM','AEF5E','wa','s','195.000','10','Read Active Reading','Read Units 7 and 8','male','odd' , '10'),('148','Mr.Tabrizi','123','4:00 PM','5:30 PM','AEF4E','wa','s','155.000','11','Semi Final','Read For Semi Final','female','even' , '10');
/*!40000 ALTER TABLE `class` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `development`
--

DROP TABLE IF EXISTS `development`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `development` (
  `ip` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `development`
--

LOCK TABLES `development` WRITE;
/*!40000 ALTER TABLE `development` DISABLE KEYS */;
INSERT INTO `development` VALUES ('192.168.1.5');
/*!40000 ALTER TABLE `development` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `institute`
--

DROP TABLE IF EXISTS `institute`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `institute` (
  `code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iname` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totald` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leftd` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_user` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_pass` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `classes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teachers` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agents` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `students` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `institute`
--

LOCK TABLES `institute` WRITE;
/*!40000 ALTER TABLE `institute` DISABLE KEYS */;
INSERT INTO `institute` VALUES ('10','Homan','365','178','admin','admin','37','14','3','168','true');
/*!40000 ALTER TABLE `institute` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `txt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `who` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (3,'5872','اخرین تست','به قرآن دیگه ساعت 2:14 دیقه هستش . شب بخیر','Mar , 03 , 2021','MissAgent'),(4,'6334','Test For Before Mr.Meysam Comming','تست میکنیم ببینیم چطور میشه','Mar , 04 , 2021','MissAgent'),(5,'9932','Test on Phone','Testing on phone is a simple test','Mar , 04 , 2021','MissAgent'),(6,'7018','Xiaomi redmi 🎵 8',':))))','Mar , 05 , 2021','MissAgent');
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES ('0481244859','Amir','black','Amirhossein Mohammadi','amir@yahoo.com','9014784362','2136156859','9192186255','AEF5E','payed','147'),('0406171566','Meh','dice','Ix Igreg','x@yahoo.com','9126171566','2136150035','09366171566','AEF5E','not','147'),('041145578','Gir','gir','Xi greg','y@yahoo.com','9126171566','2136150035','09366171566','AEF5E','not','148');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher` (
  `code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher`
--

LOCK TABLES `teacher` WRITE;
/*!40000 ALTER TABLE `teacher` DISABLE KEYS */;
INSERT INTO `teacher` VALUES ('123','Asghar','mrtab','Aliasghar Tabrizi','ali@yahoo.com','9033300303');
/*!40000 ALTER TABLE `teacher` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-11 23:05:31
