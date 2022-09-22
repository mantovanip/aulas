CREATE TABLE cadastro_vendedor (
	id 					INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome_vendedor 		VARCHAR(50) NOT NULL,
    
	CONSTRAINT 			fk_nome_vendedor_cadastro_venda
	FOREIGN KEY 		(nome_vendedor)
	REFERENCES 			nome_vendedor(id) 
);

SELECT * FROM cadastro_vendedor;
