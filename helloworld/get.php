<?php


    $conexao = new PDO('mysql:host=localhost;port=3308;dbname=newsletter;','root','');
    
    if (!$conexao ){
        
            echo'Não foi possível conectar com sucesso';
            exit;
    }

    $sql = "INSERT INTO newslatter  (nome,email) VALUE ('{$_GET['nome,email']}')";

    $conexao->exec($sql);