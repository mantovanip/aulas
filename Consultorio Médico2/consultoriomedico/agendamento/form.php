<?php
    if (isset($_GET['id'])){
        $id         = $_GET['id'];
        $opcao      = 'atualizar';


        $conexao    = new PDO('mysql:local=localhost;port=3308;dbname=consultoriomedico','root','');
        $sql = "SELECT * FROM agendamento WHERE id = {$id}";
        $dataset = $conexao->query($sql);
        $resultset      = $dataset->fetch();
        $id             = $resultset['id'];
        $paciente       = $resultset['paciente'];
        $medico         = $resultset['medico'];
        $atendente      = $resultset['atendente'];
        $data           = $resultset['data'];
        $hora_inicial   = $resultset['hora_inicial'];
        $hora_final     = $resultset['hora_final'];
    }else{
        $opcao          = 'inserir';
        $id             =          
        $paciente       = 
        $medico         = 
        $atendente      = 
        $data           = 
        $hora_inicial   = 
        $hora_final     = '';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Paciente</title>
</head>
<body>
    <a href="#" onclick="history.back()">Voltar</a>
    <form method="POST" action="crud.php">
        <fieldset>
            <legend>Cadastro de Agendamento</legend>
            <input type="hidden" name="opcao" id="opcao" value="<?=$opcao?>" />
            <div>
                <label for="id">Código</label>
                <br/>
                <input type="text" name="id" id="id" readonly value="<?=$id?>" style="background-color:#DDD;border:1px solid rgb(100,100,100);" />
            </div>            
            <div>
                <label for="paciente">Paciente</label>
                <br/>
                <select id="paciente" name="paciente">
                    <?php
                        $conexao    = new PDO('mysql:local=localhost;port=3308;dbname=consultoriomedico','root','');
                        $sql        = "SELECT * FROM paciente;";
                        $dataset    = $conexao->query($sql);
                        $resultset  = $dataset->fetchAll();

                        foreach($resultset as $row){
                            echo '<option value="'.$row['id'].'" >'.$row['nome'].'</option>';
                        }
                    ?>
                </select>
            </div>
            <div>
                <label for="medico">Médico</label>
                <br/>
                <select id="medico" name="medico">
                    <?php
                        $conexao    = new PDO('mysql:local=localhost;port=3308;dbname=consultoriomedico','root','');
                        $sql        = "SELECT * FROM medico;";
                        $dataset    = $conexao->query($sql);
                        $resultset  = $dataset->fetchAll();

                        foreach($resultset as $row){
                            echo '<option value="'.$row['id'].'" >'.$row['nome'].'</option>';
                        }
                    ?>
                </select>
            </div>
            <div>
                <label for="atendente">Atendente</label>
                <br/>
                <select id="atendente" name="atendente">
                    <?php
                        $conexao    = new PDO('mysql:local=localhost;port=3308;dbname=consultoriomedico','root','');
                        $sql        = "SELECT * FROM atendente;";
                        $dataset    = $conexao->query($sql);
                        $resultset  = $dataset->fetchAll();

                        foreach($resultset as $row){
                            echo '<option value="'.$row['id'].'" >'.$row['nome'].'</option>';
                        }
                    ?>
                </select>
            </div>
            <div>
                <label for="data">Data:</label>
                <br/>
                <input type="text" name="data" id="data" value="<?=$data?>" />
            </div>
            <div>
                <label for="hora_inicial">Hora Inicial:</label>
                <br/>
                <input type="text" name="hora_inicial" id="hora_inicial" value="<?=$hora_inicial?>" />
            </div>            
            <div>
                <label for="hora_final">Hora Final:</label>
                <br/>
                <input type="text" name="hora_final" id="hora_final" name="hora_final" value="<?=$hora_final?>" />
            </div>                        
            <div>
                <input type="submit" value="Salvar" />
            </div>
        </fieldset>
    </form>
</body>
</html>