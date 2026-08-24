CREATE DATABASE patinhas_seguranca;
USE patinhas_seguranca;

CREATE TABLE clientes (
    id_c INT AUTO_INCREMENT PRIMARY KEY, 
    nome VARCHAR(100) NOT NULL, 
    email VARCHAR(200) NOT NULL, 
    telefone INT not NULL
);

CREATE TABLE animais (
    id_a INT AUTO_INCREMENT PRIMARY KEY,
    id_c INT, 
    FOREIGN KEY (id_c) REFERENCES clientes(id_c),
    nome VARCHAR(100) NOT NULL,
    raca VARCHAR(100) NOT NULL, 
    idade INT NOT NULL
);