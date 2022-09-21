<?php

namespace APP\DAO;



//use APP\DAO\DAO;
use APP\Model\FuncionarioModel;
use \PDO;

class FuncionarioDAO extends DAO
{
    public function __construct()
    {
        
        parent::__construct();       
    }


  
    function insert(FuncionarioModel $model) 
    {
          
        $sql = "INSERT INTO funcionario 
                (nome, rg, telefone, data_nasc, email)
                VALUES (?,?,?,?,?)";

        $stmt = $this->conexao->prepare($sql);
       
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->rg);
        $stmt->bindValue(3, $model->telefone);
        $stmt->bindValue(4, $model->data_nasc);
        $stmt->bindValue(5, $model->email);
       
       
       
        $stmt->execute();      
    }

    public function update(FuncionarioModel $model)
    {
        $sql = "UPDATE funcionario SET nome= ?, rg= ?, telefone= ?, data_nasc= ?, email= ?
                WHERE id= ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->rg);
        $stmt->bindValue(3, $model->telefone);
        $stmt->bindValue(4, $model->data_nasc);
        $stmt->bindValue(5, $model->email);
        $stmt->bindValue(6, $model->id);
        $stmt->execute();
    
    }
    
    
    
    public function select()
    {
        $sql = "SELECT * FROM funcionario ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        //include_once 'Model/FuncionarioModel.php';
        
        $sql = "SELECT * FROM funcionario WHERE id= ? ";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    
    
        return $stmt->fetchObject("APP\Model\FuncionarioModel");
    
    }
    
    
    public function delete(int $id)
    {
        $sql = "DELETE FROM funcionario WHERE id =?";

        $stmt = $this->conexao->prepare($sql);
        $stmt-> bindValue(1, $id);
        $stmt->execute(); 

    }

}