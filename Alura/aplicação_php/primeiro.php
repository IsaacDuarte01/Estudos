<?php
// screen_math

echo "Bem vindo(a) ao screen math!";

$nomeFilme = "Top gun - maverick" ;
$anoLancamento = 2022;

$somaDeNotas = 4;
$somaDeNotas += 1;
$somaDeNotas += 2; // Operadores junto com o de atribuição ele funciona como acumulativo.
$somaDeNotas += 7;
$somaDeNotas += 6;

$notaFilme = $somaDeNotas / 5;
$planoPrime = true;

$incluidoNoPlano = $PlanoPrime || $anoLancamento < 2020 ;

echo "$notaFilme" . PHP_EOL;