-- Active: 1685375685623@@127.0.0.1@3306@campusv2
CREATE DATABASE campusv2;
/* DROP DATABASE campusv2; para borrar la table */

drop table users;

CREATE TABLE campers(
    id INT primary key AUTO_INCREMENT,
    nombres VARCHAR(50) NOT NULL,
    direccion VARCHAR(50),
    logros VARCHAR(60),
    ingles VARCHAR(3),
    ser VARCHAR(3),
    especialidad VARCHAR(30)
);

CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idCamper INT NOT NULL,
    email VARCHAR(80) NOT NULL,
    userName VARCHAR(80) NOT NULL,
    password VARCHAR(60) NOT NULL,
    FOREIGN KEY (idCamper) REFERENCES campers(id)
);
