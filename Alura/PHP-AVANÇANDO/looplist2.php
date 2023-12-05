<?php
$alunos = array ('felipe', 'joao', 'marcelo', 'isaac'); 
$alunos [] = 'DEFANTE'; //Utilizamos essa sintex para ADIÇÃO de um numero depois da lista criada, 
//automaticamente o PHP coloca ela proxima posição disponivel,nesse caso em ultimo lugar;
//Funciona apenas em um array aonde você não definiu o valor.
    for ( $i=0; $i < count($alunos); $i++ ) {
    echo $alunos [$i] . PHP_EOL; 
}


?>