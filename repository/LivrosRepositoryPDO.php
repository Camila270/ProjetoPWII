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
        $stmt->bindValue(':titulo', $livro->titulo, PDO::PARAM_STR);
        $stmt->bindValue(':capa', $livro->capa, PDO::PARAM_STR);
        $stmt->bindValue(':avaliacao', $livro->avaliacao, PDO::PARAM_STR);
        $stmt->bindValue(':nota', $livro->nota, PDO::PARAM_STR);
        
        return $stmt->execute();

    }

}