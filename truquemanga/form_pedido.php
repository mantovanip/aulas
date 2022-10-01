<?php
    $conexao    = new PDO('mysql:local=localhost;port=3308;dbname=truque_na_manga','root','');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido</title>
</head>
<body>
    <form action="salvar_pedido.php" method="GET">
        <fieldset>
            <legend>Pedido</legend>
            <div>
                <label for="cliente">Cliente</label>
                <select name="cliente" id="cliente">
                    <?php
                        $sql        = "SELECT * FROM cliente";
                        $dataset    = $conexao->query($sql);
                        $resultset  = $dataset->fetchAll();

                        foreach($resultset as $row){
                            echo '<option value="'.$row['id'].'">'.$row['nickname'].'</option>';
                        }
                    ?>
                </select>
            </div>
            <div>
                <label for="produto">Produto</label>
                <select name="produto" id="produto">
                    <?php
                        $sql        = "SELECT * FROM produto";
                        $dataset    = $conexao->query($sql);
                        $resultset  = $dataset->fetchAll();

                        foreach($resultset as $row){
                            echo '<option value="'.$row['id'].'">'.$row['nome'].'</option>';
                        }
                    ?>
                </select>
            </div>                    
            <div>
                <label for="quantidade">Quantidade</label>
                <input type="text" name="quantidade" id="quantidade" />
            </div>    
            <div>
                <label for="is_entrega">Entrega ?</label>
                <select name="is_entrega" id="is_entrega">
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>          
            <div>
                <input type="submit" value="Salvar" />
            </div>
        </fieldset>
    </form>
</body>
</html>