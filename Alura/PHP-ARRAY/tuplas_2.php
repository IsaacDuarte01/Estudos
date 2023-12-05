<?php
    $dados = [
        'nome' => 'Isaac',
        'nota' => 10,
        'idade' => 22,
    ];

extract($dados); //Pega um array e transformas todas as chaves em variaveis.
var_dump($nome,$nota,$idade);
