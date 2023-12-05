#include <stdio.h>  // Inclui a biblioteca padrão de entrada e saída.

// Declaração de uma função chamada "soma" que recebe dois argumentos inteiros e retorna um inteiro.
int soma(int a, int b){

    return a + b; // Retorna a soma dos argumentos 'a' e 'b'.
}

int main(){
    int resultado;    // Declara uma variável inteira chamada "resultado".
    int numero_a;     // Declara uma variável inteira chamada "numero_a".
    int numero_b;     // Declara uma variável inteira chamada "numero_b".

    printf("Digite o primeiro numero:");  // Exibe uma mensagem para o usuário.
    scanf("%d", &numero_a);               // Lê um valor inteiro da entrada padrão (teclado) e armazena em "numero_a".
    //(%d ; inteiro;)
    fflush(stdin);  // Limpa o buffer de entrada para evitar problemas na próxima leitura.

    printf("Digite o segundo numero:");  // Exibe outra mensagem para o usuário.
    scanf("%d", &numero_b);               // Lê um valor inteiro da entrada padrão (teclado) e armazena em "numero_b".

    resultado = soma(numero_a, numero_b); // Chama a função "soma" com os valores de "numero_a" e "numero_b" e armazena o resultado em "resultado".

    printf("O resultado é %i\n\n", resultado); // Exibe o resultado da soma.

    return 0; // Retorna 0 para indicar que o programa foi executado com sucesso.
}





    

/*     COMPILAR: gcc NOMEDOARQUIVO.c -o nomebinario (tanto faz o nome;)     */
/*          EXECUTAR: ./NOME_DO_BINARIO          */
/*                 OU COMPILAR automatico   FN+F6                */