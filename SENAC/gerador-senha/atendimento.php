<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atendimento</title>
</head>
<body>        
    <form action="gerar_atendimento.php" method="POST">
        <fieldset>
            <legend>Atendimento</legend>
            <a style="float:right" href="#" onclick="history.back()">Voltar</a>
            <div>
                <label for="nome">Nome</label>
                <br/>
                <input type="text" id="nome" name="nome" />
            </div>
            <div>
                <label for="cpf">CPF</label>
                <br/>
                <input type="text" id="cpf" name="cpf" />
            </div>
            <div>
                <br/>
                <input type="submit" value="Gerar Atendimento" />
            </div>    
        </fieldset>
    </form>
</body>
</html>