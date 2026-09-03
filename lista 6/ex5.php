<?php

$opcao = 4;
echo '<h1 style ="color: red;">VALORANT</h1> <br>';
echo "1 - Jogar partida <br>";
echo "2 - Rank <br>";
echo "3 - Loja <br>";
echo "4 - Agentes <br>";
echo "5 - Histórico <br>";
echo "6 - Sair <br><br>";
switch($opcao){
    case 1:
        echo "Você escolheu: Jogar partida";
        break;
    case 2:
        echo "Você escolheu: Rank<br>";
        echo "ranked Ouro<br>";
        echo "ranked Diamante<br>";
        echo "ranked Ascendente<br>";
        break; 
    case 3:
        echo "Você escolheu: Loja";
        break;
    case 4:
        echo "Você escolheu: Agentes<br>";
        echo '<img src="https://wiki.playvalorant.com/en-us/images/thumb/Raze_Artwork_Full.png/275px-Raze_Artwork_Full.png?582f7" width="200px"><br>';
        echo "Raze<br>";
        echo '<img src="https://wiki.playvalorant.com/en-us/images/thumb/Jett_Artwork_Full.png/275px-Jett_Artwork_Full.png?582f7" width="200px"><br>';        
        echo "Jett<br>";
        echo '<img src="https://wiki.playvalorant.com/en-us/images/thumb/Omen_Artwork_Full.png/275px-Omen_Artwork_Full.png?582f7" width="200px"><br>';
        echo "Omen<br>";
        break;
    case 5:
        echo "Você escolheu: Histórico";
        break;
    case 6:
        echo "Você escolheu: Sair";
        break;
    default:
        echo "Opção inválida";
        break;
}
?>