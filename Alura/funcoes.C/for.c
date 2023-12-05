#include <stdio.h>
/* Neste código, usamos um loop for para iterar de 1 a 50. Dentro do loop, 
usamos a instrução continue para pular números ímpares e números múltiplos de 10. Aqueles que são
 números pares e não são múltiplos de 10 são impressos no console.
  O resultado será a impressão de todos os números pares de 1 a 50, excluindo os múltiplos de 1*/

int main() {
    for (int i = 1; i <= 50; i++) {
        if (i % 2 != 0) {  // Verifica se o número não é par.
            continue;      // Se não for par, pule para a próxima iteração.
        }
        
        if (i % 10 == 0) { // Verifica se o número é múltiplo de 10.
            continue;      // Se for múltiplo de 10, pule para a próxima iteração.
        }

        // Se o número for par e não for múltiplo de 10, imprima-o.
        printf("%d ", i);
    }

    printf("\n"); // Imprime uma nova linha no final.
    return 0;
}
