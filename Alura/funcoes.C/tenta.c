#include <stdio.h>
#include <stdlib.h>
#include <string.h>

typedef struct {
    char nome [30];
    float altura;
} Predio;

int main ()
{
    Predio Edificio;
    printf("insira o nome do predio\n");
    scanf("%[^\n]s" ,&Edificio.nome);
    printf("insira a altura do predio\n");
    scanf("%f" ,&Edificio.altura);

    if(Edificio.altura > 30) printf("alto");
    else if(Edificio.altura < 10) printf ("baixo");
    else printf("medio");
}