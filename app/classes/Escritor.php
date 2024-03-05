<?php #Associação 
namespace App\classes;

use App\classes\Caneta;

class Escritor { 
    private $caneta;
    public function __construct(private string $nome) {
    $this->nome =$nome;
    }

    public function getNome() {
        return $this->nome;
    }
    public function setCaneta(Caneta $caneta) {
        $this->caneta = $caneta;
    }    
    public function getCaneta(){ 
        return $this->caneta;
    }
    
    
    
}