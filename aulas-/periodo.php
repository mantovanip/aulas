<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Período</title>
</head>
<body>
    <form action="exibir_periodo.php" method="GET">
        <select name="periodo">
            <?php
                // Bloco de código PHP

                $conexao = new PDO('mysql:local=localhost;port=3308;dbname=lista_fk','root','');

                $sql = 'SELECT * FROM periodo;';
                
                // Dados de retorno da consulta SQL
                $dataset    = $conexao->query($sql);
                
                // Traz apenas os dados
                $resultset  = $dataset->fetchAll();

                
                foreach($resultset as $row){
                    echo '<option value="'.$row['id'].'">'.$row['descricao'].'</option>';
                }
            ?>
        </select>
        <input type="submit" value="Enviar" />
    </form>
</body>
</html>