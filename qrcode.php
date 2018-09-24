<?php

require_once 'vendor/autoload.php';


$qrcode= $_GET['qrcode'];



use Endroid\QrCode\QrCode;

$qrCode = new QrCode($qrcode);

header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();



?>