<?php
    // Leitura dos dados da requisição
    $opcao      = $_POST['opcao'];
    $id         = $_POST['id'];
    $descricao  = $_POST['descricao'];
    
    // Validação do campo
    if ($descricao == ''){
        echo 'O campo descrição é obrigatório.';
        exit;
    }

    // Conexão com banco de dados
    // PDO - PHP DATABASE OBJECT
    $conexao = new PDO('mysql:local=localhost;port=3308;dbname=concessionaria','root','');

    if ($opcao == 'inserir'){
        // Instrução SQL de INSERÇÃO
        $sql    = "INSERT INTO marca (descricao) VALUES ('{$descricao}');";    
        $msg    = 'realizado';
    }else if ($opcao == 'atualizar'){
        // Instrução SQL de ATUALIZAÇÃO
        $sql    = "UPDATE marca SET descricao = '{$descricao}' WHERE id = {$id};";
        $msg    = 'atualizado';
    }

    // Executa a instrução no banco de dados
    // Comando exec retorna true em caso de sucesso
    // e retorna false em caso de fracasso
    $query  = $conexao->exec($sql);

    // Teste lógico para verificar o sucesso
    // da execução instrução
    if ($query){
        echo 'Cadastro '.$msg.' com sucesso.';
    }else{
        echo 'Erro ao salvar.';
    }