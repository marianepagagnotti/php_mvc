<?php

namespace APP\Controller;

abstract class Controller 
{
    
    protected static function render($view, $model = null)
    {
        //$arquivo_view = "View/modules/$view.php";
        $arquivo_view = VIEWS . $view . ".php";

        if(file_exists($arquivo_view))
            include $arquivo_view;
        else
            exit('Arquivo da View não encontrado. Arquivo: ' . $view);
    } 
    
    protected static function isAuthenticated()
    {
        if(!isset($_SESSION['usuario_logado']))
            header("location: /login");
    } 
}