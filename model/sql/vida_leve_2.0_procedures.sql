-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: vida_leve
-- ------------------------------------------------------
-- Server version	8.0.28

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
  `id_anamnese` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `paciente_id` int NOT NULL,
  PRIMARY KEY (`id_anamnese`),
  KEY `fk_anamnese_paciente1_idx` (`paciente_id`),
  CONSTRAINT `fk_anamnese_paciente1` FOREIGN KEY (`paciente_id`) REFERENCES `paciente` (`id_paciente`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anamnese`
--

LOCK TABLES `anamnese` WRITE;
/*!40000 ALTER TABLE `anamnese` DISABLE KEYS */;
INSERT INTO `anamnese` VALUES (1,'ultricies eu nibh quisque',10),(2,'duis faucibus accumsan odio',1),(3,'posuere cubilia curae donec pharetra',16),(4,'nibh fusce',8),(5,'sed lacus morbi sem',9),(6,'luctus ultricies eu nibh',7),(7,'nec euismod scelerisque',4),(8,'vestibulum aliquet ultrices',12),(9,'donec posuere metus vitae',2),(10,'ut rhoncus aliquet pulvinar',16),(11,'eleifend luctus',15),(12,'rutrum nulla tellus in',6),(13,'lectus aliquam sit amet',8),(14,'id justo sit amet',9),(15,'id nisl venenatis lacinia aenean',6),(16,'ipsum ac tellus',6),(17,'in est risus auctor sed',19),(18,'duis',6),(19,'suspendisse',16),(20,'in hac habitasse platea',15);
/*!40000 ALTER TABLE `anamnese` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `area`
--

DROP TABLE IF EXISTS `area`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `area` (
  `id_area` int NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) DEFAULT NULL,
  `usuario_id` int NOT NULL,
  PRIMARY KEY (`id_area`),
  KEY `fk_area_usuario1_idx` (`usuario_id`),
  CONSTRAINT `fk_area_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `area`
--

LOCK TABLES `area` WRITE;
/*!40000 ALTER TABLE `area` DISABLE KEYS */;
INSERT INTO `area` VALUES (1,'Enfermagem',7),(2,'Educação Fisica',6),(3,'Fisioterapia',5),(4,'Biomedicina',4),(5,'Farmácia',3),(6,'Psicologia',2),(7,'Nutrição',1);
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
  CONSTRAINT `fk_area_has_paciente_area1` FOREIGN KEY (`area_id`) REFERENCES `area` (`id_area`),
  CONSTRAINT `fk_area_has_paciente_paciente1` FOREIGN KEY (`paciente_id`) REFERENCES `paciente` (`id_paciente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `area_has_paciente`
--

LOCK TABLES `area_has_paciente` WRITE;
/*!40000 ALTER TABLE `area_has_paciente` DISABLE KEYS */;
INSERT INTO `area_has_paciente` VALUES (1,1),(2,1),(4,1),(1,2),(2,3),(5,3),(4,4),(3,5),(7,5),(1,6),(5,6),(3,7),(2,14),(6,16),(6,17);
/*!40000 ALTER TABLE `area_has_paciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consulta`
--

DROP TABLE IF EXISTS `consulta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `consulta` (
  `id_consulta` int NOT NULL AUTO_INCREMENT,
  `DataHistorico` date DEFAULT NULL,
  `Frequencia` char(1) DEFAULT NULL,
  `paciente_id` int NOT NULL,
  `usuario_id` int NOT NULL,
  PRIMARY KEY (`id_consulta`),
  KEY `fk_consulta_paciente1_idx` (`paciente_id`),
  KEY `fk_consulta_usuario1_idx` (`usuario_id`),
  CONSTRAINT `fk_consulta_paciente1` FOREIGN KEY (`paciente_id`) REFERENCES `paciente` (`id_paciente`),
  CONSTRAINT `fk_consulta_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consulta`
--

LOCK TABLES `consulta` WRITE;
/*!40000 ALTER TABLE `consulta` DISABLE KEYS */;
INSERT INTO `consulta` VALUES (1,'2021-03-18',NULL,18,5),(2,'2020-12-08',NULL,10,6),(3,'2021-01-05',NULL,6,3),(4,'2020-09-16',NULL,19,9),(5,'2020-01-24',NULL,7,4),(6,'2022-03-22',NULL,16,4),(7,'2022-09-06',NULL,9,1),(8,'2021-12-30',NULL,2,5),(9,'2020-04-30',NULL,14,1),(10,'2020-06-30',NULL,10,4),(11,'2022-02-16',NULL,13,5),(12,'2020-07-07',NULL,13,8),(13,'2021-03-25',NULL,2,3),(14,'2022-08-18',NULL,18,9),(15,'2021-01-24',NULL,16,10),(16,'2021-06-11',NULL,19,5),(17,'2021-10-12',NULL,6,8),(18,'2020-04-22',NULL,8,7),(19,'2020-11-12',NULL,17,8),(20,'2021-02-19',NULL,2,1);
/*!40000 ALTER TABLE `consulta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paciente`
--

DROP TABLE IF EXISTS `paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `paciente` (
  `id_paciente` int NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) DEFAULT NULL,
  `CPF` char(11) DEFAULT NULL,
  `RG` char(9) DEFAULT NULL,
  `Profissao` varchar(45) DEFAULT NULL,
  `DataNasc` date DEFAULT NULL,
  `usuario_id` int NOT NULL,
  `img_paciente` blob,
  PRIMARY KEY (`id_paciente`),
  KEY `fk_paciente_usuario_idx` (`usuario_id`),
  CONSTRAINT `fk_paciente_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paciente`
--

LOCK TABLES `paciente` WRITE;
/*!40000 ALTER TABLE `paciente` DISABLE KEYS */;
INSERT INTO `paciente` VALUES (1,'James Chantillon','96169613018','235508492','Web Designer II','1987-10-07',3,NULL),(2,'Arliene Cramb','20746918451','218004887','Director of Sales','1973-06-25',2,NULL),(3,'Ulysses Perrot','32076783586','521610266','Staff Accountant III','1998-11-17',3,NULL),(4,'Bathsheba Andraud','73229182735','427217958','Senior Sales Associate','1994-01-15',8,NULL),(5,'Trumaine Deverill','95664775596','342398669','Internal Auditor','1986-07-14',3,NULL),(6,'Gabriel Pedwell','50280863506','587439347','Accounting Assistant IV','1985-02-05',7,NULL),(7,'Elissa Farquarson','90897009231','503146105','General Manager','1982-05-22',6,NULL),(8,'Nickolaus Van Arsdall','17626274012','770800120','Electrical Engineer','2001-12-28',6,NULL),(9,'Spence Meeke','69245965554','918595928','Human Resources Assistant IV','1983-12-11',4,NULL),(10,'Enid Yell','36705049934','669968157','Design Engineer','1980-05-20',8,NULL),(11,'Reba Golde','73799613669','498181346','Business Systems Development Analyst','1995-09-24',10,NULL),(12,'Kristofer Rosita','49432702068','811262539','VP Sales','1972-01-28',9,NULL),(13,'Gerardo Gallehock','25195356221','921759256','Desktop Support Technician','1974-05-29',10,NULL),(14,'Valma Hun','64620868209','706116560','Technical Writer','1996-07-01',7,NULL),(15,'Catharine Linnell','31505481064','644324391','Director of Sales','1984-03-04',6,NULL),(16,'Tadeas Castanho','61627232508','214989354','Marketing Manager','1984-09-22',9,NULL),(17,'Blanche Jeanon','33158900518','872478873','Dental Hygienist','1974-03-17',7,NULL),(18,'Olag Varns','96846363321','280545443','Assistant Professor','2001-06-30',6,NULL),(19,'Stevena Titley','68316246314','407199438','Recruiter','1982-06-28',9,NULL),(20,'Frank Gerssam','63208097262','961615231','Senior Cost Accountant','1983-03-19',3,NULL);
/*!40000 ALTER TABLE `paciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perguntas`
--

DROP TABLE IF EXISTS `perguntas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `perguntas` (
  `id_perguntas` int NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(100) DEFAULT NULL,
  `data_p` date DEFAULT NULL,
  `area_id` int NOT NULL,
  PRIMARY KEY (`id_perguntas`),
  KEY `fk_perguntas_area1_idx` (`area_id`),
  CONSTRAINT `fk_perguntas_area1` FOREIGN KEY (`area_id`) REFERENCES `area` (`id_area`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perguntas`
--

LOCK TABLES `perguntas` WRITE;
/*!40000 ALTER TABLE `perguntas` DISABLE KEYS */;
INSERT INTO `perguntas` VALUES (1,'iaculis congue vivamus metus arcu adipiscing molestie hendrerit at','2020-11-02',6),(2,'volutpat eleifend donec ut dolor morbi vel','2020-09-23',4),(3,'sit amet erat nulla tempus vivamus in felis eu','2020-03-23',6),(4,'nulla tellus in sagittis dui vel nisl duis','2020-01-02',3),(5,'mattis pulvinar nulla pede ullamcorper augue a','2021-01-13',4),(6,'nec dui luctus rutrum nulla tellus','2022-01-22',7),(7,'felis sed lacus morbi sem mauris laoreet ut','2021-05-06',2),(8,'vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae','2021-03-30',4),(9,'nullam porttitor lacus at turpis donec posuere metus vitae ipsum','2020-11-14',2),(10,'nisi volutpat eleifend donec ut dolor morbi vel','2022-06-17',2),(11,'vitae ipsum aliquam non mauris morbi','2021-09-09',6),(12,'ac lobortis vel dapibus at diam nam','2022-07-28',2),(13,'sit amet consectetuer adipiscing elit proin risus praesent lectus vestibulum','2020-04-11',4),(14,'semper porta volutpat quam pede','2022-09-13',4),(15,'magna bibendum imperdiet nullam orci pede','2021-09-06',2),(16,'curabitur convallis duis consequat dui nec','2021-09-16',3),(17,'amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus','2020-04-04',3),(18,'in faucibus orci luctus et ultrices posuere cubilia','2021-09-14',5),(19,'in consequat ut nulla sed accumsan felis ut','2020-07-02',2),(20,'posuere cubilia curae nulla dapibus','2021-11-05',2);
/*!40000 ALTER TABLE `perguntas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perguntas_anamnese`
--

DROP TABLE IF EXISTS `perguntas_anamnese`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `perguntas_anamnese` (
  `id_perguntas_anamnese` int NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(100) DEFAULT NULL,
  `data_p` date DEFAULT NULL,
  `anamnese_id` int NOT NULL,
  PRIMARY KEY (`id_perguntas_anamnese`),
  KEY `fk_perguntas_anamnese_anamnese1_idx` (`anamnese_id`),
  CONSTRAINT `fk_perguntas_anamnese_anamnese1` FOREIGN KEY (`anamnese_id`) REFERENCES `anamnese` (`id_anamnese`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perguntas_anamnese`
--

LOCK TABLES `perguntas_anamnese` WRITE;
/*!40000 ALTER TABLE `perguntas_anamnese` DISABLE KEYS */;
INSERT INTO `perguntas_anamnese` VALUES (1,'ultrices enim lorem ipsum dolor sit','2022-04-04',3),(2,'libero nam dui proin leo odio porttitor id consequat','2021-12-01',9),(3,'vestibulum rutrum rutrum neque aenean auctor gravida sem praesent id','2020-09-08',1),(4,'odio cras mi pede malesuada in imperdiet et','2021-09-01',9),(5,'semper sapien a libero nam dui proin leo odio porttitor','2022-06-01',17),(6,'ut dolor morbi vel lectus','2020-07-27',17),(7,'felis eu sapien cursus vestibulum proin eu mi','2022-02-06',6),(8,'nullam molestie nibh in lectus','2020-12-01',4),(9,'nisi vulputate nonummy maecenas tincidunt lacus at','2020-12-05',7),(10,'morbi porttitor lorem id ligula suspendisse ornare consequat lectus in','2022-01-09',20),(11,'nunc nisl duis bibendum felis sed','2020-01-11',20),(12,'nec molestie sed justo pellentesque viverra pede ac diam cras','2021-05-08',19),(13,'nec euismod scelerisque quam turpis adipiscing lorem vitae','2021-08-26',13),(14,'nulla elit ac nulla sed vel enim sit amet','2022-05-30',17),(15,'at velit eu est congue elementum in hac habitasse','2021-01-23',3),(16,'in imperdiet et commodo vulputate justo in blandit ultrices','2021-04-10',17),(17,'magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet','2022-08-19',18),(18,'curae mauris viverra diam vitae quam suspendisse','2020-12-01',16),(19,'auctor sed tristique in tempus sit amet sem fusce consequat','2021-03-02',14),(20,'bibendum imperdiet nullam orci pede venenatis non','2020-02-14',12);
/*!40000 ALTER TABLE `perguntas_anamnese` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resposta`
--

DROP TABLE IF EXISTS `resposta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `resposta` (
  `id_resposta` int NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(100) DEFAULT NULL,
  `perguntas_id` int NOT NULL,
  PRIMARY KEY (`id_resposta`),
  KEY `fk_resposta_perguntas1_idx` (`perguntas_id`),
  CONSTRAINT `fk_resposta_perguntas1` FOREIGN KEY (`perguntas_id`) REFERENCES `perguntas` (`id_perguntas`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resposta`
--

LOCK TABLES `resposta` WRITE;
/*!40000 ALTER TABLE `resposta` DISABLE KEYS */;
INSERT INTO `resposta` VALUES (1,'in faucibus orci luctus et ultrices posuere cubilia',1),(2,'nibh in hac habitasse platea dictumst aliquam',2),(3,'neque duis bibendum morbi non quam nec dui luctus rutrum',3),(4,'lobortis convallis tortor risus dapibus augue vel accumsan tellus',4),(5,'vulputate elementum nullam varius nulla',5),(6,'consequat morbi a ipsum integer a nibh in',6),(7,'ultrices posuere cubilia curae nulla dapibus dolor vel',7),(8,'ut rhoncus aliquet pulvinar sed nisl',8),(9,'pede posuere nonummy integer non velit donec',9),(10,'et ultrices posuere cubilia curae donec pharetra magna vestibulum',10),(11,'purus aliquet at feugiat non pretium quis',11),(12,'convallis eget eleifend luctus ultricies eu',12),(13,'gravida nisi at nibh in hac',13),(14,'erat curabitur gravida nisi at nibh in hac habitasse',14),(15,'morbi vestibulum velit id pretium iaculis',15),(16,'porttitor lacus at turpis donec posuere metus vitae ipsum aliquam',16),(17,'sollicitudin vitae consectetuer eget rutrum at lorem integer',17),(18,'vitae quam suspendisse potenti nullam porttitor',18),(19,'rhoncus aliquam lacus morbi quis tortor id nulla ultrices',19),(20,'suspendisse ornare consequat lectus in est risus auctor',20);
/*!40000 ALTER TABLE `resposta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resposta_anamnese`
--

DROP TABLE IF EXISTS `resposta_anamnese`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `resposta_anamnese` (
  `id_resposta_anamnese` int NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(100) DEFAULT NULL,
  `perguntas_anamnese_id` int NOT NULL,
  PRIMARY KEY (`id_resposta_anamnese`),
  KEY `fk_respota_anamnese_perguntas_anamnese1_idx` (`perguntas_anamnese_id`),
  CONSTRAINT `fk_respota_anamnese_perguntas_anamnese1` FOREIGN KEY (`perguntas_anamnese_id`) REFERENCES `perguntas_anamnese` (`id_perguntas_anamnese`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resposta_anamnese`
--

LOCK TABLES `resposta_anamnese` WRITE;
/*!40000 ALTER TABLE `resposta_anamnese` DISABLE KEYS */;
INSERT INTO `resposta_anamnese` VALUES (1,'est et tempus semper est quam pharetra magna',1),(2,'nulla sed accumsan felis ut at dolor',2),(3,'turpis donec posuere metus vitae ipsum aliquam',3),(4,'nulla nisl nunc nisl duis bibendum felis sed',4),(5,'donec ut dolor morbi vel lectus in quam fringilla rhoncus',5),(6,'viverra pede ac diam cras',6),(7,'semper interdum mauris ullamcorper purus sit amet nulla',7),(8,'amet eleifend pede libero quis',8),(9,'orci eget orci vehicula condimentum',9),(10,'eu felis fusce posuere felis sed',10),(11,'tortor id nulla ultrices aliquet maecenas leo odio condimentum',11),(12,'augue aliquam erat volutpat in congue etiam',12),(13,'parturient montes nascetur ridiculus mus vivamus vestibulum sagittis sapien cum',13),(14,'integer a nibh in quis justo',14),(15,'massa id lobortis convallis tortor',15),(16,'sit amet consectetuer adipiscing elit proin interdum',16),(17,'penatibus et magnis dis parturient montes nascetur ridiculus mus vivamus',17),(18,'lacinia nisi venenatis tristique fusce congue diam id ornare',18),(19,'massa tempor convallis nulla neque libero',19),(20,'ac lobortis vel dapibus at diam nam tristique',20);
/*!40000 ALTER TABLE `resposta_anamnese` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `CPF` char(11) DEFAULT NULL,
  `Telefone` char(12) DEFAULT NULL,
  `Cargo` char(1) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Fidelia Gitting','fgitting0@addthis.com','70023794389','816-900-6237',NULL),(2,'Adolpho Schubart','aschubart1@baidu.com','68905607159','112-392-0395',NULL),(3,'Tedie Dupoy','tdupoy2@elegantthemes.com','37583420090','676-500-6602',NULL),(4,'Heddie Sponer','hsponer3@nih.gov','10637149951','948-801-1216',NULL),(5,'Keven Moult','kmoult4@sohu.com','37234518604','415-613-1272',NULL),(6,'Jessamyn Carme','jcarme5@smugmug.com','21316163080','146-435-4762',NULL),(7,'Tisha Kuschke','tkuschke6@topsy.com','44232982658','172-510-4798',NULL),(8,'Elwyn Stelli','estelli7@wp.com','95381947719','174-850-4357',NULL),(9,'Cathe Gernier','cgernier8@gov.uk','8717990058','999-275-7994',NULL),(10,'Madella Kynge','mkynge9@harvard.edu','77555422127','261-496-2049',NULL);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'vida_leve'
--

--
-- Dumping routines for database 'vida_leve'
--
/*!50003 DROP PROCEDURE IF EXISTS `deletar_usuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `deletar_usuario`(IdA INT)
BEGIN
Delete from usuario
where IdA = id_usuario;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `modificar_usuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `modificar_usuario`(IdA INT, NomeA VARCHAR(50),EmailA VARCHAR(50),CPFA CHAR(11),TelefoneA CHAR(12),CargoA CHAR(1))
BEGIN

update Saida
set NomeA = Nome,EmailA = Email,CPFA = CPF,TelefoneA = Telefone,CargoA = Cargo
where IdA = id_usuario;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `new_procedure` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `new_procedure`(IdA INT, NomeA VARCHAR(50),EmailA VARCHAR(50),CPFA CHAR(11),TelefoneA CHAR(12),CargoA CHAR(1))
BEGIN

update Saida
set NomeA = Nome,EmailA = Email,CPFA = CPF,TelefoneA = Telefone,CargoA = Cargo
where IdA = id_usuario;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `novo_usuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `novo_usuario`(NomeA VARCHAR(50),EmailA VARCHAR(50),CPFA CHAR(11),TelefoneA CHAR(12),CargoA CHAR(1))
BEGIN
insert into usuario (Nome, Email, CPF, Telefone, Cargo)
values (NomeA,EmailA,CPFA,TelefoneA,CargoA);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-24 20:00:18
