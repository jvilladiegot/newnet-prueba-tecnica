CREATE DATABASE newnet;

USE newnet;

CREATE TABLE `user` (
id INT(10) AUTO_INCREMENT NOT NULL,
firstname VARCHAR(50),
lastname VARCHAR(50),
phonenumber VARCHAR(50),
birthdate DATE,
email VARCHAR(150),
PRIMARY KEY (id)
);

CREATE TABLE rooms_type (
id INT(10) AUTO_INCREMENT NOT NULL,
`name` VARCHAR(50),
nof INT,
PRIMARY KEY (id)
);

CREATE TABLE reservation (
id INT(10) AUTO_INCREMENT NOT NULL,
room_type_id INT(10),
startdate DATE,
enddate DATE,
admin_id INT(10),
PRIMARY KEY (id),
FOREIGN KEY (room_type_id) REFERENCES rooms_type (id)
);

CREATE TABLE reservation_user (
user_id INT(10) NOT NULL,
reservation_id INT(10) NOT NULL,
FOREIGN KEY (user_id) REFERENCES `user` (id),
FOREIGN KEY (reservation_id) REFERENCES reservation (id)
);
