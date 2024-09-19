<?php

require_once("modelo/Cidade.php");
require_once("modelo/Estado.php");

$santaCatarina = new Estado;
$santaCatarina->setNome("Santa Catarina");
$santaCatarina->setSigla("SC");

$parana = new Estado;
$parana ->setNome("Paraná");
$parana ->setSigla("PR");

$florianopolis = new Cidade();
$florianopolis->setNome("Florianópolis");
$florianopolis->setQtdHabitantes(537213);
$florianopolis->setAltitude(100);
$florianopolis->setEstado($santaCatarina);

$blumenau = new Cidade();
$blumenau->setNome("Blumenau");
$blumenau->setQtdHabitantes(361261);
$blumenau->setAltitude(100);
$blumenau->setEstado($santaCatarina);


$foz = new Cidade();
$foz->setNome("Foz do Iguaçu");
$foz->setQtdHabitantes(285000);
$foz->setAltitude(100);
$foz->setEstado($parana);

$cascavel = new Cidade();
$cascavel->setNome("Cascavel");
$cascavel->setQtdHabitantes(364104);
$cascavel->setAltitude(100);
$cascavel->setEstado($parana);

$cidades = array();
array_push($cidades,$florianopolis);
array_push($cidades,$blumenau);
array_push($cidades,$foz);
array_push($cidades,$cascavel);

foreach($cidades as $dado){
    echo $dado;
}