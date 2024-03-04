<?php 
namespace App\classes;

class Caneta {

    public function __construct(private string $nome){
        $this->nome = $nome; 
}
public function getNome(): string{
    return $this->nome;
}
public function escrever(){
    echo "caneta {$this->nome} esta escrevendo.... \n";
}
}