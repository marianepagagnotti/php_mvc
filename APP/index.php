<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

use APP\Controller\FuncionarioController;
use APP\Controller\PessoaController;
use APP\Controller\ProdutoController;

include 'autoload.php';
include 'config.php';




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
    
    case '/pessoa/delete':
        PessoaController::delete();
    break;

    case '/produto':
        ProdutoController::index();
    break;

    case '/produto/form':
        ProdutoController::form();
    break;

    case '/produto/save':
        ProdutoController::save();
    break;

    case '/produto/delete':
        ProdutoController::delete();
    break;

    case '/funcionario':
        FuncionarioController::index();
    break;
    
    case '/funcionario/form':
        FuncionarioController::form();
    break;

    case '/funcionario/save':
        FuncionarioController::save();
 
    default:
        echo "erro";
    break;
}