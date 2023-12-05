<?php
$idade_list = [23, 26, 34, 45, 47, 45, 50];

 for ($i = 0; $i < 6; $i++) { /*podemos substituir o $i < 6 por $i < count($idadeList).
     Dessa forma, mesmo que o número de itens na lista seja alterado, o código continuará sendo executado corretamente. */
    echo $idade_list [$i] . PHP_EOL;

}

// se quiser descobrir a quantidade de itens na lista: echo count(NOME_DA_LISTA)
?>