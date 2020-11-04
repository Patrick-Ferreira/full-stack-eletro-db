-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: fseletro
-- ------------------------------------------------------
-- Server version	5.7.31

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
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produtos` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `preco` decimal(8,2) NOT NULL,
  `preco_venda` decimal(8,2) NOT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idproduto`),
  UNIQUE KEY `imagem_UNIQUE` (`imagem`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,'geladeira','Geladeira FrostFree Brastemp SideInverse 540 litros',6889.00,6389.00,'imagens/Geladeira_Brastemp.jpeg'),(2,'geladeira','Geladeira FrostFree Brastemp Branca 375 litros',2068.60,1919.00,'imagens/Refrigerador_brastemp.jpeg'),(3,'geladeira','Geladeira FrostFree Consul Prata 340 litros',2199.00,2069.00,'imagens/Geladeira_Consul.jpeg'),(4,'fogao','Fogão 4 Bocas Consul Inox com Mesa de Vidro',1209.00,1129.00,'imagens/Fogao_consul.jpeg'),(5,'fogao','Fogão de Pisa 4 Bocas Atias Monaco com Acendimento Automático',609.90,519.70,'imagens/fogao_Atlas_monaco.jpeg'),(6,'microondas','Microondas Consul 32L Inox 220V',580.90,409.88,'imagens/microondas_consul.jpeg'),(7,'microondas','Microondas 25L Espelhado Philco 220V',508.70,464.53,'imagens/microondas_Philco.jpeg'),(8,'microondas','Forno de Microondas Electrolux 20L Branco',459.90,436.05,'imagens/Microondas_Eletrolux.jpeg'),(9,' lava_roupas ','Lavadora de Roupas Brastemp 11kg com Turbo Performance Branca Side',1699.00,1214.10,'imagens/Lavadora_brastemp.jpeg'),(10,' lava_roupas ','Lavadora de Roupas Philco Inverter 12KG',2399.90,2179.90,'imagens/lavadora_philco.jpeg'),(11,'lava_loucas ','Lava-Louças Electrolux com 10 Serviços, 06 programas de Lavagem Painel Blue Touch',3599.00,2799.90,'imagens/lava_louca_eletrolux.jpeg');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-30 23:07:22
