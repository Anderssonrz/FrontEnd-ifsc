/*17. Elabore um programa que crie um vetor de 10 posi��es, e preencha estas posi��es com os
10 primeiros valores da s�rie de Fibonacci.
Na s�rie de Fibonacci os dois primeiros valores s�o 0 e 1. Os pr�ximos valores s�o a soma
dos dois valores anteriores.*/


#include <stdio.h>
#define MAX 14

int main() {
  int a = 0, b = 1, c;


  for (int i = 0; i < MAX; i++) {
    printf("%d ", c);
    c = a + b;
    a = b;
    b = c;
  }

}
