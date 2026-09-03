<?php
function verificarIdade($idade) {
    if ($idade >= 18) {
        return "Você é maior de idade pode tirar a carta<br><br>";
    } else {
        return "Menor de idade. Só de pode andar de uber rs<br><br>";
    }
}
echo verificarIdade(17);
echo verificarIdade(44);
echo verificarIdade(15);
echo verificarIdade(18);
?>