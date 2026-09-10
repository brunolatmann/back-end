<?php
$seguidores = ["joaopaulozz", "juliacd", "marlao23"];
$soma = 0;
foreach ($seguidores as $pessoas){
    echo "Seguidor: $pessoas <br>";
    $soma = $soma + 1;
}
echo "A primeira pessoa da lista é: $seguidores[0] <br>";