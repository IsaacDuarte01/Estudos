
<?php

$alunos2021 = [
  'ana' ,
  'dani' ,
  'alberto' ,
  'carlos' ,
  'felipe' ,
  'bob-marley'
];

$novosalunos = [
    'patricia',
    'daiana',
    'nico',
    'roberto'
];


$alunos2022 = [...$alunos2021, 'Isaac Duarte', ...$novosalunos];
array_push($alunos2021,'carlos', 'felipe', 'bob'); //recebe um array por para,etro, e add elementos a ele.
$alunos2022[] = 'marley'; // Usamos dessa forma para add valor,mas apenas quando temos um unico valor para ser passado
var_dump($alunos2021);

array_shift ($alunos2022); //Essa função vai pegar o primeiro valor do array informado,remove-lo e retornar o mesmo
array_unshift ($alunos2022,'rafa','bernardo'); //Essa função recebe um array por parametro, e após indicado o valor manda o msm para o primeiro da lista
array_pop ($alunos2021); // Faz o mesmo que o SHIFT porém remove o ultimo da lista.


/* (...$ARRAY) - A diferença entre essa sintaxe e o array_meger é que eu posso ir adicionando aqui elementos
 no meio, por exemplo. No array_merge eu precisaria trabalhar aqui com outro array, porque o array_merge_
  só une arrays. Aqui eu posso adicionar um elemento solto, por exemplo Carlos Vinícius.*/

//array_merge($alunos2021,$novosalunos) ; //Funçãop que junta os arrays ARRAY_MERGE,


//array_merge e operador de união +
/*   O operador + sempre usa as chaves do primeiro array e nunca sobrescreve seus valores com o do segundo.
Alternativa correta! Já o array_merge tem 2 comportamentos. Com strings como chaves, em caso de chaves duplicadas, 
ele sobrescreve os valores dos primeiros arrays com os valores das mesmas chaves dos arrays posteriores. Já em caso de chaves
numéricas ele simplesmente adiciona os elementos dos arrays posteriores ao final dos arrays anteriores. */