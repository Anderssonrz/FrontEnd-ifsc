#include<stdio.h>
#include<locale.h>
#include<string.h>


void main(){
  setlocale(LC_ALL, "Portuguese");
      const int manager = 3;
      const int admin = 2;
      const int user = 1;

     char usuario, key[20];
     int perm;

        printf ("Digite o nome de usu�rio: ");
        scanf ("%s", &usuario);

        printf ("Digite a senha do usu�rio: ");
        scanf ("%s", &key);

        printf ("Digite a permiss�o de usu�rio: ");
        scanf ("%d", &perm);

           if ( perm == manager) {
                           printf ("Acesso consedido Sr. %s ao sistema.\n", usuario);

           }
            else if (perm == admin) {
                           printf ("Acesso consedido Sr. %s ao sistema.\n", usuario);

           }

   }
