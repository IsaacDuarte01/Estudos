#include <stdio.h>

// Definindo a struct para armazenar informações sobre os times
struct Time {
    char nome[50];
    int golsAFavor;
    int golsContra;
};

int main() {
    // Criando um array de structs para armazenar os dados dos times
    struct Time times[5];

    // Solicitando ao usuário que insira os dados dos times
    for (int i = 0; i < 5; i++) {
        // Solicitando e armazenando o nome do time
        printf("Digite o nome do time %d: ", i + 1);
        scanf("%s", times[i].nome);

        // Solicitando e armazenando o número de gols a favor do time
        printf("Digite o número de gols a favor do time %d: ", i + 1);
        scanf("%d", &times[i].golsAFavor);

        // Solicitando e armazenando o número de gols contra do time
        printf("Digite o número de gols contra do time %d: ", i + 1);
        scanf("%d", &times[i].golsContra);
    }

    // Calculando e exibindo o saldo de gols para cada time
    printf("\nSaldo de Gols:\n");
    for (int i = 0; i < 5; i++) {
        // Calculando o saldo de gols (gols a favor - gols contra)
        int saldoGols = times[i].golsAFavor - times[i].golsContra;

        // Exibindo o nome do time e seu saldo de gols
        printf("%s: %d\n", times[i].nome, saldoGols);
    }

    return 0;
}
