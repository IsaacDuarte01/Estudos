#include <stdio.h>
#include <string.h>

int main() {
    char nomes[5][50]; // Declara um array de strings para armazenar os nomes, cada um com até 50 caracteres
    int nomeMaisLongo = 0; // Variável para rastrear o índice do nome mais longo

    // Solicita que o usuário insira os nomes
    for (int i = 1; i <6; i++) {
        printf("Digite o nome da pessoa %d: \n", i);
        scanf("%s", nomes[i]);  
    }

    // Encontra o nome mais longo
    for (int i = 0; i < 5; i++) {
        if (strlen(nomes[i]) > strlen(nomes[nomeMaisLongo])) {
            nomeMaisLongo = i;
        }
    }

    // Imprime o nome mais longo
    printf("O nome mais longo é: %s\n", nomes[nomeMaisLongo]);

    return 0;
}
