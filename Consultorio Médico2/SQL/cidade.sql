DROP TABLE IF EXISTS cidade;
CREATE TABLE cidade (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(200) NOT NULL,
    estado INT NOT NULL DEFAULT 2,

    CONSTRAINT fk_cidade_estado
    FOREIGN KEY (estado)
    REFERENCES estado(id)
		
) ENGINE = InnoDB;

INSERT INTO cidade 
(nome,estado) VALUES 
('Criciúma',2),
('Porto Alegre',3);
