<?php

/* exibeMensagem() é uma subrotina
Para passarmos essa instrução, utilizamos o nome function.*/
function exibeMensagem ( string $mensagem) 
{
/* Temos uma função chamada exibeMensagem() que precisa receber um valor, que demos o nome $mensagem. 
Essa funcionalidade exibe a $mensagem que foi recebida, acrescentando uma quebra de linha ao final.
Feito isso, podemos chamar essa função também em outros pontos do nosso código: */
        echo $mensagem . '<br>';
} //SUB ROTINA NÃO DEVOLVE VALOR

function sacar(array $conta, float $valorasacar):array
  {
    if ($valorasacar >$conta ['saldo']) { //CAso o $valorASacar seja maior do que o saldo, será exibida uma mensagem informando que a pessoa não pode sacar
        exibeMensagem ("voce ta sem dim dim"); 
    }  
    else{ 
        $conta ['saldo'] -= $valorasacar; //Caso contrário, o $valorASacar será subtraído do valor do saldo.
    }     
    return $conta;
   }//FUNÇÃO DEVOLVE VALOR

function depositar (array $conta, float $valoradepositar):array //Como um bom costume: dentro de "function" defina os tipos do parametro para que fique facil achar por erros
{
   if ($valoradepositar > 0) {  // Se o $Valoradepositar for maior que 0
   $conta ['saldo'] += $valoradepositar; // executa o deposito solicitado
   }
   else {
    exibeMensagem ("Não trabalhamos com lis"); //Senão exibe o erro a partir da nossa função "$exibeMensagem";
   }
   return $conta;
  } 

function exibecontas (array $conta)
{
  ['titular' => $titular, 'saldo' =>$saldo] = $conta;
  echo  "<li>titular:$titular. saldo:$saldo</li>"; //Itens de lista em html <li>
}

?>


