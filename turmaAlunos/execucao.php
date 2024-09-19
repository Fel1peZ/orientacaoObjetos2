<?php

    require_once("modelo/Alunos.php");
    require_once("modelo/Turma.php");

    $turma1 = new Turma;
    $turma1->setNome("Turma 1");
    $turma1->setCurso("TDS");

    $arrayTurma = array ();
    $aluno = 0;
    for ($i=0; $i < 5 ; $i++){ 
    
        $aluno = new Aluno;
        $aluno->setNome(readline("Informe o nome do aluno: \n"));
        $aluno->setIdade(readline("Informe a idade do aluno: \n"));
        $aluno->setTurma($turma1);
        array_push($arrayTurma,$aluno);
    }
    $turma1->setAlunos($arrayTurma);
    $i = 1;
    foreach($turma1->getAlunos()as $dado){
        
        echo $i."-\n". $dado;
        $i++;
    } 