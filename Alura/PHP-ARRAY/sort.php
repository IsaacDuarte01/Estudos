<?php

$notas = [
    10,
    8,
    9,
    7
];



$notasOrdenadas = $notas; // Se você não quer mudar o array inteiro somente uma parte,aqui você vai somente ordenar o que você precisa ($so_oque_vc_precisa = $seu_array)
sort ($notasOrdenadas); 
/* Oque a função sort vai fazer é pegar o meu array, o local onde esses valores estão armazenados em memória e vai modificar
caso não queira mudar o array inteiro LEIA O PRIMEIRO COMENT */

echo 'desordenadas';
var_dump ($notas); //VAR_DUNP para ver o tipo da variavel

echo 'ordenadas';
var_dump ($notasOrdenadas);

asort // Vai ordenar mantendo os indices [] junto com os valores;
ksort // ordena apenas os indices [] (chaves) em forma alfabetica;
krsort //ordena por alfabeto [] mas decrescente