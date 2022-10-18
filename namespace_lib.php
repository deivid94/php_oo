<?php
require "./bibliotecas/lib1/lib1.php"; //importando libs locais
require "./bibliotecas/lib2/lib2.php";

/*usando o use, usamos a classe cliente no namespace B*/

use A\Cliente as c1; //as define um apelido para classe.
use B\Cliente as c2;


$c = new c1();
print_r($c);
echo $c->__get('nome');

$c = new c2();
print_r($c);
echo $c->__get('nome');

?>
