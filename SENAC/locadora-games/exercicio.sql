#SELECIONE OS JOGOS ACIMA DE R$5,00
SELECT * FROM valores
WHERE valor_unitario > 5;

#Selecione o jogo que nunca foi alugado.
	SELECT * FROM movimentacao
    WHERE qtdade_alugada = 0;
    
#Selecione o valor do jogo mais alugado
SELECT MAX(valor_unitario) FROM movimentacao;

#Selecione o jogo com maior quantidade em estoque
SELECT MAX(qtdade_estoque) FROM movimentacao;

#selecione os jogos com estoque maior que 10 e menor que 20
SELECT game FROM movimentacao
WHERE qtdade_estoque > 10 AND qtdade_estoque < 20;

SELECT*FROM game;

SELECT nome FROM game;

#selecione o jogo que nunca foi alugado

SELECT game.nome FROM movimentacao,game
WHERE qtdade_alugada = 0
AND movimentacao.game = game.id;

SELECT MAX(qtdade_estoque) AS total
FROM movimentacao;

#selecione o jogo que nunca foi alugado
SELECT g.nome AS nome_jogo
FROM movimentacao AS m, game AS g
WHERE qtdade_alugada = 0
AND m.game = g.id;





SELECT