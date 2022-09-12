CREATE TABLE  professor(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    matricula VARCHAR(6) NOT NULL,
	carga_hora FLOAT NOT NULL,
	valorhora  DOUBLE NOT NULL,
    pessoa int NOT NULL,
    CONSTRAINT uk_professor_matricula
	UNIQUE (Matricula),
    CONSTRAINT fk_professor_pessoa 
    FOREIGN KEY (pessoa)
    REFERENCES pessoa(id)
)engine =InnoDB;