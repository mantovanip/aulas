CREATE TABLE valores( 
	game INT NOT NULL PRIMARY KEY,
    valor_unitario DOUBLE NOT NULL,
    valor_alugado DOUBLE NOT NULL,
    CONSTRAINT fk_valores_game
    FOREIGN KEY (game)
    REFERENCES game(id)
)ENGINE = InnoDB;

