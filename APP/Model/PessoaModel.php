<?php

namespace APP\Model;

use APP\DAO\PessoaDAO;

class PessoaModel extends Model
{

    public $id, $nome, $rg, $cpf;
    public $data_nascimento, $email;
    public $telefone, $endereco;

    public $rows;

    public function save()
    {
        //include 'DAO/PessoaDAO.php';

        $dao = new PessoaDAO();

        if ($this->id == null) {
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }

    public function getAllRows()
    {
        //include 'DAO/PessoaDAO.php';

        $dao = new PessoaDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        //include "DAO/PessoaDAO.php";

        $dao = new PessoaDAO();

        $obj = $dao-> SelectById($id);

        if($obj)
        {

            return $obj;
        }else {
            return new PessoaModel();
        }
    }

    public function delete(int $id) {
        //include 'DAO/PessoaDAO.php';
        
        $dao = new PessoaDAO();

        $dao->delete( (int) $id);
        header("Location: /pessoa");
    }
}
