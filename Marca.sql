CREATE TABLE marca (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    descricao VARCHAR(75) NOT NULL
)ENGINE = InnoDB;

INSERT INTO marca (descricao) VALUES ('Fiat');
SELECT * FROM marca;


UPDATE marca SET descricao = 'Fiat Atualizado' WHERE id = 1;