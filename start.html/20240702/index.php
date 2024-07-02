<?php
require("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Oline</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h3 style="text-align: center;"> Relação de Caracteristica</h3>
    <table border="1" class="table">
        <thead>
            <th>Nome</th>
            <th>Descrição</th>
        </thead>
        <tbody class="table mb-0">
            <td></td>
            <td></td>
            <?php carregarCaracteristicas($conexao);?>
        </tbody>
    </table>
    <a class="btn btn-primary" href="cadastro.php">Cadastro</a>
    <script src="https://kit.fontawesome.com/f882ebf8ff.js" crossorigin="anonymous"></script>
</body>

</html>
<?php
function carregarCaracteristicas($conexao){
 $sql = "SELECT * FROM caracteristica";
 $res = mysqli_query($conexao, $sql);
 while($linha= mysqli_fetch_assoc($res)){
    echo"<tr>";
    echo "<td>" . $linha ['nome'] . "</td>";
    echo"<td>" . $linha ['descricao'] ."</td>";
    echo"<td> <a class='btn btn-warning' href='#'><i class='fa-solid fa-pen-to-square'></i> Editar </a> </td>";
    echo"<td> <a class='btn btn-danger' href='#'> <i class='fa-solid fa-trash'></i> Excluir </a> </td>";

    
    echo"</tr>";
 }
}
?>
