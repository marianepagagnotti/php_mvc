<?php
// cria a classe da entidade produto com o nome da camada do projeto
class ProdutoController
{
  public static function index() 
  {
      include 'Model/ProdutoModel.php';

      $model = new ProdutoModel();
      $model->getAllRows();
     
     include 'View/modules/Produto/ProdutoListar.php';
  }
  
  
  public static function form()
    {
        
      include 'Model/ProdutoModel.php';
        
      $model = new ProdutoModel();
      
      if(isset($_GET['id']))
          $model = $model->getById((int) $_GET['id']);
      
      
      include 'View/modules/Produto/ProdutoCadastro.php'; 
    }
    
    public static function save()
    {
      include 'Model/ProdutoModel.php' ;
      
      $produto = new ProdutoModel();

      $produto->nome = $_POST['nome'];

      $preco = $_POST['preco'];
      $preco= str_replace(',','.',$preco);
      $preco=floatval($preco);

      $produto->preco = $preco;
      
      $produto->descricao = $_POST['descricao'];
     

      $produto->save();  // chamando o método save da model.

      header("Location: /produto"); // redirecionando o usuário para outra rota.
    }
    
}