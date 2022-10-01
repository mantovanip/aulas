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
        $endereco   = $resultset['endereco'];
        $bairro     = $resultset['bairro'];
        $cidade     = $resultset['cidade'];
        $estado     = $resultset['estado'];
        $email      = $resultset['email'];
        $telefone1  = $resultset['telefone1'];
        $telefone2  = $resultset['telefone2'];
        $cpf        = $resultset['cpf'];
        $rg         = $resultset['rg'];
        $genero     = $resultset['genero'];
    }else{
        $id         =          
        $nome       = 
        $endereco   = 
        $bairro     = 
        $email      = 
        $telefone1  = 
        $telefone2  = 
        $cpf        = 
        $rg         = 
        $genero     = '';

        $cidade     = 1;
        $estado     = 2;        
        $opcao      = 'inserir';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Paciente</title>
</head>
<body>
    <a href="#" onclick="history.back()">Voltar</a>
    <form method="POST" action="crud.php">
        <fieldset>
            <legend>Cadastro de Paciente</legend>
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
                <label for="endereco">Endereço:</label>
                <br/>
                <input type="text" name="endereco" id="endereco" value="<?=$endereco?>" />
            </div>
            <div>
                <label for="bairro">Bairro:</label>
                <br/>
                <input type="text" name="bairro" id="bairro" value="<?=$bairro?>" />
            </div>
            <div>
                <label for="cidade">Cidade</label>
                <br/>
                <select id="cidade" name="cidade">
                    <?php
                        $conexao    = new PDO('mysql:local=localhost;port=3308;dbname=consultoriomedico','root','');
                        $sql        = "SELECT * FROM cidade;";
                        $dataset    = $conexao->query($sql);
                        $resultset  = $dataset->fetchAll();

                        foreach($resultset as $row){
                            echo '<option value="'.$row['id'].'" '.($row['id']==$cidade?'selected':'').'>'.$row['nome'].'</option>';
                        }
                    ?>
                </select>
            </div>
            <div>
                <label for="estado">Estado</label>
                <br/>
                <select id="estado" name="estado">
                    <?php
                        $conexao    = new PDO('mysql:local=localhost;port=3308;dbname=consultoriomedico','root','');
                        $sql        = "SELECT * FROM estado;";
                        $dataset    = $conexao->query($sql);
                        $resultset  = $dataset->fetchAll();

                        foreach($resultset as $row){
                            echo '<option value="'.$row['id'].'" '.($row['id']==$estado?'selected':'').'>'.$row['nome'].'</option>';
                        }
                    ?>
                </select>
            </div>  
            <div>
                <label for="email">E-Mail:</label>
                <br/>
                <input type="text" name="email" id="email" value="<?=$email?>" />
            </div>
            <div>
                <label for="telefone1">Telefone:</label>
                <br/>
                <input type="text" name="telefone1" id="telefone1" value="<?=$telefone1?>" />
            </div>
            <div>
                <label for="telefone2">Telefone Extra:</label>
                <br/>
                <input type="text" name="telefone2" id="telefone2" value="<?=$telefone2?>" />
            </div>
            <div>
                <label for="rg">RG:</label>
                <br/>
                <input type="text" name="rg" id="rg" value="<?=$rg?>" />
            </div>
            <div>
                <label>Gênero: </label>
                <br/>
                <input type="radio" id="genero_m" name="genero" value="M">
                <label for="genero_m">Masculino</label>
                <input type="radio" id="genero_f" name="genero" value="F">
                <label for="genero_f">Feminino</label>
                <input type="radio" id="genero_n" name="genero" value="N">
                <label for="genero_n">Não Informar</label>
            </div>
            <div>
                <input type="submit" value="Salvar" />
            </div>
        </fieldset>
    </form>
</body>
</html>