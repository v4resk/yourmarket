DROP DATABASE IF EXISTS yourMarketDB;
CREATE DATABASE yourMarketDB CHARACTER SET 'utf8';
USE yourMarketDB;

CREATE TABLE `User` (
  `name` VARCHAR(20) NOT NULL,
  `firstName` VARCHAR(20) NOT NULL,
  `date_naissance` DATETIME NOT NULL,
  `email` VARCHAR(40) PRIMARY KEY NOT NULL,
  `mdp` VARCHAR(15) NOT NULL,
  `whoAmI` VARCHAR(5) NOT NULL,
  `id_billInfo` INT,
  `fav_background_number` INT NOT NULL DEFAULT 0,
  `photo_id` VARCHAR(20) NOT NULL DEFAULT '000',
  `addr1` VARCHAR(30) NOT NULL,
  `addr2` VARCHAR(30),
  `city` VARCHAR(20) NOT NULL,
  `postal_code` VARCHAR(10) NOT NULL,
  `country` VARCHAR(30) NOT NULL,
  `phone` VARCHAR(10) NOT NULL
);

CREATE TABLE `Bill_info` (
  `id_billInfo` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(40),
  `type_of_payment` VARCHAR(30),
  `card_number` VARCHAR(12),
  `name_on_card` VARCHAR(20),
  `expiration_date` DATETIME,
  `cvc` INT
);

CREATE TABLE `_order` (
  `id_order` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(40) NOT NULL,
  `date_m` DATETIME NOT NULL,
  `id_item` INT,
  `status` BOOLEAN NOT NULL,
  `price` DOUBLE,
  `max_price` DOUBLE
);

CREATE TABLE `Item` (
  `id_item` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(40) NOT NULL,
  `sellBID` BOOLEAN,
  `sellBO` BOOLEAN,
  `sellBIN` BOOLEAN,
  `category` VARCHAR(40) NOT NULL,
  `info` VARCHAR(100),
  `delivery_price` DOUBLE DEFAULT 1,
  `price` DOUBLE,
  `fromTime` DATETIME NOT NULL,
  `toTime` DATETIME,
  `seller_id` VARCHAR(40) NOT NULL,
  `customer_id` VARCHAR(40),
  `pic` VARCHAR(40)
);

CREATE TABLE `Cart`(
  `id_customer` VARCHAR(40) NOT NULL,
  `id_item` INT NOT NULL,
  PRIMARY KEY(`id_customer`,`id_item`)
);


ALTER TABLE `_order` ADD FOREIGN KEY (`email`) REFERENCES `User` (`email`);
ALTER TABLE `Bill_info` ADD FOREIGN KEY (`email`) REFERENCES `User` (`email`);
ALTER TABLE `_order` ADD FOREIGN KEY (`id_item`) REFERENCES `Item` (`id_item`);
ALTER TABLE `Item` ADD FOREIGN KEY (`seller_id`) REFERENCES `User` (`email`);
ALTER TABLE `Item` ADD FOREIGN KEY (`customer_id`) REFERENCES `User` (`email`);
ALTER TABLE `Cart` ADD FOREIGN KEY (`id_customer`) REFERENCES `User` (`email`);
ALTER TABLE `Cart` ADD FOREIGN KEY (`id_item`) REFERENCES `Item` (`id_item`);
