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
        
        parent::render('Login/FormLogin', $model);
    }


    public static function form()
    {
        //include 'Model/PessoaModel.php';
        $model = new UsuarioModel;

        if(isset($_GET['id']))
            $model = $model->getById((int) $_GET['id']);
        //include 'View/modules/Pessoa/FormPessoa.php';
        
        parent::render('Usuario/FormUsuario', $model);
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

    public static function trocar(){        
        $modelSession = json_decode($_SESSION["usuario_logado"]);
        include 'View/modules/Usuario/TrocarSenha.php';

        
    }

    public static function trocarAuth(){
        $usuario = new UsuarioModel();
        $usuario->id =$_POST['id'];
        $usuario->nome = $_POST['nome'];
        $usuario->senha = $_POST['senha'];
        $usuario->email = $_POST['email'];

        
        if($_POST['senha'] == ($_POST['senha-confirmar'])){
            $usuario->save();
            echo 'Senha alterada!';
        }else
            echo 'Senhas não correspondem!';
        
            
    }

}