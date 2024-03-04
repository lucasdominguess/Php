<?php
require_once __DIR__ ."/../vendor/autoload.php";

use App\classes\CriarTxt;
use App\entity\Aluno;

use App\classes\Produto;



// $aluno = new Aluno("lucas", '123.456.789-88');
// $aluno =new Aluno('rafael','123.587558-88');

$monitor = new Produto('monitor',750);
$monitor = new Produto('teclado',210);
$monitor = new Produto('camera',120);

// $arquivo = new CriarTxt('c.txt');
// $arquivo->escrever('Ola mundo');
// $arquivo->escrever('frase 3');
// print $arquivo->ler();