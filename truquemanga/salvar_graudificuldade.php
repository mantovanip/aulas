<?php
    $descricao = $_GET['descricao'];

    if ($descricao == ''){
        echo 'Campo descrição é obrigatório.';
        exit;    
    }

    $conexao = new PDO('mysql:local=localhost;port=3308;dbname=truque_na_manga','root','');
    $sql     = "INSERT INTO grau_dificuldade (descricao) VALUES ('{$descricao}');";
    $execute = $conexao->exec($sql);

    if($execute){
        echo 'Salvo com sucesso';
    }else{
        echo 'Erro ao salvar';
    }