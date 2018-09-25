<?php

require_once 'vendor/autoload.php';


$qrcode = $_GET['qrcode'];
$dtnasc = $_GET['dtnasc'];
$email  = $_GET['email'];

use Respect\Validation\Validator as v;
use Endroid\QrCode\QrCode;

$emailvalido = v::email()->validate($email); 

$datavalida = v::date('d/m/Y')->validate($dtnasc);


($emailvalido ? "Email Válido<br>" : "Email Inválido<br>" );

($datavalida ? "Data Válida<br>" : "Data Inválida<br>" );


if ($emailvalido && $datavalida == true) {
	
$qrCode = new QrCode($qrcode);

header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();

} else {
	echo "Formulário com Erro";
}




?>