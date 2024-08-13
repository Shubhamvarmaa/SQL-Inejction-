# SQL-Inejction

Creating Lab for SQL-

 - create database sqli_db;
 
-  use sqli_db: 
 
 - CREATE TABLE users (
   id INT,
   name VARCHAR(50),
   email VARCHAR(50),
   password VARCHAR(50),
   enable INT(1)
   ); 

- INSERT INTO users (id, name, email, password, enable) 
VALUES	
(1, 'admin', 'admin@gmail.com', '1234', 1), 
(2, 'user', 'user@gmail.com', 'user@123', 1), 
(3, 'jon', 'jon@gmail.com', 'root', 1), 
(4, 'ray', 'ray@gmail.com', 'ray@@12', 1),
(5, 'mike', 'mike@gmail.com', '123456', 1), 
(6, 'mike', 'kisan@gmail.com', 'rootroot', 1);
