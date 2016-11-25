CREATE DATABASE  IF NOT EXISTS `ferreterias` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ferreterias`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: ferreterias
-- ------------------------------------------------------
-- Server version	5.7.16-log

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
-- Table structure for table `estanteporpasillo`
--

DROP TABLE IF EXISTS `estanteporpasillo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estanteporpasillo` (
  `idestantePorpasillo` int(11) NOT NULL,
  `estante_idEstante` int(11) NOT NULL,
  `pasillo_idPasillo` int(11) NOT NULL,
  PRIMARY KEY (`idestantePorpasillo`),
  KEY `fk_estantePorpasillo_estante1_idx` (`estante_idEstante`),
  KEY `fk_estanteporpasillo_pasillo1_idx` (`pasillo_idPasillo`),
  CONSTRAINT `fk_estantePorpasillo_estante1` FOREIGN KEY (`estante_idEstante`) REFERENCES `estante` (`idEstante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_estanteporpasillo_pasillo1` FOREIGN KEY (`pasillo_idPasillo`) REFERENCES `pasillo` (`idPasillo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estanteporpasillo`
--

LOCK TABLES `estanteporpasillo` WRITE;
/*!40000 ALTER TABLE `estanteporpasillo` DISABLE KEYS */;
INSERT INTO `estanteporpasillo` VALUES (1,1,1),(2,2,2),(3,3,3),(4,4,4),(5,5,5),(6,6,6),(7,7,7),(8,8,8),(9,9,9),(10,1,9),(11,2,8),(12,3,7),(13,4,6),(14,5,4),(15,6,5),(16,7,3),(17,8,2),(18,9,1);
/*!40000 ALTER TABLE `estanteporpasillo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-25  6:31:07
