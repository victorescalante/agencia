-- MySQL dump 10.13  Distrib 8.0.13, for osx10.14 (x86_64)
--
-- Host: 127.0.0.1    Database: ruth
-- ------------------------------------------------------
-- Server version	8.0.13

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `fails`
--

DROP TABLE IF EXISTS `fails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `fails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `problem` varchar(155) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `solution` varchar(155) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `state` varchar(155) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fails`
--

LOCK TABLES `fails` WRITE;
/*!40000 ALTER TABLE `fails` DISABLE KEYS */;
INSERT INTO `fails` (`id`, `date`, `problem`, `solution`, `state`) VALUES (1,'2019-03-25 02:40:02','problem 1','solution 1','x'),(2,'2019-03-25 02:41:48','problem 2','solution 2','Y'),(5,'2019-03-25 00:00:00','motor','mtor','funcional'),(6,'2019-03-25 04:09:36','motor','mtor','funcional'),(7,'2019-03-25 04:30:01','Otro problema','dssjdjs','funcional'),(8,'2019-03-25 04:30:47','Este es un problema 30','Esta es la solucion','dañado'),(9,'2019-03-25 04:31:00','Este es otro problema','Solucion','funcional');
/*!40000 ALTER TABLE `fails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_properties`
--

DROP TABLE IF EXISTS `product_properties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `product_properties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_properties`
--

LOCK TABLES `product_properties` WRITE;
/*!40000 ALTER TABLE `product_properties` DISABLE KEYS */;
INSERT INTO `product_properties` (`id`, `product_id`, `property_id`) VALUES (1,5,1),(2,5,2),(3,5,3),(4,5,4),(5,5,5),(6,3,1),(7,3,2),(8,3,3),(9,3,4),(10,3,5),(11,15,1),(12,15,2),(13,16,1),(14,16,2),(15,17,1),(16,17,2),(17,17,3),(18,18,1),(19,18,2),(20,18,3),(21,19,1),(22,19,2),(23,19,3),(24,20,2),(25,20,3),(26,20,4),(27,21,2),(28,21,3),(29,21,4),(30,22,1),(31,22,2),(32,22,3),(33,22,4),(34,22,5),(35,23,1);
/*!40000 ALTER TABLE `product_properties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_revision`
--

DROP TABLE IF EXISTS `product_revision`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `product_revision` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) DEFAULT NULL,
  `revision_id` int(11) DEFAULT NULL,
  `property_value` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_revision`
--

LOCK TABLES `product_revision` WRITE;
/*!40000 ALTER TABLE `product_revision` DISABLE KEYS */;
INSERT INTO `product_revision` (`id`, `property_id`, `revision_id`, `property_value`) VALUES (19,2,14,'Momento'),(20,3,14,'Frenos'),(21,4,14,'Fuga'),(22,2,15,'Momento'),(23,3,15,'Frenos'),(24,4,15,'Fuga'),(25,2,11,'Momento 11'),(26,3,11,'Frenos 11'),(27,4,11,'Fuga 11'),(28,2,12,'Momento 12'),(29,3,12,'Frenos 12'),(30,4,12,'Fuga 12'),(31,2,16,'Momento new'),(32,3,16,'Frenos new'),(33,4,16,'Fuga new'),(34,2,17,'dsadsa'),(35,3,17,'dsad'),(36,4,17,'dsa'),(37,1,18,'a'),(38,2,18,'b'),(39,3,18,'c'),(40,4,18,'d'),(41,5,18,'e'),(42,1,19,'ok'),(43,2,19,'ok'),(44,3,19,'ok'),(45,4,19,'ng'),(46,5,19,'ok'),(47,1,20,'ok'),(48,1,21,'ok');
/*!40000 ALTER TABLE `product_revision` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(155) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `brand` varchar(155) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `agency` varchar(155) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Codigo de la agencia',
  `funcionality` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Funcionalidad del equipo',
  `date_last_manteiner` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `name`, `brand`, `agency`, `code`, `funcionality`, `date_last_manteiner`) VALUES (3,'Equipo 1','dsadsads','mitsubishi','codigo1',NULL,NULL),(4,'Equipo2','Marca2','hyundai','codigo2',NULL,NULL),(5,'Aspiradora','Trupper','hyundai','codigo3',NULL,NULL),(6,'Prueba equipo 1','Marca2','hyundai','Codigo01',NULL,NULL),(7,'Prueba quipo2','MArca2','hyundai','codigo2',NULL,NULL),(8,'dsad','jhkjh','hyundai','nhjkjh',NULL,NULL),(9,'dsadasdsadsa','asdsad','mitsubishi','dsadsa',NULL,NULL),(10,'sadas','dsadsa','hyundai','dsadsa',NULL,NULL),(11,'sadas','dsadsa','hyundai','dsadsa',NULL,NULL),(12,'sadas','dsadsa','hyundai','dsadsa',NULL,NULL),(13,'sadas','dsadsa','hyundai','dsadsa',NULL,NULL),(14,'sadas','dsadsa','hyundai','dsadsa',NULL,NULL),(15,'sadas','dsadsa','hyundai','dsadsa',NULL,NULL),(16,'sadas','dsadsa','hyundai','dsadsa',NULL,NULL),(17,'sadas','dsadsa','hyundai','dsadsa',NULL,NULL),(18,'sadas','dsadsa','hyundai','dsadsa',NULL,NULL),(19,'sadas','dsadsa','hyundai','dsadsa',NULL,NULL),(20,'Equipo ejemplo X','MarcaX','continental_metepec','CodigoX',NULL,NULL),(21,'Equipo XC','MarcaXC','hyundai','CodigoXC',NULL,NULL),(22,'CCC','CCC','continental_metepec','CCC',NULL,NULL),(23,'ds','dsa','continental_metepec','dsa',NULL,NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `properties` (
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `properties`
--

LOCK TABLES `properties` WRITE;
/*!40000 ALTER TABLE `properties` DISABLE KEYS */;
INSERT INTO `properties` (`name`, `id`) VALUES ('Estado de llantas',1),('Revisar momento libre',2),('Revisar los frenos',3),('Revisar que las mangueras no tengan fuga',4),('Revisar nivel de aceite',5);
/*!40000 ALTER TABLE `properties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `providers`
--

DROP TABLE IF EXISTS `providers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `providers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `polize` tinyint(1) DEFAULT '0',
  `expired_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Proveedores';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `providers`
--

LOCK TABLES `providers` WRITE;
/*!40000 ALTER TABLE `providers` DISABLE KEYS */;
INSERT INTO `providers` (`id`, `name`, `phone`, `email`, `polize`, `expired_at`) VALUES (1,'dsadsad','71919778','vescalante@lumbrera.com.mx',NULL,NULL);
/*!40000 ALTER TABLE `providers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `revisions`
--

DROP TABLE IF EXISTS `revisions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `revisions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_revision` datetime DEFAULT NULL,
  `comment` text COLLATE utf8_spanish_ci,
  `product_id` int(11) DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `revisions`
--

LOCK TABLES `revisions` WRITE;
/*!40000 ALTER TABLE `revisions` DISABLE KEYS */;
INSERT INTO `revisions` (`id`, `date_revision`, `comment`, `product_id`, `date_updated`) VALUES (1,'2019-03-31 21:11:17','Ok',5,NULL),(3,'2019-03-31 21:11:17','Este es un comentario para el producto 3',3,NULL),(11,NULL,'Comentario revision 11',21,NULL),(12,NULL,'Comentario revision 12',21,NULL),(13,NULL,'Comentario bien para 21_R',21,NULL),(14,NULL,'Comentario bien para 21',21,NULL),(15,NULL,'Comentario bien para 21',21,NULL),(16,'2019-04-01 02:59:01','Comentario nueva revision',21,NULL),(17,'2019-04-01 03:02:43','ddsads',21,'2019-04-01 03:02:43'),(18,'2019-04-01 03:03:31','Comentario',22,'2019-04-01 03:03:42'),(19,'2019-04-01 13:15:28','ng',3,'2019-04-01 13:15:39'),(20,'2019-04-01 13:18:42','dsad',23,'2019-04-01 13:18:42'),(21,'2019-04-01 13:18:51','dsadsa',23,'2019-04-01 13:18:51');
/*!40000 ALTER TABLE `revisions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-04-01  5:21:50
