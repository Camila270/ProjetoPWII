<?php

session_start();
require "./repository/LivrosRepositoryPDO.php";
require"./model/Livro.php";

$LivrosRepository = new LivrosRepositoryPDO();
$livro = new Livro();

$livro->titulo       = $_POST["titulo"];
$livro->avaliacao    = $_POST["avaliacao"];
$livro->nota         = $_POST["nota"];
$livro->capa         = $_POST["capa"];


if ($LivrosRepository->salvar($livro)) 
$_SESSION["msg"] = "Filmes cadastrado com sucesso";
else 
$_SESSION["msg"] = "Erro ao cadastrar filme";

header("Location:galeria.php");
?>