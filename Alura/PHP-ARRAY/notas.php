<?php


ksort ($notas); //(Função que faz o mesmo de ordenar (sort) mas no sentido contrario); Decrescente
var_dump ($notas);
 

if (is_array($notas)) // IS_ARRAY verifica se de fato é um array.
{
    echo "isso é array" . PHP_EOL;
}


 echo "carlos fez a prova" . PHP_EOL;
 var_dump (array_key_exists ('carlos', $notas)); // Array_key_exists - Verifica se a chave existe
//Var_dump informações sobre uma variável, incluindo seu tipo e valor.

 var_dump (isset ($notas ['carlos'])); // ISSET - verifica se o valor da nossa chave esta definido, se for NULL vai dar um boleano false; 

 
 echo "alguem tirou 10?" . PHP_EOL;
 var_dump(in_array(10, $notas)); // IN_ARRAY= Verifica se o valor passado existe

 echo "quem tirou 10?" . PHP_EOL;
 var_dump (array_search (6,$notas)); // ARRAY_SEARCH, Procura o a chave que tem o valor passado por parametro;
 
 
 ARRAY_IS_LIST; //Recebe um array e retorna um verdadeiro se for um array numerico.  

