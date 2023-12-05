<?php

$idade = 17;
$Numerodepessoas = 1;

echo "Você só pode entrar apartir de 18 anos.";
echo "Ou se tiver mais de 16 e acompanhado" . PHP_EOL;
// String: só vai ser permitido a entrada acima de 18,quero que print isso na tela (echo).

  if ($idade >= 18){ // uso o IF para "SE" Variavel &idade for maior ">" ou igual "=" 18 permitir entrada
// A condição precisa estar entre (). E dentro de {} para alocar a condição dentro do bloco.
     echo "Você tem $idade, segue";

} else if  ($idade >= 16 && $Numerodepessoas > 1 ) {
//Quando temos várias condições no código, podemos utilizar, além do if e do else, uma outra estrutura chamada else if:
    
     echo "Não ta sozinha e tem $idade?, vai!";
} else { 
//Uso else para "se não" for maior ele mandar embora. (&& E - || OU)
     echo "Você só tem $idade segue seu caminho loco!!!";
}
   

 echo PHP_EOL;
 echo 'FORTE FORTE!'. PHP_EOL;

?>
/*O if é o primeiro comando, elseif e else são opcionais
O bloco elseif sempre precisa de um if antes
O bloco else sempre precisa de um if ou elseif antes*/