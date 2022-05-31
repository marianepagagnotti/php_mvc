<?php

class Categoria_produtoController
{
    public static function index() 
    {
        include 'Model/Categoria_produtoModel.php';

        $model = new Categoria_produtoModel();
        $model->getAllRows();
       
       include 'View/modules/Categoria_produto/ListaDeCategorias.php';
    }

    public static function form()
    {
        include 'Model/Categoria_produtoModel.php';
        
        $model = new Categoria_produtoModel();
        
        if(isset($_GET['id']))
            $model = $model->getById((int) $_GET['id']);
        
        
        include 'View/modules/Categoria_produto/FormCategoriaProduto.php';
    }

    public static function save() {

        include 'Model/Categoria_produtoModel.php'; 

        $categoria_produto = new Categoria_produtoModel();
        $categoria_produto->nome = $_POST['nome'];


        $categoria_produto->save();  // chamando o método save da model.

        header("Location: /categorias"); // redirecionando o usuário para outra rota.
    }

}