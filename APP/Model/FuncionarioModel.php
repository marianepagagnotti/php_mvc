<?php

namespace APP\Model;

use APP\DAO\FuncionarioDAO;

class FuncionarioModel extends Model
{

    public $id, $nome, $rg;
    public $data_nasc, $email;
    public $telefone, $endereco;

    public $rows;

    public function save()
    {
        //include 'DAO/FuncionarioDAO.php';

        $dao = new FuncionarioDAO();

        if ($this->id == null) {
            $dao->insert($this);
        } else {
        }
    }

    public function getAllRows()
    {
        //include 'DAO/FuncionarioDAO.php';

        $dao = new FuncionarioDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
       //include "DAO/FuncionarioDAO.php";

        $dao = new FuncionarioDAO();

        $obj = $dao-> SelectById($id);

        if($obj)
        {

            return $obj;
        }else {
            return new FuncionarioModel();
        }
    }

    public function delete(int $id) {
        //include 'DAO/FuncionarioDAO.php';
        
        $dao = new FuncionarioDAO();

        $dao->delete( (int) $id);
        header("Location: /funcionario");
    }
}
