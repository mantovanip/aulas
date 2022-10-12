<?php
    $id         = isset($_GET['id']) ? $_GET['id'] : '';
    $descricao  = '';
    $opcao      = 'inserir';

    // id for diferente de vazio o cadastros
    // está em modo de edição
    if ($id != ''){
        $opcao      = 'atualizar';
        $conexao    = new PDO('mysql:local=localhost;port=3308;dbname=concessionaria;','root','');
        $sql        = "SELECT * FROM marca WHERE id = {$id};";
        $dataset    = $conexao->query($sql);
        $resultset  = $dataset->fetch();
        $descricao  = $resultset['descricao'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marca</title>
</head>
<body>
    <form action="crud.php" method="POST">
        <fieldset>
            <legend>Cadastro de Marca</legend>
            <input type="hidden" id="opcao" name="opcao" value="<?=$opcao?>" />
            <div>
                <label for="id">Id</label>
                <br />
                <input type="text" id="id" name="id" value="<?=$id?>" readonly />
            </div>
            <div>
                <label for="descricao">Descrição</label>
                <br/>
                <input type="text" id="descricao" name="descricao" value="<?=$descricao?>" />
            </div>
            <div>
                <input type="submit" value="Salvar" />
            </div>
        </fieldset>
    </form>
</body>
</html>