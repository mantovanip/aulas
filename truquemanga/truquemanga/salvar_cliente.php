<?php
    $nome = $_GET['nome'];

    if ($nome == ''){
        echo 'Campo nome é obrigatório.';
        exit;    
    }

    $conexao = new PDO('mysql:local=localhost;port=3308;dbname=truque_na_manga','root','');
    $sql     = "INSERT INTO cliente (nickname) VALUES ('{$nome}');";
    $execute = $conexao->exec($sql);

    if($execute){
        echo 'Salvo com sucesso';
    }else{
        echo 'Erro ao salvar';
    }