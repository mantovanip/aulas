<?php
    /*
        CRUD
        C - CREATE
        R - READ
        U - UPDATE
        D - DELETE
    */
    $opcao          = isset($_POST['opcao']) ? $_POST['opcao'] : $_GET['opcao'];
    $id             = isset($_POST['id']) ? $_POST['id'] : $_GET['id'];
    $paciente       = isset($_POST['paciente']) ? $_POST['paciente'] : '';
    $atendente      = isset($_POST['atendente']) ? $_POST['atendente'] : '';
    $medico         = isset($_POST['medico']) ? $_POST['medico'] : '';
    $data           = isset($_POST['data']) ? $_POST['data'] : '';
    $hora_inicial   = isset($_POST['hora_inicial']) ? $_POST['hora_inicial'] : '';
    $hora_final     = isset($_POST['hora_final']) ? $_POST['hora_final'] : '';
   

    if ($opcao == 'inserir' || $opcao == 'atualizar'){
        if ($data == ''){
            echo 'O campo data é obrigatório';
            exit;
        }
        if ($hora_inicial == ''){
            echo 'O campo hora inicial é obrigatório';
            exit;
        }

        // Verifica o formato da data
        $data_array = explode('/',$data);
        if (sizeof($data_array) != 3){
            echo 'Data no formato inválido';
            exit;
        }

        // Converte a data no padrão yyyy-mm-dd
        $data_mysql = $data_array[2] . '-' . $data_array[1] . '-' . $data_array[0];

    }
    
    $conexao    = new PDO('mysql:local=localhost;port=3308;dbname=consultoriomedico','root','');
    if ($opcao == 'inserir'){
        $sql        = "
                        INSERT INTO agendamento 
                        (
                            paciente,
                            atendente,
                            medico,
                            data,
                            hora_inicial,
                            hora_final
                        ) 
                        VALUES 
                        (
                            {$paciente},
                            {$atendente},
                            {$medico},
                            '{$data_mysql}',
                            '{$hora_inicial}',
                            '{$hora_final}'
                        );
        ";
        $mensagem   = 'Salvo com Sucesso';
    }else if($opcao == 'atualizar'){
        $sql        = "
                        UPDATE agendamento SET  
                            paciente = '{$paciente}',
                            atendente = '{$atendente}',
                            medico = '{$medico}',
                            data = '{$data_mysql}',
                            hora_inicial = '{$hora_inicial}',
                            hora_final = '{$hora_final}'
                        WHERE id = {$id};
        ";
        $mensagem   = 'Atualizado com Sucesso';
    }else if ($opcao == 'excluir'){
        $sql        = "DELETE FROM agendamento WHERE id = {$id};";
        $mensagem   = 'Excluído com Sucesso';
    }else{
        echo 'Nenhuma opção selecionada';
        exit;
    }

    if ($conexao->exec($sql)){
        echo $mensagem;
    }else{
        echo 'Erro ao cadastrar => <br/>';
        print_r($conexao->errorInfo());
    }