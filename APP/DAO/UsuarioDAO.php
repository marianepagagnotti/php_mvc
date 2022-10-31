<?php

namespace APP\DAO;



//use APP\DAO\DAO;
use APP\Model\UsuarioModel;
use \PDO;

class UsuarioDAO extends DAO
{
    public function __construct()
    {
        
        parent::__construct();       
    }
 


    function insert(UsuarioModel $model) 
    {
        
        $sql = "INSERT INTO usuario 
                (nome, senha, email) 
                VALUES (?, ?, ?)";
        
       
        $stmt = $this->conexao->prepare($sql);

        
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->senha);
        $stmt->bindValue(3, $model->email);
       
      
        $stmt->execute();      
    }

    
    
    
    public function update(UsuarioModel $model)
    {
        $sql = "UPDATE usuario SET nome= ?, senha= ?, email= ?
                WHERE id= ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->senha);
        $stmt->bindValue(3, $model->email);
        $stmt->bindValue(4, $model->id);
        $stmt->execute();
    
    }
    
    
    public function select()
    {
        $sql = "SELECT * FROM usuario ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        //include_once 'Model/PessoaModel.php';
        
        $sql = "SELECT * FROM usuario WHERE id= ? ";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    
    
        return $stmt->fetchObject("APP\Model\UsuarioModel");
    
    }
    
    
   








}