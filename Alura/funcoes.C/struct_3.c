#include <stdio.h>
#include <string.h>

#define MAX_VAGAS 10

// Struct para representar um carro
struct Carro {
    char placa[10];
    int ano;
    char modelo[20];
    char cor[15];
};

// Função para estacionar um carro na garagem
void Estacionar(struct Carro garagem[], int *vagasDisponiveis) {
    if (*vagasDisponiveis > 0) {
        struct Carro novoCarro;

        printf("Digite a placa do carro: ");
        scanf("%s", novoCarro.placa);

        printf("Digite o ano de producao do carro: ");
        scanf("%d", &novoCarro.ano);

        printf("Digite o modelo do carro: ");
        scanf("%s", novoCarro.modelo);

        printf("Digite a cor do carro: ");
        scanf("%s", novoCarro.cor);

        // Estaciona o carro na primeira vaga disponível
        garagem[MAX_VAGAS - *vagasDisponiveis] = novoCarro;
        (*vagasDisponiveis)--;
        printf("Carro estacionado com sucesso!\n");
    } else {
        printf("A garagem está cheia. Nao há vagas disponíveis.\n");
    }
}

// Função para remover um
