<?php

$notas = [
[
    'aluno' => 'maria',
    'nota' => 10,
],
[
    'aluno' => 'vinicius',
    'nota' => 6,
],
[
    'aluno' => 'ana',
    'nota' => 9,
],
];

function Ordenanotas (array $nota1, array $nota2 ): int
{
    return $nota2['nota'] <=> $nota1['nota']; /* (<=>) Se o primeiro elemento antes do operador for menor do que o
elemento depois do operador ele retorna -1, se o primeiro elemento for maior ele retorna 1 e se eles forem iguais ele retorna 0.*/
}


usort($notas, 'Ordenanotas'); /* USORT espera dois parametros (1 o array que ela vai ordenar) (2 a função que ensina como ela vai ordenar);
 E essa função precisa retornar um inteiro, esse inteiro precisa ser menor do que 0 se o primeiro parâmetro precisar vir antes nesse array ordenado.
Ela retorna maior do que 0 se o segundo parâmetro precisar vir primeiro nesse array ordenado. E devolve 0 se eles forem iguais, se a ordem não importa, 
se não precisar modificar a ordem. Basicamente é isso. Dessa forma conseguimos implementar o nosso algoritmo de ordenação utilizando o PHP e a função usort. */

var_dump($notas);