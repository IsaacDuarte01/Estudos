<?php       



function geraEmail(string $nome): void
{
/* eu tenho o delimitador chamado de FINAL, tudo que tiver de espaço antes do FINAL,
ou seja, do início da linha de código até o início do FIM, o delimitador escrito,
o PHP vai contar esse número de espaços e dentro da minha string, todo o espaço inicial ele vai remover
,a mesma quantidade de espaços. */
//HEREDOC O NOME DO <<<
/* Pode se utilizar aspas simples no delimitador como por ex: <<<'FINAL' no caso essa sintaxe serveria apenas para textos não podendo incluir variavel */
    $conteudoEmail = <<<FINAL
    Ola, $nome

    Estamos entrando em ctt para
    {Motivo do ctt}

    {assinatura}
    FINAL;

    echo $conteudoEmail . PHP_EOL;
}

geraEmail('isaac');