#include <stdio.h>

/*Este código solicita que o usuário digite uma senha e verifica se a senha está correta.
 Se a senha estiver incorreta após três tentativas, o programa imprime "Bloqueado". 
 Caso contrário, se a senha estiver correta, ele imprime "Senha correta, acesso liberado".

*/
int main() {
    int senha_correta = 1234;
    int senha;
    int contador = 1;

    // Solicita ao usuário que insira a senha correta.
    printf("Digite a senha correta: \n");
    scanf("%d", &senha);

    // Entra em um loop enquanto a senha estiver incorreta e o contador for menor que 3.
    while (senha != senha_correta && contador < 4) {
        contador++;
        // Exibe uma mensagem de senha incorreta e solicita uma nova senha.
        printf("Senha incorreta, tente novamente. \n");
        scanf("%d", &senha);
    }

    // Verifica se a senha ainda está incorreta após as tentativas.
    if (senha != senha_correta) {
        // Se estiver incorreta, exibe uma mensagem de bloqueio.
        printf("Bloqueado, tente novamente em alguns minutos. \n");
    } else {
        // Se a senha estiver correta, permite o acesso.
        printf("Senha correta, acesso liberado. \n");
    }

    return 0;

}
