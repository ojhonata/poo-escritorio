<?php 

require_once("Armario.php");

class Escritorio{
    private array $armarios = [];

    public function adicionarArmario(Armario $armario): void{
        $this->armarios[] = $armario;
        echo " Armário adicionado com sucesso <br>";
    }

    public function removerArmario($indice): bool{
        if($indice >= 0){
            unset($this->armarios[$indice]);
            echo "Armário {$indice} removido com sucesso <br>";
            return true;
        }else{
            echo "Índice {$indice} não encontrado";
            return false;
        }
    }

    public function listarArmarios(): void{
        if(empty($this->armarios)){
            echo "Não há armários para ser listado <br>";
        }else{
            echo "Armários no escritório: <br>";
            foreach($this->armarios as $indice => $armario){
                echo "Armários: {$indice} <br>";
                $armario->listarGavetas;

            }
        }
    }

    public function auditoria(): void{
       if(empty($this->armarios)){
        echo "Não há armarios no escritório <br>";
       }else{
        echo "<strong> Armários: <br> </strong>";
        foreach($this->armarios as $indiceArmario => $armario){
            echo "Armário {$indiceArmario}: <br>";
            $armario->listarGavetas();
            echo "<br>";
        }
       }
    }
}

?>