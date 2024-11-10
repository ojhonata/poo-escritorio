<?php 

require_once ("Gaveta.php");

class Armario{
    private array $gavetas = [];

    public function adicionarGaveta(Gaveta $gaveta): void{
        $this->gavetas[] = $gaveta;
        echo "Gaveta adicionado com sucesso <br>";
    }

    public function removerGaveta(int $indice): bool{
        if($indice >= 0){
            unset($this->gavetas[$indice]);
            echo "Gaveta no índice {$indice} removido com sucesso <br>";
            return true;
        }else{
            echo "Índice {$indice} não encontrado <br>";
            return false;
        }
    }

    public function listarGavetas(): void{
        if(empty($this->gavetas)){
            echo "Não há gavetas no armário <br>";
        }else{
            echo "Gavetas no armário: <br>";
            foreach($this->gavetas as $indice => $gaveta){
                echo "Gaveta {$indice} : <br>";
                $gaveta->listarItens();
            }
        }
    }
}

?>