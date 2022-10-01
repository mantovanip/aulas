<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marca</title>
</head>
<body>
    <form action="crud.php" method="POST">
        <fieldset>
            <legend>Cadastro de Marca</legend>
            <div>
                <label for="descricao">Descrição</label>
                <br/>
                <input type="text" id="descricao" name="descricao" />
            </div>
            <div>
                <input type="submit" value="Salvar" />
            </div>
        </fieldset>
    </form>
</body>
</html>