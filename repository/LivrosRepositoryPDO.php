<?php

require "Conexao.php";

class LivrosRepositoryPDO{

    public function listarTodos():array{
        $bd = Conexao::criar();
        $livrosLista = array();

        $sql = "SELECT * FROM livros";
        $livros = $bd->query($sql);
        while ($livro = $livros->fetchArray()){
            array_push($livrosLista, $livro);

        }
 
            return $livrosLista;
    }

    public function salavar(Livro $livro):bool{
            return true;
    }

}