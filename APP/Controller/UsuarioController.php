<?php

namespace APP\Controller;

use APP\Model\UsuarioModel;


class UsuarioController extends Controller
{
    public static function index()
    {
        //include 'Model/PessoaModel.php';

        $model = new UsuarioModel();
        $model->getAllRows();

        //include 'View/modules/Pessoa/ListaPessoas.php';
        
        parent :: render('Login/FormLogin', $model);
    }


    public static function form()
    {
        //include 'Model/PessoaModel.php';
        $model = new UsuarioModel;

        if(isset($_GET['id']))
            $model = $model->getById((int) $_GET['id']);
        //include 'View/modules/Pessoa/FormPessoa.php';
        
        parent::render('Pessoa/FormPessoa', $model);
    }


    public static function save()
    {

        include 'Model/UsuarioModel.php';

        $usuario = new UsuarioModel();
        $usuario-> id =$_POST['id'];
        $usuario->nome = $_POST['nome'];
        $usuario->senha = $_POST['senha'];
        $usuario->email = $_POST['email'];
        
        $usuario->save();
        header("Location: /usuario");
    }

}