#include <stdio.h>

// Função para preencher uma matriz
void preencherMatriz(int matriz[][3], int linhas, int colunas) {
    for (int i = 0; i < linhas; i++) { // Loop para percorrer as linhas da matriz
        for (int j = 0; j < colunas; j++) { // Loop para percorrer as colunas da matriz
            printf("Digite o elemento (%d, %d): ", i + 1, j + 1);
            scanf("%d", &matriz[i][j]); // Solicita e lê o valor do usuário e armazena na matriz
        }
    }
}

// Função para imprimir uma matriz
void imprimirMatriz(int matriz[][3], int linhas, int colunas) {
    printf("Elementos da matriz:\n");
    for (int i = 0; i < linhas; i++) { // Loop para percorrer as linhas da matriz
        for (int j = 0; j < colunas; j++) { // Loop para percorrer as colunas da matriz
            printf("%d\t", matriz[i][j]); // Imprime cada elemento da matriz
        }
        printf("\n"); // Adiciona uma quebra de linha após cada linha da matriz
    }
}

int main() {
    int linhas, colunas;
    printf("Digite o número de linhas da matriz: ");
    scanf("%d", &linhas);
    printf("Digite o número de colunas da matriz: ");
    scanf("%d", &colunas);

    int minhaMatriz[linhas][colunas]; // Declara uma matriz de inteiros com o tamanho especificado

    preencherMatriz(minhaMatriz, linhas, colunas); // Chama a função para preencher a matriz
    imprimirMatriz(minhaMatriz, linhas, colunas); // Chama a função para imprimir a matriz

    return 0;
}
