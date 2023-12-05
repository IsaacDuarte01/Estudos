<?php
include 'funcoes.php'; //include não dá erro (apenas avisa) se o arquivo não existe, require dá erro
//require_once garante que o arquivo será incluído apenas uma vez


// ARRAY ASSOCIATIVO;
$contascorrentes = [
   
    '125.979.649-30' => [ 
  
        'titular' => 'felipe', 
        'saldo' => 1000         
    ],
    '125.889.334-09' => [                       
                                           
        'titular' => 'rodrigo', 
        'saldo' => 500       
    ], 
    '124.389.746-49' => [
     
        'titular' => 'isaac',   
        'saldo' => 300
    ]
];

unset ( $contascorrentes ['125.889.334-09']); // comando utilizado para excluir um array

$contascorrentes ['124.389.746-49'] = depositar ($contascorrentes ['124.389.746-49'], 500); 
//Aqui estamos chamando a nossa função depositar; aonde vai fazer a adição conforme o parametro la encima;


$contascorrentes ['125.979.649-30'] = sacar ($contascorrentes ['125.979.649-30'], 500); 
//Aqui estamos chamando a nossa função sacar; aonde vai fazer a verificação conforme o parametro la encima;

echo "<ul>"; // uma lista html
foreach ($contascorrentes as $cpf => $conta ) { 
    exibecontas ($conta);
      
}
echo "</ul>";


/*foreach ($contascorrentes as $cpf => $conta ) { 
    list ('titular'=>$titular, 'saldo'=>$saldo) = $conta; //Dessa forma, na chamada de exibeMensagem(), 
                                                          poderemos usar as variáveis $titular e $saldo ao invés de acessarmos o array diretamente:
       exibeMensagem (
        "$cpf $titular $saldo"
    );
    */


    /*foreach ($contascorrentes as $cpf => $conta ) {
        ['titular'=>$titular, 'saldo'=>$saldo)]  = $conta; //Essa é uma forma mai simples ainda de usar a função LIST.
    }) */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>
    <dl>
      <?php foreach ($contascorrentes as $cpf => $conta) { ?>
       <dt>
          <h3><?= $conta['titular']; ?> - <?=  $cpf ?></h3>
      </dt>
     <dd>
       saldo:<?= $conta['saldo'];?> 
    </dd>
    </dl>
     <?php } ?>
</body>
</html>
