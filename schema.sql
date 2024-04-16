-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema hardwareStore
-- -----------------------------------------------------

CREATE SCHEMA IF NOT EXISTS `hardwareStore` DEFAULT CHARACTER SET utf8 ;
USE `hardwareStore` ;

-- -----------------------------------------------------
-- Table `hardwareStore`.`address`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hardwareStore`.`address` (
  `address_id` INT NOT NULL,
  `street` VARCHAR(255) NULL,
  `city` VARCHAR(255) NULL,
  `state` VARCHAR(255) NULL,
  `postal_code` VARCHAR(45) NULL,
  `country` VARCHAR(255) NULL,
  PRIMARY KEY (`address_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hardwareStore`.`customers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hardwareStore`.`customers` (
  `customer_id` INT NOT NULL,
  `first_name` VARCHAR(45) NULL,
  `last_name` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `phone` VARCHAR(45) NULL,
  `address_id` INT NOT NULL,
  PRIMARY KEY (`customer_id`),
  INDEX `customer_address_id_idx` (`address_id` ASC) VISIBLE,
  CONSTRAINT `customer_address_id`
    FOREIGN KEY (`address_id`)
    REFERENCES `hardwareStore`.`address` (`address_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hardwareStore`.`suppliers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hardwareStore`.`suppliers` (
  `supplier_id` INT NOT NULL,
  `supplier_name` VARCHAR(45) NULL,
  `contact_person_name` VARCHAR(45) NULL,
  `contact_number` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `address` VARCHAR(45) NULL,
  PRIMARY KEY (`supplier_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hardwareStore`.`products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hardwareStore`.`products` (
  `product_id` INT NOT NULL,
  `product_name` VARCHAR(45) NULL,
  `description` VARCHAR(100) NULL,
  `price` DECIMAL(10,2) NULL,
  `supplier_id` INT NOT NULL,
  `quantity` INT NULL,
  PRIMARY KEY (`product_id`, `supplier_id`),
  INDEX `products_supplier_id_idx` (`supplier_id` ASC) VISIBLE,
  CONSTRAINT `products_supplier_id`
    FOREIGN KEY (`supplier_id`)
    REFERENCES `hardwareStore`.`suppliers` (`supplier_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hardwareStore`.`orders`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hardwareStore`.`orders` (
  `order_id` INT NOT NULL,
  `customer_id` INT NOT NULL,
  `order_date` DATE NULL,
  `total_amount` DECIMAL(10,2) NULL,
  `status` VARCHAR(45) NULL,
  PRIMARY KEY (`order_id`),
  INDEX `customer_id_idx` (`customer_id` ASC) VISIBLE,
  CONSTRAINT `orders_customer_id`
    FOREIGN KEY (`customer_id`)
    REFERENCES `hardwareStore`.`customers` (`customer_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hardwareStore`.`order_items`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hardwareStore`.`order_items` (
  `order_items_id` INT NOT NULL,
  `order_id` INT NOT NULL,
  `product_id` INT NOT NULL,
  `quantity` INT NOT NULL,
  `unit_price` DECIMAL(10,2) NOT NULL,
  PRIMARY KEY (`order_items_id`),
  INDEX `order_items_order_id_idx` (`order_id` ASC) VISIBLE,
  INDEX `order_items_product_id_idx` (`product_id` ASC) VISIBLE,
  CONSTRAINT `order_items_order_id`
    FOREIGN KEY (`order_id`)
    REFERENCES `hardwareStore`.`orders` (`order_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `order_items_product_id`
    FOREIGN KEY (`product_id`)
    REFERENCES `hardwareStore`.`products` (`product_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
