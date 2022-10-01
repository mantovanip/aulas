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
    $crm            = isset($_POST['crm']) ? $_POST['crm'] : '';
    $especialidade  = isset($_POST['especialidade']) ? $_POST['especialidade'] : '';
   

    if ($opcao == 'inserir' || $opcao == 'atualizar'){
        if ($nome == ''){
            echo 'O campo nome é obrigatório';
            exit;
        }

        if (strlen($nome) <= 3){
            echo 'Você precisa digitar mais que 3 caracteres no campo nome.';
            exit;
        }

        if ($crm == ''){
            echo 'O campo CRM é obrigatório';
            exit;
        }
        
        if ($especialidade == ''){
            echo 'O campo especialidade é obrigatório';
            exit;
        }
    }
    
    $conexao    = new PDO('mysql:local=localhost;port=3308;dbname=consultoriomedico','root','');
    if ($opcao == 'inserir'){
        $sql        = "INSERT INTO medico (nome,crm,especialidade) VALUES ('{$nome}','{$crm}','{$especialidade}');";
        $mensagem   = 'Salvo com Sucesso';
    }else if($opcao == 'atualizar'){
        $sql        = "UPDATE medico SET nome = '{$nome}' , crm = '{$crm}' , especialidade = '{$especialidade} WHERE id = {$id};";
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