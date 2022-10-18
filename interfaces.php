<?php
/* estabelece um contrado que toda classe precisa usar o metodo da interace. */
interface EquipamentoEletronicoInterface { 
  public function ligar(); 
  public function desligar();

}

class Geladeira implements EquipamentoEletronicoInterface {
  public function abrirPorta(){
    echo'Abrir porta';
  }
  public function ligar(){
    echo 'ligar';
  }
  public function desligar(){
    echo 'Desligar';
  }
}

class TV implements EquipamentoEletronicoInterface{
  public function trocarCanal(){
    echo 'Trocar Canal';
  }
  public function ligar(){
    echo 'ligar';
  }
  public function desligar(){
    echo 'desligar';
  }
}
$x = new Geladeira();
$y = new TV();

?>