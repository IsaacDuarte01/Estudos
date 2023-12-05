#include <stdio.h>  // Inclui a biblioteca padrão de entrada e saída.

int main(int argc, char *argv[]) {  // Início da função principal 'main' que pode receber argumentos da linha de comando.
    int cont; // Declaração da variável 'cont' para contar os números.

    // Loop que itera de 1 a 99.
    for (cont = 1; cont < 100; cont++) {
        if (cont < 30) { // Verifica se 'cont' é menor que 30.
            printf("%d\n", cont); // Imprime o valor de 'cont' se for menor que 30.
        } else if (cont < 70) { // Se a condição anterior não for atendida, verifica se 'cont' é menor que 70.
            // Imprime uma mensagem que inclui o dobro de 'cont' se estiver entre 30 e 69.
            printf("ola vc imprimiu %d. parabens\n", 2 * cont);
        } else {
            // Se nenhuma das condições anteriores for atendida, ou seja, se 'cont' for maior ou igual a 70.
            // Imprime uma mensagem que inclui o triplo de 'cont'.
            printf("%d. este numero e para este caso\n", 3 * cont);
        }
    }
    return 0; // Encerra a função 'main' e retorna 0 para indicar que o programa foi executado com sucesso.
}
