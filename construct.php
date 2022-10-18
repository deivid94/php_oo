<?php 
  class Pessoa {// criamos  o objeto pessoa.
    public $nome = null;


    function __construct($nome){ // construir metodo usando construct.
      echo 'Objeto iniciado';
      $this->nome =$nome;
    }
    function __destruct()
    {
      echo 'Objeto removido';
    }

    function __get($atributo){
      return $this->$atributo;
    }
     function correr(){
      return $this->__get ('nome') .' está correndo';
     }
    
      
    }
      
      $pessoa = new pessoa('Deivid');
     echo '<br />Nome: ' .$pessoa->__get('nome');
     echo '<br />' .$pessoa->correr();
     echo '<br />';
     unset($pessoa); // removendo objeto da memoria do sistema.