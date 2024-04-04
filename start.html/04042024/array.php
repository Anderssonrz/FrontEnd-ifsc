<pre>
<?php
$vetor = array(10,20,30);
print_r($vetor);

$qtd = count($vetor);
print("<br>qtd-$qtd</br>");

for ($i=0; $i < $qtd; $i++){
    print("$i=$vetor[$i]\n");
}
sort($vetor);
print_r($vetor);

?>
</pre>