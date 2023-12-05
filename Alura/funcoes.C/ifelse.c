#include <stdio.h>

int main() {
  float num1, num2;

  // Solicita ao usuário que insira o primeiro número.
  printf("Digite o primeiro número: ");
  scanf("%f", &num1);

  // Solicita ao usuário que insira o segundo número.
  printf("Digite o segundo número: ");
  scanf("%f", &num2);

  if (num1 < 20 && num2 < 20) {
    // Verifica se ambos os números são menores que 20.
    float produto = num1 * num2;
    // Calcula o produto dos números.
    printf("O produto dos números é: %.2f\n", produto);
  } else {
    if (num2 == 0) {
      // Verifica se o segundo número é igual a zero (evitando divisão por zero).
      printf("Não é possível dividir por zero.\n");
    } else {
      // Calcula a divisão do primeiro número pelo segundo.
      float resultado_divisao = num1 / num2;
      printf("A divisão dos números é: %.2f\n", resultado_divisao);
    }
  }

  return 0;
}
