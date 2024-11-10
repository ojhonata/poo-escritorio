<?php 

require_once("./class/Escritorio.php");
require_once("./class/Armario.php");
require_once("./class/Gaveta.php");
require_once("./class/Item.php");
require_once("./class/Documento.php");
require_once("./class/Objeto.php");
require_once("./class/Pasta.php");

$escritorio = new Escritorio();

$armario1 = new Armario();
$armario2 = new Armario();

$escritorio->adicionarArmario($armario1);
$escritorio->adicionarArmario($armario2);

$gaveta1 = new Gaveta();
$gaveta2 = new Gaveta();
$gaveta3 = new Gaveta();

echo "<br>";

$armario1->adicionarGaveta($gaveta1);
$armario1->adicionarGaveta($gaveta2);
$armario2->adicionarGaveta($gaveta3);

echo "<br>";

$documento = new Documento("Documento A", "Contrato de funcionário", "2024-01-28");
$objeto = new Objeto("Calculadora", "Calculadora Científica", 0.5);
$pasta = new Pasta("Pasta X", "Documentos fiscais", "Finanças");


$gaveta1->adicionarItem($documento);
$gaveta1->adicionarItem($objeto);
$gaveta1->adicionarItem($pasta);

$gaveta2->adicionarItem($pasta);
$gaveta2->adicionarItem($objeto);

$gaveta3->adicionarItem($pasta);

echo "<br>";

$escritorio->removerArmario(1);
$gaveta1->removerItem("Documento A");
$armario1->removerGaveta(2);


echo "<h2>Auditoria do Escritório:</h2>";
$escritorio->auditoria();
?>