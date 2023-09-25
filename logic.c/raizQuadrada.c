/*De forma geral, chama-se equa��o do segundo grau toda equa��o que pode ser escrita
na forma: ax� + bx + c, em que x � a vari�vel e "a", "b" e "c" s�o os coeficientes da
equa��o do segundo grau.
Para encontrar as ra�zes reais de uma equa��o de segundo grau, podemos utilizar a
f�rmula de Bhaskara:
Fa�a um algoritmo que encontre as ra�zes da equa��o 3x� + 4x + 1*/

#include<stdio.h>
#include<locale.h>
#include<math.h>

void main(){
float a, b, c;
float raiz1, raiz2, delta;

setlocale(LC_ALL, "Portuguese");

printf("digite o valor para \"a\": ");
scanf("%f", &a);

printf("difite o valor para \"b\" :");
scanf("%f", &b);

printf("difite o valor para \"c\" :");
scanf("%f", &c);

delta = pow(b,2) - 4 * a * c;
raiz1 = (-b + sqrt(delta)) /2 * a;
raiz2 =(-b - sqrt(delta)) /2 * a;

printf("X1 = %.2f\n", raiz1);
printf("X2 = %.2f\n", raiz2);


}
