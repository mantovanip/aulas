<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Grau de Dificuldade</title>
</head>
<body>
    <form action="salvar_graudificuldade.php" method="GET">
        <fieldset>
            <legend>Cadastro de Grau de Dificuldade</legend>
            <div>
                <label for="descricao">Descrição</label>
                <input type="text" name="descricao" id="descricao" />
            </div>
            <div>
                <input type="submit" value="Salvar" />
            </div>
        </fieldset>
    </form>
</body>
</html>