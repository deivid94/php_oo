<?php

//modelo 

class Funcionario{ //camelCase
  
  //atributos
  public $nome = null;
  public $telefone = null;
  public $numFilhos = null;
  public $cargo = null;
  public $salario = null;

  

  //getters er setters //(OVERLOADING /)
  function __set($atributo, $valor){
    $this->$atributo =$valor;
  }
  
  //funccao setar nomes

  /*function setNome($nome){
    $this->nome =$nome;
  }

function setNumFilhos($numFilhos){
  $this ->numFilhos = $numFilhos;
}

function setTelefone ($telefone){
  $this-> telefone = $telefone;

}

//getters nos permite receber retornar o valor do atributo solicitado.
  function getNome(){
    return $this->nome;
  }

  function getNumFilhos(){
    return $this->numFilhos;
  }

  function getTelefone(){
    return $this->numFilhos;
  }



  
  //métodos
  // os metodos na pratica sao funcoes.
  function resumirCadFun(){ 
    //atraves da palavra reservada $this podemos acessar as variaveis do objeto Funcionario.
    //$this acessa variaveis do contexto do objeto
    return "$this->nome  possui $this->numFilhos filhos(s)"; 
  }


  function modificarNumFilhos($numFilhos){
    //$this-> numFilho acessa a a variavel do contexto do objeto e = $numFilhos recebe o parametro.
    $this->numFilhos = $numFilhos;
  } 

  }

  $y = new Funcionario(); // instancia o objeto funcionario na variavel
  $y->setNome('José');
  $y-> setNumFilhos(2);
  //echo $y-> resumirCadFun();
 echo $y-> getNome(). ' possui '. $y-> getNumFilhos(). ' filhos ';
 
 
  */
?>