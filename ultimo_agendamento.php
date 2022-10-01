<?php
    $conexao    = new PDO('mysql:local=localhost;port=3308;dbname=consultoriomedico','root','');    
    $sql        = "SELECT MAX(data) ultimo_agendamento FROM agendamento;";
    $dataset    = $conexao->query($sql);
    $resultset  = $dataset->fetch();
    echo 'Data do último agendamento => ' . 
    $resultset['ultimo_agendamento'];