<pre><?php
$filename = "clientes.csv";
$file = fopen($filename, "r");
if ($file) {
    $arr = [];
    while (!feof($file)) {
        $line = fgets($file);
        $line = str_replace(["\n", "\r"], '', $line);
        if($line != ""){
            print("*$line*\n");

        }
        $record = explode(";",$line);
        print_r($record);
        array_push($arr, $record);
    }
    print_r($arr);
    $json = json_encode($arr);
    print_r("$json\n");
}
fclose($file);

// <?php
// $filename ="ajax.txt";
// $file = fopen("ajax.txt", "r") or die("Arquivo não encontrado");
// $conteudo = fread($file, filesize($filename));
// print ("$conteudo");
?></pre>