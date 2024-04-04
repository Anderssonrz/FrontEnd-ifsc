<html lang="pt">
  <head>
    <title>Operações Aritméticas</title>
  </head>
  <body>
    <?php
    // busca os dados do formulário
    $a = $_GET['inA'];
    $b = $_GET['inB'];
    // operacoes aritméticas
    $soma = $a + $b;
    $diferenca = $a - $b;
    $produto = $a * $b;
    $quociente = $a / $b;
    $resto = $a % $b;
    $potencia = $a ** $b;
    // devolver os resultados para o browsers
    print("$a + $b = $soma<br>");
    print("$a - $b = $diferenca<br>");
    print("$a * $b = $produto<br>");
    print("$a / $b = $quociente<br>");
    print("$a % $b = $resto<br>");
    print("$a ** $b = $potencia<br>");
    ?>
  </body>
</html>