<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <form action="salvar_cliente.php" method="GET">
        <fieldset>
            <legend>Cadastro de Cliente</legend>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" />
            </div>
            <div>
                <input type="submit" value="Salvar" />
            </div>
        </fieldset>
    </form>
</body>
</html>