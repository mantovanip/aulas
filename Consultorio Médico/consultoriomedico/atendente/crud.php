<?php
    /*
        CRUD
        C - CREATE
        R - READ
        U - UPDATE
        D - DELETE
    */
    $opcao      = isset($_POST['opcao']) ? $_POST['opcao'] : $_GET['opcao'];
    $id         = isset($_POST['id']) ? $_POST['id'] : $_GET['id'];
    $nome       = isset($_POST['nome']) ? $_POST['nome'] : '';

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
        $sql        = "INSERT INTO atendente (nome) VALUES ('{$nome}');";
        $mensagem   = 'Salvo com Sucesso';
    }else if($opcao == 'atualizar'){
        $sql        = "UPDATE atendente SET nome = '{$nome}' WHERE id = {$id};";
        $mensagem   = 'Atualizado com Sucesso';
    }else if ($opcao == 'excluir'){
        $sql        = "DELETE FROM atendente WHERE id = {$id};";
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