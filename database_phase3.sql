DROP DATABASE IF EXISTS catopia;

CREATE DATABASE catopia;

USE catopia;

CREATE TABLE user
(
  id_user INT auto increment,
  fname VARCHAR(50) NOT NULL,
  lname VARCHAR(50) NOT NULL,
  address VARCHAR(255) NOT NULL,
  city VARCHAR(50) NOT NULL,
  state CHAR(2) NOT NULL,
  zip CHAR(5) NOT NULL,
  email VARCHAR(150) NOT NULL,
  phone CHAR(12) NOT NULL, 
  level ENUM("m", "e", "a"),
  PRIMARY KEY (id_user)
);

CREATE TABLE cats
(
  id_cats INT auto increment,
  cat_image_id varchar(12),
  name_cat VARCHAR(50) NOT NULL,
  adopt ENUM("adopt","foster"),
  age CHAR(2) NOT NULL,
  info VARCHAR(255) NOT NULL,
  id_client INT NOT NULL,
  PRIMARY KEY (id_cats),
  FOREIGN KEY (id_user) REFERENCES client(id_user)
);

CREATE TABLE items
(
  id_item INT NOT NULL,
  name_item VARCHAR(25) NOT NULL,
  description VARCHAR(255) NOT NULL,
  qty VARCHAR(25) NOT NULL,
  goal VARCHAR(25) NOT NULL,
  PRIMARY KEY (id_item)
);

