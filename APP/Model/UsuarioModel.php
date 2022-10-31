<?php

namespace APP\Model;

use APP\DAO\UsuarioDAO;

class UsuarioModel extends Model
{

    public $id, $nome, $senha, $email;
    

    public $rows;

    public function save()
    {
        //include 'DAO/PessoaDAO.php';

        $dao = new UsuarioDAO();

        if ($this->id == null) {
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }

    public function getAllRows()
    {
        //include 'DAO/PessoaDAO.php';

        $dao = new UsuarioDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        //include "DAO/PessoaDAO.php";

        $dao = new UsuarioDAO();

        $obj = $dao-> SelectById($id);

        if($obj)
        {

            return $obj;
        }else {
            return new UsuarioModel();
        }
    }

  
}