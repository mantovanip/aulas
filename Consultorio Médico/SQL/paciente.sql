DROP TABLE IF EXISTS paciente;
CREATE TABLE paciente (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(200) NOT NULL,
	endereco VARCHAR(250) NOT NULL,
	bairro VARCHAR(50) NULL,
	cep CHAR(9) NULL,
	cidade INT NOT NULL DEFAULT 1,
	email VARCHAR(250) NULL,
	telefone1 CHAR(15) NOT NULL,
	telefone2 CHAR(15),
	cpf CHAR(14),
	rg VARCHAR(25),
	genero ENUM ('M','F','N'),
    
    CONSTRAINT fk_paciente_cidade
    FOREIGN KEY (cidade)
    REFERENCES cidade(id)
) ENGINE = InnoDB;