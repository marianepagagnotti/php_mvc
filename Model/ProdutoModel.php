<?php

class ProdutoModel
{
    public $id, $nome, $preco, $descricao;
    public $rows;

    public function save()
    {
        include 'DAO/ProdutoDAO.php';
    
        $dao = new ProdutoDAO ();
    
        if($this->id == null) 
        {
            
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    
    }
        public function getAllRows()
        {
            include 'DAO/ProdutoDAO.php';
    
            $dao = new ProdutoDAO();
    
            $this->rows = $dao->select();
        }
    
        public function getById(int $id)
        {
            include 'DAO/ProdutoDAO.php';
    
            $dao = new ProdutoDAO();
    
            $obj = $dao-> selectById($id);
    
            if($obj)
            {
    
                return $obj;
            } else {
                return new ProdutoModel();
            }
        
        }
    
        public function delete(int $id) {
            include 'DAO/ProdutoDAO.php';
            
            $dao = new ProdutoDAO();
    
            $dao->delete( (int) $id);
            header("Location: /produto");
        }
    
    
    
    }
