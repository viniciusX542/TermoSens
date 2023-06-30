DROP DATABASE IF EXISTS `db_aplicação`;
CREATE DATABASE `db_aplicação`;

USE `db_aplicação`;

CREATE TABLE `tbl_usuários` (
    `identificador` int(11) NOT NULL AUTO_INCREMENT,
    `nome` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `senha` varchar(45) NOT NULL,
    PRIMARY KEY (`identificador`)
);

CREATE TABLE `tbl_sensores` (
    `identificador` int(11) NOT NULL AUTO_INCREMENT,
    `nome` varchar(40) NOT NULL,
    `ip` FLOAT NOT NULL,
    `dias_medidos` date(255) NOT NULL,
    `hora` date(255) NOT NULL,
    `temperatura` int(255) NOT NULL,
    `intervalo` int(11) NOT NULL,
    PRIMARY KEY (`identificador`,'ip'),
    FOREIGN KEY (`category_id`) REFERENCES `categories`(`id`)
);