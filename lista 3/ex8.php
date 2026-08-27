<?php 

$nome = "bruno"; 
$senha = "br12345678";
$confimarsenha ="br12345678";
$data_nasc = "30/06/2010";

if ($senha == $confimarsenha){
    echo "Acesso liberado!<br>";
} else {
    echo "acesso negado!<br>";
}
if($nome != ""){
    echo "Seu nome está errado<br>";
}
else{
    echo "Seu está correto<br>";
}

echo $data_nasc

?>  