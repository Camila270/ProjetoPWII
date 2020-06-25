<?php

$titulo = $_POST["titulo"];
$avaliacao = $_POST["avaliacao"];
$nota = $_POST["nota"];
$capa = $_POST["capa"];

$bd = new SQLite3("livros.db");

$sql = "INSERT INTO livros (titulo,capa, avaliacao, nota) VALUES (
    '$titulo',
    '$capa',
    '$avaliacao',
    '$nota'
)";

if ($bd->exec($sql)) 
echo "\n Deu certo \n";
else echo "Deu ruim";

?>