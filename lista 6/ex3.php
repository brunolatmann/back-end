<?php

$opcao = 3;
echo "Bem vindo a LALRES INTERNET <br>";
echo "1 - Suporte tecnico <br>";
echo "2 - Segunda via do fatura <br>";
echo "3- Falar com um atendente <br>";
echo "4 - Sair <br><br>";

switch($opcao){
    case 1:
        echo "Você escolheu: Suporte tecnico";
        break;
    case 2:
        echo "Você escolheu: Segunda via do fatura";
        break; 
    case 3:
        echo "Você escolheu: Falar com um atendente";
        break;
    case 4:
        echo "Você escolheu: Sair";
        break;
    default:
        echo "Opção inválida";
        break;
}
?>