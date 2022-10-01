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
        $crm        = $resultset['crm'];
    }else{
        $id         = '';
        $opcao      = 'inserir';
        $nome       = '';
        $crm        = '';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Médico</title>
</head>
<body>
    <a href="#" onclick="history.back()">Voltar</a>
    <form method="POST" action="crud.php">
        <fieldset>
            <legend>Cadastro de Médico</legend>
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
                <label for="crm">CRM:</label>
                <br/>
                <input type="text" name="crm" id="crm" value="<?=$crm?>" />
            </div>            
            <div>
                <label for="especialidade">Especialidade</label>
                <br/>
                <select id="especialidade" name="especialidade">
                    <?php
                        $conexao    = new PDO('mysql:local=localhost;port=3308;dbname=consultoriomedico','root','');
                        $sql        = "SELECT * FROM especialidade;";
                        $dataset    = $conexao->query($sql);
                        $resultset  = $dataset->fetchAll();

                        foreach($resultset as $row){
                            echo '<option value="'.$row['codigo'].'">'.$row['descricao'].'</option>';
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