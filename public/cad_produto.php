<?php
require_once __DIR__ ."/../vendor/autoload.php";
use App\classes\Produto;

class Eletronicos extends Produto { 
    public function __construct(public string $nome ,public int $valor) {
        parent::__construct($nome,$valor);
    }
}

$celular1 = new Eletronicos('iphone',3000);
$celular1->getNome();

$celular1->setNome("galaxy_s23");
$celular1->getNome();