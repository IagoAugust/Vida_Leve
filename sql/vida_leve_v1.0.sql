CREATE DATABASE  IF NOT EXISTS `vida_leve` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `vida_leve`;
-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: vida_leve
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `anamnese`
--

DROP TABLE IF EXISTS `anamnese`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `anamnese` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `paciente_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_anamnese_paciente1_idx` (`paciente_id`),
  CONSTRAINT `fk_anamnese_paciente1` FOREIGN KEY (`paciente_id`) REFERENCES `paciente` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anamnese`
--

LOCK TABLES `anamnese` WRITE;
/*!40000 ALTER TABLE `anamnese` DISABLE KEYS */;
/*!40000 ALTER TABLE `anamnese` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `area`
--

DROP TABLE IF EXISTS `area`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `area` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) DEFAULT NULL,
  `usuario_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_area_usuario1_idx` (`usuario_id`),
  CONSTRAINT `fk_area_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `area`
--

LOCK TABLES `area` WRITE;
/*!40000 ALTER TABLE `area` DISABLE KEYS */;
/*!40000 ALTER TABLE `area` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `area_has_paciente`
--

DROP TABLE IF EXISTS `area_has_paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `area_has_paciente` (
  `area_id` int NOT NULL,
  `paciente_id` int NOT NULL,
  PRIMARY KEY (`area_id`,`paciente_id`),
  KEY `fk_area_has_paciente_paciente1_idx` (`paciente_id`),
  KEY `fk_area_has_paciente_area1_idx` (`area_id`),
  CONSTRAINT `fk_area_has_paciente_area1` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`),
  CONSTRAINT `fk_area_has_paciente_paciente1` FOREIGN KEY (`paciente_id`) REFERENCES `paciente` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `area_has_paciente`
--

LOCK TABLES `area_has_paciente` WRITE;
/*!40000 ALTER TABLE `area_has_paciente` DISABLE KEYS */;
/*!40000 ALTER TABLE `area_has_paciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consulta`
--

DROP TABLE IF EXISTS `consulta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `consulta` (
  `id` int NOT NULL AUTO_INCREMENT,
  `DataHistorico` date DEFAULT NULL,
  `Frequencia` char(1) DEFAULT NULL,
  `paciente_id` int NOT NULL,
  `usuario_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_consulta_paciente1_idx` (`paciente_id`),
  KEY `fk_consulta_usuario1_idx` (`usuario_id`),
  CONSTRAINT `fk_consulta_paciente1` FOREIGN KEY (`paciente_id`) REFERENCES `paciente` (`id`),
  CONSTRAINT `fk_consulta_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consulta`
--

LOCK TABLES `consulta` WRITE;
/*!40000 ALTER TABLE `consulta` DISABLE KEYS */;
/*!40000 ALTER TABLE `consulta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paciente`
--

DROP TABLE IF EXISTS `paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `paciente` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) DEFAULT NULL,
  `CPF` char(11) DEFAULT NULL,
  `RG` char(9) DEFAULT NULL,
  `Profissao` varchar(45) DEFAULT NULL,
  `DataNasc` date DEFAULT NULL,
  `usuario_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_paciente_usuario_idx` (`usuario_id`),
  CONSTRAINT `fk_paciente_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paciente`
--

LOCK TABLES `paciente` WRITE;
/*!40000 ALTER TABLE `paciente` DISABLE KEYS */;
/*!40000 ALTER TABLE `paciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perguntas`
--

DROP TABLE IF EXISTS `perguntas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `perguntas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(100) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `area_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_perguntas_area1_idx` (`area_id`),
  CONSTRAINT `fk_perguntas_area1` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perguntas`
--

LOCK TABLES `perguntas` WRITE;
/*!40000 ALTER TABLE `perguntas` DISABLE KEYS */;
/*!40000 ALTER TABLE `perguntas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perguntas_anamnese`
--

DROP TABLE IF EXISTS `perguntas_anamnese`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `perguntas_anamnese` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `anamnese_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_perguntas_anamnese_anamnese1_idx` (`anamnese_id`),
  CONSTRAINT `fk_perguntas_anamnese_anamnese1` FOREIGN KEY (`anamnese_id`) REFERENCES `anamnese` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perguntas_anamnese`
--

LOCK TABLES `perguntas_anamnese` WRITE;
/*!40000 ALTER TABLE `perguntas_anamnese` DISABLE KEYS */;
/*!40000 ALTER TABLE `perguntas_anamnese` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resposta`
--

DROP TABLE IF EXISTS `resposta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `resposta` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(100) DEFAULT NULL,
  `perguntas_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_resposta_perguntas1_idx` (`perguntas_id`),
  CONSTRAINT `fk_resposta_perguntas1` FOREIGN KEY (`perguntas_id`) REFERENCES `perguntas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resposta`
--

LOCK TABLES `resposta` WRITE;
/*!40000 ALTER TABLE `resposta` DISABLE KEYS */;
/*!40000 ALTER TABLE `resposta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `respota_anamnese`
--

DROP TABLE IF EXISTS `respota_anamnese`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `respota_anamnese` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(100) DEFAULT NULL,
  `perguntas_anamnese_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_respota_anamnese_perguntas_anamnese1_idx` (`perguntas_anamnese_id`),
  CONSTRAINT `fk_respota_anamnese_perguntas_anamnese1` FOREIGN KEY (`perguntas_anamnese_id`) REFERENCES `perguntas_anamnese` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `respota_anamnese`
--

LOCK TABLES `respota_anamnese` WRITE;
/*!40000 ALTER TABLE `respota_anamnese` DISABLE KEYS */;
/*!40000 ALTER TABLE `respota_anamnese` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `CPF` char(11) DEFAULT NULL,
  `Telefone` char(12) DEFAULT NULL,
  `Cargo` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-20 21:37:42
