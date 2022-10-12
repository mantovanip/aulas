<?php
    /*
        CRUD
        C - CREATE
        R - READ
        U - UPDATE
        D - DELETE
    */
    $opcao          = isset($_POST['opcao']) ? $_POST['opcao'] : $_GET['opcao'];
    $id             = isset($_POST['id']) ? $_POST['id'] : $_GET['id'];
    $nome           = isset($_POST['nome']) ? $_POST['nome'] : '';
    $endereco       = isset($_POST['endereco']) ? $_POST['endereco'] : '';
    $bairro         = isset($_POST['bairro']) ? $_POST['bairro'] : '';
    $cep            = isset($_POST['cep']) ? $_POST['cep'] : '';
    $cidade         = isset($_POST['cidade']) ? $_POST['cidade'] : '';
    $estado         = isset($_POST['estado']) ? $_POST['estado'] : '';
    $email          = isset($_POST['email']) ? $_POST['email'] : '';
    $telefone1      = isset($_POST['telefone1']) ? $_POST['telefone1'] : '';
    $telefone2      = isset($_POST['telefone2']) ? $_POST['telefone2'] : '';
    $cpf            = isset($_POST['cpf']) ? $_POST['cpf'] : '';
    $rg             = isset($_POST['rg']) ? $_POST['rg'] : '';
    $genero         = isset($_POST['genero']) ? $_POST['genero'] : '';

   

    if ($opcao == 'inserir' || $opcao == 'atualizar'){
        if ($nome == ''){
            echo 'O campo nome é obrigatório';
            exit;
        }

        if (strlen($nome) <= 3){
            echo 'Você precisa digitar mais que 3 caracteres no campo nome.';
            exit;
        }
    }
    
    $conexao    = new PDO('mysql:local=localhost;port=3308;dbname=consultoriomedico','root','');
    if ($opcao == 'inserir'){
        $sql        = "
                        INSERT INTO paciente 
                        (
                            nome,
                            endereco,
                            bairro,
                            cidade,
                            email,
                            telefone1,
                            telefone2,
                            cpf,
                            rg,
                            genero
                        ) 
                        VALUES 
                        (
                            '{$nome}',
                            '{$endereco}',
                            '{$bairro}',
                            '{$cidade}',
                            '{$email}',
                            '{$telefone1}',
                            '{$telefone2}',
                            '{$cpf}',
                            '{$rg}',
                            '{$genero}'
                        );
        ";
        $mensagem   = 'Salvo com Sucesso';
    }else if($opcao == 'atualizar'){
        $sql        = "
                        UPDATE paciente SET  
                            nome = '{$nome}',
                            endereco = '{$endereco}',
                            bairro = '{$bairro}',
                            cidade = '{$cidade}',
                            estado = '{$estado}',
                            email = '{$email}',
                            telefone1 = '{$telefone1}',
                            telefone2 = '{$telefone2}',
                            cpf = '{$cpf}',
                            rg = '{$rg}',
                            genero = '{$genero}'
                        WHERE id = {$id};
        ";
        $mensagem   = 'Atualizado com Sucesso';
    }else if ($opcao == 'excluir'){
        $sql        = "DELETE FROM medico WHERE id = {$id};";
        $mensagem   = 'Excluído com Sucesso';
    }else{
        echo 'Nenhuma opção selecionada';
        exit;
    }

    if ($conexao->exec($sql)){
        echo $mensagem;
    }else{
        echo 'Erro ao cadastrar => <br/>';
        print_r($conexao->errorInfo());
    }