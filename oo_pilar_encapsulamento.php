<?php
class pai {
  private $nome = 'Jorge';
  protected $sobrenome = 'Silva';
  public $humor = 'feliz';

  public function __get($attr){ // metodo magico para acessar atributos privados
    return $this->$attr;
  }

  public function __set($attr, $value){ // metodo magico para setar novos valores atributos privados
    $this->$attr= $value;
  }
  private function executarMania(){
    echo 'Assobiar';

  }

  protected function responder(){
    echo 'OI';
  }
  
  public function executarAcao(){ // para acessar os metodos privados os protect precisa de um metodo publico
    $this->responder();
  }
}

  $pai = new pai();

  echo $pai->executarAcao(); 
  


?>
