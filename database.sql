CREATE DATABASE inventario_lpc;
USE inventario_lpc;

CREATE TABLE usuarios(
id INT AUTO_INCREMENT PRIMARY KEY,
usuario VARCHAR(50),
password VARCHAR(50)
);

CREATE TABLE productos(
id INT AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(100),
cantidad INT,
precio DOUBLE
);

INSERT INTO usuarios(usuario,password)
VALUES('admin','1234');