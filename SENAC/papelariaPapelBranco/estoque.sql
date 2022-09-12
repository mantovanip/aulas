CREATE TABLE estoque(
produto INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
qntdade INT NOT NULL DEFAULT 1,
valor_unitario DOUBLE NOT NULL,
CONSTRAINT fk_estoque_produto
   FOREIGN KEY (produto)
    REFERENCES produtos(id)
) ENGINE = InnoDB;

INSERT INTO estoque(produto,qntdade,valor_unitario)
VALUES
(2,750,0.15),
(3,250,10),
(4,310,0.50),
(5,500,0.10),
(6,1500,2.50),
(7,190,6)
;

SELECT * FROM estoque;
