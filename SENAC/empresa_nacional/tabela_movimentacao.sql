CREATE TABLE movimentacao_mensal(
produto INT NOT NULL,
mes INT NOT NULL,
valor DOUBLE NOT NULL,
CONSTRAINT pk_movimentacao_mensal
PRIMARY KEY (produto,mes)
#CONSTRAINT fk_mov_mensal_produto
#FOREIGN KEY (produto) REFERENCES produto(id),
#CONSTRAINT fk_mov_mensal_produto FOREIGN KEY (mes) REFERENCES mes(id)
)ENGINE = InnoDB;