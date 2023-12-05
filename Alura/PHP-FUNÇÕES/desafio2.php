<?php
/*
Desafio 02 - Tabuada de um número
Exibir a tabuada de um determinado número
*/

$numeroTabuada = 4; // declarando a variavel atribuindo um valor a ela.

echo "Tabuada do $numeroTabuada:" . PHP_EOL; //Printa na tela o valor da variavel;
for($i = 0; $i <= 10; $i++){ //Faço um loop, meu contador i recebe 0, se for menor ou igual ele multiplica com a variavel e dopois 
    echo "$numeroTabuada x $i = " . $i * $numeroTabuada . PHP_EOL; // acrescenta mais um numero ++
}

?>