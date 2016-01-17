DROP SCHEMA IF EXISTS `suspref`;

CREATE SCHEMA `suspref`;

USE `suspref`;

CREATE TABLE `suspref`.`business` (
  `bid` INT NOT NULL auto_increment,
  `name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL UNIQUE,
  `create_time` DATETIME NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`bid`));

CREATE TABLE `suspref`.`receipt` (
  `rid` INT NOT NULL auto_increment,
  `bid` INT NOT NULL,
  `data` TEXT NOT NULL,
  `total` DECIMAL(10,2) NOT NULL,
  `purchase_time` DATETIME NOT NULL,
  PRIMARY KEY (`rid`),
  FOREIGN KEY (`bid`) REFERENCES `suspref`.`business` (`bid`));
