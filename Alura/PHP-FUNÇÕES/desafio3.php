<?php
$peso = 60;
$altura = 1.70;

$imc = $peso / ($altura * $altura); // Para calcular o imc o calculo é; ( peso / ( altura * altura );
       
if ($imc < 18.5) { // 18.5 é o calculo padrão do imc para considerar a baixo do peso
        echo "você ta magrão bicho!" . PHP_EOL; 
}
elseif ($imc > 18.5 && $imc < 24.9 ) { // 18.5 ate 24.9 é o calculo padrão do imc para considerar dentro do ideal
        echo "ta padrão dog!!" . PHP_EOL;
}
elseif ($imc > 24.9 && $imc <= 29.9 ) { // 24.9 ate 29.9 é o calculo padrão do imc para considerar acima do ideal
        echo "Ta gordo colega..." . PHP_EOL;
 }
 else {
    echo "procure ajuda,para o seu bem" . PHP_EOL;
 }




?>