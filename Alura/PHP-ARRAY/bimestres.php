
<?php

$notasbimestres1 = [
  'ana' =>  10,
  'dani' => 8,
  'alberto' => 9,
  'carlos' => null,
  'felipe' => 6,
  'bob-marley' => 14
];

$notasbimestres2 = [
    'ana' =>  10,
    'dani' => 8,
    'alberto' => 9,
    'carlos' => null,
   
  ];

 $alunosfaltantes = (array_diff_key ($notasbimestres1,$notasbimestres2));/*estamos utilizando a função array_diff_key() para obter as chaves do array $notasbimestres1
  que não estão presentes no array $notasbimestres2. O resultado é armazenado na variável $alunosfaltantes.*/
 $nomedosalunos = ( array_keys ($alunosfaltantes) ); /* array_keys() para obter as chaves do array $alunosfaltantes. Essas chaves representam os nomes dos alunos que faltaram.
  O resultado é armazenado na variável $nomedosalunos.*/
 $notadosalunos = ( array_values ($alunosfaltantes) ); /*array_values() para obter os valores do array $alunosfaltantes. Esses valores representam as notas dos alunos que faltaram.
  O resultado é armazenado na variável $notadosalunos.*/
var_dump (array_combine ($nomedosalunos,$notadosalunos));/*array_combine() para combinar os arrays $nomedosalunos e $notadosalunos, utilizando os nomes dos alunos como chaves e as
 notas como valores. */




 /* ARRAY_DIFF: vai retornar um novo array contendo os 
  elementos que existam no primeiro array, mas não existiam nos próximos arrays, só que isso de existir ou não ele só leva em consideração o valor. */
// ARRAY_DIFF_KEY; Faz o mesmo que o DIFF, porem usa as chaves para comparar e retornar um novo array. 
// ARRAY_DIFF_ASSOC; ele vai utilizar a associação para comparar, ele vai comparar tanto a chave quanto o valor.
// ARRAY_FLIP; Inverte os arrays, oque é valor vira chave e vice versa.