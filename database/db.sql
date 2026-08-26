CREATE DATABASE patinhas_seguranca;
USE patinhas_seguranca;

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    nome VARCHAR(100) NOT NULL, 
    email VARCHAR(200) NOT NULL, 
    telefone INT not NULL
);

CREATE TABLE animais (
    id_a INT AUTO_INCREMENT PRIMARY KEY,
    id INT, 
    FOREIGN KEY (id) REFERENCES clientes(id),
    nome VARCHAR(100) NOT NULL,
    raca VARCHAR(100) NOT NULL, 
    idade INT NOT NULL
);