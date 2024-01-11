<?php

    $nome = 'Isaac Duarte';

    $eDaMinhaFamilia =str_contains ($nome, 'Duarte'); //str_contains:usada para verificar se uma string contém outra string
    //Essa função recebe dois parametros,aonde vamos buscar a string e oque a gente quer buscar.

    if ($eDaMinhaFamilia) {
        echo "$nome é da minha familia" . PHP_EOL;
    } else {
        echo "$nome não é da minha familia" . PHP_EOL;
    }

?>