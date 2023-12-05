<?php
// ARRAY ASSOCIATIVO;
$contascorrentes = [
   
    '125.979.649-30' => [ 
  
        'titular' => 'felipe', 
        'saldo' => 1000
    ],
    '125.889.334-09' => [                       
                                           
        'titular' => 'rodrigo', 
        'saldo' => 500       
    ], 
    '124.389.746-49' => [
    
        'titular' => 'isaac',   
        'saldo' => 300
    ]
];

/* se tivermos um array associativo no qual as chaves possuem algum significado, 
precisamos dessa chave sempre que adicionarmos um novo item de modo que a lista continue 
fazendo sentido. Ou seja, nesse caso, precisaríamos adicionar o CPF:
*/
$contascorrentes ['124.445.432-43'] = [ 
    'titular' => 'defante',   
    'saldo' => 450

];


//foreach = "PARA CADA" usando esse loop com ARRAY torna-se mais legivel;
// as = "COMO"
foreach ($contascorrentes as $cpf => $conta ) { //Para cada $contacorrente como $CPF (ESSA VARIAVEL É PARA INDICAR OQUE TEM ANTES DAS => $CONTA1 ...) 
    echo $cpf . " " . $conta ['titular'] . PHP_EOL; //Aqui eu quero que exiba o cpf e dentro de cada conta o titular.
}

//COMO EU SEI QUE A VARIAVEL "CPF" E A "CONTA" TEM VALOR?
// Dentro do foreach indicamos a "conta_corrente" que é o nosso ARRAY ASSOCIATIVO, sabemos que o $cpf tem esse valor pois 
// colocamos ele na posição do indice => ligando ele com oque vem depois o "valor",e nesse caso chamamos de $conta;


?>