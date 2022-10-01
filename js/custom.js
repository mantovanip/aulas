// Funcao para gerar senha conforme o tipo da senha enviado no paramento
async function gerarSenha(tipoSenha) {

    // Chamar o arquivo PHP para gerar a senha
    const dados = await fetch('gerar_senha.php?tipo=' + tipoSenha);

    // Ler os dados retornado pelo PHP
    const resposta = await dados.json();
    //console.log(resposta);

    // Acessar o IF quando houve erro no arquivo "gerar_senha.php"
    if (!resposta['status']) {
        // Enviar a mensagem de erro para o SELETOR "msgAlerta"
        document.getElementById("msgAlerta").innerHTML = resposta['msg'];

        // Apagar a senha gerada anteriormente
        document.getElementById("senhaGerada").innerHTML = "";
    } else {
        // Enviar a senha gerada para o SELETOR "senhaGerada"
        document.getElementById("senhaGerada").innerHTML = resposta['nome_senha'];
        // Apagar a mensagem de erro caso exista 
        document.getElementById("msgAlerta").innerHTML = "";
    }
}

// Funcao chamar senha conforme o tipo de senha recebido
async function chamarSenha(tipoSenha){
    //console.log("Chamar senha, tipo de senha: " + tipoSenha);

    // Chamar o arquivo PHP para chamar a senha
    const dados = await fetch('chamar_senha.php?tipo=' + tipoSenha);

    // Ler os dados retornado pelo PHP
    const resposta = await dados.json();
    console.log(resposta);

    // Acessar o IF quando houve erro no arquivo "chamar_senha.php"
    if(!resposta['status']){
        // Enviar a mensagem de erro para o SELETOR "msgAlerta"
        document.getElementById("msgAlerta").innerHTML = resposta['msg'];
    }else{ // Acessar o ELSE quando nao houve erro no arquivo "chamar_senha.php"
        // Enviar a mensagem de erro para o SELETOR "msgAlerta"
        document.getElementById("msgAlerta").innerHTML = resposta['msg'];

        // Recuperar o SELETOR que esta ao redor da lista de senha
        var listaSenha = document.getElementById("lista-senha-gerada");

        // Recuperar o SELETOR da senha chamada
        var senha = document.getElementById("senha-gerada-" + resposta['id_senha_gerada']);

        // Remover a senha chamada da lista 
        listaSenha.removeChild(senha);
    }    
}