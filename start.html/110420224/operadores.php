<html lang="pt">

<head>
    <title>Operações Aritméticas</title>
</head>

<body>
    <?php

    function soma($a, $b)
    {
        return $a + $b;
    }
    function diferenca($a, $b)
    {
        return $a - $b;
    }
    function produto($a, $b)
    {
        return $a * $b;
    }
    function quociente($a, $b)
    {
        return $a / $b;
    }
    function resto($a, $b)
    {
        return $a % $b;
    }
    function potencia($a, $b)
    {
        return $a ** $b;
    }
    function quocInt($a, $b)
    {
        return intdiv($a, $b);
    }

    if (isset($_GET['inOp'])) {
        // busca os dados do formulário
        $a = $_GET['inA'];
        $b = $_GET['inB'];
        switch ($_GET['inOp']) {
            case 'soma':
                print("$a + $b = " . soma($a, $b));
                break;
            case 'diferenca':
                print("$a - $b = " . diferenca($a, $b));
                break;
            case 'produto':
                print("$a * $b = " . produto($a, $b));
                break; case 'quociente':
                print("$a / $b = " . quociente($a, $b));
                break;
            case 'resto':
                print("$a % $b = " . resto($a, $b));
                break;
            case 'potencia':
                print("$a ** $b = " . potencia($a, $b));
                break;
            case 'quocInt':
                print("$a ** $b = " . quocInt($a, $b));
                break;
        }
    }

    ?>
</body>

</html>