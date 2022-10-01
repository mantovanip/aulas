<?php

// Incluir a conexao com o BD
include_once './conexao.php';

// Receber o tipo que a senha deve ser chamada
$tipo = filter_input(INPUT_GET, 'tipo', FILTER_SANITIZE_NUMBER_INT);

// Verifica se vem o tipo de senha que deve ser chamada
if (!empty($tipo)) {

    // Recuperar a senha gerada que esta salva na tabela "senhas_geradas"
    // Recuperar conforme o tipo recebido pela URL
    $query_senha_gerada = "SELECT senger.id id_senha_gerada,
                sen.nome_senha
                FROM senhas_geradas AS senger
                INNER JOIN senhas AS sen ON sen.id=senger.senha_id
                WHERE senger.sits_senha_id = 2
                AND sen.tipos_senha_id=:tipos_senha_id
                ORDER BY senger.id ASC 
                LIMIT 1";
    // Preparar a QUERY
    $result_senha_gerada = $conn->prepare($query_senha_gerada);

    // Substituir o link pelo valor
    $result_senha_gerada->bindParam(':tipos_senha_id', $tipo, PDO::PARAM_INT);

    // Executar a QUERY
    $result_senha_gerada->execute();

    // Verificar se encontrou algum registro no BD
    if (($result_senha_gerada) and ($result_senha_gerada->rowCount() != 0)) {
        
        // Ler as informações retornada do banco de dados
        $row_senha_gerada = $result_senha_gerada->fetch(PDO::FETCH_ASSOC);        

        // Extrair para imprimir através da chave no array
        extract($row_senha_gerada);

        // Alterar o status da senha gerada
        $query_edit_senha_gerada = "UPDATE senhas_geradas 
                        SET sits_senha_id = 4, modified = NOW()
                        WHERE id=$id_senha_gerada";
        
        // Prepara a QUERY
        $edit_senha_gerada = $conn->prepare($query_edit_senha_gerada);
        
        //Executar a QUERY
        $edit_senha_gerada->execute();


        // Criar o array com a posição indicando que não houve erro e a mensagem com a senha
        $retorna = ['status' => true, 'msg' => "<p style='color: green;'>Senha chamada: $nome_senha</p>", "id_senha_gerada" => $id_senha_gerada];
    } else {
        // Criar o array com a posição indicando que houve erro e a mensagem de erro
        $retorna = ['status' => false, 'msg' => "<p style='color: #f00;'>Erro: Tipo de senha não encontrada!</p>"];
    }
} else {
    // Criar o array com a posição indicando que houve erro e a mensagem de erro
    $retorna = ['status' => false, 'msg' => "<p style='color: #f00;'>Erro: Senha não chamada!</p>"];
}

// Retornar os dados para o JavaScript
echo json_encode($retorna);
