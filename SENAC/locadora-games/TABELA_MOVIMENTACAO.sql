CREATE TABLE movimentacao(
	game INT NOT NULL PRIMARY KEY,
	qtdade_estoque INT NOT NULL DEFAULT 1,
	qtdade_alugada INT NULL,
    CONSTRAINT fk_movintacao_game
    FOREIGN KEY (game)
    REFERENCES game(id)
    
)ENGINE = InnoDB; 

ALTER TABLE movimentacao
ADD COLUMN saldo INT DEFAULT 1;