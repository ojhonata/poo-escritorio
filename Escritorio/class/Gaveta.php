<?php 

require_once("Item.php");

class Gaveta{
    private array $itens = [];

    public function adicionarItem(Item $item): void{
        $this->itens[] = $item;
        echo "Item adicionado com sucesso <br>";
    }

    public function removerItem(string $nome): bool{
        foreach ($this->itens as $indice => $item){
            if($item->getNome() == $nome){
                unset($this->itens[$indice]);
                echo "Item '{$nome}' removido com sucesso <br>";
                return true;
            }
        }
        echo "Item {$nome} não encontrado <br>";
        return false;
            
    }

    public function listarItens(): void{
        if(empty($this->itens)){
            echo "A gaveta está fazia <br>";
        }else{
            echo "Itens na gaveta: <br>";
            foreach($this->itens as $item){
                echo "- {$item->getNome()} <br>";
            }   
        }
    }

}
?>