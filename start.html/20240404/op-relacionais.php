<?php
// busca os dados do formulário
$a = $_GET['inA'];
$b = $_GET['inB'];
//indicadores de valores
if ($a > $b) {
    print(" $a é maior que $b");
} else {
    print("$a não é maior que $b");
}
print("<br>");

if ($a == $b) {
    print(" $a é igual que $b");
} else {
    print("$a é diferente que $b");
}
