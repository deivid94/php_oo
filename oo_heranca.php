<?php 
class Carro  extends Veiculo{ // A class carro herda atributos da Class veiculo

  public $teto_solar = true;
  
  function __construct($placa, $cor){ /* apartir do metodo __construct
    podemos podemos adicionar atributos de outras classe atribuidas atraves dos extend`s
    */
    $this->placa = $placa;
    $this->cor =$cor;
  }
  

  function abrirTetoSolar(){
    echo 'abrindo teto solar';
  }
  
  function AlterarPosicaoVolante(){
    echo 'Alterar Posicao volante';
  }
 
}

class Moto extends Veiculo { //A classe moto herda atributos de veiculo

  public $contra_peso_guidao = true;

  function __construct($placa, $cor){ 

  $this->placa=$placa;
  $this->cor=$cor;
    
  }



  function empinar(){
    echo 'Empinar';
  }

}
  class Veiculo{
    public $placa = null;
    public $cor = null;

    function acelerar(){
      echo 'Acelerar';
    }

    function freiar(){
      echo 'Freiar';
    }

    function trocarMarcha(){
      echo 'Desengatar embreagem  com o pé e engatar marcha com o mao.';
    }

  
  }
  //Novos objetos
  $carro = new Carro('ABC1234','Branco');
  //$moto = new Moto('DMD1254', 'Preta');

  $carro->trocarMarcha();

?>