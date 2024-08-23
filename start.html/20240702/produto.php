<?php
require("conexao.php");

if (isset($_GET['excluir']) && !empty($_GET['excluir'])) {
    $id = $_GET['excluir'];
    apagarCaracteristica($conexao, $id);
}

if (isset($_GET['editar']) && !empty($_GET['editar'])) {
    $id = $_GET['editar'];
    $caracteristica = buscarCaracteristica($conexao, $id);
}

if (isset($_POST['btnEditar'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    editarCaracteristica($conexao, $id, $nome, $descricao);
}

if (isset($_POST['btnPesquisar'])) {
    $termoPesquisa = $_POST['txtpesquisa'];
    $sql = "SELECT * FROM caracteristica WHERE nome LIKE '%$termoPesquisa%'";
} else {
    $sql = "SELECT * FROM caracteristica";
}

$res = mysqli_query($conexao, $sql);

require("conexao.php");

if (isset($_GET['excluir']) && !empty($_GET['excluir'])) {
    $id = intval($_GET['excluir']);
    apagarCaracteristica($conexao, $id);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}


function apagarCaracteristica($conexao, $id)
{
    $stmt = $conexao->prepare("DELETE FROM caracteristica WHERE id = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        echo "<div class='alert alert-success'>Registro ID $id apagado com sucesso</div>";
    } else {
        echo "<div class='alert alert-danger'>Erro ao tentar excluir o registro com ID $id: " . $stmt->error . "</div>";
    }
    $stmt->close();
}

function editarCaracteristica($conexao, $id, $nome, $descricao)
{
    $stmt = $conexao->prepare("UPDATE caracteristica SET nome = ?, descricao = ? WHERE id = ?");
    $stmt->bind_param("ssi", $nome, $descricao, $id);
    if ($stmt->execute()) {
        echo "<div class='alert alert-success'>Registro ID $id atualizado com sucesso</div>";
    } else {
        echo "<div class='alert alert-danger'>Erro ao tentar atualizar o registro com ID $id: " . $stmt->error . "</div>";
    }
    $stmt->close();
}



function buscarCaracteristica($conexao, $id)
{
    $sql = "SELECT * FROM caracteristica WHERE id = $id";
    $res = mysqli_query($conexao, $sql);
    return mysqli_fetch_assoc($res);
}
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
                echo "<td> <a class='btn btn-warning' href='" . $_SERVER['PHP_SELF'] . "?editar=" . $linha['id'] . "'><i class='fa-solid fa-pen-to-square'></i> Editar </a> </td>";
                echo "<td> <a class='btn btn-danger' href='" . $_SERVER['PHP_SELF'] . "?excluir=" . $linha['id'] . "'><i class='fa-solid fa-trash'></i> Excluir </a> </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <?php if (isset($caracteristica)) { ?>
    <h3 style="text-align: center;">Editar Característica</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="hidden" name="id" value="<?php echo $caracteristica['id']; ?>">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $caracteristica['nome']; ?>">
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="descricao" value="<?php echo $caracteristica['descricao']; ?>">
        </div>
        <button type="submit" name="btnEditar" class="btn btn-success">Salvar Alterações</button>
    </form>
    <?php } ?>

    <a class="btn btn-primary" href="cadastro.php">Cadastro</a>

</body>

</html>
