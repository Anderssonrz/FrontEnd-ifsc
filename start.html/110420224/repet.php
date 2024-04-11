<?php
$cidades = array(
    "Joinville",
    "São Paulo",
    "Manaus",
    "Fortaleza"
);
foreach ($cidades as $valor) {
    echo "Cidade: " . $valor . "<br>";
}
foreach ($cidades as $chave => $valor) {
    echo "Posição: " . $chave . ". Armazena: " . $valor . "<br>";
}
