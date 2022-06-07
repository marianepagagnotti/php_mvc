<?php

class FuncionarioModel 
{

    public $id, $nome, $rg, $telefone, $data_nascimento, $email;

    public $rows;

    public function save()
    {
        include 'DAO/FuncionarioDAO.php';

        $dao = new FuncionarioDAO();

        
        if($this->id == null) 
        {
            
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }

    public function getAllRows()
    {
        include 'DAO/FuncionarioDAO.php';

        $dao = new FuncionarioDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        include 'DAO/FuncionarioDAO.php';

        $dao = new FuncionarioDAO();

        $obj = $dao-> selectById($id);

        if($obj)
        {

            return $obj;
        } else {
            return new FuncionarioModel();
        }
    
    }
    public function delete(int $id) {
        include 'DAO/FuncionarioDAO.php';
        
        $dao = new FuncionarioDAO();

        $dao->delete( (int) $id);
        header("Location: /funcionarios");
    }




}