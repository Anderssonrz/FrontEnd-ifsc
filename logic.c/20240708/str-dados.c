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
    printf("|        Sair        | 0 |\n");
    printf("+------------------------+\n");
    printf("Tecle a opcao: ");
    scanf("%d", &opcao);
    return opcao;
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

int listar(tProd* vProd, int qtd)
{
    system("cls");
    int i = 0;
    printf("--------------------------\n");
    printf("Listagem Produtos\n");
    printf("--------------------------\n");


    for (i = 0; i < qtd; i++)
    {
        printf("| %5d | %-30s | %6.2f |\n", vProd[i].codigo, vProd[i].descricao, vProd[i].preco);
    }
    printf("--------------------------\n");
    printf("| Total de Registros: %3d |\n", qtd);
    printf("--------------------------\n");
    system("pause");

}

int pesquisar(tProd* vProd, int qtd)
{
    system("cls");
    int cont = 0;
    int i = 0;
    char buscar[50];

    printf("--------------------------\n");
    printf("Pesquisar Produtos\n");
    printf("--------------------------\n");

    fflush(stdin);
    printf("Digite a descrisao para pesquisa: ");
    gets(vProd[qtd].descricao);

    for (i = 0; i < qtd; i++)
    {


        if (strstr(strlwr(vProd[i].descricao), strlwr (buscar)) != 0)
        {
            printf("| %5d | %-30s | %6.2f |\n", vProd[i].codigo, vProd[i].descricao, vProd[i].preco);
            printf("--------------------------\n");
            cont ++;

        }
        printf("| Total de Registros Loca: %3d |\n", cont);
        printf("--------------------------\n");
        system("pause");
    }



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
            fprintf(file, "%d;%s;%f\n", vProd[i].codigo, vProd[i].descricao, vProd[i].preco);
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
            token = strtok(linha, ";");
            vProd[cont].codigo = atoi(token);
            //descricao
            token= strtok(NULL, ";");
            strcpy(vProd[cont].descricao,token);
            //preco
            token = strtok(linha, ";");
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
        case 0:
            printf("Encerrando...");
            break;
        default:
            printf("opcao invalida\n");
        }

    }
    while(opcao != 0);
}

