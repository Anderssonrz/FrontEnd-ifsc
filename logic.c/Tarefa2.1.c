/*1. Um funcion�rio recebe um sal�rio fixo mais 4% de comiss�o sobre as vendas.
 Escreva um algoritmoque receba o sal�rio fixo do funcion�rio e o valor de suas vendas,
calcule e mostre a comiss�o e seu sal�rio final.*/

#define VENDAS  0.4
#include<stdio.h>
#include<locale.h>

void main() {
setlocale(LC_ALL, "Portuguese");
printf("Utilizando caracteres e acentua��o da l�ngua portuguesa!\n\n");

float vendas, salario, salarioFinal, comissao;

 printf("digite o valor do salario: ");
 scanf("%f",&salario);

 printf("digite o valor das vendas: ");
 scanf("%f",&vendas);

   comissao = vendas * 0.4;
   salarioFinal = salario + comissao;

 printf("O SALARIO TOTAL � DE : %f",salarioFinal);
 scanf("%f",&salarioFinal);
 }
