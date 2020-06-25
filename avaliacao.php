<?php
$bd = new SQLite3("livros.db");

$titulo       = $bd->escapeString ($_POST["titulo"]);
$avaliacao    = $bd->escapeString($_POST["avaliacao"]);
$nota         = $bd->escapeString($_POST["nota"]);
$capa         = $bd->escapeString($_POST["capa"]);


$sql = "INSERT INTO livros (titulo,capa, avaliacao, nota) 
VALUES (:titulo,:capa, :avaliacao, :nota )";

$stmt=$bd->prepare($sql);
$stmt->bindValue(':titulo', $titulo, SQLITE3_TEXT);
$stmt->bindValue(':capa', $capa, SQLITE3_TEXT);
$stmt->bindValue(':avaliacao', $avaliacao, SQLITE3_TEXT);
$stmt->bindValue(':nota', $nota, SQLITE3_FLOAT);

if ($stmt->execute()) 
echo "\n Deu certo \n";
else "\n Deu ruim \n". $bd->lastErrorMsg();

header("Location:galeria.php?msg=Novo+livro+na+wichlist")
?>