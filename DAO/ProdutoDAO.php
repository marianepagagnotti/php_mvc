<?php

class ProdutoDAO
{
  private $conexao ; 

  function __construct() 
  {
      $dsn = "mysql:host=localhost:3307;dbname=db_sistema";
      $user = "root";
      $pass = "etecjau";
      
      
      $this->conexao = new PDO($dsn, $user, $pass);
  }

  function insert(ProdutoModel $model) 
  {
      // Trecho de código SQL com marcadores ? para substituição posterior, no prepare   
      $sql = "INSERT INTO produto 
              (nome, preco, descricao) 
              VALUES (?, ?, ?)";
      
      // Declaração da variável stmt que conterá a montagem da consulta. Observe que
      // estamos acessando o método prepare dentro da propriedade que guarda a conexão
      // com o MySQL, via operador seta "->". Isso significa que o prepare "está dentro"
      // da propriedade $conexao e recebe nossa string sql com os devidor marcadores.
      $stmt = $this->conexao->prepare($sql);

      // Nesta etapa os bindValue são responsáveis por receber um valor e trocar em uma 
      // determinada posição, ou seja, o valor que está em 3, será trocado pelo terceiro ?
      // No que o bindValue está recebendo o model que veio via parâmetro e acessamos
      // via seta qual dado do model queremos pegar para a posição em questão.
      $stmt->bindValue(1, $model->nome);
      $stmt->bindValue(2, $model->preco);
      $stmt->bindValue(3, $model->descricao);
     
      
      // Ao fim, onde todo SQL está montando, executamos a consulta.
      $stmt->execute();      
  }
      
  public function update(ProdutoModel $model)
    {
        $sql = "UPDATE produto SET nome= ?, preco= ?, descricao= ?
                WHERE id= ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->preco);
        $stmt->bindValue(3, $model->descricao);
        $stmt->bindValue(4, $model->id);
        $stmt->execute();
    
    }
  
  
  public function select()
      {
          $sql = "SELECT * FROM produto ";
  
          $stmt = $this->conexao->prepare($sql);
          $stmt->execute();
  
          return $stmt->fetchAll();
      }
  
      public function selectById(int $id)
      {
          include_once 'Model/ProdutoModel.php';
          
          $sql = "SELECT * FROM produto WHERE id= ? ";
          $stmt = $this->conexao->prepare($sql);
          $stmt->bindValue(1, $id);
          $stmt->execute();
      
      
          return $stmt->fetchObject("ProdutoModel");
      
      }
      
      
      public function delete(int $id)
      {
          $sql = "DELETE FROM produto WHERE id =?";
  
          $stmt = $this->conexao->prepare($sql);
          $stmt-> bindValue(1, $id);
          $stmt->execute(); 
  
      }
  
  
    }













  


