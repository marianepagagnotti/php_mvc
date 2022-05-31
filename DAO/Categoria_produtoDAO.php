<?php

class Categoria_produtoDAO
{

    private $conexao;

    function __construct() 
    {
       
        $dsn = "mysql:host=localhost:3307;dbname=db_sistema";
        $user = "root";
        $pass = "etecjau";
        
       
        $this->conexao = new PDO($dsn, $user, $pass);
    }
    
    function insert(Categoria_produtoModel $model) 
    {
          
        $sql = "INSERT INTO categoria_produto 
                (nome)
                VALUES (?)";

        $stmt = $this->conexao->prepare($sql);
        
        $stmt->bindValue(1, $model->nome);
        
        $stmt->execute();      
    }

    public function update(Categoria_produtoModel $model)
    {
        $sql = "UPDATE categoria_produto SET nome= ?
                WHERE id= ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->id);
        $stmt->execute();
    
    }
    
    
    public function select()
    {
        $sql = "SELECT * FROM categoria_produto ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function selectById(int $id)
    {
        include_once 'Model/Categoria_produtoModel.php';
        
        $sql = "SELECT * FROM categoria_produto WHERE id= ? ";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    
    
        return $stmt->fetchObject("Categoria_produtoModel");
    
    }
    
    
    public function delete(int $id)
    {
        $sql = "DELETE FROM categoria_produto WHERE id =?";

        $stmt = $this->conexao->prepare($sql);
        $stmt-> bindValue(1, $id);
        $stmt->execute(); 

    }

}