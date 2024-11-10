<?php 

require_once("Item.php");

class Objeto extends Item{
    private float $pesoObjeto;
    
    public function __construct(string $nome, string $descricao, float $pesoObjeto)
    {
        parent::__construct($nome, $descricao);
        $this->pesoObjeto = $pesoObjeto;
    }
    
    public function getPesoObjeto(): float{
        return $this->pesoObjeto;
    }
    public function setPesoObjeto(float $pesoObjeto): void{
        $this->pesoObjeto = $pesoObjeto;
    }
}

?>