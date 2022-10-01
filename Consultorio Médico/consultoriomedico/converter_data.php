<?php

    // 21/09/2022 - ISO
    // 2022-09-21 - MySQL
    // HH:MM:SS
    // 13:40 '.:00';

    $data_br    = '210/9/2022';
    $data_array = explode('/',$data_br);
    if (sizeof($data_array) != 3){
        echo 'Data no formato inválido';
        exit;
    }

    
    
    #var_dump($data_array);
    $dia = $data_array[0];

    if (strlen($dia) != 2){
        echo 'Dia está no formato inválido';
        exit;
    }
    $data_mysql = $data_array[2] . '-' . $data_array[1] . '-' . $data_array[0];
    #echo  $data_mysql;


    $nome = 'Edilson Bitencourt';

    #echo 'Sobrenome ' . explode(' ',$nome)[1];

    $email = "edilsonbitencourt@hotmail.com";

    $dominio = explode('@',$email)[1];
    $extensao = explode('.',$dominio)[1];
    echo $extensao;


