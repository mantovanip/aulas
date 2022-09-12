SET SQL_SAFE_UPDATES = 0;
UPDATE movimentacao

SET saldo = qtdade_estoque  - qtdade_alugada;
SET SQL_SAFE_UPDATES = 1;


SELECT * FROM movimentacao
WHERE saldo;