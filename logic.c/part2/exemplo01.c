#include<stdio.h>
#include<locale.h>
#define IDADE 18

void main(){
   setlocale (LC_ALL,"Portuguese");

   char user[20];
   char senha[20];


   printf("Digite o nome de usu�rio: ");
   scanf ("%s", user);

   printf("Digite a senha de usu�rio: ");
   scanf ("%s", senha);

      if (strcmp(user, "admin") == 0) {
         printf("O usu�rio � um administrador!");
      }

         if (strcmp(user, "admin123") == 0) {
            printf("\nN�vel 1 de acesso!");
         } else {
           printf("\nA senha digitada est� errada!");
           printf("\nN�vel 1 de acesso!");
           }

               if (strcmp(user, "gerente") == 0) {
               printf("O usu�rio � um gerente!");
               }

                  if (strcmp(user, "admin123") == 0) {
                     printf("\nN�vel 2 de acesso!");
                  } else {
                    printf("\nA senha digitada est� errada!");
                    printf("\nN�vel 1 de acesso!");
            } else
                     printf("\nN�vel 3 de acesso!");


}

