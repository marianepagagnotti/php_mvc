<?php

namespace APP\Controller;

use APP\Model\FuncionarioModel;

class FuncionarioController extends Controller
{
    public static function index()
    {
        //include 'Model/FuncionarioModel.php';

        $model = new FuncionarioModel();
        $model->getAllRows();

        //include 'View/modules/Funcionario/ListaFuncionario.php';

        parent :: render('Funcionario/ListaFuncionario', $model);
    }


    public static function form()
    {
        //include 'Model/FuncionarioModel.php';
        $model = new FuncionarioModel;
        
        if(isset($_GET['id']))
            $model = $model->getById((int) $_GET['id']);

        //include 'View/modules/Funcionario/FormFuncionario.php';
        parent::render('Funcionario/FormFuncionario', $model);
    }


    public static function save()
    {

        //include 'Model/FuncionarioModel.php';


        $funcionario = new FuncionarioModel();
        $funcionario->nome = $_POST['nome'];
        $funcionario->rg = $_POST['rg'];
        $funcionario->data_nasc = $_POST['data_nasc'];
        $funcionario->email = $_POST['email'];
        $funcionario->telefone = $_POST['telefone'];
        $funcionario->endereco = $_POST['endereco'];

        $funcionario->save();
        header("Location: /funcionario");
    }

    public static function delete()
    {
        //include 'Model/FuncionarioModel.php';

        $model = new FuncionarioModel();
        $model-> delete( (int) $_GET['id']);
    }
    
    
}
