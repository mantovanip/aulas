<?php

    // Leitura das variáveis pelo método GET
    $nome   = $_GET['nome'];
    $email  = $_GET['email'];

    # Testa se o nome está vazio
    if ($email == '')
    {
        echo '<p style="color:#FF0000">
        O campo E-Mail é obrigatório.</p>';
        // Interrompe a sequencia do script
        exit;
    }

    $pos = strpos($email, '@');
    if ($pos == false) {
        echo '<p style="color:#FF0000">
        O caracter @ não foi encontrado no campo e-mail.</p>';
        // Interrompe a sequencia do script
        exit;
    }

    // Conexão com MySQL
    $conexao = new PDO(
        'mysql:host=localhost;port=3308;dbname=newsletter;',
        'root',
        ''
    );

    // Instrução SQL de INSERT
    $sql = "
        INSERT INTO newsletter (nome,email)
        VALUES ('$nome','$email');
    ";

    $result = $conexao->exec($sql);
    if ($result){
        echo '<p style="color:#006600">
        Salvo com Sucesso.</p>';
    }else{
        echo '<p style="color:#FF0000">
        Erro ao cadastrar.</p>';
    }