CREATE TABLE especialidade (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    codigo CHAR(1) NOT NULL UNIQUE,
    descricao VARCHAR(25) NOT NULL
) ENGINE=InnoDB;

INSERT INTO especialidade
(codigo,descricao) VALUES
('O','Obstetra'),
('P','Pediatra'),
('D','Dermatologista');