<?php

  echo 'minha idade é:' . $idade . 'anos \n';
 // para juntar textos de uma string (texto) a uma variavel (int,float ...) usamos o sinal de ponto (.)
 // com aspas simples ('') é necessario o uso do ponto.
  
   $idade = 22;
   echo "minha idade é: $idade anos \n";
   echo "algum problema?";
   // Já as aspas duplas ("") permitem a interpolação de variáveis dentro do texto.
  // \n serve para quebrar linha no terminal.
 
   echo "ola mundo" . PHP_EOL;
  //P ara quebra de linha dependendo do sistema operacional utilizamos o Concatenar " o ponto e espaço " antes da função

 /*Alguns sistemas operacionais utilizam o caracter \n para representar uma quebra de linha. Outros,
 utilizam \r. Já o Windows utiliza ambos (\r\n). Utilizando a constante PHP_EOL nos é abstraída esta diferença e podemos 
 deixar nosso código funcionando de forma igual em todas as plataformas.*/

    //Você é muito merecedor <3
?>