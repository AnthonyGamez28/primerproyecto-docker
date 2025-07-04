-- Crear la base de datos si no existe
CREATE DATABASE IF NOT EXISTS sistema;
USE sistema;

-- Crear la tabla de usuarios
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    edad INT NOT NULL
);

-- Insertar algunos usuarios de prueba
INSERT INTO usuarios (nombre, correo, edad) VALUES
('Tony', 'tony@example.com', 30),
('Kris', 'kris@example.com', 28),
('Alex', 'alex@example.com', 25);
