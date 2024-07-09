<?php
require("conexao.php");

// Verificar se foi enviado o ID do registro a ser excluído
if (isset($_GET['excluir']) && !empty($_GET['excluir'])) {
    $id = $_GET['excluir'];

    // Chamar função para excluir a característica com o ID especificado
    apagarCaracteristica($conexao, $id);
}

// Lógica para pesquisa
if (isset($_POST['btnPesquisar'])) {
    $termoPesquisa = $_POST['txtpesquisa'];
    $sql = "SELECT * FROM caracteristica WHERE nome LIKE '%$termoPesquisa%'";
} else {
    $sql = "SELECT * FROM caracteristica";
}

$res = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f882ebf8ff.js" crossorigin="anonymous"></script>
</head>

<body>
    <h3 style="text-align: center;">Relação de Característica</h3>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" size="75%" name="txtpesquisa" placeholder="Pesquisar por nome">
        <button type="submit" name="btnPesquisar" class="btn btn-primary">Pesquisar</button>
    </form>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody class="table mb-0">
            <?php
            while ($linha = mysqli_fetch_assoc($res)) {
                echo "<tr>";
                echo "<td>" . $linha['nome'] . "</td>";
                echo "<td>" . $linha['descricao'] . "</td>";
                echo "<td> <a class='btn btn-warning' href='#'><i class='fa-solid fa-pen-to-square'></i> Editar </a> </td>";
                echo "<td> <a class='btn btn-danger' href='" . $_SERVER['PHP_SELF'] . "?excluir=" . $linha['id'] . "'><i class='fa-solid fa-trash'></i> Excluir </a> </td>";
                echo "</tr>";
            }
            function apagarCaracteristica($conexao, $id)
            {
                $sql = "DELETE FROM caracteristica WHERE id = $id";
                $res = mysqli_query($conexao, $sql);

                if ($res == TRUE) {
                    echo "Registro ID apagado com sucesso";
                } else {
                    echo "Erro ao tentar excluir o registro com ID $id: " . mysqli_error($conexao);
                }
            }
            function editarCaracteristica($conexao, $idCaracteristica)
            {
                $sql= "UPDATE caracteristica SET nome= '???' WHERE id= 'idCaracteristica'";
            }

            ?>

            
        </tbody>
    </table>

    <a class="btn btn-primary" href="cadastro.php">Cadastro</a>

</body>

</html>
