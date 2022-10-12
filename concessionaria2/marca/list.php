<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Marca</title>
    <style>
        .text-center {
            text-align:center;
        }

        table {
            width:100%;
        }
        .titulo{
            margin-bottom:-10px;
        }

        table thead tr th
        {
            border-bottom:2px solid #000;
        }

        .div-button button{
            float:right;
            margin:15px;
            width:75px;
            border:0;
            background-color:#CCC;
            padding:5px;
            border-radius:5px;
        }
    </style>

</head>
<body>
    <h2 class="titulo">Lista de Marca</h2>
    <hr/>
    <div class="div-button">
        <button>Novo</button>
    </div>
    <table cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $conexao    = new PDO('mysql:local=localhost;port=3308;dbname=concessionaria;','root','');
                $sql        = "SELECT * FROM marca;";
                $dataset    = $conexao->query($sql);
                $resultset  = $dataset->fetchAll();

                foreach($resultset as $row){                
                    echo '
                        <tr>
                            <td>'.$row['id'].'</td>
                            <td>'.$row['descricao'].'</td>
                            <td class="text-center">
                                <a href="form.php?id='.$row['id'].'">Editar</a>
                            </td>
                            <td class="text-center">
                                <a href="#">Excluir</a>
                            </td>
                        </tr>
                    ';
                }
            ?>
        </tbody>
    </table>
</body>
</html>