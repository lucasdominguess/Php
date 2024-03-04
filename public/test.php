<?php

use App\classes\Caneta;
use App\classes\Escritor;

require_once __DIR__ ."/../vendor/autoload.php";

$escritor = new Escritor('lucas');
$caneta =new Caneta('bic');
$escritor->setCaneta($caneta);
$escritor->getCaneta()->escrever();
