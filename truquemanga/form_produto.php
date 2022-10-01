<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
</head>
<body>
    <form action="salvar_produto.php" method="GET">
        <fieldset>
            <legend>Cadastro de Produto</legend>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" />
            </div>
            <div>
                <label for="valor">Valor</label>
                <input type="text" name="valor" id="valor" />
            </div>            
            <div>
                <label for="grau_dificuldade">Grau de Dificiuldade</label>
                <select name="grau_dificuldade" id="grau_dificuldade">
                    <?php
                        $conexao    = new PDO('mysql:local=localhost;port=3308;dbname=truque_na_manga','root','');
                        $sql        = "SELECT * FROM grau_dificuldade";
                        $dataset    = $conexao->query($sql);
                        $resultset  = $dataset->fetchAll();

                        foreach($resultset as $row){
                            echo '<option value="'.$row['id'].'">'.$row['descricao'].'</option>';
                        }
                    ?>
                </select>
            </div>            
            <div>
                <input type="submit" value="Salvar" />
            </div>
        </fieldset>
    </form>
</body>
</html>    