DROP TABLE IF EXISTS estado;
CREATE TABLE estado (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(200) NOT NULL,
    sigla CHAR(2) NOT NULL
) ENGINE = InnoDB;

INSERT INTO estado (nome,sigla)
VALUES 
('Paraná','PR'),
('Santa Catarina','SC'),
('Rio Grande de SUL','RS');