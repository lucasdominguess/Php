<?php 
namespace App\entity;

use App\classes\Produto;

class Monitor extends Produto{ 
    
    public function __construct($nome,$preco)
    {
        parent::__construct($nome,$preco);
        
    }
    
}