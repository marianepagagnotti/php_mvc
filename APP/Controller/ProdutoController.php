<?php

namespace APP\Controller;

use APP\Model\ProdutoModel;

class ProdutoController extends Controller
{
    public static function index()
    {
        //include 'Model/ProdutoModel.php';

        $model = new ProdutoModel();
        $model->getAllRows();

        
        //include 'View/modules/Produto/ProdutoListar.php';
        
        parent :: render('Produto/ProdutoListar', $model);
    }


    public static function form()
    {
        //include 'Model/ProdutoModel.php';
        $model = new ProdutoModel();

        if(isset($_GET['id']))
            $model = $model->getById((int) $_GET['id']);

        //include 'View/modules/Produto/ProdutoCadastro.php';

        parent :: render('Produto/ProdutoCadastro', $model);
    }


    public static function save()
    {

        include 'Model/ProdutoModel.php';

        $produto = new ProdutoModel();
        $produto->id = $_POST['id'];
        $produto->nome = $_POST['nome'];
        $produto->preco = $_POST['preco'];
        $produto->descricao = $_POST['descricao'];


        $produto->save();
        header("Location: /produto");
    }

    public static function delete()
    {
        include 'Model/ProdutoModel.php';

        $model = new ProdutoModel();
        $model-> delete( (int) $_GET['id']);

        header("Location: /produto");
    }
}
