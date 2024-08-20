    <?php
        // busca os dados do formulário
        $a = $_GET['inA'];
        $b = $_GET['inB'];
        $c = $_GET['inC'];
        $tres = 3;
        $media = $a + $b + $c / $tres;

        print("$a + $b + $c / 3= $media<br>");

        if ($media > 10) {
            print(" Aprovado");
        } else if ($media < 7 || 5 ) {
            print("Em Exame");
        } else {
            print("Reprovado");
        }
        ?>
        <br>