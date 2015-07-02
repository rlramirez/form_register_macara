-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: macara2015db
-- ------------------------------------------------------
-- Server version	5.5.43-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `inscritos`
--

DROP TABLE IF EXISTS `inscritos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inscritos` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tandem` varchar(2) DEFAULT NULL,
  `presicion` varchar(2) DEFAULT NULL,
  `distancia` varchar(2) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `club` varchar(100) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `seguro` varchar(2) DEFAULT NULL,
  `alergia` varchar(255) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `sangre` varchar(5) DEFAULT NULL,
  `parapente` varchar(50) DEFAULT NULL,
  `homologacion` varchar(50) DEFAULT NULL,
  `colores` varchar(50) DEFAULT NULL,
  `cellhelp1` varchar(15) DEFAULT NULL,
  `cellhelp2` varchar(15) DEFAULT NULL,
  `cellhelp3` varchar(15) DEFAULT NULL,
  `fechareg` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inscritos`
--
