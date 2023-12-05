#include <stdio.h>

int main() {
    int matriz[4][4] = { // PRIMEIRO [LINHA], SEGUNDO [COLUNA];
        {40, 20, 31, 14},
        {20, 0, 0, 24},
        {72, 8, 47, 30},
        {24, 44, 65, 5}
    };

    int maiorValor = matriz[0][0]; // Assumimos que o primeiro valor é o maior
    int menorValor = matriz[0][0]; // Assumimos que o primeiro valor é o menor
    int posicaoMaiorI, posicaoMaiorJ, posicaoMenorI, posicaoMenorJ;

    // Percorra a matriz e encontre o maior e o menor valor
    for (int i = 0; i < 4; i++) {
        for (int j = 0; j < 4; j++) {
            if (matriz[i][j] > maiorValor) { // [0] - [01] ()
                maiorValor = matriz[i][j];
                posicaoMaiorI = i;                //
                posicaoMaiorJ = j;
            }
            if (matriz[i][j] < menorValor) {
                menorValor = matriz[i][j];
                posicaoMenorI = i;
                posicaoMenorJ = j;
            }
        }
    }

    // Imprime os resultados
    printf("Maior valor: %d (na posição [%d][%d])\n", maiorValor, posicaoMaiorI, posicaoMaiorJ);
    printf("Menor valor: %d (na posição [%d][%d])\n", menorValor, posicaoMenorI, posicaoMenorJ);

    return 0;
}
