<?php

$valor = 100;
$valorMinimo = 50;

$idadeCliente = 18;
$idadaMinima = 18;

$estoque = 10;
$quantidadePedida = 5;

if($valor < $valorMinimo){
    echo "Valor abaixo do mínimo!<br>";
}
else{
    echo "Valor aceito!<br>";
}

if($idadeCliente < $idadaMinima){
    echo "Menor de idade... Volte quando for maior de idade!<br>";
}
else{
    echo "Acesso Liberado!!!<br>";
}

if($quantidadePedida > $estoque){
    echo "Quantidade indisponível!<br>";
}
else{
    echo "Pedido realizado com sucesso!<br>";
}