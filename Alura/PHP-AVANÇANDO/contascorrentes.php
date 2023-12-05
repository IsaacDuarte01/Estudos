<?php //ARRAY ASSOCIATIVO;podemos associar um nome/índice a determinado valor
$conta1 = [ //DECLARAMOS A VARIAVEL QUE VAI RECEBER O ARRAY ASSOCIATIVO DENTRO DE COLCHETES;
   
    'titular' => 'felipe', //ASPAS SIMPLES EM STRING COM => PARA LIGAR O VALOR QUE O NOME/INDICE RECEBE
    'saldo' => 1000
];

$conta2 = [
    
    'titular' => 'rodrigo',     //O mesmo é repetido com alterações apenas nas informações; 
    'saldo' => 70   
];

$conta3 = [
    
    'titular' => 'isaac',   
    'saldo' => 300
];

$contascorrentes = [$conta1, $conta2, $conta3]; // Declamos uma variavel para receber as 3 contas

for ($i = 0; $i < count($contascorrentes); $i++) {  // Fazemos um loop para interagir com as contas
    echo $contascorrentes [$i] ['titular'] . PHP_EOL; // aqui quero exibir apenas os titulares (line;23)
    // Mostre as contas 1,2,3 [iniciando em $i=0] ['somente as titulares']; 
}
 

?>  



