DROP DATABASE IF EXISTS catopia;

CREATE DATABASE catopia;

USE catopia;

CREATE TABLE user
(
  id_user INT auto_increment,
  fname VARCHAR(50) NOT NULL,
  lname VARCHAR(50) NOT NULL,
  address VARCHAR(255) NOT NULL,
  city VARCHAR(50) NOT NULL,
  state CHAR(2) NOT NULL,
  zip CHAR(5) NOT NULL,
  phone CHAR(12) NOT NULL,
  email VARCHAR(150) NOT NULL,
  pass VARCHAR(255) NOT NULL,
  level ENUM("m", "e", "a"),
  PRIMARY KEY (id_user)
);

CREATE TABLE cats
(
  id_cats INT auto increment,
  cat_image_id varchar(12),
  name_cat VARCHAR(50) NOT NULL,
  adopt ENUM("adopt","foster"),
  DOB DATE,
  avail boolean 
  PRIMARY KEY (id_cats)
  
);



insert into user values
(default, 'Tracy', 'Reed', '1722 Renwick Drive', 'Asheville', 'NC', 28803, '484-314-7223', 'tracytreed@no.com', 123456, 'm'),
(default,'Marion', 'Brown', '3174 Hardesty Street', 'Asheville', 'NC', 28803, '303-444-4475', 'mbrown@com.net', 123456, 'm'),
(default,'Steve', 'Snider', '39430 Big Rock Road', 'Asheville', 'NC', 28803,  '717-420-1212','snidley@com.net',123456,  'm'),
(default,'Tobias', 'Stocking', '291-A Gorgonzola ', 'Asheville', 'NC', 28803,  '616-410-2990','stockingfeet@com.net', 123456, 'm'),
(default,'Frank', 'Wheeler', '2225 Iola Ave', 'Asheville', 'NC', 28803,  '303-414-0404','fwheeler@com.net', 123456, 'm'),
(default,'Brittany', 'Fox', '297-B Gorgonzola', 'Asheville', 'NC', 28803,  '616-410-2942', 'bfoxy@com.net',123456,  'm'),
(default,'Fran', 'McCoy', '1440 Manchester Way ', 'Asheville', 'NC', 28803, '303-477-8787', 'franm@com.net', 123456, 'm'),
(default,'Joan', 'Thomaston', '667438 E. 91st St.', 'Asheville', 'NC', 28803, '616-684-9385', 'joanie@com.net',123456,  'm' ),
(default,'Ted', 'Stiggle', '12920 Industrial Workers', 'Asheville', 'NC', 28801,'303-421-1410',  'thestig@com.net',123456, '123456, m'),
(default,'Dean',  'Farrell', '121 Highway 80', 'Asheville', 'NC', 28801,  '717-483-3111', 'farrelld@com.net', 123456 'm'),
(default,'Maureen', 'Waltz', '1900 Industrial Way', 'Asheville', 'NC', 28805,  '215-419-2349', 'waltzer@com.net', 123456, 'm'),
(default,'Stacey', 'Luevano', '1271 Haven Lane', 'Asheville', 'NC', 28806,  '215-419-2349', 'staceyl@com.net', 123456, 'm'),
(default,'Paul', 'Tran', '3964 Winding Way', 'Asheville', 'NC', 28805,  '215-419-2349', 'ptran@com.net', 123456, 'e'),
(default,'Oliver', 'Watson', '313 Small Street', 'Asheville', 'NC', 28806,  '215-419-2349', 'thewatz@com.net', 123456, 'a');

insert into cats values
(default,'Felicia', 'cat1.jpg', 'adopt', '2016-02-26', true),
(default,'Riff Raff','cat2.jpg','adopt', '2015-03-25', true),
(default,'Shadow', 'cat3.jpg','foster', '2019-01-22', false),
(default,'Night Shade','cat4.jpg','adopt', '2018-03-02', true),
(default,'Ronnie', 'cat5.jpg','foster','2019-02-25',false),
(default,'Gia','cat6.jpg', 'adopt','2017-05-29', true),
(default,'Caramel', 'cat7.jpg','foster','2019-02-14',false),
(default,'Gidget','cat8.jpg','adopt', '2015-06-04', true),
(default,'Java','cat9.jpg','adopt', '2018-08-11', true),
(default,'Nermal','cat10.jpg','foster', '2019-02-25',false),
(default,'Juniper','cat11.jpg', 'adopt','2018-01-09', true),
(default,'Miss Daisy','cat12.jpg','adopt', '2015-10-17', true),
(default,'Jiji', 'cat13.jpg','adopt','2016-04-16', true),
(default,'Scarlett','cat14.jpg', 'adopt','2016-11-25', true),
(default,'Snowball', 'cat15.jpg','adopt','2018-05-23', true),
(default,'Smooches','cat16.jpg', 'foster','2019-03-11',false),
(default,'Sydney', 'cat17.jpg','adopt','2017-12-25', true),
(default,'Teegan', 'cat18.jpg','foster','2018-12-18',false),
(default,'Yumi', 'cat19.jpg','foster','2019-03-01',false),
(default,'Spike','cat20.jpg','foster', '2019-02-28',false),
(default,'Mia','cat21.jpg','foster', '2019-02-26',false),
(default,'Skyler','cat22.jpg','adopt', '2018-10-07', true),
(default,'Talliban', 'cat23.jpg','adopt','2009-04-25', true),
(default,'Zora','cat24.jpg','foster', '2019-02-08',false),
(default,'Riley','cat25.jpg','foster', '2019-01-29',false),
(default,'Puffins','cat26.jpg','adopt', '2016-11-03', true),
(default,'Scampers','cat27.jpg','adopt', '2018-09-09', true),
(default,'Bootsie', 'cat28.jpg','foster','2019-02-28',false);


