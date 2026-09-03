<?php
$opcao = 3;
echo '<h1 style ="color: red;">NETFLIX</h1> <br>';
echo "1 - Assistir filme<br>";
echo "2 - Assistir série<br>";
echo "3 - Ver minha lista <br>";
echo "4 - Sair <br><br>";

switch($opcao){
    case 1:
        echo "Você escolheu: Assistir filme";
        break;
    case 2:
        echo "Você escolheu: Assistir série";
        break; 
    case 3:
        echo "Você escolheu: Ver minha lista";
        break;
    case 4:
        echo "Você escolheu: Sair";
        break;
    default:
        echo "Opção inválida";
        break;
}

?>