//alteração de registro

#include <stdio.h>
#include <stdlib.h>
#include <string.h>

typedef struct
{
    int codigo;
    char descricao[50];
    float preco;
} tProd;
int mostra_menu()
{
    int opcao;
    system("cls");
    printf("+------------------------+\n");
    printf("|      Menu Principal    |\n");
    printf("+------------------------+\n");
    printf("|    Incluir Item    | 1 |\n");
    printf("+------------------------+\n");
    printf("|    Listar Itens    | 2 |\n");
    printf("+------------------------+\n");
    printf("|   Pesquisar Itens  | 3 |\n");
    printf("+------------------------+\n");
    printf("|       Backup       | 4 |\n");
    printf("+------------------------+\n");
    printf("|     ler arquivo    | 5 |\n");
    printf("+------------------------+\n");
    printf("|   ordenar arquivo  | 6 |\n");
    printf("+------------------------+\n");
    printf("|   editar registro | 7 |\n");
    printf("+------------------------+\n");
    printf("|        Sair        | 0 |\n");
    printf("+------------------------+\n");
    printf("Tecle a opcao: ");
    scanf("%d", &opcao);
    return opcao;
}
int ordenar_produtos(tProd* vProd, int qtd){
    float fTemp;
    int iTemp, i;
    char sTemp[50];

    int houve_troca = 1;
    while (houve_troca==1){
        houve_troca = 0;
        for (i=0; i<qtd-1; i++){
            // se as descricoes est�o fora de ordem
            if(strcmp(vProd[i].descricao,vProd[i+1].descricao)>0){
                //efetua as trocas de valor

                houve_troca = 1;

                //primeiro troca o codigo
                iTemp = vProd[i].codigo;
                vProd[i].codigo = vProd[i+1].codigo;
                vProd[i+1].codigo = iTemp;

                // troca preco
                iTemp = vProd[i].preco;
                vProd[i].preco = vProd[i+1].preco;
                vProd[i+1].preco = iTemp;

                //troca descricao
                strcpy(sTemp,vProd[i].descricao);
                strcpy(vProd[i].descricao , vProd[i+1].descricao);
                strcpy(vProd[i+1].descricao , sTemp);
            }
        }
    }
}


int inclusao(tProd* vProd, int qtd)
{
    system("cls");
    printf("Inclusao\n");


    printf("codigo:...");
    scanf("%d", &vProd[qtd].codigo);
    printf("descricao:");
    fflush(stdin);
    gets(vProd[qtd].descricao);
    printf("preco:....");
    scanf("%f", &vProd[qtd].preco);
    printf("Registro Incluido! \n");
    system("pause");
    return qtd+1;

    return qtd+1;
}


int listar(tProd* vProd, int qtd) {
   int i;
   system("cls");
   printf("+-------------------------------------------------+\n");
   printf("|              Listagem de Produtos               |\n");
   printf("+-------------------------------------------------+\n");
   for (i=0; i<qtd; i++) {
      printf("| %1d | %-33s | %7.2f |\n", vProd[i].codigo, vProd[i].descricao, vProd[i].preco);
   }
   printf("+-------------------------------------------------+\n");
   printf("| Total de Registros: %3d                         |\n", qtd);
   printf("+-------------------------------------------------+\n");
   system("pause");
}


void print_spaces(int n) {
   int i;
   for (i=0; i<n; i++) {
      printf(" ");
   }
}

int pesquisar(tProd* vProd, int qtd) {
   int i, cont=0;;
   char buscar[50];
   system("cls");
   printf("Informe a Expressao de Busca: ");
   fflush(stdin);
   gets(buscar);

   printf("+-------------------------------------------------+\n");
   printf("| Pesquisando Produto '%s'",buscar);
   print_spaces(26-strlen(buscar));
   printf("|\n");
   printf("+-------------------------------------------------+\n");
   for (i=0; i<qtd; i++) {
      if (strstr(strlwr(vProd[i].descricao), strlwr(buscar))!=NULL) {
         printf("| %1d | %-33s | %7.2f |\n", vProd[i].codigo, vProd[i].descricao, vProd[i].preco);
         cont++;
      }
   }
   printf("+-------------------------------------------------+\n");
   printf("| %3d Registros Encontrados                       |\n", cont);
   printf("+-------------------------------------------------+\n");
   system("pause");
}

int gravar_arquivo(tProd* vProd, int qtd)
{

    int i;
    char nomearquivo[] = "produtos.csv";
    FILE* file = fopen (nomearquivo, "w");
    if (file == NULL)
    {
        printf("Erro ao tentar gravar o arquivo\n");

    }
    else
    {
        for(i = 0; i < qtd; i++)
        {
            fprintf(file, "%d;%s;%f\r\n", vProd[i].codigo, vProd[i].descricao, vProd[i].preco);
        }
        printf("Arquivo gravado com sucesso!");
        system("pause");
    }
    fclose(file);
}


int ler_arquivo(tProd* vProd )
{
    //declarar, inclementar a cada registro lido.  mostrar  no final. retornar contador
    int cont = 0;
    char linha[256] = "";
    char* token;
    char nomearquivo[] = "produtos.csv";
    FILE* file = fopen (nomearquivo, "r");
    if (file == NULL)
    {
        printf("Erro ao tentar gravar o arquivo\n");

    }
    else

    {
        while (fgets(linha,256, file))
        {
            printf("%s", linha);
            //printf("Numero de leituras: %d\n", cont);
            //precessar os campos da linha
            //codigo
            token = strtok(linha, ";\r\n");
            vProd[cont].codigo = atoi(token);
            //descricao
            token= strtok(NULL, ";\r\n");
            strcpy(vProd[cont].descricao,token);
            //preco
            token = strtok(linha, ";\r\n");
            vProd[cont].preco = atof(token);
            cont++;
        }
    printf("registos lidos\n");
    }
    fclose(file);
    system("pause");
    return cont;

}

int main()
{
    tProd vProd[100];
    int qtd=0;
    int opcao;
    do
    {
        opcao = mostra_menu();

        switch (opcao)
        {
        case 1:
            qtd= inclusao(vProd, qtd);
            break;
        case 2:
            listar(vProd, qtd);
            break;
        case 3:
            pesquisar(vProd, qtd);
            break;
        case 4:
            gravar_arquivo(vProd, qtd);
            break;
        case 5:
            ler_arquivo(vProd);
            break;
        case 6:
            ordenar_produtos(vProd, qtd);
            break;

            break;
        case 0:
            printf("Encerrando...");
            break;
        default:
            printf("opcao invalida\n");
        }

    }
    while(opcao != 0);
}

