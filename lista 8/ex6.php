<?php

$contador = 0;

for ($i = 1; $i <= 50; $i++){
    if ($i %3 == 0){
        echo $i." é divisível por 3<br>";
        $contador++;
    }
}
echo "<br>";
echo "Quantidade de números divisíveis por 3: $contador";
?>