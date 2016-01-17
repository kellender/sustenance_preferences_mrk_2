DROP SCHEMA IF EXISTS `suspref`;

CREATE SCHEMA `suspref`;

USE `suspref`;

CREATE TABLE `suspref`.`business` (
  `bid` INT NOT NULL auto_increment,
  `name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `owner_name` VARCHAR(255),
  `create_time` DATETIME NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`bid`));

CREATE TABLE `suspref`.`receipt` (
  `rid` INT NOT NULL auto_increment,
  `bid` INT NOT NULL,
  `return_flag` INT NOT NULL DEFAULT 0,
  `total` DECIMAL(10,2) NOT NULL,
  `purchase_time` DATETIME NOT NULL,
  PRIMARY KEY (`rid`),
  FOREIGN KEY (`bid`) REFERENCES `suspref`.`business` (`bid`));

CREATE TABLE `suspref`.`receipt_info` (
  `rid` INT NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `quantity` INT NOT NULL,
  `cost` DECIMAL(10,2) NOT NULL,
  `total_cost` DECIMAL(10,2) NOT NULL,
  PRIMARY KEY (`rid`, `name`),
  FOREIGN KEY(`rid`) REFERENCES `suspref`.`receipt` (`rid`));
