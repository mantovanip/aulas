<?php
    if (isset($_GET['id'])){
        $id         = $_GET['id'];
        $opcao      = 'atualizar';


        $conexao    = new PDO('mysql:local=localhost;port=3308;dbname=consultoriomedico','root','');
        $sql = "SELECT * FROM atendente WHERE id = {$id}";
        $dataset = $conexao->query($sql);
        $resultset  = $dataset->fetch();
        $id         = $resultset['id'];
        $nome       = $resultset['nome'];
    }else{
        $id         = '';
        $opcao      = 'inserir';
        $nome       = '';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Atendente</title>
</head>
<body>
    <a href="#" onclick="history.back()">Voltar</a>
    <form method="POST" action="crud.php">
        <fieldset>
            <legend>Cadastro de Atendente</legend>
            <input type="hidden" name="opcao" id="opcao" value="<?=$opcao?>" />
            <div>
                <label for="id">Código</label>
                <br/>
                <input type="text" name="id" id="id" readonly value="<?=$id?>" style="background-color:#DDD;border:1px solid rgb(100,100,100);" />
            </div>
            <div>
                <label for="nome">Nome:</label>
                <br/>
                <input type="text" name="nome" id="nome" value="<?=$nome?>" />
            </div>
            <div>
                <input type="submit" value="Salvar" />
            </div>
        </fieldset>
    </form>
</body>
</html>