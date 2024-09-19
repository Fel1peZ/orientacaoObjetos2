<?php

require_once("modelo/Time.php");
require_once("modelo/Jogador.php");

//1- Criar objeto time
$time = new Time();
$time->setNome("Grêmio");
$time->setCidade("Porto Alegre");
//print_r($time);

//2- Criar objeto jogador
$suarez = new Jogador();
$suarez->setNome("Luiz Suarez");
$suarez->setNumero(9);
$suarez->setTime($time);

$geromel = new Jogador();
$geromel->setNome("Pedro Geromel");
$geromel->setNumero(4);
$geromel->setTime($time);
//print_r($suarez);

//3- Imprimir o nome do time do jogador Suarez
/*echo $suarez->getTime()->getNome(). "\n";
$t = $suarez->getTime();//Objeto time
echo $t->getCidade(). "\n";*/

$jogadores= array();
array_push($jogadores,$suarez);
array_push($jogadores,$geromel);
$time->setJogadores($jogadores);
print_r($time->getJogadores());
