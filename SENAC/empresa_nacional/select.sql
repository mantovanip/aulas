#SELECT MIN(valor) FROM movimentacao_mensal; #pega o valor minimo
#SELECT MAX(valor) FROM movimentacao_mensal; #pega o valor maior maximo
#SELECT AVG(valor) FROM movimentacao_mensal; #pega o valor medio
#SELECT SUM(valor) FROM movimentacao_mensal; #faz a somatoria dos valores
SELECT * FROM movimentacao_mensal
WHERE mes = 1 AND valor > 3000 AND valor < 5000;