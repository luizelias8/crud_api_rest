CREATE DATABASE crud_api_rest;

USE crud_api_rest;

CREATE TABLE user (
	id 			INT(11) 							NOT NULL AUTO_INCREMENT,
    name       	VARCHAR(250) 						NOT NULL,
    contact_no	VARCHAR(250) 						NOT NULL,
    email      	VARCHAR(250) 						NOT NULL,
    password 	VARCHAR(250) 						NOT NULL,
    profile 	VARCHAR(250) 						NOT NULL,
    type 		ENUM('master', 'waiter', 'cashier') NOT NULL,
    status 		ENUM('enable', 'disable') 			NOT NULL DEFAULT 'enable',
    created_on 	DATETIME 							NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE = INNODB;

INSERT INTO user(id, name, contact_no, email, password, profile, type, created_on, status)
VALUES
(1, 'John Smith', '8569874587', 'johnsmith@gmail.com', '$2y$10$SY7Mc5BZsLlTjvNl70xhIOCyIVF9G7Xc1xqMzPmaSYTCrH.LG545q', 'images/22041.jpg', 'master', '2020-11-06 14:17:27', 'enable'),
(2, 'Donna Huber', '8523698520', 'donnahuber@gmail.com', '$2y$10$2H2wHdkV8GJrV30TouhkXuTcP1gQeAY1rp7EGM4fYzOf/mibjzEg.', 'images/22308.jpg', 'waiter', '2020-11-08 09:08:33', 'enable'),
(3, 'Colin Newton', '7453952852', 'colinnewton@gmail.com', '$2y$10$O.7mlW5/JC5ji5nF5YHDfuTFphnSbpsNN7FaQoG1BHEIEg4TVbLKW', 'images/31598.jpg', 'waiter', '2020-11-09 12:44:57', 'enable'),
(4, 'Carl Meza', '9632585203', 'carlmeza@gmail.com', '$2y$10$gyv/CokUtimUAdXlQt9aRO8UBTnjSz.FqQQEk24vfQjgTppkFSz4q', 'images/1605099626.png', 'cashier', '2020-11-09 12:45:44', 'enable'),
(5, 'Tyron Stein', '96369852635', 'tyronstein@gmail.com', '$2y$10$WIHtgnX5EqrKuruE31exGeZv.CLIHm52CggX1/vn.vr1d4tceFtsq', 'images/1604922395.png', 'cashier', '2020-11-09 12:46:35', 'disable'),
(6, 'Peter Parker', '8569852632', 'peterparker@gmail.com', '$2y$10$uBTtPvR0YLH9f4FZt5uumeDz3HOmO8W2c.sNy8pvm7zvo8LHQ5zh.', 'images/6614.jpg', 'waiter', '2020-11-11 14:00:27', 'disable');

SELECT * FROM user;