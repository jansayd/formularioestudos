-- MySQL dump 10.13  Distrib 8.0.25, for Linux (x86_64)
--
-- Host: localhost    Database: jan
-- ------------------------------------------------------
-- Server version	8.0.25

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
-- Table structure for table `cidadao`
--

DROP TABLE IF EXISTS `cidadao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cidadao` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `cpf` varchar(100) DEFAULT NULL,
  `dt_cadastro` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cidadao`
--

LOCK TABLES `cidadao` WRITE;
/*!40000 ALTER TABLE `cidadao` DISABLE KEYS */;
INSERT INTO `cidadao` VALUES (1,'Samuel Aiala Ferreira','013.189.106-50','2021-06-15 19:11:57'),(2,'Samuel Aiala Ferreira','013.189.106-50','2021-06-15 19:14:19'),(3,'Samuel Aiala Ferreira','013.189.106-50','2021-06-15 19:15:01'),(4,'Samuel Aiala Ferreira','013.189.106-50','2021-06-15 19:15:04'),(5,'Samuel Aiala Ferreira','013.189.106-50','2021-06-15 19:18:19'),(6,'Samuel Aiala Ferreira','013.189.106-50','2021-06-15 19:18:48'),(7,'Samuel Aiala Ferreira','013.189.106-50','2021-06-15 19:18:59'),(8,'Samuel Aiala Ferreira','013.189.106-50','2021-06-15 19:19:41'),(9,'Samuel Aiala Ferreira','013.189.106-50','2021-06-15 19:19:51'),(10,'Samuel Aiala Ferreira','013.189.106-50','2021-06-15 19:20:16'),(11,'Samuel Aiala Ferreira','013.189.106-50','2021-06-15 19:20:28'),(12,'Samuel Aiala Ferreira','111.111.111-11','2021-06-15 19:22:39'),(13,'Samuel Aiala Ferreira','111.111.111-11','2021-06-15 19:26:27'),(14,'Samuel Aiala Ferreira','111.111.111-11','2021-06-15 19:26:40'),(15,'Samuel Aiala Ferreira','111.111.111-11','2021-06-15 19:27:52'),(16,'Samuel Aiala Ferreira','111.111.111-11','2021-06-15 19:27:57'),(17,'Samuel Aiala Ferreira','111.111.111-11','2021-06-15 19:28:23'),(18,'Samuel Aiala Ferreira','111.111.111-11','2021-06-15 19:35:17'),(19,'Samuel Aiala Ferreira','111.111.111-11','2021-06-15 19:36:04'),(20,'Samuel Aiala Ferreira','111.111.111-11','2021-06-15 19:37:22'),(21,'Samuel Aiala Ferreira','111.111.111-11','2021-06-15 19:38:27'),(22,'Samuel Aiala Ferreira','111.111.111-11','2021-06-15 19:39:24'),(23,'Samuel Aiala Ferreira','111.111.111-11','2021-06-15 19:41:07'),(24,'Samuel Aiala Ferreira','111.111.111-11','2021-06-15 19:42:29'),(25,'Samuel Aiala Ferreira','111.111.111-11','2021-06-15 19:42:42'),(26,'Samuel Aiala Ferreira','111.111.111-11','2021-06-15 19:43:09'),(27,'Samuel Aiala Ferreira','111.111.111-11','2021-06-15 19:43:57'),(28,'Samuel Aiala Ferreira','','2021-06-15 19:47:32'),(29,'Samuel Aiala Ferreira','','2021-06-15 19:47:34'),(30,'Samuel Aiala Ferreira','','2021-06-15 19:47:34'),(31,'Samuel Aiala Ferreira','','2021-06-15 19:48:48'),(32,'Samuel Aiala Ferreira','','2021-06-15 19:48:49'),(33,'Samuel Aiala Ferreira','','2021-06-15 19:48:56'),(34,'Samuel Aiala Ferreira','','2021-06-15 19:49:23'),(35,'Samuel Aiala Ferreira','','2021-06-15 19:49:41'),(36,'Samuel Aiala Ferreira','','2021-06-15 19:49:44'),(37,'Samuel Aiala Ferreira','','2021-06-15 19:49:56'),(38,'Samuel Aiala Ferreira','','2021-06-15 19:50:03'),(39,'Samuel Aiala Ferreira','','2021-06-15 19:52:29');
/*!40000 ALTER TABLE `cidadao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `declaracao`
--

DROP TABLE IF EXISTS `declaracao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `declaracao` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cidadao_id` int NOT NULL,
  `datanascimento` varchar(100) DEFAULT NULL,
  `genero` varchar(100) DEFAULT NULL,
  `nacionalidade` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `municipio` varchar(100) DEFAULT NULL,
  `escolaridade` varchar(100) DEFAULT NULL,
  `vinculoempregaticio` varchar(100) DEFAULT NULL,
  `renda` varchar(100) DEFAULT NULL,
  `mulherchefe` varchar(100) DEFAULT NULL,
  `oncologico` char(1) DEFAULT NULL,
  `cronico` char(1) DEFAULT NULL,
  `deficiente` char(1) DEFAULT NULL,
  `tipodeficiente` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_declaracao_cidadao1_idx` (`cidadao_id`),
  CONSTRAINT `fk_declaracao_cidadao1` FOREIGN KEY (`cidadao_id`) REFERENCES `cidadao` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `declaracao`
--

LOCK TABLES `declaracao` WRITE;
/*!40000 ALTER TABLE `declaracao` DISABLE KEYS */;
INSERT INTO `declaracao` VALUES (1,18,'02/12/1980','M','Brasileira','PR','Cidade','Escolaridade','Vinculo','123123123','Chefe','S','S','S','Não tem'),(2,19,'02/12/1980','M','Brasileira','PR','Cidade','Escolaridade','Vinculo','123123123','Chefe','S','S','S','Não tem'),(3,20,'02/12/1980','M','Brasileira','PR','Cidade','Escolaridade','Vinculo','123123123','Chefe','S','S','S','Não tem'),(4,21,'02/12/1980','M','Brasileira','PR','Cidade','Escolaridade','Vinculo','123123123','Chefe','S','S','S','Não tem'),(5,22,'02/12/1980','M','Brasileira','PR','Cidade','Escolaridade','Vinculo','123123123','Chefe','S','S','S','Não tem'),(6,23,'02/12/1980','M','Brasileira','PR','Cidade','Escolaridade','Vinculo','123123123','Chefe','S','S','S','Não tem'),(7,24,'02/12/1980','M','Brasileira','PR','Cidade','Escolaridade','Vinculo','123123123','Chefe','S','S','S','Não tem'),(8,25,'02/12/1980','M','Brasileira','PR','Cidade','Escolaridade','Vinculo','123123123','Chefe','S','S','S','Não tem'),(9,26,'02/12/1980','M','Brasileira','PR','Cidade','Escolaridade','Vinculo','123123123','Chefe','S','S','S','Não tem'),(10,27,'02/12/1980','M','Brasileira','PR','Cidade','Escolaridade','Vinculo','123123123','Chefe','S','S','S','Não tem'),(11,28,'','M','Brasileira','','','','','','','N','N','N',NULL),(12,29,'','M','Brasileira','','','','','','','N','N','N',NULL),(13,30,'','M','Brasileira','','','','','','','N','N','N',NULL),(14,31,'','M','Brasileira','','','','','','','N','N','N',NULL),(15,32,'','M','Brasileira','','','','','','','N','N','N',NULL),(16,33,'','M','Brasileira','','','','','','','N','N','N',NULL),(17,34,'','M','Brasileira','','','','','','','N','N','N',NULL),(18,35,'','M','Brasileira','','','','','','','N','N','N',NULL),(19,36,'','M','Brasileira','','','','','','','N','N','N',NULL),(20,37,'','M','Brasileira','','','','','','','N','N','N',NULL),(21,38,'','M','Brasileira','','','','','','','N','N','N',NULL),(22,39,'','M','Brasileira','','','','','','','N','N','N',NULL);
/*!40000 ALTER TABLE `declaracao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dependentes`
--

DROP TABLE IF EXISTS `dependentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dependentes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cidadao_id` int NOT NULL,
  `parentesco` varchar(100) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `cpf` varchar(100) DEFAULT NULL,
  `data` varchar(100) DEFAULT NULL,
  `renda` varchar(100) DEFAULT NULL,
  `oncologico` varchar(100) DEFAULT NULL,
  `cronico` varchar(100) DEFAULT NULL,
  `deficiente` varchar(100) DEFAULT NULL,
  `tipodeficiente` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_dependentes_cidadao1_idx` (`cidadao_id`),
  CONSTRAINT `fk_dependentes_cidadao1` FOREIGN KEY (`cidadao_id`) REFERENCES `cidadao` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dependentes`
--

LOCK TABLES `dependentes` WRITE;
/*!40000 ALTER TABLE `dependentes` DISABLE KEYS */;
INSERT INTO `dependentes` VALUES (1,22,NULL,'Samuel Aiala Ferreira','111.111.111-11',NULL,'123123123','S','S','S','Não tem'),(2,26,'Neque porro enim repudiandae inventore expedita.','Betsy Fritsch','168.753.046-78','29/02/2000','539051556038','N','N','S','267'),(3,26,'Dolorem quasi quia est aut nam dolore consequatur maxime suscipit.','Larissa Kozey','696.764.791-10','20/03/2005','95659268610433953204281420283820759792926851','N','S','S','521'),(4,26,'Ipsum assumenda minima non.','Trace Prohaska','821.510.863-64','12/06/2012','8526376808976545053855','S','S','S','34'),(5,26,'Dicta inventore ut fuga eum nostrum dolore.','Autumn Gorczany','479.113.716-79','18/02/2009','22.22','S','N','S','51'),(6,27,'Neque porro enim repudiandae inventore expedita.','Betsy Fritsch','168.753.046-78','29/02/2000','539051556038','N','N','S','267'),(7,27,'Dolorem quasi quia est aut nam dolore consequatur maxime suscipit.','Larissa Kozey','696.764.791-10','20/03/2005','95659268610433953204281420283820759792926851','N','S','S','521'),(8,27,'Ipsum assumenda minima non.','Trace Prohaska','821.510.863-64','12/06/2012','8526376808976545053855','S','S','S','34'),(9,27,'Dicta inventore ut fuga eum nostrum dolore.','Autumn Gorczany','479.113.716-79','18/02/2009','22.22','S','N','S','51'),(10,35,'Soluta iure ab.','Zander Smitham','461.445.644-89','13/04/2014','246387972062','S','S','S','567'),(11,38,'Consequuntur nesciunt necessitatibus.','Lucinda Hamill','815.326.675-66','28/07/2014','227951071420','S','S','S','1');
/*!40000 ALTER TABLE `dependentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `endereco`
--

DROP TABLE IF EXISTS `endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `endereco` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cidadao_id` int NOT NULL,
  `cep` varchar(100) DEFAULT NULL,
  `logradouro` varchar(100) DEFAULT NULL,
  `numero` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `uf` varchar(100) DEFAULT NULL,
  `municipio` varchar(100) DEFAULT NULL,
  `tempomoradia` varchar(100) DEFAULT NULL,
  `celular` varchar(100) DEFAULT NULL,
  `contato` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_endereco_cidadao_idx` (`cidadao_id`),
  CONSTRAINT `fk_endereco_cidadao` FOREIGN KEY (`cidadao_id`) REFERENCES `cidadao` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `endereco`
--

LOCK TABLES `endereco` WRITE;
/*!40000 ALTER TABLE `endereco` DISABLE KEYS */;
INSERT INTO `endereco` VALUES (1,11,'30411-270',NULL,'59','Calafate','Complemento','MG','','10 anos','(31) 98449-8313','Sem ninguem','samuca@samuca.com'),(2,12,'30411-270','Rua Contria','22','Calafate','Sala 201','MG','','10 anso','(31) 98449-8313','Contato','samuca@samuca.com'),(3,13,'30411-270','Rua Contria','22','Calafate','Sala 201','MG','Cidade','10 anso','(31) 98449-8313','Contato','samuca@samuca.com'),(4,14,'30411-270','Rua Contria','22','Calafate','Sala 201','MG','Cidade','10 anso','(31) 98449-8313','Contato','samuca@samuca.com'),(5,15,'30411-270','Rua Contria','22','Calafate','Sala 201','MG','Cidade','10 anso','(31) 98449-8313','Contato','samuca@samuca.com'),(6,16,'30411-270','Rua Contria','22','Calafate','Sala 201','MG','Cidade','10 anso','(31) 98449-8313','Contato','samuca@samuca.com'),(7,17,'30411-270','Rua Contria','22','Calafate','Sala 201','MG','Cidade','10 anso','(31) 98449-8313','Contato','samuca@samuca.com'),(8,18,'30411-270','Rua Contria','22','Calafate','Sala 201','MG','Cidade','10 anso','(31) 98449-8313','Contato','samuca@samuca.com'),(9,19,'30411-270','Rua Contria','22','Calafate','Sala 201','MG','Cidade','10 anso','(31) 98449-8313','Contato','samuca@samuca.com'),(10,20,'30411-270','Rua Contria','22','Calafate','Sala 201','MG','Cidade','10 anso','(31) 98449-8313','Contato','samuca@samuca.com'),(11,21,'30411-270','Rua Contria','22','Calafate','Sala 201','MG','Cidade','10 anso','(31) 98449-8313','Contato','samuca@samuca.com'),(12,22,'30411-270','Rua Contria','22','Calafate','Sala 201','MG','Cidade','10 anso','(31) 98449-8313','Contato','samuca@samuca.com'),(13,23,'30411-270','Rua Contria','22','Calafate','Sala 201','MG','Cidade','10 anso','(31) 98449-8313','Contato','samuca@samuca.com'),(14,24,'30411-270','Rua Contria','22','Calafate','Sala 201','MG','Cidade','10 anso','(31) 98449-8313','Contato','samuca@samuca.com'),(15,25,'30411-270','Rua Contria','22','Calafate','Sala 201','MG','Cidade','10 anso','(31) 98449-8313','Contato','samuca@samuca.com'),(16,26,'30411-270','Rua Contria','22','Calafate','Sala 201','MG','Cidade','10 anso','(31) 98449-8313','Contato','samuca@samuca.com'),(17,27,'30411-270','Rua Contria','22','Calafate','Sala 201','MG','Cidade','10 anso','(31) 98449-8313','Contato','samuca@samuca.com'),(18,28,'','','','','','AM','','','','',''),(19,29,'','','','','','AM','','','','',''),(20,30,'','','','','','AM','','','','',''),(21,31,'','','','','','AM','','','','',''),(22,32,'','','','','','AM','','','','',''),(23,33,'','','','','','AM','','','','',''),(24,34,'','','','','','AM','','','','',''),(25,35,'','','','','','AM','','','','',''),(26,36,'','','','','','AM','','','','',''),(27,37,'','','','','','AM','','','','',''),(28,38,'','','','','','AM','','','','',''),(29,39,'','','','','','AM','','','','','');
/*!40000 ALTER TABLE `endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `usuario` varchar(220) NOT NULL,
  `senha` varchar(220) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'jan kleber','jansayd@gmail.com','jansayd','qwert123'),(5,'Samuel Aiala Ferreira','samuca@samuca.com','samhk222','a8f5f167f44f4964e6c998dee827110c');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'jan'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-15 19:57:54
