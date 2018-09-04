<?php

require_once 'Pessoa.php';
require_once 'Pessoa2.php';
require_once 'vendor/autoload.php';



$pessoa = new \Projeto\Pessoa('Eduardo' , 35, '1.85');

$pessoa2 = new  Pessoa('Eduardo' , 35, '1.85');

$pessoa->andar();
$pessoa2->andar();

echo $pessoa->identificacao();








?>