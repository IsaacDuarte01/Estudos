<?php

$array = '1 2 3 4';

var_dump(explode(' ',$array,2)); 
/* Importante saber que o padrão do explode é receber dois parametros como ja vimos,mas existe um terceiro
que recebe o limite da "explosão" que seria o ultimo parametro - Limit, ao contrario do que parece no nosso 
exemplo ele não exibe apenas o numero 1 e 2 mas sim separa a nossa string no 1 e todo resto do array no limite 2
>execute para entender melhor<  */