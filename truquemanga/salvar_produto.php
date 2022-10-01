<?php
    $nome   = $_GET['nome'];
    $valor  = $_GET['valor'];
    $grau   = $_GET['grau_dificuldade'];


    if ($nome == ''){
        echo 'Campo nome é obrigatório.';
        exit;    
    }

    if ($valor == ''){
        echo 'Campo nome é obrigatório.';
        exit;    
    }
    
    if ($valor < 0){
        echo 'Campo valor não pode ser menor que zero.';
        exit;
    }

    if (!is_numeric($valor)){
        echo 'Campo valor tem que um número.';
        exit;    
    }    
    $conexao = new PDO('mysql:local=localhost;port=3308;dbname=truque_na_manga','root','');
    $sql     = "INSERT INTO produto (nome,valor,grau_dificuldade) VALUES ('{$nome}',{$valor},{$grau});";
    $execute = $conexao->exec($sql);

    if($execute){
        echo 'Salvo com sucesso';
    }else{
        echo 'Erro ao salvar';
    }