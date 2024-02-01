<?php
/* Na Web utilizamos o HTTP, que só se comunica por strings. 
Logo, tudo que vier, vem como string. 
Precisamos de algumas formas de recuperar, por exemplo, "numeros". */

/* Se uma string começa com número e depois só possui espaço, ela é uma string numérica
válida. Se ela começa com somente espaços e depois tem somente números,
ela é uma string numérica válida. Se ela tem números, depois um espaço e alguma outra coisa
que o PHP consegue ignorar, ele vai dar um aviso informando que não é um valor numérico, que ele encontrou algo que não é número*/

$anoNascimento = '2001';

$idade = 22 - $anoNascimento;

echo $idade . PHP_EOL;

if ($anoNascimento == 2001) { //Esse operador de === verifica se os valores e o tipo são iguais. Se os dois não forem de tipos iguais, ele nem o valor vai comparar. Agora esse operador, ==, somente com dois iguais, ele vai tentar fazer conversões
    echo 'sim' . PHP_EOL;
}

else {
    echo 'não' . PHP_EOL;
}