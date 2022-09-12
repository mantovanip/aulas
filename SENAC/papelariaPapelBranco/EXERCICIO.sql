
SELECT 
p.nome  Produtos,
e.qntdade  Quantidade,
e.valor_unitario 'Preço Unit.', 
e.qntdade * e.valor_unitario 'Total R$',
(e.qntdade * e.valor_unitario) / 
(SELECT c.valor_cotacao FROM cotacao c WHERE id= 1)'Total U$'

FROM produtos p, estoque e
WHERE p.id = e.produto;

#sub select 
SELECT 
	(SELECT p.nome 
	FROM produtos p
	WHERE p.id = e.produto
	) 'Nome Produto',
	e.qntdade,e.valor_unitario
FROM estoque e ;

SELECT *
FROM estoque e 
WHERE produto = EXISTS (
	SELECT 1 FROM produtos p
    WHERE p.id = e.produto
    );
    

SELECT 
	(SELECT p.nome FROM produtos p
    WHERE p.id = e.produto) Produto
FROM estoque  e
WHERE e.qntdade = (
	SELECT MAX(qntdade) FROM estoque 
    );
    
    

    



