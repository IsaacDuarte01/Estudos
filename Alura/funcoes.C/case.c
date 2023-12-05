/*Escreva um programa em C ou Portugol em que o cliente opte por um o combo de um Principal + Acompanhamento + Bebida, e apontar o que foi pedido e o valor final. 
Qualquer opção invalida deverá apresentar que a opção tem pedido NULO e valor R$0.

Dica: Usar mais de uma estrutura condicional independente, ou seja, nem encadeada nem aninhada.

Principal:
 Hamburguer R$15
X-Burguer: R$20
Monstro R$ 30

Acompanhamento
Batata R$5
Mandioca R$ 6
Salada R$ 4


Bebida
Refrigerante R$5
Agua R$6
Cerveja R$ 10

Exemplo: 1 1 1 -> "Você pediu um Hamburguer + Batata + Refrigerante. Total: R$25"
Exemplo2: 0 5 -5 --> "Você pediu um NULO + NULO + NULO. Total: R$0"*/

#include <stdio.h>

int main() {

  // Declaração de variáveis para armazenar os preços dos itens escolhidos.
  int preco_principal = 0, preco_acompanhamento = 0, preco_bebida = 0;

  // Exibe as opções de prato principal para o usuário.
  printf("Escolha o principal:\n");
  printf("1. Hamburguer (R$15)\n");
  printf("2. X-Burger (R$15)\n");
  printf("3. Monstro (R$30)\n");

  int escolha_principal;
  scanf("%d", &escolha_principal); // Lê a escolha do usuário para o prato principal.

  // Utiliza uma estrutura switch para determinar o preço com base na escolha do usuário.
  switch (escolha_principal) {
    case 1:
      preco_principal = 15;
      break;// O 'break' é usado para sair do switch após executar o case 1.
    case 2:
      preco_principal = 15;
      break;
    case 3:
      preco_principal = 30;
      break;
    default:
      printf("Opção de principal inválida. Pedido nulo.\n");
      return 0;
  }

  // Exibe as opções de acompanhamento para o usuário.
  printf("Escolha o acompanhamento:\n");
  printf("1. Batata (R$5)\n");
  printf("2. Mandioca (R$6)\n");
  printf("3. Salada (R$4)\n");

  int escolha_acompanhamento;
  scanf("%d", &escolha_acompanhamento); // Lê a escolha do usuário para o acompanhamento.

  // Utiliza uma estrutura switch para determinar o preço com base na escolha do usuário.
  switch (escolha_acompanhamento) {
    case 1:
      preco_acompanhamento = 5;
      break;// O 'break' é usado para sair do switch após executar o case 1.
    case 2:
      preco_acompanhamento = 6;
      break;
    case 3:
      preco_acompanhamento = 4;
      break;
    default:
      printf("Opção de acompanhamento inválida. Pedido nulo.\n");
      return 0;
  }

  // Exibe as opções de bebida para o usuário.
  printf("Escolha a bebida:\n");
  printf("1. Refrigerante (R$5)\n");
  printf("2. Água (R$6)\n");
  printf("3. Cerveja (R$10)\n");

  int escolha_bebida;
  scanf("%d", &escolha_bebida); // Lê a escolha do usuário para a bebida.

  // Utiliza uma estrutura switch para determinar o preço com base na escolha do usuário.
  switch (escolha_bebida) {
    case 1:
      preco_bebida = 5;
      break; // O 'break' é usado para sair do switch após executar o case 1.
    case 2:
      preco_bebida = 6;
      break;// O 'break' é usado para sair do switch após executar o case 2
    case 3:
      preco_bebida = 10;
      break;// O 'break' é usado para sair do switch após executar o case 3
    default:
      printf("Opção de bebida inválida. Pedido nulo.\n");
      return 0;
  }

  // Calcula o valor total do pedido somando os preços dos itens escolhidos.
  int valor_total = preco_principal + preco_acompanhamento + preco_bebida;

  // Exibe o valor total do pedido.
  printf("Pedido: Valor total: %d reais\n", valor_total);

  return 0;
}
