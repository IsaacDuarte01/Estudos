#include <stdio.h>
/*Um Cilindro Equilátero é quando o diâmetro da base é igual a altura do cilindro. 
Escreva um código em que fornecido a altura do cilindro equilátero, calcule seu volume:

Fórmulas

Altura = diâmetro = 2*raio
PI = 3.14
Área de um Círculo = Raio*Raio*PI
Volume do Cilindro = Base*Altura
*/

int main() {
    float altura, raio, volume;

    printf("Digite a altura do cilindro equilátero: ");
    scanf("%f", &altura); // Lê a altura do usuário e armazena em 'altura'.

    raio = altura / 2; // Calcula o raio do cilindro (metade da altura).

    volume = 3.14 * raio * raio * altura; // Calcula o volume do cilindro usando a fórmula: volume = π * raio^2 * altura.

    printf("O volume do cilindro equilátero é %.2f unidades cúbicas\n", volume); // Exibe o resultado com duas casas decimais.

    return 0;
}
