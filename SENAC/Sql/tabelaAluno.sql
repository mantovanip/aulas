CREATE TABLE aluno(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	matricula VARCHAR(10) NOT NULL PRIMARY KEY,
	turma CHAR(2) NOT NULL,
	data_matricula DATE,
	pessoa INT NOT NULL,
	CONSTRAINT fk_aluno_pessoa
	FOREIGN KEY (pessoa)
	REFERENCES pessoa (id),
    CONSTRAINT uk_aluno_matricula
	UNIQUE (Matricula)
)ENGINE = InnoDB;