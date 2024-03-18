#include <stdio.h>
#define MAX 20

int main()
{
    int cont = 0, i, qntd = 0;
    float numeros[MAX];
    float valor = 0;
    int qtdImpar = 0, qtdPar = 0;
    int vetorP[MAX], vetorI[MAX];

    printf ("Digite um valor: ");
    scanf ("%f", &valor);

    while (valor != 0)
    {
        numeros[qntd] = valor;
        qntd++;

        printf ("Digite um valor: ");
        scanf ("%f", &valor);
    }
    printf ("\n");

    for (i = 0; i < qntd; i++)
    {
        if (numeros[qntd] % 2 != 0)
        {

            vetorI[qtdImpar] == numeros[qntd];
            printf ("%d\n", numeros[qtdImpar]);
            cont ++;

        }
    }
    for (i = 0; i < qntd; i++)
    {
        if (qtdPar[i] % 2 == 0 )
        {
            vetorP[qtdPar] == numeros[qntd];
            printf ("%d\n", numeros[qtdPar]);
            cont ++;

        }
    }

}

