<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//echo $uri_parse;
//echo "<hr />";

include 'Controller/PessoaController.php';
include 'Controller/ProdutoController.php';
include 'Controller/Categoria_produtoController.php';
include 'Controller/FuncionarioController.php';


switch($uri_parse) 
{
    case '/pessoa':
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;

    case '/pessoa/save':
        PessoaController::save();
    break;

    ## ROTAS PARA PRODUTO
    case '/produto':
        ProdutoController::index();
    break;
    
    case '/produto/form':
        ProdutoController::form();
    break;

    case '/produto/save':
        ProdutoController::save();
    break;

    ## ROTAS PARA CATEGORIA DE PRODUTO
    
    case '/categoria/save':
        Categoria_produtoController::save();
    break;

    case '/categoria/form':
        Categoria_produtoController::form();
    break;
    
    case '/categorias':
        Categoria_produtoController::index();
    break;


    ## ROTAS PARA CATEGORIA DE PRODUTO

   case '/funcionario/save':
    FuncionarioController::save();
   break;

   case '/funcionario/form':
    FuncionarioController::form();
   break;

   case '/funcionarios':
    FuncionarioController::index();
   break;


   default:
   echo "erro 404";
break;

}