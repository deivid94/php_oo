<?php

//modelo 

class Funcionario{ //camelCase
  
  //atributos
  public $nome = null;
  public $telefone = null;
  public $numFilhos = null;
  public $cargo = null;
  public $salario = null;


  

  //GETTERS AND SETTERS (OVERLOADING)

  function __set ($atributo, $valor){
    $this-> 
    
    $atributo = $valor;
  }

    //GETTERS

    function __get ($atributo){
      return $this->$atributo;

    }

  /*
  //funccao setar nomes

  function setNome($nome){
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


*/
  
  //métodos
  // os metodos na pratica sao funcoes.
  function resumirCadFun(){ 
    //atraves da palavra reservada $this podemos acessar as variaveis do objeto Funcionario.
    //$this acessa variaveis do contexto do objeto
    return $this->__get('nome'). " possui " . $this->__get('numFilhos') . " filhos (s)";
  }


  function modificarNumFilhos($numFilhos){
    //$this-> numFilho acessa a a variavel do contexto do objeto e = $numFilhos recebe o parametro.
    $this->numFilhos = $numFilhos;
  } 

  }

  $y = new Funcionario(); 
  $y->__set ('nome','José');
  $y-> __set('numFilhos',4);
  echo $y->resumirCadFun();


 /*echo $y-> __get('nome'). ' possui '. $y-> __get('numFilhos'). ' filhos ';*/
 echo '<br />';
 
 $x = new Funcionario(); // ela retorna os mesmo valores definido la no public.
 $x-> __set('nome', 'Deivid');
 $x-> __set('numFilhos',0);
 echo $x->resumirCadFun();

 /*echo $x->__get('nome'). ' quantidade de filhos: '. $x->__get('numFilhos');

echo '<br />';
 $z = new Funcionario();
 $z->__set ('nome','Jheni');
 $z->__set('numFilhos',0);
 $z->__set('telefone','48 996197294');
 $z->__set('cargo','Secretaria de Vendas');

echo $z->__get('nome'). ' quantos filhos possui: '.$z->__get('numFilhos'). ' numero de telefone: '.
$z->__get('telefone'). 'Qual cargo ocupa: '.$z->__get('cargo');
*/
?>