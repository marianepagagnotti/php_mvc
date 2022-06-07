<?php

class Categoria_produtoModel 
{

    public $id, $nome;

    public $rows;

public function save()
    {
        include 'DAO/Categoria_produtoDAO.php';

        $dao = new Categoria_produtoDAO();

        
        if($this->id == null) 
        {
            
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }

    public function getAllRows()
    {
        include 'DAO/Categoria_produtoDAO.php';

        $dao = new Categoria_produtoDAO();

        $this->rows = $dao->select();
    }


    public function getById(int $id)
    {
        include 'DAO/Categoria_produtoDAO.php';

        $dao = new Categoria_produtoDAO();

        $obj = $dao-> selectById($id);

        if($obj)
        {

            return $obj;
        } else {
            return new Categoria_produtoModel();
        }
    
    }

    public function delete(int $id) {
        include 'DAO/Categoria_produtoDAO.php';
        
        $dao = new Categoria_produtoDAO();

        $dao->delete( (int) $id);
        header("Location: /categorias");
    }


}