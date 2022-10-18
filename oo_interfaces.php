<?php
interface mamiferoInterface{
  public function respirar();
}

interface terrestreInterface{
  public function andar();
}

interface aquaticoInterface{
  public function nadar();

}
  //classes dos objetos

 class Humano implements mamiferoInterface, terrestreInterface {

  public function conversar(){
    echo 'conversar';
  }
  public function respirar(){
    echo 'respirar';
  }
  public function andar(){
    echo 'andar';
  }
 }

 class Baleia implements mamiferoInterface, aquaticoInterface{
  public function respirar(){
    echo 'respirar';
  }
  public function nadar(){
    echo 'nadar';
  }
  public function esguichar(){
  echo 'esguichar';
  }
 }
?>