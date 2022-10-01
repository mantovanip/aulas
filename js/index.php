<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Celke</title>
</head>

<body>
    <a href="index.php">Gerar Senha</a><br>
    <a href="atendimento.php">Chamar Senha</a><br>

    <h2>Gerar senha de atendimento</h2>

    <!-- Receber a mensagem de erro do JavaScript -->
    <span id="msgAlerta"></span>

    <!-- Receber a senha do JavaScript -->
    <p>Senha: <span id="senhaGerada"></span></p>

    <!-- Chamar a funcao "gerarSenha" do JavaScript para gerar senha para atendimento convencional -->
    <p><button type="button" onclick="gerarSenha(1)">Convencional</button></p>

    <!-- Chamar a funcao "gerarSenha" do JavaScript para gerar senha para atendimento preferencial -->
    <p><button type="button" onclick="gerarSenha(2)">Preferencial</button></p>

    <script src="js/custom.js"></script>
    
</body>

</html>