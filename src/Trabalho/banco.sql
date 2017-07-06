-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `tbproduto`;
CREATE TABLE `tbproduto` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `valor` float NOT NULL,
  `descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `tbusuario`;
CREATE TABLE `tbusuario` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `senha` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2017-06-17 02:30:22
