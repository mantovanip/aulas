<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Agendamentos</title>
</head>
<body>
    
    <table width="100%">
        <caption>Lista de Agendamentos</caption>
        <thead>
            <tr>
                <th align="left">ID</td>
                <th align="left">Médico</th>
                <th align="left">Paciente</th>
                <th align="left">Atendimento</th>
                <th align="left">Data</th>
                <th align="left">Hora Inicial</th>
                <th align="left">Hora Final</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        <thead>
        <tbody>
            <?php
                $conexao    = new PDO('mysql:local=localhost;port=3308;dbname=consultoriomedico','root','');
                $sql        = "
                    SELECT 
                        *,
                        (SELECT m.nome FROM medico m WHERE m.id = a.medico) medico,
                        (SELECT p.nome FROM paciente p WHERE p.id = a.paciente) paciente,
                        (SELECT at.nome FROM atendente at WHERE at.id = a.atendente) atendente,
                        DATE_FORMAT(a.data,'%d/%m/%Y') data

                    FROM agendamento a;
                ";
                $dataset    = $conexao->query($sql);
                $resultset  = $dataset->fetchAll();

                foreach($resultset as $row){
                    echo '
                        <tr>
                            <td>'.$row['id'].'</td>
                            <td>'.$row['medico'].'</td>
                            <td>'.$row['paciente'].'</td>
                            <td>'.$row['atendente'].'</td>
                            <td>'.$row['data'].'</td>
                            <td>'.$row['hora_inicial'].'</td>
                            <td>'.$row['hora_final'].'</td>
                            <td align="center">
                                <a href="form.php?id='.$row['id'].'">Editar</a>
                            </td>
                            <td align="center">
                                <a href="crud.php?opcao=excluir&id='.$row['id'].'">Excluir</a>
                            </td>
                        </tr>
                    ';
                }
            ?>
        </tbody>
    </table>
</body>
</html>

