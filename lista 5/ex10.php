<?php
$peso = 69.0; 
$altura = 1.70; 

$imc = $peso / ($altura * $altura);

if($imc < 18.5){
    echo "Abaixo do peso";
}
elseif($imc >= 18.5 && $imc < 25){
    echo "Peso normal";
}
elseif($imc >= 25 && $imc < 30){
    echo "Sobrepeso";
}
?>