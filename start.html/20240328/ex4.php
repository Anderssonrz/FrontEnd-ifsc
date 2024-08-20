<!doctype html>
<html lang="en">

<head>
  <title>Exemplo 4 php</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
<?php
$base_octal = 022;
$base_hexadecimal = 0xDC;

echo $base_octal."<br>";
echo $base_hexadecimal;

$cidade1 = "Joinville";
$cidade2 = 'São Miguel D\'Oeste ';

echo $cidade2.' é uma cidade do oeste catarinense';
echo "<br><br>";
echo $cidade1;
echo "<br><br>";
//listando os arquivos no windows
echo `dir /o /n *.php`;
?>
</body>

</html>