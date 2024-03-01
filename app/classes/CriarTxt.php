<?php 
namespace App\classes;

class CriarTxt { 
    protected $caminho_arquivo;
    public function __construct($caminho_arquivo) { 
        $this->caminho_arquivo = $caminho_arquivo; 
        $this->arquivo = fopen($caminho_arquivo, "w+");
    }
    
    // public function __destruct()
    // {
    //     fclose($this->arquivo); 
    //     echo "{$this->caminho_arquivo} Foi Fechado"; 
    // }
}