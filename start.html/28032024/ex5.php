<!doctype html>
<html lang="en">

<head>
  <title>Exemplo 5 php</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
<?php
//1 – Faça um programa que faça a impressão de
// uma tabela HTML com 4 linhas por 4 colunas.

echo "<br><table border='1'>";
echo "<tr><th>Nome</th><th>Sobrenome</th><th>Idade</th><th>Tel</th></tr>";
echo "<tr><td>O</td><td>X</td><td>O</td><td>O</td></tr>";
echo "<tr><td>O</td><td>O</td><td>X</td><td>O</td></tr>";
echo "<tr><td>O</td><td>O</td><td>X</td><td>O</td></tr>";
echo "</table>";
//  2 – Faça impressão de todos os nomes dos estados
// do Brasil usando parágrafos para cada estado;

$estadosBrasileiros = array(
    'AC'=>'Acre',
    'AL'=>'Alagoas',
    'AP'=>'Amapá',
    'AM'=>'Amazonas',
    'BA'=>'Bahia',
    'CE'=>'Ceará',
    'DF'=>'Distrito Federal',
    'ES'=>'Espírito Santo',
    'GO'=>'Goiás',
    'MA'=>'Maranhão',
    'MT'=>'Mato Grosso',
    'MS'=>'Mato Grosso do Sul',
    'MG'=>'Minas Gerais',
    'PA'=>'Pará',
    'PB'=>'Paraíba',
    'PR'=>'Paraná',
    'PE'=>'Pernambuco',
    'PI'=>'Piauí',
    'RJ'=>'Rio de Janeiro',
    'RN'=>'Rio Grande do Norte',
    'RS'=>'Rio Grande do Sul',
    'RO'=>'Rondônia',
    'RR'=>'Roraima',
    'SC'=>'Santa Catarina',
    'SP'=>'São Paulo',
    'SE'=>'Sergipe',
    'TO'=>'Tocantins'
    );
?>
</body>

</html>