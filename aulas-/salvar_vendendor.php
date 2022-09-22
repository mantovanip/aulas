<?php
    //var_dump($_GET);
    $nome = $_GET['nome'];

    if ($nome == ''){
        echo 'Campo nome é obrigatório.';
        exit;    
    }
        

    $conexao = new PDO('mysql:local=localhost;port=3308;dbname=cadastro_relatorio_vendas','root','');
    $sql     = "INSERT INTO nome (nickname) VALUES ('{$nome}');";
    $execute = $conexao->exec($sql);

    if($execute){
        echo 'Vendendor cadastrado com sucesso!';
    exit;
    }else{
        echo 'Erro ao salvar';
    }
    