<?php

 for ($contador = 1; $contador <= 15; $contador ++) { 
    /*       SÃO EQUIVALENTES: 
    $contador = $contador + 1;
    $contador += 1;
    $contador++;         */
    if ($contador == 13){
       continue; //Pulando uma interação,nesse caso o 13, SE for 13 ele pula e continua.
    }            // O break é utilizado para interromper completamente um loop,encerrando na sua condição;
       echo $contador . PHP_EOL; 
 }
 // for é uma estrutura de repetição que executa um bloco de código enquanto uma condição for verdadeira.
 // diferente do while ela é reduzida.
?>