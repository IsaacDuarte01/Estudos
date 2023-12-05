#include <stdio.h>
void paresimpares (int n[],int *p, int *i)
{
    int cont1;
    for (cont1 = 0; cont1 < 10; cont1++)
{
        if (n[cont1]%2 == 0) (*p)++;
        else(*i)++;
}
}
int main() {

    int numeros[11] = {0,1,2,3,4,5,6,7,8,9,10};
    int pares = 0;
    int impares = 0;

    paresimpares(numeros,&pares,&impares);
    printf("O vetor possui %d de pares e %d de impares" ,pares,impares);


     return 0;
}
