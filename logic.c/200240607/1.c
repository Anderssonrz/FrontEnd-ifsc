#include <stdio.h>
#include <locale.h>
#include <string.h>


void main() {
   setlocale (LC_ALL,"portuguese");

   char user[20];
   char senha[20];

   printf("informe login: ");
   scanf ("%s",&user);
   printf("informe senha: ");
   scanf ("%s",&senha);

   if (strcmp (user , "admin") == 0){
        printf("O usu�rio � um admin!");

       if (strcmp (senha , "admin123") == 0){
        printf("\n N�vel 1 de acesso!");
       }printf("\nA senha digitada esta errada!");

   }else{
      if (strcmp (user , "gerente") == 0){
        printf("O usu�rio � um gerente!");

        if (strcmp (senha , "gerente123") == 0){
        printf("\n n�vel 2 de acesso!");
        }else{
           printf("\nA senha digitada esta errada!");
        }
      }else{
      printf("o usu�rio n�o existe");
      }
   }

}
