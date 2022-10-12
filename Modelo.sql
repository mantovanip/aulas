DROP TABLE IF EXISTS modelo;
CREATE TABLE modelo (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    descricao VARCHAR(50) NOT NULL,
    marca INT NOT NULL,
    ano YEAR,
    CONSTRAINT fk_modelo_marca
    FOREIGN KEY (marca) 
    REFERENCES marca(id),    
    CONSTRAINT uk_modelo
    UNIQUE (descricao,marca,ano)
) ENGINE = InnoDB;

INSERT INTO modelo (descricao,marca,ano)
VALUES 
('ONIX',2,2022);
SELECT * FROM modelo;
