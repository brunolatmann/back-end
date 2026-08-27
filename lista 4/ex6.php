<?php

$idade = 65;
$deficiencia = "nao";
$gestante = "nao";

echo "Verificaçao de atendimento <br>";

if($idade >= 60 || $deficiencia == "nao" || $gestante == "nao"){
    echo "Você não tem direito a atendimento prioritário!";
}
else{
    echo "Você tem direito a atendimento prioritário!";
}