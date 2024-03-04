<?php 
declare(strict_types=1);
namespace App\classes;

class Produto { 
    private $produtos = [];
    public function __construct(public string $nome,public int $valor)
    {
        // $this->exibirProduto($nome,$valor);
    }
    public function getNome():void
    {
        echo $this->nome;
    }
    public function setNome($nome):void
    {
        $this->nome=$nome;
    }
    public function getValor():void
    {
        echo $this->valor;
    }
    public function setValor($valor):void
    {
        $this->valor=$valor;
    }

    public function exibirProduto($nome,$valor) { 
        $this->nome = $nome;
        $this->valor= $valor;

        echo "Nome: ".$nome ."\nValor: ".$valor ."\n-----------\n";
    }
    public function insere(Produto $produto):void{ 
        $this->produtos[]=$produto;

    }
    public function total():float { 
        $total = 0 ; 
        foreach ($this->produtos as $produto ) {
            $total += $produto->getPreco();
        }
        return $total;
    }
    
}

// fwrite()