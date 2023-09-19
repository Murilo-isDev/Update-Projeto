CREATE DATABASE IF NOT EXISTS aula_crud 
DEFAULT CHARACTER SET utf8;

USE aula_crud;

-- ----------------------------
-- Table structure for `clientes`
-- ----------------------------
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cpf` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sexo` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` date DEFAULT NULL,
  `obs` text COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;