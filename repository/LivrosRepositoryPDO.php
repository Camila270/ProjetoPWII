<?php

require "Conexao.php";

class LivrosRepositoryPDO{

    private $conexao;

    public function __construct(){
            $this->conexao = Conexao::criar() ;
    }


    public function listarTodos():array{
        $livrosLista = array();

        $sql = "SELECT * FROM livros";
        $livros = $this->conexao->query($sql);
        while ($livro = $livros->fetchObject()){
            array_push($livrosLista, $livro);

        }
 
            return $livrosLista;
    }

    public function salvar(Livro $livro):bool{
        $sql = "INSERT INTO livros (titulo,capa, avaliacao, nota) 
        VALUES (:titulo,:capa, :avaliacao, :nota )";
        
        $stmt=$this->conexao->prepare($sql);
        $stmt->bindValue(':titulo', $livro->titulo, SQLITE3_TEXT);
        $stmt->bindValue(':capa', $livro->capa, SQLITE3_TEXT);
        $stmt->bindValue(':avaliacao', $livro->avaliacao, SQLITE3_TEXT);
        $stmt->bindValue(':nota', $livro->nota, SQLITE3_FLOAT);
        
        return $stmt->execute();

    }

}