CREATE DATABASE campusv2;
/* DROP DATABASE campusv2; para borrar la table */


CREATE TABLE campers(
    id INT primary key AUTO_INCREMENT,
    nombres VARCHAR(50) NOT NULL,
    direccion VARCHAR(50),
    logros VARCHAR(60),
    ingles VARCHAR(3),
    ser VARCHAR(3),
    especialidad VARCHAR(30)
);
