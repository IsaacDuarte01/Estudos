
#include <stdio.h>

int main() {
    int tamanho; // Variável para armazenar o tamanho do vetor
    printf("Digite o tamanho do vetor: ");
    scanf("%d", &tamanho); // Solicita ao usuário o tamanho do vetor

    int vetor[tamanho]; // Declara um vetor de inteiros com o tamanho especificado

    // Pede ao usuário para inserir os elementos do vetor
    printf("Digite os elementos do vetor:\n");
    for (int i = 0; i < tamanho; i++) {
        printf("Elemento %d: ", i + 1); // Índice começa em 0, então somamos 1 para exibição
        scanf("%d", &vetor[i]); // Lê o valor do usuário e armazena no vetor
    }

    // Imprime os elementos do vetor
    printf("Elementos do vetor:\n");
    for (int i = 0; i < tamanho; i++) {
        printf("%d ", vetor[i]); // Imprime cada elemento do vetor
    }
    printf("\n"); // Adiciona uma quebra de linha para melhor formatação

    return 0;
}
