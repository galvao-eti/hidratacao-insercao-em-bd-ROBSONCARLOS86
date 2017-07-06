<?php

require '../autoload.php';

$usuario = new Usuario();
$produto = new Produto();


$usuario->populate(array(
    "login" => "robsoncarlos",
    "senha" => 102030
));

$produto->populate(array(
    "descricao" => "laranja",
    "valor" => 3.00
));

$config = file_get_contents("../config.json");
$config = json_decode($config);
$conn = \Trabalho\BancoDeDados::connectDb($config->usuario, $config->senha, $config->host, $config->db);

$usuario->saveBd($conn);
$produto->saveBd($conn);

die("<pre>" . __FILE__ . " - " . __LINE__ . "\n" . print_r("Salvou", true) . "</pre>");




