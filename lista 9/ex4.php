<?php
$lista = [1,2,3,4,5,646,7976,8,9,10];
$maior = 0;

 foreach ($lista as $numero){
     if ($numero > $maior){
         $maior = $numero;
        }
 }
  echo "<br>Número maior é o $maior";
?>