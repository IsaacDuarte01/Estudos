#include <stdio.h>
#include <string.h>

// Definindo a struct para armazenar informações dos jogadores
struct Jogador {
    char nome[50];
    int idade;
};

int main() {
    // Criando um array de structs para armazenar os dados dos jogadores
    struct Jogador jogadores[5];

    // Solicitando ao usuário que insira os dados dos jogadores
    for (int i = 0; i < 5; i++) {
        printf("Digite o nome do jogador %d: \n", i + 1);
        scanf(" %s", jogadores[i].nome);

        printf("Digite a idade do jogador %d: \n", i + 1);
        scanf(" %d", &jogadores[i].idade);
    }

    // Calculando a maior idade, a menor idade e a média das idades
    int maiorIdade = jogadores[0].idade;
    int menorIdade = jogadores[0].idade;
    int somaIdades = jogadores[0].idade;

    for (int i = 1; i < 5; i++) {
        if (jogadores[i].idade > maiorIdade) {
            maiorIdade = jogadores[i].idade;
        }

        if (jogadores[i].idade < menorIdade) {
            menorIdade = jogadores[i].idade;
        }

        somaIdades += jogadores[i].idade;
    }

    float mediaIdades = (float)somaIdades / 5;

    // Exibindo os resultados
    printf("Maior idade:%d o campeão é %s \n", maiorIdade,jogadores);
    printf("Menor idade: %d\n", menorIdade);
    printf("Média das idades: %f\n", mediaIdades); 

    return 0;
}
