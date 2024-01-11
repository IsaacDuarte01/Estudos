<?php
/*Oque vamos fazer? Imagine que lá no seu sistema você recebe o e-mail de usuário que está se 
cadastrando e, a partir desse e-mail, você quer criar um nome de usuário*/

$email = 'isaac.duarte@gmail.com';

//Usamos a Substring que recebe como parametro a DEonde vai buscar, Posição, Tamanho;
echo substr ($email, 0, 5) . PHP_EOL;

echo substr ($email, 5) . PHP_EOL;
// Se não determinarmos o tamanho,vai realizar a leitura ate o fim