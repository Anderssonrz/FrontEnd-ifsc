#include<stdio.h>
#include<locale.h>


void main(){
   setlocale (LC_ALL,"Portuguese");

   int idade, contribuicao;
   char sexo;

   printf("Digite o seu sexo, M / F: ");
   scanf ("%s", &sexo);

   printf("Digite o idade do contribuinte: ");
   scanf ("%d", &idade);

   printf("Digite o tempo de contribui��o: ");
   scanf ("%d", &contribuicao);

      if (sexo = 'M' || idade >= 65 || contribuicao >= 15)
         printf("\n Contribuinte pode se aposentar");

         else if (sexo != 'M' || idade < 65 || contribuicao < 15) {
         printf("\n Contribuinte n�o pode se aposentar.");
            }

}

//novoSalario = salario + reajuste;
//printf("O novo sal�rio � de: %.2f\n", novoSalario);
