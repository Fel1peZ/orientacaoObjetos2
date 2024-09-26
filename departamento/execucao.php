<?php
    require_once("modelo/Departamento.php");
    require_once("modelo/Funcionario.php");

    $funcionarios = array();
    for ($i=0; $i <5 ; $i++) { 
        $funcionario = new Funcionario;
        $funcionario->setNome(readline("Informe seu nome: \n"));
        $funcionario->setCargo(readline("Informe seu cargo: \n"));
        $funcionario->setSalario(readline("Informe seu salário: \n"));
        $departamento = new Departamento;
        $departamento->setNome(readline("Informe o nome do seu departamento: "));
        $departamento->setNumeroSala(readline("Informe o numero da sala do seu departamento: "));
        $funcionario->setDepto($departamento);
        array_push($funcionarios,$funcionario);
    }

    foreach($funcionarios as $dado){
        echo $dado;    
    }