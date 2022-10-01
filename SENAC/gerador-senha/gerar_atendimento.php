<?php

    $nome   = $_POST['nome'];
    $cpf    = $_POST['cpf'];

    if ($nome == ''){
        echo 'Nome é obrigatório';
        exit;
    }

    // strlen pega a quantidade caracteres
    if ($cpf != '' && strlen($cpf) != 14){
        echo 'Formato do CPF é inválido';
        exit;
    }

    // String de conexão com o banco
    $conexao = new PDO('mysql:local=localhost;port=3308;dbname=senhaatendimento;','root','');

    // Recuperar a última senha
    $sql            = "SELECT numero AS ultima_senha FROM senha;";
    $dataset        = $conexao->query($sql);
    $resultset      = $dataset->fetch();
    $ultima_senha   = $resultset['ultima_senha'];

    // Inseri um novo atendimento
    $sql        = "
        INSERT INTO atendimento 
            (nome,cpf,senha) 
        VALUES 
            ('{$nome}','{$cpf}',{$ultima_senha});
    ";

    echo '
        <p>Atendimento registrado com sucesso !<p>
        <h1>Senha: # '.str_pad($ultima_senha,3,'0',STR_PAD_LEFT).' #</h1>
    ';

    // Auto Increment
    $ultima_senha++;

    $query = $conexao->exec($sql);
    if ($query){
        // Atualiza o número a próxima senha
        $sql = "UPDATE senha SET numero = {$ultima_senha};";
        $query = $conexao->exec($sql);
    }

