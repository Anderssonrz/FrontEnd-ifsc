<?php
//verificar se houve submissao do formulario
if (isset($_GET['ini'])) {
    $i = $_GET['ini'];
    while ($i <= $_GET['fim']) {
        print("$i ");
        $i++;
    }
    //faz o inverso
    print("<br>");
    $ini = $_GET['ini'];
    $fim = $_GET['fim'];
    for ($i = $_GET['fim']; $i >= $_GET['ini']; $i--) {
        print("$i ");
    }
}
