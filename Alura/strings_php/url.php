<?php
    /*Oque quero fazer? quero garantir que ela começa com HTTPS para garantir que não estou utilizando
    HTTP na versão insegura, eu quero usar a versão segura do http, que é https.*/
   
   
    $url = 'https://alura.com.br';

    //Tradução: String começa com: //STR_STARTS_WITH verifica se uma string começa com um determinado valor.

    if (str_starts_with($url,'https')){

        echo "é uma URL segura" . PHP_EOL;
    }
    else {
       
        echo "não possui segurança" . PHP_EOL;
    }

    //Agora queremos verificar se nossa URL tem o dominio do Brasil (.com.br):

    //STR_ENDS_WITH verifica se uma string termina com um determinado valor.
    if (str_ends_with($url,'br')){

        echo "é um dominio do Brasil" . PHP_EOL;
    }
    else {
       
        echo "não é um domunio do Brasil" . PHP_EOL;
    }

