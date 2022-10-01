<?php
include_once "./conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Celke</title>
</head>

<body>
    <a href="index.php">Gerar Senha</a><br>
    <a href="atendimento.php">Chamar Senha</a><br>

    <h2>Chamar Senha</h2>

    <!-- Receber a mensagem de erro do JavaScript -->
    <span id="msgAlerta">Senha chamada: </span>

    <?php
    // Botao para chamar a funcao "chamarSenha". Funcao que chama a senha 
    echo "<p><button type='button' onclick='chamarSenha(1)'>Convencional</button></p>";

    // Botao para chamar a funcao "chamarSenha". Funcao que chama a senha  
    echo "<p><button type='button' onclick='chamarSenha(2)'>Preferencial</button></p>";

    // Recuperar a senhas geradas que estao salva na tabela "senhas_geradas", com a situacao 2 "Emitida"
    $query_senhas_geradas = "SELECT senger.id,
                    sen.nome_senha,
                    tip.nome
                    FROM senhas_geradas AS senger
                    INNER JOIN senhas AS sen ON sen.id=senger.senha_id
                    INNER JOIN tipos_senhas AS tip ON tip.id=sen.tipos_senha_id
                    WHERE senger.sits_senha_id = 2 
                    ORDER BY senger.id ASC";
    //Prepara a QUERY
    $result_senhas_geradas = $conn->prepare($query_senhas_geradas);

    //Executar a QUERY
    $result_senhas_geradas->execute();

    // Inicio SELETOR que esta ao redor da lista de senha que he utilizada no JS para excluir a senha chamada
    echo "<div id='lista-senha-gerada'>";

    // Ler os dados retornado do banco de dados
    while ($row_senha_gerada = $result_senhas_geradas->fetch(PDO::FETCH_ASSOC)){
        //var_dump($row_senha_gerada);

        // Extrair para imprimir através da chave no array
        extract($row_senha_gerada);

        // Inicio SELETOR utilizado para indicar qual senha deve ser excluida quando a mesma for chamada
        echo "<div id='senha-gerada-$id'>";

        // Imprimir os dados da senha
        echo "ID da senha gerada: $id <br>";
        echo "Nome da senha: $nome_senha <br>";
        echo "Tipo da senha: $nome <br>";        

        echo "<hr>";

        // Fim SELETOR utilizado para indicar qual senha deve ser excluida quando a mesma for chamada
        echo "</div>";
        
    }

    // Fim SELETOR que esta ao redor da lista de senha que he utilizada no JS para excluir a senha chamada
    echo "</div>";
    ?>

    <script src="js/custom.js"></script>

</body>

</html>