create table pessoa(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome varchar(100) NOT NULL,
	data_nasc DATE NOT NULL,
	data_cadastro DATETIME NOT NULL DEFAULT NOW() 
) ENGINE = InnoDB;                                                                                                                                                             