#include <stdio.h>
#include <stdlib.h>
#include <string.h>
/* run this program using the console pauser or add your own getch, system("pause") or input loop */
void InverteString(char s[]) {
	char invertida[100];
	strcpy(invertida, s);
	int cont;
	for(cont = 0; cont < strlen(invertida); cont++) {
		s[cont] = invertida[strlen(invertida) - 1 -cont];
	}
}

int main(int argc, char *argv[]) {
	
	char frase [100];
	
	printf("Por favor, insira uma string\n");
	scanf(" %[^\n]s", &frase);
	
	
	InverteString(frase);
	printf("%s", frase);
	
	
	return 0;
}