
INSERT INTO game VALUES (1,'Quake');
SELECT * FROM game;
INSERT INTO game VALUES (1'Quake');
INSERT INTO game VALUES (1'Quake');
INSERT INTO game VALUES (1'Quake');
SELECT * FROM game;

INSERT INTO movimentacao
(game,qtdade_estoque,qtdade_alugada,saldo) VALUES(1,15,8,NULL);
SELECT * FROM movimentacao;
INSERT INTO valores
(game,valor_unitario,valor_alugado)
VALUES (1,3,0);
SELECT * FROM valores;
INSERT INTO game VALUES(2,'Silent Thunder');
select*from game;
INSERT INTO game VALUES(3,'Need For Speed');
INSERT INTO game VALUES(4,'Fifa12');
INSERT INTO game VALUES(5,'Rise of Robots');
INSERT INTO game VALUES(6,'PacMac3D');
INSERT INTO game VALUES(7,'Call of Duty');
INSERT INTO game VALUES(8,'GTA IV');
SELECT*FROM game;
INSERT INTO movimentacao
(game,qtdade_estoque,qtdade_alugada,saldo) VALUES(2,8,5,NULL);
select*from movimentacao;
INSERT INTO movimentacao
(game,qtdade_estoque,qtdade_alugada,saldo) VALUES(3,8,7,NULL);
select*from games;
INSERT INTO movimentacao
(game,qtdade_estoque,qtdade_alugada,saldo) VALUES(4,18,12,NULL);
INSERT INTO movimentacao
(game,qtdade_estoque,qtdade_alugada,saldo) VALUES(5,6,0,NULL);
INSERT INTO movimentacao
(game,qtdade_estoque,qtdade_alugada,saldo) VALUES(6,4,3,NULL);
INSERT INTO movimentacao
(game,qtdade_estoque,qtdade_alugada,saldo) VALUES(7,10,1,NULL);
INSERT INTO movimentacao
(game,qtdade_estoque,qtdade_alugada,saldo) VALUES(8,10,6,NULL);
INSERT INTO valores
(game,valor_unitario,valor_alugado)
VALUES (2,3,0),
(3,2.5,0),
(4,5.25,0),
(5,2.5,0),
(6,3,0),
(7,2.75,0),
(8,4.25,0);
SELECT*FROM GAME;