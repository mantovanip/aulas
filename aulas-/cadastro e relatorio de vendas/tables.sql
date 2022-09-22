
CREATE TABLE cadastro_venda (
	id 						INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome_vendedor			INT NOT NULL,
    mes						INT NOT NULL,
    valor_venda 			DOUBLE NOT NULL
    
)ENGINE = InnoDB;


CREATE TABLE cadastro_vendedor (
	id 					INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome_vendedor 		VARCHAR(50) NOT NULL,
    
	CONSTRAINT 			fk__nome_vendedor_cadastro_venda
	FOREIGN KEY 		(nome_vendedor)
	REFERENCES 			cadastro_venda(id) 
)ENGINE = InnoDB;


CREATE TABLE cadastro_mes (
	id 					INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    mes  				DATE NOT NULL,
    
		CONSTRAINT      fk_mes_cadastro_venda
		FOREIGN KEY 	(mes)	
		REFERENCES 		cadastro_venda(id)
                
)ENGINE = InnoDB;

SELECT * FROM cadastro_venda;
SELECT * FROM cadastro_vendedor;
SELECT * FROM cadastro_mes;

INSERT INTO cadastro_mes VALUE(2,'Janeiro');

TRUNCATE TABLE cadastro_mes;

ALTER TABLE cadastro_mes 
DROP COLUMN mes;

ALTER TABLE cadastro_mes
ADD COLUMN mes VARCHAR(20) NOT NULL;

INSERT INTO cadastro_mes
VALUES
(1,'Janeiro'),
(2,'Fevereiro'),
(3,'Março'),
(4,'Abril'),
(5,'Maio'),
(6,'Junho'),
(7,'Julho'),
(8,'Agosto'),
(9,'Setembro'),
(10,'Outubro'),
(11,'Novembro'),
(12,'Dezembro');