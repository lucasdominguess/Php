<?php 
namespace App\classes;


class Produto { 

    public function __construct(public string $nome,public int $valor)
    {
        $this->exibirProduto($nome,$valor);
    }

    public function exibirProduto($nome,$valor) { 
        $this->nome = $nome;
        $this->valor= $valor;

        echo "Nome: ".$nome ."\nValor: ".$valor ."\n-----------\n";
    }
    
}

// fwrite()