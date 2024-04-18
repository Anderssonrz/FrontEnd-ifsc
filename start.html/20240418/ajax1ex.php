<pre><?php
$filename = "clientes.csv";
$file = fopen($filename, "r");//tenta abrir arquivo
if ($file) {//verifica se o arquivo foi aberto
    $arr = [];
    while (!feof($file)) {// enquanto bnoa for final do arquivo
        $line = fgets($file);//le uma linha do arquivo
        $line = str_replace(["\n", "\r"], '', $line);//removo quebras de linha
        if($line != ""){//se a linha nao esta vazia 
            print("*$line*\n");

        }
        $record = explode(";",$line);//divide a string em pedacos
        $record[0] = intval($record[0]);
        print_r($record);//converte o codigo
        array_push($arr, $record);//adiciona o registro no codigo
    }
    print_r($arr);
    $json = json_encode($arr);//converte a array em json
    print_r("$json\n");
}
fclose($file);//fecha o arquivo

// <?php
// $filename ="ajax.txt";
// $file = fopen("ajax.txt", "r") or die("Arquivo não encontrado");
// $conteudo = fread($file, filesize($filename));
// print ("$conteudo");
?></pre>
