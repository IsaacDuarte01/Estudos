<?php

exibemensagem ("Fala familia,suba com as folhas que a tabelinha ta com as promo:");

$tiposdegreen  = [

    'prensadinho' => [
    'qtd' => 25,
    'valor' => 85
    ],

    'gorila' => [
    'qtd' => 3,
    'valor' => 45
    ],

    'pulho' => [
    'qtd' => 10,
    'valor' => 60
    ]
];

function exibemensagem ($mensagem) {
    echo $mensagem . PHP_EOL;
}

function vendeu (array $valores,float $valoravender ) {
    if ( $valoravender < $valores ) {
        $valores ['valor'] -= $valoravender;
    }
    return $valores;
}



$tiposdegreen['gorila'] = vendeu ($tiposdegreen ['gorila'],5);  

foreach ($tiposdegreen as $greens => $valores){
    ['qtd'=>$qtd,'valor'=>$preço]= $valores;
     exibemensagem ("$greens Min $qtd g = $preço$"); 
}





?>