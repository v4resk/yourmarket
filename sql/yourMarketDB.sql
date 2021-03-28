DROP DATABASE IF EXISTS yourMarketDB;
CREATE DATABASE yourMarketDB CHARACTER SET 'utf8';
USE yourMarketDB;
CREATE TABLE books(
  id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  author VARCHAR(20) NOT NULL,
  title VARCHAR(30) NOT NULL,
  year INT NOT NULL,
  publisher VARCHAR(30) NOT NULL
) ENGINE=INNODB;

INSERT INTO books(id,author,title,year,publisher)
  VALUES(NULL,'Albert Camus','La peste',1972,'GALLIMARD'),
  (NULL,'George Orwell','1984',1972,'GALLIMARD'),
  (NULL,'Anthony Burgess','Orange mécanique',2010,'ROBERT LAFFONT');
