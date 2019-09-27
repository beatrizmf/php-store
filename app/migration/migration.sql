SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `store` DEFAULT CHARACTER SET utf8 ;
USE `store` ;

CREATE TABLE IF NOT EXISTS `store`.`tb_type_user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `store`.`tb_user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tb_type_user_id` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_tb_user_tb_type_user_idx` (`tb_type_user_id` ASC),
  CONSTRAINT `fk_tb_user_tb_type_user`
    FOREIGN KEY (`tb_type_user_id`)
    REFERENCES `store`.`tb_type_user` (`id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `store`.`tb_status_sale` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `store`.`tb_sale` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tb_status_sale_id` INT NOT NULL,
  `tb_user_id` INT NOT NULL,
  `date` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_tb_sale_tb_status_sale1_idx` (`tb_status_sale_id` ASC),
  INDEX `fk_tb_sale_tb_user1_idx` (`tb_user_id` ASC),
  CONSTRAINT `fk_tb_sale_tb_status_sale1`
    FOREIGN KEY (`tb_status_sale_id`)
    REFERENCES `store`.`tb_status_sale` (`id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_tb_sale_tb_user1`
    FOREIGN KEY (`tb_user_id`)
    REFERENCES `store`.`tb_user` (`id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `store`.`tb_product` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `store`.`tb_price_product` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tb_product_id` INT NOT NULL,
  `price_purchase` DECIMAL(5,2) NOT NULL,
  `price_sale` DECIMAL(5,2) NOT NULL,
  `quantity` INT NOT NULL,
  `status` TINYINT NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  INDEX `fk_tb_price_product_tb_product1_idx` (`tb_product_id` ASC),
  CONSTRAINT `fk_tb_price_product_tb_product1`
    FOREIGN KEY (`tb_product_id`)
    REFERENCES `store`.`tb_product` (`id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `store`.`tb_item_sale` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tb_sale_id` INT NOT NULL,
  `tb_price_product_id` INT NOT NULL,
  `quantity` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_tb_item_sale_tb_sale1_idx` (`tb_sale_id` ASC),
  INDEX `fk_tb_item_sale_tb_price_product1_idx` (`tb_price_product_id` ASC),
  CONSTRAINT `fk_tb_item_sale_tb_sale1`
    FOREIGN KEY (`tb_sale_id`)
    REFERENCES `store`.`tb_sale` (`id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_tb_item_sale_tb_price_product1`
    FOREIGN KEY (`tb_price_product_id`)
    REFERENCES `store`.`tb_price_product` (`id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
