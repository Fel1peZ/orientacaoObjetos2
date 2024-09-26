<?php

    require_once("modelo/Carro.php");
    require_once("modelo/Fabricante.php");

    $fabricantes = array();
    $fabricante1 = new Fabricante;
    $fabricante1->setNome("Volkswagen");
    $fabricante1->setSigla("VW");
    $fabricante2 = new Fabricante;
    $fabricante2->setNome("Chevrolet");
    $fabricante2->setSigla("GM");
    $fabricante3 = new Fabricante;
    $fabricante3->setNome("Fiat");
    $fabricante3->setSigla("F");
    $fabricante4 = new Fabricante;
    $fabricante4->setNome("Renault");
    $fabricante4->setSigla("RN");
    array_push($fabricantes,$fabricante1);
    array_push($fabricantes,$fabricante2);
    array_push($fabricantes,$fabricante3);
    array_push($fabricantes,$fabricante4);

    $carros = array();
    $opcao = 4;
    do {
        
        echo "\n=========Menu=========\n";
        echo"1-Cadastrar Carro\n";
        echo"2-Excluir Carro\n";
        echo"3-Listar carros\n";
        echo"0-Sair\n";
        $opcao = readline("Escolha uma opção: \n");
        switch ($opcao) {
            case 1:
                //Cadastrar
                echo"-----Cadastro-Carro-----\n";
                $carro = new Carro;
                $carro->setModelo(readline("\nInforme o modelo do carro:"));
                $carro->setAnoFabricacao(readline("\nInforme o ano de fabricação do carro: "));
                echo "\nEscolha um fabricante digitando sua sigla: \n";
                foreach($fabricantes as $dado){

                     echo $dado;
                }
                $fabricante = readline("Insira: \n");
                $fabric = null;
                foreach($fabricantes as $dado){
                    if($dado->getSigla()==$fabricante){
                        $fabric = $dado;
                    }
                }
                
                if($fabric){
                    $carro->setFabricante($fabric);
                   echo"Fabricante cadastrado com sucesso\n";
                   array_push($carros,$carro);
                }
                else{
                    echo "Sigla errada\n";
                }
               
                
                break;
            case 2:
                $i = 1;
                echo"-----Excluir-Carro-----\n";
                if(count($carros)>0){
                    echo "\n Lista:\n";
                    foreach($carros as $dado){
                        echo $i."-" . $dado;
                        $i++;
                    }
                    $indice = readline("Informe qual carro deve ser excluído: \n");
                    $indice--;
                    if($indice >= 0 && $indice < count($carros)){
                        array_splice($carros,$indice,1);
                        echo "Carro excluido com sucesso\n";
                    }
                    else{
                        echo" O carro escolhido não existe\n";
                        }
                }
                else{
                    echo "\n Não há carros cadastrados!\n";
                }
                echo"\n";
                
                break;
            case 3:
                echo"-----Listar-Carros-----\n";
                if(count($carros)>0){
                    foreach ($carros as $dado){
                        echo $dado;
                    }
                }
                else{
                    echo "\nSem carros cadastrados!\n";
                }
                break;
            default:
                "\nOpcao errada!!!";
                break;
        }

    } while ($opcao != 0);