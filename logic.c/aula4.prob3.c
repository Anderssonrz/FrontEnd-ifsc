#include<stdio.h>
#define PORCENTAGEM 0.25
void main(){
float salario;
float novoSalario;
float aumento;

printf("Digite o salario atual:");
scanf("%f", &salario);

aumento = salario * PORCENTAGEM;
novoSalario = salario + aumento;

printf("O salario era: R$%f\n", salario);
printf("O aumento foi de: R$%f\n", aumento);
printf("O novo salario eh: R$%f\n", novoSalario);
}

