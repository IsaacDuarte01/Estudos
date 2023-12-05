#include <stdio.h>
/*  Este código lê uma letra entre A e E do usuário e imprime o nome de um país 
correspondente. Parece estar funcionando conforme o esperado.
*/
int main() {
    char opcao;

    while (1) {
        // Solicita ao usuário que insira uma letra entre A e E.
        printf("Escreva uma letra entre A e E do abecedário:\n");
        scanf(" %c", &opcao);

        // Utiliza uma estrutura switch para associar letras a países.
        switch (opcao) {
            case 'A':
            case 'a':
                // Se a letra for A ou a, imprime "Argentina".
                printf("Argentina\n");
                break;
            case 'B':
            case 'b':
                // Se a letra for B ou b, imprime "Brasil".
                printf("Brasil\n");
                break;
            case 'C':
            case 'c':
                // Se a letra for C ou c, imprime "Camarões".
                printf("Camarões\n");
                break;
            case 'D':
            case 'd':
                // Se a letra for D ou d, imprime "Dinamarca".
                printf("Dinamarca\n");
                break;
            case 'E':
            case 'e':
                // Se a letra for E ou e, imprime "Espanha".
                printf("Espanha\n");
                break;
            default:
                // Se a letra não corresponder a nenhuma das anteriores, exibe uma mensagem de erro.
                printf("Caracter inválido, tente novamente.\n");
        }
    }

    return 0;
}
