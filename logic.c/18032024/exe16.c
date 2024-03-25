#include <stdio.h>
#define MAX 20

int main()
{
    int num = 0;
    int vetor[20], i,  quant= 0;
    float valor = 0;

    while(quant < 15)
    {
        if(num % 3 == 0 )
        {
            vetor[quant]= num;
            quant++;
        }
        num++;

    }
    for (i = 0; i < quant; i++)
    {
        printf(" %d ", num);
    }
}
