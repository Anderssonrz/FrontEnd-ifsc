#include<stdio.h>
#include<locale.h>


void main(){
   setlocale (LC_ALL,"Portuguese");

   int codigo;
   char cargo;
   float salario, porcentagem, novoSalario, reajuste;


   printf("Digite o sal�rio: ");
   scanf ("%f\n", &salario);

   printf("Digite o c�digo: ");
   scanf ("%d\n", &codigo);


      if (codigo == 1) {
         printf("\n cargo Escriturario");
          reajuste = salario * 0.5;

         } else if (codigo == 2){
                  printf("\n cargo Escriturario");
                  reajuste = salario * 0.35;
                  novoSalario = salario + reajuste;
                  printf("\n Novo sal�rio: %.2f", novoSalario);

         } else if (codigo == 3){
                     printf("\n cargo Escriturario");
                     reajuste = salario * 0.20;
         } else if (codigo == 4){
                     printf("\n cargo Escriturario");
                     reajuste = salario * 0.10;
         } else if (codigo == 5){
                     reajuste = salario * 0.10;

         }
      }



//novoSalario = salario + reajuste;
//printf("O novo sal�rio � de: %.2f\n", novoSalario);

