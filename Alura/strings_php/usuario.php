<?php
/*Oque vamos fazer? Imagine que lá no seu sistema você recebe o e-mail de usuário que está se 
cadastrando e, a partir desse e-mail, você quer criar um nome de usuário*/

$email = 'isaac.duarte@gmail.com';
$senha = '123';


//strlen conta bytes e não strings, ex: í com acento ocupa 2bytes
if (strlen ($senha)< 8) { //Só espera como parametro oque você quer medir
    echo 'Senha insegura' . PHP_EOL;
}

$posicaoDoArroba = strpos($email,'@'); //STRPOS recebe como parametro aonde você quer buscar, 'oque');

//Usamos a Substring que recebe como parametro a DEonde vai buscar, Posição, Tamanho;
echo substr ($email, 0, 5) . PHP_EOL;

echo substr ($email, $posicaoDoArroba +1) . PHP_EOL;
// Se não determinarmos o tamanho,vai realizar a leitura ate o fim