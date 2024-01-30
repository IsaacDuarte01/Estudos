<?php
/*Oque vamos fazer? Imagine que lá no seu sistema você recebe o e-mail de usuário que está se 
cadastrando e, a partir desse e-mail, você quer criar um nome de usuário*/

$nome = 'Isaac Duarte';
$email = 'isaac.duarte@gmail.com';
$senha = 'íííííí';

    /* ATENÇÃO PARA EXTENSÃO:A extensão mb_string do PHP é utilizada para
    lidar com strings multibyte, ou seja, strings em que cada caractere pode ocupar mais de um byte 
    nesse caso usamos o MB_(NOME DA FUNÇÃO QUE QUER APLICAr) para esse contagem,como exemplo nosso IF A BAIXO: */


//strlen conta bytes e não strings, ex: í com acento ocupa 2bytes
if (mb_strlen ($senha)< 8) { //Só espera como parametro oque você quer medir
    echo 'Senha insegura' . PHP_EOL;
}

$posicaoDoArroba = strpos($email,'@'); //STRPOS recebe como parametro aonde você quer buscar, 'oque');


$usuario = mb_substr ($email, 0, $posicaoDoArroba);
//Usamos a Substring que recebe como parametro a DEonde vai buscar, Posição, Tamanho; Se não determinarmos o tamanho,vai realizar a leitura ate o fim

//STRTOLOWER para fazer o inverso (minusculo)
echo strtoupper ($usuario) . PHP_EOL; //STRTOUPPER não transforma nossa string em maiuscula mas sim nos retorna OUTRA string que tenha o conteudo do $usuario em letra maiuscula
echo substr ($email, $posicaoDoArroba +1) . PHP_EOL;

list($nome, $sobrenome) = (explode(' ', $nome));// Explode recebe dois parametros, aonde vai acontecer a separação da string no nosso caso é o espaço ' ' e o segundo é oque quer explodir, no nosso caso o $nome
echo 'Nome:' . $nome . PHP_EOL; 
echo 'Sobrenome:' . $sobrenome . PHP_EOL;
