/* 4. Escreva um algoritmo que receba o valor do sal�rio m�nimo e o valor do sal�rio de um
funcion�rio, calcule e mostre a quantidade de sal�rios m�nimos que esse funcion�rio
ganha.
 */
 #include<stdio.h>
 void main(){
 float salario,salariomin,quantidadesalario;

 printf("digite o valor do salario minimo: ");
 scanf("%f",&salariomin);

 printf("digite o seu salario: ");
 scanf("%f",&salario);

 quantidadesalario = salario/salariomin;
 printf("a quantidade de salarios minimos recebidos : %f",quantidadesalario);
 }

