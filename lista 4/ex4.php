<?php
$email = "jp@gmail.com";
$senha = "1234";
$status = "desativado";

echo "Bem vindo ao FACEBOOK <br>";

if($email == "jp@gmail.com" && $senha == "123" && $status == "ativo"){
    echo "Acesso Liberado <br>";
    header("Locaction: https://www.facebook.com");
}
else{
    echo "Email ou senha invalida!";
}

?>