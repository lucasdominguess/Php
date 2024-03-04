<?php 
namespace App\classes;


class CriarTxt { 
    protected $arquivo;
    // protected $caminho_arquivo;
    public function __construct(protected string $caminho_arquivo) { 
        $this->caminho_arquivo = $caminho_arquivo; 
        $this->arquivo = fopen($caminho_arquivo, "w+");
    }
    public function escrever($string){ 
        fwrite($this->arquivo,$string . PHP_EOL);
    }

    public function ler(){ 
        fseek($this->arquivo,0);
        return fread($this->arquivo, filesize($this->caminho_arquivo));
    }
    // public function __destruct()
    // {
    //     fclose($this->arquivo); 
    //     echo "{$this->caminho_arquivo} Foi Fechado"; 
    //     unlink($this->caminho_arquivo);
    // }

}