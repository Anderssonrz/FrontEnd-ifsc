/*. Escreva um algoritmo que permita ao usuario gerenciar a venda e o estoque de produtos.
O algoritmo deve receber o nome, valor e quantidade inicial de cada produto.
Em seguida, deve permitir que o usuario realize a venda dos produtos, informando o nome do produto e a quantidade desejada.
O algoritmo deve atualizar o estoque e apresentar uma nota fiscal com o valor total a ser pago pelo cliente.
Alem disso, o algoritmo deve permitir que o usuario aumente o estoque dos produtos, informando o nome do produto e a quantidade a ser adicionada.
Ao finalizar a operacao, o algoritmo deve perguntar ao usuario se deseja encerrar o programa..*/

#include < stdio.h >
#include < stdlib.h >
#include < locale.h >
#include < math.h >


int main()
{
   setlocale(LC_ALL, "Portuguese");
   int option;

   printf(" MENU DE OPCAES:\n\n ");
   printf("------------------------");
   printf("1 - Inserir produto: ");
   printf("2 - Alterar produto: ");
   printf("3 - Lista de produtos: ");
   printf("4 - Vender produto: ");
   printf("5 - Imprimir nota fiscal: ");
   printf("6 - Sair do sistema: ");
   printf("------------------------");
   printf("\n\nESCOLHA UMA OPCAO : ");
   scanf("%d", &option);
   system("cls");

   switch (option)
   {
   case 1:
      inserirProduto();
      break;
   case 2:
      alterarProduto();
      break;
   case 3:
      listaProdutos();
      break;
   case 4:
      venderProduto();
      break;
   case 5:
      imprimirNota();
      break;
   case 6:
      sairSistema();
      break;
   return 0;}
}
void inserirProduto()
{   
}
void alterarProduto()
{
}
void listaProdutos()
{   
}
void venderProduto()
{
}
void imprimirNota()
{
}
