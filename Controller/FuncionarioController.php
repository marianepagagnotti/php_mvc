<?php

class FuncionarioController
{
    public static function index() 
    {
        include 'Model/FuncionarioModel.php';

        $model = new FuncionarioModel();
        $model->getAllRows();
       
       include 'View/modules/Funcionario/ListaDeFuncionarios.php';
    }

    public static function form()
    {
        include 'Model/FuncionarioModel.php';
        
        $model = new FuncionarioModel();
        
        if(isset($_GET['id']))
            $model = $model->getById((int) $_GET['id']);
        
        
        include 'View/modules/Funcionario/FormFuncionario.php';
    }

    public static function save() {

        include 'Model/FuncionarioModel.php'; 

        $funcionario = new FuncionarioModel();
        $funcionario->id= $_POST['id'];
        $funcionario->nome = $_POST['nome'];
        $funcionario->rg = $_POST['rg'];
        $funcionario->telefone = $_POST['telefone'];
        $funcionario->data_nascimento = $_POST['data_nascimento'];
        $funcionario->email = $_POST['email'];


        $funcionario->save();  // chamando o método save da model.

        header("Location: /funcionarios"); // redirecionando o usuário para outra rota.
    }

    public static function delete() {
    include 'Model/FuncionarioModel.php';

    $model= new FuncionarioModel;
    $model-> delete( (int) $_GET['id']);

    }



}