CREATE DATABASE login_php; -- db Ficticio
USE login_php;

-- Criando tabela p/ teste
CREATE TABLE usuario (
	id INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(50),
    senha VARCHAR(50)
    );
    
-- Inserindo usuario p/ teste
INSERT INTO usuario (nome, senha) VALUES ('admin', '1234');
    
    

